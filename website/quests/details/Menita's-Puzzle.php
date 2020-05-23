<!doctype html>
<html>
<head>
	<title>Menita's Puzzle</title>

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
						<td>Menita's Puzzle</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to test my mental strength.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita nods her head as she looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A number in the past have asked if there was some way in which they could prove themselves to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: And I always say the same thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would like to…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita cuts you off before you have a chance to finish your sentence.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Yes I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: This is a test of your mind, nothing else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: If you are ready tell me so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I shall create the test of you and you must find your way out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: You can leave at any time you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: There are marks I will create to let you leave, these are open at any point.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm not sure what you mean.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: A maze…</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I will create it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I will let you in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: If you can find your way out you will have proven your mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Very few people manage it on their first attempt so if you leave you can come back to me and I will let you re-enter.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will try.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita holds her staff up against your head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She begins to channel magic though it, swirling down her arm it wraps around your head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She then speaks to you “welcome to my maze” your sight goes fuzzy and you can feel yourself falling for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-When you reawaken you seem to have been transported.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Menita has created a maze in her head and has tapped into your mind to draw you in.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She then gives you a few more instructions “As you likely have no experience with anything like this, you must pick which door to pass through to move into the next room. If you find your way through all of them you will find the exit.”-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You can hear a slight laugh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The voice continues “Many give up so I have created points in each room, if you give up or get lost you can use them to leave to start over later.” As the voice says this you get the impress it does not expect you to succeed.-</td>
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
							$npcName = 'Janina';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Janina</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, I didn't think I would see anyone else.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: One…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: What are you talking about it can't be one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: One leads to backwards it must be 3…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Either 3 or 2…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: I don't know I can't decide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: You're here now you pick!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd pick door three.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Janina's eyes almost pop out of her head-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: YES!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Actually, no, you first.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why are you here?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Janina seems to literally turn a little green.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: The maze is a puzzle in a test in a challenge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: And I NEED to complete it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: I need to prove to him I can do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: I can find a way out, just like he did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Door after door after turn after turn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you have a plan, care to share?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: With you?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: NO…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: I've been here for hundreds of doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: And I'm not just going to hand over the secret for success in the always changing maze.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good, I'm sure you'll get out. But which way?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Who knows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: The last good stretch I managed was, was..</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Was…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Was just after I got here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: I think it was right left right middle right left right middle…</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: OH!</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: Then I quit and started over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: And was back where I ended up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: But that won't happen again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Janina: No way.</td>
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
							$npcName = 'Oriaa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriaa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you think you could help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Well well well…</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Well well well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Well?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa scratches his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: I've been going over and over this and round and round this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: And you know Menita is crazy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Only a crazy person would let people into their head with a game that she REALLY doesn't want you winning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Now I know one of these doors takes you back to that poor man who has been here for, well, thousands of doors by the sound of it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How long have you been here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Not that long, it seems like a few days but I can't be sure it hasn't been thirty minutes or 30 weeks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: I once managed to find myself all the way to a room with a bed on the wall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: That's quite a long way through.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: There is a book there you should read.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Give you a reason not to stay here to long and to just give up if you give up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How many people will I see here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: I've seen twenty or so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Most I expect give up, either that or they have better luck than I've had so far and make their way through the maze pretty quickly…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: That…</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Or there are so many rooms here that seeing anyone is a miracle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: I hope that isn't that case.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Which door would you recommend?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: One of the doors in the wings seems to take me forward, at least from what I can tell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: But Menita keeps changing the doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: They look the same don't they?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: But I'm sure she changes them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Always little differences.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa frowns and lowers his head hunching his shoulders as he peers about.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Tiny little differences, smudges on the handle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: A new scratch here, a missing one there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Shadows a little different.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Enough of a difference that I know that it isn't the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: And every time I walk through one, almost every time it's different.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then how do you pick?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: I stand here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa points at the left door.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Or there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa then points at the right door.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: Or up there, seems higher up there somehow, though it clearly isn't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: You just have to pick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: There might be some method to the madness in here but I haven't been able to find it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: If you work it out come find me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you help me pick?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Oriaa looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriaa: No.</td>
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
							$npcName = 'Jorann';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jorann</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, am I nearly out?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jorann grabs his basket close to his chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: The third?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: What have you heard!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jorann looks about as if unsure of anything.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Third can't be right him kra her they them kran they are everywhere.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jorann drops the basket and grabs his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: If they would leave me alone I could get out of this room for lunch with Mr Bread but all the doors lead back to here…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do all the doors really lead back here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: I go though doors and come here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: I go through other doors and come here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Other doors go here, some come here, some are just doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: The doors of doors are the ones you need to worry about those will get you in a door that is a door that isn't what it shouldn't be.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you ok?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Yep…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Doors and wood and camps and food with words and everything in between.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: This place is a place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: I will get out I must.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You here a slight smirk, an echo of a noise that didn't come from anyone present.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: I've been here too long not to stay here and get out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You've been here a long time haven't you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Time what, time, what, no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Doors…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Doors and door.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: It's all doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Door after door after doors after doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Nothing but wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Trees on walls and walls with gems and benches in spirals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorann: Nothing to get out.</td>
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
							$npcName = 'Menita';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menita</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got out…I can't believe I managed it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I was watching you the whole time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: I am pleased that you managed to complete it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: Many don't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menita: As a reward for mastering my task I offer you this gas glyph and this magic wand.</td>
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
						<td>Rewards: 1 Gas glyph, 1 Magic Wand Ornate, 35 Faction with Azure Order, 16400 XP.</td>
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
