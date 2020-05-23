<!doctype html>
<html>
<head>
	<title>Getting to know Mirra</title>

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
						<td>Getting to know Mirra</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Helping-Mirra.php">Helping Mirra</a> quest.</td>
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
						<td>YOU: Hi Mirra, why do you look so down?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I may be a world famous cook as I have stated in the past.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: However, all I make tends to involve apples.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: If you want something with apples, I'm your cook.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Every time I try to cook something else, whether it be meat or vegetables, it turns out to be a disaster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I want to be a master cook and cook with other foods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: My father was a master cook and EVERYONE loved him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: He could cook anything and it would taste wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: If only I could follow in his footsteps!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Would you help me out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You would?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Oh that is wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Let's get started on our long road to becoming a master cook then!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I'd like to gather some world famous recipes to try!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Let's start of with 'Caramel of Kada El'!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The tavern's cook should have it.</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for the Caramel of Kada El recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Aye, ye be talking about me World Famous 'Caramel of Kada El'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's correct.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Aye, it is bein' time to make me recipe public.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'll give yeh it for a smile an, oh let's be callin' it fifty tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Is that fair?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like a fair price.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Aye, I'll no' be cheating ye for me recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: All ye need do is pay fer it, and I'll be handin' it over to yeh.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You pays Jomed the tria.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thank yeh, I be a man o' me word, here it be, the recipe for me 'Caramel of Kada El'</td>
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
						<td>YOU: YOU gives Mirra the recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Hooray!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That's it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I must try this out at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I will be busy for some time with all those recipes, but surely there's more for us to do in the future, come to visit me again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Take these as a reward.</td>
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
						<td>Rewards: 25 Faction with Food Association, 5130 Tria, 13600 XP.</td>
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
