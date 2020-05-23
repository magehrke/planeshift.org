package deprecated_spellbook;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

public class Deprecated_Spellbook {
	
	ArrayList<Deprecated_Spell> spellbook;
	
	public void importSpellbookData() throws FileNotFoundException {
		
		ArrayList<Deprecated_Spell> tempSpellbook = new ArrayList<Deprecated_Spell>();

		Scanner scanner1 = new Scanner(new File(utilities.Constants.PATHforSQLoutput + "/spellbook.csv"));
		
		//skip first line
		scanner1.nextLine();
                
		while(scanner1.hasNextLine()) {
			String currLine = scanner1.nextLine();
			if(currLine.isEmpty()) {
				continue;
			} else {				
				Scanner scanner2 = new Scanner(currLine);
				scanner2.useDelimiter(";");
				
				String spellName = null;
				ArrayList<String> spellGlyphs = new ArrayList<String>();					
				int spellRealm = -1;
				String spellWay = null;
				String spellCheckup = null;
				
				for(int i = 0; i < 5; i++) {
					String currToken = scanner2.next();
					
					switch(i) {
					case 0:
						spellName = currToken;
						break;
					case 1:
						Scanner scanner3 = new Scanner(currToken).useDelimiter(",");
						while(scanner3.hasNext()) {
							spellGlyphs.add(scanner3.next());
						}
						scanner3.close();
						break;
					case 2:
						spellRealm = Integer.parseInt(currToken);
						break;
					case 3:
						spellWay = currToken;
						break;
					case 4:
						spellCheckup = currToken;
					}
					

				}

				tempSpellbook.add(new Deprecated_Spell(spellName,spellGlyphs,spellRealm,spellWay, spellCheckup));
				
				scanner2.close();
			}
		}

        scanner1.close();
		
		spellbook = tempSpellbook;
	}
	
	public void exportSpells(BufferedWriter bw) throws IOException {

			//Spells to insert into spellbook

			bw.append("\t$spells_to_insert = array(");
			bw.newLine();
			
			for(int i = 0; i < spellbook.size(); i++) {
				bw.append("\t\t");
				
				Deprecated_Spell currSpell = spellbook.get(i);
				bw.append("'").append(currSpell.getName()).append("', ");
				bw.append("'").append(currSpell.getWay()).append("', ");
				bw.append(Integer.toString(currSpell.getRealm()));
				bw.append(", '").append(currSpell.getCheckup()).append("'");
				if(! (i == spellbook.size() - 1)) {
					bw.append(",");
				}
				bw.newLine();

				
			}
			
			bw.append("\t);");
			
			//Glyphs - Spells to insert into spellGlyphs
			
			bw.newLine();
			bw.newLine();
			

	}
	
	public void exportGlyphs(BufferedWriter bw) throws IOException {
	
		bw.append("\t$spellGlyphs_to_insert = array(");
		bw.newLine();
		
		for(int i = 0; i < spellbook.size(); i++) {
			
			Deprecated_Spell currSpell = spellbook.get(i);
			String spellName = currSpell.getName();
			ArrayList<String> glyphs = currSpell.getGlyphs();
			
			for(int j = 0; j < glyphs.size(); j++) {
				bw.append("\t\t");
				bw.append("'").append(spellName).append("', '");
				bw.append(glyphs.get(j)).append("', ");
				bw.append(String.valueOf(j));
				if(! (j == glyphs.size() - 1 && i == spellbook.size() - 1)) {
					bw.append(",");
				}
				bw.newLine();
			}	
		}
		
		bw.append("\t);");
	}
}
