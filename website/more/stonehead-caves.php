<!doctype html>
<html>
<head>
	<title>Stonehead Caves</title>

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

                        <h2>Stonehead Caves Overview</h2>

												<p> The stonehead caves have several commonly used names: skull cave,
													grendol cave or howling well. </br>The entrance is located on bronze door
													road 1 on the <a href="http://planeshift.org/maps/bronze-door-road-1.php#stonehead_caves">
													left side</a>.</p>

												<img src='/images/stonehead-caves-1.png' />

                        <h2>Nefas Entrance</h2>

												<p>The solution for Nefas Entrance in the skull cave.</p>
												<img src='/images/stonehead-caves-nefasentrance.jpg' />

												<h2>More Information</h2>
												<img src='/images/stonehead-caves-2.jpg' />

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
