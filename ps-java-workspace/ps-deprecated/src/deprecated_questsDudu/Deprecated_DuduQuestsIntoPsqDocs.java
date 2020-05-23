package deprecated_questsDudu;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import utilities.Pair;

@Deprecated
public class Deprecated_DuduQuestsIntoPsqDocs {
	
	private static ArrayList<String> npcNames;
	private static int countNotMatching = 0;
	
	private static String currNpcFullName = "";
	private static String currNpcFirstName = "";
	
	private static String questNPC = "";
	private static String questName = "";
	
	private static boolean isRepeatable = false;
	
	// IMPORTANT: At reward/need lines, we also added those 
	// Items with an s at the end e.g. diamond crystals instead 
	// of diamond crystal
	@Deprecated
	public static void executeConversion(String[] args) throws IOException {
		String oldQuestsFolder = "";
		String newQuestFolder = utilities.Constants.PATHtoQUESTfiles;

		// Delete .DS_Store if it exists
		File DS_Store = new File(oldQuestsFolder + "/.DS_Store");
		if (DS_Store.exists()) {
			DS_Store.delete();
		}

		// Read the filenames in the folder with the Quests
		File folder = new File(oldQuestsFolder);
		File[] listOfFiles = folder.listFiles();

		ArrayList<String> filenames = new ArrayList<String>();

		for (int i = 0; i < listOfFiles.length; i++) {
			String currFileName = listOfFiles[i].getName();
			filenames.add(currFileName);
		}

		npcNames = utilities.Helpfunctions.getNamesOfNpcPeople();

		// Iterate over all the quests
		for (int i = 0; i < filenames.size(); i++) {

			// Get the current quest file we are investigating
			String currFileName = filenames.get(i);
			
			StringBuffer sb = new StringBuffer();

			ArrayList<String> rawQuestDetails = utilities.Helpfunctions.readLinesOfFile(oldQuestsFolder + '/' + currFileName);
			
			boolean isLastLineEmpty = false;
			boolean foundNeededLine = false;
			boolean isQuestNpcSet = false;
			isRepeatable = false;
			
			questName = rawQuestDetails.get(0).trim();

			for (int j = 1; j < rawQuestDetails.size(); j++) {
				String currLine = rawQuestDetails.get(j).trim();

				if (currLine.isEmpty())
					continue;
				else if (currLine.toLowerCase().startsWith("⇒ needed:")) {
					examineNeedLine(sb, currLine, currFileName, isLastLineEmpty);
					foundNeededLine = true;
					isLastLineEmpty = true;
				} else if (currLine.toLowerCase().contains("quest completed"))
					continue;
				else if (currLine.toLowerCase().startsWith("reward")) {
					examineRewardLine(sb, currLine, currFileName, isLastLineEmpty);
					isLastLineEmpty = true;
				}
				else if (currLine.equals("—-"))
					continue;

				else if (currLine.startsWith("→ to") || currLine.startsWith("→to")) {
					examineGotoLine(sb, currLine, isLastLineEmpty, isQuestNpcSet, currFileName);
					isLastLineEmpty = true;
					isQuestNpcSet = true;
				}
				
				else if(currLine.toLowerCase().startsWith("-information:")) {
					if(currLine.endsWith("-")) currLine = currLine.substring(0, currLine.length()-1);
					currLine = currLine.substring(13).trim();
					if(!isLastLineEmpty) sb.append("\n");
					sb.append("[Info] ").append(currLine).append("\n\n");
					isLastLineEmpty = true;
				}
				
				else if(currLine.startsWith("-") && currLine.endsWith("-")) {
					sb.append("[NPC Narrate] ").append(currLine).append("\n");
					isLastLineEmpty = false;
				}
				
				else if(currLine.startsWith("-")) {
					sb.append("[NPC ME] ").append(currLine.substring(1).trim()).append("\n");
					isLastLineEmpty = false;
				}
				
				else if(currLine.startsWith("NPC:")) {
					currLine = currLine.substring(4).trim();
					sb.append("[NPC] ").append(currNpcFirstName).append(": ").append(currLine).append("\n");
					isLastLineEmpty = false;
				}
				
				else if(currLine.startsWith("YOU:")){
					currLine = currLine.substring(4).trim();
					sb.append("[NPC Internal] ").append(currLine).append("\n");
					isLastLineEmpty = false;
				} 
				
				else if(currLine.startsWith("Note:")) {
					if(!isLastLineEmpty) sb.append("\n");
					sb.append("[Info] ").append(currLine.substring(5).trim()).append("\n\n");
					isLastLineEmpty = true;
				}
				
				// Format → give [Number] [Item], ... , [Number] [Item] to [NPC]
				else if(currLine.startsWith("→ give")) {
					examineGiveLine( sb,  currLine,  isLastLineEmpty, isQuestNpcSet, currFileName);
					isLastLineEmpty = true;
					isQuestNpcSet = true;
				}
				
				else if(currLine.startsWith("⇒")) {					
					currLine = currLine.substring(1).trim();
					
					String firstWord = currLine.substring(0, currLine.indexOf(" ")).trim();
					int amount = 0;
					if(firstWord.toLowerCase().equals("two")) {
						amount = 2;
					} else if(firstWord.toLowerCase().equals("three")) {
						amount = 3;
					} else if(firstWord.toLowerCase().equals("four")) {
						amount = 4;
					} else {
						System.out.println("ERROR: Wrong input number at possible ways (file: " + currFileName + ").");
					}

					sb.append("\n[Possible Ways] ").append(String.valueOf(amount)).append("\n\n");
					isLastLineEmpty = true;

				}
				else if(currLine.toLowerCase().contains("all ways")) {
					if(!isLastLineEmpty) sb.append("\n");
					sb.append("[Way] All\n\n");
					isLastLineEmpty = true;
				}
				
				else if(currLine.toLowerCase().contains("way")) {
					ArrayList<Integer> nums = new ArrayList<Integer>();
					if(currLine.toLowerCase().equals("first way")) {
						nums.add(1);
					} else if(currLine.toLowerCase().equals("second way")) {
						nums.add(2);
					} else if(currLine.toLowerCase().equals("third way")) {
						nums.add(3);
					} else if(currLine.toLowerCase().equals("fourth way")) {
						nums.add(4);
					} else if(currLine.toLowerCase().equals("second and third way")) {
						nums.add(2);
						nums.add(3);
					} else if(currLine.toLowerCase().equals("both ways")) {
						nums.add(1);
						nums.add(2);
					} else {
						System.out.println("ERROR: Cannot rea the [Way] command (file: " + currFileName + ").");
					}
					
					if(!isLastLineEmpty) sb.append("\n");
					sb.append("[Way] ");
					sb.append(nums.get(0).toString());
					for(int m = 1; m < nums.size(); m++) {
						sb.append(", ");
						sb.append(nums.get(m).toString());
					}
					sb.append("\n\n");
					isLastLineEmpty = true;
				}
				
				else {
					sb.append(currLine).append("\n");
					isLastLineEmpty = false;
					System.out.println("ERROR: Line not categorizable (line: " + currLine + ", file: " + currFileName + ").");

				}

			}
			
			if(!foundNeededLine) System.out.println("ERROR: There is no needed line in the file (filename: " + currFileName + ").");
			
			
			FileWriter fw = new FileWriter(newQuestFolder + "/" + currFileName + ".psq");
			BufferedWriter bw = new BufferedWriter(fw);
			bw.append("[Questname] " + questName + "\n");
			bw.append("[NPC Name] " + questNPC + "\n");
			bw.append("[Checkup] 2014-01-01\n");
			bw.append("[Authors] Dudu and Lele\n");
			if(isRepeatable) bw.append("[Repeatable] Yes\n");
			bw.append(sb.toString());
			bw.close();

		}
		System.out.println("\nNot matching need lines = " + countNotMatching);

	}
	
