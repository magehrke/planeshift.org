<!doctype html>
<html>
<head>
	<title>Get Grimal Out of Retirement</title>

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
						<td>Get Grimal Out of Retirement</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Pinayet-Misses-His-Friend.php">Pinayet Misses His Friend</a> quest, 2 Molten Iron.</td>
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
							$npcName = 'Raerul Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raerul Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I could use some work. Do you have anything that needs doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Ah, my father, Grimal Bloodaxe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Quite a fierce warrior in his day, and still is as a matter of fact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: He used to charge into the Stone Labyrinths with his axe swinging, and he didn't care what might happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Come to think of it, we could use that kind of attitude in the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Do you think you could do me a favour?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'm game.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: My father usually spends his days in Hydlaa now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Ask him to join the Sunshine Squadron, would you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Use my name if you have to.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would you consider joining the Sunshine Squadron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What is going on at the Bronze Doors?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Who put you up to this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your son, Raerul Bloodaxe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Oh, that's right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: My son is indeed a member of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I'd forgotten in my old age.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Well, since you're asking on his behalf, I'll have to consider it, won't I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Now let's see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: The Shadow Squadron has offered me some tria as well as paying off my debts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: But an old man has no real use for such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I want a legacy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Something to make people remember me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Oh, I know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Tell Raerul I want a statue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Yes, a statue of myself for all of Yliakum to see!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: And if he agrees, come back and we'll talk.</td>
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
							$npcName = 'Raerul Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raerul Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Grimal says he wants a statue made in his honor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: My father's always been self-centered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: However, he is still an important figure in adventuring circles, so Commander Strongwill likely won't have trouble with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Tell my father that the Sunshine Squadron agrees.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Sunshine Squadron has agreed to commission a statue for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Ha ha, excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Now all I need is a miniature statue so I know what it will look like, and if I like it, then I will agree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I know just the dwarf for the job too: Yonda Axebow is an expert sculptor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: She could probably do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Why not ask her to make you a statue?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I'll wait here.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you make me a statue? I've heard tell that you're an excellent sculptor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: A statue?</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Of who?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The famed fighter Grimal Bloodaxe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh, Grimal!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I could do that by heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I'll start on it right now, and while you wait, why not bring me two clumps of molten iron?</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: We'll cover it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Make it like a miniature metal statue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: This will be great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Also, get one hundred tria ready - that's my fee.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've brought the metal you need for your statue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Here goes nothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda spreads the iron over the wooden statue with a tool.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Look at that, looks just like him, wrinkles and battle scars and all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: One of my best yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: One hundred tria, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your fee.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I hope you enjoy it.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Look, your statue is done!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal looks at the statue incredulously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Is that how I look?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I must be…I…I was…</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: No, this is the truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I am indeed a wrinkled old man and I would be a fool to go back into battle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Let people remember me in their minds for who I was, not who I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I won't accept the offers of either the Shadow Squadron or the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Tell my son that I will stay retired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Have a circle; it's for the statue and the lesson.</td>
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
							$npcName = 'Raerul Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raerul Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your father has decided to remain in retirement.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Is that so?</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Perhaps it's for the best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: It was probably a silly idea anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Have some circles; it's for the errand and the lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: Heh, listen to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: I sound like my father.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: He used to say that all the time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raerul: But thanks.</td>
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
						<td>Rewards: 10172 Tria, 16400 XP.</td>
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
