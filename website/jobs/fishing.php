<!doctype html>
<html>
<head>
	<title>Fishing</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/fishing.css" type="text/css" rel="stylesheet" />

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
									<div class="fishing_content_main_div">
									<h1>Fishing</h1>

									<p style="font-style: italic;">
										Trains on how to catch fish, what pole or bait to use,
										what time of day makes for the best catch.
									</p>

									<li>The higher your level, the more plants you get. Up to level 40 you get 1. From 40-60 two. </li>
									<li>Starting at 40, every 20 levels, the quantity is increased by 1.</li>

									<p>We don't know much about fishing and are looking for someone to share his or her knowledge.</p>

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
