<!doctype html>
<html>
<head>
	<title>Ore and ore and ore</title>

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
						<td>Ore and ore and ore</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Basics-of-Mining.php">Basics of Mining</a> quest, [Way 1] 30 Ruby Crystal, 30 Sapphir Crystal, [Way 2] 36 Iron Ore, 4 Coal Lump, [Way 3] 25 Copper Ore, 10 Tin Ore, 15 Coal Lump, [Way 4] 25 Copper Ore, 25 Tin Ore.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, anything I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Yes there is actually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I often have urgent special orders for ores and gems, and I'm sure there are times I'll not be able to fill them in the time I promised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: If you help me with some of these you can keep all they pay for yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes ok, I like the sound of that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 4</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I have a rather large order for rubies and sapphires.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I would like you to deliver 30 of both to Levrus in the magic shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I think are technically for Niala but he takes all her order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Seems fine with it as well, if you can believe it...</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the ores you requested from Fholen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Levrus Dahrenn sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: ...</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: More gems being delivered for the so called Niala...</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If that is her name...</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I was told to tell you these are for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Levrus Dahrenn hands you what seem to be tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Good, right now I need you to gather 36 iron ores and 4 coal lumps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: For some reason Trasok over in Ojaveda sent a message requesting them from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I can't work out why someone closer wasn't asked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: But I won't complain, despite the payment being yours this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The mine I normally go to is just out side the city gates towards Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Just over the hills to the right as you pass to of the forest you should be able to find an iron and coal mine.</td>
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
						<td>YOU: I have the ores you requested from Fholen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thank you very much..</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: uh..</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I was hoping that Fholen would be as prompt with the delivery as he has been.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: These are the tria I promised him payment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fholen Medraa pulls out a note he was reading before you approached.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I have an order from Belcor in Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I need you to gather 25 copper ores, 10 tin ores, and 15 coal lumps and deliver them to kra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Apparently kra is trying to prepare a surprise dinner for someone and doesn't have enough supplies.</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						25 Copper Ore , 10 Tin Ore and 15 Coal Lump</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the ores and coal you requested from Fholen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Belcor Krakko seems to have just finished eating some coal.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Oh, hello...</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: Ores and coal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor: So payment, here you are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Belcor Krakko hand you some tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 4:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: So I just received an order from Harnquist who needs some ores to make some bronze stocks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: If you could get 25 tin and 25 copper and deliver them to him to fill the order that would be great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Oh, and that will all be a little heavy so be sure you can manage it if you try doing it in one trip.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						25 Copper Ore and 25 Tin Ore</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the ores you requested from Fholen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good, great..</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Just place them over there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Harnquist points to a spot just in front of him.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You proceed to place them where asked.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: These are you in payment for the ores.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then hands you some tria.-</td>
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
						<td>Rewards: 1 Level in Mining, [Way 1] 5130 Tria, [Way 2] 7310 Tria, [Way 3] 9922 Tria, [Way 4] 7310 Tria.</td>
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
