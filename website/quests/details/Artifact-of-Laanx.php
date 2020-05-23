<!doctype html>
<html>
<head>
	<title>Artifact of Laanx</title>

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
						<td>Artifact of Laanx</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Polyuntri-Stevald-Serves-Laanx.php">Polyuntri Stevald Serves Laanx</a> quest, 4 Emerald Crystals, 1 Ulbernaut Heart.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I am looking for a quest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I'm currently investigating something that can make a real difference to this temple, but I cannot make you part of it unless you prove to be really faithful to Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Are you a Laanx follower?</td>
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
						<td>Sharven: Are you aware of the principles of our religion?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do you share them?</td>
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
						<td>Sharven: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: How many times do you pray to Laanx each day?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 5</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Perfect, you look like a Laanx adept.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But I'm searching for someone with the right knowledge of our religion…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Maybe you can tell me which of our books is the most famous?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: the book of names</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, the Book of Names is the most important written text we have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It holds so much knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It speaks about the city where Laanx ruled for years…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: the name of which is?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: kadaikos</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Right, the old Kadaikos.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Nobody really knows if there is a passage to it from Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You have enough knowledge of our religion, so I can tell you more about what I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Recently, I heard rumours from the Laanx priests of a powerful magical artifact which seems to have been created recently.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me more about the artifact.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: As you know, Laanx and Talad have been distant from us for many years, as if they are busy with far more important tasks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Due to this absence, priests are no longer able to create items of exceptional quality and power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We need to discover if something is happening related to the Gods' disappearance and learn if there is a chance that we can once again be closer to our beloved God.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And then, once we have gained the knowledge to establish such a bond between ourselves and Laanx, we *have* to create it *before* Talad's priests do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And how do we go about doing that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The only piece of information I have on the artifact is a phrase that was revealed by one of our most expert priests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It looks like a riddle to unlock something on the item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The phrase he translated from the item is 'If crystal is born on 8, what is the magic number of Brown, Dark and Red?' If you ever manage to know the answer, please come back to me and tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I will need a correct answer, because if it's wrong, it will probably do a lot of damage during the manipulation of the item.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found the answer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, you found something?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: While you were gone, I prepared a spell that can use the magic number and hopefully bring the artifact here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If the number is wrong, we will be in a lot of trouble though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Where did you find the answer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: At the fountain in the plaza.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Interesting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven takes in a deep breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I'm ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What is the number?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [I know the number is] 36</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I will try with this number.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven concentrates and casts a complex spell you cannot recognise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The spell worked!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It brought the artifact here!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now we should be quick and get all the knowledge we can from it, before someone discovers we have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Are you willing to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have helped this far, I might as well stay and help until the end.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Great, now that I have the artifact I can try to identify it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I will first try with a simple spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: For that, I just need 4 emerald crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Bring those to me, as soon as possible.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Sharven the crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Perfect; I will now try to identify the item.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven casts a spell.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Hmmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: it seems I cannot get any information from it with this simple spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We need something more powerful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know one I can try, but for that I need a very special ingredient, an Ulbernaut heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Hurry up and find one for me, our time is running out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hope I am not to late, here is the Ulbernaut heart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You found it, very nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I can now cast the spell!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven concentrates and moans a complex phrase.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Some time passes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Holy Laanx, creator of faith, it worked!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It seems that I can now access more information about the artifact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I will memorise all the symbols I saw, and then try to reverse the spell to send the item back to the place where it was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Hopefully, nobody will find out that I've used it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven casts a reverse spell and the item disappears.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You've helped me a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Please take this item as a reward for your actions, and may Laanx frighten the shadows from your path.</td>
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
						<td>Rewards: 1 Meteor glyph, 30 Faction with Iron Hand, 15000 XP.</td>
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
