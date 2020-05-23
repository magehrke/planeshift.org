<!doctype html>
<html>
<head>
	<title>Introduction to Xiosia</title>

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
						<td>Introduction to Xiosia</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a friend which is telling me you are the best person to learn about Xiosia.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Xiosia is indeed the bringer of joy to my hearth!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: She's the Goddess of nature.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to understand this better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Xiosia is a nurturing mother which gives life to everything we see.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How are the religion followers organized?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The worshipers of Xiosia are organized under the name of Seeds of Wildwood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Their place is in nature and promoting harmony in Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Festivals related to the harvest, and preparations for the natural events of the year are often heralded by the Seeds of Wildwood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They organize themselves in groves and parks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the main beliefs of the followers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Xiosia's followers are for the most part, peaceful, productive and creative, particularly in regards to growing and living in harmony with the natural world around them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They are known for their love of nature and all it's varied creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They tend to be fatalistic, knowing death is a part of the natural cycle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Despoiling of nature is considered blasphemous and Xiosia's wrath can be mighty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: All followers of Xiosia will turn on any person or persons who commit such acts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there a temple of Xiosia I can go visit?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Xiosia's followers build no temples and prefer to worship in groves and gardens specially prepared and sacred to Xiosia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: There are places in many large towns that are devoted completely to nature such as this Secret Garden here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They also worship in Sacred Groves, planted in the wilderness.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can I become a follower?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I suggest you to start living closer to nature, and enjoying the beauty of Xiosia's creations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Also you could start helping me with some of my tasks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any tasks for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I remember Taulim Wilaal or Ervin Fromaad needed something, but I forgot exactly, can you please reach for them and check?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Thanks.</td>
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
						<td>Rewards: 5 Faction with Seeds of Wildwood, 8000 XP.</td>
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
