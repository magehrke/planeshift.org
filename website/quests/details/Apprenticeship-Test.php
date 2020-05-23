<!doctype html>
<html>
<head>
	<title>Apprenticeship Test</title>

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
						<td>Apprenticeship Test</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Orchibaly-Versus-the-Smelly-Jelly.php">Orchibaly Versus the Smelly Jelly</a> quest, Rank 25 Cooking.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Rank 25 in Cooking is uncertain.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to train under you as your cooking apprentice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks you up and down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Hmmmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you want to be my apprentice, I'm going to have to test your skills a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Are you up for it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I am ready for the test, what must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you have come to me, I assume you already have some cooking and baking skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I take it you have worked with the Gerpleferds and perhaps Jomed in Hydlaa?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: So I'll offer you a set of choices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: First, would you rather make something from the Meats and Stews recipe book or The Pastry Chef Book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll make something from Meats and Stews.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Alright, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I know the recipes by heart so I'll give you a choice between Hearty Irifon Rice, Savory Kikiri Stew, or a Meat And Egg Omelette.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'm not going to walk you through it, you'll need to figure out the recipe on your own if you've never made those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That is all part of the test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That and, of course, how it tastes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia gives you a sheepish grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Make me one of those and make do your best!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Make whatever dish you want (e.g. Meat And Egg Omelette) and give it to Reffitia.</td>
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
						<td>Rewards: Nothing.</td>
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
