<!doctype html>
<html>
<head>
	<title>Helping the Guards</title>

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
						<td>Helping the Guards</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Remant's-Sword.php">Remant's Sword</a> quest.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am interested in Joining the Guards.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Well, as you might imagine, the city guard doesn't just let anyone in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: We have a recruitment process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: There are certain requirements you must meet if you are to become one of the guards, since as a member of the guard you have some serious responsibilities and some notable benefits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Unfortunately, it's actually quite hard to get accepted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: But I'll tell you what, if you can pass a little test, I will make sure to put in a good word with the chief for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: You'll also be doing me a personal favor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: What do you think, would you be up for it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready for it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Here's the deal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: There is this shady character who is always milling around the Kada-El Tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: His name is Thorian Gronk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I suspect he is up to something illegal, but he is too careful around the guards to get caught.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: In fact, he even taunts me and other members of the guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: If you could get some more information on him for me, and bring me back something that proves my suspicions are right, then I will know you are the sort we are looking for in the guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Do you think you can do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, easy as clacker pie.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Great, I like your attitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I'll await your return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Be sure to remember we are concerned with justice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: It is possible Gronk is innocent, so don't be too pushy or rough with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: You'll have to be observant and clever to find proof if there is any.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Search any hint about him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I'd start in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Ask merchants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Trainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Anybody who might have given him supplies or information of any kind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra twitches a whisker in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: If you find any evidence of anything suspicious, return it to me and I'll direct you further.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Good luck.</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Thorian Gronk?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia is busy tidying some things away as she answers you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: No too much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He spends a lot of time up stairs…</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Busy plenty of food and drink…</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: People come and ask about him from time to time, some nicer, some not so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: But we can get all sorts in here and I like to dwell on individuals too much…</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Oh..maybe go and try Aleena on the roof, she has never really liked Throain and avoids him where ever possible.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Thorian Gronk?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The dwarf who's always skulking around on the floor below me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yeah, I know him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: He asked me about herbalism.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Making potions, specifically.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I told him to leave me alone and go check the library.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Thorian Gronk?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I remember someone with a similar name, maybe he borrowed some books from the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Let me search my records, I have a registry with all people that have pending books.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose opens a drawer and reads a big book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Well, there is a Thor Grok, don't know if it's the same person though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This person borrowed a book called 'Potion making - advanced alchemy formulas.' You might ask some other alchemists.</td>
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
						<td>YOU: What can you tell me about Thorian Gronk?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know this name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He once inquired about making potions, but I told him those secrets are reserved for those who dedicate themselves to serving Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He left, muttering that he would check the library.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Thorian Gronk?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Thorian?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: umm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I've clean forgotten</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kiaman winks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Might one circle help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Oh that Thorian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: He comes by asking about getting odd little ingredients from the lower level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: They always seem to be used in alchemy for something or other, that's about it…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Of course if you exclude him buying many many of my wonderful sacks, each and everyone of then exquisitely priced.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rumour has it you are a great potion maker.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Oh no no no. I don’t sell potions! Whatever gave you that idea? Go and speak to Liera. Or Levrus. Maybe even that dermorian on the roof upstairs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rumour has it you are a great potion maker.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Potions? What do you mean potions? Has someone been saying things they shouldn't again? I don't have any of those here! Go and speak to that woman in the arena!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rumour has it you are a great potion maker.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So you heard then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: If you know that, it means you know some of my friends.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well try to keep this quiet: the potion I make isn't exactly legal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I make it from forbidden plants found in the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I have one of your potions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So you want one of my special potions huh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well since you know I'm a potion maker, I guess there is no point in denying it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I like you, so I tell you what: I'll sell you some for only 25 trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Is it a deal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it is a deal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Give me 25 Trias and I will give you the special potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Heh heh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian pulls out a simple looking vial held between his stubby thumb and first finger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Then this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He gently hands it over.-</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thorian seems to be making and selling illegal potions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: That is interesting news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: How did you come by it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got this from Thorian.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Ah, so this is the potion the which Thorian has been selling?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Great to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: My problem now is that I have no clue if the content of this potion is really illegal like you saw or just a fake that he says is illegal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Please find someone who is an expert in potions and ask him to examine this potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I will anxiously await the results.</td>
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
						<td>YOU: I need your help with this potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Looks like an interesting potion…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What you want me to do with it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Examine and identify the potion for me please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I can identify it, that is not a problem, but to do so will cost you 100 tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It's mainly for the ingredients I will use on the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Also, the potion will be destroyed in the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Is that acceptable?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It is a lot of tria but acceptable…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ok, I will check that for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Please give me 100 tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Please give me few minutes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus concentrates and casts a spell on the potion. After few moments, Levrus looks very puzzled.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, what I found is that the potion is has two effects.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The first effect of the potion is a boost to strength, but the most intriguing part is that the second hidden effect is some kind of charm spell, probably used to influence your actions based on the will of the potion maker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Unless I miss my guess, and I rarely do, the charm spell effect is caused by trefoil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Trefoil is an illegal substance because of its properties to induce a suggestible state.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, not trefoil itself, but rather this particular form of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'd inform the authorities about the charm spell at once.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thorian's potion contains trefoil used to create a charm effect.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: That miscreant is trying to charm people then…but to what end?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: We will investigate more to try to understand what his final plans are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: For now though, thanks for your help, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: You have been useful to the Hydlaa guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Take this as a reward for your actions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: : You mentioned something about giving advice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Oh yes, yes…I almost forgot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Interested in helping out the guards, hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Have you met the guards at north gates yet?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I've helped them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Let me guess, Remant lost something again, didn't he?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra rolls his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Well, nevermind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: We also have guards at the east gates, which leads to the road to Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: You can see if Moren needs some help or Taulim at the Court House, across from the Library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I also mentioned the Octarchy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: While the guards and Octarchy are separate entities, certainly they have a strong relationship.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I'd start with the Octarch's residence which is right here in Hydlaa, across the street from Kada-El's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Octarch Salikarios may be too busy for you but perhaps his guards are worth a visit.</td>
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
						<td>Rewards: 1 Jefecra's note to help the Octarchy, 15 Faction with Guard, 2107 Tria, 10800 XP.</td>
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
