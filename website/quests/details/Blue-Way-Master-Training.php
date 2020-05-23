<!doctype html>
<html>
<head>
	<title>Blue Way Master Training</title>

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
						<td>Blue Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Practical-Blue-Way-Adept.php">The Practical Blue Way Adept</a> quest, Rank 100 Blue Way, 2 Adept's Blue Way Wand, 1 Apprentice's Blue Way Wand, 1 Arrow glyph, 1 Armor glyph, 1 Fire glyph.</td>
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
						<td>YOU: Please except these three Wands as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Welcome to masters training of the Blue Way, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: These next tests are not so much about training they are about making a name for your self as a Blue Way Master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: In gaining aid and respect from your pears, you have begun spreading your name amongst your fellow students.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hands you back two wands, but keeps yours and puts it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You may return those to their owners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You have proven your knowledge and dedication to the Blue Way Circle to your previous trainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You also know of the supporting and opposing Ways to the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This knowledge is important for your masters training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: My suggestion is to begin speaking to practitioners and students from the supporting Ways and making allies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: These bonds will become important in the coming tests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Today, you will start by bringing me two glyphs that Levrus sells, each from one of the Blue Way's supporting Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe that will be Arrow and Armor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Blue Way has many glyphs, though quite a few will do nothing on their own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It is possible they might need glyphs from the Crystal or Brown Ways as well as from the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: On their own, each Way is limited in power.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin hands back the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: No Way of magic is complete without the other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin looks you in the eyes to make sure you are listening.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This includes supporting Ways, neutral, and opposing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Azure and Dark Way are neutral, neither greatly aiding nor impeding the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Finally, there is the single Way that mirrors the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: For your last task today I will ask of you the Red Way Glyph that Levrus sells.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That is easy, here is Fire Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Please have it back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin quickly hands it back and rubs his hands on his vest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is very important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Blue and Red Way Circles are not enemies, even though Ferryd is a childish fool.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin shakes his head and starts again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Sorry, I meant to say Blue and Red Way Circles are not enemies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: However, the magics they practice collide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Trying to combine opposing Ways can be very dangerous, or even deadly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You may train the supporting ways within a realm or so of Blue Way, but I advise you to limit any Red Way training and Ferryd's interaction to a minimum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: If you train to high in the Red Way, you risk canceling out your training in the Blue Way all together.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin breathes deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Visit the crater in the hill out towards Ojaveda if you wish to know the effects of combining too many magic Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That hill was once much taller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Enough of that, I do not wish to speak of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Are you ready now to officially become a Master of the Blue Way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready and willing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well then, no time to be wasting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is your new Master's Wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: With it, you are no longer an Adept.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will show it to me every time you are ready for your next test session while you continue training in the usual manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I also want you to have this as a personal gift from me.</td>
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
						<td>Rewards: 1 Purify glyph, 1 Master's Blue Way Staff, 40 Faction with Blue Order, 17800 XP.</td>
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
