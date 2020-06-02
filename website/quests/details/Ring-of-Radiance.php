<!doctype html>
<html>
<head>
	<title>Ring of Radiance</title>

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
						<td>Ring of Radiance</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Lyrus-Has-An-Idea.php">Lyrus Has An Idea</a> quest, 3 Silver Ores.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any other work I can do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Oh, you're back again, my helpful Kran?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It seems you are just in time, as I need an errand run for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Levrus - you know of Levrus Dahrenn don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Well if you don't, Levrus is a mage of some skill over near Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Anyway, he asked me for something and I have it for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Will you deliver it for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I can manage it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Good, I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Here is what I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Levrus has heard about my new ring making method and thinks he can make a new and improved magic ring for something or other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I don't really know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Humans have strange ideas about magic, don't you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Anyway, he asked me if I had another of these rings for him to play with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It so happens that I do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus gives you a ring that appears to be made of diamond.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Take this to him, and I will give you some coin on your return.</td>
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
						<td>YOU: This ring is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh my, but this is lovely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: One of Lyrus' new pieces is it not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, I can tell by the feel of her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Very secretive one, that woman, but no matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This will be perfect for my experiments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you care to know what I am trying to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure. It should be… interesting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: How delightful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, I have been doing some research on the numerous types of familiars, and I think I have discovered some more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No, no, I won't tell you about them yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I don't even know if they are able to be summoned to this plane.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But, if they can be, I will need something more substantial than gold to hold the enchantments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you see?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Thank you for bringing this to me; I believe Lady Lospur is expecting this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus Dahrenn hands you an egg.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, no, not that…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I mean this, I'll take that back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the egg back and gives you a pouch containing coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, yes, that is better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Take that to Miss Lospur, please.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Fabulous!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus hefts the pouch in her slender hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Yes, that feels about right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Very upstanding man, Levrus…</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: for a Xacha.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Anyway, thank you for your help!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I do hope to see you around again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus opens the pouch and counts out some coins for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Actually, could you do me a little favor first?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I would like you to go and visit Levrus again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I am heartily curious regarding how his experiments are coming.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: If whatever he is doing works out, it could mean a very large, very long term commission for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Will you go see?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Absolutely. Chatting with him is always entertaining.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Good to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Remember to keep this all rather quiet, won't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It's no secret that I am making these rings now, but if they are capable of what Levrus thinks they are…</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: well, I'll have customers coming out of my ears and</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus pauses and cranes her neck to look over your shoulder to see if anyone is watching. She smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I am just not ready for that yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Please go and ask him how his research is going.</td>
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
						<td>YOU: Did your tests on the ring go well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, hello again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: How is it going?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What are you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh that?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Alas, the experiment was a complete failure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The creatures I discovered are irrevocably tied to their home plane.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Too bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Fortunately, the ring itself was not destroyed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm, humm, hemm, but now I have another idea, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you will go and get another of these rings from Lyrus, I think I will make something special for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Just tell her that I need another; the girl is clever enough not to ask too many questions.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Levrus would like another of your specially crafted rings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Another ring?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: How strange.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus considers for a long moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: All right, I will let him have one more, but that is all, until I learn more about what he is doing with them.</td>
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
						<td>YOU: admires the sparkle of the ring as Levrus takes it in stained fingers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, my latest experiment has worked out very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: While you were gone, I enchanted the last ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It is not quite what I'd had in mind originally, but I think you will be pleased.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The true test now is to see if I can replicate it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, I will need three bits of silver ore and a bottle of pure water and then I may proceed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus gives you a green glass bottle marked with silvery runes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Use this to carry the water or it shall be spoiled for our use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you will go get those ingredients for me, I will prepare the rest.</td>
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
						<td>YOU: May I have some of the water from this pool?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: My, what an interesting bottle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet looks it over, then uncorks it and kneels by the pool for a minute to fill it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The wind may be heard blowing over the wall in this quiet moment and ripples cross the pool.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: There, one bottle of pure water.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet corks the bottle and returns it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Farewell, and may Xiosia lead you to peace.</td>
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
						<td>YOU: I've brought the reagents you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: thank you, Gemma, but why are you giving me these?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus looks puzzled and then his face brightens.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh yes, the ring!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus giggles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus holds up the water and peers at the bottom of the bottle for a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Very good, I see no sediments.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus uncorks the bottle and drinks from it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Mmm, excellent water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, let's see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: the ring, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Give me just a moment and I will have this ready for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus sets the ring upon a nearby table, softly chanting words you cannot make out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus dashes the ring with pure water from the bottle and places the three silver ores around the ring. He frowns at the arrangement and murmurs a single word. The water suddenly flares up in bright blue flames and burns away the silver ores, their azure smoke and fumes funneling into the ring.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus then claps his hands together once and thrusts them towards the ring, palms-down, causing a small flash of brilliant light that surrounds the ring, leaving it with a soft glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus sighs and wipes the back of a hand across his suddenly-sweating brow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, yes, this does seem to work indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here you are, the second of my Rings of Radiance!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: With it, you will find yourself a little more attuned to the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Please, go back to Lyrus and tell her that it worked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will be wanting more of these in time.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The latest tests have proved a success. Levrus is pleased.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: That is very good news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I suppose I will be expecting some orders for more rings from him soon enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: You have done me a very great service and I thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus smiles at you, pleased. She opens her purse and gives you three golden circles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Please accept these as a token of my esteem.</td>
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
						<td>Rewards: 1 Ring of Radiance, 25 Faction with Artists Association, 15 Faction with Nolthrir, 5530 Tria, 13600 XP.</td>
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
