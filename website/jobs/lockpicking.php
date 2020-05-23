<!doctype html>
<html>
<head>
	<title>Lockpicking</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/lockpicking.css" type="text/css" rel="stylesheet" />
    
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
                
                	<table class="lockpicking_main_table sortable hovableTable">
                    
                        <tr id="lockpicking_main_table_header">
                            <th>Item</th>
                            <th>Level</th>
                            <th>Last Check</th>
                        </tr>
                    
  				
                        <!-- Lockpicking Tabelle füllen -->
                        <?php
                        
                                    
                            $abfrage = "SELECT DISTINCT itemname, level, checkup FROM lockpicking ORDER BY level";
                            $get_lockpicking = $mysqli->query($abfrage) or die(mysql_error());			
                            
							
                            while($lockpicking = $get_lockpicking->fetch_array()) {

								echo "<tr>";
									echo "<td>" . "<img src='/images/icons/" . strtolower(substr($lockpicking["itemname"], strpos($lockpicking["itemname"], ' ') + 1)) . "_icon.png'/> ";
                                    echo $lockpicking["itemname"] . "</td>";
									echo "<td>" . $lockpicking["level"] . "</td>";
									echo "<td>" . $lockpicking["checkup"] . "</td>";
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


