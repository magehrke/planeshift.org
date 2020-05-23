<!doctype html>
<html>
<head>
	<title>Angry Drunks</title>

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
						<td>Angry Drunks</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Helping-Aydken.php">Helping Aydken</a> quest, 3 Beer.</td>
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
							$npcName = 'Rook';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rook</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook looks at you as he sways side to side, a mug in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: You!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: You help..</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: helped Aydken, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: My name is Rook!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: I'm the best ov fallfus ..</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: best of all of us!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook hiccups then takes a large gulp from his mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Stupid Filch is the worst.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: He's clumsy n' stupid n' stupider!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: You want to help the best?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I want to help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook burps and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: You go tell Filch that he smells of rats!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Go go, I'll give you some tria and stuff…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: yeah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Go!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook chuckles lightly under his breath as he waves you away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: He smells of rats!</td>
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
							$npcName = 'Filch';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Filch</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You smell of rats.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: What?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch looks at you angrily then almost falls over spilling some of the liquid in his flask.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: That short, arrorant..</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: agrorant…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: stupid Rook sent you, didn't he?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch lifts up the flask and drains the last of it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Bah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: You go tell that stupid, little man that..</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch sways from side to side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: That's he's dumb!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Yeah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Go!</td>
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
							$npcName = 'Rook';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rook</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You're dumb.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Ha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Is that the…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook drinks from his mug which he has refilled in the time you've been gone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Is that the best he can come up with?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook grins at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: That's our Filchy for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: He's not very intelly…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: intlement…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: intelligent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: That's it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook smiles, obviously proud of pronouncing such a hard word.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Go…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Go tell him that his mother was a Gobble!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook all but giggles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: That'll show him.</td>
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
							$npcName = 'Filch';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Filch</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your mother was a Gobble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: What!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Oh that's it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch drinks the rest of the mug in his hand and pulls out a dagger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Go tell Guile that I want to kill Rook!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: That short, little …</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: umm ..</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: fool!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Yeah, that short, little fool won't get away with that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Mom was a Gobble!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: My mom was a …</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: not gobble!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Not at all gobble!</td>
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
							$npcName = 'Guile';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Guile</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Filch wants to kill Rook.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: What's that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: Oh, you started them off, didn't you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Guile shakes her head slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: Go buy two beer mugs and give one to each.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: When they ask who gave them to you, say the other one did.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Guile shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: That should work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: And bring me one once you are done with those two.</td>
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
							$npcName = 'Filch';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Filch</a>";
						?>
						1 beer</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A gift.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: More beer!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch drinks from the mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: I love beer!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Beer, beer, beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Keeps your mind working!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: My pa used to say that if you didn't drink enough you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: erm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: well, it wasn't good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: By Talad, even that Trepor-son Rook enjoys beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch takes another swig.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Who sent this, any ways?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rook sent it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: He did?</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Bah, just like that…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: dwarf to do something like that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch tries to stay angry but then he lets out a small smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Mother was a Gobble…</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: You know, he had always had a thing for my mother.</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Bah, whatever, I'll be good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Filch: Here, get him a beer from me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Filch hands you a coin.-</td>
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
							$npcName = 'Rook';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rook</a>";
						?>
						1 beer</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A present.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Oh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: More beer!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook takes a sip from it and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Thank you, there's nothing in Ylia …</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: kum …</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Yliakum quite like another beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: One of the…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: few things that that ugly Filch and I agree on…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook sips some more beer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Who sent this beer, by the way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Filch sent it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: He did?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Oh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: well</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook smiles and shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: I guess he's not so bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Still…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: bah, never mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rook: Here, bring him a beer as well, from me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rook hands you a coin.-</td>
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
							$npcName = 'Guile';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Guile</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's another beer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Guile sips at the beer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: I see my plan worked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: Can't say that I'm surprised.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: My plans always work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: Here's a small reward for you, Enkidukai, be well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: And keep your distance from them, they tend to..</td>
					</tr>
					<tr class="quest_npc">
						<td>Guile: get angry.</td>
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
						<td>Rewards: 1297 Tria, 9400 XP.</td>
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
