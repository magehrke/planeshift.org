<!doctype html>
<html>
<head>
	<title>Knowledge of the Dark Way Adept</title>

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
						<td>Knowledge of the Dark Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Dark-Way-Adept.php">The Dark Way Adept</a> quest, Rank 70 Dark Way, 1 Adept's Dark Way Wand, 1 Apprentice's Dark Way Bracers.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Wand as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your testing will have to wait, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: It seems that there are some Entropy glyphs in the Derghir village on the road to Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: They continue to offer them asking for favors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Go to Akameer and check what he wants now.</td>
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
							$npcName = 'Amakeer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amakeer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I hear you are in need of some help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amakeer stares at the horizon for quite some time. Then he raises a hand. His finger twitches when he opens the hand, showing a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: For you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His head starts turning to the ground with the sound of grinding rocks. He looks at a bunch of brown worms crawling in the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: For me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you a problem with the worms?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: I can't kill them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: They hide in the earth.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amakeer looks at the worms for a long time. Then his head nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: Combine the Glyph I gave to you with another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: You are in the Dark Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: What glyph would you combine it with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Illness</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amakeer nods with with a rocky sound.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: Lesser Plague?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: It should work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [YOU cast Lesser Plague to the worms.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The worms start to tremble on the ground, crawling over themselves. When Amakeer low his head to look they are motionless, already died.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: Good work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: You can take the glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amakeer slowly lifts his foot. Then he smashes it to the ground, shattering the worms with a wet sound.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amakeer: Say thanks to Rulayne.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Amakeer sends his thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You did well then?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne continues more hesitantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your success is becoming troublesome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: A waste of my time and far from entertaining.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: We will call that your test for this part of your training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne extends a hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my Bracers as requested, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You will not be needing these any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Now, before we move on I must ask you a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Each Way of magic has One Way that opposes it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Once you start the Master level testing in a Circle, you will not be allowed to advance far in the opposing Way Circle nor would you want to, but if you did you shouldn't, for err…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: safety reasons.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne extends both hands out to his sides one at a time.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Each Way also has two Ways that support it, combining easily and with less danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: For your test of knowledge, answer what two other Ways of magic support the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brown and Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Correct, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Maybe you are worth my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: In any case, Dakkru desires the deaths of the powerful, not the weak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I serve my Goddess by making you more powerful.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne removes a set of bracers from a bag and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: These bracers are more advanced than your last set, increasing your powers even more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You will need them as you continue your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Once your skill is high enough, give me your wand once again and I will give you your final Adept's test.</td>
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
						<td>Rewards: 1 Entropy glyph, 1 Adept's Dark Way Bracers, 1 Faction with Dark Order, 15000 XP.</td>
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
