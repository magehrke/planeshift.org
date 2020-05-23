<!doctype html>
<html>
<head>
	<title>Retrieve the Troublesome Sword</title>

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
						<td>Retrieve the Troublesome Sword</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Winch Access.</td>
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
							$npcName = 'Venec Agenwolfer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Venec Agenwolfer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail. I am looking for some adventure.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Such a bold Hammerwielder to approach me while I am on guard duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Perhaps I am looking at someone who has helped Raithen at what the Hydlaans so charmingly call 'the Eagle?' Then perhaps you can use your skills to help an actively-retired Commander at what you would probably call 'the Serpent.' It's just beyond the mouth of the Radiant River.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: It's quite far from here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: I require some evil artifacts purified.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: This is not a quest for the light-hearted or the unskilled.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Do you dare?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Just what I was hoping for, I'll do it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Two ancient swords of great evil have been put into the world and threaten Yliakum as we speak.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Bringing me one of them will be enough, to start.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: One of them was recovered from the Stone Labyrinths and was last known in the possession of Trasok Starhammer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Venec puts a finger to his chin in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Make sure you give Trasok any information he requires about it first if you choose to recover that one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: However, there is a second one that originated from the Jade Caves, but it was taken and kept securely by the squadrons at the Eagle Bronze Doors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: That is, until its recent theft.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: A good place to start would be asking the soldiers there about the stolen sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: By all appearances, they appear to be nearly worthless blunt swords, but it is imperative they not fall into the wrong hands.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Good luck.</td>
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
							$npcName = 'Tarmeen Alecheech';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarmeen Alecheech</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know anything about a stolen sword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Oh, the stolen sword?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: That's quite a tale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: An ynnwn approached me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I'm pretty sure he was from Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: He said he was a retired miner from the Jade Caves, and that he could prove the sword belonged to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I went over to the box where it was stored, opened it and asked him for the proof he claimed to have.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: He bopped me in the face with a powerful fist, and when I awoke some time later, the sword was gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: That's all I remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I never even got his name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: I don't think you'll be able to find out more information unless you head to Hydlaa and find out yourself.</td>
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
						<td>YOU: Do you know anything about a stolen sword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: What are you saying?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: That I took the accursed sword?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Why would I do that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I retired from mining as soon as those famous adventurers, Narwin Molstagh and Grimal Bloodaxe, recovered it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I was trying to get away from its…Oh no…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen stands rigid, his eyes staring straight ahead.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I remember now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The sword called to me, it did, all the way from the Eagle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: It asked me to get it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: It told me what to say and do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I …</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I hit a guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: What have I done?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: But wait; I remember more.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I had the sword in hand, right here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: A dwarf-like figure approached me and calmly held out a hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: The sword escaped my grasp of its own will and the dwarf took it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Fholen grabs your shoulders.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Please!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: You must find out where that sword is, and find a way to remove its horrible power!</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I imagine it was one of the adventurers who took it in the first place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: They're both dwarves so that doesn't narrow it down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: I would ask them both about the stolen sword or the Jade Caves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fholen: Be careful.</td>
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
							$npcName = 'Grimal Bloodaxe';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Grimal Bloodaxe</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know anything about a stolen sword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I remember that fateful day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Narwin and I went into some of the darker recesses of the Jade Caves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Came across a Kratak encampment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: They were surprised and attacked immediately!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: But they were no match for two of the fightin'est dwarves you could ever imagine, pal!</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Those Krataks never had a chance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I didn't really want to kill 'em, but I had to defend myself, y'see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Anyway, one of 'em was holding this jade-handled sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Looked useless even then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Narwin wanted to keep it, and I let him cause I sure didn't want it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Anyway, once we left, some guards told us that all treasure from the Jade Caves was confiscated by order of the Vigesimi Molveni Qued.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Grimal rolls his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: She's in charge of the mines and Jade Caves in that sector.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: They said it was on account of reports of some dark magic activity in there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: So Narwin relinquished the sword and off it went.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: What a waste of time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: You say the sword was stolen?</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: Hunh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Grimal: I wonder by who?</td>
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
							$npcName = 'Narwin Molstagh';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Narwin Molstagh</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know anything about a stolen sword?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You're here for the sword?</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: You'll never get it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: It's mine, and it always was!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin suddenly snaps his head to the side and says, 'I can sell it!'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No, I will keep it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-I could use the money!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I need power more!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-I will sell it for five thousand tria!-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No, listen to the sword!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin falls to his knees, clutching his head and screaming. You don't think you'll get any more information out of him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Narwin the money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I'll kill you!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin snaps his head to the side and says, 'Bargain struck, take the sword.'-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: No, attack!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-But the Hammerwielder paid for it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: Hmm, perhaps this one is even more powerful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Narwin: I will give the sword.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Narwin hands you the sword with a blank expression, as you grasp the sword it is as if a million whispers rush into your mind; you feel a strange, sad hunger.-</td>
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
							$npcName = 'Venec Agenwolfer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Venec Agenwolfer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Venec the Jade-Handled sword.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Ahh, you have recovered the sword from the Jade Caves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: I hope it did not give you too much trouble, as I hear it has been quite a nuisance since its discovery.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: And now to the business of purifying it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Venec mutters an incantation. He and the sword are bathed in a soft white glow. The sword begins flickering as if resisting the ritual. Venec grits his teeth and struggles with the sword. Eventually, the glow fades from both of them, and Venec slumps, breathing heavily.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: It is complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: You have done well, valiant Hammerwielder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: For this, I will give you my Amulet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: You will find that people consider it somewhat impressive, and it will improve your standing with them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Good luck in your journeys, and thank you once again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Venec: Now I must rest, for I am weary.</td>
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
						<td>Rewards: 1 Amulet of the Commander, 3391 Tria, 15000 XP.</td>
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
