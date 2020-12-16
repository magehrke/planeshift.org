<!doctype html>
<html>
<head>
	<title>The Great Manure Giveaway</title>

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
						<td>The Great Manure Giveaway</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Pawprech Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pawprech Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Greetings, I am in search of a quest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I'd hardly call it a “quest,” but I do have something you could do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It's a mite smelly, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Care to get your hands dirty?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Bring on the dirt!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: That's the spirit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: As a gesture of kindness, I give away free sacks of manure produced by my goujahs to people who might be able to use it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It might not sound like a good gift, but it's surprisingly useful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: If you're not sure who'd appreciate it, just ask me about the uses of dung.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Think carefully about people to whom you might want to give these, and take these sacks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: One per person please, and return the empty sacks when you're done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I always re-use my sacks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Good luck, and spread the good will!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you use dung for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: A valid question.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Pawprech Forsill holds up a hand and starts counting the uses on his fingers, speaking with passion.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It makes gardens and farms more fertile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: My brother is a gardener in town, and I believe one of the guards is from a farming community, though I forget who.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Cooks and smiths use it to stoke fires.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It's an alchemical substance, most especially used by alchemists who work in the open air.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: It's also used in science: dung can be used to attract insects for study.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Pawprech Forsill smiles broadly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I hope now you see that dung is in fact a very good gift!</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						1 Sack of Manure</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It is so nice of Pawprech to give away sacks of manure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: It is also very nice of you to consider me when giving them away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: They're ideal for the furnaces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You may have the empty sack: I'll be emptying it into the furnace right now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist upends the sack into the furnace, which roars its approval.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Give 
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
						1 Sack of Manure</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: My brother is ever kind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: May the spirits of nature ever bless you, as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: My garden will flourish with this addition to the soil.</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						1 Sack of Manure</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Manure is invaluable in my studies of insects, but rare are the times people actually give me any.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Your donation is most appreciated, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I shall not easily forget this.</td>
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
							$npcName = 'Jomed Parcen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jomed Parcen</a>";
						?>
						1 Sack of Manure</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Manure, how thoughtful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Sure beats coal or wood for keeping the cook fires burning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: I'll give Pawprech my thanks next time I'm down by the winch, but thanks for delivering it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jomed: Here, take the sack back.</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						1 Sack of Manure</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Now what's thi...</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Manure?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Ah yes, this will do jus' fine!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I'm from out'n the country, y'know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I know plen'y of farmers who can make good use of this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Thank ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: And be sure to thank Pawprech when you see him.</td>
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
							$npcName = 'Pawprech Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pawprech Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: All done spreading the goodwill?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: I hope you've made some friends along the way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Here, take these to show my gratitude: someone who handles manure can never have too many pairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pawprech: Goodbye for now!</td>
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
						<td>Rewards: 1 Leather Gloves, 9922 Tria, 16400 XP.</td>
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
