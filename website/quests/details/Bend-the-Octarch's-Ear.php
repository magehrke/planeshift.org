<!doctype html>
<html>
<head>
	<title>Bend the Octarch's Ear</title>

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
						<td>Bend the Octarch's Ear</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Kilas'-Test-of-Education.php">Kilas' Test of Education</a> quest.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I be of use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Ah, YOU, it's good to see you again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Think you can handle it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd love to try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: That's the spirit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: As you might know, I'm an architect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I have lots of plans for houses - you have the Housing Layout - but the Octarch has been slow in reviewing them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Naturally the Octarch has lots of work to do, but Hydlaa is on the brink of a housing shortage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I can think of four of the Octarch's confidantes who might be able to speed up the review.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: If you can get them to agree to that, I'll reward you greatly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Make sure you ask me about those confidantes before you go running off; I'll give you a list.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Good luck!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who are those confidantes you mentioned?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: One is of course the Vigesimi Amidison Stronghand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: The Octarch is bound to listen to a Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: There's also an aristocrat by the name of Loren Chama, a personal friend of the Octarch's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Saria Dunwallow is the Octarch's clothier with more influence than she lets on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Finally, Commander Raithen of the Shadow Squadron has known the Octarch for some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Ask them to speed up the review, or just tell them about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You'll think of something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Providing for their wants and needs will probably get you better results.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Don't let me down, YOU.</td>
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
						<td>YOU: Is there any way you can speed up the review of housing plans for Hydlaa?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Thanks for bringing this to my attention, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: But I can't go to the Octarch empty handed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: You do have a plan on paper, do you not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: A layout of some kind?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: offers the housing plan to Vigesimi Stronghand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Let me see that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She studies the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Everything looks to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: It's obvious a lot of work went into this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I shall bring it to the Octarch's attention as soon as I can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Take this seal as a token of my word,</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There's about to be a housing shortage in Hydlaa. Can you help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: More common rabble in Hydlaa?</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Bah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Why should I help in this endeavour?</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Although, five hundred tria might make me think twice about it…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren smiles greedily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is a 'contribution' for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Here's a seal of verbal contract.</td>
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
							$npcName = 'Saria Dunwallow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Saria Dunwallow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would you be willing to talk to the Octarch about the housing shortage?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: What's that, darling?</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: You want me to speak to the Octarch on your behalf?</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Normally, I'd be all too happy to help, but it will have to wait a few weeks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: I need to take a trip to Ojaveda and pick up my custom-made carpet from Brintec.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Do you know where I'm going with this, dear?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm pretty sure I can guess.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Take this receipt to Brintec.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm here to pick up Saria Dunwallow's carpet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Very good, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Here's the carpet for Ms. Dunwallow as promised.</td>
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
							$npcName = 'Saria Dunwallow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Saria Dunwallow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are. It's quite heavy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Marvellous!</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: This saves me so mush time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: I can see the Octarch with little delay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Saria: Here's my word; it's my bond.</td>
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
							$npcName = 'Raithen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raithen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I could use your influence to help fix the housing problem in Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: And just when do you think I'll be able to speak to the Octarch?</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: As if it matters to me - do I look like a Hydlaan?….</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Raithen sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Listen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: It's not your fault.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I'm just upset because I can't leave my post to buy a ticket to the Pterosaur Arena show before they're sold out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Too bad; I know the Octarch will be in attendance and I could discuss the matter then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: The saddlers usually have tickets to sell.</td>
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
							$npcName = 'Krestal Dhusho';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krestal Dhusho</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any Pterosaur Arena tickets to sell?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Yes Sir, I've got a handful left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Only ten Tria!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A jingling sound is heard as YOU pulls some coin from his money bag.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Pleasure doing business with you, Sir.</td>
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
							$npcName = 'Raithen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raithen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You were fortunate. There were a few tickets left.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: This is much appreciated.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I shall let the Octarch know about Hydlaa's needs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Take my seal.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got the support of all those on your list.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I'm impressed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Now, give me the seals, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here they are; all accounted for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: YOU, I think you might just have helped the housing shortage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: After all this persistence, things are bound to happen soon!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You have earned this, and my respect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas hands you a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: If you like, I can point you in the right direction for others I know of that can help you further your educational quest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, who else can I speak with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas Tungse breaks a wide grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Ohh, that's wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: There is so much to tell you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas Tungse ponders for a moment, straightens his posture out, and speaks with enthusiasm and extreme precision as if he pretty much knows everyone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Let's start right here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Over in the arena, I have it on good authority that the arena boss, Gregori Stevald, has been asking around about something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Perhaps he may have some tasks for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Over in Ojaveda, the smithy, Trasok, may be a standing member of the Crafting Association, but I know he loves brain teasers…riddles that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Over in Gugrontid, there is a brilliant Kran by the name of Kerryk Cor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: And if you're ever out by the Eagle Bronze Doors, in the wilderness you may find a campfire and there you'll often find two fierce competitors of Octarch's Chess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: And by the water wheel at the fortress there, you can often find a very good friend of mine, Thrynt Glass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Finally, should you ever earn your way into the winch area, the folks there often have something for passers by to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: In particular, Raul Ursino is a friend of mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: After that, in the winch building, itself, you'll find a brilliant engineer by the name of Lerok.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's a lot of good information, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Not a problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I'm always glad to keep our fine citizens well informed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas Tungse smirks with satisfaction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Safe travels, my good friend.</td>
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
						<td>Rewards: 1 Weapon glyph, 15 Faction with Science Association, 9400 XP.</td>
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
