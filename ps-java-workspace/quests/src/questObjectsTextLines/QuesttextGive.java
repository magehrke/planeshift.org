package questObjectsTextLines;

import java.util.ArrayList;
import utilities.Pair;

public class QuesttextGive extends Questtext{
	
	// ##### Variables #####
	public String npc;
	public ArrayList<Pair<Integer, String>> items= new ArrayList<Pair<Integer, String>>();
	
	public QuesttextGive(String text, String npc, ArrayList<Pair<Integer, String>> items) {
		super(text);
		this.npc = npc;
		this.items = items;
	}

	// ##### GETTERS AND SETTERS #####
	
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
	 * @return the items
	 */
	public ArrayList<Pair<Integer, String>> getItems() {
		return items;
	}

	/**
	 * @param items the items to set
	 */
	public void setItems(ArrayList<Pair<Integer, String>> items) {
		this.items = items;
	}

}
