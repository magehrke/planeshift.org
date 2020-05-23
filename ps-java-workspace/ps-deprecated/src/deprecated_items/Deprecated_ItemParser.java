package deprecated_items;

import java.util.*;
import java.io.File;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.lang.StringBuffer;
import java.io.BufferedWriter;

public class Deprecated_ItemParser {
	
	ArrayList<Deprecated_Item> itemPrices;
	
	public Deprecated_ItemParser(ArrayList<Deprecated_Item> itemPrices) {
		this.itemPrices = itemPrices;
	}
	
	public ArrayList<String> linesForFile = new ArrayList<String>();
	
	public ArrayList<String> readFile() {
	
		ArrayList<String> list = new ArrayList<String>();
		File file = new File(utilities.Constants.PATHforSQLoutput + "/kov-items.txt");
		BufferedReader reader = null;
	
		try {
		    reader = new BufferedReader(new FileReader(file));
		    String text = null;
	
		    while ((text = reader.readLine()) != null) {
		        list.add(text);
		    }
		} catch (FileNotFoundException e) {
		    e.printStackTrace();
		} catch (IOException e) {
		    e.printStackTrace();
		} finally {
		    try {
		        if (reader != null) {
		            reader.close();
		        }
		    } catch (IOException e) {
		    }
		}
	
		return list;

	}
	
	public void identifyLines(ArrayList<String> list) {
		
		String currentItem = "";

		for(int i = 0; i < list.size(); i++) {
			String currLine = list.get(i);
			
			if(currLine.startsWith("\t<tr><td><h3>")){
				finishcurrentItemCategorySec();
				
				writeItemCategory(utilities.Helpfunctions.checkString(currLine.substring(13, currLine.length() - 15)));
			}
			
			else if(currLine.startsWith("\t<tr><td><img")){
				int startingIndex = currLine.indexOf("&nbsp;") + 6;
				currentItem = utilities.Helpfunctions.checkString(currLine.substring(startingIndex, currLine.length() - 5));
			}
			
			else if(currLine.startsWith("\t<tr><td>")){
				currentItem = utilities.Helpfunctions.checkString(currLine.substring(9, currLine.length() - 5));
				continue;
			}
			
			else if(currLine.startsWith("\t\t\t<a href=")) {
				int startingIndex = currLine.indexOf("title=\"Info\">") + 13;
				String merchantName = utilities.Helpfunctions.checkString(currLine.substring(startingIndex, currLine.length() - 4));
				
				StringBuffer sb = new StringBuffer("\t\t'");
				sb.append(currentItem);
				sb.append("', '");
				sb.append(merchantName);
				sb.append("', ");
				
				int itemPrice = 0;
				
				for(int k = 0; k < itemPrices.size(); k++) {
					Deprecated_Item itemForPrice = itemPrices.get(k);
					if(utilities.Helpfunctions.checkString(itemForPrice.getName()).equals(currentItem)){
						itemPrice = itemForPrice.getPrice();
						break;
					}
				}
				
				sb.append(itemPrice);
				sb.append(", 'none',");
				linesForFile.add(sb.toString());
				
			}
			
		}
	}
	
	public void finishcurrentItemCategorySec() {
		linesForFile.add("\t\t);");
		linesForFile.add("");
		linesForFile.add("\tfor($i = 0; $i < count($items_to_insert); $i += 4) {");
		linesForFile.add("\t\t$items_query = \"INSERT INTO items (name, category, npc, price, checkup)");
		linesForFile.add("\t\t\t\t\t\tVALUES ('\" . $items_to_insert[$i] . \"', '\" . $item_category");
		linesForFile.add("\t\t\t\t\t\t. \"', '\" . $items_to_insert[$i+1] . \"', \" . $items_to_insert[$i+2]");
		linesForFile.add("\t\t\t\t\t\t. \", '\" . $items_to_insert[$i+3] . \"')\";");
		linesForFile.add("\t\t$mysqli->query($items_query) or die($mysqli->error);");
		linesForFile.add("\t}");
		linesForFile.add("");
	}
	
	public void writeItemCategory(String itemCategory) {
		StringBuffer firstLineSB = new StringBuffer("\t$item_category = '");
		firstLineSB.append(itemCategory);
		firstLineSB.append("';");
		linesForFile.add(firstLineSB.toString());
		
		linesForFile.add("");
		linesForFile.add("\t$items_to_insert = array(");
	}
	
	public void writeLinesToFile(BufferedWriter bw) throws IOException {
		
			
			//i has to be 10, since the first two lines come from
			//fineshcurrentItemCategorySec() which we don't need 
			//in our first ItemCategorySection
			//they will be added at the end
			for(int i = 10; i < linesForFile.size(); i++) {
				bw.append(linesForFile.get(i));
				bw.newLine();
			}
			
			//add the first two lines ad the end
			//because there we need to end a section
			for(int j = 0; j < 10; j++) {
				bw.append(linesForFile.get(j));
				bw.newLine();
			}

	}
	
}
