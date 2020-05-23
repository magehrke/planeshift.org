<!doctype html>
<html>
<head>
	<title>The Crystal Way Master</title>

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
						<td>The Crystal Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Crystal-Way-Master.php">Knowledge and Practical of the Crystal Way Master</a> quest, Rank 150 Crystal Way, 1 Master's Crystal Way Wand, 1 Master's Azure Way Bracers, 1 Master's Blue Way Bracers, 1 Adept's Crystal Way Robe.</td>
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
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the items, as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Dedication and perseverance gave you wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You reached a point where I can give you no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Only the world now can teach you more lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You are a full Master of the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell takes the Blue Way bracers and examines them carefully. Then he assents, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I chose to become a mage because of my father.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: He was a Blue Way Master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: But I answered another call, the call of the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Sometimes I think about what I'd become otherwise.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell takes a long and slow breath, before giving you back the items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Return these to their owners, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: They will need them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Give me your last Adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, take my robe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell folds the cloak, while his eyes look in yours.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: As a Master of the Crystal Circle you are allowed to learn about our history, and our secrets too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Are you interested to hear them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I was sure of your interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Would you like to talk about our history?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell half closes his eyes-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: or about our secrets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about the history.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell takes a breath, preparing to talk. But he stops before beginning, and makes a long sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: It is not the time, yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: When you are ready you will find this knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to know about secrets, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The secrets I want to tell are for your ears, and for very few others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The danger in it can harm many lives, not only your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: So you are allowed to discuss them only with the highest levels of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell makes a pause, looking in your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The texts in the Sanctuary withholds knowledge about all the Ways, about artifacts of power…</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: And it contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The position, even the existence of the sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Secrets hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Tell me you will never share this knowledge outside of the Masters of the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: If this is your wish, I promise you to keep them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Until now I assume you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is 'Wild' magic, something outside the rules of the Gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Govell grows stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: And you have to contrast it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Is this understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I understand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The dangers of the Seventh Way go beyond your imagination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Two mages have attempted to master before today, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell pauses, his gaze is firm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Something not even I wish to know, a threaten to the existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Have you ever heard about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I know the BlackFlame.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: None knows for sure what is the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Someone supposes it is a God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: While others assume it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I have not the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Even I had that privilige only once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I was allowed to catch a glimpse of what is kept in the Vault of Ages, no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: That day I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell closes his eyes for some second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Much of the past is hidden, and I did not know why, until my visit in Arden.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will understand, for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Not today, but when your time will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Well then, one last formality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell puts away the old cloak and opens a sack, taking out a new cloak. He offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This will prove the mastery you gained in the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Make a good use of it, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: And take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Bring it to Levrus, one final lesson awaits you there.</td>
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
						<td>Rewards: 1 Master's Crystal Way Robe, 1 Master of Ways Amulet, 50 Faction with Crystal Order, 20600 XP.</td>
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
