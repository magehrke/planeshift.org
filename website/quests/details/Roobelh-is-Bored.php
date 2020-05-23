<!doctype html>
<html>
<head>
	<title>Roobelh is Bored</title>

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
						<td>Roobelh is Bored</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Roobelh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Roobelh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail soldier, can I assist you in tasks?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Yeah, okay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I'm kinda bored.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Staring out over this expanse and nothing ever happens, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: But I can't move from my spot, so how about you do me a favour, huh?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright, I'll help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Good good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I asked Yonda Axebow to make me a special wooden toy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: So you gotta let Yonda know that Roobelh sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: If anything, it'll keep me entertained.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Thanks for doing this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: You're a pal.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Roobelh sent me because he wants a puzzle toy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Ah, he wants the special puzzle toy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Here, take it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Get it to him as fast as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Custom toys are paid for in advance, so don't worry about that.</td>
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
							$npcName = 'Roobelh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Roobelh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: give Roobelh the toy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Roobelh examines the toy closely, his lips soundlessly moving as he slowly spins it to examine the markings.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Ah, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Very interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Yonda does very good work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Yes…very helpful indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Oh, are you still here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Have this.</td>
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
						<td>Rewards: 3391 Tria, 12200 XP.</td>
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
