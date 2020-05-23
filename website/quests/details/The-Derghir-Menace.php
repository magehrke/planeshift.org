<!doctype html>
<html>
<head>
	<title>The Derghir Menace</title>

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
						<td>The Derghir Menace</td>
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
							$npcName = 'Aldaaren Phostle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aldaaren Phostle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: The end is near!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Salutations, I am looking for some work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: My friend, destruction is close!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: And yet, there are those misled by false truths!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Woe upon them, for we need to prepare against the coming destruction!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You, my friend, need to see the truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: That fool Jardet Forsill has spread lies about the Derghir that may destroy all of us!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Go and read all you can find about the Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Read my book for the truth, and read the foul lies of Jardet, so you are prepared!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I wonder whether that fool thinks they have feelings, those abominations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Bring me the answer, my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You will, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I knew you would, my friend.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Go to Jayose's library and read the book about Derghir in the bookcase right of Durok (your left when facing kra).</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Aldaaren Phostle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aldaaren Phostle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Derghir do have feelings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Woe upon him, the liar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: These creatures made of rock feel nothing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: They only desire our deaths!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You saw the truth, so are the Derghir a menace in your eyes?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes they are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aldaaren nods in agreement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: We shall prepare ourselves against the coming doom, my friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Destruction is near!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: We have more to do, so come back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No they're not.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aldaaren shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: The lies have corrupted your mind!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You might yet be saved, however.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: When you are ready to accept the truth, come back and we will prepare.</td>
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
						<td>Rewards: 8000 XP.</td>
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
