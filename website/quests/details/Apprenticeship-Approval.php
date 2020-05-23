<!doctype html>
<html>
<head>
	<title>Apprenticeship Approval</title>

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
						<td>Apprenticeship Approval</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Apprenticeship-Test.php">Apprenticeship Test</a> quest, Rank 30 Cooking.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Rank 30 in Cooking is uncertain.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
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
						<td>YOU: Am I ready to become your apprentice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks at you with some hesitation, then smiles and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Yes, I think so, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But there's one more thing I need you to help me with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Do you think you are ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I am ready, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Good, then let us proceed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: The Vigesimi is throwing a big fish fry, but my supplies are starting to run low.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Your first task will not be cooking related, but to actually go get me some fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Now if you're not the fisher type, you can just buy some from someone you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: But if you have a fishing pole and some skill, it will be faster to just catch them yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'd need ten carp and five trout.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You can find them in the Irifon River, which you cross as you head back towards Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you catch any crayfish, orfe, or dace, I'd keep those in storage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You can make dishes with them with higher skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Return with the fish and we will continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your fish.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia stops stirring a pot and looks at the fish with some embarrasment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Sorry I had you do that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It looks like a good catch, but I with all this work I forgot I had a delivery due and it just came in while you were gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It's good though, you can use those fish for your next task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I need you to make Carp Delight and Trout Delight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'll give you a special cook book for preparing fish and walk you through the process if you like.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia gives you a new looking book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'd like you to make one Carp Delight and one Trout Delight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You should be able to figure out how to get ingredients and work a recipe by now but let me know if you need some help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Let's start with the Carp Delight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: This is for the Vigesimi, remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: So give me your best Carp Delight.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						1 Carp Delight</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks it over and sniffs a bit, looking pleased.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She takes a bite, chews it a bit and grins widely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Hey, this is really good, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You are coming along very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: And now the Trout Delight?</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						1 Trout Delight</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks it over and sniffs a bit, looking pleased.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She takes a bite, chews it a bit and grins widely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Hey, once again this is really good, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You are a very good cook.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I think you have more than met the requirements now for your apprenticeship.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You should now have four recipe books in all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Continue to go through them and try new recipes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That's the best way to keep getting better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything else I need to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'm sure by now you have met all the merchants who sell various ingredients and tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If not, it would help to know where to get everything you'll need to make any dish you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You may continue to get cooking training from me as well as baking training from Orchibaly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you for sharing your time with me and helping me with the Vigesimi's party.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I think they're going to like the Carp and Trout Delights.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: And take this tria for your efforts.</td>
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
						<td>Rewards: 1 Dishes with Fishes, 45 Faction with Food Association, 16411 Tria, 19200 XP.</td>
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
