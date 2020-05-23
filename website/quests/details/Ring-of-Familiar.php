<!doctype html>
<html>
<head>
	<title>Ring of Familiar</title>

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
						<td>Ring of Familiar</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Diamond Crystal, 1 Golden Ring.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, is there anything I can do for you today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have a special task for you, if you're interested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A few years ago, I modified an old Diaboli spell to summon animals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I used that to bring forth the big snake you see in this shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Don't worry, he is currently frozen in time, so he won't wake up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I can empower a precious object with this spell, if you like.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you kidding, of course I am interested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Right, it's a very interesting field of research, but it costs a lot of money to perform.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The spell requires a number of crystals as reagents, and a golden ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you bring me the ingredients, I will perform the spell and you will keep the ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Is it a deal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd be happy to get you what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The first thing I need is a golden ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Bring one to me and I will start the spell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: give Levrus a golden ring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The ring is of fine quality; exactly what I needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will start the purifying process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: In the meantime, you can gather the reagents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I need ten diamond crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They aren't easy to find these days, but you can probably ask Trasok about them and he will help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Tell him I've sent you if he asks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your ten diamond crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Wow, you found them!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I've finished the first part of the spell, and everything is ready for the next stage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now let me add these crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus starts casting a spell.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It worked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The ring is ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It's yours.</td>
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
						<td>Rewards: 1 Ring of Summon Familiar, 10 Faction with Crafting Association, 10 Faction with Crystal Order, 9400 XP.</td>
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
