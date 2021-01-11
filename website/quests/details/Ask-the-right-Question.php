<!doctype html>
<html>
<head>
	<title>Ask the right Question</title>

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
						<td>Ask the right Question</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/May-Their-Words-Sound.php">May Their Words Sound</a> quest.</td>
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
							$npcName = 'Jedonek Boloss';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jedonek Boloss</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, is there any way I can help you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ojaveda Guard flips his tail in boredom.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jedonek Bolossj straightens up as you speak to him.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Hello citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Remember to sheathe your weapon while in the Dsar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: May I help you find something or someone?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: These doors are huge and there are so many of them. Who carved these gates? and when? And why?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jedonek Bolossj is surprised and glares at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Did Vetasor Knemal send you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: He's always trying to get one up on me because I have the better post.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You shake your head.] No, I'm just wondering. Idle curiosity, I guess. Do you know about these carved gates, like who carved them?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jedonek Bolossj looks at the gates and shrugs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: I don't know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Funny, I see them every day, and I've never thought about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: They've been here forever as far as I know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A twinkle comes into his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: You know, this is my chance to get one up on Vetasor!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: That Enkidukai irks my tail, I tell you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: He thinks he knows everything, but I bet he doesn't know about these gates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: It would be worth it to me to find out more about them, so I can be the one who knows something for a change!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Would you be willing to find out everything you can about these gates?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: I'll give you a reward for your efforts, especially if Vetasor doesn't know!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I like puzzles and I don't like know-it-alls either! I'm game. I'll do it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jedonek Bolossj suggests.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: You could ask the cook in the mess hall, she's old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Maybe she knows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Just come back and tell me when you find out?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: It gets...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Boring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Just standing here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me who carved the gates in Ojaveda and when, and why?</td>
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
							$npcName = 'Seduna Secut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Seduna Secut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Seduna Secut is indeed old. She looks busy but kindly enough.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: I'm old but not that old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: My family has been here for generations, and the gates where here long before that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: I don't really know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: You're going to need an historian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: I think there is one near the library up in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: I don't know their names- you may have to ask around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Now, mealtime is upon us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Seduna: Unless you want to be gnawed on by a phalanx of hungry soldiers, I suggest you get going!</td>
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
							$npcName = 'Aliress Doomforge';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aliress Doomforge</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you the historian?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Aliress Doomforge looks up from her book</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Why, yes I am, Ylian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: May I help you with something?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am wondering about the carved gates in Ojaveda. Do you know who carved them and when and why?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Aliress Doomforge smiles with enthusiasm.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: The Ojaveda Gates!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: They do have amazing carving, don't they?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: This is what I know, but, like all our history, there is much more to know I am sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: The subject matter refers to an ancient legend, a poem really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: I know Gemma Kerryk Cor wrote about that once, because he asked me for suggested resources, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Do you know the legend?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I know it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Aliress Doomforge continues.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Then you know the story.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Now the other questions might be more difficult.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Who, when, and why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Good questions, all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Will you please let me know if you find out more about this artistic legacy of the Enkidukais?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: I would certainly make a contribution towards your research time, if you do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, of course I will tell you what I find out. Do you have a suggestion as to who I can ask to start with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: As to who made all those gates, that is a puzzle!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Aliress Doomforge casts her eyes suspiciously down the alleyway.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Well since it's carved, you might ask a sculptor or woodworker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aliress: Go to the sculptor, but be careful what you say to her, that's my recommendation.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know who carved the gates in Ojaveda?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow stops carving what looks to be a child's toy and takes a step closer to you, standing perhaps even a bit too close.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Those gates show fine workmanship on a monumental scale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: And there are so many of them!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Imagine the commission!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow thinks a moment, snapping her carving knife open and closed against her palm.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: It had to be a StoneHammer, don't you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Our clans have had the best skills for generations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Then again, those gates are quite tall...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow smiles at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Surely such information would be worth something to a person like you with such a well-endowed...</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: pouch?</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: One circle will get you some more information.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow holds out her hand expectantly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like more information. Here is a circle. Who carved the gates, when, and why are they carved with serpents and eagles, like the legend?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow smiles and lowers her eyelids a bit, as she moves her shoulders.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: One circle, one question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Remember to ask the right question, that's the heart of a puzzle isn't it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: [3 choices, I chose #3 ]</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: 1. Why are the gates of the Enkidukai city based on the Serpent and Eagle legend?</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: 2. Who carved the gates in Ojaveda?</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: 3. Why are there serpents and eagles on the gates in the Enkidukai city?  I thought those were the naems of the gobble tribes, aren't they?</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why are the gates of the Enkidukai city based on the Serpent and Eagle legend?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Yonda Axebow laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Praise the Gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: For that answer, go ask the animal trainer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: She's usually around here somewhere.</td>
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
							$npcName = 'Terea Lohdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Terea Lohdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you an animal trainer?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Terea Lohdren nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: That I am Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I specialize in winged creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Do you need my services?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: My rates are affordable.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Actually, I have a question. You know the Serpent and Eagle gates in Ojaveda? Do you know why a gobble legend is carved into the gates of an Enkidukai city?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Terea Lohdren is surprised and blinks a few times.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Funny, I have never thought of that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Well, let me see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I know the legend, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: But, why in Ojaveda?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: To tell you the truth, I've never seen a serpent in the wilds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: And eagles, eagles are hard to see in the wildlands, even though they are well known in our history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: For the Gods sake, one of the Bronze Door Fortresses is the Eagle Fortress, after all!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Terea Lohdren thinks some more.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: My great, great, great grandma trained eagles, so goes the story in my family, but I haven't seen many in the wildlands, ever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I have one eagle now, I inherited from my grandma, but he's so old I don't bring him out to hunt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Now Gramma said the story was told that all around Ojaveda there were once kettles of eagles- that's what she said the people called 'em.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Some of the snobs from the University call them convocations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I suppose it doesn't matter, because there isn't even one now that I have seen, much less a...convocation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Anyway, Gramma said the story is, long ago, they all just disappeared.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Disappeared long ago? But why?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Terea Lohdren shrugs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: That is a good question, why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I don't know much about history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I don't know much geography either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Who might know?...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She thinks to herself, then snaps her finger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: There's an old, old Lemur who works for the Octarch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I don't know what he does.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: He's the oldest person I've ever met!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Maybe he would know why, long ago, there were lots of eagles and now, well, there are hardly any to be found!</td>
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
							$npcName = 'Oropher Telemmaite [NOT a Lemur!]';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oropher Telemmaite [NOT a Lemur!]</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. I am trying to find out why there are serpents and eagles carved on the gates of Ojaveda. And why there aren't any eagles around now. And who carved the gates? And why in Ojaveda, when the legend is a gobble legend. Can you help me, sir?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite smiles a slow smile and pauses for a long while.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: It is encouraging to hear younger citizens ask questions about our lands and our histories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: May I ask you, Ylian, a question first, please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, ask away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher without any hint of attitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Why are you looking for these answers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, a Guard in Ojaveda who stands near the gates asked me to try to find out, so, well, I am!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite closes his eyes for a long minute.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He opens them and says.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: These stories and histories are important to us all, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Talk to a woodworker about who carved the gates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Talk to...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: someone who might be most knowledgeable about that history, of when the legend began.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: And the why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Why serpents and eagle gates in the Enkidukai Dsar?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Well, after you find those first answers, come back and ask me again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: If you are careful in your inquiry and...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite looks directly at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: And be honest with me, then perhaps the mystery will become clear.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. Are you a carpenter?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Njormik Carpenter chuckles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I am not only a carpenter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I am THE Carpenter!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Njormik Carpenter, of the famous Carpenter family.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: My ancestors have been making beautiful wooden furniture for generations!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: What heirloom can I make for your legacy, Ylian?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am glad you're friendly! I am trying to find out who carved the gates in Ojaveda. Do you know?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Njormik Carpenter puts down his hammer and sits on the stoop to his shop.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Well now, that's an old, old tale, that's all jumbled up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: But I will try to remember what my family told me anyway, if I can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Would you like a stool?</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I just made some, only 130 tria, for one of the best quality you'll find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: A great deal!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh alright. I'll buy a stool. I know how this works. [Give 130 tria.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Njormik Carpenter takes the coins and gives you a new stool.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I am sure you will come to love that seat!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: The truth is, I don't know much about who carved the Serpents and Eagles into the gates that are now hung in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I wish my family could claim to have carved them!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: They are magnificent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: The tale in my family, and this is from a long, long time ago, came by way of a gobble who learned to talk the Common tongue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: A gobble told my ancestor that the gobbles carved the gates and took them to Ojaveda when it was being built by the Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I have no idea why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Strange story, isn't it?</td>
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
							$npcName = 'Gorbiak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gorbiak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rahle. Do you know why there are Serpents and Eagles carved in the gates in Ojaveda?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Sad sad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Long time ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Bad time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Before...before...this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gorbiak motions to his place in the sewer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tries to stand up, but his legs won't hold him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tries again, and collapses again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: We carve!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Eagles!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Serpents!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: To remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Bad for friends to be bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Ask Dermorian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Ask him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Old, old Race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Ochtarch's guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Ask him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gorbiak: Too sad.</td>
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
							$npcName = 'Oropher Telemmaite';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oropher Telemmaite</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I've found some things out. Will you help me now please?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite smiles a slow smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: First tell me, do you know who carved the gates?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Gorbiak told me who carved them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite smiles and says.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: And did the good gobble tell you anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes he said to talk to an old person a Dermorian and Octarch guard, that would be you, right?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite laughs a resonant laugh that fills and echoes through the Hall.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Well I suppose that definition fits me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: So he told you the gobbles themselves carved the gates, didn't he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: That is true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: It was a long, long time ago.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, I know who carved the gates, the gobbles. I know when, kinda, just that it was a long, long time ago. And it was about the time the Lemurs came to the Dome, I guess. But I don't know why the gobbles carved the gates? And why Serpents and Eagles, I mean I know the gobble tribes call themselves Serpents and Eagles. But the carvings are of real serpents, like, snakes! And real eagles, that fly! I don't understand it. Can you clear this mystery up please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Yes my Ylian friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: I could tell you why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: But it might be better to hear the story from its source, perhaps?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: From...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Those...who were there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: From those who have long memories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: You know, Lorit, those Ojaveda Gates are as old as the hills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Perhaps you might ask the hills themselves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite winks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: You may have to be patient, and polite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Remember to take your bell.</td>
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
							$npcName = 'Ryger';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ryger</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me. Would you be able to tell me about the Serpents and the Eagles carved into the gates I Ojaveda?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger rocks back and forth.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally he says, in a sound that reverberates, filling the village.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Whoooooo.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Sent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Ylian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Asking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, mostly Oropher Telemmaite. Do you...?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghir holds up his arm to quiet you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Oropher.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: First Race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Sit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger begins talking, in slow cadence.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: We are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Always here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Will always.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Others came to Deghir valley-two kinds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Call each Serpent, or Eagle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Ones say Serpents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Magics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Digging.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Planting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fertile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Green.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Others say Eagles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Magics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Move air.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Bring cloud.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Channel rains.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scattered seeds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Food for all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Hot light.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: No Water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: No green.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: No food.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What happened to the food?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Blame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Not Fertile, Not Green!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Not water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Too hot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fighting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fighting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Who makes Food?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Blame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Noise.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger and the other Derghirs are rocking back and forth, almost singing, as if this story, this song, is known by them all.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger continues.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Some hide.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-At this, Ryger points to the hilltops surrounding the village.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The others can be heard chanting "Hide, Hide."-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Eagles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Quiet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Then attack!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scream!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fly down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Kill.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The other Derghirs hum a low rumbling sound.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger continues.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Serpents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Hide in rocks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Roots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Flyers come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Strike and Kill!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Strike and kill!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: More killing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: More blood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Red.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The chorus grows louder, like thunder coming near.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: War.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You wait and listen.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: We watch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scream.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Serpents kill from below.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Eagles kill from above.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Magic shakes ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Magic burns greens to black.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: River is Red.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scream.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Annihilate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Throw fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Land shakes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Land burns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: All on battlefield burn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Eagles scorched skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Serpents scarred skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: River is Fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Kill all Green.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Kill all valley.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Desert.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Skin forever scorched.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Pain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Down on knees.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Stand no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Magic gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fire steals language, burns tongues.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Now only sounds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Gobble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Gobble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Gobble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You listen as he continues further.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: The few still live.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: See devastation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Wailing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghirs' chanting turns to wailing in the distance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Mourn families.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Mourn homes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Mourn land.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scorched.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Dead.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-All the Derghirs stop their sounds simultaneously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Time Goes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger falls silent for a moment, then continues.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: New Furred ones arrive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Take land.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Build city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Cover battlefield.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Tribes emerge from Hills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Scorched.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Carve gates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Connect Serpent Eagle Tribes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Destroy each other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Forever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Not to forget.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Leave land to furred ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Homeless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Forever.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Ryger sighs and the hills echo.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: See it all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: First Race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Furred ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Greenskins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Blackskins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Red ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Earthskins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Skyskins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Fight-fight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Let them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: All will die.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Gods will die.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: We remain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Tell First Race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Oropher.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: We remain.</td>
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
							$npcName = 'Oropher Telemmaite';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oropher Telemmaite</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have spoken with Ryger. The story was long, but interesting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: The story is an interesting one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: I am pleased you have learned the story to pass to others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher: History is important.</td>
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
							$npcName = 'Jedonek Boloss';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jedonek Boloss</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Tell Jedonek what you found out.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: That is amazing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: So much more to it than I thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Here, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jedonek Bolossj gives you a small gift and some tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: I don't think I am going to tell Vetasor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: I'll find something, less important, to one up him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Thank you, Ylian.</td>
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
						<td>Rewards: 1 Door glyph, 5130 Tria, 13600 XP.</td>
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
