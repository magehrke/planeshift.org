<!doctype html>
<html>
<head>
	<title>Becoming a Blue Way Adept</title>

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
						<td>Becoming a Blue Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Blue-Way-Glyph-Training.php">Blue Way Glyph Training</a> quest, Rank 40 Blue Way, 1 Apprentice's Blue Way Wand.</td>
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
						<td>Sharven: And so the student returns.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven has another look at his cargo before handing your wand back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Did you manage to get the Water Glyph I asked you to study?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am quite busy here, so I may have forgotten to mention it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Either way, do you have it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I had no idea I needed it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Hmm, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Although Blue Way has many different glyphs, they can be difficult to obtain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is said that Blue glyphs like to form around water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Since water is always moving, you can imagine the difficulties glyph hunters have in tracking them down.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You do need a Water Glyph to continue.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven seems lost in thought for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once you have the Water Glyph, I will need you to tell me what spell it can produce.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I ask you where to find the Water Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: As I said you need a glyph hunter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Try to ask around, maybe someone will sell it to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven scratches his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: There's another way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know a Ylian man who uses various glyphs to study anti-magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He's the alchemist in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do you know him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: vladovic</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Exactly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am sure he would have a Water Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He continues to ask about Dried Maajo, I think he's full of it to his Ylian neck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Uhm, maybe you can bring him herbica exotica…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: no, too difficult for only a glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Gobo roots?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Nah….</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: he will think you're an Azure Way student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We need to be original.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I ask you what you have in mind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Vladovic is an alchemist, and alchemists always need pure water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Here, take this magic bottle and ask to Jardet Forsill to fill it with pure water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will find him in a garden in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Then take the bottle to Vladovic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I'm sure he will give you the glyph.</td>
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
						<td>YOU: Sharven told me you can fill these bottles with pure water.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Ehhh, you're not the first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I think Sharven has an evil plan.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet bends down, and starts to fill the empty bottle with pool water.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Tell me the truth; he plans to drain out my fountain!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet continues to fill the bottle, for several minutes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And you Blue Way students are his accomplices.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-At last, Jardet finishes filling it, then smiles friendly while he hands you the bottle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Take it, and have a nice journey.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Oh, take care, it's heavier then it seems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Someone told me you could use some Pure water.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic looks you over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: An apprentice in the Blue Way?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well then, I assume you want a Water Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Let me see what I have…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic scratches around in a little bag.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now where did I put that?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic searches under the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Hmm?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic pats his pockets and then removes a glyph from it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Ah, here we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I suppose I am done with it after all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Good luck in your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You will want to tell Sharven what spell you can cast with it.</td>
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
						<td>YOU: rinse</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Correct, It is good for clearing the mind, especially between long sessions of concentration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Congratulations YOU, you have passed the second part of my testing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven pulls out a robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: This robe completes your set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Your testing with me is complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: However, you will have to train with me to the extent of my abilities.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then what?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once I can no longer train you, you will seek out Tarmeen for your next tests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will need to hand him two wands, one belonging to you and one from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Each Circle requires this of its students to prove that they not only have the respect of their teachers, but also that of their fellow students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: After that, he will advance you into the next level of testing.</td>
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
						<td>Rewards: 1 Water glyph, 1 Apprentice's Blue Way Robe, 20 Faction with Blue Order, 13200 XP.</td>
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
