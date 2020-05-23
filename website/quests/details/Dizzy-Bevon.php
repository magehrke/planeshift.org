<!doctype html>
<html>
<head>
	<title>Dizzy Bevon</title>

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
						<td>Dizzy Bevon</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Bjorid-Needs-Hiccup-Help.php">Bjorid Needs Hiccup Help</a> quest.</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you use some help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Oh, you wanna help me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Great, I need some stuff from Charisa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: If ya could go'n get it that'd be great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I reckon I'll pay ya, so what d'ya say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds simple enough. Sure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I knew I could count on ya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Go tell 'er that Bevs needs his medicine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Thank ya kindly.</td>
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
						<td>YOU: I'm supposed to tell you that “Bevs” needs his medicine.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Ah yes, Bevs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Hmm, let us see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa looks through a sack full of vials and other assorted containers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Here's the one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: It's a pity poor Bevs gets so dizzy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Every week I give him this and every time it has less effect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: If it keeps up like this, I may have to look into more potent and dangerous means of helping him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Let's hope it doesn't come to that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Poor lad has enough to worry about, what with that pterosaur.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa pulls out a vial from her sack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Ah, here it is, give this to Bevs and make sure he takes it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Should last him a while.</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've brought medicine from Charisa, and I'm to make sure that you take it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Thank'ya, Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bevon slowly plays with the vial in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: You know, it wasn't always dis bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Used ta be tolerable.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bevon Damerr's is shaking lightly with a forced smile on his face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Live with what life gives ya, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Speaking of which, I owe Charisa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Hey, could you take something to Charisa for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can do that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: You really are a friend, y'know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Here's the tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: The sack is secure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Just in case you done get robbed, y'see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bevon smiles lightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Troublin' times and all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Thanks again, pal.</td>
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
						<td>YOU: I've brought payment from Bevon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Oh, thank Laanx you are here!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Charisa takes the offered sack without really paying attention to it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I just got a message that Bevs collapsed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I'm going there now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Something about a wheezing sound and a pterosaur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: He has a brother called Pevrin Damerr in the Winch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I know something about the pterosaur but if you ask his brother about it, I'm sure he could shed some light.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Can you enter that area?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've been there lots. It's quite pretty.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: I thought you could.</td>
					</tr>
					<tr class="quest_npc">
						<td>Charisa: Now off you go to ask Pevrin about pterosaurs.</td>
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
							$npcName = 'Pevrin Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Pevrin Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, will you tell me a bit about pterosaurs?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Oh, they're great beasts, these pterosaurs, but they can be dangerous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: My brother Bevon, for instance, had a terrible experience with a pterosaur…</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: come to think of it, the pterosaur had a terrible time with my brother, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Y'see a couple years ago my brother and I were eating lunch together around my pterosaurs and Bevon points at this large one and asks about 'im.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I say that he's an interesting pterosaur and that he's great fun to fly on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Bevon backs down a bit but, in the end, I get him to fly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Now, Bevon has this thing with dizziness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: He gets it a lot and he got it while flying which scared him halfway to the Death Realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: So he grabs real tight round the pterosaur's neck.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: It panics and lands, he scrambles away and me and ten of my guys restrain the pterosaur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: It kept wheezing ever after that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Oh…</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: hey…</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: why are you here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Who sent you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Charisa and I were talkin' about your brother.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Is Bevon alright?</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Does this by any chance have to do with the pterosaur?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It very well could, yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Ho-hey, that's great, 'ere ya go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: This'll please him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Pevrin passes you a piece of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: The pterosaur that Bevon is so afraid of died a few days ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: I just got the report now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: You should give it to Bevon to see if it soothes his nerves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Pevrin: Perhaps some good can come of the poor creature's death.</td>
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
							$npcName = 'Bevon Damerr';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bevon Damerr</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your brother thought this might calm you a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bevon looks at you oddly as you wake him up to give him the report. He reads it slowly, a smile gracing his face as he finishes it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I hate to celebrate the death of anything but…</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: but this is great news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Thank ya, pal, you've made mah life much better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: Here, take this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: And this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: You really are a pal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bevon: I still hate them pterosaurs, though, an' I reckon I always will.</td>
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
						<td>Rewards: 1 Dagger, 30 Faction with Science Association, 7310 Tria, 15000 XP.</td>
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
