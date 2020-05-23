<!doctype html>
<html>
<head>
	<title>Bjorid Needs Hiccup Help</title>

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
						<td>Bjorid Needs Hiccup Help</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Lost-Artifacts.php">Lost Artifacts</a> quest, 4 Charmflowers.</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look like you could use some help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Uh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid turns to look at you with a disturbed look on his face and puts a paw over his mouth, stifling a loud hiccup.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Hello there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid hiccups again. He nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I need a cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I can't st-</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid hiccups twice in quick succession. It looks as though it hurts him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Can't stop.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid swallows with a pained expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Ask- ask Vladovic for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid quickly takes a deep breath and pinches his nose closed with a paw and holds his breath, blinking at the occasional silent hiccup.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will head off to Vladovic immediately.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Mrm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid nods gratefully and motions urgently for you to go.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bjorid is in bad need of a hiccup cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Oh dear…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I did not have high hopes for that potion I gave him; we made it with dried charmflower, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But he was rather insistent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hmmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic slowly pokes around his shop looking for something as he talks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If I could get some fresh stems, I could make a stronger one that should do the trick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But they don't grow in these parts anymore; someone would probably have to go clear the other side of Hydlaa to find any- Ah.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic pulls out a dusty old book from a low shelf. He slowly stands up straight and looks you over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If you're willing to go, I can draw you a sketch to take with you so that you get the right flowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please draw it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Let me just make you a copy; then you may be on your way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic carefully finds a page with small drawings of different flowers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He studies one, leaning back away from the book, and then neatly copies out a charcoal sketch of it on a slip of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He gives you the sketch. 'Need four flowers' is written in the corner.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: See the triple-petal sort of crown?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Those are a bright reddish-pink; the center is red.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And there, the stem is usually crooked like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Four flowers should do the trick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Last I heard, there was a patch growing in the ruins near Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I will send someone over to let Bjorid know we are working on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Good luck to you, Madam, and safe travels.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Look, I found your flowers!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah, they are so vibrant when they are fresh!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic holds the charmflowers to his nose and breathes deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Mmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do you still have that sketch I gave you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I think I drew it on the back of a recipe I need.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic places the flowers in a basin of clear liquid and pushes them back and forth a few times with a pale wooden spoon.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then I'm glad I saved it! Would you like it back?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Just hand it back to me, if you would.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: places the sketch into Vladovic's waiting palm.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic flips the sketch over and holds it at arm's length. He studies it and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah yes, that's where it went indeed!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic bends carefully and sets the sketch somewhere under the counter. He straightens and rubs his wrinkled hands together.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Now, let me get to work here; we'll see what we can do for poor Bjorid!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic picks up a charmflower and slowly adds it to a stout ceramic container with a greenish liquid in it. The liquid fizzes and seems to dissolve the flower.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Good, good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic adds a second and third charmflower, closely watching the liquid. It slowly turns a gentle blue color after consuming most of the third flower.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: We won't need the fourth one, these are potent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic funnels the blue liquid into a potion bottle and corks it securely. He passes it to you along with the remaining flower.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Here's the cure; you can have this flower if you wish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Have Bjorid drink the whole bottle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It's very kind of you to help him so much.</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Vladovic tells me this should work much better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Ooh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Thank you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid hiccups and grimaces.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Do I drink it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, you have to drink the whole bottle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I will!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid hiccups twice more as he struggles with the cork. He gets the bottle open and quickly gulps down the contents. He blinks and makes a face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Bleeaahh!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid shakes his head quickly back and forth, his ears flapping.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Naaasty stuff.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid waits, a hopeful smile slowly growing on his face as time passes without sign of a hiccup.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Ohhhh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: oh, I think that's done it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid gently rubs his belly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Yes, it really seems to have worked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Oh, wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Thank you so much, Madam, Talad must have guided you to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Please accept these in reward for your kindness in helping me rid myself of that cruel curse of hiccups.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid gives you a pawful of coins; he then sets a gold ring on top of the small pile.-</td>
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
						<td>Rewards: 1 Charmflower, 1 Golden Ring, 30 Faction with Science Association, 7310 Tria, 25800 XP.</td>
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
