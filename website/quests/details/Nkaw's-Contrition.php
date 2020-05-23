<!doctype html>
<html>
<head>
	<title>Nkaw's Contrition</title>

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
						<td>Nkaw's Contrition</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Sharven-Holy-Script.php">Sharven Holy Script</a> quest, 1 Gold Ore.</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look a bit troubled.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I am!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: There is something that has been troubling me ever since I joined the Shadow Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Polyuntri Stevald is second in command of our troops here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Since he is my immediate supervisor, it is important that I have a good relationship with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Unfortunately for me, he is quite invested in worshipping Laanx and it influences many of his decisions for promotions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: It is unfortunate because I fell out of favour with the Laanx temple in Hydlaa as a child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Menlil caught me stealing candle holders and I was told never to return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: There must be some way of getting back in the temple's good graces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Will you speak to Menlil about what must be done to mend this rift with the Temple of Laanx?</td>
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
						<td>Nkaw: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Go and ask him if he remembers me; if needed, remind him of the candlesticks.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, do you remember Nkaw?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Hmm, the name does sound familiar…can you tell me something more that might help me remember?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He stole some candlesticks when he was a child.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Ah yes, now I remember the lad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Youngest person ever to be restricted from access to the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: And he sent you to try and make amends did he?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Nkaw wants to make amend.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: It is always good to hear someone displaying their contrition for disturbing the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Laanx is very sensitive to the goings-on in the temple and does not forgive easily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: For Laanx, the tasks one must perform to atone when they have wronged the temple are always greatly disproportionate to the initial crime.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: Of course, I do not administer absolution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: You must speak to Sharven about contrition.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil: May Laanx frighten the shadow from thy path.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know anything about contrition?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, who is it that seeks contrition?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Nkaw.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven takes hold of his holy symbol and closes his eyes and concentrates. The holy symbol begins to glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh Laanx, by your might, how can Nkaw give thanks and be redeemed in your sight?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven's holy symbol glows red and he seems completely entranced.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-This continues for the next few moments until the symbol and Sharven both return to normal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Laanx does not forget or forgive so easily as us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: My feeling is that Laanx is still very angry with Nkaw even though his transgression is two decades old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He should do some tasks in a show of good faith to Laanx, but as I said Laanx is not favorable to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I suggest for him to ask someone else to amend for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You look like a possible candidate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Will you be working for his atonement?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I will work towards his atonement.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Praise be to Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is always good to see someone tend to the needs of others with greater goals in mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: First, you must be anointed: you cannot seek atonement without anointment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: In order to do so we will need pure water, one gold ore, and an Oil of Prayers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You can speak to some folks and find these things, or dig them out of the earth as needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know the Oil of Prayers is very rare and I think only one of the many alchemists makes this concoction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: When you return, have all three at the ready, and give them to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now go, and may Laanx frighten the shadow from your path.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I'm looking for pure water.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Pure water?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well you came to the right place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The mystical waters of this fountain are a blessing from the depths of Yliakum meant to renew our hearts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Of course, if you want some you are going to have to find and empty potion bottle in order to capture some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I suggest speaking to a cook to get an empty bottle if you haven't one with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I will fill it for you on your return.</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like an empty bottle please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Oh sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I have none Reffitia owes me one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Go see her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: She works in Brado's in Ojaveda.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need an empty bottle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh, those old things clutter up everything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia takes a bottle from an old barrel with many more inside, sneezing at the dust on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Phew, dusty old thing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia hands you the bottle and then dusts her hands off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Glad to help!</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Jardet an empty bottle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Ah, perfect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet bends down, fills the empty bottle with pool water, and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well, here is your pure water.</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about the oil of prayers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Oh, Oil of Prayers?</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Normally I'd be happy to help someone atone and return to the embrace of Laanx, but I cannot now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: One needs to be in a good frame of mind to work in Alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I am far too despondent over the lack of word from the Bronze Doors about my husband Alekial to even pick up my mortar and pestle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: If you can get me word from Aerayau Strongwill about my husband, I might be able to gather the focus to aid you.</td>
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
							$npcName = 'Aerayau Strongwill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aerayau Strongwill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Charisa sent me to get word of her husband, Alekial Malod.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I would imagine that Mrs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Malod is dismayed that Alekial has been gone so long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: However, he did sign an extended duty contract inside the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: He's serving with Barl Prestis in there, so he's in good hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Allow me to write up a note to Charisa to ease her fears.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aerayau takes a quill and parchment, then quickly writes a note and seals it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Ensure this gets to her post-haste.</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Aerayau gave me this letter to give to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: News, so fast?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa unseals the letter and reads it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Signed an extended duty contract…</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: alive and well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: misses me and hopes to see me in a few months?</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Oh, that's such a relief!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa holds the letter to her heart for a moment and takes a deep breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Very well, you wanted some Oil of Prayers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I believe I have the ingredients to make them; one moment please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa enters her house and re-emerges shortly afterward.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Well look at this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I looked and I still had some already made!</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Thank you so much for helping me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I hope this brings peace.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa carefully lowers a small flask to you.-</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the items you need, pure water, a gold ore, and the oil of prayers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven pours the water into the magical brazier to his side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Laanx, may this water purify the soul of the contrite Nkaw.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven melts the ore in the brazier.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: May the melting of this ore to pure gold symbolize the melting of the impurities from Nkaw's heart.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven heats the flask over the brazier until the liquid inside starts bubbling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: This we ask in the name of Laanx.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He uses a Cold glyph to cool the oil back down, then pours it on your head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Be anointed, Nkaw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You are cleansed and once again pure in the eyes of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You may want to tell him now that he is cleansed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I look forward to seeing Nkaw back in the Temple once again.</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You have been cleansed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: And you smell like oil.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw smiles and makes a small bow to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Polyuntri is sure to look upon me more kindly and think of me for promotions now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Thanks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: This ought to cover your trouble.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw gives you some coins.-</td>
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
						<td>Rewards: 20 Faction with Iron Hand, 3391 Tria, 12200 XP.</td>
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
