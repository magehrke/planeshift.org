<!doctype html>
<html>
<head>
	<title>Lorytia Starhammer and the Clan Reunion</title>

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
						<td>Lorytia Starhammer and the Clan Reunion</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 1 Iron Ingot, 1 Gold Ingot.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm headed out of here shortly. May I deliver anything for you on my way back?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I think I have something ye can do for me indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Ye see, me clan is havin’ a meetin’.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The whole Starhammer clan is comin’ to the Dome for the first time in eight years, so the clan members on this level are expected to take care of ceremonies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I am on duty here, and cannot do everything myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: We need a large forged crest of the clan for the gathering; perhaps Trasok will handle it for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Will ye be so kind as to take him this note?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd be happy to stop at his place for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: That is very kind; I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Here is the note: just tell him I sent you.</td>
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
						<td>YOU: I bear a message from Lorytia Starhammer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What does the old witch want now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Did she send ye with a letter?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Let me see the message</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok holds out his hand-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a letter for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh ah.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok opens the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Well I will be a flying wad of Megaras spit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Can you believe that old hag wants me to do decorations for her party?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Absurd!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I cannot believe the audacity of that wicked Ulber-eyed tebu-sniffer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: By the gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: She should be flung into the Crystal, that old bog-sifter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: She wants symbol?</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I’ll give her a symbol!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok places a thin beaten iron sheet and puts it on to heat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Of all the strange ways to try to make contact with someone…arg!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The metal heats and Trasok pulls out a special hammer that seems to bear the likeness of Lorytia. Trasok points the face of the hammer at the heated iron sheet and delivers a savage blow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What do you think of it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Words can't describe it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Heh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok drops the Lorytia-headed hammer in the quench tank and turns the iron sheet over violently. Imprinted there is a huge dent that looks a lot like Lorytia.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Wait, I almost forgot the beard.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok takes some magnetized iron fillings and sprinkles them on the face of the dented metal, forming a beard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now there is a fine symbol for the evil coal-hearted shrew!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok places the whole in a quench tank. Steam rises as the metal cools.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now you tell that hairy faced clacker-kisser that Trasok sends his regards and give her this.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok Starhammer sends his regards.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Then he is not still angry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Let me see what he has sent along then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia holds out her hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: winces a bit then hands over the crest.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: By the gods, this will never do!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The old tyrant is still mad at me!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia inspects the workmanship.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: He did well on my beard though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: You would think after eight years he could put all this behind him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia looks sad and thinks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Oh, I am sorry, you are still here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: do you want to hear what happened?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It might help you to talk about it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: It was eight years ago, at the last gathering of the Starhammer clan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Trasok and I were involved back then and as chance would have it, I was chosen as a judge of a crafting contest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Well Trasok had submitted a piece, and I was trying too hard to be objective when judging.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I was too harsh on him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I gave him a score that was less than what he deserved; it was clear to everyone that his taking second place was unfair, and that it was my fault.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: What was worse was that I responded badly to his taking second place and felt the need to defend my scoring, so I gave him a scathing review of the work he had done very loudly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I nitpicked every detail and even made up some flaws that were not present.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: The old bird just walked away and has not spoken to me since.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Well, if he wants to hold a grudge, fine!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I will just have Harnquist make the Clan Symbol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Take this note and give to Harnquist.</td>
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
						<td>YOU: I have a special commission for you from the Starhammer Clan.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist reads the note.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Interesting; a Starhammer clan symbol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Well, Lorytia should know better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Only a Hammerwielder has the techniques needed to do some of the knot work needed for such a symbol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: They keep their tribal techniques to themselves to retain a certain originality to their work, and are generally the most advanced blacksmiths in Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: You have to ask Trasok about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: He is much more capable at this specific task than someone like me is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Return to Lorytia Starhammer and tell her Harnquist sent you back.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Harnquist doesn't have the training necessary to do this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I figured Harnquist could do anything that old fool Trasok could.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Goodness, I sure am sorry for sending ye trekking about all over the Dome for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I need one more favor from ye.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: If ye can figure out a way to get Trasok to complete the Clan Symbol in time for the party, I will give ye an heirloom my grandpappy gave me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Ye still interestd in helping me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Glad yer still with me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Okay, let me try apologizing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Lorytia writes a new letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Let us see here: 'Dear Trasok, I am very sorry I judged ye unfairly, I know ye worked very hard on your piece for the competition and you should have won.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I take full responsibility for shortchanging you on the scores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I was nervous and did not want our clan mates to think I favored ye too much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Please accept this apology in the interests of clan unity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Best regards, Lorytia Starhammer.' Does that sound good to ye?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Oh never mind, it is as good as he is getting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Now in order to complete the clan symbol, Trasok is going to need some materials; namely, an iron ingot and a gold ingot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: He may have some means to get them prepared for you, but ye might make your journey faster if you have them on hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: For now, all I want ye to do is go to Trasok, give him the letter, and see what he says.</td>
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
						<td>YOU: You might want to read this right away. It's important.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok opens the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: An apology letter!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I did not think the vile trepor-faced wench had it in her!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok reads on.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Oh bla bla bla clan unity!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Never would have been divided if she were not such a gobble-wit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Fine!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I will do it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Since you seem so interested, you are going to help me assemble it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I am going to need one iron ingot and one gold ingot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Return when you have these things and give them to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've brought the items you need for the Clan symbol.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: They look fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I am gonna work on this for a while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Go get me a beer from Brado to occupy yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I hate being watched while I work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Just tell him I want a beer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: When you have it, return and hand it over.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Trasok's thirsty. He sent me over to fetch a beer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: So he shall have one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I shall put it on his tab.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Here you go.</td>
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
						<td>YOU: The mug makes a satisfying 'thunk' as it is put on the table.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok is sweating and out of breath. Steam rises from the quench tank.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: It gets mighty hot in here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok smiles and drinks the beer down without pausing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now that is better!</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You seem to be a decent person.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Let me finsh inscribing the back here and then it is all yours.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok works at inscribing the back of the clan symbol.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: The inscription reads: 'Dear Trasok, I am very sorry I judged ye unfairly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Please accept this apology in the interests of clan unity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Best regards, Lorytia Starhammer.' There we go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Now, you know what you have to do next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes. I see another long walk in my future.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Here is the symbol Lorytia needs for the clan meeting; now maybe she will leave me be for another eight years.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: At last, I have it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Goodness, It seems to have gotten very dusty on the way!</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Will you do me the added service of taking this to Hiacheius Delichi for a polish and a protective coating?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure. Why not?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Wonderful; you will find Hiacheius near the waterwheel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: He is a technician.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Just tell him I sent you and that you need the Clan Symbol polished, and he'll put a protective coating on it too.</td>
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
							$npcName = 'Hiacheius Dilechi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hiacheius Dilechi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lorytia Starhammer needs your help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Oh let me see that!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius raises spectacles and puts out his hands.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Interesting, isn't it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: W-w-wow this is n-n-nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: It will cost you two hundred tria to p-p-p-polish and c-c-c-coated, or you can wager over my riddle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: If you g-g-get it correct, I will p-p-polish this item for you free of charge, but if you get it wrong you pay four hundred tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Will you attempt to answer my riddle?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I love riddles. I'll play!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Ok I will ask my riddle only when you are ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm ready to try.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Hiacheius breathes deeply and relaxes before speaking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Here is your riddle: Raithen told his two best guards that one of them was to get a promotion, but that they were so evenly matched he did not know who should get it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: He assigned each a specific trepor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: One he dyed red and one he dyed blue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: He told them race on their trepors to Hydlaa, and whichever of the two guards had the slowest Trepor would win.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Raithen departed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: The two guards were stumped and could not figure out what they were meant to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Each of them was busily trying to move slower than one another did when I stopped them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: They were clearly despondent, I encouraged them to dismount with me and tell me of their problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: I gave them a hint that might help them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: As soon as they heard it, they each mounted a Trepor and departed rapidly toward Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: What hint d-d-d-did I g-g-g-give them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: change trepors</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Correct, if they switch mounts they can actually race because getting there first would mean winning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hiacheius: Now you should take this back to Lorytia Starhammer and tell her it is polished.</td>
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
							$npcName = 'Lorytia Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lorytia Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here it is, all shiny and clean.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: Now I have a reward for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: You may not think it much, but it has been in my family for three generations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lorytia: I cannot thank you enough; hopefully this will help.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: The rock pick has a quality of 150, which is 3 times as high as usual.</td>
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
						<td>Rewards: 1 Rock Pick, 20 Faction with Hammerwielder, 10800 XP.</td>
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
