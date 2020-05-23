<!doctype html>
<html>
<head>
	<title>Xenak's First Exit</title>

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
						<td>Xenak's First Exit</td>
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
							$npcName = 'Xenak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Xenak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you let me into the main city? I'd like to go and explorer and maybe come back here later.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Xenak frowns a little at you, but quickly smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Really, you have only just arrived here haven't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: The people in this outpost are very helpful are you sure you'd like to pass into the main city of Hydlaa?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Very well, and good luck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Remember that you can come back at any point you'd like too, to look round, help out new arrivals yourself, re-read the books on the notice board, and also to talk to anyone you have not spoken to yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should be aware that the city is full of different characters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should think about what part of society you are going to try to fit into when you get in there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Try to stick as closely as possible to that as people here are very welcoming to those who stick to their character.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>----</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-INFORMATION: Be aware that this is a ROLEPLAY game and current players will interact with you as if they, and you, are 'playing a role', be it warrior, thug, cook, musician, smith...-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The jobs just mentioned are some examples of what you could do. But BE ADVENTUROUS in the stories you try to tell and the people you work with. People in PlaneShift love to be part of stories others make.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-To this end try to stay In Character, 'IC'. The character you play will only know about the world it is in, PlaneShift. And so you should try and talk and act like a character in this world, not one who knows and talks about the real world.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-If you need help with this please ask other players. Those you find in places like the tavern or at Harnquist's smithy are generally more than happy to help get you started with 'Playing a Role' in PlaneShift.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you, I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Good, I'm glad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Let me be the first to welcome you to Hydlaa, we all hope you have fun and enjoy your stay here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Once you have passed into the main city you will appear next to the Windowless Tower, the tallest building in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: The tower is next to the North Gate one of two major ways into and out of the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: I suggest you head away from that gate down into the main plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: When next to the fountain, you should be able to see the giant Iron Laanx temple, the large smithy for the famous blacksmith Harnquist, the pathway into the Arena, and the pathway into East Hydlaa where the library is located.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Xenak has a letter in his hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is that for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Yes, this letter should serve as a reference about different places and people should you need a reminder...</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: And here are some maps which you can use to help get around in Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Xenak hands you the items.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>----</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-INFORMATION: If you want to return to the tutorial at any time in the future to re-read information about PlaneShift which is posted on the notice board or for any other reason, just return to the gate where you appear in the main game and right click on it and choose 'enter' this will bring you back into the tutorial.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-To return back to the main game just right click on the gate in the tutorial map and it will move you back in to Hydlaa.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>----</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally, this game is made by a group of dedicated volunteers during their free time. We all hope that you enjoy the game and spend many hours exploring the world we have created.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-If you have any problems ask in the HELP chat tab or file a 'petition' in the petition window of the main tool bar. If you find any bugs you want to tell the developers about you can go to http://www.hydlaaplaza.com/flyspray and make an account to report it. Most importantly, have fun, and good luck!-</td>
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
						<td>Rewards: 1 Welcome Letter, 1 Hydlaa East Map, 1 Hydlaa Main Map.</td>
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
