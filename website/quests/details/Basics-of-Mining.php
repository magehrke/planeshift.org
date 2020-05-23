<!doctype html>
<html>
<head>
	<title>Basics of Mining</title>

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
						<td>Basics of Mining</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Harnquist's-Raw-Materials.php">Harnquist's Raw Materials</a> quest.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm searching for some hints on mining, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Ah, so you want to have me speak of my past?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Eh, I was a miner in the Jade caves to the north of Ojaveda for many years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I've specialized in refining and cutting gems in recent years.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, I'm searching for information on basic ore, like iron, tin, not specifically gems.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Well, the extraction is about the same, and I have been with miners all my life.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get iron ore?.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Oh well, you can easily buy it from a miner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: But it seems you are interested in how the whole process works, so you may try to extract it yourself!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: It's not that hard, there are some rich veins just near Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, can you let me know where are the mines located?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The mines are not too hard to find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You should exit from Hydlaa going north which is the gate past Kada-El's tavern next to the windowless tower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Then travel into the forest, turning left at the first 'T' intersection you should continue until you arrive in an open outdoor area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: In that outdoor area there is an iron mine just up and over the hill to your right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The mine is in the hillside which surrounds a flat area.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I recognize a good place to mine?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You should closely analyze the terrain and search for the good rocks!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Well, at least you should not search through the grass</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fholen Medraa laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am interested in understanding which equipment is needed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: There is one very important thing you need: a rock pick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You can obtain the rock pick from any blacksmith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: To get better at mining all you need to do is mine, anything, you will get more skilled and experienced with every attempt!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So just a rock pick, sounds good.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Yes, remember to equip your rock pick in your right hand, and then to search the ground.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You will need also some good muscles</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Fholen Medraa smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: There is an Enkidukai over in Ojaveda who will tell you more about mining if you're ever interested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Ah, and I know folks like to know where else to get little jobs or tasks from folks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The Hydlaa Vigesimi, herself, Amidison Stronghand, was asking something about Stonehammers and mining, which I found odd.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Maybe if you see her you can ask about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: And speaking of dwarves, Lorytia Starhammer is always worth a visit if you're out by the Eagle fortress sometime.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Goodbye for now.</td>
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
						<td>Rewards: 10 Faction with Crafting Association, 9400 XP.</td>
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
