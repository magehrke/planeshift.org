<!doctype html>
<html>
<head>
	<title>Armor Making</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/mining.css" type="text/css" rel="stylesheet" />

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
                    For making chain mail, ha and helm you need blacksmithing and armor making<br>

                    chainmail can be done from lvl 20 in armor making, ha from lvl 45 or 50.

                    Books:1 for ma, 1 for ha, 1 for enchanting armor ("Enchanting Armor"), 1 helm book<br>
                    Helm Book: Quest from Kelicha. Need: 10 Maulbernaut talons/claws

                    fastest way to rank armor making is going to the leather guy by norht gate and get helm parts once you have the leather working and la book. Home you got your helm making book.

                    enchanting armor, enchanting weapon and helm making book look like sword making book.


                    
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