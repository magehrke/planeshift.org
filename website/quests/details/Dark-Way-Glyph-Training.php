<!doctype html>
<html>
<head>
	<title>Dark Way Glyph Training</title>

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
						<td>Dark Way Glyph Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Dark-Way-Apprentice.php">The Dark Way Apprentice</a> quest, Rank 20 Dark Way, 1 Apprentice's Dark Way Wand, 1 Weakness glyph, 1 Darkness glyph.</td>
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
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: So you return like a bad disease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I have a short amount of time to test you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Are you prepared for your single spell glyph test?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I will be the judge of that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: But first I want you to do something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Dark Way is not only a matter of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: It's also a matter of knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: It's time to learn something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Go in the library, here in these hallways and read the Four Revelations of Dakkru.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I read it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven gazes at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: In the book Londris talks about an event.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I was there and I didn't like to be bullied, neither by a god nor by man.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: But enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: What did Londris remembered when the winds start to rise?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: eclipse</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: A really strange book, isn't it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven closes his eyes for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Now hand me the glyph that weakens your foe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I guess that will be Weakness?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: So you are not a complete waste of skin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven returns your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Now hand me the glyph that allows you to cast a spell that reduces vision.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven once again awaits your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And who can see in the Darkness of night right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: So, YOU, you have past this first part my testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: It seems even a Enkidukai like you can learn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take these bracers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: They shall help with your…</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: mortal weakness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Hand them to me when you think you are ready for your next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Be sure you have improved your skills so as not to waste my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Also, look into obtaining a glyph called Negate.</td>
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
						<td>Rewards: 1 Apprentice's Dark Way Bracers, 15 Faction with Dark Order, 10800 XP.</td>
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
