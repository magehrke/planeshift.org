<!doctype html>
<html>
<head>
	<title>Quests</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <!-- import the css for quests -->
    <link href="/styles/quests.css" type="text/css" rel="stylesheet" />

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

    <table class="quests_main_table sortable hovableTable">

        <tr id="quests_main_table_header">
            <th class="quests_questnameColumn">Questname</th>
            <th class="quests_npcColumn">NPC</th>
            <th class="quests_areaColumn">Area</th>
            <th>Reward</th>
        </tr>



        <!-- Quests Tabelle füllen -->
        <?php

            $getQuests = "SELECT q.name, q.npc, q.checkup, n.area, n.mainPos
							FROM quests q, npcs n
							WHERE q.npc = n.name
              AND n.mainPos = 1
              ORDER BY q.name;";
            $quests = $mysqli->query($getQuests) or die($mysqli->error);

            while($quest = $quests->fetch_array()) {

                echo "<tr>";

                    // ### QUEST ###
                    echo "<td><a href=\"details/";

                    /* Replace the spaces in the URL with dots. */
                    $questname = $quest["name"];
                    while(strpos($questname, " ")) {
                        $posOfSpace = strpos($questname, " ");
                        echo substr($questname, 0, $posOfSpace) . "-";
                        $questname = substr($questname, $posOfSpace + 1);
                    }
                    echo $questname;

                    echo ".php\">" . $quest["name"] . "</a></td>";

                    // ### NPC ### //
                    echo "<td class=\"quests_npcname_cell\">";

                    echo "<a href='";

                    /* Printing the NPC with a link to the Map */
                    /* The Variable $npcName has to be set !!! */
                    $npcName = $quest["npc"];
                    $path = $_SERVER['DOCUMENT_ROOT'];
                    $path .= "/includes/npc_link_to_map.inc.php";
                    include($path);

                    echo "' target='_blank'>" . $quest["npc"] . "</a>";

                    echo "</td>";



                    echo "<td>" . $quest["area"] . "</td>";


                    /* Insert Rewards */
                    echo "<td>";
											/* Getting all the quest rewards */
											/* The Variable $questname has to be set !!! */
	                    $questname = $quest["name"];
											$path = $_SERVER['DOCUMENT_ROOT'];
											$path .= "/quests/quest-rewards.inc.php";
											include($path);
                    echo "</td>";
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
