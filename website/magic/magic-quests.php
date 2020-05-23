<!doctype html>
<html>
<head>
	<title>Way Quests</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/magic-quests.css" type="text/css" rel="stylesheet" />
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

                    <h1>This page is currently under construction!</h1>
                    <h1 class="heading">Magic Quests</h1>

                    <!-- For future use if there is Anti-Magic in game

					<table class="way_training_main_table" class="hovableTable sortable">
                    	<tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                    
                        < <<<<<<<<<<<<<<< ?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials, checkup 
                                FROM questchains WHERE questchain='Anti-Magic'
                                ORDER BY ordering";
                            $get_antiMagic = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($antiMagic = $get_antiMagic->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $antiMagic['specials'] . "</td>";
                                echo "<td>" . $antiMagic['npc'] . "</td>";                               
                                echo "<td>" . $antiMagic['quest'] . "</td>"; 
                                echo "</tr>";
                            }
                        ?>

                    </table>

                    -->

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_azure_way_icon.png'/> Azure Way</h3>

                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials
                                FROM questchains WHERE questchain='Azure Way'
                                ORDER BY ordering";
                            $get_azureWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($azureWay = $get_azureWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $azureWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $azureWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $azureWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $azureWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $azureWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $azureWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_blue_way_icon.png'/> Blue Way</h3>


                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials
                                FROM questchains WHERE questchain='Blue Way'
                                ORDER BY ordering";
                            $get_blueWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($blueWay = $get_blueWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $blueWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $blueWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $blueWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $blueWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $blueWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $blueWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                                
                            }
                        ?>
                    </table>

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_brown_way_icon.png'/> Brown Way</h3>

                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials
                                FROM questchains WHERE questchain='Brown Way'
                                ORDER BY ordering";
                            $get_brownWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($brownWay = $get_brownWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $brownWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $brownWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $brownWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $brownWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $brownWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $brownWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_crystal_way_icon.png'/> Crystal Way</h3>

                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials
                                FROM questchains WHERE questchain='Crystal Way'
                                ORDER BY ordering";
                            $get_crystalWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($crystalWay = $get_crystalWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $crystalWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $crystalWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $crystalWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $crystalWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $crystalWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $crystalWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_dark_way_icon.png'/> Dark Way</h3>

                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials 
                                FROM questchains WHERE questchain='Dark Way'
                                ORDER BY ordering";
                            $get_darkWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($darkWay = $get_darkWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $darkWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $darkWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $darkWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $darkWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $darkWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $darkWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>

                    <h3 class="waytraining_table_headers"><img src='/images/icons/waybook_red_way_icon.png'/> Red Way</h3>

                    <table class="way_training_main_table hovableTable sortable">
                        <tr>
                            <th class="waytraining_rank_header">Rank</th>
                            <th class="waytraining_npc_header">NPC</th>
                            <th class="waytraining_quest_header">Quest</th>
                            <th>Rewards</th>
                        </tr>

                        <?php

                            $abfrage = "SELECT questchain, ordering, quest, npc, specials 
                                FROM questchains WHERE questchain='Red Way'
                                ORDER BY ordering";
                            $get_redWay = $mysqli->query($abfrage) or die(mysql_error());           
                            
                            
                            while($redWay = $get_redWay->fetch_array()) {

                                echo "<tr>";
                                echo "<td>" . $redWay['specials'] . "</td>";
                                echo "<td><a href='";
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */
                                    $npcName = $redWay['npc'];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);
                                    echo "'>" . $redWay['npc'] . "</a></td>";                           
                                echo "<td><a href='";
                                        /* Printing the Quest with a link to the quest */
                                        /* The Variable $questName has to be set !!! */
                                        $questName = $redWay['quest'];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/link_to_quest.inc.php";
                                        include($path);
                                        echo "'>" . $redWay['quest'] . "</a></td>"; 

                                /* Get Rewards, but only items and skill-increase */
                                echo "<td>";
                                $getRewards =  "SELECT reward, type, amount
                                                FROM questsRewards
                                                WHERE quest = '" . $redWay['quest'] . "';";
                                $rewards = $mysqli->query($getRewards) or die($mysqli->error);

                                $firstRound = True;
                                while($reward = $rewards->fetch_array()) {
                                    if($reward['type'] == 'Item' or $reward['type'] == 'Skill') {
                                        if(! $firstRound) {
                                            echo ", ";
                                        } else {
                                            $firstRound = False;
                                        }

                                        if($reward["type"] == "Item") {
                                            echo "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($reward['reward'])) 
                                                . "_icon.png' /> ";

                                            if ($reward['amount'] != 1) {
                                                echo $reward["amount"] . " ";
                                            }
                                            echo $reward["reward"];
                                        } elseif ($reward["type"] == "Skill") {
                                            echo $reward["amount"] . " Level in ";
                                            echo $reward["reward"];
                                        }
                                    }
                                }
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