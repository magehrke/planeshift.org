<!doctype html>
<html>
<head>
	<title>Learning Blade Making</title>

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
						<td>Learning Blade Making</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-a-Metal-Stock.php">Making a Metal Stock</a> quest, 2 Steel Stock, 1 Leather Knife Handle.</td>
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
						<td>YOU: Can you tell me how to make blades?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Blade making is a valuable trade skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Are you sure you are willing to put in the effort to learn?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I really want to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good, I can teach you how to make some simple knives and swords.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: As we covered previously, everything starts with raw materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Bring me two pieces of steel stock and I will teach you more.</td>
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
						2 Steel Stock</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your steel stock, I stacked it together as the quality is the same.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It is important that you find a good source of steel stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Once you start making swords, you will probably not want to spend your time mining or refining ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The first step is to acquire the proper skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: To make a knife or a sword, you need both blacksmith and the blade making skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You will also need a special book that I can give you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Before teaching you any more, I need to know if you are serious about being a blade smith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If so, find a leather knife handle for me and bring it here.</td>
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
						1 Leather Knife Handle</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Harnquist the knife handle.] Umm, but you sell them.</td>
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
						<td>Harnquist: Now you are catching on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The lesson there is figure out what parts you need to make, and which you need to buy, then find out where you need to buy them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Not all smiths or merchants sell everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I have a couple of different parts for sale, like the leather knife handle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Trasok, Gardr, or Kethzun also sell related items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Between us, you should be able to stock up on everything you'll need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. So what can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good, that's where the book comes in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It will tell you what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: This is what you need to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You use different quantities to make different items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Get some more steel stock and heat it up in the forge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: When making a blade, hammer it into shape using a hammer at an anvil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Heat it again and quench it in the tank.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Sharpen it with the sharpening stone, combine it with a handle and you are done crafting a very basic version of a weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Do not forget to experiment, and be sure to learn the needed skills from me before trying to make any weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I should also mention, blade making applies to knives, swords, -and- axes...basically, anything with a blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: This book, called the Book of Blades, will guide you through making swords like shortswords, longswords, sabres, and claymores, along with knives and daggers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: For axes, you'll need to see Trasok over in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I don't have a book for broadswords, but I have seen them around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You may have to get winch access and a good amount of skill to progress that far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Till then, keep checking with myself and Trasok to train and progress.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist hands you a book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
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
						<td>Rewards: 1 Book of Blades, 2 Level in Blades Making, 15 Faction with Smith Association, 2107 Tria, 10800 XP.</td>
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
