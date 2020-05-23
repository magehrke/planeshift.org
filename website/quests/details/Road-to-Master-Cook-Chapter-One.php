<!doctype html>
<html>
<head>
	<title>Road to Master Cook Chapter One</title>

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
						<td>Road to Master Cook Chapter One</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Tools-of-the-Cooking-Trade.php">Tools of the Cooking Trade</a> quest, 5 Tefusang Claws.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Mirra, how are you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: How wonderful, YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: You have returned!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The Caramel of Kada El turned out delicious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I have mastered that and have made some rather tasty treats since then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I would like another recipe; I'm craving something more savoury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Will you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yeah, I got some free time to help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The next recipe is a bit of a walk from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Reffitia Thamal is the cook at The Broken Doors Tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: She and I met once and she served a delicious dish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I doubt she will give up her famous recipe for 'Sarraghi Steak' but it is worth a try.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Ask her about the recipe and see what you can do, YOU.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking to get a copy of your 'Sarraghi Steak' recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Hmmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You want the recipe for the world famous 'Sarraghi Steak'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, yes please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well..</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I'm not going to give that one up so easily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Are you willing to work in order to gain one of my most prized possessions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well then…</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: the meat in the dish is the marrow taken from the inside of a tefusang claw.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: You find this surprising?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well now you know the reason why it is so special and tasty!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you can get me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: let's say…</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: five of them, I shall hand you the recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Reffitia the claws.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia sighs as she takes the claws.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well, a promise is a promise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Here is the recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Now go quickly before I change my mind.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was able to get the recipe you seek.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: YOU, I am truly surprised!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I did not believe that she would ever share this recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Great job!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I must go now: I have work to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I must try out this recipe!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: My mouth is watering as we speak!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Take these well earned Tria!</td>
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
						<td>Rewards: 20 Faction with Food Association, 7310 Tria, 15000 XP.</td>
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
