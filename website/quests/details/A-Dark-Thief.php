<!doctype html>
<html>
<head>
	<title>A Dark Thief</title>

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
						<td>A Dark Thief</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
					<tr class="quest_action">
						<td>[INFO]: You have to use ”/tellnpc” or the NPC tab to start the conversation.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: about gossip</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I just heard that Taria Prestis is pregnant! Her husband, Barl, will make a great father. That is, if he ever gets time off from his work at the Eagle Bronze Doors. They say he does special missions inside the Stone Labyrinths. Certainly not a job for me, I'll tell you that much.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: more gossip</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia lifts her towel from the counter, folding it as she smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Oh please, you would be shocked and embarrassed if you knew half of the things I've heard around here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Care for a frothy mug and an ear full of gossip?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, do tell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Oooh great!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What did you hear?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Earlier today, this StoneHammer couple stopped in to dine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: They were dressed in expensive looking clothing and wore fine platinum jewellery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: They were whispering something about a thief and the guard's inability to capture him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: When I asked them if everything was alright, they just abandoned the discussion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia leans forward and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I'd love to know more about what's going on outside.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Interesting, so who were these folks that you overheard?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Oh shoot, I never got their names.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia's eyes suddenly light up as she looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Do me a favour, try talking to some of the guards and see what you can find out.</td>
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
							$npcName = 'Rabartus Livrandar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rabartus Livrandar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey, I heard you are looking for a thief?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Yes, we are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rabartus glances from side to side, then leans close.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Look, while we want to catch him, we don't want him to know that were onto him either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Keep this under your hat, ok?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: If you see him, let one of us know right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: I was told he was a skinny little whisp of a man; a Dermorian in grungy, wrinkled clothes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: From what I've heard, he looked more like a homeless alcoholic.</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey, I heard you are looking for a thief?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Howdy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Ya should talk to Remant 'bout this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: He should be over by the north gate with Finara.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Remant knows all 'bout this criminal, he interviewed the victim and a few witnesses himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Good day, and good luck.</td>
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
							$npcName = 'Remant Tovere';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Remant Tovere</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey, I heard you are looking for a thief?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: I am?</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: That's certainly news to me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Oh right, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: He is guilty of a crime or something like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: He stole something from somebody, now lets see, what was it, an axe?</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: A barrel?</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: No, that can't be right…</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: I remember, he beat up a cute little groffel scout..</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: No wait?</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Eh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Remant: Maybe you should go talk to Finara or Rabartus instead.</td>
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
							$npcName = 'Finara Plund';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finara Plund</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey, I heard you are looking for a thief?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Yes, we are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finara looks into your eyes with a silent, unyielding gaze.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: There was a mugging over in Gugrontid, but not your typical roadside ambush.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: This criminal is violent and dangerous, so be aware of your surroundings when you pass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Be prepared to defend yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for the warning, good day.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Hey, wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Perhaps you could help us out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finara pauses as she turns her head and looks through the gates, then returns her gaze to you again - this time with a slightly warmer expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Yes, perhaps you would do…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: I'm officially volunteering you for a job as an undercover agent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: If you find any evidence, then make sure and return it to me, and me only.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Eh, Alright. What can I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Go to Malco Mokkar in Gugrontid…</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: No, better yet, talk to Quasus and tell him you are working with us under cover.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Mention the phrase “A Dark Thief”.</td>
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
							$npcName = 'Quasus Adyum';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Quasus Adyum</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am working with Finara to catch a criminal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Is that so?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Quasus gazes at you intensely for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: If that's so prove it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A Dark Thief</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra's eyes are dark and steadily focused as if trying to see something deep inside your being.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Let me give you a little background on the thief who attacked one of our citizens, then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I'm listening.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: A week ago, Gardr had left to attend an auction in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: On the way, kra was attacked and robbed after making a large amount of money trading precious metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: When I heard about this, I spoke with Gardr but kra didn't say much other than that kra was knocked out unexpectedly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Quasus sighs as kra looks into the distance, then returns kra's penetrating gaze to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: This thief is smart, cunning, and dangerous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Somehow he knew that Gardr had plenty of money at the time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, I'll start asking people if they saw anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: No, that approach would draw too much attention.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Go to Gardr and see if you can learn a little more about the attacker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Maybe you can get Gardr to open up a little more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Look, while I'm rather upset about what happened to Gardr, I'm a bit more concerned about the attacker's choice of weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I have a very bad feeling about this criminal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Whatever he used to attack Gardr, it should be given to the guards.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Quasus looks at you with a firm, unshakable stare.-</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey gemma. That's a nasty…bump on your head.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks around as if embarrassed, before regaining focus with kra's palm grinding over kra's scalp.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It's not that big, is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You must have heard about what happened to me I presume?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Lets not speak too loudly about this, ok?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It wasn't exactly my proudest moment, If you know what I mean.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: How about you just forget about it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I can always earn my money back, alright?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I can't let this go. I need to know more about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: By Talad!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr grinds kras jaw as kra watches you, then grumbles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I was walking through the field by the howling well on my way to Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I was fine one moment, then next moment I couldn't see anything at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It was like the whole dome turned as black as soot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I rubbed my eyes, not knowing why I couldn't see, then felt a sharp pain on the side of my head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The next thing I knew, Laure was standing over me with a stupid little grin as I looked upward from the ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I was flat out on my back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you suspect that she did it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I doubt it, why would she stick around?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She was acting overly nice as if she really cared, but I know her kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She hangs around with Ukabnu and those other troublemakers on the hill.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr points a thick, crusty finger towards the stony entrance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I looked at my pouch and saw that I was missing my money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She asked how much, and I told her, four hundred circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: That was stupid of me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: After that she just walked away and left me in the grass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She must know something that I don't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Perhaps someone else saw something.</td>
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
							$npcName = 'Laure Eves';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laure Eves</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey, I heard you spoke with Gardr after kra was robbed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Gardr?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You mean the kran who trades metals and ores?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: What's it to ya, rat face?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure chuckles as she sizes you up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what do you know about his assailant?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Ah, he was a small, slender fellow with a messy mop a hair and beard to match.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: That piece of garbage showed up here three days later, ya know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Came up from the road, blinded me, Ukabnu and a few of our friends.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: He killed them ya know; haven't seen 'em since.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: He went on and stole my money, then swiped Ukabnu's boots just ta throw a little salt in the wound.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure stops and looks fearfully at Ukabnu as she begins to curse and spit - warning her to keep her mouth shut.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Better move along now, Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure whispers in a low tone:-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: When he blinded us, I got a taste of something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Same raunchy taste and smell I got once before when I got into a scuffle with some pathetic dark mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Might be one of Rulayne Ogrin's boys.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: If it is, I want his glyph, or whatever he's using.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Got it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Now go!</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Scram!</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Someone has been blinding and robbing people.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne watches you as his fists tighten.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Blinding?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You know, one of my students was robbed recently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: She had a precious artefact that could possibly be misused to cast a blinding spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: It was an amulet that she wore around her neck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: At the center was a black and red glyph, and around the circumference were a number of ornamental stones.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know anything about this thief?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: However, I do know that there was an incident over by the camp just past the pass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I heard something gruesome happened there, and got some funny looks from a few tree worshippers as they walked by.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne Ogrin Ogrin rolls his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You might want to check with Jardet Forsill in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: The flower pickers were probably students of his.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: By the way, if you catch this thief of yours, return that amulet to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: It has sentimental value to my student.</td>
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
						<td>YOU: I'm investigating a dangerous thief.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet is pacing as he begins to talk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I don't know anything about a thief.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I do know that there is a dangerous criminal on the loose, but the guards are after him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I am sure they will bring him to justice, though…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet continues to pace as he looks at his feet, then stops and looks back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His face looks troubled, his fists are clenched like rocks, his arms are stiff like oak branches.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I'm sorry, something truly terrible has happened; I just can't get it out of my mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Would you mind lending me your ear, so to speak?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Talk to me, what's troubling you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I'm not sure where to begin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet takes a deep breath, then lets out a deep sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Three days ago, I sent two new initiates of the Seeds of Wildwood out towards the Explorer's camp in search for a hidden garden - a holy place where they could commune with Xiosia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They were supposed to return that evening but did not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The next day, I sent two more followers out to see if they were lost.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: When they reached the garden, they fell to their knees - completely shocked and horrified.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The initiates were…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet's composure suddenly changes as a wave of sadness hits him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's ok, go on.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They were tied to sacred trees, and their bodies were torn and bloody and were being picked at by a swarm of carnivorous birds.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet closes his eyes and tightens his grip around his staff as his sadness transforms into anger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: What sort of monster does something like this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I could hardly believe what I had heard, so I went to the camp myself to retrieve their bodies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The next day, I mourned for their loss in prayers, before having their remains delivered to the howling well for sanitary disposal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Sadly, I completely forgot to purify the garden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I had better make arrangements for that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll bet you want revenge, some justice perhaps?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: No, on the contrary, I'm more interested in making sure that this doesn't happen again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I believe in using peaceful methods first, then force only if needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The two most pressing things on my mind are obtaining whatever weapon was used, and arranging for a purification ritual.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can I help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, I've done some investigating on my own, and found something interesting at the garden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I found a worn pair of dice, and a sheet with odds for the Hydlaa tournament on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Darven Bounash normally makes similar lists with probability calculations for such tournaments - being a bit of a gambler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I wonder if he might have been in contact with this murderer at some point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Do me a favor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Take these dice and this sheet, give them to Darven to see if he recognizes them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You can usually find him in an alley, behind a fence or somewhere out of sight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Remember, if you find out who did this, please, come to me directly and nobody else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I want to destroy the weapon that was used.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey you, do these look familiar?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Yes, they're my lucky dice, and that sheet!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven yanks the odds sheet from your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I remember writing this sheet…</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: See that?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven points to a smudge on the page.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I remember scratching that number out, it was one heck of a mistake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Where did you find these?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Next to a pair of mutilated bodies. Care to explain?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: That's very strange I wonder how they got there?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven looks at you as if he's drawing a conclusion about your intentions, then throws his hands up and steps back!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Now wait a minute!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I didn't kill anybody!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Don't go trying to pin stuff on me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then how did these items get there?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I sold this sheet to Lennston a week ago…</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: That was before he cheated me in craps with some stupid parlour trick of his that caused me to black out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Ask the guards if you don't believe me, I heard they locked him up overnight for theft!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: You want to know about this mutilation?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Talk to Lennston yourself, he lives right over there in that apartment!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait, which house?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolls his eyes and shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Listen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Go into Stronghand Ridge, turn right and keep going until you run into the wooden fence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Make a left and follow the fence to the railing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Look over the railing and you'll see a yellow house with windowed alcoves in the roof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Hop the fence and leap from rooftop to rooftop until you get there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Then use the key to get in through the window….</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Yes you heard right, the window.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: He told me once that he keeps the door booby-trapped.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait, I don't have a key!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Ah well, in that case, you'll need a hand-held exterior window opener.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I think I have one, hold on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven turns and bends over, then back and hands you something.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: There you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Make sure and return it to me when you're done.</td>
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
							$npcName = 'Lennston';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lennston</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: You can stop right there!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you're the one that robbed Gardr.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: What?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lennston whips his head around and stares at you angrily as an amulet with a black and red glyph in the center begins to glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: You fool!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: How dare you just barge into my apartment like this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: I'll learn ya a lesson or two!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lennston places his fingers on the edges of his amulet causing a dark cloud to swirl around its edges.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He begins to draw on some dark energy and cast a spell at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As it hits you it stuns you for few seconds.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I might keep quiet for fifty circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: You want to what?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lennston grins slowly, tilting his head with a raised brow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: Well then, it seems I've misjudged you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: I was actually planning on pinning this on someone, but wasn't sure who to pin it on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: You want to help me aye?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lennston: Then you can let me kill you and I'll pin the crime on your corpse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kill and loot Lennston Dashile-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You looted a Amulet of Blindness-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You looted a Bag of Circles-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You looted a Amulet of Blindness-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You looted a Bag of Circles-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get two of each.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your window opener back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You don't actually give it, and end up keeping it, despite the following dialog.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Works like a charm, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: You never know when you might need one of these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven slips the hammer into his belt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: So, did you have any luck talking with him, or have you given up?</td>
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
						<td>Rewards: 2 Amulet of Blindness, 2 Bag of Circles, 10800 XP.</td>
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
