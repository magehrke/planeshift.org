<!doctype html>
<html>
<head>
	<title>Harvesting</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/harvesting.css" type="text/css" rel="stylesheet" />

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

                	<div id="content_main_container">
				<div class="harvesting_content_main_div">
					<h1>Harvesting</h1>
					<p style="font-style: italic;">Identifying and collecting various plants.</p>
					<p>General information:
					<ul>
						<li>For harvesting, you solely need a
						<?php
						echo "<a href='";
						/* Printing the Item with a link to the item */
						/* The Variable $itemName has to be set !!! */
						$itemName = "sickle";
						$path = $_SERVER['DOCUMENT_ROOT'];
						$path .= "/includes/link_to_item.inc.php";
						include($path);
						echo "'>sickle</a>";
						?>
						and a place to harvest.
						</li>
						<li>Take the sickle in your right hand, go to a place and type '/harvest' in the chat window.</li>
						<li><i>Tipp:</i> Set a shortcut to the command '/harvest' in the shortcut window.</li>
						<li>You can find a list of places further down this page.</li>
						<li>Unlike other jobs, for harvesting, no books are required.</li>
						<li>You can boost your harvesting skill by wearing 'chaos' jewellery (max 32 lvl).</li>
						 <li>Use the <i>repeatable quest</i>
							<?php
							echo "<a href='";
							/* Printing the quest with a link to the quest */
							/* The Variable $questName has to be set !!! */
							$questName = "Kaiman Jilatt Needs Plants Supplies";
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/link_to_quest.inc.php";
							include($path);
							echo "'>Kaiman Jilatt Needs Plants Supplies</a>";
						    ?>
						    to get easy training in Harvesting. Kaiman asks you to deliver Plants to a recipient which levels up your harvesting skill. The higher your current level, the more complicated the delivery becomes.
						</li>
						<li>The higher your level, the more plants you get. Up to level 40 you get 1. From 40-60 two. </li>
						<li>Starting at 40, every 20 levels, the quantity is increased by 1.</li>
					</ul>
					</p>


                	<!-- Content section -->
				</div>

				<table class='main_table sortable hovableTable'>
				<tr><th>Plant</th><th>Location</th></tr>
				<?php
				$q = "SELECT * FROM mapsItems WHERE category like 'Plants%' ORDER BY name,area";
				$plants = $mysqli->query($q) or die(mysql_error());
				while($p = $plants->fetch_array())
				{
					echo "<tr>\n";
						echo "<td><img src='/images/icons/"
						. str_replace(' ', '_', strtolower($p['name']))
						. "_icon.png'/> " . " " . $p['name'] . "</td>";
						echo "<td><a href='";
						$itemName = $p["name"];
						$itemLocation = $p["area"];
						$path = $_SERVER['DOCUMENT_ROOT'];
						$path .= "/includes/item_link_to_map.inc.php";
						include($path);
						echo "'>" . $p["area"] . "</a></td>";
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
