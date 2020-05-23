<!doctype html>
<html>
<head>
	<title>Gardr Writes a Book</title>

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
						<td>Gardr Writes a Book</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Gardr, need some help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Hmmmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Oh, oh yes, I would love some help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I wrote a book, but I want to know if, hmm…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr looks thoughtful and then nods slowly to kraself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Yes, I need to know if it's good enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Can you help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will, hand it over.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Bring this to…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: What's kras name…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I know kra can help you correct the mistakes on the book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Bring it to kra.</td>
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
							$npcName = 'Kerryk Cor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kerryk Cor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gardr needs you to correct the mistakes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Does kra, now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Let's see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk starts reading the book, frowning a bit at the horrible calligraphy.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Someone must teach kra how to write straight…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra starts scribbling on the book, correcting the mistakes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Here, take it back to Gardr, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Though not sure why kra insists on making this in native Kran rather than Common.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah well, kras business.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, corrected as you asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Thank you, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But now I need someone to, uhm, translate it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: There is, ah…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Yes, the librarian's helper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Ask Jayose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: No, ask his helper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Need to translate it to Common.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And then ask the Fenki, in the Arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: She knows how to draw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Jayose will copy the book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Make two, no three, no, make it five copies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Yes five copies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Translate then draw then copy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Quick.</td>
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
							$npcName = 'Arion Fildar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Arion Fildar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please, translate this book for Gardr.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Fine, fine!</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: But it will be a round circle for the job.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion holds out his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, a circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Give me a minute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Lucky for you I just happen to have my book on the Kran language.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: I could probably do it from memory but it helps to confirm things.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Arion starts scribbling frantically on a blank book, reading Gardr's draft every now and then and checking his Kran book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Finished, that was easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Arion: Here, your book!</td>
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
							$npcName = 'Veja Pontor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Veja Pontor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gardr needs you to draw kras shield designs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Ugh, these are really ugly…but I know what to draw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Wait a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Veja takes a piece of charcoal and some parchment and starts drawing quickly, using Gardr's drawings as a reference.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: There you go.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gardr needs you to copy some books. Five copies please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Five?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose looks at the materials for a minute.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ah I see, take the manual and drawings to a single book, then make five copies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Got it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: That will be quite expensive, but I'll send kra the price later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Give me some minutes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose starts fiddling around his desk, murmuring words and placing blank books over it. He puts the translated manual and the drawings over the pile of books and starts casting a spell.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Wait a bit, please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some minutes pass…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose checks on a book then rolls his eyes and mumbles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: …like I'm some sort of copy making machine.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose checks again and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Alright, done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You can bring these to Gardr.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good books.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You helped me a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I want you to have one of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Try to make a shield with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Thank you, Enkidukai.</td>
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
						<td>Rewards: 1 Protector Shield Diagram, 25 Faction with Crafting Association, 13600 XP.</td>
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
