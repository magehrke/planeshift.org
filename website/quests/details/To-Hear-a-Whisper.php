<!doctype html>
<html>
<head>
	<title>To Hear a Whisper</title>

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
						<td>To Hear a Whisper</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Relliom's-Commodities.php">Relliom's Commodities</a> quest.</td>
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
						<td>YOU: Anything else I can do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: My my.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Such a thirst for power in your eyes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am truly amazed that you have not flinched once in the tasks you have performed for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Or perhaps I should call them tests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Yes, tests would be a far better word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You see, you have been set up from the very start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: We have been watching you for some time now, Torol, and it has been decided to allow you to take the final step into greatness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Will you take that step?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Will you take your rightful place within the Hand of your new Master?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, ready and willing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Such passion!</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A rare find you are turning out to be.</td>
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
						<td>Relliom: You have proven that you will steal, lie, destroy lives, and even kill to get what you wish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You have also proven to be very obedient and clever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: All very useful traits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Now you will find out what happens to those who fail to impress us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Go to Kisatol Gathoji in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Tell him these exact words, 'I am a thirsty clacker.'</td>
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
						<td>YOU: I am a thirsty clacker.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Are you now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: You look more like a worthless goujah to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I don't have any use for goujahs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol leans close, dropping something in your hand, and whispers 'Viscarina'. He then wrinkles his nose as if smelling something bad.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: You even smell like a goujah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Now get out of here before I split you open just to see if you taste as bad as they do!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Worthless scum.</td>
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
							$npcName = 'Viscarina Shardis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Viscarina Shardis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Viscarina the tlorate potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Greetings, Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: The whisper has guided you to me at an opportune time…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Viscarina holds up the potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Ah, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: You brought it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Of all those who follow the whisper, only a few can truly hear it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: In order to keep the others placated we must find means of keeping them…</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: ignorant to the silence in their mind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Viscarina starts diluting the potion and separating it into vials.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Not many make it past the Shadowcaster's test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Entering a person's mind has…</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: detrimental effects on the weak willed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: I envy her talent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Oh, what horrible wonders I could create in a man's mind if I could do as she does.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Viscarina smiles as she hands you the vials, then notices the look on your face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Relliom did not tell you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: What a tricksome man he is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Ask Sysial Shillor about her gift, if you must know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: In the meantime, give one of these to each of the others, starting with Serana.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: The others love to think they are following a strict structure, so do as they say and make sure you give them all out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: Afterwards, go to Relliom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: I am sure he has a few…</td>
					</tr>
					<tr class="quest_npc">
						<td>Viscarina: things to talk with you about.</td>
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
							$npcName = 'Serana Tuvi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Serana Tuvi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Serana a vial of diluted tlorate potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: Ah, YOU I take it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: Of course you are, who else would have the vials…</td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: I do feel the presence of the Whisper on you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: Like with Relliom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: You will be great if you so choose, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serana gives you a cold grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: I shall enjoy watching you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Serana: Give the next to Musanulos.</td>
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
							$npcName = 'Musanulos Terfanis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Musanulos Terfanis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: The vials!</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Thank you, YOU…</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Yes, we all know your name here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Musanulos quickly drinks down the contents of the vial.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: We are the lowest of the Whisper's faithful, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: You, though, you may become great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Musanulos: Jolik Huevan gets the next vial.</td>
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
							$npcName = 'Jolik Huevan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jolik Huevan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-takes the Vial from you and dumps the contents down his throat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Oo tho vool, bron tho noxt to N'holoee.</td>
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
							$npcName = 'Nohali Mirdasu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nohali Mirdasu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Greetings, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Nice to see you around…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nohali takes the vial and places it next to another one on her belt which is only half finished.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Will you make the right decision?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: I'm sure you will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nohali: Bring the next to Jirris Athano.</td>
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
							$npcName = 'Jirris Athano';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirris Athano</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: You..</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: vials!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirris greedily grabs his vial and downs it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: Good, wel…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: welcome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: That is …</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: if you j-join!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: You should..</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: The greatness is…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: awesome…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: To Finra you go…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirris: bring vial.</td>
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
							$npcName = 'Finra Neticlo';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finra Neticlo</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YOU gives Finra a vial of diluted tlorate potion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra gently takes the vial from you and slowly sips it down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: The time is coming, YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: It is near.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Go quickly to Relliom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: He will tell you things!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Things of great wonder!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Run to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Tell him that you wish to hear!</td>
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
						<td>YOU: I wish to hear more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I see you've talked to the Used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It's what we call those mindless lumps of flesh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Finra, Jirris, Fordanot, Nohali, Jolik, Musanulos…</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: all used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Each one failed one of the tests you have taken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Serana passed them all, but knows a different lie, so is given to acting in an arrogant manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: She is unaware that she is just another stone on the board to be moved as I please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The truth is not what she believes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I'm offering you the chance to know the one true truth, YOU, and be raised above those worms of the sewers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: This chance will never come again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It may cost you your very soul to hear it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: So…</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: do you want to know the truth?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You will never be allowed to serve another God, YOU, for you are now being ushered into the circle of the Whisper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I can not tell you more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The Whisper has much wealth, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom hands you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: This gift is only the beginning of your future power and wealth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: From this day forth you may drink from the goblet at my side, and someone will then bring you to the altar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: But, the first visit…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom grins at you as his dagger slips between your ribs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The first visit is more violent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Farewell…</td>
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
						<td>Rewards: teleport to Black Flame, 40 Faction with Cabal of Whispers, 12958 Tria, 17800 XP.</td>
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
