<!doctype html>
<html>
<head>
	<title>Search for Old Pottery</title>

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
						<td>Search for Old Pottery</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Search-for-the-Old-Coin.php">Search for the Old Coin</a> quest.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have another job for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I used the coin you gave me and something happened, but it's still not enough for me to understand the message Laanx is trying to tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Probably it's just my lack of experience, but I am learning fast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I think I need a bigger object, still old, but bigger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Like an old piece of pottery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I think you might be able to find one from some old shop, or some place that might use pottery to store liquids.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Can you find one for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why ever not? It sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Please try to find an old vase or something similar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: The more ancient, the better.</td>
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
						<td>YOU: Do you have some old pottery I could buy? Something like an old vase?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Hmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: An old vase?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Well, I have some junk here below my counter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Some of it might even be worth something!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: But I'm not knowledgeable enough to know what is and what isn't, nor do I particularly care…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: So I'll exchange one piece for a small amount of money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Give me, say, ten tria and it's yours.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your 10 tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: So you really do want that old pottery?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: As you wish, here it is.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, I found this piece of old pottery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Ah yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: This one looks quite good for the well I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I'm pretty sure it will work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Wait here for a few minutes please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menlil walks away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a few minutes, he returns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Yes, it worked!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: I've finally got some kind of message from the well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Unfortunately, it's quite hard to understand, and I need you to help me again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Please go to Jayose and ask him about this phrase: 'Herta Feer Garad'.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to know the translation of the phrase 'Herta Feer Garad'.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It's surely some magical language.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I remember reading about a similar one in one of these books…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I will search for it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose moves into the library and starts searching the shelves. After a few minutes, he returns holding a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I've found it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It's related to Laanx mythology.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This book says that the phrase 'Herta Feer Garad' was written on a few monuments in the legendary Kadaikos and means: 'light forms shadow'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You can give those words to the person that asked for the translation.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jayose told me that phrase means 'light forms shadow'.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Ahh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: That's the translation..</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: How foolish of me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: How could I have missed that part?</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: It's been a long time since I studied the holy books of Laanx and it seems that I've forgotten some quite important pieces!</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Anyway, thanks for your help, here is your reward.</td>
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
						<td>Rewards: 1 Hand glyph, 15 Faction with Iron Hand, 2107 Tria, 10800 XP.</td>
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
