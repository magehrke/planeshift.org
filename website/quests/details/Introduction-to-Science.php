<!doctype html>
<html>
<head>
	<title>Introduction to Science</title>

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
						<td>Introduction to Science</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
						<td>YOU: Hi. A friend of mine told me you are an expert of science and education.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Good day traveler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Your friend is very kind with me, in fact I like science, but I cannot say to be an expert!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: It's such a broad topic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I love studying nature and insects in particular.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: What is your interest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm new in town, and I want to find some work, plus I like science!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Ah, that's a good start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Will you be interested in some more information on science from me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, that's why I'm here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Science is a combination of many different knowledge branches, but usually the people who are teachers, educators, scientists or researchers are helping each other to understand better the world in which we live.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: If I understood it well, it's a kind of guild or association.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Yes, similar to the artists, or the crafters, also scientists like to feel like a group and share their knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: There are many different people into this group and different jobs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What jobs are included in the Science association?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: You can study natural elements and become an alchemist, or an herbalist, but you can also be an Architect, an Engineer, a Librarian, a Scribe or a Teacher!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: As you see there are so many jobs you can do related to science and knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who are the most important members of the association?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Jayose to start with!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: His library is contributing greatly to our knowledge, but there are also people I know, like Kilas Tungse a great architect, Vladovic the alchemist, and many others.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Should I choose one path now? Like architect or alchemist or the others you mentioned?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Ah, not at all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: You are starting to learn about this city and my suggestion is to speak with many different people, get some small jobs from them, and start to understand what you like doing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: You will have time to specialize later on.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who will you suggest visiting next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Not sure who is in need of help now, but you can try Jayose, Kilas or maybe Arion Fildar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks, you have been very helpful!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: My pleasure!</td>
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
						<td>Rewards: Nothing.</td>
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
