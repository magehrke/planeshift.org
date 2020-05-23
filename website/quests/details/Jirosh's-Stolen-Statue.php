<!doctype html>
<html>
<head>
	<title>Jirosh's Stolen Statue</title>

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
						<td>Jirosh's Stolen Statue</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Jirosh-Shipment-Inquiry.php">Jirosh Shipment Inquiry</a> quest.</td>
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
						<td>YOU: is there anything else you need me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I like a person who does fast work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I might have another job for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Interested?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, what do you need me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I have a client that deals in rare artifacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: The right merchant is here, but leaving soon, so I need this crate to be delivered to Hydlaa quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: My client has already been waiting a good week.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Just let me check its padding and…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh opens the crate.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: …What's this?!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: This isn't the statue!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Someone took the statue and filled the crate with apples instead!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Arg!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: What do I do now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jirosh looks crestfallen.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: That statue was already paid for; if I fail to deliver, she'll never buy through me again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Yet I can't leave now and risk something else being stolen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Maybe you can help me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You look smart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: How would you like to try and find it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: If you catch the thief and recover the statue, I'll pay you a fair fee in good coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: How about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I love a challenge.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Thanks so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I found this in the bottom of the crate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Not much of a clue, but…here, what do you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Maybe you should show this around the warehouse and see what they say.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about this cloth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: How did you get this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: This is a cloth for polishing the bronze on a ship.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: And this 'Y', I remember who had this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He was a good sailor; he and his friend had a drink with me a night ago when I managed to get a break from the foreman.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Are you looking for them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, where can I find the sailor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Shame then, as you know we have no ships here!</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: The nearest lake is still very far from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: The sailor was visiting from the sixth level; doubt you'll find him here anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: His friend I didn't know, he had a heavy cloak on, said the night was chilly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Never did mark his race in the light, but he wasn't short enough to be a dwarf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Do you want to hear more about this person?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, what can you tell me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: We talked for a bit about the deliveries coming up, mostly talking about the strange things Jirosh ships from time to time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Then I had to get back to work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Haven't seen the cloaked fellow since then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He said again the night was chilly, so I told him that if he was cold, I had some ale to warm him up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: But he wouldn't take it, had some nasty stuff of his own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: The mug was ruined afterwards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Here, you can take it if you want, it's worthless for anything now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Whatever he added into the mug tainted it.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about this mug?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Where in the bowels of the Death Realm did you get this mug?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ug, the stench curls my whiskers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: There's no mistaking that brew.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: It's called a Twisted Emerald.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: There are very few who drink it, so I don't serve it at this tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: You'll have to find it elsewhere maybe another bar.</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about this mug?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: A refill?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: No?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'm glad to hear that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I hate serving the stuff, but there are some shady folk around who like it enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Not any Lemurs or Elves, since they can't hold it: seems it burns their stomach lining.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: There's this one guy, though, who buys it by the lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Never got a good look at him; he hides in a huge cloak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: But the boss said that they pay well for us to serve it up, so I do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed ponders a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Want to hear more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, where can I find them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: 'Fraid I can't tell you much more, except that I noticed that he has some kind of protective pendant around his neck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: What I noticed is that the pendant was made of a green gem, and had a red eye engraved on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Don't deal in that sort of religious stuff, myself; the gods don't seem to care about me, so why should I care about them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: You could try asking about the pendant around the temple, though; couldn't hurt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Take the mug back; who knows when it'll come in handy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Oh, one more thing, I think i overheard his name, it was “Smear.” or something like that.</td>
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
						<td>YOU: I need to know something more about pendants.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What about pendants?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Many people make them; go seek them out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Don't waste my time with such foolish questions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I see many people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What interest does this being have for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It was worn by a thief that robbed Jirosh.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, did he now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Well, that lends tribute to some god's ear, but why do you think I know anything of him?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I sell lots of pendants to people, they seek protection against the ills of their trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do you have any details on the pendant?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Like what color and material it was made of?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: green gem</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Those are quite rare; usually we make pendants out of metal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Did it have an engraving?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If so, of what?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: red eye</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, him!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I remember pretty well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Normally I would not reveal anything about any members of my flock, but his manner towards me was decidedly unbecoming a worshiper of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And, as you say, he is a suspect in a thievery.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven hesitates, then continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He never revealed his face to me: he wore a heavy cloak, but his manner did not strike me as Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: He is a thief by trade, as I assume you are aware, and he doesn't live here in the temple area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The only thing I noticed was that he was very fond of daggers and small blades.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: My eyes have not beheld him for many weeks, but you might seek out and ask a trainer in such arts; maybe he has inquired about it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sharven thinks a while, then continues speaking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The good news for you is that I have made two of those pendants, I can give the other to you for a small sum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Give me 500 trias and it will be yours.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I gave one to the cloaked heathen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It might convince his trainer that you work together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Otherwise, I doubt his trainer would reveal much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Bandits lack many morals, but usually don't squeal on each other.</td>
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
						<td>YOU: I have something for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Where did you get that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I have never seen you before, yet only Onyx Dagger's rogues carry such a pendant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Are you new to their service?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, joined before the last eclipse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Ah, must be the replacement for the guy who got thrown out of the group a little while ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Seems he stole something without informing the boss…and then tried to hide the booty instead of sharing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Not a smart move.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I think my training is the only reason he's still alive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I saw the rogue the other day in fact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Here is your pendant back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I wonder if he is still there…</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I might be able to tell you the location…for a fee.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori hands you the pendant-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Give me a few moments to myself to consider and then come back perhaps I can be persuaded to tell you his whereabouts later.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have that location for me yet?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Did the Onyx Dagger decide that simply throwing him out wasn't punishment enough and send you after him?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well, I don't rat on people without a good reason.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Information like that is just as good of a currency in the shadows as hexas, or in your case I'd say two.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori shows her empty hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well to be honest, I don't actually know where he is right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: We called him Smear, but I doubt that was his real name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: He's pretty hard to miss though, even under that cloak of his.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: We always trained at night, but even then I could see the fluid way he moved, like a blur of shadows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: The only other thing I remembered is that he never seemed to have any knowledge of current events, like he spent most of his time living in a hole or something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Maybe check under the temple, I know he cannot be far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You can probably just ask him about smear.</td>
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
						<td>YOU: So you must be Smear?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Are you a fool to approach me so brashly?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: What do you want?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I want Jirosh's statue back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You must be weary of life to accuse me of anything without proof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: If you have proof show it to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the proof.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Ah, like it does to many, it seems that drink is to be my downfall tonight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Yes, it was I who took that statue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Legend stated that it brought great luck to he who held it, but the blasted thing has brought me nothing but ill will.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zak growls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: See me now…I've been thrown out of my group and can't even manage to sell the thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: No one wants it whole and I don't dare take it to a smith to be melted down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: My lot has fallen so much that I might even consider just giving it to you and be rid of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: But the worst of my luck is that I lost my pendant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Without it I don't dare to work and that blasted priest won't sell me another.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: What's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: One of the Onyx Dagger's pendants?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Here, give it to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: Salvation, fate will smile upon me again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Zak: You can have the cursed statue!</td>
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
						<td>YOU: I got the statue back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: You…found it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: I never believed you would actually manage to recover it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: My reputation is saved!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh: Here, take this, yes all of it, I don't know how to thank you enough!</td>
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
						<td>Rewards: 1 Apple, 15 Faction with Enkidukai, 15 Faction with Thieves Organization, 3391 Tria, 10800 XP.</td>
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
