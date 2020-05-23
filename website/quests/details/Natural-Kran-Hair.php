<!doctype html>
<html>
<head>
	<title>Natural Kran Hair</title>

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
						<td>Natural Kran Hair</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/bend_the_octarch's_ear.php">bend_the_octarch's_ear</a> quest, Winch Access.</td>
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
							$npcName = 'Raul Ursino';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raul Ursino</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi ,I a looking for a job, do you have any open vacancies?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: You're just what I'm looking for, good Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: As a barber, I've been looking to enter a new market in hairstyling: wigs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Can you help me in this regard?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Splendid!</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: I'm thinking about wigs for kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: If you'd be so kind as to ask some kran in and around town about natural kran hair, or to give you kran hair, I'd be most appreciative.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Very well, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Off you go!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Raul shoos you away.-</td>
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
							$npcName = 'Grok Idon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grok Idon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am looking for some kran hair.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Kran hair?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: This makes no sense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: However, if this person is requesting it, he likely won't be able to identify something fake.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Have a handful of goujah fur, free of charge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I recently sheared a goujah for alchemical testing: my results were poor, so by all means just take some.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Anyway, you may want to consider getting it dyed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: There is a carpet-seller who dyes as a secondary profession within the city of Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I would seek him out and ask about purple dye - after all, if a kran was to have hair, purple seems like the most likely colour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Good luck!</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told you might have purple dye.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Purple dye?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Yes, I have purple dye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Way too much purple dye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I accidentally dropped a bag of roots that I use for red dye into a vat of blue dye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: And nobody wants purple dye: it's not in fashion right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: So please, just give me what you need dyed, and I will gladly do it for nothing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands over the fur.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec sniffs the fur and recoils.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: This might be the one item that gets an improved smell from dyeing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Into the pot it goes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec puts on some long gloves and dips the fur in a pot of purple dye, expertly turning it over in his hands for even coating. He then pulls it out and wraps it in an old carpet to dry it before handing it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: One pile of purple fur, on the house.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I don't suppose you need anything else dyed purple?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: No?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: No, I thought not.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brintec sighs deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Very well, Talad's blessing to you.</td>
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
							$npcName = 'Raul Ursino';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Raul Ursino</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Try this for the wig (Purple Goujah Fur).</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: What's this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Raul turns the fur over in his hands, examining and smelling it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Quite so!</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: There now, that wasn't so difficult, was it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Raul: Here, take, with the gratitude of Hydlaa's finest barber and surgeon.</td>
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
						<td>Rewards: 1 Crystal Glyph, 3391 Tria, 12200 XP.</td>
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
