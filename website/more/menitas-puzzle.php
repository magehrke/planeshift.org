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

                        <p>Menitas Puzzle is difficult. I mapped all rooms and doors I went through.
													But eventually got outside. </br>
													There seems to be no way out. You just get released at some point. Not sure what triggers this. </br>
													Maybe I have seen all rooms, maybe after a period of time and talking to everyone...
													Who knows?</p>


												<img width='800px' src='/images/menitas-puzzle.png' />

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
