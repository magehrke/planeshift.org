<!doctype html>
<html>
<head>
	<title>Keiana's Supplies</title>

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
						<td>Keiana's Supplies</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 1  Maybe at least 10 in Herbal.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: : The herbal preps can change with skill</td>
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
							$npcName = 'Keiana Xoreloran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Keiana Xoreloran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Keiana, anything I could help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran greets you, placing her hand to her chest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: Hello, Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>-She reaches a hand out to touch the side of the hospital.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: This hospital is busier than it might seem and I could do with some help preparing some items for them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: It isn't just healing potions and salves which are used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: Often teas and juices can help people recover just as much.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd be happy to help, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: I have a long list somewhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran digs about in her pockets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: Ah, here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: I need one threestem juice, one wyn tea, a gobo oil and a gobo tea, a devils claw tea, an eyebright tea and two yarrow teas.</td>
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
							$npcName = 'Keiana Xoreloran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Keiana Xoreloran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, your items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran: Such a good job getting all these for me, these are for you in thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Keiana Xoreloran hands you some tria.</td>
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
						<td>Rewards: 1 Level in +1 herbal.</td>
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
