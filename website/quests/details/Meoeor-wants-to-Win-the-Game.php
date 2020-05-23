<!doctype html>
<html>
<head>
	<title>Meoeor wants to Win the Game</title>

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
						<td>Meoeor wants to Win the Game</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/bend_the_octarch's_ear.php">bend_the_octarch's_ear</a> quest.</td>
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
							$npcName = 'Meoeor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Meoeor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have task I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: I have something you can do for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Have you heard of the upcoming Octarch's Chess tournament?</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Well that is not what is important: what is important is that I am going to win it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Vaieund and I play competitively and often he beats me, but not this time around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: I need you to go and find a Philter of Intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: They are rare and I think only Levrus may have a lead on where to get one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Will you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like fun, I’m in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Good news indeed; I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: I do not know what it will take to get it, but I have something from my adventuring days that you might find interesting if you can obtain it for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Just go to Levrus and speak about the Philter of Intelligence.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know where I can find a Philter of Intelligence?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A Philter of Intelligence?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you think it will be easy to find the Philter of Intelligence?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It may be difficult indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Truth is, the philter of intelligence is very difficult to make so that besides its expense, it is only given to those who have proven themselves worthy of its enlightenment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you willing to take the tests?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You should begin with Murago Puntjal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Just tell him I sent you, or speak about the Philter of Intelligence.</td>
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
							$npcName = 'Murago Puntjal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Murago Puntjal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Levrus said I should talk to you concerning the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Ah I see another brave adventurer seeking the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: We have an interfaith counsel that closely guards the distribution of these items so they are not used improperly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Do you want to take my test?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready for your test.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Here is your question then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: How much dirt is in a hole 2 and a half meters wide, 3 meters deep, and 2 meters long?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: none</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: None is the correct answer, as there is no dirt in a hole.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: You should now speak with Jardet Forsill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Murago: Just tell him I sent you or speak of the Philter of Intelligence.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Murago said I should see you with regards to the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You want the Philter of intelligence, then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You know those are not just given to anybody, yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, I suppose you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here is my problem for you, then: The poor have it in abundance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The rich need it desperately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: If you eat it, you will die.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: What is It?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: nothing</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Very clever indeed: yes, nothing is the answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now you should speak with Sharven in the temple of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Just tell him I sent you, or speak of the Philter of Intelligence.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jardent sent me, I need the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I suppose you think you have reached such a juncture in your life where you need a Philter of Intelligence, and at your age.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven shakes head sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is not my place to choose for others, but if you can pass my test you may have the Philter you seek.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You place a common coin into an empty Philter of Intelligence and insert the cork.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now that you have done this, how can you remove the coin without breaking the Philter's lovely bottle or taking out the cork?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: push the cork in</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Wonderfully done!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, pushing the cork into the bottle is the solution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Here is the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do not use it frivolously.</td>
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
							$npcName = 'Meoeor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Meoeor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was able to get a vial of the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: You have the Philter of Intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Glad to hear it captain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: May I have it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Meoeor the vial.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Well done, Stonehammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Now I promised you something nice in return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Meoeor digs in his bag and presents you with a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Meoeor: Ah, here you go!</td>
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
						<td>Rewards: 1 Might glyph, 15 Faction with Science Association, 10800 XP.</td>
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
