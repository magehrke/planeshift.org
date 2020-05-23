<!doctype html>
<html>
<head>
	<title>Tarmeen Alecheech's Missing Skulls</title>

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
						<td>Tarmeen Alecheech's Missing Skulls</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Pinayet-Misses-His-Friend.php">Pinayet Misses His Friend</a> quest.</td>
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
						<td>YOU: What are you doing and can I help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: 47, 48, 49…hrumph, now you made me lose count.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Can you not see when someone is working?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You can’t even leave me to my work and you want work from me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Argg, starting over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: …48, 49, 50, 51, 52, 53, 54, 55, 56.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This can’t be right!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Some skulls are missing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: If Raithen finds out I will be cleaning megaras cages for the rest of my life!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen looks nervously about.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You want work?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Go speak to Deelor Blackeye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I saw him lurking about last night.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: He is a dodgy fellow; I cannot say I trust him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You should not trust him either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Ask him about last night or if he knows about any missing stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now if you can handle that, I have work to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Can you handle it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, indeed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Be on quickly now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: If Raithen finds out I am missing stock, I will probably be sent to Deelor for one of his famed 'information extraction sessions.'</td>
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
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We have missing stock, what was your whereabouts last night?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Deelor eyes narrow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Vat is meaning of dis you ask me vhere I vas?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Something missing, you sink it me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Vun day I vill have your head simple adventurer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You know vat is best ting vith killing adventurer?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: No vun misses dem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I do not know vhy I vould help you or vhy everyvun alvays suspects me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Do I take too much pleasure in my vwork?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: It is no matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I vas neer storage last eve on legeetimate business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I needed new axe to remove heads of enemies of realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I saw vun they call dark vanderer near storage area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Perhaps you ask heem vwhere hee vas or about dees missing stock and bozzer me no more.</td>
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
							$npcName = 'Dark Wanderer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dark Wanderer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We have missing stock, what was your whereabouts last night?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Petty theft?</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: You ignorant Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I am above such meager concerns as my own means.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I ponder mysteries beyond the reach of most mortals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Leave before I make you leave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Go and tell that peon Tarmeen Alecheech your feeble investigation has failed.</td>
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
						<td>YOU: Deelor knows nothing, the investigation failed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: That is unfortunate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen Alecheech says: That is unfortunate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: So much strangeness in the air around here of late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Perhaps you can aid me in another way then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I need to replace the lost goods immediately, or I too will be looking for work soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Will you go and see if you can arrange something with Taemian Yangnk to get me eight skulls?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Raithen ordered them specifically for some ritual during the Crystal Eclipse and if they are not here, I fear mine will one of the eight he takes to replace them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Just tell Taemian Yangnk you need eight skulls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You should do whatever he asks as payment, and if you can return with the skulls, I will reward you with something that has been collecting dust here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Just tell him you need eight skulls.</td>
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
						<td>YOU: I need eight skulls please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Skulls?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: You do not look like the morbid sort to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian wipes sweaty hands on his tunic.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Yes, my partner may have some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: If you do something for me, I think we could make a fair enough trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: My partner is Thorian Gronk; he is usually in the plaza in Hydlaa trading for wares to send back here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I have something I need to get to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: If you take it to him with this requisition letter, he will give you the skulls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Do you accept my terms?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I accept.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: This saves me a trip.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian wipes sweaty hands on his tunic.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Here is the letter of requisition skulls and a sack for Thorian Gronk; just give them to him when you find him.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Ah great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Do you have a letter of requisition?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here's the letter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian reads the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Skulls eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian looks at you strangely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well, ok then.</td>
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
						<td>YOU: Here's your skulls.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This may well have saved my head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Here is the promised reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You can choose.</td>
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
						<td>Rewards: 1 Mind glyph, 1 Enforcer Shield[OR], 20 Faction with Guard, 16400 XP.</td>
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
