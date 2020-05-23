<!doctype html>
<html>
<head>
	<title>Hygrnn's Other Bag</title>

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
						<td>Hygrnn's Other Bag</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Hygrnn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hygrnn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any work for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: You want some work?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Oh, sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I lost my other bag, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: It contains some trade goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Oh, I can never keep a handle on my bags.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Do you think you can help me recover it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I'd do it myself but I can't leave my goods unattended.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I know I dropped it somewhere close to the winch, so it can't have gone far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I believe I dropped it two days ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Ask around inside the winch building…about a missing bag.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: See if anyone's found one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Thanks again!</td>
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
							$npcName = 'Hakik Gheshd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hakik Gheshd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you seen Hygrnn's bag?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: I'm in charge of the lost items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: How long ago did you say this bag was lost?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: For about two days now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: Ah, yes, now I remember.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hakik opens a barrel and produces a leather bag, handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: One bag of mercantile goods, found two days ago by the Winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: You're welcome.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Hybrnn the bag, “Is this it?”</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: Certainly looks like the bag.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hygrnn checks the bag and begins counting on his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: Yes, it's all here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: Thank you kindly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hakik: Here's some Tria for your efforts.</td>
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
						<td>Rewards: 1 Gas glyph, 5130 Tria, 13600 XP.</td>
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
