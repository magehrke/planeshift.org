<!doctype html>
<html>
<head>
	<title>Grimal's Tribute to Talad</title>

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
						<td>Grimal's Tribute to Talad</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 2 Beer Mug.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						1 Beer Mug</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to do it manually since there is no dialogue.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe eagerly takes the mug and sips from the beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Ahhh, now that hit the spot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: My thanks, Klyros.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe takes another sip.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You seem to be of the helpful sort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Will you help an old dwarf strengthen his ties with Talad?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I will help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe nods, then takes another sip from the beer, as he wipes the foam from his beard he looks at you with fixed eyes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Let me know when you are ready to start.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now is as good as ever.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe glances towards the red iron temple, then refocuses his gaze on you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Talad has been good to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: During my time as a member of the Sunshine Squadron, I have been in many a battle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe pauses for a moment and rubs his face with both hands.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I know Talad held his protective hand over me many times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: But I have rarely thanked Him properly for doing so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I need you to help me to give proper thanks to Talad for all He has done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe picks up his axe and runs a thumb down the edge.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Now that I am retired, I have more than enough time to give thanks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe returns the axe to his side.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I hear there is a servant of Talad in Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Go and tell Kra I want to thank Talad, I'm sure he can think of some way for me to do that properly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe takes another sip from his beer.</td>
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
							$npcName = 'Quasus Adyum';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Quasus Adyum</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Grimal would like help with giving thanks to Talad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum listens intently as you tell him Grimal's plan.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I see...</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Well Klyros, I would suggest that your friend should write a book as a tribute to Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: He could perhaps write about how he spoke to Talad and how Talad then kept him safe during his battles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: This way everyone will know what a great warrior he was and what a caring God Talad is for keeping him safe through all those horrific battles...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Yes, I would say a book is the way to go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum stares at the crystal for a few seconds.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: If your friend finishes his book, bring a copy to me and I will take it to Talad's main temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: It would not hurt to take another copy to Ojaveda to be placed at their shrine.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum smiles at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I eagerly await your return with the book.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Quasus suggests that you write a book explaining how Talad helped you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe rubs the top of his head and looks at you with a raised eyebrow.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I must write a book you say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Hmm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: This is not quite what I had in mind, but if the priest told you so, then I will do it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe looks to the ground, then back to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I will require some help with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Will you help me again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have time to help, what do you need?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe gives a sigh of relief.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You are warming this old dwarf's heart, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Let's see, I will need lots of ink and paper, would you be so kind as to fetch me two.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: This will give me some time to reflect over what I want to write about Talad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe starts swinging his axe at his side.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What to write...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What to write...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Think Grimal think.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Welcome to Jayose's Librams and Codexes. I hope your visit is an enlightening one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could I have two pieces of ink and paper?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose glances up at you over a pile of papers.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Have, No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But you can buy two from me for 50 tria each.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						100 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And here are your two Ink and Paper.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe only realises you're standing there as you hand him the ink and paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Back so soon?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Thanks for getting them for me, but I was unable to come up with an idea for the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe looks out over Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What I need is a muse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe ponders for a few minutes, then gives a big smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: A nice big frothy muse...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Bring me another beer, that will do the trick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Lubricate this ol' brain of mine.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						1 Beer Mug</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe takes a long sip from the beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Now I'm ready to write this book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Come back and ask me if I am done in a few days, I might be done by then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe takes another sip of beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Wait 5 minutes</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you done yet?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe glares at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Ah, what a joke, funny Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I am only just starting the book now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I needed another muse...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: or two, before I could start.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe chuckles softly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Come back in a few more days.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Wait 5 minutes</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are You done now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe looks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His hands and face are covered in ink-stains.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His face is filled with a deep look of despair.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Almost, young one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Just give me a few more days.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Wait 5 minutes</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about now, you must be done?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe smiles broadly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Huarwar, my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I am finally done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe sighs in relief.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: The only problem is that my spelling is absolutely terrible, so I would like to have it read and corrected by a much more able person than I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Will you help me find a good scribe to do so?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I can do that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe's smile widens further.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: That is marvellous news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Here take this and find a scribe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe goes to hand you his book but pauses.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Actually...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Would you like to hear some of what I wrote, I would hate for it not to be worthy of Talad.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd love to hear what Talad did for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The old wrinkled face of Grimal smiles as you speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I was hoping you would.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He opens the small book and picks a passage to read for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Ok, let me read you this...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: As I was accepted in to the Sunshine Squadron I knew this was what Talad had wanted of me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Feeling his presence behind me during all of my trials and tribulations my faith was rewarded, all of my prayers were answered with the bestowing of the Squadron's badge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: To celebrate my acceptance I had an axe made, one that I had spent a long time designing; it was a perfect embodiment of all I felt of Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Though all that I had asked of him was little compared to what he would soon put me thought to test my faith...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe closes the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Do you like it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Of course you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Here, you can take this to get checked over now.</td>
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
							$npcName = 'Talisa Tamariss';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Talisa Tamariss</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you take a look at this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss inspects the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: What would you like me to do with this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you check all the spelling for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: I see...</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: Very well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She then flips through the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: It will probably take me a few hours to completely correct the spelling in this one, quite bumpy handwriting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: And it's going to cost you, say, 100 tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: Just ask me if I am done in a few hours.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss removes an empty book from her backpack and starts to work.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Wait 5 minutes</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you finished?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss smiles as she holds out the books in front of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: Yes, I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: Do you have the money?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss holds out her other hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Talisa Tamariss';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Talisa Tamariss</a>";
						?>
						100 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are Talisa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Talisa Tamariss hands you the books.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Talisa: Pleasure doing business with you, Sir.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your corrected draft.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe quickly flips through the corrected book and laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You never really know how bad your writing is until someone fixes it all for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: This looks really nice...</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Thank you friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You have helped me once again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I'm afraid I have one more favour to ask of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Would you be so kind as to take this book to Jayose and have him make some copies of it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can help you out again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You are too kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I require two copies of this one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe hands you a book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You can hand them to me at the same time.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told to give you this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose takes the book and studies it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This is not one of my books.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: What do you need doing with it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need two copies made.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose gives an annoyed smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It would be my pleasure, I guess...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose nods as he removes two empty books and a glyph from a drawer.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He performs his copy book spell twice and nods at you as he returns the glyph to the drawer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: There we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: It will cost you 250 tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose taps his fingers on the table as he waits for the money.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						250 Tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Jayose slides the books towards you and takes the money.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Please call again.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your books.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe applauds as you give him the books.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Well done, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I have one last favour to ask of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Would you deliver a book to Toda in Ojaveda and after one to Quasus in Gugrontid for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I can do that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe smiles with glee.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You are truly being amazing to me, kind Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You can take this first book to Toda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: If she asks what it is for just tell her about me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe hands you a book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: And this one is for Quasus.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then hands you another book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Let me know when you are done.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have this book for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Toda Ombretis looks at you with confusion.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: What is this all about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It is from Grimal Bloodaxe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Toda Ombretis looks at the book and nods, smiling at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She opens it and reads over a few of the pages.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: Oh, it's a book to give thanks to Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: What a great idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I don't think I've seen anything like this before.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: People normally bring items precious to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: I will place this at Talad's shrine for all to read.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda: A safe journey to you friend and may Talad bless you.</td>
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
							$npcName = 'Quasus Adyum';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Quasus Adyum</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am back with the book you suggested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum seems amazed as you give kra the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I had given up hope that you would return with a copy for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: It has been many days since you asked for my help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I am glad your friend was able to complete the book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Let me have a quick peek.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum quickly flips through the book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Very nice, very nice indeed...</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Ah I see it is from Grimal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: A long time devout Talad follower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Would you be interested in hearing what he thinks of Talad?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd love to hear some of what he has to say.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Quasus Adyum nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra then flicks though the book a picks a passage before kra begins to speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: This seems to be a passage about one of Grimal's first expeditions...</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: We had been trudging though the labyrinth for two weeks, tracing back a group of creatures which had tried to break though the Bronze doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: There had been a few little fights but nothing we couldn't handle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: When we finally caught up with them the battle was vicious, many of my new friends were torn to pieces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: All of the rest of us were injured, me and few others badly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I could hear many of those lying in their own blood just pleading to be saved, just waiting for a healer to reach them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I sat praying silently to Talad, praying for him to give me strength to live until help found us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I spent my energy in prayer before fatigue overcame me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: During the following night as the patrol was recovering and waiting for help the creatures came and took many of the weakest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: Destroying them as they did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I, despite being among the worst off, was left unharmed as those round me were taken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Quasus: I could only thank Talad when I awoke to see what had happened and felt truly blessed from that day that Talad listened to my prayers.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've delivered your books.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You are so fast, my legs would not allow me travel that fast any more.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe smiles warmly at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You have done this old dwarf a great service.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I am honoured to call you my friend, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Please accept these as a token of my gratitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Don't be shy, come around again in the future and we can have a beer or two together.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Grimal Bloodaxe waves to you then starts playing with his axe.</td>
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
						<td>Rewards: 3391 Tria, 12200 XP.</td>
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
