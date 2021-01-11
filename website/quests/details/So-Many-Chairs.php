<!doctype html>
<html>
<head>
	<title>So Many Chairs</title>

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
						<td>So Many Chairs</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look like you need help with something.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik is working feverishly before looking at you with a worried expression on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh dear!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: This is hopeless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: The Amdeneir Vigesimi is having a big party at his residence and he wants his old chairs replaced, insisting they be made of a certain wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I was almost done when I got word he wants twenty more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Twenty!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: And the party is days away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I don't have enough wood!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can I do to help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik breaths a sigh of relief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: This is very specific wood called Dark Oak, I'll need to put in an order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik chuckles a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: You know, Amdeneir is known for its wood but it still has to be sent away to be prepared for this type of work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He writes a work order for wood and begins to hand it to you when he hesitates.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh, I just remembered, the next caravan from Ojaveda isn't due for some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: It's going to be a close call.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Do you have access to the Hydlaa winch area, Sir?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Answer the pop-up window quickly or it will default to “no”.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
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
						<td>YOU: Why, yes, as a matter of fact I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh splendid!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Please go to Lentanor in the winch area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: If you don't know where he is, you can usually find him at his workshop on the level immediately above the winch building.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: He is closer than Jirosh and he should be able to give you the wood directly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: If you can carry it that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Here is the order.</td>
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
							$npcName = 'Lentanor Thunderhead';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lentanor Thunderhead</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is an order for Njormik in Amdeneir. He needs it fast!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Lentanor is sawing something, then stops, wipes his brow, and grabs the order.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He reads the order form and raises his thick eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Hmm, Dark Oak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Why yes, I think I have enough of tha' kind of wood here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: I use it all the time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Great for makin' quality furniture.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Njormik must have a big order if he needs this much.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some time passes as Lentanor goes into his shop and grabs the wood…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Here ye go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Now careful, this is heavy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: I'd say about one hundred an' fifty kilos.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: If ye can carry that much I'll just give it to ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Otherwise ye can tell Njormik I'll have it delivered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: It won't take long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: What'll it be?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can carry it. Lay it on me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Very well then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Here ye go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor bends skillfully at his knees and picks up the load, handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Give Njormik me regards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: He can pay me when he can.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik seems to be taking a break but sweat can still be seen on his forehead. He looks at you with a big grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Hey!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I see you have the wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: That's fantastic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Hand it over and I'll set it down.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [With some effort you hand over the stack of wood to Njormik.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik grunts as he sets it down. He gives the wood a good sniff.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I just love the smell of fresh wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Now I can get started right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'll have these chairs done in no time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'll pay Lentanor next time I see him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: You have been a great help to me, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Take these coins for your effort.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik reaches nearby and grabs a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'd also like you to have this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: It's a shield instructional book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'm a carpenter, I really don't have use for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I got it from a dwarf who passed by.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Yep, Carpenter is my name and carpentry is my game.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Let me know if you ever want to buy one of my wares.</td>
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
						<td>YOU: I'm afraid not.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Well in that case take this order and hurry to Jirosh Mikana in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Give him this order and be sure to tell him it's urgent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Bribe him if you need to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'll make sure you are compensated.</td>
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
						<td>YOU: Here is an order from Njormik in Amdeneir. He needs it fast!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Hmm?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh reads the order.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: No prob…wait, that's a lot of wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: There will be a caravan headed that way late tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Amdeneir is far from here, it takes time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He needs it faster than that!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh continues to look at the order and shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Everyone needs everything right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Caravans have a set schedule, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: We can't just send them on command.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there something I can do that would make this possible?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You really want to help the carpenter, don't you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh Mikana looks around for a second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Tell you what, we are still gathering the orders for the next caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I've got two cases of Terevan Wine headed for the tavern in Amdeneir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you can bring them to Merrinez, it should speed things up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Can you do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd be happy to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Very well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh reaches under the counter for 2 crates and carefully hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Two cases of Terevan Wine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please hurry and give them to Merrinez.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I hope you know where to find him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He should be nearby.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: And do be careful.</td>
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
						<td>YOU: I have two cases of Terevan Wine for you from Jirosh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez straightens up after stacking a crate and wipes his forehead with the back of his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: What's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Is this for the next caravan?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am trying to get the caravan to Amdeneir today.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Today?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I think that one is scheduled for late tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Unless…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I suppose you could find someone to run the caravan and, well, if Jirosh approves…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Good luck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: In the mean time, you can go back to Jirosh and tell him the wine has been delivered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Thanks by the way, saves me the trouble of picking it up myself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez Dholant smiles and returns to work.-</td>
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
						<td>YOU: The wine has been delivered safely.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh makes a check mark next to an item on a list he is holding.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Next, I need you to deliver one more case of wine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Miss Seduna has ordered a case of Macca Wine for the Mess Hall and it's sitting right here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It will also lead to your next task if you want your caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: While you're in the area, see if you can locate Shenji TorKaal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He is a young Rabani Enki who tends to linger around that area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He often runs caravans for me and he just got back from one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you can find and convince him to leave today, you'll have the final piece to your caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You might actually pull this off.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh Mikana grabs a case of Macca Wine and hands it to you.-</td>
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
							$npcName = 'Seduna Secut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Seduna Secut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Miss Seduna? Your case of Macca Wine from Jirosh.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Oh hello there child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Wine?</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Another case?</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Oh my.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: I just got one yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: One of my assistants must have not known I already had an order in.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Seduna takes the wine and carefully sets it down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Thank you very much child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Come any time and enjoy some freshly made food.</td>
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
							$npcName = 'Shenji TorKaal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Shenji TorKaal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you go on a special caravan run?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: You – you found me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji TorKaal shoulders sag a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: And here I thought I was finally done for the day.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji looks to the crystal above.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Will I ever get a moments peace?!?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji sighs and turns back to you, putting his hands on his hips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Every time someone wants a quick delivery, I'm the one who has to do all the work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: And you think I get paid extra for that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Fine, I will do it, but you have to do something first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: I have a yearning for some of Miss Seduna's famous pie.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Buy one for me and I'll pick up your cargo and get it to its destination by morning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Deal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Deal! One pie coming up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji eyes light up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Oh thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Now I will have something waiting for me when I get back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Just tell her to leave it for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: They don't cost much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Only seventy-five tria or so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Thank you, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: When you come back and tell me it's been ordered, I will leave at once!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji looks at you hopeful as you leave.-</td>
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
							$npcName = 'Seduna Secut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Seduna Secut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to order one of your famous pies for Shenji.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Seduna is looking busy but stops and looks at you with a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Oh hello again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Shenji wants another pie?</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Is he going on yet another late caravan run?</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: That boy really needs to slow down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: No wonder he eats so many pies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Always on the go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Very well, I will set one aside for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: That will be seventy-five tria please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, seventy-five tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Seduna takes the coins and gently drops them in a pouch in her apron.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Thank you, child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Shenji's pie will be waiting right here for him when he gets back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: You can go tell him so.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Seduna Secut pauses for a minute.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: You know, you have been so helpful with the wine and ordering a pie for Shenji…</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Let me give you something back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Since we have so much of the Macca wine now, I'd like to give you a bottle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Please, take it.</td>
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
							$npcName = 'Shenji TorKaal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Shenji TorKaal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your pie has been ordered and will be waiting for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Shenji eyes light up and he looks excited.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Thank you, Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Now I will have a nice pie waiting for me when I get back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: Miss Seduna knows the kind I like.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shenji: You can go tell Jirosh I'll be there shortly.</td>
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
						<td>YOU: Shenji is on his way. Get the wood ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I have already notified Merrinez to load the Dark Oak wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Since Shenji is willing to get it done now, I'll send him directly there to pick it up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you a signed receipt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You may give this to Njormik.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I hope the delivery will be to his satisfaction.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik seems to be taking a break but sweat can still be seen on his forehead.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh, welcome back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I just finished the last chair with the wood I have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Will there be a delivery from Jirosh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks at you with a hopeful expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good news! A caravan is on it's way and will be here by morning. Here is a receipt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Oh, that's great news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Thank you so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'll rest up and do some other things until it gets here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: This should be plenty of time to finish the project.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I can't thank you enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: You've been very helpful, Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Was there any expenses?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik leans toward you slightly and speaks softly with his low scratchy voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I hope it didn't cost you much to, um, grease the wheels if you know what I mean?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, Jirosh refused any payment, just seventy-five tria for pie.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Pie?</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: For you or for…</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Nevermind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I heard that Jirosh was a straight arrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I guess his reputation is accurate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Take these coins for your effort.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik reaches nearby and grabs a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'd also like you to have this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: It's a shield instructional book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'm a carpenter, I really don't have use for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I got it from a dwarf who passed by.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Yep, Carpenter is my name and carpentry is my game.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Let me know if you ever want to buy one of my wares.</td>
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
						<td>Rewards: [Way 1] 40 Faction with Crafting Association, 12958 Tria, 17800 XP, [Way 2] 1 Macca Wine Bottle, 1 Banded Shield Diagram, 25 Faction with Crafting Association, 5130 Tria, 13600 XP.</td>
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
