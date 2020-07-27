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

	/* ########## items-Table ########## */

	$mysqli->query("DROP TABLE IF EXISTS items")
	or die($mysqli->error);

	$itemtable_sql = "CREATE TABLE IF NOT EXISTS items (
					name VARCHAR(50) NOT NULL,
					category VARCHAR(50) NOT NULL,
					npc VARCHAR(50) NOT NULL,
					price INT NOT NULL,
					checkup DATE NOT NULL,
					PRIMARY KEY (name, npc),
					FOREIGN KEY (npc) REFERENCES npcs(name) ON UPDATE CASCADE ON DELETE CASCADE
					)";

	$mysqli->query($itemtable_sql) or die($mysqli->error);
	$item_category = 'Alchemy Ingredients';

	$items_to_insert = array(
		'Common Salt', 'Liera Zireti', 20, 'none',
		'Common Salt', 'Vladovic Chel-Astra', 20, 'none',
		'Conservation Potion', 'Liera Zireti', 100, 'none',
		'Niter', 'Liera Zireti', 20, 'none',
		'Niter', 'Vladovic Chel-Astra', 20, 'none',
		'Oil of Vitriol', 'Liera Zireti', 20, 'none',
		'Oil of Vitriol', 'Vladovic Chel-Astra', 20, 'none',
		'Spirit', 'Liera Zireti', 20, 'none',
		'Spirit', 'Vladovic Chel-Astra', 20, 'none',
		'Stibine', 'Liera Zireti', 20, 'none',
		'Stibine', 'Vladovic Chel-Astra', 20, 'none',
		'Sulphur powder', 'Liera Zireti', 20, 'none',
		'Sulphur powder', 'Vladovic Chel-Astra', 20, 'none',
		'Tartar', 'Liera Zireti', 20, 'none',
		'Tartar', 'Vladovic Chel-Astra', 20, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Alchemy Preparations';

	$items_to_insert = array(
		'Greater Potion of Healing', 'Liera Zireti', 200, 'none',
		'Greater Potion of Healing', 'Vladovic Chel-Astra', 200, 'none',
		'Greater Potion of Mana', 'Vladovic Chel-Astra', 300, 'none',
		'Lesser Potion of Healing', 'Sharven Xant-Areth', 100, 'none',
		'Lesser Potion of Healing', 'Toda Ombretis', 100, 'none',
		'Lesser Potion of Mana', 'Toda Ombretis', 200, 'none',
		'Minor Potion of Dermorian&apos;s Willpower', 'Allelia Symiestra', 100, 'none',
		'Minor Potion of Dermorian&apos;s Willpower', 'Vladovic Chel-Astra', 100, 'none',
		'Minor Potion of Kran&apos;s Vigor', 'Allelia Symiestra', 100, 'none',
		'Minor Potion of Lemur&apos;s Smartness', 'Allelia Symiestra', 100, 'none',
		'Minor Potion of Lemur&apos;s Smartness', 'Vladovic Chel-Astra', 100, 'none',
		'Minor Potion of Ynnwn&apos;s Toughness', 'Allelia Symiestra', 100, 'none',
		'Minor Potion of Ynnwn&apos;s Toughness', 'Vladovic Chel-Astra', 100, 'none',
		'Potion of Air Element Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Azure Sun Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Dark Crystal Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Dermorian&apos;s Willpower', 'Levrus Dahrenn', 150, 'none',
		'Potion of Earth Element Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Fire Element Affinity', 'Sharven Xant-Areth', 150, 'none',
		'Potion of Fire Element Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Healing', 'Grok Idon', 150, 'none',
		'Potion of Healing', 'Levrus Dahrenn', 150, 'none',
		'Potion of Healing', 'Sharven Xant-Areth', 150, 'none',
		'Potion of Healing', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Kran&apos;s Vigor', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Lemur&apos;s Smartness', 'Levrus Dahrenn', 150, 'none',
		'Potion of Lemur&apos;s Smartness', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Mana', 'Liera Zireti', 250, 'none',
		'Potion of Mana', 'Vladovic Chel-Astra', 250, 'none',
		'Potion of Restoration', 'Sharven Xant-Areth', 150, 'none',
		'Potion of Water Element Affinity', 'Vladovic Chel-Astra', 150, 'none',
		'Potion of Ynnwn&apos;s Toughness', 'Levrus Dahrenn', 150, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Armor - Heavy';

	$items_to_insert = array(
		'Plate Mail Arms Armor', 'Taemian Yangnk', 720, 'none',
		'Plate Mail Boots', 'Taemian Yangnk', 740, 'none',
		'Plate Mail Gloves', 'Toda Ombretis', 700, 'none',
		'Plate Mail Pants', 'Taemian Yangnk', 760, 'none',
		'Plate Mail Torso Armor', 'Trasok Starhammer', 780, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Armor - Helms';

	$items_to_insert = array(
		'Chain Mail Helm', 'Kethzun Guthazik', 0, 'none',
		'Mercenary Helm', 'Boralis Voladrand', 430, 'none',
		'Plate Mail Helm', 'Taemian Yangnk', 0, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Armor - Light';

	$items_to_insert = array(
		'Leather Arms Armor', 'Boralis Voladrand', 320, 'none',
		'Leather Arms Armor', 'Toda Ombretis', 320, 'none',
		'Leather Boots', 'Boralis Voladrand', 340, 'none',
		'Leather Boots', 'Toda Ombretis', 340, 'none',
		'Leather Gloves', 'Boralis Voladrand', 300, 'none',
		'Leather Gloves', 'Toda Ombretis', 300, 'none',
		'Leather Pants', 'Boralis Voladrand', 360, 'none',
		'Leather Pants', 'Toda Ombretis', 360, 'none',
		'Leather Torso Armor', 'Boralis Voladrand', 380, 'none',
		'Leather Torso Armor', 'Toda Ombretis', 380, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Armor - Medium';

	$items_to_insert = array(
		'Chain Mail Arms Armor', 'Kethzun Guthazik', 420, 'none',
		'Chain Mail Arms Armor', 'Trasok Starhammer', 420, 'none',
		'Chain Mail Boots', 'Kethzun Guthazik', 440, 'none',
		'Chain Mail Boots', 'Trasok Starhammer', 440, 'none',
		'Chain Mail Gloves', 'Kethzun Guthazik', 400, 'none',
		'Chain Mail Gloves', 'Trasok Starhammer', 400, 'none',
		'Chain Mail Pants', 'Kethzun Guthazik', 450, 'none',
		'Chain Mail Pants', 'Trasok Starhammer', 450, 'none',
		'Chain Mail Pants', 'Veja Pontor', 450, 'none',
		'Chain Mail Torso Armor', 'Kethzun Guthazik', 480, 'none',
		'Chain Mail Torso Armor', 'Trasok Starhammer', 480, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Armor Parts';

	$items_to_insert = array(
		'Bronze Scale Mail Cloth', 'Harnquist', 100, 'none',
		'Large Mail Cloth', 'Harnquist', 100, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Books';

	$items_to_insert = array(
		'Blank Book', 'Jayose', 50, 'none',
		'Blank Public Book', 'Jayose', 50, 'none',
		'Generic Map', 'Jayose', 70, 'none',
		'Generic Music Score', 'Jayose', 70, 'none',
		'Hydlaa East Map', 'Jayose', 30, 'none',
		'Hydlaa Main Map', 'Jayose', 30, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Containers';

	$items_to_insert = array(
		'Closed Wood Barrel', 'Njormik Carpenter', 200, 'none',
		'Empty Dark Wood Barrel', 'Njormik Carpenter', 200, 'none',
		'Gift Box Green', 'Kaiman Jilatt', 129, '2017-12-07',
		'Glyph Sack', 'Jirosh Mikana', 50, 'none',
		'Glyph Sack', 'Levrus Dahrenn', 50, 'none',
		'Jewelry Box', 'Lentanor Thunderhead', 750, 'none',
		'Large Chest', 'Njormik Carpenter', 250, 'none',
		'Large Wood Barrel', 'Boralis Voladrand', 500, 'none',
		'Picnic basket', 'Kaiman Jilatt', 100, 'none',
		'Sack', 'Kaiman Jilatt', 80, 'none',
		'Sack', 'Toda Ombretis', 80, 'none',
		'Small Cloth Sack', 'Kaiman Jilatt', 50, '2017-12-07',
		'Wooden Crate', 'Jirosh Mikana', 300, 'none',
		'Wooden Crate', 'Kaiman Jilatt', 300, '2017-12-07',
		'Wooden Crate', 'Phanejor Mikana', 300, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Food';

	$items_to_insert = array(
		'Apple', 'Allelia Symiestra', 5, 'none',
		'Apple', 'Jarda Ynarow', 5, 'none',
		'Apple', 'Jomed Parcen', 5, 'none',
		'Apple', 'Reffitia Thamal', 5, 'none',
		'Applesauce', 'Jomed Parcen', 7, 'none',
		'Beer Mug', 'Allelia Symiestra', 40, 'none',
		'Beer Mug', 'Brado', 40, 'none',
		'Beer Mug', 'Jarda Ynarow', 40, 'none',
		'Beer Mug', 'Shenji TorKaal', 40, 'none',
		'Boiled Kartoffel', 'Reffitia Thamal', 27, 'none',
		'Bread', 'Allelia Symiestra', 125, 'none',
		'Bread', 'Archilaya Gurpleferd', 125, 'none',
		'Bread', 'Jarda Ynarow', 125, 'none',
		'Bread', 'Orchibaly Gurpleferd', 125, 'none',
		'Cheese', 'Jashoky Dakarn', 25, 'none',
		'Cider Mug', 'Brado', 50, 'none',
		'Cider Mug', 'Jarda Ynarow', 50, 'none',
		'Cider Mug', 'Shenji TorKaal', 50, 'none',
		'Clacker Gruel', 'Allelia Symiestra', 28, 'none',
		'Cooked Carrot', 'Jomed Parcen', 75, 'none',
		'Egg', 'Jashoky Dakarn', 5, 'none',
		'Grilled Meat', 'Reffitia Thamal', 5, 'none',
		'Hearty Bamboo Rice', 'Allelia Symiestra', 100, 'none',
		'Kikiri Soup', 'Brado', 100, 'none',
		'Milk', 'Jashoky Dakarn', 20, 'none',
		'Pan-Fried Carp', 'Brado', 200, 'none',
		'Pan-Fried Trout', 'Brado', 200, 'none',
		'Pie', 'Allelia Symiestra', 10, 'none',
		'Pie', 'Archilaya Gurpleferd', 10, 'none',
		'Pie', 'Jarda Ynarow', 10, 'none',
		'Pie', 'Orchibaly Gurpleferd', 10, 'none',
		'Pot Roast', 'Allelia Symiestra', 100, 'none',
		'Red Liquor Mug', 'Allelia Symiestra', 60, 'none',
		'Red Liquor Mug', 'Brado', 60, 'none',
		'Red Liquor Mug', 'Jarda Ynarow', 60, 'none',
		'Red Liquor Mug', 'Shenji TorKaal', 60, 'none',
		'Scrambled Eggs', 'Allelia Symiestra', 25, 'none',
		'Scrambled Eggs', 'Brado', 25, 'none',
		'Scrambled Eggs', 'Reffitia Thamal', 25, 'none',
		'Water Pouch', 'Allelia Symiestra', 5, 'none',
		'Water Pouch', 'Brado', 5, 'none',
		'Water Pouch', 'Jarda Ynarow', 5, 'none',
		'Water Pouch', 'Jomed Parcen', 5, 'none',
		'Water Pouch', 'Orchibaly Gurpleferd', 5, 'none',
		'Water Pouch', 'Shenji TorKaal', 5, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Food Ingredients';


	$items_to_insert = array(
		'Bag of Salt', 'Jirosh Mikana', 100, 'none',
		'Bamboo Rice', 'Jomed Parcen', 5, 'none',
		'Bogo Pepper', 'Jashoky Dakarn', 5, 'none',
		'Carp Fish', 'Burdess Quirain', 5, 'none',
		'Carrot', 'Jashoky Dakarn', 5, 'none',
		'Fire Fruit', 'Grok Idon', 20, 'none',
		'Flour', 'Jashoky Dakarn', 25, 'none',
		'Flour', 'Jirosh Mikana', 25, 'none',
		'Ground Cinnamon', 'Grok Idon', 50, 'none',
		'Ground Jarana Root', 'Grok Idon', 50, 'none',
		'Honey', 'Aleena Arlavin', 25, 'none',
		'Honey', 'Jirosh Mikana', 25, 'none',
		'Irifon Rice', 'Brado', 5, 'none',
		'Jar of Corium Seed', 'Grok Idon', 100, 'none',
		'Jar of Sweetburst', 'Grok Idon', 100, 'none',
		'Jomed&apos;s Seasoning', 'Jomed Parcen', 50, 'none',
		'Kartoffel', 'Jashoky Dakarn', 5, 'none',
		'Lump of Butter', 'Jashoky Dakarn', 125, 'none',
		'Macca', 'Jashoky Dakarn', 5, 'none',
		'Meat', 'Jomed Parcen', 5, 'none',
		'Meat', 'Reffitia Thamal', 5, 'none',
		'Pungent Tuber', 'Grok Idon', 5, 'none',
		'Sack of Barley', 'Leann Grudaire', 25, 'none',
		'Sack of Banuts', 'Jirosh Mikana', 125, 'none',
		'Sack of Burr Nuts', 'Jirosh Mikana', 125, 'none',
		'Sack of Far Ground Rye', 'Jirosh Mikana', 25, 'none',
		'Sack of Jookans', 'Jirosh Mikana', 125, 'none',
		'Sack of Powdered Bread Rise', 'Jirosh Mikana', 50, 'none',
		'Sack of Powdered Bread Rise', 'Orchibaly Gurpleferd', 50, 'none',
		'Sack of Powdered Bread Rise', 'Leann Grudaire', 50, 'none',
		'Sack of Red Wheat', 'Jirosh Mikana', 25, 'none',
		'Sack of Strimptor', 'Jirosh Mikana', 25, 'none',
		'Sack of Strimptor', 'Leann Grudaire', 25, 'none',
		'Seared Trout', 'Jomed Parcen', 5, 'none',
		'Trout', 'Burdess Quirain', 5, 'none',
		'Water Filled Bucket', 'Burdess Quirain', 140, 'none',
		'Water Filled Bucket', 'Jirosh Mikana', 140, 'none',
		'Water Filled Bucket', 'Jomed Parcen', 140, 'none',
		'Water Filled Bucket', 'Leann Grudaire', 10, 'none',
		'Water Filled Bucket', 'Reffitia Thamal', 140, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Furnishings';

	$items_to_insert = array(
		'Bookstand', 'Lentanor Thunderhead', 175, 'none',
		'Brown Animal Carpet', 'Jeyarp Grotemey', 50, 'none',
		'Dark Wood Shelves', 'Lentanor Thunderhead', 200, 'none',
		'Large Metal Vase', 'Boralis Voladrand', 40, 'none',
		'Medium Bed', 'Lentanor Thunderhead', 170, 'none',
		'Ojaveda Blue Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Blue Carpet Roll', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Blue Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Ojaveda Bluedust Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Bluedust Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Ojaveda Brown Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Brown Carpet Roll', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Brown Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Ojaveda Green Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Green Carpet Roll', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Green Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Ojaveda Purple Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Purple Carpet Roll', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Purple Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Ojaveda Stripes Carpet', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Stripes Carpet Roll', 'Brintec Dev-Onni', 500, 'none',
		'Ojaveda Stripes Pillow', 'Brintec Dev-Onni', 100, 'none',
		'Potted Plant', 'Kaiman Jilatt', 50, '2017-12-07',
		'Simple Bed', 'Lentanor Thunderhead', 150, 'none',
		'Small Chair', 'Lentanor Thunderhead', 200, 'none',
		'Small Metal Vase', 'Boralis Voladrand', 30, 'none',
		'Small Potted Plant', 'Kaiman Jilatt', 50, 'none',
		'Small Table', 'Lentanor Thunderhead', 150, 'none',
		'Stool', 'Njormik Carpenter', 130, 'none',
		'Two Doors Closet', 'Lentanor Thunderhead', 220, 'none',
		'Wood Shelves', 'Lentanor Thunderhead', 200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Glyphs';

	$items_to_insert = array(
		'Air', 'Levrus Dahrenn', 1000, 'none',
		'Armor', 'Levrus Dahrenn', 1000, 'none',
		'Arrow', 'Levrus Dahrenn', 1000, 'none',
		'Cold', 'Levrus Dahrenn', 1000, 'none',
		'Death', 'Levrus Dahrenn', 1000, 'none',
		'Fire', 'Levrus Dahrenn', 1000, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Helm Parts';

	$items_to_insert = array(
		'Leather Ridge', 'Boralis Voladrand', 0, 'none',
		'Leather Cheekplate', 'Boralis Voladrand', 150, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Herbal Ingredients';

	$items_to_insert = array(
		'Cloth for Poultice', 'Aleena Arlavin', 10, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Herbal Preparations';

	$items_to_insert = array(
		'Barberry Syrup', 'Aleena Arlavin', 100, 'none',
		'Blue Cohosh Tea', 'Aleena Arlavin', 100, 'none',
		'Hop Tea', 'Aleena Arlavin', 100, 'none',
		'Juiceberry Juice', 'Aleena Arlavin', 100, 'none',
		'Lavender Tea', 'Aleena Arlavin', 100, 'none',
		'Orilliphia Tea', 'Aleena Arlavin', 100, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Items';

	$items_to_insert = array(
		'Campfire', 'Grok Idon', 300, 'none',
		'Campfire', 'Jirosh Mikana', 300, 'none',
		'Fork', 'Kaiman Jilatt', 5, '2017-12-07',
		'Iron Arrow', 'Gardr Keck', 1, 'none',
		'Iron Arrow', 'Harnquist', 1, 'none',
		'Iron Arrow', 'Kethzun Guthazik', 1, 'none',
		'Iron Arrow', 'Taemian Yangnk', 1, 'none',
		'Iron Arrow', 'Trasok Starhammer', 1, 'none',
		'Mug', 'Jirosh Mikana', 50, 'none',
		'Plate', 'Kaiman Jilatt', 5, '2017-12-07',
		'Small Plate', 'Kaiman Jilatt', 5, '2017-12-07',
		'Spoon', 'Kaiman Jilatt', 5, '2017-12-07',
		'Torch', 'Toda Ombretis', 100, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Plant Parts';

	$items_to_insert = array(
		'Bunch of Joopiner Berries', 'Grok Idon', 60, 'none',
		'Bunch of Terevan Berries', 'Grok Idon', 60, 'none',
		'Bunch of Trefoil', 'Grok Idon', 50, 'none',
		'Tinga Leaves', 'Grok Idon', 5, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Shield Parts';

	$items_to_insert = array(
		'Leather Shield Handle', 'Harnquist', 50, 'none',
		'Leather Shield Handle', 'Trasok Starhammer', 50, 'none',
		'Round Wicker Shield Core', 'Gardr Keck', 150, 'none',
		'Round Wicker Shield Core', 'Kethzun Guthazik', 150, 'none',
		'Round Wicker Shield Core', 'Trasok Starhammer', 150, 'none',
		'Round Wooden Shield Core', 'Gardr Keck', 150, 'none',
		'Round Wooden Shield Core', 'Kethzun Guthazik', 150, 'none',
		'Round Wooden Shield Core', 'Trasok Starhammer', 150, 'none',
		'Small Wicker Shield Core', 'Gardr Keck', 100, 'none',
		'Small Wicker Shield Core', 'Kethzun Guthazik', 100, 'none',
		'Small Wicker Shield Core', 'Trasok Starhammer', 100, 'none',
		'Small Wooden Shield Core', 'Gardr Keck', 100, 'none',
		'Small Wooden Shield Core', 'Harnquist', 100, 'none',
		'Small Wooden Shield Core', 'Kethzun Guthazik', 100, 'none',
		'Small Wooden Shield Core', 'Trasok Starhammer', 100, 'none',
		'Wicker Shield Core', 'Gardr Keck', 200, 'none',
		'Wicker Shield Core', 'Kethzun Guthazik', 200, 'none',
		'Wooden Shield Core', 'Gardr Keck', 200, 'none',
		'Wooden Shield Core', 'Kethzun Guthazik', 200, 'none',
		'Wooden Shield Core', 'Trasok Starhammer', 200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Shields';

	$items_to_insert = array(
		'Banded Shield', 'Gardr Keck', 1924, 'none',
		'Bronze Shield', 'Harnquist', 1650, 'none',
		'Bulls Eye Shield', 'Trasok Starhammer', 3207, 'none',
		'Bulls Eye Shield', 'Veja Pontor', 3207, 'none',
		'Circle Shield', 'Gardr Keck', 500, 'none',
		'Five-Spiked Shield', 'Taemian Yangnk', 2283, 'none',
		'Radiant Shield', 'Trasok Starhammer', 3712, 'none',
		'Round Shield', 'Gardr Keck', 1100, 'none',
		'Three Rivet Shield', 'Harnquist', 2948, 'none',
		'Valiant Shield', 'Harnquist', 2616, 'none',
		'Wheel Shield', 'Taemian Yangnk', 4135, 'none',
		'Wooden and Metal Shield', 'Trasok Starhammer', 1182, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Structures';

	$items_to_insert = array(
		'Kiosk', 'Njormik Carpenter', 1800, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Alchemy';

	$items_to_insert = array(
		'Glass Stirrer', 'Levrus Dahrenn', 400, 'none',
		'Glass Stirrer', 'Liera Zireti', 400, 'none',
		'Glass Stirrer', 'Vladovic Chel-Astra', 400, 'none',
		'Iron Stirrer', 'Levrus Dahrenn', 250, 'none',
		'Iron Stirrer', 'Liera Zireti', 250, 'none',
		'Iron Stirrer', 'Vladovic Chel-Astra', 250, 'none',
		'Wooden Mallet', 'Levrus Dahrenn', 100, 'none',
		'Wooden Mallet', 'Liera Zireti', 100, 'none',
		'Wooden Stirrer', 'Levrus Dahrenn', 150, 'none',
		'Wooden Stirrer', 'Liera Zireti', 150, 'none',
		'Wooden Stirrer', 'Vladovic Chel-Astra', 150, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Artist';

	$items_to_insert = array(
		'Drum', 'Dhalia Colat', 1000, 'none',
		'Lira', 'Dhalia Colat', 1000, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Farming';

	$items_to_insert = array(
		'Axe', 'Harnquist', 80, 'none',
		'Sickle', 'Harnquist', 70, 'none',
		'Wood Chisel', 'Jjousk Carryt', 100, 'none',
		'Wood Saw', 'Jjousk Carryt', 60, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Fishing';

	$items_to_insert = array(
		'Fishing Rod & Reel', 'Burdess Quirain', 205, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Kitchen';

	$items_to_insert = array(
		'Circle Cutter', 'Jomed Parcen', 50, 'none',
		'Circle Cutter', 'Trasok Starhammer', 50, 'none',
		'Kitchen Knife', 'Harnquist', 50, 'none',
		'Kitchen Knife', 'Jirosh Mikana', 50, 'none',
		'Kitchen Knife', 'Jomed Parcen', 50, 'none',
		'Masher', 'Jirosh Mikana', 50, 'none',
		'Masher', 'Jomed Parcen', 50, 'none',
		'Mixer', 'Toda Ombretis', 50, 'none',
		'Rolling Pin', 'Toda Ombretis', 50, 'none',
		'Scoop', 'Jomed Parcen', 50, 'none',
		'Scoop', 'Toda Ombretis', 50, 'none',
		'Spreader', 'Jirosh Mikana', 50, 'none',
		'Strainer', 'Jirosh Mikana', 200, 'none',
		'Strainer', 'Jomed Parcen', 200, 'none',
		'Wooden Spoon', 'Toda Ombretis', 50, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Leatherworking';

	$items_to_insert = array(
		'Copper Needle and Thread', 'Gayla Grotemey', 50, 'none',
		'Copper Needle and Thread', 'Hirenn Darmeth', 50, 'none',
		'Hide Scarper', 'Gayla Grotemey', 300, 'none',
		'Hide Scarper', 'Hirenn Darmeth', 300, 'none',
		'Leather Cutter', 'Gayla Grotemey', 100, 'none',
		'Leather Cutter', 'Hirenn Darmeth', 100, 'none',
		'Tanning Crystal Acid', 'Gayla Grotemey', 10, 'none',
		'Tanning Crystal Acid', 'Hirenn Darmeth', 10, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Mining';

	$items_to_insert = array(
		'Rock Pick', 'Gardr Keck', 150, 'none',
		'Rock Pick', 'Harnquist', 150, 'none',
		'Rock Pick', 'Kethzun Guthazik', 150, 'none',
		'Rock Pick', 'Toda Ombretis', 150, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Tools - Smith';

	$items_to_insert = array(
		'Armors Repair Kit', 'Gardr Keck', 100, 'none',
		'Armors Repair Kit', 'Harnquist', 100, 'none',
		'Armors Repair Kit', 'Kethzun Guthazik', 100, 'none',
		'Armors Repair Kit', 'Trasok Starhammer', 100, 'none',
		'Armors Repair Kit', 'Veja Pontor', 100, 'none',
		'Arrow-Head Mold', 'Jjousk Carryt', 50, 'none',
		'Cutters', 'Harnquist', 150, 'none',
		'Cutters', 'Kethzun Guthazik', 150, 'none',
		'Cutters', 'Trasok Starhammer', 150, 'none',
		'Hammer', 'Harnquist', 150, 'none',
		'Hammer', 'Kethzun Guthazik', 150, 'none',
		'Mandrel', 'Harnquist', 500, 'none',
		'Mandrel', 'Kethzun Guthazik', 500, 'none',
		'Mandrel', 'Trasok Starhammer', 500, 'none',
		'Mandrel', 'Jjousk Carryt', 500, 'none',
		'Weapons Repair Kit', 'Gardr Keck', 100, 'none',
		'Weapons Repair Kit', 'Harnquist', 100, 'none',
		'Weapons Repair Kit', 'Kethzun Guthazik', 100, 'none',
		'Weapons Repair Kit', 'Taemian Yangnk', 100, 'none',
		'Weapons Repair Kit', 'Trasok Starhammer', 100, 'none',
		'Weapons Repair Kit', 'Veja Pontor', 100, 'none',
		'Wire Mold', 'Harnquist', 500, 'none',
		'Wire Mold', 'Kethzun Guthazik', 500, 'none',
		'Wire Mold', 'Trasok Starhammer', 500, 'none',
		'Wood Plane', 'Jjousk Carryt', 50, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapon Parts';

	$items_to_insert = array(
		'Leather Knife Handle', 'Harnquist', 10, 'none',
		'Leather Knife Handle', 'Trasok Starhammer', 10, 'none',
		'Small Wooden Axe Handle', 'Gardr Keck', 30, 'none',
		'Small Wooden Axe Handle', 'Kethzun Guthazik', 30, 'none',
		'Small Wooden Axe Handle', 'Trasok Starhammer', 30, 'none',
		'Small Wooden Axe Handle', 'Veja Pontor', 30, 'none',
		'Wooden Axe Handle', 'Gardr Keck', 50, 'none',
		'Wooden Axe Handle', 'Kethzun Guthazik', 50, 'none',
		'Wooden Axe Handle', 'Trasok Starhammer', 50, 'none',
		'Wooden Axe Handle', 'Veja Pontor', 50, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Axe';

	$items_to_insert = array(
		'Reinforced Axe', 'Trasok Starhammer', 3050, 'none',
		'Reinforced Battle Axe', 'Taemian Yangnk', 4050, 'none',
		'Small Battle Axe', 'Trasok Starhammer', 1030, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Broadsword';

	$items_to_insert = array(
		'Broadsword', 'Gardr Keck', 4300, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Club';

	$items_to_insert = array(
		'Club', 'Harnquist', 70, 'none',
		'Mace', 'Gardr Keck', 100, 'none',
		'Mace', 'Harnquist', 100, 'none',
		'Morning Star', 'Gardr Keck', 170, 'none',
		'War Club', 'Gardr Keck', 140, 'none',
		'War Club', 'Taemian Yangnk', 140, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Dagger';

	$items_to_insert = array(
		'Dagger', 'Harnquist', 810, 'none',
		'Dagger', 'Kethzun Guthazik', 810, 'none',
		'Dagger', 'Trasok Starhammer', 810, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Falchion';

	$items_to_insert = array(
		'Steel Falchion', 'Trasok Starhammer', 2200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Hammer';

	$items_to_insert = array(
		'Battle Hammer', 'Gardr Keck', 1500, 'none',
		'Warhammer', 'Taemian Yangnk', 1800, 'none',
		'Warhammer', 'Trasok Starhammer', 1800, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Knife';

	$items_to_insert = array(
		'Knife', 'Gardr Keck', 510, 'none',
		'Knife', 'Kethzun Guthazik', 510, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Longsword';

	$items_to_insert = array(
		'Longsword', 'Harnquist', 3200, 'none',
		'Longsword', 'Kethzun Guthazik', 3200, 'none',
		'Longsword', 'Trasok Starhammer', 3200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Pole';

	$items_to_insert = array(
		'Quarterstaff', 'Gardr Keck', 300, 'none',
		'Quarterstaff', 'Jardet Forsill', 300, 'none',
		'Quarterstaff', 'Kethzun Guthazik', 300, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Ranged';

	$items_to_insert = array(
		'Bolt', 'Jjousk Carryt', 5, 'none',
		'Dermorian Hunting Bow', 'Jjousk Carryt', 250, 'none',
		'Dermorian Greater Bow', 'Taemian Yangnk', 1000, 'none',
		'Dermorian Lesser Bow', 'Harnquist', 400, 'none',
		'Dermorian Lesser Bow', 'Kethzun Guthazik', 400, 'none',
		'Dermorian Normal Bow', 'Trasok Starhammer', 600, 'none',
		'Enkidukai Hunting Bow', 'Jjousk Carryt', 750, 'none',
		'Enkidukai Greater Bow', 'Taemian Yangnk', 1000, 'none',
		'Enkidukai Lesser Bow', 'Harnquist', 400, 'none',
		'Enkidukai Lesser Bow', 'Kethzun Guthazik', 400, 'none',
		'Enkidukai Normal Bow', 'Trasok Starhammer', 600, 'none',
		'Iron Arrow', 'Jjousk Carryt', 1, 'none',
		'Ynnwn Hunting Bow', 'Jjousk Carryt', 1500, 'none',
		'Ynnwn Greater Bow', 'Taemian Yangnk', 1000, 'none',
		'Ynnwn Lesser Bow', 'Harnquist', 400, 'none',
		'Ynnwn Lesser Bow', 'Kethzun Guthazik', 400, 'none',
		'Ynnwn Normal Bow', 'Trasok Starhammer', 600, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Sabre';

	$items_to_insert = array(
		'Sabre', 'Harnquist', 1200, 'none',
		'Sabre', 'Kethzun Guthazik', 1200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}

	$item_category = 'Weapons - Shortsword';

	$items_to_insert = array(
		'Reinforced Shortsword', 'Taemian Yangnk', 2500, 'none',
		'Shortsword', 'Harnquist', 2200, 'none',
		'Shortsword', 'Kethzun Guthazik', 2200, 'none',
		'Shortsword', 'Trasok Starhammer', 2200, 'none',
		);

	for($i = 0; $i < count($items_to_insert); $i += 4) {
		$items_query = "INSERT INTO items (name, category, npc, price, checkup)
						VALUES ('" . $items_to_insert[$i] . "', '" . $item_category
						. "', '" . $items_to_insert[$i+1] . "', " . $items_to_insert[$i+2]
						. ", '" . $items_to_insert[$i+3] . "')";
		$mysqli->query($items_query) or die($mysqli->error);
	}


	/* ########################################################################################## */


	/* close connection */
	$mysqli->close();
