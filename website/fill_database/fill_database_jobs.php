<?php

	/* ########### CONNECT TO DB ########### */

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path = $path . "/includes/db_connect.php";
    include_once $path;

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
					  ) ENGINE = MyISAM";
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
		'Leshollo Moteroy', 'Intelligence', 180, 250,'none',
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
					) ENGINE = MyISAM";

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
		) ENGINE = MyISAM";

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
		) ENGINE = MyISAM";

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
		) ENGINE = MyISAM";

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
