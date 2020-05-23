<!doctype html>
<html>
<head>
	<title>Levrus Coal Lumps</title>

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
						<td>Levrus Coal Lumps</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Coal Lumps.</td>
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
						<td>YOU: Can I help you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I need coal, my friend, COAL.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: 'Tis the blackness that attenuates nicely with the brine, or so they say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Can you bring me coal lumps, naturally found?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Whee, excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I need ten lumps of coal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: To fuel my fires for potion-making, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I shall anticipate your return with bated breath.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do it quickly now, and there'll be a bonus!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your ten coal lumps.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ooh, here it is, the lovely coal!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: How it wanes my very vision.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here, this is for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And lots extra for being so quick about it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'm almost always in the need for ingredients of some kind, so if you want extra work, ask me!</td>
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
						<td>Rewards: 1297 Tria, 8000 XP.</td>
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
