<!doctype html>
<html>
<head>
	<title>Deceive Your Way In</title>

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
						<td>Deceive Your Way In</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Party-of-Rogues.php">Party of Rogues</a> quest.</td>
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
						<td>YOU: I'm here to see…if you have some more 'work' for me…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Well, well, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Back for more, are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: My eyes-and-ears around have told me your name is YOU and you might just be the sort I need for a special assignment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I've seen you around enough to maybe trust that you won't stab me in the back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Do this job for me, and the Winch area will be your oyster, ripe for taking pearls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Have I interested you?</td>
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
						<td>Zak: That's what I wanted to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I've got an operative in the Winch area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Goes by the name of Acigra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He has acquired the winch's engineering designs, and I need them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You don't need to know why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: But first things first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I'll need some items to forge official documents requesting you access to the Winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Will you still do it?</td>
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
						<td>Zak: I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: We'll do this one step at a time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: First, I need ink and paper from Jayose the librarian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He's not going to question it, as this is a perfectly legal transaction.</td>
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
						<td>YOU: I need some ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Let me check.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose opens a drawer and takes some ink and paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I can give you this for fifty Trias.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the Trias.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And here are the Ink and Paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose handles you the item.-</td>
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
						<td>YOU: Here is your ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Easy enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Now, I'll need some wax.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You might know that wax comes from a substance in wool, so you'll need to find someone who works with rivnaks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Terea Lohdren is an animal trainer, so she'll likely have some, but we can't let her know that it's for a seal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: It's suspicious, plus she knows who I am, if you recall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Just ask her to give you wax, and tell her it's for candles if she asks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You'll be paying for the wax yourself.</td>
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
						<td>YOU: I would like to buy some wax please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Pressing wax out of rivnak wool is a hard process and not cheap.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I don't sell it to just anyone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: What are you planning to make with it, anyway?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Candles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Oh, candles?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Yes, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: A packet of wax is one hundred and fifty tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One hundred and fifty tria, here you go!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Here is your wax.</td>
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
						<td>YOU: I got your wax.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ah, well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: While you were gone, I completed the written portion of the documents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: There's only one thing left: an official seal from the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Roobelh works for them and us, so he'll be able to procure a duplicate of the seal, but he'll probably want a hefty sum to keep his lips firmly closed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: That falls to you as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Just ask him for a duplicate seal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: There's only one reason you'd want one so there's no sense in making up a story for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Now get out of here before you're seen, and don't return without the seal.</td>
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
							$npcName = 'Roobelh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Roobelh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need a duplicate of the official Eagle Bronze Doors seal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Quite an odd thing to ask a guard about, would you not say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I do happen to have such an item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: If I am caught by Aerayau Strongwill, however, it will cost me my job and I will need some compensation: four thousand two hundred tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: You can give that to me at any time in exchange for the seal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: If you are unwilling to pay that, I could just give it to you, but I would be forced to tell Aerayau, and every guard from here to Hydlaa and beyond would know you to be a thief.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Are you willing to pay?</td>
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
						<td>Roobelh: I thought you'd see it my way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: Hand over the tria when you have it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: And here is the seal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Roobelh: I sure hope Aerayau doesn't hear of this.</td>
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
						<td>YOU: I got your seal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I hope you didn't find any trouble getting this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak impresses the seal onto the wax on the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: And that should do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Now listen closely: I'm only going to say this once.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak holds up a finger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Give the winch access request to the treasurer, Willam Chorind, and he should give you winch access papers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He's the least suspecting government official who can grant winch access.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If he asks who sent you, say Aerayau; obviously don't tell him the truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: From there, you are to tell Acigra the code phrase: 'delicious shadow moths.' If Jefecra Harcrit gets a hold of the engineering designs, it's all over, so stay alert.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Take the documents, and get ready to Deceive Your Way in.</td>
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
							$npcName = 'Willam Chorind';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Willam Chorind</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my access request.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Now let's see here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam inspects the documents quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: This form appears to be missing a sentence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Who gave you these papers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Aerayau Strongwill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: It's an honest mistake, but I hear that he has a meticulous administrator.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I wouldn't think this would slip by her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Anyway, this seems to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Here are your access papers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Present those to Percival Hawthorne and he should let you in and recognize you from now on.</td>
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
						<td>Rewards: 20 Faction with Thieves Organization, 16400 XP.</td>
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
