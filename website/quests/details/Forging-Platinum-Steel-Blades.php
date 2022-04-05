<!doctype html>
<html>
<head>
	<title>Forging Platinum Steel Blades</title>

	<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/html_header.php";
		include($path);
	?>

	<!-- import the css for quests -->
	<link href="/styles/quest_single.css" type="text/css" rel="stylesheet" />
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
					<table class="quest_main_table">

					<tr class="quest_title">
						<td>Forging Platinum Steel Blades</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Working-with-Rare-Metals.php">Working with Rare Metals</a> quest, <a href="/quests/details/Learn-how-to-make-a-Broadsword.php">Learn how to make a Broadsword</a> quest, Rank 75 Blade Making, 1 Platinum Steel Stock.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi! I have learned much since the last time!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Hey YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good to see you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm proud of you then, but what exactly did you learn?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I learned how to create special metals! Unique ones.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Oh, you went further that I thought then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Very interesting indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have some knowledge of rare metals, those are very expensive, but extremely powerful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Their hardness is giving unique properties to the weapons and armors forged.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need a book to learn how to forge those metals into useful items, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can help you, but I need some of those metals for myself in return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Alright?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright, we can discuss how many you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Perfect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then I will share with you some of my knowledge on this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How many minerals you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have to forge a pretty large sword for the Vigesimi, he will use it mainly as display in tournaments, and for that I need two platinum steel stocks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have one already, but I'm missing the second one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can provide you the book and all information to create a platinum steel weapons if you bring me one platinum steel stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Remember a stock and not an ingot!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's a pretty expensive request. It will take me some time to collect it, but I really want that book and knowledge, so it's a deal!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Just hand over to me the platinum steel stock when you have it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've forged the rare stock! Here it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Perfect timing, I can use it for the Vigesimi order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now here is your book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you summarize for me how it works?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It's simpler than you think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you want to create a longsword, you have to heat the stock as usual, and then shape it with the hammer into an alpha blade.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Anything else you can tell me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The rare metals are more difficult to work with, so be sure to practice a lot and get good training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then with hammering and heating you go through beta and delta blades.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then to the assembly phase.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The handle is the same as a normal sword, just the blade is made of rare metals usually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The best way is really to try it yourself!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_questComplete">
						<td>QUEST COMPLETED</td>
					</tr>
					<tr class="quest_emptyRow_afterQuestComplete">
						<td></td>
					</tr>
					<tr class="quest_reward">
						<td>Rewards: 1 Forging Platinum Steel Blades, 75 Faction with Smith Association, 12958 Tria, 17800 XP.</td>
					</tr>
					<tr class="quest_emptyRow_afterReward">
						<td></td>
					</tr>

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
