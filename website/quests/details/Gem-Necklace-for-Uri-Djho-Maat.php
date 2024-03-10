<!doctype html>
<html>
<head>
	<title>Gem Necklace for Uri Djho-Maat</title>

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
						<td>Gem Necklace for Uri Djho-Maat</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Toda-Needs-Gold-Rings.php">Toda Needs Gold Rings</a> quest, Rank 40 jewelry making, 3 diamonds, 5 sapphires, 6 emeralds, 2 rubies.</td>
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
						<td>YOU: I'm back to learn more about making jewelry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks up from a scrap of paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: So I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Well, I suppose it's as good a time as ever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I have a job I've been asked to fill, you can help me and learn as we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: As I don't really have time to work out what all of these bits mean.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Sound fair?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, you have a deal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Uri Djho-Maat sent over an order for a fancy new necklace, but I can't quite make out what gems he wants where.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: If ye go find out what he wants and bring back the necessary gems, I'll show ye how to add gems to jewelry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll do it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks over the order again and sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Some of this looks rather intricate, so the gems will have to be specially cut.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Make sure ye talk to Ondren Torr once ye're clear on what Sir Djho-Maat wants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Kra is probably the best gem cutter in the Dome.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok had some questions about your necklace order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I thought I was quite clear with what I wanted...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I suppose I should be thankful he asked instead of guessing wrong.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Give it to me and I'll make it so even he can figure out what I want.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are. [You give Uri the order.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat makes some additional notes on the paper before handing it back to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: There...</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: That should be clear enough for him.</td>
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
							$npcName = 'Ondren Torr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ondren Torr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need some gems cut for a special necklace. Trasok said you could help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Did he now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Well, not a bad guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: What do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is the design. [You hand Ondren the order.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ondren Torr studies the order.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: This is indeed some intricate work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ondren Torr looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: I don't have enough of the right gems at the moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: If you get them for me I'll only bill Trasok for the cutting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Or I can add them to my next order, but you'll have to pay for the gems in advance and it will take time to get them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll get them for you. What do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: I'll need three diamonds, four sapphires, six emeralds, and two rubies.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the gems you asked for. [You give Ondren the assortment of gems.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ondren Torr begins cutting the gems.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra works for several minutes when suddenly kra frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Oh, dear.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>>Ondren Torr doesn't pay attention to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ondren Torr holds out kras hand to show you a shattered sapphire.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: This happens sometimes when there's an imperfection in the gem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Instead of cutting along the plane I want, the gem shatters along the flaw, leaving a pile of fragments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr pops some of the fragments into kras mouth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: It doesn't affect the taste any, fortunately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: I'm afraid you'll need to get another sapphire while I work on the remaining gems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the extra sapphire. [You give Ondren one more sapphire.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: I was able to complete cutting the other gems without incident.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ondren Torr cuts the sapphire and adds it to a sack with the other gems.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ondren Torr: Here are the cut gems and my bill for Trasok, along with the original order.</td>
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
						<td>YOU: I have the cut gems for Uri's necklace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ah, good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer coughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I trust ye also have the updated necklace order from Sir Djho-Maat and the bill from Ondren?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it's all here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ok, hand them over.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Trasok the sack of gems, the bill, and the clarified order.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks at Ondren's bill before pouring the gems into his hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds one of the cut gems up to the light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ondren's skills don't come cheap, but kra sure does fin...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Doesn't really matter to me since I'll just add kras bill to the one I send to Uri.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Will you show me how to add gems to jewelry now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Guess I should since ye held up your end of the bargain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I made the necklace while ye were away.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer points to an unpolished platinum necklace.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Now for the socket to hold the gem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: First, ye need to make some wire of the same metal as the piece of jewelry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer picks up a wire mold and steps over to the forge where he pours in a small amount of molten platinum.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Once ye have the wire, cut it into four strands.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer continues assembling Uri's necklace as he describes the process.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Use two strands to make the socket.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Next, take the socket and the piece of unpolished jewelry and put them together into a kit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Of course at this point y'll need to have a good amount of skill in metallurgy...enough ta melt platinum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: If ye don't ye can always work with someone who does and get molten platinum that way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I attach a socket to a finished piece of jewelry I already have?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: No, that won't work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: And make sure ye don't polish the jewelry before trying to attach the socket.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ye set the gem in the socket -then- polish the piece up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer finishes setting the gems and polishes the necklace until it almost glows.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: A fine piece if I do say so myself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer carefully wraps the necklace in a clean piece of cloth and hands it to you along with the bill.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Take this necklace and the bill to Uri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: When ye get back, I'll answer any further questions ye might have about making gemstone jewelry.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your necklace. [You give him the necklace.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat unwraps and inspects the necklace.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Trasok lives up to his secret reputation, he doesn't like people talking about his skill at jewelry making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: This will be a most suitable gift.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I suppose he sent a bill as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is. [You give Uri the bill.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat gives a quick glance at the bill and casually throws a large handful of coins in a pouch.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Yes, yes, here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Since Trasok trusted you to deliver this, I will assume I can trust you to return with his payment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat hands you a pouch full of tria as he continues admiring the necklace.</td>
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
						<td>YOU: Here is Uri's payment for the necklace. He seemed quite pleased.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: That's good to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Happy customers are more likely to be repeat customers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: So do ya have any questions about jewelry making?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have the instructions written down for making this kind of jewelry?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks around and picks up a book from a corner.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ah of course, almost forgot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ye can use this book to help remember the process.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Will I eventually be able to make jewelry like the necklace you made for Uri?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: The book I just gave you only covers how to set a single gem on a piece of jewelry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I'm not going to give away all my crafting secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: However, this also means ye don't need to worry about learning how to cut gems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about enchanted jewelry?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I don't deal with enchanted gems meself, but the process is the same except you use a gem enchanted by a mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: As for the effect of the enchantment, y'll have to fig'er that out yerself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think that answers all my questions. Thanks, Trasok.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer counts the coins from Uri and raises his eyebrows.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: This is a lot of tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: That guy loves throwing it around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Here, since ye did a lot of the running around, take a share.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you a pouch of tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Good, that's done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Maybe now I can get some work done around here.</td>
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
						<td>Rewards: 1  "Gemstone Jewelry", 10 Level in Faction with Smith Association, 2 Level in Jewelry Making, 3391 Tria, 10800 XP.</td>
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
