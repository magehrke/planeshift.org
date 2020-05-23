<!doctype html>
<html>
<head>
	<title>The Cursed Hammer</title>

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
						<td>The Cursed Hammer</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Learning-Shield-Working.php">Learning Shield Working</a> quest.</td>
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
							$npcName = 'Kethzun Guthazik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kethzun Guthazik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look troubled, can I help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Do I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I guess I do.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun looks proud as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'm considered as one of the best crafters around, but, alas!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His proud demeanor falters, and his headfin lowers a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'm in big trouble now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It seems I've been cursed…</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Could you help me, please, Sir?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I will help you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Thanks, Enkidukai!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You're indeed a gift from the gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: It seems I have an enemy and he, she or kra has been enchanting my tools to make my job harder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Let me tell you more, will you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do tell me more about it, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Look, I have this hammer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun waves a hammer, holding it carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: But every time I try to hammer anything with it, it shocks me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I can't use it, and it's my favorite hammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'd be very grateful if you could identify what kind of hex it might have, and have it removed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I think Levrus is the best option to start with.</td>
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
						<td>YOU: Kethzun needs you to find what's wrong with this hammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, let's see, let's see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus hits his table lightly with the hammerhead. A soft 'brzap!' sound can be heard, and the mage lets the hammer drop on the table, shaking his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: What was that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It tried to zap me!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he picks it up and hammers it again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: “Brzzzzp!”</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Inexplicably, he hits the hammer again, this time with a zap, it recoils and hits him in the head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rubs his head while looking at the hammer closely and then shakes it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmmm, I am not sure, but it might be that the hammer has been cursed with a Lightning glyph…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus looks up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I can dispell it for one thousand tria, what do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here, the tria. Kethzun sounded very worried.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the coins and starts casting some spells on the hammer, murmuring some unintelligible words.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The hammer starts trembling and glowing red, doing this for a minute. Then stops, making a 'brzsssh…' sound and letting out a puff of smoke.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the hammer and hits his table a bit, making sure it's harmless.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Here, your hammer is ready to be used again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: See you soon.</td>
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
							$npcName = 'Kethzun Guthazik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kethzun Guthazik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go, your hammer is operative again!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Oh, that's excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Here, let me give you something for your time, oh, and reimburse you too.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun hands you a book and some coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Use them wisely, it pays off.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun pauses in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Still, I am curious who could have done this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'm just happy I have my hammer back, you've done plenty already, but do you think you'd be interested in investigating further for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll help you try to figure it out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Oh wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I'm afraid I don't know where to begin though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you leave it unattended or did someone borrow it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: No, though there was this dwarf last week that borrowed a hammer, but I gave him a spare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: At least I thought I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Now I'm not so sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I don't know his name, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: He was trying to sell beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I saw him talking with Njormik Carpenter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Maybe he knows him.</td>
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
							$npcName = 'Njormik Carpenter';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Njormik Carpenter</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you speak with a dwarf last week?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Last week?</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I meet a lot of people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Can you tell me about him?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kethzun said he was selling beer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: That kind of describes lots of dwarves.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Ah, but I think I know who you're talking about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I'm afraid I don't know his name, but I saw him go into the tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Maybe Jarda would know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: He works at the tavern here in town.</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: Hey, interested in one of my wares?</td>
					</tr>
					<tr class="quest_npc">
						<td>Njormik: I've got great deals on custom furniture.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Njormik grins.-</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you speak with a dwarf selling beer last week?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Hmm, perhaps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Lots of brewers come in here thinking they have the greatest brew ever.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda raises his eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Now that I think about it, yes, there was a dwarf who came in here last week who stands out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Why do you ask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He may have borrowed Kethzun's hammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Oh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Kethzun's favorite hammer?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: He loves that hammer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jarda ponders for a bit then snaps his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Yes, he was selling beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: He ordered a mug and remarked that his was better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Of course that's what they all say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: What was his name…?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Normind?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Narwig?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: Something like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jarda: He was headed to Hydlaa.</td>
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
						<td>YOU: Did you borrow Kethzun's hammer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: The smithy in Amdeneir?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Yes, he gave me a hammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I was working there for a bit but forgot my hammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: He gave me one but it wasn't very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I told him I needed to take it to Hydlaa to finish my work and that I'd bring it right back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: As I was leaving I saw another just laying there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I decided to switch it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It was only for awhile and I didn't think anyone would even notice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Anyway, I returned it, so what's the problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It was cursed with a spell.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin raises his thick eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well it wasn't me, I don't deal with magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It did go missing for a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I got worried that it had been stolen, but it turned up a few minutes later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ask Harnquist about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Come to think of it, I did get a jolt from it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I thought it was the anvil, but I was really done anyway so that's when I took a quick pterosaur trip to Amdeneir and returned it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I put it back exactly where I found it.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you see Narwin working here last week?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Why yes, he was here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I remember because there was a disturbance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Narwin has a tendency to hum while he works and it apparently annoyed another.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I believe it was Hamel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The two had words and I had to break it up.</td>
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
						<td>YOU: You had an argument with Narwin last week?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Ah that trepor kissin'…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: He may be revered for his great stories of adventure, but I told him to shut up while we were working.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Always with the humming.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I couldn't take it any more so we had words.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did you mess with his hammer?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel snickers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I bet that showed him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Serves him right for leaving his hammer unattended.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I just put a little jump to his work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel snickers again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I'm sure he was shocked.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel laughs and slaps his knee.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The hammer was borrowed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hamel slaps his forehead.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Ugh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: The clacker lover doesn't even have the decency to use his own equipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I apologize for any inconvenience.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Had I known it was someone else's…</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Was the spell removed at least?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The hammer is back to normal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Ah good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: Apologize to the owner for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: It was a silly thing to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel: I never meant to cause trouble for anyone else.</td>
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
							$npcName = 'Kethzun Guthazik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kethzun Guthazik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You tell Kethzun the story.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Ah interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: So the dwarf took my hammer without me knowing about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I was called away for a bit and when I returned, the hammer was on the table here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: I never knew it was gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: You've helped me tremendously, Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: At least now I know I wasn't the intended target.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: Here, take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun grabs a tia pouch and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: And you can have this other shield manual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kethzun: With the other one, it should help expand one's shield making experiences nicely.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kethzun hands you a war shield manual.-</td>
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
						<td>Rewards: 1 Warrior Shield Diagram, 1 War Shield Diagram, 25 Faction with Crafting Association, 4391 Tria, 23000 XP.</td>
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
