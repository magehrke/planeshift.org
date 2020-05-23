<!doctype html>
<html>
<head>
	<title>Confirm Daily Schedule</title>

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
						<td>Confirm Daily Schedule</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Aerayau-Strongwill's-Epic-Journey.php">Aerayau Strongwill's Epic Journey</a> quest.</td>
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
						<td>YOU: Do you have any tasks for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It seems, Sir, you are just in time, as I am in need of a runner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It is very important that I manage my command post at all times; however, it seems that there are a few discrepancies in the schedule for today's shipments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I am in need of someone to confirm these times with the Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I shall pay you for your work: do you think that you could be of help to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would be happy to do this for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Oh, that would be a great help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I have written a few notes on this schedule.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir pulls a piece of parchment out of his pocket, reads it quickly, and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Please go and give this directly to Vigesimi Allavium.</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Axomir asked me to deliver this since he is on duty and cannot leave his post.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Very dependable, that Axomir, with a good eye for detail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: He always catches even the slightest mistake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: He is perfect for the job of Captain of the Movers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal looks at the schedule in his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: We have two shipments: one scheduled to go out and one scheduled to come in at the exact same time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: That is, of course, quite impossible to manage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: It looks as though he has a few changes marked as possibilities, and all of them are agreeable to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal takes out some ink and begins to jot down a few notes. He then takes out a piece of sealing wax. Datal drips a few dots of wax on the paper, and approves the new schedule by sealing it with his signet ring.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: There, now kindly return this to Axomir and have him send word to Nalvys of the change in schedule.</td>
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
						<td>YOU: Here is the revised schedule. Datal was quite impressed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Good, good, now things will run smoothly, as long as we stay on time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I must go, much to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Thank you kindly for this…</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: ah, but wait!</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Did Datal relay the changes to the Nalvys winch station or must I send word?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You need to inform the Nalvys winch station right away about the changes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I shall do that right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Thank you, kind Klyros, for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Here are a few coins for your troubles.</td>
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
						<td>Rewards: 7310 Tria, 15000 XP.</td>
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
