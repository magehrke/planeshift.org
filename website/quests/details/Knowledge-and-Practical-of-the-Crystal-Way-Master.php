<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Crystal Way Master</title>

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
						<td>Knowledge and Practical of the Crystal Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Crystal-Way-Master-Training.php">Crystal Way Master Training</a> quest, Rank 130 Crystal Way, 1 Master's Crystal Way Wand, 1 Adept's Crystal Way Bracers, 1 Life glyph, 1 Crystal glyph, 1 Energy glyph, 1 Light glyph, 1 Sight glyph.</td>
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
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
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
						<td>Govell: YOU!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell gives you a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You have made amazing progress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Although Practice is good, without the right knowledge it will go to waste.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell tugs on his robes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: It for this reason that I decided to share some Glyph Magic secrets with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Give me your Life Glyph.</td>
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
						<td>-Govell begins purifying it as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now give me your Crystal Glyph.</td>
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
						<td>-Govell repeats the purifying on the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Finally, give me your Energy Glyph.</td>
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
						<td>-Govell purifies it the same as the others.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: We will just wait a short while while cleansing completes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell looks at the three glyphs and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: There, they are purified.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now we order them in the correct manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is the important part, and the hard part.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell places Life, then Crystal, then Energy and starts a quick ritual.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: And here it comes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Energy starts flowing from the Crystal and appear to wash over and through Govell and his tattoos starts to shine bright.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You have to love the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell hands back your glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: So that was in the order of Life, Crystal, Energy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You can cast it on your self or on a target, give it a try.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now, I want you to research the equivalent spell for a group rather than one target.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell admires his tattoos still glowing brightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Hand me the glyphs responsible for that spell when you figure it out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here they are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Indeed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You have done well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell hands them back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The Crystal Way has many of these multiple glyph combination spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Many will never discover these spells because of the fact that spells will only reveal themselves if your skill levels are high enough, you learn the order in which they are combined, and a few other factors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Even then, they will most likely not reveal themselves the first few times.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell tattoos starts to fade again slightly, and his face grows sad.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I have the greatest of all glyph mages to thank for teaching me that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Most of the Archmasters alive today have that very same person to thank for our lives.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I am not talking about being cast into the trials of the Death Realm; I speak of the True Death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Ah, but that is a story for another time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I don't think you are quite ready for such a tale.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell holds out his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My Adept's Bracers as requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell in return hands you another.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Gilayall, go out and finalize your Crystal Way training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Only once you reach your limit will I give you your final test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Handing me your wand as per usual will indicate your readiness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: However, it is not going to be so easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: If you recall, I mentioned some time ago that you should mingle with practitioners of the two Ways that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I need for you to also bring me one Master's Set of Bracers from each of those two Ways, and give all three to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: So, you will bring me your own wand, and one Master's Bracer from the Blue and Azure Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is to prove you have gained respect and support from the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Good luck.</td>
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
						<td>Rewards: 1 Master's Crystal Way Bracers, 45 Faction with Crystal Order, 19200 XP.</td>
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
