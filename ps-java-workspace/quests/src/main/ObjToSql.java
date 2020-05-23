package main;

import java.io.BufferedWriter;
import java.io.IOException;
import java.util.ArrayList;

import questObjectsNeedReward.Quest;
import questObjectsNeedReward.QuestRewardsDetailsSpecificOR;
import questObjectsNeedReward.QuestRewardsDetailsStandard;
import questObjectsNeedReward.QuestRewardsWaySpecific;
import questObjectsNeedReward.QuestRewardsWayStandard;
import utilities.Pair;

public class ObjToSql {
	
	public void createSqlQuestOverviewFile(BufferedWriter bw, ArrayList<Quest> quests) 
			throws IOException {
		
		
			bw.append("\t$quests_to_insert = array(");
			bw.newLine();
			
			/*
			 * QuestNew:
			 */
			for(int i = 0; i < quests.size(); i++) {
				
				Quest currQuest = quests.get(i);
				
				StringBuffer sb = new StringBuffer("\t\t'");
				sb.append(utilities.Helpfunctions.checkString(currQuest.getQuestname()));
				sb.append("', '");
				sb.append(utilities.Helpfunctions.checkString(currQuest.getNpc()));
				sb.append("', '");	
				if(! currQuest.getCheckup().equals("")) {
					sb.append(utilities.Helpfunctions.checkString(currQuest.getCheckup()));
				} else {
					sb.append("TBD");
				}
				
				//last iteration, we don't need a comma at the end
				if(i == quests.size() - 1) {
					sb.append("'");
				} else {
					sb.append("',");
				}
				
				bw.append(sb.toString());
				bw.newLine();
			}	
			
			bw.append("\t);");
	}
	
	public void createSqlQuestRewardFile(BufferedWriter bw, ArrayList<Quest> quests) 
			throws IOException {
			
			bw.append("\t$questsRewards_to_insert = array(");
			bw.newLine();
			
			/*
			 * We need this to get our punctuation right.
			 * When its the first Item, we dont want a ",".
			 * 
			 * But we also use it, to see if a quest had
			 * no rewards. Then we dont set a "," in front
			 * of the quest.
			 */
			Boolean firstItem = true;
			
			for(int i = 0; i < quests.size(); i++) {
				Quest currQuest = quests.get(i);
				String checkedQuestName = utilities.Helpfunctions.checkString(currQuest.getQuestname());
				
				ArrayList<QuestRewardsWayStandard> rewardObjects = currQuest.getRewards();
				
				for(int x = 0; x < rewardObjects.size(); x++) {
					QuestRewardsWayStandard currRewardObject = rewardObjects.get(x);
					ArrayList<QuestRewardsDetailsStandard> rewardDetails = currRewardObject.getRewards();
					
					int currWay = 0;
					if(currRewardObject.getClass() == QuestRewardsWaySpecific.class) {
						currWay = ((QuestRewardsWaySpecific) currRewardObject).getWay();
					}

					for(int y = 0; y < rewardDetails.size(); y++) {
						
						QuestRewardsDetailsStandard currRewardDetail = rewardDetails.get(y);
						
						int currVariant = 0;
						if(rewardDetails.get(y).getClass() == QuestRewardsDetailsSpecificOR.class) {
							 currVariant = ((QuestRewardsDetailsSpecificOR) currRewardDetail).getVariant();
						}
					
						/*
						 * Add: Reward Items
						 */
						ArrayList<Pair<Integer, String>> rewardItems = currRewardDetail.getItems();
		
						for(int j = 0; j < rewardItems.size(); j++) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
							
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Item', '");
							sb.append(utilities.Helpfunctions.checkString(rewardItems.get(j).getSecond()));
							sb.append("', ");
							sb.append(rewardItems.get(j).getFirst());
							sb.append(", null");
							
							bw.append(sb.toString());
							
						}
						
						/*
						 * Add: Reward Skill
						 */
						ArrayList<Pair<Integer, String>> rewardSkills = currRewardDetail.getSkillChange();
		
						for(int j = 0; j < rewardSkills.size(); j++) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
							
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Skill', '");
							sb.append(utilities.Helpfunctions.checkString(rewardSkills.get(j).getSecond()));
							sb.append("', ");
							sb.append(rewardSkills.get(j).getFirst());
							sb.append(", null");
		
							bw.append(sb.toString());
							
						}
						
						/*
						 * Add: Reward Combat Move
						 */
						ArrayList<Pair<String, String>> rewardCombatMove = currRewardDetail.getCombatMoves();
		
						for(int j = 0; j < rewardCombatMove.size(); j++) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
							
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Combat Move', '");
							sb.append(utilities.Helpfunctions.checkString(rewardCombatMove.get(j).getSecond()));
							sb.append("', 0, '");
							sb.append(utilities.Helpfunctions.checkString(rewardCombatMove.get(j).getFirst()));
							sb.append("'");
												
							bw.append(sb.toString());
							
						}
						
						/*
						 * Add: Reward Association
						 */
						ArrayList<Pair<Integer, String>> rewardAssociation = currRewardDetail.getFactions();
		
						for(int j = 0; j < rewardAssociation.size(); j++) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
							
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Association', '");
							sb.append(utilities.Helpfunctions.checkString(rewardAssociation.get(j).getSecond()));
							sb.append("', ");
							sb.append(rewardAssociation.get(j).getFirst());
							sb.append(", null");
		
							bw.append(sb.toString());
							
						}
						
						/*
						 * Add: Reward Specials
						 */
						
						ArrayList<String> rewardSpecials = currRewardDetail.getSpecials();
						
						for(int j = 0; j < rewardSpecials.size(); j++) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
				
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Special', '");
							sb.append(utilities.Helpfunctions.checkString(rewardSpecials.get(j)));
							sb.append("', 0, null");
		
							bw.append(sb.toString());
						}
						
						/*
						 * Add: Reward Money
						 */
						int rewardMoney = currRewardDetail.getMoney();
						
						if(rewardMoney != 0) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
		
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'Money', null, ");
							sb.append(rewardMoney);
							sb.append(", null");
		
							bw.append(sb.toString());
						}
						
						/*
						 * Add: Reward XP
						 */
						int rewardXP = currRewardDetail.getXp();
						
						if(rewardXP != 0) {
							if(firstItem) {
								firstItem = false;
							} else {
								bw.append(",");
								bw.newLine();
							}
							
							StringBuffer sb = new StringBuffer("\t\t'");
							sb.append(checkedQuestName);
							sb.append("', " + currWay + ", " + currVariant);
							sb.append(", 'XP', null, ");
							sb.append(rewardXP);
							sb.append(", null");
		
							bw.append(sb.toString());
						}
					}
				}
			}
			bw.newLine();
			bw.append("\t);");
			bw.newLine();
	}
}
