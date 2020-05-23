<!doctype html>
<html>
<head>
	<title>The Blue Way Apprentice</title>

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
						<td>The Blue Way Apprentice</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Without-a-Way.php">Without a Way</a> quest, Rank 10 Blue Way, 1 Apprentice's Blue Way Wand.</td>
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
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: A new student?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Welcome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will begin your Blue Way Circle training under my supervision.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Due to time constraints, I may need you to do a task for me from time to time so I don't fall behind in my other work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven marks of something on his list before handing you back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Please keep it for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Return it to me whenever you're ready for some lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now, let's start with something easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Give special attention to this starting lesson, because, at the end, I will have a question for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Let's begin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Life is like a continuous flow, wave after wave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, waves, like the life that's always changing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: There's no wave like the others before.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: So are experiences in life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Some are similar, but none are the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Let me introduce a riddle: “Ever changing, fluent and symbol of life, what is it?”</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: water</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Easy, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Take in mind this element and use its positive features while you grow up following the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: When you find an obstacle, be fluid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: When your attitude is still, change it, for growing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Endure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Also the calmest river will mold the hardest rock, because it will never surrender.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven nods and removes a report from under his notes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I have also a more material task for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Deliver this report to Archmage Barrin Dhorod.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: With a basic understanding of the Blue Way you may return and continue to assist me with some tasks.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe you are waiting on this report?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin raises a hand towards you to tell you to wait, then waves the hand over a sword he is holding.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Blee, Blye, BLUE!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Blue flame now surrounds a blade in Barrin's hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well, you know, it worked.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin waves a hand over the blade again and the flame goes out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Pretty, but useless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The words are not needed either, but I like them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now let’s see what you want from the Archmaster of the Blue Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin reads the report.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: A new Blue Way student?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Why didn't you say so?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You are in for a treat indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The Blue Way is both rewarding and exciting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin eyes light up as he utters those few words.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now I am very, very busy with my experiments, so you may return to Sharven for further advancement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Be sure you have trained enough in Blue Way before you give him your wand, or he will not continue your testing.</td>
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
						<td>Rewards: 1 Water glyph, 10 Faction with Blue Order, 9400 XP.</td>
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
