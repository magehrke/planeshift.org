<!doctype html>
<html>
<head>
	<title>A Brother's Love</title>

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
						<td>A Brother's Love</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Pevrin Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pevrin Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any work I can do? Odd jobs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: So you want something to do, right?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pevrin pauses as he thinks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Might you be able to help me in a personal matter?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: It involves my brother, Bevon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I have not seen him in many days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I have this letter prepared for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: He is rather nervous around pterosaurs and thus he is not willing to meet me here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: So I'd like to extend an invitation to him, to meet at Kada-El's for a drink.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I look forward to seeing him again so that we may tie our brotherly bonds once more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Would you please bring it to him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, sounds like a simple task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Then deliver this message to him as soon as you can, and come back if he gives a reply, please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pevrin hands you a letter.-</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me, I have something for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Aye, what's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: A letter?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I reckon I better read it then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bevon looks over the letter and nods a few times.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Well aye, I sure do miss m' brother as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: If'n he wasn't workin' with those blasted pterosaurs, I reckon I'd be seein' a whole lot more of 'im.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Please return to 'im and tell 'im I accept, and will meet 'im at the tavern.</td>
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
							$npcName = 'Pevrin Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pevrin Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bevon accepts your invitation.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Now that is good news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Here, take this as a token of my appreciation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I just hope I can get my brother to accept pterosaurs once he knows a bit more about them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: At any rate, it will be good to see him again.</td>
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
						<td>Rewards: 1000 Tria, 8000 XP.</td>
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
