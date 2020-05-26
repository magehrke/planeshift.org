<!doctype html>
<html>
<head>
	<title>Enchanting Items</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/gem-enchanting.css" type="text/css" rel="stylesheet" />
    <link href="/styles/descriptions.css" type="text/css" rel="stylesheet" />

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
                    <h1 class="heading">Enchanting Items</h1>
                    <div style="margin-left: 22px">
										<p>
											Not much to see here, because I don't really know anything
											about enchanting weapons. </br>If someone would like to provide
											information, please write us an e-mail.</br></br>
											However, a long time ago, someone shared
											<a href="enchanting-items.htm">this</a> beautiful
											table with me, which gives </br>an overview about all the
											enchantment effects for knives & daggers, armor and jewellery.
										</p>
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
