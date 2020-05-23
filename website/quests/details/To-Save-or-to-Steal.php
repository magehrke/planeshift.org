<!doctype html>
<html>
<head>
	<title>To Save or to Steal</title>

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
						<td>To Save or to Steal</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
						<td>YOU: Greetings! I heard you were selling decorative plants. I might be interested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman stops mid-bellow and looks down at you, a smile that stretches nearly from ear to ear.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Yes, yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I have many a variety.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Depends on who you wish to impress!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: The ladies fancy colourful things, red flowers, red for passion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Or maybe if you're just friends, you could offer a sunny bouquet of yellow…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trailing off, the Ynnwn looks down at you searchingly, as he reaches up to smooth his fingers over the close-cropped beard on his chin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Come to think of it, you look like a respectable, fit, and capable young adventurer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Perhaps you would be willing to do me a favour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I would of course be most, most happy to compensate you with money from today's successful bartering!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Ah, Hydlaa, the fruition of every merchant's dream.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You flatter me! What sort of favour did you have in mind?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The man gives another award-winning smile, the way only a merchant making a bid can.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With an elaborate flourish, he extends a map to you, tapping at a location that looks close to the fringe of the labyrinth tunnels of the bronze doors with the tip of one large finger.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You see, I have a shipment of the rarest, most beautiful flora, and the herbs I have coming along with them.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He waves his opposite hand beneath his nose as though sampling some utterly tantalizing scent in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Oh, the soaps and oils you could make with them, and don't even get me started on the savoury opportunities, the sweet chances to make the most delectable dishes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: It would be such a shame, you see, to let it all spoil and go to waste.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: But the guards…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sighs here, folding the map up neatly and twirling it between his fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: They're all so worried about compromising the integrity of that little tunnel by moving just a wee bit of caved in rock to let my tiny travelling cart through the blockage.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman holds up his fingers and pinches them together, to accentuate the smallness of the problem, and the barrier separating him from his merchandise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can I do about it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Making a wide, elaborate gesture with his arms, Kaiman moves to gracefully lay them upon your shoulders, slowly lowering them through the air as though letting the idea alight.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: What can you do, my dear friend?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Why, you can go and be my spokesperson where I cannot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: It's really quite simple, you see!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Just go visit one of those earth-lovers…doesn't matter which, I'm sure you'd find some stone kissing kran in Gugrontid or a tree-hugging elf in that garden with the naked deity in it to do the trick.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Give them a story about how you want to churn up a field for planting or something, I'm sure they'd love a tale like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: And ask what sort of glyph you think would work for the job!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Letting his hands slough back off again, he grins once more, tapping at one of his temples.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You're a smart one, like I said!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Capable!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: And once you have that item, you just get yourself over to those Doors and convince a guard to go in and collect my shipment!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: It's herbs, not heavy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Just collect the crates, leave the cart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Open a hole large enough to pull them through and there you go!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-After detailing his plan, the Ynnwn raises a single finger and wags it at you, squinting an eye shut, adding emphasis to his statements.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: But you're in a race against time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Those herbs, some of them are very very rare!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: And in the wrong hands, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Let's make sure no marauders manage to get their greasy mitts on it and use them for any other end than their true purpose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Beauty and olfactory delight!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Eyes gleaming, Kaiman looks eagerly at you, waiting for your reply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well, that's not a bad proposal I suppose. I accept!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bearing that big, wide smile one last time, the Ynnwn claps you on the shoulder and lets out a boisterous guffaw.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: That's the spirit, my friend!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: That's the spirit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You just get those legs a-moving towards your destination and your glittering, tria-filled reward shall be resting in your palms in no time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Hop to it, go go go!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman claps his hands together to punctuate his words, and then moves his legs up in a marching fashion.-</td>
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
						<td>YOU: What a beautiful garden you have here! Surely you have to do something to keep up the grounds!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jardet leans on his staff, his eyes closed and his lips curved in a blissful smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-They don't open as one pointed elven ear pricks at you, and he replies in a languid fashion, relaxed and at ease.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Oh, I don't have to make the flowers grow or the grass stay green or the tree to remain standing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: No, all of these are gifts from Xiosia herself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The man gives a light chuckle, inhaling again to scent a passing, gentle breeze.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Though I suppose now and then I do have to make sure her zeal doesn't send the garden flowing right over that open gate and sharing her bounty with the rest of Eastern Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How interesting. Tell me, how is it that you stop the garden from overreaching its bounds?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Finally opening his eyes to look about, Jardet seems to almost have to pry his eyes away from the tree and meet you gaze.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Oh, just a simple glyph is all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Churn up the soil right by the entrance down to the roots, and you can keep the leaves from desperately reaching over.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It's such a small task to ensure her garden stays neat and orderly, even if some days I'd wish I could just allow it to overgrow and stretch outwards.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You know, bring the joy into those muddy cobbled streets.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Again he laughs, smoothing his fingers along the staff and peering back towards the effigy of Xiosia.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Couldn't you also use it to till land too? Churn up soil to make it more fertile for planting? If you have any extra glyphs…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Dermorian's eyes seem to light up at the very idea.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: You're a farmer, then?!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He doesn't bother to wait for your reply, straightening into a more focused posture and tucking the staff beneath his arm to clasp his hands excitedly together.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Xiosia loves the spreading of life…so long as you know where to plant the seed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Wouldn't want to be ruining too much of the natural landscape and all that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: But it's a noble enough calling!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Scanning you carefully with his eyes, the elf seems to take at least a moment to weigh you visually against your words, as if looking for signs of soil on your clothes or hands to validate your implications. He finally just gives a flippant wave of his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I'm certain a tradesman like you knows what you're doing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Perhaps you could bring some of the food into the city for the less prosperous, hm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Something to keep in mind!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Here, I do happen to have an extra lying about on me…take it, and make the barren dirt spring up with green!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Just wander on back to me when you're done so I can see your progress!</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm here on behalf of a merchant that frequents the Hydlaa plaza. Kaiman Jilatt. I assume you've heard of him?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Eyes peeled towards the Doors, Nkaw jumps slightly at your approach.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He turns around, looking at you and then around at the small confines of the tower, muttering something to himself before beadily eyeing you again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Shouldn't do that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Reflexes trained to fight giant beasts and everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Sneaking up on a guard could end up costing you your head!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He pats himself on his own cheek as though to rouse himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Yes, I've heard this merchant whining on more than one occasion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Thing of it is, we don't have the resources to open up the channels, and even if we could do it, we wouldn't because it would take too much time and risk bringing creatures down upon us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Do you have any idea how much noise moving stone causes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: A lot, I'll tell you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What if I could find a way to do it quickly, without hurting the tunnel or sending out an alarm to all the lurkers in the dark?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The guard raises his hand and ruffles his fingers through his hair, heaving a sigh and giving you a pointed glare of annoyance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Yes, fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I suppose if you could find some way to do that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Just…fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I'd start with the resident mage-of-everything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: That cocky shadowcaster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Heh, I'm sure he'd just love to deal with you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Having alighted on a way to get rid of you, Nkaw begins making animated gestures towards the ladder, intent on shooing you off.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Yes, yes, that's it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Go visit him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: See what he thinks about all this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Quickly, times a wastin'!</td>
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
							$npcName = 'Zhaomal Shehan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zhaomal Shehan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking for a way to open up the caved in tunnel inside the labyrinths. I was told you might be able to help me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Zhaomal holds a glowing spell in the palms of his hands, watching the wisps of dark way coil slowly between his fingers and trickle down like so much ebony smoke.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His eyes do not leave his spell as he addresses you, though his voice is even and understandable despite his being distracted.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: It figures that they all but ignore our presence here until they encounter something they cannot do without magical assistance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: But then again, I suppose that's always how it works.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Do tell me what manner of aid is needed this time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: They want me to walk up and blow a hole in the wall?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That would be a lot. Thankfully, all we're going to need is a hole small enough to pull the crates through. I imagine you'll just have to widen the one that was knocked in to pull out the ones delivering the goods.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Slowly the spell seems to lessen as the coils of darkness finish dripping into the ground.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The rock around the man's feet is rather ominously smudged from the inky substance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Always how it goes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Just the small favours here and there, and I'm sure afterward we'll go right back to having little acknowledgment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: But who am I to argue with the higher-ups?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: After all, I'm no “master mage”.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The man scowls at this last, muttering to himself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Nobody appreciates being versed in a wider range of things these days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: After all, what use are you if you can't whip up some entirely unnecessary firestorm big enough to engulf a city?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Practicality is so under appreciated.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So are you able to give assistance?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frustrated with your insistence, he flings his hands at you as if to make you spontaneously disappear. Or like he's seriously pushing you over the edge and into the abyss.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Yes, yes, I'm more than capable of moving a few pounds of stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: But I can't give you the permission to go in there, and I'm going to need the glyph required for such a thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Gods know I'm not bringing my own supplies into those tunnels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: And you have no idea how annoying it is to pry those things out of Circle's hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: They see me coming and they gird their glyph pouches like they're loins.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You're going to have to bring your plea to Polyuntri, though I doubt you're likely to get anywhere with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: That one's more stubborn than a sore-mouthed rivnak.</td>
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
							$npcName = 'Polyuntri Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Polyuntri Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. I'm here about the shipment of herbs and rare plants in the tunnels. Kaiman…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Cutting you off with an abrupt and sharp wave of his hand, the armour-clad Ylian gives you a scowl through his helm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: That nitwit keeps sending more and more people here to make his bid, and each and every time I have to slowly explain to them the dangers of going into those tunnels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Getting the merchants out of the rubble was bad enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I'm not about to risk my men to go get a stock of FLOWERS.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: You and that Ynnwn are sorely trying my patience.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sir, if I might be so bold. These aren't just flowers we're talking about. You might not be willing to go get them, but there are unsavoury sorts that might try getting in there from more obscure entrances. And some of those “flowers” might be used to make some pretty nasty brews.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-That seems to give the guard pause.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The scowl gets heavier, drawing his bushy brows downwards.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Nobody bothered to tell me the nature of the shipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: They should never have allowed such merchandise through in the first place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: It should be burnt to a crisp.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I wouldn't recommend burning the shipment without warrant. I will take it from you and give it to the merchant. Besides, if you destroy goods, I doubt that that will make the association of respective business persons particularly happy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-One of his hands falls to the hilt of his sword and he squeezes it briefly, using it as a physical outlet for his frustrations.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lets a sigh sputter past his lips, and finally regards you again with a calmer, somewhat defeated air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I loathe the politics associated with these sorts of things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Safety should always be first priority if you ask me, bugger the money.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-One of his gauntlet-laden hands flicks aggressively to his left, inches from your nose as though he really wanted to pop you in the head but chose not to.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Go on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: Run off to that mage and tell him he has permission to go in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: I'll send a small contingent with him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Polyuntri: And I'll have you know that Kaiman will be paying out of his own precious pockets for any damages this venture incurs.</td>
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
							$npcName = 'Zhaomal Shehan';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Zhaomal Shehan</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: We have permission to go. Polyuntri is going to give you an escort for protection.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You mean he's going to send in a bickering group of dunderheads not fit enough to be watching the gates closely?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Wonderful.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sticks one hand out towards you, holding it expectantly at the center of your chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I'm assuming that if you're putting me to this much trouble, you already have what I'm going to need?</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: It's the least courtesy you could extend, all things considered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I'll return it to you once I'm good and done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: You can pick it up from that nitwit Nkaw down at the tower when I'm finished.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, here it is. I did have that much foresight. I assure you I really do appreciate what you're doing, it's very helpful.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Flattery does you no favours.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He curls his fingers around the glyph and then deposits it inside a pocket for safekeeping.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Nkaw.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Like I said.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Don't come showing your face to me again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: I'll make sure he gets your glyph and that you get the thing back again, though how you conned those exclusive, haughty circle-mages to give you one of these things I don't even want to know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Zhaomal: Now buzz off before I zap you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sparks of electricity appear around his fingers, evidence that he's perfectly willing to follow through with his threat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You have to wait for 20 minutes before you can continue this quest.-</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did they manage to get the shipment from the labyrinths? How went the venture, any hitches?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Turning back to look at you with somewhat bloodshot eyes, the Ylian points at the sacks behind you, grumbling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Well nobody died, if that's what you're asking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I swear I heard scuttling about though, following us everywhere.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Why the merchants continue to use those tunnels between the levels I'll never understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Just doesn't seem like it's worth it, if you ask me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Should just seal those doors forever.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Another gesture points aggressively downwards, towards the stairs you climbed to get to him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: You have your things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Now stop pestering all of the hard working guard here and be on your way.</td>
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
						<td>YOU: I have good news! I managed to get your valuable goods back to you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The smile that stretches across the Ynnwn's face could rival that on any velnishi bearing its teeth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Eagerly he reaches towards the baggage you have flung over various parts of your person.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You're brilliant!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Astounding!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Fantastic!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: The level of intellectual prowess is obscene!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fingers gripping the strings binding the sacks shut, he begins carefully inspecting what's inside, and finding his goods intact only makes him all the more jovial. He mutters some words, and a spell dissipates from the packages. A waft of cool air moves briefly upwards, the remnants of the blue way spell placed on the flowers and herbs to keep them from spoiling.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: You have no idea how much trouble you've saved me from, no idea!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Happy as I am that you're no longer going out of business, I believe I was promised compensation?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I can do even better than that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Though, just so you don't run around saying I swindled you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A pouch is removed from his belt and he tosses it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The thing makes a rather telling jingling noise as it sails through the air and lands in your grasping fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Now that that's taken care of.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kaiman proffers one of the sacks, full to bursting with ripe looking, delectable fruit, in a vast array of exotic colours and presumably flavours if one were to sample a taste.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: I'm of course assuming you went with our agreed upon little lie?</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Show them your bountiful harvest, and I'm sure those nattering circle mages will be perfectly happy to let you keep that trinket of yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Kaiman: Don't say I never did you any favours!</td>
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
						<td>YOU: I see the garden hasn't quite taken over yet. But here, I have to show you the progress I've made!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The elf stands with his hands curved over his staff and his head down, a low hum echoing from his throat that cuts off abruptly as though caught mid-meditation. He looks up towards you, and then down at the sack you hold in your hands, full to bursting. His smile brightens his countenance considerably, not that it wasn't already bright before.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And the prodigy returns!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I can see that you're doing well for yourself in these endeavours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I think it's safe to rely on your good intentions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Keep that glyph.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: And seriously, consider giving out your food to the unfortunate!</td>
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
						<td>Rewards: 1 Earth glyph, 20 Faction with Brown, -1 Faction with Seeds of Wildwood, 12891 Tria, 12200 XP.</td>
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
