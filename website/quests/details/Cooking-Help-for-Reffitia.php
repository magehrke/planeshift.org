<!doctype html>
<html>
<head>
	<title>Cooking Help for Reffitia</title>

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
						<td>Cooking Help for Reffitia</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest, Rank 20 Cooking.</td>
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
						<td>YOU: Hi, is there anything you need help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It is always nice to see people interested in the art of cooking.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia bustles about the kitchen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It seems that there is to be a large dinner party arriving soon and I do not have time to chat.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia runs over to a pot that has begun to boil over and starts stirring it fiercely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Bumbling bogo peppers, not again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It seems I am back at the beginning, and the party of travelers should be here shortly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Could you help me here in the kitchen with some simple preparation work?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It would be my pleasure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: First let me see, do you have a kitchen knife that you can use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Great, would you please cut these pungent tubers over on the preparation table?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia gives you the tubers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I need the tubers to be diced, not minced.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Please be careful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If you cut the tubers too small I could use one minced tuber, but please try to do as I've asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Reffitia the diced tuber.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Now I need a pot of boiling water.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Here, take this water and go put it on the stove in a pot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Bring it back to me when it has come to a nice rolling boil.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where do you want me to put the pot with boiling water?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia carefuly takes the pot of water and adds a few seasonings to it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: There, that should get it going.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: That needs to sit for a little while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Would you please take this meat over to the grill and cook it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It shouldn't take too long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: It is important to grill it just long enough for the meat to cook through, but not too long, or else it becomes dry and tough, or even worse…burnt!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hand over the grilled meat.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia examines the steaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: These will do nicely, it seems that all will come together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Oh goodness, it seems I almost forgot an important dish!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: They love to have a mixed greens dish with a honey glaze topped with chopped nuts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I must get the glaze going; could you please chop me up some mixed nuts?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia goes over to the shelf and examines it. She rustles around a few jars and bottles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Here we go, one jar of mixed nuts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Please take these mixed nuts, and cut them up please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia pours a bunch of nuts into your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the chopped nuts as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Thank you so much, YOU, you have been quite a help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia takes the chopped nuts from you and sprinkles them over the dish.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Perfect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia looks around at the kitchen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Well, there is quite a bit of cleanup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: I had better get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: When you have had twenty five or so total lessons in both baking and cooking, come back to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: If Brado keeps this up I may be in need of an apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Your kitchen knife, it suits you, let it help you master the ways of the kitchen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: And if you haven't begun training with Jomed yet in Hydlaa, I'd suggest doing so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: He can teach you about making meats and stews.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Reffitia takes some coins and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia: Here is some tria for a job well done.</td>
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
						<td>Rewards: 15 Faction with Food Association, 2107 Tria, 10800 XP.</td>
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
