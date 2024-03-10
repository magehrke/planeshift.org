<?php

    /* ########### CONNECT TO DB ########### */

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path = $path . "/includes/db_connect.php";
    include $path;

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
                    ) ENGINE=MyISAM";

    $mysqli->query($itemtable_sql) or die($mysqli->error);

    $item_category = 'Alchemy Ingredients';
    $items_to_insert = array(
        // verified 2020-10-21
        'Liera Zireti',         'Common Salt',          20,
        'Liera Zireti',         'Conservation Potion',  100,
        'Liera Zireti',         'Fish Glue',            50,
        'Liera Zireti',         'Niter',                20,
        'Liera Zireti',         'Oil of Vitriol',       20,
        'Liera Zireti',         'Spirit',               20,
        'Liera Zireti',         'Stibine',              20,
        'Liera Zireti',         'Sulphur powder',       20,
        'Liera Zireti',         'Tartar',               20,
        // verified 2020-10-21
        'Vladovic Chel-Astra',  'Common Salt',          20,
        'Vladovic Chel-Astra',  'Niter',                20,
        'Vladovic Chel-Astra',  'Oil of Vitriol',       20,
        'Vladovic Chel-Astra',  'Spirit',               20,
        'Vladovic Chel-Astra',  'Stibine',              20,
        'Vladovic Chel-Astra',  'Sulphur powder',       20,
        'Vladovic Chel-Astra',  'Tartar',               20,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Alchemy Preparations';
    $items_to_insert = array(
        // verified 2020-10-21 
        'Allelia Symiestra',    'Minor Potion of Dermorian&apos;s Willpower',   100,
        'Allelia Symiestra',    'Minor Potion of Kran&apos;s Vigor',            100,
        'Allelia Symiestra',    'Minor Potion of Lemur&apos;s Smartness',       100,
        'Allelia Symiestra',    'Minor Potion of Ynnwn&apos;s Toughness',       100,
        // verified 2020-10-21 
        'Belcor Krakko',        'Bronze Soup',          365,
        'Belcor Krakko',        'Smith&apos;s Soup',    325,
        'Belcor Krakko',        'Tin Burger',           65,

        'Grok Idon',            'Potion of Healing',    150,

        'Levrus Dahrenn',       'Potion of Dermorian&apos;s Willpower',         150,
        'Levrus Dahrenn',       'Potion of Healing', 150,
        'Levrus Dahrenn',       'Potion of Lemur&apos;s Smartness',             150,
        'Levrus Dahrenn',       'Potion of Ynnwn&apos;s Toughness',             150,

        // verified 2020-10-21 
        'Liera Zireti',         'Greater Potion of Healing',                    200,
        'Liera Zireti',         'Potion of Mana',                               150,
        // verified 2020-10-21 
        'Sharven Xant-Areth',   'Lesser Potion of Healing',                     100,
        'Sharven Xant-Areth',   'Potion of Fire Element Affinity',              150,
        'Sharven Xant-Areth',   'Potion of Healing',                            150,
        'Sharven Xant-Areth',   'Potion of Restoration',                        150,

        // verified 2020-10-21
        'Toda Ombretis',        'Lesser Potion of Healing',                     100,
        'Toda Ombretis',        'Lesser Potion of Mana',                        100,

        // verified 2020-10-21 
        'Vladovic Chel-Astra',  'Greater Potion of Healing',                    200,
        'Vladovic Chel-Astra',  'Greater Potion of Mana',                       200,
        'Vladovic Chel-Astra',  'Minor Potion of Dermorian&apos;s Willpower',   100,
        'Vladovic Chel-Astra',  'Minor Potion of Lemur&apos;s Smartness',       100,
        'Vladovic Chel-Astra',  'Minor Potion of Ynnwn&apos;s Toughness',       100,
        'Vladovic Chel-Astra',  'Potion of Air Element Affinity',               150,
        'Vladovic Chel-Astra',  'Potion of Azure Sun Affinity',                 150,
        'Vladovic Chel-Astra',  'Potion of Dark Crystal Affinity',              150,
        'Vladovic Chel-Astra',  'Potion of Earth Element Affinity',             150,
        'Vladovic Chel-Astra',  'Potion of Fire Element Affinity',              150,
        'Vladovic Chel-Astra',  'Potion of Healing',                            150,
        'Vladovic Chel-Astra',  'Potion of Kran&apos;s Vigor',                  150,
        'Vladovic Chel-Astra',  'Potion of Lemur&apos;s Smartness',             150,
        'Vladovic Chel-Astra',  'Potion of Mana',                               150,
        'Vladovic Chel-Astra',  'Potion of Water Element Affinity',             150,
        'Vladovic Chel-Astra',  'Potion of Ynnwn&apos;s Toughness',             150,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Armor - Heavy';
    $items_to_insert = array(
        // verified 2020-10-21
        'Taemian Yangnk',       'Plate Mail Arms Armor',    5000,
        'Taemian Yangnk',       'Plate Mail Boots',         4000,
        'Taemian Yangnk',       'Plate Mail Pants',         5000,
        // verified 2020-10-21
        'Toda Ombretis',        'Plate Mail Gloves',        2500,
        // verified 2020-10-21
        'Trasok Starhammer',    'Plate Mail Torso Armor',   6000,
        );

    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Armor - Helms';
    $items_to_insert = array(
        // verified 2020-10-21
        'Boralis Voladrand',    'Mercenary Helm',   500,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Chain Mail Helm',  2000,
        // verified 2020-10-21
        'Taemian Yangnk',       'Plate Mail Helm',  2500,
        );

    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Armor - Light';
    $items_to_insert = array(
        // verified 2020-10-21
        'Boralis Voladrand',    'Leather Arms Armor',   320,
        'Boralis Voladrand',    'Leather Boots',        340,
        'Boralis Voladrand',    'Leather Gloves',       300,
        'Boralis Voladrand',    'Leather Pants',        360,
        'Boralis Voladrand',    'Leather Torso Armor',  380,
        // verified 2020-10-21
        'Toda Ombretis',        'Leather Arms Armor',   320,
        'Toda Ombretis',        'Leather Boots',        340,
        'Toda Ombretis',        'Leather Gloves',       300,
        'Toda Ombretis',        'Leather Pants',        360,
        'Toda Ombretis',        'Leather Torso Armor',  380,
        );

    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Armor - Medium';
    $items_to_insert = array(
        // verified 2020-10-21
        'Kethzun Guthazik',     'Chain Mail Arms Armor',    2880,
        'Kethzun Guthazik',     'Chain Mail Boots',         2160,
        'Kethzun Guthazik',     'Chain Mail Gloves',        1440,
        'Kethzun Guthazik',     'Chain Mail Pants',         2880,
        'Kethzun Guthazik',     'Chain Mail Torso Armor',   3600,
        // verified 2020-10-21
        'Trasok Starhammer',    'Chain Mail Arms Armor',    2880,
        'Trasok Starhammer',    'Chain Mail Boots',         2160,
        'Trasok Starhammer',    'Chain Mail Gloves',        1440,
        'Trasok Starhammer',    'Chain Mail Pants',         2880,
        'Trasok Starhammer',    'Chain Mail Torso Armor',   3600,
        // verified 2020-10-21
        'Veja Pontor',          'Chain Mail Pants',         2880,
        );

    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Armor Parts';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',    'Bronze Scale Mail Cloth',  100,
        'Harnquist',    'Large Mail Cloth',         100,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Beverages';
    $items_to_insert = array(
        // verified 2020-10-21
        'Allelia Symiestra',        'Beer Mug',             10,
        'Allelia Symiestra',        'Joopiner Wine Bottle', 200,
        'Allelia Symiestra',        'Joopiner Wine Goblet', 50,
        'Allelia Symiestra',        'Pale Ale Mug',         11,
        'Allelia Symiestra',        'Red Liquor Mug',       60,
        'Allelia Symiestra',        'Terevan Wine Bottle',  220,
        'Allelia Symiestra',        'Terevan Wine Goblet',  55,

        // verified 2020-10-21
        'Brado',                'Beer Mug',             10,
        'Brado',                'Cider Mug',            10,
        'Brado',                'Red Liquor Mug',       60,
        'Brado',                'Terevan Wine Bottle',  220,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Creative - Books';
    $items_to_insert = array(
        // verified 2020-10-21
        'Jayose',   'Blank Book',                   50,
        'Jayose',   'Blank Book - Black',           50,
        'Jayose',   'Blank Book - Blue',            50,
        'Jayose',   'Blank Book - Green',           50,
        'Jayose',   'Blank Book - Red',             50,
        'Jayose',   'Blank Public Book',            50,
        'Jayose',   'Blank Public Book - Black',    50,
        'Jayose',   'Blank Public Book - Blue',     50,
        'Jayose',   'Blank Public Book - Green',    50,
        'Jayose',   'Blank Public Book - Red',      50,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Creative - Maps';
    $items_to_insert = array(
        // verified 2020-10-21
        'Jayose',   'Generic Map',          70,
        'Jayose',   'Generic Public Map',   70,
        'Jayose',   'Hydlaa East Map',      30,
        'Jayose',   'Hydlaa Main Map',      30,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Creative - Music';
    $items_to_insert = array(
        // verified 2020-10-21
        'Jayose',       'Generic Music Score',          70,
        'Jayose',       'Generic Public  Music Score',  70,
        // verified 2020-10-21
        'Dhalia Colat', 'Basic Drum Score',             150,
        'Dhalia Colat', 'Basic Lira Score',             550,
        // verified 2020-10-21
        'Telzanna Zarel','Basic Drum Score',            150,
        'Telzanna Zarel','Basic Tamborine Score',       150,
        // verified 2020-10-21
        'Tyrus Beaut',  'Basic Lute Score',             550,
        'Tyrus Beaut',  'Basic Pan Flute Score',        550,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Containers';
    $items_to_insert = array(
        // verified 2020-10-21
        'Boralis Voladrand',    'Large Wood Barrel',        500,
        // verified 2020-10-21
        'Brintec Dev-Onni',     'Cloth Sack',               90,
        // verfied 2020-10-21
        'Celila Yasoj',         'Gift Box Purple',          129,
        // verfied 2020-10-21
        'Kaiman Jilatt',        'Gift Box Green',           129,
        'Kaiman Jilatt',        'Picnic basket',            100,
        'Kaiman Jilatt',        'Sack',                     80,
        'Kaiman Jilatt',        'Small Cloth Sack',         50,
        'Kaiman Jilatt',        'Wooden Crate',             300,
        // verfied 2020-10-21
        'Jeyarp Grotemey',      'Large Cloth Sack',         100,
        // verified 2020-10-21
        'Jirosh Mikana',        'Glyph Sack',               50,
        'Jirosh Mikana',        'Wooden Crate',             300,

        'Levrus Dahrenn',       'Glyph Sack',               50,

        'Lentanor Thunderhead', 'Jewelry Box',              750,

        // verified 2020-10-21
        'Njormik Carpenter',    'Closed Wood Barrel',       200,
        'Njormik Carpenter',    'Empty Dark Wood Barrel',   200,
        'Njormik Carpenter',    'Large Chest',              250,

        'Phanejor Mikana',      'Wooden Crate',             300,

        // verified 2020-10-21
        'Telzanna Zarel',       'Gift Box Red',             129,
        // verified 2020-10-21
        'Toda Ombretis',        'Sack',                     80,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Food Ingredients';
    $items_to_insert = array(
        // verified 2020-10-21
        'Allelia Symiestra',    'Apple',                5,
        'Allelia Symiestra',    'Water Pouch',          5,
        // verified 2020-10-21
        'Aleena Arlavin',       'Honey',                25,
        // verified 2020-10-21
        'Archilaya Gurpleferd', 'Apple',                5,
        'Archilaya Gurpleferd', 'Bag of Salt',          30,
        'Archilaya Gurpleferd', 'Flour',                25,
        'Archilaya Gurpleferd', 'Milk',                 20,
        'Archilaya Gurpleferd', 'Sack of Powdered Bread Rise',  50,
        'Archilaya Gurpleferd', 'Sack of Strimptor',    25,
        'Archilaya Gurpleferd', 'Water Filled Bucket',  10,
        'Archilaya Gurpleferd', 'Water Pouch',          5,
        // verified 2020-10-21
        'Brado',                'Irifon Rice',          5,
        'Brado',                'Water Pouch',          5,

        // verified 2020-10-21
        'Burdess Quirain',      'Carp Fish',            70,
        'Burdess Quirain',      'Trout',                80,
        'Burdess Quirain',      'Water Filled Bucket',  10,
        // verified 2020-10-21
        'Jarda Ynarow',         'Apple',                5,
        'Jarda Ynarow',         'Water Pouch',          5,

        'Jashoky Dakarn',       'Cheese',               25,
        'Jashoky Dakarn',       'Egg',                  5,
        'Jashoky Dakarn',       'Milk',                 20,
        // verified 2020-10-21
        'Jirosh Mikana',        'Bag of Salt',                  30,
        'Jirosh Mikana',        'Flour',                        25,
        'Jirosh Mikana',        'Honey',                        25,
        'Jirosh Mikana',        'Sack of Banuts',               50,
        'Jirosh Mikana',        'Sack of Burr Nuts',            50,
        'Jirosh Mikana',        'Sack of Far Ground Rye',       25,
        'Jirosh Mikana',        'Sack of Jookans',              50,
        'Jirosh Mikana',        'Sack of Powdered Bread Rise',  50,
        'Jirosh Mikana',        'Sack of Red Wheat',            25,
        'Jirosh Mikana',        'Sack of Strimptor',            25,
        'Jirosh Mikana',        'Water Filled Bucket',          10,
        // verified 2020-10-21
        'Jomed Parcen',         'Apple',                5,
        'Jomed Parcen',         'Bag of Salt',          30,
        'Jomed Parcen',         'Bamboo Rice',          5,
        'Jomed Parcen',         'Cooked Carrot',        5,
        'Jomed Parcen',         'Jomed&apos;s Seasoning',       50,
        'Jomed Parcen',         'Meat',                 5,
        'Jomed Parcen',         'Seared Trout',         5,
        'Jomed Parcen',         'Water Filled Bucket',  10,
        'Jomed Parcen',         'Water Pouch',          5,
        // verified 2020-10-21
        'Kzavu Gilnet',         'Carp Fish',                    70,
        'Kzavu Gilnet',         'Trout',                        80,
        // verified 2020-10-21
        'Leann Grudaire',       'Sack of Barley',               25,
        'Leann Grudaire',       'Sack of Powdered Bread Rise',  50,
        'Leann Grudaire',       'Sack of Strimptor',            25,
        'Leann Grudaire',       'Water Filled Bucket',          10,
        // verified 2020-10-21
        'Orchibaly Gurpleferd', 'Sack of Powdered Bread Rise',  50,
        'Orchibaly Gurpleferd', 'Water Pouch',          5,
        // verified 2020-10-21
        'Reffitia Thamal',      'Apple',                5,
        'Reffitia Thamal',      'Boiled Kartoffel',     5,
        'Reffitia Thamal',      'Grilled Meat',         5,
        'Reffitia Thamal',      'Meat',                 5,
        'Reffitia Thamal',      'Water Filled Bucket',  10,


        'Shenji TorKaal',       'Beer Mug',             40,
        'Shenji TorKaal',       'Cider Mug',            50,
        'Shenji TorKaal',       'Red Liquor Mug',       60,
        'Shenji TorKaal',       'Water Pouch',          5,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Food Preparations';
    $items_to_insert = array(
        // verified 2020-10-21
        'Allelia Symiestra',    'Bread',                50,
        'Allelia Symiestra',    'Clacker Gruel',        28,
        'Allelia Symiestra',    'Hearty Bamboo Rice',   100,
        'Allelia Symiestra',    'Pie',                  100,
        'Allelia Symiestra',    'Pot Roast',            100,
        'Allelia Symiestra',    'Scrambled Eggs',       25,
        // verified 2020-10-21
        'Archilaya Gurpleferd', 'Bread',                50,
        'Archilaya Gurpleferd', 'Pie',                  100,
        // verified 2020-10-21
        'Brado',                'Kikiri Soup',          100,
        'Brado',                'Pan-Fried Carp',       200,
        'Brado',                'Pan-Fried Trout',      200,
        'Brado',                'Scrambled Eggs',       25,

        'Grok Idon',            'Fire Fruit',           20,
        'Grok Idon',            'Ground Cinnamon',      50,
        'Grok Idon',            'Ground Jarana Root',   50,
        'Grok Idon',            'Jar of Corium Seed',   100,
        'Grok Idon',            'Jar of Sweetburst',    100,
        'Grok Idon',            'Pungent Tuber',        5,

        // verified 2020-10-21
        'Jarda Ynarow',         'Bread',                50,
        'Jarda Ynarow',         'Pie',                  100,

        // verified 2020-10-21
        'Jomed Parcen',         'Applesauce',           7,

        'Jashoky Dakarn',       'Bogo Pepper',          5,
        'Jashoky Dakarn',       'Carrot',               5,
        'Jashoky Dakarn',       'Flour',                25,
        'Jashoky Dakarn',       'Kartoffel',            5,
        'Jashoky Dakarn',       'Lump of Butter',       125,
        'Jashoky Dakarn',       'Macca',                5,

        // verified 2020-10-21
        'Orchibaly Gurpleferd', 'Bread',                50,
        'Orchibaly Gurpleferd', 'Pie',                  100,
        // verified 2020-10-21
        'Reffitia Thamal',      'Scrambled Eggs',       25,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Furnishings';
    $items_to_insert = array(
        // verified 2020-10-21
        'Boralis Voladrand',    'Large Metal Vase',             40,
        'Boralis Voladrand',    'Small Metal Vase',             30,
        // verified 2020-10-21
        'Brintec Dev-Onni',     'Ojaveda Blue Carpet',          500,
        'Brintec Dev-Onni',     'Ojaveda Blue Carpet Roll',     500,
        'Brintec Dev-Onni',     'Ojaveda Blue Pillow',          100,
        'Brintec Dev-Onni',     'Ojaveda Bluedust Carpet',      500,
        'Brintec Dev-Onni',     'Ojaveda Bluedust Carpet Roll', 500,
        'Brintec Dev-Onni',     'Ojaveda Bluedust Pillow',      100,
        'Brintec Dev-Onni',     'Ojaveda Brown Carpet',         500,
        'Brintec Dev-Onni',     'Ojaveda Brown Carpet Roll',    500,
        'Brintec Dev-Onni',     'Ojaveda Brown Pillow',         100,
        'Brintec Dev-Onni',     'Ojaveda Green Carpet',         500,
        'Brintec Dev-Onni',     'Ojaveda Green Carpet Roll',    500,
        'Brintec Dev-Onni',     'Ojaveda Green Pillow',         100,
        'Brintec Dev-Onni',     'Ojaveda Purple Carpet',        500,
        'Brintec Dev-Onni',     'Ojaveda Purple Carpet Roll',   500,
        'Brintec Dev-Onni',     'Ojaveda Purple Pillow',        100,
        'Brintec Dev-Onni',     'Ojaveda Stripes Carpet',       500,
        'Brintec Dev-Onni',     'Ojaveda Stripes Carpet Roll',  500,
        'Brintec Dev-Onni',     'Ojaveda Stripes Pillow',       100,
        'Brintec Dev-Onni',     'Towel',                        50,
        // verfied 2020-10-21
        'Jeyarp Grotemey',      'Brown Animal Carpet',          50,
        // verfied 2020-10-21
        'Jirosh Mikana',        'Bamboo Shelves',               170,
        'Jirosh Mikana',        'Bamboo Table',                 160,
        // verfied 2020-10-21
        'Kaiman Jilatt',        'Potted Plant',                 50,

        'Lentanor Thunderhead', 'Bookstand',                    175,
        'Lentanor Thunderhead', 'Dark Wood Shelves',            200,
        'Lentanor Thunderhead', 'Medium Bed',                   170,
        'Lentanor Thunderhead', 'Simple Bed',                   150,
        'Lentanor Thunderhead', 'Small Chair',                  200,
        'Lentanor Thunderhead', 'Small Table',                  150,
        'Lentanor Thunderhead', 'Two Doors Closet',             220,
        'Lentanor Thunderhead', 'Wood Shelves',                 200,

        // verified 2020-10-21
        'Saria Dunwallow',      'Hair Brush',                   13,

        // verified 2020-10-21
        'Njormik Carpenter',    'Stool',                        130,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Glyphs';

    $items_to_insert = array(
        // verified 2020-10-21
        'Levrus Dahrenn',   'Air',      1000,
        'Levrus Dahrenn',   'Armor',    1000,
        'Levrus Dahrenn',   'Arrow',    1000,
        'Levrus Dahrenn',   'Cold',     1000,
        'Levrus Dahrenn',   'Death',    1000,
        'Levrus Dahrenn',   'Fire',     1000,

        // verified 2020-10-21
        'Orphia Eldri',     'Air',      1000,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Helm Parts';
    $items_to_insert = array(
        // verified 2020-10-21
        'Boralis Voladrand',    'Leather Cheekplate',   50,
        'Boralis Voladrand',    'Leather Ridge',        50,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Herbal Ingredients';
    $items_to_insert = array(
        // verified 2020-10-21
        'Aleena Arlavin',   'Cloth for Poultice',   10,
        'Aleena Arlavin',   'Wragberry Oil',        5,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Herbal Preparations';
    $items_to_insert = array(
        // verified 2020-10-21
        'Aleena Arlavin',   'Barberry Syrup',   100,
        'Aleena Arlavin',   'Blue Cohosh Tea',  100,
        'Aleena Arlavin',   'Hop Tea',          100,
        'Aleena Arlavin',   'Juiceberry Juice', 100,
        'Aleena Arlavin',   'Lavender Tea',     100,
        'Aleena Arlavin',   'Orilliphia Tea',   100,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Items';
    $items_to_insert = array(

        'Grok Idon',            'Campfire',     300,

        // verified 2020-10-21
        'Ellioran Foein',       'Candle',       75,

        // verified 2020-10-21
        'Jirosh Mikana',        'Campfire',     300,
        'Jirosh Mikana',        'Fork',         5,
        'Jirosh Mikana',        'Mug',          50,
        'Jirosh Mikana',        'Plate',        5,
        'Jirosh Mikana',        'Small Plate',  5,
        'Jirosh Mikana',        'Spoon',        5,

        // verfied 2020-10-21
        'Kaiman Jilatt',        'Fork',         5,
        'Kaiman Jilatt',        'Plate',        5,
        'Kaiman Jilatt',        'Small Plate',  5,
        'Kaiman Jilatt',        'Spoon',        5,
        // verified 2020-10-21
        'Toda Ombretis',        'Torch',        100,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Plant Parts';
    $items_to_insert = array(
        'Grok Idon',    'Bunch of Joopiner Berries',    60,
        'Grok Idon',    'Bunch of Terevan Berries',     60,
        'Grok Idon',    'Bunch of Trefoil',             50,
        'Grok Idon',    'Tinga Leaves',                 5,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Shield Parts';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Round Wicker Shield Core', 150,
        'Gardr Keck',           'Round Wooden Shield Core', 150,
        'Gardr Keck',           'Small Wicker Shield Core', 100,
        'Gardr Keck',           'Small Wooden Shield Core', 100,
        'Gardr Keck',           'Wicker Shield Core',       200,
        'Gardr Keck',           'Wooden Shield Core',       200,
        // verified 2020-10-21
        'Harnquist',            'Leather Shield Handle',    50,
        'Harnquist',            'Small Wooden Shield Core', 100,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Round Wicker Shield Core', 150,
        'Kethzun Guthazik',     'Round Wooden Shield Core', 150,
        'Kethzun Guthazik',     'Small Wicker Shield Core', 100,
        'Kethzun Guthazik',     'Small Wooden Shield Core', 100,
        'Kethzun Guthazik',     'Wicker Shield Core',       200,
        'Kethzun Guthazik',     'Wooden Shield Core',       200,
        // verified 2020-10-21
        'Trasok Starhammer',    'Leather Shield Handle',    50,
        'Trasok Starhammer',    'Round Wicker Shield Core', 150,
        'Trasok Starhammer',    'Round Wooden Shield Core', 150,
        'Trasok Starhammer',    'Small Wicker Shield Core', 100,
        'Trasok Starhammer',    'Small Wooden Shield Core', 100,
        'Trasok Starhammer',    'Wooden Shield Core',       200,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Shields';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',            'Bronze Buckler',           600,
        'Harnquist',            'Small Spiked Iron Shield', 1650,
        'Harnquist',            'Three Rivet Shield',       2750,
        // verified 2020-10-21
        'Gardr Keck',           'Banded Shield',            2000,
        'Gardr Keck',           'Round Shield',             1300,
        'Gardr Keck',           'Shadow Shield',            3200,
        // verified 2020-10-21
        'Taemian Yangnk',       'Five-Spiked Shield',       2600,
        'Taemian Yangnk',       'Reinforced Wooden Shield', 700,
        // verified 2020-10-21
        'Trasok Starhammer',    'Bronze Shield',            1900,
        'Trasok Starhammer',    'Small Round Bronze Shield',800,
        'Trasok Starhammer',    'Wooden and Metal Shield',  1182,
        // verified 2020-10-21
        'Veja Pontor',          'Shield',                   1450,
        'Veja Pontor',          'Spiked Shield',            1800,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Structures';
    $items_to_insert = array(
        // verified 2020-10-21
        'Njormik Carpenter',    'Kiosk',    1800,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Alchemy';
    $items_to_insert = array(
        // verified 2020-10-21 
        'Belcor Krakko',        'Glass Stirrer',    400,
        'Belcor Krakko',        'Wooden Mallet',    100,
        'Belcor Krakko',        'Wooden Stirrer',   150,

        'Levrus Dahrenn',       'Glass Stirrer',    400,
        'Levrus Dahrenn',       'Iron Stirrer',     250,
        'Levrus Dahrenn',       'Wooden Mallet',    100,
        'Levrus Dahrenn',       'Wooden Stirrer',   150,

        // verified 2020-10-21 
        'Liera Zireti',         'Glass Stirrer',    400,
        'Liera Zireti',         'Iron Stirrer',     250,
        'Liera Zireti',         'Wooden Mallet',    100,
        'Liera Zireti',         'Wooden Stirrer',   150,
        // verified 2020-10-21 
        'Vladovic Chel-Astra',  'Glass Stirrer',    400,
        'Vladovic Chel-Astra',  'Iron Stirrer',     250,
        'Vladovic Chel-Astra',  'Wooden Mallet',    100,
        'Vladovic Chel-Astra',  'Wooden Stirrer',   150,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Artist';
    $items_to_insert = array(
        // verified 2020-10-21
        'Dhalia Colat',     'Drum', 1000,
        'Dhalia Colat',     'Lira', 1000,
        // verified 2020-10-21
        'Tyrus Beaut',      'Lute', 1000,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Farming';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',       'Wood Chisel',  100,
        // verified 2020-10-21
        'Harnquist',        'Axe',          80,
        'Harnquist',        'Sickle',       70,
        'Harnquist',        'Wood Chisel',  100,
        'Harnquist',        'Wood Saw',     60,
        // verified 2020-10-21
        'Jjousk Carryt',    'Wood Chisel',  100,
        'Jjousk Carryt',    'Wood Saw',     60,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Fishing';
    $items_to_insert = array(
        // verified 2020-10-21
        'Burdess Quirain',  'Fishing Rod & Reel', 205,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Kitchen';
    $items_to_insert = array(
        // verified 2020-10-21
        'Archilaya Gurpleferd', 'Circle Cutter',    50,
        'Archilaya Gurpleferd', 'Kitchen Knife',    50,
        'Archilaya Gurpleferd', 'Mixer',            50,
        'Archilaya Gurpleferd', 'Rolling Pin',      50,
        'Archilaya Gurpleferd', 'Scoop',            50,
        'Archilaya Gurpleferd', 'Spreader',         50,
        // verified 2020-10-21
        'Jirosh Mikana',        'Kitchen Knife',    50,
        'Jirosh Mikana',        'Masher',           50,
        'Jirosh Mikana',        'Spreader',         50,
        'Jirosh Mikana',        'Strainer',         200,
        // verified 2020-10-21
        'Jomed Parcen',         'Circle Cutter',    50,
        'Jomed Parcen',         'Kitchen Knife',    50,
        'Jomed Parcen',         'Masher',           50,
        'Jomed Parcen',         'Scoop',            50,
        'Jomed Parcen',         'Strainer',         200,
        // verified 2020-10-21
        'Trasok Starhammer',    'Circle Cutter',    50,
        // verified 2020-10-21
        'Toda Ombretis',        'Mixer',            50,
        'Toda Ombretis',        'Rolling Pin',      50,
        'Toda Ombretis',        'Scoop',            50,
        'Toda Ombretis',        'Wooden Spoon',     50,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Leatherworking';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gayla Grotemey',   'Copper Needle and Thread', 50,
        'Gayla Grotemey',   'Hide Scarper',             300,
        'Gayla Grotemey',   'Leather Cutter',           100,
        'Gayla Grotemey',   'Tanning Crystal Acid',     10,
        // verified 2020-10-21
        'Hirenn Darmeth',   'Copper Needle and Thread', 50,
        'Hirenn Darmeth',   'Hide Scarper',             300,
        'Hirenn Darmeth',   'Leather Cutter',           100,
        'Hirenn Darmeth',   'Tanning Crystal Acid',     10,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Mining';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',       'Rock Pick', 150,
        // verified 2020-10-21
        'Harnquist',        'Rock Pick', 150,
        // verified 2020-10-21
        'Kethzun Guthazik', 'Rock Pick', 150,
        // verified 2020-10-21
        'Toda Ombretis',    'Rock Pick', 150,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Tools - Smith';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Armors Repair Kit',    40,
        'Gardr Keck',           'Weapons Repair Kit',   40,
        // verified 2020-10-21
        'Harnquist',            'Armors Repair Kit',    40,
        'Harnquist',            'Cutters',              150,
        'Harnquist',            'Hammer',               150,
        'Harnquist',            'Mandrel',              500,
        'Harnquist',            'Weapons Repair Kit',   40,
        'Harnquist',            'Wire Mold',            500,
        'Harnquist',            'Wood PLane',           50,
        // verified 2020-10-21
        'Jjousk Carryt',        'Arrow-Head Mold',      50,
        'Jjousk Carryt',        'Mandrel',              500,
        'Jjousk Carryt',        'Wood Plane',           50,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Armors Repair Kit',    40,
        'Kethzun Guthazik',     'Cutters',              150,
        'Kethzun Guthazik',     'Hammer',               150,
        'Kethzun Guthazik',     'Mandrel',              500,
        'Kethzun Guthazik',     'Weapons Repair Kit',   40,
        'Kethzun Guthazik',     'Wire Mold',            500,
        // verified 2020-10-21
        'Taemian Yangnk',       'Weapons Repair Kit',   40,
        // verified 2020-10-21
        'Trasok Starhammer',    'Armors Repair Kit',    40,
        'Trasok Starhammer',    'Cutters',              150,
        'Trasok Starhammer',    'Mandrel',              500,
        'Trasok Starhammer',    'Pliers',               500,
        'Trasok Starhammer',    'Polishing Brush',      150,
        'Trasok Starhammer',    'Ring Mold',            300,
        'Trasok Starhammer',    'Weapons Repair Kit',   40,
        'Trasok Starhammer',    'Wire Mold',            500,
        // verified 2020-10-21
        'Veja Pontor',          'Armors Repair Kit',    40,
        'Veja Pontor',          'Arrow-head Mold',      50,
        'Veja Pontor',          'Furrower',             150,
        'Veja Pontor',          'Weapons Repair Kit',   40,
        'Veja Pontor',          'Wood Plane',           40,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapon Parts';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Mace Battle Handle',       30,
        'Gardr Keck',           'Mace War Handle',          50,
        'Gardr Keck',           'Small Wooden Axe Handle',  30,
        'Gardr Keck',           'Wooden Axe Handle',        50,
        // verified 2020-10-21
        'Harnquist',            'Leather Knife Handle',     10,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Mace Battle Handle',       30,
        'Kethzun Guthazik',     'Mace War Handle',          50,
        'Kethzun Guthazik',     'Small Wooden Axe Handle',  30,
        'Kethzun Guthazik',     'Wooden Axe Handle',        50,
        // verified 2020-10-21
        'Trasok Starhammer',    'Leather Knife Handle',     10,
        'Trasok Starhammer',    'Mace Battle Handle',       30,
        'Trasok Starhammer',    'Mace War Handle',          50,
        'Trasok Starhammer',    'Small Wooden Axe Handle',  30,
        'Trasok Starhammer',    'Wooden Axe Handle',        50,
        // verified 2020-10-21
        'Veja Pontor',          'Small Wooden Axe Handle',  30,
        'Veja Pontor',          'Wooden Axe Handle',        50,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Axe';
    $items_to_insert = array(
        // verified 2020-10-21
        'Taemian Yangnk',       'Reinforced Battle Axe',    4800,
        // verified 2020-10-21
        'Trasok Starhammer',    'Reinforced Axe',           3600,
        'Trasok Starhammer',    'Small Battle Axe',         11200,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Broadsword';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',   'Broadsword', 4300,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Club';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',        'Club',         750,
        'Harnquist',        'Mace',         1000,
        // verified 2020-10-21
        'Gardr Keck',       'Mace',         1000,
        'Gardr Keck',       'Morning Star', 1200,
        'Gardr Keck',       'War Club',     800,
        // verified 2020-10-21
        'Taemian Yangnk',   'War Club',     800,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Dagger';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',            'Dagger', 900,
        // verified 2020-10-21
        'Ibhaar Senad',         'Dagger', 900,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Dagger', 900,
        // verified 2020-10-21
        'Trasok Starhammer',    'Dagger', 900,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Falchion';
    $items_to_insert = array(
        // verified 2020-10-21
        'Trasok Starhammer',    'Falchion', 2600,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Hammer';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Battle Hammer',    2100,
        // verified 2020-10-21
        'Taemian Yangnk',       'Warhammer',        3250,
        // verified 2020-10-21
        'Trasok Starhammer',    'Warhammer',        3250,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Knife';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',       'Knife', 600,
        // verified 2020-10-21
        'Kethzun Guthazik', 'Knife', 600,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Longsword';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',            'Longsword', 3750,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Longsword', 3750,
        // verified 2020-10-21
        'Trasok Starhammer',    'Longsword', 3750,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Pole';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Quarterstaff', 900,
        // verified 2020-10-21
        'Jardet Forsill',       'Quarterstaff', 900,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Quarterstaff', 900,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Ranged';
    $items_to_insert = array(
        // verified 2020-10-21
        'Gardr Keck',           'Iron Arrow',               1,
        // verified 2020-10-21
        'Harnquist',            'Dermorian Hunting Bow',    250,
        'Harnquist',            'Enkidukai Hunting Bow',    750,
        'Harnquist',            'Iron Arrow',               1,
        'Harnquist',            'Ynnwn Hunting Bow',        1500,
        // verified 2020-10-21
        'Jjousk Carryt',        'Bolt',                     5,
        'Jjousk Carryt',        'Dermorian Hunting Bow',    250,
        'Jjousk Carryt',        'Enkidukai Hunting Bow',    750,
        'Jjousk Carryt',        'Iron Arrow',               1,
        'Jjousk Carryt',        'Ynnwn Hunting Bow',        1500,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Dermorian Hunting Bow',    250,
        'Kethzun Guthazik',     'Enkidukai Hunting Bow',    750,
        'Kethzun Guthazik',     'Iron Arrow',               1,
        'Kethzun Guthazik',     'Ynnwn Hunting  Bow',       1500,
        // verified 2020-10-21
        'Taemian Yangnk',       'Dermorian Longbow',        300,
        'Taemian Yangnk',       'Enkidukai Longbow',        800,
        'Taemian Yangnk',       'Iron Arrow',               1,
        'Taemian Yangnk',       'Ynnwn Longbow',            3200,
        // verified 2020-10-21
        'Trasok Starhammer',    'Bolt',                     5,
        'Trasok Starhammer',    'Dermorian Shortbow',       250,
        'Trasok Starhammer',    'Enkidukai Shortbow',       600,
        'Trasok Starhammer',    'Iron Arrow',               1,
        'Trasok Starhammer',    'Ynnwn Shortbow',           1000,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Sabre';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',        'Sabre', 1300,
        // verified 2020-10-21
        'Kethzun Guthazik', 'Sabre', 1300,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }

    $item_category = 'Weapons - Shortsword';
    $items_to_insert = array(
        // verified 2020-10-21
        'Harnquist',            'Shortsword',               2300,
        // verified 2020-10-21
        'Kethzun Guthazik',     'Shortsword',               2300,
        // verified 2020-10-21
        'Taemian Yangnk',       'Reinforced Shortsword',    2500,
        // verified 2020-10-21
        'Trasok Starhammer',    'Shortsword',               2300,
        );
    for($i = 0; $i < count($items_to_insert); $i += 3) {
        $items_query = "INSERT INTO items (npc, category, name, price, checkup)
                        VALUES ('" . $items_to_insert[$i] . "',"
                        . "'" . $item_category . "',"
                        . "'" . $items_to_insert[$i+1] . "',"
                        . "'" . $items_to_insert[$i+2] . "',"
                        . "'none')";
        $mysqli->query($items_query) or die($mysqli->error);
    }


    /* ########################################################################################## */


    /* close connection */
    $mysqli->close();
