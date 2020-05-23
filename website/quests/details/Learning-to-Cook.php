<!doctype html>
<html>
<head>
	<title>Learning to Cook</title>

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
						<td>Learning to Cook</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Archilayas-Daily-Delivery.php">Archilayas Daily Delivery</a> quest, 1 wooden spoon.</td>
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
							$npcName = 'Archilaya Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Archilaya Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kaiman said thanks for the bread. Can you teach me about cooking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Oh, I forgot to put a note for Jomed about that, didn't I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Well I'm glad you got it to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: And sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: My brother and I are both expert bakers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Cooking and baking skills are considered separate but are often practiced in tandem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: I can teach you to make some basic foods like bread and cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: As you practice and increase your skill, you'll find you can make more things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: So, ready to begin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Like any craft, whether it be cooking, baking, herbal, or even making weapons...the first thing you need to become familiar with is the ingredients used to make things, and the tools used to make them with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: So first, let's start with some of the tools you'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: The most common tool is a kitchen knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: If you're serious about making the most of your baking skill, I'd also suggest getting a circle cutter, rolling pin, scoop, spreader, and wooden spoon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You'll need different tools for different preparations so best to have them handy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get these tools?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: I sell most of what you need, but I'll give you some tools to start out with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: The next thing to become familiar with is the equipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Unlike tools, which you buy and keep yourself, equipment is available in kitchens or cooking and baking areas like this one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You should become familiar with the following pieces of equipment: the preparation table, oven, grill, mortar and pestle, iron skillet, and pots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Notice you can use the table beside me and there is another against the wall by the oven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Take a moment to check the area here, then come back and tell me when you are ready to continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found everything.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Next you'll need to know where to find various ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: In addition to some common items like apples which you can pick from trees, bread which you can buy from numerous merchants, or eggs you get from merchants or directly from kikiri, there are also more specific ingredients you'll need to buy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Examples of these are flour, salt, strimptor, and butter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: I sell most of them but for learning, I'll give you some to make what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: In addition to me, there are other merchants who sell such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Be sure to ask me about it later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Finally, you'll need a recipe book to know how to put it all together, which I'll give you shortly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: So, let's get started by picking a food item and I'll teach you how to make it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You have a choice of the following: baked apple, buttered bread, or sand cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Which do you want to try and make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to make Sand Cookies. Those aren't for Kran are they?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Ah my favourite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Oh...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd laughs playfully.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: No, they aren't actually -made- from sand, that's just the name.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You'll need a few items and tools for those which I'll give you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ooh, more tools?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Yes, the tools you'll need are a wooden spoon, rolling pin, and circle cutter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd grabs some utensils from a drawer and hands them to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Next, I'll give you your recipe book called "The Art of Baking".</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd smiles, then goes to a bookshelf and pulls down a small book and hands it to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Look it over and let me know when you're ready to continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm ready to continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Now that you have the tools and instructions, let's get to the ingredients.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd takes a scoop and measures several ingredients, putting them in a bowl.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Here is a scoop of flour, 3 scoops of strimptor, a pinch of salt, and 3 pats of butter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Take this and combine it on the table into a mix.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Show that to me and we will continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Now, at any point, if you think you can figure out the rest, you can skip ahead if you're up for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Otherwise, we can continue step by step.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Up to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made the mix.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Now take that mix, put it in the wooden bowl and stir it with your wooden spoon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: That will give you a good cookie dough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made the dough, what's next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Now comes the final few steps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: First take the dough and roll it on the table with your rolling pin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Once that's done, use the circle cutter to make unbaked sand cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Finally, put those into the oven and wait until they are done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Be sure to put them in separately, not all in one stack.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Let's see if you can do all of these things.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You show Archilaya the finished Sand Cookies.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Archilaya Gurpleferd grins widely and nods in approval.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Well done!</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: See?</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: It's not that hard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: That was a somewhat simple dish, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You can continue practicing making cookies, cutting apples, or slicing bread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: As you get more experienced you'll find more recipes you will be skilled enough to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Ah, there's all sorts of baked goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: At first you can make the items I mentioned: baked apples, buttered bread, and sand cookies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: As your skills increase, you'll be able to make many more things, like various types of breads and doughs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You can also make biscuits and spread various jams on bread.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can I make bread?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Once you get a little more experienced, you'll just need the right ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Bread requires some strimptor and powdered bread rise, which you can buy as an ingredient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: From there you add things like lard and salt to make a dough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Just study the book and it shouldn't be too hard to figure out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: The first time is always the most difficult.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I get the exact ingredients a recipe calls for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You can consult The Art of Baking book for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: For instance, a common tool used for measuring ingredients is a scoop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You can buy one from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: To get a scoop of strimptor, for example, get a sack of strimptor, and hold a scoop in your right hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: You should be able to get 5 scoops at a time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is strimptor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: It is a sweet, granular substance which is soluble in water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: It is what gives things like cookies and pies their sweet taste.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why do I need to train both cooking and baking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Mmm, very good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: They are separate skills but very much intertwined.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: There are other recipe books you can get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: There is the meat and stews book you can get from Jomed Parcen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: My brother will teach you about The Pastry Chef Book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: And there is one other involving fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: In each book, some recipes depend more on baking and some more on cooking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Sometimes, even though a final dish falls into one category or the other, making some intermediate items may require the other skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: I'll train you for some time on baking and once I can train you no more in cooking, it will be time to see Jomed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: He is in the kitchen on the second floor of Kada-El's.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for the information, I don't have any more questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Good luck to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Remember, just practice with the simple stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Something as simple as slicing apples or bread with your kitchen knife will help you progress in the beginning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Then keep checking your book and trying new things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: The more complex the dish, the more practice and experience you will get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Once you can make dashes of powdered bread rise, check in with Jomed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya Gurpleferd: Down the road, you might want to start an apprenticeship with Reffitia in Ojaveda.</td>
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
						<td>Rewards: 1 The Art of Baking, 1 Circle Cutter, 1 Rolling Pin, 3 Level in Baking, 3 Level in Cooking, 10 Faction with Food Association, 12200 XP.</td>
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
