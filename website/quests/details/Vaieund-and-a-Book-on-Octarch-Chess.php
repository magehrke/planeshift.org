<!doctype html>
<html>
<head>
	<title>Vaieund and a Book on Octarch Chess</title>

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
						<td>Vaieund and a Book on Octarch Chess</td>
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
							$npcName = 'Vaieund';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vaieund</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking for a quest!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Hail Stonehammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: A quest eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: I do not know if I have anything grand for you to do, but there is something I want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Meoeor and I play Octarch's chess often and I have heard word that Jayose has penned a strategy guide that might help me to keep my edge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Go to Hydlaa and find me a copy of this book and return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: If you can handle this, I will pay you more than fairly; I have quite a bit saved up from me adventuring days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Do you accept the job?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can go and see him next time I’m in Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: I would start at Jayose's if I were you.</td>
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
						<td>YOU: Vaieund sent me to get a book of strategy on Octarch's chess.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I truly wish I had one to sell, but you see the one copy I did have disappeared before I could have my scribes make more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I do not really have the time to go looking for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Maybe you would have some luck in tracking it down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ask some of the folks here in the library if they have heard anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: If you can track down the missing book and return it, I will give you a reward and make a copy of the book for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Can you handle that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ask my assistant Lori Tryllyn about a missing book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: She's upstairs.</td>
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
							$npcName = 'Lori Tryllyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lori Tryllyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about the Octarch's chess strategy book?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You're looking for that book too?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I work here, and I scribe the copies for Jayose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: The old coot probably set it down somewhere and forgot it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Maybe you could ask Durok Rrecrok; just tell kra I sent you or ask kra about any strange people in the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Durok is probably downstairs.</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lori sent me to ask you about the strange people?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Looking for that book, too?</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I cannot say I have seen it, but I do think I saw a dodgy character in here about the time it went missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: There are always tournaments of Octarch's chess and sometimes there are prizes for winning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: It might actually be worth stealing for those reasons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I would ask Terea Lohdren.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: She was visiting the library at about the time the book went missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I saw this shady man and I think she got a better look at him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Just tell her I sent you or ask her about the dodgy fellow.</td>
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
							$npcName = 'Terea Lohdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Terea Lohdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about that dodgy fellow you saw?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Ah, yes, Durok told me a book came up missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: That explains a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I saw a man who looked very much like he was of poor character in the library, so of course I was curious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: He only stayed a moment before leaving hurriedly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I let him leave, but soon I decided to follow him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: He left the library district and headed toward the Laanx temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: He snuck past Menlil and Sharven and jumped into the well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I'm not so crazy to jump down there, so this is where I lost him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I bet whoever this person is, he is hiding out somewhere in the Laanx dungeon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: If you find a shady looking man, just ask him directly about the Octarch's chess book or tell him I saw him.</td>
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
						<td>YOU: Tell me about the Octarch's chess book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I knew that Talad follower was trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: All right, look, you have enough to cast suspicion on me, but there are no guards down here to help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If you want the book back, you have to do something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I came across this bottle of Carrion Crawler Larvae, only I do not know what it does, so I do not know who to try to sell it to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If you can, find out what it is used for and return and tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I'll help you then and only then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: clean infectious wounds</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Good good, the larvae will have some value then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I have copied the most important parts of the book in the meanwhile, so I don't need it anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: In Yliakum, it is often wise to mind one's own business.</td>
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
						<td>YOU: gives the book of Octarch's chess strategy to Jayose.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Nicely done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now to make you a copy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose takes out a blank book and a glyph and begins an incantation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Oh grains of time, save me mine and write this book for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: My pen hand is sore, and evermore, you score the page with glee.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-One of the quills on the desk animates, and the book is quickly copied.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Yes, there we have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Here is your copy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Goodbye and good luck.</td>
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
							$npcName = 'Vaieund';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vaieund</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your copy of the stratgy book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Nicely done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Now Meoeor will never have a chance at the tournament.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Thanks and here is something special for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: I do not know what it is for but it certainly looks important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vaieund: Farewell!</td>
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
						<td>Rewards: 1 Keyhandled Dagger, 12200 XP.</td>
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
