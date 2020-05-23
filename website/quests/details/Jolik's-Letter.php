<!doctype html>
<html>
<head>
	<title>Jolik's Letter</title>

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
						<td>Jolik's Letter</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dagger-for-Jirris.php">Dagger for Jirris</a> quest.</td>
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
							$npcName = 'Jolik Huevan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jolik Huevan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Anything I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Yoo…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: octoolly wont to h'lp mo?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: My mooth 'oes not froght'n yoo?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: 'on't knoh whot to soh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Bofor' noh, only th' followors of thoh whosp'r accopt'd mo.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O 'oh hove on' thong yoo cohld 'oh for mo, if you woll.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: I noh' to troh to contoct mo frond.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O hove not sohn hor sonce O lost mo jaw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Plose soh yos?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Thos jaw!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: I hot' ot.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jolik pulls ink and paper from his tunic and writes a shortnote, which he hands to you. -Will you try to contact someone for me?-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, It is what I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Thonk yoo!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Osk in Ka'…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jolik shakes his head and pulls out a sealed letter and hands it to you silently.-</td>
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
						<td>YOU: gives Allelia the letter from Jolik.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: A letter for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia sees the address and sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Poor Jolik…</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He used to be such a nice person before his accident.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He came in the tavern all the time before Jomed and I took over managing the place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He was good friends with Miss Kada-El.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: She went away on personal business, and he was attacked by a tefusang while protecting some travellers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: After the beast took his jaw off, he was never the same.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia gets an angry look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Some people laughed at him because of how it made him talk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: They made me so mad I could scream.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He thought everyone was laughing at him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Pretty soon he wouldn't even talk to anyone at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He just vanished one day, and does not show up here anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He sends these letters once in a while, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Poor man.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Take the letter back to him, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: You should show the letter to Jomed first if you want to know more.</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Jomed the letter from Jolik.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed wipes his hands before taking the letter. He gives a grunt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Jolik again, aye?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Feller needs to get his head out o' the sewers if ya be askin' me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Yes, I know where he is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Allelia, she don't want to know, so don't be botherin' her with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: He used to be a jolly ol' sort to have a mug with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Right stand up feller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I called him friend once, I did, even after the monster took his jaw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: He's no friend of mine now, sad to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Somes say it was the attack that changed him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I says it was those other fellows that did it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed pushes the letter back into your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Even if he do come out of that stink hole, he's got himself a lot of answering to do 'fore folks is gunna want to look him in the eye again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: You take that letter straight back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I got nothin' to say to him.</td>
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
							$npcName = 'Jolik Huevan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jolik Huevan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Jolik his letter back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Not thohr?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jolik looks at the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O wosh O cohld go bock op thohr, bot th' whosp'r os mo mahst'r now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O know O moss'd op bod.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: O om sorroh to hove tok'n yoor tome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Toke thos.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolik: Jolik Huevan hands you a few coins.</td>
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
						<td>Rewards: 10 Faction with Cabal of Whispers, 1297 Tria, 9400 XP.</td>
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
