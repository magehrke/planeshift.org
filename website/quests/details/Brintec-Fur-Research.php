<!doctype html>
<html>
<head>
	<title>Brintec Fur Research</title>

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
						<td>Brintec Fur Research</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/A-Wife's-Dilemma.php">A Wife's Dilemma</a> quest.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was wondering if you had any more work I could do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Now that you've helped me, I'm a bit more confident in your abilities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I am doing some research on the fur used for my carpets and it seems to me that Bjorid Haakthir is not giving me the same quality materials as in the past.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh, this sounds interesting, count me in.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Great, at least I can count on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Here is my plan: go to Bjorid and try to investigate which materials he uses for his latest carpets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Then ask him some prices, and come back to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I will then compare those materials and prices to the ones he gives me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: See you later.</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. I am interested in learning more about your carpets.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Oh, you are very welcome in my shop and laboratory!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: So you want to know more about my carpets…</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: it's a broad field, what you would like to know in particular?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What kind of materials do you use?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: The materials vary a lot from customer to customer, but in general I use fur from animals that have been hunted in the last three months.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: That assures the best quality.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: For low volumes I usually hunt those myself; in times of higher demand, I just buy the hides in the same place when new caravans arrive in town.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where is this place?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Eh, telling you my tricks is not something I would like to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I can just tell you that the workers here in Dsar Akkaio know me very well, so they select the best hides for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Merrinez is particularly helpful; he has a good eye for fur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Feel free to ask him about me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: What else you would like to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are the prices?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Well, I can show you what I have, maybe the most expensive and least expensive, so you have a rough idea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: This fine one hundred square meter carpet made of Ulbernaut fur costs about five thousand trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: This one, twenty five square meters, is made of mixed bear and fox is about forty trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: I'm sorry, but now I have to return to my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: If you need something else just ask.</td>
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
							$npcName = 'Merrinez Dholant';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Merrinez Dholant</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. Do you know Bjorid Haakthir'd?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Oh yes, I know him pretty well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He makes and repairs carpets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I sell him materials from the caravans pretty often.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He's a good customer…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about the material he uses for his carpets?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Well, the fur is usually retrieved by caravans, where big merchants collect the goods from local hunters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: So I have different sources each time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who are these merchants?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I can name you a few if you want, they're not a big secret.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Mainly they're the same people, like Ervin, Edrich, Hygrnn…</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: reputable names.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Mind you, recently there has been a new guy selling furs who has very low prices.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: His name is Thorian.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Thorian?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: Now that you ask me, I remember his name because it wasn't on the order list.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I was surprised to see that some of his boxes had no official source.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: I asked the caravan driver where he got the goods because the source is usually present on orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He minimized the issue, saying he just forgot to write it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: He told me the name 'Thorian' or something similar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Merrinez: That's all I can really say about it.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am interested in some furs.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Hey, why are you interested in furs?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian Gronk looks at you suspiciously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I'm not a fur seller or buyer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I never sold furs…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: and if someone told you something different, than he is wrong!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Do you think I could sell furs without a shop?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian Gronk becomes red in the face.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: The major fur shops are in Ojaveda, how do you think I can bring those there?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: It's very far!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian Gronk puts on a haughty expression, daring you to answer him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You sell the fur to the caravan.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Well …</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I could probably, but I didn't!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian gets more nervous.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: You have no proof of that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: There are many caravans, and many fur sellers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Also, I didn't write my name on the boxes!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian claps a hand over his mouth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Ouch…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: erm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I mean…</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: we should stop this discussion now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Go away!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-It doesn't look like Thorian will talk to you about the subject any more.-</td>
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
							$npcName = 'Bjorid Haakthir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Bjorid Haakthir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: tells Bjorid the story.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Ah, that's terrible!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Are you saying that some boxes were delivered to Ojaveda by this Thorian guy and there is something not quite right about them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Well, I can check the latest ones I received right now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Bjorid opens a large crate… and starts to observe closely some furs with a lens… a few minutes pass.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Oh my, this is sheared goujah fur, cut and painted to resemble a higher quality one!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Luckily I've only used a few of them for now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Let me check…</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: ah, I gave some to Brintec, one of my best customers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Bjorid: Please apologise on my behalf to him, and tell him I will send a replacement for the bad carpets.</td>
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
							$npcName = 'Brintec Dev-Onni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brintec Dev-Onni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Ah, that's why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I decided to stop buying furs from him given the poor quality of the latest ones, but your story explains much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: It's not his fault.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: I will inform the guards about that guy even if there's no proof that he's done anything wrong.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: They should keep an eye on him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: You have been very useful to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: You deserve this reward from me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brintec: Thanks.</td>
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
						<td>Rewards: 1 Lightning glyph, 35 Faction with Crafting Association, 9922 Tria, 16400 XP.</td>
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
