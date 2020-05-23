<!doctype html>
<html>
<head>
	<title>The Dark Way Adept</title>

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
						<td>The Dark Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/No-Time-for-the-Dark.php">No Time for the Dark</a> quest, Rank 60 Dark Way, 2 Apprentice's Dark Way Wands.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except these Way Wands as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne pauses in his writing as his mask tips upward to observe you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Greetings, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your training is interrupting my research here at the Burial Well, but if you keep proving your self I am willing to give you the time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne scribbles something on a report. He hands you the report and one of the wands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Return that wand to your fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I will have your new one ready later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I have updated the report but it needs to be seen by our Archmaster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Londris will pass your report on to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: She does not waste her time in the mortal world, so you have a choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Let me aid your death, or find your own way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Do you wish for my aid and give your death to Dakkru?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne looks disappointed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Find your own way.</td>
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
							$npcName = 'Londris Kolaim';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Londris Kolaim</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the report from Rulayne.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Ah, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Let's see what your Archmaster has to say about this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris holds the paper out in his hand. It hovers for a moment, then burts into flame. Londris gives a slightly mocking smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: She accepts your progression into the Adept level of the Dark Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: I am sure you are wondering what would happen if she rejected you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Well, let's just say it is not the report that would be bursting into flames.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Pity you were accepted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: I do find flaming fools to be…</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: amusing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: For your next task, she asks that you go to Levrus and give him this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris holds out a Way Amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Then return to Rulayne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Tell him you may pass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You will not be coming back to the Death Realm for quite some time for your training since he will take over those duties, so you best get everything done here now that you need to.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told you would know what to do with this amulet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Jewelry?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do I look like a lady…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: or a dwarf?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do not have any need of such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: However, since you are offering it too me, I can not refuse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes a familiar box from under his counter and drops the amulet in, then shakes it from side to side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I seem to have a few items in here already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Both wands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Imagine that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do wonder where they keep coming from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I suppose I can offer them to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you don't want either of them, take this pie.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You have returned?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: She has approved of you, then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne mask looks surprised as he looks you up and down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Not even singed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: She must have taken a liking to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne removes a wand from a bag and hands it over reluctantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Here is your new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Be sure you have returned the other Dark Way wand to the person who gave it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Also, do not forget you will need a sufficient level of Dark Way and knowledge of the Dark Way glyphs before returning and handing me your wand as a sign of being ready to continue.</td>
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
						<td>Rewards: 1 Apprentice's Brown Way Staff, 1 Apprentice's Red Way Staff[OR], 1 Pie[OR], 1 Adept's Dark Way Staff, 25 Faction with Dark Order, 13600 XP.</td>
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
