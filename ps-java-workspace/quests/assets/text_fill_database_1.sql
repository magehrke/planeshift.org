<?php

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

	/* ########## Quest-Table ########## */

	//drop quests table if exists
	$mysqli->query("DROP TABLE IF EXISTS quests")
		or die(mysql_error());


	//create quests table
	$newTable = "CREATE TABLE IF NOT EXISTS quests (
						name VARCHAR(50) NOT NULL,
						npc VARCHAR(50) NOT NULL,
						repeatable BIT NOT NULL,
						checkup DATE NOT NULL,
						PRIMARY KEY (name),
						FOREIGN KEY (npc) REFERENCES npcs(name) ON UPDATE CASCADE ON DELETE CASCADE
						) ENGINE=MyISAM";
	$mysqli->query($newTable) or die($mysqli->error);

	//Insert some data into quests table
