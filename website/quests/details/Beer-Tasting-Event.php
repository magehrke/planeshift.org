<!doctype html>
<html>
<head>
	<title>Beer Tasting Event</title>

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
						<td>Beer Tasting Event</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Leann Grudaire';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Leann Grudaire</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You brew ales and beers I see, and smell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You get used to smell, I do like it though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: If I do say myself, I brew some of the finest alcohol in the dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Sadly though, business has been slow of late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: But I have an idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Are you willing to help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will gladly help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: What is your name again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Oh nevermind, let's get started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am YOU, what do you need me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: YOU right, I will try to remember that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I am terrible with names.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire blushes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I need you to go downstairs and speak to Jarda and get him to agree to run a beer tasting event; it should help us attract more customers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Tell him cost will be minimal for the potential return.</td>
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
						<td>YOU: Here, this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow takes the letter from you a points to a word on the bar top "Thank you".</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Leann sent me, she wants you to run a beer tasting event.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow looks furious and begins to vigorously shake his head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow rubs his fingers together suggesting money.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then shows you his open palms.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Leann said it would be low cost and high return, though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow looks at you and rolls his eyes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then points upstairs in Leann's direction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pointing at his head and then pours a mug out over the sink.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he points at you and flicks his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow: [Jarda points to a sign which reads "Welcome to the Parting Ways tavern."]</td>
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
							$npcName = 'Leann Grudaire';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Leann Grudaire</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda says no. He seemed rather angry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Apologies, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: It is my fault he is angry not yours, you were only passing on a message.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Just because I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire pauses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Never mind about why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: We must do something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire thinks to herself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We, what do you mean we?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire nods not paying attention to what you said still thinking to herself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire jumps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I've got it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She grabs a pen and adds a note to a piece of paper beside her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hold on, got what?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire looks at you with a smile across her face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Here take this and give it to Jarda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Tell him I have already sent some out so it is too late to say no; we have to have the event.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Tell him he better have the food ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Boreen can help him.</td>
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
						<td>YOU: Leann she said you only need to get the food sorted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow sighs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow points at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then points in direction of kitchen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then points back at you and then gestures for you to go.-</td>
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
							$npcName = 'Boreen Wigor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boreen Wigor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda sent me to get you to help with Leann's beer tasting event.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor chuckles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: I guess those two are fighting again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: What over now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: Actually no...</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: I don't want to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor shakes his head and smiles again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: So what do I have to do to keep the peace?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda needs you to cook food for the event.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor is still smiling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: Excellent, that I can do and it will keep me away from the bickering between them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: Now, what should I make...</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor thinks for a moment before rubbing his hands together gleefully.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor realises you are still there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boreen Wigor: Go tell Jarda that I will help.</td>
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
						<td>YOU: Boreen agrees to make the food.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda Ynarow gestures for you to go, with a slight smile to his face.</td>
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
							$npcName = 'Leann Grudaire';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Leann Grudaire</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jarda agreed to the event and Boreen will make food.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I thought that would work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Now I need you deliver these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire pats a pile of flyers beside her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I will send off invites to other brewers to compete against me and also try and find some official judges so we can have a competition to see who has the best Beer in the Dome.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is more work than I expected, it will take time to deliver the flyers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Tell you what..</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: How about I get you to deliver these flyers then I will give you a keg of my finest in return?</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire winks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds fair, if you are as good as you claim.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire scowls.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Of course I am.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you a bundle of flyers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Hand out as many as you can and bring me back the slips at the bottom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You might be able to give away more if you go to another town, I would only go to Hydlaa, there aren't too many flyers to give out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So any recommendations on who I should give these to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Good thinking, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I recommend giving them to merchants, here and also in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Maybe some officials and warrior types like Grimal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Come to think of it Stonehammers are always good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: They do like to talk of drink and I think would help spread word on the quality of my brews.</td>
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
							$npcName = 'Muuro Zarel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Muuro Zarel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me Maam, interested in beer tasting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Muuro Zarel plays with her necklace before taking the flyer from you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She giggles while reading it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Muuro Zarel: The tavern should be a good place to meet people so I will come.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She fills in the slip and neatly tears it off.-</td>
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
						<td>YOU: Excuse me, Priest. Might I interest you in a beer tasting event?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka turns his gaze from the sky to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: Beer tasting?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the flyer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: I do not have time to travel from town to town just to taste beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: I can get beer here in Amdeneir should I wish to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It is here, in the tavern.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: Oh, I guess I should read this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He reads the flyer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He blushes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: Oh, you are correct indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: I just assumed since I did not know you that it meant that you were from out of town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: Very well, I will come along.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip and tears it off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boroz Tolka: I have heard that the brewer at the tavern has some talent.</td>
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
							$npcName = 'Jolter Hosull';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jolter Hosull</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, interested in tasting some beer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull turns from feeding his pterosaur to face you and smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull: Beer tasting here in Amdeneir?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull: Where do I sign up?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the flyer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull: Oh, here at the bottom.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He removes his gloves before filling in the slip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull: I will have to change the feeding schedule for my animals slightly but not to worry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tears the slip off and returns it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jolter Hosull: Here you go, Madam.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, interested in a beer tasting event?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik Carpenter brushes some sawdust off himself before taking the flyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik Carpenter: A beer tasting event in the tavern?</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik Carpenter: Sounds good, about time they tried to get extra business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik Carpenter: Oh a return slip, give me just a moment and I will fill it out for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip before tearing it off and returning it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik Carpenter: Here you go, Madam.</td>
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
							$npcName = 'Krestal Dhusho';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krestal Dhusho</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, interested in beer tasting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho studies the flyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho: Thank you, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho: Mhm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho scratches his head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho: I am sure my pterosaur can carry me back after.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip and tears it quickly before handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal Dhusho: Thanks for this, tabei.</td>
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
						<td>YOU: Hello, would you like to go to a beer tasting event in Amdeneir?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Hello!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Yes of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: A merchant like myself can never pass up a chance to peruse the latest merchandise or drinks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt quickly fills out a return slip and hands it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: Here!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman Jilatt: You can pass on that I'll be there.</td>
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
							$npcName = 'Narwin Molstagh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Narwin Molstagh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, interested in beer tasting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh nods as he reads the flyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh: No surprise you came to me with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh: I am an expert on drinking beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip, tears it off and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh: Thanks for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh: I best practice my tasting technique.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh winks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin Molstagh heads off in the direction of Kada-El's Tavern.</td>
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
							$npcName = 'Nalri Grimtorr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nalri Grimtorr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, would you like to go to a beer tasting event in Amdeneir?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri Grimtorr smiles as she reads the flyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri Grimtorr: This sounds like the kind of break I could do with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri Grimtorr: I'll be happy to go.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, would you like to go to a beer tasting event in Amdeneir?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson plays with his beard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Hmmm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Amdeneir you say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Easy enough to get too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson tears off the return slip and hands it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: You can return this, I'd be happy to come.</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me Vigesimi, interested in a beer tasting event?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand looks you up and down before taking the flyer from you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She nods while reading it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Amdeneir sounds good, not visited there in a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I can't drink here in town, always get interupted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: So yes I will come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I am due some time off.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She neatly fills in the slip and tears it off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Take this, Madam.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, interested in beer tasting?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe laughs as he takes the flyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: That is like asking a pterosaur if it wants to fly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He gives a happy sigh as he looks over the flyer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: This is what being retired is all about.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip without a second thought and tears the slip quickly before handing it too you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal Bloodaxe: I look forward to this beer tasting.</td>
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
						<td>YOU: Hello, would you like to go to a beer tasting event in Amdeneir?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: YOU, what is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist takes the flyer from you, his gloves marking the paper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: This sounds good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist pauses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Amdeneir tavern?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That would mean leaving my forge for a day or two.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You should speak to some Stonehammers if you are short on numbers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist chuckles to himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I don't know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist, you should take some time off. I am sure your apprentices will survive a day.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist frowns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm still not sure, but you make a good point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I am sure you are right, my apprentices could use a test of responsibility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I will come.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He fills in the slip, blackening it a bit with his gloves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then cuts the slip off using a knife giving a neat cut to the blackend script and hands it to you.-</td>
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
							$npcName = 'Leann Grudaire';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Leann Grudaire</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I managed to give out all twelve flyers, here are the slips.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles and nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I am amazed you went to a lot of effort, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Here, take these sacks of barley, it is my best stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I know I said I would give you a keg of my finest beer, but I am going to give you something better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I am giving you knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I will teach you to make your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles as she gives you the sacks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks Leann, that sounds even better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I am glad you like it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Here take this book, it will direct you in making beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You'll need to make me a keg of beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: If you like, I can walk you through the process.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready, can you help guide me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Right, we have everything we need right here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Over there is a kiln, near me here is a vat, and across the room there is a prep table with a pot and mill stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: First we roast the sacks of barley in the kiln.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Return when you have dry roasted barley.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have dry roasted the barley.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Good, now we grind the roasted barley in to malt using a mill stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You can find one right on the preparation table over there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Return when you have dry roasted malt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have ground the barley into malt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Good, now heat this water up in a pot, then add the two lots of dry roasted malt and allow to heat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Then you will have heated beer mash.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire hands you a bucket of water.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the heated mash.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Great, now add some hops to your mash.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire counts out eight hops and hands them to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Then place the mash in the brewers vat and allow to cool.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the cooled mash.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Now you're going to add some liquid bread rise to your mash.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: I have some here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire gives you some liquid bread rise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: This results in what is called a beer wort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You don't have to heat it again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Just put the wort in the brewers vat and allow to brew.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made a keg of beer!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Congratulations YOU, this looks and smells good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: One more step before we test, though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But I made a keg of beer, it is ready to drink.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire laughs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You are not going to drink it like that, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You must pour it into a mug or tankard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Place the keg on the table and pour, I wish to taste.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I pour?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire shakes her head and smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Not much of a drinker, I guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Put the keg on the table then pour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here have a taste of my beer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire takes the beer and smells it first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Smells good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Now the test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire takes a large gulp from the mug.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Mhm, it is...</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Quite good for a first attempt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Not as good as mine, though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: With this book?</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: You can make mead and melomel, which is a fruity mead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: To prepare fruit, you use a special tool called a fruit press like the one in this room.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You said with this book? What other drinks can be made with other books?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: With another book you can make ciders and wines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Keep practicing and when you can make terevan melomel, bring me a bottle and I'll give you the second book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire smiles to herself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Now I must get back to my work and prepare for the tasting event.</td>
					</tr>
					<tr class="quest_npc">
						<td>Leann Grudaire: Thank you for your help, YOU.</td>
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
						<td>Rewards: 1 Drinks Of The Dome, 2 Level in Brewing, 10800 XP.</td>
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
