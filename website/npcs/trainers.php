<!doctype html>
<html>
<head>
	<title>Trainers</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/trainers.css" type="text/css" rel="stylesheet" />  
    
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
                
                	<table class="trainers_main_table sortable hovableTable">
                		<tr id="trainers_main_table_header">
                        	<th>
                            	NPC
                            </th>
                            <th>
                            	Trains
                            </th>
                            <th>
                            	From
                            </th>
                            <th>
                            	To
                            </th>
                        </tr>
                        
                        <?php

							$trainers_order = "npc";
							echo(htmlspecialchars($_POST["trainers_order"]));
							
							/* Get all trainers from the database table */
							$all_trainers = $mysqli->query("SELECT * FROM trainers") or die($mysqli->error);
							
							/* Print all trainers from the database table into xhtml */
							while($trainer = $all_trainers->fetch_array()) {

								/* We need the NPC Location to create the Link behind the NPCs */
								/* It goes to the planeshift.it site, where the location is needed*/
								$get_npc_location = $mysqli->query("SELECT area FROM npcs WHERE name = '" . $trainer["name"] . "'") or die(mysql_error());

								/* Get the first NPC location. This is where the Link of the NPC will go to. */
								$npc_location = $get_npc_location->fetch_array();


								echo("
								<tr>

									<td class=\"npcs_npcname_cell\">");
										
									echo "<a href='";
									
									/* Print the link to the map */
									/* The Variable $npcName has to be set !!! */	
									$npcName = $trainer["name"];
							        $path = $_SERVER['DOCUMENT_ROOT'];
							        $path .= "/includes/npc_link_to_map.inc.php";
							        include($path);

							        echo "' target='_blank'>" . $trainer["name"] . "</a>";
									echo "</td>";

									echo("
									<td>" . $trainer["skill"] . "</td>
									<td>" . $trainer["lower_bound"] . "</td>
									<td>" . $trainer["upper_bound"] . "</td>
								</tr>");
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