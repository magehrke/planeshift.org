package deprecated_questsDudu;

@Deprecated
public class Deprecated_DuduObjSkillRank {
	
	public String skill;
	public int rank;	
	
	public Deprecated_DuduObjSkillRank(String skill, int rank) {
		this.skill = skill;
		this.rank = rank;

	}

	/**
	 * @return the skill
	 */
	public String getSkill() {
		return skill;
	}

	/**
	 * @param skill the skill to set
	 */
	public void setSkill(String skill) {
		this.skill = skill;
	}

	/**
	 * @return the rank
	 */
	public int getRank() {
		return rank;
	}

	/**
	 * @param rank the rank to set
	 */
	public void setRank(int rank) {
		this.rank = rank;
	}
	
	
	
}
