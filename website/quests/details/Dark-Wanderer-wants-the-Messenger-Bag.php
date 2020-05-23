<!doctype html>
<html>
<head>
	<title>Dark Wanderer wants the Messenger Bag</title>

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
						<td>Dark Wanderer wants the Messenger Bag</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Where-the-Courrier-Went.php">Where the Courrier Went</a> quest.</td>
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
							$npcName = 'Dark Wanderer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dark Wanderer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there a task I can do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Yes, I have a task for you if you do not mind disregarding the feeble laws of Yliakum and putting your own head at risk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Do you have the strength of will to make my desires manifest in this world?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't mind breaking a few laws.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Then we can continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I need someone to covertly go to Aldaaren Phostle in the eastern part of Hydlaa and retrieve something of value from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: A dispatch that I hope never sees the light of day has been intercepted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Aldaaren Phostle has information on where to retrieve that bag, but he was unable to relay its whereabouts to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: He will no doubt ask for a favor from you in exchange for this information; do whatever he wishes and return with the Messenger Bag, and I will reward you with forbidden wisdom.</td>
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
							$npcName = 'Aldaaren Phostle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aldaaren Phostle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Dark Wanderer sent me…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Bring your voice to a whisper, my child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I know your purpose, but if you want my information you will have to do something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I need information that only Levrus Dahrenn can provide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: He must not suspect that I have sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Word is that Raithen used to be an apprentice to Levrus when he was a boy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I am specifically interested in the nickname Levrus had for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Go to Levrus and mention Raithen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: If you can find the nickname without mentioning me, I will tell you where you can find the bag that the Dark Wanderer seeks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Does this arrangement suit you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes it does.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Report back when you have the information I seek.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Raithen?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Funny you mention him, as I was just thinking of him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Raithen was my best student and my greatest disappointment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I first met him when he miraculously won a mages' tournament at age twelve.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It was no surprise to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He had been a beggar, a nuisance around Hydlaa for quite some time, but always spoke of wanting to learn magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Over time he gained an unnatural luck that he used to win games of chance and ensure his survival.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Few took note of this, but this is when my interest in him began.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He improved slowly at first, practicing late at night in the sewers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This is a long tale; are you sure you wish me to continue?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Raithen was slowly progressing mimicking the movements and incantations needed for the casting of spells in the company of rats.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: 'Hello Ratboy,' I said to him, as I allowed my invisibility to fade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He was not shocked at all, and merely replied, 'I smelled you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have smelled you following me for weeks; what do you want with me, old man?' I told him he had a tremendous innate gift for magic and offered him an apprenticeship.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Raising Raithen over those years gave me some of the happiest moments of my life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He was sharp and quick, and after I taught him to read, I could not stop him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I called him 'Ratboy' from then on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You sure you want to hear an old man blather on?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please continue.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: As Raithen approached his late teens, he was an eminent mage in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He was still officially in training, but he outpaced most of his teachers early on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: On his seventeenth birthday, he announced suddenly that he was going to join the Shadow Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It was very sudden, and I came to learn he had met another teacher, a teacher of forbidden lore known only as the dark wanderer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: His desire to surpass all of his teachers, including me, drove him away from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Alas, I do not feel like speaking more on this matter.</td>
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
							$npcName = 'Aldaaren Phostle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aldaaren Phostle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: His nickname was ratboy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Excellent work!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I shall have to employ you myself some time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You gave me what I wanted; now to give you what you wanted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Seek out Zak below the Laanx temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: He has what you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I doubt he will give it away for free, but he does have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Go and ask him for the Messenger Bag.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm here to collect the messenger bag.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: First things first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: We never spoke.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Got it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Now if you want the Messenger Bag you have to do something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Nothing risky, just a little favor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Do you want this messenger bag enough to aid me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'll help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Good, now here is what I need you to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Gordy Pumuont is an eccentric and strange man.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He serves as the executioner for the Vigesimi court.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: The job has given him strange tastes and even stranger habits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He has something I need, and I do not want to have to deal with him at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He is growing stranger and stranger of late, and often speaks in riddles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If you can extract from him one of his Executioner Axes and bring it to me, I will give you the bag you seek.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Two things are important to bear in mind: one, Gordy cannot know I sent you; and two, Tarela Girshon must not know I have the bag.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: When you meet Gordy, offer to have his Executioner Axe repaired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: He has Harnquist's apprentices do this for him weekly, and they change week to week, but he uses a code.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You will have to crack that code to get the Executioner Axe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Just tell him Harnquist sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: When you get it, return and give it to me.</td>
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
							$npcName = 'Gordy Pumuont';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gordy Pumuont</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: Are you a new apprentice?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: I do not recognize you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: Who sent you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: If you truly are Harnquist's apprentice, you should be familiar with my puzzle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: I will test you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: If you can answer the question with one try, I will trust you with the repair of my Executioner Axe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: Here is your question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: How can you throw a dwarf away as hard as you can and still have it return to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: throw dwarf up</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: Yes, that's it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gordy: Here you go, and make sure the axe is well oiled before you return it to me.</td>
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
							$npcName = 'Zak';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zak</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the axe, now give me the bag.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You have done well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: I may have work for you another time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Here is the Messenger Bag.</td>
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
							$npcName = 'Dark Wanderer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dark Wanderer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the bag.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I must congratulate you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: I did not believe you had the guile to pull off my mission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dark: Take this glyph and use it to your benefit.</td>
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
