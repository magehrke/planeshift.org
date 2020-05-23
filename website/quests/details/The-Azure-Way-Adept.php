<!doctype html>
<html>
<head>
	<title>The Azure Way Adept</title>

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
						<td>The Azure Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-an-Azure-Way-Adept.php">Becoming an Azure Way Adept</a> quest, Rank 50 Azure Way, 2 Apprentice's Azure Way Wands.</td>
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
						<td>YOU: Two wands to proof I am worthy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I take it a congratulation is in order, well done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir scribbles something on a report while keeping an eye on the winch gears. He hands you back one wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Return that wand to your fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I will have your new one ready later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I have updated the report but you will need to deliver it to Archmaster Menita.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I am not sure where she might be, but she spends most her time studying the minds of underbelly of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: So find a group of the worst citizens of Yliakum, possibly even banished, and you will likely find her studying them.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your updated report, Mistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Yes, as expected.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita sets the report aside without taking her eyes from you, or staring through you. Her blue eyes are like ice in her expressionless face. She finally takes her eyes away from you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Go to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Give him this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita holds a Way Amulet out without looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You may then return to Axomir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Tell him you may pass.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told to hand you this amulet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Jewelry?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do I look like a lady…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: or a dwarf?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do not have any need of such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: However, since you are offering it to me, I can not refuse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes a familiar box from under his counter and drops your wand in, then shakes it from side to side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I seem to have a few items in here already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Both wands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Imagine that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do wonder where they keep coming from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I suppose I can offer them to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you don't want either of them, take this pie.</td>
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
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You have, so Menita has approved you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir removes a wand from a bag and hands it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Here is your new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Be sure you have returned the other Azure Way wand to the person who gave it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Also, do not forget you will need a sufficient level of Azure Way and knowledge of the Humanoid and Mind before returning and handing me your wand as a sign of being ready to continue.</td>
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
						<td>Rewards: 1 Apprentice's Red Way Staff, 1 Apprentice's Crystal Way Staff[OR], 1 Pie[OR], 1 Adept's Azure Way Staff, 15 Faction with Azure Order, 2107 Tria, 10800 XP.</td>
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
