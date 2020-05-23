<!doctype html>
<html>
<head>
	<title>From the Flames of the Furnace</title>

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
						<td>From the Flames of the Furnace</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Copper Stock, 1 Tin Stock.</td>
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
							$npcName = 'Selisar Zeinifa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Selisar Zeinifa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any work for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Actually, I could use some help at the moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa is about to continue, but a shift of his weight causes him to stagger and brings a grimace to his face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Stupid leg!</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: It still isn't quite right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shakes his head to clear it before turning back to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: I'm not getting much work done lately, and while I'm still able to make enough tria to get by I'm in danger of losing my reputation and my contacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: If my customers go elsewhere I may never get them back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: If you could help me fill these orders for metal stocks you can keep the payments you receive, and I can show you what I've learned about smelting ore and making alloys.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That sounds fair to me, I suppose.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Good to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: I send stocks instead of ore, as unprocessed ore is always heavier and more awkward to transport.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: If you can mine, smelt, and cast the ore you can keep the payment on delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: I'll have regular orders to fill until my leg gets better, so keep checking in to see if there's more work to do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is it you need me to make, and who should I deliver it to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Got an odd order this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Very odd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa scratches his head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Jardet Forsill of Hydlaa wants a copper stock and a tin stock delivered to someone named Amakeer in the Derghir village between Ojaveda and Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Not even sure how to communicate with them, but I suppose it's worth a try.</td>
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
							$npcName = 'Amakeer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amakeer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you Amakeer? Can you even understand me? Someone here has to take these stocks!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghir before you takes the proffered stocks hesitantly. Kra smells them both, then tapes them together. Finally kra bites a small corner off each stock.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghir nods, and sways a bit more enthusiastically for a moment. Kra looks around for a moment before picking up a nearby flower and handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghir turns back to its village, apparently losing interest in you.-</td>
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
						<td>YOU: I've delivered your order to the Derghir village, and Amakeer gave me this starphire to give to you in return.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Ah, did kra?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: That's wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill takes the flower and gives it a deep sniff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I've been hoping to build some kind of rapport with the Derghir, and what better way to make friends than with food?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I've been hoping to build some kind of rapport with the Derghir, and what better way to make friends than with food?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: The fact that kra gave you a flower in return suggests that it was successful, at least to a degree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill opens his mouth to continue when a sudden thought causes him to frown.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I suppose I'm just lucky that kra chose a flower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: If he was looking for something our kind eat, he may well have just found the nearest rat, stomped on it, and given you the corpse to return as 'meat'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Perhaps I should send along a note next time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Well, that's for the future.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Thank you for your help with this, good Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Here's your pay, and a little something extra to replace the flower you brought me.</td>
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
						<td>Rewards: 3 Starphires, 1 Level in Metallurgy, 1297 Tria, 8000 XP.</td>
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
