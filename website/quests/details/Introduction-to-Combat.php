<!doctype html>
<html>
<head>
	<title>Introduction to Combat</title>

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
						<td>Introduction to Combat</td>
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
						<td>YOU: I want to hone my skills in fighting. Can you help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald is sorting through some papers then looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Hmmpf, let me guess, you want to become some great warrior?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: That's what everyone wants when they come here to the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I don't have time to...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His expression changes a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Ah well, sure, I suppose I could spare a few minutes and give you some advice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is the best way to get started?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes, that's a common question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The invasions, in particular, have people on alert.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Many are practicing skills to defend our land from the creatures coming through the Stone Labyrinths, but it can be difficult to get started when you have nothing to start with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The key is to set small goals and reach them one by one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: For instance, you're going to need to buy the equipment you need for a specific skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Hopefully you were given a weapon and some other things on your way into Hydlaa, at our welcome area, as a bit of a head start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I got a weapon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Harnquist also has a small collection of weapons he sells, but you can also use your fists if melee is more your style.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I might even help you learn more about unarmed fighting eventually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: For now, there is a guard by the plaza at the Winch gates named Percival; he will train you in melee and in using a sword as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I improve a skill?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: By practicing it, as simple as that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To begin with, there are several categories of weapons and you need different weapons to get better in the different skills, but I'd recommend you start with one and get good at it and then, if you want to go back and try something else, you can go back to the others any time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: There's swords, knives and daggers, axes, maces and hammers, polearms and spears, along with melee.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Oh, there are ranged weapons too, such as bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Pick your favourite weapon type and train it for a while, but don't forget defensive skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You can practice various types of armour as well as shield handling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: As you practice using a weapon or armour you will become better with it, the more you practice the better you will become.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's a lot of training.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: When you're just learning the basics it won't take long to get better, but it does take longer the better you want to get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If I were you, I'd start with the training dummies they have set up here in the arena to get a feel for how a weapon swings, and then I'd take on rats, though watch out for the diseased ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You'd need some potions ready in case you, well, in case you catch something from them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: There are rats here at the arena as well as in the Hydlaa sewers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald leans forward as though to tell you a secret.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The benefit of taking on opponents like rats instead of just working with training dummies is loot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You can sell animal parts and accumulate tria that way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I sell them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Here in the arena, there is a vendor in the outer halls, Liera Zireti.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: She buys animal parts and uses them for those potions she makes, don't ask me how.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Animal hides are a separate matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Those are often used in leathermaking, so you can ask around and test the open market and then you might get even more tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Oh, and in Hydlaa, the barkeep at Kada-El's tavern also buys animal parts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The barkeep buys animal parts?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: That's right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Think about it; where's the first place a hunter will go after a long day in the wilderness?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The tavern for some refreshments, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So it became practical for the bartenders to buy animal parts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And where can I get a shield?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You could get one from Harnquist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: He almost always has a selection of them for sale.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And how, exactly, do you practice armour?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald chuckles a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well, you don't train the armour itself, of course, you just train your ability to fight while wearing it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Leather armour is the lightest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Next is medium weight armour like chain mail and finally there's heavy plate armour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The heavier the armour, the more strength it will take to wear it, so I'd start with leather armour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You can buy a set at the Emporium, which is a small stand up the stairs by the Windowless Tower at the North gates.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I get work as a hunter or fighter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Quite likely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: There is a Ynnwn who came here and she was looking for help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: She said she needed a skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I think she is an artist and lives near the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: After that, Ojaveda is a good place to be and there is usually someone looking for hunters to hunt hides for them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Once you are skilled enough, maybe you can try and help with their rogue problem too.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are there organizations related to hunting or fighting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: A few, for sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Right here in the arena, you'll find mercenaries and gladiators.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: There are also the Dlayo gladiators, an elite group of Klyros fighters, but I am sure you will learn more about them elsewhere in time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are there other arenas like this one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes, there are arenas in other towns, like Ojaveda and Amdeneir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: They are small compared to this one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: After rats, what should I fight next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: In general, the bigger the opponent, the more difficult it is to fight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So a good rule of thumb is size.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: After rats become too easy for you, I suggest clackers, tlokes, or those gobbles in the sewers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Any time you take on a new opponent, always approach cautiously and be prepared to visit Dakkru's realm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Either that or learn to run away quickly, but some things chase quite quickly as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about magic?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald looks around.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Careful, there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Some around here frown upon the use of magic, but yes, when used properly, there are some powerful spells out there that can take down the toughest of creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: We even have some magic related tournaments here from time to time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You'll probably want to visit the Magic Shop in the forest to get started with that though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for the information.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald begins looking at his papers again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Sure, good luck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Remember to always keep learning and growing and that includes base things like developing your strength and agility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Everything has an impact on how much damage you can deal in a fight as well as how much damage you can take in turn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Keep at it and some day you'll be taking on ulbernauts.</td>
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
						<td>Rewards: Nothing.</td>
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