	public static void examineGotoLine(StringBuffer sb_top, String currLine, boolean isLastLineEmpty, boolean isQuestNpcSet, String currFileName) throws IOException {
		currLine = currLine.substring(4).trim();
		// Get long NPC name, as in most cases only the first name is saved in the files
		String longNpcName = "";
		for (int k = 0; k < npcNames.size(); k++) {
			if (npcNames.get(k).toLowerCase().startsWith(currLine.toLowerCase())) {
				longNpcName = npcNames.get(k);
				currNpcFullName = longNpcName;
				if(currNpcFullName.contains(" ")) {
					currNpcFirstName = currNpcFullName.substring(0,currNpcFullName.indexOf(" "));
				} else {
					currNpcFirstName = currNpcFullName;
				}
			}
		}
		if(longNpcName.isEmpty()) {
			System.out.println("ERROR: The Name of the NPC cannot be found in the list of NPC names (name:" + currLine + ", file: " + currFileName + ").");
		}
		if(!isLastLineEmpty) sb_top.append("\n");
		sb_top.append("[To] ").append(longNpcName).append("\n\n");
		if(!isQuestNpcSet) questNPC = currNpcFullName;
	}
	
	public static void examineGiveLine(StringBuffer sb_top, String currLine, boolean isLastLineEmpty, boolean isQuestNpcSet, String currFileName) throws IOException {
	
		currLine = currLine.substring(6).trim();
		
		ArrayList<Pair<Integer, String>> items = new ArrayList<Pair<Integer, String>>();
		while (currLine.contains(",")) {
			String subLine = currLine.substring(0, currLine.indexOf(",")).trim();
			Integer amount = Integer.valueOf(subLine.substring(0, subLine.indexOf(" ")).trim());
			String itemName = subLine.substring(subLine.indexOf(" ")+1).trim();
			items.add(new Pair<Integer, String>(amount, itemName));
			currLine = currLine.substring(currLine.indexOf(",")+1).trim();
		}
		String subLine = currLine.substring(0, currLine.indexOf(" to")).trim();
		Integer amount = Integer.valueOf(subLine.substring(0, subLine.indexOf(" ")).trim());
		String itemName = subLine.substring(subLine.indexOf(" ")+1).trim();
		items.add(new Pair<Integer, String>(amount, itemName));
		currLine = currLine.substring(currLine.indexOf("to")+2).trim();
		
		String npc = currLine;
		
		// Get long NPC name, as in most cases only the first name is saved in the files
		String longNpcName = "";
		for (int k = 0; k < npcNames.size(); k++) {
			if (npcNames.get(k).toLowerCase().startsWith(npc.toLowerCase())) {
				longNpcName = npcNames.get(k);
				currNpcFullName = longNpcName;
				if(currNpcFullName.contains(" ")) {
					currNpcFirstName = currNpcFullName.substring(0,currNpcFullName.indexOf(" "));
				} else {
					currNpcFirstName = currNpcFullName;
				}
			}
		}
		if(longNpcName.isEmpty()) {
			System.out.println("ERROR: The Name of the NPC cannot be found in the list of NPC names (name:" + npc + ", file: " + currFileName + ").");
		}
		if(!isLastLineEmpty) sb_top.append("\n");
		
		sb_top.append("[Give] " + currNpcFullName);
		for(int l = 0; l < items.size(); l++) {
			sb_top.append("; ");
			sb_top.append(items.get(l).getFirst().toString());
			sb_top.append(", ").append(items.get(l).getSecond());
		}
		
		sb_top.append("\n\n");
		
		if(!isQuestNpcSet) questNPC = currNpcFullName;
	}
	@Deprecated
	public static void examineNeedLine(StringBuffer sb_top, String currLine, String currFileName, boolean isLastLineEmpty) throws IOException {
		currLine = currLine.substring(9).trim();
		
		if(!isLastLineEmpty) {
			sb_top.append("\n");
		}

		if(currLine.equals("nothing.")) {
			sb_top.append("[Need] Nothing\n\n");
		} else {		
			// Here we write our Need Statement which we will insert in the global buffer at the end
			StringBuffer sb = new StringBuffer();
			sb.append("[Need] ");
						
			ArrayList<String> elements_prov = new ArrayList<String>();
			ArrayList<String> elements = new ArrayList<String>();
			
			boolean firstElement = true;
			boolean firstElementInLine = true;
			boolean isInsideOR = false;
			boolean writeNextOR = false;
			boolean closeORnow = false;
			
			Pattern pattern = Pattern.compile(", and|,|\\bor\\b|[.]|$", Pattern.CASE_INSENSITIVE);
			Matcher matcher = pattern.matcher(currLine);
	
			// The end index of the matcher of the last iteration.
			// We need this to get the substrings between the matches.
			int lastMatcherEndIndex = 0;
			while (matcher.find()) {
				String element_prov = currLine.substring(lastMatcherEndIndex, matcher.start()).trim();
				lastMatcherEndIndex = matcher.end();
				elements_prov.add(element_prov);
			}
			
			// Delimiter: and (but not in quest)
			for(int u = 0; u < elements_prov.size(); u++) {
				String element_prov = elements_prov.get(u);
				if(! (element_prov.contains("Quest") && element_prov.contains("with"))) {
					Pattern pattern_and = Pattern.compile("\\band\\b|$", Pattern.CASE_INSENSITIVE);
					Matcher matcher_and = pattern_and.matcher(element_prov);
			
					// The end index of the matcher of the last iteration.
					// We need this to get the substrings between the matches.
					int lastMatcherEndIndex_and = 0;
					while (matcher_and.find()) {
						String element = element_prov.substring(lastMatcherEndIndex_and, matcher_and.start()).trim();
						lastMatcherEndIndex_and = matcher_and.end();
						elements.add(element);
					}
				} else {
					Pattern pattern_and = Pattern.compile("(?<=completed )\\band\\b|$", Pattern.CASE_INSENSITIVE);
					Matcher matcher_and = pattern_and.matcher(element_prov);
					
					// The end index of the matcher of the last iteration.
					// We need this to get the substrings between the matches.
					int lastMatcherEndIndex_and = 0;
					while (matcher_and.find()) {
						String element = element_prov.substring(lastMatcherEndIndex_and, matcher_and.start()).trim();
						lastMatcherEndIndex_and = matcher_and.end();
						elements.add(element);
					}
				}
			}
			for(int u = 0; u < elements.size(); u++) {
				String element = elements.get(u);
				/*
				 * Because most lines have a point at the end and we check for points and for 
				 * \n, there will be elements, which are totally empty, which we dont want.
				 */
				if (element.isEmpty()) {
					continue;
				}

				/* -------------- Check for diff. Ways ------------- */
				/*
				 * In the dudu and lele quest files:
				 * 	..., [Way X] quest, item, skill, etc .. , 
				 * 		 [Way Y] quest, item, skill, etc ..,
				 *  		 [Way All] quest, item, skill.
				 *  Once you started with a way, you always have to 
				 *  state a way, if the way changes (even if its all).
				 */
				if(element.toLowerCase().startsWith("[way all]")) {
					element = element.substring(9).trim();
					sb.append("\n[Need] ");	
					firstElementInLine = true;
				} else if(element.toLowerCase().startsWith("[way")) {
					element = element.substring(5).trim();
					int wayNum = Integer.valueOf(element.substring(0, element.indexOf("]")));
					element = element.substring(element.indexOf("]")+1).trim();
					firstElementInLine = true;
					
					if(firstElement) {
						sb.append("[Way " + wayNum + "] ");
					} else {
						sb.append("\n[Need] [Way " + wayNum + "] ");
					}
				}
				
				/* ADD SEMICOLON
				 * All continue and [Way] elements have to be before
				 * this line, to set the semicolon correctly.
				 */
				if(!isInsideOR && !firstElementInLine) sb.append("; ");

				
				/* ----------------------- OR -------------------- */
				/*
				 * (( )) will count as or condition. Only use, when you 
				 * want to make an or statement.
				 */
				
				if(element.startsWith("((")) {
					sb.append("[OR Begin] ");
					element = element.substring(2).trim();
					isInsideOR = true;
				}
				if(isInsideOR) {
					if(writeNextOR) {
						sb.append(" [OR] ");
						writeNextOR = false;
					} 
					if(element.startsWith("(")) element = element.substring(1).trim();
					if(element.endsWith("))")) {
						isInsideOR = false;
						closeORnow = true;
						element = element.substring(0, element.indexOf("))")).trim();
					} else if(element.endsWith(")")) {
							writeNextOR = true;
							element = element.substring(0, element.length()-1).trim();
					}
				}
				
				// preparation quest matcher
				Pattern quest_pattern = Pattern.compile("(?<=Quest ).*(?= with)", Pattern.CASE_INSENSITIVE);
				Matcher quest_matcher = quest_pattern.matcher(element);
				
				/* ---------------- Extract Special --------------- */
				if(element.startsWith("[Special]")) {
					sb.append("[Special] " + element.substring(9).trim());
				}
				/* ---------------- Extract Quests --------------- */
				else if (quest_matcher.find()) {
					sb.append("[Quest] " + quest_matcher.group().trim());
				}
				/* ---------------- Extract Winch --------------- */
				else if (element.toLowerCase().equals("winch access")) {
					sb.append("[Winch] Yes");
				}
				/* ---------------- Extract Ranks --------------- */
				else if (element.toLowerCase().contains("rank")) {
					Pattern ranks_pattern = Pattern.compile("(\\brank\\b )(\\d*) (.*)", Pattern.CASE_INSENSITIVE);
					Matcher ranks_matcher = ranks_pattern.matcher(element);
					if (ranks_matcher.find()) {
						Integer level = Integer.valueOf(ranks_matcher.group(2));
						String skill = ranks_matcher.group(3);
						sb.append("[Skill] " + level + ", " + skill);
					} else System.out.println("ERROR: Quest " + currFileName
								+ " has the word rank, but the matcher couldn't be applied (line: " + element + ").");
				} 
				/* -------------------- Money ------------------- */
				else if(element.toLowerCase().endsWith("tria") || element.toLowerCase().endsWith("trias")) {
					element = element.substring(0, element.toLowerCase().lastIndexOf("tria")).trim();
					int amount = Integer.valueOf(element);
					sb.append("[Money] " + amount);
				}
				/* --------- Items with beginning num ------------- */
				else if(element.matches("\\d+.*")) {
					int amount = Integer.valueOf(element.substring(0, element.indexOf(" ")));
					String item = element.substring(element.indexOf(" ")).trim();
					sb.append("[Item] " + amount + ", " + item);
				}
				/* --------- Items with beginning a, an, one ------------- */
				else if(element.toLowerCase().startsWith("a ") || element.toLowerCase().startsWith("an ") || element.toLowerCase().startsWith("one ")) {
					String item = element.substring(element.indexOf(" ")).trim();
					sb.append("[Item] 1, " + item);
				}
				else if(element.toLowerCase().contains("way ")) {
					sb.append("[Item] 1, " + element);
				}
				/* ---------------- Items --------------- */
				else {
					sb.append("[Item] 1, " + element);
				}
				
//				countNotMatching += 1;
//				if(countNotMatching > 70) System.out.println(element + " - " + currFileName);
				
				// tria, Tria, trias, a, an, one, ..s at the end,
				
				if(closeORnow) {
					sb.append(" [OR End]");
					closeORnow = false;
				}
				
				firstElement = false;	
				firstElementInLine = false;
			}
			sb.append("\n\n");

			//System.out.println(sb.toString() + "\n");
			sb_top.append(sb.toString());
		} // end else
	}
	@Deprecated
	public static void examineRewardLine(StringBuffer sb_top, String currLine, String currFileName, boolean isLastLineEmpty) throws IOException {
		currLine = currLine.substring(6).trim();
		
		if(!isLastLineEmpty) {
			sb_top.append("\n");
		}

		if(currLine.equals("nothing.")) {
			sb_top.append("[Reward] Nothing\n\n");
		} else {		
			// Here we write our Reward Statement which we will insert in the global buffer at the end
			StringBuffer sb = new StringBuffer();
			sb.append("[Reward] ");
						
			ArrayList<String> elements = new ArrayList<String>();
			
			boolean firstElement = true;
			boolean firstElementInLine = true;
			boolean isInsideOR = false;
			boolean writeNextOR = false;
			boolean closeORnow = false;
			
			Pattern pattern = Pattern.compile(", and|,|\\bor\\b|\\band\\b|[.]|$", Pattern.CASE_INSENSITIVE);
			Matcher matcher = pattern.matcher(currLine);
	
			// The end index of the matcher of the last iteration.
			// We need this to get the substrings between the matches.
			int lastMatcherEndIndex = 0;
			while (matcher.find()) {
				String element = currLine.substring(lastMatcherEndIndex, matcher.start()).trim();
				lastMatcherEndIndex = matcher.end();
				elements.add(element);
			}
			
			for(int u = 0; u < elements.size(); u++) {
				String element = elements.get(u);
				/*
				 * Because most lines have a point at the end and we check for points and for 
				 * \n, there will be elements, which are totally empty, which we dont want.
				 */
				if (element.isEmpty()) {
					continue;
				}

				/* -------------- Check for diff. Ways ------------- */
				/*
				 * In the dudu and lele quest files:
				 * 	..., [Way X] quest, item, skill, etc .. , 
				 * 		 [Way Y] quest, item, skill, etc ..,
				 *  		 [Way All] quest, item, skill.
				 *  Once you started with a way, you always have to 
				 *  state a way, if the way changes (even if its all).
				 */
				if(element.toLowerCase().startsWith("[way all]")) {
					element = element.substring(9).trim();
					sb.append("\n[Reward] ");	
					firstElementInLine = true;
				} else if(element.toLowerCase().startsWith("[way")) {
					element = element.substring(5).trim();
					int wayNum = Integer.valueOf(element.substring(0, element.indexOf("]")));
					element = element.substring(element.indexOf("]")+1).trim();
					firstElementInLine = true;
					
					if(firstElement) {
						sb.append("[Way " + wayNum + "] ");
					} else {
						sb.append("\n[Reward] [Way " + wayNum + "] ");
					}
				}
				
				/* ADD SEMICOLON
				 * All continue and [Way] elements have to be before
				 * this line, to set the semicolon correctly.
				 */
				if(!isInsideOR && !firstElementInLine) sb.append("; ");

				
				/* ----------------------- OR -------------------- */
				/*
				 * (( )) will count as or condition. Only use, when you 
				 * want to make an or statement.
				 */				
				if(element.startsWith("((")) {
					sb.append("[OR Begin] ");
					element = element.substring(2).trim();
					isInsideOR = true;
				}
				if(isInsideOR) {
					if(writeNextOR) {
						sb.append(" [OR] ");
						writeNextOR = false;
					} 
					if(element.startsWith("(")) element = element.substring(1).trim();
					if(element.endsWith("))")) {
						isInsideOR = false;
						closeORnow = true;
						element = element.substring(0, element.indexOf("))")).trim();
					} else if(element.endsWith(")")) {
							writeNextOR = true;
							element = element.substring(0, element.length()-1).trim();
					}
				}
				
				/* ---------------- Extract Special --------------- */
				if(element.startsWith("[Special]")) {
					sb.append("[Special] " + element.substring(9).trim());
				}
				/* ---------------- Extract Ranks --------------- */
				else if (element.toLowerCase().contains("rank")) {
					System.out.println("RANK DETECTED" + element);
					Pattern ranks_pattern = Pattern.compile("(\\brank\\b )(\\d*) (.*)", Pattern.CASE_INSENSITIVE);
					Matcher ranks_matcher = ranks_pattern.matcher(element);
					if (ranks_matcher.find()) {
						Integer level = Integer.valueOf(ranks_matcher.group(2));
						String skill = ranks_matcher.group(3);
						sb.append("[Skill] " + level + ", " + skill);
					} else System.out.println("ERROR: Quest " + currFileName
								+ " has the word rank, but the matcher couldn't be applied (line: " + element + ").");
				} 
				/* -------------------- Money ------------------- */
				else if(element.toLowerCase().endsWith("tria") || element.toLowerCase().endsWith("trias")) {
					element = element.substring(0, element.toLowerCase().lastIndexOf("tria")).trim();
					int amount = Integer.valueOf(element);
					sb.append("[Money] " + amount);
				}
				
				/* -------------------- XP ------------------- */
				else if(element.toLowerCase().endsWith("xp")) {
					//System.out.println(element + " (" + currFileName +")");
					element = element.substring(0, element.length()-2).trim();
					int amount = Integer.valueOf(element);
					sb.append("[XP] " + amount);
				}
				/* ------------------ Repeatable ------------------ */
				else if(element.toLowerCase().equals("repeatable")) {
					isRepeatable = true;
				}
				/* ------------------ Faction ------------------ */
				else if(element.toLowerCase().matches("(\\bfaction\\b )?(.*)(\\+|-)(\\d*)")) {
					Pattern faction_pattern = Pattern.compile("(\\bfaction\\b)?(.*)(\\+|-)(\\d*)", Pattern.CASE_INSENSITIVE);
					Matcher faction_matcher = faction_pattern.matcher(element);
					

					
					if (faction_matcher.find()) {
						int amount = 1;
						if(!faction_matcher.group(4).isEmpty()) {
							amount = Integer.valueOf(faction_matcher.group(4).trim());
						}
						if(faction_matcher.group(3).trim().equals("-")) {
							amount = -amount;
						}
						sb.append("[Faction] " + amount + ", " + faction_matcher.group(2).trim());
					}
				}
				/* --------- Items with beginning num ------------- */
				else if(element.matches("\\d+.*")) {
					int amount = Integer.valueOf(element.substring(0, element.indexOf(" ")));
					String item = element.substring(element.indexOf(" ")).trim();
					sb.append("[Item] " + amount + ", " + item);
				}
				/* --------- Items with beginning a, an, one ------------- */
				else if(element.toLowerCase().startsWith("a ") || element.toLowerCase().startsWith("an ") || element.toLowerCase().startsWith("one ")) {
					String item = element.substring(element.indexOf(" ")).trim();
					sb.append("[Item] 1, " + item);
				}
				/* --------- Items with magic ------------- */
				else if(element.toLowerCase().contains("way ")) {
					sb.append("[Item] 1, " + element);
				}
				/* --------- Items with glyphs ------------- */
				else if(element.toLowerCase().contains("glyph")) {
					sb.append("[Item] 1, " + element);
				}
				/* ---------------- Items --------------- */
				else {
					sb.append("[Item] 1, " + element);
//					if(countNotMatching > 110) System.out.println(countNotMatching + ": " + element + " - " + currFileName);
//					countNotMatching += 1;
				}
				if(closeORnow) {
					sb.append(" [OR End]");
					closeORnow = false;
				}
				
				firstElement = false;	
				firstElementInLine = false;
			}
			sb.append("\n\n");

			//System.out.println(sb.toString() + "\n");
			sb_top.append(sb.toString());
		} // end else
	}

}
