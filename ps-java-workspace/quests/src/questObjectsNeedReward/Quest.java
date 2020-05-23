package questObjectsNeedReward;

import java.util.ArrayList;

import questObjectsTextLines.Questtext;

/**
 * This shall become the only quest class in this program!
 * 
 * @author Maximilian Alexander Gehrke
 * @date 23.12.2017
 *
 */
public class Quest {
	
	private String questname;
	private String npc;
	private String checkup;
	private String authors;
	
	private boolean repeatable = false;
	
	private ArrayList<QuestNeedStandard> needs = new ArrayList<QuestNeedStandard>();
	private ArrayList<QuestRewardsWayStandard> rewards = new ArrayList<QuestRewardsWayStandard>();
	private ArrayList<Questtext> questDetails;

	
	
	
	
	public void addReward(QuestRewardsWayStandard reward) {
		rewards.add(reward);
	}
	
	public void addNeed(QuestNeedStandard need) {
		needs.add(need);
	}
	
	

	/**
	 * @return the authors
	 */
	public String getAuthors() {
		return authors;
	}

	/**
	 * @param authors the authors to set
	 */
	public void setAuthors(String authors) {
		this.authors = authors;
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
	 * @return the questname
	 */
	public String getQuestname() {
		return questname;
	}

	/**
	 * @param questname the questname to set
	 */
	public void setQuestname(String questname) {
		this.questname = questname;
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
	 * @return the rewards
	 */
	public ArrayList<QuestRewardsWayStandard> getRewards() {
		return rewards;
	}

	/**
	 * @param rewards the rewards to set
	 */
	public void setRewards(ArrayList<QuestRewardsWayStandard> rewards) {
		this.rewards = rewards;
	}

	/**
	 * @return the repeatable
	 */
	public boolean isRepeatable() {
		return repeatable;
	}

	/**
	 * @param repeatable the repeatable to set
	 */
	public void setRepeatable(boolean repeatable) {
		this.repeatable = repeatable;
	}


	/**
	 * @return the needs
	 */
	public ArrayList<QuestNeedStandard> getNeeds() {
		return needs;
	}


	/**
	 * @param needs the needs to set
	 */
	public void setNeeds(ArrayList<QuestNeedStandard> needs) {
		this.needs = needs;
	}
	
	
	
	
	
	
	
	
}
