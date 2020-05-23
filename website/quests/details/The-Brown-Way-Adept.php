<!doctype html>
<html>
<head>
	<title>The Brown Way Adept</title>

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
						<td>The Brown Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Brown-Way-Adept.php">Becoming a Brown Way Adept</a> quest, Rank 50 Brown Way, 2 Apprentice's Brown Way Wands.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told to show you these two wands as prove of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: A new sapling in the Brown Way forest?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Wonderful news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I look forward to guiding your reaching branches to the light of nature's magic.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia scribbles something on a paper and hands it to you along with the wands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Return that wand to your fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I have updated the report but you will need to deliver it to Archmaster Mulgik.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I am not sure where he might be, but as a Kran he spends most of his time in Gugrontid.</td>
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
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the latest report from Lorytia.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: How good to see you again, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Congratulations on your recent achievement within the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Now, for your last task as an initiate, I want you to return your Wand to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Return to Lorytia after you have done so and she will have your first Adept item ready.</td>
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
						<td>YOU: Here is my Brown Way Wand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A wand?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, what would I do with such a thing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I am in spectacular shape and my trousers fit quite nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Made by the finest tailors, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: However, since you are offering it too me, I can not refuse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes a familiar box from under his counter and drops your wand in, then shakes it from side to side.-</td>
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
						<td>Levrus: And one is a wand.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Blessed be Xiosia, you have returned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I assume you have Mulgik's blessings?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: And you returned your wand to Levrus as well?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia removes a wand from a bag and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: This is your new Adept's wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The power of Nature and the Brown Way is stronger within this wand than with your last.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Be sure you have returned the other Brown Way wand to the student who gave it to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Also, do not forget you will need a sufficient level of Brown Way and knowledge of the realm three spells before returning and handing me your wand as a sign of being ready to continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Ah yes, and you might also want to obtain and research a Red Way glyph called Hand.</td>
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
						<td>Rewards: 1 Apprentice's Blue Way Staff, 1 Way Amulet[OR], 1 Pie[OR], 1 Adept's Brown Way Staff, 20 Faction with Brown Order, 3391 Tria, 12200 XP.</td>
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
