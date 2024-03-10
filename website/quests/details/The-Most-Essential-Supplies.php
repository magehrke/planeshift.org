<!doctype html>
<html>
<head>
	<title>The Most Essential Supplies</title>

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
						<td>The Most Essential Supplies</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 10 Brewing.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: you are requested to brew different drinks for different acceptors</td>
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
						<td>YOU: I smell hops and fermenting fruit, and it reminds me of a brewery. Any particular reason for that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: Ha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: I like you, random stranger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: I am Edrich Sultov, and as you can smell I've been visiting brewers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: I'm looking to set up trade routes to transport various libations, and I'm still looking for suppliers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: If you do any brewing yourself - and I suspect you do from your fine sense of smell, person-with-no-name - I have an offer for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's ME, Edrich, and I don't object to the thought of earning some tria. What do you have in mind?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: It's quite simple, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: I've set up some customers already, and if you can produce the various kegs and barrels they require you can keep all but the advance deposit they have already paid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: You brew the brews, take the lovely little things to their new homes, and pocket the tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: Sound fair?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It does indeed. What orders currently need filling?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: One of our more respected residents has put in an order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: Grimal Bloodaxe wants two beer kegs each of lager, stout, and bitter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: You know who he is, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich Sultov: Make sure he gets the good stuff.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Edrich Sultov sent me to deliver these kegs of beer. I have two lager, two stout, and two bitter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: Ah, that's a good kid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: Roll those up here and let me get your pay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe pulls out a pouch of tria and tosses it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: Not all for me, if yer wondering.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: This will be heading out to the Sunshine Squadron shortly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: Well, most of it will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe pulls out one of the barrels of stout and begins searching his pockets for a tap.</td>
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
						<td>Rewards: 1 Level in Brewing.</td>
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
