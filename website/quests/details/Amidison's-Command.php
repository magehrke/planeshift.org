<!doctype html>
<html>
<head>
	<title>Amidison's Command</title>

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
						<td>Amidison's Command</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Davikel's-Request.php">Davikel's Request</a> quest.</td>
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
						<td>YOU: May I be of assistance, Vigesimi?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I have an extremely urgent letter that requires fast transmission to the commander of the Sunshine Squadron Aerayau Strongwill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: He usually can be found in or near the fortress at the Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Under normal circumstances I would not ask someone like you to do this, but my messenger has not shown up for some time now and this matter is urgent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Would you do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd be glad to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Here is the letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: It is magically sealed and will be unreadable by anyone but those who have the corresponding seal, so don't get any.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Bring this letter to Commander Strongwill without further delay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Here is also some cash in advance.</td>
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
							$npcName = 'Aerayau Strongwill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aerayau Strongwill</a>";
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
						<td>Aerayau: A letter from Vigesimi Amidison Stronghand?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Thank you delivering it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I may have a task for you if you can wait a moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Absolutely, yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aerayau opens the letter and begins to read it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: By the Gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: This is bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Why now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Can't she wait a little while longer?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I have a bad feeling about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Could you please return a letter to Amidison for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll deliver it as soon as you're done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aerayau quickly writes a letter and seals it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Your government commends you, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: This letter is sealed and unreadable to anyone not sanctioned by the Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Please return it hastily to Amidison Stronghand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Here is some pay; Amidison will have more for you.</td>
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
						<td>YOU: The Vigesimi has sent his reply.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Ah, a response from Aerayau Strongwill so soon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison unseals the letter and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Oh. That won't please Mrs. Prestis.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: You may go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Thanks again; your fine service is noted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: You are an effective courier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Here is your pay.</td>
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
						<td>Rewards: 20 Faction with Guard, 5391 Tria, 12200 XP.</td>
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
