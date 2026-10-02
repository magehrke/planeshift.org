<!doctype html>
<html>
<head>
	<title>A lighter road</title>

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
						<td>A lighter road</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Nothing.</td>
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
							$npcName = 'Jorni Yeelni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jorni Yeelni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: You have a nice warehouse. I see you also have carts and wagons here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Managing them is part of my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Hydlaa is a crossroads for many trade routes, so goods are always arriving.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Merchants travel here from all across the land, and most bring their own carts and wagons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: You have a nice warehouse. I see you also have carts and wagons here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Indeed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Managing them is part of my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Hydlaa is a crossroads for many trade routes, so goods are always arriving.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Merchants travel here from all across the land, and most bring their own carts and wagons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Oh, I would like to have a cart myself! Is that possible?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: It is a difficult time for this request, but we can discuss about it if you are really interested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Sure, is there something troubling you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Let's speak about that later.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: But first, let's go through the standard stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: I need to confirm you're a trustable trader.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: There is just not enough space in my warehouse for everyone, plus the city requires a formal permit to allow you to drive a cart through the city gates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Starting with the trusted trade, do you have any credentials or references?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I helped Jirosh in Ojaveda recently, and he was happy about my work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Oh, let me look up your name as we exchange often with Jirosh the list of trustable traders and merchants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Actually he mentioned your name and also your good work with him.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Great, I'm humbled by the reccomendation, so only the permit is left. What do I need to do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Normally, I could recommend you for a transport permit and the guards would approve it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: But right now, there is a problem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: What kind of problem?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: The Octarch have put a hold on all new transport permits.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Bandits have been attacking caravans on the road around Hydlaa, with increase frequency and brutality.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Until the roads are safer, no new permits will be issued.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I could handle the bandits.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: You think you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: No offense meant, but these bandits are difficult even to spot, let alone track to their camp and deal with.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I'm not just talking. I've handled danger before. I can prove it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Hm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Can you really?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I've dealt with worse. I know how to hold my ground even when I'm outnumbered. I'm not new to danger.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Ok, I hear certainty in your voice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: All three major roads coming to the city are in danger, I need proof you made each road a bit safer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: The roads going to Ojaveda, Gugrontid and Homestead.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Assuming I find them, do you want me to kill them?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Yes, they deserve that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Try to find the transport logs of the missing caravans: armors, weapons, jewelry, etc...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Bring those to me and I will have my proof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nevis Revori: I failed to move, will teleport in 5 sec.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Ok, tell me where I can find the bandits on the road to Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Travel east from Hydlaa toward Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: The road will turn few times between the mountain and you will see a camp of rogues on your right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: The camp itself is tolerated by the guards, and they already inspected it multiple times, so its not them, but not too far from that location is where the bandits ambushed a wagon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: So investigate that area.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Ok, tell me where I can find the bandits on the road to Gugrontid.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Exit from the North gate following the road to Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: After a while you will find a junction with some local roads, and the last event happened around that location.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Ok, tell me where I can find the bandits on the road to Homestead.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Head west from Hydlaa toward the mountains.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: After the small fortress you pass, you'll come to a road-junction where two paths split.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: The bandits have set up a temporary hide-out there, they wait for wagons and strike from cover.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Now you have to find and kill the rouges. Each of them is on a mountain top and apears a few seconds after you arrive at the right spot. Sometimes it takes longer and sometimes you need to kill them more than once to get the papers. Sometimes it takes really long for them to respawn"</td>
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
							$npcName = 'Jorni Yeelni';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jorni Yeelni</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I have retrieved a log of stolen armors.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Very good. Let's see...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: . That's it, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I have retrieved a log of stolen jewelry.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Very good. Let's see...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: . That's it, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: I have retrieved a log of stolen weapons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Very good. Let's see...</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: . That's it, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Are these three pages enough to proceed with the permit?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: It will take a bit of my persuation skills, but yes, with these in hand I can vouch to the guards that you acted, gathered proof, and deserve your permit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: But there is one more thing to do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Ok, at this point, I'm all in. Tell me what is needed.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: While I obtain the permit, you can use the time to gather the materials needed to build the cart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: Travel to the forest outside of the city and gather three batches of 15 White Oak Wood each  so Hamel the carpenter can build your cart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jorni Yeelni: When you have the materials go directly to him.</td>
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
							$npcName = 'Hamel Warson';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Hamel Warson</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Hello Hamel, I have collected some wood to build a cart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Yes, I got a message from Jorni about your request. Splendid work on this first batch, I need two more sets of White Oak Wood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Please bring those to me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Hello Hamel, I've collected another batch of wood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Excellent, I just need one more and that will be enough for your cart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Haviland Tenouri: Hello Hamel, here is the final batch of wood.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Perfect, I will work on the cart immediately, you will find it in Jorni warehouse in a few.</td>
					</tr>
					<tr class="quest_npc">
						<td>Hamel Warson: Just speak with him.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have received a Small Cart. It is now in your transport storage.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: Mohonin has done a <a href="https://www.youtube.com/watch?v=EnTTU42KNQw">video</a> on this quest.</td>
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
						<td>Rewards: 1  a Small Cart.</td>
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
