<!doctype html>
<html>
<head>
	<title>Brown Way Glyph Training</title>

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
						<td>Brown Way Glyph Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Brown-Way-Knowledge.php">Brown Way Knowledge</a> quest, Rank 20 Brown Way, 1 Brown Way Apprentice's Wand, 1 Weight glyph, 2 Tefusang Skin.</td>
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
						<td>YOU: I am here to be tested, here is my wand as prove of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Good, I see you are ready for your test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I like a hard worker!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet nods, proudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I want to check your ability.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Go and find some Tefusang Skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You can kill Tefusang and bring me their skin, otherwise you can buy them from someone, or you can recruit some good guy and go with him to kill Tefusangs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet thinks a little bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Nothing too hard, let's say two Tefusang Skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I'll wait you here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found two Tefusang Skin, as you asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Very, very nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now let me think.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet taps his chin with his finger, then snaps the fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I know, hand me the glyph that increases the weight of the target's equipment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet awaits the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would think it would be … Weight?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet returns your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Even though up until now you have been thought or tested on single glyph spells, it is worth noting that Brown Way only have a few of those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Most of our spells are derived from combining two glyphs in the correct order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: We will require Summon and Rock for our next session.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Do you have both these glyphs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am prepared.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Good, here is your bracers to prove you have passed this section of the training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Come back to me and give me your wand when you're ready for the next lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Of course, I will be the judge on if you are worthy yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: If I don't take your wand, then you are not ready yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And for another test I request you go and see Gregori in the arena, he needs your help.</td>
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
						<td>Rewards: 1 Apprentice's Brown Way Bracers, 10 Faction with Brown Order, 9400 XP.</td>
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
