<!doctype html>
<html>
<head>
	<title>Introduction to the Merchants</title>

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
						<td>Introduction to the Merchants</td>
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
							$npcName = 'Boralis Voladrand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Boralis Voladrand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. What can you tell me about merchants?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Ah, hello there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: You want to know about merchants, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Well, look no further.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: My wife and I sell leather wares among other things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Leather armor is the lightest armor and is usually people's first experience with armor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: It's good for…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis catches himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: See, there I go again, always pitching the products.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: But you didn't ask about that, eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: There are many merchants which sell all sorts of things.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: In addition to you, where can I find some?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Best to just go and investigate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I should first point out, merchants will both sell things and buy things, not always in the same categories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: So it's best to seek out folks and find out what, if anything, they buy and sell as well as if they are a trainer of some sort.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Smiths and barkeeps are always a good source for such things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: In Hydlaa, the smith is Harnquist if you haven't already met his acquaintance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: His smithy is right off the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Allelia Symiestra is the barkeep at Kada-El's tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: She'll buy your animal parts if you go huntin'.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Also at the tavern, there is a cook, Jomed Parcen, who sells some food items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: If you're interested in taking up fishing, Burdess Quirain can get you started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: She can be found around the plaza, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: The Grotemeys are like us, a couple with a shop which you can find on your way to the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: You can sell your hides there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: There are many many others in every city and sometimes along the way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Always check and make notes for yourself and you can't go wrong.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks, that's good information. Anything I can do to help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Well, if you're looking for some work, there is Kaiman Jilatt, Ondren Torr, and Rolara Hammersong, who you can find around the plaza.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Over in East Hydlaa, there is a good friend, Edrich Sultov, as well as Yonda Axebow, who is also a member of the Artist Association, and Mirra Houphen, who is a cook of note.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I'm not sure all of them sell things publicly, but some may have work for you, so keep checking in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where should I start?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis looks concerned.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Well, I suppose you can help us if you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Bandits have been a big problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Some time ago there was a big raid on our Emporium.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I was so angry my wife, Rinna, had to calm me down and insisted she would investigate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Best you speak with her about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I get too worked up to think clearly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: One more question. Is there an association for merchants?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis nods, hesitantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: There is, but…well, there's a bit more competition than for other associations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Merchants are more closely related to the associations their products deal with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: For instance, a smith buys and sells raw materials and crafting materials so is more likely a member of the Crafting Association.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: A potion seller might be more likely a member of the Science Association, and so forth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Well, to be fair I should mention there are some major merchant businesses out there, like the Mikana Trading Company out in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: I don't trust that guy though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: There is also this dwarf I have seen who hangs out at the tavern, but I don't know much about him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for your help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Boralis smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: No problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Merchants tend to be friendly because we could always use the business.</td>
					</tr>
					<tr class="quest_npc">
						<td>Boralis: Good luck to ye!</td>
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
						<td>Rewards: 8000 XP.</td>
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
