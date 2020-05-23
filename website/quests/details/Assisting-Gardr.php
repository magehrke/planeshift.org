<!doctype html>
<html>
<head>
	<title>Assisting Gardr</title>

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
						<td>Assisting Gardr</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 2 Maces.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gardr, do you have any work I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: YOU, I would like you to assist me with an order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: If you feel you can spare the time, Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: I've always got orders to fill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You know what it's like with the impending invasions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Obviously I will pay you for the work you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You will have to get your own raw materials though, as I don't have any to spare.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course. Which order do you want me to help fill?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck looks at a list and smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Nevis must want the Hydlaa guard to use more maces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Seems you did a good job before.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Can you make two for me to finish this order?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Erm. Sorry, what do I need again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You need to remember basic orders, YOU, if you ever want to be more than a novice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You need two maces.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your two maces, Gardr. Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You have the maces done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Let me see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck takes the maces.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra then examines them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck chucks them into a crate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck looks at you with a curious look.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Can I help you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck pauses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You will want to be paid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: These are nice maces, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck hands you some circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: I look forward to you helping me again.</td>
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
						<td>Rewards: 1 Level in Mace Making, 3000 Tria, 10800 XP.</td>
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
