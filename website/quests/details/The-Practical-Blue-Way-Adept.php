<!doctype html>
<html>
<head>
	<title>The Practical Blue Way Adept</title>

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
						<td>The Practical Blue Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Blue-Way-Adept.php">Knowledge of the Blue Way Adept</a> quest, Rank 90 Blue Way, 1 Adept's Blue Way Wand, 1 Apprentice's Blue Way Robe.</td>
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
						<td>Zhaomal: And Adept of the Blue Way?</td>
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
						<td>Zhaomal: No matter, you will do.</td>
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
						<td>Zhaomal: The family of a young Shadowcaster residing in Sarpendil has become ill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The cause is worms that have invaded the family’s home, residing in the floor of the house.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The worms love heat, and the house is near a hot spring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: The worms give off a toxic gas when they feed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Only cold can kill them, that I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: But, they have had no luck with the basic glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So Sir Blue Way Adept, what spell or glyphs do you suggest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Cast Icy Ground.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal raises an eyebrow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Freeze the ground?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Well, that may inconvenience the family, but it should work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I can see why Tarmeen sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Sometimes it takes a simpler mind to see the simple solutions.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal removes a Glyph from his glyph sack, and then pulls out another type of glyph.-</td>
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
						<td>Zhaomal: You know what; you may have this glyph for helping.</td>
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
						<td>Zhaomal: One more thing, do say thank you to Tarmeen for sending such a talented Enkidukai.</td>
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
						<td>YOU: My robe as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: As with the bracers, this no longer belongs to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now for your last question, this one is very important, as it will affect what you choose to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Tell me what Way directly opposes the Blue Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: red</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Correct again, Fire and ice and all that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: You have proven your knowledge of the Blue Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I am honored to present you with your new robe, full Adept of the Blue Way.</td>
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
						<td>Tarmeen: Take your new robe and show it to Barrin.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except my Way Robe as proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Tarmeen has approved of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now you have to make a choice, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is the last chance to change your mind in your chosen Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Let me be very clear on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: If you continue on the path to the rank of Way Master in the Blue Way Circle, you will not be able to advance beyond Adept, the rank you are now in the Red Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Nor will you be able to advance beyond Adept in the Azure and Dark Way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will however be allowed to advance past the first Master's rank in Brown and Crystal Way Circles, as they complement the power you will use as a Blue Way mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: If you wish to follow the Blue Way to the pinnacle of its majesty, you will need to finish your training to the extent of Tarmeen's abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Then you may come to me and give me your wand together with another Adept's Blue Way Wand and one Apprentice's Blue Way Wand which also may be borrowed from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is to prove you have the respect and trust of your Adept peers, as well as the Apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Remember, once you bring these three wands to me, there will be no turning back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Think long and hard before you make this choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I am sure I will see you soon, YOU.</td>
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
						<td>Rewards: 1 Net glyph, 1 Adept's Blue Way Robe, 35 Faction with Blue Order, 16400 XP.</td>
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
