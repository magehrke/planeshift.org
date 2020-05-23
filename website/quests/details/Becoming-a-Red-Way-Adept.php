<!doctype html>
<html>
<head>
	<title>Becoming a Red Way Adept</title>

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
						<td>Becoming a Red Way Adept</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Knowledge-of-the-Red-Way-Adept.php">Knowledge of the Red Way Adept</a> quest, Rank 90 Red Way, 1 Adept's Red Way Bracers, 1 Apprentice's Red Way Robe.</td>
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
						<td>YOU: I have returned, Bracers in hand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are nearing the end of this stage of your testing, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I must admit that you have not been to a shabby student.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But you have proven your knowledge, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have even kept me amused.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Training is not all about advancing yourself, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Sometimes you must offer your aid to others.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands back your Bracers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Zhaomal of the Shadowcasters at the Eagle Bronze Doors has sent a message about some rare Red Way glyph or another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: As I think you are ready to identify glyphs, I need you to go there and let him know you are there to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Don't worry, it is not a prank this time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Honest.</td>
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
						<td>YOU: Ferryd Shillor sent me.</td>
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
						<td>-Zhaomal looks at you with some curiosity but mostly doubt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You must be a student of the Red Way…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Ferryd sent you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I wanted his aid because this is a matter for a Red Way Archmaster, not any of his students.</td>
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
						<td>Zhaomal: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: If Ferryd thinks you are worthy, then who am I to argue.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal brings out two identical glyphs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I have come across these glyphs in my travels, where and how is…</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: not important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal hands you one of the two.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: First prove to me that you can at least master basic skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: So, Sir of the Red Way, what spell can you cast with just that glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: lava pit</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal nods, though looks unimpressed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Of course it is, now the part I am having difficulty with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I am aware there is a spell that allows you, as the caster, to summon a giant fist made of hot, bubbling lava that strikes the opponent ruthlessly…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Or at least that was what Ferryd told me once long ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I hope it was not another of his pranks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I am not in the mood to feel the backlash of failed combinations.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: That is what you are for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You're to work out the glyphs used in combination with Lava to form this spell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hand Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal attempts to combind the glyphs, and is successful. He then turns to you with slight surprise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Not bad at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I would have thought it would be a much higher level glyph than 'Hand'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I can see why Ferryd send you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Sometimes it takes a more simple mind to see the simple solutions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: What is a Fist but a closed Hand I should have seen it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal looks at his the Lava glyph he still holds.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
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
						<td>Zhaomal: You may keep the glyph I gave you earlier for helping me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Perhaps you will consider joining the Shadowcasters in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You do not need to join now, nor do I think you have enough talent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: For that, you must achieve Adept status in all Way Circles, but Master in none.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I only ask you consider it if that time comes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: One more thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Do say thank you to Ferryd for sending such a talented Enkidukai.</td>
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
						<td>YOU: Zhaomal sends his thanks.</td>
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
						<td>Ferryd: Almost tripped on his own feet, did he Well, that is a lesson to you as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Never forget the simple things, for it is the pebble that will trip you, not the hill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Did you get anything from him for your troubles?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, a Lava Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd smiles pleased.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Quite the reward indeed, if you ever find out where he comes across these items, be a good Enkidukai and let me know.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferry whinks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, seeing as you have that glyph, like before I want to know how you interpret how the energies make you feel when you use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It's always important to understand the magics you use and not to just use them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: heat</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, heat, powerful heat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Rock melting heat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But be careful thought as trying to conjurer too much power though the red way is only for the most experienced, not necessarily the most powerful Red Way Mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Even I know my the limits of my experience.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: liquid</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, very good, liquid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The energy you put into stone or metal to melt it allows it to turn to liquid to be more easily manipulated and toyed with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The same can be said about the magic used with this glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd places a finger to his lips and whispers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Always remember to only act within your self or you will find yourself turning to liquid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And I don't have a Enkidukai shaped mold to put you back together.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: lava</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I would imagine that you could interpret a Lava glyph as Lava, that hardly takes any skill, concentrate and tell me something else.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: volcano</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: OF COURSE!!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Lava with out a Volcano, how boring.</td>
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
						<td>Ferryd: But you are not likely to see one in Ylaikum any time soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But again its another interpretation of the unrelenting devastation that a Red Way mage can unleash and be made to release if they lose control.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: slow</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Yes, that is something that many people don't feel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Creating that much power can slow you down, drain you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The power can also be used to slow down someone or something else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I'm impressed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That is everything I can get from the glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You did very well, I'm pleased you got that glyph you are clearly ready for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And so You have come to the crest of this 'hill' in your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Please give me your final apprentice's article now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My robe, as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is now beneath you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then tosses the robe to the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Literally.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are no longer in any way an apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: One question remains before you may be given your final Adept's article.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The answer to this question is very important, as it will give you insight into your next decision.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: What Way directly opposes the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: blue</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Correct, of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have proven your knowledge of the Red Way to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I am honored to present you with your new robe, Adept of the Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you a neatly folded robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Zhaomal mentioned joining the Shadowcasters, did he not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Of course he did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You now have a choice before you, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is the last chance to change your mind in your chosen Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Let me be very clear on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you continue on the path to the rank of Way Master in the Red Way Circle, you will not be able to advance beyond Adept, the level you are now in the Blue Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Nor will you be able to advance beyond Adept in the Brown and Crystal Way Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will be allowed to advance past the first Master level in Azure and Dark Way Circles, as they complement the power you will use as a Red Way mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Do you understand this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I understand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you wish to continue on to become a Red Way Master, you will continue your training with me until I have nothing left to teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But to continue you will have to show me your Adept's wand together with another Adept's Red Way Wand and one Apprentice's Red Way Wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This is to prove you have not only the respect and trust of your Adept peers, but that of the Apprentices below you as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Remember, once you bring these three wands to me, there will be no turning back from the Red Way Master path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Think long and hard before you make this choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I am sure I will see you soon, YOU.</td>
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
						<td>Rewards: 1 Lava glyph, 1 Adept's Red Way Robe, 35 Faction with Red Order, 16400 XP.</td>
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
