<!doctype html>
<html>
<head>
	<title>Items</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/items.css" type="text/css" rel="stylesheet" />
    
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
                
                	<table class="items_main_table sortable hovableTable">
                    
                        <tr>
                            <th>Item</th>
                            <th>Category</th>
                            <th>Merchant</th>
                        </tr>
                    
  				
                        <!-- NPCs Tabelle füllen -->
                        <?php      
                            $abfrage = "SELECT DISTINCT name, category FROM items";
                            $get_item_name_category = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($item_name_category = $get_item_name_category->fetch_array()) {

								echo "<tr>";
									echo "<td><img src='/images/icons/" . str_replace(' ', '_', strtolower($item_name_category["name"])) . "_icon.png' /> ";
									echo "<span id='" . str_replace(' ', '-', $item_name_category["name"])
										. "'>" . $item_name_category["name"] . "</span></td>";
									echo "<td>" . $item_name_category["category"] . "</td>";
									
									echo "<td>";
									
									$get_item = $mysqli->query("SELECT npc, price, checkup FROM items WHERE name = '" . $item_name_category["name"] . "'") or die(mysql_error());
									
										/* After the first entry shall not be a <br>, so we need to have it seperated */
										$item = $get_item->fetch_array();

										$get_npc_location = $mysqli->query("SELECT area FROM npcs WHERE name = '" . $item["npc"] . "'") or die(mysql_error());
                                        $npc_location = $get_npc_location->fetch_array();

                                        
                                        /* Here we dont want a <br> in front. */
	                                    echo "<a href='";
										
										/* Print the link to the map */
										/* The Variable $npcName has to be set !!! */	
										$npcName = $item["npc"];
								        $path = $_SERVER['DOCUMENT_ROOT'];
								        $path .= "/includes/npc_link_to_map.inc.php";
								        include($path);

								        echo "' target='_blank'>" . $item["npc"] . " (" . $item["price"] . " Tria)</a>";

										/* Now we can put a <br> in front */
										while($item = $get_item->fetch_array()) {

	                                        $get_npc_location = $mysqli->query("SELECT area FROM npcs WHERE name = '" . $item["npc"] . "'") or die(mysql_error());
	                                        $npc_location = $get_npc_location->fetch_array();


		                                    echo "<br>";
		                                    /* Here we dont want a <br> in front. */
		                                    echo "<a href='";
											
											/* Print the link to the map */
											/* The Variable $npcName has to be set !!! */	
											$npcName = $item["npc"];
									        $path = $_SERVER['DOCUMENT_ROOT'];
									        $path .= "/includes/npc_link_to_map.inc.php";
									        include($path);

									        echo "' target='_blank'>" . $item["npc"] . " (" . $item["price"] . " Tria)</a>";

										}
									
									echo "</td>";
									
									
								echo "</tr>";
								
                            }
							
						/* close connection */
						$mysqli->close();
                        
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


