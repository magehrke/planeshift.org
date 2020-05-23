<!doctype html>
<html>
<head>
	<title>Insects in the Garden</title>

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
						<td>Insects in the Garden</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Jardet-Wants-Lake-Mushrooms.php">Jardet Wants Lake Mushrooms</a> quest, 3 Consumer Antennae.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings Jardet, need help with anything today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You've come at the right time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: YOU , is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I need some more help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It would seem a peculiar insect has moved from eating the grass to a rare flower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I fear for the flower's survival if this continues.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Can you help me with this issue?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to save the flowers immediately, what must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Thanks again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: First I need to identify the insect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Take this drawing I've made of it and find an insect expert to tell you what it is, then return to me.</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would you be able to identify this insect?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Yes, I'm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: mmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: familiar with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: It is a…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: errr…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: a barn bouncetail, not rare, but uncommon.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Durok nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: It arrives from The Barn, or the second level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Come….</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: mmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: back to me if you need any more help, yes.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I discovered that the insect is a barn bouncetail.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: A barn bouncetaill you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That's a start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now what I require is something to repel the insects away from the flowers, but not kill them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: These bouncetails are nature's creations too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I trust you'll be able to find some sort of bouncetail repellant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Ask around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Good luck.</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know of any natural repellent for the barn boucetail?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Err..</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: umm..</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I wrote a book about insects, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I don't remember that…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: mmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: information…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: offhand, but I know I did write it down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I gave the book to…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: errr…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Arion Fildar…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: mmm….</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: so he could study the complexities of the Kran language.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: You should speak to him.</td>
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
							$npcName = 'Arion Fildar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Arion Fildar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know of any natural repellent for the barn boucetail.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Let me just consult this book on insects.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He begins flipping pages rapidly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: It says here that the bouncetail's natural enemy is the consumer, which eats wingless insects in addition to carrion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: If you got your hands on some consumer pheromone, that should prompt the insects to move away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I'll wager any alchemist could help you with that.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for consumer pheromone. Do you sell any?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Consumer pheromone?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You got it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera looks through the shelves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh dear, I'm all out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I can extract it if you provide me with some consumer antennae, and I'll even give you some for free.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Can you do that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will be right back with some antennae.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Three consumer antennae should be plenty.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the antennas.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Now let me just get going on this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera smashes the antennae with a mortar and pestle, then sends it through a distiller, collecting some clear liquid in a jar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Careful with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It's nearly impossible to get the pheromone out of clothes if you spill it on yourself, and you'll be a walking consumer magnet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Trust me, I know from experience.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have just what you need to repel the barn bouncetails.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here goes nothing…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet pours the pheromone on the flowers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It's working!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The bouncetails are retreating to the grass!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Thank you, YOU .</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Take these as a token of my appreciation.</td>
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
						<td>Rewards: 10 Faction with Seeds of Wildwood, 1297 Tria, 9400 XP.</td>
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
