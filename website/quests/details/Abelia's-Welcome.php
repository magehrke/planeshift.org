<!doctype html>
<html>
<head>
	<title>Abelia's Welcome</title>

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
						<td>Abelia's Welcome</td>
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
							$npcName = 'Abelia Aruine';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Abelia Aruine</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, is all this equipment yours?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia places her broom against the table and dusts her hands off on her apron to help compose herself before smiling at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Why yes it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: And welcome to Hydlaa, the central and main city of the top level of Yliakum!</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: I've been told to say that to all new people I see round here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia smirks as she turns round and starts gathering items from the table behind her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Apparently there have been attacks coming from the Stone Labyrinths recently and lots of people fled this way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: It's been quiet today so far, but since it's been busy all week with new arrivals I've been half expecting a rush this afternoon as well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She peers over her shoulder at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You didn't see a giant crowd of people headed this way did you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To see how to interact with NPCs click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'INTERACTING AND SPEAK WITH NPCs'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, there are very few people around at the moment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Ah, well, shame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: I made all these this morning and I'd hate for them to go to waste.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia finishes tidying up the table full of food and turns back to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: As a new resident, or perhaps visitor, of Hydlaa I am pleased to present you with this small welcome pack on behalf of the Octarchy and the Hydlaa Vigesimi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: It has some of my bread, a bit to drink, and a few of the other delicacies that I love to bake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Feel free to eat them now if you're hungry or just save them for later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Either way I'm sure you'll find them very refreshing and invigorating.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: The items you were just given will now be in your inventory. You can open this by clicking on the inventory icon in the main tool bar. To change the tool bar lay out right click on the blue crystal in the top corner of the game window. To see details on all the game windows click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'MENUS AND WINDOWS'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To eat or 'USE' a piece of food or potion you need to open your inventory and click on the item you want to use and drop it onto the picture of your character. If it can be used then any effect it gives, healing, skill boosts.. ect, will be applied to your character.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So I could learn to cook?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia leans towards you a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: If you can cook or bake already, or want to learn more I would go and see Jomed in the main tavern in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You can visit him once you get though the gate behind Xenak into the main city.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia points over to Xenak and the gate behind him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Jomed is the starting point for the cooking association here in Hydlaa and will help you get started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why exactly are you greeting people?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Well, for the longest time there have been invasions from the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Recently they have started to increase in frequency once again, with giant hordes of beasts headed towards Hydlaa from the area around the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Because of this the Octarchy has set up this small area to welcome all those who come to Hydlaa seeking protection, or who come here for any reason really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: We are here to make sure that you are well acquainted with as much of Hydlaa and the surrounding lands as possible before you pass into the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The hope is that those coming to Hydlaa will make a positive impact to the city and to pick a craft or skill to help the Dome and Octarchy with the invasions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are these Bronze Doors the invasions are coming from?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Ah, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Many years ago massive invasions ravaged the lands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: In a concerted effort between warriors and mages a series of Bronze Doors were made and set into the walls of the Dome to help prevent the creatures from leaving the Stone Labyrinth and entering the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: I'm sure you will likely end up venturing out to the Eagle Head Fortress at some point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The guards there look after the closest set of doors to us.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what about the Octarchy and Vigesimi?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia seems a bit taken a back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You don't know…</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Oh, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The Octarchy is the self appointed government that runs Hydlaa, the city you are about to enter, and also runs the 'Dome' which is the top level of Yliakum and is where we are now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: They also rule all of the seven levels below this one, though the Octarchy didn't always exist.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia looks you over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: If I remember correctly it took almost 170 years from when your race, the Ylians, first made their way through a portal from your homeworld before the Octarchy began to be established.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: And in general it has been a good thing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So they rule everyone in Yliakum?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Yes they do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The Octarch around here is Iragdun Salikarios.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You can find his residence across from the main tavern in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Under each of the eight Octarchs, there are twenty Vigesimi, who deal with matters of law and order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: For instance, Amidison Stronghand is the Vigesimi of Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How big is the Dome?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The Dome is the biggest of all the levels, with the next one down smaller than the one above which continues all the way to the bottom.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia picks off a piece of cake and begins to eat it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The Dome is called the Dome due to the domed shape of the ceiling of the Dome.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia chuckles a little as she uses the word dome so much.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: There are lots of cities spread out over the Dome, but outside of Hydlaa you are most likely to visit the Kran city of Gugrontid, the Enkidukai city of Ojaveda and the Klyros city of Amdeneir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How would I get to the other cities?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Well, there are two ways really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The first way is the quickest but you have to pay for it; you can arrange for the Pterosaur handlers to fly you to the city you want to go to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: The second way to get somewhere is just to walk there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: To get to Ojaveda, once you enter into the main part of Hydlaa you will have to go to your right, down and away from the Windowless tower into the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Once there look for the passage through into East Hydlaa; that’s where the library is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Then you just follow the roads out of and away from the city until you reach Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: To get to Gugrontid, once you enter into the main part of Hydlaa you need to find the North gate, which will be to your left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You pass through it and then follow the path through the forest and then once out the other side head left over the hills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Finally, if you want to see Amdeneir, well, the best and really only way at the moment is to fly there, which is free right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You will need to see Krestal Dhusho for that near the Laanx temple in Hydlaa; that's the giant red iron temple just off the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Just look round the back of it to find him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who and what is Laanx?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Abelia smiles before answering.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Laanx is one of the gods present here in Yliakum and as you might know he created the Lemurs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Laanx’s main temple is here in Hydlaa, as I mentioned, and is run by an elderly Lemur, Sharven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Another god, Talad, was responsible for creating the Kran and he has a temple, unsurprisingly, in the Kran city of Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: A third god is Xiosia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: She is very much the natural side of things and is favoured greatly by the Nolthrir and Dermorians, for they have always been very close to the land they live on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Finally, there is Dakkru.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: She is the god of death and if you ever find yourself on the wrong side of a pointed sword, you will be taken to her realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You will have brave its depths to find your way out if you wish to come back to Yliakum again.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, now that I'm here what should I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You have a choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: I would recommend talking to and getting to know the other people in this welcome area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: You stand to learn a lot from such an experience which could greatly help your start here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: If this doesn't interest you, next to the gate behind you you can speak to Xenak about passing though into the main city of Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: If you want to stick about you could take some lunch I have prepared to Neave the blacksmith and talk to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Are you interested in helping me out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I really want to see what else there is to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Fantastic, you should start with taking this lunch pack over to Neave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: She is the blacksmith for this part of Hydlaa and can no doubt give you plenty of information regarding all the crafting that goes on in the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: But, you should know that if at any point you get fed up with learning about Hydlaa and just want to enter the city you can go and talk to Xenak and he will let you pass into the main city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: If you want to come back and finish talking to the others in this area after you leave you can return at a later point to finish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Abelia: Good luck, have fun, and enjoy Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To see how to give items to NPCs click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'GIVING ITEMS TO NPCS'. In quests you can open the quest system and click certain Menu Options to give an item to the NPC, or, you can select the NPC and chose the 'GIVE' icon which will open a trade window, you can then pick an item to manually give to the NPC from your inventory.</td>
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
						<td>Rewards: 1 Lunch Pack, 1 Bread, 4 Lesser Potion of Healing, 1 Sack, 1 Water Pouch, 1 Fried Honey Dough, 1 Sweet Cinnamon Apple Slices.</td>
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
