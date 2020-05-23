<!doctype html>
<html>
<head>
	<title>Seeking Guidance I</title>

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
						<td>Seeking Guidance I</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Kaiman, how is business going?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Good day, YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Business blooms when you are as skilled as I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: I make a point of never missing an opportunity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Speaking of opportunities my friend, I've come across a rather exciting one recently, interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure! What's the news around town?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: The news?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Well I am not one to be too interested in gossip..</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: A merchant of such high regard as myself would not drop so low.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: But...</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: I heard our Vigesimi has a big project...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Really? What project?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: I believe it's about her collection.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Vigesimi Stronghand likes fine beverages, beautiful meals and above all she has a renowned collection of all sorts of weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: As one of the most important merchants in Hydlaa I've had the privilege of seeing it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: A wonderful sight...</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Anyway, if you are tempted by any of my items feel free to trade, hum?</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Vigesimi Stronghand. I heard you have a big project you might need help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Good day, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I see that word has spread faster in Hydlaa than fire in a forest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Well, you are right I have a project in mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I cannot and would not ask guards or administrative staff to do this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I really need this project to succeed, however long it takes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand pauses before starting her explanation but seems relaxed as she speaks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You see, I am very fond of spectacular weapons and shields and I've gathered quite a collection over the years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: But, as extensive as my collection is, it will never be complete without the items I am now looking for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh? And what are those items?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Vigesimi answers cryptically, looking past you into the distance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Nfar and zpar, the duo to guide...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Amidison Stronghand looks back at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am searching for "Defiance" and "Confidence", a shield and a sword said to have belonged to the first Ynnwn to be born, Lerivia Smare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: It is a famous legend among the Ynnwn, a myth concerning the foundation of Ynnwn culture.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Lerivia is said to have unified the Ynnwn under her guidance due to her use of "Defiance" and "Confidence"...</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Hard to explain, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The fact remains that Lerivia participated actively in the creation of the Ynnwn's social identity.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. But if they are so famous should they not have been kept somewhere safe?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Amidison Stronghand shakes her head slightly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The weapons disappeared after Lerivia's death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: An investigation must be started looking into where they might be, and I could use your help to drive it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I should have initiated such an investigation years ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am now sure that nothing would fit better in my collection than those weapons, especially now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Vigesimi turns to face you and proposes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Say, YOU, we could make a sort of contract you and I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Is there something that you would like to put your hands on?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Something that you really need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, as you mentioned magic weapons, I would be interested in learning how to make enchanted weapons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: That is a nice craft.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: What about this: you help me find "Defiance" and "Confidence" and I will obtain a manual from the best weapons crafters I know, and I know a master or two in that domain!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like a fair deal, Vigesimi. But where should I start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Our business is then settled.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I already know where to start enquiring about the manual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: As for you, the only reasonable course I can think of is to see Gregori Stevald.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The man surly knows much about weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Good luck in your research, YOU, and please, don't give up.</td>
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
						<td>YOU: Hello Gregori. Do you have a minute?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Not even a second.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: But I hate outstanding questions so go on.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You tell Gregori about the Vigesimi's project.] I am now searching for those weapons and the Vigesimi suggested I see you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gregori Stevald shakes his head and crosses his arms across his chest.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: So she now decided to go for it, hum?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Another outstanding question for you, [NPC Internal] do you know what those items really are?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: What they represent?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Only what the Vigesimi told me, that they belonged to the first Ynnwn ever to...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gregori Stevald interrupts you, shaking his head more firmly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Not their history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: What they represent, their symbolic value.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Why they are a myth!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Strategy, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: It's exactly like in combat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Strategy is fundamental.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Combat is never just hitting your opponent, it's choosing when, where and how you do so!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gregori Stevald orders, exactly like a trainer would order you to make ten push-ups.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori Stevald: Go see Talisa Tamariss.</td>
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
							$npcName = 'Talisa Tamariss';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Talisa Tamariss</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Talisa, I am working for Vigesimi Stronghand. I am searching for "Defiance" and "Confidence". Gregori suggested I come and ask you about their symbolic value.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: "Defiance" and "Confidence"?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Oh my, why would she...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Talisa Tamariss swallows, strangely worried.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Well YOU, I am not an historian, nor an archaeologist...</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: But I know, we all know what they are, "the link".</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: It is their symbolic value, they are our people's "link".</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right... So do you know where I can find them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Where can you find them?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Talisa Tamariss appears shocked by your request as if it was absurd.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She gives you an odd side-look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Uh...</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Well Lerivia was killed not far from Hydlaa, on the battlefield of Caihon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: It's what the battle field is known as nowadays.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Maybe they were in her possession during the battle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Talisa Tamariss shrugs several times, looking left.. then right.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: If I recall well, Charisa Malod is from that region.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa Tamariss: Best way would be to ask her.</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Charisa. I am searching for weapons on behalf of Vigesimi Stronghand. "Defiance" and "Confidence" to be precise. Talisa told me you are from the area where the battle of Caihon occurred?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Charisa Malod opens her wide round eyes as she listens to your request.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She answers but seems to hold herself as if scared that a secret might escape.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Hum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Uh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Oh but I am not from there, YOU, my husband is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: A village was built near the location of the battlefield and was called Caihon, the name of the instigator of the catastrophe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Charisa Malod sighs loudly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: As you know my husband is away, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: But when he is around, he likes to go fishing with his friend Sinto Gheshd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: They are good friends because they both come from Caihon or near to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Sinto might be able to give you more details.</td>
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
							$npcName = 'Sinto Gheshd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sinto Gheshd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey Sinto. Charisa told me you were from Caihon?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: But only spent time there when I was young.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Do you know the village?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, but I am searching for information about it, linked to "Defiance" and "Confidence". I heard that Lerivia Smare was killed near there and since I am searching for the weapons...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sinto Gheshd gives you an intrigued look and then gives a loud sigh of relief as if he just realized something.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Aaah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Research..</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Eheh, sorry, I thought you really were searching for them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do you mean "really was searching for them"? I am! What can you tell me of Lerivia's death? Do you know if she had the items with her?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sinto Gheshd scratches his head, apparently puzzled.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks at you for some time in silence then shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: There is a small monument at the spot Lerivia is believed to have died.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: But if you are 'searching' for "Defiance" and "Confidence" it won't help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: They are a myth, didn't you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: They are said to have been ceremonial weapons, so not used in battle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: It was not their purpose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: Their purpose was unity...unity and guidance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: That's why you are here, I believe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hum? I wonder how I could find them. Where would Lerivia have left them? Who could help me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sighs and mumbles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: I wonder!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: You don't seem to understand...</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: If you want information about Lerivia, you should ask Fholen Medraa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: He's an old miner and lives in East Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: There is no one more knowledgable about jade and Lerivia Smare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto Gheshd: He even sculpted a bust of her from a large piece of jade at one point.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey Fholen. [You repeat again who you are working for and the goal of your research.] Sinto told me you know much about Lerivia Smare.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: "Defiance" and "Confidence"!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: The legendary Ynnwn myths!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: The link...</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Interesting thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Why would the Vigesimi seek the guidance in this time of peace?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Hum...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Fholen Medraa ponders, then looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: What do you wish to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: As far as I've heard, "Defiance" and "Confidence" were ceremonial weapons. I wonder where Lerivia could have left them before the battle of Caihon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Fholen Medraa smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He seems to struggle to understand something, frowning slightly then adds.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Yes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: "Defiance" is a shield and "Confidence" is a sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Legend says that they are made of the finest metal and adorned with precious stones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Some even say they are made of crystal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Fholen Medraa smiles, almost doubtful.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Long after the battle, in the Ynnwn city of Listarindel, a temple was built to hold them...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah! So the weapons are in Listarindel! I should go there to find them and...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Fholen Medraa Medraa interrupts you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: The temple was destroyed by fire in around 510 AY.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smirks, looking at your disappointed face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Continue on your course YOU, you must continue, this fact brings no doubts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: The head priest of the temple, a Diaboli called Zat Shekalal was from Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: His family is one of the few that decided not to go and live in the Death Realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: They moved to Ojaveda, not so long ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Dsar Kore, I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: That's where I met his great grand son, Hurenes.</td>
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
							$npcName = 'Hurenes Shekalal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hurenes Shekalal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Hurenes, sorry to disturb you but I am searching for "Defiance" and "Confidence" for Vigesimi Stronghand. My enquiries have brought me to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Oh no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Not that again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: All these questions start to be annoying!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hurenes Shekalal grimaces in anger.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: I am a Diaboli, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: All these airs and graces about these weapons fly way above my head and I am glad of it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: By Dakkru, when will this end!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sorry Hurenes but what are you talking about?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hurenes Shekalal waves an hand above his head, seemingly fed up.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: I know it's not your fault.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: I shouldn't have shouted at you, I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: But this story drives me crazy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: They are a myth, you get it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: And I can swear that if I had them, I would have thrown them to just about anybody.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: They are a legend you build a civilization on.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You decide to push on the conversation.] What can you tell me about the temple built in Listarindel, where your family member was head priest?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hurenes Shekalal calms down, shrugging his shoulders.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Family stories say it was a small temple built in the heart of the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: It was burned down by accident along with a couple of houses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Unfortunately for Dakkru.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some humour seems to make its was back into Hurenes and he chuckles slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: It was seen as a bad sign by the Ynnwn population and my parents were thrown out of the city not long after the event.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: To tell you that it's not exactly a good memory for my family is an understatement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: It's more of a curse!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: The weapons were never held there though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: It was a simple place where people could come and ask for advice or any kind of help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh?! Where are they then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: You might as well as me for directions to Kadaikos?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: No one knows, it's how legends are!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: If I remember right, the texts say Lerivia entrusted her weapons to a friend's daughter before the battle that ended her life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: It was in Listarindel.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The texts? What texts?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Tisd!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hurenes Shekalal then hears Seduna Seckut calling for him and he smiles brightly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: I need to go!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hurenes Shekalal: Go ask my sister Surenes, she must be around here.</td>
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
							$npcName = 'Surenes Shekalal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Surenes Shekalal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Surenes . Hurenes told me to come and ask you about Tisd.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Surenes Shekalal doesn't seems surprised by such a random question and she explains.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: "Tisd" is a word from Ignf, the Diaboli language as used by Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: It's the name of a mythical text.</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: In fact, it's all based upon Lerivia Smare's life, the rise of the Ynnwn, "Defiance" and "Confidence".</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: Tisd is widely known!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for the information. Say, Surenes, I know that it is said Lerivia entrusted the weapons to her friend's daughter. Do you know who that was?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: It was a Diaboli, Perg Zrar and his daughter Mzapt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: They died to rejoin Dakkru's embrace, like many Diaboli did.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As you were about to ask a new question, a groffel arrives with a message for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: Looks like a wealthy groffel to me, probably the Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Surenes Shekalal: For more information, I would ask a Dakkruist if I were you, perhaps the one by the burial well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You open the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It reads: "To YOU - I have something for you. Please, come to me as soon as possible. Regards, Vigesimi Amidison Stronghand."-</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Vigesimi. I received your message.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Ah, YOU, welcome back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am sorry I must confess my impatience.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: How has your research been going?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am afraid my investigation wasn't very successful. I've learned quite a lot since I started. But I didn't find the weapons. [You give the Vigesimi a summary of the information you gathered.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I know it is long and hard work looking into these things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Thank you for your efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand grabs a finely paper-backed book and hands it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am very glad to tell you that I was able to gather the finest technical manual, concerning weapon enchanting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am sure you will appreciate it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you, Vigesimi. That's wonderful. But am I done? I was next to see a Dakkruist...probably Rulayne.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Make no mistake, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The outcome of your investigation has already been most fruitful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Please continue until you find them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: As for me, I have yet more manuals to get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You can't have an enchanted weapon without an enchanted shield, don't you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I understand you need to be skilled enough to make a small spiked shield to be able to enchant a shield.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Make sure you can do this before continuing your investigation.</td>
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
						<td>Rewards: 1 Enchanting Weapons, 12200 XP.</td>
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
