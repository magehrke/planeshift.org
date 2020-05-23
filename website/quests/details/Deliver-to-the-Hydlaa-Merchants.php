<!doctype html>
<html>
<head>
	<title>Deliver to the Hydlaa Merchants</title>

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
						<td>Deliver to the Hydlaa Merchants</td>
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
							$npcName = 'Phanejor Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Phanejor Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings, do you have any work available?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: The Mikana Trading Company often has work for those who ask of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Do you know much about the other merchants in Hydlaa?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: That is good to hear, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Would you like to make some deliveries to them, perchance?</td>
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
						<td>Phanejor: Most pleasing to me, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Here are three packages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: You will find the recipient's name on each package; each is in Hydlaa so it should not be difficult.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I will give you a sheet for them all to sign to confirm delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Always give the package first, then the sheet for them to sign.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Please do them in the order written on the sheet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: That's good business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I will be here, awaiting your return with the thrice-signed sheet.</td>
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
							$npcName = 'Ervin Fromaad';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ervin Fromaad</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: This must be the delivery from Mikana.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ervin opens the lid on the package. His face is bathed in a warm orange glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: As I thought.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: It's the amber I ordered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: It's used to ornament high-quality weapons, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Do I need to sign anything?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Okay, this will just take a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ervin signs the sheet with a flourish and hands it back to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Thanks and farewell.</td>
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
							$npcName = 'Edrich Sultov';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Edrich Sultov</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery from the Mikana Trading Company for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: From Mikana?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Edrich hastily rips open the package.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: The spools of ribbon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: At last.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I'll sign that sheet now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Very well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Edrich scribbles his name across the sheet quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Here's a tip.</td>
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
							$npcName = 'Boralis Voladrand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boralis Voladrand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for Boralis.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I've been expecting this package.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis carefully unwraps the paper package, smoothing it out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Rinna, look, it's the gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Place those in the inventory, would you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis hands the gloves to his wife, who starts stacking them. He folds the paper package and sets it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: No sense in wasting paper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I believe I need to confirm delivery?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, if you could sign the here on the confirmation sheet, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Looks like the Mikana company has kept you busy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis slowly and carefully signs his name.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: And here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Thanks again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Goodbye.</td>
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
							$npcName = 'Phanejor Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Phanejor Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have completed the deliveries. Here is the confirmation sheet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Everything seems to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Well done, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Did you receive any tips?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I received the tips.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I am glad to see that not every merchant has forgotten the custom of tipping a Hexa to a merchant's courier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Here's your compensation, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Perhaps I'll have more work for you later.</td>
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
						<td>Rewards: 7310 Tria, 15000 XP.</td>
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
