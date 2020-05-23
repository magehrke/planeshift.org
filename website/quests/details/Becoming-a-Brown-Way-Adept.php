<!doctype html>
<html>
<head>
	<title>Becoming a Brown Way Adept</title>

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
						<td>Becoming a Brown Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Brown-Way-Glyph-Training.php">Brown Way Glyph Training</a> quest, Rank 40 Brown Way, 1 Brown Way Apprentice's Wand, 1 Summon glyph, 1 Rock glyph, 1 Hand glyphs.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I return with my wand for more training.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And so the student returns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I assume you are ready for your first combination glyph test?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Of course you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You are my student, and would not risk Yliakum by distracting me from my Guard duties for any other reason.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Since you are ready, hand me the two glyphs that combine to allow you to hurl flying rocks at your enemy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet awaits the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would it be these two ?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet nods and hands the two glyphs back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This is handy for pelting those pesky tefusang into submission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now for the next test you will need an Red Way glyph called Hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Do you have one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hand it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I will hold onto your Hand glyph until this test is over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: For the next step, give me the glyph that combines with it to attack with a hard powerful fist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I'll give you a hint if you are not sure what that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It is what rolls around in Trasok's head if he thinks too hard.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet laughs again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would it be Rock?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Exactly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: As for the spell this combination creates, it allows you to conjure a much more powerful version of the first spell I asked you and show you how versatile the Brown Way glyphs are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, we might as well get this moving.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You are ready to advance?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, ready and willing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Congratulations YOU, you have passed this final section of my testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here are your glyphs, and also your robe to complete the Apprentice set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You will now go to Lorytia Starhammer for further testing to become an Adept in the Brown way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I suggest you train with me until I can no longer instruct you before approaching Lorytia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You will need to hand Lorytia two wands, one belonging to you and one from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Each Circle requires this of its students to prove that they not only have the respect of their teachers, but also that of their fellow students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: After you give Lorytia the two Brown Way Wands, she will advance you into the next level of testing and give you a new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You will return the other Apprentice wand to the person who loaned it to you.</td>
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
						<td>Rewards: 1 Apprentice's Brown Way Robe, 15 Faction with Brown Order, 10800 XP.</td>
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
