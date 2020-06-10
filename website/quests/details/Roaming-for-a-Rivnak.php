<!doctype html>
<html>
<head>
	<title>Roaming for a Rivnak</title>

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
						<td>Roaming for a Rivnak</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Ring-of-Familiar.php">Ring of Familiar</a> quest, Winch Access.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to buy a mount.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: So you would like to buy a mount?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I know a way you can get hold of a Rivnak, are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am very interested in getting a mount.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: First you must get a Red Gem of the Rivnak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The only one who knows where to get those gems is Enack Lerenal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You can find him in the wilderness outside the city walls.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh ponders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: When you have got the gem you need to go to Levrus Dahrenn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: He will use it to enchant your Ring of the Familiar.</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I want a Red Gem of the Rivnak.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Those precious gems are not easy to come by my friend, but you are lucky because I happen to be in possession of one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I will let you buy it if you just do one little thing for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Go to Grok Idon and give him this letter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: You will then have to transport some goods back here, from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: You can find him in the wilderness outside the other side of Hydlaa.</td>
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
							$npcName = 'Grok Idon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grok Idon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Enack asked me to give you this letter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Finally the letter from Enack.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok opens the letter and starts to read, nodding with a grin on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Here take this box and deliver it to Enack for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: He will probably give you something for the effort.</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Grok told me to give you this box.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Perfect, this is just what I needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I will let you buy the gem for just 5 circles, take it or leave it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Enack opens the box, which contains some strange looking candy, and starts to eat with great pleasure.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, take the circles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Enack talks with his mouth full of candy.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: take the gem and go bother Levrus Dahrenn with it, now leave me to my candy.</td>
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
						<td>YOU: Can you enchant my Ring of the Familiar with this gem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You want me to enchant your ring eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I will be more than happy to do that for you, but unfortunately I can not do that unless you have a permit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Go to Jardet Forsill to obtain one.</td>
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
						<td>YOU: I need a permit for mounts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Then you have come to the right person.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But you will have to answer a few questions before I can approve you for such a permit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Are you ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am as ready as I can be.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: First of all you must know how to take proper care of your mount.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Mounts are living creatures with a high value to the society and to all of nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now, which of these creatures must you guard your mount from?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Clacker, Rat, Trepor or Ulbernaut?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ulbernaut is the most dangerous I guess.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, if you are hunting for Ulbernauts you should make sure your mount is in a safe place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now we will talk some more about how to take care of your mount.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: As I said, they are after all living creatures and all living creatures have their own special needs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Like you need food, so does your mount.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now tell me what does a Rivnak eat?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Grass, Cookies and Pies or Clacker meat?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A Rivnak eats grass.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But a Rivnak has more needs than just food.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It needs a lot of grooming and care too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now tell me what is the best way of grooming a Rivnak?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: With a hard brush.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, remember to never use soap while grooming it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That will only take the fine wax out of its fur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And it is the wax that keeps it waterproof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, you now know everything you needed to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here take this permit to Datal Allavium.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He has to sign it before it is valid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He will also charge you the proper taxes.</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need this permit signed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Let me see</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal takes a good long look at the papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Hmm, everything seems to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Signed by Jardet Forsill too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Well, then there is only the matter of the taxes to get the permit done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I will have to charge you 120 circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Give them to me and I will sign it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, 120 golden circles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal signs the paper and puts a wax seal on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Here you go!</td>
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
						<td>YOU: Here, I got the permit you asked for and my Ring of Summon Familiar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh permit and a ring, and I take it you want me to drop everything and tend to you right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You know, trepor wiggly feelers don't cook themselves!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I should turn you into a rat!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Let me see that permit before we continue…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Seems to be in order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Levrus starts casting a strange spell</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There, all done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can now use your ring to summon a Rivnak too.</td>
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
						<td>Rewards: 1, Rivnak, 9400 XP.</td>
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
