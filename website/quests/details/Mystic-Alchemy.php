<!doctype html>
<html>
<head>
	<title>Mystic Alchemy</title>

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
						<td>Mystic Alchemy</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Spiritual-Healing.php">Spiritual Healing</a> quest.</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Vladovic, did the cure for Charisa work?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra is reading a letter.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hello, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes, as a matter of fact I was just reading a letter from Sharven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It seems Charisa is feeling much better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Your efforts were...impressive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I think you are ready to embark on the Mystic's Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh yes, I am ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Very well then, we can get started.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what do I need to know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A LOT!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This branch of alchemy is far more challenging than any crafting you may have experienced.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is quite spiritual in fact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is the alchemy of the mystics!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That and you must endure a rather long story.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra grins.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Story?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-From Vladovic's tone, you get the impression you will be here awhile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As you may have seen, there is a very informative book called Alchemical Concepts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: My Grandfather wrote that book, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In it is the story of a plague unleashed by Laanx as a punishment to a group of Lemur who were led astray.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That was quite a golden age for alchemy and science in general.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It was during that time that many of these concepts were first discovered.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Through alchemy, the Lemur sought to perfect themselves in the eyes of Laanx.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: They thought by doing so, Laanx would forgive them and lift the curse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It was however also a difficult time, as you might imagine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There was lots of experimentation, not all of which ended as planned.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I imagine before successful potions, there were some failures.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As the failures continued, people willing to help test the new potions became scarce.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Some alchemists crossed a line and began experimenting without people knowing, by lying about what they were giving people to drink and use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Once this became public, alchemy quickly became frowned upon, much like what happened with magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But that's not important right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Despite that dark period, studies continued and soon other races showed a keen interest...</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: That was many years ago and since then members of all of the races in Yliakum have shown an interest in alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Ylians and Diaboli were the first among the other races to join.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Kran naturally showed an interest in the branches of alchemy dealing with gems and ores and like Lemur to Laanx, sought perfection in the eyes of Talad.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra chuckles a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Specifically for the Kran, it naturally branched off into experimenting with producing exotic combinations in food preparation, rather than strictly alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Diaboli became drawn to the energy of the Dark Crystal and sought to please Dakkru.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: So to this day many Ynnwn show an interest in alchemy but of course must be careful when dealing with certain metals.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Why all the religious implications?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Alchemy is all about transformations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As you have discovered by now through your own practices, many of these transformations and the tools used to make them are about removing impurities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Potions are created from extracts, essences, and dissolved forms of ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The tools evaporate items, taking just the purest essence of them; liquids are cooked away to remove all impurities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Even water as an ingredient is distilled so as to remove its impurities, however minute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: So a common theme of alchemy is purification.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Many alchemists are devoted to Laanx since they believe the Masked God blesses their efforts to achieve perfection through the purification of the unpure matter thus purifying their own soul in the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But it is not just a devotion to Laanx, but in fact, any of the gods.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Over time, they have all exhibited a sense of being pleased that their followers strive to seek this perfection using the ingredients made available to them in the world.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Xiosia provides many plants and animals and cares for the soil in which they grow and feed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The illness essence created from poisons has a direct link to the Dark Crystal of Dakkru's realm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Kran seek to use the crystals and metals which provide them nourishment to further their own efforts to perfect themselves in the eyes of Talad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: So you see, alchemy has a strong link to the gods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what does that have to do with this branch of alchemy?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Glad you asked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is natural that in any craft, there are those that aspire to the highest levels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: For alchemists, those who reach these lofty levels combined with a strong devotion to their god can sometimes become known as Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Alchemist Great Work is said to be the ultimate goal of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is to create the perfect stone, known as the Sages Stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This is believed to be the purest and most perfect substance achievable by mortal means.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Its properties are fabled: it is said the Sages Stone can cure almost any disease, bring back a person from the brink of true death and create a potion able to rejuvinate the drinker.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Mystic's Great Work is also the highest form of spiritual communion an alchemist is able to achieve with his/her/kras own god.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Achieving this Great Work will require immense patience and perseverance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It takes many many interactions to make your final potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you ready for such an undertaking?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I'm ready.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes, I think so, too.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra reaches under his counter and pulls up a book.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This is it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Mystic's Great Work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He pulls it away just before you can grab it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There are not many entries in it compared to the other branches of alchemy, but what most might not realize is one must perform nearly every one of them to make the final product.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I mentioned that plague before, the one Laanx unleashed long ago to punish the Lemur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The cure was eventually discovered pursuing this Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The powerful potion achieved was known as the Life Elixir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Taking the potion along with a devout pledge to Laanx's teachings was the only way one could be cured.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If you recall, it was included in your cure for Charisa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Years later the Lemur felt they were still not done and sought even further levels of perfection, claiming to bring the Sages Stone to life!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Like the Kran?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Not quite, but I suppose one could draw a parallel.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Let me explain the full process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Sages use three components: sulphur, salt, and mercury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: These represent the soul, the body and the spirit, respectively.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I know in your task, this was explained as spiritual sulphur, spiritual salt, and the spiritual mercury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In order to proceed, the alchemist must treat them so they become: The True Salt of the Sages, white sulphur, and dissolving mercury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: These are then mixed to form a bright red powder called red sulphur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The red sulphur is then combined with more white sulphur and dissolving mercury which creates the all important...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra pauses for dramatic effect</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: ...Alchemist Egg.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: An egg? Is it actually alive?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra chuckles a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: One could say that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Certainly the Sages believe it to be true.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In order to become the true Stone of the Sages the alchemist egg must face three important phases.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: First is known as Dakkru's realm or Blackness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The egg must putrefy and alchemically die, becoming a black dead stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The second phase is known as Laanx's realm or Whiteness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The egg is purified and ferments until it becomes a bright white stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The stone is still dead at this stage but it has the potential to return to life in the next stage.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Whiteness and blackness... Sharven mentioned that.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra nods and smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Exactly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In your task, YOU were the alchemical egg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In the Blackness stage, you died.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Upon your return you entered the Whiteness phase.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Like the egg, you were purified by your atonement ritual and in returning from the Death Realm with Dakkru's curse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: At that point your blood could be used to extract a powerful essence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This is very similar to the egg and through your experience, the hope is you can now better appreciate these transformations.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You can be told anything, but to experience it for yourself is how you achieve the greatest appreciation for why things are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Anyways, back to the egg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The final phase is known as the Azure Sun's realm or Redness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The purified dead egg is alchemically brought back to life to become a First Order Stone of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And this is known as the First Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: What results is useless stone but when treated with spirit, it is able to create the Life Elixir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But a true Sage is not done yet!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There's more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes, much more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Second Work is to mix the stone with yet more red sulphur and dissolving mercury to create the Second Order Stone, from which one can make the Rejuvination Elixir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: And finally, the Third Work is to do it all again to create the Third Order Stone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The Great Work is now nearly complete and the matter is now nearly perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: From the Third Order Stone of the Sages it is possible to create the most potent of all potions...the Universal Panacea.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As I recall you remember that too, hmm?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes I remember, Liera used that to cure the plague on the third level.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Yes, it was a great accomplishment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But as powerful as Universal Panacea is, it did not, in itself cure that plague.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It was a potion derived from grendol poison blood that was able to stop the disease from progressing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Other potions, topped off by a Universal Panacea, were administered to help restore health to those infected.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It was, in a sense, a cure for the cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Since it takes so much work to create just one potion, it took quite some time to make enough ready to treat everyone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You were able to help Liera get the right combination of potions down to the third level so they could get to work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Am I ready to begin?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I am not going to teach you the step by step process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hopefully what I have just explained can guide you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The particulars are for you to discover.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I imagine you will struggle to find your way, but it is through this struggle that you learn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As I said, there are only a handful of steps described in this book, about 30 or so to be exact.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But you must perform almost every one of them to make the great Universal Panacea, the ultimate potion.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: One thing you must realize, and this is what the Lemurs have always been adamant about: the purpose of the Great Work is the purification process, not the potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The potions are simply an outcome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Start by focusing on the First Order Stone of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Begin making the ingredients for it, then eventually a few of the stones, making higher and higher quality stones as you go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Then eventually, take those and make Second Order Stone of the Sages, and so on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Here is your book, study it well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra finally hands the book to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What materials should I stock up on and how much?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Let's say you just make a First Order Stone of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You'll need about six iron ores, at least that many niters, some spirit, and a whole lot of tartars and stibines, which you can buy from me or other alchemists.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I suggest you buy large piles of them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What are tartars and stibines?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Tartar is a special kind of reagent just for this branch of alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is a chemical compound first discovered as a byproduct during the making of wine, of all things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: A stibine is a metal-like ore that smells a lot like rotten kikiri eggs when pulverized.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is comprised of pure stibine, known as antimony, and sulphur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Antimony and sulphur are basic elements and this ore which contains it is mined underwater on the lower levels by the Nolthrir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The StoneHammers also brought lots of it from the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: They had a good sense it could be valuable, even if they didn't know why yet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Because of these rare locations, you can't mine the stibine ore yourself, you can just buy processed powder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You'll need 4 such stibines to create enough powder needed for just one ingredient.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Any final advice?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I suggest studying the book and understanding what it will take to make each of the three Sages Stones and the Alchemical Egg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Then just focus on making some of the ingredients for awhile until you have a good supply.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It will take much work to make any of the Sages Stones.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: This looks like a lot of work, thanks for the lesson, Vladovic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You are welcome, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Good luck in your studies.</td>
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
						<td>Rewards: 1 Mystic's Great Work, 2 Level in Alchemy, 0 Faction with +10 Science Association, 16400 XP.</td>
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
