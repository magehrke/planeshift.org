<!doctype html>
<html>
<head>
	<title>Stabbed Backs and Changed Faces</title>

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
						<td>Stabbed Backs and Changed Faces</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
						<td>YOU: Have any work you need help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: No.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori seems slightly preoccupied, more interested in watching her surroundings than in conversation, but spares you a quick glance. You notice she's chewing something.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Or actually, if you really want a job to do…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She glances around again as though wary.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's why I asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Fine then, if you are absolutely certain.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She studies you closely and frowns.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Like I said, it's why I asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Okay, I'll tell you about this little problem, but it makes me uncomfortable to talk about it much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: It's a little…</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She gives you a slightly hopeless look and reaches out her hand to offer something to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Take a bite of this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She speaks quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: We'll just pretend we're taking a break together, enjoying ourselves.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Accept the food.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Just some biscuits I picked up in the last market.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: The cook was such a good salesman that I took more than I could eat alone anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Go on, they're really tasty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Try it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Eat.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You are morphed into a Dermorian!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: There, that's better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: We can talk much more easily now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You suddenly feel something, like your insides are twisting and your face feels hot. It's like your skin is melting and you want to scream, but then the feeling passes and Lori is smiling down at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You realise you are on your knees as she bends down and whispers into your ear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You can't back out of this now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I'm sorry, but you have no choice other than to help me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What have you done to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: A simple curse.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She keeps her voice quiet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You see, you look just like me now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: It's entirely possible that you'll be mistaken for me wherever you go and this means my problem is now your problem as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: So you have no choice other than to solve it for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Do you understand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you mean?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well if the guards see you now, they'll think you are me and they might be quite quick to hurl you out of the gates before you get a chance to talk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: They are not too happy with me at the moment, even though I have done nothing wrong.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles at you; it's a sad and frustrated sort of smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: So you are going to have to do what I say and figure this out for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you want me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Oh, don't look so worried now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: There'll be a reward when you are done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She relaxes slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: There was a vase that went missing, quite a precious thing from what I heard, and the guards have this idea that I was involved in the theft.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Someone apparently told them they saw me taking it, but I didn't of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: It's not really the sort of thing I get involved with.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what do you expect from me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You need to fix this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Find out the truth so we can prove to the guards that I am innocent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I want my name cleared so that they stop looking for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How would I do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I don't think the guards will listen to a word either of us has to say, not unless the vase happens to show up again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She leans toward you slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I heard that Laure Eves knows something about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: So you should go and look for her out on the roads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Bribe her, threaten her, do whatever it takes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Just make her talk and then see where things lead from there.</td>
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
							$npcName = 'Laure Eves';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laure Eves</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Laure…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Lori?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Can't say I was expecting you to be out here at the moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure chuckles while inspecting the blade of a knife.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Thought you'd be scurrying off into some hole like a clacker or…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up sharply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Hah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You ain't her!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure almost doubles up laughing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's right, I'm not Lori.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Well, obviously.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She struggles to straighten up and you notice the knife is pointing ever so not subtly toward you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Talking like that an' all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: No way you're her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Some trick she must have pulled on you, stupid tefu-brain Dermorian, or wait?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Whatever you are.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She flicks the knife dismissively.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Go on, away with you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to know who set Lori up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Don't now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You'll make me cry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: With amusement.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She wipes her eyes with her empty hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: What in the whole clacker infested Dome would make me want to help you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Tell you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Well I…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She slides the knife away somewhere and grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: So, willing to take orders are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: That could work; maybe we can be reaching an agreement then, what with the way you look just like Lori and all.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What would this agreement be?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Simple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You listen close now, because what you do is this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Go and find Nyshyn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure waves her arm behind herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Over that way somewhere I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Then you say to her, and you say it just like me now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure' voice shifts slightly, sounding more like Lori's voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You say “The job is done and you need to send the payment right away.”</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her voice returns to normal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Nothing else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Think you can handle that, Lori-face?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fine, I'll do it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Ah, the clacker has a brain after all!</td>
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
						<td>Laure: What are you waiting here for then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Get on with it!</td>
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
							$npcName = 'Nyshyn Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nyshyn Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Nyshyn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Lori?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn gives you a careful look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Something wrong?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What are you doing all the way out here right now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I came to tell you that the job is done. You need to send the payment right away.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: So soon?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn folds her arms, looking thoughtful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I didn't expect things to move so quickly, but this is good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I'll see to it that it's sent right away, but Lori..?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You don't look right somehow and you sound a little rough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Send someone else next time with an octa or so to buy their silence and stop fussing over these details in person.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles and turns back to whatever had her attention before you arrived.-</td>
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
							$npcName = 'Laure Eves';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laure Eves</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I spoke to Nyshyn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Did you now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure looks you over then chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: And did she suspect you at all?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She didn't suspect me; she just seemed to think I was ill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: She thought you were..?!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure' words trail off into laughter, but it cuts short and she becomes brisk and businesslike again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: That's good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Really good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: I can make use of that I think.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I did what you wanted. Will you help me now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Oh, calm yourself down and sure I'll help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Laure doesn't go breaking her word on a business agreement, even to Lori-faced clackers like you my little friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: So I'll give you the facts nice and straight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: The person responsible for our dear Lori's troubles is a man named Kisatol, but you better get one thing straight in your mind right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: If you want that vase back from him, you will need a clever trick or two, or he will catch you in your game.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And let me guess, you have a trick in mind?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: I might begin to think you're starting to know me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She drops her voice suddenly as she pulls a rolled up letter from her belt and swats you with it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You don't show this to anyone you hear, or Ukabnu will have my hide and then, just as soon as I drag myself out of the Death Realm afterwards, I'll be having yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: And that's only if I don't manage to plant all the blame onto you before she guts me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She leans back and, despite her words, laughs pleasantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Now you have to take this to Kisatol, but you have to play this even more carefully than you did when speaking to Nyshyn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Are you listening?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm listening.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You better be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Now, when you go to Kisatol, you keep your face covered or stay in the shadows so he can't get a good look at you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: No point risking that he'll recognise your precious Lori-face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Then what you'll do is tell him that you are a member of our little group here, say Ukabnu sent you, and then you hand over the letter and wait until he reads it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Then he'll pass you a nice locked box with the vase inside and you have to head right back here and pass it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Without Ukabnu catching on!</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Do you understand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Make sure he doesn't see my face, give him the letter and don't leave before he reads it. Got it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: And don't you forget it then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: It's your skin that's on the line here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She thrusts the letter into your hand then raises her own and waves you back toward the road.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You'll find him in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: How you get there's your problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Maybe head to Gugrontid and fly if you want to save yourself some bother with the guards.</td>
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
							$npcName = 'Kisatol Gathoji';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kisatol Gathoji</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kisatol, I have something for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol gestures toward the shadows in the corner of the tent as though you are not alone and are being paid attention to.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Trepor-kisser.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: What do you want?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Quickly now!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ukabnu sent me. I have a letter for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Well, will you let me get a look at you then?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes a step toward you, but then laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Not that it matters who you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'll know the writing if Ukabnu sent you, so show me this letter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Give Kisatol the letter.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Let me see that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol unfolds the letter and stares at it for a long moment before speaking quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Didn't think she'd be wanting this so soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Tell you what, I'll hand this over if you can answer a simple little question for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what would that be?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I want you to tell me, why are all the crawling little clackers Ukabnu sends out for fetch and carry work such nervous little cowards?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He laughs and steps toward you again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Say nothing.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol waits for a long moment, just staring at you, before he finally speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: No opinion then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Or too scared to give one?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: That's good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Though you'll have to speak up at least a little if you want anything from me now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So will you give me the vase?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kisatol studies you as though thinking and then nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: It's locked up all nice and tight, and since they won't have given you the key, you'd be wasting your time to try and get the thing out without breaking it, so sure, I'll give you it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He moves to the side of the tent and carefully lifts a very secure looking box from the shadows there, before walking back and offering it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: Just you see it reaches Ukabnu safely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kisatol: I'll be wanting my cut or I'll see there's trouble.</td>
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
							$npcName = 'Laure Eves';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Laure Eves</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the box.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: So you do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure stares at you for a moment and then nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You didn't do bad with this Lori-face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Not too slow about it either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: So, let's see what's in that box shall we now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Will you open it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure slides a small and rusted looking key from an equally rusted chain and cracks a grin at you before she inserts it into the lock.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Did you expect something more sophisticated?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She laughs and struggles to turn the thing. There is a loud, unhappy sounding click.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Heh, for a moment there I thought the key would snap.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure flips back the lid after checking that Ukabnu is still not paying any attention.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure turns the box, it's lid now up, to show you the delicate vase that is carefully stored within.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Oh don't worry, you can have it little Lori-face.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Hand this over to the one you've stolen a face from and she can make things all better I'm sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Of course, you need to get back to her, and I dare say the guards will be watching…</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Want some advice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: The guards won't be letting you through the gate, not looking as you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: But well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Peterosaur handlers ain't so discriminating, if you catch my meaning or…</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: There might just be another way, if you don't feel like paying for their help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her grin widens.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Come on, learn in a little closer; it's a secret.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: I'll whisper it in your ear.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Move forward.] Tell me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Laure reaches up with one arm, gripping your shoulder, drawing you closer to her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: There is a way my sweet, precious little Lori-face, that the guards will never see you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She tightens her hold on your shoulder.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You have to be careful of course…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As close to her as you are, you don't see her knife until you feel the tip of it brush against you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: It's just a bit of a gamble in the end my silly, sweet clacker, but if you move just right and act just right, then just like you didn't see my knife until it tickled your skin, they won't see you either.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She waits for a very long moment before withdrawing the blade and then pushes the box toward you, an amused smirk on her face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: Just wait until its dark enough, cover your face as well if you can and they won't see it's you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: You should have learned this already.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She flicks her knife toward the road as though to point you there.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Laure: So get moving and wait around the gate until it's dark.</td>
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
						<td>YOU: I have the vase.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori stares at you for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Like looking at a mirror…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She shakes her head as though to clear it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Show me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Hand Lori the box.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori takes the box and flips back the lid before smiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Well that looks about right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Not that I ever saw the thing before myself, of course!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: But it seems you saved me quite some troubles here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I just need to plant it somewhere for the guards to find, make it look like the stupid merchant just misplaced it maybe, and then everything should sort itself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: But now what to do about you…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You need to lift this curse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Do I now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: What if I like the idea of another me running around to take the blame anytime I run into problems?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You'll regret it if you don't.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori takes a step back from you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Oh don't make a scene.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: What would you even do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What could anyone who looks just like you do?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori pales suddenly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You could do anything and people would think…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She drops her voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: No, you mustn't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: You do realise I was only joking around with you, don't you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I wouldn't be stupid enough to leave you like this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I even planned to give you a gift for your trouble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then lift the curse, please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You change back to your normal form!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori nods her head vigorously and pulls a strange Blue Way glyph from a small pouch on her belt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She presses it between her palms and closes her eyes for a moment, then whispers a quick string of words so quickly that you can't catch any of them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: There…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She watches you anxiously, then a strange feeling flows through you, like your skin is twisting. It's not painful, but leaves you feeling dizzy.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is the curse gone?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: It's gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Of course it's gone!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I hope you didn't think I wouldn't be able to fix this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori starts to slide the glyph away again and turns her back as though she is done with you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hold on, you mentioned a gift for my troubles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori freezes in place for a moment and then looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I suppose I did, didn't I?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She pulls the glyph out from the pouch again and runs her fingers over it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: I suppose if I lose this thing, there'll be no evidence on me that I used you this way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: And well, maybe it will buy your silence.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lori extends her hand and offers the glyph to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Accept the glyph.]</td>
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
						<td>Lori: So we understand each other then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Since you were so professional about it all as well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She tosses a small pouch to you and you hear something clinking within.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: That'll cover any expenses this little venture brought you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lori: Now just remember, none of this ever happened.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She turns again, holding the box and moves away.-</td>
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
						<td>Rewards: 1 Polymorph glyph, 25 Faction with Thieves Organization, 5130 Tria, 13600 XP.</td>
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
