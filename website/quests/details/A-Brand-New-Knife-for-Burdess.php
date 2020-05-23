<!doctype html>
<html>
<head>
	<title>A Brand New Knife for Burdess</title>

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
						<td>A Brand New Knife for Burdess</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Jomed's-Meat-Medly.php">Jomed's Meat Medly</a> quest.</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there something I can help you with today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Well, yes, I do have something you could help me with!</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Every once in a while I catch this rather ugly fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: It's the weirdest thing you ever saw: no eyes and all these odd dangly whiskers hanging off its face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Well, it fillets up really nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: But the skin and scales will wear down any knife you name!</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: My best filleting knife is nearly done for; if you could get a new one for me that would be really helpful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Will you do that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: I'll give you some coin if you do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like some easy coin, I'm in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: I'd start with checking with the smiths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: That's where blades are made, after all!</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for a filleting knife, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Oh, hello again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I have those, I do, and they are good quality ones, I assure ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'll sell ye one for fifty tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your tria good sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thank ye kindly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed pockets the coins and opens a cabinet. He unwraps an oiled cloth and selects a well-made filleting knife and sheath from the pile. He passes it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: There ye are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I think ye'll find it's quite suitable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Ah, is this for Burdess?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I was wondering what was holding up that fish delivery.</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your filleting knife.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Ah, you found me one, that's great!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Burdess takes it out of the sheath and looks it over.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Looks like a good one too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: This will do fine until I can get out and buy a few more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: A couple of the Vigesimi have standing orders for these fillets, and I enjoy them too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Few eat as well as them on high as them that catches their food, eh?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you help me learn to fish?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: You can buy a fishing pole from me and I will get you started on your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: There is a guard in Ojaveda who is also a trainer as well as guard of the winch building and Easamau over by the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: There are a lot of places to catch fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Most lakes or rivers have fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: There is one near Gugrontid on the road to the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: There is also the Lake of Tears just past the pass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: There are a few more in the area outside the Bronze Doors, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Towards Ojaveda, there is a small lake on a hill as well as the Irifon River.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to learn more about the people working for the Food Association.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Ah, that's pretty easy, I suggest you see Mirra Houphen if you haven't already, she is a world famous cook after all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: And I also heard Archilaya Gurpleferd is trying out new recipes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Over in Ojaveda, you can pay a visit to the tavern there, The Broken Door.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: The cook there is fantastic at preparing fish dishes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: You might want to start an apprenticeship with her at some point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: You'll need a good amount of cooking training, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Here's some tria and a nice fresh fish for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Burdess gives you some coins and a fish wrapped in a large leaf.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess: Thank you for your help!</td>
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
						<td>Rewards: 1 Carp Fish, 20 Faction with Food Association, 3391 Tria, 12200 XP.</td>
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
