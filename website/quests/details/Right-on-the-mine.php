<!doctype html>
<html>
<head>
	<title>Right on the mine</title>

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
						<td>Right on the mine</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 5 Iron Ores, 5 Clacker meats.</td>
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
						<td>YOU: I see many Stonebreakers in Hydlaa, why are they so busy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Stonebreakers are always busy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison stares at you with a faint smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: But, yes, lately I heard some rumors I'd like to check.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Do you want to help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, why not, there could be something worth to learn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison hair waves in the air while she nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Go to Hamel Warson, here in Hydlaa plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Ask him if he has any jobs for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Do what he asks, and see if you can find anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Then once you are done return to me and tell me what you have found out.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to work for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: So you've been listening to gossip?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: And you're assuming I'm searching for workers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel raises a hand to stop any answer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: You want to be busy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I have no problem with that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I need provisions and minerals, you can get them for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's start with the mineral, how much and where can I find it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I need five units of Iron Ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: You can buy it from any miner, here in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Otherwise you should ask various merchants.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Which kind of provision, and how much?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel nods and raises his thumb.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Some food.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Ask Rolara Hammersong, I have a sort of arrangement with her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel raises his forefinger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: And some beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: For that ask Narwin Molstagh, alas it seems he doesn't like our arrangement anymore, maybe you'll need to be creative.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: And…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel looks into your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Don't ask anyone else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Only Rolara and Narwin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Return when you've both beer and food provisions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the five units of Iron for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Oh, I'm so glad to see an honest Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel picks a big sack from within a group of bags on the floor, he gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: A honest payment for an awesome job well done.</td>
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
							$npcName = 'Rolara Hammersong';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rolara Hammersong</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hamel told me…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara stops working and snorts.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Hamel…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Hamel…</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Hamel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: How am I supposed to work so fast?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I gave the last shipment to one of Hamel's delivery boys.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I finished the raw materials, and I am late for the other contracts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There has to be something I can do for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara bits her lips, looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Let's try your way, go and find me five pieces of Clacker meat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I will prepare them for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: They will make nice provisions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the Clacker meat you asked for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I don't like to work for Hamel.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara washes her hands in a bowl, then she takes the meat from you. She starts cutting and slicing it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I'm doing it only because it seems the only thing to do to support us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Don't ask.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Time is running.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara finishes packing the meat and hands you the provisions.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Here you go.</td>
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
							$npcName = 'Narwin Molstagh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Narwin Molstagh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hamel sent me for the beer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I was expecting someone like you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin sits on a little barrel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: But I will repeat what I told the last one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I quit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I don't work for Hamel anymore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I ask why you want to quit?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Why are you asking me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin raises a fist, his face twisted in rage.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Even though I don't mind how bad things are, there are some things we should never do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: And if he dares to ask Nal…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin snorts and grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I will only quit, I will not betray anyone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: This is none of your business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Leave me.</td>
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
							$npcName = 'Nalri Grimtorr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nalri Grimtorr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to persuade Narwin to give me some beer for Hamel, can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: So Narwin is still making trouble.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri puts her hand on her hip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I will solve this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Tell him I don't want to quarrel again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: He will do his work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: As always.</td>
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
							$npcName = 'Narwin Molstagh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Narwin Molstagh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Nalri told me that you must do your job.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Nalri!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin sighs sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I hate this attitude.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Do you know why…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin stops talking and looks down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Sorry, I can't break my word.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: But I want to let you know that I'm doing this only because otherwise Hamel will use Nalri in his schemes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: People like Cilay Mecur would never accept behavior like this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin grinds his teeth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: If Hamel asks you to go to Gugrontid don't follow his orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Go there and talk with Gardr Keck instead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You will understand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin stands up and gives you the barrel, his demeanor changing to a smirk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here, take this barrel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I call it…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He moves his hand through the air mimicing a marquee.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Narwing Beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Catchy, don't 'cha think?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who is Cilay Mecur?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: One who would never accept…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin chest enlarges while he inhales. Then he takes a long sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: A Keeper of the Hammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I haven't seen him in a long time.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The beer and the provisions you asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: That's very, very, nice of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel nods, licking his lips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Please accept this as a reward for your job.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you need anything else?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Uhm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel stares at you, his pupils growing wide.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I think that I can use someone like you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Honest and efficient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: But this last work needs also discretion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel raises a hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: And if you accept you can't quit anymore from the job, I need you to finish this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Can you handle this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What to you mean by discretion?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I need you to get something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: But if other people find out about this…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel sighs and closes his eyes for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Some people want to steal ancient artifacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Hammer artifacts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I found them, but they are too spread in a large territory.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: If anything slips your tongue my enemies will undestand everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: They know you work for me, and if you start asking they will put the pieces together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I can't risk that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Very well, tell me what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I will be brief.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel licks his lips.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Go to Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Find a Nolthrir named Lyrus Lospur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: She is expecting you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Take the package and return it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: You can look in the package if you wish.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hamel sent me here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I was expecting you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lyrus takes out a list from her vest, checks it then looks at you. She takes a package from under a sheet.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: This is for you.</td>
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
						<td>YOU: Can you tell me something about Hamel Warson and his business here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Really?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr gives you a long stare.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You worked for him without knowing what he is up to?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr makes a sound that seems like squeaking rocks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I will answer you: Hamel is waging war on Gugrontid.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Waging war?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Hamel spread word that he is gathering iron and provisions to send miners here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But you know what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: He has no right to these mines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The city of Gugrontid will never allow him here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm sure Hamel will find an agreement with you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Gugrontid will never give away the mines, they're the main source of income of the city.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr shakes kras head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Hamel knows that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: So he's gathering provisions and iron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Iron to create weapons, and, you know, a large amount of provisions is usually an omen of a big army.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There's surely something we can do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I heard a name, Narwin Molstagh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Seems he tried to stop Hamel, but Hamel has the community of dwarves behind him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr closes kras eyes for a short moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: No.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: The minority will never betray their brothers and sisters.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can I do to stop this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Hamel is bringing artifacts back to the dwarf community.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Dwarves are pretty tied to the belongings of their ancestors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Alas these artifacts are on Kra's land.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: We will never find an agreement.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr eyes become darker.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: But there's always bad guys in both factions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Some Kran asked for too big a price, blackmailing the dwarves, and some dwarves started to steal the artifacts.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I don't know who started it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I only know that the war is nearer every day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Only one request.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Hamel will ask you to get a package for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: Don't bring it to him, bring it to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This package is for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: You made the right choice, Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gardr takes a big sack from kras desk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gardr: I want to show you the gratitude of Gugrontid.</td>
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
						<td>YOU: Seems Hamel is taking artifacts and wants to wage war against Gugrontid.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Alas, you confirm the rumors I've heard lately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: We didn't expect that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Amidison sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I will inform the Octarch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I hope he can do something about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Perhaps come to some agreement between the dwarfs and the Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Thank you for your help.</td>
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
						<td>Rewards: 31476 Tria, 19200 XP.</td>
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
