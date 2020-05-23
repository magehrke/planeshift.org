<!doctype html>
<html>
<head>
	<title>The Practical Dark Way Adept</title>

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
						<td>The Practical Dark Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Dark-Way-Adept.php">Knowledge of the Dark Way Adept</a> quest, Rank 90 Dark Way, 1 Adept's Dark Way Wand, 1 Apprentice's Dark Way Robe.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Wand as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your dedication astounds me, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Not to mention the fact that you still live.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Rather disappointing, but who am I to question the will of Dakkru?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne hands back the wand, shaking his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: It is nearly time for you to begin your Master level testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: First, you will travel to the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Zhaomal of the Shadowcasters need to be taught a lesson in a Dark Way matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Let him know you are there to…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne mask grins.-</td>
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
						<td>YOU: I was told you needed help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You are much too good looking to be Rulayne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: That mask must hide a face only a mother could bare.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal laughs before looking at you with some curiosity.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Let's see what you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have a young Shadowcaster residing in Sarpendil who is a very competent messenger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: He is the fastest foot to either the Eagle Bronze Door or Hydlaa, and stakes his day's pay on making the trip in short time than anyone else can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: In saying that, he noticed that every time he makes a delivery to Dark Wanderer, he is exhausted on the way back and needs many rest stops before returning.</td>
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
						<td>Zhaomal: So, he keeps losing out every time he delivers for the Wanderer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The Wanderer has admitted to using a Dark Way spell, and that he will repay all lost delivery fees we can tell what spell or glyph combination is used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So Sir Dark Way Adept, what do you suggest is the spell or combine that overwhelms the poor messenger so?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Illness and Weakness Glyphs.</td>
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
						<td>Zhaomal: That would do it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal removes a hand full of glyphs from his glyph sack, then sorts out three of them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
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
						<td>Zhaomal: You know what, you may have this glyph for sharing your knowledge.</td>
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
						<td>Zhaomal: Do say thank you to Rulayne for sending such a talented Enkidukai.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Zhaomal sends thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: He does, does he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: He thanks me for giving him another prospect is all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your 'talents' were likely wasted on a problem he already had the solution to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: The Shadowcasters are always looking for the most talented practitioners in all six Ways to join them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: That is your choice to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Perhaps his ways will kill you faster than mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: One can only hope.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: The robe you carry belongs to an apprentice, which you are clearly no longer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Give it to me now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My robe as requested, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Yes, you will no longer use this robe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne tosses it to the ground and steps on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I must ask you one last question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: This one is very important, as it will affect what you choose to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Tell me what Way directly opposes the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Correct again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: You have proven your knowledge of the Dark Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I am no longer embarrassed to present you with your new robe, Adept of the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rulayne hands you a neatly folded robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: As I mentioned, I am sure Zhaomal tried to convince you to consider joining the Shadowcasters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Your last chance to do so will soon be upon you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Take your new robe and show it to Londris.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: He will tell you of the choices you have to make.</td>
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
					<tr class="quest_you">
						<td>YOU: Please except my Way Robe as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Londris speaks without looking at you, his attention absorbed by one of his books.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Rulayne has approved of you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Well then, you think it is time for you to speak to her, don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Well, you can't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: She has no time for those that are not completely devoted to the Dark Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: A choice is now before you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: This is the last test before you will no longer be allowed to change your chosen Way of study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: If you continue on the path to Mastery in the Dark Way Circle, you will not be able to advance beyond apprentice level in the Crystal Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You will not be able to advance beyond low Adept in the Azure and Blue way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You will not be allowed to advance to Master level in Red and Brown Way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, be careful of mixing with opposing magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: If your wishes bring you to follow the Dark Way to full mastery, you will need to finish your training to the extent of Rulayne's abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Then you may come to me and give me your wand together with another Adept's Dark Way Wand and one Apprentice's Dark Way Wand, which also may be borrowed from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: This is to prove you have gained the respect and trust of your Adept peers, as well as the Apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Remember, once you bring these three wands to me, there will be no turning back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Think long and hard before you make this choice, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You randomly get 1 of 3 glyphs at the end. We don't know the 3rd glyph yet, if you know it, please write us a mail.</td>
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
						<td>Rewards: 1 Daemon glyph, 1 Illness glyph[OR], 1 Adept's Dark Way Robe, 1 Faction with Dark Order, 16400 XP.</td>
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
