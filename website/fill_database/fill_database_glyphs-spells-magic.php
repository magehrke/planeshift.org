<?php

  /* ########### CONNECT TO DB ########### */

  $path = $_SERVER['DOCUMENT_ROOT'];
  $path = $path . "/includes/db_connect.php";
  include_once $path;

  /* ########### ADD GLYPHS ########### */

  /* Adding all the glyphs that exist in game */

  /* Create Glyphs Table */
  $mysqli->query("DROP TABLE IF EXISTS `glyphs`") or die(mysql_error());
  $createGlyphs = "CREATE TABLE IF NOT EXISTS `glyphs` (
    name varchar(20) NOT NULL,
    way varchar(20) NOT NULL,
    PRIMARY KEY (name)
    ) ENGINE = MyISAM";
  $mysqli ->query($createGlyphs) or die ($mysqli->error);

  /* Glyphs Data */
  $glyphs_to_insert = array(
    'Air', 'Azure Way',
    'Bird', 'Azure Way',
    'Bond', 'Azure Way',
    'Bow', 'Azure Way',
    'Dome', 'Azure Way',
    'Fly', 'Azure Way',
    'Gas', 'Azure Way',
    'Humanoid', 'Azure Way',
    'Mind', 'Azure Way',
    'Sleep', 'Azure Way',
    'Sound', 'Azure Way',
    'Wind', 'Azure Way',

    'Cold', 'Blue Way',
    'Divination', 'Blue Way',
    'Key', 'Blue Way',
    'Net', 'Blue Way',
    'Object', 'Blue Way',
    'Poison', 'Blue Way',
    'Polymorph', 'Blue Way',
    'Purify', 'Blue Way',
    'Rain', 'Blue Way',
    'Reduction', 'Blue Way',
    'Reflection', 'Blue Way',
    'Sphere', 'Blue Way',
    'Water', 'Blue Way',

    'Animal', 'Brown Way',
    'Armor', 'Brown Way',
    'Creature', 'Brown Way',
    'Earth', 'Brown Way',
    'Flail', 'Brown Way',
    'Rock', 'Brown Way',
    'Summon', 'Brown Way',
    'Tree', 'Brown Way',
    'Wall', 'Brown Way',
    'Weight', 'Brown Way',

    'Arrow', 'Crystal Way',
    'Crystal', 'Crystal Way',
    'Door', 'Crystal Way',
    'Energy', 'Crystal Way',
    'Faith', 'Crystal Way',
    'Life', 'Crystal Way',
    'Light', 'Crystal Way',
    'Sight', 'Crystal Way',

    'Blindness', 'Dark Way',
    'Daemon', 'Dark Way',
    'Darkness', 'Dark Way',
    'Death', 'Dark Way',
    'Entropy', 'Dark Way',
    'Fear', 'Dark Way',
    'Illness', 'Dark Way',
    'Negate', 'Dark Way',
    'Shadow', 'Dark Way',
    'Weakness', 'Dark Way',

    'Chaos', 'Red Way',
    'Enlarge', 'Red Way',
    'Fire', 'Red Way',
    'Hand', 'Red Way',
    'Lava', 'Red Way',
    'Lightning', 'Red Way',
    'Meteor', 'Red Way',
    'Might', 'Red Way',
    'Vortex', 'Red Way',
    'Weapon', 'Red Way'
  );

  /* Insert glyphs data */
  for($i = 0; $i < count($glyphs_to_insert); $i += 2) {
    $glyphs_query = "INSERT INTO glyphs (name, way)
            VALUES ('" . $glyphs_to_insert[$i] . "', '" . $glyphs_to_insert[$i+1] . "')";
    $mysqli->query($glyphs_query) or die($mysqli->error);
  }

  /* ######################################################################## */

  /*
   * Add here, which npc gives the glpyh
   */


  /* Create Glyph-NPC Table */

  $mysqli->query("DROP TABLE IF EXISTS `glyphNpc`") or die(mysql_error());

  $createGlyphNpc = "CREATE TABLE IF NOT EXISTS `glyphNpc` (
    glyph varchar(20) NOT NULL,
    npc varchar(20) NOT NULL,
    PRIMARY KEY (glyph, npc),
    FOREIGN KEY (glyph) REFERENCES glyphs(name) ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE = MyISAM";

  $mysqli ->query($createGlyphNpc) or die ($mysqli->error);

  /* Glyph-NPC Data */
  $glyphNpc_to_insert = array(
    'Air', 'Pilfer',
    'Animal', 'given by GM',
    'Armor', 'Levrus Dahrenn',
    'Blindness', 'Allelia Symiestra',
    'Bird', 'given by GM',
    'Bond', 'Axomir',
    'Bond', 'Easamau',
    'Bow', 'Axomir',
    'Bow', 'Jarda Ynarow',
    'Chaos', 'Ferryd Shillor',
    'Chaos', 'Tarmeen Alecheech',
    'Creature', 'Gurgus Dahnik',
    'Creature', 'Lorytia Starhammer',
    'Crystal', 'Ondren Torr',
    'Crystal', 'Raul Ursino',
    'Daemon', 'Dark Wanderer',
    'Daemon', 'Rulayne Ogrin',
    'Darkness', 'Trasok Starhammer',
    'Darkness', 'Polyuntri Stevald',
    'Darkness', 'Musanulos Terfanis',
    'Death', 'Levrus Dahrenn',
    'Divination', 'Levrus Dahrenn',
    'Dome', 'Axomir',
    'Dome', 'Datal Allavium',
    'Door', 'Baboraer Airiskel',
    'Door', 'Tarmeen Alecheech',
    'Earth', 'Kaiman Jilatt',
    'Earth', 'Ferryd Shillor',
    'Enlarge', 'not in game yet',
    'Entropy', 'Rulayne Ogrin',
    'Entropy', 'Ukabnu',
    'Faith', 'Tarmeen Alecheech',
    'Faith', 'Lerok Dilechi',
    'Fear', 'Edrich Sultov',
    'Fear', 'Gorbiak',
    'Flail', 'given by GM',
    'Fly', 'given by GM',
    'Fire', 'Mirra Houphen',
    'Gas', 'Hygrnn',
    'Gas', 'Menita',
    'Hand', 'Ferryd Shillor',
    'Hand', 'Menlil Toresun',
    'Humanoid', 'Evelyn',
    'Humanoid', 'Zhaomal Shehan',
    'Illness', 'Oriven Thamel',
    'Key', 'given by GM',
    'Lava', 'Ferryd Shillor',
    'Lava', 'Shiu Hri',
    'Life', 'Bhurral Varsheen',
    'Light', 'Bhurral Varsheen',
    'Light', 'Loren Chama',
    'Light', 'Polyuntri Stevald',
    'Lightning', 'Brintec Dev-Onni',
    'Meteor', 'Noxdar Darmeth',
    'Meteor', 'Sharven Xant-Areth',
    'Might', 'Meoeor',
    'Mind', 'Kilas Tungse',
    'Mind', 'Vresa Nohdiir',
    'Negate', 'Govell Mihdren',
    'Negate', 'Lorytia Starhammer',
    'Net', 'Tarmeen Alecheech',
    'Net', 'Kelicha Anijiel',
    'Object', 'Martiana Zeth',
    'Poison', 'Levrus Dahrenn',
    'Poison', 'Jirosh Mikana',
    'Polymorph', 'Lori Tryllyn',
    'Purify', 'Barrin Dhorod',
    'Rain', 'Barrin Dhorod',
    'Rain', 'Grimal Bloodaxe',
    'Reduction', 'not in game yet',
    'Reflection', 'not in game yet',
    'Rock', 'Lorytia Starhammer',
    'Rock', 'Merrinez Dholant',
    'Shadow', 'Evelyn',
    'Shadow', 'Raithen',
    'Sight', 'Deelor Blackeye',
    'Sleep', 'Ukabnu',
    'Sound', 'Jayose',
    'Sphere', 'Levrus Dahrenn',
    'Summon', 'Gregori',
    'Summon', 'Ukabnu',
    'Summon', 'Levrus Dahrenn',
    'Summon', 'Jardet Forsill',
    'Tree', 'Gulm Ossoe',
    'Tree', 'Mulgik',
    'Vortex', 'Jecascis Airiskel',
    'Wall', 'Datal Allavium',
    'Water', 'Grimal Bloodaxe',
    'Weakness', 'Dark Wanderer',
    'Weapon', 'Ferryd Shillor',
    'Weapon', 'Ukabnu',
    'Weight', 'Kerryk Cor',
    'Wind', 'Jayose'
  );


  /* Insert glyph-NPC data */
  for($i = 0; $i < count($glyphNpc_to_insert); $i += 2) {
    $glyphNpc_query = "INSERT INTO glyphNpc (glyph, npc)
            VALUES ('" . $glyphNpc_to_insert[$i] . "', '" . $glyphNpc_to_insert[$i+1] . "')";
    $mysqli->query($glyphNpc_query) or die($mysqli->error);
  }


  /* ######################################################################## */

  /*
   * Create Table Spellbook
   * Describes all the spells in Game
   *
   * The glyphs that are needed to cast the spells
   * shall be added in next table
   */

  $mysqli->query("DROP TABLE IF EXISTS `spellbook`") or die(mysql_error());

  $createSpellbook = "CREATE TABLE IF NOT EXISTS `spellbook` (
    `name` varchar(70) NOT NULL,
    `way` varchar(20) NOT NULL,
    `realm` int(11) NOT NULL,
    `checkup` DATE NOT NULL,
    PRIMARY KEY (`name`)
    ) ENGINE = MyISAM";

  $mysqli->query($createSpellbook) or die($mysqli->error);

  $spells_to_insert = array(
    'Magic Light', 'Crystal Way', 1, '2016-03-24',
    'Life Infusion', 'Crystal Way', 1, '2016-03-24',
    'Recovery', 'Crystal Way', 1, '2016-03-24',
    'Summon Missile', 'Crystal Way', 1, '2016-03-24',
    'Dazzling Light', 'Crystal Way', 2, '2016-03-24',
    'Prayer', 'Crystal Way', 2, '2016-03-24',
    'Invigoration', 'Crystal Way', 2, '2016-03-24',
    'Energy Arrow', 'Crystal Way', 2, '2016-03-24',
    'Crystal Aura', 'Crystal Way', 2, '2016-03-24',
    'Dweomer Transfusion', 'Crystal Way', 3, '2016-03-24',
    'Crystal Mirror', 'Crystal Way', 3, '2016-03-24',
    'Curing Faith', 'Crystal Way', 3, '2016-03-24',
    'Missile Shower', 'Crystal Way', 3, '2016-03-24',
    'Cleanse', 'Crystal Way', 4, '2016-03-24',
    'Blessed Litany', 'Crystal Way', 4, '2016-11-04',
    'Purification', 'Crystal Way', 5, '2016-03-24',
    'Healing Flash', 'Crystal Way', 5, '2016-03-24',
    'Ray of Faith', 'Crystal Way', 5, '2016-03-24',
    'Dweomer Detection', 'Blue Way', 1, '2016-03-24',
    'Freeze', 'Blue Way', 1, '2016-03-24',
    'Rinse', 'Blue Way', 1, '2016-03-24',
    'Healing Vapour', 'Blue Way', 1, '2016-03-24',
    'Venom Adaption', 'Blue Way', 2, '2016-03-24',
    'Icy Cage', 'Blue Way', 2, '2016-03-24',
    'Icy Blast', 'Blue Way', 2, '2016-03-24',
    'Water Barrier', 'Blue Way', 2, '2016-03-24',
    'Analyze Dweomer', 'Blue Way', 3, '2016-03-24',
    'Mephitic Haze', 'Blue Way', 3, '2016-03-24',
    'Polymorph', 'Blue Way', 3, '2016-03-24',
    'Healing Mist', 'Blue Way', 3, '2016-03-24',
    'Lesser Future Sight', 'Blue Way', 4, '2016-03-24',
    'Icy Ground', 'Blue Way', 4, '2016-03-24',
    'Frozen Net', 'Blue Way', 4, '2017-03-23',
    'Imbibe Lore', 'Blue Way', 5, '2016-03-24',
    'Healing Rain', 'Blue Way', 5, '2016-03-24',
    'Poisonous Hailstorm', 'Blue Way', 5, '2016-03-24',
    'Defensive Wind', 'Azure Way', 1, '2016-03-24',
    'Relaxing Sleep', 'Azure Way', 1, '2016-03-24',
    'Sonic Blast', 'Azure Way', 1, '2016-03-24',
    'Phantasmal Voices', 'Azure Way', 1, '2016-03-24',
    'Lesser Creature Bond', 'Azure Way', 2, '2016-03-24',
    'Sound Deprivation', 'Azure Way', 2, '2016-03-24',
    'Choking Gas', 'Azure Way', 2, '2016-03-24',
    'Psychic Blow', 'Azure Way', 3, '2016-03-24',
    'Wind Wall', 'Azure Way', 3, '2016-03-24',
    'Nature Intuition', 'Azure Way', 3, '2016-03-24',
    'Psychic Darts', 'Azure Way', 4, '2016-03-24',
    'Magic Sleep', 'Azure Way', 4, '2016-03-24',
    'Greater Creature Bond', 'Azure Way', 4, '2017-03-23',
    'Mind Paralysation', 'Azure Way', 5, '2016-03-24',
    'Dome of Perfection', 'Azure Way', 5, '2016-03-24',
    'Rock Armor', 'Brown Way', 1, '2016-03-24',
    'Wild Streak', 'Brown Way', 1, '2016-03-24',
    'Incredible Weight', 'Brown Way', 1, '2016-03-24',
    'Sand Blast', 'Brown Way', 1, '2016-03-24',
    'Stone Warp', 'Brown Way', 2, '2016-03-24',
    'Flying Stones', 'Brown Way', 2, '2016-03-24',
    'Summon Tree', 'Brown Way', 2, '2017-03-23',
    'Gorwealform', 'Brown Way', 3, '2016-03-24',
    'Stone Fist', 'Brown Way', 3, '2016-03-24',
    'Armoured Skin', 'Brown Way', 3, '2016-03-24',
    'Tower Armour', 'Brown Way', 4, '2016-03-24',
    'Ant Weight', 'Brown Way', 4, '2016-03-24',
    'Turn into Stone', 'Brown Way', 4, '2017-04-09',
    'Minor Earthquake', 'Brown Way', 5, '2016-03-24',
    'Animate Vegetation', 'Brown Way', 5, '2016-03-24',
    'Summon Earth Spirit', 'Brown Way', 5, '2017-02-01',
    'Flame Burst', 'Red Way', 1, '2016-03-24',
    'Flame Spire', 'Red Way', 1, '2016-03-24',
    'Electrotouch', 'Red Way', 1, '2016-03-24',
    'Lava Pit', 'Red Way', 2, '2016-03-24',
    'Flaming Weapon', 'Red Way', 2, '2016-03-24',
    'Instill Confusion', 'Red Way', 2, '2016-03-24',
    'Strength', 'Red Way', 2, '2016-03-24',
    'Meteor', 'Red Way', 3, '2016-03-24',
    'Claws Vortex', 'Red Way', 3, '2016-03-24',
    'Lightning Vortex', 'Red Way', 4, '2016-03-24',
    'Blades of Chaos', 'Red Way', 4, '2016-03-24',
    'Fist of the Volcano', 'Red Way', 5, '2016-03-24',
    'Diamond Skin', 'Red Way', 5, '2016-03-24',
    'Confusion Wave', 'Red Way', 5, '2016-03-24',
    'Weakness', 'Dark Way', 1, '2016-03-24',
    'Darkness', 'Dark Way', 1, '2016-03-24',
    'Taste of Death', 'Dark Way', 1, '2016-03-24',
    'Fear', 'Dark Way', 2, '2016-03-24',
    'Shadow Form', 'Dark Way', 3, '2017-03-23',
    'Daemonic Form', 'Dark Way', 2, '2016-03-24',
    'Hand of Doom', 'Dark Way', 2, '2016-03-24',
    'Mind Drain', 'Dark Way', 3, '2016-03-24',
    'Life Transfusion', 'Dark Way', 3, '2016-03-24',
    'Terror', 'Dark Way', 4, '2016-03-24',
    'Lesser Plague', 'Dark Way', 4, '2016-03-24',
    'Necrotouch', 'Dark Way', 4, '2016-03-24',
    'Animate Shadow', 'Dark Way', 5, '2016-03-24',
    'Daemon Arrows', 'Dark Way', 5, '2016-03-24',
    'Tire', 'Dark Way', 5, '2016-03-24'
  );


  for($i = 0; $i < count($spells_to_insert); $i += 4) {
    $spells_query = "INSERT INTO spellbook (name, way, realm, checkup)
            VALUES ('" . $spells_to_insert[$i] . "', '" . $spells_to_insert[$i+1]
            . "', " . $spells_to_insert[$i+2] . ", '" . $spells_to_insert[$i+3]
            . "')";
    $mysqli->query($spells_query) or die($mysqli->error);
  }

  /* ######################################################################## */

  /* Create Table spell-glyphs
   * Determines which glyphs the player needs to cast a spell
   *
   * Specify the glyphs in the order they need to be
   * when researching the spell in PS. So 1. position = 0,
   * 2. position = 1, etc.
   *
   * The glyphs for a spell can only be added if the glyphs
   * are already added in the glyphs table above.
   */

  $mysqli->query("DROP TABLE IF EXISTS `spellGlyphs`") or die(mysql_error());

  $createSpellGlyphs = "CREATE TABLE IF NOT EXISTS `spellGlyphs` (
    `spell` varchar(70) NOT NULL,
    `glyph` varchar(20) NOT NULL,
    `ordering` int(11) NOT NULL,
    PRIMARY KEY (`spell`, `glyph`),
    FOREIGN KEY (spell) REFERENCES spellbook(name) ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE = MyISAM";

  $mysqli->query($createSpellGlyphs) or die($mysqli->error);

  $spellGlyphs_to_insert = array(
    'Magic Light', 'Light', 0,
    'Life Infusion', 'Energy', 0,
    'Recovery', 'Life', 0,
    'Recovery', 'Crystal', 1,
    'Summon Missile', 'Arrow', 0,
    'Dazzling Light', 'Light', 0,
    'Dazzling Light', 'Sight', 1,
    'Prayer', 'Faith', 0,
    'Invigoration', 'Life', 0,
    'Energy Arrow', 'Energy', 0,
    'Energy Arrow', 'Arrow', 1,
    'Crystal Aura', 'Crystal', 0,
    'Crystal Aura', 'Sight', 1,
    'Crystal Aura', 'Light', 2,
    'Dweomer Transfusion', 'Crystal', 0,
    'Crystal Mirror', 'Light', 0,
    'Crystal Mirror', 'Door', 1,
    'Curing Faith', 'Faith', 0,
    'Curing Faith', 'Life', 1,
    'Missile Shower', 'Arrow', 0,
    'Missile Shower', 'Energy', 1,
    'Missile Shower', 'Sight', 2,
    'Cleanse', 'Life', 0,
    'Cleanse', 'Crystal', 1,
    'Cleanse', 'Energy', 2,
    'Blessed Litany', 'Faith', 0,
    'Blessed Litany', 'Energy', 1,
    'Purification', 'Crystal', 0,
    'Purification', 'Life', 1,
    'Purification', 'Sight', 2,
    'Healing Flash', 'Energy', 0,
    'Healing Flash', 'Light', 1,
    'Ray of Faith', 'Faith', 0,
    'Ray of Faith', 'Arrow', 1,
    'Dweomer Detection', 'Divination', 0,
    'Freeze', 'Cold', 0,
    'Rinse', 'Water', 0,
    'Healing Vapour', 'Water', 0,
    'Healing Vapour', 'Energy', 1,
    'Venom Adaption', 'Poison', 0,
    'Venom Adaption', 'Energy', 1,
    'Icy Cage', 'Cold', 0,
    'Icy Cage', 'Sphere', 1,
    'Icy Blast', 'Water', 0,
    'Icy Blast', 'Cold', 1,
    'Water Barrier', 'Water', 0,
    'Water Barrier', 'Sphere', 1,
    'Analyze Dweomer', 'Divination', 0,
    'Analyze Dweomer', 'Object', 1,
    'Mephitic Haze', 'Poison', 0,
    'Mephitic Haze', 'Water', 1,
    'Polymorph', 'Polymorph', 0,
    'Healing Mist', 'Purify', 0,
    'Healing Mist', 'Water', 1,
    'Lesser Future Sight', 'Divination', 0,
    'Lesser Future Sight', 'Net', 1,
    'Icy Ground', 'Cold', 0,
    'Icy Ground', 'Object', 1,
    'Frozen Net', 'Net', 0,
    'Frozen Net', 'Sphere', 1,
    'Imbibe Lore', 'Polymorph', 0,
    'Imbibe Lore', 'Divination', 1,
    'Healing Rain', 'Purify', 0,
    'Healing Rain', 'Water', 1,
    'Healing Rain', 'Rain', 2,
    'Poisonous Hailstorm', 'Rain', 0,
    'Poisonous Hailstorm', 'Cold', 1,
    'Poisonous Hailstorm', 'Poison', 2,
    'Defensive Wind', 'Air', 0,
    'Relaxing Sleep', 'Sleep', 0,
    'Sonic Blast', 'Air', 0,
    'Sonic Blast', 'Sound', 1,
    'Phantasmal Voices', 'Sound', 0,
    'Lesser Creature Bond', 'Bond', 0,
    'Lesser Creature Bond', 'Might', 1,
    'Sound Deprivation', 'Bond', 0,
    'Sound Deprivation', 'Sound', 1,
    'Choking Gas', 'Gas', 0,
    'Psychic Blow', 'Mind', 0,
    'Wind Wall', 'Wind', 0,
    'Wind Wall', 'Vortex', 1,
    'Nature Intuition', 'Mind', 0,
    'Nature Intuition', 'Humanoid', 1,
    'Psychic Darts', 'Mind', 0,
    'Psychic Darts', 'Bow', 1,
    'Magic Sleep', 'Sleep', 0,
    'Magic Sleep', 'Humanoid', 1,
    'Greater Creature Bond', 'Bond', 0,
    'Greater Creature Bond', 'Might', 1,
    'Greater Creature Bond', 'Bow', 2,
    'Mind Paralysation', 'Mind', 0,
    'Mind Paralysation', 'Bond', 1,
    'Dome of Perfection', 'Dome', 0,
    'Dome of Perfection', 'Humanoid', 1,
    'Dome of Perfection', 'Mind', 2,
    'Rock Armor', 'Armor', 0,
    'Wild Streak', 'Creature', 0,
    'Incredible Weight', 'Weight', 0,
    'Sand Blast', 'Rock', 0,
    'Stone Warp', 'Rock', 0,
    'Stone Warp', 'Creature', 1,
    'Flying Stones', 'Summon', 0,
    'Flying Stones', 'Rock', 1,
    'Summon Tree', 'Summon', 0,
    'Summon Tree', 'Tree', 1,
    'Gorwealform', 'Polymorph', 0,
    'Gorwealform', 'Tree', 1,
    'Stone Fist', 'Hand', 0,
    'Stone Fist', 'Rock', 1,
    'Armoured Skin', 'Creature', 0,
    'Armoured Skin', 'Armor', 1,
    'Tower Armour', 'Wall', 0,
    'Tower Armour', 'Object', 1,
    'Tower Armour', 'Armor', 2,
    'Ant Weight', 'Negate', 0,
    'Ant Weight', 'Weight', 1,
    'Turn into Stone', 'Creature', 0,
    'Turn into Stone', 'Rock', 1,
    'Turn into Stone', 'Entropy', 2,
    'Minor Earthquake', 'Earth', 0,
    'Minor Earthquake', 'Creature', 1,
    'Animate Vegetation', 'Tree', 0,
    'Animate Vegetation', 'Creature', 1,
    'Animate Vegetation', 'Wall', 2,
    'Summon Earth Spirit', 'Summon', 0,
    'Summon Earth Spirit', 'Earth', 1,
    'Summon Earth Spirit', 'Animal', 2,
    'Flame Burst', 'Fire', 0,
    'Flame Spire', 'Vortex', 0,
    'Electrotouch', 'Lightning', 0,
    'Lava Pit', 'Lava', 0,
    'Flaming Weapon', 'Weapon', 0,
    'Flaming Weapon', 'Fire', 1,
    'Instill Confusion', 'Chaos', 0,
    'Strength', 'Might', 0,
    'Meteor', 'Meteor', 0,
    'Claws Vortex', 'Vortex', 0,
    'Claws Vortex', 'Hand', 1,
    'Lightning Vortex', 'Lightning', 0,
    'Lightning Vortex', 'Vortex', 1,
    'Blades of Chaos', 'Weapon', 0,
    'Blades of Chaos', 'Chaos', 1,
    'Fist of the Volcano', 'Lava', 0,
    'Fist of the Volcano', 'Hand', 1,
    'Diamond Skin', 'Lava', 0,
    'Diamond Skin', 'Earth', 1,
    'Confusion Wave', 'Chaos', 0,
    'Confusion Wave', 'Mind', 1,
    'Confusion Wave', 'Entropy', 2,
    'Weakness', 'Weakness', 0,
    'Darkness', 'Darkness', 0,
    'Taste of Death', 'Death', 0,
    'Fear', 'Fear', 0,
    'Shadow Form', 'Shadow', 0,
    'Shadow Form', 'Daemon', 1,
    'Daemonic Form', 'Daemon', 0,
    'Hand of Doom', 'Hand', 0,
    'Hand of Doom', 'Illness', 1,
    'Mind Drain', 'Negate', 0,
    'Mind Drain', 'Mind', 1,
    'Life Transfusion', 'Negate', 0,
    'Life Transfusion', 'Death', 1,
    'Terror', 'Fear', 0,
    'Terror', 'Darkness', 1,
    'Terror', 'Blindness', 2,
    'Lesser Plague', 'Entropy', 0,
    'Lesser Plague', 'Illness', 1,
    'Necrotouch', 'Entropy', 0,
    'Necrotouch', 'Hand', 1,
    'Animate Shadow', 'Shadow', 0,
    'Animate Shadow', 'Entropy', 1,
    'Animate Shadow', 'Humanoid', 2,
    'Daemon Arrows', 'Daemon', 0,
    'Daemon Arrows', 'Arrow', 1,
    'Tire', 'Illness', 0,
    'Tire', 'Weakness', 1
  );
  for($i = 0; $i < count($spellGlyphs_to_insert); $i += 3) {
    $spellGlyphs_query = "INSERT INTO spellGlyphs (spell, glyph, ordering)
            VALUES ('" . $spellGlyphs_to_insert[$i] . "', '" . $spellGlyphs_to_insert[$i+1]
            . "', " . $spellGlyphs_to_insert[$i+2] . ")";
    $mysqli->query($spellGlyphs_query) or die($mysqli->error);
  }


  /* ######################################################################## */

  /*
   * A table for all gem enchanting glyphs and names.
   */

  /* GemEnchanting Data */

  $gemEnchanting_to_insert = array(

    'Blue', 'Ruby', 'Cold', 'Psychic', '-', 'of Power',
    'Blue', 'Emerald', 'Poison', 'Psychic', 'Lesser', 'of Power',
    'Blue', 'Sapphire', 'Object', 'Psychic', 'Major', 'of Power',
    'Blue', 'Diamond', 'Polymorph', 'Psychic', 'Greater', 'of Power',
    'Blue', 'Emerald', 'Cold', 'Reflecting', '-', 'of Power',
    'Blue', 'Sapphire', 'Poison', 'Reflecting', 'Lesser', 'of Power',
    'Blue', 'Diamond', 'Object', 'Reflecting', 'Major', 'of Power',
    'Blue', 'Ruby', 'Rain', 'Freezing', '-', 'of Power',
    'Blue', 'Sapphire', 'Net', 'Freezing', 'Lesser', 'of Power',
    'Blue', 'Diamond', 'Poison', 'Freezing', 'Major', 'of Power',
    'Blue', 'Emerald', 'Divination', 'Gazing', '-', 'of Power',
    'Blue', 'Sapphire', 'Key', 'Gazing', 'Lesser', 'of Power',
    'Blue', 'Diamond', 'Purify', 'Gazing', 'Major', 'of Power',
    'Blue', 'Emerald', 'Rain', 'of Waterkin', '-', 'of Power',
    'Blue', 'Diamond', 'Sphere', 'of Waterkin', 'Major', 'of Power',
    'Blue', 'Emerald', 'Water', 'of Sharpness', '-', 'of Power',
    'Blue', 'Diamond', 'Water', 'of Sharpness', 'Major', 'of Power',
    'Blue', 'Emerald', 'Sphere', 'of Redemption', '-', 'of Power',
    'Blue', 'Diamond', 'Rain', 'of Redemption', 'Major', 'of Power',
    'Brown', 'Ruby', 'Armor', 'Entangled', '-', 'of Power',
    'Brown', 'Emerald', 'Rock', 'Entangled', 'Lesser', 'of Power',
    'Brown', 'Sapphire', 'Armor', 'Entangled', 'Major', 'of Power',
    'Brown', 'Diamond', 'Tree', 'Entangled', 'Greater', 'of Power',
    'Brown', 'Emerald', 'Armor', 'Mutant', '-', 'of Power',
    'Brown', 'Sapphire', 'Rock', 'Mutant', 'Lesser', 'of Power',
    'Brown', 'Diamond', 'Wall', 'Mutant', 'Major', 'of Power',
    'Brown', 'Emerald', 'Summon', 'Displaced', '-', 'of Power',
    'Brown', 'Sapphire', 'Weight', 'Displaced', 'Lesser', 'of Power',
    'Brown', 'Diamond', 'Summon', 'Displaced', 'Major', 'of Power',
    'Brown', 'Emerald', 'Wall', 'of Chaos', '-', 'of Power',
    'Brown', 'Diamond', 'Weight', 'of Chaos', 'Major', 'of Power',
    'Brown', 'Emerald', 'Tree', 'of Illusion', '-', 'of Power',
    'Brown', 'Diamond', 'Creature', 'of Illusion', 'Major', 'of Power',
    'Brown', 'Emerald', 'Weight', 'of Shadow', '-', 'of Power',
    'Brown', 'Diamond', 'Earth', 'of Shadow', 'Major', 'of Power',
    'Crystal', 'Ruby', 'Arrow', 'Luminous', '-', 'of Power',
    'Crystal', 'Emerald', 'Energy', 'Luminous', 'Lesser', 'of Power',
    'Crystal', 'Sapphire', 'Faith', 'Luminous', 'Major', 'of Power',
    'Crystal', 'Diamond', 'Crystal', 'Luminous', 'Greater', 'of Power',
    'Crystal', 'Emerald', 'Life', 'Swirling', '-', 'of Power',
    'Crystal', 'Sapphire', 'Light', 'Swirling', 'Lesser', 'of Power',
    'Crystal', 'Diamond', 'Sight', 'Swirling', 'Major', 'of Power',
    'Crystal', 'Emerald', 'Crystal', 'Whispering', '-', 'of Power',
    'Crystal', 'Sapphire', 'Arrow', 'Whispering', 'Lesser', 'of Power',
    'Crystal', 'Diamond', 'Energy', 'Whispering', 'Major', 'of Power',
    'Crystal', 'Emerald', 'Faith', 'Boiling', '-', 'of Power',
    'Crystal', 'Sapphire', 'Sight', 'Boiling', 'Lesser', 'of Power',
    'Crystal', 'Diamond', 'Faith', 'Boiling', 'Major', 'of Power',
    'Crystal', 'Emerald', 'Sight', 'of Mindcontrol', '-', 'of Power',
    'Crystal', 'Diamond', 'Life', 'of Mindcontrol', 'Major', 'of Power',
    'Crystal', 'Emerald', 'Door', 'of Creation', '-', 'of Power',
    'Crystal', 'Diamond', 'Arrow', 'of Creation', 'Major', 'of Power',
    'Crystal', 'Emerald', 'Light', 'of Thunder', '-', 'of Power',
    'Crystal', 'Diamond', 'Door', 'of Thunder', 'Major', 'of Power',
    'Azure', 'Ruby', 'Air', 'Radiant', '-', 'of Spirit',
    'Azure', 'Emerald', 'Gas', 'Radiant', 'Lesser', 'of Spirit',
    'Azure', 'Sapphire', 'Bond', 'Radiant', 'Major', 'of Spirit',
    'Azure', 'Diamond', 'Dome', 'Radiant', 'Greater', 'of Spirit',
    'Azure', 'Emerald', 'Air', 'Burning', '-', 'of Spirit',
    'Azure', 'Sapphire', 'Gas', 'Burning', 'Lesser', 'of Spirit',
    'Azure', 'Diamond', 'Bond', 'Burning', 'Major', 'of Spirit',
    'Azure', 'Emerald', 'Bond', 'Shiny', '-', 'of Spirit',
    'Azure', 'Sapphire', 'Bow', 'Shiny', 'Lesser', 'of Spirit',
    'Azure', 'Diamond', 'Humanoid', 'Shiny', 'Major', 'of Spirit',
    'Azure', 'Emerald', 'Dome', 'of Confusion', '-', 'of Spirit',
    'Azure', 'Diamond', 'Mind', 'of Confusion', 'Major', 'of Spirit',
    'Azure', 'Emerald', 'Mind', 'of Shattering', '-', 'of Spirit',
    'Azure', 'Diamond', 'Sleep', 'of Shattering', 'Major', 'of Spirit',
    'Azure', 'Emerald', 'Sound', 'of Brilliance', '-', 'of Spirit',
    'Azure', 'Diamond', 'Bow', 'of Brilliance', 'Major', 'of Spirit',
    'Azure', 'Emerald', 'Sleep', 'of Swiftness', '-', 'of Spirit',
    'Azure', 'Diamond', 'Sound', 'of Swiftness', 'Major', 'of Spirit',
    'Dark', 'Ruby', 'Death', 'Obscure', '-', 'of Spirit',
    'Dark', 'Emerald', 'Negate', 'Obscure', 'Lesser', 'of Spirit',
    'Dark', 'Sapphire', 'Death', 'Obscure', 'Major', 'of Spirit',
    'Dark', 'Diamond', 'Illness', 'Obscure', 'Greater', 'of Spirit',
    'Dark', 'Emerald', 'Death', 'Organic', '-', 'of Spirit',
    'Dark', 'Sapphire', 'Blindness', 'Organic', 'Lesser', 'of Spirit',
    'Dark', 'Diamond', 'Daemon', 'Organic', 'Major', 'of Spirit',
    'Dark', 'Emerald', 'Illness', 'Opposing', '-', 'of Spirit',
    'Dark', 'Sapphire', 'Daemon', 'Opposing', 'Lesser', 'of Spirit',
    'Dark', 'Diamond', 'Fear', 'Opposing', 'Major', 'of Spirit',
    'Dark', 'Emerald', 'Blindness', 'Revealing', '-', 'of Spirit',
    'Dark', 'Sapphire', 'Negate', 'Revealing', 'Lesser', 'of Spirit',
    'Dark', 'Diamond', 'Entropy', 'Revealing', 'Major', 'of Spirit',
    'Dark', 'Emerald', 'Shadow', 'of Tides', '-', 'of Spirit',
    'Dark', 'Diamond', 'Weakness', 'of Tides', 'Major', 'of Spirit',
    'Dark', 'Emerald', 'Fear', 'of Resistance', '-', 'of Spirit',
    'Dark', 'Diamond', 'Shadow', 'of Resistance', 'Major', 'of Spirit',
    'Dark', 'Emerald', 'Weakness', 'of Absorption', '-', 'of Spirit',
    'Dark', 'Diamond', 'Blindness', 'of Absorption', 'Major', 'of Spirit',
    'Red', 'Ruby', 'Fire', 'Flaming', '-', 'of Spirit',
    'Red', 'Emerald', 'Lightning', 'Flaming', 'Lesser', 'of Spirit',
    'Red', 'Sapphire', 'Meteor', 'Flaming', 'Major', 'of Spirit',
    'Red', 'Diamond', 'Lava', 'Flaming', 'Greater', 'of Spirit',
    'Red', 'Emerald', 'Vortex', 'Lit', '-', 'of Spirit',
    'Red', 'Sapphire', 'Weapon', 'Lit', 'Lesser', 'of Spirit',
    'Red', 'Diamond', 'Hand', 'Lit', 'Major', 'of Spirit',
    'Red', 'Emerald', 'Might', 'Heated', '-', 'of Spirit',
    'Red', 'Sapphire', 'Hand', 'Heated', 'Lesser', 'of Spirit',
    'Red', 'Diamond', 'Fire', 'Heated', 'Major', 'of Spirit',
    'Red', 'Emerald', 'Weapon', 'of Magma', '-', 'of Spirit',
    'Red', 'Diamond', 'Lightning', 'of Magma', 'Major', 'of Spirit',
    'Red', 'Emerald', 'Fire', 'of Vapor', '-', 'of Spirit',
    'Red', 'Diamond', 'Vortex', 'of Vapor', 'Major', 'of Spirit',
    'Red', 'Emerald', 'Hand', 'of Firegaze', '-', 'of Spirit',
    'Red', 'Diamond', 'Might', 'of Firegaze', 'Major', 'of Spirit',
    'Red', 'Emerald', 'Lava', 'of Quartz', '-', 'of Spirit',
    'Red', 'Diamond', 'Meteor', 'of Quartz', 'Major', 'of Spirit'
  );

  /* Create GemEnchanting Table */

  $mysqli->query("DROP TABLE IF EXISTS `gemEnchanting`") or die(mysql_error());

  $createGemEnchanting = "CREATE TABLE IF NOT EXISTS `gemEnchanting` (
    way varchar(20) NOT NULL,
    gem varchar(20) NOT NULL,
    glyph varchar(20) NOT NULL,
    result varchar(20) NOT NULL,
    class varchar(20) NOT NULL,
    house varchar(20) NOT NULL,
    PRIMARY KEY (gem, glyph),
    FOREIGN KEY (glyph) REFERENCES glyphs(name) ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE = MyISAM";

  $mysqli ->query($createGemEnchanting) or die ($mysqli->error);


  /* Insert GemEnchanting data */
  for($i = 0; $i < count($gemEnchanting_to_insert); $i += 6) {
    $gemEnchanting_query = "INSERT INTO gemEnchanting (way, gem, glyph, result, class, house)
            VALUES ('" . $gemEnchanting_to_insert[$i]
            . "', '" . $gemEnchanting_to_insert[$i+1]
            . "', '" . $gemEnchanting_to_insert[$i+2]
            . "', '" . $gemEnchanting_to_insert[$i+3]
            . "', '" . $gemEnchanting_to_insert[$i+4]
            . "', '" . $gemEnchanting_to_insert[$i+5]. "')";
    $mysqli->query($gemEnchanting_query) or die($mysqli->error);
  }

  /* ######################################################################## */

  /* close connection */
  $mysqli->close();
