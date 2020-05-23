<!doctype html>
<html>
<head>
	<title>Combat Moves</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/combat-moves.css" type="text/css" rel="stylesheet" />

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
                
                	<table class="combat_moves_main_table sortable hovableTable">
						
						<tr>
                            <th>Combat Move</th>
                            <th>Type</th>
                            <th>Quest</th>
                        </tr>

						<!-- Combat Move Tabelle füllen -->
                        <?php
                        
                                    
                            $abfrage = "SELECT DISTINCT reward, info, quest
                            			FROM questsRewards
                            			WHERE type = 'Combat Move'";
                            $get_combat_move = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($combat_move = $get_combat_move->fetch_array()) {

								echo "<tr>";
									echo "<td>" . $combat_move["reward"] . "</td>";
									echo "<td>" . $combat_move["info"] . "</td>";
										echo "<td>"
											. "<a href=\"/quests/details/" 
											. str_replace(' ', '-', $combat_move["quest"]) 
											. ".php\" target=\"_blank\">" 
											. $combat_move["quest"]
											. "</a>"
											. "</td>";
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


