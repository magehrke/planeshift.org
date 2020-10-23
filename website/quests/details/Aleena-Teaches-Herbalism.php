<!doctype html>
<html>
<head>
	<title>Aleena Teaches Herbalism</title>

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
						<td>Aleena Teaches Herbalism</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Science.php">Introduction to Science</a> quest, 2 Barberry Root, 2 Juiceberry Fruit, 1 Masher, 1 Strainer.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you teach me about herbalism?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Greetings, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So you wish to try your hand at herbalism, do ya?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Sure, I can teach you, but I need to know you are serious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Working with plants and herbs takes a patient touch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I hope you're not just interested in making a bunch of super potions to make you invincible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There's a lot more to it than that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Xiosia has bestowed upon us many gifts in the form of plants, herbs, and fruits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Herbalism is the study of those, specifically what sort of properties each has and using that knowledge to create remedies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So what do you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Are you still interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Alright then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Aleena Arlavin is the name by the way if you didn't already know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena looks over to her garden.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: As you can see I have a small garden here I use to grow some of my own herbs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It's just for me though, not enough to go around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: We'll get to where you can find them soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: What I'll do is take you on as my apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Sound good?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sounds good. I am NAME.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Pleased to meet you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Let's get started with some basic information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: First I should impress upon you the importance of harvesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Knowing where to find various plants and how to dig them up properly is a key step to getting started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Of course if you like, you can just buy the ingredients from a merchant, but why pay when you can harvest them yourself, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Up to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Have you done any harvesting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I have gotten some training and dug for herbs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Excellent, then you have a head start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Look at my garden here when you have a chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It has some of the plants you'll need to find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: With them we can make teas from the leaves and juices from the berries and fruits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Teas can be made from Barberry Root, Golden Ivy Leaves, Lavender Flowers, Devils Claw, Eyebright, just to name a few.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Juices can be made from Juiceberry Fruit, Wragberries, or Threestem Fruit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Have you seen these things before?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am familiar with them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Then I have your first task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I'd like you to go find some Barberry Root.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can find some on the road to Ojaveda, not far from the east gates of Hydlaa, among other places.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I'd like you to get two or three and return here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If you get more that's fine, you can use the extra for practice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You show Aleena some Barberry Root.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena takes a look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yes, that will do nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now, once you have the herbs, the next thing you'll need to know is the tools of the trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The items you'll need are: a simple kitchen knife, a masher and strainer for making juices, a mortar and pestle for grinding things and making powders, and a table to do these things on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You'll also need some mugs of hot water and a pot to heat up your mixtures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Many of these things can be done in a typical kitchen or cooking area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now that you are my apprentice, you may use my area here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena looks at you to see if you are paying attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I have a table, mortar and pestle and some pots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So now that we know some ingredients and tools, next is to know what you can make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Do you have a kitchen knife?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oops, I don't have a knife.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena looks around.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It so happens I have one here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You may have it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena hands you a kitchen knife.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Keep in mind Jomed likely sells all the tools you'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now let's get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The first thing you will be able to make is teas and juices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Each is nutritious in their own way, whether they make you feel stronger, build your endurance, relax you, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So let's take that Barberry Root and make some Barberry Tea, shall we?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hmm, Barberry Tea? Does it taste good?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena giggles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Well, many teas can be an acquired taste.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Best to decide for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Making teas and juices doesn't require many steps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Here's a book you'll need, called Herbal Remedies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: First, using the table and holding your knife, slice the Barberry Root like so.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-has a Barberry Root and demonstrates by cutting the root into small pieces.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Be sure to get some training from me first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Go ahead and give it a try and let me know when you're done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena hands you a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That was easy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena looks over at your cut Barberry Root.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Next you'll need to put those in a cup of hot water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So go get a cup of hot water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can get a bunch by heating a water filled bucket in a pot and you can get those buckets from Jomed or other merchants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: That will give you some Barberry Tea Mix which you'll then put in a pot until it's ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: That's it, simple as that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Go give it a try, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I did it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena giggles a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Very good, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: See, that was easy, wasn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Get some training from me and you can try with different herbs you find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The book will give you ideas on ones you can look for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now let's try to make some juice, shall we?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Great. Making juice sounds straightforward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Even fewer steps than making tea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Let's take Juiceberry Juice for example.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena giggles a bit as she speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Sounds juicy don't it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure does, where can I find those?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Juiceberry Fruit is nice plump berries that are quite tasty and sweet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: They are said to loosen the limbs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can find some on the road to the Eagle Bronze Doors before the pass, past the lake there, under some trees, and the road to Ojaveda between the river and that crater.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: How about you go out and gather a few and bring them back here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You're also going to need that masher and strainer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Return here with some Juiceberry Fruit and we'll continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned with Juiceberry Fruit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So here's what you do: take a berry and mash it using a masher on a table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Just put the masher in your right hand and it creates a gooey clump of juice and fruit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Then, use your strainer in a pot to separate the pulp from the juice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: All the juice will go in the pot resulting in a bottle of juice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Give it a try!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Success! I have made some Juiceberry Juice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena grins with excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Well done, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You are on your way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I think that is enough for our first lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Consider this a training session.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: From here, experiment with different plants for teas and fruits for juices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Of course, try them out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Some make you stronger, some make you relaxed, some increase stamina, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Nothing that's in the book will poison you to the Death Realm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now I'd be glad to answer any questions you may have.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else can I make as my skills improve?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Ah good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Two things: first, after about every five lessons or so, you'll be able to make additional teas and juices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Once you reach a certain point, I'll take you through some other things you can do with herbalism.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I won't go into details yet, but there are pastes, salves, extracts, poultices, and oils.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I will explain all that and give you another book when you are ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I make potions?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena covers her mouth with her hand and giggles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Ambitious aren't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Potions are made with alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If you think about it, teas and juices are like potions, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: But you want to make those fancy ones like Liera sells, don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Well, you'll have to put a lot of work in and look into alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There is a strong connection between the two skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: In fact many of the items you will eventually make using your herbal skill can be used in alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: So get plenty of practice making those teas and juices and we'll get to all of that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about alchemy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Alchemy is a natural extension of herbal skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: That's why many herbalists like me are also skilled in alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Many of the remedies you can make are of great use in alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: But alchemy makes use of much more than just plant life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It uses crystals, minerals, and even animal parts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena wrinkles her nose.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I don't like using animal parts myself, I feel bad knowing harm came to them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think that's all the questions for now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Just keep making various teas and juices and study their effects.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Also, be sure to take some time and explore the dome for all the wonderful things Xiosia has given us.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena ponders for a brief moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I think that's it for now, have I forgotten anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are there any other herbalists, or anyone else I might want to visit?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Ah, good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There is Liera in the arena, who is a great herbalist and alchemist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There is Vladovic who has a shop in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You may also want to visit Grok Idon who has a small stand near the big stalagmite just outside Hydlaa on the road to the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There is also my good friend, Sharven, the priest at the Laanx temple.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where are some good spots for finding plants?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: In general, on the roads between cities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: They are all over the place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The road to Ojaveda has a lot of nice spots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: In particular, there is a spot near that rogue camp.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I also found a spot by the river over the ridge from the small Gobble village there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The crater out by that way too has some interesting flowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: On the road to the Eagle Bronze Doors, there's some near Grok's stand, which is probably why kra likes the area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It can change too, depending on the season, so best to take some time and explore the whole area and see what wonders you can find.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where do I get those harvesting tools?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Harnquist sells axes and sickles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If it's a shovel you are looking for, you might want to try helping that archeologist out by the ruins near Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I hear she likes to give them away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are all herbalists Xiosia followers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Not necessarily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Most of us recognize that it is Xiosia who has given us these wonderful gifts to discover and use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: However, one does not have to be a devoted follower to pursue the herbal arts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: My parents were Laanx followers and I still respect that religion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: In fact I keep in close touch with Sharven, the priest at the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: But working with nature has drawn me closer to Xiosia.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready to start practicing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Best of luck to you, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena attention drifts as stares out across the city.-</td>
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
						<td>Rewards: 1 Kitchen Knife, 1 Herbal Remedies, 20 Faction with Science Association, 12200 XP.</td>
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
