<!doctype html>
<html>
<head>
	<title>Vresa's New Sword</title>

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
						<td>Vresa's New Sword</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Dhalia-Needs-a-Skin.php">Dhalia Needs a Skin</a> quest, 1 Dark Circle Ring, 15 Coal Lumps.</td>
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
							$npcName = 'Vresa Nohdiir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vresa Nohdiir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Need anything doing round here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Hum yeah why not!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Some of the gladiators here are getting better than I am at combat and I need a new weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Surely Harnquist can forge one for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Give me a minute, I will write some specifications .</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa writes a few notes down on a scrap of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: You can give him this paper and bring me back the sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: I will pay him later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Do you care to deliver this note?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can head that way right now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Now go get it, please.</td>
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
						<td>YOU: Vresa asked me to bring you this note.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Looks like a new order!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist carefully reads the note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: This request will be very difficult for me: she wants it delivered for the next tournament, and that's tomorrow!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I don't have enough coal for my furnace, and I need an already made blade as a starting point or I will never make it in time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now let's see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist ponders the situation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I got it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: There is one person that may have such a blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Barrin Dhorod.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Ask him about the experimental blade; he will know.</td>
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
						<td>YOU: What can you tell me about the experiment blade?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Barrin looks at you suspiciously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Hey, seems that you know too much about me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Who told you about my experiments?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist told me about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Ah, then I know which blade you are speaking about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: It's something I ordered from Harnquist for one of my experiments, it was quite expensive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Don't tell me he wants it back?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, he does want it back.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well, I won't give it for nothing, it's a valuable blade!</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: So let's make a deal, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I am someone that likes valuable accessories that look nice, even guady.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I've heard of a band of rogues known as the Dark Circle that wear signifying rings.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I believe such ring will suit my tastes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: They are pretty hard to get, but if you can find me one to wear, I will give you this blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Otherwise, no deal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the ring that you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Perfect!</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: I am bored of amulets: I have too many.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: But this is nice, and maybe I can even enchant it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Well, now it's time to respect my part of the deal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Barrin: Here is the blade you asked for.</td>
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
						<td>YOU: I have all the coal and your blade.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Good, I have everthing I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I am impressed you were able to convince Barrin to give back such a nice blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Come back in a few hours the sword will be done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist begins to smith the sword in his furnace with the blade you brought him and heats up his furnace with the coals. Come back in a while and ask me if the sword is ready.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is Vresa's sword ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Yes, Vresa's sword is done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Phew!</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It's hot here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'll put the costs of the sword on her account.</td>
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
							$npcName = 'Vresa Nohdiir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vresa Nohdiir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your sword is finished.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Thank you; that will help me a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: It took a long time, but I finally have one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa plays a bit with the sword, swinging it in the air and looking at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: As usual, Harnquist does exceptional work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: It was worth the wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: As a reward, I can give you a valuable glyph I got from a defeated opponent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: I won't use it, because I'm not a spell caster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Thanks again; you have been very helpful.</td>
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
						<td>Rewards: 1 Mind glyph, 3391 Tria, 10800 XP.</td>
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
