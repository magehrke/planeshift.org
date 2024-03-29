package deprecated_questsTrial;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

import questObjectsTextLines.Questtext;
import questObjectsTextLines.QuesttextDiffWays;
import questObjectsTextLines.QuesttextGive;
import questObjectsTextLines.QuesttextInfo;
import questObjectsTextLines.QuesttextNpc;
import questObjectsTextLines.QuesttextNpcInternal;
import questObjectsTextLines.QuesttextNpcMe;
import questObjectsTextLines.QuesttextNpcMy;
import questObjectsTextLines.QuesttextNpcNarrate;
import questObjectsTextLines.QuesttextQuestComplete;
import questObjectsTextLines.QuesttextRequirement;
import questObjectsTextLines.QuesttextStoryline;
import questObjectsTextLines.QuesttextTime;
import questObjectsTextLines.QuesttextTo;
import questObjectsTextLines.QuesttextWaysHeadline;
import utilities.Pair;
import utilities.Helpfunctions;

public class QuestIntoPHP {

	public static void createQuestDetailsFiles(ArrayList<QuestTrial> quests) {
		
		for(int i = 0; i < quests.size(); i++) {
			
			//Select the current quest object
			QuestTrial currQuest = quests.get(i);
			//Get Name from the quest
			String questName = currQuest.getName();
			
			//### BEGIN: Create output filename ###
			StringBuffer filename = new StringBuffer(utilities.Constants.PATHtoPHPdetailsOLD);
			
				//Replace spaces with "-"
				while(questName.contains(" ")) {
					int indexOfSpace = questName.indexOf(" ");
					filename.append(questName.substring(0, indexOfSpace));
					filename.append("-");
					questName = questName.substring(indexOfSpace + 1);
				}
				filename.append(questName);
			filename.append(".php");
			//### END: Create output filename ###
			
			//set the variable questName to the correct String again
			questName = currQuest.getName();
			
			try {
				// Create new file
				File file = new File(filename.toString());

				// if file doesn't exist, create it
				if (!file.exists()) {
					file.createNewFile();
				}

				FileWriter fw = new FileWriter(file.getAbsoluteFile());
				BufferedWriter bw = new BufferedWriter(fw);
				
				/* ##### BEGIN: PHP Layout ##### */
				bw.append("<!doctype html>\n");
				bw.append("<html>\n");
				bw.append("<head>\n");
					bw.append("\t<title>"); bw.append(questName); bw.append("</title>\n\n");
					
					bw.append("\t<?php\n");
						bw.append("\t\t$path = $_SERVER['DOCUMENT_ROOT'];\n");
						bw.append("\t\t$path .= \"/html_header.php\";\n");
						bw.append("\t\tinclude($path);\n");
					bw.append("\t?>\n\n");
					
					bw.append("\t<!-- import the css for quests -->\n");
					bw.append("\t<link href=\"/styles/quest_single.css\" type=\"text/css\" rel=\"stylesheet\" />\n");
				bw.append("</head>\n\n");

				bw.append("<!-- BODY -->\n");
				bw.append("<body>\n");

				bw.append("<table align=\"center\">\n");
					bw.append("\t<tr>\n");
						bw.append("\t\t<td>\n");
				        	bw.append("\t\t\t<div id=\"root_site_container\">\n\n");
				            
				                bw.append("\t\t\t\t<!-- include Header and Navigation -->\n");
				                
				                bw.append("\t\t\t\t<?php\n");
				                	bw.append("\t\t\t\t\t$path = $_SERVER['DOCUMENT_ROOT'];\n");
				                	bw.append("\t\t\t\t\t$path .= \"/header_and_navigation.php\";\n");
				                	bw.append("\t\t\t\t\tinclude($path);\n");
					            bw.append("\t\t\t\t?>\n\n");
				                
								bw.append("\t\t\t\t<!-- Content section -->\n");
								bw.append("\t\t\t\t<div id=\"content_main_container\">\n");
									bw.append("\t\t\t\t\t<table class=\"quest_main_table\">\n\n");
									
									bw.append("\t\t\t\t\t<tr class=\"quest_title\">\n");
									bw.append("\t\t\t\t\t\t<td>");
									bw.append(questName);
									bw.append("</td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterTitle\">\n");
									bw.append("\t\t\t\t\t\t<td></td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									/*
									 * REQUIREMENTS			
									 */									
									bw.append("\t\t\t\t\t<tr class=\"quest_requirement\">\n");
									bw.append("\t\t\t\t\t\t<td>");
									
									// QUESTS
									ArrayList<String> preQuests = currQuest.getPreQuests();
									if(preQuests.size() != 0) {
										
										bw.append("Prequest: ");
			
										if(preQuests.get(0).equals("None")) {
											bw.append("None");
										} else {
											bw.append(questLinkPhp(preQuests.get(0)));
											for(int l = 1; l < preQuests.size(); l++) {
												bw.append(", ");
												bw.append(questLinkPhp(preQuests.get(l)));
											}
											bw.append("");
										}
										bw.append("\n");
										bw.append("\t\t\t\t\t\t<br style=\"display: block; margin: 5px 0; content: ' '\">");
										bw.newLine();
										bw.append("\t\t\t\t\t\t");
									}
									
									Boolean firstItem = true;

									bw.append("Required: ");
									
									// SKILLS
									ArrayList<Pair<Integer, String>> needSkills = currQuest.getNeedSkills();
									if(needSkills.size() != 0) {
										firstItem = false;
										
										bw.append("Rank " + needSkills.get(0).getFirst() + " ");
										bw.append(needSkills.get(0).getSecond());
										for(int l = 1; l < needSkills.size(); l++) {
											bw.append(", Rank " + needSkills.get(l).getFirst() + " ");
											bw.append(needSkills.get(l).getSecond());
										}
									}
									
									// ITEMS
									ArrayList<Pair<Integer, String>> needItems = currQuest.getNeedItems();
									if(needItems.size() != 0) {
										if(! firstItem) {
											bw.append(", ");
										} else {
											firstItem = false;
										}
										bw.append(needItems.get(0).getFirst() + " ");
										bw.append(needItems.get(0).getSecond());
										for(int l = 1; l < needItems.size(); l++) {
											bw.append(", " + needItems.get(l).getFirst() + " ");
											bw.append(needItems.get(l).getSecond());
										}
									}
									
									//WINCH ACCESS
									if(currQuest.isWinchAccess()) {
										if(! firstItem) {
											bw.append(", ");
										} else {
											firstItem = false;
										}
										bw.append("Winch Access");
									}
									
									// If there are no requirements.
									if(firstItem) {
										bw.append("Nothing");
									}
									
									bw.append(".");
									bw.append("</td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									/* Insert empty line after Requirements */
									bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterRequirement\">\n");
									bw.append("\t\t\t\t\t\t<td></td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									
									
									/*
									 * ITERATE OVER QUEST DETAILS
									 */
									ArrayList<Questtext> qDetails = currQuest.getQuestDetails();
									for(int k = 0; k < qDetails.size(); k++) {
										Questtext currDetail = qDetails.get(k);
										
										bw.append("\t\t\t\t\t<tr class=\"");
																				
										if(currDetail instanceof QuesttextNpc) {
											bw.append("quest_npc");
										} else if(currDetail instanceof QuesttextNpcInternal) {
											bw.append("quest_you");
										} else if(currDetail instanceof QuesttextNpcMe) {
											bw.append("quest_storyline");
										} else if(currDetail instanceof QuesttextNpcMy) {
											bw.append("quest_storyline");
										} else if(currDetail instanceof QuesttextNpcNarrate) {
											bw.append("quest_storyline");
										} else if(currDetail instanceof QuesttextTo) {
											bw.append("quest_action");
										} else if(currDetail instanceof QuesttextGive) {
											bw.append("quest_action");
										} else if(currDetail instanceof QuesttextTime) {
											bw.append("quest_action");
										} else if(currDetail instanceof QuesttextInfo) {
											bw.append("quest_action");
//										} else if(currDetail instanceof QuesttextDiffWays) {
//											bw.append("quest_diffWays");

//										} else if(currDetail instanceof QuesttextWaysHeadline) {
//											bw.append("quest_waysHeadline");
										}
										
										bw.append("\">\n");
										bw.append("\t\t\t\t\t\t<td>");
										
										if(currDetail instanceof QuesttextRequirement) {
											bw.append("Required: ");
										} else if(currDetail instanceof QuesttextNpc) {
											// nothing -> there will be the Name of the NPC
										} else if(currDetail instanceof QuesttextNpcInternal) {
											bw.append("YOU: ");
										} else if(currDetail instanceof QuesttextNpcNarrate) {
											bw.append("");
										} else if(currDetail instanceof QuesttextNpcMe) {
											bw.append("- ");							
										} else if(currDetail instanceof QuesttextNpcMy) {
											bw.append("- ");						
										} else if(currDetail instanceof QuesttextTo) {
											bw.append("→ Go to ");
										} else if(currDetail instanceof QuesttextGive) {
											bw.append("→ ");
										} else if(currDetail instanceof QuesttextTime) {
											bw.append("→ ");
										} else if(currDetail instanceof QuesttextInfo) {
											bw.append("[INFO]: ");
										} else if(currDetail instanceof QuesttextQuestComplete) {
											//add nothing at the beginning
										} else if(currDetail instanceof QuesttextWaysHeadline) {
											//add nothing at the beginning
										}
										
										/*
										 * The Give object has an empty String, which we do not need.
										 * It has an empty string, because it's parent class has this attribute.
										 * All others just print out their string
										 */
										if(currDetail instanceof QuesttextGive) {
											bw.append("Give ");
											String npc = ((QuesttextGive) currDetail).getNpc();
											npcLinkPhp(bw, npc);
											ArrayList<Pair<Integer, String>> items = ((QuesttextGive) currDetail).getItems();
											
											// The first one
											bw.append(String.valueOf(items.get(0).getFirst()));
											bw.append(" " + items.get(0).getSecond());
											
											for(int l = 1; l < items.size(); l++) {
												if(l == (items.size() - 1)) {
													bw.append(" and ");
												} else {
													bw.append(" , ");
												}
												bw.append(String.valueOf(items.get(l).getFirst()));
												bw.append(" " + items.get(l).getSecond());
											}
										} else if(currDetail instanceof QuesttextTo) {
											String npc = currDetail.getText();
											npcLinkPhp(bw, npc);
											
										} else if(currDetail instanceof QuesttextStoryline) {
											bw.append(currDetail.getText());
											bw.append(" -");
										} else{
											bw.append(currDetail.getText());
										}
										
										bw.append("</td>\n\t\t\t\t\t</tr>\n");
										
										/*
										 * Insert empty line, if needed.
										 * If k = qDetials.size() its the last line,
										 * so we do not need to insert an empty line.
										 */
										if(k != qDetails.size() - 1) {
											Questtext nextDetail = qDetails.get(k+1);
											
											if(currDetail instanceof QuesttextNpc && nextDetail instanceof QuesttextNpcInternal) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_btwNpcYou\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											} else if(currDetail instanceof QuesttextNpcInternal && nextDetail instanceof QuesttextNpc) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_btwNpcYou\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											} else if((currDetail instanceof QuesttextNpc && !(nextDetail instanceof QuesttextNpc) && 
													!(nextDetail instanceof QuesttextNpcInternal))
													|| (currDetail instanceof QuesttextNpcInternal && !(nextDetail instanceof QuesttextNpcInternal) && 
															!(nextDetail instanceof QuesttextNpc))) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterNpcYou\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n"); 
											} else if(currDetail instanceof QuesttextTo || currDetail instanceof QuesttextGive 
													|| currDetail instanceof QuesttextTime || currDetail instanceof QuesttextInfo) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterAction\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											} else if(currDetail instanceof QuesttextNpcNarrate || currDetail instanceof QuesttextNpcMe || currDetail instanceof QuesttextNpcMy) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterStoryline\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											} else if(currDetail instanceof QuesttextDiffWays) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterDiffWays\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											} else if(currDetail instanceof QuesttextWaysHeadline) {
												bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterWaysHeadline\">\n");
												bw.append("\t\t\t\t\t\t<td></td>\n");
												bw.append("\t\t\t\t\t</tr>\n");
											}
										}
									}
									
									/*
									 * QUEST COMPLETED LINE
									 */
									
									// Put an empty line before the Quest Complete Statement
									// There will never be a second empty line, because the
									// "Empty Line"-inserter is not called at the last Detail
									bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterNpcYou\">\n");
									bw.append("\t\t\t\t\t\t<td></td>\n");
									bw.append("\t\t\t\t\t</tr>\n"); 
									
									// The Quest Complete statement
									bw.append("\t\t\t\t\t<tr class=\"quest_questComplete\">\n");
									bw.append("\t\t\t\t\t\t<td>");
									bw.append("QUEST COMPLETED");
									bw.append("</td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									// Empty Line before the Rewards
									bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterQuestComplete\">\n");
									bw.append("\t\t\t\t\t\t<td></td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									
									/*
									 * REWARDS
									 */
									
									bw.append("\t\t\t\t\t<tr class=\"quest_reward\">\n");
									bw.append("\t\t\t\t\t\t<td>");	
									bw.append("Rewards: ");
									
									Boolean firstRewardItem = true;
									
									// ITEMS
									ArrayList<Pair<Integer, String>> rewardItems = currQuest.getRewardItems();
									if(rewardItems.size() != 0) {
										firstRewardItem = false;
										bw.append(String.valueOf(rewardItems.get(0).getFirst()));
										bw.append(" " + rewardItems.get(0).getSecond());
										for(int l = 1; l < rewardItems.size(); l++) {
											bw.append(", " + rewardItems.get(l).getFirst() + " ");
											bw.append(rewardItems.get(l).getSecond());
										}
									}
									
									// SKILLS
									ArrayList<Pair<Integer, String>> rewardSkills = currQuest.getRewardSkills();
									if(rewardSkills.size() != 0) {
										if(firstRewardItem) {
											firstRewardItem = false; 
										} else {
											bw.append(", ");
										}
										bw.append(rewardSkills.get(0).getFirst() + " Level in ");
										bw.append(rewardSkills.get(0).getSecond());
										for(int l = 1; l < rewardSkills.size(); l++) {
											bw.append(", " + rewardSkills.get(l).getFirst() + " Level in ");
											bw.append(rewardSkills.get(l).getSecond());
										}
									}
									
									// COMBAT MOVES
									ArrayList<Pair<String, String>> rewardCombatMoves = currQuest.getRewardCombatMove();
									if(rewardCombatMoves.size() != 0) {
										if(firstRewardItem) {
											firstRewardItem = false; 
										} else {
											bw.append(", ");
										}
										bw.append("'" + rewardCombatMoves.get(0).getFirst() + "' Combat Move '" + rewardCombatMoves.get(0).getSecond() + "'");
										for(int l = 1; l < rewardCombatMoves.size(); l++) {
											bw.append(", '" + rewardCombatMoves.get(0).getFirst() + "' Combat Move '" + rewardCombatMoves.get(0).getSecond() + "'");
										}
									}
									
									
									// Association
									ArrayList<Pair<String, String>> rewardAssociation = currQuest.getRewardAssociation();
									if(rewardAssociation.size() != 0) {
										if(firstRewardItem) {
											firstRewardItem = false; 
										} else {
											bw.append(", ");
										}
										bw.append(rewardAssociation.get(0).getFirst() + " Faction with ");
										bw.append(rewardAssociation.get(0).getSecond());
										for(int l = 1; l < rewardAssociation.size(); l++) {
											bw.append(", " + rewardAssociation.get(l).getFirst() + " Faction with ");
											bw.append(rewardAssociation.get(l).getSecond());
										}
									}
									
									// Money
									int rewardMoney = currQuest.getRewardMoney();
									if(rewardMoney != 0) {
										if(firstRewardItem) {
											firstRewardItem = false; 
										} else {
											bw.append(", ");
										}
										bw.append(rewardMoney + " Tria");
//										System.out.println(rewardMoney + " Tria");
									}

									// XP
									int rewardXP = currQuest.getRewardXP();
									if(rewardXP != 0) {
										if(firstRewardItem) {
											firstRewardItem = false; 
										} else {
											bw.append(", ");
										}
										bw.append(rewardXP + " XP");
									}
									
									// If there is no reward.
									if(firstRewardItem) {
										bw.append("None");
									}
									
									bw.append(".");
									bw.append("</td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterReward\">\n");
									bw.append("\t\t\t\t\t\t<td></td>\n");
									bw.append("\t\t\t\t\t</tr>\n");
									
									
			                        
									bw.append("\n\t\t\t\t\t</table>\n");
								bw.append("\t\t\t\t</div>\n\n");
			                    
								bw.append("\t\t\t\t<!-- include Footer -->\n");
								bw.append("\t\t\t\t<?php\n");
				                	bw.append("\t\t\t\t\t$path = $_SERVER['DOCUMENT_ROOT'];\n");
				                	bw.append("\t\t\t\t\t$path .= \"/footer.php\";\n");
				                	bw.append("\t\t\t\t\tinclude($path);\n");
					            bw.append("\t\t\t\t?>\n\n");
			                
							bw.append("\t\t\t</div>\n");
						bw.append("\t\t</td>\n");
					bw.append("\t</tr>\n");
				bw.append("</table>\n\n");

				bw.append("</body>\n");
				bw.append("</html>\n");

				
				
				bw.close();

			} catch (IOException e) {
				e.printStackTrace();
			}
			
		}
	}
	
	public static void npcLinkPhp(BufferedWriter bw, String npc) throws IOException {
		bw.append("\n\t\t\t\t\t\t<?php\n");

		bw.append("\t\t\t\t\t\t\techo \"<a href='\";\n");
		
		bw.append("\t\t\t\t\t\t\t/* Printing the NPC with a link to the Map */\n");
		bw.append("\t\t\t\t\t\t\t/* The Variable $npcName has to be set !!! */\n");
		bw.append("\t\t\t\t\t\t\t$npcName = '" + npc + "';\n");
		bw.append("\t\t\t\t\t\t\t$path = $_SERVER['DOCUMENT_ROOT'];\n");
		bw.append("\t\t\t\t\t\t\t$path .= \"/includes/npc_link_to_map.inc.php\";\n");
		bw.append("\t\t\t\t\t\t\tinclude($path);\n");

		bw.append("\t\t\t\t\t\t\techo \"' target='_blank'>" + npc + "</a>\";\n");
		bw.append("\t\t\t\t\t\t?>\n\t\t\t\t\t\t");
	}
	
	/**
	 * 
	 * @param quest The Quest as a String you want to transform into a Link
	 * @return In PHP Syntax the Quest as a clickable link.
	 */
	public static String questLinkPhp(String quest) {
		String questCheck = Helpfunctions.checkString(quest);
		questCheck = quest.replace(' ', '-');
		
		return "<a href=\"/quests/details-new/" + questCheck + ".php\">" + quest + "</a>";

	}
	
}
