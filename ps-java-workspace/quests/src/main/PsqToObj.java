package main;

import java.io.File;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import questObjectsNeedReward.Quest;
import questObjectsNeedReward.QuestNeedDetailsOR;
import questObjectsNeedReward.QuestNeedDetailsStandard;
import questObjectsNeedReward.QuestNeedStandard;
import questObjectsNeedReward.QuestNeedWay;
import questObjectsNeedReward.QuestRewardsDetailsSpecificOR;
import questObjectsNeedReward.QuestRewardsDetailsStandard;
import questObjectsNeedReward.QuestRewardsWaySpecific;
import questObjectsNeedReward.QuestRewardsWayStandard;
import questObjectsTextLines.Questtext;
import questObjectsTextLines.QuesttextDiffWays;
import questObjectsTextLines.QuesttextGive;
import questObjectsTextLines.QuesttextInfo;
import questObjectsTextLines.QuesttextNpc;
import questObjectsTextLines.QuesttextNpcInternal;
import questObjectsTextLines.QuesttextNpcMe;
import questObjectsTextLines.QuesttextNpcMy;
import questObjectsTextLines.QuesttextNpcNarrate;
import questObjectsTextLines.QuesttextTime;
import questObjectsTextLines.QuesttextTo;
import questObjectsTextLines.QuesttextWaysHeadline;
import utilities.Pair;

public class PsqToObj {
	
