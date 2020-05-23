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
                    $noRewardsAtAll = True;

                    $questname = $quest["name"];

                    // ALL rewards except Association, Money & XP
                    $getMainRewards =  "SELECT reward, type, amount, way, variant
                                        FROM questsRewards
                                        WHERE quest = '$questname'
                                        AND NOT type in ('Association', 'Money', 'XP')
                                        ORDER BY way, variant;";
                    $mainRewards = $mysqli->query($getMainRewards) or die($mysqli->error);

                    $insedOrStatement = False; 
                    $latestWay = 0;
                    $latestVariant = 0;


                    while($mainReward = $mainRewards->fetch_array()) {
                        if(! $noRewardsAtAll) {
                            if($latestWay == 0 AND $latestVariant == 0) {
                                echo ", ";
                            }
                            elseif($mainReward['way'] != $latestWay 
                                OR $mainReward['variant'] != $latestVariant) {
                                echo " -or- ";
                            } else {
                                echo " and ";
                            }
                        } else {
                            $noRewardsAtAll = False;
                        }

                        $latestWay = $mainReward['way'];
                        $latestVariant = $mainReward['variant'];

                        // ITEM 
                        if($mainReward['type'] == 'Item') {
                            echo "<img src='/images/icons/" 
                                . str_replace(' ', '_', strtolower($mainReward['reward'])) 
                                . "_icon.png' /> ";
                            if ($mainReward['amount'] != 1) {
                                echo $mainReward['amount'] . " ";
                            }
                            echo $mainReward['reward'];
                        }
                        // SKILL
                        elseif ($mainReward["type"] == "Skill") {
                            echo $mainReward["amount"] 
                                . " level in "
                                . $mainReward["reward"];
                        } 

                        // COMBAT MOVE
                        elseif ($mainReward["type"] == "Combat Move") {
                            echo "Combat Move: " . $mainReward["reward"];
                        }

                        // SPECIAL
                        elseif ($mainReward["type"] == "Special") {
                            echo $mainReward['reward'];
                        }

                        // ELSE
                        else {
                            echo $mainReward['amount'] . " " . $mainReward['reward'];
                        }
                    }

                     // Association
                    $getRewardAssocs = "SELECT reward, MIN(amount) minAmount, MAX(amount) maxAmount
                                        FROM questsRewards
                                        WHERE quest = '" . $quest["name"] . "'
                                        AND type = 'Association'
                                        GROUP BY reward;";
                    $rewardAssocs = $mysqli->query($getRewardAssocs) or die($mysqli->error);
                    while($rewardAssoc = $rewardAssocs->fetch_array()) {
                        if(! $noRewardsAtAll) {
                            echo ", ";
                        } else {
                            $noRewardsAtAll = False;
                        }

                        if($rewardAssoc['minAmount'] == $rewardAssoc['maxAmount']) {
                            // it is 1, if we know that it is positive, but not the amount
                            if($rewardAssoc['minAmount'] == 1) {
                                echo "+";
                            } 
                            // it is -1, if we know that it is negative, but not the amount
                            elseif($rewardAssoc['minAmount'] == -1) {
                                echo "-";
                            } else {
                                echo $rewardAssoc['minAmount'];
                            }
                            echo " Faction with " . $rewardAssoc['reward'];
                        } else {
                            echo $rewardAssoc['minAmount'] 
                                . "-" . $rewardAssoc['maxAmount']
                                . " Faction with " . $rewardAssoc['reward'];
                        }
                    }

                    // Money
                    $getRewardTrias =  "SELECT reward, type, amount
                                        FROM questsRewards
                                        WHERE quest = '" . $quest["name"] . "'
                                        AND type = 'Money';";
                    $rewardTrias = $mysqli->query($getRewardTrias) or die($mysqli->error);

                    $tria_array = array();
                    while($rewardTria = $rewardTrias->fetch_array()) {
                        array_push($tria_array, $rewardTria['amount']);
                    }
                    sort($tria_array);

                    if(!empty($tria_array)) {
                        if(! $noRewardsAtAll) {
                            echo ", ";
                        } else {
                            $noRewardsAtAll = False;
                        }

                        $smallest = reset($tria_array);
                        $highest = end($tria_array);

                        echo "<img src='/images/icons/bag_of_tria_icon.png' /> ";
                        if($smallest == $highest) {
                            echo $smallest . " Tria";
                        } else {
                            echo $smallest . "-" . $highest . " Tria";
                        }
                    }

                    // XP
                    $getRewardXPs = "SELECT reward, type, amount
                                    FROM questsRewards
                                    WHERE quest = '" . $quest["name"] . "'
                                    AND type = 'XP';";
                    $rewardXPs = $mysqli->query($getRewardXPs) or die($mysqli->error);

                    $xp_array = array();
                    while($rewardXP = $rewardXPs->fetch_array()) {
                        array_push($xp_array, $rewardXP['amount']);
                    }
                    sort($xp_array);

                    if(!empty($xp_array)) {
                        if(! $noRewardsAtAll) {
                            echo ", ";
                        } else {
                            $noRewardsAtAll = False;
                        }

                        $smallest = reset($xp_array);
                        $highest = end($xp_array);

                        if($smallest == $highest) {
                            echo $smallest . " XP";
                        } else {
                            echo $smallest . "-" . $highest . " XP";
                        }
                    }


                    /* When there is no reward */
                    if($noRewardsAtAll) {
                        echo "--";
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


