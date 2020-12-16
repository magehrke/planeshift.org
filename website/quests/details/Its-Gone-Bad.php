<!doctype html>
<html>
<head>
	<title>Its Gone Bad</title>

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
						<td>Its Gone Bad</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
						<td>YOU: You look troubled. Is there anything I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh stops rigorously polishing the top of his counter long enough to look you in the eye, before continuing his work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I had hoped that I was not so transparent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh sighs, his ears flattening against his head as he scratches away at a particularly pesky stain with an extended claw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Brado and I have been in business for some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I supply him with food and wares, and we settle the profits together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But lately, some of his customers have been complaining about nausea and claiming that his food is bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You get that on occasion, everybody likes a free meal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But you don't think this is a bunch of people wanting food on the cheap?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh grunts and slaps his cloth against the counter animatedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Not even close.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Brado's starting to suspect I'm trying to sink his business, which makes no sense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But what else could it be?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh leans towards you suddenly, taking a peek over your shoulder before lowering his voice and whispering conspiratorially.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I'll tell you what I think it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: There's only two people that handle all the food during its trip from farm to plate, and that's me, or Reffitia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I heard them arguing outside the other day, her and Brado, about how he never pays her enough for her services.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: There's your poisoner, not me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: She's even stopped buying certain goods from me recently, and not soon after, this all started up!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I tried telling Brado that, but he wouldn't listen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That does sound rather suspicious.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh slams his fist against the counter and nods his head enthusiastically.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: That's precisely what I thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Precisely!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Say…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't imagine you'd be willing to talk to her for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Maybe try to get the information out of her…tell her you don't think Brado's being fair or something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I'm sure she'd open up to you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That doesn't sound too hard.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh grins from ear to furry ear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You'll have my eternal gratitude.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That looks like rather backbreaking work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia hauls a large pot up onto the stove and begins ladling water into it from a barrel beside her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She doesn't turn around as she answers you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Yes, yes, always busy around here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you've got something to say, say it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you want to order, place your demands with Brado.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That's not in my job description, and I'm much too busy for small talk.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I bet Brado pays you quite handsomely for all your efforts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia laughs dryly, wiping her hands on her apron before turning and digging some flour out of a sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She sprinkles it into the water and then begins smacking her hands together to try and get the rest off, making a little cloud of white powder. Her answer comes amidst a barrage of resulting sneezes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That cheap…Enkidukai…barely gives enough to…keep the shelves in this place well-stocked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I had to…start getting my spices for my recipes from…some fellow in Amdeneir just to make up the deficit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How recently did you start doing this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sniffs and takes a pinch of some dried green plant hanging above her head, sprinkling it into her simmering stew. She makes a face before plunging a large wooden spoon into it and beginning to stir.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh, a few months ago I guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: He offered, I accepted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I don't turn away a good price.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Some of us have a little business sense!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia adds loud emphasis to this last part, turning her head towards the doorway pointedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her shoulders sag at the lack of obvious reaction from the barkeep on the other side of the wall.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Heaving another exaggerated sigh, she returns to dutifully stirring her stew.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Look, just go bug someone else, alright?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: And don't tell Brado about any of this, I don't want him reducing my pay even further.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I don't remember the fellow's name, but he told me he supplies for Jarda too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: He runs a tavern there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Now buzz off already and let me get back to my work.</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me who supplies your spices?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ynnwn turns from stacking mugs, holding the piled collection precariously before setting it down and looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His expression is one of vague confusion. One of his brows raises in silent query, wordlessly asking you to elaborate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm trying to figure out how you get your meals to taste so good!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda looks at you rather suspiciously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His scraggly brows curve down and his lips follow suit, until he looks on the verge of a scowl.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It's clear he doesn't believe the fib, and moves his fingers at you indicatively, effectively gesticulating, “out with it.”-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Reffitia claims that you share a supplier. People have been getting sick, and I need to know who it is so I can figure out why.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda relaxes his expression, and he makes a shrug of his massive shoulders before he begins casually wiping the mug out with a cloth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes his time with it, watching you as if you decide how much to tell you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-When he finishes, he sets the mug down with a thump and reaches beneath the bar to pull out a sheet of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smoothes it carefully for your perusal, and you see that he's been getting his supplies from the same family for about four cycles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The deliveries have been consistent and, judging by the way he's shaking his head at you, he's never had any issue with quality.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Has anyone come in here offering you a deal on cheaper goods?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda leans forward over the bar, casually flipping the voucher over to its blank back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He begins writing out a description and explanation, his course letters are bulky but legible.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The text reads.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - Some strange fellow came wandering by the other day.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - Dwarf, older fellow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - He was dressed nicely enough, and looked like he'd been recently scrubbed up and polished.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - But there was something about him that was…off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - His eye kept twitching, and if you leaned in close enough there was a faint whiff of something foul.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - Like waste. Like he went trekking through the sewers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are there open sewers in Amdeneir?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda shakes his head and shrugs lightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His gaze finds its way back to the door before he returns it to you, obviously checking to make sure nobody came in while he was distracted.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He continues to write.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - He offered to start selling me herbs at a decent price.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - More than decent actually, it was downright cheap.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - I couldn't figure out how he thought to make a profit out of it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - I started getting suspicious when he grew more and more agitated at my refusal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Text - Finally, he shouted that I was a dung eating tloke and stormed out of my tavern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda Ynarow leans back again and lounges against the wall behind him, folding his arms over his chest and fixing you with a twinkle in his eye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His hand moves in a vague shooing motion, and then he casually slides the paper back beneath the bar and out of sight.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda winks at you and returns to his work.-</td>
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
							$npcName = 'Finra Neticlo';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finra Neticlo</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look a bit nervous. I'm sure it has nothing to do with your surroundings.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra glares pointedly at you, scratching some dirt off of his worn armour and making a crude gesture with his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His left eye gives a tellingly sporadic twitch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Not very talkative? I was hoping you could shed a little light on a situation for me. Sure I can't buy your words?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra hesitates at the mention of tria. His expression becomes hungry, and his shifty eyes move left and right, inspecting the long darkness in either direction, before he licks his dry lips eagerly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: What're ya wantin' and what're ya offerin'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A circle for a story. Tell me, are you the fellow that's been running around offering spices to people?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra pales beneath his beard. He bristles, frustrated huffing noises coming forth as he puffs out his chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His hands clench and it looks like he might take a swipe at you, but seemingly at the recollection that a shiny coin hangs in the balance, he seems to calm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He beckons for you to come closer with his finger, his repulsive odour getting stronger by the second with proximity.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Wasn't me that had the idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Jes' someone who paid me for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Meals and all, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Heh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: He dressed me up nice and good and told me to wander into them bars and offer cheap goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Why not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Easy bit o' money, that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know who this was?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: These types don't give names.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra mutters something about needing to find a better hiding place in the sewers, eyeing you beadily for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: But I can tell ya what I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: He found me wandering around behind some houses in East Hydlaa, some rogue fellow, big tough guy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: He didn't seem ta like it 'ere that much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Some out of citierist.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you. That will do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra glares at you, fire in his dark eyes as his hand dances over the hilt of his weapon agitatedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: I was promised a price for waggin' my tongue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: I'm going to need it by the time this is all said and done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Or you ain' going anywhere.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course, here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra relaxes and a lazy smile spreads across his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He bites into the coin with yellowed teeth, and then pockets it once satisfied with its legitimacy.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Careful not to get yerself stabbed in the back.</td>
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
							$npcName = 'Kisatol Gathoji';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kisatol Gathoji</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I hear you might have something to do with the bad food at Brado's lately.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol looks at you through his mask, and his eyes crinkle as though he's sporting a wolfish smile beneath it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He slowly brings his hands together in a dramatic series of claps, mocking you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Well, well done little Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: You have done some very admirable sleuthing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I have an urge to pat you on the back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
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
						<td>YOU: So you have something good going, I'm in or I'm outing your plans!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol looks shocked, if his widening eyes is any indication.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he laughs again, and spreads his arms in an inclusive gesture.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I wouldn't have taken you for the type!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: So you want to help with my scheme, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Impressive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Tell me, have you figured out the 'why' of it yet?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You're supplying cheap damaged goods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Ha!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol pats at a pouch on his side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: It's simple economics, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: No, don't look so surprised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Even a crook knows how to turn the money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Let's just say my band and I needed a reputable source to sell our wares from, and Jirosh is doing some…excluding…based upon appearance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol pulls a glyph from the pouch and lets it dance around between his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: A merchant needs good repute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: So in exchange for refusing our offer to go into business together, I decided it would be a good idea to start sullying his name around town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: After all, if fewer people trust your wares, you have less tria to circulate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: And if you have less tria to circulate, you need to find more…lucrative suppliers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you went to all the trouble to get Reffitia and Jarda involved?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: A tactical move.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Reffitia was easier to fool than I'd hoped; I merely hired a grunt to do the work of vending my wares, so to speak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I figured she'd have actually checked with Jarda before buying willy nilly, but apparently Enkidukai are more stupid than I thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Jarda's cooperation turned out to not be needed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And now all that's left…?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Is to finish the framing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Yes, that's right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: And if you do that for me, I'll reward you quite handsomely indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: All you have to do is deliver this pouch to Reffitia.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol holds up a brown leather parcel. An odd odour wafts from it, a sickly sweet scent that isn't natural.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Show it to her, and tell her you saw Jirosh snooping around her shipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Then return to me.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Reffitia, I've got some news for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia's hands are a blur as she washes plates, and she gives you an annoyed look at the interruption.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: What is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Spit it out, then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh has been tampering with your spices. I found him putting some of this inside some bags which were part of your next shipment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sniffs at the air, and then pads towards you and takes a powerful whiff of the stuff.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her eyes tear up and she puts her hands over her nose.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That little scoundrel!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I can't believe he'd do such a thing, but I suppose money makes folks go crazy sometimes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: He's just mad that I found someone willing to sell to me at a more reasonable price!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia's whiskers quiver, and she puts her hands on her hips with an angry huff.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Rest assured Brado will hear all about this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: We're going to have a long talk with Jirosh, he and I!</td>
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
							$npcName = 'Kisatol Gathoji';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kisatol Gathoji</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've done as you requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol tosses a small round object into the air, and then extends his hand towards you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: So I heard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'm sure Brado and Jirosh will be arguing long into the night.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I might even go over to listen in.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: But that merchant's repute won't soon recover from this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: You've done well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol puts the object into your hand with a knowing laugh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'm willing to bet you'll get into quite a bit of trouble with this little trinket.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'm eager to see what nefarious things you can come up with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: As a matter of fact, I'm so appreciative of your skill, I was wondering if you might undertake a little more for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Split the earnings of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Mostly just to see if I could stir up a little trouble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What kind of trouble were you thinking about?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol is practically brimming with excitement; it's easy to tell by the way his fingers start to twitch and he begins to move from one foot to the other.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Can you think of how much upset it would cause of Allelia got even a little bit of doctored spices in her wares?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Oh, the number of upset tummies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Oh, the potential for trickery and blackmail!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like a good time. What do I need to do?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol reaches out to clap your shoulder roughly, though the gesture was probably meant to be companionable and not violent.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: That's the spirit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Just head on over to Allelia's place and work a little magic on those barrels of hers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Be careful you don't get caught, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Hah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I can see it now, a bunch of nauseated dwarves!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: It'll be quite the spectacle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol slaps his knee and lets out an enthusiastic guffaw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Just run on back when you're finished, and I'll sprinkle your pockets with a little extra coin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol sticks a hand in his pocket and pulls out a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Use this, I'm sure you will be able to make use of it.</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Allelia, I think there might be a problem. Have you seen the cracks in the barrels downstairs. About ready to burst!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia glances behind her, and then heaves a long-suffering sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Yes, yes, I know, I first saw them a few weeks back, but I hoped they would be alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: And you've managed to come at a quite time considering what's been going on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I should probably get the blasted things patched, but I really don't have the time for it, to be honest.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks at you with scrutiny.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Actually…I have the paste for it, I just can't really handle it and drinks at the same time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Get funny looks, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I don't suppose…you could do it for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I can do that, sure thing! You do a lot of work, you deserve a little help!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia smiles at you, her expression full of gratitude. She leans out enough to pluck a jar from one of the shelves above the bar, and then slides it smoothly down to you. The gooey paste inside doesn't look all too pleasant.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: That should seal any of the cracks we've got!</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Thanks again for taking care of that for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-TIP – to complete this part of the quest you have to go downstairs and use, which means right click on, the barrels to apply the paste and poison the contents.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Not a problem at all I'm already done. All finished up!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia heads downstairs and opens the spigot and pours some of the contaminated drink inside, passing it to a customer who requested it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Thanks a lot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: You're a lifesaver.</td>
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
							$npcName = 'Kisatol Gathoji';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kisatol Gathoji</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've done as requested. There'll be many an upset drunkard in Hydlaa tonight.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol brings his hands together in a loud, slightly comical applause.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he reaches over to swat you in the back of the head. It's too light to do any damage, thankfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I like you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I like you quite a lot, I've got to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Got..</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: to..</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: say!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: We should make this a regular thing, you and I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: You could become part of our merry little band someday!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He barks laughter at you, and then abruptly sobers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Not yet though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I don't think you're quite ready for that kind of commitment, do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's such a big responsibility, I'm probably not ready for it yet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol just shakes his head at you, though his hand moves to his belt and he tosses the promised tria onto the top of a barrel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Reward, as promised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Don't you forget about us now, hm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Can always use a grunt with a head on their shoulders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Now get out of my sight before I wring your neck for the fun of it.</td>
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
						<td>YOU: That's a pretty tricky business you've got going. I wonder what you used to pull it off!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Kisatol pats one of the pouches at his waist.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I have my ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I should like to know. It's such a brilliant plan, perhaps you'll tell me about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Kisatol shakes his head at you. Another chuckle rumbles from his chest, and he briefly flashes a glyph before your eyes before concealing it again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Like I said, I have my ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Now are you going to keep bothering me with your flattery, or do I have to have you forcefully removed?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You tried to persuade Kisatol to tell you, all he did was quickly flash a glyph to you.  Perhaps you could talk to a mage to work out what it is.</td>
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
						<td>YOU: Hello, Levrus. I don't suppose you could help me find the identity of a glyph?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus purses his lips, concentrating on a vial in his fingers that is bubbling and frothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He mutters incoherently about something, and then sets it in a clamp as it begins to overflow. The mage is unperturbed by this.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Glyph, is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well there are a lot of glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You're going to have to be more specific than that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You describe the glyph to Levrus.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus's eyes go wide.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He strokes his chin a few times, and then begins pulling out drawers and shuffling about papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With a muted 'aha!' he pulls forth a pouch and shakes it out onto the table, fingers dancing along until he plucks up one particular item and holds it out for you to see.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Poison!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A very sneaky glyph, that's for certain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Sneaky sneaky sneak sneak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Can cause lots of havoc with this particular beauty!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Tricky to get one's hands on, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Tell me, where did you see it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kisatol's been using it to taint Reffitia's spices.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus nods solemnly, and begins packing all the other glyphs away, leaving only that one on the table.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, yes, the crime's always been slippery up in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Don't like to go there much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: All the dust gets caught up in my robes, and the heat spoils alchemical ingredients before you can bat your eyes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And you have to spend two days digging about in rat droppings again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus shakes his head and tuts, clearly distraught with the idea of wasting whatever it is he needs from rats.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Why, there was this one time that...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus trails off, blushing.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I suppose now's not a good time for storytelling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I suppose you want a way to help Reffitia out, yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It's quite simple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Just tell her to cast Cleanse on all her spices before she uses them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Or better yet, just get another supplier!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Why the woman would buy from that fellow in the first place just boggles me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus eyes the glyph on the table and wrinkles his nose.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He mutters something to himself again, and then pokes at it a few times before sliding it across to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Come to think of it, now that you mention it I don't think I want this anywhere near my ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Not that I can't take care of it, of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Just, you never want to make a mistake when you're balancing formulations this delicate!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Levrus jumps as a loud pop sounds behind him.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He spins around, snatches up another vial and begins hastily dripping fluid from it into the one he was working on previously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes yes yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, good day to you now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Run along!</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Reffitia, I've found out your spices are being tampered with. Levrus told me that you need to cleanse them before you use them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia stares at you for a few moments, before dropping the plate she was washing into the soapy water and letting out a dramatic wail.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I try to help out around here and all I get for reward is underhandedness!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Who would do such a thing to me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: What's the point in making people sick, I ask you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You can't trust anyone these days!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda doesn't buy from the dwarf, but he does have a reputable supplier. I hear they're reasonable. Maybe you should take a trip to Amdeneir and talk to him about it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia's nose twitches in a sniffle, and she pats her hands dry on her apron before scratching at it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well, I suppose that's not such a terrible idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But what am I going to do with all the spices I've already bought?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I can't very well throw them all out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It would take too long and be too expensive to replace them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I did ask Levrus about that. A cleanse spell should take care of it for you. It'll make the spices safe to use.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia sniffs again at you, her hands on her hips. Her ears swivel and press against her head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I don't have the glyphs or skill for that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But Jirosh might have something in stock that could work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: He's resourceful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Just head on over and ask him about it, won't you?</td>
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
						<td>YOU: I've figured out where the poisoning was coming from. Reffitia wants your help, though. She started buying bad spices from some dwarf.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh grins at you, showing his pointed, white fangs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-For a terrifying moment it looks like he might hug you, but he curbs himself and remains behind the bar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Now Brado'll have to admit that he was wrong.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Oh, I can't wait to see the look on his face!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh pauses, his tail lashing back and forth so that it makes an audible whipping sound.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Bad spices, you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Well, are they just soured, or is there something else to it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Levrus said that it was because of a poison glyph. He said cleansing the herbs would work, though.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh nods at you and hops over the bar to begin eagerly ruffling through the crates at the back of his shop.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-When he returns, he's carrying a somewhat transparent jar with a bunch of unpleasant looking brown goo inside of it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It sloshes when he pushes it into your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: There, there, that should do it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Just tell her to add a little of this to the food she prepares.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh laughs at your startled expression.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I've been around, thank you very much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This isn't the first time some ne'er do well has tried ruining my reputation!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh pulls a jingling pouch of tria from his belt, and tosses that to you as well.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: As promised for your assistance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Now run along, I've got work to do!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Food to ship!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Dues to collect!</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got this solution from Jirosh!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia stares at the jar you're holding, and her whiskers quiver.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-For a moment it seems she might actually cry, and she morosely looks at the stew simmering on her stove-top, lamenting having to subject its deliciousness to whatever is lurking in that goop.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It's for a better cause.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It's for a better cause.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It's for a better cause.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia reaches out and snatches the stuff from your hands, twisting off the jar with a dramatic flair and using a spoon to plop a helping inside.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It floats precariously on the surface before slowly descending into the darkness of the pot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh, this better not mess up the taste!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's fine, I'm sure. Jirosh wouldn't give you something that wouldn't work!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia nods her head rapidly, fidgeting to and fro.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her shoulders and tail droop down, and she mopes about for a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I guess I should thank you anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You did help make sure my customers don't stop coming because they're afraid of dysentery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: So...thanks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She glares at the jar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I just have to make sure none of them ever see that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Once those herbs are gone, it's going somewhere far, far away!</td>
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
						<td>Rewards: [Way 1] 1 Poison glyph, -20 Faction with Enkidukai, -20 Faction with Guard, 20 Faction with Thieves Organization, 3391 Tria, 12200 XP, [Way 2] 1 Poison Glyph, 20 Faction with Enkidukai, 20 Faction with Guard, -20 Faction with Thieves Organization, 12200 XP.</td>
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
