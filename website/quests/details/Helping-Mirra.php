<!doctype html>
<html>
<head>
	<title>Helping Mirra</title>

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
						<td>Helping Mirra</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Meeting-Mirra-Houphen.php">Meeting Mirra Houphen</a> quest, 2 Clacker Meat, 2 Clacker Legs.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm back to see if you need anything else.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You did such a great job last time, Enkidukai!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I'm pretty sure you can help me again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: This time I lack two ingredients for my soon to be famous 'Clacker Calamity,' which will be a delicious stew!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Do you want to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds yummy, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I could make this dish with some clacker meat: two pieces should do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: And then two clacker legs to give that crispy effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Please bring those to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your clacker bits.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You did it again, YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I'm so happy with you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Soon there should be even more work for you to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: For now, take this reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You've earned it in the sight of the gods.</td>
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
						<td>Rewards: 20 Faction with Food Association, 3391 Tria, 12200 XP.</td>
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
