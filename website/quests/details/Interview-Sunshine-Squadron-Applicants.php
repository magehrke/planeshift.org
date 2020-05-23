<!doctype html>
<html>
<head>
	<title>Interview Sunshine Squadron Applicants</title>

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
						<td>Interview Sunshine Squadron Applicants</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Pinayet-Misses-His-Friend.php">Pinayet Misses His Friend</a> quest.</td>
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
							$npcName = 'Rylour Awnnys';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rylour Awnnys</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail Rylour, what are you up to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: I am on duty right now, but if you could help me conduct some interviews, I would be grateful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll do the interviews for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Three people have asked me about joining the Sunshine Squadron: Zak, Sinto Gheshd, and Taulim Wilaal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Let them know I sent you, collect their application forms, and ask them the following questions: Why did you apply?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: What are your skills?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Can you use swords?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Then return to me and hand me their forms.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent by Rylour to interview you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: So you're the Stonehammer who's here to interview me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Yeah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Go on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: This should be…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: entertaining.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me, why did you apply to become part of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Because it pays well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Yeah, I hear the Sunshine Squadron's got quite a nice treasury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: So I was thinking getting close to the Sunshine Squadron's serious Tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what skills can you offer to the squadron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Daggers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Sleight-of-hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: And if you ever need someone to slit someone's throat in their sleep without making a sound?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Let's just say I haven't had any complaints.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know how to use a sword in battle?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Well, not really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I prefer daggers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: More easily concealable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: But if it was a short sword or something, I could probably do okay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Here's my application.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I really hope you consider me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: It would be a shame if I'm not recommended.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: A real shame.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak glares at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I hope I don't have to be any clearer.</td>
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
							$npcName = 'Sinto Gheshd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sinto Gheshd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent by Rylour to interview you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: Ah, the Sunshine Squadron has answered me at last.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: By all means, ask your questions, Sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me, why did you apply to become part of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: I know that the Sunshine Squadron always needs good people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: I also know that my services would benefit them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what skills can you offer to the squadron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: I'm a martial artist by profession.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: I can counter any enemy in hand-to-hand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know how to use a sword in battle?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: Oh, my, no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: My martial arts are empty-handed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: I will never use a sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: By the way, here is my application form.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sinto: Thanks for your consideration.</td>
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
							$npcName = 'Taulim Wilaal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taulim Wilaal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was sent by Rylour to interview you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I've been expecting a representative from the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Interview away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me, why did you apply to become part of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: While I have much respect for the Hydlaa guard, I know that the Bronze Doors are a much more important guarding position.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: We need more on the first line of defense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I feel as if by guarding the Bronze Doors, I can guard more than just Hydlaa, but all of Yliakum.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what skills can you offer to the squadron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I'm trained in military discipline and strategy, I have guarding experience, and having grown up on a farm, I do have some hunting and tracking abilities - finding lost animals and so forth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know how to use a sword in battle?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Absolutely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I've been using swords for about six years now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Short, long or great, I've used them all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I believe now is the time when I hand you my application.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: And thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taulim: I hope to hear from you soon.</td>
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
							$npcName = 'Rylour Awnnys';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rylour Awnnys</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have completed the interviews and have their application forms.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: You've interviewed all three applicants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: If you had to pick only one, who would you say is best suited to the Sunshine Squadron?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would say Taulim Wilaal is the best candidate out of the three.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Taulim, you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: I must admit upon meeting him, he seemed like the top choice as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: I suppose if I had any concerns about him, it would be that he is not being loyal to the Hydlaa guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: I will think on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: At any rate, I will take your opinion into consideration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Here is a consulting fee.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: If you are interested you should see our commander, Raithen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rylour: Word has it he is looking for someone to do a task for him.</td>
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
						<td>Rewards: 30 Faction with Guard, 7310 Tria, 15000 XP.</td>
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
