<!doctype html>
<html>
<head>
	<title>A new mace for Nevis</title>

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
						<td>A new mace for Nevis</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Items-Can-Break-a-Friendship.php">Items Can Break a Friendship</a> quest, 1 Threestem Wood, 2 Leather Strings, 8 Steel Ingots, 1 Hammer.</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can I help you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Yes, you are the Enkidukai that helped me and my friend Nevis Revori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I need you to do me a favour in secret from Nevis.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Are you willing to do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of Course, I will happily help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I am glad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: He is really fond of his mace but it is worn and its head is loose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I want to get him a new one for his birthday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Only problem is I want to keep it a secret.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Nevis is friends with Harnquist, so to be safe you should try and get one from Gardr in Gugrontid.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will be off to Gardr then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I am glad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I can't wait to see it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Oh, I just realised there are lots of types of maces…</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Maybe you can get a Flanged Mace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: I'm sure Gardr can help.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have been sent by Moren Findel to buy a Flanged Mace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Sorry, I don't have any made just at the moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But, if you get me the materials I could make one as a custom order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Does that sound ok?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, that sounds fine.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now let’s see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Like all crafting everything starts with raw materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: To make a Flanged Mace I will need a piece of good threestem wood, two leather strings, newer the better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And of course some steel, eight ingots will do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the materials you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You are back, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I was thinking while you were away, and I thought if you are interested that you could make the mace yourself?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: With my guidance of course.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That sounds good, I like crafting.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Great, now to get started you will need the necessary tools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here are a spare wood chisel and wood saw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I hope you already have a hammer, if not you can simply buy one from Harnquist, over in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: He always has lots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the tools you asked me to get.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Good, now I will teach you how to make a mace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The first step is to acquire at least basic training in two specific skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: To make a mace or hammer, you need both blacksmith and mace making skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I can train you in mace making and Harnquist can get you started with blacksmith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You will, as with all crafting need a special book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I've got a number of spares so you can have one of them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr picks up a soot covered book and after dusting it off slightly hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It will tell you what quantities are required to make different items, and how to combine them all correctly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do I need anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now we will start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The first step we will take is to make the handle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: To do this you need to put the threestem wood on the table and using the wood saw, saw it into wooden batons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Then you need to take one of the wooden batons and saw it in half.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Return to me with a half wooden baton once you have made it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made a half wooden baton.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now, place the half wooden baton on the table and using your chisel shape the half wooden baton into a suitable shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This is called a mace battle handle shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Once shaped you then need to use two leather strings and combine them with the mace battle handle shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This will give you a completed mace battle handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made a Mace Battle Handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Next you need to take the eight steel ingots you have and go over to the forge to heat them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Once heated, use your hammer and the anvil to shape them into a flanged mace head.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Once you have that, use the table to combine the flanged mace head with the mace battle handle you made earlier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This will give you a flanged mace kit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: And once you have that come back to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made the flanged mace kit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Now the final steps - take the flanged mace kit and use the riveter to create a flanged mace assembly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Once you have a flanged mace assembly, hammer it on the anvil to get a completed flanged mace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have made a flanged mace.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Congratulations, this is a good first effort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Keep practicing to improve.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I will be able to give you lessons for now and as you gain skill you will be able to attempt the more difficult maces and hammers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Do you have any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What other things can I make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Initially you can make a club, mace and flanged mace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: After every ten lessons or so you will be able to make more items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What other metals can I use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Initially you can only use steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Once you are more experienced you can also use platinum steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You will require another manual for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: We will discuss this later, once you become more experienced.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: When can I make battle and warhammers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: After about ten lessons you will be able to make battle hammers and picks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: After thirty lessons you can make a warhammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: When can I make two handed maces and clubs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: After about twenty lessons you will be able to make two handed variants of mace and club.</td>
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
							$npcName = 'Moren Findel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Moren Findel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the mace you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Moren smiles and checks to see Nevis isn't looking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: This looks good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Better than what he has, that's for sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Thank you for helping me again Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Moren: Here is some tria.</td>
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
						<td>Rewards: 1 Wood Chisel, 1 Wood Saw, 1 Catalog of Hammers, 1 Maces, 1 Faction with Smith Association, 2107 Tria, 10800 XP.</td>
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
