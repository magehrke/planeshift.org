<!doctype html>
<html>
<head>
	<title>Road to Master Cook Chapter Three</title>

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
						<td>Road to Master Cook Chapter Three</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Road-to-Master-Cook-Chapter-Two.php">Road to Master Cook Chapter Two</a> quest, 12 Lake Mushrooms.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi Mirra, you need help with anything?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Are you ready to go find the next world famous recipe?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sounds like fun, where are you sending me now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Prepare yourself for a long walk then!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: The guards from the Sunshine Squadron seem to be well-fed and very fit!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That's because they get fed only the best…</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Lake Mushroom Stew!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: It might not be the best-tasting recipe ever, but it sure is nutritious!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I bet it would sell well!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Please bring me the Lake Mushroom Stew recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: There is just one problem: I have no clue who has it.</td>
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
						<td>YOU: I am in search of the Lake Mushroom Stew recipe.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: You are referring to the Lake Mushroom Stew, yes?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Of course you are, it's what keeps our Squadron in good shape.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It keeps their energy up in battle, keeps their minds focused on their task, and is very healthy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It is low in fat and well currently…</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: low on mushrooms as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I take it you want to know how it's prepared?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: That would be great, thanks.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Not a problem…</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I'll give you the recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: However, you have to do a few things for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: First you must get me…</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: let's say…</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: one dozen Lake Mushrooms.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: give Beniua the mushrooms.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Great job.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: One more task and you will have the recipe.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I just received this crate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It contains some potions that are very valuable here at the fortress, but they can potentially be dangerous.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It has a three digit combination lock on it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: The merchant from Hydlaa was supposed to send the combination on a piece of paper ahead of time so that when the crate came I could open it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: However, it looks as if he wrote it in code in fear of bandits and rogues looting it on the way here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Will you help me decipher it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: The code reads: 'One: Arena entrance steps.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Two: Men holding the roof.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Three.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua stares at the piece of paper looking rather confused. She turns the paper over and over repeatedly then stops and looks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: But wait, there is nothing after the number three, what do you think that means?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua thinks for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I get it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: The three is the third number.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: There was no need for a clue because it is the number.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Anyone who stole the paper might think like I did, that there was something missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Great, so the last number is three.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It's hopeless!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I don't know how many steps are on the way into the arena, and what do they mean by men holding the roof?</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: What will I do?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Beniua pauses for a moment, looks at the slip of paper and then back at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Ehh, you'll figure it out, please come back when you have the code figured out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: If memory serves me correctly, the Arena is somewhere near Harnquist; it is a magnificent building.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Return to me when you know the code.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I figured out the code.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Give me the numbers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Remember, the steps come first, then the number of men.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Add the number three at the end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: 983</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Let me try.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She enters the code and click can be heard as it opens.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Ah great!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It seems you solved it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Well, here you go, one recipe for my stew as promised.</td>
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
							$npcName = 'Mirra Houphen';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Mirra Houphen</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [YOU hands over the recipe.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Hooray!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: That seems like the one we were looking for!</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Here is your reward.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Mirra hands you a small coin purse with a few coins in it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Also, here is a little something extra for the hard work you did, I wanted to order some fancy knives, to go with my fancy silver plates and I thought it was my lucky day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: A travelling merchant, who happened to be wandering through Hydlaa at the exact same time, told me that he had exactly what I needed and so I bought a whole bunch of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: He told me they would cut through anything I cooked no matter how tough the meat.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I was so excited I paid the man right away.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: He told me that he would have them delivered from his caravan that afternoon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: Well, when the box showed up, this is what I ended up with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I think it will do you more good than it will me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Mirra: I can't imagine someone buttering their bread or cutting their steak with a sabre.</td>
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
						<td>Rewards: 1 Golden Sabre, 40 Faction with Food Association, 12958 Tria, 17800 XP.</td>
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
