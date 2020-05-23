<!doctype html>
<html>
<head>
	<title>Tokens of Regard</title>

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
						<td>Tokens of Regard</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Gold Ingot, 1 Consumer Antenna.</td>
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
						<td>YOU: Greetings Narwin.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Good to see you Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I see you've got more on your mind today than a greybeard's tale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: But y'see, that's just what I'm needing from you - a tale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well, help finishing one, anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: If you're willing to put a pair of swift feet and sharp ears to the task, you could earn us both a pretty bit of tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Will you help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds promising, I'm in.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh cracks a grin, which is barely visible on his creased face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: That's the spirit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I've got a wonderful tale to sell -ahem- tell; folk will come from all around to hear it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Only problem is, it is a tale from long ago, and me mind's a bit fuzzy on the details.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It was in the upper reaches of the Stone Labyrinths, it was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I was acting as a hired guard for some of my fellow Stonebreakers, who were mining a pretty vein of blue-green stone to finish off an ale hall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: We ran into a group of Hammerwielders, who were hunting a rumour that there were underground Ulbernauts to be found in the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: They were chasing an Enkidukai's tail if you ask me, but never mind that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: So, the ale being low and the Labyrinth being hot as a forge, some...</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: sharp words were said by Stonebreaker and Hammerwielder alike.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: That is, until a few Consumers showed up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The grizzled Stonebreaker pauses to take a breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You with me so far?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well, as dwarves do in a tight spot, we grouped together and faced those ugly beasties.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It was a lucky thing that most of us already had our weapons drawn thanks to our -ahem- previous discussion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It took a while, but we cleaved 'em all up and collected their bits to sell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It was a long, sweaty journey back to Hydlaa, there being no ale and all, but we made it back and sent a Stonebreaker and a Hammerwielder each to sell off the bits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: We had ales waiting for them at Kada-El's when they got back, and we split up the profits then went our ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: A good tale, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: But it's missing a bit, I think, and I can't remember any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: How many consumers were there?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: How many Dwarves fell?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I can't recall these things, but Grimal Bloodaxe might.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: He was there, I know that much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Will you go to Grimal and tell him I sent you, and note down what he says?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Will do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Thank you kindly for giving these old legs a rest.</td>
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
						<td>YOU: Narwin sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: That...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: that...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: thieving old charlatan!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: He DARES ask a favour of me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Oh, I'll tell him something, alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: As a matter of fact, I'll tell you too, so you'll know better than to deal with frauds like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: He's right, I was at that battle, and a noble fight it was, until we got back to Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Most of us went to the bar to cool our throats whilst waiting for the others to return with the tria, but a couple of Hammerwielders went to the forge to strike some battle tokens to commemorate the fight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: They made it back about the same time the tria did, and both clans had a merry time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: But when I was ready to leave, I went to pick my battle token up off the table and it was GONE.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe shakes his head sadly and pulls on a lock of beard, which clinks with all the battle tokens attached to it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So who took your token?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: It may be an old wound, but it still aches.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: As I said, my battle token was taken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Since Narwin was the only Stonebreaker to leave the bar before I noticed its loss, and my comrades and I 'searched' the rest, I know it was him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: The guards showed up during the 'search', pulled our clans apart and hunted down Narwin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: He must have hidden it, because they didn't find it on him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: To keep the peace, the guards made the Stonebreakers pay for the loss, but that didn't get me my token, did it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Ask that sneak Narwin about my token and just see if he isn't still a liar after all these years.</td>
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
						<td>YOU: Grimal says you took his battle token.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh gives a start, turns pale, then hangs his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It...</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: it would seem I had forgotten more than I realised about that battle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I remember now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I was a young sellsword, barely keeping food in my mouth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: The ale was flowing, but it did not ease my woe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I was thinking only of what it would cost to sharpen my axes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Then, I saw the glint of the golden token on the table, and I was lost.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I took it and left as quickly as I could.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: When I heard the guards coming up behind me, I hid it, then retrieved it later and sold it to an unsuspecting Dermorian as a simple gold bauble.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh's eyes glint, and his shoulders straighten.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I can never make up for my treachery and shame, but I'll do my best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Will you help me mend this wrong?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: My thanks, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I think that the best thing to do is to get Grimal a new token, no matter how late and how little the gesture might be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Trasok Starhammer could make one, but he will need a sketch of the original token.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I can give you that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh produces a sheet of paper and begins to draw. When he is done, he holds it up for you to see.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: As you see, the front has two crossed hammers, in honour of the clan, and the back has two crossed Consumer antennae, in honour of the battle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Trasok should be able to reproduce this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Just give this sketch to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Please give me the token when it's done; I want to make sure it's perfect.</td>
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
						<td>YOU: Can you make me a battle token of this sketch.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Trasok Starhammer raises his eyebrows as he examines the sketch.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Hmmm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: an interesting commission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: None of my business, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'll need a gold ingot to start work on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Bring one to me, and I'll be heating up the forge in the meantime.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1 Gold Ingot</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Trasok the ingot.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I can do the design on the front with no problem, But I'll want a model for the back to do it properly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Go fetch me a consumer antenna, and I'll finish this up for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1 Consumer Antenna</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give the antenna to Trasok.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Nice work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I'll just finish this up then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Trasok Starhammer places the gold on the anvil and his hammer rings as the token takes shape.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Trasok Starhammer stamps a design on each side and quenches the token in the tank before holding it out to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: All done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: That will be three hundred tria, if you please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Trasok Starhammer holds out his hand for payment.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						300 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: A pleasure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Come back any time.</td>
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
						<td>YOU: I have the token.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Done already?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I am glad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh holds the token up to the light. A sad smile crosses his face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It's just as I remember it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Please, take it to Grimal, and if he asks about me, please tell him I am sorry.</td>
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
						<td>YOU: I have a gift for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe's weathered cheeks turn red, and his voice drops to a whisper.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: cannot believe this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: It looks just like my token.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe peers at it again.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: This is freshly forged.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Did Narwin have this made for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Please, tell me how this came about; did Narwin do this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What did he say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Narwin is extremely sorry about what happened.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I would never have believed it, after all this time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe ties the new token in his beard, and as he does, the clink seems to distract him. He fingers another battle token which looks very old.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: We Hammerwielders are proud folk, but bow to honour when we see it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe's voice rises, ringing strong and clear.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Narwin Molstagh of the Stonebreaker Clan has done much to redeem his honour this day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Give him this gift to show that I forgive him and hold no more ill will.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe pulls the old battle token from his beard and examines it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You see the crossed hammers on the front and the crossed rock picks on the back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: This symbolizes another old fray where Hammerwielder and Stonebreaker worked together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Let it be so in the future, as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Please, take this to Narwin for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Stonebreakers don't normally wear them, but it is my wish that Narwin does, as a reminder of both bad and good.</td>
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
						<td>YOU: [You give Narwin the token.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Narwin Molstagh looks at the token and his eyes water.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I do not deserve this, but I will respect Grimal's gift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I'll wear it gladly and point to it whenever I tell of the folly of young Narwin Molstagh and the wisdom of old Grimal Bloodaxe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Please, take this so that you might remember as well.</td>
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
						<td>Rewards: 1 Battle Axe, 2107 Tria, 10800 XP.</td>
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
