<!doctype html>
<html>
<head>
	<title>Trasok's Ancient Sword</title>

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
						<td>Trasok's Ancient Sword</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Trasok-Special-Axe.php">Trasok Special Axe</a> quest, 4 Trepor Hearts.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Need help with anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Some time ago, an adventurer returned from the Stone Labyrinths with treasure, including magical items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I managed to identify and fix them all except one: a magical sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It seems to be resilient to normal identification, and I need someone to find out more about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it sounds like a challenge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I think that the best person to help you with this is Grok Idon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Kra is a merchant and an alchemist of some repute that can usually be found on the road between Hydlaa and the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Please find kra and give kra this sword.</td>
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
							$npcName = 'Grok Idon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grok Idon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you identify this sword?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok takes the sword and twists the blade in the light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: This looks like a very interesting weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Who needs it identified?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok Starhammer sent me to see you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Ah, Trasok, I've made some good deals with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: So let’s get at it, I will try my best to understand the nature of this sword.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok rubs the top of an opal ring on a finger on kras left hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The sword starts to tremble.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It escapes Grok's hands and slashes at kra in a wide arc.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It seems to have little effect on kras stone body. After the slash, the sword drops to the ground, and remains still.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: What in the name of Talad was that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: The sword attacked me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: It seems to have a will of its own!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Was that a trick by you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I am as surprised as you are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Very well, I trust you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: There is one thing I felt during the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Even if it may sound strange, the sword tried to interrupt the identification.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: It tried to slash me so the identification would fail for lack of concentration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: The problem now is, how can we continue with this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: The only person that can help is probably Levrus Dahrenn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Go to him and tell him about the ancient sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: There's a chance that he can help you.</td>
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
						<td>YOU: I have something to tell you about a sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Let me hear your story about this sword.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus listens, his eyebrows twitching as he does so.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Seems very interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Intelligent weapons are extremely rare, but clearly possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I've encountered some in my career.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This one seems to have a strong will and some magical protection to avoid full identification.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Is it very important to know more about this sword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it is a task I have to see through.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, if you really care, then I can think of but one possibility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What I suggest is you somehow take the sword to the Death Realm, where all magic is different, so that perhaps the sword's enchantment will not hold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Surely one of its denizens will know of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I wish you luck, and hope to see you alive again one day.</td>
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
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a story about a sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven listens patiently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: That's quite a tale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: So you want me to identify it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes please, it is important.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: This information will not come without a price.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Bring me four Trepor hearts, and I will identify the weapon for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The hearts you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Great, that's exactly what I needed for my next experiment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I can identify the sword for you now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Give me the sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: A few minutes, now be quiet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven starts casting a spell. Some time passes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Yes, I've learned a lot about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The sword is indeed intelligent, and it seems to be currently sleeping or dead, possibly because of the Dark Crystal's presence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I was thus able to scan its inner magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I can tell you that the name of the sword is 'Heenarty,' which means 'Black Horizon.' The sword is surely evil, and I will not suggest any mortal hold it for more than few hours, lest it corrupt his or her soul.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven frowns, then continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I've also learned that the magic word 'Kluutarius' seems to activate a spell on the wielder, making him reveal his inner thoughts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: That's the reason why I'm handling it from the edge!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take the sword, and do with it what you will.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The swords name is Heenarty.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: That's an interesting name for a sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Sounds ancient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Is the sword good, evil, or neutral?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Evil, with a heart as black as an eclipse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, that's what I was thinking, and your finding is very important to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I don't want to keep any evil weapons around me or my shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Keep it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Perhaps in your travels you'll find someone who can purify, disenchant, or destroy it safely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Take this item as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It was given to me by the one who found the sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It is likely evil as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thanks again!</td>
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
						<td>Rewards: 1 Darkness glyph, 1 Ancient Sword, 30 Faction with Smith Association, 15000 XP.</td>
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
