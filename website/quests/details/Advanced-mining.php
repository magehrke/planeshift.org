<!doctype html>
<html>
<head>
	<title>Advanced mining</title>

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
						<td>Advanced mining</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Basics-of-mining.php">Basics of mining</a> quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You don't have to pay for the information, if you don't want to.</td>
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
							$npcName = 'Selisar Zeinifa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Selisar Zeinifa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I would like to learn some of your knowledge, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Ah, well, knowledge is power, and power doesn't come for free usually.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Are you willing to pay for the information I can provide you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I will pay..</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Smart decision, the money you may spend with me, it's nothing compared to the gains you will make with this knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please tell me more about mining tools.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: I can give you this information for free.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: The basic tool is a rock pick, which is used to break the rocks and find the best veins of minerals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: You can use it as an extension of your arm really, to dig into the debris and seek good ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: A good rock pick is essential to mining.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Rock picks differs for quality and materials used.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: The ones you find in shops are usually good for mining.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please tell me where I can find some Lumium mines.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: This information will cost you 2000 trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Please give those to me, and I will give you some hints to find Lumium.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, here is your money. [You hand the tria to Selizar]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Lumium is very rare, and also hard to collect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: One of the locations I know is in Gugrontid, around the main rock where the city is built.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: I cannot give you more details or I will have issues with my guild.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know the location of some silver mines?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: This information will cost you 1500 trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Please give those to me, and I will give you some hints to find silver.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, here is your money. [You hand the tria to Selizar]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: In Ojaveda we are pretty lucky because we have many mines close to us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Silver is actually found outside the city, just after the big hollow mountain.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know the location of some gold mines?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: This information will cost you 2000 trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Please give those to me, and I will give you some hints to find gold.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, here is your money. [You hand the tria to Selizar]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Very wise, gold is a beautiful metal, and can be used in multiple ways to make our life better!</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Gifts, ornaments and such.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: To find gold walk outside Ojaveda, and then follow the road up to the Irifon river.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: The gold can be found before the river, not too much.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm searching for some iron and coal, can you give me an hint?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: I can tell you where to find coal and iron for 1500 trias.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, here is your money. [You hand the tria to Selizar]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Coal and iron are very useful minerals, because they can be smelted to create steel, the base for most weapons and armors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: There is one place where you can actually find both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Exit from Ojaveda, then search the northern side, not too far from the city.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I got all the information I needed from you, thanks. I have nothing more I want to ask about these minerals, I know them all.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar: Goodbye and I wish you luck in finding good mineral veins!</td>
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
