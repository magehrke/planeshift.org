<!doctype html>
<html>
<head>
	<title>A Dirty Job for a Dirty Mercenary</title>

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
						<td>A Dirty Job for a Dirty Mercenary</td>
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
							$npcName = 'Bordaron Arakaben';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bordaron Arakaben</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I help you with anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Bugger off, stinking ulberfart Klyros...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben seems to ponder a bit before grinning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Wait, I do have a job for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: It's a dirty one, but it is a job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: I will give you tria for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, a dirty low-paying job sounds good to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Good for you, better for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: You know the youngling of a mercenary named Laranier?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Anyhow, he is a nobody with laughable dreams of fame and honour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: Your job is to show him that he is nothing but that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: When his spirit is broken and his dream is shredded to pieces, then I will pay you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bordaron Arakaben: So, just get to it.</td>
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
							$npcName = 'Laranier Vieduran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laranier Vieduran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey there clacker, you look like a wimp of huge proportions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Stay away from me or I will..</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran scratches his head while he measures you up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Or I will break your nose in five pieces with one punch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bordaron told me to crush your dream of fame and honour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: I am not surprised at that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: He tells everyone he meets to do that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: It seems like his dream is to crush mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Maybe you would like to help me get back at him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: HA! Why not, I will help you get back at that bully.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Great, but I have no clue how to bully a bully of such proportions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: If I open my mouth when he is nearby, he just punches me right in the face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Maybe you could find out something I could hold against him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Something that will threaten his status as a mercenary?</td>
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
							$npcName = 'Krri Koreni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krri Koreni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me something about Bordaron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: He is nothing but a brute and a bully.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni pulls a sour face and sticks out her tongue in disgust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: I can tell you one thing, that monster should have been kicked out of the arena a long time ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: He continues to host illegal fights both here in the arena and, I've been told down in the sewers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: I bet he makes a lot of tria on it and spends probably half to bribe off Gregori and other officials.</td>
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
							$npcName = 'Nayera Menayan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nayera Menayan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me something about Bordaron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: Bordaron is one of the strongest of the mercenaries in the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: If you have a particularly tough job needing to be done, he is the one to talk to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: He is not afraid to get his hands dirty, either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: But some good advice is never to place a bet with him, as he is known to cheat and never to pay up if he loses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: Sometimes I wonder why he still is allowed in the arena, specially after...</td>
					</tr>
					<tr class="quest_npc">
						<td>Nayera Menayan: Well, that is not for your ears.</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about the mercenary named Bordaron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Why should I tell an up-nosed blimp like you anything about anyone?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Because he is a bully that needs to be bullied.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom scratches the back of his head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: There is actually one thing I would like to tell you about him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Bordaron usually hangs around here, arranging illegal fights.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Too much fuss if you ask me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Here, take this little note as proof of his activities.</td>
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
							$npcName = 'Laranier Vieduran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laranier Vieduran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are Laranier, proof of Bordaron's illegal fights in the sewer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Now I have something to shut him up with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Hopefully this will put an end to his bullying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Thank you so much Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laranier Vieduran: Here, take this as a token of my gratitude.</td>
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
						<td>Rewards: 10 Faction with Fighters Guild, 1297 Tria, 9400 XP.</td>
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
