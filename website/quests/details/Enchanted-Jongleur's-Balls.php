<!doctype html>
<html>
<head>
	<title>Enchanted Jongleur's Balls</title>

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
						<td>Enchanted Jongleur's Balls</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Arts.php">Introduction to Arts</a> quest.</td>
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
							$npcName = 'Serevim Colat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Serevim Colat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I was wondering if you had any simple jobs that needed doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Dahlia is looking to add fire and ice to our street show.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim holds four small balls out in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Think you could get some magic into them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Preferably fire and ice magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sure, I can get that done for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim gives you the four balls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Bring them back to me once you have enchanted them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: I think Levrus maybe able to help you with it.</td>
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
						<td>YOU: Hello, I was wondering if you could enchant some balls for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You're looking to get some magic into a few balls, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, let's have a look at them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, show me, throw me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Looking to get some magic into these things…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: fire and ice magic?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This I can do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But there are always little quirks that come up as I do such things.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus rummages around behind the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, this one should do nicely.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus lays a scroll out on the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ok, I have a way to do this for you but you have reminded of a few of Dilechi's confounded riddles, if you help me I will help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now let's see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: here is the first one: which is better, fire or ice?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Any ideas?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A balance of the two.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: All things in balance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus reads the next section.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, which is stronger, fire or ice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Neither.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Fire will melt ice, and ice will extinguish fire.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus advances the scroll and studies the next section. He lifts his head and looks at you for a long moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This one seems to be a bit tricky. If a candle is lit in an empty room and no one sees it, does it still cast a light?</td>
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
						<td>-Levrus laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I am beginning to think that one does not really have a good answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But it has been nagging at me for a while, an odd question that one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus sets the balls in a small bowl and arranges two fire and two ice glyphs around the it. He frowns mightily at them and passes his hand over the bowl. The balls seem to shimmer in a haze of heat and then hide behind a haze of fog. Levrus makes a 'harrumph' sound and waves his hands quickly at the balls, dispersing the fog. He cautiously pokes at one with a finger. He nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They are ready now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But they will cost you one hundred Tria, my good Stonehammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, there are command words to make these balls do their tricks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The magic words 'hinotepa' and 'avhinote' will start and stop the fire magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And 'kooripa' and 'avkoori' will begin and end the ice effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The balls will leave a small trail for a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It should look nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Nice ice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus chuckles at his joke gives you the enchanted balls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Serevim Colat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Serevim Colat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, four enchanted balls.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Let's see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim starts juggling one of the balls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: What is the magic phrase for the fire?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hinotepa</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Hinotepa!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The ball leaves a fire trail in its path.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: And for ice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: kooripa</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim starts juggling a second ball.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Kooripa!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The second ball leaves a trail of ice. Small clouds of steam surround the two balls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Now, how do I make them stop?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: avhinote and avkoori</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Avkoori!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Avhinote!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Ah, yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim adds the remaining two balls to the rhythm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Hinotepa!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Kooripa!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Hinotepa!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Kooripa!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim starts juggling the balls in an increasingly complex patterns of fire and ice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Yes, very nice!</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: Let me give you some coin, these are excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim juggles the four balls in his one hand while getting the some Octa for you from his purse with the other.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Serevim: If you are interested in learning more about being an artist, you might try the hairdresser over near the library.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Serevim juggles the four balls in even more complex patterns with delight.-</td>
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
						<td>Rewards: 10 Faction with Artists Association, 1297 Tria, 9400 XP.</td>
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
