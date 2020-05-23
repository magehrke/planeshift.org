<!doctype html>
<html>
<head>
	<title>The Practical Azure Way Adept</title>

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
						<td>The Practical Azure Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Azure-Way-Adept.php">Knowledge of the Azure Way Adept</a> quest, Rank 90 Azure Way, 1 Adept's Azure Way Wand, 1 Apprentice's Azure Way Robe.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept my Way Wand as proof of being a student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I must commend you on your skills and dedication, Jilare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It is nearly time for you to begin your Master level testing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Time does fly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: It seems like such a short time ago that you first came to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir shakes head then hands back the wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I need you to go to the Eagle Bronze Doors for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Zhaomal of the Shadowcasters has requested advice on an Azure Way matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Let him know you are there to help.</td>
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
						<td>YOU: What can I help you with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You are not Axomir.</td>
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
						<td>Zhaomal: He sends an Adept of the Azure Way in his stead, I assume.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I would be insulted if I was in great need of aid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: This is a minor matter, though, so I shall let it pass.</td>
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
						<td>Zhaomal: Let's see what you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: A young Shadowcaster residing in Sarpendil is violently ill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: We tried potions, Life Infusion even the top realm Healing Flash all with no avail.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have realized that she is fighting the potions and spells and we might need to put her in a deep slumber before attempting it again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have the Sleep glyph but it does not work on anyone but the caster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I am sure a combination is what is needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So Sir Azure Way Adept, what glyph do you suggest I combine with Sleep?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: humanoid</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal nods while thinking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: That should work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal removes a Humanoid Glyph from his glyph sack, then pulls out another type of glyph.-</td>
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
						<td>Zhaomal: You know what, you may have this glyph for your advice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Perhaps you will consider joining the Shadowcasters in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You need not join now, nor do I think you have enough talent.</td>
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
						<td>Zhaomal: Do say thank you to Axomir for sending such a talented Enkidukai.</td>
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
							$npcName = 'Axomir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Axomir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Zhaomal sends thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: He thanks me, does he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I wonder if he really needed help at all, or was just checking up on our newest Azure Circle members.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: The Shadowcasters are always looking for the most talented practitioners in all six Ways to join them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: That is your choice to make.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: The robe you carry belongs to an apprentice, which you are clearly no longer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Please give it to me now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my Robe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Yes, you will no longer use this robe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I must ask you one last question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: This one is very important, as it will affect what you choose to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Tell me what Way directly opposes the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: brown</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Correct again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: You have proven your knowledge of the Azure Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I am honored to present you with your new robe, Adept of the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Axomir hands you a neatly folded robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: I am sure Zhaomal tried to convince you to consider joining the Shadowcasters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Your last chance to do so will soon be upon you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: Take your new robe and show it to Archmaster Menita.</td>
					</tr>
					<tr class="quest_npc">
						<td>Axomir: She will tell you of the choices you have to make.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is my Robe, as requested by Axomir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita speaks without looking at you, her tone flat and without emotion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Axomir has approved of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A choice is now before you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is the last test before you will no longer be allowed to change your chosen Way of study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: If you continue on the path to rank of Way Master in the Azure Way Circle, you will not be able to advance beyond Adept, the rank you are now in the Brown Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will also not be able to advance beyond Adept in the Blue and Dark Way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will however be allowed to advance past the first Master's rank in Crystal and Red Way Circles, as they complement the power you will use as an Azure Way mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, as clear as Azure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: If your wishes bring you to follow the Azure Way to full mastery, you will need to finish your training to the extent of Axomir's abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Then you may come to me and give me your wand together with another Adept's Azure Way Wand and one Apprentice's Azure Way Robe, which also may be borrowed from a fellow student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is to prove you have gained the respect and trust of your Adept peers, as well as the Apprentices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Remember, once you bring these three items to me, there will be no turning back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Think long and hard before you make this choice, Jilare.</td>
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
						<td>Rewards: 1 Bond glyph, 1 Adept's Azure Way Robe, 20 Faction with Azure Order, 12200 XP.</td>
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
