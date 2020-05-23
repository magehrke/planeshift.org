<!doctype html>
<html>
<head>
	<title>Knowledge of the Red Way Adept</title>

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
						<td>Knowledge of the Red Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Red-Way-Adept.php">The Red Way Adept</a> quest, Rank 70 Red Way, 1 Adept's Red Way Wand, 1 Apprentice's Red Way Bracers.</td>
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
						<td>YOU: I have returned, wand in hand, for more training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Sorry, I do not have your test ready yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I have had too many of these requests for help, jobs, or what have you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Do I look like someone who has work to offer?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I would not have anyone but a Red Way Adept handle this next 'task' for me anyways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you a small box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Please deliver this to the Archmaster of the Blue Way Barrin Dhorod, from Archmaster to Archmaster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ensure it goes into his hands directly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Don't open it, either.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd maintains a straight face but for some reason his eyes have started to come alive.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Go now.</td>
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
						<td>YOU: A special delivery, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: A Way message box?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I was not expecting any messages delivered from the Circles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hesitates with his fingers gripping the latch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: In your opinion as the messenger, should I trust and open the box, or should I check it first?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I wouldn't.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin casts a spell and a protective dome covers the box and his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now lets see what this is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A dull popping sound can be heard and the dome fills with black smoke.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Good call there messenger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It appears it was one of Ferryd's prank boxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: For you guidance and giving me a hand, I would like to reward you with a hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hands over a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And tell Ferryd he failed this time.</td>
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
						<td>YOU: The prank failed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd looks confused.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I hope you had nothing to do with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Very well, we might as well continue with your lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Hand me your bracers, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My Bracers as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will not be needing these old things any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have progressed beyond them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For you next test you will answer a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Each Way of magic has One Way that opposes it magically.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you become a Master in a Way, you will not be allowed to master the opposing Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That path brings much danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For this test, tell me what two other Ways of magic support the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Dark and Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have been learning, I see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd removes a set of bracers from a bag and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I present you with your new bracers, Adept of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are progressing at an impressive rate, but are not yet ready yet for you next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you have learned more, show me your Adept's Wand and we can continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Good luck, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's not to trust?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin unties the bow and opens the package.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: What …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A explosion resounds as black smoke streams over the face of the mage!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Noooo!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin coughs and sputters whilst he pats out the remaining flames. He looks furious and grits his teeth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I know a Red Way spell when I see one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You tell Ferryd I will get him back for this.</td>
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
						<td>YOU: Barrin says he will get you back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd grin slightly falters after hearing the reply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Bah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Over-sensitive Ylian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: No sense of humor at all.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd then starts rocking with laughter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: What's he going to do, send me a box of ice</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is for providing me with the entertainment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now back to your lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Hand me your bracers please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My Bracers as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will not be needing these old things any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have progressed beyond them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For your next test you will answer a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Each Way of magic has One Way that opposes it magically.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Glyphs of these two Ways are very difficult and dangerous to attempt to combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you become a Master in a Way, you will not be allowed to become a master the opposing Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That path brings much danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Each Way also has two Ways that support it, combining easily and with little danger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For this test, tell me what two other Ways of magic support the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods, pleased.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The Azure Way is one of the Ways which can be simply combined with Red Way glyphs to make a variety of spells…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They are similar as they are powered strongly by the mind, Azure to play with or aid a tired mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And Red powered by a strength that comes from deep within.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods is approval.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, yes, yes, very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Like the Azure Way the Dark way and Red Way do have a lot in common and that is what helps them work together so well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They both work off a deep inner power that has a way of taking you over and destroying you if you push too far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: So be careful with both.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd tilts his head up and looks behind you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Everything alright?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have been paying attention to the Ways I see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd removes a set of bracers from a bag and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I present you with your new bracers, Low Adept of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are progressing at an impressive rate, but are not yet ready yet for you final test before gaining the rank of Full Adept of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you have learned more, show me your Adept's Wand and we shall continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Good luck, YOU.</td>
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
						<td>Rewards: 1 Hand glyph, 1 Adept's Red Way Bracers, 15000 XP, [Way 1] 1 Faction with Blue Order, 1 Faction with Red Order, [Way 2] 30 Faction with Red Order.</td>
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
