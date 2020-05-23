<!doctype html>
<html>
<head>
	<title>Repeatable Quests</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/repeatable-quests.css" type="text/css" rel="stylesheet" />
    
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
                
                	<table class="repeatable_quests_main_table sortable hovableTable">
                    
                        <tr>
                            <th>Skill</th>
                            <th>Category</th>
                            <th>NPC</th>
                            <th>Questname</th>
                        </tr>
                    
  				
                        <!-- insert rep. quests (those who give a level up) -->
                        <?php
                        
                                    
                            $abfrage = "SELECT skill, npc, category, quest FROM questsRepeatableLevelup";
                            $get_questsRepeatableLevelup = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($questsRepeatableLevelup = $get_questsRepeatableLevelup->fetch_array()) {

								echo "<tr>";
                                    echo "<td>" . $questsRepeatableLevelup["skill"] . "</td>";
									echo "<td>" . $questsRepeatableLevelup["category"] . "</td>";

                                    /* Save all date to echo in this variabls */
                                    /* Echo at the end */
                                    echo "<td>";

                                    echo "<a href='";
                                    
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */   
                                    $npcName = $questsRepeatableLevelup["npc"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);

                                    echo "' target='_blank'>" . $questsRepeatableLevelup["npc"] . "</a>";
									echo "</td>";


                                    echo "<td>" . $questsRepeatableLevelup["quest"] . "</td>";
 
								echo "</tr>";
								
                            }
                        
                        ?>
                    
                    </table>
                    <div class="repeatable_quest_table_description">
                        <p>
                            * All the quests displayed here will level up your skill by 1. <br>
                            ** Every quest will be available after being logged for 6 or 10 hours. <br><br>

                            *** The theory exists that skills which have at least 2 quests to improve can be done every 10 hours, the others every 6. <br>
                        </p>
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


