<!doctype html>
<html>
<head>
	<title>Barl's Extended Duty Contract</title>

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
						<td>Barl's Extended Duty Contract</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Pinayet-Misses-His-Friend.php">Pinayet Misses His Friend</a> quest.</td>
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
						<td>YOU: Hi, I am looking for job in this area, would you perhaps know of anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Why yes, I have a matter of administrative importance in Hydlaa, if you'd like to run an errand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Does that pique your interest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Just what I was looking for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I thought it might.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Barl Prestis is a special operative beyond the Bronze Doors, and we currently cannot contact him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: However, his extended work contract needs a signature so we can process his wages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: He's named his wife Taria as a beneficiary, so we'd like you to give it to her and get her to sign it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Return to me with the signed document, or if you encounter any trouble.</td>
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
							$npcName = 'Taria Prestis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taria Prestis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a special delivery for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taria takes the document and begins reading.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Extended?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Six months…no no no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: He can't go on duty for another six months.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: I hardly see my husband as it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: They can't do this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: You take this right back and tell them I will not sign!</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: The duty is too long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: You hear me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: I will not sign!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taria thrusts the paper at you.-</td>
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
						<td>YOU: Here is the contract.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: This contract isn't signed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: What happened?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Taria will not sign the contract.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Did she say why not?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She says the duty is too long, she hardly sees her husband.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: That's not enough of a reason - after all, she's acting on behalf of someone who's already agreed to long-term duty but is inaccessible at present.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Could you please return to her and ask her to explain herself better?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I can't return to Aerayau with 'Barl's wife misses him so she won't sign off on his contract.'</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Help us help the Prestis family.</td>
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
							$npcName = 'Taria Prestis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taria Prestis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am not really sure what you just said, can you please explain it better.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: All right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Before Barl left for his current tour of duty, he bore unto me a child.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: I am expecting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Barl is a father.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: I want my husband to return so he can see his baby when it arrives.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Please tell them I'm pregnant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Have mercy on a mother.</td>
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
						<td>YOU: Taria is pregnant and want's Barl back to see his child.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Ah, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: We at the Sunshine Squadron do have exceptions in this case.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I will need Aerayau Strongwill's approval, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Give me the old contract, and I'll make up a Requisition form for a revised one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Give that to Commander Strongwill, and he will draw up a revised contract if he approves.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: He should; parenthood in the Sunshine Squadron is not unheard of.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the contract.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It's a lot of paperwork, I know, but it's what administration's all about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Take this to Aerayau.</td>
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
							$npcName = 'Aerayau Strongwill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aerayau Strongwill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Beniua sends this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aerayau reads the document.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Barl's a good man and a fine warrior.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: While the work he's doing is important, I think he deserves to take a leave from duty two months early.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: I'll be sure to let him know he's a father as soon as possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: But wait, if his wages were 2100 Tria for six months, how much would he get in four months?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: 1400</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Quite so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: The hazard pay would be 200 Tria, that I can figure out…and we're done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Here's the contract.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aerayau: Get it signed soon and return it to my administrator.</td>
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
							$npcName = 'Taria Prestis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Taria Prestis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have a new contract for you to sign.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Four months?</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: That's much better.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: The Sunshine Squadron is ever compassionate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Now I will sign it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Taria: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Taria signs the contract and gives it back to you.-</td>
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
						<td>YOU: Taria signed the new contract.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I'm glad an agreement was reached.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: On behalf of the Sunshine Squadron and the Prestises, I thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Here is a fourteen hundred tria administrative fee.</td>
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
						<td>Rewards: 35 Faction with Guard, 9922 Tria, 18400 XP.</td>
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
