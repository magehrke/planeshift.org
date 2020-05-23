<!doctype html>
<html>
<head>
	<title>Dealing with Young Engineers</title>

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
						<td>Dealing with Young Engineers</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/His-Brother's-Riddle.php">His Brother's Riddle</a> quest.</td>
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
							$npcName = 'Martiana Zeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Martiana Zeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Got any work for a wayward adventurer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Ah, I've been looking all over for some help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: I need to do two things at once, and I'm hoping that if you can help me with one, I can do the other more efficiently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Can you help me out, please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm glad to have the work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: I'll start replenishing the lights.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: You'll need to get Noxdar's engineering proposal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: He's a trainee engineer with some interesting ideas, but I need to make sure he's on the right track.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Just tell him I sent you, or ask him to give you the proposal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: He should be able to infer why and hand it over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: He's most likely in the Winch area somewhere; he likes to work in out-of-the-way areas though, so search around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Bring the proposal back to me once you have it in hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Thanks again.</td>
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
							$npcName = 'Noxdar Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Noxdar Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Martiana Zeth wanted me to fetch some papers from you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Martiana sent you for the engineering proposal, did she?</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: She's quite eager; I just got them finished last night.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I'd have finished them earlier, but I've had some, uh, personal things to sort out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar idly fingers his chipped fang.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I shouldn't delay you: By all means, take them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Noxdar gives you a set of rumpled papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: I think you'll find Martiana will be most pleased with them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Noxdar: Farewell, Tabei.</td>
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
							$npcName = 'Martiana Zeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Martiana Zeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: I didn't see Hakik offering to do the lights.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: No, let's ask the engineer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana grumbles as she works on the lights. She looks at you briefly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Oh, sorry, I need to do this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Hand them to me a bit later, would you please?</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Thanks.</td>
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
							$npcName = 'Martiana Zeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Martiana Zeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you ready to receive that delivery now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Sorry about that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Okay, let's see what we have here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana flips back and forth between the pages, nodding her head quickly and running a finger along the lines of the equations.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: The mechanics are good; Noxdar has some promise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: But he seems to have made the same mistake I did as a trainee engineer: he did not account enough for the magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Now, a lot of the magic used in the winch mechanisms is Blue Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana cocks her head to one side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: There's a Blue Way practitioner in the library district of Hydlaa, I believe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Do you know his name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have heard of him, yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Oh good, what is his name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah, yes! I think Barrin Dhorod is the person you mean.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Barrin!</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: That's it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: All right, take this proposal to Barrin and answer to the best of your knowledge if he asks anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: He'll probably be able to fix these equations and save us some coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Bring it back to me when you're done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Thanks again.</td>
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
						<td>YOU: I have some documents that Martiana Zeth would like you to examine.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Yes, I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The proposal, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: jumps a bit then hands over the proposal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I see that my reputation precedes me as you knew who I was, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Oh, don't act so surprised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You know I'm proficient in the Blue Way, and therefore with divination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But enough of that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Allow me to peruse this proposal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin studiously examines the document, the fingers on his free hand flickering with apparent mental calculation. Finally, he draws a quill and begins making some corrections.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You can probably decrease the weight of the chains by twelve percent, perhaps even fifteen but that might be risky.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It will ease the burden on the goujahs, and provide other benefits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You may want to consider handing the document to another engineer to check the mechanical equations, just in case.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Here you go, YOU.</td>
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
						<td>YOU: I'm hoping you can check these equations for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: So, some young engineer has new ideas for the Hydlaa Winch, huh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: All right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Warinn reads the proposal, lips moving silently as he mouths the equations.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Look here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: A seven was transposed onto the next line as a one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: It's the kind of error that gets made when you stay up too late working or you have to finish quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: It won't affect too much, but it's always best to hand something in without careless errors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: The rest is top-notch work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: You can have it back now.</td>
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
							$npcName = 'Martiana Zeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Martiana Zeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: pulls the document from his pouch and gives it to Martiana.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: You found Barrin?</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Great.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana quickly looks at the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: I'm impressed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: I don't think I could have done a better job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Lerok will be over the dome with excitement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Noxdar will make a fine engineer one day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: But now I'll have to work all the harder to make sure he doesn't take my job!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana grumbles a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Still, you saved me a lot of time, so take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Martiana gives you some golden circles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Martiana: Thank you very much for lending a hand.</td>
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
						<td>Rewards: 1 Object glyph, 9922 Tria, 16400 XP.</td>
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
