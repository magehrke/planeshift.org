<!doctype html>
<html>
<head>
	<title>What's up with the Carpets</title>

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
						<td>What's up with the Carpets</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Repair-Mulgik's-Bracers.php">Repair Mulgik's Bracers</a> quest.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail, I am looking for some adventure, a quest of sorts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I'm a merchant my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I sell things, I don't have exciting jobs for adventure-seekers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: But since you've mentioned it, yes, there is something you can do for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I have to fill a big order, a rich customer from Hydlaa wants new carpets, all in blue color.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: The weaver was supposed to deliver the carpets yesterday, but he did not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: You can find him and tell him I really need the carpets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: He should be in his tent in the warehouse area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Are you interested in this simple errand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll take it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Let me know when you find something out.</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brintec wants the carpets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Oh, Brintec wants them, does he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: And when he sent you here, did he at least give you the dye I need to finish the order?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: So many blue carpets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I used all the blue dye I had and it still wasn't enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Brintec promised that he'd send me another bottle, but it seems that he's forgotten all about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Tell him I need the blue dye first before I can finish these carpets.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bjorid needs the blue dye to complete the order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Blue dye?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I thought I sent some…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Brintec Dev-Onni notices a bottle of blue dye sitting next to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Ah, I see now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I completely forgot to send it to him!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: It seems this errand, so dull at first, is becoming more interesting, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: But let's not lose any more precious time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Please make haste and give him this bottle so he can send me the carpets as soon as possible!</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [YOU give Bjorid the dye.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Now that's more like it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Yes, now I can continue my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Give this scroll to Brintec: it contains payment and delivery date information.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the delivery date information.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Aha, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: We should be able to fill the order in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Thank you for your help; here's a little reward.</td>
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
						<td>Rewards: 20 Faction with Crafting Association, 3391 Tria, 12200 XP.</td>
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
