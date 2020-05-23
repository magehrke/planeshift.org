<!doctype html>
<html>
<head>
	<title>Talad's eyes-and-ears</title>

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
						<td>Talad's eyes-and-ears</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-message-for-Dsar-Sarraghi.php">A message for Dsar Sarraghi</a> quest, 1 Mercenary Helmet, 1 High-Quality Amulet.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Mercenary Helmet from the Dark Circle Hunt quest and the High-Quality Amulet from the Sharven Holy Script quest.</td>
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
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm back to see if you need anything else.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: The faithful one returns yet again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: My eyes-and-ears tells me your name is YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I can't tell you who my eyes-and-ears is, for I do not know who might be listening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I do have another task for you, if you can handle some investigative work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Can you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I’m up for an investiagion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: We suspect the Temple of Laanx is up to something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: My eyes-and-ears has been watching them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I want you to find my eyes-and-ears with the code “the pterosaur flies north.” The response will be “the Megaras flies south.” Then ask about the report and return to me for further instructions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: It is imperative the Temple of Laanx is unaware of our actions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Do not let them know.</td>
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
							$npcName = 'Pauril Rentaurin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pauril Rentaurin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: the pterosaur flies north</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril: The Megaras flies south.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need the report.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril: Take it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril: Go quickly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
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
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Murago the sealed report.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Murago breaks the seal and reads the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: It would appear Menlil Toresun is plundering the ruins and using the artifacts in some sort of ritual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: His next target appears to be two identical cups found in both the ruins by the Bronze Doors and on the road to same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Collect those cups and bring them to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Hopefully, we'll see what the attraction is.</td>
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
							$npcName = 'Canyt Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Canyt Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm here to pick up the cup.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I have indeed come across such a cup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I shall trade it for a helmet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Something that will protect my head from falling rock, but not too flashy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: A nice conservative helm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Then you get your cup.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Canyt a mercenary helm.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Yes, this helm will do nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Thank you, and here is the cup.</td>
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
						<td>YOU: I'm here to pick up the cup.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: No need to be so hasty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Menlil told me he'd be sending someone from the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: All I need now is an amulet as proof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Give me the amulet, I'll give you the cup.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the amulet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: And here's your cup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Always a pleasure doing business with the Temple of Laanx.</td>
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
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got both cups. Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: You have proven yourself a good and obedient servant of Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I think you are ready to receive this blessing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Be well, YOU.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Murago has concerns about what you are doing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The Church of Talad has never trusted us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Our sacred rituals are none of their concern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: At least with this information, I can deal with it effectively.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Thank you, and take this with the thanks of our temple.</td>
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
						<td>Rewards: [Way 1] 1 Amulet of Talad, 25 Faction with Conclave of the Glyphs, 12200 XP, [Way 2] 1 Gold Ingot, 55 Faction with Iron Hand, -50 Faction with Conclave of the Glyphs, 12200 XP.</td>
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
