<!doctype html>
<html>
<head>
	<title>Knowledge of the Azure Way Adept</title>

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
						<td>Knowledge of the Azure Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Azure-Way-Adept.php">The Azure Way Adept</a> quest, Rank 70 Azure Way, 1 Adept's Azure Way Wand, 1 Apprentice's Azure Way Bracers.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Your testing will have to wait, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Pawprech is still worried about his herd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I have other duties, so I want you to see what he needs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Tell him that you are there to help.</td>
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
							$npcName = 'Pawprech Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pawprech Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm an Adept of Axomir, he sent me to give you a hand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Well, I hope you're good enough to assist me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Look.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech's points to his Goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: My animals have some sort of magical illness, it makes them blind, and it is not the first time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech's sobs and puts a hand on his forehead.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: This is caused by a toxin they eat, so I continue to change food, without results it seems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: But that's not the problem because someone from the Crystal Way Circle did come and cure the blindness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Now my concern are for the younger ones, they still seem weak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I want you to ensure they're safe, and check if they are fully recovered.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech's looks over at his beasts before continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: But I'm not sure I can trust you, are you really an Adept in the Azure Way?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Prove it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Is there a Glyph or Glyph combination which allows me to know more about the condition of my Goujah?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: mind humanoid</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech nods, showing his approval.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Nature Intuition, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: That is the spell's name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: May you cast it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Or do I need to call Axomir again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [ YOU casts the spell: Nature Intuition on the Goujah.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech opens his eyes wide, looking the Goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Don't make me wait, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: What can you tell me about my Goujah?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Truth] This one seems to feel dizzy and disoriented.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Blindness and the dizziness in younger ones are clear symptoms of an old disease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I thought they became immune.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech looks puzzled, then he lowers his head and looks at one of the Goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Well then, I know the cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Thank you very much, I really appreciate your efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Please accept these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you a bag full of coins and a glyph from a smaller bag.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Give my greetings to Axomir.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Pawprech sends his greetings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You did well then, as I knew you would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: We will call that your test for this part of your training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir gives a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Now hand me your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My bracers as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You will not be needing these any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Now, before we move on I must ask you a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Each Way of magic has One Way that opposes it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Once you start the Master level testing in a Circle, you will not be allowed to advance far in the opposing Way Circle for safety reasons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: For your test of knowledge, answer what two other Ways of magic support the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Red Way and Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: That is correct.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir removes a set of bracers from a bag and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: These bracers are more advanced than your last set, increasing your powers even more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You will need them as you continue your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Once your skill is high enough, give me your wand once again and I will give you your final Adept's test.</td>
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
						<td>Rewards: 1 Dome glyph, 1 Adept's Azure Way Bracers, 15 Faction with Azure Order, 1000 Tria, 10800 XP.</td>
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
