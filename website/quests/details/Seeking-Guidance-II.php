<!doctype html>
<html>
<head>
	<title>Seeking Guidance II</title>

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
						<td>Seeking Guidance II</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Seeking-Guidance-I.php">Seeking Guidance I</a> quest.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi. I am searching for the legendary weapons that belonged to Lerivia Smare. I need information about a Diaboli who is said to have had the items, Perg Zrar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin doesn't show any sign of interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>-He begins to talk as if he already knows all about your enquiries.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Tisd isn't a Diaboli or Dermorian affair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Tisd is Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Why are you wasting my time by bothering me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to know if Perg Zrar or his daughter Mzapt still possessed the famous weapons when rejoining the Death Realm.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Dakkru doesn't bother with such details, and neither do I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin now speaks as if he witnessed what he speaks of himself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: The Diaboli got rid of the unholy items, to a Ynnwn from Lerivia's circle of acquaintances.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see. Thanks. Do you know who that was?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: You step in the Goddess's waters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Nevertheless, you are asking the wrong coven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: But doesn't everyone end in Dakkru's embrace?</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin smirks or what looks like it.</td>
					</tr>
					<tr class="quest_npc">
						<td>-The two dark holes of his eyes glimmer dark purple light.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Menlil Toresun will surely like to spend his time in futility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin: Go ask him.</td>
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
							$npcName = 'Menlil Toresun';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Menlil Toresun</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good Day, Menlil. [You tell Menlil about your research.] I have been told to ask you about the Ynnwn.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Laanx bless you, <strong>YOU</strong>.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: I heard of your investigations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: You see, despite most races, Ynnwn don't have an evident attraction or aversion toward any god.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Such freedom can be intoxicating, sometimes even troubling as paths and choices can be too vast.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Even unconsciously, our race searches for guidance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: One such as Rulayne found it in Dakkru as for me, it is Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: It can be wholesome.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand, Menlil. But can you tell me about this Ynnwn? Do you know where the weapons are?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun chuckles, he nods as if he knows exactly where they are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: They are in each of us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Tisd relates very little to what came after Lerivia's death.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: In fact, everything you heard about her and them is myth and legend, traditions for the most recent stories.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: The Diaboli of Tisd confided "Defiance" and "Confidence" to his daughter Mzapt, who was an Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Mzapt joined the cause and brought more with her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Though, Mzapt was a radical.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: She developed a wild hate toward Dermorians, probably linked to her mother.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: She had quite a number of disciples.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: She slowly pushed the Ynnwn out of Dermorian influence while the Diaboli were on their way to disappearing into the Death Realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: With hindsight, we could say that she contributed to forging the Ynnwn a proper identity.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah! That's interesting. Thank you, Menlil. Any ideas what she did then? Where are the weapons today?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun continues talking as if you said nothing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: But a character with such a furious personality would never end well, in a legend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Ynnwn are a peaceful people, they melt in the population they meet, in their culture, they adapt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun pauses and then speaks slowly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: A mage marginalized Mzapt, convincing the community that she was a clear danger they should fear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: A riot is said to have taken place and Mzapt had to give up Lerivia's weapons to a charismatic mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: And he went off with them, preaching his ideal of peace and unity.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A mage... Who was he? To which Way Circle did he belong?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: Hum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun takes some time to remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: The legend calls him Daxosh Morona, if I recall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: I believe he belonged to the Crystal Way Circle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun smiles as you thank him and walk away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Menlil Toresun: May Laanx frighten the shadow from your path.</td>
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
							$npcName = 'Govell Mihdren';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Govell Mihdren</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Archmage. Could you tell me what you know of a mage called Daxosh Morona?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: You are the Klyros searching for "Defiance" and "Confidence".</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: I know the tale of this mage well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: The Circle often uses it to illustrate to our apprentices the various manners to use Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren pauses then explains on in a confident tone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: In fact, Daxosh was extraordinarily bad at magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: He couldn't even summon a proper energy arrow or cast the most basic healing spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Despite this evident fact, he became one of the most respected members of the Circle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And I suppose it's because he was wielding "Defiance" and "Confidence"?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren looks at you, a slightly worried yet benevolent expression develops.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Daxosh was endowed of a very rare talent for persuasive rhetoric.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: He could convince anyone of anything or the opposite in a minute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: He was able to gather people together, from different religions, races, motivations...</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: In fact, he was extremely charismatic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Not exactly the most intelligent being, but kind hearted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: The fact he supposedly wielded the weapons certainly contributed to the influence of his ideas.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why "supposedly"? I thought he took them from Mzapt. And why do you teach your apprentices about Daxosh if he couldn't even cast any Crystal Way spells?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Because they are a myth, <strong>YOU</strong> as much as is Daxosh Morona.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Also, he is the most brilliant representation of the famous "Crystal Aura".</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: A spell isn't simply a mechanic, a technique.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: It's mostly what you make of it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: "A myth", that's all I've heard since I started this research. I have the strong feeling that I've been conned this whole time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: It's probably because it's true, <strong>YOU</strong>.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: You are on a quest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: And its purpose is truly important.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: You must continue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Who knows, you might just find these weapons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: If they are a myth, then how could I find them? I wish everyone would start to play fair.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Play?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: This is not a game.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Most Ynnwn, wonder about their culture at some point.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: To which culture do we belong, to which race do we feel a strong identity?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Which races' past forged who we are now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Do we feel Ynnwn or do we feel like a simple fruit of a Dermorian and a Diaboli?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: What is being a Ynnwn?</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: These are questions that many Ynnwn crave to answer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: We don't feel diminished by it, but we are curious.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: It's the most positive attitude one can have, I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: We are proud people; it's our way to stand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren pauses, and asks gently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Now, do you wish to know more about "Defiance" and "Confidence"?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: The shield "Defiance" was given to Lerivia by her Dermorian father; the sword "Confidence" by her Diaboli mother.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Lerivia's pure will to forge herself and her siblings an independent identity is said to have imbued the weapons with a kind of spiritual power.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Or a magical power, I can't tell you which.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Supposedly working like the Crystal Aura; on a greater scale, of course.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's why you teach about Daxosh and his use of this spell?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Definitively, yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: It's a typical Ynnwn spell if you dare to push the argument that far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Daxosh Morona was first based in Listarindel but preaching involved travelling in his great plan.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: The goal was to spread the word, to kindly present and support the existence and uniqueness of the Ynnwn race.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: He traversed the dome travelling to all the major cities including Ojaveda, Hydlaa, Gugrontid, Amdeneir and all seven of the Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: He settled near the Eagle Bronze doors to be near to as many of the major cites as possible, this is where he stayed until passing to Dakkru.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And that's where I shall go now, I suppose? The Eagle Bronze Doors?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Most certainly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: You could start by questioning the administrator at the fortress, Beniua Busuka.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren insists, gravely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Govell Mihdren: Remember who you are working for, <strong>YOU</strong>.</td>
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
							$npcName = 'Beniua Busuka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Beniua Busuka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day, Miss Busuka. Do you have a minute? I am seeking information about the whereabouts of a mage called Daxosh Morona. I know he died not too far from here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka smiles, taking you gently to a more discreet corner of the room, not far from Aerayau Strongwill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Yes, <strong>YOU</strong>, I was waiting for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I've made an effort to try and remember precisely what I've heard about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: As far as I recall, the weapons never left the fortress area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: But it has no importance anymore now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: You've completed your quest already largely, I think.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, I haven't. I am searching for the weapons and I will continue do so until I find them or until I find proof that they never were anything but a myth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: They ARE a myth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is Lerivia Smare a myth then, as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: No, of course, not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Lerivia is history.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: She was as real as you and I.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Then nothing proves that the weapons weren't real too?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka seems speechless for a while then nods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: You are right, nothing proves it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: But in fact it doesn't really matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: What does matter is the "Ynnwn principle" itself, how alive it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Without offence, Miss Busuka, I would be glad if the "Ynnwn principle" would cooperate more directly. I am working for Vigesimi Stronghand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka looks down, embarrassed. She then proposes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Let's say that it's true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: That Lerivia really wielded "Defiance" and "Confidence", that those weapons were real.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Let's say that, yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Daxosh arrived here and most certainly came up to the fortress, at least to find a refuge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: He could continue with his teachings in the surrounding villages and cities while being based here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: His death must have occurred not so long ago, knowing that a Ynnwn can live around 130 cycles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Our race was already well integrated and seen positively in Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: The weapons would likely have become useless, evidence a Ynnwn could achieve their goal without magical help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: They fulfilled their and Lerivia's original goal.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I understand your idea. But, for historic note, couldn't he have entrusted the items to someone?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Could be.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: If that is the case, it would obviously be to an Ynnwn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I am sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I have access to the fortress archives, I will go and dig there and try and get some names.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Please, wait for me here, take a seat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka disappears off to look through the fortress records. As she does, you see Aerayau Strongwill motioning for you to approach him.</td>
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
							$npcName = 'Aerayau Strongwill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aerayau Strongwill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Commander Strongwill?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: <strong>YOU</strong>, apologies but I overheard your conversation with Miss Busuka.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: You are working for Vigesimi Stronghand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Commander Strongwill.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Please, assure the Vigesimi of my support.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill then announces, almost excited.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: I might be able to contribute more concretely to her "project".</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: The things you said to Beniua remind me of a Dermorian poem called "Spreading Roots".</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: It's a metaphorical piece of text or so I thought, speaking of the fortress squadrons...</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: I never made the link with Tisd until today!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's very interesting! Is there any information in this poem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill nods, looking to your left, blinking as he struggles to remember the text.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: I will try to write the poem down, it will come more easily then, I guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill struggles some more, scribbling on a piece of parchment that he finally hands to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: There it is and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Miss Busuka is back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau Strongwill: Remember, report my support to the Vigesimi, <strong>YOU</strong>, will you?</td>
					</tr>
					<tr class="quest_npc">
						<td>>You have received an Aerayau's Dermorian Poem.</td>
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
							$npcName = 'Beniua Busuka';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Beniua Busuka</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Welcome back Beniua. And thank you. What did you find?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>-She waves a folder filled of old paper in front of you, proudly.-</td>
					</tr>
					<tr class="quest_npc">
						<td>-Her forehead is covered with dust and she coughs some.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I quickly browsed those documents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Unfortunately there were very few Ynnwn in the fortress and they were all soldiers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Maybe that's a good thing...fewer people to track down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Maybe one of them is the right one, but all were stationed deeper in the surrounding caves or at outposts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And Dermorians?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Dermorians?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Why Der...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka interrupts herself as if she just understood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Ohh!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Why not?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: It would fit with Daxosh's idea of unity and peace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Let me check...</td>
					</tr>
					<tr class="quest_npc">
						<td>-She opens the folder and reads a bit in silence then pokes a line.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: There.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Four were listed...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Hmm, soldier...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: This one was an officer, Dalantai Seorin...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Ah, no, pardon me, he's 60 years old and still alive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: A bit young for Daxosh, I believe...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Wait.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: This one was responsible of the civilian barracks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: It's a woman, Bayarma Falarill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: The approximate dates fit, as well as her activity...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka looks at you expectantly as much proud as curious in unexpected hope.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please, read this. [You hand Beniua the poem Aerayau Strongwill gave you.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka reads, clearly impressed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: By Laanx!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Braid my hairs and call me a rivnak, I never even imagined this could be!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka's now speechless, hands you a token to take the pterosaur back to Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Use if you can to get back faster.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: Thank you, <strong>YOU</strong>.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua Busuka: I believe that now, we have a conclusion.</td>
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
							$npcName = 'Amidison Stronghand';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Amidison Stronghand</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Vigesimi Stronghand, I think I solved the great "riddle" you assigned to me. I can't tell for sure if it's all a myth or true history, but the fact remains. [You summarize the information you gathered for Amidison and give her the poem.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: And so the brave soul is back from her journey.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand puts a hand on your shoulder after reading the poem.</td>
					</tr>
					<tr class="quest_npc">
						<td>-You can feel her emotion.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: <strong>YOU</strong>, what you accomplished these past few days was, is, truly a gift for the Ynnwn people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You probably realized it by now but you renewed the link that unifies us all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: This is the strength of our people, to be able to gather everyone under a cause, be it good or bad, it is our purpose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: This is why we prefer to live in cities and this is why we are imbued of other races culture.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: We are a binding.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Crystal Aura of Daxosh...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand nods, laughing, probably out of nervousness or simply joy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Exactly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: To be perfectly honest though, I ignored the existence of this poem and the possible link to "Defiance" and "Confidence" with the Shadow and Sunshine squadrons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: The "challenge" and "audacity" of the poem surely refer to them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: This is incredible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Truly is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You went beyond all my expectations and I can't thank you enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I'm sorry for not laying all my cards on the table at the beginning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I wanted to avoid influencing you in any way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You more than deserve these crafting manuals as a reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: It seems pale now compared to the joy I feel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: Here you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand hands you two books.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: There are two of them...one for light shields and one for heavy shields.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: You probably have enough of these books by now to fill a library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: I guess there was too much information for just a single book, so they made two.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you Vigesimi Stronghand, I truly appreciate it. This will be put to good use. Oh, by the way, Aerayau Strongwill assures you of his unstinting support.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand looks into the distance, her eyes shining with a renewed pride.</td>
					</tr>
					<tr class="quest_npc">
						<td>-She even seems taller, her calm assurance almost palpable.-</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison Stronghand: We can be proud now.</td>
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
						<td>Rewards: 1 Enchanting Light Shields, 1 Enchanting Heavy Shields, 15000 XP.</td>
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
