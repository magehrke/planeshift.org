<!doctype html>
<html>
<head>
	<title>Working with Rare Metals</title>

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
						<td>Working with Rare Metals</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Gardr-Trust.php">Gardr Trust</a> quest.</td>
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
						<td>YOU: Seems we established a good collaboration, I'm ready for more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I agree and now I trust you enough to disclose some of the advanced knowledge on metals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes! I'm all ears.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: There are different minerals present in Yliakum, some of which are very rare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You are already aware of coal, iron, tin, but there is also silver, gold, platinum and lumium.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: More importantly you can combine those metals through a special process and craft superior metals you can then use for weapons or armors.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I never heard about lumium, can you tell me more about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Lumium is a special metal found in nature, which has a dark red color.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: When properly worked, this metal is beaten like copper, polished like glass, and looks like silver yet does not tarnish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: It has a very high hardness.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I find those rare metals?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I'm sorry I'm not a miner, so my knowledge of mines is not very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I usually buy the ores from merchants and then I smelt those to create the metals I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: If you find an expert miner he could tell you more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there any special process to mine those metals?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: My mining knowledge is very limited, but for what I know you need to be a good miner to spot those rare ores, in terms of tools you just need a rock pick as usual.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is the result of this special process you mentioned?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gardr Keck looks around quickly and starts to speak with a lower voice.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Ok, I will tell you some details.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: There are three metal alloys I know of: platinum steel, blue steel and tigrain steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The last is also called just tigrain at times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: They are all very special, and different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The easiest one to craft is the platinum steel, but you need the right formula and the right process.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Platinum steel sounds interesting, can you tell me more about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This is one of the simplest rare alloys to craft, at least compared to the others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Platinum can be used to harden steel and make a superior metal, but without the right amount and right metals you will never obtain something usable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The trick is to have a small part of silver into the mixture, which will react with steel and platinum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: In the forge you have to use 1 ingot of silver, 1 of platinum and 4 of steel.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can you forge Blue steel?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Blue steel is a wonder to forge and to shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The formula was created long time ago by a Stonebreaker named Draton, so it's referred sometimes also as Draton Steel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: To make this metal you need to mix 5 ingots of steel, 3 of lumium and 1 of bronze.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The resulting metal is incredibly hard and resistant to corrosion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me more about tigrain steel?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: This metal is very hard to melt since it has a high melting point and even the hottest fires cannot get that hot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The weird chemical reaction of lumium and silver with ulbernaut blood has been discussed by smiths and jewellers for centuries, until tigrain discovered the perfect formula.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Tigrain was a notable scientist and alchemist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: To make five ingots of tigrain steel mix: 2 ingots of lumium, 4 of gold, 2 of silver and 3 ulbernaut hearts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I have learned enough about the alloys, I want to start forging!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I was sure of that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But remember those metals are very expensive!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You need a customer before spending money on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Here is your book with basic techniques and knowledge for rare metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You have proved to be humble enough to gain my trust Huarwar .</td>
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
						<td>Rewards: 1 Working with Rare Stock, 2 Level in Metallurgy, 35 Faction with Smith Association, 9922 Tria, 16400 XP.</td>
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
