<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Brown Way Master</title>

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
						<td>Knowledge and Practical of the Brown Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Brown-Way-Master-Training.php">Brown Way Master Training</a> quest, Rank 130 Brown Way, 1 Master's Brown Way Wand, 1 Adept's Brown Way Bracers, 1 Tree glyph, 1 Creature glyph, 1 Wall glyph.</td>
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
						<td>YOU: My wand, Master Mulgik.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Your increased skill brings me great joy, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The Brown Way and natural order are most wondrous things, are they not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: To feel their power flow through you is to be closer to Xiosia.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik grins widely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Of course, you do not have to follower Her ways to enjoy the power that comes from Her realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: But, your continued striving does bring me pride in any case, and the knowledge growing inside you pays homage to Xiosia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: To reward your dedication, I shall add to that knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Give me your Tree Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tree, ah, here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik begins purifying it as kra speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Ah…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Tree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This glyph is the source of plant life in the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It is growth itself, and its roots are deep.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Now give me your Creature Glyph so I may continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are Archmage.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik repeats the purifying on the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Lastly, the Wall Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I come prepared, here is my Wall glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik takes your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I will use this one then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik looks at the three glyphs with kra's earthy eyes until the process is complete.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Now for the combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Order is important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik places Tree, then Creature, then Wall and starts the combine ritual.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It is finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Please stand back as I demonstrate the spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Observe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The surrounding plant life bursts into growth, wrapping around the Mulgik's body in a tough armor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Amazing is the power of nature!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Look at how she reaches out to protect me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik hands back your glyphs as the armor subsides.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will now purify your glyphs and cast the spell your self.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It grants temporary perfection in mind and body.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: When complete, tell me what the spell wishes itself to be called.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: animate vegetation</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The Brown Way has many of these combination spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It takes Xiosia's own luck to discover them without being taught.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You must also have great knowledge in your Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Even with knowledge and power, your combining may still fail.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik eyes show a hint of sadness, the first emotion you have ever seen shown.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: That is a lesson I learned in my youth when I was yet an Adept like yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: That was so long ago…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: He was a Blue Way Archmaster, but knew nearly as much in all other Ways as the Archmasters themselves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I have never seen nor heard of anyone to achieve such greatness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It is not something to be discussed now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik holds out a hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My bracers as requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik silently hands you another set of bracers, then studies you for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: YOU, it is time to finalize your skills in the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Only once you reach your limit will I accept your wand and give you your final lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: However, it is not going to be so easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: If you recall, I mentioned some time ago that you should mingle with practitioners of the two Ways that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I need for you to also bring me one Master's Set of Bracers from each of those two Ways, and give all three to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: So, you will bring me your own wand, and one Master's Bracer from the Dark and Blue Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is to prove you have gained respect and support from the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Good luck, and set your roots deep.</td>
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
						<td>Rewards: 1 Master's Brown Way Bracers, 45 Faction with Brown Order, 19200 XP.</td>
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