	/**
	 * This function parses all ".psquest" files in the folder utilities.Constants.PATHtoQUESTfiles
	 * and transforms the content into java objects. The files have a specific format (invented
	 * by Huawar Eruera), which needs to be obeyed, otherwise the parser will not work.
	 * 
	 * A detailed description how these files have to look can soon be found somewhere.
	 * @return
	 */
	public ArrayList<Quest> parseQuestsDetails() {
		
		// In this Object we save all the quests,
		// which we return in the end
		ArrayList<Quest> quests = new ArrayList<Quest>();
		
		// Delete .DS_Store if it exists
		File DS_Store = new File(utilities.Constants.PATHtoQUESTfiles + ".DS_Store");
		if(DS_Store.exists()) {
			DS_Store.delete();
		}
		
		// Read the filenames in the folder with the Quests
		File folder = new File(utilities.Constants.PATHtoQUESTfiles);
		File[] listOfFiles = folder.listFiles();

		ArrayList<String> filenames = new ArrayList<String>();
		
	    for (int i = 0; i < listOfFiles.length; i++) {
		    	String currFileName = listOfFiles[i].getName();
		        filenames.add(currFileName);
		}
		
		// Iterate over all the quests
		for(int i = 0; i < filenames.size(); i++) {
			
			
			// Get the current quest file we are investigating
			String currFileName = filenames.get(i);

			// Create a new Quest Object
			Quest currQuest = new Quest();
						
			// Here we save all the things that the NPC and you say during the quest
			// It will be added to the quest object later
			ArrayList<Questtext> questDetails = new ArrayList<Questtext>();
			
			ArrayList<String> rawQuestDetails = utilities.Helpfunctions.readLinesOfFile(utilities.Constants.PATHtoQUESTfiles + currFileName);
			
			// Check that some of the identifier are only present 1 time in the file
			boolean hadQuestname = false;
			boolean hadNpcName = false;
			boolean hadCheckup = false;
			boolean hadAuthors = false;
			
			 /* +++++++++++++++++++++++ PARSE THE LINES INTO OBJECTS +++++++++++++++++++++++ */
			
			for(int j = 0; j < rawQuestDetails.size(); j++) {
				
				String currLine = rawQuestDetails.get(j).trim();
				
				/* +++++++++++++++++++++++ DO NOTHING ++++++++++++++++++++++ */
				
				// SKIP, if the line is empty
				if (currLine.isEmpty()) {
					continue;
				}
				// Comments are just for people who read the .psquest file
				else if(currLine.startsWith("[Comments]") || currLine.startsWith("[Comment]")) {
					continue;
				}
				
				/* ++++++++++++++++++ JUST ALLOWED 1 TIME ++++++++++++++++++ */

				else if(currLine.startsWith("[Questname]")) {
					currQuest.setQuestname(currLine.substring(12).trim());
					if(hadQuestname) throwItentifierExistsException("[Questname]", currFileName, j, currLine);
					else hadQuestname = true;
				} else if(currLine.startsWith("[NPC Name]")) {
					currQuest.setNpc(currLine.substring(11).trim());
					if(hadNpcName) throwItentifierExistsException("[NPC Name]", currFileName, j, currLine);
					else hadNpcName = true;
				} else if(currLine.startsWith("[Checkup]")) {
					if(currLine.length() > 10) {
						currQuest.setCheckup(currLine.substring(10).trim());
					}
					if(hadCheckup) throwItentifierExistsException("[Checkup]", currFileName, j, currLine);
					else hadCheckup = true;
				} else if(currLine.startsWith("[Authors]")) {
					currQuest.setAuthors(currLine.substring(9).trim());
					if(hadAuthors) throwItentifierExistsException("[Authors]", currFileName, j, currLine);
					else hadAuthors = true;
				} 
				
				else if(currLine.startsWith("[Repeatable]")) {
					if(currLine.substring(12).trim().toLowerCase().equals("yes"))
						currQuest.setRepeatable(true);
				}
				
				// Need
				else if (currLine.startsWith("[Need]")) {
					j = readNeeds(rawQuestDetails, currQuest, j, currLine);
					continue;
				} else if(currLine.startsWith("[Info]")) {
					questDetails.add(new QuesttextInfo(currLine.substring(7)));
				} else if(currLine.startsWith("[To]")) {
					questDetails.add(new QuesttextTo(currLine.substring(5)));					
				} else if(currLine.startsWith("[Give]")) {
					try{
						int semiIndex = currLine.indexOf(';');
						String NPCgive = currLine.substring(7, semiIndex).trim();
						/* TODO:  Check if +1 is correct, or if we have to use +2 for the following 3 occurences*/
						currLine = currLine.substring(semiIndex + 1);
						
						ArrayList<Pair<Integer, String>> items = new ArrayList<Pair<Integer, String>>();
						
						while(currLine.contains(";")) {
							int colIndex = currLine.indexOf(',');
							semiIndex = currLine.indexOf(';');
							Integer amount = Integer.parseInt(currLine.substring(0, colIndex).trim());
							String item = currLine.substring(colIndex + 1, semiIndex).trim();
							items.add(new Pair<Integer, String>(amount, item));
							
							currLine = currLine.substring(semiIndex+2);
						}
						int colIndex = currLine.indexOf(',');
						Integer amount = Integer.parseInt(currLine.substring(0, colIndex).trim());
						String item = currLine.substring(colIndex + 1).trim();
						items.add(new Pair<Integer, String>(amount, item));
						questDetails.add(new QuesttextGive("", NPCgive, items));
					} catch (StringIndexOutOfBoundsException e) {
						throw new StringIndexOutOfBoundsException(
								"In the file \"" + currFileName + 
								"\", the " + ++j + ". line (\"" + currLine + 
								"\").\n\tReminder: The [Give]-Statement has the form \"NPC; amount, name; amount,name ...\"");
					}
					
				} else if(currLine.startsWith("[Time]")) {
					questDetails.add(new QuesttextTime(currLine.substring(7)));

				/* ##### NPC ##### */
				} else if(currLine.startsWith("[NPC]")) {
					questDetails.add(new QuesttextNpc(currLine.substring(6)));
					
				} else if(currLine.startsWith("[NPC ME]")) {
					questDetails.add(new QuesttextNpcMe(currLine.substring(9)));
				} else if(currLine.startsWith("[NPC MY]")) {
					questDetails.add(new QuesttextNpcMy(currLine.substring(9)));
				} else if(currLine.startsWith("[NPC Internal]")) {	
					questDetails.add(new QuesttextNpcInternal(currLine.substring(14).trim()));
				} else if(currLine.startsWith("[NPC Narrate]")) {
					questDetails.add(new QuesttextNpcNarrate(currLine.substring(13).trim()));
				} else if(currLine.startsWith("[Possible Ways]")) {
					questDetails.add(new QuesttextWaysHeadline(currLine.substring(15).trim()));
				} else if(currLine.startsWith("[Way]")) {
					questDetails.add(new QuesttextDiffWays(currLine.substring(5).trim()));
					
				/* ##### REWARDS ##### */
				} else if (currLine.startsWith("[Reward]")) {
						j = readRewards(rawQuestDetails, currQuest, j, currLine);
				
				/*
				 * There shouldn't be anymore cases, except empty lines
				 * But if, it shall throw an exception.
				 */
				} else if(! currLine.equals("")) {
					throw new IllegalArgumentException(
							"In the file \"" + currFileName + 
							"\", the " + ++j + ". line (\"" + currLine + 
							"\") cannot be parsed!");
				}
				
				
			}
			
			currQuest.setQuestDetails(questDetails);
			quests.add(currQuest);
		
			
			
			
		}
		
		return quests;
	}
	
