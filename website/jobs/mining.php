<!doctype html>
<html>
<head>
	<title>Mining</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/mining.css" type="text/css" rel="stylesheet" />
    <link href="/styles/descriptions.css" type="text/css" rel="stylesheet" />

    <!-- script for sorting tables -->
    <script src="/js/sorttable.js"></script>

</head>

<!-- BODY -->
<body>

<table align="center">
	<tr>
    	<td>
        	<div id="root_site_container">

            	<!-- include Header and Navigation -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/header_and_navigation.php";
                    include($path);
                ?>

                <!-- Content section -->
                <div id="content_main_container">
                    <h1 class="heading">Mining</h1>
                    <div class="text_container">
                        <p>Description: <i>Digging valuable things out of the ground.</i></p>

                        <p>General information:
                            <ul>
                                <li>For mining, you solely need a
                                <?php
                                    echo "<a href='";
                                    /* Printing the Item with a link to the item */
                                    /* The Variable $itemName has to be set !!! */
                                    $itemName = "rock-pick";
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/link_to_item.inc.php";
                                    include($path);
                                    echo "'>rock pick</a>";
                                ?>
                                and a place to dig.
                                </li>
                                <li>Take the rock pick in your right hand, go to a mine and type '/dig' in the chat window.</li>
                                <li><i>Tipp:</i> Set a shortcut to the command '/dig' in the shortcut window.</li>
                                <li>You can find a list of the mines further down this page.</li>
                                <li>Unlike other jobs, for mining, no books are required.</li>
                                <li>You can boost your mining skill by wearing 'displaced' jewellery (max 32 lvl).</li>
                            </ul>
                        </p>

                        <p>Quests:
                            <ul>
                                <li>Get to know the basics of mining with the
                                    <?php
                                        echo "<a href='";
                                        /* Printing the quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = "Basics of Mining";
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>Basics of Mining</a>";
                                    ?> quest.
                                </li>
                                <li>Use the <i>repeatable quest</i>
                                    <?php
                                        echo "<a href='";
																				/* Printing the quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = "Ore and ore and ore";
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>Ore and ore and ore</a>";
                                    ?>
                                    to get easy training in mining. Fholen asks you to deliver ores and crystals to a recipient which levels up your mining skill. The higher your current level, the more complicated the delivery becomes.
                                </li>
                                <li> Get a 150 quality rock pick from the
                                    <?php
                                        echo "<a href='";
                                        /* Printing the Item with a link to the item */
                                        /* The Variable $itemName has to be set !!! */
                                        $questName = "Lorytia Starhammer and the Clan Reunion";
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>Lorytia Starhammer and the Clan Reunion</a>";
                                    ?> quest. This is 3 times higher than the normal quality and may increase your mining speed or the quality of your ores/crystals (we are not sure, if it does).
                                </li>
                            </ul>
                        </p>
                        <p>Training:
                            <ul>
                                <li>If you dig once, you get 5 practice points.</li>
                                <li>If you get an ore/crystal, you get 10 practice points.</li>
                                <li>The higher your level, the better is the quality of the ore/crystal.</li>
                                <li>The higher your level, the more ores/crystals you will get if you are successful. Up to level 40 you get 1 ore/crystal. From 40-60 two. Starting at 40, every 20 levels, the quantity is increased by 1 (max 10 ores/crystals at 200).</li>
                            </ul>
                        </p>

                        <p>Mining difficulty:
                            <ul>
                                 <li>Different mines exhibit different difficulties. If an ore/crystal is easy to mine, you get better quality ores/crystals and have a higher rate of success.</li>
                                 <li>Ore difficulty (easy->hard): Coal, Iron, Tin, Zinc, Copper, Cinnabar, Lumium, Silver, Gold, Platinum.</li>
                                 <li>Crystal difficulty (easy->hard): Ruby, Emerald, Sapphire, Diamond.</li>
                            </ul>
                        </p>

                    </div>

                    <h2 class="heading">Locations of Crystals</h2>
                    <table class="mines_main_table hovableTable sortable">
                        <tr>
                            <th>Crystal</th>
                            <th>Location</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT name, area, category, position, checkup
                                FROM mapsItems WHERE category='Crystal'
                                ORDER BY name, area";
                            $get_crystals = $mysqli->query($abfrage) or die(mysql_error());


                            while($crystals = $get_crystals->fetch_array()) {

                                echo "<tr>";
                                    echo "<td><img src='/images/icons/"
                                        . str_replace(' ', '_', strtolower($crystals['name']))
                                        . "_icon.png'/> " . " " . $crystals['name'] . "</td>";

                                    echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $itemName = $crystals["name"];
                                    $itemLocation = $crystals["area"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/item_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $crystals["area"] . "</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>


                    <h2 class="heading">Locations of Ores</h2>
                    <table class="mines_main_table hovableTable sortable">
                        <tr>
                            <th>Ore</th>
                            <th>Location</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT name, area, category, position, checkup
                                FROM mapsItems WHERE category='Ore'
                                ORDER BY name, area";
                            $get_ores = $mysqli->query($abfrage) or die(mysql_error());


                            while($ores = $get_ores->fetch_array()) {

                                echo "<tr>";
                                    echo "<td><img src='/images/icons/"
                                                    . str_replace(' ', '_', strtolower($ores['name']))
                                                    . "_icon.png'/> " . " " . $ores["name"] . "</td>";

                                    echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $itemName = $ores["name"];
                                    $itemLocation = $ores["area"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/item_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $ores["area"] . "</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>

                <!-- include Footer -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/footer.php";
                    include($path);
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
