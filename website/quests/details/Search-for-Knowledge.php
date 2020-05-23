<!doctype html>
<html>
<head>
	<title>Search for Knowledge</title>

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
						<td>Search for Knowledge</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/bend_the_octarch's_ear.php">bend_the_octarch's_ear</a> quest.</td>
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
						<td>YOU: I'm looking for a way to earn some tria?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, a young Enkidukai in search of adventure or maybe some tria?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Perhaps both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Or maybe you're more than just a hardhead like most people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Perhaps you are actually in search of the one true power, knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk looks you over as if examining you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Well, speak up, are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'm always looking to learn new things.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Knowledge is the greatest power of all, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I have hunted far and wide and found nothing half as powerful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: The thing is, very few know how to wield it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk smiles lightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It's to one of those few that I'm sending you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Levrus borrowed a few records to help him with his work and I need them back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Go and tell him that I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: He shall treat you nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: If you have never been, he lives just outside Hydlaa in his magic shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It is a beautiful place, near enough to Hydlaa for convenience, yet secluded enough for peace and quiet.</td>
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
						<td>YOU: Kerryk Cor sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Kerryk Cor?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, now that's a great Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, yes, Kerryk and I met quite some time ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I had been doing some field research with a couple of apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: We were observing the effects of a spell on certain creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It was about halfway through the experiment when a large tefusang came upon us from nowhere.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus pauses, remembering.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: We were exhausted after all of our spell casting and did not stand a chance against a tefusang.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Thank Talad, out of nowhere came Kerryk in all kras bright blue brilliance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'll never forget that day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I am somewhat surprised that you know Kerryk, actually.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus scratches his chin in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm, I imagine kra sent you to get these records.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus reaches below the counter and frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ermh, it seems I have lost one of them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I must have returned it to Jayose by accident!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus holds out a book to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here, go to his library in East Hydlaa and give Jayose this book, then come back to me with the record.</td>
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
						<td>YOU: Levrus asked me to give this to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ah, excellent, you have found it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Poor Levrus is always so busy, seems he returned the wrong book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Can't really blame him; so much going on in his mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Either way, here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You should bring it straight to Levrus; I'm sure he'll want to know that you found it.</td>
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
						<td>YOU: Jayose sent me back with this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here are the others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Thank you for that errand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Please return these to Kerryk and wish kra the best.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus gives you a box full of writings. He frowns for a moment and plucks a lump of silver ore from the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, that I will need for my research!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm, perhaps I will visit my old friend soon.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus turns away distractedly and goes to examine some books on a shelf, humming a strange tune to himself.-</td>
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
						<td>YOU: Here are your records.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, wonderful, these are the ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: That's very kind of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: A simple archivist can't leave the archives very often; very much to do, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I don't know what I would have done without you, so thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You have done me a great service.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a light wink.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You were in search of knowledge, were you not?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk looks at the records and chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Well, in a way you found it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Hmm, come back to me in a bit, for I'll have something more interesting for you to do once I put these records where they belong.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: For now, take this as a reward, and farewell.</td>
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
						<td>Rewards: 20 Faction with Science Association, 3391 Tria, 12200 XP.</td>
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
