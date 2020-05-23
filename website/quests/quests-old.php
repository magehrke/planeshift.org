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
                                    
                            $getQuests = "SELECT q.name, q.npc, n.area, q.checkup 
											FROM questsOld q, npcs n
											WHERE q.npc = n.name;";
                            $quests = $mysqli->query($getQuests) or die($mysqli->error);			
                            
                            while($quest = $quests->fetch_array()) {
                
                                echo "<tr>";
                                    echo "<td><a href=\"/quests/details/";
                                    
                                    /* Replace the spaces in the URL with dots. */
                                    $questname = $quest["name"];
                                    while(strpos($questname, " ")) {
                                        $posOfSpace = strpos($questname, " ");
                                        echo substr($questname, 0, $posOfSpace) . "-";
                                        $questname = substr($questname, $posOfSpace + 1);
                                    }
                                    echo $questname;
                                    
                                    echo ".php\">" . $quest["name"] . "</a></td>";

                                    /* Insert the quest's NPC and additionally creating a Link
                                     * to planeshift.it
                                     */
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
                                    $getRewards = 	"SELECT reward
                                                    FROM questsRewardsOld
                                                    WHERE quest = '" . $quest["name"] . "';";
                                    $rewards = $mysqli->query($getRewards) or die($mysqli->error);	
                                    $reward = $rewards->fetch_array();
                                    echo $reward["reward"];
                                    while($reward = $rewards->fetch_array()) {	
                                        echo ", ";
                                        echo $reward["reward"];
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


