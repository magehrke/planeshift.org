<!doctype html>
<html>
<head>
	<title>Introduction to Crafting</title>

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
						<td>Introduction to Crafting</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day sir. I have a friend's letter which tells me you are the person to ask about crafting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Oh, greetings!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I don't remember your face, so you must be new in town!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Welcome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If your friend spoke about me, then he surely is knowledgeable about our city, Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm the main point of contact for everyone interested in approaching the beautiful art of crafting, a fine art with plenty of possibilities!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now me, I'm a blacksmith and I can say …</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: quite an expert.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist smiles-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Some of my weapons have been used by very famous people, like the vigesimi and the most honorable guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Anyway if you want to know more, just tell me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, please tell me a bit more about crafting in general.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good to hear you are interested, I guess it's definitely for my speech …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist laughs-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: well, usually I don't speak too much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Having a shop in the main plaza of the city has his drawbacks, too much work!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Coming back to your question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: All the crafters of the city are somehow friends and we try to support each other, sharing lore, clients, materials, and even with some financial support at times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The more people you will get in contact with and become friend of in the crafting association, the more you will get discounts on our goods and you will have access to our knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Many will be interested in teaching you our art, and you can then find yourself making money and learning a job!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: What's better than this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: More crafting!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, now that's music for my ears.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: To become a good crafter you need strong arms, a bit of precision in your hands, some memory and creativity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can point you to the right people for starting your crafting journey.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Alright, if you want to learn more about becoming a Smith or anyway learning how to craft weapons, it's best to help me in my job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can give you all the information needed, or direct you to the right people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you want to become a more generic crafter or just help more our association, then you should speak with Nalri Grimtorr, I remember she was in need of something, but I coudn't help her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now I really have to go back to work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Farewell.</td>
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
						<td>Rewards: 5 Faction with Crafting Association, 8000 XP.</td>
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
