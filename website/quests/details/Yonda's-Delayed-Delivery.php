<!doctype html>
<html>
<head>
	<title>Yonda's Delayed Delivery</title>

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
						<td>Yonda's Delayed Delivery</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Get-a-Performance.php">Get a Performance</a> quest, [Way 3] .</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for a job.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Well, perhaps you can help me, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I am waiting for a special shipment of material to come in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: It is cut from the stem of a fungus that grows in the stone labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: It grows…</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: well, I do tend to go on about woods and things if I don't watch myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Do you really want to know more about it?</td>
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
						<td>Yonda: All right then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: You see, the normouwerii grows very slowly, so the stem is thicker and stronger than most regular fungi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: It is easier to work than many woods and has no real grain to speak of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: But once it is completely dry, it takes a polish really well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: It looks almost like granite if I get the right stems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I am expecting a delivery of normouwerii stems and the delivery is later than usual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I really need it to start work on a commission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Can you find out what is keeping it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: With whom do I need to speak?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Taemian Yangnk at the Eagle Bronze Doors was supposed to bring it in to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Check with him to see what is keeping the shipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: If you found a way to get it here soon, I'd glady reward you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Ask Taemian about my normouwerii stems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: If you don't think you can pronounce that, just ask him about fungus or tell him I sent you.</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yonda wants to know when she can expect her normouwerii stem shipment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I have her load of fungus stems right here and I've been trying to get it to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: But the leads for my goujah team have worn right through.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: So it looks like there are three options for her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: You can carry it to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: You can help me get a working set of leads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Or she can wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Since you are asking for her, which answer will it be?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 3</td>
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
						<td>YOU: she can wait</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Well, all right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Please tell her it will be in when I get my leads fixed.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: it will be in when he gets his leads fixed</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh dear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: That's a shame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I will have to try and make some arrangements with my customer and look for another way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Thank you for looking into that for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Here are a few coins for your time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda opens her purse and takes out three coins for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I should be able to carry it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: This load of fungus weighs fifty kilograms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Can you carry that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can carry it now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: All right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian gathers up the bundle of pale green stems and staggers over to give it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Uff…</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: there you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I'll collect the payment from Yonda whenever I manage to get into town.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Yonda the Normouwerii stems bundle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh my goodness!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: That is quite the load to have carried from the Eagle Bronze Doors!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I hope Taemian is well: something must have happened to his caravan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Well, thank you so much for getting this normouwerii to me; I can start work today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: In return, I'd like to offer you one of my very own carvings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I have this cute little wooden yulbar that I make regularly, or this wooden amulet of a velnishi head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Levrus once stopped by and claimed he enchanted this amulet, but I can't be sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Please pick which one you would like!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: The Amulet of the Velnishi gives you +3 Agility.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I’ll help you fix your leads.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: All right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian gives you the broken leads.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Get these fixed and bring them back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Any leatherworker in Hydlaa would be able to do the work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Then she'll have her load of wood in short order.</td>
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
							$npcName = 'Jeyarp Grotemey';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jeyarp Grotemey</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you fix these?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Hmm, these look like they've seen a fair bit of travel.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp examines the leather of the goujah leads.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Simple enough, but there is a lot to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It'll cost about one hundred tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You may as well poke around Jayose's while I work on them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gayla looks over and says 'I hear he has a new copy of the Octarchal decree on the Laws, well worth checking that if one doesn't want to be doing something illegal without knowing it!'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp chuckles and winks at his wife Gayla, who gives him a small smile in return. Jeyarp waves the leads at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Come back in a bit and check with me about these leads.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are they ready now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Yes, I just finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: They should have been fixed up before they got that bad, but they are good to go now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It'll be one hundred tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here’s your money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Thanks for the work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp smiles conspiratorially and lowers his voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It bought me a bit of time from having to look for boring old books!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp chuckles and gives you the repaired leads.-</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your leads are all fixed up now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Tell Yonda it'll arrive tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Here is some coin to cover the cost of the repairs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian gives you three Octas.-</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Taemian will deliver the stems tomorrow.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: That is wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I was worried that I'd be waiting another week or more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: What was keeping Taemian?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: His Goujah leads were broken.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh, I see!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Did you help him to get those fixed?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I did.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: My goodness, how very helpful of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: And helpful to me too - I look forward to starting work on that normouwerii tomorrow!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda opens her purse and takes out some coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: These octa are for you, for helping to get things moving again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh, and this too: someone bought it for me but it isn't the right sort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Perhaps you will get more use from it than I would.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda gives you a wood chisel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Thank you so much for your help, Madam!</td>
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
						<td>Rewards: [Way 1] 20 Tria, 600 XP, [Way 2] 1 Wooden Yulbar, 1 Amulet of the Velnishi[OR], 15 Faction with Artists Association, 2107 Tria, 10800 XP, [Way 3] 1 Wood Chisel, 15 Faction with Artists Association, 2107 Tria, 10800 XP.</td>
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
