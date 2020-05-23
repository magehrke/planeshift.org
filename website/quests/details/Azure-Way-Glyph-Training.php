<!doctype html>
<html>
<head>
	<title>Azure Way Glyph Training</title>

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
						<td>Azure Way Glyph Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Azure-Circle-Awaits.php">The Azure Circle Awaits</a> quest, Rank 30 Azure Way, 1 Apprentice's Azure Way Wand, 1 Air glyph.</td>
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
							$npcName = 'Vorigna Tassen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vorigna Tassen</a>";
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
						<td>Vorigna: Welcome, I have been expecting you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna waves her arm outward.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Now, let's see about getting you in order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna flips through some notes she pulls out of a bag and reads to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Wand as proof, check.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna hands you back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I do not have your first test ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: So, why not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Let's get to know each other.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, seems easy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I know what you think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: The usual boring line to introduce us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Let's make it more interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I study dreams, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: There are recurrent dreams, usually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: What do you think is the worst?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I'll give you three choices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: A dream of drowning?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: A dream of running away from something?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: A dream where you remain alone in the middle of nothing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Drowning.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Ohhh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: That is the right choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Dreaming to drown means you feel too overcome by your commitments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Let's assume you're a dreamer of this type, so I can teach you something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I'd suggest you to concentrate on little things and not on whole big problems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Do one little thing after another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Let's make it concrete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You want to learn the Azure Way, it could seem a long journey, but focus only on now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You could do a little thing for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Go and get me my daily ration from Jedonek Bolossj.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Then return and I will teach you a lesson.</td>
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
							$npcName = 'Jedonek Bolossj';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jedonek Bolossj</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Vorigna Tassen is asking about her ration.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Oh, another apprentice, seems Vorigna is getting lazy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jedonek shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jedonek: Nevermind, I do have her food here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jedonek hands you a packet.-</td>
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
							$npcName = 'Vorigna Tassen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vorigna Tassen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your ration packet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Thank you YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna sets the packet aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You can learn two lessons today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: One, the worst is always what you choose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: When I asked you about the dreams, every answer was good, because we, ourselves, decide what is the worst for us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: And if you want now, and always, may decide also what is better for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: It's only will, you can change.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Easily, and when you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: The second lesson is simpler, do not give too much trust to selfish men.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna lips move, becoming a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you mean?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna laughs friendly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I mean that I needed someone to get my ration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I used words to manipulate you, to follow my evil plans!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna smirks, putting away the ration.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: But I'd like to thank you, and, if you want, I can tell you the interpretation of the other dreams, but remember that they're only guidelines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Otherwise we can continue your training.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me about dream of drowning.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Dreaming to drown usually means the subject feels too overcome by his commitments, well, sometimes could be also people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: The best way to avoid it is to concentrate on little things and not on the whole problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Do one little thing after another could help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I can repeat if you haven't understood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm ready to continue the training.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Remember that you can always fight back your fears and blow them out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Now, I am supposed to test you on magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: To make sure you have basic knowledge to start your glyph training, I need you to give me the most common of all Azure Way Glyphs, used on its own as protection.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I guess that will be the Air glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna gives you a slight smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You would not think air itself could be much of a defense, but standing in a powerful wind on a guard tower will quickly change your mind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna returns your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You have passed this test of knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: As reward and proof of advancement, you will receive the second Azure Way item.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna checks her notes again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: For your next few theory sessions and tests with me you will need some other glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vorigna counts on her fingers of her free hand as she calls out the three glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Sleep, Mind and Humanoid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: I know they are not easy to find, so we can see about it later if you have not acquired them yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: Before you return to me for another test, you must increase your skill sufficiently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: When you have, I will accept your wand and give you your next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: One last thing before you go, I understand Thorian has been asking about for some help with getting enchanted gems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vorigna: You should go and help him.</td>
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
						<td>Rewards: 1 Apprentice's Azure Way Bracers, 10 Faction with Azure Order, 9400 XP.</td>
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