	public void throwItentifierExistsException(String identifier, String currFileName, int j, String currLine) {
		throw new IllegalArgumentException(
				"In the file \"" + currFileName + 
				"\", the " + ++j + ". line (\"" + currLine + 
				"\") cannot be parsed, because the identifier " +
				identifier + " already exists in another line!");
	}
	
	public static int readNeeds(ArrayList<String> rawQuestDetails, Quest currQuest, int j, String currLine) {
		
		currLine = currLine.substring(6).trim();

		QuestNeedStandard needObject;
		Pattern rewardLinePattern = Pattern.compile("\\[Need\\](?!\\s*\\[Way\\s*\\d+\\s*\\])(.*)");
		Matcher rewardLineMatcher;

		Pattern pattern = Pattern.compile("\\s*(\\[Way)\\s*(\\d+)\\s*(\\])(.*)");
		Matcher matcher = pattern.matcher(currLine);

		if (matcher.find()) {
			needObject = new QuestNeedWay(Integer.valueOf(matcher.group(2)));
			currLine = matcher.group(4).trim();
			// System.out.println(currLine);
			rewardLinePattern = Pattern.compile("\\[Need\\]\\s*\\[Way\\s*" + matcher.group(2) + "\\s*\\](.*)");
		} else {
			needObject = new QuestNeedStandard();
		}

		/*
		 * It is possible to write the rewards in multiple lines in the file. Important
		 * is that every line has the reward tag ([Reward]) at the beginning.
		 * 
		 * Here, we connect all these lines to one string, so it is easier to search for
		 * patterns, in case a pattern spans over multiple lines in the file (for
		 * example the [OR Begin], [OR], [OR End] pattern).
		 * 
		 * We make sure that each reward line is concatenated with an semicolon.
		 */
		int otherRewardLines = 0;

		for (int k = j + 1; k < rawQuestDetails.size(); k++) {
			String nextLine = rawQuestDetails.get(k);

			rewardLineMatcher = rewardLinePattern.matcher(nextLine);

			if (rewardLineMatcher.find()) {
				if (!(currLine.substring(currLine.length() - 1).equals(";"))) {
					currLine = currLine.concat(";");
				}
				currLine = currLine.concat(" ").concat(rewardLineMatcher.group(1).trim());
				otherRewardLines += 1;
			} else {
				break;
			}
		}
		// We increase j, because we concatenated the following
		// reward lines to the current line.
		j += otherRewardLines;

		// If there is an OR statement, we need to save somewhere, which variant number
		// the next rewards details object will get,
		int or_variant = 1;

		boolean isOrConditionOpen = false;

		QuestNeedDetailsStandard need_details_std = new QuestNeedDetailsStandard();
		QuestNeedDetailsStandard curr_need_details = need_details_std;

		pattern = Pattern.compile("(.+?)(;|$|(?=\\[OR\\]|\\[OR End\\]|\\[OR Begin\\]))");
		matcher = pattern.matcher(currLine.trim());

		while (matcher.find()) {
			String element = matcher.group(1).trim();

			// Get correct details object
			if (element.startsWith("[OR Begin]")) {
				need_details_std = curr_need_details;
				curr_need_details = new QuestNeedDetailsOR(or_variant);
				or_variant += 1;
				element = element.substring(10).trim();
				isOrConditionOpen = true;
			} else if (element.startsWith("[OR]")) {
				needObject.addNeedDetails(curr_need_details);
				curr_need_details = new QuestNeedDetailsOR(or_variant);
				or_variant += 1;
				element = element.substring(4).trim();
			} else if (element.startsWith("[OR End]")) {
				needObject.addNeedDetails(curr_need_details);
				curr_need_details = need_details_std;
				or_variant += 1;
				element = element.substring(8).trim();
				isOrConditionOpen = false;
			}

			if (element.isEmpty()) { // Possible e.g. if [Or End] is the whole element
				continue;
			} else if (element.toLowerCase().trim().equals("nothing")) {
				continue;
			} else if(element.startsWith("[Winch]")) {
				if(element.substring(7).trim().toLowerCase().equals("yes"))
					curr_need_details.setWinchaccess(true);	
			} else if (element.startsWith("[Quest]")) {
				element = element.substring(7).trim();
				if(!element.toLowerCase().equals("none")) {
					curr_need_details.addQuest(element);
				}
			} else if (element.startsWith("[Money]")) {
				element = element.substring(7).trim();
				int money = Integer.valueOf(element);
				curr_need_details.setMoney(money);

			} else if (element.startsWith("[Item]")) {
				element = element.substring(6);
				int amount = 1;
				String item = element;
				if (element.contains(",")) {
					amount = Integer.valueOf(element.substring(0, element.indexOf(",")).trim());
					item = element.substring(element.indexOf(",") + 1).trim();
				}
				curr_need_details.addItem(new Pair<Integer, String>(amount, item));

			} else if (element.startsWith("[Skill]")) {
				element = element.substring(7);
				int amount = 1;
				String skill = element;
				if (element.contains(",")) {
					amount = Integer.valueOf(element.substring(0, element.indexOf(",")).trim());
					skill = element.substring(element.indexOf(",") + 1).trim();
				}
				curr_need_details.addSkillLevel(new Pair<Integer, String>(amount, skill));

			} else if (element.startsWith("[Special]")) {
				curr_need_details.addSpecial(element.substring(9).trim());
			} else {
				System.out.println("ERROR: The element '" + element
						+ "' in the need section has no tag ('[..]') at the beginning (" + currQuest.getQuestname() + ").");
			}

			if (element.endsWith("[OR End]")) {
				needObject.addNeedDetails(curr_need_details);
				curr_need_details = need_details_std;
				or_variant += 1;
				isOrConditionOpen = false;
			}
		}

		if (isOrConditionOpen) {
			needObject.addNeedDetails(curr_need_details);
			curr_need_details = need_details_std;
		}

		needObject.addNeedDetails(curr_need_details);

		// Add the rewards object to the quest object
		currQuest.addNeed(needObject);

		return j;
	}

