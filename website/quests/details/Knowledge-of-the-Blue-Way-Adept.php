<!doctype html>
<html>
<head>
	<title>Knowledge of the Blue Way Adept</title>

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
						<td>Knowledge of the Blue Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Blue-Way-Adept.php">The Blue Way Adept</a> quest, Rank 70 Blue Way, 1 Adept's Blue Way Wand, 1 Apprentice's Blue Way Bracers.</td>
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
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: We have no time to waste.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Pawprech's had some trouble with his herd, I sent in a Crystal Way Adept that helped out, but we need to find the source of his trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: We can get back to your training after.</td>
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
						<td>YOU: I was sent to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Finally, I have been waiting for Tarmeen to send me someone to help again.</td>
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
						<td>Pawprech: It seemed as if the feed we gave to my animals had some sort of magical toxin in it that made them all blind, but the bags it came out of show no signs of the toxin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech points towards the trough blocked off from the goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I think the trough may have a magical residue from Winch operations that is poisoning my goujah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I was sent two of these glyphs by Tarmeen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech hands you one of the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: But I do not know how to use it to check for such high level magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Is there a Glyph or Glyph combination that works with this one that you might suggest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Use Object and Divination Glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech tries the glyph combination, then opens his eyes in excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Of course, Analyse Dweomer, it is stronger than the standard Dweomer Detection.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech starts the spell on the feeding trough, which responds by a faint glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It seems as if there is some sort of magic residue here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I will have to study this further to find the source.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I must reward you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech removes some glyphs from his Glyph sack. After sorting through them he puts them all back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I have a need for all of these, so can't part with them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I tell you what.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: You hold on to that glyph I gave you, and give Tarmeen my thanks.</td>
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
						<td>YOU: Pawprech sends his thanks.</td>
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
						<td>YOU: My bracers as requested.</td>
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
						<td>Tarmeen: Once started in a Way, it may be difficult to join the opposing Way Circle for safety reasons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: For your test of knowledge, answer what two other Ways of magic support the Blue Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: crystal brown</td>
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
					<tr class="quest_questComplete">
						<td>QUEST COMPLETED</td>
					</tr>
					<tr class="quest_emptyRow_afterQuestComplete">
						<td></td>
					</tr>
					<tr class="quest_reward">
						<td>Rewards: 1 Object glyph, 1 Adept's Blue Way Bracers, 30 Faction with Blue Order, 15000 XP.</td>
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
