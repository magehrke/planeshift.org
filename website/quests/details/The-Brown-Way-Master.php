<!doctype html>
<html>
<head>
	<title>The Brown Way Master</title>

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
						<td>The Brown Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Brown-Way-Master.php">Knowledge and Practical of the Brown Way Master</a> quest, Rank 150 Brown Way, 1 Master's Brown Way Wand, 1 Master's Brown Way Bracers, 1 Master's Blue Way Bracers, 1 Master's Dark Way Bracers, 1 Adept's Brown Way Robe.</td>
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
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the the items you requested, Master Mulgik.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Dedication.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: And perseverance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: They gave you a solid soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You reached a point where I can give you no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Only the nature now can teach you more lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You are a full Master of the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik takes the Blue Way bracers and examines them carefully. Then Kra assents, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: When I was young I thought to follow the path of the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: But my elder opened my eyes, and I chose the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik takes a long and slow breath, before giving you back the items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Return these to their owners, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: They will need them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Give me your last Adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This cloack is my last Adept item, take it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik folds the cloack, while kras eyes look in yours.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: As a Master of the Brown Circle you are allowed to learn about our history, and our secrets too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Are you interested to hear them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I was sure of your interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Would you like to talk about our history, or our secrets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to know about history.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik takes a breath, preparing to talk. But kra stops before beginning, and makes a long sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It is not the time, yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: When you are ready you will find this knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please, tell me about secrets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The secrets I want to tell are for your ears, and for very few others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The danger in it can harm many lives, not only your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: So you are allowed to discuss them only with the highest levels of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik makes a pause, looking in your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The texts in the Sanctuary withholds knowledge about all the Ways, about artifacts of power…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: And it contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The position, even the existence of the sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Secrets hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Tell me you will never share these knowledge outside the Masters of the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will keep these secrets until my True Death, and further if needed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Until now I assume you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is 'Wild' magic, something outside the rules of the Gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Mulgik grows stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: And you have to contrast it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Is this understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The dangers of the Seventh Way go beyond your imagination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Two mages attempted to master it until today, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik pauses, kras gaze is firm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Something not even I wish to know, a threat to the existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Have you ever heard about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No idea.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: None knows for sure what is the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Some supposes it is a God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: While others assume it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I have not the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Even I had that privilige only once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: I was allowed to catch a glimpse of what is kept in the Vault of Ages, no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: That day I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik closes kras eyes for some second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Much of the past is hidden, and I did not know why, until my visit in Arden.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will understand, for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Not today, but when your time will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Well then, one last formality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik puts away the old cloack and opens a sack, taking out a new cloack. Kra offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This will prove the mastery you gained in the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Make a good use of it, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: And take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Bring it to Levrus, one final lesson awaits you there.</td>
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
						<td>Rewards: 1 Master's Brown Way Robe, 1 Master of Ways Amulet, 10 Faction with Brown Order, 20600 XP.</td>
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
