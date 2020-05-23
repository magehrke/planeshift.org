<!doctype html>
<html>
<head>
	<title>Lost Winch Shipment</title>

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
						<td>Lost Winch Shipment</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings. May I be of assistance to you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks down into the loading bay, back at his schedule and then again down to the loading bay.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: What am I to do, if that shipment does not arrive in time, our schedule will be thrown off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It is due to be shipped mid morning tomorrow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir begins muttering to himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I could move the afternoon shipment from later on tomorrow into that spot, and perhaps switch these two.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Ah, but it is no use.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks up to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I do have something for you to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You have proved to me that you can be trusted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I need to find the missing shipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I must know what happened to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I have never lost a shipment yet and today is not going to be the day to change that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Will you help me track down the shipment?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Consider it done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks at his schedule.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It seems to be a shipment from the Mikana Trading Company.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Please quickly seek out Phanejor Mikana: ask him if the shipment has arrived yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: He knows of its importance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Go quickly; we must not hold up the winch.</td>
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
							$npcName = 'Phanejor Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Phanejor Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It seems that a shipment from your company has gone missing. Have you heard anything of its whereabouts?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: The shipment was sent by my brother Jirosh a bit ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: It should have already been delivered to the winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I am rather worried about it…</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: ah, but perhaps it is just a miscommunication.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Perhaps Jirosh needed to receive a shipment before he could fill this order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Perhaps he had to send it out late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: There are so many possibilities, would you go and please check to see if the shipment has been sent?</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: If he does not know which shipment it is you are speaking of, as we do much business here, tell him it is to take care of pests.</td>
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
						<td>YOU: One of your shipments did not arrive on time. Do you know where it is?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What is this about a shipment, do you realize how many shipments come in here on a daily basis?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Could you be a bit more specific, or else i dont know how much help i shall be.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your brother told me the shipment contained items to remove pests.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh chuckles loudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Yes, I know the one you speak of, I sent that on time to Phanejor for express shipment through the winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I can't imagine what could have befallen the caravan on its way to Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The roads though, are riddled with rogues, I can not begin to imagine what would happen if they came across this shipment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh begins to chuckle again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Check with Edrich in Hydlaa, he was the one who carried this shipment in one of his regularly scheduled caravans.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Which was lucky, as no one else would deliver the shipment due to its potential risks.</td>
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
							$npcName = 'Edrich Sultov';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Edrich Sultov</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you heard anything about one of your caravans being lost?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Yes, I just received word that one of my caravans has gone missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It was lucky, however, as the only shipment that was on it was one from the Mikana Trading Company that wasn't worth much in the way of value.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It seems rogues attacked and stole the shipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Boy would I have loved to have seen their faces when they saw what they got!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Alas, I need to let Jirosh know what happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Here is a written statement of the events as told to me by my sources, I believe this will be worth having to refill that order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I have a caravan coming through tomorrow, which by my calculations will still get the shipment to the winch in time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Edrich chuckles and begins muttering to himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: To see the looks on their faces, ah to have been there in person…</td>
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
						<td>YOU: I have a document for you from Edrich Sultov.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh opens the statement and stares in disbelief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This is no joke.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It was truly stolen?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh begins to read, as he reads his eyes become wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: But how could this happen, and why, of all the caravans to rob, would they rob this one?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh continues to read, and begins to laugh, a little at first but continues until his eyes begin to water, he is laughing so hard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh manages to say a few words.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Begging your pardon, but it all seems rather funny to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would you read the note to me, please? I have become very curious.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Ah dear YOU, I would love to share this news with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I hope you find it as entertaining as I do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh begins to read directly from the statement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: 'I had snuck off to relieve myself in a clump of shrubs when the rogues attacked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I watched from afar as the rogues descended on the caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Knowing as I did what cargo sat in those crates, I had no desire to go and save it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The rogues tied the pack animals and tethered them to the trees, they then bound the remainder of those traveling with the caravan together, before unloading the crates.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh stifles a chuckle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: 'They emptied the crates into sacks; it was rather dark and they did not stop to read the labels, or I am rather sure they would have run screaming.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Well, one of the rogues thought he should open one to see what it was they had come in possession of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: That rogue took one whiff and dropped the bottle rather quickly as the stench quickly wafted through the open air, and it seemed in a matter of minutes that every ulbernaut on the dome level was traveling post haste to find its mate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The rogues scurried to leave and in the process broke a few more bottles: they were covered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't think that they will be trying anything anytime soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Unfortunately, I did not go back to retrieve the wagon, nor did I go back to salvage what was left of the shipment as I got our crew and left before the ulbernauts came.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh stops reading and looks at you with eyes full of tears.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm not getting the joke, it seems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You see, the shipment is bound for Poricet on the Far Ground, for they have been infested with a certain insect that is repelled only by ulbernaut pheromones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It is a repellent only made here on the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Very potent stuff, not something you want to fool around with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you spill just one drop, every ulbernaut within twenty kilometers will be at your door wanting to have children with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Now think, if a drop can do that, what would spilling multiple bottles do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please tell Axomir that the shipment will arrive tomorrow morning with time to spare for its trip to the winch.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The shipment should arrive tomorrow in time to make its scheduled move.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: That is cutting it rather close.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I will have to prepare and make sure that everyone is aware that this will be a close one, and that all hands will need to be available for this move.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I want nothing to happen to that shipment in my care.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Oh heavens, imagine the problems that could occur if it spilled.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks worried.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Tomorrow will be a rather busy day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Thank you for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I am sure to need your help again in the future.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: There is always work to be done here at the winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I just hope that the shipment arrives on time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir takes out a small sack and meticulously counts and places some coin into your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Thank you for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Ah, and one more thing: as a Mover, the Azure way is rather important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: If you wish to become more involved with the moving of the winch, you must train your azure way skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: This glyph should help you on your way.</td>
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
						<td>Rewards: 1 Bow glyph, 3000 Tria.</td>
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
