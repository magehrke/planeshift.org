<!doctype html>
<html>
<head>
	<title>Saria's Rush Job</title>

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
						<td>Saria's Rush Job</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Enchanted-Jongleur's-Balls.php">Enchanted Jongleur's Balls</a> quest, 2 Diamond Crystal, 4 Ruby Crystal, 3 Emerald Crystal, 4 Silver Ingots.</td>
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
							$npcName = 'Saria Dunwallow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Saria Dunwallow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail! Why do you look so distraught?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: The best work takes so much time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: A daughter of the Vigesimi came in looking to get her hair styled with less then I would like to do the job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: She's looking to have something special done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: She wants gems and silver in her hair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Now I have a jeweler on staff, but neither of us have the time to get the materials that are needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Could you gather them for us?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It will take me sometime but I will get them for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: We will need two diamond crystals, four ruby crystals, three emerald crystals, and four silver ingots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Saria the crystals and ingots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Back so quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Let's have look at what you brought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Diamonds, yes, they will add a white glitter to her hair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Some of these can seem to glow with a fire from within.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: If there was more time I could have something enchanted into these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: But we'll make do with what we have!</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Ah, emeralds will go so well with her eyes, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Gold may look richer, but when the light catches silver it dazzles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: That's what she wants, dazzle; and dazzle she shall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: But…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Saria looks at the diamond crystals and frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: As wonderful as these are, they are too big.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: My jeweler won't be able to adjust them and the others in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Could you take them to Ondren Torr for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: He should be able to find someone to cut them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, just give me them crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Thanks so much for helping us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Here are the crystals and a work order for Ondren to pass along to the cutter.</td>
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
							$npcName = 'Ondren Torr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ondren Torr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Saria sent me with this order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: a work order?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ondren reads the order and frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Saria got herself in a jam again I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: I should be able to find someone to cut the stones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Please give me the crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here they are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: I know who I'll give these to for cutting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ondren studies the crystals and nods. He takes out a slip of paper and writes a few things on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Good stones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Give this to Saria, I will pay for the cutter's fee and she can reimburse me later.</td>
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
							$npcName = 'Saria Dunwallow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Saria Dunwallow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Orden said you can pay him later. [ YOU hands over the receipt.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Excellent, with his gemcutter we will be able to make this work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Thank you so much for your help today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: She'll look stunning when we are finished with her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Let me give you these for your time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Saria gives you several coins.-</td>
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
						<td>Rewards: 10 Faction with Artists Association, 1297 Tria, 9400 XP.</td>
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
