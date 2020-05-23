<!doctype html>
<html>
<head>
	<title>A Most Enchanting Order</title>

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
						<td>A Most Enchanting Order</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-Leather-Armor.php">Making Leather Armor</a> quest, 1 Leather Gloves Kit, 1 Steel Ingot, 1 Hammer, 1 Enchanted Ruby Crystal.</td>
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
						<td>YOU: Hi Gardr, anything you need help with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr is washing grime from kras hands as kra looks over to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I'm busy making some enchanted armor and need someone to collect some of the crystals for the work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Think you can fetch them for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yeah, I have some time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Great…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr turns and walks over to his tools flicking kras hands dry as kra does.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra picks up a few tools and puts them away before continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: So, it shouldn't be too many pickups.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Let me just find the list of orders I've yet to make…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr starts digging about looking for the order list.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So who do you need me to go and see?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Ah, here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr flicks through a few pieces of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: So…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I need you to head out to Evelyn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She has asked me to make her another pair of decorative gloves and wants some gems inlaid into them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She will be furthest away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Then there is…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Oh, Gurgus, I'd forgotten about this order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I should have had it done at the beginning of the week.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Kra wants some ceremonial armor making and the design has a number of crystals in it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Then..</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: we..</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: have…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Aerayau…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Huh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra scratches kras chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You'd think he would be able to get someone up at the fortress to do this for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But then I am the best.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr tries to hide a small smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I guess he will be furthest away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You'll be alright running off and about getting these orders for me won't you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll collect the orders for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good, I knew you would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: As soon as you are back I'll give you some instructions on how to inlay the gems into some armor, which gives them the same properties as the gem you used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And of course a practical demonstration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Do be back soon.</td>
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
						<td>YOU: I'm here to collect your gems for Gardr.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus is resting kras hands on the hilts of kras swords as you approached.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You know, when you get back to Gardr you should just tell him to come and collect these things kras self.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It's not like kra is more than a few minutes from here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus hands you a small box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Do be quick with getting these to kra, I would like my order filled soon.</td>
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
							$npcName = 'Aerayau Strongwill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aerayau Strongwill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm here to collect your gems for Gardr.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aerayau is standing, leaning forwards with his hands on the table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His long gilded sword and shield are laid out on the table in front of him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He has been watching you since you came into sight walking towards him and is making direct eye contact as you speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Welcome Citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I am very happy to hear that you have arrived from Gardr.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I have a number of very specific requests for kra.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Areayau picks up a decorative box and slides it across the table to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: In there you will find the gems and the instructions for their use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Now I know I can trust you to take these to kra…</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Because if you don't I'll have you hunted down and thrown in jail.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Areayau stands up straight and bids you to leave.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Good day.</td>
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
						<td>YOU: I'm here to collect your gems for Gardr.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn places the end of her staff on the ground and holds it with one hand as her eye lashes flutter briefly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A smile crosses her lips for a moment before she speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Just make sure these get to kra safely, I do hate to be disappointed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She lets go of her staff which remains standing up right as she walks over to the counter and picks up a small box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As she steps back to her staff she sweeps the hair out of her face and looks at you, handing you the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Good bye.</td>
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
						<td>YOU: I have the orders you asked me to collect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr shoves a few steel ingots into a furnace to let them heat up and become molten.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra walks back over to you dusting kras hands off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Great, saved me a lot of time by getting them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr takes the boxes and sacks and looks though all the contents.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr pulls out a wad of papers covered in notes from Areayau's Crystal box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra flicks though them waiting for you to reply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They are instructions from Areayau with what he wants done with the crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: So I can see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: He has already sent along one lot of designs…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And now he totally changes them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr shrugs and places the items on a table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Well I can deal with that later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now, about showing you how to affix one of these gems onto a piece of armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I think I'll teach you how to make an enchanted pair of gloves, the technique is essentially the same for every piece of armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: So to start with you will need a leather gloves kit, some steel ingots, a hammer and an enchanted ruby.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr goes over and moves about the steel ingots in the furnace.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Those items will allow you to test the techniques I'm about to show you once we are finished.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr glances over kras shoulder saying.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: If you arn't a mage you might find it hard making enchanted gems, so you should either ask a mage to make you some or join one of the Magic ways and work your way up the ranks until you enchant them yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have all the things you mentioned and I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr waves you over to the furnace where kra is pulling some molten steel out from the coals.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good, so with all the things you need ready, the process is quite simple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The first thing you needed to make was a kit for the piece of armor you want to add the enchanted crystal into, for this I got you to make the gloves, but you can use any kit you can make.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra walks over and places the molten steel on his anvil and picks up a hammer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now, the next thing you need to make is a gem socket.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra smiles as he starts to bring the hammer down on the molten steel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The heavy chimes echo under the small roof as the sparks burst off the steel and bounce about before coming to rest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra picks up the partly shaped socket and shows it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It should look something like this, and be able to hold any of the crystals you choose to place in it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra goes back to shaping it and between hammer strikes continues to talk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: For rubies you only need to use one piece of steel as they are the smallest and hold the least magic so are easily contained.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra begins tapping the gem socket to finish it off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: If you want to use emeralds or sapphires you will need to make a stronger socket with two molten steel, and for a diamond you will need to use three.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra holds up the gem socket and shows it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: There we go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That looks easy enough to make, what comes next?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks the gem socket over to make sure that it is good enough for kra and gives a nod of approval.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Well, the next step is for me to combine the gem socket with an armor kit I made yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: In this case I will be combining a standard gem socket, which is for rubies, with a leather gloves kit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra nods for you you to follow kra as kra walks over to the smith table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Placing both the gem socket and the leather gloves kit on the table kra works for a few minutes to correctly combine the two items together.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And this now this step is done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Again a pretty simple step, which leaves just one more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what's the last step?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr tidies up the smiths table and lays out the leather gloves kit and the enchanted ruby crystal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The last step once you have combined the gloves kit and the gem socket together, is to add in the enchanted crystal and make the final piece of armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now remember, at every step in this process the better quality materials you use, the better the final product will be, crystals included.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr bends over slightly and delicately attaches the ruby crystal and then pieces the kit together to make the final complete enchanted pair of gloves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As kra completes the gloves a shimmer of light glistens over the ruby and socket which now contains it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And there we are, a pair of magically enchanted gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now, the magical effect contained within the crystal you used will have been transferred to the piece of armor you attached it to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And if you didn't know before what the crystal's magic was…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Well, you'll just have to put your gloves on and go find someone to fire magic at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr chuckles a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But I hold no responsibility for what may happen as you test your new items out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks a lot for showing me Gardr, do you have some notes I can look over?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr nods as he flattens out the pair of gloves on the table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Sure, I've got some spares somewhere…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here we are, Enchanting Armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Just what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I hope it comes in useful.</td>
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
						<td>Rewards: 1 Enchanting Armor, 20 Faction with Crafting Association, 12200 XP.</td>
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
