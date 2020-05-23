<!doctype html>
<html>
<head>
	<title>Metallurgy</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/metallurgy.css" type="text/css" rel="stylesheet" />
    
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
                
                	<table class="metallurgy_main_table sortable hovableTable">


                        <tr>
                            <th>Level</th>
                            <th id="met_craftcolumn">Craft</th>
                            <th>Into</th>
                        </tr>
                    
                
                        <!-- Metallurgy Tabelle füllen -->
                        <?php
                        
                                    
                            $abfrage = "SELECT quantity AS 'quantityMet', material AS 'materialMet', level AS 'levelMet' FROM metallurgy ORDER BY level";
                            $get_metallurgy = $mysqli->query($abfrage) or die(mysql_error());          
                            
                            // To create the recipe String, which things have to be crafted together
                            while($metallurgy = $get_metallurgy->fetch_array()) {

                                $abfrageMetRes = "SELECT quantity AS 'quantityResource', resource, recipe 
                                                    FROM metallurgyResources WHERE material = '" . $metallurgy["materialMet"] . "' ORDER BY recipe";
                                $get_metRes = $mysqli->query($abfrageMetRes) or die(mysql_error());   

                                $recipeString = "";
                                $recipeCounter = 1;


                                $metRes = $get_metRes->fetch_array();
                                $recipeString .= "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($metRes['resource'])) 
                                                . "_icon.png'/> " . " " . $metRes['quantityResource'] . " " . $metRes['resource'];

                                while($metRes = $get_metRes->fetch_array()) {
                                    if($metRes['recipe'] > $recipeCounter) {
                                        $recipeCounter += 1;
                                        $recipeString .= "<br>";
                                    } else {
                                        $recipeString .= " + ";
                                    }

                                    $recipeString .= "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($metRes['resource'])) 
                                                . "_icon.png'/> " . " " . $metRes['quantityResource'] . " " . $metRes['resource'];
                                }



                                // Insert the information into the table
                                echo "<tr>";
                                    echo "<td>" . $metallurgy["levelMet"] . "</td>";
                                    echo "<td>" . $recipeString . "</td>";
                                    echo "<td>" . "<img src='/images/icons/" 
                                                . str_replace(' ', '_', strtolower($metallurgy["materialMet"])) 
                                                . "_icon.png'/> " . " " . $metallurgy["quantityMet"]  
                                                . " " . $metallurgy["materialMet"] . "</td>";
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


