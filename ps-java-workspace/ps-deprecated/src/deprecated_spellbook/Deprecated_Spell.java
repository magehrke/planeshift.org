package deprecated_spellbook;

import java.util.ArrayList;

public class Deprecated_Spell {

	/**
	 * Name of the spell
	 */
	String name;
	
	/**
	 * Name of the magic way, where the spell
	 * is part of.
	 */
	String way;
	
	/**
	 * The realm (level), when a magician is able to 
	 * cast the spell.
	 */
	int realm;
	
	/**
	 * The glyphs (in the correct order) you need to 
	 * research the spell.
	 */
	ArrayList<String> glyphs;
	
	/**
	 * Last time this spell was checked.
	 */
	String checkup;
	
	/**
	 * Constructor.
	 * @param name
	 * @param glyphs
	 * @param realm
	 * @param way
	 * @param checkup
	 */
	public Deprecated_Spell(String name, ArrayList<String> glyphs, int realm, String way, String checkup) {
		this.name = name;
		this.glyphs = glyphs;
		this.realm = realm;
		this.way = way;
		this.checkup = checkup;
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
	 * @return the way
	 */
	public String getWay() {
		return way;
	}
	/**
	 * @param way the way to set
	 */
	public void setWay(String way) {
		this.way = way;
	}
	/**
	 * @return the realm
	 */
	public int getRealm() {
		return realm;
	}
	/**
	 * @param realm the realm to set
	 */
	public void setRealm(int realm) {
		this.realm = realm;
	}
	/**
	 * @return the glyphs
	 */
	public ArrayList<String> getGlyphs() {
		return glyphs;
	}
	/**
	 * @param glyphs the glyphs to set
	 */
	public void setGlyphs(ArrayList<String> glyphs) {
		this.glyphs = glyphs;
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
	
}
