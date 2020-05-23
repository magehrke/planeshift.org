<!doctype html>
<html>
<head>
	<title>Trasok's Wrinkled Riddle</title>

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
						<td>Trasok's Wrinkled Riddle</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Vladovic-Needs-Dried-Maajo.php">Vladovic Needs Dried Maajo</a> quest.</td>
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
						<td>YOU: I thought I'd stop by and see if you have any errands.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Indeed, I have a small errand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I have arranged for Trasok the smith to construct a new alchemical furnace for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: My old knees would complain all the day down the hill and back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Perhaps you'd be willing to visit the smithy and check with Trasok for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I’ll to see him as soon as I can.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you for being so helpful.</td>
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
						<td>YOU: Vladovic sent me to check on his alchemical furnace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Huh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok looks up with some confusion. His beard is in disarray.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What're you getting at?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, yes, the furnace for…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: for…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: for Vladovic..</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ehhh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: it's not done yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I was working on it yesterday morning but I can't work right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can't work…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok rubs the side of his head, frowning and looking at nothing in particular.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's wrong? Why can't you work?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: A friend of mine and I exchange puzzles, and this time he's sent me an ulbernaut of a riddle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I barely slept last night for worrying at it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok looks at his hands and mutters what sounds like 'Behead me… trees?'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Uhh, tell Vladovic..</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: blast…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: tell him if he can help solve this riddle, I can finish his furnace!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok digs a battered page of a letter from his apron pocket and gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: There.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Give him that, maybe two heads'll be better than one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Tell him it's got me stumped.</td>
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
						<td>YOU: Trasok needs help with this so he can get back to work on your furnace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: What's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Rather wrinkled…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic smooths the sheet and holds it out at arm's length to read it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: When I am whole, I am strong and safe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But behead me once, and I am become a place of meeting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do so again, and I then am the partner of ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Restore me, and then I am the domain of beasts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic looks at you with a puzzled expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A riddle?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: why?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok can't solve it and it's keeping him from working.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Too tough for Trasok, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: No wonder the smithy's been so quiet today, he's probably too distracted to work with hammers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I'm not sure my old wits will prove any sharper, but I suppose we can give it a try.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Let me know if you guess it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic slowly leans on the counter and studies the riddle in silence.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: stable</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A stable…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: by the Gods, I think you've got it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That fits!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Had you heard this one before?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic straightens slowly, wincing and putting a hand to his lower back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Eeeh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic says: Take that back to Trasok and tell him the answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That was not very difficult!</td>
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
						<td>YOU: gives the wrinkled riddle to Trasok.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, bringing it back, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Did you come up with an answer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, we figured it out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, really??</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What is it!?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok listens attentively.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The answer is stable.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok eyes widen and he smacks his forehead with the palm of his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Gah, I feel like a lumphead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I was looking at it in all the wrong ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I see it, I see it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Stable, then table, then able.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok Starhammer shakes the wrinkled riddle in his hand and bounces on his toes a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ahh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now I can get back to work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Wonderful, Sir, my thanks to you and Vladovic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Hang on, let me send him a note.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok quickly writes a note to Vladovic and gives it to you.-</td>
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
						<td>YOU: Trasok sent this note back for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I hope he was pleased with our answer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic squints at the note and deciphers the scribbled writing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It certainly seems so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: He'll be delivering the furnace personally as soon as it is finished; he says that he won't charge me a tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And I certainly could not have done it without you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I would like you to have this; it is in exchange for your astute assistance!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic gives you several coins.-</td>
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
						<td>Rewards: 40 Faction with Science Association, 12958 Tria, 17800 XP.</td>
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
