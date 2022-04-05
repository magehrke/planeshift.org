<!doctype html>
<html>
<head>
	<title>The Coming Eclipse</title>

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
						<td>The Coming Eclipse</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dangerous-Winds.php">Dangerous Winds</a> quest, 1 Letter from Amidison, 1 Fear glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyph back.</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You hand Datal the letter from Amidison. (Note: Due to quest wipe May 2014 you may need to get this from a GM)-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal unseals the letter and reads, making various facial expressions as he does.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Ah, so I see the government has finally found someone foolhardy, er, I mean worthy enough to investigate this major problem that faces us all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: The cycle is starting again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: The winds kick up from below, signifying the comings of the crystal eclipse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Woe unto all of Yliakum unless we are prepared!</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: As you know, the eclipse brings much trouble to our realm, everything from basic problems stemming from the dimming of the Azure Sun to the cooling of all levels and some danger to crops.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: But worse yet will be the attacks from the Stone Labyrinths, which, historically, have magnified in intensity during eclipses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Theorists imagine it is because the denizens of the Stone Labyrinths are accustomed to low light, and when Yliakum is darker, it is much easier for them to see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal makes a small shrug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: All that said, will you engage in a task for your government?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I am more than happy to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: As is proper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I have reason to suspect some dark work is afoot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: As you may or may not be aware, the Dark Crystal behaves strangely during the eclipse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: If you don't know what that is, feel free to ask later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Nevertheless, we believe some agents of a little-known cult mean to use this time to summon a dark and ancient force.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Worse, members of our own guard may well be unwittingly involved.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: If you are to take this mission, it may have dire consequences on your reputation, and I will not be able to protect you if you misstep.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Are you certain you want to hear more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I want to hear more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I knew that getting so many to find favour with you would be a good test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I need to get at the root of this conspiracy, and find out who is involved in the cult of the 'Black Flame.' There are several possibilities, but at present I would like you to investigate one: Nodramok Dakyl.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: He is a Dark Way practitioner with power and influence, and thus a likely candidate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: You need to ask him to make you an apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: He might ask you to do some things that are against the law, but you are to comply until you get any information you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Keep in mind, however, that amnesty will only be granted once that information is given to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I cannot order you to do this, but I must know: Will you do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Good luck, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Don't let us down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: When you have the information, tell me you have it, or merely hand it to me.</td>
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
							$npcName = 'Nodramok Dakyl';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nodramok Dakyl</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to become your apprentice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Who is this insignificant Hammerwielder blathering before me and wishing to be my apprentice?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nodramok looks you up and down with a skeptical expression on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: I do not mentor just anyone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Even being allowed into this area is not sufficient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Thus, you will prove your worth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: At the Eagle is a man who has been given a toy with a coded message on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You are to discern the message, find its answer, and tell me what the answer is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You want me to tell you who the man is and how to approach him?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: It wouldn't be much of a test if I told you that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Now begone!</td>
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
							$npcName = 'Roobelh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Roobelh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I hear rumours you have a toy with a coded message, show it to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Huh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: You know there's a message on the toy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Well, if you know, I suppose you're the one to whom I need to show it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Roobelh takes out the wooden toy and spins it slowly in front of you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I don't know if you read Klyros, but it's a code if you do a letter-to-letter translation into common.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: It reads as follows: 'TXAESI SUUV UG TOQVIIP.' Then, underneath, it has a double arrow between the symbols for X and Q.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I believe that signifies that one should be substituted for the other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Once you think you've solved it, give me the answer, because I'm not sure myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I was never good at codes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: square root of sixteen</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Are you sure?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I don't think that…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Roobelh pauses. His eyes roll upwards in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Oh, sorry, yes it does.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: But what does that mean?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: It sounds like it has to do with mathematics, but if I knew how to do mathematics, I wouldn't be a guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: All I know is that the answer to this has to correspond to a level of Ylikaum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Can you tell me the answer, please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: four</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Ah, the Forge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Yes, that makes sense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: My course is clear now; thanks, Hammerwielder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I suppose you can relay the answer to whomever sent you.</td>
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
							$npcName = 'Nodramok Dakyl';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nodramok Dakyl</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: four</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: So it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: But such a task is easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: When you are ready for your next task, ask me about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready now, what is my next task?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Anyone can solve a riddle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: But not everyone can acquire glyphs of the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Bring me a Fear glyph and I will see your willingness to use its powers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Nodramok Dakyl';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nodramok Dakyl</a>";
						?>
						1 Fear glyph</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Such a sacrifice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: To give up this Fear glyph to serve under me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: It says much of your character, Hammerwielder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You may have it back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You will need it if you are to be my apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: When you are ready for the final task, ask about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's get this done, what is my final task?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: So you have shown you can acquire items useful to the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: But how far are you willing to go to be my apprentice, I wonder?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: My final task may bring unwanted attention to you, from both those who uphold the law and those who break it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You may refuse, if you so desire, but know that you will be no apprentice of mine if you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Do you refuse?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No I want to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: So be it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You are to help me sow some seeds of chaos within the government.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: There is a city worker named Hamel Warson who has been known to change his work orders for bribes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: He is about to be paid a visit by some organized criminals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Namely, you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You are to approach him and tell him that he has been marked, and you are to use the Onyx Dagger thieves' dialect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: No, I will not tell you the phrase.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: That is for you to find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You are to say nothing else to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Answer no questions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: When you have done so, return to me and tell me he has been marked.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Leeshaile shol saardh</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: What did you say?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel trembles with fear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: What do you want from me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Who sent you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Answer me!</td>
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
							$npcName = 'Nodramok Dakyl';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nodramok Dakyl</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He has been marked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: That should keep the government on the alert for the Onyx Dagger while my plans go unhindered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Of course, by the Onyx Dagger, I mean YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: I want you to go into hiding now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Practice some Dark Way spells on your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Take these instructions and wait for the eclipse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Then unseal them and follow them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: You have done well, apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: After the eclipse, I will teach you secrets mortals were not meant to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nodramok: Farewell.</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the information you require.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: May I have it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Great, hand it over please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YOU hands over the instructions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: This certainly appears to be the genuine article.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I will need to discuss this at the next meeting of the Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I can tell you no further, but your part in this is complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: On behalf of the Octarch, I thank you for all you have done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Please accept this, and one of these, as a token of our gratitude.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal gives you twenty coins and offers a choice of two glyphs.-</td>
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
						<td>Rewards: 1 Wall Glyph, 1 Dome Glyph, 10 Faction with Guards, 10 Faction with Cabal of Whispers, 16411 Tria, 19200 XP.</td>
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
