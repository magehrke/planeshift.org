<!doctype html>
<html>
<head>
	<title>Thorian's Order</title>

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
						<td>Thorian's Order</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 30 Dark Way, Rank 30 Red Way[OR], Rank 30 Azure Way[OR], 5 Diamond Crystal, 5 Emerald Crystal, 5 Ruby Crystal, 5 Sapphire Crystal.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: The rank in Red Way is uncertain</td>
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
						<td>YOU: So, you need any help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Dwarf looks up at you as he finishes eating some roast kikiri before speaking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So I guess you're the Enkidukai one of the Circles sent to help me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian chuckles a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Of course you are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian then just smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what can I do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Right to business, good, I can appreciate that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian smirks, and wiggling his trousers around his waist with his hands he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: There is a tournament coming up and an…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Acquaintance…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Of mine is taking part.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I wanted to get him a good luck present so he has better…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Odds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So, I need some crystals enchanted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: And that's where you come in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get the enchanted crystals?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: You're the little kikiri from the Magic Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian smirks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Tell me which you belong to and I'll tell you how to find out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 3</td>
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
						<td>YOU: I belong to the Red Circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Oh so you'll need to go see your fearsome wanna-be clown of an Arch Mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I've had one of his packages before; tell him I'm cooking up a special package for him as we speak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Oh, and here are the crystals I need, you'll need to take this list with you.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you help me get these?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd takes the order and reads it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well now, that funny little dwarf needs some crystals enchanting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I hate to think what he's going to do with them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd smiles, handing you back the note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I just hope it isn't to repay a small package I sent him a few days ago, did he mention it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He said he was cooking something up especially for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd half smiles, half laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I bet he did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I look forward to seeing it, now about these crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd lifts his head and looks you over as he ponders his next comment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ummm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I think you might be ready to enter The House of the Spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You might be interested to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is a very special place and one of great power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Not just for our Way, but also to those of the Azure and Dark Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It was officially discovered not long after the founding of the Ways, but I have my suspicions that it had been used long before that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: There is a lot to learn about this place, but that will come with time and visiting there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For now you need to know that not everyone is allowed to enter this place, only those of certain Ways and those of enough skill and promise are allowed entrance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd breathes deeply and looks you over once more and thinks about if he should allow you in.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He twitches the corner of his mouth as he makes his decision.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And unfortunately I do not think that I will ever be able to allow you to set foot upon the ground of the House of the Spirit, I am very sorry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why not? Did I do something wrong?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd can hardly contain his laughter as he pursed lips splutter and laughter rolls out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: N…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: No, no, no you didn't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But I had you going didn't I?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd takes a few deep breaths and composes himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ok, I'll write you a letter of admittance to the House.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You don't happen to have any ink and paper do you?</td>
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
						<td>YOU: Could I have some ink and paper?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose glances up at you over a pile of papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Yes, 50 tria please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, Jayose.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Thank you, and here you go.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are Arch Mage.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Arch Mage, well, yes, quite right I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Nice of you to remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now give me a few moments and I'll write this for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd quickly turns round and channelling some magic, a mark draws itself onto the paper after which he writes a few lines of text.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: There, done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now you'll need to take this to The House of the Spirit and show it to the Enchanter who oversees the house.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And as to where it is, you must know where Gugrontid is by now…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well, if you don't I am tasking you with first finding out where the Kran city of Gugrontid is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you have found the path to the city though the stone cliff, with that path to your back walk away from Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will pass the lake and Cutthroats Bane.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you keep walking you will find the House, look for a cave and you will have found it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And you will now find you will be able to enter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As Ferryd says that a pulse of reddish light emanates from the end of his staff.-</td>
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
							$npcName = 'Thalus Lau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thalus Lau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ferryd gave me this letter of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: That frumpy old Red Mage decided to let you in did he?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus stares at you, obviously disappointed with what he is seeing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: So what did he do that for?</td>
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
						<td>YOU: I belong to the Azure Circle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian laughs heavily and then sniggers a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: So you're a wanna-be Azure mage and you had to ask me all these questions to work out what I want and where to get it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Ok, well as you're an Azure mage I'd ask your Arch-mistress, that lass in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian then sniggers as he looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Do you know what I'm going to say next?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: No…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian smirks again and holds up a piece of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: It's the list of crystals I need; you should take this with you.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you help me with getting some crystals enchanted?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Dermorian replaces a pot she has in her hand and turns, looking at you with her clear blue eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Welcome back Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She then sits, crosses her legs and tilts her head looking not at, but just past you…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I knew you were coming so have prepared this letter of admittance to The House of the Spirit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She closes her eyes and begins to sit silently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Arch-mistress?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita holds up two fingers of one hand as if to command you to be silent…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some time passes before she looks up to you again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You should not be in a rush Enkidukai you may miss much if you do not pay attention and take your time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita lifts a hand and passes you a small note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As you take the note a flash of Azure Magic jumps from the letter and dances about before settling to nothing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The place you will now be visiting is called The House of the Spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The energies which pass though this place are able to enhance the enchanting process, along with a few other things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It has been a place of great power for a long time and you will be just the latest of a long line of mediocre, and great Mages to have passed through the halls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: These mages belong to not just the Azure Way, but also Dark and Red.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Be careful when you are present there, as there is the possibility for much anger between the mages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: For now let me finish by saying that not everyone is allowed to enter this place, only those of the three Ways, and of those, only one with enough skill are allowed entrance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where is the House?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita seems to hardly move any part of her as she communicates with you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Stand with your back to the cliff entrance to Gugrontid.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Keeping the lake to your left and Cutthroats Bane to your right, turn slightly left after and walk as straight as you can and you will find an old cave entrance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita smiles up at you as you leave.-</td>
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
							$npcName = 'Thalus Lau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thalus Lau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Menita gave me this letter of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: She normally has better taste, let's see the letter then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus takes it and glances it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: So what is it you need?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I belong to the Dark Circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Dark Way…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Well then you will need to go see, the lovely Evelyn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian forces a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Here are the crystals I need; you'll need to take this list with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Good luck.</td>
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
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would you be able to help me obtain these?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn takes the order and reads it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her long eyelashes bat a few times as her rich eyes dance along the lines of text…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn smiles sweetly as her hands lower and swing gracefully behind her back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: So it seems you're in need of some enchanted crystals, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I have heard some interesting things about you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Do you think you deserve to be allowed to know about how to make these powerful items?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A coy little smile drifts out of the corner of her mouth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands the note back and waits.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I think I deserve to know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn smiles along with hearing your answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: That is a fair assumption and from what I have heard I agree, for the most part.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her dress catches in a light breeze as she continues to talk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will soon be gaining entrance to The House of the Spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: This is a place of great power to which every Mage wants to be allowed entrance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The energies which pass though its location are able to fuel not just our Way, but also those of the Azure and Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Similar as our Ways are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It has been a place of great power for a long time and you will be just the latest of a long line of, mediocre and great Mages to have passed through the halls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: There is a lot to learn about this place, and that will come with time, and visiting there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: For now you need to know that not everyone is allowed to enter this place, only those of the three Ways and of those of enough skill are allowed entrance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn breaths lightly and smiles with her intoxicating eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will not gain entrance to the House of the Spirit until you have an admittance letter from me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you need some ink and paper to write it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn steps away shaking her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: No I do not.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She picks up a scrap from the table next her and holds it against the wall.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With her other hand she conjures Dark magic which spill into the paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The paper quickly absorbs the energies and words begin to form on the parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn turns and hands the parchment to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: With this in your possession you will be able to gain access to The House of the Spirit within which you will find what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: To find the entrance, stand with your back to the cliff entrance to Gugrontid and walk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Pass the lake and cutthroats bane to the right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Follow the paths though the hills and you will find it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It will be a rock formation and if you look closely, you'll find a small entrance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With yet another breathless smile Evelyn signals for you to leave, tired by your presence.-</td>
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
							$npcName = 'Thalus Lau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thalus Lau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Evelyn gave me this letter of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus scowls a little as he takes the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: What do you want?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>All ways:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Arch Mage felt I was ready to enter The House of the Spirit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Well of course or you wouldn't be here, but is there anything you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have this order from Thorian.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus quickly reads the order over before crumpling up the paper and tossing it on the floor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Right, I'll make these crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: But I'm not using mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Get me five diamond, emerald, ruby and sapphire crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: That will be enough to make all the ones that dwarf wants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: You should be able to get them all in the Laanx dungeon.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus turns away and starts sorting though some glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Good, so you do have at least one use…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus grunts a little and places the crystals on a table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then rolls his shoulders and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: So I guess I should get on with enchanting these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus sniffs noisily as he picks up and book on enchanting gems and flicks though it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus lifts his eyes from the book looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: You should pay attention to this, I'm not likely to show you again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus drops the book heavily onto the same table as the gems.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He picks up a crystal and a glyph, choosing an Emerald crystal and a might glyph and steps over to a nearby enchanter…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Emerald crystal chimes as it's dropped into the enchanter…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Holding the glyph in his right hand Thalus steps up to the enchanter and begins channelling Red Way energies…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The glyph begins to glow as the energies flow round Thalus' hand and cascade off the glyph into the enchanter below.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The crystal begins to glow and hum slightly as the energies gather within it…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally, as a bright flash passes across the crystal Thalus pulls his hand away from the enchanter and drops the glyph onto the table…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: One down, four to go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus repeats the process with different glyphs and different crystals each time, making a selection of enchanted crystals…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Right, done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus finally hands you a sack of enchanted crystals.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I do have some Questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: In the name of the Gods…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Spit it out then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus spits on the floor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What crystals can be enchanted?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Well any you can get your hands on, obviously.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Different crystals are able to contain more or less power and give greater or lesser effects.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Rubies contain the least and Diamonds the largest amount of energy and strongest effects.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Which glyphs can I use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Almost all of them, just pick one up and try it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: But not every glyph can be used to enchant every crystal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Most are in the book I gave you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: But you won't be able to use every combination until you are experienced enough and powerful enough in the Way's glyphs, which looking at you will take be a long…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: long…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: time from now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the effects of the enchanted gems?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus shrugs and turns from you to start placing a crystal in the enchanter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: I don't care about that, you'll have to work it out yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Go pester some armourer to test them out with…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: But let me tell you this, the Way you enchant a crystal with will give you resistance against the opposing Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: So a Dark Way glyph used to enchant a crystal will give resistance to Crystal Way magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: And so on and so on, you get the idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: There are some other not so obvious effects, but, well, work them out yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I enchant gems and crystals from the other three Ways?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus laughs at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Here, of course not.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He turns to face you a bit as he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: They can be enchanted, but only Dark, Red and Azure glyphs can be used within the walls of the House of the Spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: You will have to find another place of power to enchant the other Ways' glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for enchanting the crystals. Would it be possible for me to get an instruction book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Sure, fine, if it means you can stop bothering me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thalus reaches over and takes a copy of Enchanting Gems and tosses it at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Have funnnn…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says patronizingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've no more questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thalus: Great, now get lost and give those gems to Thorian.</td>
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
						<td>YOU: Here are your enchanted Crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian is scratching his beard with both hands as he looks over to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Do you have any idea how itchy these things can get!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, not really.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well I can't expect a Enkidukai to understand what it's like to have such a fantastically groomed piece of excellence.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian sniffs noisily and straightens his beard out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So, you've finally managed to get the list of items I was after?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up at you clearly anticipating your answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I did, and here they are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian claps his hands together.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Excellent…excellent!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian pulls open the sack and peers in side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: One, two, three, four and five.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I'm so excited to get the energies in these fixed onto a decent piece of armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Then we will see who is the best fighter, the odds will certainly be in my favor this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Thanks very much…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian stares at you for a while.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Whatever your name is.</td>
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
						<td>Rewards: 1 Enchanting Gems of Spirit, 12200 XP.</td>
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
