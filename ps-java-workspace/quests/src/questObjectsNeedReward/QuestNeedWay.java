package questObjectsNeedReward;

public class QuestNeedWay extends QuestNeedStandard {
	
	private int way;
	
	public QuestNeedWay(int way) {
		this.way = way;
	}

	/**
	 * @return the way
	 */
	public int getWay() {
		return way;
	}

	/**
	 * @param way the way to set
	 */
	public void setWay(int way) {
		this.way = way;
	}

}
