<!doctype html>
<html>
<head>
	<title>Learn how to make a Broadsword</title>

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
						<td>Learn how to make a Broadsword</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Superior Sword Parchment, 4 Steel Stock, 3 Steel Ingots.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You will get the Superior Sword Parchment from the quest New sabre for Jecascis.</td>
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
							$npcName = 'Veja Pontor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Veja Pontor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I've found this book. Can you help me make a broadsword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I can help you with that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Shall we start now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: First of all you'll need 4 steel stock and 3 steel ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you have them heat them on the forge down there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja points at one of the forges near her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: and hammer them on the anvil down there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja points at an anvil.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you've done it all show me your results.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I'll wait for you before proceeding.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is the broadsword blade and handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Sorry, I can't see the blade and the handle as I asked you: put them in well sight on your hands so I can have a look.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is the broadsword blade and handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Good…</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: they seem to have come up well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Now you have to heat the blade and hammer it for another two times so you'll get a better shaped blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: At this point put it back in the forge and make it red hot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Be careful to not wait too much or you'll ruin all your work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you are done with it, just put it in the quench tank.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja points to the quench tank.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: So the blade loses temperature and, as last thing, sharpen it on the sharpening stone down there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja points to the sharpening stone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you've done it you'll obtain a rough broadsword blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Show it to me so I can check all is well and then I will explain you the rest of the procedure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Good Luck!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is the rough broadsword blade.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja nods at the sight of the blade.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Yes, that looks good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Now…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja takes a furrower out and shows it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: You have to use this on the blade you've made so you'll complete the blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you are done with it just assemble the handle with the blade and you'll obtain your well earned broadsword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: You can use that table to do the furrow and assembly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja points to a smith table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: When you are done just show your result to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is the broadsword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Let me have a look.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja inspects your broadsword.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: It seems ok…</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I've a proposal for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I just had an order for a broadsword and it must be done fast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Therefore, if you sell me that one, I will pay it well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I will sell you this broadsword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Thank you very much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Here take these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja gives you some circle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I hope you have learned how to make broadswords well!</td>
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
						<td>Rewards: 1 Furrower, 1 Faction with Enkidukai, 25000 Tria, 10000 XP.</td>
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
