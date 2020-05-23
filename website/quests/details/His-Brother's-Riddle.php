<!doctype html>
<html>
<head>
	<title>His Brother's Riddle</title>

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
						<td>His Brother's Riddle</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Natural-Kran-Hair.php">Natural Kran Hair</a> quest, Winch Access.</td>
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
							$npcName = 'Lerok Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lerok Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you want to send me on a quest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: A quest?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: I have no quests at this time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lerok scratches his beard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Although you look like a smart Enkidukai, and I've been pondering this riddle for a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Think you could help me solve it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready let me hear it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Okay, here's the riddle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: “At a feast, the 20 Vigesimi of the Lower Fields level sit at a round table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Each of them clinks a mug with the Vigesimi on his or her left, and with the Vigesimi on his or her right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: How many clinks would you hear?” Come back to me with the answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: If you don't know, you can try to “tell the riddle” to any clever people or people who know about riddles and see if they can help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Good luck!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Twenty clinks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Wait, 20?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Why yes, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: I was thinking 40, but yes, each clink is shared by two Vigesimi so I would divide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: I, as an engineer, should have figured that out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Thanks for your help!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Now I can go back to work with renewed concentration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: Why not take these?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lerok: I thought they'd help protect my arms if they got caught in the gears, but their weight just slows me down.</td>
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
						<td>Rewards: 1 Faith glyph, 20 Faction with Science Association, 7310 Tria, 15000 XP.</td>
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
