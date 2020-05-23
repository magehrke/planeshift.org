<!doctype html>
<html>
<head>
	<title>Tilavi is in Trouble</title>

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
						<td>Tilavi is in Trouble</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Night-Off-for-Tilavi.php">A Night Off for Tilavi</a> quest, 2 Beer Mugs.</td>
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
							$npcName = 'Tilavi Aurenta';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tilavi Aurenta</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why do you seem so worried?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Thank Talad you're back, tabei!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I need you to help me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Brado had some special guests here for a big dinner last night and something really important went missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I would be so grateful if you could help me find it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Will you do that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Oh, thank you so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I am so worried.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: The Stonebreakers that were Brado's guests last night lost some item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: They say I stole it while I was clearing the table of their dinner dishes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Do you know what the punishment is for being a thief?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: It's exile!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi pauses to catch her breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I'd have to live someplace else…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: but I like it here in Ojaveda!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: It's not my fault, and Brado knows it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Brado would rather I take the blame than have the blame fall on his precious tavern.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What has gone missing then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I'm not really even sure what it was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Brado was ranting and raving something about diamonds and daggers and something else?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: It was really busy up here, all five tables were full, and there were dwarves all over the balcony yelling for more ale, and I couldn't concentrate on what he was saying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I didn't think that it was important at the time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Maybe you could ask Brado about it for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll speak to him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Oh, I am so grateful!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi clasps her paws together and smiles hopefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I hope this can be cleared up really soon.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I heard the Stonebreakers lost something here, can you tell me about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Has that serving wench upstairs gotten you involved now too?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Sometimes I wonder what she is good for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Last night there was a party of Stonebreakers upstairs and Tilavi was their server.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I left her alone for five minutes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Five minutes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: And while I was gone, the Chief noticed his dagger was missing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado shakes his head and wipes the counter down with a rag.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It's a shame if she is foolish enough to get herself exiled, but it's not my business.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about the dagger?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: This was no ordinary dagger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: This dagger was passed down through many generations of chiefs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: They said the dagger's hilt is encrusted with diamonds and rare opals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I never did see it, but from the way the chief described the dagger, it must have been a sight to see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado looks around anxiously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Look, I have better things to do right now; calculating the damage and trying to evaluate which pieces of furniture will still do without any repair…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It was one of those nights that I was glad I didn't fix those blasted doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I vaguely recall stories from that night about thieves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Why don't you go and ask Fruntar about these thieves if you want to know more?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I'm too busy to clean up Tilavi's mess!</td>
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
							$npcName = 'Fruntar Durek';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fruntar Durek</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about the Stonebreaker party at Brado's tavern?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Ah, that was one busy night- order after order after order!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Rarely did I find any time to rest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Merchants were in an uproar worrying about their shipments of goods coming and going.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I was in fear that Jirosh and Toda were going to collapse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: There was some talk of a group of thieves led by an exiled Ynnwn, engaged in pickpocketing and looting goods off of those traveling on the road into town.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fruntar frowns slightly and looks toward the doorway of the tavern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I do wonder if there is any truth to these stories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: The more ale that was served, the more elaborate the stories became.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: If these stories are true, however, one might find these thieves outside of town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: There have been some rogues out there for quite a while as well and I heard they have kidnapped a wealthy merchant, so do be careful!</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am searching to a dagger.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Yes, I did find a dagger, and a rather ornate one at that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: But I have found a lot of daggers, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: You'll have to be more specific!</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Were there any gems in the dagger you are looking for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes there was.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Well then, I must make sure that this dagger is the one you are looking for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: What gems were in this dagger of yours?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: diamond and opal</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Enack rummages through a sack and pulls out the Chief's Dagger. Its thickly-clustered gems sparkle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: You must mean…</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: this dagger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I found it up near the crater, still in its sheath.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: It looks as if the buckle wore through, and it fell off of its owner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I have no use for this, but I bet it would fetch a fair price if I could sell it at the market.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Alas, I have no desire to go back to that filthy city.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Enack frowns and fingers at the end of the hilt for a moment in thought before making a wry smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I do miss some of the items one can buy though…</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Nolthrir, I will make a deal with you: This dagger will be yours if you bring me a taste of civilization.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Will you bring me what I desire?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You got yourself a deal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Ahhh, good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Orchibaly Gurpleferd still makes the best pies around and my mouth has been watering just thinking of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: I require one of Orchibaly's fresh fruit pies, and I want a nice frothy beer to go with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Ah, no, make that two beers afterward to wash down the pie.</td>
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
							$npcName = 'Orchibaly Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orchibaly Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One pie please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Ah, you are in luck!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I made an extra batch of my perfect pies today and they have just finished baking!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly hurries upstairs to the oven and returns with a still-steaming pie carried on a folded towel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: That will be ten tria, if you please, my good Sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: pays Orchibaly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Thank you very much, and here is your pie.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly moves the pie across the counter to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: It is berryvan terry, er, terevan berry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: And do be careful- it's still a bit hot!</td>
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
							$npcName = 'Enack Lerenal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Enack Lerenal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your pie and beers</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Ahhh, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Here is your dagger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Enack: Now be gone and leave me so I can enjoy my pie in peace, or else I will send my thieves after you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Enack laughs loudly at his joke.-</td>
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
							$npcName = 'Tilavi Aurenta';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tilavi Aurenta</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found the dagger.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Oh, you found it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi bounces on her toes for a moment, her anxious look changes to relief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Thank Talad, I was beginning to worry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Brado has become very uneasy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: The guards have started to question him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Please go give this dagger to Brado to clear my name.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi passes the dagger back to you and bows her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I am so very, very grateful for your help!</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found the dagger.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado accepts the dagger with a surprised look on his face. He listens intently as you tell of the discovery.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: So Tilavi didn't have it after all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Thank you, good Nolthrir, for solving this mystery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: The Stonebreakers are very dear customers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I will explain to them of this Enack and let them deal with him directly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I offered this reward for the return of the dagger hoping Tilavi would return it for the tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: However, since she really didn't take it, the reward is all yours.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado reaches into his pouch and counts out a large sum of tria and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I am still very busy with the aftermath down here, so please let Tilavi know that I am sorry for thinking she stole the dagger.</td>
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
							$npcName = 'Tilavi Aurenta';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tilavi Aurenta</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brado says he is sorry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Thank you so very much for clearing this trouble up!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Exile would have been a terrible thing for me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I wish I could give you a thousand tria…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: but I do not have that kind of money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Oh, I know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: You can have this, I have been saving this for a special occasion and you deserve it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: It is one of Orchibaly's pies, maybe you have never seen one before.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: They are delicious!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi gives you a pie.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Oh, and here, have some beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: To wash it down.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tilavi makes a clumsy sort of curtsey and almost spills the beer she is trying to give you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Thank you again, tabei!</td>
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
						<td>Rewards: 1 Pie, 1 Beer Mug, 20 Faction with Enkidukai, 2107 Tria, 10800 XP.</td>
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
