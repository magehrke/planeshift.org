<?php
	$ini = parse_ini_file('../config_planeshift.ini');
	$mysqli = new mysqli($ini['db_url'], $ini['db_user'], $ini['db_pass'],
		$ini['db_name']);
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

	/* ########################################################################################## */
	/* Books */
	/* ########################################################################################## */

	$books = array (
		"Alchemical Concoctations" => "Making Magical Potions",
		"Advanced Bow Making" => "Advanced Bow Making",
		"Banded Shield Diagram" => "So Many Chairs",
		"Basic Bow Making" => "Learning Bow Making",
		"Basic Jewelry Making" => "Toda Needs Gold Rings",
		"Basic Leathermaking" => "Introduction to Leatherworking",
		"Basic Potions Tome" => "Liera's Cure",
		"Book of Blades" => "Learning Blade Making",
		"Catalog of Light Shields" => "Learning Shield Making",
		"Catalog of Hammers any Maces" => "A new mace for Nevis",
		"Cooking with Minerals" => "Feeding the Guard",
		"Crystal’s Delight for Kran" => "Jomed’s Coalchemist Problem",
		"Dishes with Fishes" => "Apprenticeship Approval",
		"Drinks of the Dome" => "Beer Tasting Event",
		"Enchanting Armor" => "A Most Enchanting Order",
		"Enchanting Gems of Power" => "Gregori's Enchanted Gems",
		"Enchanting Gems of Spirit" => "Thorian's Order",
		"Enchanting Heavy Shields" => "Seeking Guidance II",
		"Enchanting Light Shields" => "Seeking Guidance II",
		"Enchanting Weapons" => "Seeking Guidance I",
		"Forging Platinum Steel Axes" => "Trasok and the Guards",
		"Forging Platinum Steel Blades" => "Forging Platinum Steel Blades",
		"Gemstone Jewelry" => "Gem Necklace for Uri Djho-Maat",
		"Gifts of Xiosia" => "Bestowing the Gifts of Xiosia",
		"Helms of Darmeth" => "Book Delivery for Kelicha",
		"Healer's Remedie" => "Potions for a Healer",
		"Herbal Remedies" => "Aleena Teaches Herbalism",
		"Making Chainmail Armor" => "Learning to Make Chain Mail",
		"Making Leather Armor" => "Making Leather Armor",
		"Making Plate Mail Armor" => "Helping Nalri",
		"Nature's Secrets" => "Learning Nature's Secrets",
		"Notes of an Axe Maker" => "Teeth for Trasok",
		"Platinum Steel Hammers" => "Helping Gardr with kras orders",
		"Stew Recipes" => "Jomed's Meat Medley",
		"Stinger Shield Diagrama" => "The Carkarass Shield",
		"Superior Sword Parchment" => "New Sabre for Jecascis",
		"Superior Platinum Steel Blades" => "Veja's stolen stock",
		"The Art of Baking" => "Learning to Cook",
		"The Pastry Chef Book" => "Archilaya's New Recipe",
		"Three Rivet Shield Diagram" => "Gardr's Missing Plans",
		"Wheel Shield Diagram" => "Fixing the Broken",
		"Working with Stock" => "Learning Metal Working",
		"Working with Rare Stock" => "Working with Rare Metals"
	);
	$mysqli->query("DROP TABLE IF EXISTS crafting_books") or die($mysqli->error);
	$q = "CREATE TABLE IF NOT EXISTS crafting_books (
					name VARCHAR(50) NOT NULL,
					quest VARCHAR(50) NOT NULL,
					PRIMARY KEY (name)
					)";
	$mysqli->query($q) or die($mysqli->error);
	foreach ($books as $name => $quest)
	{
		$q = "INSERT INTO crafting_books VALUES
			(
			\"".str_replace ( "'", "&apos;", $name )."\",
			\"".$quest."\"
			)
		";
		$mysqli->query($q) or die ( $mysqli->error );
	}

	/* ########################################################################################## */
	/* Crafting
	 *
	 * ingredients are prefixed with a letter giving a hint where to get it:
	 * H = harvested/digged
	 * B = buy from merchant
	 * C = crafted
	 * L = looted
	 * M = mined
	 *
	 * type is an abbreviation:
	 * I = ingredient (intermediate preparation)
	 * P = preparation
	 */
	/* ########################################################################################## */

	$recipes = array (
		//
		// Herbal Remedies
		//
		array (
			"name"		=> "Barberry Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Barberry Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Barberry Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Barberry Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Blue Cohosh Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Blue Cohosh Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Blue Cohosh Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Blue Cohosh Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Blue Shan Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Blue Shan Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">19 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Blue Shan Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Blue Shan Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Butchers Broom Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Butchers Broom Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Butchers Broom Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Butchers Broom Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Charmflower Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Charmflower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Charmflower Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Charmflower Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Clackerweed Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Clackerweed Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Clackerweed Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Clackerweed Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Barberry Root",
			"type"		=> "I",
			"ingredient"	=> "H 1 Barberry Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Blue Cohosh Root",
			"type"		=> "I",
			"ingredient"	=> "H 1 Blue Cohosh Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Blue Shan Flower",
			"type"		=> "I",
			"ingredient"	=> "H 1 Blue Shan Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Butchers Broom Root",
			"type"		=> "I",
			"ingredient"	=> "H 1 Butchers Broom Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Charmflower",
			"type"		=> "I",
			"ingredient"	=> "H 1 Charmflower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Clackerweed Leaf",
			"type"		=> "I",
			"ingredient"	=> "H 1 Clackerweed Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Dandelion Flower",
			"type"		=> "I",
			"ingredient"	=> "H 1 Dandelion Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Devils Claw",
			"type"		=> "I",
			"ingredient"	=> "H 1 Devils Claw",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Eyebright",
			"type"		=> "I",
			"ingredient"	=> "H 1 Eyebright",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Feverfew",
			"type"		=> "I",
			"ingredient"	=> "H 1 Feverfew",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Gobo Root",
			"type"		=> "I",
			"ingredient"	=> "H 1 Gobo Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Golden Ivy Leaf",
			"type"		=> "I",
			"ingredient"	=> "H 1 Golden Ivy Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Hops",
			"type"		=> "I",
			"ingredient"	=> "H 1 Hops",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "22",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Kingsfoil Leaf",
			"type"		=> "I",
			"ingredient"	=> "H 1 Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Lavender Flower",
			"type"		=> "I",
			"ingredient"	=> "H 1 Lavender Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Orilliphia",
			"type"		=> "I",
			"ingredient"	=> "H 1 Orilliphia",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Red Mangrove",
			"type"		=> "I",
			"ingredient"	=> "H 1 Red Mangrove Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Sinaflar Root",
			"type"		=> "I",
			"ingredient"	=> "H 1 Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Snowbud",
			"type"		=> "I",
			"ingredient"	=> "H 1 Snowbud",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Tinga Leaves",
			"type"		=> "I",
			"ingredient"	=> "H 1 Tinga Leaves",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Wyn Reed",
			"type"		=> "I",
			"ingredient"	=> "H 1 Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Cut Yarrow",
			"type"		=> "I",
			"ingredient"	=> "H 1 Yarrow",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Dandelion Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Dandelion Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Dandelion Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Dandelion Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Devils Claw Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Devils Claw, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Devils Claw Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Devils Claw Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Eyebright Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Eyebright, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Eyebright Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Eyebright Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Feverfew Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Feverfew, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Feverfew Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Feverfew Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Gobo Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Gobo Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Gobo Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Gobo Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Golden Ivy Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Golden Ivy Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Golden Ivy Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Golden Ivy Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Hop Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Hops, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Hop Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Hop Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Juiceberry Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Juiceberry Fruit",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Juiceberry Juice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Juiceberry Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Kingsfoil Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Kingsfoil Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Kingsfoil Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Kingsfoil Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Lavender Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Lavender Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Lavender Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Lavender Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Mug of Hot Water",
			"type"		=> "I",
			"ingredient"	=> "B 2 Water Pouch",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "1",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Mug of Hot Water",
			"type"		=> "I",
			"ingredient"	=> "B 1 Water Filled Bucket",
			"result"	=> 14,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "1",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Orilliphia Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Orilliphia, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Orilliphia Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Orilliphia Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Red Mangrove Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Red Mangrove, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Red Mangrove Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Red Mangrove Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Sinaflar Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Sinaflar, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Sinaflar Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Sinaflar Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Snowbud Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Snowbud, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Snowbud Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Snowbud Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Threestem Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Threestem Fruit",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Threestem Juice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Threestem Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Tinga Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 2 Cut Tinga Leaves, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Tinga Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Tinga Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Wragberry Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Wragberry",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Wragberry Juice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Wragberry Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Wyn Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Wyn Reed, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Wyn Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Wyn Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Yarrow Tea Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Yarrow, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		array (
			"name"		=> "Yarrow Tea",
			"type"		=> "P",
			"ingredient"	=> "C 1 Yarrow Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		//
		// Nature's Secrets
		//
		array (
			"name"		=> "Barberry Extract",
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Tea",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Barberry Syrup Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Extract, B 1 Honey",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Barberry Syrup",
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Syrup Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Unfinished Gobo Oil",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Gobo Root, C 1 Hot Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Gobo Oil",
			"type"		=> "I",
			"ingredient"	=> "C 1 Unfinished Gobo Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Golden Ivy Extract",
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Ivy Tea",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Golden Syrup Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Ivy Extract, B 1 Honey",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Golden Syrup",
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Syrup Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wragberry Oil",
			"type"		=> "I",
			"ingredient"	=> "H 5 Wragberry",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Hot Wragberry Oil",
			"type"		=> "I",
			"ingredient"	=> "C 1 Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Kingsfoil Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Kingsfoil Pulp",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Kingsfoil Paste",
			"type"		=> "I",
			"ingredient"	=> "C 1 Kingsfoil Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Kingsfoil Poultice Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Kingsfoil Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Kingsfoil Poultice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Kingsfoil Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Unfinished Lavender Oil",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Lavender Flower, C 1 Hot Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Lavender Oil",
			"type"		=> "I",
			"ingredient"	=> "C 1 Unfinished Lavender Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Red Mangrove Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Red Mangrove Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Red Mangrove Pulp",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Red Mangrove",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Red Mangrove Paste",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Mangrove Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Red Mangrove Poultice Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Mangrove Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Red Mangrove Poultice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Red Mangrove Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Sinaflar Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Sinaflar Pulp",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Sinaflar Paste",
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Sinaflar Poultice Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Sinaflar Poultice",
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wyn Pulp",
			"type"		=> "I",
			"ingredient"	=> "H 1 Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wyn Pulp",
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wyn Paste",
			"type"		=> "I",
			"ingredient"	=> "C 1 Wyn Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wyn Poultice Mix",
			"type"		=> "I",
			"ingredient"	=> "C 1 Wyn Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		array (
			"name"		=> "Wyn Poultice",
			"type"		=> "P",
			"ingredient"	=> "C 1 Wyn Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		//
		// Gifts of Xiosia
		//
		array (
			"name"		=> "Blackbush Powder",
			"type"		=> "I",
			"ingredient"	=> "H 1 Blackbush Stem",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> ">34",
			"book"		=> "Gifts of Xiosia"
		),
		array (
			"name"		=> "Unfinished Gobo Salve",
			"type"		=> "I",
			"ingredient"	=> "C 1 Gobo Oil, C 1 Blackbush Powder",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		array (
			"name"		=> "Gobo Salve",
			"type"		=> "P",
			"ingredient"	=> "C 1 Unfinished Gobo Salve",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">34",
			"book"		=> "Gifts of Xiosia"
		),
		array (
			"name"		=> "Unfinished Lavender Salve",
			"type"		=> "I",
			"ingredient"	=> "C 1 Lavender Oil, C 1 Sicklepod Powder",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		array (
			"name"		=> "Lavender Salve",
			"type"		=> "P",
			"ingredient"	=> "C 1 Unfinished Lavender Salve",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		array (
			"name"		=> "Sicklepod Powder",
			"type"		=> "I",
			"ingredient"	=> "H 1 Sicklepod Flower",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		//
		// Basic Potion Tome
		//
		array (
			"name"		=> "Mix of Kikiri Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 2 Purified Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Distilled Coamti Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Coamti Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Distilled Weaver Arangma Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Weaver Arangma Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Distilled Gobble Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Gobble Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Distilled Velnishi Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Velnishi Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Distilled Vilenaut Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Vilenaut Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <26",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Purified Maulberlord Blood",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Purified Maulberlord Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "P",
			"ingredient"	=> "C 1 Mix of Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Coamti Blood",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Weaver Arangma Blood",
			"result"	=> 3,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Gobble Blood",
			"result"	=> 6,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Velnishi Blood",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Vilenaut Blood",
			"result"	=> 15,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Charme Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Purified Maulberlord Blood",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Copper and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Copper, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Copper Ore and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Copper Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Copper Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Copper and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glas Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Copper Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Copper Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glas Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Distilled Coamti Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Coamti Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Distilled Gobble Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Gobble Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Distilled Weaver Arangma Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Weaver Arangma Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Distilled Velnishi Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Velnishi Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Distilled Vilenaut Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Vilenaut Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <26",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Rat Foot",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 1 Ground Rat Foot",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Clacker Leg",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 1 Powdered Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Thunder Clacker Leg",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 1 Ground Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Consumer Leg",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 1 Powdered Consumer Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Grace Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Rat Foot",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Grace Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Clacker Leg",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Grace Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Consumer Leg",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Grace Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Thunder Clacker Leg",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Rat Foot",
			"type"		=> "I",
			"ingredient"	=> "L 1 Rat Foot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Serpent Gobble Bone",
			"type"		=> "I",
			"ingredient"	=> "L 1 Serpent Gobble Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Thunder Clacker Leg",
			"type"		=> "I",
			"ingredient"	=> "L 1 Thunder Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Thunder Clacker Tentacle",
			"type"		=> "I",
			"ingredient"	=> "L 1 Thunder Clacker Tentacle",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Trepor Warrior Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Trepor Warrior Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Trepor Wiggly Feeler",
			"type"		=> "I",
			"ingredient"	=> "L 1 Trepor Wiggly Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Vesper Arangma Feeler",
			"type"		=> "I",
			"ingredient"	=> "L 1 Vesper Arangma Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Ground Wrath Rat Bone",
			"type"		=> "I",
			"ingredient"	=> "L 1 Wrath Rat Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Arangma Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Flayed Velnishi Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Flayed Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Jade Clacker Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Jade Clacker Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Maulberlord Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulberlord Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Maulberlord Perfect Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulberlord Perfect Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Maulbernaut Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulbernaut Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Maulbernaut Perfect Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulbernaut Perfect Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Tefusang Claw",
			"type"		=> "I",
			"ingredient"	=> "L 1 Tefusang Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Tefusangling Claw",
			"type"		=> "I",
			"ingredient"	=> "L 1 Tefusangling Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Incinerated Velnishi Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Iron Ore and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Iron Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Iron Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Iron Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Iron and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Iron, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Iron Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Iron and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Carkarass Skull",
			"type"		=> "I",
			"ingredient"	=> "L 1 Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Coamti Talon",
			"type"		=> "I",
			"ingredient"	=> "L 1 Coamti Talon",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Eagle Gobble Skull",
			"type"		=> "I",
			"ingredient"	=> "L 1 Eagle Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Flayed Velnishi Skull",
			"type"		=> "I",
			"ingredient"	=> "L 1 Flayed Velnishi Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Grendol Bone",
			"type"		=> "I",
			"ingredient"	=> "L 1 Grendol Rib",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Grendol Bone",
			"type"		=> "I",
			"ingredient"	=> "L 1 Grendol Spine",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Marfusang Bone",
			"type"		=> "I",
			"ingredient"	=> "L 1 Marfusang Bone",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Poison Carkarass Skull",
			"type"		=> "I",
			"ingredient"	=> "L 1 Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Limed Serpent Gobble Skull",
			"type"		=> "I",
			"ingredient"	=> "L 1 Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Dermorian's Willpower",
			"type"		=> "I",
			"ingredient"	=> "C 2 Willpower Essence, C 2 Quicksilver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Dermorian's Willpower",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Diaboli's Charme",
			"type"		=> "I",
			"ingredient"	=> "C 2 Charme Essence, C 2 Copper Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Diaboli's Charme",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Enkidukai's Grace",
			"type"		=> "I",
			"ingredient"	=> "C 2 Grace Essence, C 2 Silver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Enkidukai's Grace",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Kran's Vigor",
			"type"		=> "I",
			"ingredient"	=> "C 2 Vigor Essence, C 2 Iron Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Kran's Vigor",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Lemur's Smartness",
			"type"		=> "I",
			"ingredient"	=> "C 2 Smartness Essence, C 2 Tin Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Lemur's Smartness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Major Potion of Ynwn's Toughness",
			"type"		=> "I",
			"ingredient"	=> "C 2 Toughness Essence, C 2 Zinc Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Major Potion of Ynwn's Toughness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Dermorian's Willpower",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Diamond, C 1 Quicksilver Vial",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Dermorian's Willpower",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Diaboli's Charme",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Copper Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Diaboli's Charme",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Enkidukai's Grace",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Sapphire, C 1 Silver Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Enkidukai's Grace",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Kran's Vigor",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Ruby, C 1 Iron Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Kran's Vigor",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Lemur's Smartness",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Tin Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Lemur's Smartness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Minor Potion of Ynwn's Toughness",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Emerald, C 1 Zinc Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Minor Potion of Ynwn's Toughness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Nitric Spirit",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Niter and Vitriol",
			"result"	=> 2,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Dermorian's Willpower",
			"type"		=> "I",
			"ingredient"	=> "C 1 Willpower Essence, C 1 Quicksilver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Dermorian's Willpower",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Diaboli's Charme",
			"type"		=> "I",
			"ingredient"	=> "C 1 Charme Essence, C 1 Copper Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Diaboli's Charme",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Enkidukai's Grace",
			"type"		=> "I",
			"ingredient"	=> "C 1 Grace Essence, C 1 Silver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Enkidukai's Grace",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Kran's Vigor",
			"type"		=> "I",
			"ingredient"	=> "C 1 Vigor Essence, C 1 Iron Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Kran's Vigor",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Lemur's Smartness",
			"type"		=> "I",
			"ingredient"	=> "C 1 Smartness Essence, C 1 Tin Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Lemur's Smartness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Raw Potion of Ynwn's Toughness",
			"type"		=> "I",
			"ingredient"	=> "C 1 Toughness Essence, C 1 Zinc Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Potion of Ynwn's Toughness",
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Clacker Leg",
			"type"		=> "I",
			"ingredient"	=> "L 1 Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Consumer Antenna",
			"type"		=> "I",
			"ingredient"	=> "L 1 Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Consumer Leg",
			"type"		=> "I",
			"ingredient"	=> "L 1 Consumer Leg",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Copper",
			"type"		=> "I",
			"ingredient"	=> "C 1 Copper Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Copper Ore",
			"type"		=> "I",
			"ingredient"	=> "M 1 Copper Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Diamond",
			"type"		=> "I",
			"ingredient"	=> "M 1 Diamond Crystal",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Emerald",
			"type"		=> "I",
			"ingredient"	=> "M 1 Emerald Crystal",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Iron",
			"type"		=> "I",
			"ingredient"	=> "C 1 Iron Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Iron Ore",
			"type"		=> "I",
			"ingredient"	=> "M 1 Iron Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Ruby",
			"type"		=> "I",
			"ingredient"	=> "M 1 Ruby Crystal",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Sapphire",
			"type"		=> "I",
			"ingredient"	=> "M 1 Sapphire Crystal",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Silver",
			"type"		=> "I",
			"ingredient"	=> "C 1 Silver Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Silver Ore",
			"type"		=> "I",
			"ingredient"	=> "M 1 Silver Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Tin",
			"type"		=> "I",
			"ingredient"	=> "C 1 Tin Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Tin Ore",
			"type"		=> "I",
			"ingredient"	=> "M 1 Tin Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Zinc",
			"type"		=> "I",
			"ingredient"	=> "C 1 Zinc Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Powdered Zinc Ore",
			"type"		=> "I",
			"ingredient"	=> "M 1 Zinc Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Purified Kikiri Blood",
			"type"		=> "I",
			"ingredient"	=> "L 2 Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Purified Maulberlord Blood",
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulberlord Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Quicksilver and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Quicksilver Vial, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Quicksilver Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Quicksilver and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "10?",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Salt Spirit",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Salt and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "10?",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Silver Ore and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Silver Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Silver Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Silver Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Silver and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Silver, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Silver Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Silver and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Rat Eye",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, L 2 Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Coamti Eye",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, L 2 Coamti Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Vesper Arangma Eye",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, L 2 Vesper Arangma Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mixed Wrath Rat Eye",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, L 2 Wrath Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Smartness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Smartness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Coamti Eye",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Smartness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Wrath Rat Eye",
			"result"	=> 4,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Smartness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Vesper Arangma Eye",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Tin and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Tin, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Tin Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Tin and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Tin Ore and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Tin Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Tin Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Tin Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Carkarass Skull",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Poison Carkarass Skull",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Flayed Velnishi Skull",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Flayed Velnishi Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Marfusang Bone",
			"type"		=> "I",
			"ingredient"	=> "C 2 Salt Spirit, C 1 Limed Marfusang Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Wrath Rat Bone",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Ground Wrath Rat Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Ground Serpent Gobble Bone",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Ground Serpent Gobble Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Serpent Gobble Skull",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Serpent Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Eagle Gobble Skull",
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Eagle Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Grondol Bone",
			"type"		=> "I",
			"ingredient"	=> "C 2 Salt Spirit, C 1 Limed Grendol Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Carkarass Skull",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Poison Carkarass Skull",
			"result"	=> 9,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Flayed Velnishi Skull",
			"result"	=> 12,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Marfusang Bone",
			"result"	=> 9,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Wrath Rat Bone",
			"result"	=> 4,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Serpent Gobble Bone",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Eagle Gobble Bone",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Serpent Gobble Skull",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Toughness Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Grendol Bone",
			"result"	=> 12,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Jade Clacker Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Jade Clacker Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Velnishi Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Flayed Velnishi Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Flayed Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Limed Coamti Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Limed Coamti Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Incinerated Arangma Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Incinerated Maulberlord Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Maulberlord Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Incinerated Maulbernaut Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Maulbernaut Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Ground Trepor Warriot Talon",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Ground Trepor Warrior Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Incinerated Tefusang Claw",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Tefusang Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Incinerated Tefusangling Claw",
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Tefusangling Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Jade Clacker Talon",
			"result"	=> 3,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Velnishi Talon",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Flayed Velnishi Talon",
			"result"	=> 12,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Coamti Talon",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Maulberlord Talon",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Maulbernaut Talon",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Trepor Warrior Talon",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Tefusang Claw",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vigor Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Tefusangling Claw",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Niter and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "B 2 Niter, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vitriol Salt",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Niter and Vitriol",
			"result"	=> 2,
			"tool"		=> "Athanor",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Salt and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "B 2 Common Salt, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Vitriol Salt",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Salt and Vitriol",
			"result"	=> 2,
			"tool"		=> "Athanor",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Thunder Clacker Tentacle",
			"type"		=> "I",
			"ingredient"	=> "B 2 Spirit, C 1 Ground Thunder Clacker Tentacle",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Vesper Arangma Feeler",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 2 Ground Vesper Arangma Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Consumer Antenna",
			"type"		=> "I",
			"ingredient"	=> "B 1 Spirit, C 1 Powdered Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Consumer Pheremone",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Trepor Wiggly Feeler",
			"type"		=> "I",
			"ingredient"	=> "B 2 Spirit, C 1 Ground Trepor Wiggly Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Willpower Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Trepor Wiggly Feeler",
			"result"	=> 6,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Willpower Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Consumer Pheremone",
			"result"	=> 10,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Willpower Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Vesper Arangma Feeler",
			"result"	=> 4,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Willpower Essence",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Thunder Clacker Tentacle",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Zinc Ore and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Zinc Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Zinc Ore Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Zinc Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Mix of Zinc and Vitriol",
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Zinc, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		array (
			"name"		=> "Zinc Solution",
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Zinc and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),

		//
		// Working with Stock
		//
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "P",
			"ingredient"	=> "C 1 Molten Bronze",
			"result"	=> 1,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Heated Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Heated Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Super Heated Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Heated Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Anvil + Hammer",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Red Hot Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Hot Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Ingot",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Hot Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Anvil + Hammer",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Bronze Stock",
			"type"		=> "P",
			"ingredient"	=> "C 10 Molten Bronze",
			"result"	=> 1,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Heated Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Heated Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Super Heated Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Heated Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Anvil + Hammer",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Red Hot Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Super Heated Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Forge",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Hot Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Quench Tank",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Stock",
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Hot Bronze Stock",
			"result"	=> 1,
			"tool"		=> "Anvil + Hammer",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Quicksilver Vial",
			"type"		=> "I",
			"ingredient"	=> "M 1 Cinnarbar Ore",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Tin Sludge",
			"type"		=> "I",
			"ingredient"	=> "M 5 Copper Ore, M 5 Tin Ore",
			"result"	=> 10,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Bronze Sludge",
			"type"		=> "I",
			"ingredient"	=> "M 6 Copper Ore, M 4 Tin Ore",
			"result"	=> 10,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Copper Sludge",
			"type"		=> "I",
			"ingredient"	=> "M 7 Copper Ore, M 3 Tin Ore",
			"result"	=> 10,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Molten Bronze",
			"type"		=> "I",
			"ingredient"	=> "C 1 Tin Sludge",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Bronze",
			"type"		=> "I",
			"ingredient"	=> "C 1 Bronze Sludge",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Bronze",
			"type"		=> "I",
			"ingredient"	=> "C 1 Copper Sludge",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Bronze",
			"type"		=> "I",
			"ingredient"	=> "C 1 Bronze Ingot",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Bronze",
			"type"		=> "I",
			"ingredient"	=> "C 1 Bronze Stock",
			"result"	=> 10,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "10",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Coal Sludge",
			"type"		=> "I",
			"ingredient"	=> "M 8 Iron Ore, M 2 Coal Lump",
			"result"	=> 10,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Steel Sludge",
			"type"		=> "I",
			"ingredient"	=> "M 9 Iron Ore, M 1 Coal Lump",
			"result"	=> 10,
			"tool"		=> "Stock Casting",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Coal Sludge",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Steel Sludge",
			"result"	=> 1,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Dagger",
			"result"	=> 4,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Small Battle Axe",
			"result"	=> 5,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Chain Mail Torso Armor",
			"result"	=> 15,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Battle Axe",
			"result"	=> 10,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Chain Mail Arms Armor",
			"result"	=> 12,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Longsword",
			"result"	=> 15,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),
		array (
			"name"		=> "Molten Steel",
			"type"		=> "I",
			"ingredient"	=> "C 1 Broadsword",
			"result"	=> 20,
			"tool"		=> "Furnace",
			"skill"		=> "Metallurgy",
			"level"		=> "5",
			"book"		=> "Working with Stock"
		),

		array (
			"name"		=> "",
			"type"		=> "I",
			"ingredient"	=> "",
			"result"	=> 1,
			"tool"		=> "",
			"skill"		=> "Metallurgy",
			"level"		=> "<9",
			"book"		=> "Working with Stock"
		),

	);
	$mysqli->query("DROP TABLE IF EXISTS recipes") or die($mysqli->error);
	$q = "CREATE TABLE IF NOT EXISTS recipes (
		id INTEGER AUTO_INCREMENT,
		name VARCHAR(50) NOT NULL,
		type CHAR NOT NULL,
		ingredient VARCHAR(150) NOT NULL,
		result INTEGER DEFAULT 0,
		tool VARCHAR(50) NOT NULL,
		skill VARCHAR(50) NOT NULL,
		level VARCHAR(10) NOT NULL,
		book VARCHAR(50) NOT NULL,
		PRIMARY KEY (`id`)
		)";
	$mysqli->query($q) or die($mysqli->error);

	foreach ($recipes as $id => $vals)
	{
		$q = "INSERT INTO recipes
			(
			name,
			type,
			ingredient,
			result,
			tool,
			skill,
			level,
			book
			)
		VALUES
			(
			\"".str_replace ( "'", "&apos;", $vals['name'] )."\",
			\"".$vals["type"]."\",
			\"".$vals["ingredient"]."\",
			\"".$vals["result"]."\",
			\"".$vals["tool"]."\",
			\"".$vals["skill"]."\",
			\"".$vals["level"]."\",
			\"".$vals["book"]."\"
			)";
		$mysqli->query($q) or die ( $mysqli->error );
	}

	/* close connection */
	$mysqli->close();
