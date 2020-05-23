<!doctype html>
<html>
<head>
	<title>Introduction to Leatherworking</title>

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
						<td>Introduction to Leatherworking</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 5 Rat Hides, 2 Riverling Skins.</td>
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
							$npcName = 'Hirenn Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hirenn Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you teach me about leatherworking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Ah, grrensholo, tabei!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: So, you'd like to learn about the fine craft of leatherworking, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I've been working with furs and skins since my father taught me this trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I will gladly teach you, but you should prove to me you know how to get the materials needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn smiles and nods at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Well, it all starts with the hides, skins, or furs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Many of Yliakum's creatures have hides which can be used to make leather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Those leather pieces can then be used to make leather armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Different animal hides yield different leather sizes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Rat hides are used for small pieces; Riverling, Tefusangling, Trepor, and Velnishi hides make medium sized pieces; and your Tefusang and Ulber variations are used for large pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: So, let's start with Rats and Riverlings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Please bring me five Rat hides and two Riverling skins and we'll get started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, the Rat hides. It wasn't too hard.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Very good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: And the Riverling skins?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: These guys were tougher, but I managed to get the skins.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Well done, tabei.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I've been asking around about you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I think you're quite a good worker, is that true?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I am! How else would I've gotten the hides?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Fair enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: So, let's get down to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Like any craft, leatherworking has it's tools of the trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: First we prepare the hide by scraping all the fur from it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: For this we use a hide scraper.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn grabs a flat looking tool with a handle and holds it up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: This here is a hide scraper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Around the side of my shop is a leatherworking table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: On it you'll find a puncher.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn holds up his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: But that's for another day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Using the table, hold your scraper and use it to make a hide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: A Rat hide will make a small sized hide and a Riverling skin will make a medium sized hide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Be sure to get some training with me first and go try it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Come back to me once you've made five small hides and two medium hides.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you the scraper and a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Here you go, use this scraper and be sure to have this book on your mind as you work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made the small hides, but I can't seem to make medium ones.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Ah right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: If you're just starting out in your leatherworking, you wouldn't have the skill to make medium sized hides yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: How silly of me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He puts his hand on his forehead and shakes his head a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: That's fine, just focus on small pieces for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Next you're going to tan the hides.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: This involves two steps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: First you'll need some Tanning Crystal Acid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: This is a chemical which is placed onto the hides to treat them and make them strong and firm as well as making them a good color.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: For a small hide, use one unit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Then, once you've added the Tanning Crystal Acid using the table, you'll notice a water barrel next to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Put the treated hides in there and use it to make leather pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I'll spot you some Tanning Crystal Acid to start.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you some small bottles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Return to me once you're done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made leather!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Fine, fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Seems you are on your way, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Oh, and I almost forgot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: There is one more tool you can use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: It's a Leather Cutter as it's known.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: You can make a small piece of leather directly, or cut a medium piece into smaller pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Same for cutting a large piece into medium pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: You can also cut a small piece into leather patches - one small piece makes three patches.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: And you can cut those even further into strings - one patch can be used to make three strings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: All of these things have use in making armor.</td>
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
						<td>Hirenn: But I'm not going to just give you everything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He clears his throat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I do, however, have some good Leather Cutters for sale.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what do I do with all this leather?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Ah, that would be the next step, wouldn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: You can use these leather pieces to make leather armor like gloves, boots, torso armor, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: But that is armor making skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: For now, get proficient in leatherworking, that's where it all starts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Fifteen lessons or so should teach you enough to make medium leather pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: My good friends in Hydlaa, the Grotemeys, are worthy of a visit as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Jeyarp can teach you the fine art of making armor with leather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: My table here is always available for some leather or armor work when you are in town.</td>
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
						<td>Rewards: 1 Hide Scraper, 12 Tanning Crystal Acids, 1 Basic Leathermaking, 10 Faction with Crafting Association, 9400 XP.</td>
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
