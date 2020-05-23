<!doctype html>
<html>
<head>
	<title>The Valiant Shield Project</title>

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
						<td>The Valiant Shield Project</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest, Rank 15 Shield Making, 30 Steel Ingots, 3 Shield Bands, 2 Edgings, 1 Shield Shape.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Rank 15 in Shield Making is uncertain.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Harnquist, what are you doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: What am I doing?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Well, well, well…now that's an interesting question.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist grins a bit and chuckles, shaking his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Nevermind, I'm messing with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I wrote a manual about crafting a special shield, a nice one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Would you like to know more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure! Let's hear it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That's a good choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Look, I'm working on a Valiant Shield, and I'd love to teach you a bit about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: But you'll need some steel first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Go and get thirty ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That's right, thirty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you have stock, melt them and recast into ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'll be waiting here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got the steel, and now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now, now is when the fun begins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Heat some ingots up in the forge, not too much, and make a pair of good bands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: To do this, you'll need a few lessons in blacksmithing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I will train you for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Once you are skilled enough, you can make bands yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You'll also need a good amount of skill in shield making.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Trasok Starhammer in Ojaveda can train you for that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you already have these skills, for now you can use a Catalog of Shields to help you do this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: So, you take seven heated ingots and hammer them using the anvil into three shield bands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Present them to me once you're done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Remember, you'll need two for this task but seven ingots makes three bands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: One thing you'll find as a shield crafter is you can make many of these parts then use them as needed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You make 3 Shield Bands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Am I doing it right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Pretty good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now you should get two edgings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: For this, you'll need thirteen ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That will make four edgings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Again, heat the ingots then hammer them at the anvil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Shouldn't be hard for you, huh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Come on, I will wait for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You make 4 Edgings.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here I present you the edgings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Nicely done, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The last thing you'll need will be a shield shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Make one using ten ingots and then come back to me so I can tell you how to finish your Valiant shield.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You make a Shield Shape.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the shape. Do I need anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now, have these.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist hands you a wooden piece and a handle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: This is a shield core and handle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The core holds all the parts of the shield together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I don't normally sell either of these but I happen to have a few on hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Check with other smiths when you want to stock up on some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you make shields on a regular basis, it's a good practice to keep a good amount of such supplies handy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now you use the preparation table to take two bands, two edgings, handle, shape, and core and combine them to a Valiant Shield Kit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Then hold the kit and use the riveter to put it together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Have this book so you will remember the process in the future.</td>
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
						<td>Rewards: 1 Wooden Shield Core, 1 Shield Handle, 1 Valiant Shield Diagram, 25 Faction with Crafting Association, 13600 XP.</td>
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
