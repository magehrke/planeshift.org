<!doctype html>
<html>
<head>
	<title>Pinayet Misses His Friend</title>

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
						<td>Pinayet Misses His Friend</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Sending-a-Letter-Home.php">Sending a Letter Home</a> quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hiya Ullavin, how are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Always good to see you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Would you like to do some more work for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course, how can I help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I knew you would help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You see, I just got a letter from my old friend Beniua Busuka over at the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I've been bragging to her about Brado's cider for ages, and now she's talking about having some shipped to her on the next caravan!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, I don't want her to have to do that, so I was hoping you could pick some up from Brado and take it to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Of course I'll give you something for your time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet hands you a slip of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: There you go!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That's a payment note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Just give it to Brado and he'll give you a small crate of cider.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: When you get to Beniua, just give her the crate.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here to collect a crate of cider.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Pinayet's a good sort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I'm always glad to help him out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Here's the cider.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado hands you a small crate.-</td>
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
							$npcName = 'Beniua Busuka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Beniua Busuka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua seems surprised but accepts the crate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: A delivery?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Please, tell me who sent it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: pinayet</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: How very thoughtful of him, but that's Pinayet's way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua opens the crate and claps her hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Brado's cider from Ojaveda!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: What a wonderful gift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I was just going to request some from the next caravan heading that way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua looks at you and gives you a soft smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Pinayet must think well of you to trust you to do this thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Do you think the same of him, I wonder?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: You should make the effort to get to know him, he is much more than he seems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Before you go back to him, visit Toda Ombretis in Ojaveda and ask her about Pinayet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: You might be surprised.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about Pinayet Ullavin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Ynnwn, didn't you ever wonder why Pinayet Ullavin is the only Ojaveda guard who is not an Enkidukai?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: It's because he earned it, and the respect of every Enkidukai in Ojaveda in the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Pinayet Ullavin nearly lost his life saving the twin daughters of Vigesimi Torkesyn Rabani.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: The twins wandered off while the family was having an outdoor party by the banks of the Irifon River.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Pinayet was making his way to Ojaveda, looking for work as a sell-sword, when he saw the Vigesimi's two lost cubs being stalked by a pair of serpent gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: He put himself between the girls and the gobbles and a fierce battle commenced.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda pauses a moment to study your expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what did he do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Pinayet had nothing but his father's old axe, used for felling trees, but with that he killed both gobbles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: The party heard the noises and soon found the twins, crying but unhurt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Pinayet, however, was badly wounded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: The Vigesimi had Pinayet taken back to his own ultic, where he was cared for until he recovered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: As soon as he was well, Pinayet was given a place in the Ojaveda guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: He has served with honour there ever since, as anyone in Ojaveda will tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: You really should go to Pinayet and ask him about the Rabani twins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: It would do him good to talk about it.</td>
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
							$npcName = 'Pinayet Ullavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pinayet Ullavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about the Rabani twins?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet blushes a deep red.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Gracious, how I love Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I just did what any person would do, but everyone here still talks about it like I was some noble warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: They healed me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: They gave me a job I love.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I owe them much more than they owe me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: That's that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet shuffles his feet, smiles and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Did Beniua get her cider?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes she did.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Well, then, I hope she likes it as much as I told her she would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Here is your payment, friend.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pinayet hands you a few tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: YOU, you have been a great help to the guards both here and in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: I know that some current and past Guards from the Eagle head fortress have been impressed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: You should head up to the Fortress and speak to people like Beniua Busuka, Rylour Awnnys, Tarmeen Alecheech, Sierann, and Nkel who I think is stationed in a guard tower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: There is also a retired dwarf in Hydlaa who might give you a few tasks now you have proven yourself, has a last name of Bloodaxe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet: Good luck.</td>
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
						<td>Rewards: 30 Faction with Guard, 7310 Tria, 15000 XP.</td>
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
