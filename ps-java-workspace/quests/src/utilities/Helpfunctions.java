package utilities;

import java.awt.IllegalComponentStateException;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

import javax.swing.JFrame;
import javax.swing.JOptionPane;

public class Helpfunctions {
	
	public static String checkString(String stringToCheck) {	
		return stringToCheck.replace("'", "&apos;");
	}
	
	/**
	 * NOTE: The file "npc.csv" has to exist with all the npc names, one in every line.
	 * @return The names of all npc people in the game Planeshift.
	 */
	public static ArrayList<String> getNamesOfNpcPeople() {
		 ArrayList<String> npcs = new ArrayList<String>();
		 ArrayList<String> fileLines = utilities.Helpfunctions.readLinesOfFile(utilities.Constants.PATHtoDATA + "/npcs.csv");
		 for(int i = 0; i < fileLines.size(); i++) {
			 String npc = fileLines.get(i).trim();
			 npcs.add(npc);
		 }
		 return npcs;
	}
	
	public static boolean doesNpcExist(String npcname) {
		ArrayList<String> npcs = utilities.Helpfunctions.getNamesOfNpcPeople();
		return npcs.contains(npcname);
	}
	
	public static ArrayList<String> readLinesOfFile(String filename) {
	
		ArrayList<String> fileLines = new ArrayList<String>();
		File file = new File(filename);
	
		BufferedReader reader = null;
		try {
			reader = new BufferedReader(new FileReader(file));
			String text = null;
	
			while ((text = reader.readLine()) != null) {
				fileLines.add(text);
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
		
		return fileLines;
	}
	
	public static void surveyAndCorrectLineInFile(ArrayList<String> fileLines, int selectedLine, String filepath) throws IOException, IllegalComponentStateException {
		
		for(int i = 0; i < fileLines.size(); i++) {
			if(i == selectedLine) {
				System.out.println("############### HERE ###############");
			}
			System.out.println(fileLines.get(i));
		}
		
		
		String oldLineText = fileLines.get(selectedLine);
	    String newLineText = null;
	    
		JFrame frame = new JFrame("Line Change Dialog");

	    try {
		    newLineText = JOptionPane.showInputDialog(frame, 
		    		"Not readable line:",
		    		oldLineText);
	    } catch (IllegalComponentStateException e) {
	    		
	    }
	    
		FileWriter fw = new FileWriter(filepath);
		BufferedWriter bw = new BufferedWriter(fw);
		
		for(int i = 0; i < fileLines.size(); i++) {
			if(i == selectedLine) {
				
			    // get the user's input. note that if they press Cancel, 'newLineText' will be null
			    if(newLineText == null) {
			    		bw.append(oldLineText).append("\n");
		    			System.out.printf("We kept the old line: '%s'.\n", oldLineText);
			    } else {
		    			bw.append(newLineText).append("\n");
		    			System.out.printf("The new line is: '%s'.\n", newLineText);
			    }
				
			}
			else {
				bw.append(fileLines.get(i)).append("\n");
			}
		}
		
		bw.close();
		
		
	}

}
