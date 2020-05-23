<!doctype html>
<html>
<head>
	<title>More Coal</title>

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
						<td>More Coal</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
						<td>YOU: You need more coal then do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Indeed Coal, lumps, dark and dusty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You were destined to be sent here to help me on this day of days!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you accept this challenge?!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, but what are you doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Supper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you hungry?…No, time for that later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now I am preparing for a performance of a musical I wrote.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: “More Coal”.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And I expect you to help me with my lines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, I don't have the script written down so I don't have one to give you so you will just have to play the part of my compatriot by…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus lifts his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With his fingers spread he moves them round his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: By, KNOWING the lines you have to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But if you say something wrong we will have to start over so you better be ready for the verbal adventure you are about to step into.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus slams his hands onto his counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: ARE!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: READY?!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YES I'M READY!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Great.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus clears his throat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He begins to cough, placing both hands on the counter the coughing gets noisier and sounds horrible.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a minute or two he coughs up a tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Looking down at it he announces.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: HA!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I knew it would come back at an inappropriate time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Umm, nasty. So how does the musical start?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smiles at you as he takes in a deep breath to begin singing at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: NEEEEEED…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: COOOOOOOOOOOOAAAAAAAAAAALLLLLLLLLLL!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Once he stops he looks at you awaiting the next line.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YOU AREEEEE CRA-CRA-CRAAAZY!!!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus beams with a smile ear to ear as you get the line right.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: HOW CAN I BE CRAZY FOR I NEED COAL AND IF I DIDN'T NEED COAL I WOULDN'T NEED COAL AND WOULDN'T ASK FOR COAL!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I HAVE COAL!!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: IF YOU HAVE COAL AND GIVE IT TO ME.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THEN I HAVE COAL.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: FOR I NEED COAL.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: FOR COAL IS GOLD AND WHEN SOLD BECOMES OLD AND BOLD AND WILL FOLD INTO SOMETHING FOLDED FOR EASY STORAGE.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I SHALL GET COAL!!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: IF YOU GOT ME COAL!!!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THEN THAT WOULD BE GOOOOOOODDD!!!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: NOW BE GONE AND RETUUUUUURNN WHEN YOU HAVE TWO AND FOLD AND HALF OF NEIGH AND DOUBLE THAT OF COAL!!!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus leans in slightly-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: In this part of the musical lots of StoneHammers would come dancing in and you and them would go mining.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: IF I HAVE COAL, AND GOLD, AND FOLDED STORAGE THEN WHAT!!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You haven't even come back from the StoneHammers yet…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now run off and work with them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I! HAVE! COME! BAAAAAAAACK!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: SO I SEEEEE…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: WELCOME-EEEEE BACK!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: DID IT WORK!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: DO YOU HAVE IT!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THE DARK DUSTY GOLD POTION MAKING JUICE!!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: WE GOT DRUNK THEM AND I AND STONEHAMMERING BEER SWILLING TINY PEOPLE!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THAT IS GOOD SO WELL DRUNK BACK AND DONE!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: FRIENDS FOR YOU AND I AND I AND THEM AND THEM AND I AND YOU AND I AND THEM AND YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: BUT WHERE IS COAL COAL COAL!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: COAL COAL!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: COAL!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YES I DO HERE IT IS IT IS HERE RIGHT HERE!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: OH YES, HERE IT IS.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: WE ARE ALMOST DONE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THERE IS LITTLE LEFT TO DO THEN ONCE WE ARE DONE I CAN MOVE ON.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: TO GREEN SHINY GRASSY AREAS, NOT TO FAIR FROM HERE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: BUT NOT HORRIBLE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: NOT TOO CLOSE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: IT WILL BE NICE…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: POTION MAKING IN THE FOREST!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: SO WHAT IS NEXT WHERE WILL ALL THE COAL GO?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I NEED BOXES, BOXES OF BOXES WITH BOXES.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: ROUND BUT NOT SQUARE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: WOOD BUT NOT METAL.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: SMALL BUT NOT LARGE BUT NOT TOO SMALL OR THEY ARE USELESS.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: GO FETCH THEM BOUNCE THEM ROLL THEM GET THEM BRING THEM PULL THEM DELIVER THEM.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I HAVE THE BOXES LETS GET STORING.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THAT IS GREAT GIVE THEM HERE.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I SHALL PACK AND STORE AND PUT THEM AWAY.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THERE ARE MANY MANY PILES OF COAL AND DUST DARK GOLD.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THIS IS GREAT, YOU ARE GREAT, WE ARE GREAT THINGS ARE GREAT.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: MY WORK WILL SUCCEED AND ALL WILL BE BETTER.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: THIS PLACE IS MESSY TIME FOR CLEANING!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No, this is a musical re-hassle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You don't have to worry about cleaning up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: NOW FOR MR COLE!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: MR COLE IS GREAT AND AMAZING AND NOT AT ALL PURPLE!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: HE HELPS AND TALKS AND DANCES AND SINGS.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: THE POTION MAKER MR COLE IS THE COAL COLLATING KING OF THE DUSTY DARK GOLD.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: LET ME HELP WITH POTION MAKING.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ok, yes, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This has gone well so far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Thank you, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'll send a message to you once we are all ready to perform.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's been.. interesting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes it has.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And for helping me out I think you should get this wonderful gift from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you ready to receive it?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: ARE YOU?!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus throws his hands up in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: IT WILL CHANGE YOUR LIFE!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus bends down and reaches beneath his bench.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks at you, making noises under the counter building up suspense.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He suddenly stands up and places his gift on the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A broom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I thought it would be perfect for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Especially if you work with Mr Cole for real, great for sweeping up dusty dust.</td>
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
						<td>Rewards: 1 Broom, 9400 XP.</td>
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
