<!doctype html>
<html>
<head>
	<title>Deceit and Honour</title>

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
						<td>Deceit and Honour</td>
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
							$npcName = 'Krri Koreni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Krri Koreni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look sad, anything I can do to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Yes, I am sad, and some help would be greatly appreciated.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: I have gotten myself into some serious trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: I am known for my honour and now that is at stake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Please, help me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Don't worry, Krri, I'll help you. Tell me more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Thank you so much, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: You see, I usually don't get mixed up in such things, but a few weeks ago I took a job I shouldn't have taken.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: If I had known what sort of people had hired me, I would not have agreed to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: They tricked me into believing it was a rescue operation, but it turned out to be something entirely different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Though to my defence I backed out as soon I understood what it was about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: And now someone has sent a report to the Octarchy, stating that I was the brain behind it all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: I have tried to find the Dermorian who hired me, but he has disappeared and no one has ever heard of him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: He said his name was Fraludir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Please talk to someone in the Octarchy and try to find out as much as possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Krri Koreni: Vigesimi Amidison Stronghand would be a good start.</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Krri's problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Krri Koreni?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Why would that be any of your concern, citizen?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sorry, ma'am, but I am trying to help her restore her honour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand nods slowly and looks you over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Very well, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: We recently received reports from a few eye witnesses that Krri Koreni assassinated a wealthy lady in the Winch, a Klyros named Vermatago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Now, I would never doubt Krri if she said she were innocent, but the testimonials we have from the witnesses are very damming, or that's how they look to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: One of them said he witnessed Krri kill Vermatago, near one of the sewer entrance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The next mentions how he heard Krri explain her plans, and a third said that Krri bribed him to let her in the Winch, and enter the Klyros' home.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And who may those witness be?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The witnesses?</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I'm afraid I can't give you that bit of information, but...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She pulls a token from one of her pockets, and leans in to hand it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Present this to the guards in Hydlaa, and they will collaborate with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Be sure you have it with you or you will get nothing from them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: If I recall correctly, Jefecra Harcrit, the Lieutenant of the Upper District garrison, was the one in charge of the investigation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I advise you go see him.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Jefecra. What can you tell me about Krri?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Krri?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The armoured Enkidukai raises his helmet a little, observing your badge.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: I see Vigesimi Stronghand trusts you in this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: What would you like to know about Krri?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to know the witnesses that testified against Krri.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Ah, yes, the witnesses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: I have their names on me, somewhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit fishes a folded note from a pouch hanging from his waist, and reads it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Here, now they are Ervin, Pauril, and Darven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: And please, don't be aggressive with them: I wouldn't want to arrest you, now that you're helping Krri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Go ask them, and then report back to me if you find anything new.</td>
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
							$npcName = 'Pauril Rentaurin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pauril Rentaurin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Pauril, can you tell me anything about Krri's case?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: What would you like to know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: I've already told the guards everything!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks suspiciously at your token of authority.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Fine, ask away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What was it that you heard?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Hmmm, well, let me recall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin's tone sounds like that of a storyteller's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: I do remember Krri talking to a cloaked figure, I think she called him Fraludir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: She said she was going to kill someone that same night, and the other nodded, at least from what I could see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Then they left in different directions: one towards the sewers, and the other towards the Winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: And I can't tell you more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you sure it was Krri that you saw?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Hm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Why, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: It was Krri, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: What a strange question.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's strange, Pauril, I had you for someone respectable!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: I am respectable!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Well, I guess.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sighs a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: Promise me you won't tell anyone, alright?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: I didn't see Krri...</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: I don't know who did I see, but it certainly wasn't Krri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: It was much taller than an Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pauril Rentaurin: That's all I can tell you.</td>
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
							$npcName = 'Darven';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Darven. I'm here to talk about Krri.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Krri?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Who, that mercenary?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash starts shuffling a deck of cards, staring at you meanwhile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: She can say all she wants, I know what I saw, and I know she's guilty.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I know what you have to say about it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Well, hum!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I know what I saw, I told you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I was walking back from Kada's and down an alleyway nearby I heard Krri and someone else threatening the Klyros woman.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: She said something like "I haven't done anything to you!" or some such.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I think she even said a name, or something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: And then, that girl stabbed her through the chest, just like that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I ran away!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He closes his eyes and shivers a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you hear anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Yes, that's the one I heard!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: He mentioned something about B- Krri's plan being brilliant!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sounds a little nervous now.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Then Krri said "Yes, yes, I am brilliant!"</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What did you just say? Are you sure it was Krri?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: E-eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: S-sure, it was Krri!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I mean, I would recognize that deep gro-- that sweet voice!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash seems to realize that he has blown his cover.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: By the Gods, I can't tell you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: He'll crush my skull!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: He'll tear my limbs apart!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I need protection!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright, alright, calm down. I'll tell Jefecra you need protection.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: F-fine...</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: It was B- the gladiator.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: The big one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash looks around nervously, hoping no one is listening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Now go!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I've told you all you need to know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: And remember what you promised!</td>
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
							$npcName = 'Ervin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ervin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Ervin. May I ask you something about Krri?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Krri Koreni?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: I don't see why not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Go ahead.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you let Krri into the Winch recently?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Ah, yes, I remember that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: She said she needed to go talk to Axomir about a package she was waiting for from the Barn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you sure her intentions were that innocent?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Maybe if you'd let me finish, I'd tell you the whole story.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Anyway, she was cloaked, but I could recognize that low growling voice anywhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Later on I heard that she had assassinated a wealthy merchant.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: True, true, hard to identify... Only that you don't seem to know Krri that well: her voice is, by no means, as you suggest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Er, well, hum, you know, she wanted to disguise herself, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: So yes, of course she would speak different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Pfft, like...</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: I recognized her, alright!?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ervin, you can't fool me! You are lying! I'm going to tell the guards unless you tell me the truth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: N-no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: I-I'm not lying!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Really, hey, look...</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: I'm going to give you these circles, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: You don't need to tell the guards.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A bribe? Are you trying to bribe me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Bribe?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Gods, no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Take it as a, well, compensation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: For your hard work, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Look, look at how shiny they are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Come on, who would say no to this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, they sure are shiny, thanks...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: See, good Madam?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: We don't need to be foes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: Now we're friends, right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: You don't tell the guards, and my head stays on my shoulders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin Fromaad: We all win.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm back from talking with the witnesses.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Ah, excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Any new pieces of information you have for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Actually, I do. [You tell Jefecra the whole story, to which he listens intently, nodding from time to time.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: I see how it goes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Do you think you can investigate further?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: I don't think I can make sense of all this, and you seem to know more than we do already.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Usually we wouldn't ask you to do such a thing, but Krri needs your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Please, go and see if you can find out anything else</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Now I took accidently the wrong path...</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't want to go off and talk to anyone else, as you asked. Here is your token back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit frowns heavily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Well...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra Harcrit: Thank you for your help so far, we will continue with what you have reported.</td>
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
						<td>Rewards: 5000 Tria.</td>
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
