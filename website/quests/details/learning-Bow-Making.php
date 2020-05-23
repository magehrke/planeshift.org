<!doctype html>
<html>
<head>
	<title>learning Bow Making</title>

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
						<td>learning Bow Making</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 27 couchgrass, 2 Threestem wood, 1 wood chisel, 1 wood saw, 2 kikiri feathers.</td>
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
							$npcName = 'Jjousk Carryt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jjousk Carryt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you the one to teach me to make bows and arrows?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Are you surprised?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I may be an accomplished archer, but I also make all my own bows and have been doing so since I was a cub.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: So, you are interested in learning to make bows and arrows?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It is a fine craft, one to be proud of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But it is also a lot of work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Are you serious about learning how to become a bowyer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I really want to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well then, let's get started!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do I need to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well you know bows have one tremendous advantage over other weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Range!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: That's why they are so popular with hunters and warriors alike.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But like all weapons quality is everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: After all, if a hunter is hunting some terrible monster, say an ulberlord, and the bow breaks then they won't be coming back as a repeat customer, right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes of course. I want to make bows I can be proud of!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: That's the right attitude!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: So, are you ready to make your first bow?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: We will start with how to make a bow string.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: First I need to go over a few things about bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You probably know most of this already, but it is important that you know all of it to be a good bowmaker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: First of all, many of the races of Yliakum make their own style of bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Some of the reasons are obvious, like a StoneHammer, for example, might find a Ynnwn bow unwieldy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The specific types you'll be able to make are Dermorian, Enkidukai, Ynnwn, and StoneHammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Also, different races prefer different materials and have different traditions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There are also different classes of bows with their own characteristics: hunting bows are the most common kind, but there are also shortbows, longbows, and a few others which you'll learn to make as your skill improves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: So we'll start with hunting bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Now, let's get you started making that bow string!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do I need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Let's have you make a Dermorian Hunting Bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As you improve in skill, you can try and make an Enkidukai bow and finally a Ynnwn bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You will need a piece of wood, a bow string, a manual and some tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: We will start by making the bow string.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Your first task is to bring me a bunch of couchgrass plants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: We will need twenty-seven, sadly the process wastes a lot of material so we need a lot to start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: They are used to make a Dermorian bow string.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why couchgrass?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As I mentioned, each race has their own preferences and traditions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The Dermorians traditionally make their bow strings out of couchgrass.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where do I find couchgrass?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As with most plants and herbs, they can be found in the wilderness areas between cities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: They can be tricky to spot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I think you can find some over on the road to Ojaveda, between Hydlaa and the pass, near the bandit camp.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Try not to get too close they aren't the nicest people to spend time with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: And remember you need to harvest 27.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the couchgrass.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Next, you'll need this manual.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt has a book in his hand and gives it to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As you progress in your skill, check with me and when you're ready, we'll go over the other bows you can make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I probably shouldn't need to tell you to keep this manual on your mind or this will not be successful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Look over the book and familiarize yourself with the materials and tools you'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I sell most of the tools you will be using.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You can either make the bow by yourself or I can walk you through it step by step.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: If you can make one on your own, go ahead and show it to me once you're done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I actually make the strings?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Ah, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I will go over it step by step then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You see this table here?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt indicates the table near him.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You'll work in groups of three.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Put 3 of your couchgrass plants on the table together in one pile and season them, this will give you dried couchgrass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Do this 9 times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Then take 3 bunches of dried couchgrass and using a mandrel on the table twist them into a thread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Finally, take 3 of those threads and use the mandrel again to make a plant string.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt demonstrates.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It will take some practice to get really good at it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It is harder than it looks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The 27 couchgrass will make one bow string.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: When you are able to make this, return with your plant string.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the plant string.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Now you have your string so next you need some wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There are several kinds of wood you can use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Threestem wood is what we require.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Find it on the road to Ojaveda on a small plateau near the Dermorian farmer, I forget her name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Get two while you're out there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Once you have the wood, again go to the table and follow the instructions in the book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Never use ruqua wood, it will upset the Xiosia worshippers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: And never use duppong wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The smell never really goes away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Threestem wood and White Oak wood are the most common types for making bows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got the wood like you told me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: All you need now is a wood saw and a wood chisel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You can buy those from me...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The next few steps are simple but time consuming.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: First cut the wood in half to give you two boards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Then take one board and carve it using the chisel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: While still at the table, curve the bow and allow it to season.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: This will give you an unstrung bow.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the next steps?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Attach the string to your bow on the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Then final step is to try to balance your unbalanced bow, you just need to tweak it while still at the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Consult the book and you should be fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Once you're done I'll try and answer any questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I finished the bow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Let me see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes your bow, examines it, then gives it back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Not bad for a first attempt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well done, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Do you have any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else do I need to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well bows aren't much use without arrows are they?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I'll teach you how to make iron arrows now to make your bow more than a pretty toy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I suppose a bow is more useful with arrows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Good, we'll start by making arrow heads.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right then, what do I need to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Iron arrow heads are made by pouring molten iron into an arrow head mold and letting it cool into arrow heads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As you get more skilled you can refine them and make them better, but for now that is where you start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I can sell you an arrow head mold or you can buy one elsewhere if you can find it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Of course you will need to go to a furnace to get molten iron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Actually, I've got a spare mold so you can have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt hands you an arrow-head mold.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've made some arrow heads!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Now we'll make some arrow shafts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You are making great progress!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do I need to go back to the foundry to do that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: No, arrow shafts are made of wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You can make them here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You will need Threestem wood and a wood knife.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the wood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Now on the table use your knife to whittle the wood into shafts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have some shafts, what now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You're almost done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You just need to get some feathers to feather your arrows, cut and shape them into what are called "fletches".</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You should get thirty fletches from one feather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Arrows are made in batches of sixty, so you'll need at least two feathers to get started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Will any kind of feathers do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: That's a good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Fletches are traditionally made with kikiri feathers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Two feathers should get you started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got the feathers!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You're almost done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Just follow the directions in your book on how to cut them on the table with a knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Once you make fletches out of your feathers, we will be ready to assemble the arrows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now can I make an arrow? There can't be much more or arrows would cost a fortune!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You have all the parts ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Now put the arrow heads, arrow shafts and fletches on the work table and assemble them into sixty arrows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Just like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt quickly assembles a batch of arrows</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Of course I've done it a few thousand times so it may take you a little longer at first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Then using the riveter assemble them into finished arrows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Remember, you're working in batches of sixty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It will take a few minutes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've made an arrow. I feel pretty great!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You should!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But of course you have just begun.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There is still a great deal to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I guess I can call myself a bow maker now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You are an apprentice bow maker now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Of course you will need to study and practice a lot to become a fine bow maker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I still have a lot to teach you, come back once you are more comfortable doing this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You should be proud of yourself to be an artisan in this fine craft.</td>
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
						<td>Rewards: 1 Basic Bow Making, 1 Level in Bow Making, 10 Faction with Crafting Association, 10800 XP.</td>
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
