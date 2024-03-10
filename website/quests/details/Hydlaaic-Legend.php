<!doctype html>
<html>
<head>
	<title>Hydlaaic Legend</title>

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
						<td>Hydlaaic Legend</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey Allelia, how's the tavern business doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Hello there, Ynnwn!</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Kada-El's is doing well, as always.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: People coming and going, new faces and old regulars.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: And how are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Here for a drink?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Everyone is welcome here to relax at the bar or sit next to the fireplace.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Allelia Symiestra smiles at you while washing some mugs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Say, you must know Hydlaa quite well by now, but...</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: did you heard the latest rumour?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I beg your pardon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Allelia Symiestra leans towards you and speaks in a low tone.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: A sort of secretive, but well known, urban legend in town has started being talked about again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: They say that there is a clacker somewhere deep down in the sewers of Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Apparently it has been held captive and toyed with by grendols!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Allelia Symiestra makes a sort of disgusted face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: They also say that the clacker transformed and roams the sewers from...</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: I don't know if it's true, I don't even know where this story came from.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Allelia Symiestra shrugs and turns her back to you as she works.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Go to the sewers and find the toxic clacker, quest completed</td>
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
