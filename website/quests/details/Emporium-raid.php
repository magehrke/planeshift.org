<!doctype html>
<html>
<head>
	<title>Emporium raid</title>

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
						<td>Emporium raid</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Wax-for-Tarela.php">Wax for Tarela</a> quest.</td>
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
							$npcName = 'Rinna Voladrand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rinna Voladrand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: As you may know, we had a raid at our Emporium shop some time ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: We never found the thieves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Maybe you can help me to discover a bit more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I will tell you a secret about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: The night before the attack, I heard a strange noise come from the common room.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I went to check and found a note written in an odd language.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I have no heart to tell Boralis my discovery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I do not wish him to go on a fit of revenge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: My only fear now is that if we don't find the outlaws, they will turn against us again in the future.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I will give you the note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Seek out anyone who might know about thievery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Return to me when you have gained any information.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about this note?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Hey, what's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: These are dangerous words…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: More than you realize.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I will not tell you anything about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I have nothing to fear from you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You've got nothing on me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: What are you going to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am sure the guards would like to know you are down here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Hey, I do not wish to be tortured for what my head holds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I've done nothing wrong!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak looks around nervously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ok, 'Leeshaile shold saardh' is Rogue tongue for, 'You have been marked.' Press me no more: I wish to stay away from such dirty business.</td>
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
							$npcName = 'Rinna Voladrand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rinna Voladrand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It seems you have been marked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Oh my…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Sweet, merciful…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: 'Leeshaile shol saardh' means 'You have been marked?' Thank you for this bit of information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: This means we are in real trouble!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I need to know who they are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Please, return to your source and hand them the note, asking them who wrote the note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I must know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: It is the only way to aid my husband.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need more information.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Hey what you want this time?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who wrote this note?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Let me look at it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak inspects the note carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Mmmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I think I know who wrote it, but disclosing that to you seems not a good idea if it's not for someone I care.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Who received that note?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rinna and Boralis Voladrand</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ah, Rinna and Boralis.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: They sell me stuff and don't judge me when I keep my face concealed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Very well, I will tell you then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: My guess would be that the Onyx Dagger wrote this note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: They are the only active group in the Hydlaa region who uses this dialect of Rogue tongue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I have answered as you wished; now leave me be.</td>
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
							$npcName = 'Rinna Voladrand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rinna Voladrand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It seems that the Onyx dagger is behind the raid.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: So the Bandits are named 'Onyx Dagger!'</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I shall remember that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Thank you for finding this out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: I would certainly feel safer if you spoke with my friend, the guard Rabartus about the Onyx Dagger group so they can be punished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: He may even reward you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Would you do this for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I would be happy to deliver the message.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: Thank you very much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rinna: That relieves my mind.</td>
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
							$npcName = 'Rabartus Livrandar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rabartus Livrandar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Onyx dagger is responsible for the raid on Rinna and Boralis's Emporium.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Yes, what of it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rabartus listens to the tale.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: The Onyx Dagger?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: That's a good lead, but I know little about you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: How I can trust you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Do you have any evidence to support what you are saying?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: If so, I'll take it now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have this note that they left behind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: That's great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: now that we have evidence we can investigate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Thanks for your help, citizen; this city needs more people like you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Take this as a reward.</td>
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
						<td>Rewards: 15 Faction with Crafting Association, 2107 Tria, 10800 XP.</td>
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
