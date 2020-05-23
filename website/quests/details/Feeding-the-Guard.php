<!doctype html>
<html>
<head>
	<title>Feeding the Guard</title>

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
						<td>Feeding the Guard</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest, 2 Coal Lumps, 1 Iron Ore, 2 Oil of Vitriol, 1 Stibine.</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, anything I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor is working on making some sort of kran food.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You're looking for work?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra runs a hand over his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Hmm..I'm sure I can dig something up…</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: The annual banquet for the Gugrontid Guard is coming up soon and Gurgus still hasn't gotten me kra's list of attendees and what they want for dinner.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like they take your good cooking for granite…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor squints at you and tries to look at you annoyed, if you look closely you can see a glimmer in kra's eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Keep making puns like that and our friendship will be off to a rocky start…</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Anyway, for Kran it's healthiest to eat the same or similar minerals that we seem to be made of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: I wanted to get a list of Kran that are attending and what they are composed of so I can serve them a somewhat healthy main course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: I don't want the guards getting too out of shape to fight off those ulbernauts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Though I suppose I will serve some sort of platinum or gold dessert as well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: I seem to be rambling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Would you go get the list from Gurgus?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure I can help you with that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Please hurry back so I can place an order with my suppliers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Gurgus should be near the top of the city.</td>
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
						<td>YOU: Belcor sent me to get the guest list and meal orders.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Oh..I uh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I've been busy with planning other..things…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It's not quite finished yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: While I finish up go check if Malco has gotten his armour fixed up and shined so kra looks decent for the banquet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Kra's equipment is always in need of some kind of repair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Kra is too absent minded to do it without being reminded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Malco should be on duty right now at the base of the ramp.</td>
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
						<td>YOU: Gurgus sent me to see if you have had your armour fixed up for the banquet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco likes armour scruffy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco armour has battle scars.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco armour tell story of ulbernaut!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco points to a large dent in kras armour.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Ulbernaut hit Malco with arm swinging!</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Ouch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco okay now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco grins and lifts his hammer high.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco hit ulbernaut head hard!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A loud grumbling sound can be heard coming from Malco.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco looks down at kras belly and back up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco give armour for snack!</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco break for snack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco need armour to guard.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright I'll go see if I can get Belcor to make you a snack.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco offers a goofy looking grin as a reply.-</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to get a snack for Malco.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: That kra is always hungry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: How about I show you how to make some simple food for kran?</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Maybe later you can help me with the lunch rush.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds great.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: I know what you can help me make, nice, simple and quick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: A smith's soup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: First we will need two coal lumps, one iron ore lump, two oil of vitriols, and one stibine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Go gather those up and come back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got it all, now what.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Let me be clear we might use the same tools as those that perform alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: But this isn't alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: It's exactly like Jomed cooking his fish or steaming some carrots…</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Much nicer tasting, but the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You'll need this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor takes out a dirty looking book and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Look through that and then let me know when you are ready to try making a little something for Malco.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: And you'll need some tools.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I understand the basic recipes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor looks at you and crunches on some gems for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Sorry, just needed a little snack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You know how hungry cooking can make you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra chuckles a little, small chips of gem spurt out into the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor doesn't seem too bothered about what kra just did as kra starts to explain how to make the dish.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: So..</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: first you need to make some powdered coal, you can do this by holding a wooden mallet, placing the coal on the alchemy table and use that to bash it into a powder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Let me know when you are done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: And I've a few tools lying about you can help yourself too.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what's next?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor knocks some more gem pieces from kras cheek.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Yes, ok, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Now you need to make an iron ore solution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You need to powder an iron ore the same way you did with the coal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Then combine that with two oil of vitriols.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Then take that mix and using a crucible and glass stirrer mix it into some iron ore solutions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got the iron ore solutions, what's next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: The last step is easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: First take the second coal lump and using a wooden mallet and the alchemy table first break it into large chunks, and then one of those large chunks into small chunks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Then take the powdered coal, two of those small chunks of coal, iron ore solution and one stibine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: I actually have one extra you can have.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra hands you a sample of stibine.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You need to combine all of these into a smith's soup mix.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Then move that to a melting pot and mix it with a glass stirrer until its formed a smith's soup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: And once you have that run it over to Malco while it's still hot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Once you've prepared it all, just take it directly to Malco.</td>
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
						<td>YOU: I've made this for you Malco.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Snack!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco wraps you in a quick bear hug and then unstraps kras armour before giving it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco break now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco eat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco wait for armour.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco then turns and starts to eat kras food.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra waves goodbye as soup trickles down kras chin.-</td>
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
						<td>YOU: I need this armour fixed and shined up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Ah is this Malco's?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I've been expecting this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Gurgus has already paid me to fix it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: For once kra remembered to pay me before hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Come back in a little while and I'll have this good as new.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr bangs out the dents and shines up the armour before handing it back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You have to wait for 5 minutes before you can continue this quest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you finished?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr takes a few seconds just to finish off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here you are, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Almost as good as new.</td>
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
						<td>YOU: Here you go Malco. Your armour is all fixed and shined up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco takes the armour and puts it back on.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco like shiny.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco happy.</td>
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
						<td>YOU: Malco's armour is taken care of.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Here is that list you needed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra hands you the list.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You'd better get that to Belcor as soon as you can.</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the list you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: About time Gurgus got that finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Thanks for all of your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: You're a gem.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Belcor laughs at kras own joke before going into the back room to make sure kra has all the ingredients kra needs.-</td>
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
						<td>Rewards: 1 Cooking with Minerals, 1 Wooden Mallet, 1 Glass Stirrer, 1 Stibine, 13600 XP.</td>
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
