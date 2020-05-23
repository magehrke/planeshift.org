<!doctype html>
<html>
<head>
	<title>Unlawful Undertakings for Ukabnu</title>

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
						<td>Unlawful Undertakings for Ukabnu</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Helping-Hand-for-Kisatol.php">A Helping Hand for Kisatol</a> quest.</td>
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
							$npcName = 'Ukabnu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ukabnu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Anything I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Back for more, eh, my clacker friend?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Is there something terribly appealing about giving assistance to unwashed foul-mouthed exiles?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu makes a wry smile and shakes her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: This time we will see more about how useful you are really willing to be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: There is a certain family in Hydlaa, the gods rot their souls-</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu turns her head and spits at the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: -some people in need of a few more of Ukabnu's 'favors'.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu smiles crookedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Willing to do a few 'honest folk' some damage, little clacker?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Now listen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Here's what you need to do, my roguish rat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Deliver this interesting sample to Willam Chorind, Hydlaa's spotless city treasurer…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu flicks a crumpled page of figures to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: and tell this Sir Chorind that I have his missing book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: If the greedy foot-licker doesn't want some errant and incriminating numbers to end up on the Vigesimi's desk, he'll just have to run a little errand for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Tell him I want Saral crippled.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu smirks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: And bring me his fancy purse.</td>
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
							$npcName = 'Willam Chorind';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Willam Chorind</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives William the page.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Hmm, what is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam blinks and examines the page.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: This- this is from my missing accounts book!</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Where did you get this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: From Ukabnu.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Ukabnu?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: The bandit?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam's face pales and he nearly drops the page of figures. He whispers 'She'll ruin me…'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: W-what does she want?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She wants Saral crippled.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: C-cripple Saral Yangnk??</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam stares at you in disbelief and then looks away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I…</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I can't do that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I can't…</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: I can't let that book be seen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam looks back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: How can you people be so cruel?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Why is she doing this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: By the gods, what will I do…?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Madness…!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam looks down at his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Get away from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: If you are done, go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She also wants your fancy purse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Willam's eyes widen again and his pale face gradually reddens in a fury.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tears his velvet-and-gold purse free and flings it at your feet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Take it then!</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Leave me be, you twice-cursed blackguard!</td>
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
							$npcName = 'Ukabnu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ukabnu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Ukabnu the purse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Ahaa!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu grins and raises the purse in the air and calls out to her cutthroats.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Look what the rat's brought us, my beasts!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The nearby bandits watch as Ukabnu lifts her blade to the purse and slashes at the bottom.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The blade parts the velvet with a snapping sound and a flash of brown light. Ukabnu laughs as several glyphs and coins fall free of the purse and onto the ground at her feet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Not bad at all, my little rat, not bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: I am sure our dear friend Willam is in a churlish fit at this moment, wondering what he will do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu pokes the glyphs with the armored toe of her boot and then stoops to claim the loot.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Now, if you will run but one more little errand for me, my helpful StoneBreaker rat, I may reward you with one of these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, what must I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: I thought you might like the sound of that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu smiles crookedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Now, I want you to go run over hill and dale and find little Miss Nyshyn Klannarr.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Tell her I sent you and remind her that it's time for her delivery if for some reason she seems to have forgotten.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Do be nice to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: She seems to be afraid of me, though I'm not really sure why…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-One of Ukabnu's gang laughs nastily. Ukabnu smiles and cheerily yells 'Stuff it, trepor-kisser!' to him. She looks back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Get a move on, my little rat!</td>
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
							$npcName = 'Nyshyn Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nyshyn Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ukabnu sent me to remind you of the delivery.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Umm</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn looks you over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You are working for her, are you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: her, ah…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: delivery is almost ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: If you will visit my sister near the Eagle Bronze Door ruins, she has part of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Just tell her to give you the green box.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I will try and and work on the rest of what Ukabnu wants and see if I can finish before you return.</td>
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
							$npcName = 'Canyt Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Canyt Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your sister wants the green box</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Er, yes, just a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt leaps nimbly over a fallen stone and goes behind a ruined wall. She returns in a few moments with a small green box in her paw and gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: There you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Safe travels to you, Madam.</td>
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
							$npcName = 'Nyshyn Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nyshyn Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Nyshyn the box.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah, good, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn unlocks the box with a small key and takes out an ornate blue-gemmed silver necklace. She chuckles at it and runs it through her fingers before passing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: That'll fetch a few coins, won't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: There's the shiny part, and here is the dull part.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn gives you an antique longsword that is heavily corroded.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: And as for my part…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: well, I am stuck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I am supposed to have an answer to her riddle but I haven't been able to solve it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn murmurs 'The one who makes it, will tell it not…' She looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I won't tell her if you will help me, and then you can go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I have already been trying for hours and it's not coming to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: 'The one who makes it, will tell it not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: The one who takes it, will know it not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Whoever knows it, wants it not.'</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: She said it was something that she could hold in the palm of her hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn crosses her arms over her chest and frowns slightly in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: fake coins</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Yes, yes, that fits!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Very good, Madam, most pleasing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Then we are set, and you may return those three things to your mistress Ukabnu- the answer, the necklace, and the sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: May Talad light your path.</td>
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
							$npcName = 'Ukabnu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ukabnu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Nyshyn says the answer to the riddle is fake coins.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Ha, yes, that's the answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: That milk-drinker looked very puzzled last I saw her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: And the rest of the goods?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the goods.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu grins and looks at the necklace for a moment before shouting.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: 'LAURE!' Laure Eves turns her head just in time to snatch the necklace from the air as Ukabnu throws it to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Ukabnu sneers and calls 'Pretties for you, M'Lady!'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu turns back to you with a chuckle and looks the sword over with a glint in her eye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Now, my precious rat, it is time for you head homeward once again, this time with a trifle for your time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu holds up her gauntleted hand, four glyphs dangling from it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Which one shall it be?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Take one and take your leave of us.</td>
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
						<td>Rewards: 1 Summon glyph, 1 Weapon glyph[OR], 1 Entropy glyph[OR], 1 Sleep glyph[OR], 20 Faction with Thieves Organization, 3391 Tria, 12200 XP.</td>
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
