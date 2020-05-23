<!doctype html>
<html>
<head>
	<title>Finra's Gift</title>

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
						<td>Finra's Gift</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Finra's-Feast.php">Finra's Feast</a> quest, 1 Iron Ore, 1 Gold Ore, 1 Diamond Crystal.</td>
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
							$npcName = 'Finra Neticlo';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finra Neticlo</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Need anymore help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra looks at you curiously before his face breaks into a smile as he recognises you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: You have helped Finra before!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Do it again?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I am here to serve.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra needs a gift!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: It must be amazing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: There is no gift like this gift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Go to Charisa Malod and ask her about gifts, she'll know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Go, please, Kran.</td>
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
							$npcName = 'Charisa Malod';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Charisa Malod</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told you know all about gifts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: You want to know about gifts?</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Gifts for a lady, perhaps?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa smiles fondly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Most of the jewellery my husband gives me comes from…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa looks around carefully making sure nobody can overhear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Trasok Starhammer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: He makes some pretty things in his free time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Most women would love something pretty.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa looks you up and down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: You aren't embarrassed, so I imagine you are asking for a friend then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: No matter, just tell whoever it is to use Trasok…can't go wrong that way.</td>
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
							$npcName = 'Finra Neticlo';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finra Neticlo</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Charisa recommends Trasok for all your gifting needs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Oh, Finra has heard of that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Yes, it will be perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Go to Trasok, get one for Finra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Please. Finra will reward you well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra wants necklace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Ask Trasok about it for Finra.</td>
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
						<td>YOU: I am looking for a necklace please.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok gets a decidedly sour look on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Aye, I make necklaces, but don't let the word get around, y'hear?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok's look brightens a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Let's see…I've been working on one of real beauty but, I'll need your help to get the rest of the material I'll need to finish it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: First, I'll need a lump of iron ore and a gold ore as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Last I'll need a diamond.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Got that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Bring those to me and I'll give it to you for free.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can't have it lying around here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Trasok one iron ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Aye, this'll do nicely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You have the gold?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Trasok one gold ore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Fragile stuff, but the women love it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I personally prefer silver…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh, and the diamond?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Trasok one diamond crystal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: There we go, that should do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Hmm, I should get to work…</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: This is going to be beautiful!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok unlocks a small drawer and pulls out the necklace. Turning around he shields it from sight with his body as he puts on the finishing touches. After a few moments he hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I've been working on it for a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I just sent you to get the raw materials for my next masterpiece.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Hope ya don't mind.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Either way, here's the trinket.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now you keep your mouth shut about this!</td>
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
							$npcName = 'Finra Neticlo';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Finra Neticlo</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Finra the necklace that Trasok made.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: It's perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra is well pleased!</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Thank you, Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra heard your name was YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finra smiles lightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra hears things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Thank you, YOU, here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Finra: Finra will see you later, Finra is sure.</td>
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
						<td>Rewards: 25 Faction with Cabal of Whispers, 5130 Tria, 13600 XP.</td>
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
