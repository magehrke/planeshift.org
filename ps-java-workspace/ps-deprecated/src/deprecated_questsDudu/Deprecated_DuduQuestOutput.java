package deprecated_questsDudu;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

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

import java.lang.StringBuffer;

@Deprecated
public class Deprecated_DuduQuestOutput {

	/**
	 * Takes a buffered writer where we add the information of the (old) quests,
	 * including quest name, quest npc, quest difficulty and quest checkup. This
	 * will later be uploaded to the server as SQL document.
	 * 
	 * @param bw
	 *            The buffered writer where we write the quest informations to which
	 *            will be uploaded as SQL file to the server.
	 * @param quests
	 *            A list of Quest objects which we got from parsing the overview
	 *            file of the 'old' (extracted from duduandlele.de) quests.
	 * @throws IOException
	 *             This will be thrown, if we add incorrect data to our buffered
	 *             writer.
	 */
	public static void writeOldQuestsToSql(BufferedWriter bw, ArrayList<Deprecated_DuduObjQuest> quests) throws IOException {

		bw.append("\t$questsOld_to_insert = array(");
		bw.newLine();

		for (int i = 0; i < quests.size(); i++) {

			Deprecated_DuduObjQuest currQuest = quests.get(i);

			StringBuffer sb = new StringBuffer("\t\t'");
			sb.append(utilities.Helpfunctions.checkString(currQuest.getName()));
			sb.append("', '");
			sb.append(utilities.Helpfunctions.checkString(currQuest.getNpc()));

			sb.append("', '");
			sb.append(utilities.Helpfunctions.checkString(currQuest.getDifficulty()));
			sb.append("', '");

			if (currQuest.getCheckup() != null) {
				sb.append(utilities.Helpfunctions.checkString(currQuest.getCheckup()));
			} else {
				sb.append("TBD");
			}

			// last iteration, we don't need a comma at the end
			if (i == quests.size() - 1) {
				sb.append("'");
			} else {
				sb.append("',");
			}

			bw.append(sb.toString());
			bw.newLine();
		}

		bw.append("\t);");
	}

	
	
	public static void createSqlQuestRewardFile(BufferedWriter bw, ArrayList<Deprecated_DuduObjQuest> quests) throws IOException {

		bw.append("\t$questsRewardsOld_to_insert = array(");
		bw.newLine();

		for (int i = 0; i < quests.size(); i++) {

			Deprecated_DuduObjQuest currQuest = quests.get(i);

			ArrayList<String> currRewards = currQuest.getRewards();

			for (int j = 0; j < currRewards.size(); j++) {
				StringBuffer sb = new StringBuffer("\t\t'");
				sb.append(utilities.Helpfunctions.checkString(currQuest.getName()));
				sb.append("', '");
				sb.append(utilities.Helpfunctions.checkString(currRewards.get(j)));

				if (i == quests.size() - 1 && j == currRewards.size() - 1) {
					sb.append("'");
				} else {
					sb.append("',");
				}

				bw.append(sb.toString());
				bw.newLine();
			}

		}

		bw.append("\t);");
	}

	public static void createQuestPrequestTable(BufferedWriter bw, ArrayList<Deprecated_DuduObjQuest> quests) throws IOException {

		bw.newLine();
		bw.append("\t$questsPreQuests_to_insert = array(");
		bw.newLine();

		for (int i = 0; i < quests.size(); i++) {
			Deprecated_DuduObjQuest currQuest = quests.get(i);
			ArrayList<String> currPreQuests = currQuest.getPreQuests();

			for (int j = 0; j < currPreQuests.size(); j++) {
				StringBuffer sb = new StringBuffer("\t\t'");
				sb.append(utilities.Helpfunctions.checkString(currQuest.getName()));
				sb.append("', '");
				sb.append(utilities.Helpfunctions.checkString(currPreQuests.get(j)));
				sb.append("', 'none");

				if (i == quests.size() - 1 && j == currPreQuests.size() - 1) {
					sb.append("'");
				} else {
					sb.append("',");
				}

				bw.append(sb.toString());
				bw.newLine();
			}

		}

		bw.append("\t);");

	}

	public static void createQuestPreSkillRankTable(BufferedWriter bw, ArrayList<Deprecated_DuduObjQuest> quests) throws IOException {

		bw.newLine();
		bw.newLine();
		bw.append("\t$questsPreSkillRanks_to_insert = array(");
		bw.newLine();

		for (int i = 0; i < quests.size(); i++) {
			Deprecated_DuduObjQuest currQuest = quests.get(i);
			ArrayList<Deprecated_DuduObjSkillRank> currPreSkillRanks = currQuest.getPreSkillRanks();

			for (int j = 0; j < currPreSkillRanks.size(); j++) {
				StringBuffer sb = new StringBuffer("\t\t'");
				sb.append(utilities.Helpfunctions.checkString(currQuest.getName()));
				sb.append("', '");
				sb.append(utilities.Helpfunctions.checkString(currPreSkillRanks.get(j).getSkill()));
				sb.append("', ");
				sb.append(currPreSkillRanks.get(j).getRank());
				sb.append(", 'none'");
				if (!(i == quests.size() - 1 && j == currPreSkillRanks.size() - 1)) {
					sb.append(",");
				}

				bw.append(sb.toString());
				bw.newLine();
			}

		}

		bw.append("\t);");

	}

