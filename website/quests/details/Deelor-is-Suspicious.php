<!doctype html>
<html>
<head>
	<title>Deelor is Suspicious</title>

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
						<td>Deelor is Suspicious</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Deelor-and-the-Rat-Hat.php">Deelor and the Rat Hat</a> quest.</td>
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
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail, Deelor. Do you need help with anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Ah, is friend Kran who is giff me rat hat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You vant more verk?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: It may be you can aid me, because I vant to find somtink to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I keell lawbreaker for livink but am find none.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Maybe you is help me find creeminal, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now this is a challenge I like.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Is good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I haff suspicion of one called Canyt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I can tell she is badness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: She has secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You research her vays for me; see if you find her treecks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: There are thinks go missing she is behind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I know, but cannot prove eet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: If you can prove eet I geeve you much presents, is okay?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Just point me in the right direction and I will get you your proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Good good, Laanx likes good person who help me keel evil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Missing are some thinks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: But I haff plan to catch her in buying stolen goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: She gets troubles beeg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Weel you attempt to help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, what must I sell her?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I have these potion I borrow; you try sells them her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Eef she buys, she ees criminal, and she weell be execute!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Ha ha.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Just ask her about stolen goods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Now you go to her and get her to buy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rubs his paws in anticipation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Canyt Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Canyt Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about stolen goods?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt looks you up and down, then sniffs the air around you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Deelor sent you, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Goodness, will he stop at nothing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: He has been looking at me suspiciously ever since I turned him down for dinner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Not once did that stubborn man stop to think I just might not like him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Have you seen his ridiculous hat?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Anyway, now he is angry and wants to hurt me somehow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: He is trying to set me up, because his feelings are hurt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt studies you for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I know where Deelor got these items, and the owner is looking for them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: But the choice is yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: You can return the potions to Deelor for little or no reward, or you can search for the original owner and return them, or you can simply keep the potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Whatever you choose, I wish you luck.</td>
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
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was not able to sell the potions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Whyfore you geeve back?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Would Canyt not buy them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, she did not want to buy it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Is not good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Jig is up!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You geeve me potions back before anyone notice the missinks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I keep, yes?</td>
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
						<td>YOU: No, I want to return them to there rightful owner.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I guess you keep then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Or you geeve to Tarmeen Alecheech and tell about Deelor Blackeye, and no longer be friend?</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Vatever, Kran. It is you to choose.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Deelor crosses his arms and watches you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe these belong to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: These…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: these had gone missing from storage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Who had them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Deelor had them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Deelor?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I had a feeling it might be him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I never really did trust him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: He has been sporting a nice hat lately, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Still, I'll make sure he is punished to the full extent of the law.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Take this for your vigilance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen gives you a glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: As far as I am concerned, your potions, you keep them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I geeve my friend Enkidukai thees and say much thanks to you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Deelor gives you a shield and waves goodbye.-</td>
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
						<td>Rewards: [Way 1] 1 Sight glyph, 10800 XP, [Way 2] 1 Golden Shield, 9400 XP.</td>
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
