package deprecated_questoverview;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import questRewardNeedObjects.Quest;
import utilities.Pair;

public class Deprecated_ConvertOldQuestToOverview {

	public static void main(String[] args) {

		int counter_needed = 0;
		int counter_firstway = 0;
		int counter_needRanks = 0;

		String oldQuestsFolder = utilities.Constants.PATHforSQLoutput + "/quest-details-old";

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

		// Iterate over all the quests
		for (int i = 0; i < filenames.size(); i++) {

			// Get the current quest file we are investigating
			String currFileName = filenames.get(i);

			/* ##### BEGIN: Extract the pure lines from input file ##### */
			ArrayList<String> rawQuestDetails = new ArrayList<String>();
			File file = new File(oldQuestsFolder + '/' + currFileName);

			BufferedReader reader = null;
			try {
				reader = new BufferedReader(new FileReader(file));
				String text = null;

				while ((text = reader.readLine()) != null) {
					rawQuestDetails.add(text);
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
			/* ##### END: Extract the pure lines from input file ##### */

			Quest quest = new Quest();

			// First Line is the Name of the Quest
			quest.setQuestname(rawQuestDetails.get(0));

			// NEED
			if (rawQuestDetails.get(2).startsWith("⇒ Needed:")) {
				counter_needed += 1;
				extractRequirementDetails(quest, rawQuestDetails.get(2));
			} else {
				System.out.println("Quest " + quest.getQuestname() + "has no 'Needed' line.");
			}

			/*
			 * ##### BEGIN: Parse the Lines into Objects. #####
			 */
			for (int j = 3; j < rawQuestDetails.size(); j++) {

				String currLine = rawQuestDetails.get(j);

				if (currLine.contains("First way")) {

					counter_firstway += 1;
				}

			}

		}

		// Checking amounts

		System.out.println("\n" + filenames.size() + " files:");

		// NEEDED COUNTER

		System.out.print("\t" + counter_needed + " needed lines");

		if (counter_needed == filenames.size()) {
			System.out.println(" => Success!");
		} else {
			System.out.println(" => ERROR: Not every file has a 'Needed' line");
		}

		// First Way Counter
		System.out.println("\t" + counter_firstway + " first way lines.");

	}

	public static void extractRequirementDetails(Quest quest, String neededLine) {

		// System.out.println(neededLine);

		// Delte the '=> Needed:' at the beginning.
		neededLine = neededLine.substring(9);
		// Delte whitespaces at the beginning/end
		neededLine = neededLine.trim();

		Pattern pattern = Pattern.compile(", and|,|\\band\\b|[.]|$", Pattern.CASE_INSENSITIVE);
		Matcher matcher = pattern.matcher(neededLine);

		// The end index of the matcher of the last iteration.
		// We need this to get the substrings between the matches.
		int lastMatcherEndIndex = 0;

		while (matcher.find()) {
			String needElement = neededLine.substring(lastMatcherEndIndex, matcher.start()).trim();

			/*
			 * Most lines already had a point at the end. Because we added a point at the
			 * end, to make sure that the matcher gets all elements, it is possible that we
			 * have two points at the end, why we check for an empty string here.
			 */
			if (needElement.isEmpty()) {
				continue;
			}

			// System.out.println("->" + needElement);
			lastMatcherEndIndex = matcher.end();

			/* ---------------- Extract Quests --------------- */
			Pattern quest_pattern = Pattern.compile("(?<=Quest ).*(?= with)", Pattern.CASE_INSENSITIVE);
			Matcher quest_matcher = quest_pattern.matcher(needElement);

			if (quest_matcher.find()) {
//				ArrayList<String> prequests = quest.getNeeds().getQuests();
//				prequests.add(quest_matcher.group());
			}

			/* ---------------- Extract Ranks --------------- */
			if (needElement.toLowerCase().contains("rank")) {

				Pattern ranks_pattern = Pattern.compile("(\\brank\\b )(\\d*) (.*)", Pattern.CASE_INSENSITIVE);
				Matcher ranks_matcher = ranks_pattern.matcher(needElement);

				if (ranks_matcher.find()) {
					Integer level = Integer.valueOf(ranks_matcher.group(2));
					String skill = ranks_matcher.group(3);

				} else {
					System.out.println("ERROR: Quest " + quest.getQuestname()
							+ " has the word rank, but the matcher couldn't be applied (line: " + needElement + ").");
				}
			}

		}

	}

}
