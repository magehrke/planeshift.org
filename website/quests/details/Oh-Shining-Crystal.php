<!doctype html>
<html>
<head>
	<title>Oh Shining Crystal</title>

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
						<td>Oh Shining Crystal</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Bend-the-Octarch's-Ear.php">Bend the Octarch's Ear</a> quest.</td>
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
							$npcName = 'Ondren Torr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ondren Torr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Got any jobs for a poor adventurer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Well honourable Stonehammer, perhaps there is something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Doing business all day can be taxing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Nothing would soothe me as much as reading a fine Kran poem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: I believe that some of the greatest Kran writers lived here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: If you could perhaps find me a slim volume of Kran poetry I would be delighted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll see what I can find.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Most kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Good luck in your search honourable Stonehammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Perchance the local library might have some tomes.</td>
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
						<td>YOU: I'm looking for a book of Kran poetry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It's possible we may have some.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose rummages through a catalogue.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Nothing in here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Perhaps Arion…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose pauses a moment and then hollers at the top of his voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Arion!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Silence, the only reply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Arion Fildar!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-From upstairs a female voice shouts: 'This is a library! Be quiet!'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Oh, for the love of Talad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose shouts back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This is my library and I want that no-good, mushroom eating, lazy, useless mud dobber of an assistant!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose takes a deep breath and tries to control himself. In a more measured tone he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: That fool is probably off one of his so-called 'breaks.' If you want Kran rhymes, go find him and tell him I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And while you are at it, give the little trepor spawn a good kick in his thesaurus.</td>
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
						<td>YOU: Jayose is looking for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Oh dear!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion blanches.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: The master is vexed again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion looks at you imploringly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Please do not tell him where you found me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I'll help you with anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Just name it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm on the hunt for some Kran poetry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I was cataloguing poetry just the other day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Let me think.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion adjusts his spectacles absentmindedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I do recall a volume of Kran poetry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: What was it called again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Ah…</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: It was called Oh shining Crystal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion suddenly looks a bit worried.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: But I lent it to Aliress Doomforge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: If you can get it from her I will scribe you a copy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Deal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I really need that book. I'll visit her.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Oh thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Hurry back when you have it.</td>
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
							$npcName = 'Aliress Doomforge';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aliress Doomforge</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Arion said he lent you the book, 'Oh shining Crystal'. He would like it back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: I do have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: The thing is…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Aliress has the grace to blush a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: I was reading it by the fireplace the other evening and I fell asleep.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Somehow it must have fallen from my lap and into the embers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: It's not completely ruined, but most of the pages are severely charred. I am so sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: I will pay for the book to be replaced of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Please take the remains and return it to Arion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: He can let me know how much I owe.</td>
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
						<td>YOU: Here's the book… such as it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Oh no!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion's glasses mist over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: This was the only copy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: What will I do now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion looks wildly around in panic.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I have a good memory for words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I will scribe the book from memory.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion whips out a blank book and begins writing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Er…</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I don't quite remember how this line went.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion reads aloud.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: '…or so I've been told, your smile like rubies, your kisses like…'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion looks up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: What rhymes with 'told'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Perhaps 'gold' is the right word?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Good clue!</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Got it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion digs some wax out of his left ear and writes while mouthing the words.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Y-o-u-r k-i-s-s-e-s l-i-k-e g-o-l-d.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Now let's look at the next problem line.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: '…no love is colder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: In my heart's quarry, you are my…'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion thinks again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: What does with 'colder'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How about 'boulder'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: You are really good at this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion writes again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Y-o-u a-r-e m-y b-o-u-l-d-e-r.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: There!</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: As good as new.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Just one more and we're done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: '…</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: for the hills know, your words are an avalanche, I am hopeless…'</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: What goes with 'know'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think 'below' would fit here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I a-m h-o-p-e-l-e-s-s b-e-l-o-w.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion smiles in relief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Thank you my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: And here is your copy.</td>
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
							$npcName = 'Ondren Torr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ondren Torr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You won't believe it. I found your book!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Thank you, honourable Stonehammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: I appreciate your kindness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: I will not forget you, -name-.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren: Please take this as a small token of my gratitude.</td>
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
						<td>Rewards: 1 Crystal glyph, 10 Faction with Science Association, 3391 Tria, 12200 XP.</td>
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
