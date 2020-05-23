<!doctype html>
<html>
<head>
	<title>Taulim Wilaal Pulls a Prank</title>

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
						<td>Taulim Wilaal Pulls a Prank</td>
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
							$npcName = 'Taulim Wilaal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taulim Wilaal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Anything interesting for me to do today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Well no, not re…</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Although…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taulim snickers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Well Sir, there might be one small favour you could do for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: If you are willing, that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, lets hear it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Ah.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taulim snickers again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Splendid!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: You see, Sir, the life of a guard tends to be rather boring at times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: This is a relatively safe part of the city, and not much is happening today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I'd so like a little laugh, and just happen to have a wonderful idea to make it so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: You still interested in helping me out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Do you know the guard at the East Gates?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: His name is Moren.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: He pulled a prank on me the other day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I'd like to get even with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: But for that..</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I'll need a fake sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Gregori uses wooden swords to train his gladiators.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Could you tell him about the prank and pick one up for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can do that for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Great, bring me a wooden sword then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I shall wait for you here.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We need a wooden sword for a prank.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Hehehe, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well that shouldn't be too much of a fuss.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I've got plenty of those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: My gladiators break them constantly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: For 50 tria I'll give you one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shows an empty hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: There you go, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Enjoy.</td>
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
							$npcName = 'Taulim Wilaal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taulim Wilaal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your wooden sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Splendid!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Imagine the look on Moren's face when I pretend to strike him with a fake sword out of the blue!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I bet he'll be turning all colours of the crystal!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taulim snickers again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Here's a reward for the trouble: A bit for the sword, and a bit for the fun I'll have.</td>
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
						<td>Rewards: 1000 Tria, 8000 XP.</td>
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
