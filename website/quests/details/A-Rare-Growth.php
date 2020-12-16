<!doctype html>
<html>
<head>
	<title>A Rare Growth</title>

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
						<td>A Rare Growth</td>
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
						<td>YOU: Hello Beniua, anything going on lately?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Hail Darvingar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: A lot, as always.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Too few supplies, too few fighters, too many troubles.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Beniua Busuka smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: There's always something keeping me busy but nothing I should bother others about, it is my job after all...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Beniua Busuka pauses, but then concedes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: However, recently I have encountered something that worries me, a lot, it might interest an adventurer like you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I guess you've already seen a riverling, but did you hear about them having found, well, a king?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: A riverling king?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Beniua Busuka starts to smile but it seems out of nervousness.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Yes, king seems like as good a term as any to describe him...</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: It seems one of the riverlings near the fortress became just that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I'm troubled how this might become a problem as their tribe is so close off the road to the fortress.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Too close.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: We could use someone to investigate this further.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Might you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure thing. Is there anything else I should know before going?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: As far as I'm aware, it would be wiser not to go and investigate this matter alone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Being united by this king will likely make them stronger and even more of a fearless foe...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Alright, thank you Beniua.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: One last thing, Darvingar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I take my job very seriously and when a matter arises I ensure to solve it fully.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I think it would be best to bring this to the attention of a specialist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Once you have observed the king and his behaviour, and if you are interested, you should contact Durok Rrecrok.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: The kran or kras colleagues are more competent then any of us to then deal with this problem in the best way possible.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: And to be honest if they do not take this in charge, we will have to settle this forcibly.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think it's always better to refer to a specialist. I will try to observe it before talking to Durok.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Beniua Busuka nods.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Thank you, Darvingar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: I will report this in my logs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Beniua: Please tell Durok or whoever will take this in charge, to contact me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: you need to see Zoltak before proceeding. You'll find him in the lake near the fortress ramp</td>
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
							$npcName = 'Durok Rrecrok';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Durok Rrecrok</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Gemma Durok, I am here from Beniua Busuka, administrator of the Bronze doors fortress. We have observed that a...riverling king has emerged.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Hello YOU!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Well hummmmm I am glad Beniua and yourself chose to inform the science association about this!</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: To be honest, I have already heard about this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: First because a fisherman reported it to me, bless errrrrrr him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: And second, hummmmmm, because it is not the errrr first time this has happened.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Really?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I have errr discussed with a friend of mine who is more versed into the animal studies.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: As you may know, my hummmm specialty is rather the insects but ermmmm..anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Kra said that occasionally, a riverling will grow errrr stronger than the others and then be able to ascend to the "throne" by challenging his potential rivals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Once established, it will hummmmmmm "organise" its tribe in a more structured way and therefore errrrrrr be a real threat for anything or anyone in the area.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Oh. But why does it grow bigger? Does he have other particularities?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Hummmmm Kra does not exactly know why but sometimes, one specimen will grow taller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Their skull expands in width making their eyes more hummmm separated, allowing them to see in a wider angle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: This also develops their sense for smelling and noticing foes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: All of this and their significantly longer teeth, give them a errrrrrrmm certain advantage on their tribe mates.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Though, being water creature, they still are sensitive to fire and in extent to Red Way magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you consider the riverling tribe a threat then, now that they have a king?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: I ermmm suppose you mean a threat to the residents of the fortress and or the caravans?</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Obviously, I would say yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: On the other hand, if a hummmmmmmm invasion occurs, they will ferociously defend their territory against the invading...mmmmmmm...beasts, technically becoming an ally to our soldiers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Durok: Beware though, that the riverlings will defend their king to death if necessary.</td>
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
						<td>Rewards: 12200 XP.</td>
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
