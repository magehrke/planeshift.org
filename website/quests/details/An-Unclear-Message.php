<!doctype html>
<html>
<head>
	<title>An Unclear Message</title>

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
						<td>An Unclear Message</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Botany-of-the-Deeps.php">Botany of the Deeps</a> quest, Winch Access.</td>
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
						<td>YOU: I was told you can tell me about nolthrir magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Were you now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I am neither a nolthrir nor a blue way master, so I might not be the best informed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lifts a small potion from the desk next to him and looks at it for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But if you are sure you want my help, let us see what we can do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I want your help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yes, of course you do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The potion makes an odd bubbling sound and he quickly puts it down again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But tell me, who suggested you come to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It was Crosh.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Crosh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus suddenly smiles, the bubbling potion forgotten.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There are so many better people to ask, but you followed Crosh's advice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He laughs slightly, then falls quiet, his voice becoming serious and concerned.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: But then I suppose you would act on the words of a rabid gobble without pausing to think as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I wouldn't.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: So you do have some intelligence after all then perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will assume you only came to me out of appreciation for my vast knowledge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Next to Levrus the liquid in the potion begins to seep over the rim of the bottle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what can you tell me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, the nolthrir have an affinity for blue way magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I've heard it said they learn its use far more easily than mages of any other race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: On the other hand, they struggle with red way magic, but really, you'd need to speak to a nolthrir or a blue way specialist to learn anything more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And which nolthrir should I speak to?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, since I heard Lyrus is working on some new jewelry she will no doubt be far too busy to help you now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus slides his arm along the desk and through the spilled potion without realising it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And I suggest that you avoid that Niala creature upstairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: In fact, it would be quite rude of you to disrespect my wishes by speaking to her again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He starts scratching his arm absently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What you should do is speak to one of the nolthrir merchants who bring fish to the Dome to sell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: There is a representative of a fishing guild staying in Hydlaa at the moment I believe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know where I can find them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, as nolthrir merchants, especially those with fresh goods, use the Winch for transport, you might wish to start your search there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It's probably the only way for them to move things to the Dome from the lower levels quickly enough to stop them spoiling.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He continues to scratch at his arm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I think I heard that you are welcomed there, so this should not be hard for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is the merchant's name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I think I'm the wrong person to ask, but there are not so many nolthrir around.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Ask whichever you can find about magic or the fishing guild, just as long as it's not…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up at the ceiling and frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: …Her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: This part is optional.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Niala Xanao';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Niala Xanao</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about nolthrir magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: At the moment, I doubt I can focus enough to explain.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She folds her arms.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Levrus has become quite difficult to handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What did Levrus do to upset you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: He complains that I disturb him, while at the same time he bangs against things preventing myself and the others here from focusing on their work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: I think he does not understand how easily noise carries.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She makes a dismissive motion with her hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: But it's not of your concern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: We'll handle it, in time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: This part is optional.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
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
						<td>YOU: Have you been disturbing Niala?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You spoke to her?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I did tell you not to speak to her!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He swings his arm across the desk and knocks the bubbling potion to the floor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You need to learn not to interfere.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rummages in a box and pulls out a wand, then stretches up and hits the end of it against the ceiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: She deserves it for telling such tales!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I would have expected someone with such a keen interest in magic to understand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He waves the wand at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now off with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Go and find one of those nothrir to help you.</td>
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
						<td>YOU: Hello. Are you a member of the fishing guild?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: The Flying Fishers Merchant Guild to be precise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Hygrnn at your service.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He makes a slightly rushed but very graceful bow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Perhaps I can be of service my good Enkidukai?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Did you have some business with us?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Though right now I fear I might be hard pressed to grant immediate assistance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is something wrong?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: It's merely a personal issue.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lowers his head again, perhaps to hide his expression for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: But there is no harm in honesty I suppose, my good Enkidukai, and I have received a letter from home which implies grave misfortunes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I am very worried for my family, and I am trying to find a way to confirm if they are well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: The letter, you see, was badly damaged before it arrived and I am unable to read all of the text.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shows you the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: It's in my daughter's writing and there's something about her being “deeply concerned” in front of some words that I can't read.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Then it says “has been injured beyond all hope of survival.” So I am sure you can understand my lack of desire to look for new business prospects.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why don't you go back to her to find out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I am here as the official representative of our guild.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shakes his head a little sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: If I leave before I have secured trade arrangements with Vigesimi Stronghand our whole stock could spoil before we are able to bring it to market.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: The loss from this would ruin my family even if no other ills have found them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shrugs his shoulders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: My hands are tied as I would lose my contracts at the plantations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: This is our main industry friend and you must appreciate how damaging it would be to all of those on our level if we lost so large a crop without profit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I do not dare leave now, not for anything.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is there any way I can help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: No.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I don't believe there is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: You must forgive my rambling however, and tell to me what it is you needed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: For your kindness in listening to me I should at least hear your request.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I wanted to learn about the nolthrirs' use of magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I'm sorry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He frowns slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Under different circumstances.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: If things were not like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I'm sure you must understand good Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Perhaps you should seek out the proprietor of the magic shop if you did not speak with him yet?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I have heard he knows many things.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand. I'll find someone else to ask.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Wait…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He breathes in sharply then speaks quietly to himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Blue way magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Why did I not consider this course of action myself?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He meets your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: My friend, there may be a way to set my mind to ease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I can not leave here myself due to the trade negotiations, but would you be willing to carry a request to someone on my behalf?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He instantly appears more relaxed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I remembered that blue way mages often have the ability to see the true natures of unclear things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: There is a certain glyph, if I recall correctly, which helps greatly with such tasks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: As it is hard to ask for help without knowing exactly what to ask for first, I need you to find out the name of this glyph for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: divination</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: That sounds right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: How could I have forgotten the name at such a time?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He turns from you and begins to write out a letter on a clean and neat piece of parchment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: You have shown me you possess enough knowledge of the blue way that we can now pass on my request, if you are still happy to proceed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am happy to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: You have my gratitude.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds out the carefully folded letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Please take this to Archmaster Barrin Dhorod in East Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: If there is anything at all that he requires for his services return to me at once my good Enkidukai and it will be provided.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told you can help me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It's likely that I could help a great many people.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smiles, just slightly and with no hint that his statement is boastful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Blue way magic of course has very beneficial capabilities, but you will have to be specific as to what you require.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This letter should explain.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He unfolds the letter and reads.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Potential trouble at home.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Someone he knows perhaps injured.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: These may truly be grievous tidings, but with the damage to the letter that he received, all is unclear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin meets your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Tell me now, due to the distance he would need to travel back to the lower levels where the nolthrir make their homes, does he hope that I will use my magic to divine the truth of this situation and so save him the uncertain journey?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, he said you could use the divination glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This would be possible, under the right circumstances and with the correct knowledge of the situation.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He folds Hygrnn's letter, carefully and neatly and slides it away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Hygrnn will need to tell us more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The nolthrir I believe are fond of saying that one must follow the flow of things, so he will understand that we must not move against the currents in this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But firstly, you should tell me, do you have a divination glyph?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a divination glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Your progression in the way should be enough that you know better than to ask irritating questions while I work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: However, I will require that you gather everything needed while I prepare.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: For this, several things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: First you must bring me the letter that Hygrnn received.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I will need to see it for myself if I am to find out the original words it carried.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He falls silent for a moment but holds up a hand to indicate he is not finished.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You must also ask him which level it was sent from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Then ask him to describe this level, specifically the area where it was likely written.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He begins to shake his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But this won't be enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I will need to be able to envision this area in relation to the level it is on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This can be handled if you go to the library and speak to Jayose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You can bring me the books I have ordered from him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Also ask him to add an additional book called Layout of the Lower Levels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This should give me the information that I need.</td>
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
						<td>YOU: Barrin sent me to collect his order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Did he?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jayose points to a small and tidy stack of books nearby.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: He did tell me someone would pick them up today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Take them then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I need the space.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Barrin said he also wants a copy of Layout of the Lower Levels.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: This was not in his original order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: But it happens that I have a spare copy here for an order that was recently cancelled.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I will add the charge to the rest he owes me.</td>
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
						<td>YOU: Barrin told me he will need the letter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Kind Enkidukai, it is good to see you returned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I realised when you left that perhaps it would be required.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds out the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: But please, I would ask that you promise to take good care of it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You have my word.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Then you have even more of my gratitude in return.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He passes the letter across to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Please return to Barrin with all speed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I would hate to enter into negotiations with the vigesimi before answers are found.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He also wanted to know which level the message was sent from.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: She usually lives on the Shore level, but she had returned to the Lower Field to help us harvest some crops.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: That's where she would have written this I believe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He gives a worried smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I hope this will help Archmaster Dhorod.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you describe the Lower Field?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Well, it floods frequently and most other races find it unpleasant to remain for long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: My home is right on the water's edge and so it's often flooded, but this is good and healthy for the crops we grow.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have what you asked for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is pleasing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds up a divination glyph to show you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And I am now prepared.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So first of all, please give me my books.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are your books.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Very good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes them from you carefully then looks at you over the top of the books after peering at their spines.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You remembered the extra book as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You are impressively efficient.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lowers the books then holds out his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Now, where is this letter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This is the letter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Ah, just from the texture of the paper I can tell it was sent from the Shore or Lower Field.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He runs his fingers over the letter surprisingly gently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The nolthrir there have trouble with regular paper due to the moisture in the air.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The environment is not overly friendly to people or items that are not aquatic like them, and those wanting written records of business have to invest in paper with this special finish which protects it against the humidity of the Shore.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He turns the note in his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But which level was it sent from?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The Shore or Lower Field?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up from the letter again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You have some more walking to do if you forgot to ask.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: From the Lower Field.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That would be most likely, yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He finally begins to read the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Did you ask him to describe the place she'd have sent it from?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This is a thing I need you to check with him right away if you didn't do it yet.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The water's edge where it often floods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The best place to grow certain crops.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He nods while opening the copy of Layout of the Lower Levels and then turns a few pages.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I think I can visualise it well enough now to try and use divination.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You must be patient while I work though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The magic moves at its own speed, do you understand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Then I shall try.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He places the book down to hold the letter with both hands for a moment, before raising a glyph and closing his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She was sad while writing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He speaks slowly with no emotion, as though his attention is very far away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: And she asked the messenger to travel swiftly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The messenger tried.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: He placed the letter away in his bag, but the bag was ripped and he didn't know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The damp crept in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It made the ink run?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Here is the source of the damage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The messenger was on the Shore when it was done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His closed eyes tighten slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But now we must look further back, to see the words before they ran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I see…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you see?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sways a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I'm having trouble focusing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: There are plants near the water's edge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Fruits on them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Small.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Round.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Important somehow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: What are they?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A book in the library mentions edgeberries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Ah, so you have been doing some reading then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But I need more to help my vision.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: What are they used for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The nolthrir use them to sweeten food.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That's right!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He seems to relax slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: My vision is clearing now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I can see her writing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I think I understand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What was she writing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Not so fast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I can see her writing it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Hygrnn's daughter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He nods his head a little as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She wore a beautiful ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: A green stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Something special to her family.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: To her kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Do you know what the stone was?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A deep emerald perhaps?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That could be right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She was worried.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Worried she'd need to sell it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Such a beautiful thing, carved of deep water stones and so rare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She was scared her father would be sad if it was lost, but she couldn't think of anything else they might be able to sell.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why was she thinking about selling it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You remember what could be read of Hygrnn's letter, do you not?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He suddenly opens his eyes and looks deeply into your own.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Those words that made him so very concerned for those he loves?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin smiles suddenly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You can tell him his family is safe for now, as long he is successful in his current dealings here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You see, the thing that “has been injured beyond all hope of survival” is the edgeberry crop he left his daughter to care for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: She is considering selling her ring to pay for the losses it will cause their family.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin raises a hand and motions for you to move away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You should go and tell him quickly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: As much as this will cause him to worry for his business, it will set his heart to ease.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: He needs to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Take this back for him.</td>
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
						<td>YOU: Barrin explained what the letter means.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Then he has used his magic to view my family's wellbeing?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes the letter and you can see his hand shaking slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Please, tell me what I need to know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Barrin said the thing injured is your edgeberry crop.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: The edgeberries?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I was so worried that I didn't consider my daughter could be referring to the business and not the people.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds the letter tightly to himself as though now it reassures instead of worries him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: I owe you for this my good Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Though it seems I will have to be more careful than ever to win this contract from the vigesimi, but this is a small concern compared to what the letter might have said.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: My friend, may I ask one last service of you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Just tell me what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: My meeting with the vigesimi is very soon, but I must also see to it that Archmaster Dhorod is paid for his services.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Will you please take my payment to him so that I will not risk missing my appointment?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll take the payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: You have proven you are trustworthy so I have no hesitation passing this to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He hands you a small bag of tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Please give him my thanks.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He seems to consider for a moment, then hands you several loose coins as well.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: And these are for your own services.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: A few more than I originally planned to give you my good Enkidukai, but as you prioritised my problems above your wish for payment it is only fair.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He bows his head to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hygrnn: Be safe friend.</td>
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
							$npcName = 'Barrin Dhorod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Barrin Dhorod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hygrnn wanted me to give you this as payment.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So he is respectful of the blue was as most nolthrir are, even if he does not practice it himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: This of course is why I was willing to work before you brought payment to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin weighs the bag in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: The payment is actually rather more than adequate, considering that you did all the running around for me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He falls silent and studies you, his voice changing tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Tell me, after all of this, do you have interest in learning more about blue way magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: That is good to hear then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Blue way has more to offer than most realise and it would be good to see it more widely studied here, as it is on the Lower Field.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smiles to you and for the first time his smile seems fully pleased.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I have something to give you which might help toward this goal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you have for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I was able to acquire a spare divination glyph.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He holds it out to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: You will find it is able to vastly broaden a person's sight in many ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Be careful with it and you may learn great things in time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Probably you get one of the three glyphs randomly. However, we are not sure. Please send us an e-mail with the glyph you received.</td>
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
						<td>Rewards: 1 Divination glyph, 1 Sphere glyph[OR], 1 Poison glyph[OR], 30 Faction with Nolthrir, 10000 Tria, 15000 XP.</td>
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
