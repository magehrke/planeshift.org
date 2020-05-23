<!doctype html>
<html>
<head>
	<title>Tyrus Broke a String</title>

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
						<td>Tyrus Broke a String</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Gobble-Legacy.php">The Gobble Legacy</a> quest.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello again, do you have any jobs that need doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Greetings, Diaboli.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I do have need of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: My harp has broken a string.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: This is typical, even with the strongest of harps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: However, I have but one more string with which to repair it, so I require a spare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I will reward your efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Will you agree to fetch me one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, where can i get one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Please see Hirenn Darmeth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: He trades in animal hides and might be able to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Ask him about ulbernaut sinew.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: My harp holds court often, so only the strongest strings have any chance of lasting any length of time.</td>
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
							$npcName = 'Hirenn Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hirenn Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for ulbernaut sinew, do you have any?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: That, YOU, is a very difficult item to find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I only get two or three pieces every few weeks, and I have just sold out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: The Mikana Trading company is a much bigger operation; you might want to ask Jirosh about it.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for ulbernaut sinew, do you have any?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Sorry, Sir, I do have five of them, but they're spoken for by Brado.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I just haven't delivered them yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You might try asking him if he'll sell you one of his.</td>
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
						<td>YOU: I am looking for Ulbernaut sinew for Tyrus Beaut.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado leans further forward, looking excited.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Isn't that the Kran who put my granddam's old Serpent and Eagle tale to music?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I have been wanting to hear that, but this tavern would get torn to bits the minute I left, so I can't travel to hear it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado gets a calculating gleam in his eye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Having Tyrus Beaut perform that song in Ojaveda might get some of these young Enkidukai interested in something besides hunting, trading and causing trouble after a few too many drinks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Tell you what, if you get the bard agree to play 'Serpent and Eagle' here, I'll give Tyrus a sinew for free, along with the usual performance fee.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Just ask the Kran if we have a deal.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can get a sinew but Brado requests you perform Serpent and Eagle in return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus ponders for a moment and then nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: An excellent arrangement!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: That tale means a great deal to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I will be glad to share it with those who don't know it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: All Enkidukai should cherish their history, and it behooves me to help them do so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Besides, Brado's offer is most generous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Tell him I accept.</td>
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
						<td>YOU: Tyrus accepts your offer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Hah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: This place'll be packed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I'd best get the word out, and get a chair built for Tyrus.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado winks and pulls a piece of parchment and a quill from within his desk and quickly pens a short note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Take this note to Jirosh and he'll give you one of my sinews.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Then you can take it straight to Tyrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: That Kran's a professional; not one to skip out on an agreement.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado smiles and waves goodbye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: May your path be lit!</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh said I could have one sinew for Tyrus and gave me this to give you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh scans the note quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Interesting…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: why just one sinew?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I will never understand artists.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I'll make sure to order more specifically for Tyrus with my next shipment; I bet kra will have use for them sooner or later.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh rummages around in one of the many crates behind his counter and pulls out a tightly wrapped bundle, which he then hands to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: That's all in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Here's the sinew, and a good day to you.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Finally, I have returned with your sinew!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: A relief indeed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: While a bard might make due without an instrument in a pinch, I prefer to give this performance my very best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I hope you will come take in the tale.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus gives you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Have your well-earned reward, and take care, my good Diaboli.</td>
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
						<td>Rewards: 30 Faction with Artists Association, 7310 Tria, 15000 XP.</td>
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
