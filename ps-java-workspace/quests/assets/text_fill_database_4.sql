

	/* Create Table Quests-Prequests */
	/* Table which collects the quests you need to have fullfilled to get a quest */
	/* NOT USED RIGHT NOW */

	$mysqli->query("DROP TABLE IF EXISTS `questPrequests`") or die(mysql_error());

	$createQuestPrequests = "CREATE TABLE IF NOT EXISTS `questPrequests` (
		`quest` varchar(70) NOT NULL,
		`prequest` varchar(20) NOT NULL,
		`checkup` DATE NOT NULL,
		PRIMARY KEY (`quest`, `prequest`),
		FOREIGN KEY (quest) REFERENCES quests(name) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (prequest) REFERENCES quests(name) ON UPDATE CASCADE ON DELETE CASCADE
		)";

	$mysqli->query($createQuestPrequests) or die($mysqli->error);

	/* Insert quests-prequests data */
	for($i = 0; $i < count($questsPreQuests_to_insert); $i += 3) {
		$spellPrequest_query = "INSERT INTO questPrequests (quest, prequest, checkup)
						VALUES ('" . $questsPreQuests_to_insert[$i] . "', '" . $questsPreQuests_to_insert[$i+1] 
						. "', '" . $questsPreQuests_to_insert[$i+1] . "')";
		$mysqli->query($spellPrequest_query) or die($mysqli->error);
	}




	/* Create Table Quests-SkillRanks */
	/* Table which collects requirements in skills to get a quest */
	/* NOT USED RIGHT NOW */

	$mysqli->query("DROP TABLE IF EXISTS `questSkillRanks`") or die(mysql_error());

	$createQuestSkillRanks = "CREATE TABLE IF NOT EXISTS `questSkillRanks` (
		`quest` varchar(70) NOT NULL,
		`skill` varchar(20) NOT NULL,
		`rank` INT NOT NULL,
		`checkup` DATE NOT NULL,
		PRIMARY KEY (`quest`, `skill`),
		FOREIGN KEY (quest) REFERENCES quests(name) ON UPDATE CASCADE ON DELETE CASCADE
		)";

	$mysqli->query($createQuestSkillRanks) or die($mysqli->error);


	/* Insert quests-SkillRanks data */
	for($i = 0; $i < count($questsPreSkillRanks_to_insert); $i += 4) {
		$spellPreSkillRanks_query = "INSERT INTO questSkillRanks (quest, skill, rank, checkup)
						VALUES ('" . $questsPreSkillRanks_to_insert[$i] . "', '" . $questsPreSkillRanks_to_insert[$i+1] . "', " 
						. $questsPreSkillRanks_to_insert[$i+2] . ", '" . $questsPreSkillRanks_to_insert[$i+3] . "')";
		$mysqli->query($spellPreSkillRanks_query) or die($mysqli->error);
	}


	/* ########################################################################################## */

	
	/* close connection */
	$mysqli->close();
