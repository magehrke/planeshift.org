<!doctype html>
<html>
<head>
	<title>The Blue Way Adept</title>

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
						<td>The Blue Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Blue-Way-Adept.php">Becoming a Blue Way Adept</a> quest, Rank 60 Blue Way, 2 Apprentice's Blue Way Wands, 10 Greater Potion of Healing.</td>
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
						<td>YOU: Please accept my Way Wand plus another as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Perfect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Congratulations are in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You will soon no longer be an initiate in the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: In no way this mean you know it all either, you still have a long journey ahead of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen hands back one wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Return this to your fellow student while I prepare your new wand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now where was I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Oh yes, in your time with me I would require you to prove your commitment to the Blue Way and myself as your trainer by doing small tasks every now and then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I expect you to do as I say without questioning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: We will begin right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Deliver this progress report to our Archmage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: In addition on your way back get for me ten greater healing potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I will explain more later.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your report, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Congratulations on your achievement YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin sets the report aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: These reports tell me how your Blue Way studies are progressing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So far, so good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Perhaps one day you will be proficient enough to aid me in my studies to discover spells that utilize four glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: For now, you may return to Tarmeen to continue your training.</td>
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
						<td>YOU: Here are the ten Greater Potion of healing you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Pawprech is having some trouble with his herd that appears to be Crystal Way related; nothing to do with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I will get this over to him soon.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen removes a scroll and starts reading it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: There are two glyphs you will need to know about for the next section of your testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This riddle is a test of intelligence to determine what you shall need.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen moves his finger down a list before clearing his throat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: A perfect Sphere, the perfect Object will Poison the mind, that there is no end.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen puts away the list.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now, for your last task as an apprentice, I want you to return your Apprentice's Blue Way Wand to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Return to me after you have done so and I will have your first Adept item ready.</td>
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
						<td>YOU: Can I exchange this wand?</td>
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
						<td>Levrus: But, since you are offering it too me, I can not refuse.</td>
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
						<td>Levrus: And one is another wand.</td>
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
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen removes a wand from a bag and gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Here is your new wand, stronger and more powerful than your previous one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Be sure you have returned the other lower wand to the person who gave it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Do not forget to train, because you will need a sufficient level of Blue Way skill before returning and handing me your wand as a sign that you are ready to continue you’re testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Also, I highly recommend obtaining and researching the two glyphs in my riddle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Farewell, Adept.</td>
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
						<td>Rewards: 1 Apprentice's Brown Way Staff, 1 Apprentice's Crystal Way Staff[OR], 1 Pie[OR], 1 Adept's Blue Way Staff, 25 Faction with Blue Order, 13600 XP.</td>
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
