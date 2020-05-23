<!doctype html>
<html>
<head>
	<title></title>
    
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
                    Zif thinks there are 3 books, in the materials are 4 book cover icons
                    the books are basic bow making, advanced bow making and expert bow makinh
                    Jjousk Carryt does basic and 1st quest and 2nd quest - advanced bow makingced bow
                    Jjousk Carryt does basic quest and 2nd quest - advanced bow making
                    1st quest is called " Learning Bow making" with Jjousk

                    Quest for basic book: http://www.planeshift.org/quests/details/learning-Bow-Making.php
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