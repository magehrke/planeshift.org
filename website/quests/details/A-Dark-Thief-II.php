<!doctype html>
<html>
<head>
	<title>A Dark Thief II</title>

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
						<td>A Dark Thief II</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Dark-Thief.php">A Dark Thief</a> quest.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I managed to get his amulet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: That punk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I remember seeing him wear that thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I wouldn't keep that if I were you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I'd sell it to the first bidder and be on my way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: You might have the best luck looking for someone who you fit in with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: People tend to give you a better deal when they like you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: While you're at it, do me a favour and report Lennston's sorry self to the guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I've love to see him get a little more payback for what he's done to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: One night in jail was just a slap in the face.</td>
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
							$npcName = 'Finara Plund';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finara Plund</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found the criminal, it was Lennston Dashile.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: Lennston Dashile, why does that name sound familiar?</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund pulls out a small book and squints as she flips through the pages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: I remember him!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: We arrested him for cheating Darven in a game of craps!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: He was using an amulet to make other players go blind for short period of time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: This certainly fits in with everything else that I've been told!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: Thank you for your help!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara Plund: I'll be sure to let Jefecra know just how helpful you have been!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Now you have to Choose to give the amulet either to Jardet, Finara, Rulayne or Laure. I chose Jardet.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: I chose Jardet</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the criminal's weapon and what he took. Here, take it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Ah, it appears to be an amulet of sorts, and these coins I will have sent to Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill takes the amulet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: This glyph in the center, is rather unique.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Hmm, it looks like it may be a dark way glyph of sorts?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I'll have to take this to Levrus and see if he can identify it for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I help you with anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Yes, actually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I had a disturbing dream last night.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: In my dream, I began to peel an ear of corn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: When I got to the center and pulled away the silk, there was a woman inside of it instead of the corn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Suddenly, I looked up and saw that the sky was darkening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I looked back at her and saw that she was crying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I tried to catch her tears, but my fingers were much too large, and when I did, she wailed out loud.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I covered my ears instinctively, and accidentally dropped the corn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have a choice here, I accidently took the wrong one.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Enough rambling, Just fork over a reward.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill steps back, looking rather surprised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Yes, I eh...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: I suppose I probably should compensate you somehow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill bends over and picks a flower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Here, this matches your icy demeanour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet Forsill: Good day, citizen.</td>
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
						<td>YOU: [You entertain Allelia with a good, long story.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Wow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: That's the best story I've heard in ages!</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia Symiestra: Here, have a beer on me.</td>
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
						<td>Rewards: 1 Snowbud, 1 Beer Mug, 10 Faction with Guard, -10 Faction with Thieves Organization, -10 Faction with Cabal of Whispers, 15000 XP.</td>
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
