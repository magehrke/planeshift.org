<!doctype html>
<html>
<head>
	<title>Making a Metal Stock</title>

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
						<td>Making a Metal Stock</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Metal-Working.php">Learning Metal Working</a> quest.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do you make metal stocks?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you are interested in learning more about metal working, I can teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Are you interested?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It will cost you one hundred tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd be willing to pay that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It seems that you're starting to like this job!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Give me one hundred tria and I will teach you a bit more about metal working.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm sorry to charge you money for this, but you are becoming a potential competitor!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						100 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your one hundred tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You have to know that an ingot is just one of many materials needed to make real items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: To be more specific, you need a metal stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: They are made of either 5 or 10 molten pieces depending on the different metals you use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You've made a few ingots?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: No problems!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Once you've made an ingot, you can turn it back to molten metal just by using the furnace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Do you want to hear more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I would like to hear more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: To make metal stock, you have to place 10 molten pieces into the same stock casting slot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: So if you place one molten piece, you get an ingot; if you place ten, you get a stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you find that too complicated, I think you'll just have to learn a different trade, my friend!</td>
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
						<td>Rewards: 15 Faction with Smith Association, 2107 Tria, 10800 XP.</td>
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
