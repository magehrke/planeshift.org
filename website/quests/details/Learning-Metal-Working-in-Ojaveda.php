<!doctype html>
<html>
<head>
	<title>Learning Metal Working in Ojaveda</title>

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
						<td>Learning Metal Working in Ojaveda</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to learn how to work with metal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It's about time you learn a job!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You ready to learn now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I can teach you part of my job, starting from the very basics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Everything starts with raw materials like iron ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Bring me two iron ores and I will teach you more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I do not care if you mine them or buy them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your iron ores.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah good, you found some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: This material can be formed into stock that a blacksmith can use to make armor and weapons!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You have to place the ore inside the furnace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The furnace will refine it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Then use the stock casting to create the iron ingot from the molten ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I can give you what you need to get started in exchange for a pair of leather gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Great job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Okay, listen carefully now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Get one or more iron ores and place those in the furnace located upstairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Wait some time and you will see it melt; do not leave it too long or it will become unusable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Then remove the molten iron from the furnace and put it into the stock casting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: After some time, you will have an iron ingot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You will need some metallurgy skill to even get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Be sure to take some training in metallurgy from me before trying this yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Also you must 'keep in mind' the book I will give you now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good luck.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do you make stock?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: If you are interested in learning more about metal working, I can teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Are you interested?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It will cost you one hundred tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Give me one hundred tria and I will teach you a bit more about metal working.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your one hundred tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: An ingot is just a small part of what is needed to make a piece of metal stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Stock is made of ten molten pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Once you've made an ingot, you can turn it back to molten metal just by using the furnace again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Do you want to hear more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: To make one piece of metal stock, you have to place ten molten pieces of ore into the same stock casting slot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: So one molten piece will make an ingot, and ten pieces will make a bar of metal stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good luck!</td>
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
						<td>Rewards: Nothing.</td>
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
