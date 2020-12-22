<!doctype html>
<html>
<head>
	<title>Lyrus Has An Idea</title>

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
						<td>Lyrus Has An Idea</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Loren-Chama-needs-a-wood-sculpture.php">Loren Chama needs a wood sculpture</a> quest, 3 Ruby Crystal, 2 Diamond Crystal, 1 Sapphire Crystal.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm interested in a bit of work for a bit of tria. Do you have anything for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Good day to you, Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Looking for a little work?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Fine, fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: As it so happens, I do have something I need help with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus smiles and her bright green eyes sparkle prettily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I have come up with a rather wonderful idea for a new piece of jewellery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I make most of it myself you know, but I need one more thing to complete the new tool to be used for this idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: If you will help me, Gemma, I would be very grateful and could reward you well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Are you willing to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Easy enough… I'll do it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Oh, goody!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I had so hoped you might.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: In order for my idea to work, I need you to take this to Gulm Ossoe, the local sculptor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: These are plans for a very special tool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I will also need a few ruby crystals.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus thinks for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Three should be enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Lastly, I'll need two diamonds and an sapphire to finish the piece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Make sure you show Gulm the plans first.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus hands you a small pouch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Oh, and give this to kra as well, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It is the payment for the work!</td>
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
							$npcName = 'Gulm Ossoe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gulm Ossoe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: What is…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gulm looks over the plans and makes a whistling noise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: You got this from Lyrus didn't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: I see she also sent payment in advance, which is much good of her!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gulm looks thoughtful as kra studies the plans.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: This will take some time to complete, but she has made some much good plans.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Give me some time to work on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: If you have something else to do, now might be the time to do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Just come back later and ask if I am finished.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you had enough time to complete Lyrus Lospur's commission?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Ah, there you are!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Much good this will be, when it is finished.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gulm looks you over carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: It will be too heavy for you, even without the water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: You will need someone to carry it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Not to worry though!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: I know someone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: You know Malco Mokkar, don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Big kran, kra is not so…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gulm pauses and looks around, and then speaks quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Kra is not the clearest crystal in Gugrontid, but kra is plenty strong.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Much good, that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Go tell Malco I sent you and kra should help.</td>
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
							$npcName = 'Malco Mokkar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Malco Mokkar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you carry a rather heavy tool for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Oh, Malco carry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Yes, Malco carry good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Tell Gulm Malco come soon.</td>
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
							$npcName = 'Gulm Ossoe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gulm Ossoe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Malco Mokkar was indeed quite helpful. Kra agreed to deliver the tool.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Much good news that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gulm: Run along now and tell Miss Lospur that her tool is ready.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your order has been completed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Very good, but why are you telling me this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus looks at you dubiously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Where is my tool?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It was too heavy for me to carry, so Malco Mokkar has agreed to deliver it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Oh, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Well, that does make sense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It is a bit heavy I am sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Well, the tool was not the only thing I sent you to get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Please bring me the three ruby crystals, two diamonds, and the sapphire crystal that I will need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have all the gems you asked for.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus looks over the gems with a giddy smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Yes, oh yes, these are quite perfect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: These rubies will do quite nicely, but then they are a fairly easy stone to cut.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I expect the diamonds will be a bit more difficult to work with, but if my new tool works as well on them as I planned, I will have quite a lovely gift for Davikel's birthday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Please take these as my thanks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus gives you a ruby ring and a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: The ring is the very first piece I made using this new tool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Thank you for helping me to get it completed and working!</td>
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
						<td>Rewards: 1 Ruby Ring, 20 Faction with Artists Association, 3391 Tria, 12200 XP.</td>
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
