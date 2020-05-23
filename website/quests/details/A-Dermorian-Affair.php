<!doctype html>
<html>
<head>
	<title>A Dermorian Affair</title>

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
						<td>A Dermorian Affair</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Advanced-Bow-Making.php">Advanced Bow Making</a> quest, Rank 0 Bow Making.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Sir, may I be of help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat shrugs elegantly and waves a dismissive hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I have work todo overseeing and managing all my servants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: No time for idle chat...</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Unless.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat looks you up and down.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Are you requesting a job?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Not exactly. Simply proposing my help as of now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Uhm, yes, maybe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Of course, I don't run anywhere myself to settle my businesses.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: So you could do that for me, an assistant maybe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Uhm. What is it about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Tevnaa, of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: The greatest and famous Dermorian festival.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: It is very old and highly traditional.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Even if some newer generation frown on such "old" things from a before our arrival in Yliakum, Tevnaa still stays exceedingly popular.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: And of course I will be represented.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I didn't know such a festival existed. You will participate yourself?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: You are flattering me, how I understand you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: No, of course I am not participating myself, I pay talented warriors for this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: They will represent my name in the three competitions of the festival: tracking, a rivnak race and an archery tournament.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: The winners are highly regarded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: But not just those taking part, also their sponsors as they were wise enough to support them and I'd like to increase my already very imposing reputation.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Interesting. Good luck. But how can I be of help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I've chosen two new warriors this year, a master and his apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: All seems well settled: registration for Tevnaa done, supplies ordered and soon to arrive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Unfortunately, it's been now a week that I have no news of my champions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: They were supposed to send a message concerning their rivnak training progress...</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: How dare they make me wait, it's insufferable!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: My private messengers are all busy at the moment, and I refuse to retain another one for this ridiculous setback.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Please go and talk to Oropher Telemmaite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: He is an Octarchal guard so you will probably find him in Octarch Salikarios' residence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Ask him to give you the information I request and an explanation for his silence!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I will pay you well, I always do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat turns around, not giving you time to answer.</td>
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
							$npcName = 'Oropher Telemmaite';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oropher Telemmaite</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Sir Telemmaite, sorry to disturb you while on duty. I am sent by Uri Djho-Maat to talk about Tevnaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite frowns.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Shh, lower your voice, citizen!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: You work for Sir Djho-Maat then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: By Xiosia.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite's head drops.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Indeed and he wonders why he has no news from you and the second champion for over a week now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: My apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: The other champion, Tebengrin Nilaiun, is...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: WAS...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: My apprentice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: It's common for Dermorians when one reaches a certain age, to teach the younger ones.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite complains about his situation.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Xiosia cursed me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Tebengrin is the worst thing that has ever happened to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: He never listens, cannot focus his attention more than five minutes, always complains.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: A real plague.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: And not only that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: He stole my bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: My wonderful and favourite composite bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: One I crafted myself, hours of work!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite seems very angry and tries to control himself so not to be inappropriate in the middle of the Octarchal residence.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I am not competing in Tevnaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I withdraw, I quit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I cannot suffer Tebengrin anymore and cannot do anything without my special bow, anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Please, tell Uri Djho-Maat it's over.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah... I see. And um what is a composite bow?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite has a kind of tender smile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: A marvel, a specialist bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Nothing better to hunt or practice mounted archery.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite winks.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I am not taking apprentices any more, not after that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I am sorry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, I was just curious. And why are you so sure that Tebengrin stole your bow? Why would he do that?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Because he's a plague to everyone, and above all to himself!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: He's jealous and vindictive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Instead of taking our duo for what it is, an exchange of knowledge, he is tortured by his need to do everything better immediately, instead of being patient.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite sighs and shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I can't take it anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: And I can't participate in the competition without my bow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I've used it so much that the wood adapted specifically to MY hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Tevnaa is too near now, I won't be able to have another bow as perfect made before it starts.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am back with disappointing news. Oropher has quarrelled with his apprentice and won't train with him anymore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I beg your pardon?</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Impossible!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: It is out of the question and far too late to change champions now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: My illustrious name and theirs are already linked on the competitions lists.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: All is ready, I can't retire from the festival, it would be a terrible loss of face, a disaster!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: They have been training tremendously hard on my very own circles for Tevnaa for a year, working on their muscles, perfecting their accuracy and reinforcing their link with their rivnak, again, no...</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Now about you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Here is your first reward for treating this affair quickly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat gives you a coin pouch.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks! That's very nice of you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Please, it's nothing really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: YOU, you are engaged!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: The champions I've chosen will participate in Tevnaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Settle this for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Do all you must, anything you can, anything...</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: You hear me!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: By all means possible they will participate!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Tebengrin lives in Ojaveda, I don't know where exactly, that's your job to find.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Ask whoever you find, a Dermorian guard maybe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Now go!</td>
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
							$npcName = 'Tebengrin Nilaiun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tebengrin Nilaiun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You are a hunter then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Not really original for a Dermorian, eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: After all, Dermorians often have a natural talent for it, and if it can help people, it's good for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I craft bows as well, it's my trade.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun steps into the nearby tent and grabs two mugs from a shelf.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Walking back he offers one to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Would you like a mug of tinga tea?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah yes, why not! Thanks Tebengrin, let us talk around a mug.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun smiles and hands you a mug of tinga tea. He serves one to himself and sits down.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: If I can help you with something, I am at your service.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I come on behalf of Uri Djho-Maat, Tebengrin. He is concerned about you and your master Oropher. You two are supposed to represent him in Tevnaa, are you not?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Oh...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun blinks and blushes, he seems uneasy suddenly and has an awkward look on his face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I am so very sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I should have sent him a message.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun scratches his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Indeed... It's a nice bow you have there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun unconsciously puts a hand on the tip of his bows grip and smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Thanks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I crafted it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: It's a composite bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I used a special Dermorian technique.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Other races have their own, but I prefer this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: It makes the bow very sturdy and supple, but of course it takes a lot of skill and perfect technique to keep the balance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. Is it the same as Oropher's bow then?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: No!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun grabs the bow and keeps it close by him, wrapping his arms around.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: This is my bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I crafted it myself, it took me hours!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Oropher...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: He is a wonderful warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I first met him in the Hydlaa Arena, some time ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: We became friends and, a sort of bond formed naturally.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: So he decided to offer to teach me, especially fighting in close combat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: We even hunted together and I showed him my trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: But after that, it became a nightmare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: He was no longer there for me and stopped teaching me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: He treated me as if I was worse than a simple object in his eyes, telling me horrors all day long, used me as a mule.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I never understood why he became like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I cannot...</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I could not take it anymore.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun shakes his head, he seems to hold himself not to cry in front of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah. You affirm that this bow is yours?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I crafted it myself I told you, with white oak and alder wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: You have to believe me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I am sorry for Mr Djho-Maat but I won't compete in Tevnaa, and I can't see Oropher again!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please, calm down Tebengrin. I understand your concern but you have to realise that Mr Djho-Maat invested a lot for the festival, you can't just drop out of it for personal matters. You could craft another composite bow and propose it to Oropher.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: But...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun shakes his head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Why would I do that for him, after how badly he treated me...</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I am sorry, I really am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I...</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I will participate in Tevnaa if Uri chooses another warrior to replace Oropher.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's impossible, it's too late. We need to find a compromise so you and Oropher can tolerate each other, at least for the festival.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun shakes his head again, not quite convinced.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I don't want to see him anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I am sorry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah. Well, I will see you later, Tebengrin. [This will take you down an honest path to hopefully solve the problems, you will have to find someone to help you, start here in Ojaveda.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun smiles and waves you off.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Bye.</td>
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
							$npcName = 'Pinayet Ullavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pinayet Ullavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Pinayet, do you have five minutes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Any time my friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Did you find Tebengrin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I found him and we spoke for a while. About this, I wanted to ask you, what do you know about the composite bow?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: The Dermorian model you mean?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Because there are several models.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: The particularity of the Dermorian Composite Bow is the use of two wood essences, which explain its name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: It requires a lot of skill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know who could teach me such a thing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Well, Tebengrin said he could craft them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: He always talks about being able to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Pinayet Ullavin smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Here in Ojaveda, I know Benack Yasoj who crafts Enkidukai composite bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: The StoneHammers as well created a kind of engineering masterpiece, I think they call it a "compound bow", a sight to see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: At last, there is the Ynnwn model for taller races.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to find a Dermorian Composite Bow to settle a quarrel. It's for Tevnaa, it's important.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Oh, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Ah, I wish I could help you myself but my knowledge of the bow making art is extremely limited, I am afraid.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Pinayet Ullavin ponders a moment then smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: I know who you could ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: Jjousk Carryt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: He's a fine archer and bowyer, so either he can show you how to do it or direct you to the right person.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pinayet Ullavin: He works in the Hydlaa Arena, I believe.</td>
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
						<td>YOU: Hello again, Jjousk. Could you help me with a bow problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: A bow problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes. [You explain to Jjousk the situation and your urgent need to craft a new composite bow.] Could you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I don't usually teach people how to make bows this complex, it takes up too much of my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: But I understand your concern and you asked nicely enough...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: So I will draw up some diagrams for you to follow yourself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah, thank you. Maybe I can help you in the meanwhile?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: How nice of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Yes I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Uh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Actually, I could make use of more Small Oak Wood Carved Boards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Let's say five of them?</td>
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
						<td>YOU: Here are your boards. [You hand Jjousk the boards.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt smiles and puts the boards away on his working table.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Better than a diagram, I managed to get my hands on a spare Expert Bow Making book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you the book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Here, this contains a Dermorian composite bow diagram.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: You can keep it, it's all yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Be aware the Dermorian composite bow uses exclusively white oak and threestem wood, all right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: These notes will help make other race versions as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Threestem? Not alder wood?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Alder?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: What a strange idea, never!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: A composite bow of this kind is made exclusively with white oak and threestem wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: This wood association is primordial even, because the property of each material combines perfectly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah? Couldn't a Dermorian use another essence for some reason?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Unless he's a complete novice, absolutely not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: It's their technique; they perfectly know which essences are necessary.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: No, it's definitely white oak and threestem, my friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: I must be back to my work now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right. Thank you very much! [You decide it is time to have a proper explanation with Tebengrin again, once you've crafted the bow.] May I stay a while to try crafting a bow?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jjousk Carryt smiles and nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jjousk Carryt: Certainly, YOU, go ahead.</td>
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
							$npcName = 'Tebengrin Nilaiun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tebengrin Nilaiun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's me again, Tebengrin. Please have a seat, we have to talk.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun jumps surprised, visibly nervous.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He obeys nevertheless and sits down in front of you, giving you a forced smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Hello, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One thing, though. Can you tell me again the wood essences used to craft Dermorian Composite Bows?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun trembles and presses his hands one against the other.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Ye-esss.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: It's white oak and alder, like I told you before...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You nod and add softly.] I knew it! You didn't craft that bow did you? It's Oropher's bow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun hesitates between anger and panic, you can visibly see it on his face. He finally frowns and explodes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Very well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: You are right, I didn't craft the bow, and I stole it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I couldn't take his arrogance anymore!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: He told me I was a plague!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: That I would never succeed in life because I was too stupid!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: You understand?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: How can one tolerate this every day!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Yes, I stole his wonderful and extraordinary bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I wanted him to feel weak for once, I wanted him to be the one empty and powerless!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun opens violently a chest he keeps in a corner of his tent and hands you "Oropher's Composite Bow".</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Here, take it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Give it back to him, I don't care anymore, I've had it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun trembles, hardly holding back tears.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please Tebengrin, sit down and calm yourself. I am a friend, I am here to help, you remember? You are an excellent hunter I heard, and I bet you can craft good bows as well. You have the time to learn and make better bows, you are still young. I have something for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun relaxes slightly and sits down once more.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Oh?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You give Tebengrin the Dermorian Composite Bow you crafted.] This can be your bow. I did my best to craft a good one. It's maybe not as good as Oropher's but it's yours, no one has used it yet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Tebengrin Nilaiun shows two large round eyes, just as a child in front of a marvel. He gives you a large smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Thank you YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: This is wonderful, please take this for your help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Now, you will show your people of what "wood" you are made of! And you will shine brightly in Tevnaa! Onward! Time to "wear" this bow to mould it to your hand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun laughs, venting a bit of his tenseness and nods eagerly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: You are right, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I can do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I will do it, I promise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: I will uh maybe just uh, avoid Oropher and train by myself as of now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It may be a good option, yes. If you are willing to learn more on the bowyer craftsmanship and play it fairly, you can still ask me. As for me, I will go and talk to Oropher and Sir Djho-Maat. Good luck Tebengrin.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tebengrin Nilaiun: Again, thank you.</td>
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
							$npcName = 'Oropher Telemmaite';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oropher Telemmaite</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hey Oropher, I am back with your bow. [You give Oropher his bow.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite takes the bow and his face lights up.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Fantastic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Well done, YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: My bow, my dear bow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Ah you have made my day!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oropher, we need to talk about Tebengrin. I understood your concern but I heard his story, as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: How did you obtain this bow?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: From him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've crafted him another bow and he returned yours, why?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Oh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: So he -did- steal it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite takes a deep breath and looks down.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Then you are a better teacher then I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I admit my stubbornness and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Maybe I've been jealous of his youth as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I went too far, expected too much, too fast from him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Whatever now, this should be placed behind us. Maybe you can try and talk to him again, try and settle this peacefully. But for now, let's have you both participating in Tevnaa. It's a great occasion to meet again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite nods and smiles, humbly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: You are a great person.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I will send a groffel to Sir Djho-Maat concerning my rivnak and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I promise to participate to Tevnaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: Thanks YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oropher Telemmaite: I would like to give you something, for all you did to help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Oropher Telemmaite hands you some plant strings.</td>
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
							$npcName = 'Uri Djho-Maat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Uri Djho-Maat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sir Djho-Maat, the affair you sent me on is settled. Both your champions are ready for Tevnaa.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat gives you a bright smile.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Indeed, indeed YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: My saviour, come here so I can embrace you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat grabs your shoulders warmly and awkwardly hugs you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I've received two messages, not five minutes ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: I am extremely pleased with the way you dealt with this affair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Uri Djho-Maat: Please accept this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Uri Djho-Maat hands you a large pouch of tria.</td>
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
