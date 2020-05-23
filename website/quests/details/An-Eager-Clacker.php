<!doctype html>
<html>
<head>
	<title>An Eager Clacker</title>

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
						<td>An Eager Clacker</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Tribute-of-Circles.php">A Tribute of Circles</a> quest, 1 Clacker Phial.</td>
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
							$npcName = 'Sysial Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sysial Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Sysial the clacker phial.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial glances at the phial and then to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Interesting…so I am to test you it seems.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: You must truly have a talent for causing others pain and dismay, or you would not have been sent to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: It makes me wonder if you truly understand what path you have begun to take.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I suppose Relliom did not tell you who we serve…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial studies your reaction closely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I can tell you only a little.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Our Master is the true ruler of all of Yliakum and beyond.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: We are nothing, yet everything in our Master's shadow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: The power I will…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial shakes her head with a small smile and corrects herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: …we will be granted transcends all known powers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial stops and narrows her eyes at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: That power comes with great sacrifice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Every move you make must be draped by darkness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Every step that moves you forward will be built on the blood and pain of those who are not worthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Pray that you are not one of the unworthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Tell me now, are you willing to devote your life to this new Master?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Then it is time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial uncorks the phial and sprinkles it in her hand. The smell of dried herbs, clacker meat, and something unidentifiable fills the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: This will not hurt…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: much.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial blows the powder into your face and everything goes dark.-</td>
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
							$npcName = 'Intelligent Clacker';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Intelligent Clacker</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The clacker waves his front legs lazily in front of him, then slowly turns his black-bead eyes on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: You're an odd thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Cut-throat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Deceitful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Defender.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Charmer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Clacker rubs his antennae together, making a sound that is almost like a laugh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: You wonder why you are here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You can talk ?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: No, no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: No time for idle chat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Things to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Clacker's glassy orb eyes drift about the room seemingly without focus, each one going its own direction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Many many things to do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Clacker's eyes both snap back to you and he whispers his next words.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: You know she has to die, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She? Who is she?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: The woman!</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Find her!</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: She has my green ribbon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: I want it back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Go now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Take the life to take the ribbon, newling.</td>
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
							$npcName = 'Peasant Woman';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Peasant Woman</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent to retrieve the ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: It is mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: I am going to give it to my child when she is born.</td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: It is my family's way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: I will never give it up!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The clacker told me to kill you to get it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: Please, you must help me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Peasant: Tell it…tell it to let me go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You kill the Peasant Woman and loot a Green Ribbon.-</td>
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
							$npcName = 'Intelligent Clacker';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Intelligent Clacker</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Torol gives the clacker the ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Look at that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: I believe it is what you came for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: I do hope you had no problems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Peasants can be so unpleasant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Terrible pests, if you ask me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Now then, on to business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: Please pass this ribbon on to my mistress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Intelligent: I did enjoy our little talk, but I must taste you now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Clacker suddenly leaps at your face.-</td>
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
							$npcName = 'Sysial Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sysial Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Sysial the ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Welcome back…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Perhaps I used a little too much, but you seem unharmed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial smooths the ribbon.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: No more questions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Take this ribbon to Relliom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: You and I will never speak of this again.</td>
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
						<td>Rewards: 1 Green Clacker Ribbon, 25 Faction with Cabal of Whispers, 5130 Tria, 14540 XP.</td>
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
