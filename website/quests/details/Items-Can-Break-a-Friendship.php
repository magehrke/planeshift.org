<!doctype html>
<html>
<head>
	<title>Items Can Break a Friendship</title>

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
						<td>Items Can Break a Friendship</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Nevis Revori';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nevis Revori</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello! I am looking for an epic quest to bring excitement to my day!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Ah, quests!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: The last time I was on a quest I had a very bad surprise…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: so I will not get myself into anything like that any time soon!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I leave those kinds of things to other people!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh! Do tell about this surprise…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Eh, it's a bit personal, but since you ask I will tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I was travelling in the Stone Labyrinth with an EX-friend and we were assaulted by a big pack of Trepors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: We managed to defeat them all and we reached a place we had never seen before, just a bit further on past the Trepors' lair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: The place was a sort of outpost for adventurers, but it seems that fate was not good for the last ones there: they were all dead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: We searched their bodies and we found a number of items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: We decided to keep only the magical ones: a dagger and a pair of bracers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: But then I think my EX-friend tricked me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How cruel! How did this ex-friend trick you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: The fact is that I used a scroll made by him to identify the items, and just those two were magical.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: After we exited from the caves, he decided to keep the dagger and leave me the bracers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: But the bracers aren't magical any more!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: It's evident that the scroll he gave me was faked in some way, so he could keep the only magical item for himself, leaving me with a normal pair of bracers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I'm very angry with him for doing such a thing, and I will never speak with him again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: If you really want to know more, his name is Moren.</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You're Moren right? Nevis told me some interesting things about you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Mmm…you know that old story?</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Looks like that worthless reprobate continues to spread slanderous rumors about me to the whole city!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I think we are speaking of the same person…</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Nevis Revori, right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it was Nevis Revori.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Right, that reprobate tricked me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: We were exploring the caves and we found a few nice items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: We decided to only keep the magic ones, so I provided the needed scroll.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I paid for it and all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Anyhow, Nevis cast the spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: The liar told me that both items were magical, so I picked the dagger, the most interesting item to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: At home I identified the item again to learn more about it, and the result was a simple dagger with no magical properties!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: He lied to me, so I will never speak with him again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: His bracers are magical!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You are mistaken; the bracers are not magical either.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: What?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Moren listens as you explain.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: That sounds very strange; he is most probably lying again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: But I can't live with this burden: he was my best friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Let's do it this way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I will give you the dagger and you will try to learn more about it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Moren hands you the dagger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Take this and bring me some news.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, I have this dagger I need identified.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the dagger and looks it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Give me a few minutes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus casts a spell over the dagger and examines it carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That's quite interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There is no active magic on the item, but there is some dormant magic in a state of potential magical energy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: My best guess is that there is another item needed to trigger the energy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you find it, please bring it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: For now I will keep this item to study it more.</td>
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
							$npcName = 'Nevis Revori';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nevis Revori</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Nevis, I need you to give me the bracers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Hey, why do you need my bracers?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I suppose they aren't worth anything anyway, and they just remind me of that bad day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Keep them.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: These bracers may be what you are looking for, they were found together.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You think that these bracers might help us with the dagger because they were found together?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Sounds logical.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will investigate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus casts a spell over the bracers and examines both items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There's a big difference now that the two items are together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It seems that one item is triggering the magic of the other, so when they are separated, the two items do not have any magical effect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here is your mystery unveiled.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus hands both items back.-</td>
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
							$npcName = 'Nevis Revori';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nevis Revori</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Both items must be together for their magics to activate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nevis listens to the story you learned from Levrus, opening his eyes with surprise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Oh, what a relief!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: So he was not lying!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I'm very happy with this discovery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: How stupid I was to think he lied.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Thanks a lot for the effort!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Please give me back the bracers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course, here are your bracers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: Take this as a reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis: I'm very happy now.</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Both items must be together for their magics to activate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Moren listens to the story you learned from Levrus, thrilled about the discovery-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Incredible!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: That's why the items seemed normal after we split them up!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Thanks a lot for finding this out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I can finally speak to my old friend again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Can you please give me back the dagger?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I couldn't keep it, not with it meaning so much to you. Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I still can't believe I didn't speak to Nevis for all this time over this problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I have a special item for you as a reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Moren takes out a glyph from his small glyph sack and hands it over-</td>
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
						<td>Rewards: 1 Might glyph, 1 Vortex glyph[OR], 3391 Tria, 20200 XP.</td>
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
