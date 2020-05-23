<!doctype html>
<html>
<head>
	<title>The Crystal Way Apprentice</title>

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
						<td>The Crystal Way Apprentice</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Govell-Mihdren-Needs-Tattoo-Ink.php">Govell Mihdren Needs Tattoo Ink</a> quest, Rank 30 Crystal Way, 1 Apprentice's Crystal Way Wand.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please have my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: A new student?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Welcome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am very busy, but will be the first Circle member to oversee your training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven nods, giving you back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I may need you to do small tasks for me from time to time during your training so I don't fall behind in my other works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The first thing I need from you is to give a message to Trasok Starhammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is the message?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Wait a second, I have a lesson for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The Crystal Way Order helps people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And I mean every one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: So if you ever find anyone in need, even a Dark Way member, help him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We will fight only if someone is directly harming someone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I understand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Very well, because you will bring the message to one member of the Red Way order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: To Trasok Starhammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tell him that I'll be glad to help him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I'm waiting for him here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And return here when you're done.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven wants to help you, he is waiting for you at his place.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok eyes opens wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: He dares to summon me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok stares you, angrily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: And he sent you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: A student?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok grinds his' teeth. Then he takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Tell to him that he is an hypocrite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I am the one who was waiting for him to come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: And what did he do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: He summons me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Return to him and tell Sharven to come.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is the problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The problem is deep and unforgivable hipocrisy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok growls, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I have headache and I have difficult to sleep these days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Nothing serious, but I'd like some easy healing.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok says that he want you to go there and help him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven smiles, sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I thought he changed from the last time, but he is the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Nevermind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do not think about him anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If you have nothing else to report, I'd like you to meet our Archmaster.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is Trasok your friend?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Did he tell you so?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven sobs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We took different paths but we use to know each other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He is older and he thinks I owe him obedience.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you going to help Trasok?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am glad you asked me this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven nods, proudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Remember this lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You can help people only if they help themselves first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Otherwise your deeds will be vain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Trasok suffers no serous injury, and if he really wanted my help he should come here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have nothing else to report.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven removes a sheet from under his notes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Deliver this report to our Archmage Govell Mihdren.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am certain he would like to introduce you to the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You may return and continue to assist me with some tasks when you have finished with Govell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You will also need few more Glyphs for your next tests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If I recall correctly, Jardet Forsil has one that you will need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I suggest helping him until he thinks you are worthy of the gift.</td>
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
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the report as requested from Sharven.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Always a pleasure to meet a new student of the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell sets the report aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I do not have any task for you at this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You may return to Sharven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You are required to hand him your Crystal Way wand to show that you are ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You must have sufficient training before he may give you your next test, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You might like to also go and see Gregori, he needs some help with getting enchanted gems.</td>
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
						<td>Rewards: 10 Faction with Crystal Order, 9400 XP.</td>
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
