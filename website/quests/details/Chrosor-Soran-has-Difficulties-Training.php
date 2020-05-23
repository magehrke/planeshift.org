<!doctype html>
<html>
<head>
	<title>Chrosor Soran has Difficulties Training</title>

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
						<td>Chrosor Soran has Difficulties Training</td>
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
							$npcName = 'Chrosor Soran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chrosor Soran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: May I be of some service to you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: So you’re lookin’ for summat to do, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I needs me a drink, if ya know what I mean.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Feelin’ the need early today.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: The one that gets me through the day is a Dermorian Longbeard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: We’ll have ta be keepin’ this on the low, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I ain’t s’posed ta be drinin’ on duty, but one surely can’t hurt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: You can get this nectar of life from Brado over in Dsar Akkaio in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Will ye help me, friend?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, that sounds like a fun trip!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Yes, indeedy!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I can’t get at me cash at the moment, so you’ll hafta spot me until I can reimburse ya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Don’t figger that’ll be a problem for the likes o’ you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Hurry back!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Hurry back!</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I've heard you mix a mighty tasty Dermorian Longbeard. Will you make me one?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Dermorian Longbeard, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Chrosor’s starting early today.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado chuckles and looks directly at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: He’s the only Ylian that drinks the Longbeard, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Most go for the ales, the darker the better.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado smiles broadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: One Longbeard coming up!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado gathers a few ingredients and pours them into a mug, then slams the mug on the bar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Sharsel'aat!</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Good drinking and good luck traveler.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: That’ll be one hundred tria tria please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That's pricey! I hope Chrosor is grateful.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ah, thanks much, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Bon shrdah and tell Chrosor I send greetings from his favorite bar!</td>
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
							$npcName = 'Chrosor Soran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chrosor Soran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your drink, and a high sum it cost me, too.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Ah, you got it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Talad be praised, I so need this right now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chrosor drains the mug and wipes his mouth on his sleeve, smacking his lips in pure enjoyment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Oh yeah, that’s the stuff.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chrosor suddenly shrinks a bit before your eyes and his muscles grow smaller. He also looks visibly tired and haggard.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Wow, I didn’t realize that my training took so much out of me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I think I’ll go and rest for a while, I feel real tired.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Thanks again, friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Here’s a bit o’ money for ya.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Maybe you should ask Brado if there is anything wrong with his mug that would cause weakness.</td>
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
							$npcName = 'Brado';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Brado</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could there have been anything in Chrosor drink that would cause weakness?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: What’s that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: My drinks don’t have any such effects, I assure you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: The ingredients are relatively harmless.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I take this here, then pour this</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Brado goes through the motion of creating the Longbeard and slaps his hand on the bar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Sharsel'aat!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-A small column of Dark Magic comes up from his hand and dissipates. The size of the column is just smaller than the size of a mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: What’s this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: How is this possible?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: I don’t see anything here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He starts looking around the bar and kneels, looking underneath. He curses, then stands up with a Weakness glyph in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: This was under the bar and must be the cause of the weakness in Chrosor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Blast it, how did this get here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Do me a favor, will you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Go and speak with my staff and see if you can uncover the truth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: The fact that it was hidden under my bar means it was likely placed there by someone near to this place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Will you do this for me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll do what I can to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Alright, then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Ask everyone who works here about weakness and please be thorough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Brado: Also, please take this out of my bar: I don’t wish to look at it any further.</td>
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
							$npcName = 'Fruntar Durek';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Fruntar Durek</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any idea how a Dark Way glyph ended up underneath Brado's bar?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: There was a Dark Way glyph behind the bar?</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: That is unsettling, tabei…</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Dark magic is not something to be taken lightly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I do have an idea who might’ve taken to dark paths in recent months.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: You should try talking to Tilavi upstairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: I’ve seen and heard some odd things when she thinks no one is looking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: She’s also the reason I stay downstairs, tabei.</td>
					</tr>
					<tr class="quest_npc">
						<td>Fruntar: Something about her makes me very uneasy.</td>
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
							$npcName = 'Tilavi Aurenta';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tilavi Aurenta</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A Dark Way glyph showed up behind the bar. Any idea how it got there?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: A Dark Way glyph?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: What makes you think I would know anything about that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: It’s not as if anyone in the bar is accusing me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Is it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I believe that Fruntar Durek may suspect you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: That nosy…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I did put it there to 'discourage' Chrosor from being accepted by the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She sighs, then looks wistful as she begins to relate a tale.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Several years ago, my brother, a member of the Shadow Squadron, led a small expedition into the Stone Labyrinths.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Chrosor’s brother was also part of that group, a member of the Sunshine Squadron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: They were met with resistance and Chrosor’s brother led the charge.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: The entire party died.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I still have two sisters in the Squadrons there, and do not want Chrosor anywhere near them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I took steps to ensure he wouldn’t make it past their training and I put the glyph under that bar to enchant his fruity drink to sap his strength.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I’m just trying to protect my family.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: If you give back the glyph and agree to keep quiet, I’ll reward you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Your promises interest me. Take the glyph.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: I knew you’d see it my way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tilavi: Take this: it will help you on the path of the Dark Way.</td>
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
							$npcName = 'Chrosor Soran';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chrosor Soran</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was not able to find out what caused your problems.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chrosor seems to have recovered a little from when you were with him last.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tried to stand up right before he starts talking but finds it difficult.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Thank you traveling between Ojaveda and here so much just to try and find out what caused this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I’ll have to go to Brado’s and have a word with him and his staff myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: I’m sure I’ll be able to find something out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Here…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Chrosor hand you a small pouch.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chrosor: Have this for your efforts.</td>
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
						<td>Rewards: Nothing.</td>
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
