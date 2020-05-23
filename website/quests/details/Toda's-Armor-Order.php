<!doctype html>
<html>
<head>
	<title>Toda's Armor Order</title>

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
						<td>Toda's Armor Order</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Golden-Ring.php">Golden Ring</a> quest.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for another task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Well, you have shown you can be useful…</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: all right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: My apprentice Suvari still has yet to return and she is not usually gone for so long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I have an order that I wish to have completed, and I need to get a note to my supplier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Can you help me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I will pay you for your time, of course.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yeah, I can help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Oh, thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Now you see, I get most of my supplies from Jirosh Mikana, since he buys in bulk and can offer considerable discounts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: So, just give him this order and he'll take it from there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda gives you a piece of paper detailing Toda's wish to purchase several sets of heavy armor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Don't worry about payment or about bringing back the armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: We will take care of that later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I'm ever so grateful for your help!</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Jirosh the order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh reads it over quickly, his ear turning back for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I see, hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Well, I think that can be arranged.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: One moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh consults a piece of paper hanging behind the desk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Yes, yes…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: hrmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: this is odd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I do not think I have any plate mail gloves at present.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: We should have gotten a shipment in from Trasok yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you will go ask Trasok about the plate mail gloves, I will be able to assemble this order for Miss Ombretis.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It's strange, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Trasok is usually extremely dependable.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh shakes his head and goes back to studying his supply lists.-</td>
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
						<td>YOU: Jirosh want's to know about the plate mail gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, plate mail gloves for Jirosh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: uh, yes, gloves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok's face takes on a distinctly pinkish hue.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Well, uh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: they're not done yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The Starhammer clan had a bit of gathering these past few days, and I got a wee bit drunk…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: er, ah, several times…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: well!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok clears his throat and tries to resume a professional demeanor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: So I, ah, sent word to Harnquist in Hydlaa, asking that he make those gloves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Tell Jirosh that Harnquist will have his gloves…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He pauses for a second and sighs quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: …and that I'm very sorry.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist has your gloves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Harnquist??</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: How strange.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Something is going on here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: eh, no matter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh waves his paw in dismissal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: First we get the gloves, then we can look into what happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please go and check with Harnquist that the gloves are finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I need to make sure everything is packed up and ready to go before I waste time sending down the workers to assemble this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok says he is very sorry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: That is good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: With any luck, Harnquist will be getting his part done promptly.</td>
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
						<td>YOU: I am here to collect some gloves for Jirosh.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ah, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Jirosh's armored gloves!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist speaks loudly over the noise of his apprentice and the other students hammering on metals.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I was going to try to get them to Trasok so he could give them to Jirosh, but I just have not had enough time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Well, I have been working at them a few days now and they are just about done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The last of them are being worked on today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Tell Jirosh I am ready when he is!</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They are ready for collection.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I will send my workers over right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Go ahead and tell Toda that everything is taken care of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: She will receive her order by tomorrow.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Everything has been taken care of.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I am curious, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: What took so long?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: It was a simple enough errand…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh did not have the gloves as they were at Harnquist.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Ah, I see!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Well, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: That's quite a bit of work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I think you deserve a bit of a tip, tabei.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Toda smiles and sets a handful of golden circles on the counter for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Thank you again for your help, and may your path be lit!</td>
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
						<td>Rewards: 20 Faction with Enkidukai, 3391 Tria, 12200 XP.</td>
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
