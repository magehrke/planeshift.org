<!doctype html>
<html>
<head>
	<title>Learning to Make Chain Mail</title>

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
						<td>Learning to Make Chain Mail</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-Leather-Armor.php">Making Leather Armor</a> quest, 50 Steel Ingots, 1 Steel Wire.</td>
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
							$npcName = 'Kethzun Guthazik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kethzun Guthazik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you teach me how to make chain mail?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun stops what he is doing and turns his attention to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Oh, you want to learn about making chain mail armor, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It is an intricate process and it takes much time to make just one armor piece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I can teach you what you need to know, but I need to know you're committed to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh yes, I'm ready to make some chain mail.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: First thing I need to know is your current skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Do you have much experience in blacksmithing and armor making?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a bit of blacksmithing and armor making skill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Alright, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Nonetheless, we'll start with some basics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: The first step is gathering raw materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Chain mail uses a lot of metal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Go get me fifty steel ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I know that's a lot but I need to know you are serious here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the ingots, what now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Good, let me explain what chain mail is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It all starts with steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Steel makes wire; wire makes coils; coils make rings; rings make patterns; patterns make strips; and finally strips make chain mail pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Those pieces are then used to make armor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smirks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Are you with me so far?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds complicated. How do I start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Start with making steel rings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'm going to give you a book called Making Chainmail Armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You'll also need some tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'll give you your first tool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It's a mold used to make steel wire.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun hands you a Wire Mold along with a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Since you have some experience, we'll move this along.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Holding the mold and using a forge, pour some molten ore into the mold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Molten steel made from one ore will make a wire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Go try it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Return once you've made a wire and I'll show you how to what to do next.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Quite easy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Yes, making steel wire is easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Next you'll need two more tools: a mandrel and a cutter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: In short, at the smith table around back, use the mandrel with wire to make coils, and then cut those with the cutter to make rings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: After that combine the rings into a pattern using four open rings and one closed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Turn open rings to closed using a hammer at the anvil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Three such patterns make a strip.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: The book will tell you how many strips you need to make pieces and how many pieces you need to make the armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: From the book you'll also see there are various patterns.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun coughs and looks at you expectantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Of course, I do sell mandrels and cutters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Give things a try and feel free to ask questions before we wrap things up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How much skill do I need to make different things?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Anyone can make rings and strips.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Even a beginner can make a pair of gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: For medium pieces and boots, you'll need about twenty lessons in both blacksmithing and armor making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Forty to make riveted patterns and finally eighty lessons to make the rest of the chain mail armor set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I know it's a lot but this is some tough work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You don't want to give a guard your armor only to have it fall apart with one swipe of an ulber's claw, do you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do you use the wire mold?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It's not difficult.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: First have some molten steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I hope you have a Working With Stock book on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You'll need it to smelt the ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Then using a forge put molten steel made from one ore into the wire mold and it will make a steel wire.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I make rings and how many should I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Once you have steel wire, go to any smith table and use your mandrel to make steel coil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Hold your mandrel, then put the wire on the table and make coils.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Once you have a coil, hold your cutter and again on the smith table, cut them into open rings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: One steel coil should make ten dozen rings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Explain the different patterns and how to make them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Cutting coils will make open rings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Take some of those and using an anvil, hammer them closed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You make patterns by combining rings at a smith table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Combine four open rings with one closed one to make a four-in-one pattern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You can also use two extra open rings and make a six-in-one pattern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Naturally it is stronger but you will need more skill to make one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You can also rivet those using a riveter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: That will make even stronger patterns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You will need a good amount of skill to make those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Riveted patterns make higher quality armor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do different patterns make different strips?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Once you have made a pattern, use three of them to make one strip.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: All patterns make a strip; the difference is in the quality.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Six-in-one patterns tend to make better quality strips than four-in-one, and riveted patterns tend to make even better quality strips.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How exactly do I get from strips to armor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Once you've made some strips, combine three side by side on the smith table, making small chain mail parts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Six strips will make medium parts and nine strips make large parts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Once you have the parts, again use the smith table to make them into a piece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You then combine the pieces to make what we call a kit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: The book tells you the amount of pieces you'll need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Finally make armor from the kits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: All using the smith table.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I've got it. You are very knowledgeable, thanks Kethzun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Oh, my pleasure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Good luck to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I hope you don't become too much of a competitor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun winks and gives you a farewell wave.-</td>
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
						<td>Rewards: 1 Wire Mold, 1 Making Chainmail Armor, 20 Faction with Crafting Association, 12200 XP.</td>
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
