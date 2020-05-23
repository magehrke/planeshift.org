<!doctype html>
<html>
<head>
	<title>Merrinez Love Letter</title>

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
						<td>Merrinez Love Letter</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Merrinez-Bad-Mood.php">Merrinez Bad Mood</a> quest, 50 trip.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, Do you require more help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Well, as you've proven to be a kind person, maybe you can help me with something quite personal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What seems to be the problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Well, ehm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: you see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I have…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: well, you should know that I have some sentiments for a very nice feline in Dsar Akkaio…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: but maybe you don't know her…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: do you know of my beautiful female Enkidukai?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: She lives here in Akkaio.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Her fur is so soft, her eyes so beautiful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: You do know who I speak of do you not?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: toda</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Oh yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Exactly her!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Isn't she splendid?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Anyway, I'm a bit shy and really have no clue on how to meet her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: She is always so busy with her work, and also I cannot leave this dock!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: How can I contact her?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: letter</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: A letter?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Sounds good, but it's not that easy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez looks puzzled.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Writing is not my best quality…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: unless you can help me to write it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Will you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I shall give you something valuable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will try my best.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Thank you, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: First of all, we need ink and paper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Could you please find some for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I believe there is a library somewhere that you can buy ink and paper.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need some ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I suppose I could spare some for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: One lot for fifty Trias, agreed?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fifty you say? I think it is a fair price.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Very well, give me a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose takes some sheets of paper from a near pile, then opens a drawer and picks up the ink.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Here is the ink and paper, as requested.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Perfect, now we are ready to write the letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: How should I start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: dear toda</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Sounds simple enough.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez Dholant begins to write.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: There, now, I should not start with big words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: What should I tell her first?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: She's probably wondering who it is that is sending the letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: What should I write about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: your mind</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Alright, I will write something about my personality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez starts writing. After a few minutes, he raises his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: That part is completed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: She now knows about who I am, but what should I tell her next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: your love</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I don't know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Do you really think I should?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: What if she doesn't share my feelings?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez composes himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I will go for it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez starts writing with passion. After a few minutes, he looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Looks good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: How should I end the letter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yours</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Yes, that sounds fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Now I just need someone to deliver the letter to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Will you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will do it with pleasure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: You truly have made my day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Please hurry, and return to let me know what she says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I shall wait for word from my beautiful Toda.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a special delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: What is this…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda looks at the letter, and looks at you a bit puzzled.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I was not expecting a letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I am very busy today, can this letter wait?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, you must read the letter now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: This sounds important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda opens the letter without haste and reads the first few lines.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Oh..</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda blushes. Toda's ears stand straight up as her eyes grow large and a small shy smile forms on her face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Erhm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Could you please give me one moment here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda walks away from the counter and continues to read the letter with attention, she smiles a great big smile, then stifles a giggle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Ehm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: yes well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda walks back to the counter, and takes out a piece of paper and some ink.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda begins to write a message on the paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda folds the message and seals it before handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Please, return this to Merrinez.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a reply for you from Toda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez rips open the seal and begins to read the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Uh huh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: yup…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: uh huh…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez grins from ear to ear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Thank you YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I can't believe my luck, this is wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: This letter says she would like to get to know me better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I must go and find something to wear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Ahh, wait first I must show you my appreciation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: This is something precious that I received from a merchant.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez hands you a rock.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: May Talad bless you, Tabei!</td>
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
						<td>Rewards: 1 Rock glyph, 40 Faction with Crafting Association, 17800 XP.</td>
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
