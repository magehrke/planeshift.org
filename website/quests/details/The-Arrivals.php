<!doctype html>
<html>
<head>
	<title>The Arrivals</title>

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
						<td>The Arrivals</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 2 Diamonds [Item] 1, riverling skull [Item] 1, riverling tooth [Item] 2, niters [Item] 2, oil of vitriol [Item] 2, common salts [Item] 5, wragberries..</td>
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
						<td>YOU: Excuse me, commander Raithen?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Raithen scowls at you as he looks from the view over the canyon to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: You...</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: You're going to help me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes of course.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Now go and find out what all the commotion on the far side of the canyon is.</td>
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
							$npcName = 'Kimlorm';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kimlorm</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know of the trouble on this side of the canyon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra is looking off towards the end of the left edge of the canyon.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: Chrosor and I were the first to meet the two brutes, we have just returned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: I've never seen any creatures like those two lavvars as close to the fortress before, and neither have I had to fight anything like them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: I could hardly get close without feeling their heat begin to scold and singe my clothing and armour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A lavvar?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: Yes, a molten rock filled, giant, two legged, two armed, fiery beast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: Please go and tell commander Raithen that lavvar have begun approaching the Fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kimlorm: It will be important to gather necessary supplies to fight them.</td>
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
						<td>YOU: Lavvars have been making their way towards the Fortress.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Raithen nods as his bulky figure turns towards you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I had imagined it would be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: The stench of molten flesh has begun reaching me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Unfortunately they are difficult beasts to deal with using conventional weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I am ordering you to go and find out where they are coming from, it can't be far from the fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: The more you are able to find out the better your reward will be, I do not expect it to be easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Now go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where was I to go?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Am I really to explain myself again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Find where the lavvars are coming from!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Go to the lava cave</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: I went to the cave and fell off of the magic stones. I went to Raithen to report. Not sure, what the dialog is if you pass the cave at once.</td>
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
						<td>YOU: [You tell Raithen about the cave entrance.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: At the small cave you say...</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I had always wondered why you could walk along what is clearly a path all the way to the end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: None of my advisers had told me of the sealed cave there; it must be very old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Is there anything else of importance in the cave to tell me about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Tell Raithen about the cogs and magic stones.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: There must be an impressive magic at work there to be able to maintain those rocks as they are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I would not be surprised if it was on par to those used in the winches.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: This is very valuable information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I will contact those who require to know immediately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Was there anything else of note to tell me of?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will return once more to see what I can find.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I expect nothing less of you now, find something or don't return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Now I passed the cave completly and went gack to Raithen.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You tell Raithen about the door you found.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: A door with some sort of puzzle on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: In an seemingly abandoned cave populated by lavvars and pterosaurs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Which contains giant rocks you can move by some sort of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Which protect a door lock with a magic puzzle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I have not heard such a tale for a long time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: If I did not know the lavvar were coming from that cave I would not believe you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: You are lucky that I do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I will organise a full exploration of the caves for later.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's the next step?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: There is much needed to ensure we can resist an onslaught from lavvars.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: A combination of enchanted weapons and alchemical concoctions alongside the fortitude of my warriors will ensure they easily survive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Go to the blue way Archmaster, and the Alchemist in Ojaveda...the old woman in Dsar Kore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I anticipated you would do as much as you have and I have sent word to Rorwien to give you permission to use the Fortress' pterosaur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I'm giving you six travel tokens, if you use them up before you are done you will have to pay your way yourself.</td>
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
						<td>YOU: Raithen sent me to see if you can help with a lavvar problem he is having.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: A lavvar you say...</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: I was sent to deal with some of those during my early years as a Blue Circle member.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Many of the Blue Way spells were as affective as you would think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: But it was a specially enchanted Iced blade which was most deadly to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Unfortunately the downside was you had to get very close to use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: And the last blade I saw was destroyed during the battles with them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the chances of finding another?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Barrin Dhorod smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Finding..?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Probably zero.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Though I have often thought about trying to recreate the blade, or a blade with a similar proficiency for killing things like lavvars.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can I do to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: You can get me two diamonds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: I will think about which blade would be best used to lay the enchanted diamonds into, they should offer enough resistance to Red Way and protect the blade while being used against lavvars.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Thank you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: I have been thinking about the blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: I can think that only a platinum steel blade would have the strength to maintain the magic within that I am hoping it would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Go and see Gardr, I suspect kra might be willing to help you get one.</td>
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
							$npcName = 'Chired Idelall';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chired Idelall</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Raithen sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Raithen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: From the Eagle Fortress?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: What does he want from me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They need a way to fight lavvars. Do you have any alchemical suggestions?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I can think of a few concoctions which might prove useful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: There is a potion called an alchemist freezer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: These are thrown weapons which will hurt whoever you throw them at, similar to some Blue Way spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I'm sure these should be useful against a creature like a lavvar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: But I've never spoken to anyone who has tried it so I might be wrong.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm not really sure what those are, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Ah, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: In this case I suppose I will have to offer to make them for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I will need one riverling skull, one riverling tooth, two niters, two oil of vitriol, two common salts, and five wragberries.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Once you have those return and I will start making the alchemist freezers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the items you need.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall yawns as she turns to face you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Sorry, I've had a long day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I'll get started on these soon, check back with me in a little while.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to wait for 5 minutes</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are the concoctions ready yet?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall lets out a small sigh.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: There was much more to these than I remembered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: But yes, they are done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Here you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Just take them up to Raithen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: He should be happy.</td>
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
							$npcName = 'Gadr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gadr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Gardr, I need a platinum steel blade.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: For what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Just coming and asking for something like that is a big ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Any blade made of that metal is expensive.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Barrin suggested I speak to you to obtain one for fighting lavvars.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gardr Keck nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Well, he has done lots for me recently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: I suppose I could make the blade for him in repayment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You'll need to come back in a while so I can take time to make one for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: you have to wait until it's finished</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is it ready yet?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Yes it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: One of my more favoured crafting items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Here you are.</td>
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
						<td>YOU: I've gotten you a sword you should be able to use.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Barrin Dhorod takes the sword.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Excellent...</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: This looks very much like the one I used previously, though a different design..</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: But it's a sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: This is up for me to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: First the gems you obtained will need enchanting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: I have yet to decide exactly which glyphs I will be using.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Once I have decided I will proceed to readying the weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Please leave me and let me work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to wait for 10 minutes.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you done now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Yes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Yes I am.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Barrin Dhorod is holding the blade which seems to have a new blue hue to it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: It is behaving exactly like I had hoped.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: It very much reminds me of the blade I mentioned to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin Dhorod: Please take it and be careful.</td>
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
						<td>YOU: Here are four alchemist freezers from Chired and an enchanted sword from Barrin.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: These better be worth my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I will not be pleased if they turn out to be useless.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Raithen stands looking at you for a while.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: ...</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: However, you did make a significant effort to assist my forces and I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: My team has recently arrived back and has confirmed all you said.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Due to this I will allow you to travel up to this fortress by pterosaur until such time I no longer wish to see you here.</td>
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
						<td>Rewards: 1 Shadow Shield, 5130 Tria, 13600 XP.</td>
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
