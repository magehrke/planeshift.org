<!doctype html>
<html>
<head>
	<title>Helping Gardr with kras orders</title>

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
						<td>Helping Gardr with kras orders</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-new-mace-for-Nevis.php">A new mace for Nevis</a> quest, Rank 50 Mace Making, 5 crafted Clubs, 3 crafted Morning Stars, 3 crafted Battle Picks, 1 crafted Spiked Warhammer.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Can I help you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: YOU, I have been pleased with your progress while you have been training with me and I've been watching with interest while you have been crafting maces and hammers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Your work is of a high standard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I am currently overrun with work orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Can you help me by completing one of the orders?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Of Course, I will gladly help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You will not regret this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: First though, I need you to pick up the order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Do you have access to the winch area of Hydlaa?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Yes, I have access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Can you go there and speak to Axomir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: He has an order waiting from the barn, the guards there are having problems with thieves targeting the mint.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Please hurry back.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Gardr sent me to collect the order from the Barn level.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir looks up from his work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: About time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I thought I was going to have to try find another smith to do this order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Gardr is lucky that kra is such a good smith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Neither Veja nor Harnquist can match Gardr for kras quality when it comes to Maces and Hammers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir hands you an order slip and returns to his work.-</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: [You give Gardr the Barn order.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: No, I do not have access yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Ok, Never mind I will deal with the winch order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I need you go to Raithen and pick up his order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You will find him at the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Please hurry back.</td>
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
							$npcName = 'Raithen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raithen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Gardr sent me, to collect your order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: About time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: We need this order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: We are currently defending the dome with sub-standard weapons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: Gardr is the only smith that can provide the quality we need of Maces and Hammers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I would like to purchase kra's Platinum Steel Maces and Hammers but we don't have the budget.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Raithen hands over an order slip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raithen: I eagerly await your return.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: [You give Gardr the Shadow Squadron order.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1, 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Thank you, Jilare.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr reads the order slip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: First I need you to make five clubs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: As it is my reputation on the line I will only accept quality items.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr Smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I know you will not disappoint me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here are your Clubs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr examines the clubs and smiles before putting the Clubs in a crate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: These are excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I am glad I chose you to help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks at the order slip again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Next on the list is…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I need three Morning stars.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here are your Morning stars.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr examines the morning stars and smiles before putting them in the crate with the clubs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: These are excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks at the order slip again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Next we need three Battle Picks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here are your Battle Picks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr examines the Battle Picks and smiles before putting them in the crate with the rest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: These are excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks at the order slip again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Next we need a Spiked Warhammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here is your Spiked Warhammer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr examines the Spiked Warhammer and smiles before putting it in the crate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This is excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks at the order slip again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now I need you to deliver this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Yes, I will deliver to Axomir?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: That is the complete order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Can you deliver it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr hands the crate to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Axomir will give you a receipt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr Smiles.-</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Here are the Maces for the Barn level.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir puts his work down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: At least Gardr was quicker at completing the order than collecting it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir writes a receipt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Please deliver this to Gardr.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I would love to chat but I am busy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir returns to his work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Here is your receipt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I would thank Talad, but you have been far more useful to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr takes a book from a shelf and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Here is my spare copy of Platinum Steel Hammers and Maces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Also some tria for your work, Jilare.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr hands you a fat pouch of tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I have one concern though, Sir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You have the skill to become a rival one day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I hope we can continue to work together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Take these to get you started with the book.</td>
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
						<td>Rewards: 1 Platinum Steel Hammer, 1 Mace, 10 Platinum Steel Ingot, 1 Faction with Smith Association, 45628 Tria, 10800 XP.</td>
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
