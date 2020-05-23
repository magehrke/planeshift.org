<!doctype html>
<html>
<head>
	<title>Merrinez's Bad Mood</title>

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
						<td>Merrinez's Bad Mood</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Brintec-Fur-Research.php">Brintec Fur Research</a> quest, 1 Leather Gloves.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have a task for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Humph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I work days and nights in the warehouse, and now some snipper wants me to set him some silly task, just so I can give away my hard earned wealth?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I have no need to feel important by employing people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: My only problem is that my work is too hard.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about your problem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: The main problem is the physical work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I've nearly ruined my paws with all this loading and unloading of giant boxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: The working hours here are also too long, so I can get little rest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: At least the pay is good; otherwise, I wouldn't be here right now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Anyway, I don't think you can do anything for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Goodbye.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This might help your hands.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Hey, what's this…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: gloves?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: This is very kind of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: They're so soft and precious!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I've never thought about gloves, but they can probably ease my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: At least my hands will not be ruined!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I have to repay you for your help, so take this reward.</td>
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
						<td>Rewards: 35 Faction with Crafting Association, 9922 Tria, 16400 XP.</td>
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
