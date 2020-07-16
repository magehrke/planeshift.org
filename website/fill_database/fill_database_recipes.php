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
		$q = "INSERT INTO crafting_books
		  VALUES (\"$name\",\"$quest\")";
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
	 *
	 * type is an abbreviation:
	 * I = ingredient
	 * P = preparation
	 */
	/* ########################################################################################## */

	$recipes = array (
		//
		// Herbal Remedies
		//
		"Barberry Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Barberry Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Barberry Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Barberry Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Blue Cohosh Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Blue Cohosh Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Blue Cohosh Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Blue Cohosh Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Blue Shan Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Blue Shan Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">19 <31",
			"book"		=> "Herbal Remedies"
		),
		"Blue Shan Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Blue Shan Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		"Butchers Broom Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Butchers Broom Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Butchers Broom Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Butchers Broom Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Charmflower Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Charmflower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Charmflower Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Charmflower Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Clackerweed Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Clackerweed Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Clackerweed Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Clackerweed Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Barberry Root" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Barberry Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Blue Cohosh Root" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Blue Cohosh Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Blue Shan Flower" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Blue Shan Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		"Cut Butchers Broom Root" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Butchers Broom Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Charmflower" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Charmflower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Clackerweed Leaf" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Clackerweed Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Dandelion Flower" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Dandelion Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Devils Claw" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Devils Claw",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Cut Eyebright" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Eyebright",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Cut Feverfew" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Feverfew",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Cut Gobo Root" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Gobo Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Cut Golden Ivy Leaf" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Golden Ivy Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Hops" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Hops",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "22",
			"book"		=> "Herbal Remedies"
		),
		"Cut Kingsfoil Leaf" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Lavender Flower" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Lavender Flower",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Orilliphia" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Orilliphia",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Red Mangrove" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Red Mangrove Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Sinaflar Root" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Snowbud" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Snowbud",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Cut Tinga Leaves" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Tinga Leaves",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Cut Wyn Reed" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Cut Yarrow" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Yarrow",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Kitchen Knife",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Herbal Remedies"
		),
		"Dandelion Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Dandelion Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Dandelion Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Dandelion Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Devils Claw Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Devils Claw, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Devils Claw Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Devils Claw Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Eyebright Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Eyebright, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Eyebright Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Eyebright Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Feverfew Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Feverfew, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Feverfew Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Feverfew Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Gobo Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Gobo Root, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Gobo Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Gobo Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Golden Ivy Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Golden Ivy Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Golden Ivy Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Golden Ivy Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Hop Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Hops, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Hop Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Hop Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "20",
			"book"		=> "Herbal Remedies"
		),
		"Juiceberry Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Juiceberry Fruit",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Juiceberry Juice" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Juiceberry Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Kingsfoil Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Kingsfoil Leaf, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Kingsfoil Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Kingsfoil Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Lavender Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Lavender Flower, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Lavender Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Lavender Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Mug of Hot Water" => array (
			"type"		=> "I",
			"ingredient"	=> "B 2 Water Pouch",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "1",
			"book"		=> "Herbal Remedies"
		),
		"Mug of Hot Water" => array (
			"type"		=> "I",
			"ingredient"	=> "B 1 Water Filled Bucket",
			"result"	=> 14,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "1",
			"book"		=> "Herbal Remedies"
		),
		"Orilliphia Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Orilliphia, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Orilliphia Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Orilliphia Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Red Mangrove Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Red Mangrove, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Red Mangrove Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Red Mangrove Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Sinaflar Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Sinaflar, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Sinaflar Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Sinaflar Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Snowbud Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Snowbud, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Snowbud Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Snowbud Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Threestem Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Threestem Fruit",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Threestem Juice" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Threestem Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Tinga Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Cut Tinga Leaves, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Tinga Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Tinga Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Wragberry Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Wragberry",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Wragberry Juice" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Wragberry Pulp",
			"result"	=> 1,
			"tool"		=> "Pot + Strainer",
			"skill"		=> "Herbal",
			"level"		=> "<13",
			"book"		=> "Herbal Remedies"
		),
		"Wyn Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Wyn Reed, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Wyn Tea" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Wyn Tea Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">13 <17",
			"book"		=> "Herbal Remedies"
		),
		"Yarrow Tea Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Yarrow, C 1 Mug of Hot Water",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> ">22 <31",
			"book"		=> "Herbal Remedies"
		),
		"Yarrow Tea" => array (
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
		"Barberry Extract" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Tea",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Barberry Syrup Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Extract, B 1 Honey",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Barberry Syrup" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Barberry Syrup Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Unfinished Gobo Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Gobo Root, C 1 Hot Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Gobo Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Unfinished Gobo Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Golden Ivy Extract" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Ivy Tea",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Golden Syrup Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Ivy Extract, B 1 Honey",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Golden Syrup" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Golden Syrup Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wragberry Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "H 5 Wragberry",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Hot Wragberry Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Kingsfoil Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Kingsfoil Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Kingsfoil Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Kingsfoil Paste" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Kingsfoil Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Kingsfoil Poultice Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Kingsfoil Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Kingsfoil Poultice" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Kingsfoil Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Unfinished Lavender Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Lavender Flower, C 1 Hot Wragberry Oil",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Lavender Oil" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Unfinished Lavender Oil",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Red Mangrove Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Red Mangrove Leaf",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Red Mangrove Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Red Mangrove",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Red Mangrove Paste" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Mangrove Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Red Mangrove Poultice Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Red Mangrove Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Red Mangrove Poultice" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Red Mangrove Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Sinaflar Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Sinaflar Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Sinaflar Root",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Sinaflar Paste" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Sinaflar Poultice Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Sinaflar Poultice" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Sinaflar Poultice Mix",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wyn Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wyn Pulp" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Cut Wyn Reed",
			"result"	=> 1,
			"tool"		=> "Preparation Table + Masher",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wyn Paste" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Wyn Pulp",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wyn Poultice Mix" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Wyn Paste, B 1 Cloth for Poultice",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<21",
			"book"		=> "Nature's Secrets"
		),
		"Wyn Poultice" => array (
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
		"Blackbush Powder" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Blackbush Stem",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Gifts of Xiosia"
		),
		"Unfinished Gobo Salve" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Gobo Oil, C 1 Blackbush Powder",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		"Gobo Salve" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Unfinished Gobo Salve",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> ">31",
			"book"		=> "Gifts of Xiosia"
		),
		"Unfinished Lavender Salve" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Lavender Oil, C 1 Sicklepod Powder",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		"Lavender Salve" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Unfinished Lavender Salve",
			"result"	=> 1,
			"tool"		=> "Pot",
			"skill"		=> "Herbal",
			"level"		=> "<31",
			"book"		=> "Gifts of Xiosia"
		),
		"Sicklepod Powder" => array (
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
		"Mix of Kikiri Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 2 Purified Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Distilled Coamti Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Coamti Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Distilled Weaver Arangma Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Weaver Arangma Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Distilled Gobble Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Gobble Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Distilled Velnishi Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Velnishi Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Distilled Vilenaut Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Distilled Vilenaut Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <26",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Purified Maulberlord Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Purified Maulberlord Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Mix of Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Coamti Blood",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Weaver Arangma Blood",
			"result"	=> 3,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Gobble Blood",
			"result"	=> 6,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Velnishi Blood",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Distilled Vilenaut Blood",
			"result"	=> 15,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Charme Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Purified Maulberlord Blood",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Copper and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Copper, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Copper Ore and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Copper Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Copper Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Copper and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glas Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Copper Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Copper Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glas Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Distilled Coamti Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Coamti Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Distilled Gobble Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Gobble Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Distilled Weaver Arangma Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Weaver Arangma Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Distilled Velnishi Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Velnishi Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Distilled Vilenaut Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Vilenaut Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <26",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Rat Foot" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 1 Ground Rat Foot",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Clacker Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 1 Powdered Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Thunder Clacker Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 1 Ground Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Consumer Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 1 Powdered Consumer Leg",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Grace Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Rat Foot",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Grace Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Clacker Leg",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Grace Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Consumer Leg",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Grace Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Thunder Clacker Leg",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Rat Foot" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Rat Foot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Serpent Gobble Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Serpent Gobble Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Thunder Clacker Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Thunder Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Thunder Clacker Tentacle" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Thunder Clacker Tentacle",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Trepor Warrior Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Trepor Warrior Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Trepor Wiggly Feeler" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Trepor Wiggly Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Vesper Arangma Feeler" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Vesper Arangma Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Ground Wrath Rat Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Wrath Rat Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Arangma Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Flayed Velnishi Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Flayed Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Jade Clacker Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Jade Clacker Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Maulberlord Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Maulberlord Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Maulberlord Perfect Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Maulberlord Perfect Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Maulbernaut Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Maulbernaut Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Maulbernaut Perfect Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Maulbernaut Perfect Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Tefusang Claw" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Tefusang Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Tefusangling Claw" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Tefusangling Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Incinerated Velnishi Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Iron Ore and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Iron Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Iron Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Iron Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Iron and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Iron, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Preparation Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Iron Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Iron and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Carkarass Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Coamti Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Coamti Talon",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Eagle Gobble Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Eagle Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Flayed Velnishi Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Flayed Velnishi Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Grendol Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Grendol Rib",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Grendol Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Grendol Spine",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Marfusang Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Marfusang Bone",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Poison Carkarass Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Limed Serpent Gobble Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Melting Pot",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Dermorian's Willpower" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Willpower Essence, C 2 Quicksilver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Dermorian's Willpower" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Diaboli's Charme" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Charme Essence, C 2 Copper Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Diaboli's Charme" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Enkidukai's Grace" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Grace Essence, C 2 Silver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Enkidukai's Grace" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Kran's Vigor" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Vigor Essence, C 2 Iron Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Kran's Vigor" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Lemur's Smartness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Smartness Essence, C 2 Tin Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Lemur's Smartness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Major Potion of Ynwn's Toughness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Toughness Essence, C 2 Zinc Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Major Potion of Ynwn's Toughness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Major Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<22",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Dermorian's Willpower" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Diamond, C 1 Quicksilver Vial",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Dermorian's Willpower" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Diaboli's Charme" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Copper Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Diaboli's Charme" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Enkidukai's Grace" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Sapphire, C 1 Silver Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Enkidukai's Grace" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Kran's Vigor" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Ruby, C 1 Iron Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Kran's Vigor" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Lemur's Smartness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vitriol Salt, C 1 Tin Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Lemur's Smartness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Minor Potion of Ynwn's Toughness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Emerald, C 1 Zinc Ore Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Minor Potion of Ynwn's Toughness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Minor Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Niter and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "B 2 Niter, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Nitric Spirit" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Niter and Vitriol",
			"result"	=> 2,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Dermorian's Willpower" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Willpower Essence, C 1 Quicksilver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Dermorian's Willpower" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Dermorian's Willpower",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Diaboli's Charme" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Charme Essence, C 1 Copper Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Diaboli's Charme" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Diaboli's Charme",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Enkidukai's Grace" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Grace Essence, C 1 Silver Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Enkidukai's Grace" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Enkidukai's Grace",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Kran's Vigor" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Vigor Essence, C 1 Iron Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Kran's Vigor" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Kran's Vigor",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Lemur's Smartness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Smartness Essence, C 1 Tin Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Lemur's Smartness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Lemur's Smartness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Raw Potion of Ynwn's Toughness" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Toughness Essence, C 1 Zinc Solution",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Potion of Ynwn's Toughness" => array (
			"type"		=> "P",
			"ingredient"	=> "C 1 Raw Potion of Ynwn's Toughness",
			"result"	=> 1,
			"tool"		=> "Melting Pot + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Clacker Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Clacker Leg",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Consumer Antenna" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Consumer Leg" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Consumer Leg",
			"result"	=> 1,
			"tool"		=> "Mortar and Pestle",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Copper" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Copper Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Copper Ore" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Copper Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Diamond" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Diamond",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Emerald" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Emerald",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Iron" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Iron Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Iron Ore" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Iron Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Ruby" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Ruby",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Sapphire" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Sapphire",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Silver" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Silver Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Silver Ore" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Silver Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Tin" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Tin Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Tin Ore" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Tin Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Zinc" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Zinc Ingot",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Powdered Zinc Ore" => array (
			"type"		=> "I",
			"ingredient"	=> "H 1 Zinc Ore",
			"result"	=> 1,
			"tool"		=> "Alchemist Table + Wooden Mallet",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Purified Kikiri Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 2 Kikiri Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Purified Maulberlord Blood" => array (
			"type"		=> "I",
			"ingredient"	=> "L 1 Maulberlord Blood",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Quicksilver and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Quicksilver Vial, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Quicksilver Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Quicksilver and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "10?",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Salt and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "B 2 Common Salt, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Salt Spirit" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Salt and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "10?",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Silver Ore and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Silver Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Silver Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Silver Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Silver and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Silver, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Silver Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Silver and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Rat Eye" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, H 2 Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Coamti Eye" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, H 2 Coamti Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Vesper Arangma Eye" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, H 2 Vesper Arangma Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mixed Wrath Rat Eye" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, H 2 Wrath Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Smartness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Rat Eye",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "",
			"book"		=> "Basic Potion Tome"
		),
		"Smartness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Coamti Eye",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Smartness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Wrath Rat Eye",
			"result"	=> 4,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Smartness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mixed Vesper Arangma Eye",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Tin and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Tin, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Tin Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Tin and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Tin Ore and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Tin Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Tin Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Tin Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Carkarass Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Poison Carkarass Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Poison Carkarass Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Flayed Velnishi Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Flayed Velnishi Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Marfusang Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Salt Spirit, C 1 Limed Marfusang Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Wrath Rat Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Ground Wrath Rat Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Ground Serpent Gobble Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Ground Serpent Gobble Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Serpent Gobble Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Serpent Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Eagle Gobble Skull" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Salt Spirit, C 1 Limed Eagle Gobble Skull",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Grondol Bone" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Salt Spirit, C 1 Limed Grendol Bone",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Carkarass Skull",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Poison Carkarass Skull",
			"result"	=> 9,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Flayed Velnishi Skull",
			"result"	=> 12,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Marfusang Bone",
			"result"	=> 9,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Wrath Rat Bone",
			"result"	=> 4,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Serpent Gobble Bone",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Eagle Gobble Bone",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Serpent Gobble Skull",
			"result"	=> 6,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Toughness Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Grendol Bone",
			"result"	=> 12,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Jade Clacker Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Jade Clacker Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Velnishi Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Flayed Velnishi Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Flayed Velnishi Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Limed Coamti Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Limed Coamti Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Incinerated Arangma Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Incinerated Maulberlord Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Maulberlord Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Incinerated Maulbernaut Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Maulbernaut Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Ground Trepor Warriot Talon" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Ground Trepor Warrior Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Incinerated Tefusang Claw" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Tefusang Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Incinerated Tefusangling Claw" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Nitric Spirit, C 1 Incinerated Tefusangling Claw",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Jade Clacker Talon",
			"result"	=> 3,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Velnishi Talon",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Flayed Velnishi Talon",
			"result"	=> 12,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Limed Coamti Talon",
			"result"	=> 2,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Arangma Talon",
			"result"	=> 1,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Maulberlord Talon",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Maulbernaut Talon",
			"result"	=> 20,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">32",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Ground Trepor Warrior Talon",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Tefusang Claw",
			"result"	=> 7,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Vigor Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Incinerated Tefusangling Claw",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Niter and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "B 2 Niter, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Vitriol Salt" => array (
			"type"		=> "I",
			"ingredient"	=> "Mix of Niter and Vitriol",
			"result"	=> 2,
			"tool"		=> "Athanor",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Salt and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "B 2 Common Salt, B 1 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Vitriol Salt" => array (
			"type"		=> "I",
			"ingredient"	=> "Mix of Salt and Vitriol",
			"result"	=> 2,
			"tool"		=> "Athanor",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Thunder Clacker Tentacle" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Spirit, C 1 Ground Thunder Clacker Tentacle",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Vesper Arangma Feeler" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 2 Ground Vesper Arangma Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Consumer Antenna" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Spirit, C 1 Powdered Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Consumer Pheremone" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Consumer Antenna",
			"result"	=> 1,
			"tool"		=> "Alembic",
			"skill"		=> "Alchemy",
			"level"		=> ">22 <32",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Trepor Wiggly Feeler" => array (
			"type"		=> "I",
			"ingredient"	=> "C 2 Spirit, C 1 Ground Trepor Wiggly Feeler",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Willpower Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Trepor Wiggly Feeler",
			"result"	=> 6,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Willpower Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Consumer Pheremone",
			"result"	=> 10,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Willpower Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Vesper Arangma Feeler",
			"result"	=> 4,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Willpower Essence" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Thunder Clacker Tentacle",
			"result"	=> 5,
			"tool"		=> "Alchemist Stove + Iron Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> ">9 <22",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Zinc Ore and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Zinc Ore, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Zinc Ore Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Zinc Ore and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Mix of Zinc and Vitriol" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Powdered Zinc, B 2 Oil of Vitriol",
			"result"	=> 1,
			"tool"		=> "Alchemist Table",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		),
		"Zinc Solution" => array (
			"type"		=> "I",
			"ingredient"	=> "C 1 Mix of Zinc and Vitriol",
			"result"	=> 2,
			"tool"		=> "Crucible + Glass Stirrer",
			"skill"		=> "Alchemy",
			"level"		=> "<9",
			"book"		=> "Basic Potion Tome"
		)
	);
	$mysqli->query("DROP TABLE IF EXISTS recipes") or die($mysqli->error);
	$q = "CREATE TABLE IF NOT EXISTS recipes (
					name VARCHAR(50) NOT NULL,
					type CHAR NOT NULL,
					ingredient VARCHAR(150) NOT NULL,
					result INTEGER DEFAULT 0,
					tool VARCHAR(50) NOT NULL,
					skill VARCHAR(50) NOT NULL,
					level VARCHAR(10) NOT NULL,
					book VARCHAR(50) NOT NULL,
					PRIMARY KEY (`name`,`book`,`ingredient`)
					)";
	$mysqli->query($q) or die($mysqli->error);

	foreach ($recipes as $name => $vals)
	{
		$q = "INSERT INTO recipes
		VALUES (
			\"$name\",
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
