<!doctype html>
<html>
<head>
	<title>Without a Way</title>

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
						<td>Without a Way</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
						<td>YOU: You seem very busy, may I help you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Someone could say I am attempting a really dangerous experiment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus focuses his attention on a green drop falling from a phial into a potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You need a steady hand to do this, otherwise there could be explosions, or something worse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I especially hate explosions and fire… …because I am not proficient enough to protect all the items in my shop…</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …nor my clients.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smiles at you before catching two potions falling from the table.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: So I need to be more skillful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But returning to your question…I'm creating a potion to gain more power in Red, Crystal, and Brown Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I know it is strange, but chatting actually helps my concentration.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And what about you, have you ever wanted to learn more about magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I promise you will not explode!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …at least, I hope.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have to attend to my business, but I also need to study magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I also need more time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: So here I am, trying the short way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If I succeed in making this potion, I will need no more of those magic items from the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Maybe I could create a new Way!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Who knows?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: However, I need a hand right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here, take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus hands you a red potion before you can answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I hope you do not fear fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, don't worry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmmm, fire could be a good ally.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It depends, though, if you can handle it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Like every other element, good handling is the difference between a great mage and a poor mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And everything can sense the power of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Insects, for example, act in odd ways when they're near powerful Glyphs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus crushes some reddish powder with a pestle and then examines it before pouring it in a potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: In the library there is often a Kra who studies insect behavior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But…I can't remember Kra’s name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Durok</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Durok?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Uhm, yes…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus concentrates his attention on the potion in your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, let’s stop thinking about it, and continue the job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I need your potion in order to start mixing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No Explosion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I promise.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smells the top of the potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Alchemy is a dangerous matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Using the Ways could be dangerous, too, you know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Bad Glyphs or wrong reagents may kill the caster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Or burn your favorite clothes if you're really unlucky.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus grins, fingering a black stain on his robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That's why the Circle trains their initiates so hard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They do not want to waste good dresses…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smirks and then waves his hand at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Sorry, I meant they do not want initiates kill themselves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Almost, I guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I know that Dark Way initiates need to find their way to the Dark Crystal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus notices something coming up from the potion: a puff of smoke. He arches his eyebrow and quickly hands you the potion.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Keep still.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No fast movement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It's all under control, so do not mind the smoke.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Try to think about something else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Let's talk about ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now tell me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What is your favorite Way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Azure Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Azure Way could lead to lose your mind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus cuts some herb, putting them in the mortar, with the reddish powder. Then he starts to pestle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: One of their Archmaster is a woman, but a frightening one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Avoid her if you can.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After some pestling Levrus examines the smoke growing from the potion in your hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, do you like to talk about Circles?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's talk about Circles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a quick search under the table, Levrus takes a phial and pours a drop in the mortar. Then he relaxes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: We are still alive!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Try and relax.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You young ones are always so stiff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Circles are centers of education, similar to schools.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Or academies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Exclusive academies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can study the basics of all Ways, that's usually no problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But when you enter one of the Circles, they want you to study only one of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you gain higher knowledge in more than one Way, they could ban you, or worse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It depends on which Way you chose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: So when you join one of them, you have to attend to their conventions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Not so bad, I must say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They also give you an item of power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It is like a sign of identification and a proof of your dedication, but it's powerful, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A bit like my potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The best potion ever made!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus stirs the content of the mortar well, then assents, proudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I need the flask now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the flask.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You are saving my life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, our lives now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And a part of this area, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I could use someone like you in the future, perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: An assistant with no fear of death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Explosions are always painful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But the market is a hard business, so I need something to beat my competitors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They think an old man can give no more to Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will show them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After some shaking Levrus becomes worried while looking at the smoke. He closes his eyes and puts the contents of the mortar in the flask. Then he tightens his lips. After a bit he opens one eye.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: We are succeeding, you see?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The flask stops smoking, then bubbles starts overflow the flask. One of them, a big red bubble, pops in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This potion could replace items of power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Most of my customers know about them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Do you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Very well, tell me about Way Items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The Way items are divided in three sets of power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Starting from the wand, then the bracer and lastly, the robe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus raises the potion and tries to look through it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, but maybe you want to start one of the Way paths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You are in the right place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Take the bubbling flask, we need to wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: In the meantime I will show you something.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus leaves the flask in your hands and bends down to search under the counter. He starts to toss around boxes, old pouches, dusty old mortars, and a rat skin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Sooner or later I need to organize all this mess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus comes back, after rising from behind the counter. He drops a box on the table with a large thud.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, wait now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Not now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It is growing warmer, isn’t it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You have to tell me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Quick, give me back the flask!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Prepare for the explosion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Leave the flask, let's save ourselves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the potion and looks at one of the bubbles in the air. Then he smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Enough with this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus starts laughing, and hides the potion under the counter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Did you really think we were going to explode?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, please be patient!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Old men like me love these jokes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But you seem a talented one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: My real intention was to keep you here; to introduce you to the Circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I hope you weren’t too distracted by my prank.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Let's stop wasting time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you ready?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus slowly opens the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here you can see four wands and an amulet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus points to the contents of the box with his hand and then picks up one of the wands. He raises the wand with care.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This is the Crystal Way Wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I think you can sense its power even from where you stand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: When you bear one of these wands you will emanate an aura of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The follower of a Way will know you desire to acquire mastery in a Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Crystal Circle if you will choose the wand in my hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you still interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Curiosity leads to knowledge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And about knowledge, I think you want to know about the other wands.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus drops the wand and points to the other ones.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: This is for the Red Way, this for the Blue and the last for the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It’s easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can recognize them by their symbols.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The wand you choose will be the path you will follow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus clenches his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The last is the amuletfor the more secretive Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Azure and Dark.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you curious now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How does one became an initiate?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I can tell you how to start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: First, you must choose a Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: After this you have to talk to a member of the Circle you choose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Not me, I am no longer a member of any Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I suggest you speak with Govell for the Crystal Way and Sharven for Blue Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Otherwise, Jardet Forsil is a member of the Brown Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can ask them for more information.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you chose Red Way, it could be more difficult because their Circle is on the fourth level.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But I heard about that Archmaster near the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Have you ever met him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I know him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He is easily recognizable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He is visiting Dsar Kore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Too long of a journey for an old man like me, but surely you can find him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He has a house in Dsar Kore near some tents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I don't like to go there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Too much orange.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do not like orange.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It gives me a feeling of mistrust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Especially if one choose to dress in that color.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I hate purple, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But well, that is not the point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: We need to talk about the last Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you following?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You heard the names of the members of which I told you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You may ask them for explanations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Up to now I told you about four Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There are two others.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus retrieves the amulet and gazes at it for a few second. Then, before speaking again, he blinks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Give this amulet to Jayose or Oriven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Jayose is a lower member of the Azure Way, or go to Oriven if you are interested in the Dark Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You will find a host of problems with both.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Dark Way above all, but Azure Way, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I do not know them too much, and they never give me wands for their initiates.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It is you choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you want to follow Dark or Azure Way, then take this amulet and bring it to Oriven or Jayose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: They will know what to do after you give it to them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is that all?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It is only the beginning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I want to stress one thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Choose carefully because once you start in a Way, and you gain expertise, the other Ways will be closed to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Can you say 'three thrilled Trepors'?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Three thrilled trepors?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, very good pronunciation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And what about 'Rabid rats roar grudging rants'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Try to repeat it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rabid rats roar grudging rants.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Young ones need to understand the humor of a old man.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smiles, clapping his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now I hope you will show wisdom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You have a big choice in front of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Something that could change your life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Are you ready to choose one of the magic Ways?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus lowers his chin and grins, pushing the box toward you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Make your choice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made my choice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus looks at the item in your hand and assents.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I was sure you'd take that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now you have to meet the member of the Way you've chosen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I already told you the names.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ah, yes memory is everything in magic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Notes may work as well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Maybe one of them will send you back to me, because I can train you in Red, Crystal, Brown, and Blue Ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I know something of the Dark Way, too, but not so much.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A faint sound comes from underneath the counter. Levrus bends down behind it. Muffled words, the sound of clinking bottles and then he raises his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well maybe I really am going to explode.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I have to work now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: See you soon.</td>
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
						<td>Rewards: 1 Apprentice's Blue Way Staff, 1 Apprentice's Brown Way Staff[OR], 1 Apprentice's Crystal Way Staff[OR], 1 Apprentice's Red Way Staff[OR], 1 Way Amulet[OR].</td>
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