	public static void createQuestDetailsFiles(ArrayList<Deprecated_DuduObjQuest> quests) {

		for (int i = 0; i < quests.size(); i++) {
			Deprecated_DuduObjQuest currQuest = quests.get(i);

			StringBuffer filename = new StringBuffer(utilities.Constants.PATHtoPHPdetailsOLD);

			String questName = currQuest.getName();

			// Replace spaces with "-"
			while (questName.contains(" ")) {
				int indexOfSpace = questName.indexOf(" ");
				filename.append(questName.substring(0, indexOfSpace));
				filename.append("-");
				questName = questName.substring(indexOfSpace + 1);
			}
			filename.append(questName);
			filename.append(".php");

			// set the variable questName to the correct String again
			questName = currQuest.getName();

			// System.out.println(filename.toString());

			try {
				File file = new File(filename.toString());

				// if file doesn't exist, create it
				if (!file.exists()) {
					file.createNewFile();
				}

				FileWriter fw = new FileWriter(file.getAbsoluteFile());
				BufferedWriter bw = new BufferedWriter(fw);

				/*
				 * Start .php layout
				 */
				bw.append("<!doctype html>\n");
				bw.append("<html>\n");
				bw.append("<head>\n");
				bw.append("\t<title>");
				bw.append(questName);
				bw.append("</title>\n\n");

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

				ArrayList<Questtext> qDetails = currQuest.getQuestDetails();
				// System.out.println(qDetails.size());
				for (int k = 0; k < qDetails.size(); k++) {
					Questtext currDetail = qDetails.get(k);

					bw.append("\t\t\t\t\t<tr class=\"");

					if (currDetail instanceof QuesttextRequirement) {
						bw.append("quest_requirement");
					} else if (currDetail instanceof QuesttextNpc) {
						bw.append("quest_npc");
					} else if (currDetail instanceof QuesttextYou) {
						bw.append("quest_you");
					} else if (currDetail instanceof QuesttextStoryline) {
						bw.append("quest_storyline");
					} else if (currDetail instanceof QuesttextAction) {
						bw.append("quest_action");
					} else if (currDetail instanceof QuesttextReward) {
						bw.append("quest_reward");
					} else if (currDetail instanceof QuesttextDiffWays) {
						bw.append("quest_diffWays");
					} else if (currDetail instanceof QuesttextQuestComplete) {
						bw.append("quest_questComplete");
					} else if (currDetail instanceof QuesttextWaysHeadline) {
						bw.append("quest_waysHeadline");
					}

					bw.append("\">\n");
					bw.append("\t\t\t\t\t\t<td>");

					if (currDetail instanceof QuesttextRequirement) {
						bw.append("Required: ");
					} else if (currDetail instanceof QuesttextNpc) {
						bw.append("NPC: ");
					} else if (currDetail instanceof QuesttextYou) {
						bw.append("YOU: ");
					} else if (currDetail instanceof QuesttextStoryline) {
						bw.append("- ");
					} else if (currDetail instanceof QuesttextAction) {
						bw.append("→ ");
					} else if (currDetail instanceof QuesttextReward) {
						bw.append("Reward: ");
					} else if (currDetail instanceof QuesttextDiffWays) {
						bw.append("⇒ ");
					} else if (currDetail instanceof QuesttextQuestComplete) {
						// add nothing at the beginning
					} else if (currDetail instanceof QuesttextWaysHeadline) {
						// add nothing at the beginning
					}

					bw.append(currDetail.getText());

					if (currDetail instanceof QuesttextStoryline) {
						bw.append(" -");
					}
					bw.append("</td>\n\t\t\t\t\t</tr>\n");

					/*
					 * Insert empty line, if needed. If k = qDetials.size() its the last line, so we
					 * do not need to insert an empty line.
					 */
					if (k != qDetails.size() - 1) {
						Questtext nextDetail = qDetails.get(k + 1);

						if (currDetail instanceof QuesttextNpc && nextDetail instanceof QuesttextYou) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_btwNpcYou\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextYou && nextDetail instanceof QuesttextNpc) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_btwNpcYou\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if ((currDetail instanceof QuesttextNpc && !(nextDetail instanceof QuesttextNpc)
								&& !(nextDetail instanceof QuesttextYou))
								|| (currDetail instanceof QuesttextYou && !(nextDetail instanceof QuesttextYou)
										&& !(nextDetail instanceof QuesttextNpc))) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterNpcYou\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextAction) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterAction\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextRequirement) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterRequirement\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextStoryline) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterStoryline\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextQuestComplete) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterQuestComplete\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextDiffWays) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterDiffWays\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextWaysHeadline) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterWaysHeadline\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						} else if (currDetail instanceof QuesttextReward) {
							bw.append("\t\t\t\t\t<tr class=\"quest_emptyRow_afterReward\">\n");
							bw.append("\t\t\t\t\t\t<td></td>\n");
							bw.append("\t\t\t\t\t</tr>\n");
						}
					}
				}

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

}
