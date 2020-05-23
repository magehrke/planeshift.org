<!doctype html>
<html>
<head>
	<title>A Breezy Day</title>

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
						<td>A Breezy Day</td>
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
						<td>[INFO]: Maybe you need to be an azure apprentice.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>→ Go to 
						<?php
							echo "<a href='";
							/* Printing the NPC with a link to the Map */
							/* The Variable $npcName has to be set !!! */
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have anything that needs doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Actually...yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: There is something that I could use some help with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The librarian raises a hand and motions towards the tops of the bookshelves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Some of my most avid users have been complaining about the dust motes floating about in the torchlight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: They are quite correct of course, but well, I don't really have the time for cleaning up shop constantly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He reaches down behind his desk, fumbling about for a few moments before coming up with something and holding it out in his hand. The small etched stone seems cool to the touch, and swirls with an almost soothing blue light.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Use this, and blow the dust off of the shelves for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Do it right, and I'll compensate you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll get right on that!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Giving you a single nod that seems to at least imply some approval, the librarian turns back to his reading, without giving you a second thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: There is one very dirty shelf upstairs, you need to at least do that one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Come back down when you've cleaned them all off, and we'll arrange for that reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-TIP: You need to hold the glyph in your left or right hand, then head upstairs to find the right book case. You need to right click then to "clean" it. You will be told when you find the right one, after which you can continue the quest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Go upstairs and find the shelf. It's in the center of the sheflves "behind" the stairs. Right-click on the side of the shelf.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-You used the Wind Glyph to clean Jayose's book shelves!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm all finished cleaning those shelves! They're good as new!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolling his eyes expressively, Jayose bats at the dust in the air, pointing aggressively towards the door and holding a cloth over his mouth and nose.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He waits until the debris is blown out of the room as well, before dropping the cloth away amidst a series of exaggerated coughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I can see that cleaning up is not high on your repertoire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You did the deed, however.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: For that I guess I'll give you some small reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With some measure of annoyance, the librarian tosses a jingling pouch of tria towards  you, before leaning forward and giving you a thoughtful look.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You know, I'd be willing to bet that you could do a lot more with that thing, help a few more studious fellows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I'll tell you what.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: You agree to do some more favours for some associates of mine, and maybe I'll let you keep that glyph you've got.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who did you have in mind that I should help?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Instead of supplying a verbal answer, the librarian scribbles something down on a piece of paper.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Holding it out to you, a quick scan reveals it to be a list of names.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: There you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Just seek these people out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Make sure you get to all of them before coming back to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: I won't give you such a sizeable reward for skimped work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Run along now, you've got your work cut out for you.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It looks like the forges out back could use a bit of tender loving care.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Looking up from an ingot he'd been inspecting, the blacksmith gives you a quizzical glance.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Many people tend to use my forges.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Unfortunately, no matter how much fodder for the fires I possess, the intensity of the flames on my personal forge is a near-constant problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I've yet to find a good way to keep the fire angrily roaring once it reaches a certain point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: And I'd kill to find a way to stoke the embers back to liveliness, rather than having to resort to flint and steel or the good grace of a passing red way practitioner.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I bet a little wind could stoke those fires. Have to be just the right amount though, or you'd just blow it out.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Running his calloused fingers through his scraggly yellow beard, the man seems to contemplate the offer for a few moments, before giving a nod.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: And I suppose you think you'd be able to do that then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You have the ability?</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I doubt you're just going to stand there blowing on them and hoping for the best.  [NPC] I'd probably have to have someone take you to the sanatorium after you fainted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jayose gave me a wind glyph. I wager with just the right casting, one could get the desired effect.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Giving you the selfsame contemplative, beard-stroking look, Harnquist briefly squints one eye shut, before shrugging his relatively broad shoulders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: One cast on my personal furnace inside should do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Too much and you'll just completely put the fires out, and then we'd have to have...words.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Get to it, and tell me what the results are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Might be I'll have a little compensation for your efforts.  Harnquist unlocks the door next to you and pushes it open.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then nods his head for you to enter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Hurry up.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Which forge did you want stoking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: The ones inside, through the door behind me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Hurry up with it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Enter Harnquists house and cast the spell on the forge. Then return to Harnquist</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The forge seems to be roaring a lot louder now! I think it worked pretty well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I can almost feel the heat from here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He quirks a brow and turns his head back towards the door.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm going to have to remember that little trick for future reference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I'm guessing that will last us for a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Not a bad effort, I gotta say.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rifles around on his belt, and tosses a jingling pouch in your direction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: There you are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now I've got some metal to melt, so if you don't mind...</td>
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
							$npcName = 'Burdess Quirain';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Burdess Quirain</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jayose sent me to see if you needed help with anything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ynnwn looks you over, her nose wrinkling at the stench wafting over from the barrels situated nearby.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She waves her hand in front of her face with watering eyes, speaking in a choked voice that verges on a gag.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I'm surprised you can even keep a straight face with that reek so close by.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Can you not smell that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: The spell that was guaranteed on those containers to keep my merchandise cool and fresh was less than what I paid for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Bloody cheap blue way enchantments.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So now you have a bunch of rotting fish on your hands. Lovely.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A frustrated look flashes over the woman's features.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She flails her arms out, gesturing to the empty space around her.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Who's going to get close enough to buy anything?</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: And they certainly aren't going to buy this disgusting merchandise.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I can't even get the smell out of my clothing, else I'd just move somewhere else.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-With a sigh, she flippantly waves her hands at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: But go on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: You said you were from Jayose to help me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: So, I don't know, think of something.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I could try using this wind glyph to blow the smell out of your clothes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Giving the barrels a wistful look, no doubt thinking of all of the time it took to catch all of the fish, she sighs and nods her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I suppose it can't be helped.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Give it a go, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Least I can do, so that when I find a REPUTABLE enchanter I can actually manage to get customers close enough to make a sale.  Burdess Quirain raises her arms up on either side of herself, comically scrunching her face and moving up to her tip-toes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She wrinkles her nose and, half-holding her breath, drawls out.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Okay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Hit me with it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You cast a spell to conjure a strong wind around Burdess.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Magic begins to form around Burdess.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As the winds pick up Burdess pulls her clothes close.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The wind blows powerfully though her clothes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As they get rustles and bustled by the wind the smell is caught up and is leached from her clothes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The wind eventually begins to flow down some of the nearby alleys taking the smells with it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There you go! Hopefully you'll smell like charmflowers and baked goods or...whatever.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolling her eyes at you expressively, Burdess buries her nose into her sleeve, inhaling deeply.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She shrugs and drops her arm back to her side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I no longer smell like doomsday on the reef.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: It's an improvement at least.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Now hopefully I can get people to stop trying to stay upwind of me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Backing further from the barrels to avoid getting hit again full force by an errant breeze, she quickly tosses a tria pouch at you, before turning on her heel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Thanks for the help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: I'm off to the Pool of Stealth to try to make something of this waste of a day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Burdess Quirain: Good luck with your little errands.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm not sure why you're on Jayose's list. You look a bit shifty, but I guess...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grinning, the Ylian unfurls his cards like a fan, gracefully moving his wrist in a circle to show them to you, but before your eye can latch onto any of them, he folds them in again and lets them cascade into his other palm.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: No idea why that old bookworm would send you to assist me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: But I suppose if you want a job, you could help me, ya know, 'prepare' for some of my games.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He winks and gives you a look that can only be taken as preparation for deception.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Can always use an extra mind to help me out with my...budding business.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I take it you've had a lot of luck running dodgy deals on little uninformed passers-by?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He chuckles at your statement, flashing the cards again, flicking them into the air and catching them with nimble fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Plenty of full pockets attached to empty heads.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: It's not my fault if people are gullible, is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think I know just what Jayose wanted me to do to "help" you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Darven Bounash wrinkles his nose distastefully at you, still letting the cards fly between his fingers, light and feathery, fluttering a little in the draft his rapid motions create.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: I don't think I like your snarky little tone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Why don't you turn around and wander on off now...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You cast a spell on Darven.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frantically chasing after his cards as they billow around erratically in the wind, the Ylian sends a few dozen choice words in your direction, trying to pluck them from the air before they're lofted away and irrevocably lost.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Stop that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: You stop that right now!</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven Bounash: Why I oughta...Why I oughta!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The threat stops as he darts off in a new direction, now ignoring you entirely in favour of trying to collect all of his possessions.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He says no more to you, giving you a beady glare before turning his back entirely.-</td>
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
						<td>YOU: Do you need some assistance? You're on this list Jayose gave me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Looking up from where he's kicking some leaves on the ground, Fholen shrugs his muscled shoulders, shaking his head and making the green gemstone hung around his neck sway.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: I'm trying to make this place more presentable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: It's right in front of the museum after all, it should be clean and inviting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: But the bushes keep shedding and people keep dropping their garbage all over the place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: I just can't keep up with it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I could try to blow the leaves and the garbage away, if you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He seems to think this over for a few moments, squinting.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: I guess that's an option.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: You could just send a gust and push it off towards the little courtyard behind the building.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: We'll have to clean up some more afterwards, but at least that way it won't be such a pressing matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Give it a whirl.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You cast a spell to clean up the path.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Fholen Medraa's eyes pinch shut as the wind blows around the streets blowing all the debris into the distance.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A bright grin shows on the Ynnwn's face once the winds die down.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He runs the sole of his shoe over the now cleared path before the museum, reaching out to clap you firmly on the shoulder.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Not bad, not bad, not bad at all I gotta say!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Would have taken me hours to clear all that out of here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Why don't you take half of what I was going to get paid for the job, only fair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: And hey, good luck with you and whatever you're doing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen Medraa: Nice to get a helping hand now and again!</td>
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
							$npcName = 'Dhalia Colat';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Dhalia Colat</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello there! Jayose sent me to ask if you needed help with anything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Ynnwn's brows rise slightly, but she does not look up as she gently moves the tip of a paint-laden brush over a section of bare flesh on the back of her hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her eyes only raise when she seems finished, and the corners of her mouth tug into a smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia Colat: I suppose that was kind of him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia Colat: Maybe he's trying to repay me for all of the illuminated book covers.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Looking contemplative, her head swivels towards Serevim, who looks like he's holding still as a statue save for the occasional twitch of a muscle here and there.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Wet paint glistens on his skin, and he looks, well, less than comfortable.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia Colat: I don't suppose you could find a way to speed up this drying process?</td>
					</tr>
					<tr class="quest_npc">
						<td>Dhalia Colat: I feel rather poorly for what I've done to my dear friend over here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can do that! It's the perfect job for me, actually! Tell him to close his eyes though, it's about to get windy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Dhalia Colat raises a brow slowly at your statement, but merely gestures at her companion to do as warned.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The looming fellow clenches his eyes comically shut, and as the wind buffets around him his arms flail slightly in surprise, before he gets hold of himself and settles down again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-When the spell ends, he rumbles a thanks, looking a little more red faced than usual and embarrassed.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All finished! He should be able to stop posing as a marble carving now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It's clear by the continued twitching of her lips and her watering eyes that the Ynnwn woman is trying desperately hard not to laugh at her friend's now horribly dishevelled hair.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She waves you off, covering her mouth with her other hand, only replying with a muted acknowledgement and the sound of muted snickering.-</td>
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
							$npcName = 'Jayose';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jayose</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All the tasks you gave me to do are all finished! I helped everybody on your list.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The librarian raises his hand and lowers it slowly, subtly telling you to temper your enthusiasm and your loud words in his sacred halls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He snaps his thick book shut and sets it down, motioning at you with a flick of his wrist.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Fine, fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Keep the glyph, I suppose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: See if you can't continue keeping yourself busy and staying out of trouble with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Just don't cause any havoc, alright?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: If I hear you blew over any vendor's kiosks or anything, I'll drag you back here by the ear and yank that thing from your hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jayose: Now off with you, I have work to do!</td>
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
						<td>Rewards: 1 Wind Glyph, Access to Harnquist's house, 2000 Tria, 13600 XP.</td>
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
