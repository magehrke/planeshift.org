<!doctype html>
<html>
<head>
	<title>Levrus Rat Eye</title>

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
						<td>Levrus Rat Eye</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 16 Rat Eyes.</td>
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
						<td>YOU: Are there any jobs you need done?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I often need new ingredients for making potions and experiments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Today I need some rat eyes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Sixteen for the bubbly potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No more, no less!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Can you get them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I don't mind getting my hands on some eyes for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: My thanks, and hurry back with the sixteen eyes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Potions await!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your sixteen Rat Eyes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ahh, the rat eyes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Careful, now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They're delicate things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Choose your reward wisely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You may only have one!</td>
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
						<td>Rewards: 1 Cold glyph, 1 Arrow glyph[OR], 1 Energy glyph[OR], 8000 XP.</td>
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
