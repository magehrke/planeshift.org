<!doctype html>
<html>
<head>
	<title>Stop the Drainage Plan</title>

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
						<td>Stop the Drainage Plan</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Insects-in-the-Garden.php">Insects in the Garden</a> quest.</td>
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
						<td>YOU: I'm searching for a job, have you anything for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Hello again, YOU, my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: After your good work with the bouncetails I know I can count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I have another matter for you, one of great urgency.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Are you up to a challenge?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it will be my pleasure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I've overheard a rumour to pipe water from the spring in the garden into the main water supply.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I cannot stand for this interruption to the natural order here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The pool could be drained completely!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Please find out any information you can about the drainage plan, and if you can, stop it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I promise to make it worth your while.</td>
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
							$npcName = 'Warinn Klumdt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Warinn Klumdt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I find pure water?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: The purest source of water is in the garden in East Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: It is currently separate from the rest of the water supply.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you tell me about the drainage plan of the garden spring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: The Vigesimi Amidison Stronghand asked me to draw up plans for the garden piping, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: I've already sent it to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Work should be beginning soon, and our water shortage will be alleviated.</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you tell me about the drainage plan of the garden spring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Yes, I ordered to have the garden's spring added to our town's water supply.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: With our population increasing, we'll need to keep the fountains' pressure up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: We're facing a water shortage, and it's up to me to fix it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Hamel Warson has the work order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: No need to thank me; I'm just doing my civic duty.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I hear you have the work order for the drainage plan.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: That's right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I've got the work order right here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I'll get the piping done really soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Won't it be a grand thing to have that pool's supply?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Absolutely not.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: You're one of those 'keep the magic pool separate' flower-savin' mushroom-pickers are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Well yes, I suppose I *could* reroute the piping to another area, on two conditions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: One, you find me an alternative water supply because this shortage is real.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Two, you give me some Tria to make it worth my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Deal?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes we have a deal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Grand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I'll stall for time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Don't dilly-dally finding a water supply.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Talk to people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Then we'll talk about what's in it for me.</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could we use your underground river as an alternative water supply?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: You want to access my underground river?</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: I'm not doing that for free.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: If I'm letting the city use my river, I want my taxes waived.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Get me a writ of tax exemption and I'll give you permission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Alright?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It won't be easy but I will see what I can do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: I'll be right here until you get back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: You know who to ask for about tax exemption, I'm sure.</td>
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
							$npcName = 'Darphen Wrestle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darphen Wrestle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We need tax exemption for Burdess Quirain.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Give Burdess Quirain a writ of tax exemption?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I have 25 citizens with outstanding taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: If I give this writ, do you know what percentage of tax I'm losing, assuming all the tax debts are equal?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: What number?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Four percent?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Well…yes, that's right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Fine, take this writ.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I can't say no to people who are good with numbers like me.</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Wow, I never thought I'd get this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Tell whoever it is that's doing this that I sent you to give them the go-ahead to access my river.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Burdess Quirain gave us permission to use her underground river.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Burdess Quirain was sittin' on an underground river?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Why didn't we ask her in the first place?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: We'll probably never need the pool now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: But still, that's a lot of work for one dwarf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I'll need 1000 Tria to do this and keep my trap shut.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Fair?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes fine, that is what I agreed to before.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Grand!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Nobody'll be the wiser.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: And there it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I'll reroute the pipes and report that the work is done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: You run off to the druid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Tell him Hamel sends his regards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Looks like you saved the pool, pally.</td>
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
						<td>YOU: We found an alternative water source, and Hamel Warson sends his regards.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It is done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It is truly done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You are indeed a wonder, YOU , and a friend to nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You have earned this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Fare thee well, and may all creation praise you.</td>
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
						<td>Rewards: 1 Sound glyph, 15 Faction with Seeds of Wildwood, 2107 Tria, 10800 XP.</td>
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
