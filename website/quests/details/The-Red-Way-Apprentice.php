<!doctype html>
<html>
<head>
	<title>The Red Way Apprentice</title>

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
						<td>The Red Way Apprentice</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Red-Way-Glyph-Training.php">Red Way Glyph Training</a> quest, Rank 50 Red Way, 1 Red Way Bracers, 1 Fire glyph, 1 Weapon glyph, 5 Tefusang Teeth.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You get the glyphs back.</td>
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
							$npcName = 'Ferryd Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Ferryd Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please accept these bracers as proof I am a worthy student.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: And so the student returns.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I assume you are ready for your combination glyph test so we will begin, then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd hands your bracers back as he begins to speak.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: We will need two Glyphs for this trial.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You have already learned about the Fire Glyph, So give that one to me first.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd awaits the glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fire, fire … Ah, here it is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd nods.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I bet you have found this very helpful in combat situations in your training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now, you will also need a glyph that combines with this one to create an empowered weapon that creates extra damage every time it strikes your foe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: It is called Sword.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: They are less common than Fire, and are prized by master blacksmiths.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd strokes his chin in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Please give it to me now if you have one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: If you don't have one, there was a dwarven smith who's name currently escapes me, that I have heard has been hording quite a few of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I do not know if he will sell it to you, if you can find him I suggest asking him for one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You better tell him I sent you first, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I doubt he will give you one otherwise.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The Weapon glyph, sir.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Now watch closely as I cast this spell.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd holds out his staff. Energies surround his body for a few moments, then flames leap from his staff. He grins at the effect. When the effects fade, he hands both of your glyphs back.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: As you can see, this is a very intimidating spell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Purify these glyphs and combine them to produce the spell I just showed you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I want you to now go out and practice your newly acquired knowledge in battle on some of the Tefusang out there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Bring me five Tefusang teeth to prove you have completed this task.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Five Tefusang Tooth.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Congratulations YOU, you have past this second part of my training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: This apple is your reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd looks at you, holding out an apple. smile slowly grows until he bursts out laughing. He tries to speak through the guffaws.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The look…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: on…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: your face…</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: priceless!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Ferryd catches his breath and wipes his eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Here is your true reward; the robe to complete your set.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: When you are strong enough, return with two wands, one yours, one from one of your pears.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: All Circles require you do this, for you must not only have the respect of your teachers, but also that of your fellow students.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: I suggest you start making friends with others that follow the Red Way Circle to make it easier on you in the future.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: When you return with two wands and enough training, I will graduate you into the next level of the Circle and give you a new wand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: You will return the other Lower wand to your peer so that he, she, or kra can continue training.</td>
					</tr>
					<tr class="quest_npc">
						<td>Ferryd: The wind be with you.</td>
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
						<td>Rewards: 1 Apprentice's Red Way Robe, 20 Faction with Red Order, 12200 XP.</td>
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
