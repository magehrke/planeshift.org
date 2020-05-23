<!doctype html>
<html>
<head>
	<title>Brado's Order</title>

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
						<td>Brado's Order</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest, 5 Mug.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You can purchase the mugs from Jirosh.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, got any odd jobs I can do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ah yes, I just might have a job for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Last night, there was a brawl in my tavern and some mugs got smashed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I gave up on fixing the door, but one can hardly run a tavern without mugs, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I cannot leave the bar now, and if there is nothing to serve the drinks in this evening, the customers might just as well start breaking the furniture.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: So I need you to go to the local merchant, Jirosh Mikana is his name, and bring me back some new mugs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Can you do that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, you can't run a bar without mugs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Very well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: You can find Jirosh in his store in the Warehouse District.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Purchase five mugs from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I will reimburse you and give you a little extra for your trouble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your mugs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Thank you, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: That is one less thing to worry about for me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Here's a little reward for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: And you know what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It's still cheaper than fixing that door!</td>
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
						<td>Rewards: 1 Faction with Food Association, 1297 Tria, 9400 XP.</td>
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
