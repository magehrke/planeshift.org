<!doctype html>
<html>
<head>
	<title>Sending a Letter Home</title>

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
						<td>Sending a Letter Home</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Pinayet-has-a-Dented-Shield.php">Pinayet has a Dented Shield</a> quest.</td>
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
							$npcName = 'Pinayet Ullavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pinayet Ullavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you happen to have any more work for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Gracious, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I could use some help again, if you could use a few tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Would you be willing to find something out for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It would be my pleasure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I'm glad to hear that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: You see, my family lives on the Far Ground, and I send them letters pretty regular-like.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: That is, I did until the messenger I used got married and moved off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Now, I don't know who to use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Could you maybe ask Jirosh Mikana which messenger he uses?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: He's a big merchant and sends things all over Yliakum, so he must know of someone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Here, take my letter for my family and give it to the messenger when you find him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: When the messenger has the letter, just come back and tell me that you are all done, and I'll get you your payment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet hands you a tidily folded letter.-</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know of any trustworthy messengers I could use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Oh, I use Tarela Girshon for sending such things as promises of payment and contracts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: She's quick and reliable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I believe she's in Hydlaa right now, if you need her services.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Just ask her to deliver your letter and she'll be off before you know it.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like you to deliver a letter for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I'd be happy to do that, Maddam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I need to know the recipient's name and which level they are on so I can charge you properly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: What is the recipient's last name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The family name is Ullavin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela appears to think for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes…that name sounds familiar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: What level?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They are on the third level.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: My fee will be seventy five tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela holds out a paw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your fee.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I'll take that letter now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela looks at you expectantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go. Safe journey.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I should have this delivered shortly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I appreciate the business.</td>
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
							$npcName = 'Pinayet Ullavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pinayet Ullavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your letter is on its way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet smiles broadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Well, that's a relief.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: What was the name of the messenger, so I can use him again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: SHE is called Tarela Girshon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Oh, thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: You said Tarela?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Yes, I know her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I guess I should not have said to give -him- the letter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: You have been a big help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Please, take your reward and many thanks!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet hands you a few coins.-</td>
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
						<td>Rewards: 30 Faction with Guard, 7310 Tria, 15000 XP.</td>
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
