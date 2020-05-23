<!doctype html>
<html>
<head>
	<title>Learning Nature's Secrets</title>

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
						<td>Learning Nature's Secrets</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Aleena-Teaches-Herbalism.php">Aleena Teaches Herbalism</a> quest, Rank 15 Herbalism, 5 Wragberries, 1 Lavender Flower, 5 Kingsfoil Leaf.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am ready to learn more about Herbalism.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena stops what she is doing and nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Ah, so you are, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I've got just the book for you here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena holds up a small book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I see you have been practicing making your teas and juices?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now let's look at some of the other things you can make with your skills, shall we?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh yes, I am ready to finally learn new things.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Let's make some oil using Wragberries.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I'll need you to go out and find me five Wragberries.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If you want, you can get more so you'll have some to practice with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Do you know where to find them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can find them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: See, noting where these plants grow can be very helpful and save you much time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: We shall continue once you've gathered some Wragberries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the Wragberries.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Wonderful.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena hands you a book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: This recipe book is called Nature's Secrets.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: What I'd like you to do is take five Wragberries and grind them into an oil using a mortar and pestle, then return to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made the oil, what next?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena nods approvingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now you can do one of two things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can just heat the oil in a pot, but you can also add some Lavender Flower with that to make Lavender oil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: That's what we're going to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Just get a Lavender Flower and cut it with a kitchen knife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Remember to consult your Herbal Remedies book for that part, then take it and combine it with your hot Wragberry oil using your new book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: This can be done using the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Heat this resulting combination using the pot until you have some Lavender oil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It smells fantastic and if you rub some on you, it helps your endurance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Give it a try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Isn't this stuff for the ladies?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena laughs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I suppose you can say that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It works all the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It can make a great gift for your lady friends.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If you don't want to smell all “girly”, you have other options too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I think Gobo oil is considered a bit manlier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You'll need a bit more skill before you can make that but the concept is the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Let's turn our attention to one other remedy, shall we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It's called a poultice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is a poultice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It is a paste spread on a cloth which can be applied to a lesion or wound.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: We can use various remedies as medicines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Let's make some Kingsfoil Poultice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You'll need some Kingsfoil Leaf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You're going to take it and mash it into a pulp using a masher, then grind the pulp into a paste using a mortar and pestle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Once you have your paste, apply it to this cloth.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena shows you a cloth and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Finally, heat that up in a pot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Give it a try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I did it!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Hah, you are doing great, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: This is great for healing open wounds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: A must for hunters going out on a long hunt or fighters in training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Well, that about does it for this session.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I've got one more book you'll find of interest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It will be about fifteen more lessons before you're ready, so come back then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Now you have more items to make so continue practicing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Do you have any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else can I make at this point?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena nods quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Yes, yes, we only covered a couple of things didn't we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: In addition to oils and poultices, you should also be able to make syrups and extracts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Good plants for that are Golden Ivy or Barberry Root.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can make extracts by making tea, then further heating it up in a pot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Once you have an extract, you can turn it into syrup by adding some honey and heating again in a pot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I can sell you some honey when you need some.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Pastes, pulps, extracts, and syrups are also used in alchemy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else is good for a poultice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I have found that using Red Mangrove Leaf, Sinaflar Root, or Wyn Reed makes for a good paste for poultices.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What about alchemy?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Oh yes, I almost forgot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: If you are interested in alchemy, now might be a good time to get started.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: For that you'll need to find Liera Zireti.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You can usually find her in her stand at the Hydlaa arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Remember, some of the things you can make now can be used in alchemy, so what you have learned here will help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: And if you think there's much to make using herbal, just wait till you get started in alchemy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena smiles and winks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get those cloths for poultices?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I can sell you those as well as honey for making syrups.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think that's it for now. Thanks for your help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: You are a good student, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Remember, about fifteen more lessons and I'll have one more very special book for you.</td>
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
						<td>Rewards: 1 Nature's Secrets, 1 Faction with Science Association, 13600 XP.</td>
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
