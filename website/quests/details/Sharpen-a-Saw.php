<!doctype html>
<html>
<head>
	<title>Sharpen a Saw</title>

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
						<td>Sharpen a Saw</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Lentanor Thunderhead';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lentanor Thunderhead</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, do you need help with anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: No, I don't need any help, but thanks all the same.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor tries to saw a block of wood, but seems to be having trouble.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Eh, now that you mention it, this saw is a bit dull.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Can you get it sharpened for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, how do I go about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Here's the saw; tell Harnquist that I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: I have an arrangement with him for regular tool sharpenings and pay him monthly, so don't worry about having Tria on hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: He's nice and close, plus I don't trust that Trasok Starhammer one bit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: I'll be expecting you back soon.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lentanor sent me</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That man really needs to take better care of his tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If it's not one thing, it's another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: What is it this time?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Saw?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Chisel?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Saw</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, I was right the first time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Let's have it then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'll put it on his tab.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist whistles a merry tune as he runs the saw on the sharpening stone. Sparks begin lightly showering the floor around it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That should do it a treat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Oh, while you're at it, give him this invoice as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: He can pay it at his leisure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Talad knows he always does.</td>
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
							$npcName = 'Lentanor Thunderhead';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lentanor Thunderhead</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Ah, yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor touches a tooth on the saw, then quickly sucks his finger and nods approvingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Always does a good job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Now, I believe there's an invoice for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor unseals the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor Thunderhead Thunderhead holds out a slightly bloody hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Hrmph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: I'll get to that later.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lentanor slips the invoice inside his vest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Well, here you go, my good Hammerwielder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lentanor: Don't spend it all in one place.</td>
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
						<td>Rewards: 12958 Tria, 17800 XP.</td>
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
