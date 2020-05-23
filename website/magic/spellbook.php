<!doctype html>
<html>
<head>
	<title>Spellbook</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/spellbook.css" type="text/css" rel="stylesheet" />
    
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

                	<table class="spellbook_main_table sortable hovableTable">
                    
                        <tr>
                            <th>Spellname</th>
                            <th>Glyphs</th>
                            <th>Realm</th>
                            <th>Magic Way</th>
                        </tr>
                    
  				
                        <!-- Spellbook Tabelle füllen -->
                        <?php
                                    
                            $abfrage = "SELECT name, way, realm, checkup FROM spellbook;";
                            $get_spellbook = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($spell = $get_spellbook->fetch_array()) {

								echo "<tr>";
									echo "<td>" . "<img src='/images/icons/spells/spell_" . str_replace(' ', '_', strtolower($spell["name"])) . "_icon.png'/> " . $spell["name"] . "</td>";
                                   
                                    // Get the glyphs out of the spellGlyphs table
                                    // Get the right ordering, thats why we loop
                                    // and count k from 0 until loop breaks
                                    $k = 0;    

                                    $abfrage_glyphs = "SELECT glyph FROM spellGlyphs WHERE spell = '" . $spell["name"] . "' AND ordering = " . $k . ";";
                                    $get_glyphs = $mysqli->query($abfrage_glyphs) or die(mysql_error());

                                    while($glyph = $get_glyphs->fetch_array()) {
                                        // Get first glyph seperate for ","
                                        if($k == 0) {
                                            
                                            $glyphs_to_print = "<img src='/images/icons/" . strtolower($glyph["glyph"]) . "_glyph_icon.png'/> ";
                                            $glyphs_to_print .= $glyph["glyph"];
                                        } else {
                                            $glyphs_to_print .= ", " . "<img src='/images/icons/" . strtolower($glyph["glyph"]) . "_glyph_icon.png'/> ";
                                            $glyphs_to_print .= $glyph["glyph"];
                                        }

                                        $k += 1;

                                        $abfrage_glyphs = "SELECT glyph FROM spellGlyphs WHERE spell = '" . $spell["name"] . "' AND ordering = " . $k . ";";
                                        $get_glyphs = $mysqli->query($abfrage_glyphs) or die(mysql_error());

                                    }

                                    echo "<td>" . $glyphs_to_print . "</td>";
                                    echo "<td>" . $spell["realm"] . "</td>";
									echo "<td>" . "<img src='/images/icons/waybook_" . str_replace(' ', '_', strtolower($spell["way"])) . "_icon.png'/> " . $spell["way"] . "</td>";

								echo "</tr>";
								
                            }
							
						/* close connection */
						$mysqli->close();
                        
                        ?>
                    
                    </table>

                    <!--
                    <fieldset style='margin:0px 0px 10px 0px;'>
                    <legend>Help for validation!</legend>

                        <p>The following pictures could not be resolved to any spell yet. </br>Either these spells are not implemented yet or they have been overseen. </br>If any one knows to which spells these pictures belong, please contact us.</p>

                        <img src='/images/icons/spells/a1.png' style='height:64px;'/>
                        <img src='/images/icons/spells/a2.png' style='height:64px;'/>
                        <img src='/images/icons/spells/a3.png' style='height:64px;'/>
                        <img src='/images/icons/spells/a4.png' style='height:64px;'/>

                    </fieldset>
                    -->
                    
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


