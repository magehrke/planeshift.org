<!doctype html>
<html>
<head>
	<title>Keen Conflict and Sword-Play</title>

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
						<td>Keen Conflict and Sword-Play</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Introduction-to-Combat.php">Introduction to Combat</a> quest.</td>
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
						<td>YOU: Hello Gregori, I want to learn the art of sword play.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Uhm, yes, good for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Why does this concern me exactly?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am hoping you would be able to direct me towards someone who would be able to teach me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald looks you up and down, seemingly judging your abilities.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And I suppose you think you know how to handle a blade?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I still have a lot to learn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Modesty?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Though, I hope it's not just to look good because I can't bear boot lickers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Nevertheless, I appreciate warriors that know their limits, they often are the best.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So, now comes an important question for you...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Which blade you prefer to fight with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Definitively a longsword. [Choice 1 of 6.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Classic straight double-edged blade, the perfect balance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To me, this can be a fatal weapon, if your smith is good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good, now perform two or three fencing moves and blocks, show me what you can do with that longsword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure. Enjoy. [You start executing some moves.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald watches you, arms crossed behind his back.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His expression is neutral and focused.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are clearly at ease with a blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You move smoothly, and you have a clean technique.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: But by Laanx you have no style!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I would be interested to work with you but I have no time to do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Thank you, have a good day.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait, am I really so unskilled!? I would be willing to do all I can to master everything I'm taught.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: All...uhm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Passion, motivation...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Say, if you can disentangle a situation reported to me, I think I could find time to introduce you to the Order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Order?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: In case you hadn't noticed, you are in the Arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The biggest in the Dome, if not the whole of Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It's not just fancy walls and hungry beasts, it is also a center for the arts of combat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It holds no less than ten academies dedicated to fighting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To use just two words: Warrior's Temple.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Indeed. I just didn't know about the academies. What order are you speaking about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I was referring to the most famous organisation dedicated to sword-play: The Order of the Keen Edge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This is the Order I manage and the Order that will make a name for you if I decide to let you in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks, I am genuinely interested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Klyros, I will give you your first lesson now, for free.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: For a true warrior it's 30 percent might and 70 percent intelligence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you cannot use this...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says, poking his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are as weak as a newborn child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Many do not understand this, they boast, seeking fame...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now, when a conflict erupts between members of the Order or their families, it is not might but intelligence that must be employed to solve it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This is part of my responsibilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Not that I like it when members of my Order show such stupidity.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you have to deal with a conflict?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald smirks but it seems more out of nervousness then amusement.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It's tightly tied to the history of the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Nobles practising sword-play, duelling constantly to show off their technique, to know who is the best, ending in hundreds of people killed stupidly in duels over the years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I won't tolerate any of this nowadays, in the name of the Order and in the name of intelligence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you need me to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Two idiots are making much ado about nothing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The affair needs to be dealt with quickly, but especially discreetly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And it would be fine with me if whatever you do can make them respect the tenets of our Order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Which are?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: All in good time, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: First, go speak to Warinn Klumdt and Terea Lohdren, separately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Listen to their stories, if we can call it that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Make decisions that will end the conflict properly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What if I fail? You are not worried about the outcome?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald smiles, meaningfully.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I am a sword master.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If they learn that I am coming for them, the conflict will stop instantaneously.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: But that would be too easy, no?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It is your trial.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good luck.</td>
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
							$npcName = 'Warinn Klumdt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Warinn Klumdt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Warinn Klumdt? I heard that you might be in a bit of a trouble. May I help? [Choice 1/3]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Uhm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: No...</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Well yes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Maybe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Warinn Klumdt grimaces at the memory.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: The other day, I was conversing with a colleague of mine in East Hydlaa, speaking of the drainage system I was commissioned to install along the walls there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Not an easy task, it will drive us to dig a ridiculous ditch and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: well, that's when a raging eagle attacked my colleague, literally tearing off his face with its claws!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: It was impossible to get the animal off off him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: I couldn't bear him suffering so I decided to end it with my blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: One thrust to the beast.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, I see. And the animal belonged to Terea Lohdren?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Yes and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Wait, how do you know about this, who are you exactly?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, words travel fast in town, Warinn. I heard about it... And of the duel...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Of course.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Warinn Klumdt clears his throat, embarrassed.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Honestly, I didn't agree with a duel, and still do not!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: But the Enkidukai went mad, she didn't want to listen, didn't care about my friend's state.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: All she was doing was shouting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Before leaving with her animal, she told me she would send me her witness for a meeting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: I accepted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: My honour was engaged, I was mad and shocked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand. What if I can persuade her to abandon the duel? Would you resign yourself from the duel?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: Absolutely!</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: As I said, the idea didn't come from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: But I regret nothing, I just wanted to help my colleague and would do it again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Warinn: You know, he is in the Hospital of Talad in Amdeneir and I am very worried about his health.</td>
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
							$npcName = 'Terea Lohdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Terea Lohdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Terea Lohdren? I heard about what happened to your animal. Are you all right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Did you really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Well no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I am not all right, not at all!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: You just need one damned imbecile to ruin everything, everything!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Quill, my rare and precious eagle, was a unique representative of his lineage!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: A pure breed I've raised and trained myself for years.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I called him the "Golden Eagle" because of his golden coloured plumage and his peerless speed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: He was a pure marvel!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: This breed was particularly sensitive to noise thought and this stupid dwarf was constantly shouting around his orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I told him to stop, he knew he was close to my bird's shelter, but did he care?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: No!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Terea Lohdren shakes her head, clearly on nerves, she stares at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: How do you know about this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Don't tell me you are sent by Klumdt or I will kill you too!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Like I said, I heard about your animal, the whole story. Words travels fast in town, Terea.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: And?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Of course I will duel this imbecile!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Do you think he given a second thought about me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Tried to understand why I was in such state?</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Of course not...</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I am sorry for his stupid friend but it was his own fault!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I told the dwarf countless times about the noise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Sometimes he was shouting and was doing so with a smirk!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I am sure he was doing this on purpose to annoy me and my animals...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand. Look, the duel won't save anything, nor give you your eagle back. There must be a more reasonable solution.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I am not searching to be reasonable!</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I want to make him pay.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I hear you, Warinn killed your eagle, yes. But as you say, he is not totally to blame.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Uhm...</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I guess you are right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: I can still bring the dwarf to justice, tell the guards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: Maybe I can win some money and restart my unique breed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Terea: If you can persuade Warinn to forget about the duel, I will apply this new plan, I guess.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Terea Lohdren sighs, looking deeply sad.</td>
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
						<td>YOU: Gregori, I've heard both stories.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald waits for you, arms crossed.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Tell me about the outcome then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I gave you what you needed to resolved this cleanly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've listened and spoken with both Warinn and Terea. They agreed to resign from the duel. I think I have been discreet and helpful.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald nods, attentive, he answers.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Indeed, indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: In fact Huarwar, everything, even a conversation, is a matter of strategic choices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And your choice was perilous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Instead of using the tool I gave you, you decided to take a longer road.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The tool?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Didn't I say "If they hear that you come from me, the conflict will cease instantaneously"?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It wasn't a trick, it was my way to analyse you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You lost time with empathy, trying to help instead of going directly to complete your task.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says vaguely angry.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Remember, you are a warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Your choice needs to be effective!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: We often have lives to save, Huarwar...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Anyways, the result is here I cannot deny it, the conflict is settled.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I hope you will have leared a valuable lesson.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: So, I will stick to my word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are now officially a Recruit in the Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Congratulations.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you. I hope to do better next time but diplomacy is important to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Even as Gregori nods, he seems to ignore your last remark.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Right, we start without waiting.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald unsheathes his sword, a wonderful piece of shiny platinum steel with a pommel shaped like two ulbernaut claws.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: My sword "Tarr", the infallible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Too long a story to be told now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Prepare yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will now teach you the first move every member of the Order learns, a classic of the fencing school.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It is a one-handed sword style which involves a slash and thrust.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: First, the Side Slash.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It consists of a simple sword attack whose goal is hitting with the blade's edge.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald executes the move several times, ordering you to do the same.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Right...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Repeat this move until you can do it while sleeping or at least until you stop looking like a drunk trepor on clackerweed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you, Gregori. Concerning the Order, is there anything I should know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You represent it anywhere you go, whatever action you do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Remember it and act with honour or you will invoke my wrath.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now, last but not the least, the tenets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah, yes. I suppose I need to know them well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: By heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: They shall become your life motto...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Tenet one: Fight with justice, your sword will protect the weak and defend the just...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Tenet two: Fight with honour, your sword will not strike your opponent's back...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Tenet three: Fight with bravery, your sword will spill the blood of the enemies not the blood of your comrades...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If you cannot remember this, shame on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Go to the Order's training room, here in the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The tenets are always displayed there.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you. Who shall I refer to for the other lesson?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: From here on, you will be taught everything you need to know, step by step until you reach a level we deem worthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Then, the real fun will start.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smiles, sheathing Tarr.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: When you think you are ready for another lesson, go to see Percival Hawthorne.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: He guards the Winch Gate in the Hydlaa plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now you have joined our order there are two other series of special moves you are eligible to buy, shield mastery for which you should see Remant Tovere, and two-handed where you should go and see Ondren Torr.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good luck recruit.</td>
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
						<td>Rewards: 1 Level in Sword, 'Single Handed Sword' Combat Move 'Side Slash', 10 Faction with Order of the Keen Edge.</td>
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