	/**
	 * 
	 * @param rawQuestDetails
	 * @param currQuest
	 * @param j
	 * @param currLine
	 * @return The new index for the for-loop of the lines of the quest file. We
	 *         read all the reward lines of the quest at once.
	 */
	public static int readRewards(ArrayList<String> rawQuestDetails, Quest currQuest, int j, String currLine) {
		currLine = currLine.substring(8).trim();
		
		QuestRewardsWayStandard rewardObject;
		Pattern rewardLinePattern = Pattern.compile("\\[Reward\\](?!\\s*\\[Way\\s*\\d+\\s*\\])(.*)");
		Matcher rewardLineMatcher;

		Pattern pattern = Pattern.compile("\\s*(\\[Way)\\s*(\\d+)\\s*(\\])(.*)");
		Matcher matcher = pattern.matcher(currLine);

		if (matcher.find()) {
			rewardObject = new QuestRewardsWaySpecific(Integer.valueOf(matcher.group(2)));
			currLine = matcher.group(4).trim();
			// System.out.println(currLine);
			rewardLinePattern = Pattern.compile("\\[Reward\\]\\s*\\[Way\\s*" + matcher.group(2) + "\\s*\\](.*)");
		} else {
			rewardObject = new QuestRewardsWayStandard();
		}

		/*
		 * It is possible to write the rewards in multiple lines in the file. Important
		 * is that every line has the reward tag ([Reward]) at the beginning.
		 * 
		 * Here, we connect all these lines to one string, so it is easier to search for
		 * patterns, in case a pattern spans over multiple lines in the file (for
		 * example the [OR Begin], [OR], [OR End] pattern).
		 * 
		 * We make sure that each reward line is concatenated with an semicolon.
		 */
		int otherRewardLines = 0;

		for (int k = j + 1; k < rawQuestDetails.size(); k++) {
			String nextLine = rawQuestDetails.get(k);

			rewardLineMatcher = rewardLinePattern.matcher(nextLine);

			if (rewardLineMatcher.find()) {
				if (!(currLine.substring(currLine.length() - 1).equals(";"))) {
					currLine = currLine.concat(";");
				}
				currLine = currLine.concat(" ").concat(rewardLineMatcher.group(1).trim());
				otherRewardLines += 1;
			} else {
				break;
			}
		}
		// We increase j, because we concatenated the following
		// reward lines to the current line.
		j += otherRewardLines;

//		if (currLine.contains("OR"))
//			System.out.println(currLine);

		// If there is an OR statement, we need to save somewhere, which variant number
		// the next rewards details object will get,
		int or_variant = 1;

		boolean isOrConditionOpen = false;

		QuestRewardsDetailsStandard rew_details_std = new QuestRewardsDetailsStandard();
		QuestRewardsDetailsStandard curr_rew_details = rew_details_std;

		pattern = Pattern.compile("(.+?)(;|$|(?=\\[OR\\]|\\[OR End\\]|\\[OR Begin\\]))");
		matcher = pattern.matcher(currLine.trim());

		while (matcher.find()) {
			String element = matcher.group(1).trim();

			// Get correct details object
			if (element.startsWith("[OR Begin]")) {
				rew_details_std = curr_rew_details;
				curr_rew_details = new QuestRewardsDetailsSpecificOR(or_variant);
				or_variant += 1;
				element = element.substring(10).trim();
				isOrConditionOpen = true;
			} else if (element.startsWith("[OR]")) {
				rewardObject.addRewardDetails(curr_rew_details);
				curr_rew_details = new QuestRewardsDetailsSpecificOR(or_variant);
				or_variant += 1;
				element = element.substring(4).trim();
			} else if (element.startsWith("[OR End]")) {
				rewardObject.addRewardDetails(curr_rew_details);
				curr_rew_details = rew_details_std;
				or_variant += 1;
				element = element.substring(8).trim();
				isOrConditionOpen = false;
			}

			if (element.isEmpty()) { // Possible e.g. if [Or End] is the whole element
				continue;
			} else if(element.toLowerCase().trim().equals("nothing")) {
				continue;
			} else if (element.startsWith("[Money]")) {
				element = element.substring(7).trim();
				int money = Integer.valueOf(element);
				curr_rew_details.setMoney(money);

			} else if (element.startsWith("[XP]")) {
				element = element.substring(4).trim();
				int xp = Integer.valueOf(element);
				curr_rew_details.setXp(xp);

			} else if (element.startsWith("[Faction]")) {
				element = element.substring(9).trim();
				int amount = 0;
				String faction = element;
				if (element.contains(",")) {
					amount = Integer.valueOf(element.substring(0, element.indexOf(",")).trim());
					faction = element.substring(element.indexOf(",") + 1).trim();
				}
				curr_rew_details.addFaction(new Pair<Integer, String>(amount, faction));

			} else if (element.startsWith("[Item]")) {
				element = element.substring(6);
				int amount = 1;
				String item = element;
				if (element.contains(",")) {
					amount = Integer.valueOf(element.substring(0, element.indexOf(",")).trim());
					item = element.substring(element.indexOf(",") + 1).trim();
				}
				curr_rew_details.addItem(new Pair<Integer, String>(amount, item));

			} else if (element.startsWith("[Skill]")) {
				element = element.substring(7).trim();
				int amount = 1;
				String skill = element;
				if (element.contains(",")) {
					amount = Integer.valueOf(element.substring(0, element.indexOf(",")).trim());
					skill = element.substring(element.indexOf(",") + 1).trim();
				}
				curr_rew_details.addSkillChange(new Pair<Integer, String>(amount, skill));
				
			} else if(element.startsWith("[Combat Move]")) {
				element = element.substring(13);
				String category = element.substring(0, element.indexOf(",")).trim();
				String attack = element.substring(element.indexOf(",")+1).trim();
				
				curr_rew_details.addCombatMove(new Pair<String, String>(category, attack));

			} else if (element.startsWith("[Special]")) {
				curr_rew_details.addSpecial(element.substring(9).trim());
				
			} else {
				System.out.println("ERROR: The element '" + element
						+ "' in the reward section has no tag ('[..]') at the beginning (" + currQuest.getQuestname() + ").");
			}

			if (element.endsWith("[OR End]")) {
				rewardObject.addRewardDetails(curr_rew_details);
				curr_rew_details = rew_details_std;
				or_variant += 1;
				isOrConditionOpen = false;
			}
		}

		if (isOrConditionOpen) {
			rewardObject.addRewardDetails(curr_rew_details);
			curr_rew_details = rew_details_std;
		}

		rewardObject.addRewardDetails(curr_rew_details);

		// Add the rewards object to the quest object
		currQuest.addReward(rewardObject);

		return j;

	}

}
