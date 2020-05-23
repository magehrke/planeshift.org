<!doctype html>
<html>
<head>
	<title>Nohali's Nick</title>

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
						<td>Nohali's Nick</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Jolik's-Letter.php">Jolik's Letter</a> quest, 1 Weapon Repair Kit.</td>
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
							$npcName = 'Nohali Mirdasu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nohali Mirdasu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there something I can do for you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali looks up from admiring her claymore. Her eyes are cool and calm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: You wish to do something for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Oh no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: I have everything I need right here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali caresses her claymore as if it is a child, and wipes a tiny smudge of grime off its otherwise spotless blade with a corner of her ragged shirt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali stops and looks closer as her eyes go wide with panic.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: A…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: a…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: a nick?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: No…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: this can't be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: I have to fix it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Have to make him perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: A smith!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: I need to buy a…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: no…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: can't go in the light.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: The whisper does not allow it…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: You!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: You can help me, right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Thank the whisper!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Quick, get me a repair kit quick as a rivnak.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali turns her attention back to her claymore with worried eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Don't worry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Help is coming soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: It will be all right.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Nohali a weapons repair kit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali grabs the repair kit from your hands and starts working the strop across her blade, rocking back and forth as she does so and whispering to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: It will be all right…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: it will be all right…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: it will be all right…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Done!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali smiles and hugs the blade close to herself, the thin cut it leaves on her cheek going unnoticed. Her manner changes completely in an instant, once again becoming calm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: You have surely been sent by the whisper to bless me this day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: I will remember this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Take this, and do not spend it all in one place.</td>
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
						<td>Rewards: 10 Faction with Cabal of Whispers, 1297 Tria, 9400 XP.</td>
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
