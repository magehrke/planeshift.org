<!doctype html>
<html>
<head>
	<title>Learning Shield Making</title>

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
						<td>Learning Shield Making</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Trasok's-Ancient-sword.php">Trasok's Ancient sword</a> quest, 2 Steel Stocks, 2 Rock Picks.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you teach me how to make shields?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Shield making is a valuable trade skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Are you interested in learning?</td>
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
						<td>Trasok: Good, I can teach you how to make some simple shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Everything starts with raw materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Find and bring me two pieces of steel stock and I will teach you more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your steel stocks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It is important that you find a good source of metal stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Once you start making shields, you will probably not want to spend your time mining or refining ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The first step is to acquire the proper skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: To make a shield you need both blacksmith and shield making skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You will also need a special book that I can give you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Before teaching you any more, I need to know if you are serious about being a shield smith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: If so, find for me two rock picks and bring them here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'll be waiting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Two rock picks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Get some ingots and heat them up in the forge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You use different quantities to make different items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Then hammer the shield into shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Combine it with a handle and a shield core, and you are done making a very basic shield.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You will then need a riveter to put the pieces together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Don't forget to experiment, and be sure to learn the needed skills from me before trying to make a shield.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good luck.</td>
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
						<td>Rewards: 1 Catalog of Shields, 25 Faction with Smith Association, 5130 Tria, 13600 XP.</td>
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
