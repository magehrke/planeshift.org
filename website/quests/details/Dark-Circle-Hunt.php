<!doctype html>
<html>
<head>
	<title>Dark Circle Hunt</title>

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
						<td>Dark Circle Hunt</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Interview-Sunshine-Squadron-Applicants.php">Interview Sunshine Squadron Applicants</a> quest, 1 Dark Circle Ring.</td>
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
							$npcName = 'Raithen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raithen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: reporting for duty, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: You want something to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sir!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Go and tell Polyuntri Stevald I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: He's in charge of the little whelps like you.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Raithen sent me for a task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: So Raithen sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Our intelligence officers have been investigating a group of people for some time now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: They are called 'The Dark Circle'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: One can easily recognize them as most of them have azure countenances and blank eyes, possibly using some sort of magic to mask their eye colors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: One could think of them as undead at first sight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Last time they have been seen in the vicinity of the cavern walls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: As our intelligence indicates, notables of them carry rings to identify themselves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: If you want to help us, try to find where they hide and get back to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: When you return, the next words out of your mouth better be ‘I found the Dark Circle’.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found the Dark Circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Ah, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Are they still hiding in the small tunnels to the west of here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes sir! I found them in the tunnels.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Ah, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: They move from one place to another, but those tunnels are often used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Now I know you have the courage to go there, and I can assign you a real task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Go back to the tunnels and try to weaken their presence in this area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Killing a notable person, one with the Dark Circle ring, is critical to have them thinking twice about operating so close to here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Bring back the ring to me as proof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Go, and don't come back before you have a ring to present.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: holds out the ring for Polyuntri to take.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: But don't be too proud of it; it's a very small task compared to what we have to face here on a daily basis.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: As a reward, I can give you a small piece of armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Take this helm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You should return to Raithen again later as he will be pleased with you as soon as I give him my report.</td>
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
						<td>Rewards: 1 Mercenary Helm, 65 Faction with Guard, 9922 Tria, 16400 XP.</td>
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
