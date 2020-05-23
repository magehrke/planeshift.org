<!doctype html>
<html>
<head>
	<title>Sierann is waiting</title>

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
						<td>Sierann is waiting</td>
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
							$npcName = 'Sierann';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sierann</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who are you waiting for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Oh, who am I waiting for?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Worrem Dhoshi's servants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: See, I get paid out of the treasury by Beniua Busuka, and she's so picky, she pays me in nothing but circles and octas.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: What merchant has change for such huge amounts?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: So I had him convert my wages to Trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Nothing but mounds and mounds of easy-to-use Trias.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: But I really could use it soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: I don't suppose you could head down to Hydlaa and find Worrem?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Tell him I am waiting?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, no problem.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Thank you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: I'm hoping for any progress at all, really.</td>
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
							$npcName = 'Worrem Dhoshi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Worrem Dhoshi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sierann is awaiting his money.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: I was afraid he would grow impatient.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: There is but one problem: not all of the Tria I received from the treasury are real.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: It will take me some time to track down the source of the fakes and retrieve the real Tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: I'll use my connections.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: If you'd like to help, asking treasurer Willam Chorind about fake tria would speed things up a great deal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: If you can return with the real Tria, all the better.</td>
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
							$npcName = 'Willam Chorind';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Willam Chorind</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about the fake tria?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Will you keep your voice down!</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Do you want all of Hydlaa to know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Listen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: We get our Tria from only two sources: the mint on the Upper Field level, and our tax collector Darphen Wrestele.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: The mint has airtight security, so that means someone's been paying taxes with fakes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Willam: Ask Darphen about it; let's get to the bottom of this.</td>
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
							$npcName = 'Darphen Wrestle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darphen Wrestle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about the fake tria?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Fake tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Wow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: And you want to know if I've seen anything suspicious?</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: When I collected from Aldaaren Phostle, he passed a glyph over some triangular rocks and handed me the tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: He told me he was keeping them under an illusion spell so nobody would steal them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darphen: I'm not so sure anymore, now that you're telling me there's a counterfeit problem.</td>
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
							$npcName = 'Aldaaren Phostle';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aldaaren Phostle</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you know about the fake tria?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Oh no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: The jig is up!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Here, just take the real Tria and…and…just please don't kill me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Wait for the monsters to exit the Bronze Doors and do that!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aldaaren laughs maniacally. Then stops suddenly, looks at you very gravely.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Haha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I am having some fun with you, do you care to hear the real story?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: There's a story. Well let's hear it then.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Ok, I needed a permit for my street preaching and Amidison did not want to give it to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: I begged her for a while and preached when the guards were out of earshot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Finally i asked if there were any favours I could do for her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: She told me that she had been meaning to run a test of whether local government would be able to catch fake money if it were slipped to local officials.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: She needed someone not involved in government to initiate the shady transaction for it to be a true test.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: Here are the real tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aldaaren: You may ask Amidison about fake tria if you wish to verify my story.</td>
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
							$npcName = 'Worrem Dhoshi';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Worrem Dhoshi</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got the real money back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Worrem cuts open the bag and examines it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Yes, these are indeed real.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Worrem empties the Tria into a large lockbox and closes it. The box makes a clicking sound.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Would you be so kind as to take this lockbox to Sierann yourself?</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: I warn you, it is heavy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: I shall ask you but once.</td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Yes or no?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can take it over for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Here, take it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Worrem lifts the lockbox with a grunt and heaves it at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Worrem: Thanks so much.</td>
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
							$npcName = 'Sierann';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sierann</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is your money.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sierann produces a key and unlocks the box.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Thank Talad!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Will you look at all those Tria?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: That's what I'm talking about!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sierann: Here, have a whole bunch with my thanks!</td>
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
						<td>Rewards: 7310 Tria, 15000 XP.</td>
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
