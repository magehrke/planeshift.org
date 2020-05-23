package deprecated_questsDudu;

import java.io.File;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.FileReader;
import java.util.ArrayList;
import java.util.Scanner;

import deprecated_questsDudu.Deprecated_DuduObjQuest;
import javafx.util.*;
import questTextObjects.Questtext;
import questTextObjects.QuesttextAction;
import questTextObjects.QuesttextDiffWays;
import questTextObjects.QuesttextNpc;
import questTextObjects.QuesttextQuestComplete;
import questTextObjects.QuesttextRequirement;
import questTextObjects.QuesttextReward;
import questTextObjects.QuesttextStoryline;
import questTextObjects.QuesttextWaysHeadline;
import questTextObjects.QuesttextYou;

@Deprecated
public class Deprecated_DuduQuestsParser {
	
	public ArrayList<Deprecated_DuduObjQuest> parseQuestOverview() {
		
		ArrayList<Deprecated_DuduObjQuest> quests = new ArrayList<Deprecated_DuduObjQuest>();
		
		ArrayList<String> lines = readQuestOverviewFile();
		
		for(int i = 0; i < lines.size(); i++) {
			String currLine = lines.get(i);
			
			int firstTab = currLine.indexOf(';');
			
			String questNpc = currLine.substring(0, firstTab);
			//System.out.println(questName);
			
			currLine = currLine.substring(firstTab + 1);
			//System.out.println(currLine);
			
			int secondTab = currLine.indexOf(';');
			String questName = currLine.substring(0, secondTab);
			//System.out.println(questNpc);
			
			currLine = currLine.substring(secondTab + 1);
			//we skip the Area, cause we already recorded it
			//so we are at the forth tab not the third
			currLine = currLine.substring(currLine.indexOf(';') + 1);
			
			int fourthTab = currLine.indexOf(';');
			String questDifficulty = currLine.substring(0, fourthTab);
			//System.out.println(questDifficulty);
			
			currLine = currLine.substring(fourthTab + 1);
			
			ArrayList<String> questRewards = new ArrayList<String>();
			while(currLine.contains(",")) {
				int nextComma = currLine.indexOf(',');
				questRewards.add(currLine.substring(0, nextComma));
				//System.out.print(currLine.substring(0, nextComma) + ", ");
				
				currLine = currLine.substring(nextComma + 1);
			}
			
			questRewards.add(currLine);
			//System.out.print(currLine);
			
			//System.out.println();
			
			quests.add(new Deprecated_DuduObjQuest(questName, questNpc, questDifficulty, questRewards));	
			
		}
		
		return quests;
		
	}
	
	
	//Read the lines from the quest overwiev file
	public ArrayList<String> readQuestOverviewFile() {
	
		ArrayList<String> list = new ArrayList<String>();
		File file = new File(utilities.Constants.PATHforSQLoutput + "/kov-quest-overview.txt");
		BufferedReader reader = null;
		
		try {
			reader = new BufferedReader(new FileReader(file));
			String text = null;
			
			while ((text = reader.readLine()) != null) {
				list.add(text);
			}
		} catch (FileNotFoundException e) {
			e.printStackTrace();
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
		
		return list;
	}
	
	
	public ArrayList<Deprecated_DuduObjQuest> parseQuestsDetails(ArrayList<Deprecated_DuduObjQuest> quests) {
		
		for(int i = 0; i < quests.size(); i++) {
			
			ArrayList<Questtext> questDetails = new ArrayList<Questtext>();
			
			Deprecated_DuduObjQuest currQuest = quests.get(i);
			
			ArrayList<String> rawQuestDetails = new ArrayList<String>();
			File file = new File(utilities.Constants.PATHtoTRIALquestFILES + currQuest.getName());
			//System.out.println(i+1 + ": " + currQuest.getName());
			BufferedReader reader = null;
			
			try {
				reader = new BufferedReader(new FileReader(file));
				String text = null;
				
				while ((text = reader.readLine()) != null) {
					rawQuestDetails.add(text);
					//System.out.println(text);
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
			
			//we start j = 1, because first line is the Name of the Quest
			//which we already have
			for(int j = 1; j < rawQuestDetails.size(); j++) {
				
				String currDetail = rawQuestDetails.get(j);
				
				if(currDetail.contains("⇒ Needed:")) {
					int colon = currDetail.indexOf(':');
					
					String currSubString = currDetail.substring(colon + 2);
					
					questDetails.add(new QuesttextRequirement(currSubString));
					
					ArrayList<String> questRequirements = new ArrayList<String>();
					ArrayList<String> preQuests = new ArrayList<String>();
					ArrayList<Deprecated_DuduObjSkillRank> preSkillRanks = new ArrayList<Deprecated_DuduObjSkillRank>();
					
					while(currSubString.contains(",") || currSubString.contains(".")) {
						int nextComma;
						if(currSubString.contains(",")) {
							nextComma = currSubString.indexOf(',');						
						} else if(currSubString.contains(".")) {
							nextComma = currSubString.indexOf(".");
						} else {
							nextComma = currSubString.length();
						}

						String currRequirement = currSubString.substring(0, nextComma);
						
						if(currRequirement.toLowerCase().contains("quest")) {
							int index = currRequirement.toLowerCase().indexOf("quest");
							String restRequirement = currRequirement.substring(index + 6);
							
							if(restRequirement.toLowerCase().contains("with")) {
								index = restRequirement.toLowerCase().lastIndexOf("with");
								preQuests.add(restRequirement.substring(0, index - 1));
								//System.out.println(restRequirement.substring(0, index - 1));
							} else if(restRequirement.toLowerCase().contains("completed")) {
								index = restRequirement.toLowerCase().lastIndexOf("completed");
								preQuests.add(restRequirement.substring(0, index - 1));
								//System.out.println(restRequirement.substring(0, index - 1));
							} else {
								preQuests.add(restRequirement);
								//System.out.println(restRequirement);
							}
							
						} else if(currRequirement.toLowerCase().contains("rank")) {
							int index = currRequirement.toLowerCase().indexOf("rank");
							String restRequirement = currRequirement.substring(index + 5);
							//System.out.println(restRequirement);
							
							Scanner inScan = new Scanner(restRequirement).useDelimiter("[^0-9]+");
							int rank = 0;
							
							if(inScan.hasNext()) {
								rank = inScan.nextInt();
							}
							
							inScan.close();
							
							String skill = restRequirement.substring(Integer.toString(rank).length() + 1);
							
							preSkillRanks.add(new Deprecated_DuduObjSkillRank(skill, rank));
							
							//System.out.println("Skill: " + skill + ", " + rank);
							
							
						} else {
							questRequirements.add(currRequirement);
						}
						
						//System.out.print(currSubString.substring(0, nextComma) + ", ");
						
						currSubString = currSubString.substring(nextComma + 1);
					}
					
					currQuest.setPreQuests(preQuests);
					currQuest.setPreSkillRanks(preSkillRanks);
					
					
					
					questRequirements.add(currSubString);
					
					//System.out.println(currSubString);
					
					currQuest.setQuestRequirements(questRequirements);
					
					

				
					
				} else if(currDetail.startsWith("→")) {
					questDetails.add(new QuesttextAction(
							currDetail.substring(2)));
					//System.out.println(i+1 + ": " + currDetail.substring(2));
				} else if(currDetail.contains("NPC:")) {
					int colon = currDetail.indexOf(':');
					questDetails.add(new QuesttextNpc(
							currDetail.substring(colon + 2)));
					//System.out.println(i+1 + ": " + currDetail.substring(colon + 2));
				} else if(currDetail.contains("YOU:")) {
					int colon = currDetail.indexOf(':');
					
					//in some cases we know, that you say something
					//but dont know what exactly
					//so we need to look, if there is any sentence, so that we
					//can take a substring
					//otherwise indexOutOfBounce Exception
					if((currDetail.length() - colon) <= 2) {
						questDetails.add(new QuesttextYou(""));
						//System.out.println(i+1 + ": " + "");
					} else {
						questDetails.add(new QuesttextYou(
								currDetail.substring(colon + 2)));
						//System.out.println(i+1 + ": " + currDetail.substring(colon + 2));
					}
				} else if(currDetail.startsWith("-")) {
					questDetails.add(new QuesttextStoryline(
							currDetail.substring(1, currDetail.length() - 1)));
					//System.out.println(i+1 + ": " + currDetail.substring(1, currDetail.length() - 1));
				} else if(currDetail.startsWith("Reward")) {
					int indexTab = currDetail.indexOf('\t');
					questDetails.add(new QuesttextReward(
							currDetail.substring(indexTab + 1)));
					//System.out.println(currDetail.substring(indexTab + 1));
				} else if(currDetail.startsWith("⇒")) {
					questDetails.add(new QuesttextDiffWays(
							currDetail.substring(2)));
					//System.out.println(currDetail.substring(2));
				} else if(currDetail.contains("Way") || currDetail.contains("way")) {
					questDetails.add(new QuesttextWaysHeadline(currDetail));
					//System.out.println(currDetail);
				} else if(currDetail.contains("QUEST COMPLETED")) {
					questDetails.add(new QuesttextQuestComplete());
					//System.out.println(currDetail);
				}
				
				//There shouldn't be anymore cases, except empty lines
				
				
			}
			
			currQuest.setQuestDetails(questDetails);
		
			
			
			
		}
		
		return quests;
	}

}
