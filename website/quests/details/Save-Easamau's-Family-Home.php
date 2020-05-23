<!doctype html>
<html>
<head>
	<title>Save Easamau's Family Home</title>

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
						<td>Save Easamau's Family Home</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Easamau-Lost-his-Badge.php">Easamau Lost his Badge</a> quest, [Way 2] , [Way 3] 6 Ulbernaut furs, 20 Diamond Crystals, 50 Rat Eyes.</td>
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
							$npcName = 'Easamau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Easamau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Easamau, do you have another task I can help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I do have a second task I need done; you will not find it easy, however.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I need 50,000 tria to save my father from having his home taken away from him by the Hydlaa tax collector, Darphen Wrestele; you can either give him the money or see what other arrangements you can make with him to relieve the debt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Will you try to aid me?</td>
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
						<td>Easamau: Stupendous!</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: This is my problem, Darphen Wrestele is the tax collector in Hydlaa, my father Darven Bounash, is a gambler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I did not take his family name and moved out to the Bronze Doors area to spare myself the horrors of his reputation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: He gambled away not only most of my inheritance from my mother but also mortgaged his home to pay his debts, which rise each year.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: He has managed to heap up an enormous debt which I will not be able to pay in the next twenty years of service here as a member of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: All the while, as his debts have accumulated, his taxes have gone unpaid.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Easamau shakes his head and continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Darphen Wrestele has sent me a dispatch informing me that unless my father can come up with the money soon, he will be forced to sell our home and put something of value to Hydlaa in its place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I need you to go there and find a way to relieve the debt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: If you can make it back to me with a receipt saying the taxes are up to date, I can give you a rare glyph my mother left me in her will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Speak with Darphen first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I am sure he will want a great deal in return for this tax relief.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Good tidings, brave soul.</td>
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
							$npcName = 'Darphen Wrestle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darphen Wrestle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here on behalf of Easamau, to settle the debt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Yes indeed, the Bounash family.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: How is it one as seemingly wise as you are got caught up with such a lowly sort?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I suppose you mean to convince me to let them off their debt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: That will not happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Their taxes must be paid if the family is to keep the home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Do you have the 50,000 tria needed to save it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Take the second or third way as they give more rewards.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 3</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No I don't.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: That is unfortunate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: There is little I can do as this is a matter of the law.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: People must take responsibility for themselves, and Darven Bounash spends all of his time in the bar or gambling away his money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: There is a very difficult alternative, perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Let me think on it some.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you given any thought on the alternative.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I have a huge back roll of taxes to collect and a great deal of pressure from Amidison Stronghand to collect it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I will give you a list of reluctant taxpayers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: If you can collect the 200,000 they owe collectively, I can write off the Bounash homes taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Do you agree to do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I can't do that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Then there is nothing more I can do for the Bounashes; bother me no more about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Tell Easamau the house will be sold.</td>
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
							$npcName = 'Easamau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Easamau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The house will be sold.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I cannot believe this is the end…</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I will find a way to save my father's home!</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I have much to plan, please be gone, your assistance is obviously not needed again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: That is great news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Hand it over and I will give you a receipt saying their taxes are paid in full.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Here is the Bounash tax receipt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No I don't.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: That is unfortunate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: There is little I can do as this is a matter of the law.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: People must take responsibility for themselves, and Darven Bounash spends all of his time in the bar or gambling away his money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: There is a very difficult alternative, perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Let me think on it some.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you given any thought on the alternative.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I have a huge back roll of taxes to collect and a great deal of pressure from Amidison Stronghand to collect it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I will give you a list of reluctant taxpayers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: If you can collect the 200,000 they owe collectively, I can write off the Bounash homes taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Do you agree to do this?</td>
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
						<td>Easamau: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: A good number of the local merchants have back taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: If you can use your skills to convince them to pay and collect notes of assurance from each of the people, I will write off the Bounash taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: The list goes like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Harnquist owes 20,000 tria, Kaiman Jilatt owes 60,000, Dhalia Colat owes 20,000, Thorian Gronk owes 40,000, and then one non-merchant Uri Djho-Maat owes 60,000.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: If you can gather notes of assurance from each of these, all is forgiven for the Bounash family.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: The Vigesimi will be happy, and that is all a lowly tax collector can ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Good luck with them, though; they are all very hard to convince.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Just ask them about taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Once you've got them all, bring them to me.</td>
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
						<td>YOU: I am here about your taxes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: No, I have not gotten to it yet; besides, the tax collector is a worm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I suppose he sent you to try to convince me to pay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Tell you what.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You seem like a likeable sort; if you do a favour for me, I will give you a note of assurance for my 20,000 tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Sound good?</td>
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
						<td>Harnquist: Good to hear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I just need you to take some inventory to Veja in the arena; she will give you a receipt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you return with a receipt from Veja Pontor, I will give you the assurance note that you seek.</td>
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
							$npcName = 'Veja Pontor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Veja Pontor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: About time Harnquist got those to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: I mean I know he is busy, but making me wait for two weeks…</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Not your concern I imagine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Veja: Here is your receipt.</td>
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
						<td>YOU: I have your receipt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Very well then, here is your assurance note for Darphen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I suppose it's not a good thing to be in debt to the government forever.</td>
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
						<td>YOU: I am here about your taxes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Fantastic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Taxes eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I see you are the new trepor, sent to scurry about bothering the good merchants of this city for their hard earned money?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Well I am not paying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I like to keep my money flowing, and taxes sap my money flow too heavily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: If you want the money, you are going to have to pry it from my dead hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Oh goodness listen to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I apologize.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I have been having a bad day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Let us make a deal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: There is a shortage of Ulbernaut furs in the city, and they fetch a high price.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: If you can get me six of them I can give you an assurance note from me for 60,000 tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: That should settle me up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Sound like a deal?</td>
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
						<td>Kaiman: Super, I will await your return with the Ulbernaut furs.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						6 Ulbernaut fur</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your fur.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You are indeed one ambitious tax collector.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Here is the note of assurance you need for Darphen.</td>
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
							$npcName = 'Dhalia Colat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dhalia Colat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here about your taxes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: No, but I really want to!</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: I am so far behind, but I do believe in our government!</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: Things have been so hard for me and my husband as of late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: We owe 20,000 tria!</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: That is so much to have to pay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: Oh goodness, I suppose there is something I can do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: I have a family heirloom that Kaiman Jilatt has been trying to get from me for some time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Dhalia digs in her bag and produces an amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: Here it is: the Amulet of Yore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: If you can deliver it to him, he will give you a receipt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: Return with that receipt and I will write you an assurance note for Darphen.</td>
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
						<td>YOU: Dhalia sends you this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Wow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You are not only a taxcollector but also a miracle worker!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I have been trying to get this amulet from Dhalia for ten years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Here let me write you a receipt.</td>
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
							$npcName = 'Dhalia Colat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dhalia Colat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your receipt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: I hope this will please Darphen, I do really want to be a good citizen; things are just hard for us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia: Well, here is your note of assurance.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here about your taxes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Oh, not this again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I don't have it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: How many times do I have to tell that rascally Darphen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Grrr, by the gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: There is only one deal that will provide me with enough money for now to pay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: If you want to get Darphen's money, then help me with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: If you can get me 20 diamond crystals, I can make the deadline for the delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: If you do this, I will pay my gosh-darned taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Can you do this?</td>
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
						<td>Thorian: I need them all at once and quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: There is no time to waste!</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						20 diamond crystal</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your diamond crystals as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well done and thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Here is the Note of Assurance you wanted.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here about your taxes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: No, I haven't paid my taxes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: I mean I could easily pay them if I wanted to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: I am quite wealthy you know, but as I told tax collector Wrestele, I am paying nothing until he takes care of the rat problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: It is absolutely absurd to have so many of the disease carrying wretches milling about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: It makes me sick to my stomach to think of their little scurrying feet tracking waste and pestilence all over the city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: I will not pay my taxes until I see something significant done about it; is a matter of principle for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: I simply cannot pay taxes to a city that will do nothing to police itself of such vermin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Uri studies you-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: Tell you what.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: You look like you might be a good ratter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: You can bring me 50 rat eyes and I will give you the note you desire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: Talad knows, Darphen has done nothing to allay my fears.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: Do you accept my proposal?</td>
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
						<td>Uri: Wonderful, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: Return to me with 50 rat eyes all at once and you will have a Note of Assurance from me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your rat eyes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: I am satisfied with your work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri: Here is your note.</td>
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
							$npcName = 'Darphen Wrestle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darphen Wrestle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are all the assurance notes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Amazing you must have some charisma!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Well a promise is a promise - here is the receipt for the Bounash taxes paid in full.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: His son should be pleased.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2, 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Easamau';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Easamau</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was able to settle your father's debt.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tears well in Easamau's eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I thank you so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: I could not have done this without you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: You are truly a goodly soul.</td>
					</tr>
					<tr class="quest_npc">
						<td>Easamau: Here is your reward; I hope it is satisfactory.</td>
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
						<td>Rewards: [Way 1] 8000 XP, [Way 2] 1 Mind glyph, 1 Battle Shield, 40 Faction with Guard, 17800 XP, [Way 3] 1 Mind glyph, 1 Battle Shield, 40 Faction with Guard, 17800 XP.</td>
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
