<!doctype html>
<html>
<head>
	<title>Noxdar Breaks it Off</title>

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
						<td>Noxdar Breaks it Off</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Noxdar Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Noxdar Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look like you could use some help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Oh, hello.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: You wanted to do something for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Yes, I suppose you could.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I'm having a little difficulty with the affairs of the heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Still want to get involved?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd not like it to be said that I'm all fight and no heart. I'll help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I've been seeing Frilaa Bhundri, an enkidukai in the Plaza area, for a little while now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: However, I discovered something shocking: she is married and did not tell me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Please, if you could, tell her that I must stop courtship.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: She will no doubt ask why I do so, and why I do not go myself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar coughs nervously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Just tell her I'm busy with work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Whatever you do, do not let on that I know she's married!</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: There are things at stake which you do not know about!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar begins sweating.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I wish you well, and I hope you do the right thing.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Noxdar is saddened to inform you that he must cease his courtship of you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: You did not just tell me that Noxdar sent someone in his place to break it off with me!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa makes a snapping noise with her paw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I don't suppose he gave you a reason?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Work steals his every waking moment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I…I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: That is unfortunate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I know he's been trying to be an engineer; I didn't realize how time-consuming it could be.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa ponders the situation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Wait, does he know about my husband?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
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
						<td>YOU: Husband? I don't know what you're talking about.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: He doesn't?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: That's good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: If he did, he'd have to duel with my husband sooner or later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: But this break-up is for the best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Here, give him this letter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa pulls out a paper and pen, and hastily writes a sweet letter. She then hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please give that to Noxdar Darmeth.</td>
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
							$npcName = 'Noxdar Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Noxdar Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, she wrote you a letter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: A letter from Frilaa, for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar opens the letter and reads it. He smiles and breathes a heavy sigh of relief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Oh, thank you, Tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: You may not know it, but you have saved a life this day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I can't give you much, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Perhaps this heart that I kept from my adventuring days?</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: This armour?</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: You decide.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's true; he did find out about your marriage.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: That cowardly rat!</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Trying to escape a duel of honour!</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Well, you just give him this from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: He's going to have to accept his fate no matter what.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa pulls out a paper and pen, and hastily writes an angry letter. She then hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: You give that to Noxdar Darmeth, you hear me?</td>
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
							$npcName = 'Noxdar Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Noxdar Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, she wrote you a letter.</td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A letter from Frilaa, for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar opens the letter and reads it. He pales and his hands begin trembling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No…you told her…there will be a duel…you don't know what you've done.</td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You may have thought telling the truth was the right thing to do but I assure you no good will come of this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar sighs wearily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is done, is done.</td>
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
						<td>Rewards: [Way 1] 1 Meteor Glyph, 20 Faction with Enkidukai, 2107 Tria, 10800 XP, [Way 2] 1600 XP.</td>
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
