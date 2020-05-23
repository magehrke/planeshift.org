<!doctype html>
<html>
<head>
	<title>A Tribute of Circles</title>

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
						<td>A Tribute of Circles</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/best_judgment.php">best_judgment</a> quest, 1 Sharven's Jade Order.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Fholen Sharven's jade order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen reads over the order and looks a bit surprised.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I had no idea that Sharven was so pleased with my work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen suddenly smiles, then reverently touches the jade symbol around his neck.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Perhaps this means that more Ynnwn are seeing the truth in His ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Laanx be praised!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I want to make sure my fellow Ynnwn can show their love of Laanx as soon as possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Will you help me finish this commission?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, it will be my pleasure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I will get started right away, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please come back shortly and ask me if the order is ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I already have some plain signet rings made up that I can easily add His symbol to, so it should not take me long.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen opens his work pouch and starts checking the sharpness of his tools.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you done yet?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I have just finished the last of them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen's voice grows rough and his eyes start to shine from the tears he holds in check.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I have not felt so close to Laanx since He first called to me in the mines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I cannot tell you what an honour this is for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please, make sure these get to Sharven safely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I would usually charge four circles for these, but this goes beyond mere money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: If Sharven offers payment, please tell him they are a gift for Laanx.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen places the rings inside a small box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Pretty box, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I bought a few of them from some poor peddler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Not sure why a person selling such fine boxes would smell like the sewer, but I am not one to pass up a good deal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen hands you the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
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
						<td>YOU: gives Sharven the engraved tree box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven takes the box from you and examines it carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Who is this from?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fholen Medraa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: From Fholen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I was not expecting any deliveries from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I wonder what it could be?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven opens the box and gasps.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, these are lovely!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: They are perfectly suited for our Ynnwn followers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven rummages around in the box, then turns to you with a bewildered look on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Fholen did not include an invoice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Such beautiful craftsmanship is surely worth some coin from the temple's funds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Did he happen to mention how much he wanted for these?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It is a gift.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven pulls a ring from the box and lovingly traces the symbol on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What an incredible tribute to Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Fholen is indeed devoted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Kindly return to him and tell him that Laanx will be pleased.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, and take this for your work on His behalf.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven hands you a coin.-</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Laanx will be pleased.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen looks content.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I am glad, since it was for His pleasure that I did it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please, have this in Laanx's name for all your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen extends a hand towards you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Rellion the engraved tree box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The corners of Relliom's mouth turn up ever so slightly as he examines the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A pretty thing, is it not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am pleased with your progress, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: So pleased, in fact, that I have already decided what I need of you next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Doing this will inflict a great deal of misery on a good man, and perhaps even ruin his life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Are you still willing to aid me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, why not? sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Excellent, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I will keep the lovely box you have given me, and replace it with this one you brought to me earlier.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom traces the identical carvings on both boxes with a finger, smiling to himself, then hands one of them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Simply deliver it to Sharven as Fholen asked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am quite certain Sharven will have some harsh words for you to deliver back to Fholen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: After which, you can bring the box back to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Sharven will not want such…fine items.</td>
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
						<td>YOU: gives Sharven the engraved tree box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven takes the box from you and examines it carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Who is this from?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fholen sent me with it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: From Fholen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I was not expecting any deliveries from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I wonder what it could be?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven opens the box and gasps.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, this is repulsive, an absolutely unforgivable offence to Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I do not know what madness prompted Fholen to send me this horrid thing, but I will not expose myself, nor will I allow any of the faithful to be exposed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tell Fholen that Laanx casts him out, and remove this thing from my sight.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven shudders in revulsion as he shoves the box back into your hands.-</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Laanx has cast you out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen stares at you in utter shock as great, slow tears begin to roll down his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Cast out?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: But why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I don't…makes no sense…my life, my love, all for Him…</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: what is left?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Nothing, nothing, all gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please, just leave me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen sinks to the ground as his legs fail him and wracking sobs shake his body.-</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Relliom the engraved tree box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom turns the box over and over in his hands, caressing every face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Lovely box, lovelier results.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I can almost smell Fholen's tears on you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You continue to impress me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom pauses a moment to look you over from head to toe, lingering longest at your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I believe you are ready for your next task, my eager little clacker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Perhaps it is time to see just how far you will go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Take this,</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom hands you a small phial.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: and go to Sysial Shillor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Your instructions await you there.</td>
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
						<td>Rewards: [Way 1] 15 Faction with Iron Hand, 20 Faction with Ynnwn, 6782 Tria, 12200 XP, [Way 2] 1 Clacker Phial, 20 Faction with Cabal of Whispers, 3391 Tria, 12200 XP.</td>
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
