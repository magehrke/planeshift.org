<!doctype html>
<html>
<head>
	<title>An Undead Howling</title>

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
						<td>An Undead Howling</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh guardian of the dead, how may I please our goddess of endless night?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: A foul smell is drifting from the mouth of the well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: It is not the sweet nectar of decay, but the very stench of corruption and heresy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: You shall please Dakkru by assisting me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let it be known to the goddess that I, YOU, am her servant!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Rulayne Ogrin raises his arms above his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Your servant has answered, oh goddess of death!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me what troubles you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I shall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: While standing guard, a cloaked figure slipped past me and entered the well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: She was short and of fair, elven skin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I caught a glimpse of her hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: It was milky white and adorned with a golden ring with an emerald stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: She had no business in the well so I shouted and threatened to strike her down if she did not retreat, but she disappeared inside before I could raise my staff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I considered going in after her, but chose to favour my health over her well being and refrained.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Within moments, I heard a loud snap.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I was overwhelmed with curiosity, so dashed inside for a peek.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Apparently, she had triggered a trap and was dangling by one leg from the ceiling.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Below, a variety of her coins and crystal way glyphs rested upon the soil undisturbed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: She was too high to cut down, so I left her suffer her consequences instead.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I walked out and resumed watching over the well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: She screamed, somewhat infrequently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: But after a while I found it too distracting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I entertained the thought of going back in and clubbing her over the head to shut her up, but by that point she had stopped.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The next day I walked inside to see if I could guess at what had gotten her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I figured a grendol must have ripped her down, but the rope was cleanly severed and only the glyphs and a few foot prints remained.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The foot prints were much smaller than those of a grendol.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you suspect that she was saved?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Would I have asked you for your help if that were the case?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Please, use your head!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: A young Dermorian man had delivered the corpse of his father for proper disposal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I called for the corpse puller, but he did not answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I looked inside the mouth of the well to see if he was alright and noticed a grendol standing there glaring at me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I raised my staff to destroy the beast when I noticed something strange about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The right arm was fresh, new, and that of a Dermorian - and on its hand was a shiny, golden ring with a emerald stone set inside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I took aim and released a death inducing spell, but it survived and managed to get away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That was the intruder's arm?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Yes, exactly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Do you realize how grave of an abomination this is?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Somebody hacked her arm off and attached it to that grendol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Not only is profanation of the dead a horrible disgrace to the living, but it also exposes you to terrible illnesses like the Green Plague that put our entire civilization at risk of death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I will NOT stand for it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I need you to assist me with an investigation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I want you to go into the well and find the grendol with the elven woman's arm and cut it off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Make sure that when you chop it off, the arm has some of the grendol's flesh on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Bring that arm to me and I'll tell you what to do next.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Before you go, take and wear this amulet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: It is charged with a blue way spell that will keep your body pure and free of disease for a short period of time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Hurry along, and stay away from the corpses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Disease runs rampant in the howling well!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: go into the howling well, find the journal of the renegade Ash Brother, kill the strange Grendol and kill Nefas Dur. Then return to Rulayne.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I found an old journal next to the ancient remains of a renegade Ash Brother. [You tell Rulayne what it said.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He listens to you, intently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: If the journal tells the truth, a group of renegade members of Nefas Dur's brotherhood confronted him and sealed him inside his lair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Looks like to get inside the portal you need to neutralise the Darkness Glyphs then you should be able to remove the seal on the door.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Be extremely careful, I suspect Nefas to be on the other side of that door.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How can I neutralize two Darkness Glyphs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Are you a fool?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Haven't you studied magic?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: You should have heard light counter darkness.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have found the arm. Take it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: This is...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Rulayne Ogrin holds a burlap sack open and makes a disgusted grimace.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: This is disturbing, to say the least.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: What sort of person would do such a thing, and how?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Take this to Sharven and ask him what he makes of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Do NOT tell him I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Tell him that you are training to be a Laanx priest and found this arm on a stray grendol that wandered from the well and towards the road.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Report back to me when you are done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Sharven can be found in the Iron Temple in Hydlaa.</td>
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
						<td>YOU: I stumbled upon a stray grendol which had a fresh elven arm attached, take this and see.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: A what?!?..</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth takes the bag with the arm in it, takes a hesitant peek, then recoils.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Urgh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: This is disgusting!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: This was attached to a grendol, you say?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth shakes his head with disbelief.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Let me take this into my study for further examination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Come back tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Oh...oh, the smell of it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: I hope it doesn't drip on my robes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to wait for 5 minutes before you can continue this quest.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What have you learned?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: This is quite a disturbing find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: I took a good look at the arm that you gave me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: The discoloured flesh at the edge of the arm was unlike the rest of it and yet somehow, the two kinds of flesh were fused together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: I consulted with Diat Noctar, the leader of the education branch of the Iron Temple, and I learned the following.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Long ago, there was a powerful Laanx priest named Nefas Dur who thought he could snatch the souls of the dead from Dakkru and bring their bodies back to life.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: He convinced a number of our priests to follow him along his horribly misguided path.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Partly out of fear that a cult was starting to form based on his teaching he was ordered to drop this pursuit and return to a more traditional line of study.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: He vehemently refused and his numbers continued to grow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: For the sake of the rest of the priesthood, he was banished.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: You should talk to Rulayne Ogrin about this intrusion immediately, I have a niggling fear that this old cult of the late Nefas Dur may have resurfaced.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven Xant-Areth: Good day, Klyros and may Laanx frighten the shadows from thy path.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven suspects Nefas Dur's cult is back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Rulayne Ogrin furrows his brows.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Nefas Dur!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Yes, I remember that heretic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: If this is true, it is terrible, terrible news!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Rulayne Ogrin looks worried.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I would alert the guards, but I really don't need them to accuse me of failing to do my job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I need you to do something, and quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: You are going to go back into the well, and find out who is behind this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Sounds like you already found the way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I fear it might even be Nefas Dur, himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I wouldn't put it past him to cheat death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Go gather as many folks as you can to help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: If it is him, he's probably quite powerful, so bring a healer, mages, and warriors of whatever type you choose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: You -must- destroy him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: And should you conquer him, bring me proof of your accomplishment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who is Nefas Dur?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Nefas Dur was a Laanx priest living in the Iron Temple who was the founder of the ashen brotherhood around the time of Magic Heresy in 550 AY.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The High Priest of the Iron Temple excommunicated and cast him out of the city for his heretic teachings and forbidden experiments.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What was Nefas Dur experimenting on?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: He was obsessed with bringing the dead back to life so they would never experience our Goddess' embrace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: As far as we know he never succeeded, but he did manage to create some undead a mockery of life and dead, an abomination in the eye of our Goddess.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who are the Ash Brothers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: They are the members of a brotherhood forgotten long ago when Nefas was outcast from Hydlaa after which no one ever heard about them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: At the time he was outcast from Hydlaa they were all Laanx acolytes of the Iron Temple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I don't know if they are aware of Nefas return but I bet he's trying to manipulate them to suit his purpose...whatever it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why are they hiding in the howling well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I don't know for sure, maybe because it suits their needs and it's a good place to hide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: May be because they find enough dead bodies for their experiments.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: If that's the case the situation is even worse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You can trust me, I will fight the heretic Nefas.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: That's what I want to hear!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I will pray to the Goddess so she blesses you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I am believing more and more this must be Nefas, himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: No other reason for followers to do this on their own.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Remember, should you conquer him, bring me the proof of your accomplishment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I ask you why Nefas Dur is so hated by Dakkru's followers?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Nefas Dur tried to prevent the souls of the deceased from entering Dakkru's realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: He created countless undead abominations and if he's still alive he has defied the judgement of our Goddess for too long.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have confronted Nefas Dur and I've defeated him! [You hand Rulayne the Crystal Shard.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Rulayne Ogrin takes the shard and his eyes widen.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: I can't believe it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The goddess of death is pleased with your achievement!</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: By eliminating the dangerous heretic Nefas Dur you served Her well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Let me reward you with one of the precious glyphs I've found on in the howling well and belonged to the cloaked Dermorian whose arm was strapped to the grendol, may it serve you better than its previous owner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Now begone YOU and may Dakkru claim the lives of your enemies.</td>
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
						<td>Rewards: 1 Illness Glyph, 1 Amulet of Prevent Disease, 1 Faction with with Keepers of the Veil, 5130 Tria, 13600 XP.</td>
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
