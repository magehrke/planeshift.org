<!doctype html>
<html>
<head>
	<title>The Pollen of Haos</title>

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
						<td>The Pollen of Haos</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Vladovic-Needs-Dried-Maajo.php">Vladovic Needs Dried Maajo</a> quest, Winch Access.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you in any need of assistance?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah, indeed I have a need; you may be able to assist me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In my younger days, I once heard that some people can see the future in a bowl of soup.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: At the time, I imagined one would not be able to see much further then the end of the meal!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic chuckles a bit wheezily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I now know better, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The pursuit of things alchemical introduces one's mind to many new things; even the experienced student occasionally hears whispers of things unknown.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic runs his fingers through his wispy hair and looks out the doorway of his shop, his eyes on things unseen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Something is coming and I must needs work to make ready.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I am going to explore a path towards brewing up new potions of unusual potence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If you are willing, I need you to fetch me a copy of a book from Jayose's in Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was planning on going there soon, so I will pick up the book for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Splendid, Sir, I knew I could count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I need you to bring me the 'Herbica Esotica' from him.</td>
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
						<td>YOU: I am looking for a book called Herbica Esotica.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose looks up from an old tome with miniscule print. He blinks owlishly and his eyes refocus on you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I am busy, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Don't bother me, bother my assistants.</td>
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
							$npcName = 'Lori Tryllyn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lori Tryllyn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me miss, I am looking for a book called Herbica Esotica.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Herbica Esotica?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Yes, I know where that is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori looks at the shelves as she walks along.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Herbica Esotica, Herbica Esotica, ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Here we are, the Herbica Esotica.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori gently eases a somewhat-battered book bound in grayish leather from the shelf.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Who is it for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's for Vladovic Chel-Astra.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Vladovic?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I would have thought he'd know all of this by rote already.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori hands you the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Curious, I wonder what he is looking up.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, I found the book.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do not go too far; I may need you to gather up a few ingredients for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic sets the book on the counter and pages through the Herbica Esotica, pausing now and then to make a few notes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hmm, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Most of these I have, or can send my lad out for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Two consumer antennae…</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: no, he can get those; he is looking for some excitement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah, the hard one: I need the pollen of the haos plant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It grows in the depths of the Lake of Ylia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Most of the goods from down there come up through the Winch over in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do you have access to the Winch quarter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's suppose I have access to the Winch, what have I to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You gained access to the Winch?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Splendid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hurry off there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There may be enough time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I would begin by asking the people there who are involved in moving trade goods.</td>
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
							$npcName = 'Hygrnn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hygrnn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for some Haos pollen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Haos pollen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Haos pollen…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: oh, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: That's a powerful paralytic poison!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: The Octarch on this level has very strict rules about trading in it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I can get you some, but you will need to fill out several governmental forms.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hygrnn opens a small chest and looks through a pile of papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: No, no, wrong one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hygrnn tries another.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Oh, ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Restricted weapons….</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: siege machinery construction…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: ah, here we are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hygrnn pulls a sizeable collection of forms from the box and hands them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Assuming everything is in order, I could have your pollen here in about a week after getting the forms back.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You need to complete these forms to get the pollen.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Oh dear, all these forms?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic sighs and looks through the stack of forms.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I suppose that I should not be overly surprised; haos pollen is rather dangerous in the wrong hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Once these are submitted, how long will it take to receive the pollen?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: About a week.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A week?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic frowns and chews on his lip, thinking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It *may* be enough time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hmmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic taps a finger on the counter as he considers, muttering to himself. 'It may be worth it… and he owes me a favor. I'd hoped to never have to get involved with him again. But he would probably be able to arrange something. Yes.' He nods to himself and addresses you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There may be another way; it will likely mean dealing with some perilous people though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you willing to risk that?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sorry I can't.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You may be right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I will have to trust in Talad to hasten things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you for all your help, Madam, and please accept this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I took it in trade earlier, and perhaps it will be of value to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic pauses in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Also, you may want to check on Bjorid over in East Akkiao.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I wonder if he's still dealing with that …</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And Trasok is often in need of some tasks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I am reluctant to send you to him, but please visit Kisatol and let him know that I need the haos pollen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But do tread with care, my dear Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Dealing with him is dangerous.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: about haos pollen</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Haos pollen?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol eyes you warily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Who wants it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: vladovic needs the haos pollen</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: vladovic, hrrm, yeah, I owe him. But I don't owe you. With something like haos pollen, this could be a setup. Not that it would matter; not for long.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol smiles evilly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Listen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You will do a little favor for me, and we will see if there might somehow be some of this pollen to be found for our dear aged alchemist…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol's voice hardens, demanding an answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A certain businessman in Hydlaa owes me a little bit of money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You collect it, I find what you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Got it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Darven Bounash owes me sixty circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Collect it from him however you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But remember, the truly dead don't pay their debts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In that eventuality, I will collect from you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kisatol sent me</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven flinches.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I don't have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I'm trying to get it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven's voice takes on a bit of a whining tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It's hard; the guards are always watching me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I need a bit more time!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: kisatol sent me</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven flinches.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I don't have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I'm trying to get it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven's voice takes on a bit of a whining tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It's hard; the guards are always watching me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I need a bit more time!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: kisatol sent me</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven licks his lips a bit nervously and then recovers his aplomb, looking you up and down, his eyes pausing briefly at your purse.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Tell you what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: We'll play a little game.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You win, I give you the money and a bit extra for yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I win, you pay NPC out of your own purse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you up for it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: no</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But too bad for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I would have tossed in a couple of circles for the lucky winner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Oh, all right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven grimaces and counts out sixty circles and lays them on a nearby barrel for you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Give 60 circles -</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It appears you have some ability.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Did he try to game you at all?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: yes</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It doesn't matter, I have my money.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If he did cheat you, it is between you and him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol tosses a small sack to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Your haos pollen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Be careful with it: that stuff will kill you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A real shame if that should happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Begone.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic puts a pair of old leather gloves on his hands and opens the sack to look inside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ah, splendid; this looks like good pollen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic closes the sack again and removes his gloves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The consumer antenna material transmutes the poison.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Combined with other ingredients, it will form a potent base for several potions, and they may well be very important in what I have foreseen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Thank you for dealing with NPC; I don't know that I would have been able to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vladovic unlocks a small chest and takes out a glyph and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I wish for you to have this in return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: May it serve you well.</td>
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
						<td>Rewards: 1 Sphere glyph, 40 Faction with Science Association, 17800 XP, 1 Divination glyph.</td>
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
