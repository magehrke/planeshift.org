<!doctype html>
<html>
<head>
	<title>Loren Chama needs a wood sculpture</title>

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
						<td>Loren Chama needs a wood sculpture</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Loren-Chama-Needs-Dye.php">Loren Chama Needs Dye</a> quest, <a href="/quests/details/Yonda's-Delayed-Delivery.php">Yonda's Delayed Delivery</a> quest.</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there anything else I can do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Ah yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: You have done a job for me already, have you not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I can trust you with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I require a gift for the Octarch's feast; after all, one does not just see the Dome Octarch Iragdun Salikarios empty-handed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I would like a wood sculpture.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Yonda Axebow lives near the Library and she used to make them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: They became quite trendy, but she says she cannot afford to make them anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Resolve whatever problem Yonda has and get me a sculpture, and I will compensate you admirably.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Will you accept?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can do that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Super.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Get right on that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Go and ask Yonda about sculptures or tell her I sent you.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about your wood sculpture.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I make wood sculptures as playthings for little kids, but there are also a number of grown-ups who buy them as display pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: From time to time, I go to the library and read books about other levels of Yliakum, the stone labyrinths, or even lands beyond the portals, to find my inspiration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I love this kind of work but it is hard to earn enough money doing that alone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: This is especially true now that Kaiman has raised the price for wood unexpectedly: I am running low on wood stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Could you please try to talk to him, and convince him to lower the cost back to its original price?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, where is this Kaiman?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: That is wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: You only need to find Kaiman Jilatt near the plaza and speak to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Please convince him to lower them again.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yonda Axebow sent me about the wood prices.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: The sculpture and carving woman right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Look, I do not really want to haggle, wood costs what it costs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Leave me to my other business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Wait!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Speaking of business, you look like an adventurer…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I'll tell you what.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: If you do something for me, I will lower the price for your friend Yonda Axebow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Is this acceptable?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Wonderfull!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman eyes grow wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I need you to go and find me an axe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: It cannot be just any axe either; this one is all the way out in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: These mastercrafted axes are fashioned by Hammerwielders for combat, although I will use it for deforestation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Trasok Starhammer occasionally stocks those axes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I can give you the money needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I will give you a note of assurance that Trasok might accept, but he may want more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: If so, do as he asks and return with the axe.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here for a Mastercrafted Axe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, the merchant in Hydlaa sent you, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You know, those Mastercrafted Axes are not easy to come by.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Their manufacture is a closely guarded secret so they have to be imported from the fourth level of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: They don't call it the Forge for nothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok puts his hands on the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What did Kaiman send you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kaiman's note of assurance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Let me see that please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok reaches out hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the note.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: this isn't quite enough, but I will hold this for you while you go and do a little favor for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I have a friend who is an engineer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: He has sent me a letter desperate for aid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: We have traded riddles for years together; he says he has found a problem that stumps him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: If you can get a note from him saying you solved his problem and give it to me, I will give you the mastercrafted axe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Do you agree?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Go and see Hiacheius Dilechi at the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Those are the ones on the other side of Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: He manages the waterwheel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: When you get there, tell Hiacheius that Trasok Starhammer sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Return with the answer and I will give you the axe.</td>
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
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok Starhammer sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: T-T-Trasok send you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I was really hoping for his aid on this one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I guess you will d-do, I may just need an alternative p-p-per-p-perspective to solve this puzzle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Well here goes, I will tell you the problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: A Lemur p-p-peasant was condemned to die for an act of treason.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: The Vigesimi court gave her the f-following choice: We will allow one final statement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You may say whatever you wish to the crowd, but our mages will know whether you lie or not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If you lie, we will hang you, a painful death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If you tell the truth, we will have you beheaded, an immediate death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: The Lemur thought for a m-moment, gave her statement, and was permitted to walk free because the court could not determine the appropriate means of execution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: What statement could the Lemur give that made sentencing impossible?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will be hanged.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: No, I…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius starts muttering.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Ah, you are correct!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I see it clearly now: it is a classic paradox of the liar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If they hang him, then he was telling the truth and should have been beheaded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If he is beheaded, then he is lying and should have been hanged!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Great work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Here is the riddle note Trasok wanted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Just give it to him when you see him.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a riddle for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I see you were a success!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: How can I ever repay you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: …Oh, right, the axe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Here is your axe, and here are some extra circles for the note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You should now return this axe to Kaiman Jilatt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thanks again.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe this axe is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I see you have returned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I trust you handled everything easily?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: No matter; I have been trying to get one of these for weeks now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You have made me very happy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I will not just lower the price, but lower it substantially.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Bring this new bill to Yonda Axebow; the price is now lower than before I raised it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: She should be pleased.</td>
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
							$npcName = 'Yonda Axebow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Yonda Axebow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the new bill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Oh my goodness!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda reads the bill and her jaw hangs slack in amazement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: What did you say to him?</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Never mind, I do not need to know, thank you ever so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I do not know how to repay you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I have no sculptures on hand…</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: unless…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Yonda ponders the situation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: Yes, you have done well enough for me; here is my best piece ever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Yonda: I hope it makes it into good hands.</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The sculpture you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Very nicely done, and this is the best sculpture I have ever seen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I cannot wait to see our Octarch receive this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Here is your promised reward; you may choose the one more suited to your needs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: it looks like this quest does no longer provide the light glyph</td>
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
						<td>Rewards: 1 Light glyph, 1 Lute[OR], 25 Faction with Crafting Association, 7360 Tria, 13600 XP.</td>
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
