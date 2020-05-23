<!doctype html>
<html>
<head>
	<title>Bronze Door Road 1</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/maps.css" type="text/css" rel="stylesheet" />

    <script>
        var scale = 188, 
        offsetX = 95000, 
        offsetY = 65000, 
        map = "/images/maps/bdroad1.png", 
        rot = "ccw", 
        layers = 1,
        hiddenLayers = [];
    </script>

    <!-- Library for JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- script for displaying the canvas (uses JQuery) -->
    <script src="/js/maps.js"></script>
    
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
                    <table class="maps_main_table">
                        <!-- Section of the map -->
                        <tr>
                            <td class="map_section">
                                <h1>Map of Bronze Door Road 1</h1>
                                <div id="myWrapper">
                                    <canvas id="myCanvas" width="1024" height="768">
                                        Your browser does not support canvas.
                                    </canvas>
                                </div>
                                <div id="details_wrapper">
                                    <canvas id="details_canvas" width="720" height="530" >
                                        Your browser does not support canvas.
                                    </canvas>
                                </div>
                            </td>
                            <!-- Section of the npcs names -->
                            <td class="info_section">

                                <!-- Extract the npcs (name and postion) from database for Bronze Door Road 1-->
                                <!-- In the end it should look like:
                                    <a href="#Boroz_Tolka" class="show" data-where="-34.88 24.05 -104.78" id="pin_Boroz_Tolka">Boroz Tolka</a> (1) -->
                                <?php

                                    $area = "Bronze Door Road 1";

                                    $path = $_SERVER['DOCUMENT_ROOT'];
                                    $path .= "/includes/maps_extract_info.inc.php";
                                    include($path);
                                ?>
                            </td>
                        </tr>
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