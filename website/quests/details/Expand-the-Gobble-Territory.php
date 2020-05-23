<!doctype html>
<html>
<head>
	<title>Expand the Gobble Territory</title>

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
						<td>Expand the Gobble Territory</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-value-of-Gobble-Ears.php">The value of Gobble Ears</a> quest, 1 Rockpick, 1 Tefusang Claw, 3 Black Glass Beads.</td>
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
							$npcName = 'Gorbiak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gorbiak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Gorbiak, how are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Gobble friend is back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: I need help in gobble home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You help, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'll help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Thank you, gobble friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: More gobbles born, need more space for home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Give me rock pick so I can cut more rock from home and make bigger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Then me tell more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Also, NO TELL GUARDS ABOUT ME!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Guards no like gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Always hurt gobbles!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gorbiak stomps his foot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I brought you a rock pick.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Good, gobble friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: More help from you before I give reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: There is tefusang in sewers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Nasty and eats gobbles!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You kill for me and bring claw.</td>
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
							$npcName = 'Gorbiak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gorbiak</a>";
						?>
						1 Tefusang Claw</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here is the claw.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Very good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You big gobble friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: One last thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Creepy people in sewers do weird singing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Gobbles no like and stay away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You kill and bring three black shinies to show.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Then you done and big reward, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: BUT NO TELL CREEPY SEWER PEOPLE ABOUT ME!</td>
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
							$npcName = 'Gorbiak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gorbiak</a>";
						?>
						3 Black Glass Beads</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Gorbiak the glass beads.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You did it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: I so happy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Now gobbles can live better in more space!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: You very good gobble friend and you no tell about me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: I give you good reward yes!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Percival Hawthorne';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Percival Hawthorne</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: about gorbiak</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: The gobbles are planning what?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Expanding their territory?</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: This spells bad news for all the surface Hydlaans.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: They could cause sinkholes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I'll send a team to stop them right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Thanks for your help, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Here, take these with the appreciation of the Hydlaa guard.</td>
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
						<td>Rewards: [Way 1] 1 Fear glyph, 25 Faction with Seeds of Wildwood, 16411 Tria, 19200 XP, [Way 2] 1 Three Rivet Shield, 1 Faction with Guards, 1500 XP.</td>
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
