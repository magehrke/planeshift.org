<!doctype html>
<html>
<head>
	<title>Nalri Looks Radiant</title>

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
						<td>Nalri Looks Radiant</td>
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
						<td>YOU: You look radiant.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri smiles and blushes a bit, which makes her glow even more.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Oh, you're too kind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I mean you're actually glowing. What happened?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Hmm, actually you're not the first to tell me that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I'm not sure what's going on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Do you want to help me figure it out?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I'll help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I just can't figure out why this is happening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Do you have any ideas?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is it magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: You think someone has cast a spell on me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Who would do such a thing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Have you had any disagreements with anyone recently?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: No, I've gotten along with every…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri pauses as she considers something.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: It couldn't be…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: He wouldn't…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I had some harsh dealings with Narwin Molstagh not too long ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I won't go into details, but I thought we had smoothed things over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Maybe you can discretely ask him if he is still angry with me and if he had taken steps to get even.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri pauses in thought again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: In fact, he owes me some gear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: See what you can get from him and pick up my order for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Then we can test it to see if there is any magic associated with it.</td>
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
						<td>YOU: Nalri sent me to get her gear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin briefly shows fear on his face but quickly collects himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: What does the wh – um, wench want?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Oh, yes, I do have something for her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hold on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin reaches in a bag and pulls out a package loosely wrapped in cloth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: These are the shield parts she requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin Molstagh hands you the package.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, umm, have you been working with magic lately?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin looks up and raises his eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Magic?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No, I don't use the art of magic meself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Why do you ask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Seems someone has cast magic on Nalri.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin Molstagh looks alarmed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well it wasn't me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Look, I have enough troubles so I don't need to go lookin' for any with – her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: We've had our differences but we're square now.</td>
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
						<td>YOU: Have you been doing anything else new recently?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Aha, well, yes, I have been expanding my skills recently and working on these shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: They are called radiant shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I can explain the process if you like.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'd like to hear how it's done.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: First we need the following items: A shield handle, six bronze bands, a bronze circle, a round shield shape, and either a round wooden shield core or a wicker shield core.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: You can buy those cores from a merchant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Gardr in Gugrontid sells some, I believe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Then you just put all of them together to make a radiant shield kit and use a riveter to assemble it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: You'll need a good amount of skill in both shield making and blacksmithing to be able to make everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: About fifteen lessons or so in each should do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Maybe one of those items has magic energy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Hmm, could be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: The ingots for the items I used should be fine, I smelted those myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Here, take these to Levrus and see if he can detect any magic properties.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: These are bands made from seven bronze ingots.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri hands you three bronze shield bands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Well this is three bands, but you'd need six to make the shield.</td>
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
						<td>YOU: Can you check these bands for magic properties?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus attention is elsewhere as he closes his eyes and mutters something, waving his hand over a small decorative box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Suddenly it begins to glow bright blue.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus opens the box and a plume of smoke rises up into his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, I'm sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That shouldn't have happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh well, I will try again later.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Magic properties you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Let's take a look.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus takes the bronze bands and slowly examines each one, holding them right up to his eyes, shaking them, and even smelling them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then takes one and licks it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Yep, there's magic in there alright.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He chants something, waving his hands over them.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The bands begin to vibrate and glow bright red.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Red way it seems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: These should be handled with much care.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'm not sure what might happen with long exposure.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus rubs dry the band he licked and hands all of them back to you casually.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: They seem to be making Nalri glow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well, I suppose if that's all this is, it's not too bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Perhaps even helpful if going to dark places.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: It doesn't sound like it does much harm otherwise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: The effects should wear off after spending some time away from the affected items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you like, I can remove their magic for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No thanks, I'll bring these back to Nalri.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: You can tell this Nalri to see me and I'll remove the magic energy from all the items she has.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Herself too.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Levrus smiles, gives you back the bronze bands, and turns his attention once again to the ornate box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Now, what are we going to do with you?</td>
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
						<td>YOU: The bands have red way magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: So it's the bands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Hmm, I made them myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I refined the ore, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Unless, well, if it's red way, maybe the magic remains even through intense heat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: After all, red way is based on the element of fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I got the ore from…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri eyes narrow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: It couldn't be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: He wouldn't.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I had some harsh dealings with Narwin Molstagh not too long ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I won't go into details, but I thought we had smoothed things over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Maybe you can discretely ask him if he is still angry with me and if he has taken steps to get even.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri pauses in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: In fact, he owes me some gear anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I hope that doesn't contain magic, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: See what you can get from him and pick up my order for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: You can find Narwin near the plaza.</td>
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
						<td>YOU: Nalri sent me to get her gear.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin briefly shows fear on his face but quickly collects himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: What does the wh – um, wench want?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Oh, yes, I do have something for her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hold on.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin reaches in a bag and pulls out a package loosely wrapped in cloth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: These are the shield parts she requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin hands you the package.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here you go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, umm, have you been working with magic lately?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin looks up and raises his eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Magic?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No, I don't use the art of magic meself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Why do you ask?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Seems someone has cast magic on Nalri.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin looks alarmed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well it wasn't me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Look, I have enough troubles so I don't need to go lookin' for any with – her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: We've had our differences but we're square now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: So don't be causin' no trouble.</td>
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
						<td>YOU: Your package.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri opens the cloth slightly and peeks in.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Yep, looks good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: So what did you learn about Narwin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Narwin says he doesn't deal with magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Hmm, maybe it wasn't him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri ponders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Please return to him and see if you can find out where that ore came from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: And do apologize on my behalf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I did not mean to accuse him of anything, though he may not be off the hook yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: We shall see.</td>
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
						<td>YOU: The ore you gave Nalri has red way magic.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin looks up and raises his eyebrows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You know this for sure?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well it wasn't me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Like I said, I don't use magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I got the ore in a deal with Thorian Gronk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You'll have to ask him where he got it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Nalri said to apologize. She didn't mean to accuse you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin raises his eyebrows then smiles a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Aww, well that's surprisingly kind of her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I didn't know she had it in her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here, take this shield part.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It holds a shield together.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You may find a use for it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin hands you a wicker shield core.-</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You sold Narwin some ore and it contained magic energy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian narrows his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I'm sure it's harmless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: The ore is perfectly fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Why, is someone complaining?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The red way magic is making Nalri Grimtorr glow.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian pauses a bit, then chuckles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Eheheh, sounds like an improvement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Look, here's what happened: I was in a bit of a, umm, time sensitive situation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I had lots of orders for ore, but very little time to get it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: There was this Lemur who offered to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: He didn't look like the mining type and he had one of those fancy red way wands, so maybe he blasted it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I suppose one could use red way magic for that.</td>
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
						<td>YOU: Red way magic was likely used to get the ore. It was not Narwin.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Thank you for getting to the bottom of this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I'm glad it was not Narwin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: What can I do to make this go away?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You must see Levrus. He will remove the magic for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Ah wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Thank you so much for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Now maybe folks will stop looking at me funny.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: You know what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: I think I have had enough with crafting these shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Here, take this diagram.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nalri: Maybe you can make use of it, or know someone who can.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nalri hands you a shield diagram along with some coins.-</td>
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
						<td>Rewards: 1 Wicker Shield Core, 1 Radiant Shield Diagram, 9922 Tria, 16400 XP.</td>
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
