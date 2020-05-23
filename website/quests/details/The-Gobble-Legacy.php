<!doctype html>
<html>
<head>
	<title>The Gobble Legacy</title>

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
						<td>The Gobble Legacy</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Inviting-Talent.php">Inviting Talent</a> quest.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you use some help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I do wish you to help me, if you would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I have heard tell of two tribes of gobbles outside of Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I long to know more, in order to better record the lore of all creatures of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: A bard's duty is not simply to the noteworthy, but to the history of all the land.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: May I gain your aid?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd love to help gather information for your tale.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Many thanks, traveller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Please, speak to the Enkidukai of Ojaveda about gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: One among them may know more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I will grant you a gift of stones on your return with the story.</td>
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
							$npcName = 'Hirenn Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hirenn Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you help me learn more about gobbles?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn looks up a moment from his work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Ahh, I'm between orders now, and have a bit of time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Yes, I know a bit about them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: There are two tribes of gobbles in these parts, as I understand: the Eagle gobbles and the Serpent gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I trade in their parts sometimes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: That is all I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Jirosh Mikana trades goods all over Yliakum and may have heard more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Try asking him about Eagle gobbles or Serpent gobbles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn turns back to his work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Good day to you.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Eagle and Serpent gobbles?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Eagle gobbles and Serpent gobbles?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't have much cause to run around fighting creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It's bad for business, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His face creases in concentration.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Eagles and serpents, eagle and serpent…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Aha!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh laughs ruefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Right in front of my face, it was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The dsar doors here in Ojaveda are all decorated with a serpent and eagle emblem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But those doors were made long ago, so I don't know why that image was chosen, or what it may have to do with gobbles, if anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You might want to ask Brado about the Ojaveda doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He collects such tidbits to entertain his customers.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know why the entries are decorated like that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: 'Course I know about that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: My granddam used to tell me the story when I couldn't sleep as a cub.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: She was training be a lore mistress when she was younger, but ended up raising a family instead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: No one wants to hear that old tale at the bar, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: These younger Enkidukai don't seem to care about the city's history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Or maybe I care too much.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Never mind that, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I'd love to hear it told well, so I'll write it down for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado licks his lips and takes a scroll from below the counter and rapidly writes upon it, keeping an eye on you and the tavern door.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It warms my heart knowing there are still people out there that is interested in our history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: And yes, the gobbles do have something to do with it, but I won't tell you the tale just now, it's all written down here for you to read at your own leisure.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado smiles and rolls the scroll before passing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Safe journey to you.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got some information that might be of some help to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut carefully reads the scroll and then nods slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Yes, this tale is what I wished for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Good stone builds a strong home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Seat yourself, and I will begin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut bows kras head in thought and absently strums the harp.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a good while, Tyrus looks at you and runs kras fingers down each of the strings, catching your wandering attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Ready, are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please play. I am looking forward to hearing this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut begins to play an adventurous tune with a walking sort of rhythm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Noble Eagle reaches the river; espies a Serpent, seeking to cross.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Serpent asks her 'Carry me, winged one!'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut smiles and changes chords.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Eagle screeches 'Your breed I don't trust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: You will bite me, and I'll die flying!' Snake cries to her, 'Faith, and none are lost.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut harp shifts to a slow rhythm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Winged one grabs Serpent, talons gentle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: They fly over sky, 'til cry fills air.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut plays a jarring chord and changes key.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Bird, bitten, screams 'Why did you do so?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Voyage was over, safety so near!' Snake says 'Eagle, I am as I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: And you were fool to believe me more.' Serpent then squirms, striving for freedom,</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut harp begins a slowly repeating series of ascending chords.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: But Eagle goes higher, towards the Sun.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: 'Eagle will teach you to keep your word.' Serpent seeks ground, but Eagle flies on…'til wings stiffen, then both bodies…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: fall to the land.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Now that tale is done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut pauses, kras harp still singing but only gently. The tune gradually grows stronger, repeating the beginning phrases of the tune.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: But bards say 'Tale's end just starts the next.' And this tale lives on, gobbles prove it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Seek ye the river, Eagles you'll see; Snakes too, so called by the Enkidukai wit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Since each gobble tribe mirrors the life…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: of Serpent or Eagle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: So be it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut smiles and strums a closing phrase.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: There.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Is it worthy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It was wonderful! I want to hear it again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A slow smile creeps across Tyrus' face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: This poem pleases me, as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I hope to locate the proper place to perform it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut sets the harp aside and hands you some tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I give you these things with my thanks.</td>
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
						<td>Rewards: 1 Diamond Crystal, 1 Ruby Crystal, 1 Emerald Crystal, 30 Faction with Artists Association, 7310 Tria, 15000 XP.</td>
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
