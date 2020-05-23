<!doctype html>
<html>
<head>
	<title>Glyphs</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/glyphs.css" type="text/css" rel="stylesheet" />
    
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
                
                	<table class="glyphs_main_table sortable hovableTable">
                    
                        <tr>
                            <th style='min-width: 350px;'>Glyph</th>
                            <th style='min-width: 350px;'>Way</th>
                            <th>NPC's</th>
                        </tr>
                    
  				
                        <!-- NPCs Tabelle füllen -->
                        <?php
                                    
                            $abfrage = "SELECT name, way FROM glyphs";
                            $get_glyphs = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($glyphs = $get_glyphs->fetch_array()) {

								echo "<tr>";
									echo "<td>" . "<img src='/images/icons/" . strtolower($glyphs["name"]) . "_glyph_icon.png'/> ";
                                    echo $glyphs["name"] . "</td>";
									echo "<td>" . $glyphs["way"] . "</td>";

                                    $abfrage_glyphNpc = "SELECT npc FROM glyphNpc WHERE glyph = '" . $glyphs["name"] . "'";
                                    $get_glyphNpc = $mysqli->query($abfrage_glyphNpc) or die(mysql_error());  


                                    /* Save all date to echo in this variabls */
                                    /* Echo at the end */
                                    echo "<td>";

                                    /* Before the first entry shall not be a comma, so we need to have it seperated */
                                    $glyphNpc = $get_glyphNpc->fetch_array();

                                    echo "<a href='";
                                    
                                    /* Printing the NPC with a link to the Map */
                                    /* The Variable $npcName has to be set !!! */   
                                    $npcName = $glyphNpc["npc"];
                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/npc_link_to_map.inc.php";
                                    include($path);

                                    echo "' target='_blank'>" . $glyphNpc["npc"] . "</a>";

                                    /* For all the next npcs in this while loop we put a comma in front */
                                    while($glyphNpc = $get_glyphNpc->fetch_array()) {

                                        
                                        /* Now we can put a comma in front */
                                        echo ", <a href='";
                                        
                                        /* Printing the NPC with a link to the Map */
                                        /* The Variable $npcName has to be set !!! */   
                                        $npcName = $glyphNpc["npc"];
                                        $path = $_SERVER['DOCUMENT_ROOT'];
                                        $path .= "/includes/npc_link_to_map.inc.php";
                                        include($path);

                                        echo "' target='_blank'>" . $glyphNpc["npc"] . "</a>";
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


