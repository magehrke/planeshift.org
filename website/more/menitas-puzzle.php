<!doctype html>
<html>
<head>
	<title>Menita&apos;s Puzzle</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/lavacave.css" type="text/css" rel="stylesheet" />

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

                    <div id="lavacave_content_main_div">
                        <h2>Menita&apos;s Puzzle</h2>
                        <p>Menitas Puzzle is difficult. The first map shows all rooms and where they lead:</p>
			<img width='800px' src='/images/maps/Menitas-Maze.jpg' />
                        <p>The second map shows the direct way out:</p>
			<img width='800px' src='/images/maps/menitas_puzzle.png' />
                    </div>
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
