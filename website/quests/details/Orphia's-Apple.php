<!doctype html>
<html>
<head>
	<title>Orphia's Apple</title>

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
						<td>Orphia's Apple</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Ibhaar's-Battle.php">Ibhaar's Battle</a> quest.</td>
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
							$npcName = 'Orphia Eldri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Orphia Eldri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, are you Orphia?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The use of Azure Way magic to control the air, linked to, oh no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: That can't be the reason…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia trails off mid-sentence and smiles pleasantly as she notices your presence.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I'm sorry, I didn't see you for a moment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I've been engaged in a little magical experimentation, but never mind that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You must be one of the new arrivals?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia holds up a hand to stop you from answering.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: No, don't tell me; Ibhaar sent you on your way towards me with some form of insult or profanity against my craft?</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Am I correct?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you really are a mage as he said?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I'm unsure if I am whatever names he may have called me, but I certainly am a mage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I have studied at least the basics in each of the six Ways of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: That's why I was chosen as the Octarchy's representative to welcome any potential students of the Ways to Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And you know enough to be able to teach about the Ways?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia spreads her arms to move your attention to the tables nearby.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: As you can see from my collection of artefacts, I do have some experience.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She nods while studying you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: But I shouldn't let items on tables speak for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Magic can be dangerous to learn and so my ability, not words, should be what acts to reassure you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia points carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Have you noticed the apple, just behind me floating above my enchanter?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's floating?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Yes, it really is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia smiles pleasantly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I was using Azure Way magic to cause it to levitate, but it's given me a little trouble since I managed that.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What sort of trouble?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is better to observe than merely to tell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Please, pick up the apple and pass it here to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To pick up an item, right click it and select the hand icon. The item will go into your inventory and a message will appear in the system tab indicating you have done so.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's the apple.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia balances the apple on the palm of her hand for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Now watch it carefully because…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She waits and then closes her fingers around it. After some moments the apple shimmers slightly with faint azure light and then a second apple appears in the air where the first one was to begin with.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Now that I told the magic to hold the apple in the air, the magic seems unhappy if the apple is taken away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It seems that it creates another apple instead to make up for this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia takes a bite from the apple she is holding and then drops her hand back to her side.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I'm hoping to develop this further in time to see if I can find out where the new apples come from.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles once again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Now, perhaps having seen the progress of my research, entrusted to me by the Circles, is providing, you will trust in my ability to teach you as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Okay, I think I could learn from you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Then I think I can teach you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: If you could tell me which Way you are most interested in learning about, I could certainly try to answer any questions you might have.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I don't know enough to choose one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I would suspect the choice is a difficult one for many, but I can tell you which Ways you have to choose between.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Let me see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia reaches for the glyph sack which hangs at her side and pulls out several glyphs. She holds a new glyph up to show you with each Way that she mentions.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The ways are Crystal, Dark, Red, Blue, Brown, and Azure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Each one has its own strengths.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She nods reassuringly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I know it's a lot to take in, but we really should only focus on one of the Ways for the time being.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But what if I want to study other Ways as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You can change your mind after reaching Hydlaa and study another then, but which would you like us to look at for today?</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Perhaps you would like me to tell you more about some of the Ways first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: If so, just tell me which you'd like to hear about.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You need to use the free text box to learn about at least one magic Way. You can choose between Red Way, Blue Way, Dark Way, Crystal Way, Azure Way, or Brown Way.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: red way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: No one can dispute that Red Way magic is very popular here in the Dome; it is powerful, strong, and attuned with fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It has many powerful attacking spells most involving heat, this is also why smiths usually study it to some degree.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The opposing Way of Red Way is Blue Way, so it is advisable not to study both of these at the same time.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: blue way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Blue Way magic is linked to water and time and anything that flows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is in opposition to the fire of the Red Way, and is more aligned with protection and can even be used to heal people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Its link to all that flows can also let you sense the magic which flows though items which can be useful.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've made my choice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Are you sure?</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You can still ask about any other Ways or I can go over a Way again if it will help you decide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You just need to ask.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: azure way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Azure Way is the magic of the air and of the mind, with which you might find yourself able to eventually influence the thoughts of others.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia pauses and smiles slightly, looking back toward the floating apple again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Or with which you might cause apples to levitate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is opposed to the Brown Way, so these two should not be mixed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: brown way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The magic of the Brown Way focuses on the stones and the earth and on protection and using nature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You can use it to create armour for yourself or to shake the ground beneath the feet of one who would harm you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is also opposed to Azure Way magic, but can work in harmony with other Ways.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: crystal way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The Crystal Way is about light and life and energy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is pure and famed for its use in healing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You should avoid learning too much of the Dark Way if you are interested in Crystal Way magic, as they do not mix well together.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: dark way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Dark Way magic opposes the magic of the Crystal Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It isn't evil as some might have you believe, but it draws its energy from death and entropy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It can be used to spread illness or to manipulate shadows into turning against their owners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is these things that can be used by evil people, but does not make the magic, itself, evil.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: I have heard that to advance far you must not be afraid to seek your own death as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'm sure, I have made my choice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia nods slightly and shows you the small collection of glyphs once again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Then tell me your choice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: crystal way</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Very well then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is a good enough choice, though of course all choices are good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: All Ways are worth the time to learn about.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia selects a glyph and hands it across to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You must begin by learning to purify this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I purify the glyph?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Talad created the glyphs so we could use magic, but to use a glyph you must first connect it to yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Focus on it carefully and try to catch hold of the energy it is connected to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: For help on using glyphs and magic click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'MAGIC, GLYPHS, and SPELLS'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Simply, in the tool bar open the 'SPELL BOOK', then click on 'RESEARCH MAGIC'. You must now PURIFY the glyph you received, to do this click to pick it up and then drop it onto the PURIFY icon in the bottom left corner. Once purified you should see a new background behind the glyph icon. To find a spell place the glyph in the first of the four 'ASSEMBLE SLOTs' then click the 'RESEARCH MAGIC BUTTON. You may have to click many times before you find the spell. Once you have found the spell it will appear in your spell book. To cast you need to pick a target for an attack spell and click the spell name and click cast, for a self casting spell just click the spell name and click cast.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And then I can learn spells?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia lowers her head gracefully to hide a wide smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: It is good to see you are so eager, but yes, then you can begin to learn spells.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Over time you will find more powerful spells can be cast by combining different glyphs, but for now you have just one glyph and so you must use that alone to find the most simple spell in your chosen way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Now once you have purified it, you should be able to sense the energy it connects to and use that connection to control it in a small way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia motions toward your hands and the glyph she just passed you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Go on, try.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And what should I cast this spell on?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Well, I have studied the lower spells in all of the ways, and considering your choice…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia lowers her voice slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Ibhaar would not like it, but you could always go back and practice against one of those horrible rats that seem to terrorise that area.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Otherwise I'd recommend waiting until you enter the main part of the city and investigating the arena for a place to practice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: After practicing, where can I learn more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: There are many people through Hydlaa and the Dome who can teach you more, but the best person to begin learning from is Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: He can be a little long winded, but he will teach you much if you show willing and he will be able to tell you about the Circles and how to gain membership of one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia moves slightly, looking toward the floating apple again as she continues to speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You can usually find him in his magic shop just outside Hydlaa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I might speak to Levrus then. Is there anything else I should know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Well, he will perhaps sell you some other simple glyphs as well, though you have to realise that casting spells with glyphs is not the only aspect of magic.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia turns to look at you again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: The crafts of herbalism and alchemy are often connected to the Ways and can even improve your use of the Ways as well.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How would I learn more about them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Oh, Aleena often sets out a work bench on the roof of the tavern.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: She'd be the one to ask about the use of herbs, and you need to learn the basics of herbalism before you should think about progressing to alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You could also think about seeing Durok, a Kran often found in the library.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Kra will introduce you to the Science Association which herbalists and alchemists belong to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you. I will remember.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: One last thing then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Head down the steps just on from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: You should speak to Telzanna before you move on to the city proper.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: She might have some supplies you could barter for.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Orphia smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: And please, take an apple.</td>
					</tr>
					<tr class="quest_npc">
						<td>Orphia: Wherever it is they come from, they really do taste rather nice.</td>
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
						<td>Rewards: A glyph in a Way of choice.</td>
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
