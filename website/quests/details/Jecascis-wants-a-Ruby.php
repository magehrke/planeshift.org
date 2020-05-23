<!doctype html>
<html>
<head>
	<title>Jecascis wants a Ruby</title>

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
						<td>Jecascis wants a Ruby</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Jecascis Airiskel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jecascis Airiskel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail! Any unfinished business I can assist you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Would you mind doing something for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'd do it myself but I'm on duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, that's why I am here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Oh, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'm looking to understand the Red Way better so I can improve my skills for the Arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I know that the Red Way practitioners uses ruby crystals as a focus, so if you don't mind finding me one?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'm not sure where you can get them, though; that'll be your assignment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Good luck!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found a ruby crystal for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: You…this…but how?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I've been looking hither and yon for one of these without success.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I was expecting you to return empty-handed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Thank you ever so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Have some of my spoils from the Arena floor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I was going to sell them once I got off duty, but you can have them.</td>
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
						<td>Rewards: 1 Trepor Heart, 16400 XP.</td>
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
