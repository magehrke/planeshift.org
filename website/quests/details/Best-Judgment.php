<!doctype html>
<html>
<head>
	<title>Best Judgment</title>

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
						<td>Best Judgment</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Coveted-Traditions.php">Coveted Traditions</a> quest, 1 Bird Note.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the Bird Note from the Coveted Traditions quest.</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Relliom the bird note.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom studies the drawing for a few seconds, then looks at you knowingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A very interesting piece of art.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Very interesting indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It seems that perhaps you can aid me in a task of my own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It is quite simple, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I need you to give someone a scroll.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I assume you will use the same…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: …judgment as you did for your delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Yes or no?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You might not get a second chance, so best you think hard before answering.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The eager little clacker, now aren't we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Now for your little task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Take this sealed scroll to Jirosh Mikana.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A friend of mine,</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom gives you a sly smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Melorick asked me to take care of this little issue, if you understand my meaning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: He doesn't like to be bothered, so you'd best let me know what Jirosh says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I'd hate to have Melorick get upset with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The rest is up to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: If you lack the skills to react to the situation, come back and tell me you quit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am not an unforgiving man.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Jirosh Melorick's scroll case.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Greetings!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Welcome to my humble business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh breaks the scroll case's seal and pulls out a scroll and a small metal object. A frown forms on his face as he reads.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This is serious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It seems that one of my clients received a crate of damaged goods.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh continues reading and his eyes grow wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This is more than serious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The crate contained jade blanks for the figurines intended for certain Enkidukai traditional ceremonies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The carver can't use the broken blanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What a terrible loss.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Those figurines mean a great deal, but will be delayed until the next shipment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh picks up the metal object.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This was found inside the damaged crate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Could you take it and see if Merrinez knows anything about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh waits for your answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hand it over and I will see what I find out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Right, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Take this to Merrinez straightaway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The faster this is solved, the better I will feel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Tell me who it belongs to if you find out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh hands you the metal object.-</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Merrinez the metal stopper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Thanks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I have been looking all over for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I was wondering where it got off to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Been missing for a few days now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez pulls a small, battered flask out of his pocket and twists the stopper in the end.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Who found it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh Mikana.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Jirosh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: That could mean trouble for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He might think I was drinking on the job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Mind you, I never do that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I just like to keep this flask close to me, ya know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: It belonged to five generations of Dholants, and I plan on passing it down to my first son.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Well…I gotta get back to work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I hope Jirosh don't think the wrong thing.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Merrinez</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I feared it might belong to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I have seen him with the flask that stopper belonged to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I am going to have to reprimand him for this later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't have the time now if I am to make out the order for new jade.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I really should do something now though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Do you think I should take his flask away?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, drinking on the job should not be tolerated.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Then go get it for me, please.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh wants the flask, now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Oh…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez's face droops.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I just heard about the busted crate of jade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He must think I did it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I swear I have not dropped a crate in months, and I never drink on the job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I only have a few with my friends after work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He has to believe that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: If he takes my flask away, what am I going to have to pass on to my first son…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: that is, if Toda would even accept if I asked her to marry me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: This is awful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: If this gets out, she is gonna think I am a halfwit drunk who slacks on the job.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez looks at you with pleading eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: You gotta help me out and clear my name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Will you help me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Please?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: For my future children's sake.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
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
						<td>YOU: No, hand over the flask.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: If you don't believe me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: then I guess I gotta do what the boss says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Here…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Merrinez hands over the flask.-</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I hate to do this to him, as he has been such a good worker for such a long time, but I have even more bad news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Since it seems he is responsible for the broken jade, I will have to dock his pay to cover part of the replacement cost.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you could, tell him he must pay…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I would rather tell him myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It would be too cruel coming from someone who is practically a stranger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I just remembered. I have a package waiting for Melorick to pick up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please take it to him; I cannot keep it here any longer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh hands you a wooden box decorated with a highly stylised tree engraved on the cover.-</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Relliom the engraved tree box.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom chuckles as he takes the box. He studies the tree for a moment before looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Poor poor Merrinez.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: He should really learn to be more careful, don't you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It is so sad when good people allow their lives to fall apart like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am sure you are much more careful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I would hate for something like that to befall you, my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Now, before we go on, I am going to give you a choice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Relliom grins and holds up a slip of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You can go back and tell Jirosh that Merrinez is innocent…or you can take this note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: A simple choice, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Give an innocent man his life back, or accept a single piece of paper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: What will it be?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Life or paper?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Paper.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Well, then, my eager little clacker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: It is time for your next task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Take your paper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I am sure you know what to do with it.</td>
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
						<td>YOU: Okay, I will try and help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Thank Talad!</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: I don't know where the crate got broke, or even if it got broke, but it was not me or anyone else here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Tell Jirosh I didn't do it.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Merrinez didn't damage the crate.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Well, if he said he did not do it, then I believe him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I don't hire workers that would lie to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I will have to look elsewhere for the problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Might have fallen off a cart, or have been damaged on delivery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Thank you for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Tell Melorick I will make amends.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Here is a coin for your bother.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh hands you a circle.-</td>
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
							$npcName = 'Relliom';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Relliom</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh will make amends.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Will he now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: No…I think it is you who shall be making amends.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You sadden me with your sloth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You could not even complete a simple test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: You are of no more use to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: The others who follow the whisper in the sewers await your service.</td>
					</tr>
					<tr class="quest_npc">
						<td>Relliom: Perhaps you will better serve those worms.</td>
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
						<td>Rewards: [Way 1] 1 Creature glyph, 25 Faction with Artists Association, 5130 Tria, 13600 XP, [Way 2] 20 Faction with Enkidukai, 5 Faction with Cabal of Whispers, 3641 Tria, 12200 XP.</td>
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
