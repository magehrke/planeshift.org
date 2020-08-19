<!doctype html>
<html>
<head>
	<title>Other Questchains</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <!-- import the css for quests -->
    <link href="/styles/questchains.css" type="text/css" rel="stylesheet" />
    
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
                    <div class="questchain_main_container">

					<h1>Other questchains</h1>

					<br>
					<br>
                    <h3>Unlock the Pterosaur at the fortress</h3>

                    <table class="quests_main_table sortable hovableTable">
                    
                        <tr id="quests_main_table_header">
                            <th>Order</th>
                            <th>Quest</th>
                            <th>NPC</th>
                        </tr>
                    
                        <!-- Quests Tabelle füllen -->
                        <?php
                                    
                            $getQuestChainTable =   "SELECT ordering, quest, npc
                                                     FROM questchains
                                                     WHERE questchain = 'Unlock Pterosaur'
                                                     ORDER BY ordering;";
                            $questchainTable = $mysqli->query($getQuestChainTable) or die($mysqli->error);          
                            
                            while($questchainLine = $questchainTable->fetch_array()) {
                
                                echo "<tr>";
                                    echo "<td>" . $questchainLine['ordering'] . "</td>";

                                    echo "<td><a href=\"/quests/details/";
                                    
                                    /* Replace the spaces in the URL with dots. */
                                    $questname = $questchainLine["quest"];
                                    while(strpos($questname, " ")) {
                                        $posOfSpace = strpos($questname, " ");
                                        echo substr($questname, 0, $posOfSpace) . "-";
                                        $questname = substr($questname, $posOfSpace + 1);
                                    }
                                    echo $questname;
                                    
                                    echo ".php\" ' target='_blank'>" . $questchainLine["quest"] . "</a></td>";

                                    echo "<td class=\"quests_npcname_cell\">";
                                    echo "<a href='";
                                    
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */   
                                    $npcName = $questchainLine["npc"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);

                                    echo "' target='_blank'>" . $questchainLine["npc"] . "</a>";
                                    echo "</td>";
                                echo "</tr>";
                
                            }
                        
                        ?>
                    
                    </table>

					<br>
					<br>
                    <h3>Joining the Black Flame</h3>
  				
                    <table class="quests_main_table sortable hovableTable">
                    
                        <tr id="quests_main_table_header">
                            <th>Order</th>
                            <th>Quest</th>
                            <th>NPC</th>
                        </tr>
                    
                        <!-- Quests Tabelle füllen -->
                        <?php
                                    
                            $getQuestChainTable =   "SELECT ordering, quest, npc
											         FROM questchains
                                                     WHERE questchain = 'Black Flame'
                                                     ORDER BY ordering;";
                            $questchainTable = $mysqli->query($getQuestChainTable) or die($mysqli->error);			
                            
                            while($questchainLine = $questchainTable->fetch_array()) {
                
                                echo "<tr>";
                                    echo "<td>" . $questchainLine['ordering'] . "</td>";

                                    echo "<td><a href=\"/quests/details/";
                                    
                                    /* Replace the spaces in the URL with dots. */
                                    $questname = $questchainLine["quest"];
                                    while(strpos($questname, " ")) {
                                        $posOfSpace = strpos($questname, " ");
                                        echo substr($questname, 0, $posOfSpace) . "-";
                                        $questname = substr($questname, $posOfSpace + 1);
                                    }
                                    echo $questname;
                                    
                                    echo ".php\">" . $questchainLine["quest"] . "</a></td>";

                                    echo "<td class=\"quests_npcname_cell\">";
                                    echo "<a href='";
                                    
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */   
                                    $npcName = $questchainLine["npc"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);

                                    echo "' target='_blank'>" . $questchainLine["npc"] . "</a>";
                                    echo "</td>";
                                echo "</tr>";
                
                            }
                        
                        ?>
                    
                    </table>


                    </div>
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


