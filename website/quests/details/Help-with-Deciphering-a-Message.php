<!doctype html>
<html>
<head>
	<title>Help with Deciphering a Message</title>

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
						<td>Help with Deciphering a Message</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Thrynt Glass';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thrynt Glass</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, you look perplexed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I don't know if you can help me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: You don't look like someone who is specialist in deciphering encrypted messages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Do you really want to help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yeah sure, I can give the deciphering a go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Here is the message:</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thrynt shows a paper with a sequence of letters on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: ZFYU VCNYM QBYH LUN CM VFCHXYX VS XULEHYMM.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: This is all I have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I already tried to turn around the letters and form new words with them, but to no avail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Maybe you have a better idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I'll work here on my own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Tell me when you found out a possible understandable message in Yliakum's common tongue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: flea bites when rat is blinded by darkness</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Mmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: might be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I got the first part, flea bites when rat…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: what's the second part?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: is blinded by darkness</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Wow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: That actually makes sense!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: How did you..?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: You're a genius.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Thanks a lot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I'll give you something I took with me when I left home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I used to play it whenever I could, but as a Shadowcaster I don't really have time to practice any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Enjoy.</td>
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
						<td>Rewards: 1 Pan Flute, 10800 XP.</td>
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
