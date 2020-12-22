<!doctype html>
<html>
<head>
	<title>Canyt Needs a Stone Tablet Identified</title>

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
						<td>Canyt Needs a Stone Tablet Identified</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Mysterious-Derghir-Skull.php">The Mysterious Derghir Skull</a> quest, 1 Golden Ring.</td>
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
							$npcName = 'Canyt Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Canyt Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any errands you need done? I'm looking to pick up some tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I am very glad you asked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I was just heading out to do this myself, but since you are here the task is yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I search this area for ancient items, items people drop, and information lost to history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I need help for a certain item I found.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I know my sister Nyshyn has a book that could be of help in this matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: It would be nice of you if you could bring her this artifact and ask her to identify it for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: It should not be difficult, but she may ask you for help in return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: As a reward, I can give you something someone 'lost'…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt Klannarr winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: …not so long ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: No?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds easy enough.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Here is the Stone Tablet and a note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Tell her I sent you and give her the letter and the artifact; she will know what to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: As I said, you will find her at the ruins near Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Farewell and good luck!</td>
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
						<td>YOU: I'm here on behalf of your sister, Canyt.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: My sister again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: What is it this time?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Did she send anything with you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She sent a couple of things, actually. Here they are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Ah good.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn reads the letter, then turns the tablet over in her hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Do you have this stone tablet for me? »> give it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Hmm, this does not look too difficult to identify.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Should not take too long, but I would like you do something for me in the meanwhile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I was just on my way to my old acquaintance, Trasok Starhammer, the smithy in Dsar Akkaio.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: I wanted to ask him to inscribe some things I wrote into a ring.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: You should find someone who can give you a ring in Dsar Akkaio, I forget who though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Just go around asking about a golden ring until you find out who has one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Once you get the ring, find Trasok Starhammer and give him the ring along with this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nyshyn hands forth a note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Return to me with the completed ring, and I will give you the information I gather about this stone tablet.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a commission for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah, for Nyshyn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I owe her a favor, so you don't have to pay for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I will have it fixed up momentarily.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok tinkers on the ring for some time with a number of small tools.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Aha, there we are, 'samota de puntijholo mo tabei,' just as she wished.</td>
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
						<td>YOU: The ring shines in the light as YOU gives it to Nyshyn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Good work, this is most pleasing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Here is the stone tablet and a note for my sister with my findings..</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: It is a strange piece indeed: it seems to prophesy some sort of apocalyptic event during the crystal eclipse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nyshyn: Anyway, just give my sister the tablet when you see her.</td>
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
							$npcName = 'Canyt Klannarr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Canyt Klannarr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The translation is complete.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I'm so curious as to what she found out!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt reads the note and smirks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I might have struck upon something both valuable and dangerous with this tablet!</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Here, come.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Canyt reaches into a sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: I, ahem, 'found' this a few weeks ago but I do not really have a use for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: You might have a use for it; if not, sell it to someone who does.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Thanks again for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Canyt: Good luck on your travels!</td>
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
						<td>Rewards: 1 Sphere Glyph, 7360 Tria, 15000 XP.</td>
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
