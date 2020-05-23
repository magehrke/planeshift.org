<!doctype html>
<html>
<head>
	<title>No Time for the Dark</title>

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
						<td>No Time for the Dark</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Dark-Way-Adept.php">Becoming a Dark Way Adept</a> quest, Rank 40 Dark Way, 1 Apprentice's Dark Way Robe.</td>
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
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This Way Robe is a proof of my dedication to the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven lifts a hand, while he continues to watch the Dark Crystal. His pupils narrow down becoming keen points. After this Oriven turns to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: What do you want?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven lowers his gaze to your cloak and growls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Oh, that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I can train you no more then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Go to Deelor Blackeye or Rulayne Ogrin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Understood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Deelor will train you until you became worthy enough to be Rulayne's apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Deelor applied to the Dark Way and is a former student of the Dark Circle, he has much to teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: But you'll need to do something more before going to Rulayne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: First, finish the training with Deelor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Second, you must show your worthiness to Rulayne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Bring him two Dark Way Wands, yours and one more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take the last one from your fellow students to prove that your peers respect you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Rulayne will give it back after your meeting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven directs his attention to an open book on an old table. Then he takes a last look to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Third, you need an Illness glyph to be trained by Rulayne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: This one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven hands you a glyph. It's cold.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: That is all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Leave.</td>
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
						<td>Rewards: 1 Negate glyph.</td>
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
