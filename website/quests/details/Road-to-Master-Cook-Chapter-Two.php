<!doctype html>
<html>
<head>
	<title>Road to Master Cook Chapter Two</title>

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
						<td>Road to Master Cook Chapter Two</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Road-to-Master-Cook-Chapter-One.php">Road to Master Cook Chapter One</a> quest, 4 Iron Ores.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Mirra, any new recipes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You're back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That Sarraghi Steak was so tasty, I tried the recipe with other meats but nothing was as tasty as the marrow from the tefusang claws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I never would have guessed that was the secret ingredient!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: However it took forever to extract the marrow, because I don't have a proper butcher knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The presentation wasn't there either, since I only had my usual wooden bowls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: It would look so great on a silver plate!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Do you think you could run some more errands for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: For you, any time. What do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The taste of the food is most important, but the eye needs to be pleased as well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Harnquist has a Butcher Knife for me, and Jirosh in Ojaveda has some silver plates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Here, take these orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: They will be expecting these.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Harnquist the order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, I see..</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: a butcher knife?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That should be easy enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now, I could get you a discount if you do a little something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, what must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Restock me with some iron ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Four pieces should do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your iron ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You did a good job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: These are some fine ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Here is your butcher knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It is yours as thanks for helping me out.</td>
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
						<td>YOU: gives Jirosh the order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh takes the order and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Five silver plates…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Got about six dozen of them stored in the warehouse but I don't have any buyers at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I thought they would sell, but no one seems interested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Let's say one hundred tria per plate and I'm a happy Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Thank you, and here are your Silver Plates, Sir.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Mirra the knife and silver plates.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: These are just what I needed, the proper tools for a master cook!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Thanks again, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Now let's see, the knife should have been around eighty tria, and the plates usually run for about two hundred tria a piece, so six circles should cover the expenses plus a little extra for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra hands you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Come back soon, YOU.</td>
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
						<td>Rewards: 35 Faction with Food Association, 9922 Tria, 16400 XP.</td>
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
