<!doctype html>
<html>
<head>
	<title>Brown Way Master Training</title>

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
						<td>Brown Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Practical-Brown-Way-Adept.php">The Practical Brown Way Adept</a> quest, Rank 100 Brown Way, 2 Adept's Brown Way Wands, 1 Apprentice's Brown Way Wand, 1 Cold glyph, 1 Death glyph, 1 Air glphy.</td>
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
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the items, to prove my worthiness as a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You have advanced to Master rank in the Brown Way Circle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik hands you back two wands, but keeps yours and puts it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Please return those to their owners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You have proven your knowledge and dedication to the Brown Way Circle to your previous trainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You also now know of the supporting and opposing Ways to the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This knowledge is important for your master's training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will soon require the aid of practitioners and students from the supporting Ways, outside of your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Speak to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: These bonds will become important in the coming tests.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik looks you up and down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Bring me two glyph that Levrus sells, each from one of the Brown Way's supporting Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would that be these two?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: In combing spells, you will at times need glyphs from other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: On their own, each Way is limited in power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Only in combinations will you find some of the most powerful spells.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik hands back the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Although Brown Way is the best, no Way of magic is complete without the other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik eyes move to you once more.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is known to include supporting Ways, neutral, and opposing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Crystal and Red Way are neutral to Brown, neither greatly aiding or impeding, though some neutral Glyphs may be used for tempering some of our combines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: For every coin, there exists two sides.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: For Brown, this opposing side is the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: For your last task today, I will ask you to bring me the Azure Way Glyph that Levrus sells.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He only sells Air.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik nods and hands you the glyph back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Brown and Azure Way Circles are not enemies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: However, the energy contained within them collide, and the Azure way can be as a poison to Brown Way magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Trying to combine opposing Ways can be very dangerous, or even deadly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You may train the supporting ways within a realm or so of Brown Way, but I advise you to limit any Azure Way training to a minimum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: If you train too high in the Azure Way, you risk being removed from the Brown Way Circle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik looks into the distance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: So many mistakes were made in the past.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Pride was placed before prudence, and a high price was paid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: A part of Nature itself suffered as a tall hill was torn apart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: We will speak of it no more for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Are you now ready to receive your first Master's item?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will show me this new wand every time you are ready for your next test session.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I also want you to have this as a personal gift from me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik parts with one of kra's glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will require a Wall glyph before returning and when you do return hand me your Master's wand, and if I think you are ready I will accept it.</td>
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
						<td>Rewards: 1 Tree glyph, 1 Master's Brown Way Staff, 40 Faction with Brown Order, 17800 XP.</td>
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
