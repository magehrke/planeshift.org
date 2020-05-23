<!doctype html>
<html>
<head>
	<title>The Blue Way Master</title>

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
						<td>The Blue Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Blue-Way-Master.php">Knowledge and Practical of the Blue Way Master</a> quest, Rank 150 Blue Way, 1 Master's Blue Way Wand, 1 Master's Brown Way Bracers, 1 Master's Crystal Way Bracers, 1 Adept's Blue Way Robe.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Bracers as requested, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Dedication and perseverance gave you wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You have reached a point where I can give you no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Only the world now can teach you more lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You are a full Master of the Blue Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin takes the Brown Way bracers and examines them carefully. Then he nods, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I chose to become a mage because I heard many stories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Tales about the greatest Blue Way Master ever lived.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Sometimes I think about what I'd become otherwise.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin takes a long and slow breath, before giving you back the items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Return these to their owners, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: They will need them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Give me your last Adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My robe as requested, sir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin folds the robe, while his eyes look in yours.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: As a Master of the Blue Circle you are allowed to learn about our history and our secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Are you interested to hear them?</td>
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
						<td>Barrin: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I was sure of your interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Would you like to talk about our history?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin half closes his eyes-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: or about our secrets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about the secrets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The secrets I want to tell are for your ears, and for very few others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The danger in it can harm many lives, not only your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So you are allowed to discuss them only with the highest levels of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin pauses, looking in your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The texts in the Sanctuary hold knowledge about all the Ways, about artifacts of power…</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And it contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The position, even the existence of the Sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Secrets hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Tell me you will never share this knowledge outside the Masters of the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Until now I assume you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is 'Wild' magic, something outside the rules of the gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Barrin grows stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And you have to fight it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Is this understood?</td>
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
						<td>Barrin: The dangers of the Seventh Way go beyond your imagination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Two mages have attempted to master it up until today, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin pauses, his gaze is firm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Something not even I wish to know, a threat to existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Have you ever heard about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Not even a clue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: None knows for sure what is the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Someone supposes it is a god.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: While others assume it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I have not the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Even I had that privilege only once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I was allowed to catch a glimpse of what is kept in the Vault of Ages, no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That day I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin closes his eyes for some second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Much of the past is hidden, and I did not know why, until my visit in Arden.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will understand, for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Not today, but when your time will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well then, one last formality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin puts away the old robe and opens a sack, taking out a new robe. He offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This will prove the mastery you gained in the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Make a good use of it, Daceane.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Bring it to Levrus, one final lesson awaits you there.</td>
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
						<td>Rewards: 1 Master's Blue Way Robe, 1 Master of Ways Amulet, 50 Faction with Blue Order, 20600 XP.</td>
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
