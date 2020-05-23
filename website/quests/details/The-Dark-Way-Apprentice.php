<!doctype html>
<html>
<head>
	<title>The Dark Way Apprentice</title>

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
						<td>The Dark Way Apprentice</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dark-Wanderer-wants-the-Messenger-Bag.php">Dark Wanderer wants the Messenger Bag</a> quest, 1 Apprentice's Dark Way Wand, 1 Death glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyph back.</td>
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
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven seems to stare through you, then speaks your name in a menacing tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: YOU…</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: you had better not be wasting my time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven now inspects the wand before handing it back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The Dark Way is not for the faint at hard or the impatient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: It is known that many disasters and epidemics were caused by foolish and impatient practitioners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: If for one moment we believe you to be a foolish or impatient student, your training will cease and you will be stripped from all that is Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven writes something on a report and seals it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take this to Londris.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: He will pass it on to our Dark Way Archmage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Then bring me back a dark way glyph used to instill images of the dead into the minds of our enemies.</td>
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
						<td>YOU: Here is the report from Oriven.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris nods as he reads the report.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Welcome to the ancient way YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: I shall be an intermediary between you and the Dark Way Archmistress until you are deemed worthy to meet her in person.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris holds out his hand with the report as it burst into flame and disappears.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: She has received it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You are sealed to the Dark Way now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: I assume you have been warned that they will not tolerate foolishness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You may leave me now.</td>
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
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I do have that glyph you requested from me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Do you think it will be that simple?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: You run around, do quests for us and become a master?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I want you to understand what means to be one of us.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: So a simple question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The place, the realm where we are now is a source of power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: We're standing on energy itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: And where do you think it gains his power?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: death</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Death.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A dark glimpse of light passes through the eyes of Oriven.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Everytime anyone dies the Death Realm gains power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I want you to remember this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: When you look in the eyes of your friends, and of your foes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: When you kill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: When you laugh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Always.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven seems to stares through you while he makes a pause.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Bring me your wand when you think you are strong enough for your next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: You will also need a few glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: One is Weakness, which is common.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven gives a condescending grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The other I, well, I will let you figure out what it is, but I am sure one is in Trasok's possession.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Someone once passing through here mentioned giving him a Dark Way glyph with many ancient items found on a travel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The old dwarf is not going to just give it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Do tasks for him until you earn it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Now be gone.</td>
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
						<td>Rewards: 10 Faction with Dark Order, 9400 XP.</td>
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
