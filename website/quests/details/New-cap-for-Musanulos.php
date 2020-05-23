<!doctype html>
<html>
<head>
	<title>New cap for Musanulos</title>

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
						<td>New cap for Musanulos</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dagger-for-Jirris.php">Dagger for Jirris</a> quest, 1 Rat Hide.</td>
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
							$npcName = 'Musanulos Terfanis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Musanulos Terfanis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You sure look like you need some serious help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Don't bother me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Musanulos scratches his head. A clump of rancid rat fur falls from his cap. He looks back at you in irritation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: You still here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Well you might as well be of use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: This cap of mine is coming apart at the seams.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: I ain't presentable to stand before the whisper in this condition.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: You think you are good enough to serve the whisper and help me out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, whisper away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: You might be good for something after all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: If the whisper says we don't go in the light, then we don't go in the light, that's just how it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: I need some special tanning crystals from over in Ojaveda, and I can't hardly get them myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Go get me some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Special tanning crystals, ya hear!</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Everything has to be special for the whisper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Gotta be presentable.</td>
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
							$npcName = 'Hirenn Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hirenn Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for special tanning crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Oh…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn rolls his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Him again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Just a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn turns and fills a small sack with rubbing sand, then offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: There you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: One order of my finest 'special' tanning crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: There is plenty more where that came from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: No charge, of course.</td>
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
							$npcName = 'Musanulos Terfanis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Musanulos Terfanis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the sand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Perfect, just perfect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Musanulos looks at you as if you are daft.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Well?</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Go get me the rat hide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Young folks these days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Gotta tell them everything.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your rat hide.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Well that took you long enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Did you travel all the way to Biranmia to get it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Bah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: The whisper has use for fools as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Now for my cap.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Musanulos pulls out a rusty dagger and cuts a circle out of the rat hide. He dumps the sand out on the flesh side and rubs it in. Doing nothing else to it, he flops his new cap on his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Well?</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Looks very presentable, doesn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: You better shape your looks up too if you want to be as presentable to the whisper as I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Now go away.</td>
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
						<td>Rewards: 1 Darkness glyph, 1000 Tria, 8000 XP.</td>
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
