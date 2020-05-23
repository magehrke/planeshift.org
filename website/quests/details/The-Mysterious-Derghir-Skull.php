<!doctype html>
<html>
<head>
	<title>The Mysterious Derghir Skull</title>

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
						<td>The Mysterious Derghir Skull</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest.</td>
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
						<td>YOU: Have you discovered anything interesting lately?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt smiles happily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Oh yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I just uncovered this most interesting find.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt picks up what looks to be a skull.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: This appears to be the skull of a Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: It is very old, perhaps thousands of cycles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: It looks different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Perhaps this is a sign of how much Derghir have changed over time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: This could be a very valuable find for study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: It could help us understand the Derghir and where they came from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I need to keep looking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: In the mean time, can you take this to my sister, Nyshyn?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: You can likely find her by the ruins near Gugrontid, across from the lake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Will you help me figure this out?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I will pay you for your time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll be happy to help. YOU at your service.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Oh thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I'm going to see what else I can find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: For now take this to Nyshyn and see what she says.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt wraps the skull in a cloth and hands it to you.-</td>
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
						<td>YOU: Canyt found this and wants your opinion. [You hand Nyshyn the package.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: My sister?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What does she think she's found this time?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn takes the package and unwraps it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Hmm, a skull?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It appears to be Derghan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Nothing remarkable about it, other that it appears to have sustained some damage over time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn continues to examine the skull.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: There looks to be some scratch marks here, like from an animal, but they seem more recent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I think that's all for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: There's not much more I can say without studying it awhile.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn wraps the skull in the cloth again and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Maybe my sister is onto something here, hard to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You might want to take it to Jardet Forsill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: He knows about Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Maybe he can tell you something.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This was found near the Eagle Bronze Doors, what can you tell me about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet takes the package and unwraps it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: A skull?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It appears to be Derghan.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet continues to observe the skull.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This has sustained quite a bit of damage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Derghir are like Kran, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They are made of stone, not flesh like you and I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: So they decompose much differently.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet points to a spot on the skull.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: There is a mark, like it was scratched by something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: A large bird, perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Could be a pterosaur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Check with Krestal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He's familiar with those big birds, he trains them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You'll find him near the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And do come back at some point and let me know what this is about, I am curious now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet gives you a smile as he rewraps the skull in the cloth and hands it to you.-</td>
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
							$npcName = 'Krestal Dhusho';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krestal Dhusho</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This skull was found near the Eagle Bronze Doors, what can you tell me about the marks?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Krestal takes the package, unwraps it and takes a look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Ah yes, these marks…</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: They are from a large bird.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: A ptero…no not a pterosaur, smaller.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Krestal uses his finger to measure the distance between the marks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: This is made by a megaras.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: They are smaller than pterosaurs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Hmm, Eagle Bronze Doors you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: Yes, they like to fly around out there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: They have a tendency to pick up things with their claws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: I hope this helps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krestal: I would tell that to whomever gave this to you.</td>
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
						<td>YOU: The skull has fresh marks from a megaras.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: That might be how it got here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: But that still doesn't explain where it came from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: At least we're are getting somewhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: And look!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I found this amulet nearby.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I think it has a connection to the skull, in fact I'm sure of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Another piece to this mysterious puzzle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: We will figure this out yet, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt seems excited as she hands you the amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Let's start with my sister again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Give the amulet to her and see what she says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I'll see if I can find anything else.</td>
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
						<td>YOU: Canyt found this amulet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn sighs, seemingly annoyed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What does my sister want now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: An amulet, eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn takes the amulet and takes a quick look at it before handing it back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What does she think I'd know about it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Try Jardet again.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me anything about this amulet?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet takes the amulet and looks closely at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Well it has seen it's better days, hasn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It was found with that skull?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Perhaps it was worn by the owner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Hmm, I have an idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Not far from here is a Derghir village, near the pass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Derghir tend not to say much but see if they can tell you something about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: If you have one of those Derghan bells, I'd suggest you take it with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It could make communicating with them easier.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet hands back the amulet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And let me know what you find out.</td>
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
							$npcName = 'Boilghere';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boilghere</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-[You give Boilghere the skull and amulet.] Excuse me, can you tell me anything about these?-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boilghere slowly sways and eventually looks at the skull. His reaction is subtle, then he looks at the amulet. He begins to sway quickly and breathes heavily, clearly agitated.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: It is my ancestors.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks back at the skull.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: They belong to my father's father!</td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: We lay the items to rest when I was still young.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: Why do you have these?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: Did you disturb them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Boilghere: I take these and put them in their rightful place!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boilghere holds the cloth with the skull and amulet closely, then settles down and goes back to swaying.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They were found by an archaeologist.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-slowly sways and look at you. continues to sway and stares at you, clearly angered.-</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Seems it's the remains of an elder.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That makes sense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: While you were gone I remembered something I read awhile ago in my studies of the Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Upon the death of an elder, they make a trek outward towards the labyrinths, often near the Eagle Bronze Doors because of the cavern there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They slowly make their way to the bottom and bury their dead.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet snaps his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I got it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here is what I think happened: many years ago, they buried the elder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The dirt there was probably washed away over time by weather.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: A megaras comes along, grabs the skull, and drops it where it is later found.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The amulet must have still been attached to it and fell away when it was dropped.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet smiles with satisfaction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I do believe we have solved the mystery.</td>
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
						<td>YOU: [You tell Canyt what happened and what Jardet told you.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: You mean…</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I have disturbed someone's remains?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Oh no!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her ears droop and she puts her head in her hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I - I thought - it looked so old, like it was ancient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I am so disappointed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt shakes her head rapidly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Ah well, no matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Such is the nature of archaeology.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: You never know what you'll find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Sometimes it's rare and exciting, sometimes it's someone's relatives.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I was so hopeful though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Please don't tell my sister about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Just tell her it turned out to be unremarkable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Otherwise I'll never hear the end of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Thank you for your help, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: At least the mystery is solved.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: As promised, here is some coin for your time and travel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Also, here is a book I got recently, a shield making diagram I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I got two and already gave one to my sister.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I was just waiting for someone worthy to give the other one to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Thanks again, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt gives you some tria and a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: And remember, tell my sister there was nothing special about the skull.</td>
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
						<td>YOU: Canyt's find was nothing remarkable.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn rolls her eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Figures.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: All that and it turned out to be nothing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah well, that's Canyt for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: She gets excited over nothing sometimes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It was nice of you to help her though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: She gave me this book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It a manual for making something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Don't know why she gave it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You can have it.</td>
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
						<td>YOU: [You tell Nyshyn the whole story.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn hesitates a bit, holding back a snicker.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Well that's - just - awf…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: She…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally Nyshyn can't hold back the laughter anymore.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ahhhahahaha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Someone's grave…megaras carried!…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn continues to laugh then collects herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Oh, I'm sorry, but that's just too funny.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Here she thought it was such a great find and it was just some remains.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah well, I suppose that happens to all of us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It was nice of you to help her though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: She gave me this book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It a manual for making something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Don't know why she gave it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You can have it.</td>
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
						<td>Rewards: 1 Bulls Eye Shield Diagram, 1 Battle Shield Diagram, 9922 Tria, 16400 XP.</td>
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
