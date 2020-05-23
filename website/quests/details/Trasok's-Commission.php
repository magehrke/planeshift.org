<!doctype html>
<html>
<head>
	<title>Trasok's Commission</title>

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
						<td>Trasok's Commission</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest, Rank 15 Shield making, 1 Ulbernaut Heart, 20 Gold Ingots, 3 Steel Stocks, 14 Bronze Spikes, 1 Beer.</td>
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
						<td>YOU: Hello Trasok, you look quite busy. Anything I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Aye, aye…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I look busy, indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Look, I've got this commission from Lord Iragdun.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: He wants a new shield for him, an' replacements for his guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: But…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok sighs deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I don't have enough materials an' I'm way too busy to leave the smith shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can ye please help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: This is what I'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It's a sizable list so ya might want ta write it down.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok stops working for a moment and starts reading a list of items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: An ulbernaut heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Twenty ingots of gold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Three stocks of steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Fourteen bronze shield spikes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, and a beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok chuckles and smiles at YOU under his beard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One ulbernaut heart. It wasn't an easy thing to come by.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I know, I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: But I need it to make some special steel.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok uses his hand to extract the blood from the heart, pouring it into a small furnace with some kind of molten metal, stirring it afterwards.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It does look tasty, doesn't it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok gives a rumbling laughter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, the gold ingots. What do you need those for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, I was short on gold an' I need to make some edgings out of these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Actually, I think I'm a bit short on everything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok stands on his toetips and smirks, winking at YOU.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The steel stocks. These were the easiest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Aye, weren't they?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Steel is something everyone can get easily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: And very versatile, it can be used for armor, weapons, an' shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: For now, I'll use it for some shield shapes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Anything left?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The bronze spikes, pretty pointy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ow!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok pulls his hand back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Indeed they're pointy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I think these will do well enough, aye.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok puts the spikes away in a safe place.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Is that all?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah of course, here's your beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I thought ye might've forgotten.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok takes the mug and takes a good long sip, wiping the foam from his beard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You've done well, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: So well, I think I'll share some of my crafting books with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'm pretty sure you'll enjoy them as much as I do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok hands you a stack of books and some coins.-</td>
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
						<td>Rewards: 1 Five-Spiked Shield Diagram, 1 Enforcer Shield Diagram, 1 Golden Shield Diagram, 15 Faction with Crafting Association, 2107 Tria, 10800 XP.</td>
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
