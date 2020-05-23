<!doctype html>
<html>
<head>
	<title>An Expected Delivery</title>

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
						<td>An Expected Delivery</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Inviting-Talent.php">Inviting Talent</a> quest, 4 circles.</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any work I can do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Ah, a young Kran in search of glory and fortune, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Excellent!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus looks thoughtful for a moment, looking you over with a critical eye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It just so happens I may have a rather important task for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: The Vigesimi of this village is hosting a party in a few days and almost all of the items for the feast have arrived.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus eyes you carefully, slightly amused.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You are willing to work on this with me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A party! Sounds like fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yes, young Kran, I do like your spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Very well, here is my first test of your mind!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: A simple question: We are little creatures; all of us have different features.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: One of us in glass is set; one of us you'll find in jest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Another you may see in tin, and the fourth is boxed within.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: If the fifth you should pursue, it can never fly from you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: What are we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You will have but one chance to answer my tests correctly, so please think -very- carefully on this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: When you think you know, come and tell me your answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It should be simple, and just one word.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: vowels</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yes, they are all there are they not?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Now for my second test: No sooner spoken than broken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: What is it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Once more, return when you think you know the answer and tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I remind you, there is only one chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Think very carefully!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: secret</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Indeed it is, for secrets are meant to be kept.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Do you understand?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus looks at you and nods deeply without waiting for a response.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Now we can get down to the business at hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: As I said before, there are some items for the feast that are missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Now ordinarily, Jirosh is quite reliable, but this is intolerable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Take this and visit Jirosh in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Make sure to give him this list, he will not work with you otherwise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Very particular, that one, especially when he's done wrong.</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands Jirosh the inventory list.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What, what's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh reads the list, his eyes widening with each line.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Talad's eyes, I sent these things a week ago!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh frowns at the list and then sighs with a bit of a growl.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It wasn't my fault, I swear!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: It is a long way from here to Gugrontid and much can happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Please, tabei, will you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Very well, I can help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Oh, thank you, tabei!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh sighs and leans on the counter, his head in his paws.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The Vigesimi would have my merchant's license for this mix-up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: As you might have guessed, this is not the first time it has happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I have been having some trouble with shipments disappearing along that road.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh glances around quickly before continuing in a hushed voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I have heard rumours of bandits working in the area, but I don't know much more than that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you talk to Finara Plund in Hydlaa, she may be able to tell you more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Just tell her that I sent you and she will know what it is about.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh stands up straight again and looks around. A sense of relief is evident on his face.-</td>
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
							$npcName = 'Finara Plund';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finara Plund</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh sent me to see you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: I see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finara nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: So, you are the one he has sent to look into his shipping problems?</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Hmph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: You look a bit scrawny, but I suppose you'll do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finara chuckles before turning to more serious business.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Well, it is true that there seems to be an elusive batch of bandits plaguing the road between here and Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: I heard they are led by a Dermorian woman.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Rumour has it they are lurking somewhere on the road beyond the forest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Perhaps you could look there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finara laughs cheerfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finara: Good hunting, Kran, and don't lose your head!</td>
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
							$npcName = 'Ukabnu';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ukabnu</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about Jirosh's missing shipments?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: You must be kidding, dung-breath.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: That old menki Jirosh and his people have no idea what they are talking about.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu smirks, her visage a mask of menacing confidence-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: No one would dare speak against me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: This is -my- road, little ulber-toe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: What makes you think I know anything about some shipment?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: You had better have yourself off before I decide to take what little you have to offer me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Finara told me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: That interfering wench…!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu chuckles quietly and looks toward Hydlaa for a moment with an crooked smile. She turns back to you with a shrug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Fine, it's true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: We raided that shipment and kept a few things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: We have to eat too, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Tell you what: I'll make a deal with you, little fool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: I know what we took.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Four circles for the lot, non-negotiable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Come back when you have it and not before, or I'll have my friends here give you a good talking to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Got it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu turns away without waiting for your answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Ukabnu one thousand tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Heh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Good job, little Kran.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ukabnu retrieves a small crate from behind a tree, and tosses it towards you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ukabnu: Here, take this stuff and get out of my face.</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your items.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus opens the crate, and looks through it quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Thank you, my good Kran!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: The Vigesimi will be very pleased to have these for the feast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You have done very, very well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus takes a few coins out of a pouch and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Please take this with our thanks, and see me again if you need more work.</td>
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
						<td>Rewards: 20 Faction with Artists Association, 3391 Tria, 12200 XP.</td>
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
