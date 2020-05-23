<!doctype html>
<html>
<head>
	<title>The Rotten Deal</title>

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
						<td>The Rotten Deal</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/May-Their-Words-Sound.php">May Their Words Sound</a> quest, 1 Gendol Rotten Meat, 1 Lake Mushroom, 1 Ulbernaut Heart.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get all the items back.</td>
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
							$npcName = 'Ryger';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ryger</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me sir, do you have a job for me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger flinches in surprise.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Bedevilled being!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: What is it that you seek here?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger clenches his spiked fists.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: A job…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: that is what you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: An errand, a way to fulfil your chaotic needs.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger pauses for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Lost creature…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: yes, I have an errand for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You will bring me an item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: A component.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Something that I need.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger pauses again, staring at you blankly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You will do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: nods.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Then you will go and bring me a piece of rotten meat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Foul and sickening…from Grendol…may it offend the senses of the toughest warriors, may it languish the faint of heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Do hold the item with pride of a tramp.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You are no more than that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Begone now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Your sight disturbs my mind.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have your rotten meat here.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You amuse me, creature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Hunt a piece of rotten meat…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: carry it through the land…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger clenches his fingers upon the piece of rotten meat.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: For this errand hide your pride.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You will bring something more, creature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Component.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: I will need another…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: but no stench.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger hurls the piece of meat against the ground, making its fetid juices splatter upon impact.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Not this time.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger lifts his spike-backed hand before his eyes, inspecting the fluids that still cover his palm. He sniffs at them and then looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: This time you will bring me a lake mushroom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Does that satisfy your ambition?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: It has to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Go.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the mushroom as requested.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Persistent.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger inspects the mushroom.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Yes, that is the one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Proud now?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You must have strained your muscles…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: strained them picking it up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Your final task will be more challenging.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You will bring me an ulbernaut heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Yes, yes…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: an ulbernaut heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You will rip it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: That is the last thing you will find for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: hands over the ulbernaut heart.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: What…?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger looks at you, holding the heart in his hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: I was hoping the beast might rip out yours instead.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Accursed creature.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: No way to get rid of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger pauses.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: But you are persistent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You are strong.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: You have no shame.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Maybe something can be made of you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: I find you a task.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Real one next time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: But now…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger looks at all the components.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Yes, reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: That is what you expect for the components.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ryger hands you the ulbernaut heart. He picks up the repulsive piece of rotting meat and hands it to you along with the lake mushroom.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Take them away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: I have no use for this garbage.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Reward is equal to the brought components, yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: And the errand is complete.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ryger: Leave me alone now.</td>
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
						<td>Rewards: 40 Faction with Seeds of Wildwood, 17800 XP.</td>
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
