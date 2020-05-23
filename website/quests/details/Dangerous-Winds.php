<!doctype html>
<html>
<head>
	<title>Dangerous Winds</title>

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
						<td>Dangerous Winds</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dark-Circle-Hunt.php">Dark Circle Hunt</a> quest.</td>
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
							$npcName = 'Raithen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raithen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: reporting for duty, sir!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Your services for my guards has been exemplary, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: It has been decided that you are the one who will handle a mission of extreme urgency.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Many think the Sunshine and Shadow squadron are at odds, and it is true to an extent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: But we are united in the cause of protection of Yliakum, and when situations are dire, we are quite capable of working together seemlessly under the direction of the Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: If you are to take this mission, report to Aerayau Strongwill and ask about your orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Do you have the courage to face this mission?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sir, yes sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Maybe you will surprise me yet, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: May Laanx guide you.</td>
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
						<td>YOU: Requesting orders, sir!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I have something I need done very urgently, but I cannot let just anyone take this task for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Word about your deeds here in the Eagle has reached me, and Raithen and I have decided you are the one to handle this mission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: This mission is very important to all of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I cannot give you all the details here, as we believe this area has been compromised by magical means.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: If you believe you can handle this task, go to Hydlaa and speak with Amidison Stronghand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Are you prepared to face this trial?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Prepared and ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Excellent, you are a brave soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Go to Amidison tell her I sent you to ask her about Nodramok.</td>
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
						<td>YOU: Aerayau sent me regarding Nodramok.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Finally, Raithen and Aerayau have found someone for the task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: We cannot use someone who is known for this mission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: If you accept, you will be given access to the winch region to conduct your investigation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: We need to know what Nodramok plans for the coming eclipse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: This mission is vital to the security of the winch and all of the Dome level of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: There is much personal risk involved, however.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Will you aid your government in this fashion?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I shall, what are my orders.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: You are to report to Datal Allavium, the Vigesimi of the Hydlaa winch region and inter-level affairs, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Here is a note for him.</td>
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
						<td>Rewards: Winch access, 17800 XP.</td>
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
