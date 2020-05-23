				

	for($i = 0; $i < count($quests_to_insert); $i += 3) {
		$quest_query = "INSERT INTO quests (name, npc, checkup)
						VALUES ('" . $quests_to_insert[$i] . "', '" . $quests_to_insert[$i+1]
						. "', '" . $quests_to_insert[$i+2] . "')";
		$mysqli->query($quest_query) or die($mysqli->error);
	}


	/* ########## Quest-Reward-Table ########## */

	//drop questsRewardsOld table if exists
	$mysqli->query("DROP TABLE IF EXISTS questsRewards")
		or die(mysql_error());


	//create questsRewards table
	$newTable = "CREATE TABLE IF NOT EXISTS questsRewards (
						quest VARCHAR(50) NOT NULL,
						way int(11) NOT NULL,
						variant int(11) NOT NULL,
						type VARCHAR(50) NOT NULL,
						reward VARCHAR(50),
						amount int(11),
						info VARCHAR(50),
						PRIMARY KEY (quest, way, variant, type, reward),
						FOREIGN KEY (quest) REFERENCES quests(name) ON UPDATE CASCADE ON DELETE CASCADE
						)";
	$mysqli->query($newTable) or die($mysqli->error);

	//Insert some data into questsRewards table
