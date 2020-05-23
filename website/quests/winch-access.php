<!doctype html>
<html>
<head>
	<title>Winch Access</title>
    
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


                    <!-- Dishonest WINCH ACCESS -->
                    <h1>Dishonest Winch Access</h1>
                    <h3>(via Gronk Merchant Syndicate)</h3>
                    <ol>
                        <li>Requirements: 1000 Tria (if you don&apos;t press &apos;/die&apos;), 12 rat hides and 5 sabres (4, if you take the sabre from Grok, the rest can be bought from Harnquist).</li>
                        <li>Speed: This is the fastest way to get Winch Access (approx. 2 hours).</li>
                        <li>Locations: You will need to visit Hydlaa Plaza, East Hydlaa, Hydlaa Dungeons (for Zak), Ojaveda and BD Road 1 (for Grok).</li>
                        <li>Tipp: The hardest quest is the second one &apos;Emporium Raid&apos; due to Marangma in the dungeons killing low level characters. You might want to enlist a friend to kill it for you</li>
                        <li>Tipp: If you are a brand new character you can type &apos;/die&apos; to get back to Hydlaa Plaza quickly. You will not need the 1000 Tria if you decide to do this.</li>
                    </ol>
                
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
                                                     WHERE questchain = 'Winch Access Dishonest'
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



                    <!-- Honest Way -->
                    <h1>Honest Winch Access</h1>
                    <h3>(via Mikana Merchant Syndicate)</h3>

                    <ol>
                        <li>Requirements: 12 rat hides, 1 Red Liquor Mug (can be bought at the tavern), 5 sabres (can be bought from Harnquist)</li>
                        <li>Tipp: Buy the Red Liquor Mug, before you go to the Bronze Doors Fortress.</li>
                        <li>Note: Grok&apos;s Delivery for Durok can be done after Boralis needs Neyehbes or you should do it sometime before you do Save Edrich Sultov&apos;s Reputation. </li>
                        <li><i>Note: After the 12. quest (Jirosh&apos;s Stolen Statue), you can also gain dishonest winch access by doing the last 3 quests of the dishonest winch access (starting with Thorian Gronk).</i></li>
                    </ol>

  				
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
                                                     WHERE questchain = 'Winch Access Honest'
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


                    <p>From what we have been told, all previous ways to get winch access are no longer functional.</p>

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


