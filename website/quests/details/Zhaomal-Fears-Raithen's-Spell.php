<!doctype html>
<html>
<head>
	<title>Zhaomal Fears Raithen's Spell</title>

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
						<td>Zhaomal Fears Raithen's Spell</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Ulbernaut Heart.</td>
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
						<td>YOU: I am looking for some work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: It is said that outsiders who pay too much attention to the Shadow Squadron become naught but memories.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal pauses and looks you over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I won't warn you twice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So do you really intend to stand here and ask me for work?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Are you so brave?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So be it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I will give you a task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I am curious about something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have been here a long time and I fear I have lost touch with the world outside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Raithen specifically is a matter worthy of investigation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: He is preparing to summon some ancient creature or force during the crystal eclipse and I fear what that might be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Do you dare inquire into his past and try to find out what he intends to summon?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Glad to hear there are still a few with the audacity to peer into the life of a Shadow Squadron commander.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: When I was young, I was taught to never fall for a first impression, however deep or honest it seemed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I teach the Shadow Squadron trainees and prepare them to face the harsh leadership tactics of Raithen but I know little of his history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You seem to have traveled the realms a bit more than the average person has; perhaps you can assist me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you want me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I know Levrus and Raithen have a history: maybe you can find out more than I can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Levrus does not speak to those who know Raithen in his new life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Maybe Levrus can point you in the right direction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I hope you can find significant information that adds to my knowledge of Raithen and his intentions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Even if you fail, return and tell me so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I will reward you for your efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Are you capable?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Acceptable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Go ask Levrus about Raithen.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Raithen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I already spoke to someone today about Raithen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He was once my apprentice; I do not know anything more to tell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you really need to know more about Raithen you can attempt to speak to his new master, The Dark Wanderer.</td>
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
							$npcName = 'Dark Wanderer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dark Wanderer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about Raithen's intent during the crystal eclipse?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Why would I speak to you at all mortal…let alone speak of such a man as Raithen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Tell me who is so curious about Raithen…</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Tell me…and I will give you a …</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: task …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Wanderer sneers viciously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Zhaomal</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: You…</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: speak the truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I need something to complete a…</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Ritual that…</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I do not have the…</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Liberty to seek.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Go and find me the heart of an ulbernaut, return and give it to me.</td>
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
							$npcName = 'Dark Wanderer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dark Wanderer</a>";
						?>
						1 Ulbernaut Heart</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your heart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Very good …</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: here is something for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Now …</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: go and can tell your puppet master Zhaomal that Raithen will save Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Dark Wanderer laughs evilly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Now if you combine this glyph with the mind glyph you will be able to peer into the souls of others, a talent I quite enjoy myself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Dark Wanderer looks on you with cold disdain.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Perhaps you will be of greater use to me another time.</td>
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
						<td>YOU: It seems Raithen will save Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You heard that from the Dark Wanderer didn't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Who knows what you did for him to get that information?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Another person I sent on this task returned with the same answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Confound it, trouble is brewing: I sense it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I suppose you have fulfilled your task; here's something for your trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: However, I really don't appreciate that you're dealing with that man.</td>
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
						<td>Rewards: 1 Humanoid glyph, -15 Faction with Guard, 3391 Tria, 12200 XP.</td>
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
