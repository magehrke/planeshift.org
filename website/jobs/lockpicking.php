<!doctype html>
<html>
<head>
	<title>Lockpicking</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/lockpicking.css" type="text/css" rel="stylesheet" />

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


									<div class="lockpicking_main_section">
										<h1>Lockpicking</h1>

										<p class="skill_description">
											There are cases in which you will need to open a lock
											without breaking it and in most cases you will need to
											do it fast and without noise.
										</p>

										<ul>
											<li>You train lockpicking by locking and unlocking crates or chests</li>
											<li>Different chests open at different experience levels</li>
											<li>The time you need to unlock/lock a chest is always 90 seconds</li>
											<li>The XP you get decreases (by 2 or 3 XP per level) as your skill increases</li>
											<li>More difficult chests give more XP</li>
											<li>It is possible to attempt unlocking a chest which you are not yet able to open</li>
											<li>However, attempting to unlock a chest will give you less XP than successfully opening the most difficult chest that you are able to</li>
											<li>For example, at level 30 you get 90 XP for unlocking a metal chest, but only 75 XP for attempting to unlock a wide chest</li>
											<li>If you want to get the items inside a chest, pick up the unlocked chest and eat it (by dropping it on your chracter)</li>
											<li>You can find crates and chests lying around in Yliakum</li>
											<li>Crates and chests respwan after some time</li>
										</ul>




	                	<table class="lockpicking_main_table sortable hovableTable">

	                        <tr id="lockpicking_main_table_header">
	                            <th>Item</th>
	                            <th>Level</th>
	                            <th>Last Check</th>
	                        </tr>


	                        <!-- Fill lockpicking table -->
	                        <?php
	                            $query = "SELECT DISTINCT itemname, level, checkup FROM lockpicking ORDER BY level";
	                            $get_lockpicking = $mysqli->query($query) or die(mysql_error());

	                            while($lockpicking = $get_lockpicking->fetch_array()) {

																echo "<tr>";
																	echo "<td>" . "<img src='/images/icons/" . strtolower(substr($lockpicking["itemname"], strpos($lockpicking["itemname"], ' ') + 1)) . "_icon.png'/> ";
								                                    echo $lockpicking["itemname"] . "</td>";
																	echo "<td>" . $lockpicking["level"] . "</td>";
																	echo "<td>" . $lockpicking["checkup"] . "</td>";
																echo "</tr>";
	                            }
	                        ?>

	                    </table>
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
