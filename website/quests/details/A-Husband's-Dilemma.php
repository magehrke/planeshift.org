<!doctype html>
<html>
<head>
	<title>A Husband's Dilemma</title>

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
						<td>A Husband's Dilemma</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Loren-Chama-needs-a-wood-sculpture.php">Loren Chama needs a wood sculpture</a> quest.</td>
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
							$npcName = 'Jeyarp Grotemey';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jeyarp Grotemey</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I was wondering if you had something I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp looks you over and whispers to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Yes, you can help me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I need to figure out what my wife wants for our marriage remembrance ceremony coming up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: She thinks that I know what she wants, but I haven't a clue!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Can you give me a hand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I'll try my best. Where shall I start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Great!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp suddenly realizes he was talking too loud and continues in a hushed whisper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I recently ran across this traveling Dermorian merchant and bought Gayla a pretty little book with silver runes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It came with a nice bookmark as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: She opened it up to the bookmarked page and read it, and she jumped up and down, all excited.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp checks to make sure his wife is not listening. He continues to whisper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: She said that it was the 'perfect gift' and she's the 'luckiest woman alive.'</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Well, I was a bit surprised because the book was not very expensive, even though it was written in her native language.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I figured it must be a great book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: But she gave me the book back, not even reading another page, and said she can't wait for 'the rest!'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp looks anxious.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I just smiled and nodded, but I really don't know what she's expecting!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What was written inside the book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Oh, I could not read it, so I sold it to Jayose.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp rubs the back of his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Gayla didn't want it back.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings, I am looking for a book that Jeyarp sold you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Greetings, Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You are interested in that book Jeyarp sold me, are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I still have it here in the desk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I was hoping to find a buyer for it, as I believe the library already has a few copies just like it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You may have it for just fifty tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose takes the book out from under his counter and looks at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It even still has the bookmark.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose gives you the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: One book with an indecipherable title.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Well, not truly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: My assistant Arion could probably translate the Dermorian for you, but I haven't seen him around today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Probably out reading poetry somewhere again.</td>
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
							$npcName = 'Arion Fildar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Arion Fildar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you translate a book for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Hmmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: You want me to look at some book you have?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: By the Crystal…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion sighs in mild exasperation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: As if Jayose didn't give me enough to do already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: All right, give me the book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is the book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Hmmm…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion Fildar studies the book, gently turning pages.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Oh yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I have seen this many times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: It is a Dermorian gift book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: You just mark the page of the gift and pass it to the one you are giving a gift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: The page holds a riddle that describes the gift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Later, you give the gift and they reveal if they guessed it correctly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Did you want me to translate the bookmarked page?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh yes please!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I can translate a page for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Don't ask me for help with the riddles though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I am no good at those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Let's see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion opens the book and turns to the bookmarked page.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Ahh, here we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Three riddles here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: They rhyme beautifully in the Dermorian tongue; it loses a little bit in translation but I think I have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: The first riddle:</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion clears his throat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Hexa and Octa, brothers in light.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion looks expectantly at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: purple</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Well, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: The color violet does make sense!</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Good thinking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Let's try the next one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion pauses a second, frowning slightly as he focuses on the text.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Found deep in rock or swimming in a stream, we are prized for our beauty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: We are fire, ice or foliage hardened.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: crystal</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: A gem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Even I knew that one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Now, the last one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: It is pretty short.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion gives a dramatic pause.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: A bottomless container to put flesh and blood in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: ring</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Yes, that works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Kind of a disturbing way of describing a ring, but it works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: It is not quite so odd in the original Dermorian.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion closes the book and peeks closely at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Ah, here's the hidden latch.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion pushes at a flap of leather and latches the book closed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Now, if you excuse me, I have other things I need to attend to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion gives the book back to you.-</td>
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
							$npcName = 'Jeyarp Grotemey';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jeyarp Grotemey</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I figured out the next gift is a ring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Yes, my wife loves rings, but what kind of ring?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: amethyst ring</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Is that right?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp double-checks to make certain that his wife is not paying attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: She thinks I am going to get her an amethyst ring?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: How do you know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The book was a riddle book, that gives clues to the next gift.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Ahhh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I see, very clever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: And I know just the place to get this ring for her!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: That book sounds like it could be a lot of fun, now that I have a clue about how to use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: May I please have it back?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I have your book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp holds out his hands for the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Wonderful…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I appreciate all you have done to help me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I hope you don't take offense if I offer you a little money for your assistance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp pulls some coins from his purse and gives them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Thank you so much for helping me sort this out!</td>
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
						<td>Rewards: 25 Faction with Crafting Association, 5130 Tria, 13600 XP.</td>
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
