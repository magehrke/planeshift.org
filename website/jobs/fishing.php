<!doctype html>
<html>
<head>
	<title>Fishing</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/table.css" type="text/css" rel="stylesheet" />

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
						<p style="font-style: italic;">Trains on how to catch fish, what pole or bait to use, what time of day makes for the best catch.</p>

						<p>General information:
						<ul>
							<li>For fishing, you solely need a
							<?php
							echo "<a href='";
							/* Printing the Item with a link to the item */
							/* The Variable $itemName has to be set !!! */
							$itemName = "fishing rod";
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/link_to_item.inc.php";
							include($path);
							echo "'>fishing rod</a>";
							?>
							and a place to fish.
							</li>
							<li>Take the fishing rod in your right hand, go to a place and type '/fish' in the chat window.</li>
							<li><i>Tipp:</i> Set a shortcut to the command '/fish' in the shortcut window.</li>
							<li>You can find a list of places further down this page.</li>
							<li>Unlike other jobs no books are required for fishing.</li>
							<li>You can boost your fishing skill by wearing 'Waterkin' jewellery (max 32 lvl).</li>
							<li>Use the <i>repeatable quest</i>
								<?php
								echo "<a href='";
								/* Printing the quest with a link to the quest */
								/* The Variable $questName has to be set !!! */
								$questName = "Fishing lessons for fish";
								$path = $_SERVER['DOCUMENT_ROOT'];
								$path .= "/includes/link_to_quest.inc.php";
								include($path);
								echo "'>Fishing lessons for fish</a>";
								?>
								to get easy training in fishing. Kzavu asks you to bring him different amounts of certain fishes to level up your fishing skill. The higher your current level, the more complicated the delivery becomes.
							</li>
							<li>The higher your level, the more fish you get. Up to level 40 you get 1. From 40-60 two. </li>
							<li>Starting at 40, every 20 levels, the quantity is increased by 1.</li>
						</ul>
					</div>

					<table class='main_table sortable hovableTable'>
				<tr><th>Plant</th><th>Location</th></tr>
				<?php
				$q = "SELECT * FROM mapsItems WHERE category='Fish' ORDER BY name,area";
				$fish = $mysqli->query($q) or die(mysql_error());
				while($f = $fish->fetch_array())
				{
					echo "<tr>\n";
						echo "<td><img src='/images/icons/"
						. str_replace(' ', '_', strtolower($f['name']))
						. "_icon.png'/> " . " " . $f['name'] . "</td>";
						echo "<td><a href='";
						$itemName = $f["name"];
						$itemLocation = $f["area"];
						$path = $_SERVER['DOCUMENT_ROOT'];
						$path .= "/includes/item_link_to_map.inc.php";
						include($path);
						echo "'>" . $f["area"] . "</a></td>";
					echo "</tr>\n";
				}
				?>
				</table>


					<!-- include Footer -->
					<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/footer.php";
					include($path);
					?>
				</div>
			</div>
		</td>
	</tr>
</table>

</body>
</html>
