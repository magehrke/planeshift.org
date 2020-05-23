<!doctype html>
<html>
<head>
	<title>Knowledge of the Crystal Way Adept</title>

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
						<td>Knowledge of the Crystal Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Crystal-Way-Adept.php">The Crystal Way Adept</a> quest, Rank 70 Crystal Way, 1 Adept's Crystal Way Wand, 1 Apprentice's Crystal Way Bracers.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: We have no time to waste.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Pawprech's herd is still in trouble and we can get back to your training after.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I need you to head over there straight away and help Pawprech.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Tell him that you are there to help him.</td>
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
							$npcName = 'Pawprech Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pawprech Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tarmeen sent me to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Finally, I have been waiting for Tarmeen to send me a Crystal Way Adept to help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech points to his goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It seems as if the feed we gave to my animals had some sort of magical toxin in it that has made them all blind, and, alas, it's not the first time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I already know that Life Infusion don't work on the poor things, and we realized Crystal Magic had the opposite effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: We always give them some healing potion, sometimes work, but not this time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: If they can not see, they can not work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Is there a Glyph or Glyph combination that you might suggest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Light and Sight.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech opens his eyes in excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Of cause, Dazzling Light blinds the opponent, so should restore the sight.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech starts the spell on the nearest goujah, which responds by opening its eyes and bellowing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: We have done it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: This is wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I must reward you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech removes some glyphs from his Glyph sack. After sorting through them extends his hand with a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I have a spare glyph you might need for your training, and give Tarmeen my thanks.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Pawprech says thank you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You did well then, as I knew you would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: As you might have surmised, that was also part of your training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen gives a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now hand me your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: These no longer belong to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now, before we move on I must ask you a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Each Way of magic has One Way that opposes it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Once started in a Way, you will not be allowed to join the opposing Way Circle for safety reasons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: For your test of knowledge, answer what two other Ways of magic support the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Blue and Azure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Correct.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen removes a set of bracers from a bag and hands them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: These are your new bracers, also stronger and more powerful than the Apprentice item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Return to me again with your wand later, and when I think you are ready we will have your final test for this section of your testing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen takes a breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: When you find yourself in the dark you might need some Light, but beware too much light reduces Sight…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: because the eyes are nothing but windows to the soul only Faith will open the Door.</td>
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
						<td>Rewards: 1 Faith glyph, 1 Adept's Crystal Way Bracers, 30 Faction with Crystal Order, 15000 XP.</td>
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
