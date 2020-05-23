<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Azure Way Master</title>

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
						<td>Knowledge and Practical of the Azure Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Azure-Way-Master-Training.php">Azure Way Master Training</a> quest, Rank 130 Azure Way, 1 Master's Azure Way Wand, 1 Adept's Azure Way Bracers, 1 Dome glyph, 1 Humanoid glyph, 1 Mind glyph.</td>
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
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your progress is satisfactory.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your knowledge has increased greatly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: To reward your dedication, I shall add to that knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Give me your Dome Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita begins purifying it as she speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now the Humanoid Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This one?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita repeats purifying the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Lastly, the Mind Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One Mind glyph coming up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita once again goes through the purification.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Patience now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita looks at the three glyphs with her icy eyes until the process completes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now for the combining.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The order is important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita places Dome, then Humanoid, then Mind and starts the combination ritual.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It is finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now I shall demonstrate the spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Observe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Energy surrounds Menita and she starts to change somewhat. She is still recognizable as herself, and no single feature is greatly altered, but she has become almost perfect in beauty.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your surprise is expected.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will take your glyphs back now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita hands back your glyphs. Her perfect form fades.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will now purify your glyphs and cast the spell your self.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It grants temporary perfection in mind and body.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: When complete, tell me what the spell wishes itself to be called.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: dome of perfection</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The Azure Way has many of these combination spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Only the truly skilled and brazen will discover these greater spells if not taught.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: One's knowledge must be great, and one must discover the order of the combination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Even then, they may not reveal themselves the first few times.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita eyes show a hint of sadness, the first emotion you have ever seen touch her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: That is a lesson I learned in my youth, taught by one of the greatest Way mages to ever exist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Even though he was a Blue Way Archmaster, he rivaled Archmasters other Ways, almost surpassing them in their own Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: No other I have known has been able to duplicate such skill in all Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: He did pay for it, in the end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It is not something to be discussed now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Do not ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You, as many other before, are following the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: So answer me, have you ever meditated on your motivations?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, mistress Menita.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita stays silent for some seconds, her gaze points in your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Every desire, every dream, every ambition.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: They all born in minds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: What does lead your mind?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: me</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Simple, is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Or maybe it's one of the toughest concept you'll ever face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Or both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: But for now on, if you want to became a real master in the Azure Way, you need to remember this lesson.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita holds out her hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, here they are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: YOU, it is time to finalize your skills in the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita silently hands you another set of bracers, then studies you for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Only once you reach your limit I will accept your wand and give you your final test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It shall not be as easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I mentioned in the past that you should mingle with practitioners of the two Ways that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will also bring me one Master's Set of Bracers from each of those two Ways, and give all three to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This will prove you have gained respect and support from the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I will accept no less.</td>
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
						<td>Rewards: 1 Master's Azure Way Bracers, 30 Faction with Azure Order, 15000 XP.</td>
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
