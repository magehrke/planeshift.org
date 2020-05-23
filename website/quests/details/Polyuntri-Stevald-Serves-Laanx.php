<!doctype html>
<html>
<head>
	<title>Polyuntri Stevald Serves Laanx</title>

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
						<td>Polyuntri Stevald Serves Laanx</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Nkaw's-Contrition.php">Nkaw's Contrition</a> quest, 1 Rat Eye, 1 Gobble Ear, 1 Consumer Leg, 1 Trepor Egg Sac, 1 Tefusang Skin, 1 Ulbernaut Claw.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have a task for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You want a task you say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I do not have anything for you right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I need nothing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Laanx more than provides for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Polyuntri ponders the situation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: That makes me think of something that troubles me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: My brother, Gregori Stevald, is Taskmaster of the Arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: When we were children, my mother raised us in the faith of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: My father had long since disappeared following Diaboli festivals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: The church, under the guide of young Sharven, tended to our education while my mother worked as a scribe for the Vigesimi Aargol Stronghand, Amidison's father.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Do you care to hear more?</td>
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
						<td>Polyuntri: Good, I will continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: At first, we did very well surpassing the other students, even the Xacha students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: But as we aged, our father's blood quickened within us and we began to act out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Fighting was our biggest trouble, because we were so much larger than the others, and were often picked on for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Sharven was very strict on us, and while his discipline drove the faith into me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: it drove all hope of it out of Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: To my surprise, Gregori was about age ten when he declared to me that he was going to run away as soon as he had the chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Do you care to hear the end?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Gregori said he believed Laanx hated him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: When he came of age, he took the hard path of becoming a gladiator, while I used mother's and Sharven's connections to land a job here, as a member of the Shadow Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Of course, many years have passed since then and both Gregori and I have risen in the ranks of our professions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Gregori now oversees the Arena in Hydlaa, while I serve as primary advisor to Raithen, Commander of the Shadow Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: My mother passed away five years ago and her last wish was that I bring Gregori back to the faith, because she thought it will be a guide for his actions in the future.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I would like to fulfill her desire and maybe you can help me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Will you attempt this for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, just tell me how.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You are going to need help to do this, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Go and speak to Sharven Xant-Areth: he may be able to advise you more in this regard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Tell him Polyuntri sent you to discuss about Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Depart in peace, and may Laanx frighten the shadows from your path.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Polyuntri Stevald sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Polyuntri sent you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It's a long time since I last spoke with him; what is this about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: To discuss Gregori's faith.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Much time has passed, but the memory of Gregori's loss of faith still makes me sad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I do not really know what the catalyst of his turn from the faith was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Of course I was hard on him, but I was hard on his brother too, and look how well he turned out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: A finer worshipper of Laanx can hardly be found in all of Yliakum than Polyuntri Stevald.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Perhaps if you spoke to Gregori about Laanx, he could tell you when in his life…what action took place…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: to cause him to start turning away from the faith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If you can tell me that, I might be able to devise a means to restore his belief.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Depart in peace and may Laanx frighten the shadows from your path.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven and Polyuntri sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You must be as much a fool as my brother and that old dust-monger Sharven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Do you think I will spill my soul to any reckless wanderer who comes up and asks?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Never mind; you clearly do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you want to know of such a private matter, you must earn my respect and trust, meddler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will give you the chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Will you take it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes, if that is what it will take.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are brave, I will give you that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you want my respect, you shall have to show your martial prowess; if you want my trust, you will have to display your wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: First your prowess: go and find me a consumer leg, a trepor egg sac, a tefusang skin, a rat eye, a gobble ear, and an Ulbernaut claw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: When you get all these things, return and give them to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you can do this, I will test your wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Start with the part from the easiest creature to kill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The rat eye as you requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I knew you wouldn't have problems with this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The next might be a bit more difficult: the gobble ear.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the gobble ear.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The next is a consumer leg.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your consumer leg.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: A consumer leg, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Do you also have the trepor egg sac?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The egg sac.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Nice!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now the tefusang skin.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The skin you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Only one more monster part…</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: an ulbernaut claw.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The claw you requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well, you either have powerful friends or are mighty yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I am glad you have satisfied this portion of your efforts to gain my respect and trust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now I will test your wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will ask you a question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you can answer it, I will tell you how I first came to dislike Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Here is my question: Grimal Bloodaxe had a chest that was just a little too heavy for him to carry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: He added something to the chest and could then carry it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: What was it he added to the chest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hole</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes, that is the correct solution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Your wisdom impresses me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now I will tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I first came to dislike Laanx when I snuck into Sharven's chamber at age ten.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I had seen Sharven use his holy symbol during ceremonies and it seemed an article of great power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Sometimes it would even seem to glow as he spoke to us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I wanted to be close to Laanx like Sharven was, so I decided to go looking for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I found it in one of his robes and put the platinum holy symbol around my neck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: All of a sudden I had a vision of a hideous tall figure robed in black with a platinum mask over its face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The figure seemed to be waiting at a portal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: A Klyros came through and the masked figure spoke 'I'm Laanx, and I'm your god.' I saw the creature gaze resentfully and silently, and then sit on a rock with its chin in its hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Seeing that the creature refused to follow his orders, the robed figure became enraged and destroyed the creature by whispering a single word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I, too, felt destroyed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This must be boring you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Are you sure you want to hear the rest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: When I awoke, I had a burn mark around my neck and my head throbbed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Brought up amongst Xacha and Ylians with no Diaboli around to tell me better, I did not know the metal would make me THAT ill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Of course my mother had told me to avoid precious metals, but you know how children are, and I had to learn it for myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The vision frightened me and as I was replacing the necklace, Sharven walked in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Sharven reprimanded me harshly, making me polish sections of the exterior of the temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I was sick for weeks after, and was still forced to polish the rusty temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The whole holy symbol incident made me think that Laanx hated me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: That was the beginning and Sharven was always harder on me from then on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So the two primary causes of my turning from Laanx were being burned by a holy symbol and Sharven's discipline.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Before that I had always had faith.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I have finished speaking of this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now leave me to my thoughts.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You were too hard on him when Gregori was burned by the holy symbol.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven listens as you explain in detail what Gregori told you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, I had hoped he would not say that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I was too hard on him and Polyuntri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Such an unfortunate incident.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Being burned because of a central symbol of the faith and having a priest be harsh toward you cannot be easy for a child to understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I was much harder on Gregori after that, as I recall and this probably reinforced his early thoughts that Laanx disliked him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am saddened by this news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am getting old now and I am sure this was a disappointment to Laanx as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I must make amends!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven takes out paper and a pen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I shall pen a letter of apology to Gregori; in the mean time, if you will be so kind as to pick up an article I had commissioned for myself, I will be ready with the letter on your return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I have asked Fholen Medraa to make a holy symbol for me out of jade; it should be finished now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Take this note of assurance to him as payment, return and give me the necklace, and I will give you the letter for Gregori.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Fholen is often somewhere near the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tell him I sent you.</td>
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
						<td>YOU: Sharven Xant-Areth sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I just finished his piece this morning, praise Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Do you have the note of assurance?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have this note.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Great then, here you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: This necklace is some of my best work; be careful with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Depart in peace and may Laanx frighten the shadows from your path!</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the necklace.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven holds the necklace up to the light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Indeed, it is very nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Here is the letter and the necklace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I want you to give him this necklace first, then the letter.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: A Symbol of Laanx?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You must be crazy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And what is this letter you hold?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is also for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: What does the old coot want now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori opens and reads the letter. Clearly the letter has a deep personal impact. Gregori inspects the jade necklace before looking skyward.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If it is a truth that your priests are wise enough to see their folly, Laanx, I shall open my heart to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I do not understand why you visited a child with so harsh a vision, but judging by how my life has been since, you must have had a reason.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori eyes well up as he places the jade necklace around his neck.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Perhaps, Laanx, it is not for me to understand, but merely for me to contemplate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gregori looks down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You have proven yourself a fine messenger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will send you back with a letter for my brother, and a letter for Sharven and I am sure Laanx will reward you for your deed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Depart in peace and may Laanx frighten the shadows from your path.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Indeed, you have wrought a fine work here friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I do not have much to give you, but here, take this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is the Platinum holy symbol Gregori burned himself with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You may find a use for it later.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Polyuntri reads the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Astounding news, you have exceeded expectations by far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: How shall I reward you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Richly, I assume, would be best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Here is a Battle Helm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Also, if Raithen sent you to check up on the Shadow Squadron, as he likes to do occasionally, just tell him Polyuntri serves Laanx first.</td>
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
						<td>Rewards: 1 Platinum Holy Symbol of Laanx, 1 Battle Helm, 25 Faction with Iron Hand, 13600 XP.</td>
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
