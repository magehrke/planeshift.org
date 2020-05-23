<!doctype html>
<html>
<head>
	<title>Telzanna's Acting</title>

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
						<td>Telzanna's Acting</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Orphia's-Apple.php">Orphia's Apple</a> quest.</td>
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
							$npcName = 'Telzanna Zarel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Telzanna Zarel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello, Orphia suggested I come and see you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna claps her hands together a few times as she sees you approaching.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Hi, yes, hello…</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I've just recently finished setting up my stall.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Fantastic isn't it?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Orphia sent one of her Orphia-lites down here not too long ago and he…</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: She…</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Kra?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Was very nice, I don’t remember.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's a very nice selection of items.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I've gathered some of the nicest items for sale from Hydlaa and nearby cities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: After hearing about this place being set up by the Octarchy, I had to come.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Had to, great here isn't it..?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Money to be made and friends to be…made, I guess.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I use to be in Ojaveda, lots of cheap carpets available there.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna points to a carpet on the ground and shuffles her feet about on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Like this one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You know there is another one like this but in blue that you could buy, very nice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are there many merchants?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Oh, you want to be a merchant do you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Hard life being a merchant, buy this, maybe selling that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Trying to make money, difficult, tough, tricky and testy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: There are lots of merchants buying and selling lots of many things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Armour, weapons, tools, helms, spoons, pillows, tables, beds, chests, barr-rr-rr-rrels…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna opens her eyes wide as she says the next items.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You can even get a nice jewellery box to keep all your lovely nice jewellery in.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: There are many merchants in the game. To buy from or sell to a merchant you can right click on one and chose the 'BYE/SELL' icon. You can then browse the items they will buy from you and the item you can buy from them. Not ever merchant will buy or sell every item so you should search around to find the right merchant fro you.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You really have collected a lot here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Yes, exactly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: A!</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: LOT!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Lots of things for lots of people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I have fishing poles for the fishers you might meet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I've got some musical instruments for those who want to play music, drums for drumming and liras…for lira-ing…is that right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Never mind, sure it is.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There are really musicians?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: What do you mean really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Of course there are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Plenty of people learn to play music, but it can be a little tricky to get to grips with initially.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should go and see Dhalia Colat in the area where the library is in East Hydlaa; she can give you lots of lessons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Are you interested in learning to play music?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna picks up a drum and begins to beat on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I think it would be great to learn something.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna talks as she drums.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Then you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Are in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Luck be..</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: cause I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Can play.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Drums better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Than anyone.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna smiles as she stops.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Or any two for that matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Here, you can have this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She quickly passes you the drum.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: And you can consider my drumming as your first lesson on how to play music.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Oh, and you will need a music score to play.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should scuttle off to the library quicky fasty to see Jayose-y for one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A drum, interesting, what about fishing?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna seems to have lost interest in you already.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: A drum what?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Oh you're still here, fascinating.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I would probably have left by now and gone to see that Klyros up by the gate, lovely man, kinda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should too, funny guy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzanna smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: For fishing you should search out Burdess Quirain.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: She will sell you a fishing rod once you can afford it and can train you to fish.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Fantastic fishing with a fishing rod!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you for the information.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Hey, don't call me crazy, but I’ve been thinking for the last few minutes that I should stop selling things and start up a drama school.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Exciting, no!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should think about joining in, lots of chances for Roleplay.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: This game is a 'Roleplay' game where most of the players act out a role. Players and Game Masters create stories for their characters which other people get involved in. A big part of Roleplaying is to stay within the world of Yliakum, and not disrupt it for others or yourself. Try to join into this Roleplaying as best you can. It might take you a while to get use to lore, history, settings, and style of the game. But don't be afraid to ask for advice from other people you meet, or to get involved in a little Roleplay with people you find to get use to how to make your new character act.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Roleplay?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Yep, Roleplay.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You know, acting out the life of a character you completely make up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Like me pretending to be a warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should try and make them a little different from yourself, just to keep things exciting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You get to chose their loves, hates, desires, wants, want nots…</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Every single part of the character or characters you are acting out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: No doubt lots of people you will meet in Hydlaa would be interested in doing some Roleplay with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Drama is what keeps a city lively.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Telzann smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: So what sort of acting do you think you would do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You've met a cook, warrior, smith and mage before meeting me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Do any of these characters sound like someone you would want to Roleplay as?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: As a point of game convention things that your character says, are In Character or IC, and can be said anywhere at any time. If you have an Out Of Character or OOC, question about game mechanics such as how to use crafting books or a problem with running the game and need to ask about them in the 'main' tab, then they should be kept within parentheses or square brackets or asked in a /tell or group chat instead of spoken directly in the main channel.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A warrior like Ibhaar.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: A warrior!</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Well if you were Roleplaying a warrior in a play, get this, based in a fake Hydlaa!</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You could be a great, well, warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You could be a hero or a devious baddy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You could protect the weak or even be nasty and prey on them for your own benefit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: That would actually be rather horrible and in a play you would likely come up against good people trying to stop you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: All sorts of things like this would be possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: But you should always remember to make your Roleplay interesting and try and Roleplay with as many others as possible in either day to day things or giant great big events.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: A play with one person in could be quite boring.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That’s interesting and might be fun.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Yes Roleplaying is lots of fun.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: To find people who might want to Roleplay with you once you get into Hyldaa you should just start by making friends.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Just talking to everyone you meet at places like Harnquist’s smithy, the tavern, the arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: These are all places you could try to meet people.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: It shouldn’t be too hard for you to find people to help you get started in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: People are generally friendly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: You should head up to Xenak now and ask him to let you into Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: I’m sure he will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Telzanna: Good luck!</td>
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
						<td>Rewards: 1 Drum.</td>
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
