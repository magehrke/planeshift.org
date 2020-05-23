<!doctype html>
<html>
<head>
	<title>Harnquist's Raw Materials</title>

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
						<td>Harnquist's Raw Materials</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Crafting.php">Introduction to Crafting</a> quest, 5 Iron Ore.</td>
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
						<td>YOU: I am interested in learning more about blacksmithing, but I guess I need the basics first!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Yes, you are right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Everything starts with miners, without them my work would be impossible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The first element is to gain the proper raw materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: And, by the way, I need some to complete a commissioned project.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You can retrieve the lumps for me, and I can point you to someone to get started into this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ok?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I can go and get them for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The most common raw materials are coal, iron, tin, amongst others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Those can be found in large quantities here in the Dome, but you need to learn mining first, or you can just buy them from someone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I suggest you speak with Fholen Medraa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You can find him in the east of Hydlaa if you want to learn the basics about mining.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: In any case, come back to me with five lumps of iron ore, I need those urgently.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
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
						5 Iron Ore</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your lumps of iron ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, thanks very much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Finally I can proceed with this commissioned project.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Please accept this as recompense for your time and effort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Oh, and following up on previous conversation, if you haven't already done so, around the Magic Shop is a good place to mine coal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: In fact, Levrus has been known to ask passers by for some.</td>
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
						<td>Rewards: 1297 Tria, 9400 XP.</td>
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
