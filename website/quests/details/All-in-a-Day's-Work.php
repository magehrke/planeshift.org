<!doctype html>
<html>
<head>
	<title>All in a Day's Work</title>

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
						<td>All in a Day's Work</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any work I can help you with? For pay, I mean?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The bartender at looks guardedly at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He opens a much-used notebook and flips pages until he stops on one and shows it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The page says - Job available. Pays well. Must have references.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The bartender looks at you, awaiting your response.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: References? Well, umm… from who?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda sizes you up warily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He touches his pendant of Talad and indicates the street outside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why should I get a reference?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Bartender stares at you for a second or five.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he produces a bulging pouch of coins from under his vest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He drops them on the counter with a metallic thud, then quickly hides them in his clothes again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He nods “yes,” then shakes his head “no.”-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He stands looking at you waiting for you to make a choice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes or No? Yes, I guess.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda nods to you, touches his pendant of Talad again, and points up the street.-</td>
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
							$npcName = 'Boroz Tolka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boroz Tolka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you a priest of Talad? The Bartender says you will give me a reference for a job?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Child, I am Boroz, a servant of Talad and honoured so to be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: You said the Bartender told you to ask me for a reference?</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Are you sure of that, Child?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boroz smiles gently at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, he didn't actually say anything, but he pointed me up this street and I found this temple and you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: That was accurately and carefully spoken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Yes, I can help you get a job reference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Yet it is my duty to make sure you prove trustworthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Take this treasure box of offerings to the Temple near the Mound of Talad, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: I have counted the coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Kra will give you a receipt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Bring the receipt back to me, Child, and I will give you your reference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: By the way, what was that bartender's name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Yes, the good Ynwnn's name is Jarda, much to be pitied be he.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: That shows your attention to details.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Yes, I can help you get a job reference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: You must prove trustworthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Take this treasure box of offerings to the Temple near the Mound of Talad, please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: I have counted the coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Kra will give you a receipt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Bring the receipt back to me, Child, and I will give your reference.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Off I go then…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Wait!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boroz continues, stopping you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: One of our worshippers left this ancient statue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: She found it while digging above the Mound of Talad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boroz admires the statue, handling it with great care.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: It's a masterpiece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Would probably fetch a grand price on the black market, be certain that you keep it hidden from any criminals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Would be best to not even go near any while you have this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Give this to Gemma as well, will you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Again, off I go!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Thank you Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Do be careful with all the items.</td>
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
							$npcName = 'Quasus Adyum';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Quasus Adyum</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the offerings from the Temple in Amdeneir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra smiles a similar smile to Boroz.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra opens kra's arms and seems to say a silent prayer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As the Priest counts the coins, kra intones.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Good, my Child, the coin is all here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: But what is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: An extra circle?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra checks the receipt and the coins again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: No, no, one too many!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Quasus looks at you questioningly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, you keep it. Maybe the other Priest wrote the amount down wrong. Oh, and Boroz sent this statue, too.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gemma changes the receipt and adds one more circle to the total.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra hands you the corrected receipt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Quasus also chants as he writes a note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Plus one magnificent statue as tribute to Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Thank you, and Brother Boroz.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra hands you the note and closes his eyes, his arms outstretched.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is that all? Can I go now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra opens kras eyes again and nods slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Thank you, Child, for taking time out of your day to help the Temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I am sure you have earned your just reward for such a long and challenging trip here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Please give the receipt to Priest Boroz, and tell my Brother in Talad we bid him peace.</td>
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
							$npcName = 'Boroz Tolka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boroz Tolka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Phew! I'm back. Here is your receipt… Peace. Kra said to tell you that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Ah good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Thank you for your quick delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: But I realize now I made a mistake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: There should have been one more circle, my own pledge that I put in the box.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Did you find an extra coin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I gave it to Quasus, along with that little carved statue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Congratulations, Child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: That was the test of your honour and reliability.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Here is your reference.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boroz hands you a ring.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: And this is a Ring of Honour, from the God's own Priests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Wear it proudly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Many of our merchants will recognize it knowing you wear it for proving yourself to a priest of Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: They may be more generous with their thanks if they see it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz: Good luck to you, Child.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boroz smiles gently and bows to you.-</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my letter of reference.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda reads Boroz' Glowing Letter of Reference slowly as he flips a circle casually in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Bartender touches his amulet of Talad and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, and he gave me this ring too, to show you I guess? And I am ready for my job!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda nods and almost smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He counts out some circles from his pouch and slides them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he counts out the same amount again and adds them to your pile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then points to a word carved into his bar – Later.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The nods his head towards the door for you to leave.-</td>
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
						<td>Rewards: 1 Ring of Talad, 20 Faction with Conclave of the Glyphs, 5000 Tria, 12200 XP.</td>
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
