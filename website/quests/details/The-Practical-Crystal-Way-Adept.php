<!doctype html>
<html>
<head>
	<title>The Practical Crystal Way Adept</title>

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
						<td>The Practical Crystal Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Crystal-Way-Adept.php">Knowledge of the Crystal Way Adept</a> quest, Rank 90 Crystal Way, 1 Adept's Crystal Way Wand, 1 Apprentice's Crystal Way Robe.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
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
						<td>Tarmeen: As our time is coming to an end, I must admit that you have been a very good student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You have proven well your applied knowledge, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: It has not been easy to keep my faith from coloring your training, but I believe I have done so up to now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: The Circles try to remain separate from the religions, as each Circle contains worshipers of all gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: In saying that, I need your help on a matter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen hands back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Zhaomal of the Shadowcasters at the Eagle Bronze Doors has put in an urgent request, I need you to go there and let him know you are there to help.</td>
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
						<td>YOU: Tarmeen sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Finally…</td>
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
						<td>Zhaomal: Correct me if I am wrong, but you appear to be a dedicated student of the Crystal Way, not a simple follower of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: No matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I requested Tarmeen's aid because this is a matter of Laanx, not because he or any of his students are better in Crystal Way than what I am, as if that was possible.</td>
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
						<td>Zhaomal: I will give you the benefit of the doubt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The family of a young shadowcaster residing in Sarpendil is very ill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: We tried potions, Life Infusion even the top realm Healing Flash all to no avail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have realized that they were once avid worshippers of Laanx, but have since begun to grow lax in their practices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Though they have begun to worship in earnest again, and are improving, it does not seem as if their faith is strong enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So Sir Crystal Way Adept, do you think there's a spell to cure them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Tell me the spell name.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Cast curing Faith.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal opens his eyes in excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Of course, cure someone by manipulating their faith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I was so stuck in my combination glyph spells I failed to see the single glyph, single way spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I can see why Tarmeen sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Sometimes it takes a more simple mind to see the simple solutions.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal removes a Faith Glyph from his glyph sack, then pulls out another type of glyph.-</td>
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
						<td>Zhaomal: You know what, you may have this glyph for helping.</td>
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
						<td>Zhaomal: Do say thank you to Tarmeen for sending such a talented Enkidukai.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
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
						<td>Tarmeen: Well done, always interesting trying to break through that Shadowcaster's arrogance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Once you have, he is not so bad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen gives a warm smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: That robe you carry is no longer suitable for one of your skill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Please give it to me now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the robe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: As with the bracers, this no longer belongs to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now for your last question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This one is very important, as it will affect what you choose to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Tell me what Way directly opposes the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: dark</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Correct again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You have proven your knowledge of the Crystal Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I am honored to present you with your new robe, Adept of the Crystal Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarmeen hands you a neatly folded robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I am sure Zhaomal tried to convince you to consider joining the Shadowcasters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: If you are considering it, your last chance will soon be upon you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Take your new robe and show it to Govell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: He will tell you of the choices you have to make.</td>
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
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my new robe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Tarmeen has approved of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now you have to make a choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is the last test before you will no longer be allowed to change your chosen Way of study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Let me be very clear on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: If you continue on the path to Way Master in the Crystal Way Circle you will not be able to advance beyond Adept, the rank you are now in the Dark Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will also not be able to advance beyond Adept in the Brown and Red Way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will, as it is safe to be allowed to advance past the first Master's rank in Blue and Azure Way Circles, as they complement the power you will use as an Crystl Way mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I believe I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: If you wish to follow the Crystal Way to the pinnacle of its majesty, you will need to finish your training to the extent of Tarmeen's abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Then you may come to me and give me your wand together with another Adept's Crystal Way Wand and one Apprentice's Crystal Way Wand which also may be borrowed from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is to prove you have the respect and trust of your Adept peers, as well as the Apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Remember, once you bring these three wands to me, there will be no turning back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Think long and hard before you make this choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I am sure I will see you soon, YOU.</td>
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
						<td>Rewards: 1 Door glyph, 1 Adept's Crystal Way Robe, 35 Faction with Crystal Order, 16400 XP.</td>
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
