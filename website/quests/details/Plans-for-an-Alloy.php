<!doctype html>
<html>
<head>
	<title>Plans for an Alloy</title>

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
						<td>Plans for an Alloy</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 6 Copper Ores, 4 Tin Ores, Winch Access.</td>
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
							$npcName = 'Shiu Hri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Shiu Hri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, you seem deep in thought, anything I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I have come to import metals for the lower levels, and am looking for the base metals of an alloy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now that, I can help you with.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I appreciate it greatly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: First, I understand that if you exit Hydlaa by the gate that my friend Finara Plund is guarding, nearby you will find some stalactites that have fallen point-down in the ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: They are in fact rich in copper ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I require six pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: This number is very important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Return to me with them and I'll give you the next requirement.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Six copper ore as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: You, Sir, are a wonder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Now, just before Dsar Akkaio lies a river.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: The spirits of nature have arranged it just so a metal ore is washed toward and collects around the rocks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: This metal is known as tin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I implore you, dig around the large rock by this river and find me four pieces of this tin ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Four.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I will be waiting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Shiu the four tin ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Marvellous!</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Thank you, Sir, thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: This alloy is invaluable to the Nolthrir people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: If you know…tell me the name of this alloy, please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: bronze</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Bronze.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: You must be an expert at metallurgy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Very well, I prefer trading with people who know their materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: In exchange for this bronze I present these armored pants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: I traded for these earlier, but have decided an underwater people would have little use for them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Consider it a fair trade for the ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Shiu: Farewell.</td>
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
						<td>Rewards: 1 Lava glyph, 7310 Tria, 15000 XP.</td>
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
