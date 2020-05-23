<!doctype html>
<html>
<head>
	<title>Azure Way Master Training</title>

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
						<td>Azure Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Practical-Azure-Way-Adept.php">The Practical Azure Way Adept</a> quest, Rank 100 Azure Way, 2 Adept's Azure Way Wand, 1 Apprentice's Azure Way Robe, 1 Fire glyph, 1 Arrow glyph, 1 Armor glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyphs back.</td>
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
						<td>YOU: Here are the items as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Today, you become a Master rank in the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita hands you back one wand and the robe, but keeps yours and puts it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Return those to their owners, followers of your same path.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita closes her eyes for only a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: But there are other paths, some of them support Azure Way, others…</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will soon require the aid of practitioners and students from the supporting Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Speak to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: These bonds will become important in the coming tests.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to know more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Not now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: First, I need something from you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She stares, and pauses for a long heartbeat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Go to Brintec Dev-Onni.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Solve his problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And…</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: be careful.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Menita sent me here to help you out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Menita?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec frowns staring at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: An Azure Way member?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Tell me what I did the third day of this month.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Because I just forgot and no one can tell me where I was.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please, be patient, when did you recognize you had lost the memory?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I've not lost my memory.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: One of your fellows took it out!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec stares at you angrily for some moments, then he relax a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I don't know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I had a strange dream, I was running through Ojaveda and where ever I run i always arrive in front of closed doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Then I stop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I felt a growing fear and I flee.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: But I do not know what this fear is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I think it is something obvious, but I don't remember.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: plague</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Uh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Oh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec opens his eyes wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Yes, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: That's it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He opens his mouth and sighs with relief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Now I remember, damn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: How stupid I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Sorry, Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: And please, say to all your fellows that I'm terribly sorry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec puts a hand on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: No more words, now that I remember I'd like to forget again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Damn, what a relief, now that I know what I feared in the dream I can relax.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I was so…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I feel very better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Thanks again.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm curios now, please tell me what you remember.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Ehe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec face becomes reddish.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I made something shameful…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: or, well I was in love…</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: oh come on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I was sad because a woman said no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: And I drank too much, so the day after I avoided work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: That's it, nothing else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Please do not ask more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I think you know her, and I prefer to maintain privacy.</td>
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
						<td>YOU: I solved the problem, Brintec is fine now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now, you have to leave me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Quickly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where you want me to go?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Free your thoughts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And in the meantime try to do something else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Bring me two glyph that Levrus sells, each from one of the Azure Way's supporting Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe these are the two glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: In combing spells, you will at times need glyphs from other Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: On their own, each Way is limited in power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Only in combination will you find the most powerful spells</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita hands back the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Although Azure Way is the most perfect Way supporting even ways that do not support it, no Way of magic is complete without the other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita eyes move to you once more.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is known to include supporting Ways, neutral, and opposing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Dark and Blue Way are neutral to Azure, neither greatly aiding nor impeding, though Azure is used for tempering some of their combinations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: For every coin, there exists two sides.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: For Azure, this is opposing side is the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: For your last task today, I will ask you to give me the Brown Way Glyph that Levrus sells.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would it be this one?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita nods and hands you the glyph back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Azure and Brown Way Circles are not enemies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: However, the magic contained within them collides.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Trying to combine opposing Ways can be dangerous, or even deadly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You may train the supporting ways within a realm or so of Azure Way, but I advise you to limit any Brown Way training to a minimum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: If you train too high in the Brown Way, you risk being removed from the Azure Way Circle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita eyes drift slowly to gaze off towards Ojaveda.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: There is a lesson to be learned on a high hill towards Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A powerful man once thought he could challenge the gods by combining all magic Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: That hill was once much taller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: We will speak of it later when I decide you are ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Now it is time to complete this step.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Mistress Menita, I am ready to continue my path.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You will show me this new wand every time you are ready for your next test session.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I also want you to have this as a personal gift from me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita flicks you a glyph, barely giving you time to catch it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Hand me your Master's wand when you think you are ready, and if I agree with that assumption I will accept it.</td>
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
						<td>Rewards: 1 Gas glyph, 1 Master's Azure Way Staff, 25 Faction with Azure Order, 13600 XP.</td>
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
