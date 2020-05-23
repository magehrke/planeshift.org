<!doctype html>
<html>
<head>
	<title>Kilas' Test of Education</title>

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
						<td>Kilas' Test of Education</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Kilas-wants-his-Abacus-Back.php">Kilas wants his Abacus Back</a> quest.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Ah, my new Nolthrir friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I've asked around about you, and they tell me your name is YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I'd like to see if you're as good at gaining knowledge as I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Think you're up to it?</td>
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
						<td>Kilas: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Then let the test of education commence!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: The answers to my questions can be found in books, by examining items, or talking to townsfolk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Question the first: What species sits down as a gesture of friendship?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Come back to me when you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: The answer should be the next thing you say to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: biorlitrosan</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: That's the correct answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Question the second: How many Vigesimi are there in total?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 20 vigesimi</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: There are 20 Vigesimi on each level. Did you want to know about one in particular?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 160</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Good job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: That's correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Question the third: Which race is considered the first to use burial wells?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: lemur</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Impressive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: That's correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Question the fourth: The Kada-El Tavern has very soft beds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: With what are they stuffed?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: sponge</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Very well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You're almost there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: This is your final question: Which town on the first level is closest to the Cups of Laanx?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: sarpendil</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: That's correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: You are truly an expert information gatherer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Take this - I've been working on it for some time, and you may find it of interest.</td>
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
						<td>Rewards: 1 Hydlaa Housing Layout, 10 Faction with Science Association, 9400 XP.</td>
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
