package deprecated_questoverview;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Deprecated_OldQuestNeedsRewardsIntoQuestOverview {
	
	public static void main(String[] args) throws IOException {
		
		Files.copy(Paths.get(utilities.Constants.PATHforSQLoutput + "/new-quest-overview.psqview"),
				Paths.get(utilities.Constants.PATHforSQLoutput + "/new-quest-overview-with-oldData.psqview"),
				StandardCopyOption.REPLACE_EXISTING);
		
		
		String oldQuestsFolder = utilities.Constants.PATHforSQLoutput + "/quest-details-dudu";

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

		ArrayList<String> npcNames = utilities.Helpfunctions.getNamesOfNpcPeople();

		// Iterate over all the quests
		for (int i = 0; i < filenames.size(); i++) {
			
			boolean foundQuest = false;
			boolean hasNeedOrReward = false;
			
			// Get the current quest file we are investigating
			String currFileName = filenames.get(i);

			/* ##### BEGIN: Extract the pure lines from input file ##### */
			ArrayList<String> rawQuestDetails = utilities.Helpfunctions
					.readLinesOfFile(oldQuestsFolder + '/' + currFileName);

			for (int j = 0; j < rawQuestDetails.size(); j++) {
				String currLine = rawQuestDetails.get(j).trim();
								
				if (currLine.toLowerCase().startsWith("⇒ needed:")) {
					hasNeedOrReward = true;
					currLine = currLine.substring(9).trim();		
									
					// ------------- //
					// Copy all lines of the old file until the current quest 
					
					boolean correctQuest = false;
					
					ArrayList<String> overviewDetails = utilities.Helpfunctions
							.readLinesOfFile(utilities.Constants.PATHforSQLoutput + "/new-quest-overview-with-oldData.psqview");
					
					FileWriter fw = new FileWriter(utilities.Constants.PATHforSQLoutput + "/new-quest-overview-with-oldData.psqview");
					BufferedWriter bw = new BufferedWriter(fw);

					
					for(int k = 0; k < overviewDetails.size(); k++) {
						if(correctQuest) {
							if(overviewDetails.get(k).toLowerCase().startsWith("[need]")) {
								bw.append(overviewDetails.get(k).trim()).append(" ").append(currLine).append("\n");	
								correctQuest = false;
							} else {
								bw.append(overviewDetails.get(k)).append("\n");
							}
						}
						else if(overviewDetails.get(k).toLowerCase().startsWith("[quest]")
								&& overviewDetails.get(k).toLowerCase().contains(currFileName.toLowerCase())) {
							correctQuest = true;
							foundQuest = true;
							bw.append(overviewDetails.get(k)).append("\n"); 
						} else {
							bw.append(overviewDetails.get(k)).append("\n");
						}
					}
					bw.close();
					// ------------- //
				}
					
				else if (currLine.toLowerCase().startsWith("reward")) {
					hasNeedOrReward = true;
					currLine = currLine.substring(6).trim();		

					// ------------- //
					// Copy all lines of the old file until the current quest 
					
					boolean correctQuest = false;
					boolean atRewards = false;
					
					ArrayList<String> overviewDetails = utilities.Helpfunctions
							.readLinesOfFile(utilities.Constants.PATHforSQLoutput + "/new-quest-overview-with-oldData.psqview");
					
					FileWriter fw = new FileWriter(utilities.Constants.PATHforSQLoutput + "/new-quest-overview-with-oldData.psqview");
					BufferedWriter bw = new BufferedWriter(fw);

					
					for(int k = 0; k < overviewDetails.size(); k++) {
						if(correctQuest) {
							if(k == overviewDetails.size()-1) {
								bw.append(overviewDetails.get(k).trim()).append("\n");
								bw.append("[Reward old] ").append(currLine).append("\n");
							} else if(atRewards) {
								if(overviewDetails.get(k).toLowerCase().startsWith("[reward]")) {
									bw.append(overviewDetails.get(k).trim()).append("\n");
								} else {
									bw.append("[Reward old] ").append(currLine).append("\n");
									bw.append(overviewDetails.get(k).trim()).append("\n");
									atRewards = false;
									correctQuest = false;
								}
							} else if(overviewDetails.get(k).toLowerCase().startsWith("[quest]")) {
								correctQuest = false;
								bw.append(overviewDetails.get(k)).append("\n");
							} else if(overviewDetails.get(k).toLowerCase().startsWith("[reward]")) {
								bw.append(overviewDetails.get(k)).append("\n");
								atRewards = true;
							} else {
								bw.append(overviewDetails.get(k)).append("\n");
							}
						} else if(overviewDetails.get(k).toLowerCase().startsWith("[quest]")
								&& overviewDetails.get(k).toLowerCase().contains(currFileName.toLowerCase())) {
							correctQuest = true;
							foundQuest = true;
							bw.append(overviewDetails.get(k)).append("\n"); 
						} else {
							bw.append(overviewDetails.get(k)).append("\n");
						}
					}
					bw.close();
					// ------------- //
				}
				
				else if(currLine.startsWith("Note:")) {
					
				}
				
				else {
					continue;
				}
				
				
				
				
			}
			// The quest has a reward/need line, but we couldnt find the quest in the rewards overview table
			if(!foundQuest) {
				System.out.println(currFileName);
			}
		}
	
		
	}

}
