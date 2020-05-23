<!doctype html>
<html>
<head>
	<title>Red Way Master Training</title>

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
						<td>Red Way Master Training</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Becoming-a-Red-Way-Adept.php">Becoming a Red Way Adept</a> quest, Rank 100 Red Way, 2 Adept's Red Way Wands, 1 Apprentice's Red Way Wand, 1 Mind glyph, 1 Fear glyph, 1 Cold glyph.</td>
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
						<td>YOU: The three wands as requested for my proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: So you have decided to continue with your training and have gathered the items, very well, from this point forward you have begun down the point to becoming a Master of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I thought you might.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have the look of a Red Way Master to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You may return these staffs to their owners.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you back two wands, but keeps yours and puts it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have proven your knowledge and dedication to the Red Way Circle and to your previous trainers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You also know of and about the supporting and opposing Ways to the Red Way, this is very important knowledge and you should always keep it in mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This knowledge is important for your masters training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: My suggestion is to begin speaking to practitioners and students from the supporting Ways and making allies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: These bonds will become important in the coming tests.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What comes first?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The first is a test of your ability, I want you to present me with two glyphs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I'm not going to tell you what they are, but I will give you hints and maybe what I feel about them and then you must work out which I mean.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They are from the Magic Ways which support ours, to give you a little hint.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The first glyph will test your intelligence and the other will make you scream with confusion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Good luck.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Mind</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, quite right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That is the glyph that I meant will test your intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But I know you don't have that glyph with you, now go and find one before I will continue with you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the Mind glyph now.</td>
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
						<td>Ferryd: Good, now when you have the other glyph you can hand both to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fear</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, quite right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That is the glyph that will make you scream in confusion, I know you don't have one so come back when you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But what is the other glyph I want?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the glyphs as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well done I'm glad you could work out which glyphs I wanted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: In combining spells, you might need glyphs from the Dark and Azure Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: On their own, every Way is limited in power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will find that the truly powerful spells are a product of your own Way, improved by those that support it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands back the glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Although Red Way is the most powerful Way, drawing its power from Chaos, no Way of magic is complete without the other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd looks you in the eyes to make sure you are listening.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This includes supporting Ways, neutral, and opposing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Crystal and Brown Way are neutral, neither greatly aiding or impeding the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have just shown me you know of the supporting Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Finally, there is the single Way that mirrors the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is the Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: For your last task today I will ask you to bring me the Blue Way Glyph that Levrus sells.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And that will be Cold, right</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods and hands it back quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is very important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Red and Blue Way Circles are not enemies…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well except for Barrin having no humor.</td>
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
						<td>Ferryd: Trying to combine opposing Ways is possible -just- but will always be very very dangerous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You may train the supporting ways within a realm or so of Red Way, but if you train too high in the Blue Way, you risk being removed from the Red Way Circle for everyone's safety.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Mages have burned all magical abilities from themselves by trying to master all Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You should visit the large hole in the top of a hill out towards Ojaveda if you wish to know what happens when you lose control when combining too many Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: That hill was once much taller.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But good and honest magic can be powerful too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I want you to see an example.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The elevator of the winch is located between two big towers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: These two towers are on the stable ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Go and check, then return here and tell me what their use is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: stabilize winch using magical energy</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Did you see how big the elevator is?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The towers stabilize all the winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They are powerful, and there are so many uses of magic…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will learn much if you stay on the right way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Are you ready to officially become a Master of the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Always have been.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I guess I really didn't need to ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is your brand new Master's Red Way Wand, and with it you may call yourself by the rank of Master of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will show it to me every time you are ready for your next test session while you continue training in the usual manner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I also want you to have this as a personal gift from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Even though it is a Brown Way glyph, neutral to Red Way, it can be used and combined with a Red Way glyph for great protection.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I will leave it up to you to discover the spell for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Also, you may now show your Master's Wand to Willam Chorind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Becoming a Master in the Circle comes with certain…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Rewards.</td>
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
						<td>Rewards: 1 Earth glyph, 1 Master's Red Way Staff, 40 Faction with Red Order.</td>
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
