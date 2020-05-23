<!doctype html>
<html>
<head>
	<title>A Measure of Protection</title>

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
						<td>A Measure of Protection</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 2 Leather Boots.</td>
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
							$npcName = 'Kethzun Guthazik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kethzun Guthazik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look quite busy. Do you need a hand with anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: Busy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: You could say that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: sets his hammer down on the ground, leaving the handle leaning against the anvil. He stretches, his arms and wings spread wide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: Too much time at the anvil, lately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: You want to help?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: I'm getting more and more orders for armour lately, and it's getting impossible to keep up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: Are you looking for some work making armour?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can help make some armour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: You'll need to provide your own raw materials, but I'll pay you for your work and give you some tips on armour making.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds fair to me. What precisely do you need me to make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: Well, I mostly work with steel but I've got a number of orders for leather armour too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik: If you can make two pairs of leather boots it would leave me free to work on this chain mail.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the leather boots that you asked for. Two pairs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Kethzun Guthazik turns to you, setting his hammer down again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik You're done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik Good to hear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the boots from you and gives them a quick look before setting them down on a nearby table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik Nice work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik Here are some tria for your work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik Make sure to check back later, as I'll likely need more work done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun Guthazik Everyone needs at least one pair of good leather boots.</td>
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
						<td>Rewards: 1 Level in Armor Making, 2000 Tria, 8000 XP.</td>
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
