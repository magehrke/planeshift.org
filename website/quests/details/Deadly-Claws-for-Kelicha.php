<!doctype html>
<html>
<head>
	<title>Deadly Claws for Kelicha</title>

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
						<td>Deadly Claws for Kelicha</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Maulbernaut Talon, Winch Access.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: The talons don't have to be “Perfect Talon”, just “Talon”. Be prepared to kill and loot 180+ Maulbernauts.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Kelicha Anijiel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kelicha Anijiel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have a little work for a hungry adventurer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Hmph?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kelicha's shoulders slump as she turns to you with an exasperated sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Don't I look busy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Okay, fine, you want work?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I have work for you, but you need to be a good fighter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Really good. Are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why yes I am!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Terrific.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Go on the road to the nearest Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: You know, the Eagle?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: As soon as you exit the mountain pass, veer to the left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: There will be some rocks and an ulbernaut encampment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I want you to clear it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Bring me back five of their talons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Five.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I'll be waiting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kelicha turns back to the mechanisms.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Kelicha Anijiel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kelicha Anijiel</a>";
						?>
						5 Ulbernaut talons</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have brought you the claws, as I promised.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Back so soon?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Oh, did I say five?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I meant eight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Go get me three more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: If you'll excuse me, I need to work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Kelicha Anijiel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kelicha Anijiel</a>";
						?>
						3 Ulbernaut talons</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are three more claws.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: My goodness, my sword arm aches!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Already?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Er…let's make it an even ten.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Go and get me two more, please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She turns quickly back to the mechanisms.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Kelicha Anijiel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kelicha Anijiel</a>";
						?>
						2 Ulbernaut talons</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Cormah sighs and rubs his sword arm as Kelicha picks up the claws.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Okay, I can see you're obviously better than I thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Frankly, I thought you would give up and leave me alone so I could work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Alas, you're as persistent as that eager junior engineer Martiana.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I don't even need these claws.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kelicha hands you back the claws.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: but I wanted to test your patience and persistence, so I can assign you more important tasks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I guess you wanted a reward?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I have nothing to give but some precious information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: That maulbernaut encampment you were around?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: There's a gold mine there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: I hear it might even be a richer vein than used to be outside Levrus' house.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kelicha her wings together in anticipation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kelicha: Fare you well.</td>
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
						<td>Rewards: 3200 XP.</td>
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
