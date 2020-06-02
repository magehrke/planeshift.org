<!doctype html>
<html>
<head>
	<title>Questioning</title>

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
						<td>Questioning</td>
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
						<td>YOU: Hello, is there anything I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Actually yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have a bet with Jayose that I can get a new person to collect pieces of information from people in Hydlaa before he can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Would you be willing to help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will help you find out what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: There are six pieces of information I need you to find out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I need you to go and ask Burdess Quirain 'what is your favourite fish'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then go to Jardet and ask him 'what is your favourite flower'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Go to Charisa and ask her 'what is your favourite potion'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Go to Darven and ask him 'what is your favourite game'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Go to Hamel and ask him 'what is your favourite tool'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Go to Jefecra and ask him 'what is your favourite punishment'.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You will need to find the NPCs mentioned by Harnquist. Then you should open the quest menu window. You will then have to manually type, and ask, the questions you have been asked to by Harnquist.</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is your favourite fish</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: My favourite fish?</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Ummm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I normally go for lionfish when I get the chance.</td>
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
						<td>YOU: What is your favourite flower</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I'm not sure I have a favourite flower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: As all things created by Xiosia are as wonderful as one another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: But perhaps..if I had to choose to have a garden of one, perhaps the daintywhisp.</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is your favourite potion</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Ah, my favourite potion...</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: Well, that's a hard one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: It would depend on if you mean of my favourite to make, or the one with my favourite effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod thinks for a few moments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa Malod: I think the intelligence potions are my favourite ones, watching the face of someone being out smarted for someone who they think is less intelligent is priceless.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is your favourite game</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: My favourite game!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: A card game, any card game.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Just so long as I can win.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is your favourite tool</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Favourite tool?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: That's easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: My hammer.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is your favourite punishment</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: I do not like having to punish anyone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: But I find that banishment can be an effective means of deterring someone from being a repeat criminal.</td>
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
						<td>YOU: [You tell Harnquist all of the answers you found.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: HA!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You will be surprised how many people have lots to say when you just ask them questions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You don't have to be helping someone to talk to them about something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: There are lots of things you can talk about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You could ask "who are you" if you do not know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You can ask "tell me about yourself" if you want to know about the person you're talking too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Perhaps be polite and ask them "how are you".</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: There are many things you could ask about.</td>
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
						<td>Rewards: 8000 XP.</td>
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
