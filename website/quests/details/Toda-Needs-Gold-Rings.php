<!doctype html>
<html>
<head>
	<title>Toda Needs Gold Rings</title>

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
						<td>Toda Needs Gold Rings</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Metal-Working.php">Learning Metal Working</a> quest<a href="/quests/details/Learning-Metal-Working-in-Ojaveda.php">Learning Metal Working in Ojaveda</a> quest[OR]<a href="/quests/details/Golden-Ring.php">Golden Ring</a> quest, 10 gold ores.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Toda. Is there anything you need help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: It's good of you to ask, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Actually, my supply of gold rings is running low.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis opens a small chest behind the counter containing only a couple gold rings.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: I usually get them from Trasok.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Would you be willing to take my order to him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I will happily help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Thank you so much.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis writes a quick note.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Please give this ring order to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: If you are lucky he may even show you how he makes them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis winks.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is from Toda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer wipes his hands on a cloth.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Lets see, what can I do for her?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer takes the order and sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: She's running out again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: What is she doing with them?!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer shrugs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: It doesn't take too long, and I suppose I can drop them off before I head to the tavern later.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer turns away and starts gathering the things he needs as he grumbles something about not liking jewelry making.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up and sees you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: What, you're still here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was hoping you would teach me how to make jewelry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks at you with a stern expression.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Hmph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Why would you want to learn to work with such fiddly little pieces of metal when you can make a sword?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer thinks for a while.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Well, if I'm going to have to waste my time training you I'm going to need to get something out of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: This order for Toda is going to use up the last of my gold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Bring me ten gold ores and I'll teach you the basics of jewelry making.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go. Ten gold ores.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer looks up from his forge.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: You made it back just in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I'm about to make the last ring for Toda's order.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer seems to be taking more care making the simple ring than his previous comments would suggest.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Right, so how do I start making jewelry?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer scratches his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: There really isn't much to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: A standard ingot is too large, so the first step is to cast molten metal into special jewelry ingots.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, how small do they need to be? And what do you do with them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Each standard ingot makes five jewelry ingots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Then ye melt down the smaller ingot and pour it into a ring mold at the forge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Once it cools, you can remove it from the mold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Watch.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer pours the molten gold into a ring mold.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How long do you have to leave it in the mold?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Hold on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer waits for it to cool, and pops the ring out into his glove.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Just a few moments until it is cool enough to handle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer works on cleaning up and finishing off the ring a little.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now what do I do? It looks rather dull, is that normal?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer nods as he peers closely at the ring in his hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Yes, they tend to be rather dull just out of the mold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Next y'll want to polish them up to a nice shine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Watch...like this, if you're careful you can do a wonderful job.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer picks up a brush and polishes the ring so it gleams.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What type of brush do you use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: See?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Not much to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Nice shine to it now, lovely...well, I mean it will do...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer puts the ring down.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Oh, it is a polishing brush.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer drops the ring into a bag and ties it shut.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why use a polishing brush? Also where can I get one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: What other kind are ye going to use, a hair brush?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer snorts.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I have a few lying about, so ye can have one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer gives you the brush he is holding.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ye can take these rings ta Toda along with the bill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: She can pay at her convenience.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer hands you a bag of gold rings and his bill for them.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was wondering, do you have a spare guide or a manual that I could use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer hands you a worn book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: You can keep this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I could probably do this in my sleep, so I don't need..</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: want it any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I'll even give you this old ring mold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I have several lying around cluttering up the place.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Trasok Starhammer then hands you a ring mold.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Before you go do you have any questions?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: I'd rather you didn't come back bothering me about this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What other kinds of jewelry can be made?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: In addition to rings?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: The book contains the instructions for bracers and necklaces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: The processes for bracers and necklaces are a bit more complicated, but, if you are reasonably intelligent ye should be able to fig'er 'em out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Ye can use silver to get started and work up to gold and platinum when ye're skilled enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about adding gems to jewelry?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Come back and talk to me when you're able to make gold bracers and maybe I'll show you how to do that, if I feel like it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: Now off with ye, I have work to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok Starhammer: And you have an order to deliver.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your new supply of gold rings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Did Trasok send a bill as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is. [You hand Toda the bill.] He said you could pay at your convenience.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: And here is something for your time.</td>
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
						<td>Rewards: 1 Polishing Brush, 1 Ring Mold, 1 Basic Jewelry Making, 1 Level in +2 Jewelry Making, 10 Faction with Smith Association, 1297 Tria, 9400 XP.</td>
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
