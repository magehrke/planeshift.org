<!doctype html>
<html>
<head>
	<title>Potions for a Healer</title>

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
						<td>Potions for a Healer</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-Magical-Potions.php">Making Magical Potions</a> quest, Rank 30 Alchemy.</td>
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
							$npcName = 'Chired Idelall';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chired Idelall</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am told you can help me further study alchemy?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired looks you over and sizes you up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Hmmm…I remember you, dear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: You helped Liera with that cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I may be old, but I still remember the important things.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired feebly chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: So, it seems you are ready for the next phase of your training, hmm?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am excited to find what comes next.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Well, if you have become comfortable making affinity potions, the next phase is all about healing potions: those to heal, restore, and cure poisons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: There are three levels of potions one can make: lesser potions, regular potions, and greater potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Naturally, each has a different potency and requires different skills to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: As you would expect, a greater potion has the most effect but of course requires the most skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: So you'll start with lesser potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I can show you how to make a Lesser Potion of Healing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: How does that sound?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've always wondered how a healing potion is made.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired smiles warmly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Alright, once you have the materials, it's not that hard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I'll give you a quick demonstration, then give you a Healer's Remedies book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: First, much like the affinity potions, most of these are made from herbal components and an essence, except there's no mineral element.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: The essence is made from various animal parts combined with reagents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: In the case of a Lesser Potion of Healing, I'm going to take some cut Kingsfoil Leaf and combine it with a healing essence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's in a healing essence?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: A healing essence can be made with either an Arangma Egg Sac or a Trepor Egg Sac.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Utilizing a Trepor Egg Sac requires a bit more skill so start with the Arangma Egg Sac.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: You can only get these from the Forest Arangma, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: First let's cut these Kingsfoil Leaves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired grabs a handful of Kingsfoil Leaves and cuts them all at once.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Remember to consult your Herbal Remedies book for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Now we take an Arangma Egg Sac and pound it into a poultice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired grabs a nearby egg sac and shows a surprising amount of force as she uses a wooden mallet, hammering it into a fine paste.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Now, what do you think we mix this poultice with to make a healing essence?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: spirit</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Exactly, we combine the poultice with Spirit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired takes the poultice and combines it with Spirit on the table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: There, now we have a mix of Arangma Egg Sac Poultice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: As usual, we take mixes and heat them up on the stove.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired walks to the stove, takes a wooden stirrer and stirs the mix on the stove for a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Now we have two Healing Essences.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Next, we combine one with the cut Kingsfoil Leaf.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired combines the two on the table, then moves to the stove once again and heats up the raw potion, stirring it with an iron stirrer into a Lesser Potion of Healing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: And there we have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Get the idea, YOU?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I think I know all I need to know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Alright then, here is your book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired hands you a Healer's Remedies book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Give it a quick look-through and let me know if you have any questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: An interesting book, I will enjoy making these.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Very well then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Continue practicing and buying training from myself or Liera.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: After eighty lessons, Vladovic can train you, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Once you train with him, if you ever want to take your alchemy to the ultimate level, you might want to ask him if he has something special for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for all your help, Chired.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Good luck to you, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired gives a weak cough before giving you a wave.-</td>
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
						<td>Rewards: 1 Healer's Remedies book.</td>
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
