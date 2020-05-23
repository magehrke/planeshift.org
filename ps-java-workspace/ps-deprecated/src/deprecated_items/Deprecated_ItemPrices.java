package deprecated_items;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

import deprecated_items.Deprecated_Item;

import java.lang.IllegalStateException;

public class Deprecated_ItemPrices {
	
	public ArrayList<Deprecated_Item> createItemPrices() {
		ArrayList<Deprecated_Item> items = new ArrayList<Deprecated_Item>();
		
		ArrayList<String> rawData = readItempricesFile();
		
		for(int i = 0; i < rawData.size(); i++) {
			String currLine = rawData.get(i);
			if(currLine.contains("for")) {
				//System.out.println(currLine);
				
				int indexOfFOR = currLine.lastIndexOf(" for ");
				
				String itemName = "";
				
				if(currLine.contains("\t")) {
					int indexOfTab = currLine.indexOf('\t');
					itemName = currLine.substring(0, indexOfTab - 1);
					//System.out.println(itemName);
				} else {
					itemName = currLine.substring(0, indexOfFOR);
					//System.out.println(itemName);
				}
				
				int itemPrice = Integer.parseInt(currLine.substring(indexOfFOR + 5, currLine.length() - 5));
				//System.out.println(itemPrice);
				
				items.add(new Deprecated_Item(itemName, itemPrice));

				
			}
		}
		
		//Check if two Items with the same name have different prices
		//(should not be the case, otherwise we would have to save the merchantnames)
		for(int j = 0; j < items.size(); j++) {
			Deprecated_Item item1 = items.get(j);
			
			for(int k = 0; k < items.size(); k++) {
				Deprecated_Item item2 = items.get(k);
				
				if(item1.getName().equals(item2.getName())) {
					if(item1.getPrice() != item2.getPrice()) {
						throw new IllegalStateException("Message: Different Prices with: " + item1.getName());
					}
				}
			}
			
		}
		
		return items;
	}

	public ArrayList<String> readItempricesFile() {
		
		ArrayList<String> list = new ArrayList<String>();
		File file = new File(utilities.Constants.PATHforSQLoutput + "/kov-item-prices.txt");
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
	
}
