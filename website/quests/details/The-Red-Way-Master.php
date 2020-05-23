<!doctype html>
<html>
<head>
	<title>The Red Way Master</title>

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
						<td>The Red Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Red-Way-Master.php">Knowledge and Practical of the Red Way Master</a> quest, Rank 150 Red Way, 1 Master's Red Way Wand, 1 Master's Red Way Bracers, 1 Master's Azure Way Bracers, 1 Master's Dark Way Bracers, 1 Adept's Red Way Robe.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the items, as requested, and I am ready for further instruction.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Dedication.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And perseverance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They gave you power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You've reached a point where I can give you no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Only the world now can teach you more lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are a full Way Master of the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd takes the items and examines them carefully. Then he assents, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Return the items to their owners, as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They will need them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, give me your last Adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That is my robe, I am ready to replace it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd folds the robe, while his eyes look in yours.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: As a Master of the Red Circle you are allowed to learn about our history, and our secrets too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Are you interested to hear them?</td>
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
						<td>Ferryd: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I was sure of your interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Would you like to talk about our history?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd half closes his eyes-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: or about our secrets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well tell me about the secrets then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The secrets I want to tell are for your ears, and for very few others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The danger in it can harm many lives, not only your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: So you are allowed to discuss them only with the highest levels of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd makes a pause, looking in your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The texts in the Sanctuary holds knowledge about all the Ways, about artefacts of power…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And it contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The position, even the existence of the sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Secrets hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Tell me you will never share this knowledge outside the Masters of the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I promise.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Until now I assume you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is 'Wild' magic, something outside the rules of the Gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Ferryd grows stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And you have to contrast it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Is this understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I understand Archmage.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The dangers of the Seventh Way go beyond your imagination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Two mages attempted to master it until today, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd pauses, his gaze is firm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Something not even I wish to know, a threat to the existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Have you ever heard about it?</td>
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
						<td>Ferryd: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: None knows for sure what is the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Someone supposes it is a God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: While others assume it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I have not the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Even I had that privilege only once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I was allowed to catch a glimpse of what is kept in the Vault of Ages, no more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That day I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd closes his eyes for some second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Much of the past is hidden, and I did not know why, until my visit in Arden.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will understand, for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Not today, but when your time will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well then, one last formality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd puts away the old cloak and opens a sack, taking out a new cloak. He offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This will prove the mastery you gained in the Red Way as you are now a 'Way Master of the Red Way'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Make a good use of it, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Bring it to Levrus, one final lesson awaits you there.</td>
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
						<td>Rewards: 1 Master's Red Way Robe, 1 Master of Ways Amulet, 10 Faction with Red Order, 20600 XP.</td>
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
