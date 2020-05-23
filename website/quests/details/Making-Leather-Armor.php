<!doctype html>
<html>
<head>
	<title>Making Leather Armor</title>

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
						<td>Making Leather Armor</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Leatherworking.php">Introduction to Leatherworking</a> quest.</td>
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
						<td>YOU: Hirenn sent me. I want to learn how to make leather armor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Aha, you are a new apprentice of Hirenn's?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Leather is such a fine material to work with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: My wife, Gayla, and I make a wonderful living with leather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It's strong, light, and flexible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Of course it's no match for the protection of heavy armor but it makes up for it in other ways like comfort and flexibility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: And it looks a lot nicer doesn't it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp shakes his head a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Ah making armor, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Since you have worked with Hirenn, I assume you have some leather pieces ready to go?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'm ready to go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Alright, let's get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Near our shop here is a leatherworking table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You'll use that to make your leather armor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp looks around then looks over by his wife.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Ah there's what I'm looking for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Dear, can you hand me that book?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gayla grabs a book, hands it to Jeyarp and he holds it up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: This here is an armor making book just for leather armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: It's a fine manual which will guide you in making many different leather wares.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You with me so far?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, what exactly can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Well let's see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You can make gloves and boots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: There's also leather armor for the torso and arms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: And of course leather pants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You can even make a leather cap.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: So take this book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: When making leather armor, use this book as a reference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Leather is a strong material but it can be pierced.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: In fact it needs to be to sew parts together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: This is done with a copper needle and thread.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: That you can use to combine your leather pieces into various armor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp carefully hands you a copper needle and thread.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: So, ready for your first lesson?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yep, I'm ready. What do I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I want you to make a pair of gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I've got a customer waiting on a pair and you can help me get them to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: First, on the leatherworking table, take two small patches of leather and use your copper needle and thread to make a leather armor patch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Remember, a leather patch is not the same as an armor patch; you need to sew two patches together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: If you don't have small pieces of leather, you can use some hides and a scraper to make them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I imagine Hirenn showed you that process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: We also sell Tanning Crystal Acid and all the tools you'll need here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You'll also need a Leather Cutter to make patches and strings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Your Basic Leatherworking book will tell you how to do that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You can train armor making with Veja Pontor in the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Show me an leather armor patch once you're done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You show Jeyarp a leather armor patch.] Done, what's next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Now you'll need to make a few more of those leather armor patches and combine them with leather strings to make leather gloves parts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: The book I gave you will tell you the number and combination of parts you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: If you don't already have them, make the strings and patches first using the Basic Leatherworking book, then switch to your Making Leather Armor book and make the parts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Come to me once you've made the parts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You show Jeyarp the leather gloves parts.] Here are the parts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Looking good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Now you can do the final two steps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: First, notice the puncher on the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Use that to create what we call a kit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: After that's done, once again use the copper needle and thread to sew parts of the leather gloves kit into a proper pair of gloves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp has a kit and uses a needle and thread at lightning speed to whip out a pair of gloves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Like this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: If this is your first time, do take your time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You'll get better the more you do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Don't go by me, I'm an old pro.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Give it a try and let me see those gloves when you're done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Finished! Here are my gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: There you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Making other leather wares is quite similar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: They just require different combinations of those pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: As you get training in armor making, you'll be able to make more and more leather armor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp hands you a box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Now take this and deliver it to Vresa Nohdiir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: She can often be found in the arena.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp hesitates then smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: What, you didn't think I was going to use the gloves you just made, did you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I have a reputation to uphold.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Oh, hey, that reminds me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I haven't heard from my friend and good customer, Deelor, out in the Eagle Bronze Doors area in awhile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: If you're ever out that way, stop by and say hi.</td>
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
							$npcName = 'Vresa Nohdiir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vresa Nohdiir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery from Jeyarp.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Are these my new gloves?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: I've been waiting for them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa peeks into the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Jeyarp does fine work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Thank you Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Here's a couple of circles for your troubles.</td>
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
						<td>Rewards: 1 Copper Needle, 1 Thread, 1 Making Leather Armor, 15 Faction with Crafting Association, 500 Tria, 10800 XP.</td>
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
