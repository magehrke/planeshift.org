<!doctype html>
<html>
<head>
	<title>Drifting for a Drifter</title>

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
						<td>Drifting for a Drifter</td>
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
					<tr class="quest_npc">
						<td>Taemian: Hey Kid, Wanna buy a mount?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A mount? Yes, that would be very useful.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: The first thing you will need is a special gem called Green Gem of the Drifter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I happen to have a few of them right here, but they're not free of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I will need you to do something for me first.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taemian grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Go to Nkel and tell him that Raithen sent you to collect the pouch he found the other day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Then come back and give it to me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: And be sure not to tell Raithen about this.</td>
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
							$npcName = 'Nkel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Raithen sent me to collect the pouch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I think I got it here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: somewhere…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkel rummages around inside a large sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Here it is.</td>
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
						<td>YOU: Here it is the pouch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Here take the gem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: Now all you need to do is go to Levrus Dahrenn in the Magic Shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian: I assume you have the Ring of Summon Familiar already, Levrus should be able to enchant that ring using this gem, so you can use it to summon a drifter.</td>
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
						<td>YOU: I'd like my ring to be enchanted with this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh right, it's always “Levrus can you enchant this” “Levrus I need a potion of that” and where is everyone when I need something enchanted?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Off being beguiled by the purple menace!</td>
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
						<td>YOU: Yes, I am ready.</td>
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
						<td>Jardet: Clacker, Rat,Trepor or Ulbernaut?</td>
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
						<td>Jardet: Now…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: we will talk some more about how to take care of your mount.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They are after all living creatures and all living creatures have their own special needs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Like you need food, so does your mount.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: tell me what does a drifter eat?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It eats fish.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But a drifter has more needs than just food.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It needs a lot of grooming and care to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now tell me what is the best way of grooming a drifter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: With a soft brush and water.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, and remember to never use soap, for it will harm the drifters sensitive skin.</td>
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
						<td>Datal: Let me see…</td>
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
						<td>Datal: I will have to charge you 122 circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Give them to me and I will sign it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are the circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Datal Allavium signs the paper and puts a wax seal on it.</td>
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
						<td>YOU: Here it is all you need: permit and ring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh permit and a ring, and I take it you want me to drop everything and tend to you right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You know, Trepor wiggly feelers don't cook themselves!</td>
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
						<td>-Levrus starts casting a strange spell-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There, all done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can now use your ring to summon a drifter too.</td>
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
						<td>Rewards: Drifter, 9400 XP.</td>
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
