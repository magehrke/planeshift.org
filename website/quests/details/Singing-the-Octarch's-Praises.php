<!doctype html>
<html>
<head>
	<title>Singing the Octarch's Praises</title>

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
						<td>Singing the Octarch's Praises</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Inviting-Talent.php">Inviting Talent</a> quest.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, I thought I would stop by and see what is going on.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Rumour spreads that a certain citizen of Hydlaa wishes to offer an ode in honour of the Octarch of the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I am able, of course, but want more information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Please go to Loren Chama and ask him about the poem, or perhaps just mentioning my name would be enough to get him thinking, then return to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Will you do so?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can do that. Might learn something interesting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Many thanks, good Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I await your return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus starts humming quietly while gently plucking at kra's harp.-</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tyrus Beaut sent me to learn of the poem you wish to present to the Octarch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: That name is indeed familiar, and I would not object to commissioning some work from this Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: While I do adore the statue you procured for me for the Octarch's birthday, I feel I need to do a bit more to make the gift stand out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I'm sure you understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Well, I recently heard that not only has this Tyrus Beaut character recently acquired a new harp to accompany kra's little ditties, but that word of this Kran's masterful verse has already reached the Octarch's ears.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I wonder…</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: what if it were I who got this Beaut fellow to write a tribute honouring the Octarch?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren's eyes glaze over as he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I could read it while giving the Octarch his statue!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: It would be rather stirring, and I'm sure that it would cause my name to be remembered.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren pauses slightly as his eyes focus back on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Please, go inform Tyrus Beaut that I wish to commission a tribute to the Octarch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I'll make sure you're compensated, as usual.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Loren wishes to commission you to do the tribute poem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I would be very pleased to do so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: To be fair, my fee is usually five octa for such works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Tell Loren this, and see if he will agree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: While almost nothing would please me more than having one of my works performed in front of the Octarch, I must eat.</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tyrus requires five octa for the commission of the poem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Oh, dear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: That's quite high.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Five octa is a bit much for me to part with right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: You see, I am saving my coin to buy the most lovely pterosaur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: It's really the next step to ensure my welcome amongst the well-to-do of Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Shall I send you to bargain with Tyrus Beaut on my behalf?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 3</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I cannot haggle!.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Yes, it would be embarrassing for one of my station to allow a lowly street performer to dictate terms to me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: and such outrageous terms at that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I will not be bullied into such a ridiculous arrangement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Well, then, tell that ambitious Kran I offer fifty tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I'll not go higher.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Here they are.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Tyrus the purse of tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus counts out the coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: That is a fifth of what I ask for!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Kran's eyes start to flash like precious stones in the light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Never let it be said that I refuse to write.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: The man shall have his poem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Stay near, I will finish quickly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus begins making furious notes on a piece of parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Occasionally, the quill bites so hard into the sheet that it makes a small hole.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus finishes with an irritated flourish.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: There, my tale is told.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus gives a tight smile… whether the tightness is from anger or a result of the Kran's stony face, you cannot tell.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: The nobles think that all of Yliakum owes them dues.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Here is his poem.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus Beaut thrusts the sheet of parchment into your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: May the words choke him.</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your poem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I knew you would convince that Beaut character to see sense!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I'm anxious to see what this Kran has come up with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren opens the parchment and starts reading; his face grows visibly paler as the seconds go by.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren finishes reading and he looks up at you, his face suddenly purple.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: This is outrageous!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Just…</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: just listen to this nonsense!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren Chama begins reading.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -Salikarios, champion of Hydlaa!-</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -Keeper of parties, eater of dainty treats!-</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -Give him a pretty gift, witness him beaming!-</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -Eagle eyes, feastmates, let us see whom he greets.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -Everyone present kens, Octarch included…-</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: -That ambition, not tribute, impels such fetes!-</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren Chama looks distraught.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I'd be launched headfirst into the Azure Sun if I presented this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: It's dreadful!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: It's not your fault, however.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: The blame lies solely with that upstart Kran.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren gives you some tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: So please, take this with my thanks for your efforts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2, 3:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can give it a try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Please, ask Tyrus Beaut if one hundred tria is enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I will give it to you in advance in case negotiations go well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren hands you a sack of 100 tria.-</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is 100 tria enough?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus looks up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: My good Madam, there are many who pay me more for my efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Such customers come first, and other work needs must suffer for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: If Loren Chama pays the full five octa, then I can take the time to give this verse its due with my integrity intact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Can Loren give more tria?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: no</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Well then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: I am sorry I have not more time to honour the Octarch properly, I have a ballad that simply must be completed by tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: So, I must pen it now and pray it does justice to the Octarch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Hold here, it will soon be done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus takes a seat before you, and starts writing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus frowns and crosses out a few words, changes some others.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tyrus copies the poem to a fresh sheet of parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: My best effort, given the amount of time allowed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tyrus: Give me the tria, and Loren shall have his song of praise.</td>
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
							$npcName = 'Tyrus Beaut';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tyrus Beaut</a>";
						?>
						</td>
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
							$npcName = 'Loren Chama';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Loren Chama</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: I see that you are a skilful negotiator.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Let us see what our bard has come up with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren unfolds the parchment and begins reading.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Yes, yes, this will do quite nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: A very pleasant little compliment to the Octarch, I think.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Loren gives you three hexa.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Loren: Thank you for your trouble.</td>
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
						<td>Rewards: 2107 Tria, 10800 XP.</td>
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
