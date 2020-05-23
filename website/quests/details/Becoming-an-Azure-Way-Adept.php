<!doctype html>
<html>
<head>
	<title>Becoming an Azure Way Adept</title>

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
						<td>Becoming an Azure Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Azure-Way-Glyph-Training.php">Azure Way Glyph Training</a> quest, Rank 40 Azure Way, 1 Apprentice's Azure Way Wand, 1 Sleep glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyph back.</td>
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
							$npcName = 'Vorigna Tassen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vorigna Tassen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: And so the student returns.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna looks out towards the road before handing your wand back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Did you manage to get the Sleep Glyph I asked you to study?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the glyph!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: The sleep glyph is very powerful, and every Azure Way expert should possess one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Now, let's test a bit your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I need you to tell me what is the name of the spell produced by the Sleep glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: relaxing sleep</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Correct, It is good for reinvigorating, especially between long shifts or travels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Congratulations YOU, you have passed the second part of my testing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna pulls out her list.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Here the apprentice final item.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna smiles as she hands you a cloak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Check.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: This cloak completes your set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Your testing with me is complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: However, you will have to train with me to the extent of my abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Once I can no longer train you, you will seek out Axomir for your next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You will need to hand Axomir two wands, one belonging to you and one from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Each Circle requires this of its students to prove that they not only have the respect of their teachers, but also that of their fellow students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: After you give Axomir the two Azure Way Wands, he will advance you into the next level of testing and give you a new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You will return the other Lower wand to the person who loaned it to you.</td>
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
						<td>Rewards: 1 Apprentice's Azure Way Robe, 10 Faction with Azure Order, 9400 XP.</td>
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
