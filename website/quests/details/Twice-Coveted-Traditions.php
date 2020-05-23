<!doctype html>
<html>
<head>
	<title>Twice Coveted Traditions</title>

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
						<td>Twice Coveted Traditions</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Coveted-Traditions.php">Coveted Traditions</a> quest, Complete Relliom's quest by giving the Jade Enkidukai Figurine to Hirenn.</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there something else I can do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I must say I am slightly disappointed in your actions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Not at all what I expected.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: But in light of my forgiving nature, I feel moved to offer you another chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Do you wish to accept my kindness?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom smiles, a slight flare around his cold eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Edrich Sultov has another figurine I need delivered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Go and tell him you are there to pick up that delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I know what you did with that item last time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I trust your judgment to be in line with my will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The birds will surely sing if you please me.</td>
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
						<td>YOU: I was sent to pick the delivery.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Edrich nods in understanding.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It is odd that another figurine arrived for Relliom so soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It was rushed to me just moments before you came.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: There must be a lot of those Enkidukai ceremonies going on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Please take it to Hirenn Darmeth in Ojaveda again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Edrich pauses, looking uncertain.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Ervin Fromaad dropped by not too long ago as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: He doubled his offer if I could get him one of those figurines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: But I am an honest man.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: I am sure you are just as honest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It seems Relliom almost always sends a new face every time he wants one of these sent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: It makes me wonder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Never mind me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Just a touch fretful paranoid, I suppose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Be careful on your way to Ojaveda.</td>
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
							$npcName = 'Ervin Fromaad';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ervin Fromaad</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Ervin the jade enkidukai figurine.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ervin drops the figurine unceremoniously in a pocket.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: I seem to be short of tria today, but I think this should more than cover the expenses.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ervin smirks and hands you a familiar-looking note.-</td>
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
						<td>Rewards: 1 Bird Note, 20 Faction with Cabal of Whispers, 12200 XP.</td>
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
