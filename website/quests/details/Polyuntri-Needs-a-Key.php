<!doctype html>
<html>
<head>
	<title>Polyuntri Needs a Key</title>

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
						<td>Polyuntri Needs a Key</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Vaieund-and-a-Book-on-Octarch-Chess.php">Vaieund and a Book on Octarch Chess</a> quest, 1 Keyhandled Dagger.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Keyhandled Dagger from the Vaieund and a Book on Octarch Chess quest.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail, I am in search of a task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I have something I require, though it is of a personal nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You will have to do something for me to show your commitment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I have this box I found: it has an oddly shaped keyhole and I cannot find a key that fits it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: If you can find me the key, I may have another task for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Do you accept?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I accept.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Glad to see the world is not rife with the lazy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Return when you have found a key that might fit this box; there is a dagger carved in it if that helps you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: If you find the key, come and give it to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have found the key.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: This is an odd looking key indeed; praise Laanx, it just might work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Polyuntri tries the key on the box. It opens with a 'snick' sound.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Ah, good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: What do we have here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Looks like glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: We have two here: Light and Darkness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You may have the one you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Give me some time alone and come back later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I may have another job for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Thanks again.</td>
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
						<td>Rewards: 1 Light glyph, 1 Darkness glyph[OR].</td>
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
