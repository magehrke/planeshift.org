<!doctype html>
<html>
<head>
	<title>The Missing Equipment</title>

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
						<td>The Missing Equipment</td>
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
							$npcName = 'Baboraer Airiskel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Baboraer Airiskel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hail soldier, any assignments I can help with?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Absolutely!</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: This Winch guard assignment is insulting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: I want to be back where the action is: Bronze Doors One.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: But I was demoted after losing some equipment, and all I have left from my old post is my storage skeleton key.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Can you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Oh good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Maybe if you can recover it, they'll give me my job back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Unless they've made another one by now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: But it's a chance I've got to take.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: I lost a crystal attuner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: The last thing I remember when holding it is talking to my friend, Thrynt Glass.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Then I'm not sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: That's all I can tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Maybe you can ask him about the missing equipment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Good luck!</td>
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
							$npcName = 'Thrynt Glass';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thrynt Glass</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about the missing equipment?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Missing equipment?</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Hmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thrynt rubs his chin and ponders the situation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Oh, right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Baboraer was talking to me, then dropped something as he walked away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I didn't know what it was, so I put it in storage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Box 253, I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: If you want access to a storage box, you'll need to speak to Beniua Busuka first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Just request a storage form.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Say it's for me if she asks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: She'll give you one to give to Tarmeen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Hope that helps!</td>
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
						<td>YOU: I need a storage form.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: One moment, Sir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: You're not a member of the Sunshine or Shadow Squadrons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: On whose behalf are you requesting a storage form?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It's on the behalf of Thrynt Glass.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: The Shadowcasters are always storing and retrieving something or other.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Here's a storage form.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Present that to Tarmeen Alecheech and he'll be able to help you further.</td>
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
						<td>YOU: [ YOU gives Tarmeen the storage form.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This seems to be in order.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Keep in mind you'll need a storage skeleton key to open a box.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: This is for Thrynt, it says.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: So I guess you'd give it to him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: If you take a box by mistake, just give it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Now which box did you say it was?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: 235?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: 253?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: 352?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 253</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarmeen: Here you go then.</td>
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
							$npcName = 'Thrynt Glass';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thrynt Glass</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Thrynt the lockbox 253.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Let's open this up.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: My storage skeleton key!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Oh, don't tell me I dropped it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: I don't even know who has another one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: Sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thrynt: You'll have to find someone else who has a storage skeleton key.</td>
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
							$npcName = 'Baboraer Airiskel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Baboraer Airiskel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: gives Baboraer the lockbox 253.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: A storage box?</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Do you think this contains the crystal attuner?</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Let us see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Baboraer unlocks the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: It's the crystal attuner!</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Hooray!</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: I'll be back at Bronze Doors One before I know it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Thanks for all your help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: Take these boots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Baboraer: One size fits all!</td>
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
						<td>Rewards: 1 Chain Mail Boots, 9922 Tria, 16400 XP.</td>
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
