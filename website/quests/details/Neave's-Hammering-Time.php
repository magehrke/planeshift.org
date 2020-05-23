<!doctype html>
<html>
<head>
	<title>Neave's Hammering Time</title>

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
						<td>Neave's Hammering Time</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Abelia's-Welcome.php">Abelia's Welcome</a> quest, 1 Lunch Pack.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Lunch Pack from the Abelia's Welcome quest.</td>
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
							$npcName = 'Neave Besetun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Neave Besetun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, are you Neave?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Why yes, that's right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave's tears her eyes from the unfinished blades propped against the side of the anvil, sets down her hammer, and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I'm the local smith in this part of the city; been asked to work on weapons for the warriors coming though here before they head back out to fight against the invasions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I'm here so the city's main blacksmith doesn't get buried under everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He has a lot to do after all, working in the centre of Hydlaa just off the plaza.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She sniffs suddenly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Hold on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave's narrows her eyes looking directly at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Is that smell what I think it is!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Uhm, I know I've been on the road for a while getting here, but do I really smell that bad?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Oh dear!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave chuckles softly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Did I make you worry for a moment then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I meant the scent of Abelia's delicious cooking; she is in my opinion the finest cook and baker in the whole of the city of Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Am I right that she sent you to bring my lunch over to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's right. Here's the lunch pack she made for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Oh, well look at that!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave takes the pack carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: She knows how hard Ibhaar has me working, what with all those blades he keeps wanting repaired for all his troops and the shields he's got me making.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave drops her voice slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Nothing here is ever quite good enough for him and he's determined everyone passing through proves they can use a weapon to some extent, so always has me making sure there are lots of different weapons available!</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: With the invasions, the Octarchy is quite keen on it as well, making sure all its citizens can fight and defend themselves that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: That’s actually one of the laws of the land; if you want to read the rest you could find a copy of the Decree in…</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Uh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Jayose’s Library.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave becomes a little distracted as she starts unwrapping her food.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So do you just repair things for Ibhaar?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Well, I'm the smith here so that is generally my job.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave takes a big bite of her lunch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: But if you’re interested I can tell you a little bit about the different kinds of smithy crafts you’re likely to run into in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Maybe tell you about how to start out in metal working and blacksmithing, the same things I started out with, if it takes your fancy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what sorts of crafts are there?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Well, all sorts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: You will be able to learn to make many different weapons and many different pieces of armour and lots of different shields.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave smiles warmly as she continues to eat her lunch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just look behind me to the table over there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I've been working on a few new shields, and then there's these half finished swords I have.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave points down to the blades resting against her anvil.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Of course, as a good smith I can also work on armour, but I don’t very much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Chainmail gloves and good sturdy plate helms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Maybe it's something you should think about trying?</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: You'll see that being a smith is a very diverse skill with lots to learn beyond how to simply work with metal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And how should I start to learn?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Well, you'd best start looking for master Harnquist just off the Hydlaa plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He owns the smithy there and he's always happy to help out anyone looking to start training their arm with a hammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He is also the starting point for anyone looking to join the Crafting Association.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: After you talk to him about that he will probably have a few little jobs you can help him with, like fetching some ore or maybe bringing him something to eat while he works; it's a good way to make some quick tria as well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave grins around another mouthful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He likes his food as much as I do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: And if you keep helping people in the association you will be taught how to make metal stocks from ores, then how to make bladed weapons like axes and swords, and then eventually to make many different shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Harnquist will tell you all you need to know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about other armour?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Shields are possible to make, like I said, as are light, medium and heavy helms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: And then you can make light armour made of leather and medium armour made of chain mail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: But if you are interested in making leather armour you will need to take a slightly different path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: You'll first need to learn how to work with leather, not really something you will learn from a blacksmith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: From what I know you will have to learn to tan hides and to sew and shape the leather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: If you ever take a trip to the Enkidukai city of Ojaveda, there is an Enkidukai there named Hirenn and I'm sure he will be able to help you get started with the leather working skill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you think I could have a go at something simple?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Well maybe you could…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave moves over to her pile of ores and carefully looks them over while talking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: One of the simplest things to do is to turn ore into metal ingots or stocks which you can then use in crafting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where would I find ore?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: By mining of course!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She gestures at the pile of different ores stacked next to her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Many, many different types of ore and gem can be mined out of the ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: You just need a sturdy pick and a bit of determination, but it's probably best to ask around near the smithy to see if someone can show you where to try and mine until you know where to go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She frowns a little, but the expression quickly changes to a grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: But mining ore is only good if you then learn to turn it into ingots and metal stock of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: You could use my furnace to try the very first step of that process; that step is melting some iron ore into molten iron.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She steps back to her anvil after picking up a few pieces of iron ore.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd love to try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Perfect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just step up to the furnace behind me then and pop one ore at a time inside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just wait it out and you should see the metal turning molten.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: But if you leave it in the furnace for too long it will be ruined and useless, so make sure you pay attention.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave hands you three pieces of ore.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Here, try with these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To learn about using containers click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'CRAFTING CONTAINERS'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Simply, you need to right click and open the interaction menu for the furnace, then select 'EXAMINE' which will open the container window for the furnace. Then you need to move the iron ore from your inventory to the container. Wait about 90 seconds and the iron ore will transform into molten iron ore which you can move back to your inventory and give to Neave.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I gave it a try; here's the molten ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Well, let me see then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave moves to take a look before nodding approvingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: It's a very good start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: If you really start to train to be a smith you will do the same thing a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just make sure you speak to Harnquist later on if you want to learn about what to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He is a good trainer for getting started in skills like mining, blacksmithing, and metallurgy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Is there anything else I can help you with for now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Neave..there is a giant heart on top of your ores?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave turns her head to look at it as though surprised and then chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Why yes, yes there is!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave pauses for a moment and gives you a rather serious look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: There are certain metals, ones only the most experienced metallurgists can produce, and well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave blushes slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I'm hoping to learn how to make them myself soon, but they do require some rather strange ingredients, like a giant ulbernaut heart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can't think of anything else to ask you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Hmm, well, okay then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Perhaps in this case I could ask a little favour of you instead?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave moves over toward the forge and carefully lifts a sword that was hidden there.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Ibhaar asked me to repair this for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: He is always taking so little care of his weapons and sending them back to me ruined, that I'm beginning to think he uses them to hammer arrows into trees instead of shooting the arrows like he should.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She shakes her head sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I really wonder about him sometimes, but then Diaboli are known to be a little, well, sort of odd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: I'd really appreciate it if you could run this sword over to him for me and I'm sure he'll hand you a little something for your time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll take him the sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Perfect then!</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Thank you very much for your help with this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave carefully hands you a broadsword which shows the signs of heavy reworking on its blade.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just continue to follow along the road and you will find him nearby.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: And…</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: One more thing as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: If you start to make or use weapons yourself, you might want to also learn how to repair them; it's another skill you will have a chance to learn more about in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: There might be many people like Ibhaar that need help repairing their armour or weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Just, take this as a small gift as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Once you pick up a weapon, you should take better care of it than Ibhaar does of his by learning to do repairs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Neave hands you a small repair kit, which includes several things you might be able to use to improve a damaged weapon.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Take care of yourself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She waves you toward the road and turns back to her anvil.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Neave: Right, it's hammering time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She begins to whistle a somewhat recognisable tune as she picks up her hammer and starts hammering again.-</td>
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
						<td>Rewards: 3 Iron Ore, 1 Ibhaar's Broadsword, 1 Weapons Repair Kit.</td>
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
