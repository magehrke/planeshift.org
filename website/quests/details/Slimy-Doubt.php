<!doctype html>
<html>
<head>
	<title>Slimy Doubt</title>

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
						<td>Slimy Doubt</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Platinum-Warriors.php">Platinum Warriors</a> quest.</td>
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
							$npcName = 'Henas Kenar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Henas Kenar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Henas Kenar? I am Huarwar, Initiate of the Order of the Keen Edge. Maybe Percival told you about me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Told me about you, Huarwar?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I am Champion of the order, why should I know about you?...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Never mind!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I am just playing around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Ahah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Don't mind me, sometimes patrolling the city is boring if nothing happens.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Not it's often the case in Ojaveda but...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Ok...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I am too talkative.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: So, I think I am supposed to give you a small test of your abilities concerning...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar grabs a thin paper from his pocket and reads.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Concerning the Side-Thrust and Lunge techniques.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Get ready to execute them, will you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Don't take too long.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar points toward your blade, nodding.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Show me that you are still practising what you have learned so far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Perform a Side-Thrust then take a few steps back and Lunge a few times in a row, please?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Be sure not to fall on the floor while doing it, THAT would be annoying.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You perform the moves as requested and Henas nods apparently satisfied.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Not bad, not bad Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Looks like you are ready to learn something new, hum, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I will now teach you the next move in the classic one-hand sword style, the Beat-Attack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: This...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar is interrupted by a Groffel that lands next to him, a message is tied to its neck.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah. I can wait if you like, come back to you later?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar is reading the message.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He does not answer immediately and you see him frowning and he begins to growl, his ears falling backwards.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Vaatjho!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Idiots...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: A message from Percival is it not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Again...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: They are all the same, and all about the same dung...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's the problem, if I may ask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Hum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I should have guessed Percival would not have briefed you before sending you to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Looks like a lot of the Order's members have resigned lately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: What a shame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: No one has a clue as to why those silly people quit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Worst of all, they are not just recruits deciding to go back to mindlessly training on a dummy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: There are highly ranked members.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar raises an eyebrow and looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Hum, looks like I found the right test for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: You have a new mission.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok... And it is?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar ignores your question.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Well, I will teach you the Beat-Attack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I am sure you will be in need of it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar unsheathes his sword and waits for you to be on guard.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Before you are able to start an offensive attack, he strongly beats your sword with his own, obliging you to block.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As soon as you try to regain balance and a guarding position, he takes a very quick step to the side, forms a spiral with his wrist and lunges, stopping just before piercing your chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: See it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: I keep your weapon busy just before doing my next move.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Which is fatal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: This Beat-Attack will never break through your defences unless you are stupid enough not to block me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: But, while your weapon is busy you are not going to hit me and it gives me a small time to perform the second attack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Got it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes... Like this? [You repeat the move.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Exactly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Remember, a Beat-Attack will open up a short opportunity for you to launch a fatal attack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Short...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Now the mission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Percival thinks Moren Findel has all the information you need, so go see him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: He has been a Champion of the Order for more than 10 years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: Have fun, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas: And if you meet any of those "tail-pullers", teach them a lesson.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Henas Kenar smirks, giving you a wink.</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Moren, hello. I am Initiate of the Keen Edge and come from Henas Kenar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Aye, Henas sent me a Groffel 'bout it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Thank ye for comin', we're in need of hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Though, sorry but I have to insist on a thin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Every member should take the Order as seriously as I do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: So, before givin' ye the information, I would like to check 'bout a thin' that ye SHOULD know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: The tenets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: What is the first tenet of our Order?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You recite.] Fight with justice, your sword will protect the weak and defend the just.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Aye!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Well done!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Live by it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Swear by it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: We're here for justice, we're here to serve and to help!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: By my faith and force, I live by it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Moren Findel smiles, proudly then clears his throat.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Now, listen well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Yer mission consists in gettin' hold of Thrynt Glass, one of yer co-initiates in the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: He was sent on an errand an' Percival hasn't heard from him for quite some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: As for the details...the mission was a result of a report by a merchant called Gofi Mitu, a Nolthrir sellin' slimy seaweed all over the Dome.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh yes! I met him not too long ago when training with Percival.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Oh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Right, that's good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Gofi regularly sends caravans to the Bronze Doors Fortress where they use the seaweed in soups or powders due to their high nourishin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: In the last caravan, he slipped in a very particular book that needed to reach the commander...</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: An' it never did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: We sent Thrynt Glass on the mission because he currently trains at the Fortress with the Shadow Squadron.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. And Thrynt didn't send any news?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Like I said, that's it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: So ye go an' see where he's at, eventually give him a hand to finish this mission, have it done an' classified.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I suppose ye can start by the storage manager of the fortress, Tarmeen Alecheech, he must have the last pieces of information.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Tarmeen. I am sent by the Order of the Keen Edge concerning the Nolthrir caravan.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: By the gods, I am glad to see that the Order is taking this affair seriously!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says, ironically.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Not only have we lost track of the caravan, convoying goods under MY watch, but we've also "lost" the person supposed to retrieve it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: That's interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: What is the Keen Edge planning to do about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tarmeen Alecheech's tone clearly implies that he expect a proper answer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please provide me with all the information you have and I will deal with it. I am not leaving the fortress until it is done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tarmeen Alecheech looks at you for a moment, then nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I sense determination in you and I like that, so here is what you need to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Yesterday, around this hour even, we received a message from the caravan leader informing us that they were near the outskirts of the fortress and would be arriving soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Excellent initiative because we have more or less their last known position.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Which is at the crossroad, just after the passageway off the Fortress territory.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Right, thank you. I will have a look. But first, can you tell me where I can find Thrynt Glass?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: As far as I know he returned with the Shadow Squadron soldiers and Zhaomal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Should be just by the water wheel back here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Please, Huarwar, concerning the caravan, simply provide us with a position and I will send a squadron to retrieve eventual goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Thanks.</td>
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
						<td>YOU: Hello, Thrynt? I am Huarwar, Initiate of the Keen Edge. I am here to help you finish the mission concerning Gofi Mitu's caravan, especially the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass frowns, seems embarrassed but determined in same time.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Oh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Well good luck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I am not doing this mission.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait, why? I am here to help. We have more chance to finish it properly together. What has happened?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: What happened, hum?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Speak of honour, of justice, of dedication!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Those don't feed families!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: For months I have been training to become part of the Shadow Squadron, for months I have been trying to work hard and impress so the squadron appreciates me and my work, trying to keep links with the nobles of Hydlaa so I can hope to become an Officer!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: For months I've also trained in the Order to gain reputation with a sword, but it doesn't feed a family!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass is clearly emotionally broken and on nerves.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I am doing all I can to support my family, to make it so my children have gifts for their birthday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Do you think the Order pays us for what we do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Those missions that we do alone, where we risk our life more than once?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Do you see the colour of one golden circle?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: So I am not doing it, no I am not doing it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Calm down Thrynt, I understand...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: If you care that much, you go find the book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: The contract is yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: It's not worth it for what the Order is rewarding us with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass hesitates then adds some information about the mission.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Tarmeen mentioned several cut-throat attacks on the road so I suppose the reason for the disappearance of the caravan is simply due to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: There are some abandoned houses and I wouldn't be surprised if they were used as a hideout.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>--INFORMATION- You need to find the correct building and then right click on the floor to "search", you will see an on screen message when you find the right spot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have searched, but I can't find anything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Thrynt Glass sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Move down out of the fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Some distance from the base of the cliffs are a series of abandoned houses, those are the ones you need to search.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I'm certainly not going to show you myself, so just go and look harder...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Go to the abondened houses in front of the fortress. They are located in a 30 degree angle on the right side, 20 seconds walk from the exit of the fortress. If you are there, click on the ground behind the door of the right house.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tarmeen, the goods have been retrieved. The caravan was attacked by cut-throats on the road. [You hand over the seaweed bag and the book.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Cut-throats again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: By Laanx this is enough!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I will immediately send a squadron to clean this area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I have lingered far too long without taking action.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Tarmeen Alecheech checks the bag.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: All seems to be here and the bag is yet sealed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I guess the thieves had no use for the seaweed...we have been very lucky, here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ylian is now looking at the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Hum, yes, all seems to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Right, Huarwar, I thank you for dealing with this affair diligently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I won't keep a grudge against the Order, rather praise its honour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I will talk directly to your superiors about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: As for you, please have this for your efficiency, I personally always reward it!</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Moren, I am back. The case is closed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Ah, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Good to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Tell me what happened then, is Thrynt all right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well in fact, Thrynt did find out what happened to the goods and their location. I just had to go and retrieve them. [Option 1/2]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Teamwork then, as a matter of fact...</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: The important thing is that the requested service has been completed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: As a reward, I officially name ye Disciple of the Order of the Keen Edge!</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Congratulations!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you Moren! I would like to entrust to the attention of the Order items I found alongside the caravan goods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Hum?</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Which exactly, Disciple?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You hand Moren the piece of Laanx church flag and the instructions letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Moren Findel stays silent, looking at the items then, says on a deaf tone.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: This flag seems to follow us..</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Rather hauntin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: It looks like the flag of Ylian Roniston Shane.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: You've already heard of him if I am right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: In Pathajiti.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: And this letter...</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Hum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I will go and see Percival, thank ye Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Yer keen eyes and sharp mind serve the Order well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Keep trainin' yer techniques for now, stay in shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: When ye are ready to make a demonstration, eyes closed, meet Gurgus Dahnik in Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Kra is one of the high managers of the Order.</td>
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
						<td>Rewards: 1 Level in Sword, 'Single Handed Sword' Combat Move 'Beat-attack', 25 Faction with Order of the Keen Edge, 2000 Tria.</td>
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
