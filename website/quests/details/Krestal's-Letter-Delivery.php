<!doctype html>
<html>
<head>
	<title>Krestal's Letter Delivery</title>

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
						<td>Krestal's Letter Delivery</td>
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
							$npcName = 'Krestal Dhusho';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krestal Dhusho</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I'm looking for some work to do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Ah, yes, I just might have something for you to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: You see, I need to deliver some letters, but I am too busy looking after the pterosaur customers today to make the trips myself...</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Anyway, I would ask kind Miss Tarela to carry them, but she is busy today with other deliveries.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Are you interested in lending a hand with this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: I can give you some travel tokens to compensate you for making the deliveries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'll help you out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: The first recipient is Brado.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Your best bet is to find him in his tavern in Dsar Akkaio.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: The other is the merchant Mr Fromaad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: I see him around town talking to Harnquist sometimes, or waiting up in Kada-El's for news from one of his mining teams.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: If you don't find him there though, he'll probably be on that ledge near the Laanx temple, thinking up some 'new syndicate' to join, most likely.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Krestal Dhusho rolls his eyes slightly and digs out two letters and hands them over to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Well, here are the letters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Just give them to their recipients and come back here for your payment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Farewell and safe travelling to you.</td>
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
						<td>YOU: I have a letter for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I've been expecting this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: This looks to be an exciting competition!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Brado smiles and waves the letter gently.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Thank you for the mail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Here, have a hexa for your trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Make sure to tell the sender that I received the letter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Brado pushes the hexa across the counter.</td>
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
							$npcName = 'Ervin Fromaad';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ervin Fromaad</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Ervin Fromaad turns to look at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Ah, hello.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Good day to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the letter and turns it in his hands reading the address.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Ah yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: I recognise the writing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Thank you very much for delivering this to me.</td>
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
							$npcName = 'Krestal Dhusho';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krestal Dhusho</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've delivered all the letters.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Ah, good work, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Let me give you your coin and you may be on your way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Krestal Dhusho takes some coin from a pouch and drops them into your hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: And seeing as you've done all that travelling for me, you can have these tokens so the next few pterosaur trips you can make for free.</td>
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
						<td>Rewards: 1 Drinking Gourd of Brado's Special, 4 Travel Token, 1010 Tria, 8000 XP.</td>
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
