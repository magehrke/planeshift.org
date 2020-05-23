<!doctype html>
<html>
<head>
	<title>Search for the Old Coin</title>

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
						<td>Search for the Old Coin</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Laanx-Follower.php">Becoming a Laanx Follower</a> quest, 1 Rock Pick.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any errands I can run for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I may have something for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I'm investigating the magical properties of the Laanx well behind me, and it seems that when we throw in certain items, Laanx listens to us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: In some old books, I found that the usage of recent items is not very appreciated by Laanx, so I'm searching for some ancient items, particularly old coins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Those are not very easy to find for a man like me who spends all day at the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Travellers, archaeologists and explorers are more able to find old coins on the lower levels, in the Stone Labyrinths…in the ruins along the roads…that sort of thing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menlil spreads his arms wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Will you search for an old coin and return it to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It sounds like a good way to see some interesting places. I'll do it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I await your return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Bring me one old coin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Nyshyn Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nyshyn Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking to acquire an old coin. Would you happen to have one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Oh yes, in my explorations I have found many old items, including old coins, but I will only give one to you if you give me something that's useful for my research.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: My rock pick just broke, and I need a new one if I'm to continue with my research.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: If you bring me a new rock pick, I will give you one old coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Agreed?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That sounds fair enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Good; come back with the rock pick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: See you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go! One rock pick.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Just what I was missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Here is one old coin, as we agreed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: See you around, Tabei.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found an old coin for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Ah, this seems like a very good item to offer Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Maybe something will happen this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Thanks very much.</td>
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
						<td>Rewards: 10 Faction with Iron Hand, 1297 Tria, 9400 XP.</td>
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
