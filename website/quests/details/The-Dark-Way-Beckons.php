<!doctype html>
<html>
<head>
	<title>The Dark Way Beckons</title>

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
						<td>The Dark Way Beckons</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Without-a-Way.php">Without a Way</a> quest, 1 Way Amulet, 1 Death glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You DO NOT get the glyph back!</td>
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
						<td>YOU: I'd like to join the Dark Way Circle, I was given this amulet to give you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: A gift from a mortal?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I do not…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven shuts his mouth, staring at the amulet. Then he points his cold eyes in yours.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: This is not a gift, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: You want something from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: But I have no time to waste with one like you, so I will not repeat myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: If I accept the amulet you will be introduced to the Dark Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Do you really desire it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: If you take this path you will find much more difficulties in the other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Decide now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Do you want to commit yourself to the Dark Way magic and join its Circle, or not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Make your choice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My purpose is to became a Dark Way Master.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: This is your start point then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I suppose you already own a Dark Way Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The one you can find in that pitiful magic shop, where you got this amulet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Give the glyph to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: As requested, here is the glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven eyes narrow, examining the glyph. Then he grins slightly, looking upon you with a firm expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I knew you had something like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Something so weak.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven puts the glyph in a pouch, then he clenches his hands. After a second he opens them, and a wand pops in the mid-air, floating.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take this wand, it should help you, Mortal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Your first masters will be Londris Kolaim, then the Dark Wanderer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: They have tasks for you, and if you succeed you will gain a proper glyph to train with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Or Perhaps you already had it, I do not mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: In the meantime, if you want, I could teach you some lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Now leave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I hate wasting time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Remember, the Dark Crystal never waits.</td>
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
						<td>Rewards: 1 Apprentice's Dark Way Staff, 5 Faction with Dark Order, 8000 XP.</td>
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
