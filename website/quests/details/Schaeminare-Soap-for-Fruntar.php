<!doctype html>
<html>
<head>
	<title>Schaeminare Soap for Fruntar</title>

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
						<td>Schaeminare Soap for Fruntar</td>
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
							$npcName = 'Fruntar Durek';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fruntar Durek</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, do you have any loose jobs I can do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Well tabei, a brawl always seems to happen here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: As you can imagine, when the drinks go flying I get splashed by them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: They get in my fur and that is not good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I have found a fine soap, it is called schaeminare, for cleaning my fur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: But I am nearly out of it and haven't had a chance to get more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Maybe you'd be willing to pick some up for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Certainly, where do I get this soap.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Oh, you are so kind!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: When the carter comes in from Hydlaa with some of the drinks, he brings it with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I believe he gets it from a hairdresser lady there…</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: good luck, Madam, and thank you!</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for Schaeminare soap.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Schaeminare soap?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Got a bottle of it here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: It will be one hundred tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Not all that much demand for it up here , but there are enough people wanting it that I can keep some in stock and bring in a reasonable profit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: counts off the tria and hands it over.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: There we are, enjoy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman gives you a blue-green glass bottle of soap.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Fruntar the soap.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Ah, tabei, the schaeminare!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fruntar smiles broadly and looks at the bottle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Such a fine soap…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: thank you for helping me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Please accept these coins in return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fruntar gives you fifty-four hexa and thirty-two octa.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I know it is not much but I cannot spare very many these days.</td>
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
