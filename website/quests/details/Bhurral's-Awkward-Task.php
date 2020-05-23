<!doctype html>
<html>
<head>
	<title>Bhurral's Awkward Task</title>

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
						<td>Bhurral's Awkward Task</td>
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
					<tr class="quest_you">
						<td>YOU: Can I help with something again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Greetings, Maddam. I find I am in need of your help again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Will you do something for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You can count on me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This is a bit…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: uncomfortable.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bhurral scowls and lowers her eyes to the ground briefly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: My commander has asked me to investigate the rogue activities around the Mikana Trading Company and make a report.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have done so, but now I have been ordered to deliver a copy to Jirosh Mikana as well; he is quite influential in Ojaveda and is able to demand such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: For reasons of my own, that will stay my own, I do not wish to deliver this in person.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bhurral hands you a bulky stack of papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Please see that this gets delivered to Jirosh.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is a report on rogue activity from Bhurral Varsheen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh scans through the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I see my sister has been painfully thorough.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh smiles sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I imagine you had no idea that Bhurral and I are related.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: She has been estranged from the rest of the Mikanas for a few years now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The family thought her choice of profession too lowly for a Mikana.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: When she married another guard, Khirimm, it caused a complete rift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I would like to mend the wound, but I have no clue how to start.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh's expression becomes determined as he looks down at the report again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Perhaps I do have a clue, and you have just given it to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh hastily scribbles some notes on the report and hands it back to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please, take this to my brother Phanejor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Perhaps seeing her talents will sway him, and my note will help remove his stubbornness.</td>
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
							$npcName = 'Phanejor Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Phanejor Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Excellent, my good Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I have been awaiting this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Please stay a few moments while I peruse the document; I may have a reply to send back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As Phanejor reads, his brows arch in astonishment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Bhurral Varsheen wrote this… did this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: It is superlative piece of work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Well, she always did have talents far above the station in life she chose for herself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Phanejor frowns, then shakes himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I am keeping you waiting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Allow me to read my brother's addendum and I will be finished.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Phanejor gasps.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: He says…</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: he says…</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: 'She has lost Khirimm to True Death as he performed his duties, must she go without our support as well?' I did not know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: We have all cut ourselves off from her so completely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: I am so shamefully stubborn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Jirosh has obviously had more concern for our poor sister than I have; I will trust him to know how to proceed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Phanejor: Go to my brother as soon as may be, and tell him I grieve for Bhurral.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Phanejor grieves for Bhurral.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Yes, I do as well, and it is up to me to let her know that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I will write a letter for you to take to her…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: hopefully she will think it is official business and read it instead of tearing it up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Give me a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh pulls out quill and paper and begins to write.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a good while and many false starts, Jirosh seals the letter and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please, take this to my sister.</td>
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
							$npcName = 'Bhurral Varsheen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bhurral Varsheen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh Mikana instructed me to deliver this response.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I was very careful to make sure my report was complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I wonder what Jirosh could possibly have to say about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bhurral reads, and as she does, her tail droops. When she finally speaks, her voice is very quiet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I was not expecting this, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: Not at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: From Jirosh, perhaps, but not Phanejor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bhurral's mouth twists up at one corner.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: Phanejor and I are twins in hardheadedness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: This one letter is not nearly enough to mend the breach, but it is a beginning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I am off duty soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: Please go tell Jirosh to meet me at Brado's, and we will see what we see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I will wait for his answer.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bhurral wants to meet at Brado's.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh smiles at you, his eyes growing wet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Tell her I will meet her and take this for your pains and kindness.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh reaches into a small pouch and pulls out a glyph, he looks at it a moment before handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I hope this can help you along the way as much as you have helped me.</td>
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
							$npcName = 'Bhurral Varsheen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bhurral Varsheen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh agrees to the meeting at Brado's.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: Thank you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: You are more than you seem.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bhurral hands you some octa.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bhurral: I hope this is enough for your time.</td>
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
						<td>Rewards: 1 Life glyph, 20 Faction with Guard, 3391 Tria, 12200 XP.</td>
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
