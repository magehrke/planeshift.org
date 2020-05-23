<!doctype html>
<html>
<head>
	<title>Orchibaly Versus the Smelly Jelly</title>

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
						<td>Orchibaly Versus the Smelly Jelly</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/The-Masked-Mistress.php">The Masked Mistress</a> quest.</td>
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
							$npcName = 'Orchibaly Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orchibaly Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking for work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I am not sure I need anything right now, Tabei, but thank you for offering!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly flips through a rumpled recipe booklet and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He goes to a shelf and takes down a large jar and opens it. He sniffs, and his nose wrinkles and his ears turn back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Ugh, smelly jelly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Smelly smelly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Phew!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly flaps a paw in front of his nose.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Oh dear, this will not do at all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: There is a fancy ballroom dance coming up in Hydlaa, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: I have been asked to make some special treats for it and for that I need special jelly!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly turns to look at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: You know, if you want to help, you could go off to Hydlaa and fetch me some!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Yes..Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Would you like to do that for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll ask around and see what I find.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Oh, most excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Smashing and superior!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Miss Mirra Houphen in East Hydlaa is the one to go to; she is a fine, first-rate cook.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Let me copy the recipe in case she needs it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly quickly scribes out a copy in a scribbly and loopy script and passes it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: There, give her that and tell her Orchibaly Gurpleferd sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Four jars' worth will be a good amount, if she can do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Bon shdrah!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly cheerily waves a paw goodbye.-</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: What's this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: A recipe?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra reads through the messy writing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Joopiner Berry Jelly…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: hmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Did someone send you to me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This recipe comes from the cookbook of Orchibaly Gurpleferd.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Oh, good old Orchibaly!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: How is he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: He can be such a fluffhead sometimes but he is entertaining and a great baker to boot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I suppose he wants some of this jelly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Did he say how much he needs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe he requested four jars.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Oh, so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I can only manage about half that with the berries I have right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: How about I get cooking, and you go see if you can get a sack of joopiner berries from Jomed up at Kada-El's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I bet he has some sitting around that he could spare.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: If he tries to charge you, just give him these.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That should be plenty.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra takes four Hexa from her purse and gives them to you.-</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like some joopiner berries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Joopiner berries, now those are expensive, ye know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Not much call for them either though, so I suppose I could part with what I got, for a price.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'll give you a sack of them for three Hexa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: It's a fair deal, I assure ye.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hand Jomed the coins.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Thank ye.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jomed pockets the coin and digs a clay container out from under the counter. He pours all of the small oval blue berries from the container and into a sack. He fastens the sack closed and gives it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Here ye go!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Happy eatin'.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the berries you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Ah, um, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I feel silly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I found I had many more berries in the cupboard than I thought, so here are the jars, all ready for you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I even made one extra for you to keep for yourself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Be careful though, they are still a bit hot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Oh, and here is a receipt for Orchibaly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I've put it all on his tab.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra gives you five toasty-hot clay jugs and a small paper receipt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Thank you and Orchibaly for the business!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Take care, Sir!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Mirra Houphen waves goodbye.</td>
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
							$npcName = 'Orchibaly Gurpleferd';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orchibaly Gurpleferd</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your jelly. It's freshly made.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Oooh, special joopiner jelly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Thank you, thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Did Mirra give you some kind of receipt?</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: She likes to do that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You put the receipt into Orchibaly's outstretched hand.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Ah, there it is, thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly tosses the receipt into a barrel and opens one of the jelly jars. He sniffs at the blue jelly and smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Mmmm!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: This is such fantasti-licious stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Now I can get to baking!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Oh, but first, I should give you something nice for your helping me, shouldn't I?</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Right right!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orchibaly rubs his paws on his apron, pauses, and then looks down at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Aha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Just the thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Someone traded me this earlier today for a cake, but I have no use for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orchibaly: Perhaps you will!</td>
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
						<td>Rewards: 1 Joopiner Jelly Jar, 1 Potion of Azure Sun Affinity, 35 Faction with Food Association, 9922 Tria, 16400 XP.</td>
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
