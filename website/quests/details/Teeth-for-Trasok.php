<!doctype html>
<html>
<head>
	<title>Teeth for Trasok</title>

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
						<td>Teeth for Trasok</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Harnquist-Weapon-Commission.php">Harnquist Weapon Commission</a> quest, 2 Tefusang Teeth.</td>
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
						<td>YOU: What are you doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I think I've figured out a way for me to compete with the quality of Harnquist's weapons!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'm great at making axes, battle axes and the like, but their quality is sometimes lower than the swords made by Harnquist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: A wizard friend of mine told me he could help me forge a great weapon with some special ingredients, and I want to try!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I just need a few Tefusang teeth to use in my experiment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can you bring me two?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can do that for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Please hurry back with those teeth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I can't wait to see the results!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The teeth you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, wonderful, wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'll get started right away!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thank you so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Here, take this for your trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'm going to create this weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: In the meantime you can study the basics of Axe making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It's not that hard, considering you already know a bit about metallurgy and sword making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The process is somewhat similar, but you need the proper book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I have a copy here somewhere.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok digs about beneath his work top.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Come back to me when you made one Small Battle Axe!</td>
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
						<td>Rewards: 1 Notes of an Axe Maker, 25 Faction with Smith Association, 13600 XP.</td>
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
