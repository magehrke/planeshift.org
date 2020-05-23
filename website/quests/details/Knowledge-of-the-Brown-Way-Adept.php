<!doctype html>
<html>
<head>
	<title>Knowledge of the Brown Way Adept</title>

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
						<td>Knowledge of the Brown Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Brown-Way-Adept.php">The Brown Way Adept</a> quest, Rank 70 Brown Way, 1 Adept's Brown Way Wand, 1 Apprentice's Brown Way Bracers.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned with my wand in hand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Someone is asking for my help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: But I want to send you, I think you're skilled enough for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Pawprech is having troubles with his herd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I want you to see what he needs in my sted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Tell him that you are there to help.</td>
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
						<td>YOU: I was sent to help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Finally, I have been waiting for Lorytia to send me some Xiosia help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I recently had some trouble with my friends here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech waves his hand over at his goujah.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: With all the spells and counter spells we had to cast the poor things are left with super sensitive skin, the smallest bump results in a rash.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: They are due to be transported by winch and I fear they will not survive such a trip.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech sighs deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: None of the Way protection spells will work, as the resulting spells have too much energy residue and will effect the working of the Winch magics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I was hoping Lorytia would have a natural solution.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech looks over at his beasts before continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I can however see you are a Brown Way adept, and we have not yet tried any Brown Way spells.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech slaps his hand against his forehead.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: But of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Brown Way spells uses nature energy, and nature energy wont effect the Winch's crystal energy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Now if only there was a glyph combination that could toughen up the hides of the goujah, but not so hard it will damage winch equipment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech looks at you with desperation in his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Any Ideas?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you tried Armored Skin?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech opens his eyes in excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Armored Skin?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: That is the spell name?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech frowns, but looks hopeful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: That spell is beyond my abilities, but I am sure it will work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I must reward you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pawprech removes some glyphs from his Glyph sack. After sorting through them extends his hand with a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I have a spare glyph I was told combines with Brown Way, and give Lorytia my thanks.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Pawprech sends thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Xiosia's blessings on him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: As a tree grows, it drops leaves to nourish the the ground beneath it, and fruits to feed the creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: So it must be with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: When aid is asked, offer what you have.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia gives a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Now hand me your bracers please.</td>
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
						<td>Lorytia: Your roots have grown beyond these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Now, before we move on I must ask you a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Each Way of magic has One Way that opposes it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Once you start the Master level testing in a Circle, you will not be allowed to advance far in the opposing Way Circle for safety reasons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: For your test of knowledge, answer what two other Ways of magic support the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Blue and Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Yes, much as three trees together in the wind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: One on its own may fail, but together they brace against the gail.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia removes a set of bracers from a bag and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: These bracers will help to nourish your Brown Way powers in a greater way than the Apprentice's set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: You will need them as you continue your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Once your skill is high enough, give me your wand once again and I will give you your final Adept's test.</td>
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
						<td>Rewards: 1 Negate glyph, 1 Adept's Brown Way Bracers, 25 Faction with Brown Order, 13600 XP.</td>
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
