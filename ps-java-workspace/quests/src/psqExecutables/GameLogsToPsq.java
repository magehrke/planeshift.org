package psqExecutables;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;

import utilities.Pair;

/**
 * Execute this file to convert a PlaneShift game log into a PlaneShift quest files (.psquest).
 * 
 * PREREQUISITS IN GAME:
 * For this to work, not everything is allowed to get logged. In the planeshift settings
 * one can define multiple log files and specify where which things shall be logged.
 * Go to Options -> Interface -> Chat - Logs.
 * 		- For CHAT_NPC: enable logging, write "quest.txt" as filename, write "[NPC]" as Log Bracket and enable quest logging
 * 		- For CHAT_NPC_ME: enable logging, write "quest.txt" as filename, write "[NPC ME]" as Log Bracket
 * 		- For CHAT_NPC_MY: enable logging, write "quest.txt" as filename, write "[NPC MY]" as Log Bracket
 * 		- For CHAT_NPC_NARRATE: enable logging, write "quest.txt" as filename, write "[NPC NARRATE]" as Log Bracket
 * 		- For CHAT_NPC_INTERNAL: enable logging, write "quest.txt" as filename, write "[NPC INTERNAL]" as Log Bracket
 * 
 * 		- For CHAT_SYSTEM: enable logging, write "system.txt" as filename, write "[SYSTEM]" as Log Bracket
 * 		- For CHAT_SYSTEM_BASE: enable logging, write "system.txt" as filename, write "[SYSTEM BASE]" as Log Bracket
 * Make sure that no other CHAT_ has "quest.txt" or "system.txt" as log filename
 * 
 * After you have done a quest in game, create an empty file and go to your logs.
 * From the "quest.txt" file copy all the dialog from the point on you spoke to the NPC who gave you the quest.
 * Beyond that copy from "system.txt" the rewards that you got at the end, 
 * including the line which states the quest you just finished (should be one block).
 * If you got any items, money, etc. in between, also copy the lines.
 * Add [Give], [Time], [To], [Info] lines with information, where you think we need some.
 * Add [Need] either now, or later when you executed this file (all the [Need] tags will get created)
 * 
 * It is important to only do the quest and not talk to any other NPCs in between.
 * If you do so, you have to delete those lines manually after execution of this file.
 * A lot of lines that the NPC's say if you walk by or if you fly with the petrosaurs will be automatically deleted.
 * 
 * Please always check with the logs you still have in game, if the psq file has been correctly created
 * 
 * @author Huarwar Eruera
 *
 */

public class GameLogsToPsq {

	public static void main(String[] args) {
		
		String dir = utilities.Constants.PATHtoDATA + "/convert-game-logs-to-psquest/";
		
		// Get the raw log .txt files
		ArrayList<String> filenames = readFileNames(dir);
	    
		// Iterate over all raw .txt files
	    for (int i = 0; i < filenames.size(); i++) {
    		// Only create .psquest file, if not already exists
    		if(!(new File(dir + filenames.get(i).substring(0, filenames.get(i).length()-4) + ".psquest")).exists()) {
    			parseQuestFile(dir, filenames.get(i));
    		}
    		System.out.println("Nothing more to convert!");
	    }
	}
	
	// #############################################
	
	public static ArrayList<String> readFileNames(String dir) {
		
		// Delete .DS_Store if it exists
		File DS_Store = new File(dir + ".DS_Store");
		if(DS_Store.exists()) {
			DS_Store.delete();
		}
		
		// Read the filenames
		File folder = new File(dir);
		File[] listOfFiles = folder.listFiles();

		ArrayList<String> filenames = new ArrayList<String>();
		
	    for (int i = 0; i < listOfFiles.length; i++) {
		    	String currFileName = listOfFiles[i].getName();
		    	// Don't add the readme file
		    	if(currFileName.toLowerCase().equals("readme.txt")) {
		    		continue;
		    	// Don't add .psquest files that have already been converted
		    	} else if(currFileName.toLowerCase().endsWith(".psquest")) {
		    		continue;
		    	} else {
		    		filenames.add(currFileName);
		    	}
		}
	    
	    return filenames;
	}
	

	// #############################################
	
