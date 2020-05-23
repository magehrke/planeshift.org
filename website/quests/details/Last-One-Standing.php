<!doctype html>
<html>
<head>
	<title>Last One Standing</title>

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
						<td>Last One Standing</td>
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
							$npcName = 'Beniua Busuka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Beniua Busuka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Miss Benuia, any noteworthy news as of late?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I suppose your question excludes the dozens of tentative invasions from the stone labyrinth, the latest Hiacheius riddle or the never ending obsession of Hinoserri with carrots?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She says sarcastically, with a side-smile on the face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Well, actually yes, but it is not fresh news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I don't usually talk much about this creature as it doesn't cause many troubles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Well, the troubles of the sort the fortress has been built for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: But...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: You seem eager to discover our fantastic wildlife out of what appears to just be boredom.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Creature? What is this creature?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: It lives out in the wilderness around the fortress, as many big things do, but this is the biggest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Going down the ramp, move around the canyon to the left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Keep going past that Enkidukai and Stonehammer encampment...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Incidentally, why someone would camp outside to play chess is beyond me and...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But what exactly is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I have no idea.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Benuia smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: There was a note that passed through my office speaking of a gigantic beast and a comment; please deal with this situation accordingly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I sent the folder to the only animal specialist I know in hope he would read about it in his books: Jardet Forsil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: His answer was clear: the beast is not a menace, it will stay in the territory its chosen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Benuia firmly closes the folder she is holding and puts it on the table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: If you are curious, go talk to Jardet Forsil directly yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I will just go and search out the creature myself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Uhm, yes, good idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I hope you have tremendous reflexes or a lot of friends!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: The group of hunters that initially came across the creature started out numbered five, but they returned only one!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Find One-Claw, Quest completed</td>
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
