<!doctype html>
<html>
<head>
	<title>Consumer Ecology</title>

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
						<td>Consumer Ecology</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 10 Ulbernaut Hearts, 10 Clacker Meat, 10 Rat Meat, 10 Rotten Grendol Meat.</td>
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
							$npcName = 'Birkin Draewr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Birkin Draewr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You seem stressed, anything I can do to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr sighs and wipes some sweat off his forehead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Aye, there is absolutely something you could do for me, for the whole arena actually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: But you'd have to be a good hunter, well...</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: You could also just pay some hunters to work for you I suppose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Think you could be helping?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll help you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: That's great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: There've been fewer people in tha arena lately and that means a big mess o' trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Not only fer Gregori and every one else's economy, but for those stinkin dead-meat eatin' consumers' ecology as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do you mean?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Well, think 'bout it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Fewer fights means fewer bodies and that means the consumers get less food.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: You might not realise but there should normally be a lot of pieces of things that need disposing of.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: There are pits beneath the Arena where our little cleaners are kept, makes it easy to dispose of things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Now, considering we're having somewhat of a quiet time...</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: I'd say they're starvin' by this point and, if they die, we'll have the opposite problem, because we would have no way ta get rid of all tha bodies.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why don't you just get more consumers if you need them?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Birken shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Raising more consumers is very time and energy consuming and ya don't want me ta get started on how it is ta do the catch on just one of those nasty things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Oh no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Got to be keeping those we already got here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what can I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: I want ya to get as much meat as you can carry and deliver it all to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Ulbernaut hearts are the big favourite, but clacker meat and rat are good as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: They need a certain mix, ya see, and even stinky rotten grendol meat serves a role.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr sighs and shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: It be a big order though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: We'll be needing at least ten good chunks o' each kind of meat, though I'll be paying ya richly fer it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, some Clacker Meat.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Our consumers will be liking these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr stares away toward nothing for a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: This reminds me of the time me had to go hunting to feed those consumers meself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr draws his breath deeply as if to tell a long story in one breath, but releases it all in a single sigh.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Never mind, there is no time fer stories now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Here, take some circles as a reward.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, some rat meat.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Rat meat isn't the consumers' favourite, but it will still help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Once had the privilege of huntin' lots'a rats meself, I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Ya see, the arena had been swarmed by rats, big fat ones too.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr stops to ponder a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Never mind, such a long story will only bore ya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: I can shorten it and say that our consumers had enough meat for months.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Here, take a few circles for yer troubles.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, take these Ulbernaut hearts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Magnificent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Our consumers will surely indulge in this nice meal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr looks thoughtful.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Have ya heard'bout tha time me was forced to live on ulbernaut hearts?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr shakes his head before you are able to reply.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Never mind, me will tell ya that story later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Here, take this stack o' circles as payment fer tha meat.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, some stinking grendol meat.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr pinches his nose with two fingers.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Yuch, that's the most smelly meat me ever smelled.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Well almost, did me tell ya about the time me was sent to hunt fer...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr pauses and shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Me thinks of no idea how those consumers can enjoy such a meal, but anything to keep those beasties happy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Here, take this heap o' circles for yer efforts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr hands you some circles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you need any more meat?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: You have done a great service to the whole o' the arena already, but our consumers are well fed fer the moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Birkin Draewr sighs in relief and smiles at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: But they always be getting hungry, so do come back later if ya want to help some more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: And here is a little something extra for all your troubles as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr rummages in his sack and pulls out a bow and a few arrows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: This might help you in your future hunts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: It's somethin' Jjousk gave me, but turned out it weren't me thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Birkin Draewr: Mayhaps ya should go an' talk ta him when ya got the time.</td>
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
						<td>Rewards: 1 Demorian Composite Bow, 120 Iron Arrows, 19500 Tria, 10800 XP.</td>
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
