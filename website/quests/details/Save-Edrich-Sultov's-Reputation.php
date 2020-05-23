<!doctype html>
<html>
<head>
	<title>Save Edrich Sultov's Reputation</title>

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
						<td>Save Edrich Sultov's Reputation</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 5 Sabres.</td>
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
							$npcName = 'Edrich Sultov';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Edrich Sultov</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I'm looking for some work?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: My oh my, it is as though Laanx actually heard my prayers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Yes StoneBreaker, I definitely have a quest for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: My last transport got mugged… and I never get mugged!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Now I'm bound to have displeased customers and that's bad for business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Will you help me to retrieve the goods?</td>
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
						<td>Edrich: Thank you, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: The muggers stole five sabres I was sending to the Hydlaa Guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I will give you something worth your trouble if you can replace all five in a hurry.</td>
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
							$npcName = 'Edrich Sultov';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Edrich Sultov</a>";
						?>
						5 sabres</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Now I don't need to worry about angry customers anymore!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Take this glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: There doesn't seem to be much call for this type of glyph, but don't think I'm just pushing it on you; think of it as helping the both of us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: And of course, some tria for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I wonder whatever happened to the muggers?</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Oh, well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I'm sure they'll get what's coming to them.</td>
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
