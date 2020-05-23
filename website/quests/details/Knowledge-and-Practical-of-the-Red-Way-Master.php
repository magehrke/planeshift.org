<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Red Way Master</title>

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
						<td>Knowledge and Practical of the Red Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Red-Way-Master-Training.php">Red Way Master Training</a> quest, Rank 130 Red Way, 1 Master's Red Way Wand, 1 Adept's Red Way Bracers, 1 Lava glyph, 1 Hand glyph.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned for more training … Oh, and my wand as proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: YOU!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd gives you a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have made amazing progress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Although Practice is good, without the right knowledge it will go to waste.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd shines an apple on his robes and takes a bite.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I gave you a Brown Way glyph with your last testing, and told you to research the spell for protection.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I hope you have done so.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd raises an eyebrow at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Hand me the Red Way glyph that combines with the Brown Way one I gave you to form the protective spell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would that be, this one?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd inspects the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Owning one of these rare Red Way glyphs is enough proof of your Red Way dedication.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I already knew you had it didn't I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Let's see if you have been paying attention.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Give me the glyph that combines with Lava to form an attack spell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Indeed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have done well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands it back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The Red Way has many of these multiple glyph combination spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Many will never discover these spells simply because of the fact that they are only discernible if your skill is high enough, you learn the order the energies must past though the glyphs to make the spell, and a few other factors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Even then, they will most likely not reveal themselves the first few times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I have the greatest of all glyph mages to thank for teaching me that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Most of the Archmasters alive today have that very same person to thank for our lives.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I am not talking about being cast into the trials of the Death Realm; I speak of the True Death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ah, but that is a story for another time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I don't think you are quite ready for such a tale.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd holds out his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My Bracers, sir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd takes your bracers and gives you a new set.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: These will give both proof of your advancement, and will help you in training, YOU, High Master of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, go out and finalize your Red Way training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Only once you reach your limit will I give you your final test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Then you will once again give me your wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: However, it is not going to be so easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you recall, I mentioned some time ago that you should mingle with practitioners of the two Ways that support ours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I need for you to also bring me one Master's set of Bracers from each of those two Ways, and give them to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is to prove you have gained respect and support from, well, the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Good luck.</td>
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
						<td>Rewards: 1 Master's Red Way Bracers, 45 Faction with Red Order, 19200 XP.</td>
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
