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

	/* ########################################################################################## */
	/* ########################################################################################## */

	/* ########## Questchains-Table ########## */

	//drop questchains table if exists
	$mysqli->query("DROP TABLE IF EXISTS questchains")
		or die(mysql_error());


	//create questchains table
	$newTable = "CREATE TABLE IF NOT EXISTS questchains (
						questchain VARCHAR(50) NOT NULL,
						ordering int(10),
						quest VARCHAR(50) NOT NULL,
						npc VARCHAR(50) NOT NULL,
						specials VARCHAR(50),
						checkup DATE NOT NULL,
						PRIMARY KEY (questchain, quest)
						)";
	$mysqli->query($newTable) or die($mysqli->error);

	//create data to insert into chestchains table
	$questchainsData = array(
		// Honest Way - From Zif
		'Winch Access Honest', 1, 'Introduction to the Merchants', 'Boralis Voladrand', '', '2018-02-23',
		'Winch Access Honest', 2, 'Emporium Raid', 'Rinna Voladrand', '', '2018-02-23',
		'Winch Access Honest', 3, 'Boralis Needs Neyehbes', 'Boralis Voladrand', '', '2018-02-23',
		'Winch Access Honest', 4, 'Grok&apos;s Delivery for Durok', 'Grok Idon', '', '2018-02-23',
		'Winch Access Honest', 5, 'A Husband&apos;s Dilemma', 'Jeyarp Grotemey', '', '2018-02-23',
		'Winch Access Honest', 6, 'A Wife&apos;s Dilemma', 'Gayla Grotemey', '', '2018-02-23',
		'Winch Access Honest', 7, 'Murago Puntjal&apos;s Quick Favour', 'Murago Puntjal', '', '2018-02-23',
		'Winch Access Honest', 8, 'A Message for Dsar Sarraghi', 'Murago Puntjal', '', '2018-02-23',
		'Winch Access Honest', 9, 'Save Edrich Sultou&apos;s Reputation', '', 'Edrich Sultov', '2018-02-23',
		'Winch Access Honest', 10, 'Whats up with the carpets', 'Brentic', '', '2018-02-23',
		'Winch Access Honest', 11, 'Jirosh Shipment Inquiry', 'Jirosh Mikana', '', '2018-02-23',
		'Winch Access Honest', 12, 'Jirosh&apos;s Stolen Statue', 'Jirosh Mikana', '', '2018-02-23',
		'Winch Access Honest', 13, 'The Mikana Merchants Syndicate', 'Jirosh Mikana', '', '2018-02-23',
		'Winch Access Honest', 14, 'Use Mercantile Access Paper', 'Percival Hawthorne', '', '2018-02-21',
		// After Quest 12 (Jiroshs Stolen Statue), you can also do the DISHONEST way:
		// 		'Winch Access Dishonest', 9, 'Thorian&apos;s Shield', 'Thorian Gronk', '2018-02-21',
		//		'Winch Access Dishonest', 10, 'The Gronk Merchant Syndicate', 'Thorian Gronk', '2018-02-21',
		//		'Winch Access Dishonest', 11, 'Use Mercantile Access Paper', 'Percival Hawthorne', '2018-02-21'
		'Winch Access Guard', 1, 'Remant&apos;s Gauntlets', 'Remant Tovere', '', '2019-06-17',
		'Winch Access Guard', 2, 'Remant&apos;s Sword', 'Remant Tovere', '', '2019-06-17',
		'Winch Access Guard', 3, 'Helping the Guards', 'Jefecra Harcrit', '', '2019-06-17',
		'Winch Access Guard', 4, 'Moren Needs New Boots', 'Moren Findel', '', '2019-06-17',
		'Winch Access Guard', 5, 'Bhurral Watches for Trouble', 'Orchibaly Gurpleferd', '', '2019-06-17',
		'Winch Access Guard', 6, 'Blunted Swords and Hurt Feelings', 'Bhurral Varsheen', '', '2019-06-17',
		'Winch Access Guard', 7, 'Pinayet Has a Dented Shield', 'Pinayet Ullavin', '', '2019-06-17',
		'Winch Access Guard', 8, 'Sending a Letter Home', 'Pinayet Ullavin', '', '2019-06-17',
		'Winch Access Guard', 9, 'Pinayet Misses His Friend', 'Brado', '', '2019-06-17',
		'Winch Access Guard', 10, 'Flowers for Mirra', 'Trankin Quartzforger', '', '2019-06-17',
		'Winch Access Guard', 11, 'Jarop&apos;s Gem', 'Jarop Saven', '', '2019-06-17',
		'Winch Access Guard', 12, 'Davikel&apos;s Request', 'Davikel Iramok', '', '2019-06-17',
		'Winch Access Guard', 13, 'Amidison&apos;s Command', 'Amidison Stronghand', '', '2019-06-17',
		'Winch Access Guard', 14, 'Aerayau Strongwill&apos;s Epic Journey', 'Aerayau Strongwill', '', '2019-06-17',
		'Winch Access Guard', 15, 'Interview Sunshine Squadron Applicants', 'Rylour Awnnys', '', '2019-06-17',
		'Winch Access Guard', 16, 'Zhaomal Fears Raithen&apos;s Spell', 'Zhaomal Shehan', '', '2019-06-17',
		'Winch Access Guard', 17, 'Sierann is waiting', 'Sierann', '', '2019-06-17',
		'Winch Access Guard', 18, 'Dark Circle Hunt', 'Raithen', '', '2019-06-17',
		'Winch Access Guard', 19, 'Dangerous Winds', 'Raithen', '', '2019-06-17',

		// Unlock the Pterosaur at the eagle fortress - From Haviland
		'Unlock Pterosaur', 1, 'Remant&apos;s Gauntlets', 'Remant Tovere', '', '2019-06-17',
		'Unlock Pterosaur', 2, 'Remant&apos;s Sword', 'Remant Tovere', '', '2019-06-17',
		'Unlock Pterosaur', 3, 'Helping the Guards', 'Jefecra Harcrit', '', '2019-06-17',
		'Unlock Pterosaur', 4, 'Jarop&apos;s Gem', 'Jarop Saven', '', '2019-06-17',
		'Unlock Pterosaur', 5, 'Davikel&apos;s Request', 'Davikel Iramok', '', '2019-06-17',
		'Unlock Pterosaur', 6, 'Amidison&apos;s Command', 'Amidison Stronghand', '', '2019-06-17',
		'Unlock Pterosaur', 7, 'The Arrivals', 'Raithen', '', '2019-06-17',

		// Entering the Black Flame - From Haviland
		'Black Flame', 1, 'Dagger for Jirris', 'Jirris Athano', '', '2019-06-17',
		'Black Flame', 2, 'Jolik&apos;s Letter', 'Jolik Huevan', '', '2019-06-17',
		'Black Flame', 3, 'Bead of Sanity', 'Fordanot Helsun', '', '2019-06-17',
		'Black Flame', 4, 'Finra&apos;s Feast', 'Finra Neticlo', '', '2019-06-17',
		'Black Flame', 5, 'Finra&apos;s Gift', 'Finra Neticlo', '', '2019-06-17',
		'Black Flame', 6, 'New cap for Musanulos', 'Musanulos Terfanis', '', '2019-06-17',
		'Black Flame', 7, 'Thirsty Serana', 'Serana Tuvi', '', '2019-06-17',
		'Black Flame', 8, 'Coveted Traditions', 'Relliom', '', '2019-06-17',
		'Black Flame', 9, 'Best Judgment', 'Relliom', '', '2019-06-17',
		'Black Flame', 10, 'A Tribute of Circles', 'Fholen Medraa', '', '2019-06-17',
		'Black Flame', 11, 'An Eager Clacker', 'Sysial Shillor', '', '2019-06-17',
		'Black Flame', 12, 'Relliom&apos;s Commodities', 'Relliom', '', '2019-06-17',
		'Black Flame', 13, 'To Hear a Whisper', 'Relliom', '', '2019-06-17',

		// Dishonest Way - From Kohinor (checked with Dev (Venalan) it is indeed the shortest way!)
		'Winch Access Dishonest', 1, 'Introduction to the Merchants', 'Boralis Voladrand', '', '2018-02-21',
		'Winch Access Dishonest', 2, 'Emporium Raid', 'Rinna Voladrand', '', '2018-02-21',
		'Winch Access Dishonest', 3, 'Boralis Needs Neyehbes', 'Boralis Voladrand', '', '2018-02-21',
		'Winch Access Dishonest', 4, 'A delivery for Grok', 'Grok Idon', '', '2018-02-21',
		'Winch Access Dishonest', 5, 'A Husband&apos;s Dilemma', 'Jeyarp Grotemey', '', '2018-02-21',
		'Winch Access Dishonest', 6, 'A Wife&apos;s Dilemma', 'Gayla Grotemey', '', '2018-02-21',
		'Winch Access Dishonest', 7, 'Save Edrich Sultou&apos;s Reputation', 'Edrich Sultov', '', '2018-02-21',
		'Winch Access Dishonest', 8, 'Jayose Needs Lamp Oil', 'Jayose', '', '2018-02-21',
		'Winch Access Dishonest', 9, 'Thorian&apos;s Shield', 'Thorian Gronk', '', '2018-02-21',
		'Winch Access Dishonest', 10, 'The Gronk Merchant Syndicate', 'Thorian Gronk', '', '2018-02-21',
		'Winch Access Dishonest', 11, 'Use Mercantile Access Paper', 'Percival Hawthorne', '', '2018-02-21',

		// Magic - Azure Way
		'Azure Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Azure Way', 2, 'The Azure Way', 'Jayose', '0', '2018-03-20',
		'Azure Way', 3, 'The Azure Circle Awaits', 'Jayose', '30', '2018-03-20',
		'Azure Way', 4, 'Azure Way Glyph Training', 'Vorigna Tassen', '30', '2018-03-20',
		'Azure Way', 5, 'Becoming an Azure Way Adept', 'Vorigna Tassen', '40', '2018-03-20',
		'Azure Way', 6, 'The Azure Way Adept', 'Axomir', '50', '2018-03-20',
		'Azure Way', 7, 'Knowledge of the Azure Way Adept', 'Axomir', '70', '2018-03-20',
		'Azure Way', 8, 'The Practical Azure Way Adept', 'Axomir', '90', '2018-03-20',
		'Azure Way', 9, 'Azure Way Master Training', 'Menita', '100', '2018-03-20',
		'Azure Way', 10, 'Knowledge and Practical of the Azure Way Master', 'Menita', '130', '2018-03-20',
		'Azure Way', 11, 'The Azure Way Master', 'Menita', '150', '2018-03-20',

		// Magic - Blue Way
		'Blue Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Blue Way', 3, 'Blue Way Glyph Training', 'Sharven Xant-Areth', '20', '2018-03-20',
		'Blue Way', 4, 'Becoming a Blue Way Adept', 'Sharven Xant-Areth', '40', '2018-03-20',
		'Blue Way', 5, 'The Blue Way Adept', 'Tarmeen Alecheech', '60', '2018-03-20',
		'Blue Way', 6, 'Knowledge of the Blue Way Adept', 'Tarmeen Alecheech', '70', '2018-03-20',
		'Blue Way', 7, 'The Practical Blue Way Adept', 'Tarmeen Alecheech', '90', '2018-03-20',
		'Blue Way', 8, 'Blue Way Master Training', 'Barrin Dhorod', '100', '2018-03-20',
		'Blue Way', 9, 'Knowledge and Practical of the Blue Way Master', 'Barrin Dhorod', '130', '2018-03-20',
		'Blue Way', 10, 'The Blue Way Master', 'Barrin Dhorod', '150', '2018-03-20',

		// Magic - Brown Way
		'Brown Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Brown Way', 2, 'The Brown Way Apprentice', 'Jardet Forsill', '10', '2018-03-20',
		'Brown Way', 3, 'Brown Way Glyph Training', 'Jardet Forsill', '20', '2018-03-20',
		'Brown Way', 4, 'Becoming a Brown Way Adept', 'Jardet Forsill', '40', '2018-03-20',
		'Brown Way', 5, 'The Brown Way Adept', 'Lorytia Starhammer', '50', '2018-03-20',
		'Brown Way', 6, 'Knowledge of the Brown Way Adept', 'Lorytia Starhammer', '70', '2018-03-20',
		'Brown Way', 7, 'The Practical Brown Way Adept', 'Lorytia Starhammer', '90', '2018-03-20',
		'Brown Way', 8, 'Brown Way Master Training', 'Mulgik', '100', '2018-03-20',
		'Brown Way', 9, 'Knowledge and Practical of the Brown Way Master', 'Mulgik', '130', '2018-03-20',
		'Brown Way', 10, 'The Brown Way Master', 'Mulgik', '150', '2018-03-20',

		// Magic - Crystal Way
		'Crystal Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Crystal Way', 2, 'Know the Crystal Way', 'Govell Mihdren', '0', '2018-03-20',
		'Crystal Way', 3, 'The Crystal Way Apprentice', 'Sharven Xant-Areth', '30', '2018-03-20',
		'Crystal Way', 4, 'Crystal Way Glyph Training', 'Sharven Xant-Areth', '30', '2018-03-20',
		'Crystal Way', 5, 'Becoming a Crystal Way Adept', 'Sharven Xant-Areth', '40', '2018-03-20',
		'Crystal Way', 6, 'The Crystal Way Adept', 'Tarmeen Alecheech', '60', '2018-03-20',
		'Crystal Way', 7, 'Knowledge of the Crystal Way Adept', 'Tarmeen Alecheech', '70', '2018-03-20',
		'Crystal Way', 8, 'The Practical Crystal Way Adept', 'Tarmeen Alecheech', '90', '2018-03-20',
		'Crystal Way', 9, 'Crystal Way Master Training', 'Govell Mihdren', '100', '2018-03-20',
		'Crystal Way', 10, 'Knowledge and Practical of the Crystal Way Master', 'Govell Mihdren', '130', '2018-03-20',
		'Crystal Way', 11, 'The Crystal Way Master', 'Govell Mihdren', '150', '2018-03-20',

		// Magic - Dark Way
		'Dark Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Dark Way', 2, 'The Dark Way Beckons', 'Oriven Thamel', '0', '2018-03-20',
		'Dark Way', 3, 'The Dark Way Apprentice', 'Oriven Thamel', '0', '2018-03-20',
		'Dark Way', 4, 'Dark Way Glyph Training', 'Oriven Thamel', '20', '2018-03-20',
		'Dark Way', 5, 'Becoming a Dark Way Adept', 'Oriven Thamel', '30', '2018-03-20',
		'Dark Way', 6, 'No Time for the Dark', 'Oriven Thamel', '40', '2018-03-20',
		'Dark Way', 7, 'The Deelor Quest?', 'Deelor', '0', '2018-03-20',
		'Dark Way', 8, 'The Dark Way Adept', 'Rulayne Ogrin', '60', '2018-03-20',
		'Dark Way', 9, 'Knowledge of the Dark Way Adept', 'Rulayne Ogrin', '70', '2018-03-20',
		'Dark Way', 10, 'The Practical Dark Way Adept', 'Rulayne Ogrin', '90', '2018-03-20',
		'Dark Way', 11, 'Dark Way Master Training', 'Evelyn', '100', '2018-03-20',
		'Dark Way', 12, 'Knowledge and Practical of the Dark Way Master', 'Evelyn', '130', '2018-03-20',
		'Dark Way', 13, 'The Dark Way Master', 'Evelyn', '150', '2018-03-20',

		// Magic - Red Way
		'Red Way', 1, 'Without a Way', 'Levrus Dahrenn', '0', '2018-03-20',
		'Red Way', 2, 'Beginning the Red Way Apprenticeship', 'Ferryd Shillor', '20', '2018-03-20',
		'Red Way', 3, 'Red Way Glyph Training', 'Ferryd Shillor', '40', '2018-03-20',
		'Red Way', 4, 'The Red Way Apprentice', 'Ferryd Shillor', '50', '2018-03-20',
		'Red Way', 5, 'Start of Red Way Adept Training', 'Ferryd Shillor', '60', '2018-03-20',
		'Red Way', 6, 'Knowledge of the Red Way Adept', 'Ferryd Shillor', '70', '2018-03-20',
		'Red Way', 7, 'Becoming a Red Way Adept', 'Ferryd Shillor', '90', '2018-03-20',
		'Red Way', 8, 'Red Way Master Training', 'Ferryd Shillor', '100', '2018-03-20',
		'Red Way', 9, 'Knowledge and Practical of the Red Way Master', 'Ferryd Shillor', '130', '2018-03-20',
		'Red Way', 10, 'The Red Way Master', 'Ferryd Shillor', '150', '2018-03-20'
	);

	//insert data into the table
	for($i = 0; $i < count($questchainsData); $i += 6) {
		$questchainsQuery = "INSERT INTO questchains (questchain, ordering, quest, npc, specials, checkup)
						VALUES ('" . $questchainsData[$i] . "', " . $questchainsData[$i+1]
						. ", '" . $questchainsData[$i+2] . "', '" . $questchainsData[$i+3]
						. "', '" . $questchainsData[$i+4] . "', '" . $questchainsData[$i+5]
						. "')";
		$mysqli->query($questchainsQuery) or die($mysqli->error);
	}




	/* ########################################################################################## */
	/* ########################################################################################## */


	/* close connection */
	$mysqli->close();
