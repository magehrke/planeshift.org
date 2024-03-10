<?php

  	/* ########### CONNECT TO DB ########### */

  	$path = $_SERVER['DOCUMENT_ROOT'];
  	$path = $path . "/includes/db_connect.php";
  	include $path;

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
