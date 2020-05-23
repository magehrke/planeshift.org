<!doctype html>
<html>
<head>
	<title>Deelor and the Rat Hat</title>

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
						<td>Deelor and the Rat Hat</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Making-Leather-Armor.php">Making Leather Armor</a> quest, 5 Rat Hides, 2 Rat Tails.</td>
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
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings, you perhaps are not in need of any assistance?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: As matteer ov fact, I could use help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: As executioner, many dizlike mee for killink, but for me ees just job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Dey see my face clearly and hate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: I need something to distract from face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Something exotic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Somezing like hat made from rat fur!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You geet eet for me, yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A rat hat, I can't wait to see this!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Veery goot, my freend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Jeyarp Grotemey een Hydlaa is goot friend and leathervorker who owes me favours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You tell heem Deelor send you and he treat you right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Danks and I veel revward you ven you return vith rat hat!</td>
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
							$npcName = 'Jeyarp Grotemey';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jeyarp Grotemey</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent by a friend of yours, name of Deelor, and he wants a rat hat.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You say Deelor sent you and he wants a what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: A hat made from rat fur?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Well, to be honest, I've never worked with rat fur but I'll give it a try.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Five hides ought to be enough to work with to make such a hat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: You return with those, and I'll do my best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I do owe him a favour after all.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was able to find these five rat hides.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Alright, let's see here…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp applies some tannic acid to a piece of the hide, but it discolors.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Oh dear!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: I don't think my methods will work with rat fur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Please don't tell my wife or I'll be visiting Jayose's for leatherworking books forever!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Now, what to do…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Oh, I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Sometimes I send overflow work to Hirenn's Hides in Ojaveda and he does the same for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Just let him know I sent you; his process is different from mine and he will probably be able to tan these hides correctly.</td>
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
							$npcName = 'Hirenn Darmeth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hirenn Darmeth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jeyarp, said that you could help me, as he is too busy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Jeyarp's too busy to handle it, is he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Fair enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: It's been slow here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: I'll tan your hides, but it'll cost you fifty tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: First, the hides.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the hides.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Rat fur?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Ha ha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Okay, the customer is always right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: Now, the fifty tria fee.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here is your payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: One moment please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hirenn turns around and starts working on the hides, and a few minutes later turns back with some cleaned and cured furs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: There you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hirenn: You can just give those back to Jeyarp now.</td>
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
							$npcName = 'Jeyarp Grotemey';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jeyarp Grotemey</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hirenn was able to tan the rat hides, here they are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Very well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Time to make a hat.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp sews a cylindrical hat from the furs with the hand of an expert.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Hmm…something's missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: But what…oh, that's it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Get me two rat tails please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I just so happens that I have two rat tails with me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Marvellous.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jeyarp attaches the rat tails to the back of the hat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Worthy of an Octarch!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Well, a Vigesimi, at any rate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jeyarp: Give that to Deelor, we're even now.</td>
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
							$npcName = 'Deelor Blackeye';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Deelor Blackeye</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your rat fur hat as asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Is vunderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: Ees even beetter den imagininks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Deelor: You are goot freend, Diaboli.</td>
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
						<td>Rewards: Nothing.</td>
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
