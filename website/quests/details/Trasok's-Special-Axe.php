<!doctype html>
<html>
<head>
	<title>Trasok's Special Axe</title>

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
						<td>Trasok's Special Axe</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Teeth-for-Trasok.php">Teeth for Trasok</a> quest, 1 Small Battle Axe, 2 Coamti Blood.</td>
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
						<td>YOU: I'm here for the small battle axe you asked me to create.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Did you manage to make one with the equipment I have upstairs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes! I made it! Maybe you can check if it's good enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Wow, you are a fast learner!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Then please give me the axe, so I can inspect it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok looks at the blade resting on his anvil with an expert eye, then hits it with a hammer and listens to the sound it makes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Not too bad!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You still have a long way to be an expert crafter, but it's great to see you making progress!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Congratulations.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How is your axe project proceeding?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good you asked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: My friend used your Tefusang teeth and said those were very useful, but looks like few other pieces are missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I know it's risky to chase and kill monsters, I really would do it myself but i don't like leaving my shop empty, so I have to rely on your help here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The next thing, and hopefully last thing I need are two vials of Coamti blood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Those will be used in the process of hardening the weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Please get those to me and I will reward you well!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Coamti are quite rare! But I managed to find what you asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Just in time, my wizard friend will be visiting in few hours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thanks for all your help, here is your reward.</td>
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
						<td>Rewards: 25 Faction with Smith Association, 5130 Tria, 13600 XP.</td>
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
