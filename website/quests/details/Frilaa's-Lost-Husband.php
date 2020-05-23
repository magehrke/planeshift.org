<!doctype html>
<html>
<head>
	<title>Frilaa's Lost Husband</title>

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
						<td>Frilaa's Lost Husband</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I don't need anything right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: My husband will provide for me, I hope.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Frilaa Bhundri's tail lowers a bit and she looks away.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about your husband.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: My husband Jalar is one of the richest merchants in Hydlaa and he loves me very dearly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Frilaa Bhundri looks back at you and thinks for a moment before continuing.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: But.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I am beginning to get worried about him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I haven't seen him for several days, and usually he tells me before embarking on lengthy journeys.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Frilaa Bhundri looks about uneasily.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I don't mean to impose, but would you be willing to find him and ensure that he is safe?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I will make sure that he rewards you, of course.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Frilaa Bhundri nods, more to herself than to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Yes, yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure I will help, where should I start?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Thank you so very much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I am very grateful for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: My husband is always on good terms with the Vigesimi of Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Frilaa Bhundri smiles and looks proud of this fact before her expression grows anxious again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Perhaps you should talk to her?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please hurry back!</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am enquiring about Jalar, on behalf of Frilaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Ah yes, Jalar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: He came to talk to me about a week ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: He seemed a bit troubled.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Amidison Stronghand closes her eyes and ponders for a minute.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Ah, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: He said he was going to Ojaveda 'on important business.' If you need to speak with him, I'd suggest that you ask about him there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Good luck on your journey, Sir.</td>
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
						<td>YOU: I am looking for Jalar; seen him around?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: My server Fruntar mentioned something about that fellow a few days ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Why don't you ask him?</td>
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
							$npcName = 'Fruntar Durek';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fruntar Durek</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for Jalar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: The rich merchant?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Ah, yes, I think I saw a him a few days ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: He was walking with some rogues on the Hydlaa road.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: They seemed to be guarding him, but I only saw them for a minute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: They turned off not too far from here in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fruntar Durek looks toward the tavern's doorway with an anxious expression.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: You don't think that maybe...</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: oh, oh dear, I hope he is all right.</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for the merchant Jalar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Ah, yes, the 'aristocrat.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Enack Lerenal laughs darkly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Someone looking for him, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Well, I do have some information, but as you know, I'm a merchant...</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: it will be one thousand tria if you want to hear what I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: You going to pay it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will pay.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: All right then, hand it over.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						1000 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, take it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Ah, thank you for your cooperation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Basically, it looks like our aristocratic friend has managed to offend the rogues somehow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I'm not entirely sure how this happened, but they are none too happy with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: He might still be alive, but you won't be able to get to him now, as he's under heavy guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I'd recommend you tell whoever's looking for him that he was captured.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have bad news. Rogues captured your husband.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Heavens no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: How could this happen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I must get help immediately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: The guard must be raised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Perhaps the Vigesimi will help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: They were good friends...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She pauses for a second, looking about dazedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I promised you a reward, did I not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Well, my husband isn't here to open the safe, I cannot give you as much as I might like, but I will give what I can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Thank you for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you some circles before returning to her rescue plans.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Farewell, Sir!</td>
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
						<td>Rewards: 1297 Tria, 9400 XP.</td>
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
