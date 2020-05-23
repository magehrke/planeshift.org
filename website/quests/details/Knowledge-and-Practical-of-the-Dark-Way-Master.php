<!doctype html>
<html>
<head>
	<title>Knowledge and Practical of the Dark Way Master</title>

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
						<td>Knowledge and Practical of the Dark Way Master</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dark-Way-Master-Training.php">Dark Way Master Training</a> quest, Rank 130 Dark Way, 1 Master's Dark Way Wand, 1 Adept's Dark Way Bracers, 1 Lava glyph, 1 Hand glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyphs back.</td>
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
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please except this wand as proof of my dedication to the Dark Way, Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your progress is pleasing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You have become such a strong Diaboli.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: So intelligent and knowledgeable of the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: To reward your devotion, I shall add to that knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn holds out a hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Come closer, my pet, and give me your Shadow Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn begins purifying it as she speaks. She holds out her hand again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your Entropy Glyph, if you will?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Entropy, here you are as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: So quick to obey.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I do adore that about you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn repeats the purifying on the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Lastly, Humanoid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: One of the more…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: interesting glyphs to use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You do have one, don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If so, give it to me now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If not…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I simply can not part with mine.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you help me get one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Oriven Thamal should be able to get what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Such a helpful creature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Much like you…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn give a coy smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Oriven Thamel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for Humanoid Glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Something she asks of you, does she not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Yes, to pass the gates to further knowledge, one much procure that which provides the key of the mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Without key, lock is nothing more than a useless barrier, no longer suited for its intended purpose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Yes, you are in need of this key.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: I shall provide that which is requested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: The humble servant obliges the master.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriven removes a small item wrapped in cloth from his ever present sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Take, but be wary.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Some doors have lock and key for a well deserved reason.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Other doors with no lock nor key should ever be touched.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						1 Humanoid glyph</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn once again goes through the purification.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Patience now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The pleasure is in the process.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn watches the glyph intently until it is purified to her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Now for the combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The order you do things is important.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn winks and places Shadow, then Entropy, then Humanoid and starts the combine ritual.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: It is finished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Now I shall demonstrate the spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Observe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Energy surrounds Evelyn and her shadow detaches and moves around seemingly under her control. They rise to caress her body before settling back to the floor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The Dark Way is such a wondrous thing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn folds your glyphs back into your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will use this as a weapon on others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You do not yet have the control and power that I possess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you attempt to use it on yourself, you will suffer pain, so do not try it…</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: unless you enjoy such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Purify your glyphs and execute the combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Then tell me what the name of the spell is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: animate shadow</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: There are many of these hidden combine spells, just waiting for you to find and use as you see fit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Your knowledge must be great, and you must discover the order of the combine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Even then, they may not reveal themselves the first few times.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn's eyes show a hint of sadness.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: That is a lesson I learned long ago, taught to me by one of the greatest men to ever exist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: He was a Blue Way Archmaster, but rivalled Archmasters in all other Ways, nearly surpassing them in their own Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: He even taught me a few things in the dark.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn's brief smile fades.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: All power comes with a cost, and he did pay for what he had in the end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: We will speak of it another day, when we know each other much better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Now one last lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I give you a name: Gilata Meselir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: She is here in Dsar Kore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Go and meet her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I'd like you to return here and tell me what is her work.</td>
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
							$npcName = 'Gilata Meselir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gilata Meselir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I know what is your job.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata: [Gilata inclines her head] I am Gilata Meselir, vendor of fine pottery, created by my own hands. What is your need.</td>
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
							$npcName = 'Evelyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Evelyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: pottery</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: That is true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: A real, normal, nice little job, isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Many people wanted just this a normal life.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Some others are forced to leave their life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: And you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you really want to became a master you can say goodbye to every hope to have a normal life from now on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: The life of a Master of the dark Way it's a life of struggles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Some outside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Others inside of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: So.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you're still sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Hand me your bracers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My Bracers as requested, Archmistress.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn silently hands you another set of bracers, then studies you for a few moments as she runs a finger across her lips in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: YOU, it is time to finalize your skills in the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: However, I am not going to make it so easy this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: If you recall, I mentioned some time ago that you should mingle with practitioners of the two Ways that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I need for you to also bring me one Master's Set of Bracers from each of those two Ways, and give all three to me all at once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: So, you will bring me your own wand, and one Master's Bracer from the Red and Brown Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: This is to prove you have gained respect and support from the Circles that support your own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: Only once you reach your limit will I accept these items and give you your final test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: You will know when that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: I will be waiting…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Evelyn runs her hands down her sides.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Evelyn: …right here.</td>
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
						<td>Rewards: 1 Humanoid glyph, 1 Master's Dark Way Bracers, 45 Faction with Dark Order, 19200 XP.</td>
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
