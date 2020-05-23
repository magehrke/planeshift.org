<!doctype html>
<html>
<head>
	<title>Learning Metal Working</title>

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
						<td>Learning Metal Working</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Harnquist's-Raw-Materials.php">Harnquist's Raw Materials</a> quest, <a href="/quests/details/A-Hammer-for-Hamel.php">A Hammer for Hamel</a> quest, 2 Iron Ore, 1 Leather Gloves.</td>
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
						<td>YOU: Hello, I'm ready to start learning about metallurgy. You said you'd help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have always thought that all these young adventurers and warriors should settle down a bit and learn new things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Hydlaa needs people that help the economy to grow: new builders, architects, bakers, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Are you truly interested in learning about metallurgy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes..I'd really love to learn about metallurgy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can teach you part of my job, starting from the very basics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Everything starts with raw materials like iron ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Bring me two lumps of iron ore and I will teach you more.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						2 Iron Ore</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the iron ore you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah good, you found them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Whether you mined them yourself or not is irrelevant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I usually buy my raw materials from merchants.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist inspects the ores.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Alright, this material is extremely useful for building most of what you wear and wield in battle; in that sense, it's a real gift from the gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: From this simple mineral, we will create items and goods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The first step is to have the knowledge on how to refine it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You have to place the ore inside a furnace and wait for it to turn into molten iron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then you have to place the molten iron into stock casting and wait for it to create the final iron ingot or iron stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You will not be able to do this yourself until I give you the right tips.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can exchange this information for a new pair of leather gloves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist shows you his old pair which are nearly worn through.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Bring me those new gloves and I will give you the last of the tips you need.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1 Leather Gloves</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your new gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I usually consume a pair of leather gloves each week for this job!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist gives you a book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Read this book carefully and keep it 'in your mind.' Get one or more iron ores, and place those in a furnace by my shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Wait some time and you will see it melting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Be patient: it will take time to melt!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Yet do not leave it for too long or it will become unusable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then get the molten iron from the furnace and put it into the stock casting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: After some time, you will have an iron ingot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The operation is not easy, so you need some metallurgy knowledge to complete it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Be sure to get plenty of practice, return to me and I'll teach you how to make metal stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good luck.</td>
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
						<td>Rewards: 1 Working With Stock, 2 Level in Metallurgy, 10 Faction with Smith Association, 1297 Tria, 9400 XP.</td>
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
