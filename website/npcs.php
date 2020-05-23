<!doctype html>
<html>
<head>
	<title>NPC&apos;s</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/npcs.css" type="text/css" rel="stylesheet" />

    
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
                
                	<table class="npcs_main_table">
                    
                        <!-- NPCs Tabelle füllen -->
                        <?php

                            /*
                             * Get the total number of npc lines in our fill database file.
                             * 1 Line = 1 npc count here = all npcs with the same name
                             * at one location (e.g. all Gladiators in Arena = 1 NPC).
                             */
                            $abfrage = "SELECT name
                            			FROM npcs";
                            $get_num_of_npcs = $mysqli->query($abfrage) or die(mysql_error());
                            $num_of_npcs = $get_num_of_npcs->num_rows;

                            /* Set title with npc count */
                            echo "<h1>NPC's (#" . $num_of_npcs . ")</h1>";
                                

                            /* This is the request we will use for the table */
                            $abfrage = "SELECT DISTINCT name, left(name, 1) AS Letter 
                            			FROM npcs
                            			ORDER BY Letter ASC";
                            $get_npc_name = $mysqli->query($abfrage) or die(mysql_error());	

                            /*
                             * We want to split the T section. So we need to know when the
                             * half of the entries have been written. First we search for
                             * all NPCs which start with T and then we count them.
                             */
                            $request_T = "SELECT DISTINCT name
                            			FROM npcs
                            			WHERE name 
                            			LIKE 'T%'";
                            $get_amount_of_T = $mysqli->query($request_T) or die(mysql_error());	
                            $half_amount_of_T = round(($get_amount_of_T->num_rows) / 2 + 2);
                            
                            /* In this variable do we save the starting Letter of the last
                             * NPC, so we can check, if we have a new starting Letter and
                             * if so, we can make a new section */
                            $oldLetter = "A";
							
							// We count the TD, cause we want to add a new row every
                           	// X TD's.
							$counterTDsections = 1;

							// We count how many NPCs with T we already inserted,
							// because we want to split the section after the half.
							$count_T = 0;
							$half_of_T = false;

							echo "<tr>";
							echo "<td>";
							echo "<h3>A</h3>";

							echo "<nav>";
							echo "<ul>";

                            while($npc_name = $get_npc_name->fetch_array()) {

                            	// Do we start a new column with new first letter names?
                            	// Also we dont want a new column at Z, cause we put Y/Z together
                            	// Also we dont want a new column at Q, cause we put P/Q together
                            	if($npc_name["Letter"] != $oldLetter 
                            		&& $npc_name["Letter"] != "Z"
                            		&& $npc_name["Letter"] != "Q") {
                            		$oldLetter = $npc_name["Letter"];

                            		echo "</ul>";
                            		echo "</nav>";
                            		echo "</td>";
                            		// Do we even start a new row, because in one row shall
                            		// only be X sections.
                            		if(($counterTDsections % 5) == 0) {
                            			echo "</tr><tr>";
                            		}
									$counterTDsections += 1;
									echo "<td>";
									echo "<h3>";

									// We put section Y and Z together
									if($npc_name["Letter"] == "Y") {
										echo "Y/Z";
									// We have section P and Q together
									} elseif($npc_name["Letter"] == "P") {
										echo "P/Q";
									// We have 2 T section, so we want T1
									} elseif($npc_name["Letter"] == "T") {
										echo "T1";
									} else {
										echo $npc_name["Letter"];
									}
									echo "</h3>";
									echo "<nav>";
									echo "<ul>";

								// If we have the half of the NPC who start with T
								// we create a new section with the 2nd half.
                            	} elseif($count_T == $half_amount_of_T) {
                            		echo "</ul>";
                            		echo "</nav>";
                            		echo "</td>";
                            		// Do we even start a new row, because in one row shall
                            		// only be X sections.
                            		if(($counterTDsections % 5) == 0) {
                            			echo "</tr><tr>";
                            		}
									$counterTDsections += 1;
									echo "<td>";
									echo "<h3>";
									echo "T2";
									echo "</h3>";
									echo "<nav>";
									echo "<ul>";
                            	}

                            	// We always count 1 to the counter if we have inserted
                            	// an npc with T, so we know, when we have inserted half
                            	// of the npcs, because we compare this variable
                            	// the the total amount of NPC who start with T.
                            	if($npc_name["Letter"] == "T") {
                            		$count_T += 1;
                            	}

                            	// ####### START REAL OUTPUT #########

								$get_npc_location = $mysqli->query("SELECT area, quantity FROM npcs WHERE name = '" . $npc_name["name"] . "'") or die(mysql_error());

								/* Get the first NPC location. This is where the Link of the NPC will go to. */
								$npc_location = $get_npc_location->fetch_array();

								echo "<li>";

								/* If there is only one kind of this NPC, we can put a Link behind the Name.
								Otherwise the person has to click on the links behind the areas. */
								if($get_npc_location->num_rows == 1) {

									echo "<a href='";
									
									/* Printing the NPC with a link to the Map */
									/* The Variable $npcName has to be set !!! */	
									$npcName = $npc_name["name"];
							        $path = $_SERVER['DOCUMENT_ROOT'];
							        $path .= "/includes/npc_link_to_map.inc.php";
							        include($path);

							        echo "'>" . $npc_name["name"] . "</a>";

								} else {
									echo "<span class=\"npc_name\">" . $npc_name["name"] . ":</span>";
								

								echo "<br>";

								
									/* Before the first entry shall not be a break, so we need to have it seperated */
									echo "<a href=\"/maps/" 
										. strtolower(str_replace(' ', '-', $npc_location["area"]))
										. ".php#"
										. str_replace(' ', '_', $npc_name["name"])
										. "\">" 
										. $npc_location["area"] 
										. " (" 
										. $npc_location["quantity"] . ")</a>";
									
									/* Now we can put a break in front */
									while($npc_location = $get_npc_location->fetch_array()) {
										echo "<br>";

										echo "<a href=\"/maps/" 
											. strtolower(str_replace(' ', '-', $npc_location["area"]))
											. ".php#"
											. str_replace(' ', '_', $npc_name["name"])
											. "\">" 
											. $npc_location["area"] 
											. " (" 
											. $npc_location["quantity"] . ")</a>";

									}
								}
								echo "</li>";
									
                            } // End while loop.
                            echo "</nav>";
                            echo "</td>";
                            echo "</tr>";
                        
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


