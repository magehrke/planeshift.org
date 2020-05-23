<!doctype html>
<html>
<head>
	<title>Hiacheius Lost a Valuable Book</title>

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
						<td>Hiacheius Lost a Valuable Book</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Canyt-Needs-a-Stone-Tablet-Identified.php">Canyt Needs a Stone Tablet Identified</a> quest, 1 Golden Shield Diagram.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Golden Shield Diagram from the Canyt Needs a Stone Tablet Identified quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you need help with something?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hrm…er…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius looks somewhat frazzled.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Umm, I am somewhat b-b-busy here, hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Let me think, hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Well, I do not know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius bangs his head with his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Think old man …</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: think!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hmm, grr, there must be something I w-w-wanted…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: By the g-gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I recall a friend of mine asked me for some p-p-plans, a book of some sort, but now I seem to have misp-placed it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hmm, and I cannot recall what it was about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Urp!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Now I remember!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: My friend wanted a Golden Shield Diagram.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: That is it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It was difficult to come by, if I recall, and now it has gone m-m-missing; if you can find it, I will give you a nice reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Do you accept?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds good, I'll start right away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I wish I even knew where to look.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I hope you find it; that diagram is rare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Alright then, I will see you when you have a copy of the Golden Shield Diagram to give me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						1 Golden Shield Diagram</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found your book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Oh joy, you have returned it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You have made an old dwarf very happy indeed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Yes indeed this is it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You have done well by me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I will tell you what, I was going to reward you w-w-with 1000 tria, but if you want to try to answer my p-p-puzzle I will d-double it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If you cannot answer correctly you get nothing but the experience of having helped an old dwarf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Will you attempt my puzzle?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll try your riddle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Wee!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I suppose you think yourself smart, well we shall see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Here is my puzzle: Trasok is working late in the night he needs gloves for a project but they are upstairs, he goes upstairs but forgets his lantern. In a drawer, he has six pairs of black gloves and six pairs of red gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Each pair has a right hand glove and a left hand glove, other than this and their color, the black and red gloves are identical in every way. In the complete darkness, how many gloves must he take from the drawer to be sure to get a right and left glove of the same color?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Beware that your first answer will be the one I take!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: No second chance, I need one number!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 13</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Ah, poor me, that is correct!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Well done you have no idea how many people fail to get that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Trasok could take out six black left hand gloves and then six red left hand gloves, the next one would have to be either the right hand or left hand match.</td>
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
						<td>Rewards: 2107 Tria, 10800 XP.</td>
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
