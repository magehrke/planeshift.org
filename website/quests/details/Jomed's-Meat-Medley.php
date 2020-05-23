<!doctype html>
<html>
<head>
	<title>Jomed's Meat Medley</title>

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
						<td>Jomed's Meat Medley</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-to-Cook.php">Learning to Cook</a> quest, Rank 10 Cooking.</td>
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
						<td>YOU: Hello again Jomed, I hear you need help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Hi, yes…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns round to face you with his hands full of some sort of meat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ye want ta help me experiment?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ha, great.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns back and stars hitting the meat with a mallet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says over his shoulder to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Allelia gets a nice flow of animal parts, not sure why she likes getting her hands so dirty.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Anyway, that means that if I can make some tasty recipes I can get a steady flow of ingredients.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you need help with then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: What I be needin' are fresh ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ta make sure I have the best items so I know exactly what these recipes a mine will taste like when done right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Last thing I want is ta work with something gone off or half chewed up by some beast and just trimmed ta look good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns round and places his mallet down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Don't want the food coming back up and ending in a bucket after spending time cooking it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what do you need first?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: With that there attitude I think you'll make a fine cook.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: So…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: What I need ye ta get is this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Five of them trepor wiggly feelers, five pieces of clacker meat and five clacker legs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Then I'll have some fun using some of this stuff ta go with ma recipes.</td>
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
					<tr class="quest_npc">
						<td>Jomed: Might even get ye to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So I got what you asked for, I think this stuff is still fresh enough.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed tosses a book at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Read that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I've wasted thirteen of these egg sacs trying to make the perfect omelette, but they all taste nasty.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then goes back to cooking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've had a look at it, now what?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: What I need is for ye ta make some items from the book for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I need ta work out how ta make this omelette taste better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: So, those clacker legs I asked ye ta get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I need you ta make some steamed clacker legs, should be in the book somewhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Then I'll make the omelette and then we, well you, will take it ta someone ta taste it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: This should be a great dish.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, I've made the clacker legs for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed dusts his hands off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Great, let me have a look.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed takes the food and examines it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: This is really good, it smells great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I've managed to make what I think is a great Omelette.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: When eaten with ye legs it should be even better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Here, I'd like ye ta take it ta Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: With everything he does in the arena I'm sure he will appreciate this..</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: lovely meal.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, this is from Jomed and I.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori seems annoyed with something as he turns and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: What…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the package and opens it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He immediately smiles as he smells the contents before he starts to eat with his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This is good, I really like these clacker legs, and it seems Jomed has been using his magic seasoning again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This isn't the first thing he has sent me, must know I get hungry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori picks up a scrap of paper and scribbles some notes on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: My thoughts on the food, for Jomed.</td>
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
						<td>YOU: Gregori gave me a list of his thoughts on the food.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed quickly takes the list and reads it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Umm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Nicely cooked legs and eggs, nice seasoning…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Uh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I would have said it was better than that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed tosses the note onto the grill.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: So just a few little things I'd like ye ta help me make and then I'm done for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Cooking this much is tiring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: It seems someone downstairs just asked for some Cheesy Succulent Stew and I guess ye can help, if ye want.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the skill to help with all of it, the recipe looks easy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Well in that case I challenge ye ta cook off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Are you willing?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
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
					<tr class="quest_you">
						<td>YOU: I think after the legs I'm done cooking for now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Well I guess I can do this all by myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thanks for your help cooking and carrying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Be sure to keep training with me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: If ye like, ye could go and check on Burdess Quirain near the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I should have a fish delivery from her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Maybe something is holding her up ye could help with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Then just keep practicin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Once ye are able to make both a Meat and Egg Omellete and a Wriggly Roll, ye might want to pop back over and see Archilaya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Eventually, she'll have another book for ye.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I accept your challenge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ok then, these are the rules.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Whoever makes the best Cheesy Succulent Stew wins.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns round and begins to make his dish.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1 Cheesy Succulent Stew</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed turns to face you looking rather confident.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Now let's see who made the best quality dish.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed begins to eat your dish and compare it against the one he made himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some time passes as he tries every bit and checks every ingredient.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: It tastes…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Very good, almost as good as mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: But mine is still clearly better.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed smiles proudly as he turns back the rest of his dish in the grill.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thank you very much for everything you have helped me with today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'm sure at some point I might have some more cooking you could help me with so check back some time later…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Now, for your help I would like you to keep the cooking book and for trying to beat me I would also like to give you some of my winning stew.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: If ye like, ye could go and check on Burdess Quirain near the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I should have a fish delivery from her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Maybe something is holding her up ye could help with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Then just keep practicin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Once ye are able to make both a Meat and Egg Omellete and a Wriggly Roll, ye might want to pop back over and see Archilaya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Eventually, she'll have another book for ye.</td>
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
						<td>Rewards: [Way 1] 1 Meat, 1 Stew Recipes, 20 Faction with Food Association, 3391 Tria, 12200 XP, [Way 2] 1 Meat, 1 Stew Recipes, 1 Cheesy Succulent Stew, 25 Faction with Food Association, 5130 Tria, 13600 XP.</td>
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
