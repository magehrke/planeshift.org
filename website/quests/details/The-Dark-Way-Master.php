<!doctype html>
<html>
<head>
	<title>The Dark Way Master</title>

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
						<td>The Dark Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-and-Practical-of-the-Dark-Way-Master.php">Knowledge and Practical of the Dark Way Master</a> quest, Rank 150 Dark Way, 1 Master's Dark Way Wand, 1 Master's Red Way Bracers, 1 Master's Brown Way Bracers, 1 Adept's Dark Way Robe.</td>
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
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the proof of being a worthy student, Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You obeyed me, and your devotion lead you here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You reached a point where I can give you no more…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: in the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You are a full Master of the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn takes the bracers and examines them carefully. She takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Dark Way and its allies, Red and Brown…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: All this power in my hands, within my spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I would sacrifice all of it to feel the Blue in my body, again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn thrusts back the items and turns her back on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Return them to their owners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: They will need them, very soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: you do not…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn sighs, a long and deep sigh. Then her face turns back to you, her usual sideways glance shows no emotion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Give me your last Adept item, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, here you are Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn starts folding the cloak, touching it gently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: As a Master of the Dark Circle you are allowed to learn about our history and our secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Are you interested to hear them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I very much want to hear.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I was sure of your interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Would you like to talk about our history?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn half closes her eyes-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: or about our secrets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about secrets, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The secrets I want to tell are for your ears and for very few others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Only people who proved themselves can manage to keep a secret like the one I'm going to tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The danger in it can harm many lives, not only your own, so you are allowed to discuss them only with the highest levels of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Full masters of every Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn makes a pause, leaning forward.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The texts in the Sanctuary hold knowledge about all the Ways and artifacts of power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It contains the complete version of this secret too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The position, even the existence of the sanctuary, is closed to the citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Secrets hidden in other secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I need your word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Promise me you will never share this knowledge outside the Masters of the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The first secret is the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Until now, I assume you know only six Ways, but there is a Seventh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The Seventh is the essence of all the other Ways, but is also none of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It is magic without the glyphs created by Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: This is 'Wild' magic…something outside the rules of the Gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Diaboli used it, since they are the only race who cast magic before arriving in Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The tone of Evelyn grows stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Be careful, and pay special attention to my next words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your level of power will give you sense of the existence of the Seventh Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Temptation will strike you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: And you have to resist it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Otherwise 'Wild' magic will wipe out your very soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will be put to True Death if the Seventh Way does not destroy you first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Is this understood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The dangers of the Seventh Way go beyond your imagination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Two mages have attempted to master it up to today, and they suffered a fate I would wish on no one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn pauses, her gaze is firm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Now, I have to tell you about another hidden knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Something not even I wish to know, a threat to existence itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The Circles, especially the Masters, are fighting a war against this Dark entity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: These battles are hidden to the eye of the people of Yliakum, but you have to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Our enemy is called the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Have you ever heard about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I have Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I wish to fill the pool of your knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: None know for sure what is the BlackFlame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Some suppose it is a God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: While others assume it is a force of destruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I have not the answer to what is the BlackFlame, but I can say that its touch infects and deprives the creations of the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your path will surely teach you more about this, maybe it will grant you access to the Vault of Ages in Arden.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: My travels brought me there, many times, with…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: someone.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn smiles, while her eyes look in the past.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I still have many question with no answers about that place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Many shadows hide the past; the only thing I discovered…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn closes her eyes for some second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: No, you have to learn for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: My word can't explain to you what I saw.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Well then, one last formality.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn puts away the old cloak and opens a sack, taking out a new cloak. She offers it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: This will prove the mastery you gained in the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Make a good use of it, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: And take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn hands you an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Bring it to Levrus, one final lesson awaits you there.</td>
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
						<td>Rewards: 1 Master's Dark Way Robe, 1 Master of Ways Amulet, 50 Faction with Dark Order, 20600 XP.</td>
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
