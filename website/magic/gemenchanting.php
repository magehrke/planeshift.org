<!doctype html>
<html>
<head>
	<title>Gem Enchanting</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/gemenchanting.css" type="text/css" rel="stylesheet" />
    
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

                	<table class="gemenchanting_main_table sortable hovableTable">

                        <tr>
                            <th>Way</th>
                            <th>Glyph</th>
                            <th>Gem</th>
                            <th>Result</th>
                            <th>Class</th>
                            <th>House</th>
                        </tr>

                        <?php
                            $abfrage_gemEnch = "SELECT way, gem, glyph, result, class, house FROM gemEnchanting;";
                            $get_gemEnch = $mysqli->query($abfrage_gemEnch) or die(mysql_error());

                            while($gemEnch = $get_gemEnch->fetch_array()) {
                                echo "<tr>
                                    <td> <img src='/images/icons/waybook_" 
                                        . strtolower($gemEnch['way']) 
                                        . "_way_icon.png'/> " 
                                        . $gemEnch['way'] 
                                        . "</td>
                                    <td> <img src='/images/icons/" 
                                        . strtolower($gemEnch["glyph"]) 
                                        . "_glyph_icon.png'/> "
                                        . $gemEnch['glyph']
                                        . "</td>
                                    <td> <img src='/images/icons/crystal_" 
                                        . strtolower($gemEnch['gem'])
                                        . "_icon.png'/> "
                                        . $gemEnch['gem']
                                        . "</td>
                                    <td>" . $gemEnch['result'] . "</td>
                                    <td>" . $gemEnch['class'] . "</td>
                                    <td>" . $gemEnch['house'] . "</td>
                                </tr>
                                ";
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


