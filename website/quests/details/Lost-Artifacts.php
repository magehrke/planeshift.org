<!doctype html>
<html>
<head>
	<title>Lost Artifacts</title>

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
						<td>Lost Artifacts</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Time-For-Reading.php">A Time For Reading</a> quest.</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Kerryk how are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You are here, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I need someone I can trust.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk smiles somewhat nervously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I do need your help, Gemma Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You see, I told you about the thieves a little while ago, did I not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Yes, of course I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It seems they returned last night and this time important things are missing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Can you help me with this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I will be pleased to reward you well!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I have some free time to spare.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Here is my problem: I haven't any idea who would have wanted to take them, or how they even knew they were here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Perhaps the village guards might know something about last night.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Maybe they saw something?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk anxiously taps kras fingers together.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I do not know…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: this is all so troubling!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: These thieves have taken some of the artifacts that my friend on the Stronghold recently sent to me, and it is important that they not be lost or damaged…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: so much knowledge could be destroyed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I hope that you can learn something of what happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I must have those artifacts back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Hurry quick.</td>
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
							$npcName = 'Malco Mokkar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Malco Mokkar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Some thieves stole some stuff from Kerryk last night, have you seen anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco not know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco sleep night.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco rubs kras helmet with his large hand and suddenly remembers something.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Urr…</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco find!</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: By Kerryk house.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco looks through kras gear and takes out a dirty leather case that contains a silver drinking flask. Kra stuffs it into your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Find on way home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Give Gurgus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Maybe Gurgus know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Go Now.</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you ever seen this flask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Hmm…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus turns the object in kras hands, inspecting it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: What is the story behind this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Malco found it near Kerryk's house last night.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I have never seen it before.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus opens the flask and peers inside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Nothing left in there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus takes the flask from the case and studies it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: This flask is engraved.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Maybe these can help you find the owner.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus puts the flask back in the case and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Good luck with your investigation, Gemma.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I will visit Malco and see if I may learn more.</td>
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
							$npcName = 'Crosh Dunehammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Crosh Dunehammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you ever seen this flask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Ah, there she is!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Yes, thank you Gemma.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: It's very kind of you to bring her back home again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh smiles happily and tucks the flask out of sight under his breastplate. He brushes his hands quickly against each other.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: It was a pair of clot-headed bandits was down here the other day, and they thought hassling a lone soldier tryin' to do his duty would be a bit of fun.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Think they were workin' for that creepy fellow that lives down there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh turns his head and spits.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: The one who calls himself 'Zak.' What kind of name is that supposed to be?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Huh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Some day that fellow's enemies are going to catch up with him, they are.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about some stolen artifacts from Kerryk's last night?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Artifacts?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I might know something about that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I heard that some old archivist misplaced some records, pity that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak looks you over quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You seem like the able sort, you found your way down here to bother me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Tell you what, help me put together a deal, and we'll split the profits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If you are not interested, then you had best be getting on your way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: That archivist friend of yours might need help rewriting some things if he's not careful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: So what'll it be?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You going to help me or run home to your tome-trepor?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't deal with people like you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ha, fair enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Go tell your friend you failed.</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was unable to locate the artifacts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: What do you mean?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk looks disappointed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Did you find out who it was?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Zak, under the Laanx temple mentioned them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Zak?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk looks angry.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: So that is his name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: That…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: cantankerous criminal…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: that bumbling brute….</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: that ruthless rogue…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: He will stop at nothing, and I mean nothing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: This Zook or Zak or whatever his name was will just keep on if something doesn't happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Go talk to Levrus and then Grimal Bloodaxe, and tell them that this Zak is the one who has been causing the problems.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk mutters something under kras breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I am sure they will agree it is time we put a stop to this.</td>
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
						<td>YOU: Zak is causing all the problems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Zak?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have heard rumors of such a rogue who lives hidden here in Hydlaa, and Kerryk believes that this is who has been causing our problems?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It seems the thievery is being uncovered!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, I think there is something, something I can do to help!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus giggles. He offers you a potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Drink this potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Wait..</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: no, no, that won't help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus puts the potion back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Confuse him…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: amuse him…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: confound…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: confounded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Frighten him?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, yes, yes!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus reaches into his desk and pulls out a piece of parchment and chuckles as he hurriedly writes in a sprawling hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here, take this to Grimal Bloodaxe and let him read it; he should understand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus gives you the parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This will be amusing after all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have left a bit of room if Grimal thinks there needs to be anything added.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus chuckles to himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You had best be on your way.</td>
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
						<td>YOU: Levrus thought you might want to add something.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Huh, what's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal reads the note and raises an eyebrow. He laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I see, so it is Zak who has been our problem.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal slaps his axe with his palm and grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I'll scare the fight out of that lowly rogue!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal adds a message of his own to the parchment, scowling ferociously as he writes in large letters with a piece of charcoal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal hands you back the parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Give that to Zak, he'll be thinking twice about giving us trouble!</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak opens the note and begins to read.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Levrus…!</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Grimal..!</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Magic I can't even comprehend…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: head off my neck…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak puts the note down, and looks at you, his tone sarcastic as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: By the gods, what welcome news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If this is how you wish to play the game, then know this, you either pay me ten circles or I can guarantee that those precious artifacts you seek will be worthless.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak levels his gaze on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: So what will it be, pay or take your chances?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I'll pay.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: If you choose to take your chances, Zak will break the artifact and you won't have the glyph in reward, you will just have 60 octas and +10 education factions.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Good thinking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Give me the twenty circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak takes the coins with a smile before retrieving a small box and handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Can't say it's been a pleasure, but here are your precious artifacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Go now, before I change my mind.</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have recovered your artifacts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You found them!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I owe you more than you understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Here, take this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk hands you a large handful of coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: And this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk hands you a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Please, come back again, you will always be welcome here, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: And one other thing, if you're ever in Ojaveda, you might want to visit the herbal shop there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Vladovic is a fine fellow and may have some things for you to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: In fact, last I heard he was trying to help some Enki named Bjorid.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Wise choice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak smirks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I got some of the artifacts, but not the best one: The Head of Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It's actually just a sculpture of his head, but a buyer seems to think it is magical or something and is ready to spend some good tria on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: If you get it for me, I'll split the deal, I'll give you fifty percent of whatever the buyer pays me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You in?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: We need to get kra to give up the head.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak thinks a moment-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Tell Kerryk you need the other artifacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: If kra asks why, say it's for the investigation.</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: give me artifacts</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Hmm, what do you need them for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: investigation</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Oh, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I hope you are getting somewhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I really need those artifacts back; the knowledge they hold…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk's voice trails off as kra retrieves the last of the artifacts and hands them to you in a small box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Here you go, please be careful with them!</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak opens the small box-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ah, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Here is the head.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak takes out a small sculpted head and continues looking through the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Huh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: The rest of this is of no use to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Take this other stuff back to the Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If he asks tell kra Rogues stole the head.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak sneers-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Got it?</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk opens the box quickly and then looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: What happened to the head?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: The head of Talad is missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I entrusted you with a very valuable item, where is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rogues stole the head</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: How unfortunate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I hope you are all right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk looks inside the box again and sighs quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I suppose I will have to see what I can do: I can not put you in that kind of danger again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you for making an effort, Gemma.</td>
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
						<td>Rewards: [Way 1] 1 Weight glyph, 25 Faction with Science Association, 5130 Tria, 13600 XP, [Way 2] 1 Weight glyph, -1 Faction with Kran, 5 Faction with Hammerwielder, 200 Tria, 3000 XP.</td>
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
