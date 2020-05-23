<!doctype html>
<html>
<head>
	<title>Gregori's Enchanted Gems</title>

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
						<td>Gregori's Enchanted Gems</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Blue Way Adept, Crystal Way Adept[OR], Brown Way Adept[OR], 4 Emerald Crystal, 4 Ruby Crystal, 4 Diamond Crystal, 4 Sapphire Crystal.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, um, do you needed some help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori coughs heavily and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So you're the Enkidukai the Circle sent to help with me getting my order for my tournament.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I guess so.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Fair enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I sent an order to the Enchantress in the Mansion Beyond to enchant a number of crystals for me so I could get some magic armor made.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And of course, as always, they haven't arrived yet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So then you want me to help you get it all made?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The Mansion Beyond allows for enchanting by just Blue, Crystal and Brown Way Circle mages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So to start with I want you to go to the arch mage for whichever of those Ways you belong to and find out what is taking so long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now run along.</td>
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
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to speak with the Brown Way Enchantress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Welcome back YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I suppose you saw Gregori?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: And he sent you to check on his latest order?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I should start by letting you know that the Enchantress who supervises the enchanting hall does not just do it for the mages of the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik breaths deeply and lets out a heavy sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: She also does so for the Blue and Crystal ways so do not be surprised if you see many of the other Circles members there as we all share it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is because the location of the hall, which was stumbled upon some time ago is such that it energizes the enchanting process, and has numerous energies running through it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The location of this hall is not told to all, and only those with sufficient rank in one of the circles who use the hall are allowed access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Since you have passed the first few test put to you and have shown yourself capable and smart enough to get to where you are, I will teach you how to find the location and how to gain access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: First you will need a note of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik smirks and acts out patting his pockets before looking to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You don't happen to have some paper and ink do you?</td>
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
						<td>YOU: give me ink and paper</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I suppose I could spare some for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Give me fifty tria, and you shall have some ink and paper.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						50 tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Here is the ink and paper, as requested.</td>
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
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, now be sure to write neatly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik laughs deeply as you speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You should have more faith in me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra then begins to write out your note of admittance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: There…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: That should suffice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Now to let you know where to go, you must know Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Well pop to his shop and ask him to point you in the right direction, about as easy as me telling you but not as fun.</td>
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
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to speak with the Blue Way Enchantress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Hello again YOU, I imagine that Gregori may have sent you to check on his latest order?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I've heard he isn't very happy about it being late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I should start by letting you know that the Enchantress who supervises the enchanting hall does not just do it for the mages of the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She also does so for the Crystal and Brown ways so do not be surprised if you see many of the other Circles members there as we all share it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is because the location of the hall, which was stumbled upon some time ago, is such that it energizes the enchanting process, and has numerous energies running through it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The location of this hall is not told to all, and only those with sufficient rank in one of the circles who use the hall are allowed access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Since you have passed the first few test put to you and have shown yourself capable and smart enough to get to where you are, I will teach you how to find the location and how to gain access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: First you will need a note of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin smirks and acts out patting his pockets before looking to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You don't happen to have some paper and ink do you?</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, now be sure to write neatly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin smirks as you speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You should have more faith in me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then begins to write out your note of admittance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: There…</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That should suffice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now to let you know where to go, you must know Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well pop to his shop and ask him to point you in the right direction, about as easy as me telling you exactly where it is.</td>
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
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to speak with the Crystal Way Enchantress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Hello again Gilayall, let me guess, Gregori sent you to check on his latest order?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I've heard he isn't very happy about it being late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I should start by letting you know that the Enchantress who supervises the enchanting hall does not just do it for the mages of the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: She also does so for the Blue and Brown ways so do not be surprised if you see many of the other Circles members there as we all share it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The location of the hall was stumbled upon some time ago and has numerous energies running through it such that it energises the enchanting process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The location of this hall is not told to all, and only those with sufficient rank in one of the circles who use the hall are allowed access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Since you have passed the first few test put to you and have shown yourself capable and smart enough to get to where you are, I will teach you how to find the location and how to gain access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: First you will need a note of admittance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell smirks and acts out patting his pockets before looking to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You don't happen to have some paper and ink do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you want some ink and paper?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Yes, one piece of paper will be fine the instructions aren't very long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Jayose over in the library will definitely have some.</td>
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
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, try not to get too much blue stain on it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You should have more faith in me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then begins to write out your note of admittance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: There…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: That should suffice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now to let you know where to go, you must know Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Well pop to his shop and ask him to point you in the right direction, about as easy as me telling you exactly where it is.</td>
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
						<td>YOU: Can you tell me about the Enchantress?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The Enchantress, why in all of Yalikium would you want to see her!?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus slowly places the items in his hands under the counter, with long drawn out and careful movements.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then leans in resting on his elbows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: She guards her domain like a daemon…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: DEAMON I TELL YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: She only lets a very few worthy people enter, and even less ever leave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Be it upon your own head if you chose to deal with her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: For you will not find me within a thousand miles of her lair by choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you prepared for the ordeal ahead?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to go, so yes I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus nods his head, a dark expression filling the gap under his hood.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: First I need proof that your circle wishes this fate for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds out his hand waiting.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here. [You hand Levrus your letter.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus reads over the letter with a blank expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If that's what Mulgik wants far be it for me to go against it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: To find the Enchanting hall you need to go to the top of this building, open the hatch, and enter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good luck.</td>
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
							$npcName = 'Niala Xanao';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Niala Xanao</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You look hesitantly at the Entrantress.] Hi, Gregori sent me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles at you, an unassuming smile that would make anyone feel at ease.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I was expecting him to be sending someone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: But not you, I am Niala, you are?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My name is YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala adjusts her hair slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I haven't been able to get this mop of hair to feel right all day…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala continues to fiddle with it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Any way, about Gregori's order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I had placed an order with Ondren for a number of gems and either kra has forgotten about it, or is just too busy to get them for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala sneezes, a high pitched squeak of a sneeze.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: So much better, that has been tickling me for hours…</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Anyway, if you can fetch enough of the crystals to fill Gregori's order I'd appreciate it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: And as you've been allowed here, I'll also show you how to enchant the crystals so you can come up here and work with your own whenever you please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright, so how many do you need?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles, pleased that you are so willing to help her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Gregori asked for something specific.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: To make sure I make everything he wants I will need four of each of Emeralds, Rubies, Diamonds and Sapphires.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles and adjusts her purple dress slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I've not mined them myself, I'm not very much a dirt and grime girl, but I understand they can be found under Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You'll have to ask around for specifics, I can't help you there, maybe the man downstairs can.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the crystals you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala is retying her hair in a ponytail as she turns to face you with a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Hello again YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I hope they weren't too hard to find.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taking the sack she pivots on one heel and places them down carefully before checking though them to make sure they are all there.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Good, excellent work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Are you interested in learning how the enchanting process works?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, very much so.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles sweetly as you answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Great, just let me get ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She starts by flicking though a well used book on enchanting to make sure she gets the combination right.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: First you need a glyph and a crystal…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala picks up an Arrow glyph in her right hand and a Ruby Crystal in her left.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She carefully places the crystal into the enchanter next to her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Then you need to use the enchanter and channel the energies of the Way you want to use through the glyph you chose and into the crystal in the Enchanter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Holding the glyph in her right hand, Niala steps up to the enchanter and begins channelling Crystal Way energies…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ruby Crystal begins to glow and hum slightly as the energies gather within it…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The enchantment finishes as a shimmer of light passes across the surface of the Ruby.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles once again, happy with her work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: It's quite simple really, give me a few minutes and I'll finish off the rest of Gregori's order…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala hums slightly as she works…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The humming is a pleasant light tune…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Right, done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Here you are, one sack of enchanted crystals for Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You can come back once you have delivered those if you have any questions.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori almost shouts his response.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: HA!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Took long enough for that damned enchantress to get these done for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Did you get an answer as to why she took so long?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ondren hadn't delivered the gems to her.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Ondren, that lazy Kran…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: All kra needed was to get a few crystals…probably ate them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Thank you very much for getting these for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I'm sure the tournament winner will be very happy receiving them.</td>
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
							$npcName = 'Niala Xanao';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Niala Xanao</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have a copy of the enchanting book I could have?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala gasps hearing your request.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I'm so sorry; I should have given you one of these when you were here last.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I'm supposed to give one to every person who is granted access to these halls by the Arch Mage of one of the three ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala picks up a fresh looking copy and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Here you are, take care of it as it has all the instructions you'll need for enchanting gems of only the Crystal, Blue and Brown Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I use other crystals?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Yes, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You can enchant Rubies, Emeralds, Sapphires and Diamonds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Different crystals are able to contain more power and give greater effects.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Rubies being the smallest and Diamonds the largest amount of energy and strongest effects.</td>
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
						<td>Niala: Well, most of them to be honest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: But not every glyph can be used to enchant every crystal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Many are listed in the book, but you won't be able to use every combination until you are experienced enough and powerful enough in the Way's glyphs you want to use.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the effects of the gems?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala give you a cheeky smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Unfortunately I'm not going to let that little secret on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You'll have to find an armourer to test them out with…</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: But I will let you know that the Way you enchant a crystal with will give you resistance against the opposing way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: So a Crystal Way glyph used to enchant a gem will give resistance to Dark Way magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Brown will give Azure resistance and Blue will give Red resistance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: There are some other not so obvious effects, but where would the fun be in letting that little secret out, too?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala smiles and winks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I enchant gems and crystals from the other three ways?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Niala frowns a little and shakes her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Here, no.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She stops abruptly after answering you, but then adds.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: They can be enchanted, but only Blue, Brown and Crystal glyphs can be used within the walls of The Mansion Beyond.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You will have to find another place of power to enchant the other Ways' glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have no more questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Well good luck with your foray into enchanting.</td>
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
						<td>Rewards: 1 Enchanting Gems of Power, 12200 XP.</td>
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
