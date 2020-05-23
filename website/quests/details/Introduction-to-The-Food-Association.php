<!doctype html>
<html>
<head>
	<title>Introduction to The Food Association</title>

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
						<td>Introduction to The Food Association</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 12 Night Mushrooms.</td>
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
						<td>YOU: A friend sent me to you to learn more about food services here in town. Do you mind if I ask you about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Hi, and nice to meet ye!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ye came to the right place, this is the hearth of Hydlaa and the best place to get information about the food association in town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'm Jomed, the cook here at Kada-El's tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I am passionate about my work and am always open to discuss it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, great. You spoke about an association, is that like a guild?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Yes, kind of.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He reaches for a jar and smells it-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Let's say that is very common in Hydlaa to help the people who are doing the same kind of job as you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: It's not a very formal guild, but pretty much all members of the same field know each other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: The same goes for other arts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Anyway if you want to know more just let me know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please tell me more about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: The are a lot of beautiful professions!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Have you ever dreamed of working in a brewery and selecting the finest ingredients to create different beverages every month?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Or to fish in rivers and lakes of the land by becoming an expert fisher?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Or maybe work with Mother Nature herself, and be a farmer?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I have plenty of friends who are butchers as well, but surely the best friend to have is a bartender!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, I thought cook was the best one. [You smile.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Eh, surely it is, because it's the one where ye can really combine all the ingredients, it's not exactly like being an alchemist, but pretty close!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: With the difference, I try not to make anything explode.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Should I choose one job and focus on it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Eh, is not that easy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ye cannot just start in one job without knowing who can help ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: If ye really want to get started I suggest ye to do a small job for me first, and then come to know some of the other people in town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: The more ye help our association, the more opportunities ye will have to get into yer own business in it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Depends, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Well, I got just the thing for ye, if you've got two sturdy legs and a good eye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Bring me a dozen night mushrooms, and I'll give you a dozen coins, how's that sound?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Will ye do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will do it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ah good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: A place to look for 'em is out by that magic-fellow's place in the forest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Try not to get the really old ones, they'll not be of much use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: To reach that place ye should exit from the northern exit of the city, and then turn right in the forest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Keep yer eyes open, ye might even find some along the way.</td>
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
						<td>YOU: I got all the mushrooms you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thank ye.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed sets the mushrooms on a table and sorts through them. He weeds out a pair that are a bit past their prime and tosses them in to a barrel half-filled with other food scraps. He puts the remaining good mushrooms into a sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Maybe I could ask ye to do a little favor for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: This bag of mushrooms, they are for Sharven over to the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I was goin' to run them over meself, but them downstairs have got me tied to the grill now and I ain't goin' to make it over to the temple any time soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Oops, can't let those burn!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns quickly to the grill and tends to some cooking meat, calling 'will ye do it for me?' over his shoulder.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Very kind of ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Just tell him I sent ye, and give him the sack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Should be easy, long as he's not busy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed wipes his hands on a rag and picks up the sack to tie it closed. He gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Come back to see me after and I'll give ye your coins.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jomed Parcen sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, yes, a good man, Jomed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I hope it's about those night mushrooms.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes it is, these are for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven opens the sack and looks inside. He smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We have been needing these for prayer rituals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Please tell Jomed that I said thank you, and give him this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven gives you a small aromatic candle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: May Laanx frighten the shadow from your path.</td>
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
						<td>YOU: Sharven says thank you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ah, ye're back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: That's good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I expect he gave ye somethin' in return to bring me, did he not?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, he did.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Let's have it here, if ye please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed holds out his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the candle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ah, that's it indeed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed lifts the candle to his nose and breathes in deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Mmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: That's Landas!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Hard to find any Landas mushrooms hereabouts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Not like the night mushrooms, but I guess with the grace of the gods, it all works out, eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed places the candle on a shelf and takes a few coins out of a box under the counter. He pauses and then sets a wooden spoon by the coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: There.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I ended up with more of them spoons than I was needin', so go ahead and take it wi' those coins, it's all for helping me with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Oh, I remember Allelia was in need of something, can you please check with her if you haven't already?.</td>
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
						<td>Rewards: 1 Wooden Spoon, 5 Faction with Food Association, 1297 Tria, 8000 XP.</td>
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
