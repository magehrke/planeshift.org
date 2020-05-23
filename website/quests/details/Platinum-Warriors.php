<!doctype html>
<html>
<head>
	<title>Platinum Warriors</title>

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
						<td>Platinum Warriors</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Keen-Conflict-and-Sword-Play.php">Keen Conflict and Sword-Play</a> quest.</td>
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
							$npcName = 'Percival Hawthorne';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Percival Hawthorne</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Percival, I am Huarwar...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne seems startled as you mention your name but it quickly turns to a large smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Ah, Huarwar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Your name was passed to me as the latest Recruit of the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Pleased to meet you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Or maybe we've already met before, if so, sorry, I see so many people each day I often don't remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Please don't take offence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: In fact, I am glad you are here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne begins to look somewhat preoccupied.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Huarwar...you wouldn't mind if I throw you into the Order's missions a little earlier then planned, would you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No...But what's happened, you seem worried. Gregori told me to come to you once I felt I was skilled enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Yes, of course, and you did well to come to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I will gladly work with you, I love teaching and sharing knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I dedicate almost all my free time to the Order, helping the organisation, practising.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: But something has happened and I'm stuck on duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: As much as I love my guard job, I feel very powerless at the moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne explains.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: The original goal of the Order was to create a centre where sword masters could meet and share their knowledge in a friendly way and in a secure space.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: With time, the Order's goals developed and as our numbers grew, it turned towards noble causes, helping those who could not help themselves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh really? I didn't know that. I like it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I am glad you do!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Hear me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says, sort of relieved.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: An hour ago, a young Dermorian came to find me in a hurry, from a farming hamlet along the Irifon river.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: He told me that a group of serpent gobbles appeared on their land, probably pushed by hunger, risking conflict with humans.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: They showed an aggressive behaviour and their number has been constantly growing according to his testimony.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne seems greatly embarrassed not to be able to go help and tightens the guard of his sabre in his hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Not that it makes it more important, but this land belongs to a member of the Order, an important wine merchant residing in The Winch, here in Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, that's why the Dermorian came to find you then. I am on it. Where should I go?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: The Dermorian is called Tebengrin Nilaiun and lives in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: He told me he would go back to the hamlet directly but I can't quite give you the exact location because, well, I'm not really familiar with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I advise you to ask around in Ojaveda, in the tavern for example.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: They must have heard something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Hurry, Huarwar!</td>
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
						<td>YOU: Hello Brado. Have you seen a Dermorian in a hurry today, in the past hour maybe? He is called Tebengrin Nilaiun.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Brado chuckles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Good day, tabei!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: What a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: A Dermorian in a hurry?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It's not exactly a rare sight, even in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Also to tell you the truth, I've spent the past two hours sleeping.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I don't know what's happened to me lately, but I've been coughing and sneezing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It leaves me so tired...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Brado scratches his belly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ask Tilavi or Fruntar, hopefully they were around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: And I say hopefully because they are paid to do so!</td>
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
							$npcName = 'Tilavi Aurenta';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tilavi Aurenta</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tilavi, have you seen a Dermorian hurrying around in the last hour, talking about gobbles, or attacks?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tilavi Aurenta's ears peek.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Gobbles?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Attack?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Where?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: By the gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I will tell Brado that I'm going home immediately!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, no wait! There are no attacks here. Please, have you seen Tebengrin Nilaiun today?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tilavi Aurenta sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Terebe daag!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: If Brado paid me for half a day, I would work half a day and not the whole day!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I got here to duty only ten minutes ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Therefore, I am sorry but I cannot help you.</td>
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
							$npcName = 'Fruntar Durek';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fruntar Durek</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fruntar, sorry to disturb but have you seen Tebengrin today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Oh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fruntar Durek explains slowly, which seems to be his usual way to speak.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Funny that you ask me that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: An hour ago, Tebengrin rushed into the tavern while we were full of customers and began shouting about an attack on Pathajiti.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Demanding that we needed to help, before disappearing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fruntar Durek frowns.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Well, I wasn't too happy about it to be honest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: It left a horrible atmosphere in the tavern I had to deal with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Then again, ten minutes ago, I saw him passing the city gates quietly, as if nothing had happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: No, really, you should tell him that those kind of jokes are never welcomed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So he is back in Ojaveda? Where does he live? I need to speak to him urgently.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Oh, that nice of you to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: But don't be too mad at him, he seemed a bit embarrassed and he is young, maybe he was seeking some attention.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: He did passed the gates to enter the city, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: He lives in Dsar Kore, just past Archmage Ferryd's house.</td>
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
							$npcName = 'Tebengrin Nilaiun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tebengrin Nilaiun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tebengrin? I am Huarwar, Recruit of the Order of the Keen Edge. Percival sent me to help the hamlet attacked by gobbles, do you have any news?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: By Xiosia, I talked to Percival hours ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Well never mind though, everything is settled now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says while smiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How is all settled, can you tell me more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Sure!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: I returned to Pathajiti in a hurry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: In a small area of the hamlet there was a pile of serpent gobbles corpses, burning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Next to it, the farmers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: They were all celebrating, having a drink over the victory, happy to be safe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: They welcomed me back and offered me a glass telling me all about the event.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: What happened was a group of warriors passed by and as they heard the commotion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: They rushed to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Quickly, they faced the gobbles and in a blink of an eye, the problem was dealt with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Tanan, one of the farmers, said she never saw warriors killing beasts with such ease, being so well organised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: They seemed used to fighting in group.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tebengrin Nilaiun laughs, amused.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: She was very impressed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: I even teased her about it, told her that she felt in love!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Were they mercenaries then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Oh no, I don't think so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: The old Berny told me that they were warriors, walking the lands to help the needy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: He said they had a very good equipment, all platinum steel from head to toes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Even he saw one with a flag tied to his sword, something like the serpent of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Good thing I say!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: They didn't even ask for money or anything from the farmers but accepted some wine bottles as thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: I don't know who they are but sounds good to me if people start to do that kind of thing!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, indeed. Thank you Tebengrin. I will report to Percival now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Yes, all right...</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin: Next time, I might just contact the Platinum Warriors directly!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says, half joking.-</td>
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
							$npcName = 'Percival Hawthorne';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Percival Hawthorne</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Percival, I have news from the hamlet. The problem is solved.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Talad bless you, Huarwar!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says, sincerely grateful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: You weren't hurt at least?</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: And Tebengrin and the farmers?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne is so eager to know that he genuinely ignores the merchant waiting for his approval to enter by The Winch gate.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I didn't need to go to Pathajiti. I met Tebengrin in Ojaveda. [You summarise what you heard.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Instead of being impressed, Percival frowns, pinching his chin in between his thumb and his folded index finger, a thoughtful expression on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Curious...</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: You said there were a few with platinum steel armour and weapons?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes. One of the farmers said they were clearly experienced at fighting together.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne nods, perplexed.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: It's not just any warrior who can afford this type of equipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Furthermore, if Pathajiti is the hamlet I am thinking about, it is a tricky area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: The only way to reach the village, surrounded by thorny vines, is by the main road.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: There is no reason to go there unless...</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Your goal is to go there.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Might they have been able to hear the screams nearby? Tebengrin said they approached because they heard the commotion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne continues frowning, muttering to himself.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Hum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I might just go there on my day off, to make sure...</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: As a guard...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shrugs his shoulders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Oh well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I am certainly glad to hear that everyone is safe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Furthermore Huarwar, I don't care if you've mastered the side slash or not!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I am promoting you to Initiate of the Order of the Keen Edge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: You went into action without hesitation and you have been so helpful that I cannot be anything but extremely grateful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: You are what the Order is in need of and I am very proud to call you my friend!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you, Percival!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne smiles warmly, tapping your shoulder in a friendly way.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Now Initiate, let's spare a bit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I am more then happy to teach you another very useful and classic one-handed sword move, the Lunge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne forms a windmill shape with his right wrist and sabre, moving as if weightless.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: This move is a must know for every sword user.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: You will be using it all the time, mostly as a base for some more complex moves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Right...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne moves as he talks.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: So, you extend the front leg like this, then in a controlled surge, propel your body forward with the back leg.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The guard reproduces the move several times before gesturing you to do the same.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Yes, like this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Don't hesitate to be powerful, your back leg must throw you forward, your blade firmly pointing ahead.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You both are still practising when you hear someone clearing their throat.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Hum?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A male Nolthrir stands there, keeping his rivnak's rein in one hand and some paper in the other.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Sir Mitu!</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: How are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Eheh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Sorry, I was having sparing with a friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Initiate Huarwar, this is Sir Gofi Mitu, one of the most famous seaweed sellers in the Winch.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Nolthrir salutes, amused and presents his paper to Percival who now dedicates all his attention to the merchant but says.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: My friend, it is now the rush hour, I will need to let you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Practice the lunge, practice and practice again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: When you are ready to know more, you could go and have a talk with Henas Kenar, one of my fellow guards in Ojaveda, end of the third block of Dsar Kore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you again Percival, I will do so.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Thank you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says before returning to the Nolthrir merchant.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After some seconds, Percival's head turns slowly toward you, showing a tense full expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Huarwar, did you tell me that one of the platinum warriors had a sword with a small flag tied to the pommel?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes. Tebengrin said it displayed the serpent, symbol of Laanx Church... Why?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Percival Hawthorne frowns and sighs darkly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Because he is Roniston Shane, a member of the Order...</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: And he wasn't supposed to be there, especially without talking to me.</td>
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
						<td>Rewards: 1 Level in Sword, 'Single Handed Sword' Combat Move 'Lunge'.</td>
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