	public static void parseQuestFile(String dir, String filename) {
		File questfile = new File(dir + filename);
		ArrayList<String> lines = readQuestFile(questfile);
		ArrayList<String> linesNew = new ArrayList<String>();
		
		// Delete empty rows
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.replaceAll("\\s+", "").equals("")) {
				// do nothing -> delete the row
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		// Add empty rows [Give], [Time], [To]
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.contains("[Give]") || currLine.contains("[Time]") || currLine.contains("[To]") || currLine.contains("[Info]")) {
				linesNew.add("");
				linesNew.add(currLine);
				linesNew.add("");
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		// Delete the stimestap when you crashed and reload
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.startsWith("================================================")) {
				l += 2; // delete not only this line, but also the next 2
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		// Delete Ptetrosaur Travel
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.contains("I would like a Pterosaur ride.")) {
				// If we are here, we found a Pterosaur ride.
				// Now we need to delete everything until the end
				// The end includes "Jump on board"
				for(int m = l+1; m < lines.size(); m++) {
					String endLine = lines.get(m);
					if(endLine.contains("Jump on board")) {
						l = m;
						break;
					}
					
				}
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		
		// Delete various repeating Lines of NPC
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(
					   currLine.contains("[NPC] Trasok Starhammer says: Welcome! Mind the smoke.")
					|| currLine.contains("[NPC] Trasok Starhammer says: Welcome! I've just completed another fine blade, if that's your fancy.")
					|| currLine.contains("[NPC] Krestal Dhusho says: All day everyday... "
							+ "Pterosaur travel is available from here to Ojaveda, Gugrontid, and Amdeneir. "
							+ "Come and speak with me if you are interested.")
					|| currLine.contains("[NPC] Bevon Damerr says: Hail, greetings.")
					|| currLine.contains("[NPC] Finara Plund says: All is well.")
					|| currLine.contains("[NPC] Bevon Damerr says: Hail, greetings.")
					|| currLine.contains("[NPC] Finara Plund says: All is well.")
					|| currLine.contains("[NPC] Finara Plund says: Another lovely day in Hydlaa.")
					|| currLine.contains("[NPC] Remant Tovere says: Don't forget to...obey the...something. What was it again? Oh yes, the law. "
							+ "In Hydlaa! Well, and I suppose anywhere else.")
					|| currLine.contains("[NPC] Levrus Dahrenn says: My library upstairs has a unique selection of books not to be found anywhere else.")
					|| currLine.contains("[NPC ME] Expert Gladiator watches Huarwar Eruera and prepares to fight")
					|| currLine.contains("Fancy some fresh fish, friend?")
					|| currLine.contains("Potted plants! Get your potted plants! Great for any home or guildhouse! Come on, grab a plant, you know you want to.")
					|| currLine.contains("The dark corners of Hydlaa are filled with beasts in their webs waiting for you to turn your back!!")
					|| currLine.contains("Good day, citizen. Adhere to the laws and don't draw your weapons while in the city.")
					|| currLine.contains("Keep your weapons sheathed while in Hydlaa, citizen.")
					|| currLine.contains("Injured in battle or low on mana? I've got what you need.")
					|| currLine.contains("Good Klyros, have you tried one of my fresh pies yet?")
					|| currLine.contains("Blades, shields, repair kits! Get them here!")
					|| currLine.contains("[NPC] Trepor says: zZz... zZz...")
					|| currLine.contains("[NPC] Trepor says: WHEEEEE!")
					|| currLine.contains("[NPC ME] Trepor attacks Huarwar Eruera with normal stance")
					|| currLine.contains("[NPC] Serpent Gobble says: Bad, bad. You bad.")
					|| currLine.contains("[NPC ME] Serpent Gobble attacks Huarwar Eruera with normal stance")
					|| currLine.contains("[NPC ME] Riverling thinks Huarwar Eruera is strong")
					|| currLine.contains("[NPC] Moren Findel says: Good day, citizen. Adhere to the laws and don't draw your weapons while in the city.")
					|| currLine.contains("[NPC] Nkaw says: This is the Eagle Bronze Doors. Friends are welcome. Foes approach at their own peril.")
					|| currLine.contains("[NPC ME] Dark Rogue attacks Huarwar Eruera with normal stance")
					|| currLine.contains("[NPC] Dark Rogue says: Help me out!")
					|| currLine.contains("[NPC] Taemian Yangnk says: Hello, friend. You look like a discerning Klyros with good taste in high-quality armours, weapons and repair kits like I have here.")
					|| currLine.contains("[NPC] Aldaaren Phostle says: The end is near!")
					|| currLine.contains("[NPC] Menlil Toresun says: May Laanx frighten the shadow from thy path.")
					|| currLine.contains("[NPC] Finara Plund says: Nothing to see here, move along.")
					
					) {
				// do nothing -> the line will be deleted
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		

		
		/*
		 * QUEST NPC
		 * The first NPC which appears will be 
		 * assigned as the Quest NPC
		 */
		String questNPC = "";
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.contains("[NPC]")) {
				questNPC = currLine.substring(17, currLine.indexOf("says:") - 1);
//				System.out.println(questNPC);
				break;
			}
		}
		

		
		/*
		 * INSERT [To] STATEMENT
		 * Herefor we need the timestamps at the
		 * bigging of each line, why it is im-
		 * portant to delete it after this step
		 */
		SimpleDateFormat parser = new SimpleDateFormat("HH:mm:ss");

