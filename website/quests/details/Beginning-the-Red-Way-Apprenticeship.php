<!doctype html>
<html>
<head>
	<title>Beginning the Red Way Apprenticeship</title>

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
						<td>Beginning the Red Way Apprenticeship</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Without-a-Way.php">Without a Way</a> quest, Rank 20 Red Way, 1 Apprentice's Red Way Wand, 1 Fire glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyph back.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept this wand as proof I am ready to join the Red Way Circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Welcome, student of the red way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I must say you look like you have enjoyed your training with Levrus, or whoever it was.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands you back the wand with a knowing grin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I have been told about you, YOU , and I think you show promise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Normally, you would have to travel to the forth level to gain training in the Red Way Circle, but since I am here for a time, I can begin your instruction myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Be grateful that you are learning from a master, not a lower member like the other Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And let's begin with some basics.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Every element can destroy, and every element can purify, but there's one element faster than the others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: What is this element?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: fire</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Easy, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Fire can destroy, can purify, but it's also used to change.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And it is dangerous too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Remember that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Wise men use this danger against their enemies and use the power of change to became better and better.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods, looking proud of himself for the explanation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, for the formalities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Please confirm that your name is indeed YOU.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, my name is YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Sure it is, well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You know how stuffy elders can be with their conventions and formalities.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd writes your name on the report and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You are required to take this report to our top trainer and the most powerful and handsome of all Archmages on the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: But before you run off, you will also need to bring him a red way glyph together with the report.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This particular glyph is responsible for a spell that will launch fire from your arm to damage a foe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It is the single most common of all Red Way Glyphs and is often found for sale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Good luck, Initiate.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your report and the glyph you requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd bursts out laughing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I see you have found the handsome Red Way Archmage.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd breathes deep as he tries to contain himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I never grow tired of that one, I don't know what I would do if i did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now let's look at your glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd inspect the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ah very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Red Way is not all about aggression you know, but a lot of it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I must let you know that training with me will never be boring, and in no time we will make you a master of The Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd snickers again as he turns his attention away from you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ah yes, before I forget, you will need a certain glyph before you may continue your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I once gave a Glyph to a person named Meoeor who was traveling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I think that would be a good first task for you to show your dedication to the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Find him and that glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I doubt he will just give it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Ask if you can help him first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Then use it to continue your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Once you have the glyph and sufficient training, return to me and present your Red Way Wand to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And with that said I am happy to bestow the title of Trainee Apprentice of the Red Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It's not much of a title, but if you study hard you won't have it for long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Oh and before I forget if you find yourself in or about the Tavern in Hydlaa search out Throian, I hear he is annoyed with our enchanter.</td>
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
						<td>Rewards: 10 Faction with Red Order, 9400 XP.</td>
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
