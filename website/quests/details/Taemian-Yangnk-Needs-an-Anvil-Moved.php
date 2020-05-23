<!doctype html>
<html>
<head>
	<title>Taemian Yangnk Needs an Anvil Moved</title>

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
						<td>Taemian Yangnk Needs an Anvil Moved</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 135 Strength.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Some quest is required to obtain this quest.</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I am looking for some work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I am a merchant, and you look like a traveler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: We may be able to work together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I need a very heavy anvil moved from here to Harnquist and I do not wish to carry it myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I get sweaty enough as it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Do you care to hear more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: If you bring this item to Harnquist he will give you an Assurance Note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Now I have to warn you, this anvil weighs 200 kilograms, so don't accept this task unless you are strong enough to handle it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Can you move this item for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can move that!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Okay then, here is the anvil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Tell Harnquist I sent you so he knows who it's from, and he will give you an assurance note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Return with that note and give it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Careful; this anvil's heavy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian wipes sweaty hands on his tunic again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
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
						<td>YOU: Taemian sent me, I have your anvil.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have been waiting for that anvil from Taemian for a while; let me see it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist holds out his hands for the anvil.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's all yours, be careful though, it's mighty heavy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Oh my!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That is heavy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Here is the Assurance Note for Taemian and a little extra from me.</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the assurance letter from Harnquist, the anvil has been delivered.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Great work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: You did not strain yourself I hope?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Well, here is your reward.</td>
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
						<td>Rewards: 1 Master Crafted Hammer, 7310 Tria, 15000 XP.</td>
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
