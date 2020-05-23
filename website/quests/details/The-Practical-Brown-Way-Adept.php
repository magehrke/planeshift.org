<!doctype html>
<html>
<head>
	<title>The Practical Brown Way Adept</title>

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
						<td>The Practical Brown Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Brown-Way-Adept.php">Knowledge of the Brown Way Adept</a> quest, Rank 90 Brown Way, 1 Adept's Brown Way Wand, 1 Apprentice's Brown Way Robe.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept my wand as prove of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Your skills continue to sprout like seeds cast upon a verdant field, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: So much so, it is nearly time for you to begin your Master rank testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Time does pass fast under Xiosia's gaze.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: It seems like such a short time ago that you first came to me as only a seedling.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia shakes her head then hands back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: It is time to decide on a new path for your roots to take.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I need you to go to up to the Eagle fortress for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia points up towards the waterfall.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Zhaomal of the Shadowcasters has requested advice on a Brown Way matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Let him know you are there to help.</td>
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
							$npcName = 'Zhaomal Shehan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zhaomal Shehan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lorytia sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Lorytia sends one of her weeds instead of coming herself?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal looks at you with some curiosity.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: This would be an insult if I did not need so small a favor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal taps his chin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Let's see what you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: A young Shadowcaster running an errand for me has fallen down in the canyon on the way up here, lucky for him he has not fallen to far, but the package he had with him went a lot further.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The canyon is too difficult to climb without some magical assistance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal waves his hand randomly towards where the cliffs are.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The fall is great, and anyone making the jump will surely die.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal picks up a small rock and drops it. It thumps into the sand at his feet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Much like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: However, if he could be made more like this…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal pulls out a piece of soft bread that is about the same size as the rock and drops it. It hits the sand lightly, barely making a sound and leaving hardly a mark.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I believe if we could make the young man more like the bread, and less like the rock, he could jump down there with little harm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I am sure I need to combine a glyph with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So Sir Brown Way Adept, what glyphs do you suggest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Negate and Weight glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal nods while thinking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Why did I not think of that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: A Dark Way glyph combined with the Brown Way …</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: That should work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal removes a Negate glyph from his glyph sack, then pulls out another type of glyph inspecting it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Look at that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: It seems I have an extra glyph here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Even I do not need more than one of each glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You know what, you may have this glyph for your advice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Perhaps you will consider joining the Shadowcasters in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You do not need to join now, nor do I think you have enough talent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: For that, you must achieve Adept status in all Way Circles, and Master in none.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I only ask you consider it if that time comes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: One more thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Do say thank you to Lorytia for sending such a talented Enkidukai.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Zhaomal sends his thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: He thanks me, does he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I wonder if he really needed help at all, or was just checking up on our newest Brown Circle members.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The Shadowcasters are always looking for the most talented practitioners in all six Ways to join them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: That is your choice to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The robe you carry belongs to an apprentice, which you are clearly no longer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Please give it to me now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My robe as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Yes, you will no longer use this robe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I must ask you one last question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: This one is very important, as it will effect what you choose to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Tell me what Way directly opposes the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: azure</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Correct again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: You have proven your knowledge of the Brown Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I am honored to present you with your new robe, Adept of the Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia hands you a neatly folded robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: As I mentioned, I am sure Zhaomal tried to convince you to consider joining the Shadowcasters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Your last chance to do so will soon be upon you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Take your new robe and show it to Archmaster Mulgik.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Kra will tell you of the choices you have to make.</td>
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
							$npcName = 'Mulgik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mulgik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept my robe as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mulgik gives you a warm smile, but a smile with a hint of concern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Lorytia has approved of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: A choice is now before you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is the last test before you will no longer be allowed to change your chosen Way of study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Let me be very clear on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: If you continue on the path to Way Master in the Brown Way Circle you will not be able to advance beyond Adept in the Way which oppose Brown way, Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Or those which are neutral to the Brown Way, the Crystal and Red Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: You will also not be about to pass beyond the first Master's rank in the two supporting Circles, Blue and Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Indeed I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: If your wishes bring you to follow the Brown Way to full mastery, you will need to finish your training to the extent of Lorytia's abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Then you may come to me and give me your wand together with another Adept's Brown Way Wand and one Apprentice's Brown Way Wand, which also may be borrowed from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: This is to prove you have gained the respect and trust of your Adept peers, as well as the Apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Remember, once you bring these three wands to me, there will be no turning back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mulgik: Think long and hard before you make this choice, YOU.</td>
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
						<td>Rewards: 1 Creature glyph, 1 Adept's Brown Way Robe, 30 Faction with Brown Order, 15000 XP.</td>
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
