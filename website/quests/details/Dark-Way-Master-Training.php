<!doctype html>
<html>
<head>
	<title>Dark Way Master Training</title>

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
						<td>Dark Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Only-the-Dark.php">Only the Dark</a> quest, 2 Adept's Dark Way Wand, 1 Apprentice's Dark Way Wand, 1 Fire glyph, 1 Armor glyph, 1 Arrow glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyphs back.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Londris Kolaim';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Londris Kolaim</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Text is missing due to quest changes.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Take this wand, it proves my commitment to the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn eyelashes flutter as her eyes close and open again, slowly. Her hip wiggles slightly while she reaches you, taking the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I am Evelyn, and you, YOU…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn stops talking, and stares in your eyes, her mouth faintly open.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You are a Master in the Dark Way Circle, and my new pupil.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn fingers flow on your wand, like an idle caress. Then she closes the hand, her black lacquered nails on the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your skills, your power, pleases me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Is your wish to please me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, my wish is to please you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: What a delightful answer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn puts your wand in a pouch, then she languidly raises the hands, showing her wrist.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Now, tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Which is the most powerful amongst the Ways?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn laughs, her white and sharp teeth appear behind her lips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It could be a pleasure to understand if you really believe in your answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: But, for now, I would be pleased if you show me your bracers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are my bracers, Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn takes the bracers, one for every hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The Dark Way is powerful, but so are the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Items like yours are owned by Adepts of each of the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Remember it, you will need this knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You know which of other Ways support our own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Meet members of these Ways, speak with them and gain their trust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will need it for the coming tests.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn leans forward, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: There's also a Way who opposes ours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: But, for now, go to Levrus and buy all the glyphs he sells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: On your return give me the glyphs of the Ways that support us.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: These two are the glyphs of the Ways supporting us.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn nods, examining the glyphs. Then she gives them back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Combined spells are the most powerful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The Dark Way is seductive, and elegant, but, like every magic, can be improved when used together with other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn smiles, tilting her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You can use supporting Ways, neutral, and opposing too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Azure and Blue Ways are neutral to Dark, and many times Dark Way glyphs are used to temper some of their combines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The opposite of Dark is the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Give me the Crystal Way glyph you bought from Levrus.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you mean Arrow, Archmistress?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn looks at the glyph. She doesn't take it and pushes back your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Keep it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Crystal and Dark Way can be combined, but it is dangerous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: These two Ways may collide, even cause death to the unwise magician who tries to use both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You are allowed to learn the supporting ways, within a realm or so from the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: But, if you decide to be trained in Crystal Way, pay special attention.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you train too high in Crystal Way you may be banned from the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn's pupils grow wider and wider, looking into your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: There is no epitaph for the foolish mage who challenged the gods, combining all magics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: His grave is a tall hill, with a crater, the last remembrance left of his madness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Do not ask further questions about this, for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Instead let's talk about spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Combine your Daemon and Arrow Glyphs, and then tell me the name of the result.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: daemon arrows</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Good work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You learned one of the rare exceptions to the rule of opposing ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you search you will discover others of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Life and death could merge…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn's tongue sweeps across her lips as she slowly closes her eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: becoming so gorgeous sometime.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn digs a hand in a pouch, and takes out a wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Take you bracers, as well as your new Master's wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: This new wand will be your proof, show me it when you will be ready for the next lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: And, to emphasize my pleasure, I want to offer you a personal gift.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn gives you a glyph. Her fingers touch your hand for some seconds, warmer than normal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Continue to train with me, until you become ready for the next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: We can learn so much, from each other.</td>
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
						<td>Rewards: 1 Shadow glyph, 1 Master's Dark Way Staff, 40 Faction with Dark Order, 17800 XP.</td>
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
