<!doctype html>
<html>
<head>
	<title>End of the line</title>

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
						<td>End of the line</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Repentance.php">Repentance</a> quest.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Good day Gregori, here I am.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Ah, Huarwar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good day, good day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I hear you have been training regularly and that is very good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: All right, first, we need to talk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I have bad news.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Do you remember the seaweed merchant Gofi Mitu?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald sighs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Unfortunately Mitu was murdered on his way to the Bronze doors fortress a week ago while leading a caravan...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: They were attacked near the fallen tower and everything was looted.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: We know it was the Platinum Warriors finishing the cut-throats work once again, including executing the survivors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: We have a very traumatised witness of the event.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald shakes his head, you can see that even the tall Ynnwn is touched by the story.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: By the gods... I am sorry for Mitu! The situation is out of hand now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Yes, more or less my thoughts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Gurgus wrote a report with all the elements the Order gathered so far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I wanted to hear your opinion, but I think it is appropriate to submit it to our Vigesimi, Amidison Stronghand, without delay.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald orders, worried.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: If anyone can testify, it is you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Give her all the details, will you?</td>
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
						<td>YOU: Vigesimi Stronghand, I come on behalf of the Order of the Keen Edge. We have an important case to submit to you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I am familiar with the Order, it has quite a reputation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I have very little time but please, give me your file I will have a look now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You hand Amidison Gurgus' report which she skims through very quickly.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Several guard reports which have landed on my desk mention these Platinum Warriors but I certainly didn't foresee the extent of the problem...</td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: I could send some guards to apprehend their officers, but based on what we have they would be free the day after...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Amidison Stronghand seems sincerely worried, even shocked.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Yet they need to be stopped.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Order is at your service, Vigesimi Stronghand...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Amidison Stronghand nods in silence then adds in a low tone.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Amidison: Of course if you were in the situation where this Gibbsite was attacking you, it would be only legitimate to defend yourself in a strong and decisive way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Amidison Stronghand gives you an insisting look to make sure that you understand her true meaning.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Well Gregori, I am afraid we are alone in this affair.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald was clearly waiting for you, arms crossed behind his back as he walks back and forth.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As you announce the result of your meeting with the Vigesimi, he sighs loudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I was kind of suspecting such an answer to tell the truth, Huarwar...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And she's right, of course she is right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And she supports us from what I understood, good, good...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now listen to me carefully, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: We have arrived at a crucial point of this story.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You, must face Gibbsite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: This is inevitable.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You will have to trust me blindly, listen to me and learn without asking questions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I will teach you the last move of our swordplay technique and a few more tips.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You need to be as prepared as possible.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right...Of course, I will follow your lead.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald unsheathes Tarr.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The Circular Parry is the paramount move of the Swordplay style.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It will permit you to simply negate an attack advantage that you would have unwisely conceded to your enemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It is one of my personal techniques.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Right, now observe.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald places you en garde then twists his sword around yours, catching your weapon before deflecting it away.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It is commonly used to counter a Disengage, at least in our Order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Practice.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You perform some Circular Parries with Gregori.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Nice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: But place your feet well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Never forget your feet!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Com'on Huarwar, at your level you know that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You should be done resembling a confused tefusang, be supple in your movement!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Don't let your guard down!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald insists with a firm tone, conscious that you are risking your life in the perspective of confronting Gibbsite.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Now, my tips.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The three principles to assure a fight with a sword are: endurance, explosiveness, relaxation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: They are not required but those qualities drive efficient practice which follows through to performance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Relaxation?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And explosiveness!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It doesn't tickle you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It is very serious, Huarwar...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Right, let's see the three principles in detail...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Endurance: the capacity to hold an effort without flinching for a longer time than your adversary.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To develop your endurance, you need to apply a split effort, for example two minutes of jogging then three of very fast running.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: In our case, you already possess this quality.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All right.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Explosiveness: muscular explosiveness, the capacity to contract your muscles quickly and powerfully, to develop the maximum power in the shortest time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: With a good response time, it will permit you to surprise your adversary by the rapidity of your actions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: To train it, practice on a circuit, going left and right then quick and slow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Once again, it is a quality that you possess as far I as know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Don't forget to use it during the fight.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You nod, focused.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Last but not the least, relaxation: the capacity of muscular flexibility.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Swordplay favours the muscular tension born from the anxiety of adversity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You need to learn to relax during a fight, keep breath with the effort in a rhythm, breathe out when you strike.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Just remember this during the fight, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will. Thank you Gregori.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald smirks.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You can, I feel like an old blabbermouth!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Time for action.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Show 'em who's boss, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Be prudent, audacious but prudent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald hands you a small piece of paper.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Here is the exact location of our rocky friend Gibbsite in Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Shouldn't be too hard to find, the Platinum Warriors don't exactly hide.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Try to get the most out of kra, make kra talk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Oh and go see Liera Zireti before going off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: She will have something for you.</td>
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
							$npcName = 'Liera Zireti';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Liera Zireti</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Liera, I am Huarwar, Champion of the Order of the Keen Edge, sent by Gregori Stevald.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Huarwar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I was waiting for you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Please make yourself at home!</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I mean feel free to sit or browse my...</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Well not that you are here to shop...</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hum, let me get to the point, sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Gregori told me about you and I really admire your courage and abnegation, I really do...</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So I decided to brew four healing potions for your mission and trust me, they are some of the best I've made!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you four bottles.-</td>
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
							$npcName = 'Gibbsite';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gibbsite</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Gibbsite is located in Gugrontid City, from the bottom of the ramp, go left, pass behind Malco's guard spot, it is the third door on your right. Above the door is a shield.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I see that you were waiting for me. Good day, Gibbsite.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gibbsite is massively planted on kras two rocky legs, pressing kras hands together as if kra was mentally crushing something, or someone.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: Good day, uhm?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: So we are taking a casual tone, flesh-pile?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-From Gibbsite's chest emanates a sound just like a handful of pebbles falling onto the floor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Kra is laughing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: You and your Order are nothing for the Platinum Warriors, I already know everything, every move of yours.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: What do you think?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: You are exactly where I want you, trapped, isolated, alone, against me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gibbsite: You are dead, Klyros.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gibbsite has a cold, determined expression on kras face, like kra is ready to attack.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [Gibbsite attacks you...prepare.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gibbsite attacks.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Kill Gibbsite.</td>
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
							$npcName = 'Gregori Stevald';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gregori Stevald</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gregori, Gibbsite attacked me, I had to defend myself! [You hand Gregori Gibbsite's belongings.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald has a wide grin, looking very pleased.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You defeated kra?!?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Wonderful news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well done, Huarwar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Well this case is closed!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Come here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald taps your shoulder warmly, impressed.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Laanx's mask, Huarwar, you are a prodigy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I won't lose myself in ceremony...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: In my quality of Grand Master, I have the honour, privilege and joy to name you Master of the Order of the Keen Edge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You are among the few in this stalactite and each of them accomplished a great deed to reach this rank, congratulations!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you very much! I am honoured and very proud to be part of the Order.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: And the Order to have you, Master Huarwar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: I also would like to reward you with this longsword I found in the belongings of Gibbsite-May-Kra-Erode-In-Dakkru's-Realm's.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald shows off a beautiful platinum Longsword.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It's a very nice weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Perfectly balanced blade.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: It belongs to you now, you've earned it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thank you Gregori...And what now?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Gregori Stevald laughes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: What, you are already eager for a new mission?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Beware that your success does not go to your head...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: More seriously, continue training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: You have reached a very high level and like I said, it's where the real fun starts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: The creative part.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Don't be afraid to mix styles, train with other Masters, share your techniques with them...</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Don't hesitate to use our training room when you wish, too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gregori: Until we meet again, Huarwar to share our knowledge!</td>
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
						<td>Rewards: 1 Masterwork Platinum Longsword, 4 Potion of Healing, 1 Level in Sword, 'Single Handed Sword' Combat Move 'Circular Parry', 45 Faction with Order of the Keen Edge.</td>
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
