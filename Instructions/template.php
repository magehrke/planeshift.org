<!doctype html>
<html>
<head>
	<title>SITE NAME</title>

	<?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/html_header.php";
      include($path);
  ?>

	<link href="/styles/STYLESHEETNAME.css" type="text/css" rel="stylesheet" />

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

                <!-- content section -->
                <div id="content_main_container">

									<h1>SITE NAME<h1>


									PUT THE CODE FOR THE PAGE IN HERE


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
