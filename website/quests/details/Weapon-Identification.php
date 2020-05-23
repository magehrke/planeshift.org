<!doctype html>
<html>
<head>
	<title>Weapon Identification</title>

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
						<td>Weapon Identification</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking for work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I've had this greataxe that someone sold to me ages ago, and I think it may have some history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Will you take it around and see if anyone knows anything about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can have an ask round for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Oh, thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Take this axe and see if you can find out anything concerning its history or who it belonged to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You might try Harnquist in Hydlaa or Trasok in Ojaveda to start with.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It was sold to me ages ago by an Ylian male whose name I can't recall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: He was old then and has likely passed from this realm by now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: He was accompanied by a dwarf; a smith, by his looks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: They were both kinda quiet-like and the exchange was made without much ado.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It's been a mystery ever since.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To be honest, I put it away in the rafters and forgot about it for years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Didn't seem right to sell it, seeing how it was pretty old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I found it while cleaning.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: shows the greataxe to Trasok.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, my.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I haven't seen a weapon such as this for a very long time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I don't exactly recognize it, but I can tell you that it's StoneHammer in origin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: There is one other person in the area who might be able to tell you more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Her name is Nyshyn Klannarr, and she's usually found in Dsar Sarraghi or out in the wild exploring ruins or similar old places.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: But seeing as Dsar Sarraghi is closed, I'd try searching the ruins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You should try to find her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: A word of advice: she doesn't work for free.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok strokes his beard as he thinks for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You could also go and see Grimal in Hydlaa, he is an old veteran who might know about this weapon.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you recognised this weapon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal seems to perk up as holds the axe in his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: It's a wonder old axe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rubs the blade with his sleeve.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: See here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: These marks were placed on a series of weapons made during an invasion wave from the Stone Labyrinths, I was allowed to use one for a short while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: These are, or were, some of the finest blades made.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal squints and looks at the blade some more.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Sorry I can't tell you any more about this one specially, but good luck with your research.</td>
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
							$npcName = 'Nyshyn Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nyshyn Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you think you could find anything out about this axe?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Hmm, this is an interesting to say the least.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Do you have any information for me to start with?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: With no idea it could take me a very long time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Grimal said it was used by some exceptional warriors to fight off Stone Labyrinth invasions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Well that's certainly a nice start point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I could study this for a while and then I'll have your answer, provided that you can do me a favour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I need some ink and paper for use in my explorations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I need to make notes and rubbings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I think you may find them at the library in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Please come back when you have the items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah, that's what I need!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Thanks so much for bringing it all the way out here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: But then, I still have your axe, so you kinda had to, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Anyway, here's what I've learned about this weapon: it is indeed Hammerwielder in origin, as Trasok told you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What he didn't know is that it was made for an Ynnwn champion to wield in battle defending against invaders from the Stone Labyrinths beyond one of the Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I've detailed all the information on a scroll for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Take it and the axe with my thanks for the opportunity to study it.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've found out a lot. Here's your greataxe and its history.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Ah, thanks for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I'll go put it away.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori pauses to read over the scroll.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Oh, my goodness!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You actually did find some history on this old thing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Wow, I never thought it was used in battle defending Yliakum from an invading horde!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This is quite marvelous!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Many thanks, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Please accept this for all your hard efforts.</td>
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
						<td>Rewards: 2107 Tria, 9400 XP.</td>
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
