<!doctype html>
<html>
<head>
	<title>Introduction to Special Metals</title>

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
						<td>Introduction to Special Metals</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-a-Metal-Stock.php">Making a Metal Stock</a> quest.</td>
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
						<td>YOU: What other kinds of metals can be used to craft things?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, that's a good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I take it you are familiar with making steel now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Yes, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Easy stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: If you are interested in knowing more, I can teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: However, I'm a business man, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You might end up being a competitor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Give me 50 tria and we'll continue with a nice little lesson in special metals, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I guess it's worth it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good, hand it over and we'll begin.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						50 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Trasok 50 tria.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: We'll start with a very simple test of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Sticking with steel, what two minerals is steel made from?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to enter the words "Iron Coal".</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Iron Coal</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I knew you were a good student!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The combination is known as an alloy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The metals as you know them today can be used as ingredients to greater metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The steel made of iron and coal is just the beginning in creating very special alloys.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: We have researched for years on how to make special metals by combining the ones we know of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: And we have made much progress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Have you spoken with that Nolthrir girl in the Hydlaa winch area?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, I've been meaning to do that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The lass contacted me about alloys but never followed up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It peaked my curiosity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Perhaps it's worth looking into.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: After that, for the next phase of your lesson, I'm going to send you to an expert in the field.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Gardr Keck is the smithy in the Kran city of Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Tell kra I sent you and ask about special metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Kra does not easily trust so tell kra we need special weapons to face the invasions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: That should get kras attention.</td>
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
						<td>Rewards: 30 Faction with Smith Association, 7310 Tria, 15000 XP.</td>
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
