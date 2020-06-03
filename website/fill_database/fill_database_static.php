<?php

	/* ########### CONNECT TO DB ########### */

	/* Read credentials from file outside of root */
	$ini = parse_ini_file('../config_planeshift.ini');
	/* Connect: Servername, Username, Password, Database */
	$mysqli = new mysqli($ini['db_url'], $ini['db_user'], $ini['db_pass'],
		$ini['db_name']);

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	/* ########## Trainer-Table ########## */

	/* Drop trainers database table if exists */
	$mysqli->query("DROP TABLE IF EXISTS trainers")
		or die($mysqli->error);

	/* Create trainers table */
	$trainersTable = "CREATE TABLE IF NOT EXISTS trainers (
						name VARCHAR(50) NOT NULL,
						skill VARCHAR(50) NOT NULL,
						lower_bound INT NOT NULL,
						upper_bound INT NOT NULL,
						checkup DATE NOT NULL,
						PRIMARY KEY (skill, name),
						FOREIGN KEY (name) REFERENCES npcs(name) ON UPDATE CASCADE ON DELETE CASCADE
					  )";
	$mysqli->query($trainersTable) or die($mysqli->error);

	/* Create trainers array for insert */
	$trainers_to_insert = array(
		'Percival Hawthorne', 'Agility', 0, 100,'none',
		'Nyshyn Klannarr', 'Agility', 90, 200,'none',
		'Gregori Stevald', 'Agility', 180, 300,'none',
		'Canyt Klannarr', 'Agility', 280, 400,'none',
		'Allelia Symiestra', 'Charisma', 0, 50,'none',
		'Sharven Xant-Areth', 'Charisma', 45, 150,'none',
		'Kaiman Jilatt', 'Charisma', 135, 250,'none',
		'Celila Yasoj', 'Charisma', 250, 300,'2018-02-27',
		'Shiu Hri', 'Charisma', 300, 400,'2018-02-27',
		'Finara Plund', 'Endurance', 0, 80,'none',
		'Durok Rrecrok', 'Endurance', 70, 150,'none',
		'Gregori Stevald', 'Endurance', 130, 250,'none',
		'Polyuntri Stevald', 'Endurance', 230, 350,'none',
		'Utno-Leig', 'Endurance', 330, 400,'none',
		'Jayose', 'Intelligence', 0, 130,'none',
		'Liera Zireti', 'Intelligence', 130, 200,'none',
		'Leshollo Moteroy', 'Intelligence', 180, 300,'none',
		'Toda Ombretis', 'Intelligence', 230, 300,'none',
		'Beniua Busuka', 'Intelligence', 280, 400,'none',
		'Remant Tovere', 'Strength', 0, 100,'none',
		'Veja Pontor', 'Strength', 80, 150,'none',
		'Malco Mokkar', 'Strength', 130, 250,'none',
		'Bhurral Varsheen', 'Strength', 220, 300,'none',
		'Aerayau Strongwill', 'Strength', 280, 400,'none',
		'Sharven Xant-Areth', 'Will', 0, 100,'none',
		'Vladovic Chel-Astra', 'Will', 80, 200,'none',
		'Benacha Thaninar', 'Will', 180, 300,'none',
		'Deelor Blackeye', 'Will', 280, 400,'none'
		);

	/* insert trainers into database table */
	for($i = 0; $i < count($trainers_to_insert); $i += 5) {
		$trainer_query = "INSERT INTO trainers (name, skill, lower_bound, upper_bound, checkup)
						VALUES ('" . $trainers_to_insert[$i] . "', '" . $trainers_to_insert[$i+1]
						. "', " . $trainers_to_insert[$i+2] . ", " . $trainers_to_insert[$i+3]
						. ", '" . $trainers_to_insert[$i+4] . "')";
		$mysqli->query($trainer_query) or die($mysqli->error);
	}


	/* ########## Lockpicking-Table ########## */

	/* Drop lockpicking database table if exists */
	$mysqli->query("DROP TABLE IF EXISTS lockpicking")
		or die($mysqli->error);

	$lockp_sql = "CREATE TABLE IF NOT EXISTS lockpicking (
					itemname VARCHAR(50) NOT NULL,
					level INT NOT NULL,
					checkup DATE NOT NULL,
					PRIMARY KEY (level, itemname),
					FOREIGN KEY (itemname) REFERENCES items(name) ON UPDATE CASCADE ON DELETE CASCADE
					)";

	$mysqli->query($lockp_sql) or die($mysqli->error);

	$lockp_to_insert = array(
		'Hardened Crate', 10, '2017-02-01',
		'Adorned Crate', 15, '2017-02-01',
		'Sturdy Chest', 20, '2017-02-01',
		'Metal Chest', 30, '2017-02-01',
		'Reinforced Chest', 40, '2017-02-01',
		'Wide Chest', 50, '2017-02-01',
		'Ancient Chest', 70, '2017-02-01'
		);

		for($i = 0; $i < count($lockp_to_insert); $i += 3) {
		$lockp_query = "INSERT INTO lockpicking (itemname, level, checkup)
						VALUES ('" . $lockp_to_insert[$i] . "', " . $lockp_to_insert[$i+1]
						. ", '" . $lockp_to_insert[$i+2] .  "')";
		$mysqli->query($lockp_query) or die($mysqli->error);
	}

	/* ########################################################################################## */

	/* Glyphs Data */

	$glyphs_to_insert = array(
		'Air', 'Azure Way',
		'Bird', 'Azure Way',
		'Bond', 'Azure Way',
		'Bow', 'Azure Way',
		'Dome', 'Azure Way',
		'Fly', 'Azure Way',
		'Gas', 'Azure Way',
		'Humanoid', 'Azure Way',
		'Mind', 'Azure Way',
		'Sleep', 'Azure Way',
		'Sound', 'Azure Way',
		'Wind', 'Azure Way',

		'Cold', 'Blue Way',
		'Divination', 'Blue Way',
		'Key', 'Blue Way',
		'Net', 'Blue Way',
		'Object', 'Blue Way',
		'Poison', 'Blue Way',
		'Polymorph', 'Blue Way',
		'Purify', 'Blue Way',
		'Rain', 'Blue Way',
		'Reduction', 'Blue Way',
		'Reflection', 'Blue Way',
		'Sphere', 'Blue Way',
		'Water', 'Blue Way',

		'Animal', 'Brown Way',
		'Armor', 'Brown Way',
		'Creature', 'Brown Way',
		'Earth', 'Brown Way',
		'Flail', 'Brown Way',
		'Rock', 'Brown Way',
		'Summon', 'Brown Way',
		'Tree', 'Brown Way',
		'Wall', 'Brown Way',
		'Weight', 'Brown Way',

		'Arrow', 'Crystal Way',
		'Crystal', 'Crystal Way',
		'Door', 'Crystal Way',
		'Energy', 'Crystal Way',
		'Faith', 'Crystal Way',
		'Life', 'Crystal Way',
		'Light', 'Crystal Way',
		'Sight', 'Crystal Way',

		'Blindness', 'Dark Way',
		'Daemon', 'Dark Way',
		'Darkness', 'Dark Way',
		'Death', 'Dark Way',
		'Entropy', 'Dark Way',
		'Fear', 'Dark Way',
		'Illness', 'Dark Way',
		'Negate', 'Dark Way',
		'Shadow', 'Dark Way',
		'Weakness', 'Dark Way',

		'Chaos', 'Red Way',
		'Enlarge', 'Red Way',
		'Fire', 'Red Way',
		'Hand', 'Red Way',
		'Lava', 'Red Way',
		'Lightning', 'Red Way',
		'Meteor', 'Red Way',
		'Might', 'Red Way',
		'Vortex', 'Red Way',
		'Weapon', 'Red Way'
	);

	/* Create Glyphs Table */

	$mysqli->query("DROP TABLE IF EXISTS `glyphs`") or die(mysql_error());

	$createGlyphs = "CREATE TABLE IF NOT EXISTS `glyphs` (
		name varchar(20) NOT NULL,
		way varchar(20) NOT NULL,
		PRIMARY KEY (name)
		)";

	$mysqli ->query($createGlyphs) or die ($mysqli->error);


	/* Insert glyphs data */
	for($i = 0; $i < count($glyphs_to_insert); $i += 2) {
		$glyphs_query = "INSERT INTO glyphs (name, way)
						VALUES ('" . $glyphs_to_insert[$i] . "', '" . $glyphs_to_insert[$i+1] . "')";
		$mysqli->query($glyphs_query) or die($mysqli->error);
	}

	/* ########################################################################################## */

	/* Glyph-NPC Data */

	$glyphNpc_to_insert = array(
		'Air', 'Pilfer',
		'Animal', 'given by GM',
		'Armor', 'Levrus Dahrenn',
		'Blindness', 'Allelia Symiestra',
		'Bird', 'given by GM',
		'Bond', 'Axomir',
		'Bond', 'Easamau',
		'Bow', 'Axomir',
		'Bow', 'Jarda Ynarow',
		'Chaos', 'Ferryd Shillor',
		'Chaos', 'Tarmeen Alecheech',
		'Creature', 'Gurgus Dahnik',
		'Creature', 'Lorytia Starhammer',
		'Crystal', 'Ondren Torr',
		'Crystal', 'Raul Ursino',
		'Daemon', 'Dark Wanderer',
		'Daemon', 'Rulayne Ogrin',
		'Darkness', 'Trasok Starhammer',
		'Darkness', 'Polyuntri Stevald',
		'Darkness', 'Musanulos Terfanis',
		'Death', 'Levrus Dahrenn',
		'Divination', 'Levrus Dahrenn',
		'Dome', 'Axomir',
		'Dome', 'Datal Allavium',
		'Door', 'Baboraer Airiskel',
		'Door', 'Tarmeen Alecheech',
		'Earth', 'Kaiman Jilatt',
		'Earth', 'Ferryd Shillor',
		'Enlarge', 'not in game yet',
		'Entropy', 'Rulayne Ogrin',
		'Entropy', 'Ukabnu',
		'Faith', 'Tarmeen Alecheech',
		'Faith', 'Lerok Dilechi',
		'Fear', 'Edrich Sultov',
		'Fear', 'Gorbiak',
		'Flail', 'not in game yet',
		'Fly', 'given by GM',
		'Fire', 'Mirra Houphen',
		'Gas', 'Hygrnn',
		'Gas', 'Menita',
		'Hand', 'Ferryd Shillor',
		'Hand', 'Menlil Toresun',
		'Humanoid', 'Evelyn',
		'Humanoid', 'Zhaomal Shehan',
		'Illness', 'Oriven Thamel',
		'Key', 'given by GM',
		'Lava', 'Ferryd Shillor',
		'Lava', 'Shiu Hri',
		'Life', 'Bhurral Varsheen',
		'Light', 'Bhurral Varsheen',
		'Light', 'Loren Chama',
		'Light', 'Polyuntri Stevald',
		'Lightning', 'Brintec Dev-Onni',
		'Meteor', 'Noxdar Darmeth',
		'Meteor', 'Sharven Xant-Areth',
		'Might', 'Meoeor',
		'Mind', 'Kilas Tungse',
		'Mind', 'Vresa Nohdiir',
		'Negate', 'Govell Mihdren',
		'Negate', 'Lorytia Starhammer',
		'Net', 'Tarmeen Alecheech',
		'Net', 'Kelicha Anijiel',
		'Object', 'Martiana Zeth',
		'Poison', 'Levrus Dahrenn',
		'Poison', 'Jirosh Mikana',
		'Polymorph', 'Lori Tryllyn',
		'Purify', 'Barrin Dhorod',
		'Rain', 'Barrin Dhorod',
		'Rain', 'Grimal Bloodaxe',
		'Reduction', 'not in game yet',
		'Reflection', 'not in game yet',
		'Rock', 'Lorytia Starhammer',
		'Rock', 'Merrinez Dholant',
		'Shadow', 'Evelyn',
		'Shadow', 'Raithen',
		'Sight', 'Deelor Blackeye',
		'Sleep', 'Ukabnu',
		'Sound', 'Jayose',
		'Sphere', 'Levrus Dahrenn',
		'Summon', 'Gregori',
		'Summon', 'Ukabnu',
		'Summon', 'Levrus Dahrenn',
		'Summon', 'Jardet Forsill',
		'Tree', 'Gulm Ossoe',
		'Tree', 'Mulgik',
		'Vortex', 'Jecascis Airiskel',
		'Wall', 'Datal Allavium',
		'Water', 'Grimal Bloodaxe',
		'Weakness', 'Dark Wanderer',
		'Weapon', 'Ferryd Shillor',
		'Weapon', 'Ukabnu',
		'Weight', 'Kerryk Cor',
		'Wind', 'Jayose'
	);

	/* Create Glyph-NPC Table */

	$mysqli->query("DROP TABLE IF EXISTS `glyphNpc`") or die(mysql_error());

	$createGlyphNpc = "CREATE TABLE IF NOT EXISTS `glyphNpc` (
		glyph varchar(20) NOT NULL,
		npc varchar(20) NOT NULL,
		PRIMARY KEY (glyph, npc),
		FOREIGN KEY (glyph) REFERENCES glyphs(name) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (npc) REFERENCES npcs(name) ON UPDATE CASCADE ON DELETE CASCADE
		)";

	$mysqli ->query($createGlyphNpc) or die ($mysqli->error);


	/* Insert glyph-NPC data */
	for($i = 0; $i < count($glyphNpc_to_insert); $i += 2) {
		$glyphNpc_query = "INSERT INTO glyphNpc (glyph, npc)
						VALUES ('" . $glyphNpc_to_insert[$i] . "', '" . $glyphNpc_to_insert[$i+1] . "')";
		$mysqli->query($glyphNpc_query) or die($mysqli->error);
	}


	/* ########################################################################################## */


	/* GemEnchanting Data */

	$gemEnchanting_to_insert = array(

		'Blue', 'Ruby', 'Cold', 'Psychic', '-', 'of Power',
		'Blue', 'Emerald', 'Poison', 'Psychic', 'Lesser', 'of Power',
		'Blue', 'Sapphire', 'Object', 'Psychic', 'Major', 'of Power',
		'Blue', 'Diamond', 'Polymorph', 'Psychic', 'Greater', 'of Power',
		'Blue', 'Emerald', 'Cold', 'Reflecting', '-', 'of Power',
		'Blue', 'Sapphire', 'Poison', 'Reflecting', 'Lesser', 'of Power',
		'Blue', 'Diamond', 'Object', 'Reflecting', 'Major', 'of Power',
		'Blue', 'Ruby', 'Rain', 'Freezing', '-', 'of Power',
		'Blue', 'Sapphire', 'Net', 'Freezing', 'Lesser', 'of Power',
		'Blue', 'Diamond', 'Poison', 'Freezing', 'Major', 'of Power',
		'Blue', 'Emerald', 'Divination', 'Gazing', '-', 'of Power',
		'Blue', 'Sapphire', 'Key', 'Gazing', 'Lesser', 'of Power',
		'Blue', 'Diamond', 'Purify', 'Gazing', 'Major', 'of Power',
		'Blue', 'Emerald', 'Rain', 'of Waterkin', '-', 'of Power',
		'Blue', 'Diamond', 'Sphere', 'of Waterkin', 'Major', 'of Power',
		'Blue', 'Emerald', 'Water', 'of Sharpness', '-', 'of Power',
		'Blue', 'Diamond', 'Water', 'of Sharpness', 'Major', 'of Power',
		'Blue', 'Emerald', 'Sphere', 'of Redemption', '-', 'of Power',
		'Blue', 'Diamond', 'Rain', 'of Redemption', 'Major', 'of Power',
		'Brown', 'Ruby', 'Armor', 'Entangled', '-', 'of Power',
		'Brown', 'Emerald', 'Rock', 'Entangled', 'Lesser', 'of Power',
		'Brown', 'Sapphire', 'Armor', 'Entangled', 'Major', 'of Power',
		'Brown', 'Diamond', 'Tree', 'Entangled', 'Greater', 'of Power',
		'Brown', 'Emerald', 'Armor', 'Mutant', '-', 'of Power',
		'Brown', 'Sapphire', 'Rock', 'Mutant', 'Lesser', 'of Power',
		'Brown', 'Diamond', 'Wall', 'Mutant', 'Major', 'of Power',
		'Brown', 'Emerald', 'Summon', 'Displaced', '-', 'of Power',
		'Brown', 'Sapphire', 'Weight', 'Displaced', 'Lesser', 'of Power',
		'Brown', 'Diamond', 'Summon', 'Displaced', 'Major', 'of Power',
		'Brown', 'Emerald', 'Wall', 'of Chaos', '-', 'of Power',
		'Brown', 'Diamond', 'Weight', 'of Chaos', 'Major', 'of Power',
		'Brown', 'Emerald', 'Tree', 'of Illusion', '-', 'of Power',
		'Brown', 'Diamond', 'Creature', 'of Illusion', 'Major', 'of Power',
		'Brown', 'Emerald', 'Weight', 'of Shadow', '-', 'of Power',
		'Brown', 'Diamond', 'Earth', 'of Shadow', 'Major', 'of Power',
		'Crystal', 'Ruby', 'Arrow', 'Luminous', '-', 'of Power',
		'Crystal', 'Emerald', 'Energy', 'Luminous', 'Lesser', 'of Power',
		'Crystal', 'Sapphire', 'Faith', 'Luminous', 'Major', 'of Power',
		'Crystal', 'Diamond', 'Crystal', 'Luminous', 'Greater', 'of Power',
		'Crystal', 'Emerald', 'Life', 'Swirling', '-', 'of Power',
		'Crystal', 'Sapphire', 'Light', 'Swirling', 'Lesser', 'of Power',
		'Crystal', 'Diamond', 'Sight', 'Swirling', 'Major', 'of Power',
		'Crystal', 'Emerald', 'Crystal', 'Whispering', '-', 'of Power',
		'Crystal', 'Sapphire', 'Arrow', 'Whispering', 'Lesser', 'of Power',
		'Crystal', 'Diamond', 'Energy', 'Whispering', 'Major', 'of Power',
		'Crystal', 'Emerald', 'Faith', 'Boiling', '-', 'of Power',
		'Crystal', 'Sapphire', 'Sight', 'Boiling', 'Lesser', 'of Power',
		'Crystal', 'Diamond', 'Faith', 'Boiling', 'Major', 'of Power',
		'Crystal', 'Emerald', 'Sight', 'of Mindcontrol', '-', 'of Power',
		'Crystal', 'Diamond', 'Life', 'of Mindcontrol', 'Major', 'of Power',
		'Crystal', 'Emerald', 'Door', 'of Creation', '-', 'of Power',
		'Crystal', 'Diamond', 'Arrow', 'of Creation', 'Major', 'of Power',
		'Crystal', 'Emerald', 'Light', 'of Thunder', '-', 'of Power',
		'Crystal', 'Diamond', 'Door', 'of Thunder', 'Major', 'of Power',
		'Azure', 'Ruby', 'Air', 'Radiant', '-', 'of Spirit',
		'Azure', 'Emerald', 'Gas', 'Radiant', 'Lesser', 'of Spirit',
		'Azure', 'Sapphire', 'Bond', 'Radiant', 'Major', 'of Spirit',
		'Azure', 'Diamond', 'Dome', 'Radiant', 'Greater', 'of Spirit',
		'Azure', 'Emerald', 'Air', 'Burning', '-', 'of Spirit',
		'Azure', 'Sapphire', 'Gas', 'Burning', 'Lesser', 'of Spirit',
		'Azure', 'Diamond', 'Bond', 'Burning', 'Major', 'of Spirit',
		'Azure', 'Emerald', 'Bond', 'Shiny', '-', 'of Spirit',
		'Azure', 'Sapphire', 'Bow', 'Shiny', 'Lesser', 'of Spirit',
		'Azure', 'Diamond', 'Humanoid', 'Shiny', 'Major', 'of Spirit',
		'Azure', 'Emerald', 'Dome', 'of Confusion', '-', 'of Spirit',
		'Azure', 'Diamond', 'Mind', 'of Confusion', 'Major', 'of Spirit',
		'Azure', 'Emerald', 'Mind', 'of Shattering', '-', 'of Spirit',
		'Azure', 'Diamond', 'Sleep', 'of Shattering', 'Major', 'of Spirit',
		'Azure', 'Emerald', 'Sound', 'of Brilliance', '-', 'of Spirit',
		'Azure', 'Diamond', 'Bow', 'of Brilliance', 'Major', 'of Spirit',
		'Azure', 'Emerald', 'Sleep', 'of Swiftness', '-', 'of Spirit',
		'Azure', 'Diamond', 'Sound', 'of Swiftness', 'Major', 'of Spirit',
		'Dark', 'Ruby', 'Death', 'Obscure', '-', 'of Spirit',
		'Dark', 'Emerald', 'Negate', 'Obscure', 'Lesser', 'of Spirit',
		'Dark', 'Sapphire', 'Death', 'Obscure', 'Major', 'of Spirit',
		'Dark', 'Diamond', 'Illness', 'Obscure', 'Greater', 'of Spirit',
		'Dark', 'Emerald', 'Death', 'Organic', '-', 'of Spirit',
		'Dark', 'Sapphire', 'Blindness', 'Organic', 'Lesser', 'of Spirit',
		'Dark', 'Diamond', 'Daemon', 'Organic', 'Major', 'of Spirit',
		'Dark', 'Emerald', 'Illness', 'Opposing', '-', 'of Spirit',
		'Dark', 'Sapphire', 'Daemon', 'Opposing', 'Lesser', 'of Spirit',
		'Dark', 'Diamond', 'Fear', 'Opposing', 'Major', 'of Spirit',
		'Dark', 'Emerald', 'Blindness', 'Revealing', '-', 'of Spirit',
		'Dark', 'Sapphire', 'Negate', 'Revealing', 'Lesser', 'of Spirit',
		'Dark', 'Diamond', 'Entropy', 'Revealing', 'Major', 'of Spirit',
		'Dark', 'Emerald', 'Shadow', 'of Tides', '-', 'of Spirit',
		'Dark', 'Diamond', 'Weakness', 'of Tides', 'Major', 'of Spirit',
		'Dark', 'Emerald', 'Fear', 'of Resistance', '-', 'of Spirit',
		'Dark', 'Diamond', 'Shadow', 'of Resistance', 'Major', 'of Spirit',
		'Dark', 'Emerald', 'Weakness', 'of Absorption', '-', 'of Spirit',
		'Dark', 'Diamond', 'Blindness', 'of Absorption', 'Major', 'of Spirit',
		'Red', 'Ruby', 'Fire', 'Flaming', '-', 'of Spirit',
		'Red', 'Emerald', 'Lightning', 'Flaming', 'Lesser', 'of Spirit',
		'Red', 'Sapphire', 'Meteor', 'Flaming', 'Major', 'of Spirit',
		'Red', 'Diamond', 'Lava', 'Flaming', 'Greater', 'of Spirit',
		'Red', 'Emerald', 'Vortex', 'Lit', '-', 'of Spirit',
		'Red', 'Sapphire', 'Weapon', 'Lit', 'Lesser', 'of Spirit',
		'Red', 'Diamond', 'Hand', 'Lit', 'Major', 'of Spirit',
		'Red', 'Emerald', 'Might', 'Heated', '-', 'of Spirit',
		'Red', 'Sapphire', 'Hand', 'Heated', 'Lesser', 'of Spirit',
		'Red', 'Diamond', 'Fire', 'Heated', 'Major', 'of Spirit',
		'Red', 'Emerald', 'Weapon', 'of Magma', '-', 'of Spirit',
		'Red', 'Diamond', 'Lightning', 'of Magma', 'Major', 'of Spirit',
		'Red', 'Emerald', 'Fire', 'of Vapor', '-', 'of Spirit',
		'Red', 'Diamond', 'Vortex', 'of Vapor', 'Major', 'of Spirit',
		'Red', 'Emerald', 'Hand', 'of Firegaze', '-', 'of Spirit',
		'Red', 'Diamond', 'Might', 'of Firegaze', 'Major', 'of Spirit',
		'Red', 'Emerald', 'Lava', 'of Quartz', '-', 'of Spirit',
		'Red', 'Diamond', 'Meteor', 'of Quartz', 'Major', 'of Spirit'
	);

	/* Create GemEnchanting Table */

	$mysqli->query("DROP TABLE IF EXISTS `gemEnchanting`") or die(mysql_error());

	$createGemEnchanting = "CREATE TABLE IF NOT EXISTS `gemEnchanting` (
		way varchar(20) NOT NULL,
		gem varchar(20) NOT NULL,
		glyph varchar(20) NOT NULL,
		result varchar(20) NOT NULL,
		class varchar(20) NOT NULL,
		house varchar(20) NOT NULL,
		PRIMARY KEY (gem, glyph),
		FOREIGN KEY (glyph) REFERENCES glyphs(name) ON UPDATE CASCADE ON DELETE CASCADE
		)";

	$mysqli ->query($createGemEnchanting) or die ($mysqli->error);


	/* Insert GemEnchanting data */
	for($i = 0; $i < count($gemEnchanting_to_insert); $i += 6) {
		$gemEnchanting_query = "INSERT INTO gemEnchanting (way, gem, glyph, result, class, house)
						VALUES ('" . $gemEnchanting_to_insert[$i]
						. "', '" . $gemEnchanting_to_insert[$i+1]
						. "', '" . $gemEnchanting_to_insert[$i+2]
						. "', '" . $gemEnchanting_to_insert[$i+3]
						. "', '" . $gemEnchanting_to_insert[$i+4]
						. "', '" . $gemEnchanting_to_insert[$i+5]. "')";
		$mysqli->query($gemEnchanting_query) or die($mysqli->error);
	}



	/* ########################################################################################## */


	/* Metallurgy Data */

	$metallurgy_to_insert = array(
		1, 'Molten Iron', 0,
		1, 'Iron Ingot', 0,
		1, 'Iron Stock', 0,
		1, 'Molten Zinc', 0,
		1, 'Zinc Ingot', 0,
		1, 'Zinc Stock', 0,
		10, 'Molten Steel', 5,
		1, 'Steel Ingot', 5,
		1, 'Steel Stock', 5,
		1, 'Molten Copper', 10,
		1, 'Copper Ingot', 10,
		1, 'Copper Stock', 10,
		1, 'Molten Tin', 10,
		1, 'Tin Ingot', 10,
		1, 'Tin Stock', 10,
		10, 'Molten Bronze', 10,
		1, 'Bronze Ingot', 10,
		1, 'Bronze Stock', 10,
		1, 'Molten Silver', 25,
		1, 'Silver Ingot', 25,
		1, 'Silver Stock', 25,
		1, 'Molten Gold', 35,
		1, 'Gold Ingot', 35,
		1, 'Gold Stock', 50,
		1, 'Molten Platinum', 65,
		1, 'Platinum Ingot', 65,
		1, 'Platinum Stock', 75,
		5, 'Molten Platinum Steel', 85,
		1, 'Platinum Steel Ingot', 85,
		1, 'Platinum Steel Stock', 95,
		1, 'Molten Lumium', 115,
		1, 'Lumium Ingot', 120,
		1, 'Lumium Stock', 120,
		5, 'Molten Blue Steel', 125,
		1, 'Blue Steel Ingot', 125,
		1, 'Blue Steel Stock', 130,
		5, 'Molten Tigrain Steel', 155,
		1, 'Tigrain Steel Ingot', 160,
		1, 'Tigrain Steel Stock', 160
	);

	/* Create Metallurgy Table */

	$mysqli->query("DROP TABLE IF EXISTS `metallurgy`") or die(mysql_error());

	$createMetallurgy = "CREATE TABLE IF NOT EXISTS `metallurgy` (
		material varchar(40) NOT NULL,
		quantity int(20) NOT NULL,
		level int(20) NOT NULL,
		PRIMARY KEY (material)
		)";

	$mysqli->query($createMetallurgy) or die ($mysqli->error);


	/* Insert GemEnchanting data */
	for($i = 0; $i < count($metallurgy_to_insert); $i += 3) {
		$metallurgy_query = "INSERT INTO metallurgy (quantity, material, level)
						VALUES (" . $metallurgy_to_insert[$i]
						. ", '" . $metallurgy_to_insert[$i+1]
						. "', " . $metallurgy_to_insert[$i+2]. ")";
		$mysqli->query($metallurgy_query) or die($mysqli->error);
	}


	/* ########################################################################################## */


	/* MetallurgyResources Data */

	$metallurgyResources_to_insert = array(
		'Molten Iron', 1, 'Iron Ore', 1,
		'Iron Ingot', 1, 'Molten Iron', 1,
		'Iron Stock', 10, 'Molten Iron', 1,
		'Molten Zinc', 1, 'Zinc Ore', 1,
		'Zinc Ingot', 1, 'Molten Zinc', 1,
		'Zinc Stock', 10, 'Molten Zinc', 1,
		'Molten Steel', 9, 'Iron Ore', 1,
		'Molten Steel', 1, 'Coal Lump', 1,
		'Molten Steel', 8, 'Iron Ore', 2,
		'Molten Steel', 2, 'Coal Lump', 2,
		'Steel Ingot', 1, 'Molten Steel', 1,
		'Steel Stock', 10, 'Molten Steel', 1,
		'Molten Copper', 1, 'Copper Ore', 1,
		'Copper Ingot', 1, 'Molten Copper', 1,
		'Copper Stock', 10, 'Molten Copper', 1,
		'Molten Tin', 1, 'Tin Ore', 1,
		'Tin Ingot', 1, 'Molten Tin', 1,
		'Tin Stock', 10, 'Molten Tin', 1,
		'Molten Bronze', 5, 'Copper Ore', 1,
		'Molten Bronze', 5, 'Tin Ore', 1,
		'Molten Bronze', 6, 'Copper Ore', 2,
		'Molten Bronze', 4, 'Tin Ore', 2,
		'Molten Bronze', 7, 'Copper Ore', 3,
		'Molten Bronze', 3, 'Tin Ore', 3,
		'Bronze Ingot', 1, 'Molten Bronze', 1,
		'Bronze Stock', 10, 'Molten Bronze', 1,
		'Molten Silver', 1, 'Silver Ore', 1,
		'Silver Ingot', 1, 'Molten Silver', 1,
		'Silver Stock', 5, 'Molten Silver', 1,
		'Molten Gold', 1, 'Gold Ore', 1,
		'Gold Ingot', 1, 'Molten Gold', 1,
		'Gold Stock', 5, 'Molten Gold', 1,
		'Molten Platinum', 1, 'Platinum Ore', 1,
		'Platinum Ingot', 1, 'Molten Platinum', 1,
		'Platinum Stock', 5, 'Molten Platinum', 1,
		'Molten Platinum Steel', 1, 'Platinum Ingot', 1,
		'Molten Platinum Steel', 1, 'Silver Ingot', 1,
		'Molten Platinum Steel', 4, 'Steel Ingot', 1,
		'Platinum Steel Ingot', 1, 'Molten Platinum Steel', 1,
		'Platinum Steel Stock', 5, 'Molten Platinum Steel', 1,
		'Molten Lumium', 1, 'Lumium Ore', 1,
		'Lumium Ingot', 1, 'Molten Lumium', 1,
		'Lumium Stock', 5, 'Molten Lumium', 1,
		'Molten Blue Steel', 1, 'Bronze Ingot', 1,
		'Molten Blue Steel', 5, 'Steel Ingot', 1,
		'Molten Blue Steel', 3, 'Lumium Ingot', 1,
		'Blue Steel Ingot', 1, 'Molten Blue Steel', 1,
		'Blue Steel Stock', 5, 'Molten Blue Steel', 1,
		'Molten Tigrain Steel', 3, 'Ulbernaut Heart', 1,
		'Molten Tigrain Steel', 4, 'Gold Ingot', 1,
		'Molten Tigrain Steel', 2, 'Silver Ingot', 1,
		'Molten Tigrain Steel', 2, 'Lumium Ingot', 1,
		'Tigrain Steel Ingot', 1, 'Molten Tigrain Steel', 1,
		'Tigrain Steel Stock', 5, 'Molten Tigrain Steel', 1
	);

	/* Create MetallurgyResources Table */

	$mysqli->query("DROP TABLE IF EXISTS `metallurgyResources`") or die(mysql_error());

	$createMetallurgyResources = "CREATE TABLE IF NOT EXISTS `metallurgyResources` (
		material varchar(40) NOT NULL,
		quantity int(20) NOT NULL,
		resource varchar(40) NOT NULL,
		recipe int(20) NOT NULL,
		PRIMARY KEY (material, resource, recipe)
		)";

	$mysqli->query($createMetallurgyResources) or die ($mysqli->error);


	/* Insert MetallurgyResources data */
	for($i = 0; $i < count($metallurgyResources_to_insert); $i += 4) {
		$metallurgyResources_query = "INSERT INTO metallurgyResources (material, quantity, resource, recipe)
						VALUES ('" . $metallurgyResources_to_insert[$i]
						. "', " . $metallurgyResources_to_insert[$i+1]
						. ", '" . $metallurgyResources_to_insert[$i+2]
						. "', " . $metallurgyResources_to_insert[$i+3] . ")";
		$mysqli->query($metallurgyResources_query) or die($mysqli->error);
	}

	/* ########################################################################################## */

	/* Drawing NPC's data */
	/* From which level to which level we have to train at which npc */

	$drawingData_to_insert = array(
		1, 31, "Warinn Klumdt",
		32, 61, "Dhalia Colat",
		62, 91, "Roya Vuntarr",
		92, 101, "Levrus Dahrenn",
		102, 126, "Muuro Zarel",
		127, 161, "Yonda Axebow",
		162, 200, "Celila Yasoj"
	);

	/* Create Drawing Table */

	$mysqli->query("DROP TABLE IF EXISTS `drawing`") or die(mysql_error());

	$createDrawing = "CREATE TABLE IF NOT EXISTS `drawing` (
			lvlFrom int(20) NOT NULL,
			lvlTo int(20) NOT NULL,
			npc varchar(40) NOT NULL,
			PRIMARY KEY (lvlFrom, lvlTo, npc)
		)";

	$mysqli->query($createDrawing) or die ($mysqli->error);


	/* Insert Drawing data */
	for($i = 0; $i < count($drawingData_to_insert); $i += 3) {
		$drawing_query = "INSERT INTO drawing (lvlFrom, lvlTo, npc)
						VALUES (" . $drawingData_to_insert[$i]
						. ", " . $drawingData_to_insert[$i+1]
						. ", '" . $drawingData_to_insert[$i+2]
						. "')";
		$mysqli->query($drawing_query) or die($mysqli->error);
	}


	/* ########################################################################################## */

	/* close connection */
	$mysqli->close();
