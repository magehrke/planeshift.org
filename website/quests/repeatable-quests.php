<!doctype html>
<html>
<head>
	<title>Repeatable Quests</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/repeatable-quests.css" type="text/css" rel="stylesheet" />

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

                    <!-- LEVEL UP REPEATABLE QUESTS -->

										<h1>Repeatable Quests</h1>
										<h2 style="margin-left:15px">Skills</h2>

										<table class="repeatable_quests_main_table sortable hovableTable">

	                        <tr>
															<th>Skill</th>
															<th class="questnameColumn">Questname</th>
															<th class="npcColumn">NPC</th>
															<th class="rewardsColumn">Rewards</th>
	                        </tr>

	                        <?php
	                            $abfrage = "SELECT q.name, q.npc, r.reward
																					FROM quests q, questsRewards r
																					WHERE q.name = r.quest
																								AND q.repeatable = 1
																								AND r.type = 'Skill'
																					ORDER BY r.reward ASC";
	                            $get_quests = $mysqli->query($abfrage) or die(mysql_error());


															while($quests = $get_quests->fetch_array()) {
																echo "<tr>";

																	/* Insert skill */
																	echo "<td>";
																		echo $quests["reward"];
																	echo "</td>";

																	/* Insert questname */
																	echo "<td>";
																		echo "<a href='";
																		/* Printing the quest with a link to the quest */
																		/* The Variable $questName has to be set !!! */
																		$questName = $quests["name"];
																		$path = $_SERVER['DOCUMENT_ROOT'];
																		$path .= "/includes/link_to_quest.inc.php";
																		include($path);
																		echo "'>" . $quests["name"];
																		echo "</a>";
																	echo "</td>";

																	/* Insert NPC */
	                                echo "<td>";
	                                echo "<a href='";
	                                  /* Printing the NPC with a link to the Map */
	                                  /* The Variable $npcName has to be set !!! */
	                                  $npcName = $quests["npc"];
	                                  $path = $_SERVER['DOCUMENT_ROOT'];
	                                  $path .= "/includes/npc_link_to_map.inc.php";
	                                  include($path);
																	echo "' target='_blank'>" . $quests["npc"] . "</a>";
																	echo "</td>";


																	/* Insert Rewards */
																	echo "<td>";
																		/* Getting all the quest rewards */
																		/* The Variable $questname has to be set !!! */
																		$questname = $quests["name"];
																		$path = $_SERVER['DOCUMENT_ROOT'];
																		$path .= "/quests/quest-rewards.inc.php";
																		include($path);
																	echo "</td>";

																echo "</tr>";
	                            }
	                        ?>

	                    </table>

											<div class="repeatable_quest_table_description">
													<p>
															* All the quests displayed here will level up your skill by 1.
													</p>
											</div>

											<hr />

											<!-- OTHER REPEATABLE QUESTS -->

											<h2 style="margin-left:15px">Others</h2>

											<table class="repeatable_quests_main_table sortable hovableTable">

														<tr>
																<th style="min-width: 320px">Questname</th>
																<th style="min-width: 250px">NPC</th>
																<th>Rewards</th>
														</tr>

														<?php
																$query = "SELECT DISTINCT q.name, q.npc
																						FROM quests q
																						WHERE q.repeatable = 1
																									AND 'Skill' NOT IN
																									(SELECT type FROM questsRewards
																										WHERE quest = q.name)";
																$get_quests = $mysqli->query($query) or die(mysql_error());


																while($quests = $get_quests->fetch_array()) {
																	echo "<tr>";

																		/* Insert questname */
																		echo "<td>";
																			echo "<a href='";
																			/* Printing the quest with a link to the quest */
																			/* The Variable $questName has to be set !!! */
																			$questName = $quests["name"];
																			$path = $_SERVER['DOCUMENT_ROOT'];
																			$path .= "/includes/link_to_quest.inc.php";
																			include($path);
																			echo "'>" . $quests["name"];
																			echo "</a>";
																		echo "</td>";

																		/* Insert NPC */
																		echo "<td>";
																		echo "<a href='";
																			/* Printing the NPC with a link to the Map */
																			/* The Variable $npcName has to be set !!! */
																			$npcName = $quests["npc"];
																			$path = $_SERVER['DOCUMENT_ROOT'];
																			$path .= "/includes/npc_link_to_map.inc.php";
																			include($path);
																		echo "' target='_blank'>" . $quests["npc"] . "</a>";
																		echo "</td>";

																		/* Insert Rewards */
																		echo "<td>";
																			/* Getting all the quest rewards */
																			/* The Variable $questname has to be set !!! */
																			$questname = $quests["name"];
																			$path = $_SERVER['DOCUMENT_ROOT'];
																			$path .= "/quests/quest-rewards.inc.php";
																			include($path);
																		echo "</td>";

																	echo "</tr>";
																}
														?>

												</table>


                    <div class="repeatable_quest_table_description">
                        <p>
                            ** Every quest will be available after being logged for 6 or 10 hours.<br>
                            *** The theory exists that skills which have at least 2 quests to improve can be done every 10 hours, the others every 6. <br>
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
