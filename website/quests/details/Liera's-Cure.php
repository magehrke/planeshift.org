<!doctype html>
<html>
<head>
	<title>Liera's Cure</title>

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
						<td>Liera's Cure</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Nature's-Secrets.php">Learning Nature's Secrets</a> quest, 10 Ruby Crystal, 10 Cinnabar Ore, 10 Zinc Ore, 2 Maulbernaut Talon, 5 Neoten Consumer Blood, 4 Coamti Tongue, 10 Barberry Syrup.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here to learn about alchemy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera has her head down and looks frazzled.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up and blinks a few times focusing her eyes on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: No no, I have no time to teach.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I am trying to find a cure.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She seems to speak to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: What am I missing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Maybe I can help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera narrows her eyes at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: If you are here to learn then you are a beginner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I am working on a very powerful potion that takes quite some skill.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera composes herself and starts from the beginning.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You see, there has been a plague spreading on the third level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Several towns have been quarantined.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Magic along with herbal and alchemy solutions have been attempted but at best have only helped treat symptoms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: There has been no outright cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am willing to learn and help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: No, that will take too long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This plague is serious and can cause permanent death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: We need something fast.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera turns to her shelves and searches frantically, then turns to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I already tried a potion called Universal Panacea and it made patients feel better, but only for awhile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It was no cure, which is strange because this is one of the most powerful potions known and cures almost anything if prepared right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: If you want to help, go talk to other members of the Science Association and see if they have some ideas, meanwhile, I'll keep trying to find the right potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Whom should I speak with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Think back to your dealings with the Science Association.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Start with Durok.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Kra is a respected member and might have some insight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But don't tell Vladovic that I am working on a cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: That old goujah will take all the credit for sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: If you see him, just be vague.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why do you want to find a cure so bad?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She seems lost in thought for a bit, then shakes her head and turns to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I sell potions here at the arena, but that's how I am seen by the Science Association.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I make these potions myself, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I want to be taken seriously as an alchemist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: If I can find this cure, the Association will be sure to notice me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: That and I want to help those poor people on the third level, of course.</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about plagues?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Mmmm…ooh…plague.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra cringes slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Why do you want to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am helping searching for a cure for one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Ahh…maybe you…are practicing alchemy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am just trying to help Liera.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Mmmm……I see…the potion merchant from the Hydlaa arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Wonderful…</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Plagues…mmmm….usually caused by very tiny creatures too small to see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Seek out Kilas.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: He is….quite knowledgeable about….many things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: You can often find him….near here, in East Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Plague…..mmmm….serious.</td>
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
							$npcName = 'Kilas Tungse';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kilas Tungse</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am researching a cure for a plague.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Oh my, that's serious stuff.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas looks around.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Hey, keep it down, we don't want to alarm Aldaaren.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: He's paranoid as it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: To find a cure would take quite some work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: It's not just a matter of whipping up a potion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Kilas speaks up proudly and points upward as he says:</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: It must be scientific!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: One must experiment and be precise.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kilas pauses in thought and speaks softly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I have heard of some sort of outbreak on the third level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Might this be what you are trying to cure?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am helping Liera to find a cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Ah, a fine lass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Well I wish good luck to you both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I'm not an alchemist but I think one can apply what I call scientific methodology.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: What that means is to approach the problem systematically.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: First, we have the disease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Then we have various potions and ingredients to treat it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: But how can we determine effect?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: How can we know if an attempt works or not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: For this we need samples.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Are you with me so far?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds a bit dangerous, no?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Quite, but not if done right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I assume there must be a team of scientists already on the scene.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: To get a sample -safely- one must put it in a dish and surround it with sealed glass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: This can be done by an experienced glass blower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: The glass is filled with a special gel-like substance which acts to keep the disease inert.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Then one can apply a sample of treatment using a very thin needle and observe the effects through a powerful magnifying machine called a microscope.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I helped get one sent to someone in Ojaveda recently, I don't remember who, maybe a student of Vladovic, a well respected herbalist and alchemist there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: I think they developed this microscope over at the university in Amdeneir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kilas: Anyways, check with Vladovic and good luck to you.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What will cure a plague?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic panics, drinks 3 different potions and spreads a foul smelling powder on the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You bring disease to me!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I'm not sick.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic breathes a sigh of relief and collects the powder, brushing back into its container.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ohhh, I see, sorry but one cannot be too careful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I've been hearing rumors about some outbreak on the third level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It's bad enough several Dsars here in Ojaveda are under quarantine, but I don't think the two incidents are related.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you an alchemist?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am trying to learn as well as help a friend.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I see, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Usually we try to kill such things with poisons or venoms.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: However, we must kill the infection without harming the surrounding tissue or the subject.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: So just the right amount must be determined and used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A sample will have to be procured so it can be worked on safely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This is very dangerous so they will not give out such things without a very good reason.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Would a Universal Panacea potion help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic eyes widen for a second with a look of alarm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A what potion?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Where did you hear of such a thing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That's a mystical potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do not speak of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Only the most skilled alchemist would be foolish to even attempt such a thing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It has already been attempted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It must have come from a very talented alchemist familiar with The Great Work because it is a very intricate potion that takes many many iterations to create.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Did it have positive results?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: No, I suppose not or you would not be here, eh?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It treated symptoms but it was no cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I see, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes, it is quite the conundrum, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That is a very powerful potion, yet what we need is to both heal and poison.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A combination of ingredients must be found such that these things do not cancel each other out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Kill the disease without killing the subject but heal the subject without healing the disease, hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It would take quite some experimentation to find the right ingredients in the right amounts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know someone with a microscope?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah yes, fascinating tool, and quite helpful with such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I have a student who has been working with Chired Idelall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In fact, if I know this student, he may have gone down to the third level to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But you should be able to find Chired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: She has a shop in Dsar Kore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And please do not speak of such potions freely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Great Work is very spiritual and is best to be out of the public ear.</td>
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
							$npcName = 'Chired Idelall';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chired Idelall</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I hear you have a microscope?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired narrows her eyes to see you better and her hand grasps tightly on her cane.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Where did you hear such a thing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I heard it from Vladovic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Ah, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Are you an aspiring scientist or alchemist?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am helping to find a cure for a plague.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired speaks in a somewhat feeble voice, clearing her throat frequently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Ohhh, I seeeee.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Is this about the outbreak on the third level?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I have a student who has gone down to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I have equipment here if you ever get some samples we can analyze.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: The microscope can be critical in seeing if a cure works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Who is working on this if I may ask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am trying to help Liera Zireti, but don't tell Vladovic.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired chuckles, then coughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Oh yes, I remember Liera.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: A Ynnwn girl right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I trained her awhile back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Very talented and ambitious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Well, have her procure some samples in a sealed glass dish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: My student there will know what to do on that end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Then if she wishes, we can test some of her treatments and see what effect they have on the disease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: This is dangerous but it can be done safely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Do let me know, we need to help those poor people down there.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You tell Liera what you have learned.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera eyes light up with excitement.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Yes, YES!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Brilliant!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Vladovic is right, the Universal Panacea can act as a booster while the poison kills the plague.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: The old coot is smart, I'll give him that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You didn't tell him of my work, did you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I kept it general.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh and how is dear sweet Chired?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Well, never mind, now…there are several possibilities for a poisonous ingredient.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera begins checking her shelves, speaking to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Poison carkarass parts, check; Velnishi blood, check; Tloke warrior stinger, check; various Consumer blood, check…</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hmm, I don't seem to have any more poison Grendol blood.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera finally turns her attention back to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You really want to help?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I need some poison blood from the Toxic Grendol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You'll have to venture into the sewers to find those vile creatures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Get them yourself, form a group, buy them…I don't care.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I need five poison bloods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh and one more thing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera scribbles a note on a piece of paper then hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Here, please find Tarela and have her deliver this to the quarantine station on the third level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hopefully they will give me those samples as you stated.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: In the mean time, I will work with what I have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hurry…Tarela first, then the blood.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have an urgent message.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes, yes, aren't they all?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela's doesn't even look at you and holds out her hand, speaking in a monotone fashion as if reciting a list she's spoken many times.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Messages five to twenty tria, depending on the location; small packages twenty tria, large packages fifty tria…where to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am trying to help Liera cure a plague!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela blinks a few times and turns her full attention to you, then reads the note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: OH MY!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes, this is serious stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Ok I will…no…do you have winch access?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Never mind, let's do it this way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Go immediately and find Amidison Stronghand, the Vigesimi around here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: She will give you clearance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Winch access is currently restricted to the third level because of this outbreak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: They might not listen to us but Amidison can give the authority.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: And tell her Tarela says it's top priority!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Quickly!!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela hands you back the note.-</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to get an urgent message to the winch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: So?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Do you have winch access, Sir?</td>
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
						<td>Amidison: Then why do you need to see me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is about the outbreak on the third level, we may be close to a cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Aha, yes, I have heard of some outbreak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I got word winch access to that level has been suspended.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Sorry, it's too dangerous.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't need to go there, I just need to send a message. We need samples to test the cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: You want to bring this plague to the Dome?!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Are you mad?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's safe, the scientists know what to do. And Tarela says it's top priority.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Hmm, Tarela sent you here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Well, I know her and trust her judgment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: What is your name, Enkidukai?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am YOU, Vigesimi.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison flips through a bunch of papers she happens to have on her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Very well, here's what I'll do: Take this paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison seals it with the Octarchal Seal before handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Bring it directly to Vigesimi Datal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: And there'd better not be an outbreak here on the Dome or heads will roll, namely yours, YOU!</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: An urgent message!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal looks up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Let's see here…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal reads the letter and his eyes widen with a look of concern and shock.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Huh, I'm not sure about this, but since this came from the Hydlaa Vigesimi herself, very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Let me see this letter to be sent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I need to understand what's going on here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As Datal reads the letter, he makes several distorted facial expressions.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: This had better work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: It seems like an unnecessary risk to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Scientists…they're going to be the end of us all.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal shouts to Venec even though he's close by.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: VENEC!</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: HALT THE SCHEDULE AND PREPARE THE WINCH FOR A SPECIAL DELIVERY!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Venec calmly speaks:</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I'm right here, sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Isn't the third level under restriction?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal replies in a normal tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Yes, but this is important, we must get this message down there and await an important reply.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: We are to take the return package immediately to Miss Zireti at the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: This is top priority.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Lives are at stake!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Datal now directs his words to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: We'll take it from here, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Thank you for your service.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your bloods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And the letter has been delivered?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I gave it to the Winch Vigesimi, himself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I left instructions to deliver those samples here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But I realized, I have no way of testing them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You said Chired will help with that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, she has a microscope there.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Wonderful lady, Chired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: She may be older now but a great trainer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I trust her to help us figure out if any of my concoctions works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But first, there is still much to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Vladovic gave me a good idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: We should not stop at just one potion, even one as powerful as Universal Panacea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: There are others I can make too, which will be a regimen of treatments to be given at different stages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Yes, yes, this will work, I am sure of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But I need a LOT of supplies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I have some, like iron ores and some animal parts, but I need a resupply of others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You want to learn about alchemy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Here's your chance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera gets out a quill and paper and starts writing, but after a few strokes she starts rubbing the quill quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ugh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Out of ink.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I hope you have some handy, I'll just have to tell you what to get, but be warned, it's extensive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ready write it all down?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera takes a deep breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I need 10 ruby crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 10 cinnabar ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 10 zinc ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 2 maulbernaut talons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 5 neoten consumer bloods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 4 coamti tongues.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Some Barberry Syrup, 10 will do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I also need a restock of reagents, particularly combinations of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So on your way back, find Charisa Malod.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: She has a house near the main street in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: She's a retired alchemist but she still supplies me with reagents from time to time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: She'll know what I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: As for the Barberry Syrup you can see Aleena if you need help with that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For the animal parts, you can buy them or you might want to form a hunting party and go in a group.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Got it?</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Liera needs reagents.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Ah?</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Alright, I should still have some supplies.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa goes into her house briefly and comes out with a handful of vials and bottles along with a box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She starts putting various things into the box carefully and neatly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Anything important Liera is working on?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She is working on a cure for a plague.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa gasps.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Oh my.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She starts putting some extra supplies in the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: A plague…that's terrible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I pray Laanx will show mercy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I don't know if you ever heard of the story, but there was once a Lemur priest who strayed from Laanx's teachings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: For punishment Laanx unleashed a terrible plague.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: The Lemurs searched furiously for a cure and it is said that was the origins of what is now alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: There is a good book in the library if you are interested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will look for that, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa smiles and hands you a box of supplies.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Here is the package for Liera.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I wish her all the luck and my prayers are with her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: May Laanx frighten the shadows from your path.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need ten Barberry Syrups for Liera.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Hello, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Learning alchemy I see?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Hmm, perhaps Barberry Syrup is a bit beyond your skills at the moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: We can do one of two things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can just buy some if you like, or I can help you make them quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's make them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Very good, I will need ten Barberry Teas.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Perhaps you have some from your practices?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If not, you should know how to make it from Barberry Root.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your 10 Barberry Teas.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Perfect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena takes the tea, goes over to the table and puts it in a pot, making an extract. She then adds honey and puts it back in the pot and repeats the process until done with ten.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: There we go, ten Barberry Syrups.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: These are good for making cures for poisons.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Whew! That was not easy. I finally have your supplies.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera is working but looks exhausted, then looks up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ah, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I was beginning to think you weren't going to return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Whatever you did worked, the samples have arrived and now I need to make a few potions from the poisons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Let's do this in stages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: First the crystals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Do you have the 10 rubies?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hand over 10 rubies.] There you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Good, now the metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: 10 cinnabar and 10 zinc ores?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You put the ores on the table.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera looks and counts, nodding approvingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Powders made from both crystals and metals are often used in potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And the animal parts?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You plop all the animal parts on the counter.] Coamti Tongues?!?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera nods, grabbing the parts bit by bit and putting them on her shelves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Sounds strange, but yes, tongues are known to have restorative properties.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Coamti Tongue is an ingredient in a Greater Potion of Restoration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You have a ways to go before you can make those.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Finally, let's do the syrup and the reagents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You have those?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera takes items out of the box from Charisa and places them on her shelves, making remarks as she does.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: …Oh good…perfect….oil of vitriols….mhmm…vitriol salts…I really needed more sulphur…way to go Charisa!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Good, now…</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I have already made several potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: These supplies will help me make more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But now I need you to make a few things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Even at minimum skill, you can at least make some minor potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: First thing I need you to do is simply combine an Oil of Vitriol with 2 Niters and give me the mixture.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera grabs some small bottles from the shelf and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Here's a few oils, just use one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Umm, do I need a book for this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera seems very exhausted, barely paying attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hmm?…</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh, right, you are just starting out, aren't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Do you don't have a Basic Potions Tome?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I don't have one of those yet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She shakes her head as if trying to stay alert.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Aha, it would help, wouldn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I'm sorry, I've been at this for too long now, but I'm hoping you can help me with that shortly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera grabs a new looking book from behind her counter and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This is a Basic Potions Tome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It will teach you how to make many of these small potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Now, using this book, just combine one Oil of Vitriol with 2 Niters on the Alchemist's table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Just like with combining metals, cooking, or making herbal ingredients.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go. You want the remaining oil of vitriols back?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: No, keep them, you'll need them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She takes the mixture.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Very good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She moves to the stove and puts the mix into an odd looking container.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This here is called an Alembic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: The mix is boiled and once condensed, it travels from this first container to the other one through a tube.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This is called distillation, which extracts the spirits from the mixture, in this case creating Nitric Spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I will use that for one of the potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: While this is working you can move onto your next task.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera pours some sort of tea and takes a sip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: The potions you will make in combination with this tea should perk me up good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do I do next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I'm going to have you make a very simple potion, called a Minor Potion of Dermorian's Willpower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This doesn't mean it's just for Dermorians.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Many potions from the Basic Potions Tome are named after races, associating a trait of that race; like Ynnwn's toughness, Kran's vigor, or Enkidukai's grace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Each potion affects a trait like intelligence, endurance, willpower, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So for this willpower potion, I will give you a diamond and some quicksilver.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: First, using the mortar and pestle, grind the diamond into a powder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Then on the table, combine -one- powdered diamond and the quicksilver to make a raw potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Finally, take the raw potion and using a melting pot on the stove, amalgamate the solution until it is a proper potion, holding a glass stirrer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera hands you a diamond, a small vial with quicksilver in it, and a glass stirrer, then goes back to work.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, one willpower potion. Anything else?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera takes the potion and sets it aside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Next is going to be a Minor Potion of Lemur's Smartness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For this you'll need just one tin ore and a vitriol salt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: But there are a lot of transformations to make so we'll do this in stages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: First here is a tin ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Make it into a powder, but instead of using the mortar and pestle, use this wooden mallet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera hands you a tin ore and a wooden mallet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Done!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Already?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: A self starter…I like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You even figured out how to get quicksilver and bought all the materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You're going to make a great alchemist, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I really need this…bottoms up!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera drinks some more tea, then takes the first potion you gave her and drinks it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Not bad…not the best quality, but not too bad for a beginner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And now the intelligence potion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera quickly downs the potion and smacks her lips a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Salty.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She then takes out a small bottle of juiceberry juice and drinks it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Whoooooo!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Now we're talkin'!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Juiceberry juice is nice and sweet and takes care of that salty and metallic taste.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How are you feeling?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera perks up almost immediately and looks much more focused and alert.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Once this all wears off, I'm going to need a good long sleep, but for now I can continue my work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera quickly moves between the table and stove, using various ingredients to make mixes and potions.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You notice as she takes the poison Grendol blood you gave her earlier and distills it in the alembic before putting it into the athanor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She takes the resulting residue, adds some things to it, puts it in the melting pot and pours the resulting liquid into a vial.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then after making several other things, she again puts various items in a box, seals it, and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Alright, here we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: In this box is the plague samples and various treatments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I need you to take it to Chired in Dsar Kore and have her analyze it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Take the pterosaur, it's faster.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera reaches into a container of small items and pulls something out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Take this token and use it as payment with the attendant near the temple, it's worth one free pterosaur ride.</td>
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
							$npcName = 'Chired Idelall';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chired Idelall</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the samples from Liera.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Oh yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Thank you, dear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired takes the box and disappears up the stairs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- After some time, she yells out:</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Success!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Soon she returns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I tried several of Liera's treatments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: One repelled the bacteria but did not kill it, one killed it but also killed tissue samples I had.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Finally, it was the one labeled “Grendol”.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I suppose Liera created some sort of treatment based on Grendol Poison Blood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Whatever it was it worked perfectly, containing some very interesting antibodies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Here is the box back, it contains notes of my findings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I suppose you'll be taking the pterosaur back?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Here, have a travel token.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired hands you the box and a token, then hesitates a bit as if she has something to say.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there something else?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chired looks a little sad.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: While you were away, I remembered something about Liera.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Oh, it's not for me to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: But I wonder if you know the reason Liera is so determined to find a cure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She said she wanted to be noticed by the Science Association.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Hmm, I suspect there might be a deeper reason.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Anyway, it's not important, off you go.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Chired found the Grendol blood worked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Aha, see?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Good thing I had you get some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Good, good, while you were away I finished all of the potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I have also written a letter of instructions for the research team.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Word has really spread that I am doing this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Everyone has been encouraging me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So go back to the winch and deliver this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And thank you again, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera takes out unnecessary items from the box, leaving several potions, the samples, and puts in the cure and several other potions, then puts the instructions in and reseals it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I just know this is going to work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera sighs deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It…it -has- to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera sniffs and hands you the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm sure it will be alright.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Any anytime you want to work on alchemy, you are welcome to come back here and use my station.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: There is also Chired's shop, but the best location is the basement of the magic shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Keep getting training from me and after about 15 lessons total, I'll teach you some more things and give you another book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera hands you a pouch of tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This is for your tremendous efforts, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Now get that box to the winch!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's the real reason you want to find the cure?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera eyes well up and she begins to sob.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Th-the truth is…I…well…I have f-f-family on the third level!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera looks tired again as she cries a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I don't even know if they are alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: They live in one of the quarantined towns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I am very worried about them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me more about these things you sell?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Sure, most of the things I think we went through.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Common Salt, Niter, Oil of Vitriol, and Spirit are all reagents which are required for various potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Tools include the three types of stirrers: wooden, iron, and glass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Different ones are needed to stir different types of mixtures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For instance, you wouldn't want to use an iron stirrer with molten metals…the stirrer would melt as well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Finally, there is Sulphur Powder, which is another reagent, and Tartar and Stibine which are used in that branch of alchemy Vladovic wants to keep so secret.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: They are used in making that Universal Panacea potion I talked about…again, do keep that to yourself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera rolls her eyes a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You can buy such ingredients and tools from me, Vladovic, or Levrus.</td>
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
							$npcName = 'Datal Allavium';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Datal Allavium</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the cure!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Ah yes, very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: I'll take that and we'll get it to the third level at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Well done, citizen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: The Octarchy will take note of your efforts, and this alchemist, Liera.</td>
					</tr>
					<tr class="quest_npc">
						<td>Datal: Fine work, now be gone.</td>
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
						<td>Rewards: 1 Basic Potions Tome, 1 Glass Stirrer, 1 Wooden Mallet, 1 Faction with Science Association, 19200 XP.</td>
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
