<!doctype html>
<html>
<head>
	<title>Bestowing the Gifts of Xiosia</title>

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
						<td>Bestowing the Gifts of Xiosia</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Nature's-Secrets.php">Learning Nature's Secrets</a> quest, Rank 30 Hebalism, 1 Sicklepod Flower, 1 Lavender Oil.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything else I need for herbalism?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena turns to you and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yes, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I think you are ready for one more special gift.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena holds up another book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: This will teach you how to make two very special remedies called healing salves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Ready to learn more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I guess healing salves heal you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena laughs and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yes, there are a couple you can make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You are already familiar with making Gobo oil and Lavender oil, right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I know how to make them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yes, as I recall we made some Lavender oil last time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Well, with Lavender oil we can mix in some Sicklepod powder and heat up the mixture in a pot to make salve.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: With Gobo oil, we can mix in some Blackbush powder to make some Gobo Salve.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena eyes you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I don't have to tell you where to find Sicklepod flowers or Blackbush Stems, do I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I hope you know where or how to find these things by now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You know how to make a powder, right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I know how to make powder.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Great, then it should be a snap.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Give it a try.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Make some Lavender Salve and bring it back to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena hands you the book as she finishes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You show Aleena the salve.] All done!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena takes a look and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Very good, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I know this wasn't much, but really this is all I have to teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You have completed your apprenticeship!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now all that's left is for you to continue practicing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You know all you need, it's just a matter of making higher quality remedies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It has been a joy teaching you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena waves goodbye.-</td>
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
						<td>Rewards: 1 Gifts of Xiosia, 30 Faction with Science Association, 15000 XP.</td>
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
