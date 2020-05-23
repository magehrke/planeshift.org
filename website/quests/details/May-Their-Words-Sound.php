<!doctype html>
<html>
<head>
	<title>May Their Words Sound</title>

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
						<td>May Their Words Sound</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Expand-the-Gobble-Territory.php">Expand the Gobble Territory</a> quest, 6 Ruby Crystals, 5 Diamond Crystals, 5 Emerald Crystals.</td>
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
							$npcName = 'Azarnith';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Azarnith</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: nods to Azarnith.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith tilts his head, observing you curiously. After a while he bows his head and presses his fingers against his chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Azarnith: Kir ar Azarnith.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith kneels and uses his hand to tap the ground in front of him. He then raises his arm and beckons you to come closer.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith shakes his head yes and no, and with a motion of his head, he implores you to respond.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith nods his head and waits until you come closer. Once you do, he picks up a sharpened stick and starts moving it about, drawing thick lines in the ground. The contours he draws appear to depict a slender humanoid with distinctly tipped ears, and his legs disappearing behind something that quite possibly may be a robe.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith then draws a large spiral, partially concealing the figure behind it. Once he finishes the drawing, Azarnith points the stick in your direction, then pressing it back against the figure.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith slowly stands up and dismisses you with a motion of his hand.-</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know Azarnith?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Azarnith…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, I know him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He is a wise and noble Derghir, in his service forever devoted to our mother Nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You should feel proud that he wished to talk with you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet rubs his ear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now, if it was me he sent you to, surely he wishes you to learn the Derghir speech.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, I can help you achieve that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But before I do, I need you to help me with something else.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I am studying certain properties of crystals, you see, and I need some samples to continue my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: So this is what I need you to do: bring me five rubies, five emeralds and five diamonds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Additionally make sure to supply yourself with an additional ruby; you'll need it to learn how to communicate with the Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Please hurry, I'll need those crystals soon enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the crystals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That will do, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet places all of the crystals in his bag.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Now, back to your mission.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: There is a rapid way of learning how to communicate with the Derghir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Needless to say, magic forces are involved in it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet shifts his hand back into the bag and pulls out a small glowing crystal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This is a Derghan Bell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Through its sound-warping abilities, it allows its owner to understand the words of the Derghir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As Jardet speaks, the crystal appears to accustom itself to his speech, following the stress in his words by shifting the intensity of its own glow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I wish I could reward you with one already, but I'm afraid it's not that easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The Derghan Bells require different methods of enchanting, always depending on the varying personalities of their users.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Unfortunately, my limited knowledge in the area won't allow me to estimate what the ritual should look like for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But don't worry, there's a solution.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Go back to Azarnith and give him the ruby crystal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He should be able to do what I can not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Once he shows you what the ritual should look like, come back and tell me that Azarnith showed you ritual.</td>
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
							$npcName = 'Azarnith';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Azarnith</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: nods again to Azarnith and hands him the crystal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith accepts the ruby and sits down on the ground, placing the item right beside him. He uses his hands to draw strange signs on the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Afterwards raising his sight and gazing deep into your eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The gaze continues for an extended period of time and after a while you can feel an eerie force penetrating your mind, with time leaving you dizzy and confused. After a few seconds the feeling passes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Derghir nods his head and picks up the crystal.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith turns the crystal upside down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith uses his finger to mark a circle on its underside.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith crosses the circle by marking a line.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith raises the crystal high up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Azarnith slams it down against the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then nods his head and returns to observing the surrounding wildlife.-</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Azarnith showed me the ritual.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: So he showed you how the ritual should be done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: That's good news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: To perform it myself, I'll have to enter a deep trance and attempt to communicate with the structure of the crystal for your Derghan Bell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Once I do, you will explain to me what Azarnith showed you, step by step.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But please, make it as simple as you can; most of my thoughts need to be focused on the crystal itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Ready yourself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet takes a few slow and deep breaths.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: We begin.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet pulls out a small crystal. He holds it up before his eyes and in a lowered voice, he starts quietly chanting unintelligible words. After a while the crystal begins to glow, pulsing with short intervals.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet clenches his teeth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Say it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: turn it</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet turns the crystal upside down. It flickers with a bright light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: mark circle</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet moves his finger across the underside of the crystal, tiny green sparks following it until a complete circle is formed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: mark line</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet crosses the circle by rapidly moving his finger in a straight line. Suddenly the crystal releases a torrent of blue sparks that quickly disappear in mid-air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: raise it</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet raises the crystal high up above his head. The crystal brightens gradually and after a few seconds the green light it emits shines on everything nearby.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: slam it down</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet hurls the crystal against the ground. Upon contact with the solid surface, the crystal transfers its light into the earth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The surface around the crystal starts glowing faintly with a dull green light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The plants growing around the crystal begin vegetating with unnatural speed, covering the object completely in only a few moments.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As your eyes focus on the peculiar phenomena, it appears that some unknown force drains energy out of the plants. They dry out, slowly decaying and releasing the crystal they were hiding.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The crystal is now glowing steadily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet picks it up.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here, I believe this belongs to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet hands you the crystal, smiling faintly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I hope you'll make a good use of it.</td>
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
						<td>Rewards: 1 Derghan Bell, 30 Faction with Seeds of Wildwood, 7310 Tria, 15000 XP.</td>
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
