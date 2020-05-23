<!doctype html>
<html>
<head>
	<title>The Azure Way Master</title>

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
						<td>The Azure Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Azure-Way-Master.php">Knowledge and Practical of the Azure Way Master</a> quest, Rank 150 Azure Way, 1 Master's Azure Way Wand, 1 Master's Crystal Way Bracers, 1 Master's Red Way Bracers, 1 Adept's Azure Way Robe.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please take these items as a proof of my dedication to Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Dedication, and perseverance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: They give you balance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita raises your wand, and gives it a long glance. She takes a long and slow breath, before giving you back the items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Return the items to their owners, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: They will need them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her eyes become watery, for only a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You reached a point where I can give you no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Only the world now can teach you new lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You are a full Master of the Azure Way now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Give me your last adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my cloak, as requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita folds the cloak, while her gaze continues to point at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: As a Master of the Azure Circle you have to know some of the secrets of the order, something about our history.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita stares at you, waiting.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Continue please, I will listen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your mind is like a pool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You and you only, may decide its depth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Would you like to know our history, or our secrets?</td>
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
						<td>-The lips of Menita hold steady. Her eyes became glassy.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It is not the time, yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: When you are ready you will find this knowledge.</td>
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
						<td>Menita: Secrets conceal dangers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The danger in it can harm many lives, not only your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: So you are allowed to talk about it only with the highest levels of the Circles, full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita tightens her lips, making a short pause.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The texts in the Sanctuary hold knowledge about all the Ways, about artifacts of power…</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And it contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The position, even the existence of the Sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Secrets are hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Promise me you will never share what I am going to tell you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I promise, I will keep these secrets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Until now, I assume, you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is 'Wild' magic, something outside the rules of the Gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Menita grows harder, and colder.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And you have to contrast it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Is this understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Mistress Menita.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The danger bursting out from the Seventh Way overreaches imagination of mortals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Two mages attempted to master it until now, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita pauses, closing her eyes for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Something not even I wish to know, a threat to the existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Have you ever heard about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, never.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: But my information could be only a raindrop in the abyss.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: None knows for sure what the BlackFlame is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Someone supposes it is a God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: While others believe it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I haven't the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Even I had that privilege only once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I was allowed to catch a glimpse of what is kept in the Vault of Ages, no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: That day I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita lowers her eyebrows for a moment. When she opens them again her eyes glance with a icy light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Much of the past is hidden, and I did not know why, until my visit in Arden.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will understand, for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Not today, but when your time will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: So you need only one last thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Proofs hold truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This cloak is a proof, and the truth is you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: *Your name*, filling it with a new mean.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A Master.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita puts away the old cloak and opens a sack, taking out a new cloak. She offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A new cloak for you, a new master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Your path now goes beyond me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Take this to Levrus, so you will complete this stage of growth.</td>
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
						<td>Rewards: 1 Master's Azure Way Robe, 1 Master of Ways Amulet, 50 Faction with Azure Order, 20600 XP.</td>
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
