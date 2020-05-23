<!doctype html>
<html>
<head>
	<title>Hinoserri Cannot See</title>

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
						<td>Hinoserri Cannot See</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Carrots, 1 Diamond Crystal, 1 Gold Ore.</td>
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
							$npcName = 'Hinoserri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hinoserri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings, do you require anything to be done, with which I can help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Good morrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: You want something to do, you say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Well, I am a member of the Shadow Squadron and I was placed on watch duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: What a disgrace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I don’t want to say what I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: If Raithen ever finds out, he will probably feed me to the pterosaurs..</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I cannot tell you unless you promise never to say anything..</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Do you promise?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I promise.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Erm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I erm…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hinoserri sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Oh alright!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I will tell you since you push me so much and swear not to rat on me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I am a terribly good guard, I really am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: But…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: my eyesight ain’t so well….</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I cannot even see what is on yonder bridge!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: When danger approaches, I will be too late to respond.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: If only, something could be done about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I heard once that carrot juice might be good for someone’s eyesight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Thing is, I don’t know where to get some and I can’t really leave my post.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: So I need you to find and get me some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Will you do this for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Good luck!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I’ll stay here and wait for you to return.</td>
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
						<td>YOU: Do you sell carrot juice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I've heard that carrot juice be the answer to helpin' someone's vision.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed rummages around the kitchen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Aye, I've the ingredients needed, but that be the last of me carrots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: If you want this juice, you'll have to bring some carrots to me to replace the ones I will use for your juice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ten carrots should be enough to see me through.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You give Jomed ten carrots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: There yeh be, here is your carrot juice.</td>
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
							$npcName = 'Hinoserri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hinoserri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found some carrot juice for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: What’s this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Carrot juice?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Oh my!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I hope it actually helps!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Legend says, it is good for your eyes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Did you go all the way to Hydlaa to get this for me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: How nice of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I am truly impressed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Now I will try out this magical juice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hinoserri drinks the carrot juice and squints into the distance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: It did not seem to do anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I am so disappointed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I wish there was something else to do to help my vision.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Wait!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I am sure I saw someone near here with spectacles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: If you can find out who that is and ask whomever it is where they got their spectacles, that would be a big help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Will you try?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll find some spectacles for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Thank you ever so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I am certain it was someone I saw recently who had the spectacles, so while I’m sure some Hydlaans or Ojavedans wear them, I would stick to this area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Good luck finding them.</td>
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
						<td>YOU: Greetings, can you tell me where you got those spectacles?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Oh these?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I erg er umm made them myself: an an an Inv in inv invention of s-s-s-orts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: They helped me see up close until I made them b-b-better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Now I can s-s-s-see far away too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: My eyes are old and t-t-t-tired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Are you B-b-blind too?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I could make you a p-p-pair, if you want them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You have to tell folks t-t-they came from m-m-me though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Oh, and I will n-n-n-eed a diamond crystal to cut the glass, amd a l-l-l-ump of g-g-gold ore to make a f-frame for them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the items as requested, one gold ore and one diamond crystal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Oh, back so s-s-soon?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You work fast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I will n-n-n-eed some time to work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I'll give you a riddle, you ponder about it while I work and when you come b-b-b-ack with the right answer I will give you the glasses f-f-f-ree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If not, they w-w-will cost you two thousand tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Here is your riddle: M-m-m-egaras are the largest flying creatures in Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: What were the largest flying creatures in Yliakum before Megaras were discovered?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Megaras</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: That is true!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Haha you-you’re not as d-dumb as you look, good Ynnwn!</td>
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
							$npcName = 'Hinoserri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hinoserri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got you a pair of spectacles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: Here goes nothing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hinoserri puts on the eyewear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: By the gods, it is a miracle!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I can see fine now, and way past the bridge!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: I hope whatever devil you had to bargain with did not require too much of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hinoserri: These could never compensate for what you have given me, but you might find use for them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hinoserri hands over a small coin sack.-</td>
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
						<td>Rewards: 1 Sunshine Squadron Badge, 9922 Tria, 12200 XP.</td>
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
