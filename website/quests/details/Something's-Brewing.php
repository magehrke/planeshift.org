<!doctype html>
<html>
<head>
	<title>Something's Brewing</title>

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
						<td>Something's Brewing</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 40 Hops, 10 White Oak Bark, 10 Blackbush Stem.</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You clear your throat.] About that job, please?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow nods, and shows you a fading article, ripped from a broadside; Announcing the New Brewmaster of the Dome, Screeches the headline silently.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The drawing below the headline shows many barrels standing in a row with a sign above them that proclaims –</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Hydlaa’s Specialty Hops, The Best Brew by the Best Brewer- The rest of the article is torn away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow holds up his nine fingers, then makes a plus sign and holds up one more finger.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A new brewmaster? And you want… 10 barrels? This is great news. Where do I go for the beers?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow flips open his notebook to a map of Hydlaa, and shrugs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow looks at you and nods “yes,” then shakes his head “no,” then stares at you again, his hands open at his sides in a shrug.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes or no, again? Well, yes. A bar without a beer is like a Dome without a Crystal. I’ll help you. Here’s to the Brewmaster and the Brewmaster’s Brew!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow hands you a Requisition for 10 Kegs of Hydlaa’s Specialty Hops and turns back to work.</td>
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
							$npcName = '[NPC] Narwin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>[NPC] Narwin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you the BrewMaster?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: BrewMaster I be!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Tis me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Tis me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Narwin Molstagh at yer service!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Storyteller!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hero of Great Renown!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: and a Fine Dancer!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Which do you need?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Come on, speak up youngster!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: What’s do ye call yerself, Stonehammer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Me, my name is Trebanass but just call me Mr T.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Well good Mr T, what will it be?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: A story or a dance before getting down to bidness?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, all right. How about a story?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Good choice Mr T!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Curiosity is the way to adventure and riches!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Now, once, not long after the Great Rift between Laanx and Talad, a curious, adventurous, fulsome I must say, Stonehammer youth dared to traverse the wilderlands where the murderous ulbernauts nested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: The youth, having a fine nose for the bitters and the mash, sniffed out the intoxicating, get it Mr T, intoxicating?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Scent of the finest hops on any of the levels of the Dome!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: A flash of brilliance unfurled the future before ’em, like an Ojaveda carpet on Market Day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: ‘What we all do need in these times of tossing and tumbling, be a fine and hearty Brew to calm our nerves and steady our hands,’ thought the youth!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: The adventurer, howsoever, were stronger than smart, it seems, and more curious than cautious to boot and scabbard!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Charging out into the fields, our hapless youngster commenced to digging, nose muscles full of mash and fermentation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: When lo!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Out from the scrubby brushes comes a whole nasty herd of ‘nauts, slaverin’ and slashin’ like no tomorrow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: And the truth be told, there were no tomorrow fer our stalwart stiller, lickety split, the kidling were dancing with Dakkru for many a dark cycle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: And the great field of the sweetest, most maltil-icious, had to await a new adventurer to find it’s potent- ial, get it, potent?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ye be looking at that Very One!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Me it Be!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Tis I!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you done? I have an order for you from Amdeneir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: An order?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The StoneHammer reads, stroking his beard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ten barrels ye says!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Aye, I can provide such sustenance as that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Tis a grand day fer a new brew!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here have a sample!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin hands you a frothy mug of Specialty Hops.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Bidness should ne’er be done with a dry throat, friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Drink up with me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Cheers!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure! A sale is always worth celebrating! Cheers!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: If you don't drink the beer Narwin wants 60 hops instead of 40</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin drinks his mug and wipes his beard, then smacks his lips again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Oh, now, that tastes so good, it do!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Reminds me, I need more hops for the next batch.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Go fetch me 40 hops plants and I will get the kegs out of the Winch warehouse.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: : Phew! Here are your hops plants. Now can I get my order filled?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The BrewMaster holds the 40 plants up to his nose and sniffs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: That smells terrific I do say!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: But didn’t I tell ye, I need the secret ingredient?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Go get me, lemme see…</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin counts on all his digits again</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Get me 10 aye that be it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ten white oak bark and 10 blackbush stems.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: And don’t ye be telling anyone about me special ingredients!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Off with ye!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hand the piles of leaves to Narwin and flop down on the ground, panting.] I’m done! Please say I’m done!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ah poor little Kran.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Tell ye what, youngin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I will go to Aleena and have her mash these up fer me, then add them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Ye can wait here, if ye wishes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here’s somethin’ to while away the time with!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin offers you another Mug of Specialty Hops.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How many times must I tell you, I…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin interrupts you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Don’t drink!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Don’t drink!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: More’s the pity, but, ha ha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: More’s fer me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin downs the mug, then trundles off towards Kada El’s.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After a few minutes, Narwin comes wobbling back, with a mash of fragrant stems.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He adds a measure of the mash to each keg, singing as he goes-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Front an’ nose, Here’s me toes, whoopdeedoo and ho ho ho!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He kicks his heels and lands on his keister, laughing all the way.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: There now Mr T, it’s all set!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: They weigh 25 each, so make sure ye can heave em up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Finally! I can carry them, no problem!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Fine and dandy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Here’s my bill fer yer employer and a little something fer ye!”</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin tips a mug full of circle out for you to collect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Saves me shipping costs it does, fine strapping youngster that ye are!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Cheers!</td>
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
							$npcName = 'Jarda Ynarow';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jarda Ynarow</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I certainly hope this beer is worth it, Barkeep! [You say in a sober voice.] Good thing I’m strong, it saved you some tria. Here is your bill from Narwin, that’s his name by the way, [NPC] Narwin, he just stands around in Hydlaa by the Arena entrance. If you ever want to know again.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow looks at the bill and calculates quickly, then nods to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rocks his hand quickly back and forth as if to say, “Not a bad price. Not good, but not bad.”-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I put the kegs by your delivery door. All 10 of ’em. [You stand, waiting.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow almost smiles at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He nods, and reaches into his vest for the pouch, and slides it across the counter to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sir Jarda! Thank you. Let me know if you ever need any more help! I’m your Stonehammer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-While you’re busy with your coins, Jarda leans down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He stands and checks to make sure no one in the bar is looking your way.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jarda Ynarow slips you a glyph bag, then holds his finger to his mouth, and winks.</td>
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
						<td>Rewards: 1 Bow Glyph, 21250 Tria, 12500 XP.</td>
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
