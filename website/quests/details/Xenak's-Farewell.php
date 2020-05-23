<!doctype html>
<html>
<head>
	<title>Xenak's Farewell</title>

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
						<td>Xenak's Farewell</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Telzanna's-Acting.php">Telzanna's Acting</a> quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Maybe there is a shortcut, changing the requirement of Telzanna'a quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
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
						<td>YOU: I've spoken to everyone and want to pass into the main city.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Xenak smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Really, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: As you have only just arrived here I know for a fact that the people in this outpost have been told to help all those who arrive here before entering in to Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: I hope you made a good choice with the weapon and glyph you got from Ibhaar and Orphia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Most people who pass though this gate have a lovely selection of items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I'm ready for the main city.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You will be able to pass back into this area at any point later if you want to look round, help out new arrivals yourself, or re-read the books on the notice board.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should be aware that the city is full of different characters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should think about what part of society you are going to try and fit into when you get in there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Try and stick as closely as possible to that as people here are very welcoming to those who stick to their character.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Be aware that this is a ROLEPLAY game and current players will interact with you as if they, and you, are ‘playing a role’, be it warrior, thug, cook, musician, smith… The jobs just mentioned are some examples of what you could do. But BE ADVENTURIOUS in the stories you try and tell and the people you work with. People in PlaneShift love to be part of stories others make. To this end try and stay In Character, IC, the character you play will only know about the world it is in, PlaneShift. And so you should try and talk and act like a character in this world, not one who knows and talks about the real world.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: If you need help with this please ask other players. Those you find in places like the tavern or at Harnquist's smithy are generally more than happy to help get you started with 'Playing a Role' in PlaneShift.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Very well, let me through.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: As you wish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Welcome to Hydlaa, we all hope you have fun and enjoy your stay here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Once you have passed into the main city you will appear next to the Windowless Tower, the tallest object in Hydlaa which is next to the North Gate that lets people into and out of the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should head away from that gate down into the main plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: From there you will see the giant Laanx temple, the smithy for the famous blacksmith Harnquist, the pathway into the Arena, and the pathway into East Hydlaa where the library is located.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You have no doubt learned lots about all that can be done in the city and who to see first about different skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: You should go and see some of them to get started properly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Xenak hands you a welcome letter.-</td>
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
						<td>Xenak: Yes, this letter can serve as a reference about different places and people if you need a reminder…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Xenak hands you the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Now, I don't really need to ask this, but are you SURE you want to pass into the main city?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: If you want to return to the tutorial at any time in the future to re-read information about PlaneShift which is posted on the notice board or for any other reason, just return to the gate where you appear in the main game and right click on it and chose 'enter' this will bring you back into the tutorial. To return back to the main game just right click on the gate in the tutorial map and it will move you back in to Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Xenak: Ok, good bye, and good luck.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally, this game is made by a group of dedicated volunteers during their free time. We all hope that you enjoy the game and spend many hours exploring the world we have created. If you have any problems ask in the HELP chat tab or file a 'petition' in the petition window of the main tool bar. If you find any bugs you want to tell the developers about you can go to http://www.hydlaaplaza.com/flyspray and make an account to report it. Most importantly, have fun, and good luck!-</td>
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
						<td>Rewards: 1 Welcome Letter.</td>
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
