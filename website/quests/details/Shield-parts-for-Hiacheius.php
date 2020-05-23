<!doctype html>
<html>
<head>
	<title>Shield parts for Hiacheius</title>

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
						<td>Shield parts for Hiacheius</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Hiacheius-Lost-a-Valuable-Book.php">Hiacheius Lost a Valuable Book</a> quest, 6 shield bands.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, you look thoughtful. May I help you in any way?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius gets out from his thoughts and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Y-y-yes, indeed good Enkidukai you m-m-might help me!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius scratches his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: D-d-do you remember about my f-f-friend who was looking for the rare Golden Shield Diagram?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius waits for a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Well, h-h-he is making some shields for the g-g-guards here, but h-h-he seems to be overhelmed from work so he isn't able to m-m-make all the parts he needs in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: So he a-a-asked me if I c-c-could help him find someone t-t-to do for him some shield b-b-bands and I w-w-was thinking w-w-who could.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Sir, maybe, c-c-could you help me with t-t-this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: W-w-will you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure I'm glad to help you again. How many do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: W-w-will you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: really?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius looks at you with a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I j-j-just n-n-need six shield b-b-bands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: T-t-that's what my friend asked me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Alright, then I'll a-a-await your return with them.</td>
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
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						6 Shield Bands</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are the six shield bands as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: T-t-thanks good Enkidukai!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius pauses for a bit looking at the shield bands in his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I don't know how to t-t-thank you for this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius thinks for a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: T-t-that's it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I will g-g-give you something special, but only if you answer one of my riddles!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It's something quite rare, which I've been keeping for a l-l-long time, and I'm sure you'll like it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: What do you s-s-say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: D-d-do you want to try it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I-i-if you don't, I'll just give you some tria in order to repay you for your efforts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
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
					<tr class="quest_you">
						<td>YOU: No thanks, I will just take the money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Alright, Sir I-i-it will be for another time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Thanks a-a-again for your help and here you are your reward.</td>
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
						<td>YOU: Yes, I will give it a try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: So h-h-here it is the riddle Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It's little and resembles a bird, but it can't fly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: You see a lot of them around us, but you don't know for certain where it comes from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: What is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: groffel</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Congratulation Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I w-w-wouldn't have expected you w-w-would've been able to g-g-guess that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Here you are what I've p-p-promised you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Make good use o-o-of it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius Dilechi gives a last smile to YOU and goes back to his work.-</td>
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
						<td>Rewards: 1297 Tria, 9400 XP, [Way 2] 1 Crown Shield Diagram.</td>
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