		String currNPC =  "";
		String nextNPC;
		String timestamp = "";
		
		int timestampLine = 0;
		
		for(int m = 0; m < lines.size(); m++) {
			String currLine = lines.get(m);
			if(currLine.contains("[NPC]")) {
				nextNPC = currLine.substring(17, currLine.indexOf("says:") - 1);
//				System.out.print(currNPC + ", ");
//				System.out.println(nextNPC);

				if(! nextNPC.equals(currNPC)) {
					timestamp = currLine.substring(1, 9);
//					System.out.println(timestamp);
					
					for(int n = timestampLine; n <= m; n++) {
						String searchLine = lines.get(n);
						
						try {
							// If the Line starts With "(" it has a Date
							// We can only parse the line, if it is longer 9 or longer
							if(searchLine.startsWith("(") && currLine.charAt(9) == ')' && searchLine.length() >= 9) {
								Date baseTime = parser.parse(timestamp);
								Date currTime = parser.parse(searchLine.substring(1, 9));
								long timeDiff = currTime.getTime() - baseTime.getTime();
								// If the difference is 10secs or less, 
								// than it's a new NPC, so we add a [To]
								if(Math.abs(timeDiff) <= 10000) {
									linesNew.add("");
									linesNew.add("[To] " + nextNPC);
									linesNew.add("");
									linesNew.add(searchLine);
									m = n + 1;
									currNPC = nextNPC;
									timestampLine = n+1;
									break;
									
								} else {
									linesNew.add(searchLine);
								}
							} else {
								linesNew.add(searchLine);
							}
						} catch (ParseException e) {
						    e.printStackTrace();
						}
						
						
						
						

					}
				}
			}
		}
		// Add the last lines
		for(int m = timestampLine; m < lines.size(); m++) {
			String currLine = lines.get(m);
			linesNew.add(currLine);

		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		

		
		// GET QUESTNAME
		// [SYSTEM]
		String questname = "";
		ArrayList<String> rewardItems = new ArrayList<String>();
		ArrayList<String> rewardFaction = new ArrayList<String>();
		ArrayList<Pair<Integer, String>> rewardSkills = new ArrayList<Pair<Integer, String>>();
		String rewardXP = "";
		String rewardMoney = "";

		for(int m = 0; m < lines.size(); m++) {
			String currLine = lines.get(m);
			// Questname
			if(currLine.contains("[System] >You have completed the")) {
				int startIndex = currLine.indexOf("[System] >You have completed the") + 33;
				int endIndex = currLine.indexOf("quest") - 1;
				questname = currLine.substring(startIndex, endIndex);
//				System.out.println(currLine.substring(startIndex, endIndex));
				// Delete the line with the Questname (probably the last)
			} else if (currLine.contains("Quest Completed!")){
				// Do nothing -> deletes the line
			// Items
			} else if (currLine.contains("[System] >You have received ")){
				int startIndex = currLine.indexOf("[System] >You have received ") + 28;
				int endIndex = currLine.length() - 1;
				rewardItems.add(currLine.substring(startIndex, endIndex));
//				System.out.println(currLine.substring(startIndex, endIndex));
			// Faction / Association
			} else if (currLine.contains("[System] >Your faction with ")){
				int startIndex = currLine.indexOf("[System] >Your faction with ") + 28;
				int endIndex = currLine.length() - 14;
				rewardFaction.add(currLine.substring(startIndex, endIndex));
//				System.out.println(currLine.substring(startIndex, endIndex));
			// XP
			} else if (currLine.contains("experience points")){
				int startIndex = currLine.indexOf("[System] >You gained ") + 21;
				int endIndex = currLine.indexOf("experience points") - 1;
				rewardXP = "[Reward XP] " + currLine.substring(startIndex, endIndex);
//				System.out.println(currLine.substring(startIndex, endIndex));
			// Reward Skills
			} else if (currLine.contains("[System] >Your ") && currLine.contains("skill") && currLine.contains("by")){
				int startSkill = currLine.indexOf("[System] >Your ") + 15;
				int endSkill = currLine.substring(startSkill).indexOf("skill") - 1 + startSkill;
				int startAmount = currLine.indexOf("by") + 3;
				int endAmount = currLine.substring(startAmount).indexOf(" ") + startAmount;
//				System.out.println(startSkill + " " + endSkill + " " + startAmount + " " + endAmount);
				String skill = currLine.substring(startSkill, endSkill);
				Integer amount = Integer.parseInt(currLine.substring(startAmount, endAmount));
				rewardSkills.add(new Pair<Integer, String>(amount, skill));
//				System.out.println("Skill: \"" + amount + "\" \"" + skill + "\"");
			// Money
			} else if (currLine.contains("[System] >You received ")){
				int startIndex = currLine.indexOf("[System] >You received ") + 23;
				int endIndex = currLine.length();
				String moneyString = currLine.substring(startIndex, endIndex);
				int moneyAmount = 0;
				
				while(moneyString.contains(",") || moneyString.contains("and") || moneyString.contains(".")){
					int spaceIndex = moneyString.indexOf(' ');
					int amount = Integer.parseInt(moneyString.substring(0, spaceIndex));
//					System.out.println(moneyString.substring(0, spaceIndex));
					String moneySize;
					if(moneyString.contains(",")) {
						int colIndex = moneyString.indexOf(',');
						moneySize = moneyString.substring(spaceIndex+1, colIndex);
//						System.out.println(moneySize);
						moneyString = moneyString.substring(colIndex+2);
//						System.out.println(moneyString);
					} else if(moneyString.contains("and")) {
						int andIndex = moneyString.indexOf("and");
						moneySize = moneyString.substring(spaceIndex+1, andIndex-1);
//						System.out.println(moneySize);
						moneyString = moneyString.substring(andIndex+4);
//						System.out.println(moneyString);

					} else {
						int pointIndex = moneyString.indexOf(".");
						moneySize = moneyString.substring(spaceIndex+1, pointIndex);
//						System.out.println(moneySize);
						// the moneyString here should always be empty
						// so the while loop will end after this iteration
						moneyString = moneyString.substring(pointIndex+1);
//						System.out.println(moneyString);
					}
					
					if(moneySize.equals("circle")) {
						moneyAmount += 250 * amount;
					} else if(moneySize.equals("octa")) {
						moneyAmount += 50 * amount;
					} else if(moneySize.equals("hexa")) {
						moneyAmount += 10 * amount;
					} else if(moneySize.equals("tria")) {
						moneyAmount += amount;
					}
//					System.out.println(moneyAmount);
				}
				rewardMoney = "[Reward Money] " + moneyAmount;
//				System.out.println(currLine.substring(startIndex, endIndex));
			} else {
				linesNew.add(currLine);
			}

		}
		// Add empty line + rewardXP + rewardMoeny
		linesNew.add("");
		linesNew.add(rewardXP);
		linesNew.add(rewardMoney);
		
		// Add [Reward Skills]
		StringBuffer sb = new StringBuffer();
		sb.append("[Reward Skills]");
		for(int j = 0; j < rewardSkills.size(); j++) {
			if(j != 0) {
				sb.append(";");
			}
			
			Integer amount = rewardSkills.get(j).getFirst();
			String skill = rewardSkills.get(j).getSecond();
			
			
			sb.append(" " + amount);
			sb.append(", " + skill);
		}
		linesNew.add(sb.toString());
		
		// Add [Reward Items]
		sb = new StringBuffer();
		sb.append("[Reward Items]");
		for(int j = 0; j < rewardItems.size(); j++) {
			if(j != 0) {
				sb.append(";");
			}
			
			String reward = rewardItems.get(j);
			
			int spaceIndex = reward.indexOf(" ");
			
			// replace an a with a 1
			String amount;
			if(reward.substring(0, spaceIndex).equals("a")) {
				amount = "1";
			} else {
				amount = reward.substring(0, spaceIndex);
			}
			
			sb.append(" " + amount);
			sb.append(", " + reward.substring(spaceIndex + 1));
		}
		linesNew.add(sb.toString());
		
		
		// Add [Reward Associations]
		
		sb = new StringBuffer();
		sb.append("[Reward Associations]");
		for(int j = 0; j < rewardFaction.size(); j++) {
			if(j != 0) {
				sb.append(";");
			}
			sb.append(" , " + rewardFaction.get(j));
		}
		linesNew.add(sb.toString());
		
		
		lines = linesNew;
		linesNew = new ArrayList<String>();	
		
		// Set Questname, NPC Name, Prequests, Need
		linesNew = lines;
		lines = new ArrayList<String>();
		lines.add("[Questname] " + questname);
		lines.add("[NPC Name] " + questNPC);
		
		SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
		Date date = new Date();
		lines.add("[Checkup] " + dateFormat.format(date));
		lines.add("[Prequests]");
		lines.add("[Need Items]");
		lines.add("[Need Skills]");
		lines.add("[Need Winch]");
		lines.addAll(linesNew);
		linesNew = new ArrayList<String>();	
		
		// Delete the Time Stamps at the beginning
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.startsWith("(") && currLine.charAt(9) == ')') {
				linesNew.add(currLine.substring(11));
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		// Delete the NPC Names
		for(int l = 0; l < lines.size(); l++) {
			String currLine = lines.get(l);
			if(currLine.contains(" says: ") && currLine.contains("[NPC Internal]")) {
				int beginIndex = currLine.indexOf("]") + 2;
				int endIndex = currLine.indexOf(" says: ") + 7;
				linesNew.add(currLine.substring(0, beginIndex) + currLine.substring(endIndex, currLine.length()));
			// Delete the lastname of the NPCs, but keep the firstnames plus ":"
			} else if(currLine.contains(" says: ") && currLine.contains("[NPC]")) {
				int beginIndex = currLine.indexOf("]") + 2;
				int spaceIndex = currLine.substring(beginIndex).indexOf(" ") + beginIndex;
				int endIndex = currLine.indexOf(" says: ") + 5;
				linesNew.add(currLine.substring(0, spaceIndex) + currLine.substring(endIndex, currLine.length()));
			} else {
				linesNew.add(currLine);
			}
		}
		lines = linesNew;
		linesNew = new ArrayList<String>();
		
		
		
//		// ###########PRINT ON THE CONSOLE#########
//		for(int i = 0; i < lines.size(); i++) {
//			System.out.println(lines.get(i));
//		}
//		// ########################################
		
		
		try {
			// Create new file
			File file = new File(dir + questname + ".psquest");
			
			// if file doesn't exist, create it
			if (! file.exists()) {
				file.createNewFile();
			} else {
				// if it exists, throw exception, because we don't want to override it
				throw new IOException("The file \"" + file + "\" exists already! We don't want to override it.");
			}
			
			FileWriter fw = new FileWriter(file.getAbsoluteFile());
			BufferedWriter bw = new BufferedWriter(fw);
			
			for(int y = 0; y < lines.size(); y++) {
				bw.append(lines.get(y) + "\n");
			}
			
			bw.close();
			
			System.out.println("Created File: " + file.getAbsolutePath());
			
			
			// Rename current txt file with the questname
			File txt_file = new File (dir + questname + ".txt");
			if(! txt_file.exists()) {
				questfile.renameTo(txt_file);
				System.out.println("Renamed txt file to: " + txt_file.getAbsolutePath());
			}
			
			
			
			

		} catch (IOException e) {
			e.printStackTrace();
		}
		
		
	}
	
	
	
	// #############################################
	
	//Read the lines from the quest file
	public static ArrayList<String> readQuestFile(File questfile) {
	
		ArrayList<String> list = new ArrayList<String>();
		
		BufferedReader reader = null;
		
		try {
			reader = new BufferedReader(new FileReader(questfile));
			String text = null;
			
			while ((text = reader.readLine()) != null) {
				list.add(text);
			}
		} catch (FileNotFoundException e) {
			e.printStackTrace();
			// Stop the program, as we dont want to create empty files
			System.exit(0);
		} catch (IOException i) {
			i.printStackTrace();
		} finally {
			try {
				if (reader != null) {
					reader.close();
				}
			} catch (IOException e) {
			}
		}
		
		System.out.println("Opened File: " + questfile.getAbsolutePath());
		
		return list;
	}

}
