<!doctype html>
<html>
<head>
	<title>Gem Enchanting</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/gem-enchanting.css" type="text/css" rel="stylesheet" />
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
                    <h1 class="heading">Gem Enchanting</h1>
                    <div class="text_container">
                        <p>Description: <i>Enchanting Crystals with Glyphs using an Enchanter.</i></p>

                        <p>General information:
                            <ul>
                                <li>Enchanted gems can be used to craft magical items.</li>
                                <li>A list of all gem-glyph combinations can be found further down the page.</li>
                                <li>Enchanting gems is one of the easiest & fastest ways to train magic.</li>
                            </ul>
                        </p>
                        <p>House of Power:
                            <ul>
                                <li>To enchant gems using the crystal, blue or brown way, you need to visit the
                                <?php
                                    echo "<a href='";
                                    /* Printing the Location with a link to the loction */
                                    /* The Variable $locationName & $locationMap has to be set !!!*/
                                    $locationName = "House of Power";
                                    $locationMap = "Magic Shop";
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/location_link_to_map.inc.php";
                                    include($path);
                                    echo "'>House of Power</a>";
                                ?>.</li>
                                 <li>To enter the House of Power, you need to posess the
                                    <img src="/images/icons/enchanting_gems_of_power_icon.png">
                                    'Enchanting Gems of Power' book by completing the
                                 <?php
                                        echo "<a href='";
                                        /* Printing the Item with a link to the item */
                                        /* The Variable $itemName has to be set !!! */
                                        $questName = "Gregori&apos;s Enchanted Gems";
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>Gregori's Enchanted Gems</a>";
                                ?> quest.
                                </li>
                                <li>To get the quest, you need to be at least an adept in crystal, blue or brown way.</li>

                            </ul>
                        </p>
                        <p>House of the Spirit:
                            <ul>
                                <li>To enchant gems using the azure, red or dark way, you need to visit the
                                <?php
                                    echo "<a href='";
                                    /* Printing the Location with a link to the loction */
                                    /* The Variable $locationName & $locationMap has to be set !!!*/
                                    $locationName = "House of the Spirit";
                                    $locationMap = "Bronze Door Road 1";
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/location_link_to_map.inc.php";
                                    include($path);
                                    echo "'>House of the Spirit</a>";
                                ?>.</li>
                                <li>To enter the House of the Spirit, you need to posess the
                                    <img src="/images/icons/enchanting_gems_of_spirit_icon.png">
                                    'Enchanting Gems of Spirit' book by completing the
                                 <?php
                                        echo "<a href='";
                                        /* Printing the Item with a link to the item */
                                        /* The Variable $itemName has to be set !!! */
                                        $questName = "Thorian&apos;s Order";
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>Thorian's Order</a>";
                                ?> quest.
                                </li>
                                <li>To get the quest, you need to be at least an adept in azure, red or dark way.</li>
                            </ul>
                        </p>
                        <p>Training:
                            <ul>
                                <li>Always put the right book into your 'mind'.</li>
                                <li>Go to an enchanter, place 1 crystal inside, take a glyph into your right hand and press 'use container'.</li>
                                <li>The higher your level, the shorter you need for enchanting.</li>
                                <li>The higher your level, the more crystals you can use.</li>
                                <li>Above level 20-30 (depending on the way), ruby; above 50, emerald; above 100, sapphire; above 150, diamonds.</li>
                                <li>The higher the level of the crystal, the longer you need for enchanting this special crystal.</li>
                                <li>1 second enchanting gives you 1 practice point.</li>
                                <li>Enchanting crystals, which are already enchanted, won't get you practice points, except if they turn into dust.</li>
                                <li><i>Tipp</i>: Use the enchanted crystals for quests. Just use the 'Give items to NPC' button.</li>
                            </ul>
                        </p>
                    </div>


                    <h2 class="heading">Enchanted Gems</h2>
                	<table class="gemenchanting_main_table sortable hovableTable">

                        <tr>
                            <th>Way</th>
                            <th>Glyph</th>
                            <th>Gem</th>
                            <th>Result</th>
                            <th>Class</th>
                            <th>House</th>
                        </tr>

                        <?php
                            $abfrage_gemEnch = "SELECT way, gem, glyph, result, class, house FROM gemEnchanting;";
                            $get_gemEnch = $mysqli->query($abfrage_gemEnch) or die(mysql_error());

                            while($gemEnch = $get_gemEnch->fetch_array()) {
                                echo "<tr>
                                    <td> <img src='/images/icons/waybook_"
                                        . strtolower($gemEnch['way'])
                                        . "_way_icon.png'/> "
                                        . $gemEnch['way']
                                        . "</td>
                                    <td> <img src='/images/icons/"
                                        . strtolower($gemEnch["glyph"])
                                        . "_glyph_icon.png'/> "
                                        . $gemEnch['glyph']
                                        . "</td>
                                    <td> <img src='/images/icons/"
                                        . strtolower($gemEnch['gem'])
                                        . "_crystal_icon.png'/> "
                                        . $gemEnch['gem']
                                        . "</td>
                                    <td>" . $gemEnch['result'] . "</td>
                                    <td>" . $gemEnch['class'] . "</td>
                                    <td>" . $gemEnch['house'] . "</td>
                                </tr>
                                ";
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
