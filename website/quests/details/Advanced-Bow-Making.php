<!doctype html>
<html>
<head>
	<title>Advanced Bow Making</title>

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
						<td>Advanced Bow Making</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Bow-Making.php">Learning Bow Making</a> quest.</td>
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
							$npcName = 'Jjousk Carryt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jjousk Carryt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Jjousk. I'm back to learn more about making bows and arrows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I look forward to teaching you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Good students are hard to find you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But first can you help me out with something?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure. What do you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I'm making a very special bow to be presented to Vigesimi Torkesyn Rabani when the quarantine is finally lifted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Gardr Keck is making a special enchanted grip for the bow in Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: If you could bring it back here that would be very helpful.</td>
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
							$npcName = 'Gardr Keck';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gardr Keck</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. Jjousk sent me to get a grip for a special bow he is making.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Yes, the longbow for the Ojaveda Vigesimi.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra pauses for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: You must be a new apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: So I'll do my part to explain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Longbows are made with two long arms connected by a centre section called the grip.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: This makes them stronger than hunting bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: A grip can be made of quite a few different materials including metals, bones, wood or even claws and teeth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Since it is the core of a longbow it is crucial that it be made correctly or the bow will never be good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: This particular grip is rather special.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gardr Keck looks at the grip with obvious pride.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Jjousk sent me several enchanted gems that I've set into this engraved platinum steel grip.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: It is the core of what will be a very fine, very rare bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr Keck: Now get this back to Jjousk quickly, it is worth more than an apprentice's life.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra smiles.-</td>
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
							$npcName = 'Jjousk Carryt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jjousk Carryt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the grip from Gardr. [You give Jjousk the grip.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Oh, that is lovely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Gardr does such beautiful work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt looks at the grip, smiling.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Here is a small reward for looking after it so well and for any travel expenses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt hands you some travel tokens.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm glad to have seen it. I'm inspired to make better bows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I was hoping you would feel that way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The best crafters always show a good attitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I guess I owe you a lesson now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm ready to learn, Jjousk!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: First I should go over some things you probably already know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Shortbows, longbows, and hunting bows are all fairly similar in construction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: The main difference is in their size.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But the size does make a difference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: A shortbow is smaller and more convenient obviously, but it is also faster to shoot and reload.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: On the other hand it is less powerful and does less damage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: As you can guess, a longbow is the exact opposite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Neither is better than the other, it is a matter of personal preference.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So they are all the same, just different sizes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Almost.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Shortbows are just a smaller version of longbows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There isn't a lot for you to learn there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: A long time ago bow makers discovered that it was easier and the longbows were better if they added a centre grip section like the one Gardr made for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It is really hard to make a high quality longbow in one piece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: A lot of them wound up breaking!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: So now we always make longbows with a centre grip section.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Some shortbows also have centre grips.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Of course there are exceptions to rules and in this case it is the StoneHammer longbow which is a continuous piece of metal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Okay, I'm ready to make more bows.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Good, but before you do that could you do me one more favor?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I'm going to need some special wood for the Vigesimi bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It only grows in the stone labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Taemian Yangnk, the merchant at the Eagle Bronze Doors fortress, can get it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But I'm far too busy here to go out there right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I know it's a long way, but can you go get it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, does he know anything about bows that I could learn while I'm there?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: He's an arms merchant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: He knows a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Hopefully he can give you some useful advice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: See you soon with my wood!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Just tell him I sent you.</td>
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
							$npcName = 'Taemian Yangnk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taemian Yangnk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Jjousk sent me to get some special wood for a bow.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: Oh yes, he sent me a letter about that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: He wanted the normouwerii, the woody fungus that is used for fine carvings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: I got him two large branches of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: He must be making a very unusual bow to want this stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: It is very hard to get.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: It only grows in the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: Not many people will go there to collect it and even fewer come back!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Taemian Yangnk scratches his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: I'm not sure I would use it for a bow though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: It is strong enough, but will it flex properly, that's the question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: You need the right materials, not just the most expensive to make the best bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: But he knows what he is doing, although if I didn't know who it was going to I might not sell it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Taemian Yangnk gives you a bundle of normouwerii.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: Don't worry about paying me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taemian Yangnk: Jjousk and I do a lot of business and we settle accounts regularly.</td>
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
							$npcName = 'Jjousk Carryt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jjousk Carryt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got the fungus wood you wanted. It is really strange looking stuff.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt takes the bundle and nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It is strange stuff isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But it will take fine carving like nothing else I'm told.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: This will be a truly outstanding bow for Vigesimi Rabani!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I just hope it flexes as well as Yonda it does.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Taemian has his doubts about its flexibility. So should I try making short and longbows now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Ok, thanks for reporting that back, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I have a backup plan.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt looks around for something and can't seem to find it. He hesitates for a bit then speaks up.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Umm, I hope you don't mind, I do -really- need one more errand for you to run for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: More? What kind of errand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Nothing difficult.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I just realized I don't have the special Goujah tendon longbow string yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Can you pick it up from Jirosh Mikana in Ojaveda?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It is very expensive compared to consumer tendon, but it lasts almost forever.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I almost never use it but it's very important for the Vigesimi's bow.</td>
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
						<td>YOU: Hello. Jjousk sent me to get a special Goujah tendon string for a longbow.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: A what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Oh yes, the special bow for the Vigesimi.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He searches for a small box on the shelf.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Yes, this came up from the Barn yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Between the transport cost and the fact that Goujahs are such useful animals this is a real luxury item.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jjousk said it was expensive.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: He is right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: It will be 1200 tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana extends his hand for payment.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your tria. [You give Jirosh the tria.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Thank you, tabei.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana takes the tria and hands you the string.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Listen, I don't know if you want my advice on bows, but here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: The best bows I've ever seen weren't the fanciest ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: They were the ones with no flaws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: If I were you I would concentrate on the quality.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Make the best bows you can, not just the prettiest.</td>
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
							$npcName = 'Jjousk Carryt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jjousk Carryt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've got your bowstring. You were right, it was expensive.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Oh, what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Right!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I forgot to give you money for it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks a little embarrassed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Here you go with a little extra.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have everything you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Yes, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You have been a tremendous help, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I apologize for having you run all over the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I guess those travel tokens came in handy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I can finish my gift for Vigesimi Rabani now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Honestly, I don't expect him to use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: He talks a big game but he doesn't have time now for hunting any more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I am hoping he will display it prominantly, instead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It's going to look great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well, anyways, so about bows, maybe it's time you make one, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Start off with a shortbow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt rummages about, finds a book labelled Advanced Bow Making and hands it to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You can make a shortbow in the race's style of your choice, except StoneHammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: StoneHammer bows require special techniques.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Be sure to study the book and get a handle on the materials you will need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: There are some differences from hunting bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Give it a try and let me know if you have any questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How should I get started?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Well, let's see there are Dermorian, Enkidukai, and Ynnwn shortbows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: If you choose to make an Enkidukai or Ynnwn shortbow, you'll need a string made from tendons, either from clacker legs, thunder clacker legs, or consumer legs, some white oak wood for the grip, and a couple of tefusangling claws.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Dermorian bows use plant string.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Oh, and you'll also need some fish glue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Like conservation potions, it is a consumable item you can buy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I believe Liera sells that as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Other bows will be similar but with slightly different materials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: If you'd like to do it step by step, start with the string, decide which bow you want to make then just make a plant or tendon string.</td>
					</tr>
					<tr class="quest_npc">
						<td></td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is. One working shortbow! [You show Jjousk your bow.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Outstanding!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You are an advanced apprentice bow maker now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt grins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Of course you will need to study and practice a lot to become an expert bowyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Once you can make Ynnwn or StoneHammer longbows you will be ready to try and make composite bows...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Maybe once you're that skilled you could go and see one of my best clients, Uri Djho-Maat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: He lives in East Hydlaa and is always asking me for new bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Bit of a snobby type if you ask me, only lets people of a certain skill or renown work for him, you might be lucky and get some work from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I'll keep an eye on how you do and pass on word about you if I think you're ready.</td>
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
						<td>Rewards: 1  Book "Advanced Bow Making".</td>
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
