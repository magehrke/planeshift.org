<!doctype html>
<html>
<head>
	<title>Wooden Toys and Old Friendship</title>

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
						<td>Wooden Toys and Old Friendship</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Threestem Wood.</td>
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
						<td>YOU: Hey Jjousk, is everything all right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt looks wary of you as he hurriedly hides something in his burlap bag.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-If you paid attention, you'd see it was a little rivnak toy made from wood.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He simply nods and mutters something along the lines of "I'm fine."-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you sure you're fine?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt nods once again and doesn't speak again, staring past you down the corridor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, now, I'm getting concerned.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Concerned?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Why would you care?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Go away!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There are no lessons today!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks like he's not happy with being so rude with you, but he turns away from you, looking very hostile.-</td>
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
							$npcName = 'Birkin Draewr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Birkin Draewr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Birkin, Jjousk seems to be in some sort of a problem...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Does he, now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Aye, that's what ah thought tha other day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Saw 'im with that lil' rivnak toy, aye?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I did see him with it. What is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Strangely 'nuff, ma good friend, that's a story ah do not know much about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: But lemme tell ya, I do know sumthin'!</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Jjousk used to run into trouble in Ojaveda with a lil' gang, aye, a merry company.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Jjousk, Benack, and pretty Bhurral.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Benack still makes bows almost as good as Jjousk's, aye!</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Y'know what, I think it'd be best if ya asked him.</td>
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
							$npcName = 'Benack Yasoj';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Benack Yasoj</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Benack. I've been told you can tell me about Jjousk's toy rivnak.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Jjousk's rivnak?</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: That's an old story.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Very old...</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Please, have some tea, take a seat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: It's somewhat of a lengthy story.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You take the tea and sit down, listening intently.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: It's been a few years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: We used to be very close to one another other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Well, that is, until Bhurral joined the guards, Jjousk got his job at the Arena, and I got married.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Thing is, we would play around Akkaio Ojaveda, causing more mischief than good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He chuckles a little, looking a little nostalgic.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Turns out Jjousk had a small toy rivnak, carved out of threestem wood, and he was very fond of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Mind you, he carved it himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Well, with my help, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: But...</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: He was even more fond of Bhurral.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Had he stayed here, in Ojaveda...</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Well, the story would be different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Anyways, he gave his favourite toy to Bhurral.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: When we came of age and found a job, we had to split up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Sure, Bhurral and I still see each other from time to time, but Jjousk and her, well, they've lost contact it seems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Anyways, when Jjousk left for Hydlaa, Bhurral met him, and returned the rivnak, so that he would never forget her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: And it looks like he hasn't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj smiles sadly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Too bad it's hurting him so badly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We need to find a way to help Jjousk...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: I agree with that, but, how?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Perhaps a new shield? We could tell her Jjousk made it...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj shakes his head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: No, I don't think it would work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: The guards get their shields replaced by Trasok.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then looks thoughtful again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How about a new hammer, then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: What did I just tell you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: She won't accept it, most likely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: It would look like you're bribing her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Let's keep thinking.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I know! We can carve Bhurral a rivnak toy, and she'll remember Jjousk!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Good idea!</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: I bet she'll even agree to a date.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: You know, to catch up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: I'll tell you what I need: a nice, thick branch of threestem wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: That is all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Go fetch one, I'll ready my tools.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, a nice, thick branch of threestem wood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Yes, this one will do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Thanks, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: I'll get to work on it now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Meanwhile, you should go talk to Bhurral.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Maybe you'll get her to loosen up a little.</td>
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
							$npcName = 'Bhurral Varsheen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bhurral Varsheen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Bhurral. What can you tell me about rivnaks?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Rivnaks?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Uhm, well, they're useful, aren't they?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: You can, hum, use them to carry items from here to there, you can make candles out of their wax, they're pretty fast...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Why do you ask?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Do you want one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, no... About Jjousk's rivnak.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks a little confused-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: But, Jjousk has always used a drif- Oh...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She keeps quiet for a little bit, blushing under her fur.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Suddenly, her expression changes to a more hostile one.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Now, you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Don't go bothering the guards while they're on duty with stupid questions, or I'll have you thrown into a cell for the rest of the day so you learn your lesson!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She goes back to standing proudly while she looks at the road leading to the city, even though she's still blushing under her fur out of embarrassment.-</td>
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
							$npcName = 'Benack Yasoj';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Benack Yasoj</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Geez, Bhurral almost bit me...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj smirks some and nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Yes, I should have told you to be careful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: But look, I've finished the rivnak!</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: It's the very same that Jjousk and I carved.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: It even has a little dent here, on the belly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Benack Yasoj: Take it to Bhurral, please.</td>
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
							$npcName = 'Bhurral Varsheen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bhurral Varsheen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen takes the little wooden toy, and her eyes sparkle, looking a little wet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: T-this...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: It's Jjousk's, isn't it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, but he'd like you to have it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She sighs softly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: I do miss him...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Could you tell him that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Or wait, even better: I'll write him a letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: We need to catch up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She suddenly smiles brightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Would you do me a favour, please?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Could you go to Brado and book a table for three - myself Jjousk and Benack?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: I'll write Jjousk a letter meanwhile.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Brado! I'd like to book a table for three.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: A table for three?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I'm sorry, but I don't really book tables.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I have a lot of people coming and going and I need all the tables to be free, can never be sure how long someone's meal will take.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please? It's for Bhurral, Jjousk and Benack.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Say what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: You should have said that earlier!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It'd make my heart happy to see those three together again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Sure, sure, go tell Bhurral I'll book her a table.</td>
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
							$npcName = 'Bhurral Varsheen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bhurral Varsheen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Got it, you have a table booked for whenever you need it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: I have finished writing the letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Please, give it to Jjousk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: You don't need to tell him anything else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: I'll tell Benack myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: And...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: Thank you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral Varsheen: This means a lot to us.</td>
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
						<td>YOU: I have something for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt seems to recognize you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Ah, it's you again...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: What do you have for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bhurral gave me this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: B-Bhurral?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He starts reading the letter, looking happy and affected at the same time.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: W-wow, I never thought you'd help me so much, and to think I was so rude to you...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I'm very sorry, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Please, accept this as my gratitude and my apologies for treating you wrong.</td>
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
						<td>Rewards: 2107 Tria, 10800 XP.</td>
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
