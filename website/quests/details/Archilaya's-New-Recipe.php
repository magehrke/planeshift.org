<!doctype html>
<html>
<head>
	<title>Archilaya's New Recipe</title>

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
						<td>Archilaya's New Recipe</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/a_brand_new_knife_for_burdess.php">a_brand_new_knife_for_burdess</a> quest.</td>
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
						<td>YOU: Kaiman says thanks and I am ready to learn more about cooking.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Welcome back, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya gives you a radiant smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I guess I could have something for you to do, if you are up to a trip to my brother in Ojaveda. Are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will leave at once, what do you need from your brother?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: What a kind heart you have, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: My brother Orchibaly sent word that he has perfected his new rye bread recipe; could you go to him and ask him for the recipe?</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: He is very protective of it, so give this to him when he asks for proof that I sent you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya removes an amulet from around her neck.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: It is very important to me, so please return it to me with the recipe.</td>
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
							$npcName = 'Orchibaly Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orchibaly Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Fresh baked bread! Fresh baked pies! Fresh baked water…oh my, scratch that last one. Water pouches to quench your thirst! Yes, that's better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please tell me what you use in your recipes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly laughs out loud.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Yes, I have plenty of recipes: recipes I have spent a lot of hours perfecting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Unless you have been sent by someone special and can prove it, I will have to say…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly Gurpleferd looks up at the ceiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Wait for it…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Orchibaly looks at the door then back at you with a big, goofy grin.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: A baker never gives up his secrets to anyone but family.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent by your sister, she gave me this amulet as proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Oh, excuse my rudeness, but my recipes are my life and one must protect one's livelihood.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly wipes his floury hands on his apron and plucks a parchment from one of his pockets.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Please Sir, I know my sister trusted you enough to hand you her amulet, but be careful with my recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: It is meant for only Archilaya's eyes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: You never know what could happen if it falls in the wrong hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: With rye bread of this quality you could…</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: well, you could take over the realm!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly gives a wink and hands you the sealed parchment and amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Don't go trying to read it, now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: It is in the secret Gurpleferd family code.</td>
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
						<td>YOU: I have received the recipe from your brother.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You have returned.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya beams as she reinstates her amulet to its rightful place around her neck.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Did I not tell you how secretive and overprotective he was over his precious recipes?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya smiles as she shakes her head and breaks the seal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: This is his secret, perfect rye bread recipe?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya nods her head in thought as she hands you some tria for your efforts.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I have an idea for a prank, because I know how I can improve on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: If you are up to it I will add the ingredient to the recipe when I bake it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Then we can give him the bread made with the new improvement, and let him think you made it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Are you willing to do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like a great idea, I'm in.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya claps her hands together in excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: This will be fun!</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: My brother is a good person, but he thinks he is the be all and end all when it comes to bread making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Please return back here to me in …</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: let's say one hour from now and ask me for the improved rye bread.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is the bread ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: You have arrived just in time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya removes the baked bread from the oven and hands it over to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Please deliver this to my brother right away, as it is best while fresh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Archilaya grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: Get him to taste it, then if he asks, tell him that you made it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Archilaya: I will see him tonight at our family dinner to see his reaction to a stranger out-baking him.</td>
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
							$npcName = 'Orchibaly Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orchibaly Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please take this bread.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: No no, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I normally sell the bread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I do not buy the bread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Were I to do both, I would be out of my head.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly says with a smile at his rhyme.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Or is there something you want me to do with it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like you to taste this bread.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I can do that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly smiles proudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I get people approaching me all the time to help them improve their baking skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I am the breadmaster, of course, of course.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A puff of steam escapes from the bread as Orchibaly breaks it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: What a beautiful sweet aroma.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly tastes a piece of the bread with a look of satisfaction that soon turns into concern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: If I may ask, Sir, who baked this lovely bread?</td>
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
						<td>YOU: I baked it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Sir, you are an excellent baker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I thought I was the best bread maker around until you proved me wrong.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly closes his eyes and speaks dramatically to the ceiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Woe and turmoil has befallen this poor baker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I have been bested by a mighty foe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I am no longer good enough for the title of breadmaster!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly opens one eye to see if you are watching, and a grin quirks at the corner of his mouth. He stops and smiles widely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Baking is not my only skill, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: We Gurpleferds are quite the entertainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Anyway, please accept this as payment for the opportunity to taste the bread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I hope you might share your knowledge with me someday.</td>
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
						<td>YOU: Your sister baked the bread.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly frown fades in relief and he shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: That sister of mine knows how to pull my strings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: For a moment there, I thought I had to shut up shop and start travelling again in search of more recipes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Sir, for lessening the blow of my sister's prank I offer you this reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly hands you some tria then takes a book off a shelf and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: This will help expand your baking and cooking skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: In it you will learn to make many new baked goods, like biscuits and pies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: For instance, you can make Sweet Cinnamon Apple Slices with about twenty lessons in cooking and Filling Apple Pie with about twenty lessons in baking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: So again, continue to practice both cooking and baking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: With this book you'll have many more choices now.</td>
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
						<td>Rewards: [Way 1] 35 Faction with Food Association, 5130 Tria, 13600 XP, [Way 2] 1 The Pastry Chef Book, 1 Faction with Food Association, 7310 Tria, 15000 XP.</td>
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
