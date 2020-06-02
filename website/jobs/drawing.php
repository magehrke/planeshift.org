<!doctype html>
<html>
<head>
	<title>Drawing</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/drawing.css" type="text/css" rel="stylesheet" />

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
									<div class="drawing_content_main_div">
									<h1>Drawing</h1>

									<p style="font-style: italic;">Ability to draw and to create maps with greater complexity and detail.</p>

									<p>You can train drawing by simply buying your expertice.
									Each level costs 1000 tria, so in total you need 200,000.</p>

									<table class="drawing_main_table sortable hovableTable">
										<tr>
											<th>From</th>
											<th>To</th>
											<th>Trainer</th>
										</tr>

										<?php
											$query = "SELECT lvlFrom, lvlTo, npc FROM drawing
																ORDER BY lvlFrom ASC";
											$get_drawing = $mysqli->query($query) or die(mysql_error());


											while($drawing = $get_drawing->fetch_array()) {

												echo "<tr><td>" . $drawing["lvlFrom"];
												echo "</td><td>" . $drawing["lvlTo"];
												echo "</td><td>";

												echo "<a href='";

												/* Printing the NPC with a link to the Map */
												/* The Variable $npcName has to be set !!! */
												$npcName = $drawing["npc"];
												$path = $_SERVER['DOCUMENT_ROOT'];
												$path .= "/includes/npc_link_to_map.inc.php";
												include($path);
												echo "'>" . $drawing["npc"] . "</a>";

												echo "</td></tr>";
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
