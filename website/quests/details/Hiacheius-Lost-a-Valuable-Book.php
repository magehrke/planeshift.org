<!doctype html>
<html>
<head>
	<title>Hiacheius Lost a Valuable Book</title>

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
						<td>Hiacheius Lost a Valuable Book</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Canyt-Needs-a-Stone-Tablet-Identified.php">Canyt Needs a Stone Tablet Identified</a> quest.</td>
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
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you need help with something?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hrm...er...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hiacheius Dilechi looks somewhat frazzled.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Umm, I am somewhat b-b-busy here, hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Let me think, hmm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Well, I do not know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hiacheius Dilechi bangs his head with his hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Think old man...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Think!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hmm, grr, there must be something I w-w-wanted...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: By the g-gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I know what it was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I am suppose to maintain the water wheel here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: But on my latest travels through the Dome I have misplaced it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I never lose anything..so..did not think to look for it until recently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It is my book with all my diagrams and notes on the wheel system.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I need it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds good, I'll start right away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Good, okay...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hiacheius Dilechi pinches the bridge of his nose.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Let me try and think where I went, then I'd like you to go and look.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I recently came back from Hydlaa, a meeting with Harnquist.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hiacheius Dilechi frowns and closes his eyes, trying to think harder.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I must have lost it there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Please go and see if you can find it.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you seen Hiacheius' maintenance book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Umm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Hiacheius, I hope he is well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: He was here a few days ago and we spent a lot of time talking about alloys.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I also don't know what it looks like so can't be sure but he was writing lots of notes in a dark blue bound book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: But I didn't see him drop anything while we were together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: We had dinner together, and spent some time in the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: He spent the whole day in Hydlaa so could have dropped it anywhere and spoken to many people after we had finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm sorry I can't be of more help.</td>
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
						<td>YOU: Do you remember a StoneHammer called Hiacheius? He lost a valuable book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: A book?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Someone came by yesterday asking if I would be interested in buying a note book which was seemingly filled with lots of important information about large machinery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But it didn't make sense to have it in my library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You should search him out if you want to find it.</td>
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
						<td>YOU: Do you remember a StoneHammer called Hiacheius? He lost a valuable book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Oh...</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Um...</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I'm not sure I should say...</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: A certain dwarf came to talk to me and asked about selling a book he had come across.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: That might be who you are looking for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I shouldn't say who, sorry.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you recently offer to sell a book to Arion?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: What...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Noooooo, no, of course not...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told you did, so where is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well, then maybe I did see what you were looking for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: But I don't have it any more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What did you do with it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I might have sold it, if I'd had it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: And I might have sent it to Ojaveda if I had sold it...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I have nothing else to say.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did Thorian send a book to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: A book you say, no, I haven't gotten a new book in ages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: But you know what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I'm sure there was one special one that came by in the last few days in some chest or something.</td>
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
						<td>YOU: Did Thorian send a book to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Thorian..</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't think so.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana picks up a clipboard with filled delivery notes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't see anything from the last week or two going to a Thorian or coming from a Thorian in the last few days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It may have been earlier than that but I don't have time to look right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If it was sent through my Trading Company it would probably still be in Ojaveda somewhere or it would be listed on my outgoing shipment lists.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Merrinez said he remembered seeing a book sealed in a chest in a delivery.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He did?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Let me check again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana looks over his lists again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Well there was a chest marked as valuable which arrived some time yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Let me look quickly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana walks off into the warehouse to look for the chest, returning a few minutes later.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you find it, what's happened to it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't know actually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It's not on any of the outgoing shipment lists, it definitely arrived here...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But there is no mention of it on the inventory and I can't see it in the warehouse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Either someone lost it, or someone took it!</td>
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
							$npcName = 'Kisatol Gathoji';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kisatol Gathoji</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know of a missing chest from Jirosh's warehouse?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: ME?!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Why are you just running directly to me asking if I TOOK the chest?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'm not all bad...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Kisatol Gathoji smirks.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It seems the chest has gone missing do you have any ideas where?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I'm sorry, but no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I only saw it quickly while I was unpacking the delivery from Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: It was placed with all the other items to be taHiacheius Lost a Valuable Book quest</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any ideas as to where I could look, or who might have it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Well I would suggest you talk to Jirosh, but it seems you already have.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Merrinez Dholant pauses and stretches his shoulders while yawning slightly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: You should have realised that this area isn't exactly filled with the most pleasant of characters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: So who knows who might have snuck in an open window and taken something?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I see people who might be up to something illegal every few days.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's been suggested it was stolen, and you're a very likely suspect!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Oh please...</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Why would I want to break into a warehouse and steal some silly little book?...</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: IF...</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: And I mean IF it was stolen it could have been someone else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I know of others nearby that might have wanted it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Go bug them.</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did Thorian send a book to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Thorian?</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Why would he send me a book?</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: It's not like I spend a lot of time reading.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, the other suspect called you out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Really now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Any evidence?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Enack Lerenal raises a hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Well then let me tell you that I saw Trasok with it, sat in Brado's talking to the one and only Brado about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: So clearly I can't have it...</td>
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
						<td>YOU: Did Thorian send a book to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thorian, that underhanded merchant from Hydlaa!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I don't want anything to do with him, or anything he has to offer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Enack said he saw you with the book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: And you believe him...</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Don't be so gullible.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think Enack took the chest, but he won't tell me anything about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Enack, the Ynnwn?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I don't think I've seen a Ynnwn around here for a day or so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Perhaps ask someone else.</td>
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
						<td>YOU: Have you seen a Ynnwn sneaking about here carrying anything?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Bjorid Haakthir wrinkles his nose as he looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Actually I did, I was sure it was Enack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: He had a small fancy looking chest with him, no idea what was in it though.</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, seems I have a witness that you took the chest and book. Where are they?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Enack Lerenal droops his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I bought it, I took it, I sold it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I heard whispers some Ylian was after books to do with giant machines, and magic and winches...or something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: When she heard about this book I went after it, and once I had it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I sold it to her, she was hanging about in Amdeneir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Good luck getting it back.</td>
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
							$npcName = 'Hioona Yelian';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hioona Yelian</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, you know Enack?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hioona Yelian just shrugs and looks away.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well he knows you, I want the stolen book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hioona Yelian chuckles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I suppose you must mean a book filled with diagrams on some large mechanisms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I didn't waste any time reading it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I was hired some time ago to keep an 'eye out' for any book I or any of my associates came across on this topic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: But I had no idea it was stolen..</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I must say I am quite appalled anyone would steal a book...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you were hired to steal any book you could find?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hioona Yelian shakes her head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: No no no...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: Hired to procure any suitable books I come across.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: Enack sent word when he found the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hioona Yelian smirks a little with that last comment.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: He arranged to get it on my employers behalf and sent it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I have sent it on already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: So...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: What now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who did you send it to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: It has been sent to Tarmeen Alecheech up at the eagle head fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: I've been paid for doing what I was hired to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hioona: So run off and do what you want now.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you received a specially delivered blue, bound book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Actually yes I do have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: It arrived earlier today.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tarmeen Alecheech turns and looks through some of the deliveries.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I was going to take it up to Hiacheius later today, but you can do that for me if you'd like.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yeah I'll take it to him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Good, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Here you are.</td>
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
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found out what happened to your book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Yo..ou did?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Who too-ok it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You tell Hiacheius about the path you took to find the book.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hiacheius Dilechi begins to laugh as he realises what has happened.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I b-bought my own b-book back?...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Where is i-t?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have it, here you are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Th-thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It is a shame you f-first came when you did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If you had not then I might have had my book back by now and you w-would n-not have had to do any..anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I think I sh-ould be more careful with w..who I deal with.</td>
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
						<td>Rewards: 5130 Tria, 13600 XP.</td>
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
