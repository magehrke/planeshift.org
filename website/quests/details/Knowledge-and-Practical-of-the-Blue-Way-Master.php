<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Blue Way Master</title>

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
						<td>Knowledge and Practical of the Blue Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Blue-Way-Master-Training.php">Blue Way Master Training</a> quest, Rank 130 Blue Way, 1 Master's Blue Way Wand, 1 Adept's Blue Way Bracers, 1 Purify glyph, 1 Water glyph.</td>
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
						<td>YOU: Please except my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your progress is satisfactory.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your knowledge has increased greatly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: To reward your dedication, I shall add to that knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Give me your Purify Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One Purify glyph coming up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin begins purifying it as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now, the Water Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Water, ah, here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin repeats the purifying on the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Lastly, the Rain Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You did get one didn't you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't have a rain glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well I happen to have a spare I can sell you for lets say thirty circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Guess I will have to buy one then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I will use one of mine then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin looks at the three glyphs with icy eyes until the process is complete.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now for the combination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Order is important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin places Purify, then Water, then Rain and starts the combination ritual.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It is finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Be ready as I demonstrate the spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Observe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A blue cloud forms above you in the small area and blue rain start falling from it, energizing your vitality.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your surprise is expected.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will take your glyphs back now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hands back your glyphs and your new one as the rain subsides.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will now purify your glyphs and cast the spell your self.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It gives a healing effect on all close to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: When complete, tell me what the spell wishes itself to be called.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Healing Rain</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The Blue Way has many of these combination spells, most not even discovered yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Only the truly skilled and brazen will discover these greater spells if not taught.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: One's knowledge must be great, and one must discover the order of the combination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Even then, they may not reveal themselves the first few times.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin eyes show a hint of sadness, the first sadness ever shown.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That is a lesson I learned in my youth, taught by one of the greatest Way mages to ever exist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: A truly great Blue Way Archmaster, he rivaled Archmasters of other Ways, almost surpassing them even in their own Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: No other I have known has been able to duplicate such skill in all Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: He did pay for it, in the end, dearly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It is not something I wish to discuss now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin holds out a hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Bracers for replacement.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin silently hands you another set of bracers, then studies you for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: YOU, it is time to finalize your skills in the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Only once you reach your limit I will accept your wand and give you your final test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: However, it is not going to be so easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: If you recall, I mentioned some time ago that you should mingle with practitioners of the two Ways that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I need for you to also bring me one Master's Set of Bracers from each of those two Ways, and give all three to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So, you will bring me your own wand and one Master's Bracer from the Crystal and Brown Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is to prove you have gained respect and support from the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Good luck, and set your roots deep.</td>
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
						<td>Rewards: 1 Rain glyph, 1 Master's Blue Way Bracers, 45 Faction with Blue Order, 19200 XP.</td>
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
