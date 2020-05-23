<!doctype html>
<html>
<head>
	<title>Kilas wants his Abacus Back</title>

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
						<td>Kilas wants his Abacus Back</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Science.php">Introduction to Science</a> quest.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You look like a Stonehammer interested in the ways of education.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Do you think you can help me with a quick errand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I love to learn!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I lent my abacus to Crosh Dunehammer, the guardian of the dungeons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: However, I require it once again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Just tell him about the abacus or tell him I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Return it to me and I'll reward you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: If you don't know what an abacus is or how it works, just ask me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I'm not just an engineer, I'm an educator!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: about abacus</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: An abacus is a counting device made up of beads on wires.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You count by moving beads from left to right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You count the first line by ones, then when you run out, you move them all back and move one bead on the second line.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: So if you had four beads, to count five, you'd move the first four beads in the first line - 1,2,3,4 - then move them back to the left as zero and move one bead in the second line for five.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Number six would be moving another one in the first line because five plus one is six.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I hope that clears things up.</td>
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
							$npcName = 'Crosh Dunehammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Crosh Dunehammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kilas sent me, you need to return his abacus.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Return the abacus, you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Well, alright, but I need to keep count.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Now listen up: Each line in the abacus has seven beads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Every day I move a bead in the top line to the right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: When they're all to the right, I move them all back and move a bead in the second line, which also has seven beads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Today, I moved back the second line and moved the first bead in the third line to the right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I really can't count that myself!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Can you help me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: How many days have I been counting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 64</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Sixty-four?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Why, yes, that sounds right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Thanks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I count better putting notches on my axe, anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: You can take this abacus back now.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your abacus.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Excellent work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Hopefully you didn't have too much trouble down there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: The dungeons seem to test more than just the mind, and for that I apologize.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Have something for your efforts.</td>
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
						<td>Rewards: 10 Faction with Science Association, 1297 Tria, 9400 XP.</td>
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
