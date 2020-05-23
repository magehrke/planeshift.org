<!doctype html>
<html>
<head>
	<title>Ibhaar's Battle</title>

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
						<td>Ibhaar's Battle</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Neave's-Hammering-Time.php">Neave's Hammering Time</a> quest.</td>
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
							$npcName = 'Ibhaar Senad';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ibhaar Senad</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, Ibhaar. Neave gave me this for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: So, that little smithy decided to repair my favourite Broadsword did she..?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: If she hadn't done such a terrible job of repairing it the last few times, it probably wouldn't keep breaking every time I use it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what is it you do around here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: What do I do?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: I'm the commander of the expeditionary forces.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar pushes his chest out as he continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: My men are sent out from Hydlaa when a city or village is attacked.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: It's my job to organise these Octarchy warriors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: And also unfortunately,</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He scowls a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: The mages…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: To make sure they are all sent or stationed where they are most needed; to help keep the peace or with fighting off invasions from the Stone Labyrinth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What sort of warriors do you have fighting for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: All sorts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: They use ranged weapons like bows, short and sharp, or long and heavy blades.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Some prefer giant war hammers or diamond sharp double headed axes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar seems to get a little giddy talking about all the weapons.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: There are many different types of blades you can use; it is all a matter of preference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: I personally have these two, one for hitting, and one for stabbing.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have a suggestion on what I should use?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar shrugs as he plays with his two weapons a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Depends on what you want to use, very close range for fast attacking, or slower, heavier things which you can do more damage with.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He starts to swing his blade as an example.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Or ranged weapons like bows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You should look at my collection of weapons.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar points using his sword at the table behind him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Just take a look; there is a fair selection on there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Oh, by the way, I am supposed to give you a basic lesson on how to use a weapon of your choice and then ask you to demonstrate it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: So, go and look at the choices and then come back and tell me which you want and I will give you one to use.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: For help on using free text to talk with NPCs click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'INTERACTING AND SPEAKING WITH NPCs'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: What you are required to do with Ibhaar is to look at the weapons on the tables and on the tree and find the name of one you want. Once you have picked one you need to return to Ibhaar, right click him and pick the talk icon. When the Quest options appear you should type the name of the weapon you want in the free text window and press enter to send the message when you are done. If you spell it right he will continue the quest with you.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: ynnwn greater bow</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Ah, so you want to use a bow do you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Well as you are Ylian I think its best you use this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar holds up a Dermorian Lesser Bow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: And let this be your very first lesson in Hydlaa, all the bows are basically the same; you hold the bow in your left hand and some arrows in your right hand.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar picks up some arrows as well.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: And every time you attack a target you fire an arrow off and hope it hits your target.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Be careful you are carrying enough arrows as you can very quickly run out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: I suppose you can go and kill some of the rats round here to practice after your expert lesson…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar looks over at his precious Rivnak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: In fact you would be doing me a favour if you did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: My Rivnak gets nervous every time they get too close.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Bring me a rat hide and I'll pay you a little.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: For help on fighting click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'HEALTH AND COMBAT STYLES'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Simply, you can fight with fists or a weapon, to equip a weapon open your inventory and pick up and then drop your chosen weapon onto you character's 'SWORD' or 'SHIELD' slot. As you choose a bow, the bow goes in the shield slot and arrows in the sword slot. Then approach a rat, select it and open the interaction menu, and then chose the attack option. If your 'INFORMATION' window is open you can select a rat and chose an attacking stance from 'full defensive' to 'bloody'. You can loot items from the dead rats by right clicking on the rat and choosing the 'LOOT' icon and taking the items you want from the loot window which will appear.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here I killed a rat and I have its hide for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar gabs the hide out of your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: YES!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Great, well done on killing the rats.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar throws the hide away into a barrel.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: This will no doubt lift a great weight from my Rivnak's nerves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You know, if you get another one I’ll reward you for that as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Hey…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You killed a rat; bring its hide here and I’ll pay you for it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here I killed a second rat and I have its hide for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar gabs the hide out of your hand again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: HA!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Just like I said I would.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: See killing these rats is easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: And here, this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tosses you a few more coins than the first time.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Just to keep their numbers down and I’ll buy one more from you if you get it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Hey…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You killed a rat; bring its hide here and I’ll pay you for it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Just like I said I would.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here I killed another rat and I have its hide for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Maybe there is hope you will become a reasonable warrior yet.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar drops the hide in a barrel with the others you gave him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Putting his hand into a small pouch he pulls out a circle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: For doing such a fine job in keeping my rivnak happy, this is for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He then tosses the coin at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, who do I need to see for more lessons on using weapons?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Well who you want to go and see first will depend on which weapon type you want to learn to use.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: I prefer my hammer and long sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: But let me give you a list in case the weapon you chose isn’t the one you will want to learn later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Of course the Octarchy is always pleased when one of its citizens wants to train in combat to become a useful addition to its fighting forces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Percival Hawthorne will train you with how to use all types of swords, Finara Plund on how to use all types of axes, Lori Tryllyn will teach you to use knives and daggers and Taulim Wilaal will teach you how to use all types of ranged weapons.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: To see information about how to train a skill click on the 'HELP' icon in the toolbar and in the 'START HERE SECTION' read the heading 'SKILL TRAINING'.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: There are three parts to training a skill. 1 - Gaining progression points which you are awarded by doing quests, hunting and making/gathering things. 2 - Buying skill training, to do this you need to find the correct trainer and spend Tria and Progression points to get 'theoretical training'. 3 - To gain the next level you then need to practice the skill, by fighting, harvesting, crafting etc.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Using weapons is all well and good, but what about armour?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar bangs his fist against his chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Here is some of the finest heavy armour you are ever likely to see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar checks the spot he hit on his chest to make sure there are no marks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Well, I suppose it’s probably worth me telling you who to see to learn about using armour.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You wouldn’t want to become expert with a blade and use it in combat with no protection.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: So Jefecra Harcrit, a member of the Hydlaa Guard can train you in using heavy armour once you are strong enough to wear it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Grimal Bloodaxe, a proud StoneHammer can train you in how to best use chainmail or medium armours again once you are strong enough to wear them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Finally, Jeyarp Grotemey who has a small stall selling leather goods can teach you how to use leather armour effectively.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where is the best place to start hunting beasts?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar smirks a little.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: That’s funny.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Most of the creatures running about these lands will strike you down with one blow if you don’t train enough before running about waving your sword trying to get one of them to impale itself on the end of the blade for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: HA!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: But if you seriously want to jump straight into fighting there are lots of little creatures in the sewers if you can find your way in and are brave enough to venture down there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: There are also lots of different creatures and gladiators of lots of different sizes and strengths in the Arena which is probably a much better place to start.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well if I’m going to get squashed so quickly how can I heal myself?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: There are a number of ways; eating food someone has made is a good simple way, but don’t eat too much or it might just make you worse.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You can use herbal remedies or potions which someone has made or you have bought to heal yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: And I guess…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: If you are desperate…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You can use magic…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what about using magic?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar stares at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His eyes bulge and a vein on his forehead throbs as he seems to get ready to explode.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: MAGIC!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Magic…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Really?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: I don't use magic, of course I don't use magic, clearly I don't use magic…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Sword and steel and hard training will make you a real warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: You will not get me helping you with magic or anything to do with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ibhaar: Run off to…that…Dermorian, Orphia, over there if you want to get to use that horrible horrible stuff.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ibhaar points to his left a little, down the road.-</td>
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
						<td>Rewards: Weapon of choice, 600 Tria.</td>
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
