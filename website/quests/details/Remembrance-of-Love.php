<!doctype html>
<html>
<head>
	<title>Remembrance of Love</title>

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
						<td>Remembrance of Love</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why do you seem so deep in thought?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen looks at you for a long, thoughtful moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Have you ever loved and lost?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: In my youth, I fell for a merchant's daughter, Mirlene.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: She had skin as soft as a child's, but with eyes that held the wisdom of the ages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I was poor, but I was in love.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen seems lost in his words and appears to forget about you for a few moments before continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I found a cave filled with a fortune in jade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I carved out a huge piece of jade; the largest I ever saw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I sold it to her father, Jogar Fromaad, to prove I could provide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: We were married and together for a happy time, but I lost her many years ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Lately I have been wondering what became of that piece of jade that helped bring me so much happiness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Could you try to find out for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ok, I’ll see what I can do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I really don't have all that much to go on, except that I sold the jade to Mirlene's father.</td>
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
							$npcName = 'Ervin Fromaad';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ervin Fromaad</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have information regarding a huge jade piece Fholen sold years ago.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Oh yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: I remember that very well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: Fholen had the biggest piece of jade I ever saw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: He gave it to my father to prove he could support my sister.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: But my family fell on hard times later, and my father had to sell the jade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: I think he sold it to the Master Blades in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ervin shakes his head a bit sadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: It was a shame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ervin: I bet I could have turned a pretty profit with something so rare.</td>
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
						<td>YOU: Do you have information regarding a huge jade piece Fholen sold years ago.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Of course I remember that jade Jogar brought in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It was the biggest I ever laid eyes on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Poor fellow had some sentimental attachment to it, so I gave him fair value, I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I had it cut to a few nice shapes and sold it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Fattened my purse nicely, I do say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It's hard to come by such a great deal today.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: To whom did you sell the jade?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Who did I sell the cut pieces to?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Why?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You planning to rob him?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok looks at you suspiciously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Nahh, I don't think you don't quite look the sort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Doesn't matter.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok shrugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Edrich Sultov took the jade pieces to Hydlaa for trade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ask him if he remembers them.</td>
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
							$npcName = 'Edrich Sultov';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Edrich Sultov</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you remember the jade piece Trasok sold you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Ah, yes, those bits of jade from Trasok.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Yes, I took those to Kaiman Jilatt and I am sure he remembers them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: He bought that jade hoping to resell it for more, but I don't remember it turning out well for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Edrich: Those were not the best years for selling such stones in Hydlaa.</td>
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
							$npcName = 'Kaiman Jilatt';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Kaiman Jilatt</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you remember the jade piece that Edrich brought to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Bah, do not remind me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: That was the worst deal I ever made.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: If I had sold it back in Poricet, I could have made a decent profit, but not here, not back then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman shakes his head, smiling wryly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: My business sense is much better now than it used to be!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I ended up having the jade set into a leather headband.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Those were very fashionable where I hail from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I sold it as a loss to a Kran merchant named Grok.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: A pity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I am sure the Kran still has it, too.</td>
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
						<td>YOU: I heard you bought a jade headband, do you still have it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: So you are interested in that old jade headband, hmmm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: It was a hideous-looking thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I bought it for just for the jade, and I tried to craft it into some magical weapons.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok makes a rumbling sound and shrugs slowly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: That did not work out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I think Kaiman and I both lost out on that deal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I sold off the smallest pieces, but I still have the largest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: I will sell it to you at a very reduced price, if you are interested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Say, four circles?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Hmmmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok looks to the sky with a thoughtful expression for a moment and then nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Yes, one thousand tria, that would be fair.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1000 tria</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Thank you, my good Madam.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grok counts the coins and nods before reaching into a bag and removing a leather strap with a large jade gem attached. Grok pries the stone loose and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: Here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grok: May it bring greater fortune to you than it has for me.</td>
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
							$npcName = 'Fholen Medraa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fholen Medraa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was able to regain your jade piece.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: By the gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: This looks like it's from my old stone!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen looks closely at the piece of jade and grins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Yes, yes it is, I remember this corner.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen smiles broadly at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You have made an old miner very happy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Thank you so very much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please accept a few coins in return for your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I don't need the money like I did when I was younger.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen gives you several coins and holds the jade up to the light of the Crystal, gazing at it in wonder and memory.-</td>
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
						<td>Rewards: 2107 Tria, 10800 XP.</td>
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
