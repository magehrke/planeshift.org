<!doctype html>
<html>
<head>
	<title>The Azure Circle Awaits</title>

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
						<td>The Azure Circle Awaits</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Azure-Way.php">The Azure Way</a> quest, Rank 30 Azure Way, 1 Apprentice's Azure Way Wand, 5 Consumer Antennae.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my Azure Way Wand, I want to learn more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You are an expert now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I taught you as much as I know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose smiles in a friendly manner.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But you need my reference to meet the Archmaster of the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Do you think you have earned it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Is this confidence or arrogance?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose blinks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Let's say that yes, you earned enough of my trust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But I need one last task from you, I'm studying minds and communication of some creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And now I need materials to study it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: So, to make it short, I need five consumer antennae.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fine, I'm going to get them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I like your goal oriented attitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You will find the antennae on Consumers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: They are monsters, you can search for them in the wilderness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Look in their bodies and tear up their antennae.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It could be gruesome, but I need them to analyze minds of strange creatures.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the antennae, I hope you will enjoy them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ah, that wasn't hard I hope.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose smiles, taking the antennae.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now it's time to meet the Archmaster of the Azure Circle, so you can become an official Apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Are you ready to know her?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: The Archmaster will lead you to greater knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: She will show the path to become a real member, unlike me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I am only an intermediary, and now your path goes beyond me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Your knowledge and your powers grant you access to the next step.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: When you are ready, go and talk to Menita.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: She travels much, but I think you can find her in Dsar Kore of Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: No more chatting now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: She is waiting for you.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please take this Way Wand as proof of my dedication to Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita gazes upon you for long seconds.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her pupils glow with cold light, they seem to became bigger and bigger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then she half closes her eyes, and, slowly, she hands back your wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did I fail in something?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita raises one finger, and moves it in front of her lips. Slowly. No expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her face looks relaxed, while she seems to look you from far away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Clear your mind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her voice is firm. Her body looks like an ice statue, not even breathing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I can feel your desires, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your struggles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita lowers her finger, taking a deep breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You come here with a goal, a desire to follow a path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Our path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: But your mind is still heavy; you need focus to gain mastery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Drop away the unnecessary.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her eyes close, her head tips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You are unsure, maybe you see a faint smile. But it vanishes when her eyes open again, two windows showing a distant world.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your spirit is full of questions, and your mind has some answers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Are they really necessary?</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You built balance, power and knowledge until now, trying to follow your path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And the road is still long.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She pauses, the faint smile arises again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I cannot say if you will fail, or succeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is interesting, and perhaps dangerous.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Take it, so you can increase your power and knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita closes her eyes, remaining silent.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your path now leads to Vorigna Tassen here in Dsar Kore, show her your Azure wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: She is expecting you.</td>
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
						<td>Rewards: 1 Sound glyph, 10 Faction with Azure Order, 8000 XP.</td>
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
