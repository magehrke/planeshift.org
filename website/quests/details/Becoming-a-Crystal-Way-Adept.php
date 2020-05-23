<!doctype html>
<html>
<head>
	<title>Becoming a Crystal Way Adept</title>

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
						<td>Becoming a Crystal Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 40 Crystal Way, 1 Crystal Way Bracers, 5 Tefustang Teeth, 1 Arrow glyph, 1 Energy glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyphs back.</td>
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
						<td>YOU: Please have my bracers as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And so the student returns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I assume you are ready for your combination glyph test?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: First, show me the glyph that creates an arrow that is thrown at the target.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven awaits the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the Arrow glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now show me the glyph that combines with this one to create an even stronger arrow of damaging energy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven once again awaits your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My energy glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I want you to now go out and practice your healing and arrow spells in battle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Bring me 5 Tefusang teeth to prove you have completed this task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here the Tefustang teeth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Well done, YOU, you have passed the second part of my test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I give onto you this Apprentice's Crystal Way Robe as proof of your skills to complete your set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once I can no longer train you, our time together will be at an end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will then go to Tarmeen Alecheech to continue your testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Remember, Tarmeen will not be allowed to start the next step until your training with me is at an end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Also, you will need to hand Tarmeen two wands, one belonging to you and one from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Each Circle requires this of its students to prove that they not only have the respect of their teachers, but also that of their fellow students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: After you give Tarmeen the two Crystal Way Wands, he will advance you into the next level of testing and give you a new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will return the other Lower wand to the person who loaned it to you.</td>
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
						<td>Rewards: 1 Apprentice's Crystal Way Robe, 20 Faction with Crystal Order, 12200 XP.</td>
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
