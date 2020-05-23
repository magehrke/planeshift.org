<!doctype html>
<html>
<head>
	<title>Gugrontid Legend</title>

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
						<td>Gugrontid Legend</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey Belcor, how's the tavern doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Hello there!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Did you hear about Stalg?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Rumour has it that the big beast is back and has been pursuing and chewing up imago consumers not too far from the city gate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: It has been quite some time since rumours about old Stalg have passed around this old Stone Head.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Stalg? Who is Stalg?!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Yeah, Stalg is a big ol' marfusang, so big he's as big as a stone house!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: When rumours start spreading that he has been seen, they also say he is not far from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: If you stand at the bottom of the Keep ramp, last time he was seen he was over the hills to the left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Past where the pterosaur is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you say Stalg has been seen chewing an imago consumer!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko nods while munching some diamond crumbs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: There are always stories about how big Stalg likes consumers, apparently a lot...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Belcor Krakko smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Almost as much as I like these gems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Lucky enough I've never heard about him eating a Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: I suppose he helps us by keeping these nasty consumer beasts far from our city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Actually, he's so much bigger than everything else he seems to keep many other dangerous beasts away from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Be careful if you get too close, he might mistake you for a small snack!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why did you call a big marfusang Stalg?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: The name is a kind of joke.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: The beast is so big its two claws resemble two big stalactites.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: The last time he was about Malco started calling it stalg-meat, poor Kran never got the difference between a stalactite and a stalagmite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: If you want to know more about Stalg you might ask Malco.</td>
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
							$npcName = 'Malco Mokkar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Malco Mokkar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Malco. Belcor told me you can tell me more about Stalg.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: Stalg?</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: What Stalg?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Malco Mokkar scratches kra heads.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: Ah Stalg-meat...</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: Malco likes to see Stalg-meat hunt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: If you want to see it go over the hill, past the consumer fields.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Malco Mokkar points towards Gurrak and the hills behind kra.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: Malco suggest you go with a friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco Mokkar: If Stalg is hungry, Stalg eats what he sees.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Find Stalg: Quest completed</td>
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
						<td>Rewards: Nothing.</td>
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
