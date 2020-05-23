<!doctype html>
<html>
<head>
	<title>Relliom's Commodities</title>

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
						<td>Relliom's Commodities</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/An-Eager-Clacker.php">An Eager Clacker</a> quest, 1 Green Clacker Ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Green Clacker Ribbon from the An Eager Clacker quest.</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Relliom the green clacker ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You return once again, as I knew you would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Sysial is very talented, wouldn't you agree?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Such a grand find she was, and such unique abilities.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom takes the ribbon and rubs a small spot of grime from himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Sorry about the…dark appearance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It is difficult keeping one's self clean in such an environment, but we must all get our hands dirty on occasion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Now, I assume you are looking for another task, yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I have just the thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A certain person has been causing me…trouble, and must be taught a serious and final lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: For this, I have need of some basic commodities, and I believe you will do well to get them for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Will you offer your aid to me once again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, your word is my command.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom nods in approval.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The target of this task is travelling spice merchant named Jeroric, though the name should not matter to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: In Jeroric's name, I have ordered an item from Kada-El's Tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Allelia will know about Jeroric's order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I'll give you the order receipt…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom pats his pockets in a way that clearly indicates he does not expect to find anything.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: …oh dear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I must have misplaced it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Lost items are so hard to track, wouldn't you say?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It would be a shame if they did not believe Jeroric signed the order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: If she asks, tell her you lost it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Come straight back once you get it.</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here to fetch Jeroric's order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Ah yes, I have it right here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Do you have the order receipt?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It has been lost.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia smile falters.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Well…it was supposed to be picked up by now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: In fact, it was supposed to be picked up only a little while ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Out of town people are so hard to deal with sometimes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia looks thoughtful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I guess I can trust you with it, since you knew the order had been placed…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia smile returns and she holds out a bottle filled with a substance you can not identify.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: It is quite hard to find so be careful with it.</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Relliom the order from Jeroric.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom's eyes seem to sparkle for a second as he nods in a manner so gracious it borders on condescension, then looks around for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: My thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: One has got to be very attentive when he is surrounded by creatures and fiends.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Jeroric always picks up his orders on time, but he seems to be…preoccupied with other business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: So preoccupied, in fact, that he seems to have forgotten a few more orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You will pick them up and deliver them to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Take these to the people they are addressed to and do not come back until you have them all.</td>
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
							$npcName = 'Willam Chorind';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Willam Chorind</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Willam the order from Jeroric.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam opens the envelope and pulls out a page, reading it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Finally, he was supposed to pick this up hours ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I do hope he's all right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: He comes around every few months to deliver spices and make a deposit, but he's been acting very strange these last few visits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Could you ask about him for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll ask as soon as I see him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Thank you and here you go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-William hands you a box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Always looking over his shoulder the last I saw him…</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: poor fellow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I do hope everything is alright.</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Amidison the order from Jeroric.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison looks you up and down before turning her attention to the scroll.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: It's very odd that Jeroric had me do this for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: His business has been doing well from what I heard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Have you any idea why he's been acting so oddly?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: So, there is a reason?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison thinks for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Don't tell me, I've no need to pry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison hands you an envelope.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Here you go.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Jefecra the order from Jeroric.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra breaks the seal on the scroll and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Well…okay, here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Quite the expensive piece, but the money he sent more than covered it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra hands you an intricate looking dagger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Was very odd that Jeroric asked me for this, as we only talk once in a while when he passes through.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: But I guess he knew I had contacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Wonder what he needs it for…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: The ways of the rich, eh?</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are all the items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Very well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Your value is rising in my eyes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom turns the dagger over in his hands, admiring it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Interesting thing, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Jeroric seems to want the oddest items lately…as far as those fools are concerned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: We know better though.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom laughs and sets the dagger on top of the box from Willam before picking up the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Hmm…I wager Jeroric would like to know what this says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Too bad he will never find out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom gives you a thoughtful look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: All that running around might make one curious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I must ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Do you have any questions, queries, or something else tickling the back of your mind?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Perhaps you would like to know about Jeroric, since you will not be meeting him personally?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Ask, and I will answer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No questions.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Curiosity is a dangerous thing down here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Here is a little something for your unquestioning obedience.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom reaches into an oddly familiar box and hands you some coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I will see you again after you have proven your worth to the others, YOU.</td>
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
						<td>Rewards: 55 Faction with Cabal of Whispers, 7310 Tria, 15000 XP.</td>
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
