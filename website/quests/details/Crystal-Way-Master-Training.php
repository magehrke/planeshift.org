<!doctype html>
<html>
<head>
	<title>Crystal Way Master Training</title>

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
						<td>Crystal Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Crystal-Way-Adept.php">Becoming a Crystal Way Adept</a> quest, Rank 100 Crystal Way, 2 Adept's Crystal Way Wands, 1 Apprentice's Crystal Way Wand, 1 Air glyph, 1 Cold glyph, 1 Death glyph.</td>
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
						<td>YOU: Please except my proof of being a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Welcome to masters training of the Crystal Way, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: These next tests are not so much about training they are about making a name for your self as a Crystal Way Master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: In gaining aid and respect from your peers, you have begun spreading your name amongst your fellow students.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell hands you back two wands, but keeps yours and puts it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You may return those to their owners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You have proven your knowledge and dedication to the Crystal Way Circle to your previous trainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You also know of the supporting and opposing Ways to the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This knowledge is important for your masters training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: My suggestion is to begin speaking to practitioners and students from the supporting Ways and making allies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: These bonds will become important in the coming tests.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Today, you will start by bringing me two glyph that Levrus sells, each from one of the Crystal Way's supporting Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One Air glyph and one Cold glyph as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: In combing spells, you will often need glyphs from the Blue and Azure Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: On their own, each Way is limited in power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will find that the truly powerful spells are a product of your own Way, and those that support it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell hands back the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Although Crystal Way is the the most perfect Way, drawing its power directly from the Crystal Sun, no Way of magic is complete without the other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell looks you in the eyes to make sure you are listening.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This includes supporting Ways, neutral, and opposing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Red and Brown Way are neutral, neither greatly aiding or impeding the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Finally, there is the single Way that mirrors the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is the Dark Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell takes a long breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: But, before speaking about this a want you to check something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Tell me about grendols, what are they made of?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: corpses</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: That is right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Now you know what the Dark Way is capable of, maybe you have seen the products of their magic with your own eyes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell nods, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: For your last task today I will ask of you the Dark Way Glyph that Levrus sells.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the Death glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Correct.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Please have it back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell quickly hands it back and rubs his hands on his vest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Sell it as soon as you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is very important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Crystal and Dark Way Circles are not enemies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: However, the magics they practice colide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Trying to combine opposing Ways can be dangerous, or even deadly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You may train the supporting ways within a realm or so of Crystal Way, but I advise you to limit any Dark Way training to a minimum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: If you train to high in the Dark Way, you risk canceling out your training in the Crystal Way all together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: <some problem></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: In extreme cases …</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Govell breathes deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Visit the crater in the hill out towards Ojaveda if you wish to know the effects of combining too many magic Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: That hill was once much taller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Enough of that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I do not wish to speak of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Are you ready now to officially become a Master of the Crystal Way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, indeed I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Well then, no time to be wasting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: This is your brand new Master's Wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: You will show it to me every time you are ready for your next test session while you continue training in the usual manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: I also want you to have this as a personal gift from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Even though it is a dark way glyph, it is sometimes used in spells to create an opposite effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell: Unlike other Dark Way glyphs, I have found combining it with Crystal Way to have very little danger.</td>
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
						<td>Rewards: 1 Negate glyph, 1 Master's Crystal Way Staff, 40 Faction with Crystal Order, 17800 XP.</td>
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
