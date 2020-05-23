<!doctype html>
<html>
<head>
	<title>Remant's Sword</title>

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
						<td>Remant's Sword</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Remant's-Gauntlets.php">Remant's Gauntlets</a> quest, 1 Broadsword.</td>
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
							$npcName = 'Remant Tovere';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Remant Tovere</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail soldier, any quests I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Well, this is a bit embarassing, but I misplaced my broadsword and am in desperate need of another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Bring me one and I'll reward you well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: I'd get it myself, but I'm already on duty and cannot leave my post.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Will you do that for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Consider it done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Thank you, Sir!</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: I shall be right here, eagerly awaiting the broadsword.</td>
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
							$npcName = 'Remant Tovere';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Remant Tovere</a>";
						?>
						1 Broadsword</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Ah, beautiful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: You have my earnest gratitude, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Here's your reward as I promised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Thank you again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Hey, that's twice you've helped me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: You should consider joining the guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: There are nice rewards for doing a good job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: You might even get access to the Hydlaa Winch area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: See my Lieutenant, Jefecra Harcrit, if you're interested.</td>
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
						<td>Rewards: 10 Faction with Guard, 5130 Tria, 9400 XP.</td>
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
