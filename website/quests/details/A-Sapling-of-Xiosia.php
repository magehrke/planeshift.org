<!doctype html>
<html>
<head>
	<title>A Sapling of Xiosia</title>

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
						<td>A Sapling of Xiosia</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Belcor Krakko';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Belcor Krakko</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey there, barkeep...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko stays silent, giving you a solumn look.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You clear your throat.] So what's the word around town?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Aside from the fact my electrum soup is getting a bit too hot, all is well...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra turns and checks kras cooking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: And there's another inconvenience of course, but I don't expect you have time to hear about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well now I am curious.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko pours a bit of the electrum soup into a stone bowl.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: My old friend, Kora Windstone, comes by from time to time for supplies as kra travels to and from the Xiosia shrine kra was apparently told to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Kra mentioned that a dear friend could be in trouble and it's weighing heavily on kra's mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: It wasn't so clear but there was trouble and I cannot stop thinking about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trouble eh? Maybe I can lend a hand, where does kra live exactly?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: You want to go out there?</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: You shouldn't go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Aside from the fact that you should have asked me what kind of troubles first.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hmm, you may be right.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko gives you a side smile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: You won't believe me anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Have you heard the tale of Blackroot?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Blackroot? No, it's not familiar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Kora Windstone can fill you in far better than I can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Let me explain where you can find kra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Take the road to the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: As you pass through the first small hill tunnel you will come to a lake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Pass along its right side until you reach a clearing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Belcor Krakko: Kora will be right there in "Her Natural Temple" as kra likes to say.</td>
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
							$npcName = 'Kora Windstone';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kora Windstone</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, it hasn't been easy finding you. My name is YOU, I would like to know more about Blackroot. Belcor Krakko told me to ask you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: Really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: I told kra not to, but I guess kra must have been really busy cooking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: Oh, nevermind, it doesn't matter if kra told you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: So you want to know about Blackroot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: But are you ready to hear this tale?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone looks at you, waiting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, I would prefer a brief summary, if you don't mind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: I found Blackroot as a sapling, took it home and fed it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: I grew fond of it but one day, Xiosia reminded me that it was a creature that belonged in the wild.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand. If you don't mind, I would like to see it, I am curious now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: Know one thing, if you approach it peacefully, it might just accept you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: But if you are hostile, well..please show some restraint.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kora Windstone: Nature takes its toll.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Find Blackroot: Quest completed</td>
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
						<td>Rewards: Nothing.</td>
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
