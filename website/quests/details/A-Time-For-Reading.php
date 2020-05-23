<!doctype html>
<html>
<head>
	<title>A Time For Reading</title>

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
						<td>A Time For Reading</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Search-for-Knowledge.php">Search for Knowledge</a> quest.</td>
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
						<td>YOU: I thought I'd come back by, see if you needed anymore help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You are here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I was hoping you would come back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You see, I need some help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: A few of my records have been damaged; it seems the parchment I was using that week was very delicious to a strange blue mold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I have recovered what I could of the sheets, but there are a few things yet missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It is this information that I could use your help retrieving.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: There is a good bit of tria in it for you, are you interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'd love to help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Three things, some fairly straightforward research.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: What I need first is for you to tell me where Yliakum got its name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Once you have done that, I need to know the word that gobbles use for greeting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Lastly, I need to know the Octarchal punishment for theft.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: All of this can be found in Jayose's Library, I am fairly certain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Oh, while you are there, please return this volume to Jayose for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a small green book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Please take care of the book, get a receipt for it, and take care with your studies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: It is important that knowledge be kept from corruption and errors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Good travelling to you, Gemma.</td>
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
						<td>YOU: I am returning this book to you, on behalf of Kerryk Corr.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Ah, it has returned safely to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose inspects the book and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I please have a receipt?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose sighs and takes out a small form and signs it and fills in a few bits of information. He looks at the book again and opens it to inspect a few pages. He sets it down and makes a few more marks on the paper before giving it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Your receipt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose makes a bit of a face, adjusts his spectacles, and turns back to his work.-</td>
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
						<td>YOU: hands Kerryk the receipt, “Here you go.”</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Hmmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: What is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, a receipt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk holds up the little slip of paper in a massive stony hand and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: So you found the library, I hope that you have also found my answers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Tell me about the naming of Yliakum: where did that word come from?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: stone labyrinths</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah yes, that's right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk takes out a piece of parchment and some ink and begins to write with a sturdy quill.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Our history is fascinating to say the least.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Did you know that many Lemurs claim that Laanx saved their race from extinction?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: And that some Klyros believe the same deity killed their ancestors?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Very interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Now what else was there?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah yes, the gobble word for greeting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rahle</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Excellent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk writes something down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Most of the less intelligent creatures use body language instead of words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I wonder how people discovered that rahle meant greetings?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, and the last thing I need to recover, what is the Octarchal's punishment for theft?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Banishment</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Correct you are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk makes notes on kras parchment and then sets it aside to dry.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: You have done me a fine service, but I wish to ask you to do just a few more things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: A friend of mine has sent me a letter, saying that he has come across a few intriguing artifacts and has sent them to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: They are in Hydlaa, in the care of Percival Hawthorne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Will you help me once more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Not a problem, I can go pick them up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: He resides on the fourth level, so they shall be arriving through the Hydlaa Winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: I don't exactly know what they are, but I'm sure you'll be able to handle them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Go see Percival and give him this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a small shipping form.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Thank you, and take care on your journey.</td>
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
							$npcName = 'Percival Hawthorne';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Percival Hawthorne</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Percival the order, “Hi, I'm here to pick this up.”</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Percival scans the document with a stern expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: I don't usually do this, but Kerryk is a great Kran to whom I owe many favours.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Percival looks over the order again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: That's kras signature all right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Percival tucks the form away and fetches a large wooden box and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Be careful there, it's fragile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Percival: Best get it to Kerryk as soon as you can.</td>
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
						<td>YOU: hands Kerryk the box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk smiles and gently sets the box by kras foot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Ah, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk gives you a handfull of golden circles in exchange.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: And these are for you, a reward for your time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: If you will now excuse me, I really must get to examining these; who knows what mysteries they hold?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kerryk grins and waves goodbye to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kerryk: Farewell, my helpful friend.</td>
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
						<td>Rewards: 25 Faction with Science Association, 5130 Tria, 13600 XP.</td>
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
