<!doctype html>
<html>
<head>
	<title>Repentance</title>

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
						<td>Repentance</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Slimy-Doubt.php">Slimy Doubt</a> quest.</td>
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
						<td>YOU: Salutations Gurgus. I believe I am ready to train further with you. I would be glad to show you how well I handle the Beat Attack now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gurgus Dahnik smiles but kra seems preoccupied.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I am very happy to see you Huarwar, you have made yourself quite a reputation in the Order and deserve to be its Champion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh? Does that mean... .</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra nods, still smiling, though you can see that kra is not fully paying attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: We now consider you a Champion of the Order of the Keen Edge, congratulations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I will be glad to share my knowledge with you, but first...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: We need to speak about the Platinum Warriors matter, if you don't mind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course not, I can see that you are preoccupied Gurgus. Did you learn some news concerning them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Not much more than what you told the Order; they are a group of mercenaries who are over-equipped, mysteriously financed, lead by an even more mysterious 'G.'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Their strategy is to create dangerous events, then swoop in as the solution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: This is preoccupying in itself but what worries me the most is our fellow Order members...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: And the citizens that could be at the wrong time in the wrong place.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I agree. We need to go further in our investigation about them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Well, I am glad you suggested this...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I have to tell you that once again, we are without news from Thrynt Glass after he told us he was leaving the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I am conscious that it is the second time we send you to him but he is the only one that confessed about his difficulties.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: All the other members left in silence and have refused to talk with us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I believe it could be important to go and speak to him again.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right, I will contact him again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra nods, thankfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Be sure to follow the leads of your investigation, listen to your instincts, it has served you well to this point and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: To learn more about Roniston Shane, you could speak with Grand Master Stevald's brother, Polyuntri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: He is the official advisor of the Shadow Squadron's commander, Raithen, and a fervent adept of Laanx.</td>
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
							$npcName = 'Thrynt Glass';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thrynt Glass</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Thrynt. How are you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Upon seeing you, Thrynt starts chewing his lower lip, embarrassed but resilient.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Huarwar...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Look, I know why you are here!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Yes I quit, I did it and I don't regret it...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Or maybe a bit but I had no choice!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Look, I've already notified Gurgus and Gregori about my problems and how do you think they reacted?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Do you think they showed any sign of solidarity?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Well, no.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you happy with your new situation? Is it going as you hoped?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass swallows, looking in the distance.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I never truly wanted to leave the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I liked it there, made some good friends and have learned much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: It also gave me certain prestige that would have surely helped my candidature in the Shadow Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: But at least now I have pay and can bring food almost every day on my family table!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Order never hid that their missions only brought glory. But I understand, I really do. [You try another approach] So, what have you heard about the Platinum Warriors? I grew curious about them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass stays silent a few seconds, his eyes showing a surprising fear.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He approaches you and whispers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Believe me, Huarwar, don't join them...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I had to do things...</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Things that I regret, they made me do things, mind tricked me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What things? [As Thrynt stays silent, you insist.] What things Thrynt? You know I am here to help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass shakes his head, deciding not to say anything more.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day. I am a Champion of the Order of the Keen Edge. I have been advised to seek information from you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Yet another wannabe-noble-apprentice of my brother Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Magnificent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Well go ahead, shout your question but be brief please, I am a busy Ynnwn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You ignore his acidic tone and proceed.] I heard that you were a Laanx adept and I was wondering if you knew someone named Roniston Shane. A Ylian, tall, very devoted to the God.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I am forcing myself not to wonder why you are asking me such a thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Not that I care anyway but I don't like speaking about others...</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: So yes, I do know Roniston Shane and very devoted to Laanx is an understatement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: This man is a fanatic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: He even has some followers in the church, especially among youngsters.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know where I can find him? I have some questions for him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I thought my brother was leading an Order of warriors, not of chroniclers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Polyuntri Stevald shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I saw him speaking with Sharven yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Thinking back, he had a grim look, seemed withered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: He said he had to unburden himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I suppose you should speak with High Priest Sharven Xant-Areth.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Hight-Priest Xant-Areth. I am sorry to disturb you but I need to speak to you in private.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I suppose it is important, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Well, I can dedicate a minute to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Approach here and let us talk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: How can I be of help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [With carefully chosen words, you explain the matter to Sharven, including your need to know more about Roniston Shane.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The high-priest takes a minute to ponder before answering.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know no priest of Laanx that would willingly repeat what one of the faithful said in confidence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Plus, Roniston is a fervent follower of Laanx and the church protects him as it protects all its adepts...</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: However, I do understand the distress of the situation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I've heard about this group, the Platinum Warriors, and not often in a good way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there a way for me to show the temple my good will?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Sharven Xant-Areth smiles, maybe at your smartness, maybe in the perspective of a gesture of good will.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Well you could always make a donation to the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: To help maintain its structure for example, or pay for the thousands of candles we use every week.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: There is a lot of work to be done around here and a sum of 200 tria would surely ease our burden for some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Of course, the generous contributors are always included in our daily prayers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						200 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Despite the importance of the sum and the fact that the Order will probably never repay you, you make the donation with a smile, hoping for information.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Sharven Xant-Areth slightly bows his chest and explains, in a conversation tone.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Of course, it doesn't change a thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I won't say a word to you nor be the one entering into details.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It will not be necessary.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Laanx sent you here for his repentance, it is clear now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: His repentance?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Sharven Xant-Areth takes time to explain, slowly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: When Roniston came to me he was in a state of disarray, anger and despair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He said he had committed terrible acts for this group and Laanx had guided him back here to the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He came to repent, truly, sincerely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I told him to go to the wild, around the Eagle Head Fortress to face himself and let Laanx be the judge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: That is where you will find him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: There's a lot of area around there, so look around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tell him 'He has already decided, the time of repentance has come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You must speak.' He will understand...</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But be aware Huarwar, that his faith is a sensitive matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tread carefully...</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: May Laanx frighten the shadows from your path.</td>
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
							$npcName = 'Roniston Shane';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Roniston Shane</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Roniston looks to you as you approach.] [You notice his expression, but cannot tell if he is mad or illuminated.] Roniston, sorry to disturb you in such a moment. I am a member of the Order of the Keen Edge. [Option 2/2]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane nods quickly, hand on the hilt of his sword where you can see a ripped piece of cloth, hanging.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I heard about you but I cannot speak right now and you shouldn't have come here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I should be alone with Laanx and you shouldn't have come, you are ruining everything!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Roniston seems constantly on edge, about to burst with anger or madness his jaws pulled forward, the warmth of his faith feeding the fire.] I am extremely sorry, but I came from Hight-Priest Xant-Areth. I have a message for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane blinks, his hand slightly more relaxed on the hilt.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: And what would that be?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven asked me to tell you that 'He has already decided, the time of repentance has come. You must speak'.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane falls to his knees as heavily as if a string that was holding him up was cut.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He breaths loudly, his eyes fixed on the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: May He forgive me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: May Laanx extend His benevolent arm upon me, I was lost...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: He sat temptation on my road and I wasn't strong enough to pass it by, I was WEAK and unworthy of His greatness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I am a worm, sacrilege...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane digs through the grass with his bare hands, dumping handfuls of earth onto his head, spreading it everywhere on his face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I pledge guilty Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Take me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Take me now, slay me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I am not worth walking in your realm!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [With a renewed prudence, you try to direct Roniston towards more practical repentance.] Roniston, I am not a specialist but maybe Laanx provided you this test, to prove the strength of your will. You can repent by correcting your acts and trying to do better from now on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane looks at his sword and sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Entering the Order was a true achievement for me, it was my greatest achievement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Then there were the Platinum Warriors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: They offered me a position, I was lieutenant!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I had a whole host under my lead, 20 ready to do exactly what I commanded of them, to fight in Laanx's name, to shout His name before battle, to praise His fiery arm as we fought alongside Him, to sing His greatness as a battle is won!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I finally had found my place, this was the right way to love Him!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. But something went wrong... [You point a finger at the piece of flag hanging off his sword's hilt.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane follows your lead and he nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Gibbsite informed us that a group of cut-throats planned to attack caravans along the road to the Bronze doors fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Kra told us to go there and set an ambush to save the caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: So I went with a small part of my men.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: We installed the trap, but at the last minute everything went as I had feared...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: We received a message from Gibbsite ordering us to let the cut-throats do their attack and then to eliminate them and take their loot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: He demanded that we act quickly and avoid leaving witnesses of any kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Kra said it was to reward us for our service, said it was the only way he could pay us this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Unfortunately, it was not the first time it happened...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: When we stormed upon the cut-throats, one of them shouted: We had a contract, betrayers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: and that was what made me finally realise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I...I just ordered my men out and we ran away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh. And it's during that fight that you lost your sword's flag?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane nods a bit surprised.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Yes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: One of the cut-throats gave me a pretty serious hit, slicing one of my pockets, my flag, and a piece of my leg.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane shrugs his shoulders.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: All of Gibb's strategy is there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: When you are a Platinum Warrior, you are treated very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: You are fed, equipped from head to toe with the best stuff, you are paid and feel secure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: There is an atmosphere of solidarity there...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: But after some missions the real deal starts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: They ask you to do small things first and it seems like nothing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Like..take the purse on the chimney, they won't notice it, they would have given it to us anyway, we just saved their children...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Then each time more is asked starts to get vicious, even.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: At the end you are dependent on them, they know what you did, they own you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: At the end you have no choice but to do as asked.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane sighs, still knelt, he seems sincerely full of regret.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: By the time you realise what you are doing and it is too late!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You wait a second for Roniston to compose himself before asking.] Who is Gibbsite?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane looks up toward the Dome, resilient.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Kra is the leader of the Platinum Warriors, a sandstone Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I saw kra only once but I know that Gibbsite isn't kras real name, kra took this nick because of kras colour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Kra said it's easier for business, that people remember you better when you have a nick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I ignore Gibbsite's real name and that's another sign that I shouldn't have trusted kra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I have no idea where kra comes from, I simply had the impression that kra was military, the way everything is planned meticulously, based on strategy, etcetera...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. Thank you for the information, Roniston. Are you still a Platinum Warrior member?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: No, Laanx enlightened me, I quit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I did it on His orders, followed His wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: And so I am taking an oath now, in front of Laanx, with you as witness from the Order, Huarwar...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I swear to dedicate my life defending Laanx's principles and serving His will in all manners He deems worthy...</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I swear to be His ruthless paladin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane stands up, he seems taller suddenly as he raises his sword toward the Dome.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I give you my life Laanx, and with it my soul.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane shouts.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: May your enemies tremble!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: May your will be law!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: I swear!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Roniston Shane slices his left hand, his blood drips onto the floor, to seal the oath.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Be gone now Huarwar, I regret to have left the Order but my life is elsewhere, I understand it now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Laanx is my light, in Him lays my glory.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Be gone or pray with me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You choose to pray with Roniston and as you recite with him, Laanx's light fills you.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Lord, make me an instrument of your will!</td>
					</tr>
					<tr class="quest_npc">
						<td>Roniston: Oh Divine Master, grant that I may not so much seek to be great as to make you great; To be served as to serve you; To be loved as to love you; For it is in giving you that we receive; It is in trusting you that we are acceptable; And it is in following you that we are born to eternal light!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Maulbernaut attacks Huarwar Eruera with normal stance</td>
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
						<td>YOU: Hello Gurgus, I gathered very important information! [You summarise what you know.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A brief but loud noise, sounding like a stone was hit on another, emanates from kras chest as kra interrupts you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Gibbsite you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: The leader of the Platinum Warrior is Gibbsite?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I know kra!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It's all clear now, it all makes sense!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I should have thought of them from the beginning!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Them? What do you mean? Who are they? Who is kra?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I never knew kras real name, kra was always known as Gibbsite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Listen, a couple of years ago, after some poor political decisions leading to the authorities being understrength, a situation arose in the Barn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: So much so that a central part of the land was off-limits, invaded by of small groups of bandits and not even the guards would risk intervening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: When the Octarch finally took the lead to deal with it, he decided to solve the problem in a radical manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: He secretly founded The Militia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Supposedly to act as his hand to systematically eliminate the bandits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: He recruited some of the most merciless mercenaries, ex-criminals and veteran soldiers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Gibbsite was from one of the labyrinth outposts, I believe, and was known for kras strength and charisma.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Kra quickly ascended to The Militia's leadership!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: In the end, the solution worked all to well and when the situation returned to normal, the Octarch decided to disband the group that proved barely controllable.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah! So the Platinum Warriors would be the remnants of this Militia.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Exactly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: The Militia disbanded but not the fascination of its members for Gibbsite, their leader.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Some of them must have stayed together, Gibbsite planing their next move...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: To the Dome!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Where much tria might be gained if you are fearless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: This is a very serious problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I will write a report immediately.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Without further ado, Gurgus writes on a parchment that kra hands to you after some minutes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Take this to Gregori immediately, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Do not delay, the situation is worse then I thought.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gregori, I have an urgent report from Gurgus to hand you, if you have a minute.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald salutes you and nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Champion...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He grabs the report and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Laanx's mask, this is a serious affair!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up at you and states.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will say this only once Huarwar because I am always very parsimonious with compliments but you have been remarkable in this whole story.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Thanks to you, the Order has unveiled a terrible menace that could have stormed the entire Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you, Master...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald interrupts you with a raised hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Don't get too sentimental yet, it is not over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I know Gibbsite, I know kras strategies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Kra has no limit, no regrets, no feelings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And kras swordplay style is merciless.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald sights then unsheathes Tarr.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If I could I would confront kra myself, right now, man to Kran!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: But It would be stupid to engage the entire Order image that way...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald puts a hand on your shoulder.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are way out of Gibbsite's league...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: For now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: But we will work on it, you are the Klyros for the situation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Unsheathe your blade and get ready for yet another move, the Disengage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This one can save your life.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [After some intense exercising, you seem to have learned the move and ask.] What now Gregori, how to reach the Platinum Warriors and stop them?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald sheaths Tarr carefully as he answers you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I have a plan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Or what seems to me like one...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Gurgus states clearly that we don't have enough evidence to report the facts to the higher authorities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So I will keep the Order in alert, we will continue investigating because we have yet a small chance that time will bring us more witnesses like Roniston, so we will get more valuable testimonies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: As for you Champion, go train like a beast, give it all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The Arena is open for you at any time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Come back to me here, when you are ready.</td>
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
						<td>Rewards: 1 Level in Sword, 'Single Handed Sword' Combat Move 'Disengage', 20 Faction with Order of the Keen Edge.</td>
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
