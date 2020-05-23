<!doctype html>
<html>
<head>
	<title>Rats and Recipes</title>

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
						<td>Rats and Recipes</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Rat Hides, 10 Carrots, 5 Clacker Meats, 1 Tefusang Tooth.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look troubled, is there anything I can do to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh I could not bother you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It's my problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: None of your concern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Unless you really want to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No no, I really would like to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Bless you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia lowers her greying ears slightly and looks at you with pleading eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you really do want to help me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: no, no. It is too much of an imposition.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia mumbles to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I am in so much trouble…</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh, I must.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I am desperate; these rats have broken into the tavern's food storage cellar, and Brado told me to handle it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But- well, there are reasons I was not able to get it taken care of right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But he'll soon find that I have not handled it properly and there will be a new cook here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Please, can you try to find ten rat hides?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you give them to Brado and tell him that I caught the rats, that will give me time to get things done properly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I just need a little time yes, some more time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia quickly turns to a simmering pot of stew and stirs it quickly, leaning over to sniff at the steaming scents before looking back at you and continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you can find the ones near the cellar door, all the better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Will you do it, oh kind Madam?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Will you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Consider your woes solved!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It warms my heart to see someone so helpful to a kind old woman with too much work on her paws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: May Talad light your path and hasten your feet!</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here. These are for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Er, hello.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: What are these for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Reffitia sent me to bring them to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I was starting to wonder how much of our stores were going to be eaten by those vermin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado starts cleaning a mug with a cloth as he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Please thank her for me.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brado sends his thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh, thank you, my kind Stonehammer, but I am still in deep trouble…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sighs as she flips slices of meat on the grill.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I need to make three different stews here for a special dinner and the rats have eaten or spoiled some of the things I need for one of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If I do not get the ingredients back soon, then Brado will know I messed up again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I have already used up his patience, I am certain.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks over a recipe she has tacked to the wall.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Please, if I can ask one more thing of you, I need ten carrots, five pieces of clacker meat and a tefusang tooth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Can you get those items for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I don't have anything else to do for a bit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It warms my heart to see someone so helpful to a kind old woman with too much work on her paws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: May Talad light your path and hasten your feet!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your carrots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Goodness, you have not forgotten me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia quickly slices the carrots into small discs with practiced movements and adds them to a steaming pot of broth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Could you now pass me the five pieces of clacker meat?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the clacker meat, nice and lean</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Good, good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia inspects the meat, sniffing at it and taking it to a cutting board for cleaning and dicing. She adds it to the same pot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The tooth of one tefusang, as ordered.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sets the tooth into a large stone mortar and pounds it determinedly with the pestle until the tooth is crumbled to a fine powder.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: There, the stew is coming to a nice boil.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sniffs around the edges of the pot and then stirs in the tooth powder. She takes a small sample with a spoon and tastes it before smiling broadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Ah, it's delicious!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Refittia's tail swings happily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You have been so kind to help save me today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Please, let me give you these coins, and a gourd of this stew, I know we can spare one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia seals up some of the stew in a gourd and seals it with a wooden stopper. She gives it to you along with some coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you again, and may your path be lit!</td>
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
						<td>Rewards: 1 Reffitia's Savory Stew, 15 Faction with Enkidukai, 2107 Tria, 10800 XP.</td>
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
