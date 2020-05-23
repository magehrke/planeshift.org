<!doctype html>
<html>
<head>
	<title>Road to Master Cook Chapter Four</title>

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
						<td>Road to Master Cook Chapter Four</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Road-to-Master-Cook-Chapter-Three.php">Road to Master Cook Chapter Three</a> quest, 1 Potion of Restoration.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything I can do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Of course YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: What we need now is more world famous recipes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: My father had a friend who's name was Tzeg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Tzeg was an alchemist, but he made one heck of a dish called Steamed Pepperberries.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: It was sweet and spicy all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Please get me the recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I believe he had a shop in Ojaveda…Dsar Akkaio if I recall correctly, so it should still be accessible.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for a recipe for steamed pepperberries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: So…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: you want the recipe for my mentor's famous Pepperberries?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I'm not going to give the last thing I have from him apart from this shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Unless…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: unless you get me a Potion of Restoration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Then it's yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But I worry not…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: you will never get your hands on that anyway.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands over the potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well I'll be a sack of dead yauths…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: you found it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I've spent ages looking for this one potion!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well, a promise is a promise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Here you go…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: the recipe for Steamed Pepperberries.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got the recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That took you longer than expected, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: But not to worry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I'm sooo happy that you got it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I can't believe the new recipes I am coming up with, and they are all so tasty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I am so excited.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Here, your well earned reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: And take this one, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I used to use it to make fire, but bought something more effective recently!</td>
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
						<td>Rewards: 1 Fire glyph, 30 Faction with Food Association, 7310 Tria, 15000 XP.</td>
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
