package deprecated_questsDudu;

import java.util.ArrayList;

import questTextObjects.Questtext;

@Deprecated
public class Deprecated_DuduObjQuest {

	public String name;
	public String npc;
	public String difficulty;
	public String checkup;

	public ArrayList<String> questRequirements;
	public ArrayList<String> preQuests = new ArrayList<String>();
	public ArrayList<Deprecated_DuduObjSkillRank> preSkillRanks = new ArrayList<Deprecated_DuduObjSkillRank>();
	
	public ArrayList<String> rewards;
	public ArrayList<Questtext> questDetails;


	public Deprecated_DuduObjQuest(String name, String npc, String difficulty,
			ArrayList<String> rewards) {
		super();
		this.name = name;
		this.npc = npc;
		this.difficulty = difficulty;
		this.rewards = rewards;
	}


	/**
	 * @return the questDetails
	 */
	public ArrayList<Questtext> getQuestDetails() {
		return questDetails;
	}



	/**
	 * @param questDetails the questDetails to set
	 */
	public void setQuestDetails(ArrayList<Questtext> questDetails) {
		this.questDetails = questDetails;
	}
	

	
	
	/**
	 * @return the name
	 */
	public String getName() {
		return name;
	}


	/**
	 * @param name the name to set
	 */
	public void setName(String name) {
		this.name = name;
	}


	/**
	 * @return the npc
	 */
	public String getNpc() {
		return npc;
	}


	/**
	 * @param npc the npc to set
	 */
	public void setNpc(String npc) {
		this.npc = npc;
	}


	/**
	 * @return the difficulty
	 */
	public String getDifficulty() {
		return difficulty;
	}


	/**
	 * @param difficulty the difficulty to set
	 */
	public void setDifficulty(String difficulty) {
		this.difficulty = difficulty;
	}


	/**
	 * @return the rewards
	 */
	public ArrayList<String> getRewards() {
		return rewards;
	}


	/**
	 * @param rewards the rewards to set
	 */
	public void setRewards(ArrayList<String> rewards) {
		this.rewards = rewards;
	}

	/**
	 * @return the preQuests
	 */
	public ArrayList<String> getPreQuests() {
		return preQuests;
	}


	/**
	 * @param prequest the prequest to set
	 */
	public void setPreQuests(ArrayList<String> preQuests) {
		this.preQuests = preQuests;
	}
	
	/**
	 * @return the checkup
	 */
	public String getCheckup() {
		return checkup;
	}


	/**
	 * @param checkup the checkup to set
	 */
	public void setCheckup(String checkup) {
		this.checkup = checkup;
	}


	/**
	 * @return the questRequirements
	 */
	public ArrayList<String> getQuestRequirements() {
		return questRequirements;
	}


	/**
	 * @param questRequirements the questRequirements to set
	 */
	public void setQuestRequirements(ArrayList<String> questRequirements) {
		this.questRequirements = questRequirements;
	}


	/**
	 * @return the preSkillRanks
	 */
	public ArrayList<Deprecated_DuduObjSkillRank> getPreSkillRanks() {
		return preSkillRanks;
	}


	/**
	 * @param preSkillRanks the preSkillRanks to set
	 */
	public void setPreSkillRanks(ArrayList<Deprecated_DuduObjSkillRank> preSkillRanks) {
		this.preSkillRanks = preSkillRanks;
	}
	
	
	

}
