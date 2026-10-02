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
                        Fishing no longer works as it used to be, It is now a fully functional mini game where even the chat
                        is not seen in the screen, so the new way of fishing is given as follows:
						<ul>
                            <li>
                                For fishing, you solely need a
                                <?php
                                echo "<a href='";
                                /* Printing the Item with a link to the item */
                                /* The Variable $itemName has to be set !!! */
                                $itemName = "fishing rod";
                                $path = $_SERVER['DOCUMENT_ROOT'];
                                $path .= "/includes/link_to_item.inc.php";
                                include($path);
                                echo "'>fishing rod</a>";
                                ?>, a bait and a place to fish.
                            </li>
                            <li>
                                Take the fishing rod in your right hand and a 1
                                bait or stack of 65 baits go to a place and
                                right click on the water to start fishing mini
                                game.
                            </li>
                            <li>
                                As /fish does currently not work so no point of
                                making a shortcut for it.
                            </li>
                            <li>
                                You can find a list of places further down this page.
                            </li>
                            <li>
                                Unlike other jobs no books are required for
                                fishing, but you need a book for making the
                                baits.
                            </li>
                            <li>
                                The Baits book can be obtained from a quest,
                                starting with Burdess, the fishing merchant
                                lady in Hydlaa. Quest name "The Distractions of
                                a youth", a video for the quest is in this url
                                "https://www.youtube.com/watch?v=O-yEPVEdgVc"
                            </li>
                            <li>
                                You can boost your fishing skill by wearing
                                'Waterkin' jewellery (max 32 lvl).
                            </li>
                            <li>
                                Use the <i>repeatable quest</i>
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
                                to get easy training in fishing. Kzavu asks you
                                to bring him different amounts of certain
                                fishes to level up your fishing skill. The
                                higher your current level, the more complicated
                                the delivery becomes.
							</li>
                            <li>
                                Now your level does not give more fish as was
                                in earlier times. That is no 2 fishes in 1
                                catch at level 40 or 3 fishes in 1 catch at
                                level 60.
                            </li>
                            <li>
                                The fishes you will catch is determined by your
                                fishing level and the rarity of the bait
                                used.
                            </li>
                            <li>
                                When you start the fishing mini game, there
                                will be instructions on how to fish. 'c' to
                                throw the line and w,a,s,d to counter move the
                                blob.
                            </li>
                            <li>
                                The basic technique is after you throw the line
                                with c, 2 times the blob will glow with a
                                lighted circular ring, which will start with a
                                big circle and shrink to the blobs size and
                                vanish.. You have to click 'w' before the
                                lighted ring disappear, and quickly after that
                                follow the movement of the blob and counter its
                                movement to opposite direction with w,a,s,d,
                                known as counter keys in the fishing mini
                                game.
                            </li>
                            <li>
                                When you catch a fish, it will automatically go
                                into your inventory, and even while you are
                                holding the rod with the fish dangling, you can
                                press 'c' to again throw the line to catch
                                another fish
                            </li>
                            <li>
                                The fishing game will go on as long as you have
                                the Bait in your hand. then you can click the
                                big 'X' button on the top right of the game
                                screen.
                            </li>
                            <li>
                                1st important tip -- click the counter keys
                                only when the lighted ring glows in the
                                blob
                            </li>
                            <li>
                                2nd important tip -- Don't do any activity
                                other than fishing when you are holding the fishing
                                rod and are out of the fishing mini game. It will
                                make you bugged.
                            </li>
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
