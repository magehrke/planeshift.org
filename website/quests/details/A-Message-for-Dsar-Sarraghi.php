<!doctype html>
<html>
<head>
	<title>A Message for Dsar Sarraghi</title>

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
						<td>A Message for Dsar Sarraghi</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Murago-Puntjal's-Quick-Favour.php">Murago Puntjal's Quick Favour</a> quest, 1 Red Liquor.</td>
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
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings Murago, how's the book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I remember you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: You're the Nolthrir who got me another copy of my book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: I have another task for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got some free time, how can I help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: That's the spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Kindly deliver this message to the Shrine of Talad in Dsar Sarraghi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: There's a liaison in the Hydlaa Plaza by the name of Tarela Girshon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: She can help you if you require it.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Tarela, Murago said you would be able to deliver a message to Dsar Sarraghi.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: May I see the message?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela holds out a paw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Tarela the message.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Dsar Sarraghi is currently quarantined.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I can't possibly get through.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Unless…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I have a lockbox containing an Azure Way glyph that will grant me the gift of stealth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I may be able to enter the Dsar undetected with this glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I'm holding the box at the Mikana mercantile company.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Tell Jirosh that Talera sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I'm taking a big risk at contracting whatever sickness is inside the dsar, but Murago Puntjal pays well so I will do it.</td>
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
						<td>YOU: Greetings Jirosh, I was sent by Tarela to pick up her lockbox.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I was wondering when she would claim her mysterious box.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Allow me to collect it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh bends down and searches through various boxes. He stands back up with a worry on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It's gone!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I accidentally sent it out on a caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: My records indicate they were placed on a caravan belonging to one Taemian Yangnk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Find him, and get that lockbox back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I'm really sorry about this.</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, you got a lockbox mistakenly in your inventory, it belongs to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Oh right, this box that didn't appear on the Mikana company invoice and that I didn't ask for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I couldn't figure out how to open it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: An adventurer named Vaieund offered me a key that might open it in exchange for getting him some book?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Bah, who has time for that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Anyway, I can't ever give away anything for free, so how about something to wet my beard?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Some red liquor oughta do just fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: How's about a mugful?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your red liquor, now give me my box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian guzzles the contents of the mug, then wipes his mouth with his sleeve, beard still dripping.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Ahhh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: That'll make yer waterwheel churn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Here's the lockbox.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Do with it what you will.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your lockbox.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: What took you so long?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela produces a key and opens the lockbox. You can't see inside it, but her face is bathed in a light blue glow. She closes the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes, this will do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Rest assured the Shrine of Talad will receive this message.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Tell Murago that he can pay me tomorrow or speak to him about paying me tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Go quickly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I will need to make haste myself.</td>
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
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You can pay Tarela tomorrow for the delivery.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: That means it is as good as sent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Such a trustworthy emissary, she is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: While I await their response, take this and go with Talad.</td>
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
						<td>Rewards: 10 Faction with Conclave of the Glyphs, 2107 Tria, 10800 XP.</td>
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
