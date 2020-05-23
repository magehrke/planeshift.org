<!doctype html>
<html>
<head>
	<title>Start of Red Way Adept Training</title>

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
						<td>Start of Red Way Adept Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Red-Way-Apprentice.php">The Red Way Apprentice</a> quest, Rank 60 Red Way, 1 Might glyph, 2 Apprentice's Red Way Wands.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the two wands you requested as proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will soon no longer be just an Apprentice of the Red Way, though you still have a long journey ahead of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Never think you know all there is to know either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That is the path to folly, and I will be sure to trip you on the way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands back one wand with a friendly grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Return this to your fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Your new wand will be ready soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: We will be spending quite a bit of time together over the next weeks, and I am an easy man to get along with as long as you don't take yourself too seriously.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I'll need you to do a few small tasks for me now and again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This will be the first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Trasok, like any other smith, only wanted to learn enough Red Way to support his smithing skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It is for this reason that he now needs our help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, normally I would love a jaunt off to him, but I have some business with Menita.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Lucky for me you are here, aye?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Go on out there tell him I sent you and see what he wants.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ferryd Shillor sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Haven't I seen you in and out of here before?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok puts his hammer down and flicks his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Doesn't matter if i have…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: My dilemma is as follows, I have ta' forge a part for the winch that is so heavy that even I lack the strength to move it with ease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: No one strong enough can handle it with the precision that is needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I am aware there is a strength spell that I was taught while in my training with the Reds and Ferryd.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok utters the last words with respect but hardly any admiration.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You see, I seem to have misplaced the Might Glyph that is needed for the task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I am a business man, so I'll make you this offer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: If you would give me one, I will in return give you one of the more scarce and most powerful Red Way glyphs you will ever come across.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok holds his hand out with a Red Way glyph awaiting the exchange.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: My skill with Red Way is nowhere near high enough to use it myself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One Might glyph for our exchange.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Wise choice indeed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok looks pleased with himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I could have traded that for at least three or four glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: So treat it with the respect it deserves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, and tell Fe…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Archmaster Ferryd I say thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: No wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Even better, hand him your new glyph and show him what a great trade you have made.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok starts laughing.-</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have just traded Trasok for this Chaos glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd looks surprised then seems to realise something.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I see what happened here, he traded you a valuable glyph for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: What have you lost?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Tell me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd holds up his hand and laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Wait I know, it is a Might Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It is the same glyph I traded him for this very same one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd starts laughing again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I will admit I enjoy a good prank from time to time, I believe Trasok thought this was one of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Trasok stopped advancing in Red Way very early and would not have gotten to the skill to use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: So Trasok tried to play a prank on one of my students and pranked himself yet again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd is about to hand you back the glyph, but pauses to changes it to another.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I certainly do appreciate a good laugh so will replace your Might glyph for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But before I do I want you to tell me about the glyph you just received?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hold the glyph in your hand and concentrate and answer; Chaos.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That is the most obvious answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But also the most important, the Chaos glyph imparts the ability to both control and release 'chaos'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Understanding the full aspect of every glyph you come into contact with will greatly improve your proficiency as a mage.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hold the glyph in your hand and concentrate and answer; Entropy.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Wrong…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well, no, right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd winks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Chaos and Entropy go hand in hand and the ability to control Red Way Chaos will let you effects its entropy as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hold the glyph in your hand and concentrate and answer; Random.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Again this is another aspect of this glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you think about Chaos you may also think about things being Random.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But this is also something to be wary off, as no matter how much control you think you have Chaos, or Randomness…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: COULD BLOW OFF AN ARM.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd throws his arms in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: POW!!!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If that happens then you'd wish you paid more attention to what I'm telling you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hold the glyph in your hand and concentrate and answer; Destruction.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd almost yells back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Destruction!!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd snickers a little bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Red Way is about power and strength and fury, all of these invariably lead to destruction.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hold the glyph in your hand and concentrate and answer; Confusion.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, Chaos and Confusion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Sound similar, no?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lastly Fire?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Fire plays a strong role in The Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But is does not mean it has to be a part of each of it's glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I think you deserve to have your Might glyph now</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you your glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, for your last task as an Apprentice, I want you to return your Lower Red Way Wand to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Return to me after you have done so and I will have your first Adept item ready.</td>
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
						<td>YOU: I was told to hand you this wand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A wand?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus shakes it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good, it doesn't rattle so you haven't broken it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, what would I do with such a thing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I am in spectacular shape and my trousers fit quite nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Made by the finest tailors, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But, since you are offering it too me, I can not refuse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes a familiar box from under his counter and drops your wand in, then shakes it from side to side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What is this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I seem to have a few items in here already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And one is another wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Imagine that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do wonder where they keep coming from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I suppose I can offer them to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you don't want either of them, take this pie.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd removes a wand from a bag and gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Here is your new wand and with it you can now go by the rank of trainee Adept.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will find that it is much better than you old.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Be sure you have returned the other apprentice wand to the person who gave it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now that you have begun on the path to becoming an adept, you will have to train much harder to obtain the level of skill you will need for your next test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you are skilled enough, you may offer your Adept's wand to me to show that you are ready for your next test.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd looks thoughtful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Also, you should soon obtain and study a glyph called Lightning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: There is a carpet merchant I once paid with a Lightning Glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I can't recall the name now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Not sure if he will part with it, but maybe if you help him some first he would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Farewell, Adept.</td>
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
						<td>Rewards: 1 Way Amulet, 1 Apprentice's Brown Way Staff[OR], 1 Chaos glyph, 1 Adept's Red Way Staff, 25 Faction with Red Order, 13600 XP.</td>
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
