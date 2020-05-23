<!doctype html>
<html>
<head>
	<title>The Azure Way</title>

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
						<td>The Azure Way</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Without-a-Way.php">Without a Way</a> quest, 1 Way Amulet.</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Jayose, Levrus sent me to see you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Levrus, was it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: He sent you here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: That old ranting peddler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I assume you are here to learn about the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Aren't you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose raises a hand, before you can answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Not so fast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Our Circle accepts only fully committed students, because we expect very much from them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You have to dedicate yourself to Azure Way…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And I mean Azure Way only.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Every other Way will be prohibited.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: If you gain higher levels of knowledge in other Circles the penalty will be banishment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose pauses, looking to your reaction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You can answer now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Do you want to become an initiate of the Azure Way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I want to become an initiate of the Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose gazes upon you and nods, slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: The rules are simple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Do what I say until you pass to the next level of training.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: So, are you ready to get started?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But before we do, do you have something for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are and I am ready!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Hey be careful with that item.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose catches the amulet to examine it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This is the right attitude.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose smiles for a second.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: People come here every day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Every one of them is worried, because they are searching the answers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But they do not know…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose waits, looking into your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Directions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This is what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: And this is what I'll give you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: First step: go to Levrus, so he will teach the foundations of the Azure Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: When Levrus cannot teach you anymore you will understand that your foundations are solid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: At that time return to me for advanced training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Study and practice will bring you to excellence if you show enough purpose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now one last test before you start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I frown on these things but the Archmages want it included.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I cannot be felt, seen or touched; yet I can be found in everybody; I am not a key; yet I can open many locks; I have an edge that will dull, but no stone can it sharpen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: What am I?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: mind</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Yes, of course it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now with that foolishness complete.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose searches in a sack and gets a wand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Take this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: In the future, when you will need no more of my teachings, bring this wand back to me and I will give you the name of the next master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I want to start!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: At last.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Take this wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Concentrate on the path of the Azure Way to make us proud of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose clenches his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: A last thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Usually the initiates of the Azure Way are relentless students, but sometimes…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose tightens the lips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Sometimes one of them changes his mind, and decides to join another Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: In that case return the Azure Way wand to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Maybe he will grant you another opportunity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now go, you know the road.</td>
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
						<td>Rewards: 1 Apprentice's Azure Way Staff, 5 Faction with Azure Order, 8000 XP.</td>
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
