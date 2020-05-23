<!doctype html>
<html>
<head>
	<title>Making Magical Potions</title>

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
						<td>Making Magical Potions</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Liera's-Cure.php">Liera's Cure</a> quest, Rank 15 Alchemy (20 to complete the quest though).</td>
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
						<td>YOU: I am ready to learn more about alchemy.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So you are, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Then let's move onto the next phase of your alchemy instruction.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I have a new book for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I imagine you want to know what this phase of alchemy is all about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It is all about magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Are you skilled or interested in magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Very much so.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great, then perhaps you'll find this book most useful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Various elements have been proven to be associated with the Ways of magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Which Way are you best at or most interested in?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Red Way.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Then let's make a potion with a Fire Element.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera hands you a new book.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: This book is called “Alchemical Concoctions.” The potions made with its instructions are called Affinity potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: They each boost skill in a magic Way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Each Way is associated with an element.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For Red Way, it is Fire Element.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For Azure Way, it is Air Element.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Blue is Water and Brown is Earth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Crystal and Dark Ways are a bit different, drawing their energies from the Azure Sun and Dark Crystal, respectively.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: There are two classes of Affinity potions; regular potions and major potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Naturally, major potions require more skill, five additional lessons should do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So, you can give it a try or I can walk you through the process, which do you prefer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'd like to hear more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: No problem.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Affinity potions require an herbal element, a mineral element, and an essence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I'll explain the essence in a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For this particular potion, called a Potion of Fire Element Affinity, you'll need some Red Mangrove Pulp, made from Red Mangrove Leaf of course, which will require your herbal skills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You'll also need some Iron Ore Solution, which you can make using your Basic Potions Tome, and finally a Fire Essence.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Fire Essence?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Yes, now I explain essences.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: These are usually made from animal parts and reagents.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Often times, several different animal parts can make the same essence, though using some parts may require higher skill than others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For Fire Essence, you have a choice of parts from the Fire Carkarass or the Toxic Grendol.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: The Toxic Grendol blood takes higher skill so let's take the Fire Carkarass for starters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: So here's what you'll need to have: a Carkarass Fire Feather, a Carkarass Fire Carapace, some Red Mangrove Pulp and an Iron Ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Also be sure to have 2 Distilled Waters.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Maybe you have some of these things stocked up, or you can go buy or get them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I made the Fire Essence, what next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Then the final phase is to take your Red Mangrove Pulp, Iron Ore Solution, and a Fire Essence, and combine them into a raw potion on the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Take the raw potion to the stove and stir with a wooden stirrer until you have a final potion.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How do I make Iron Ore Solution?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It's pretty easy even if you have never done it before.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It's in your Basic Potions Tome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Remember to have that on your mind, then take an Iron Ore and pound it into a powder on the table using your wooden mallet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Then take the powder and combine it with 2 Oil of Vitriols.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Finally, take that mix and put it in the Crucible, stirring with a Glass Stirrer which will give you 2 Iron Ore Solutions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I did it.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera nods approvingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Very good, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Potions for other ways are similar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Crystal Way uses crystals instead of animal parts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It's just a matter of looking through the book and figuring out all the ingredients you need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Any questions?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How are do you make potions of the other Ways?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: All of the Affinity potions are similar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Each requires different ingredients for the elements: herbal, mineral, and essence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For the basic potions, Azure, Blue, and Crystal Ways require Wyn Pulp while Brown, Red, and Dark Ways require Red Mangrove Pulp.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For the major potions you'll just need to make a paste instead of pulp.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For the mineral elements: it's quicksilver for Azure Way, tin for Blue, zinc for Brown, iron for Red, copper for Crystal, and silver for Dark.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For major potions you'll use ingots instead of ores.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And, finally, different animal parts make different essences, except for Crystal Way which uses gems…too many to mention…just check your book for the details.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How exactly do these things boost skills in magic?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ah, very good question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: These mixtures all contain chemicals…chemicals created from these various herbal, mineral, and animal or essence components.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: When one drinks the potion, these chemicals mix with the chemicals already in our bodies to give us the energy we need to perform tasks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: In your earlier work you discovered potions to help attributes like intelligence, stamina, strength, agility, and so forth.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: These particular potions do the same to help focus your energies with your existing skill in magic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Beyond that, perhaps only the gods know why these chemicals have the effects they do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are potions one Way only, or can I combine Ways?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ah yes, we didn't go through that, did we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You're quite right, you can make combinations of the essences to make potions that affect multiple ways, but like with magic, itself, mixing Ways takes greater skill, and only some combinations can be made.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: For instance, you can make what's called a Murky Essence by making a mix of Fire, Earth, and Illness Essences.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You can also make a Bright Essence from a mix of Air, Water, and Crystal Essences.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You can then combine a Murky Essence with Red Mangrove Pulp and Silver Solution to make a Minor Potion of Fire Dark and Earth Affinity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: A Bright Essence can be combined with Wyn Pulp and Gold Solution to make a Minor Potion of Water Crystal and Air Affinity.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You'll need about 30 lessons total to make those.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How is your family on the third level?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh, they are fine.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Liera smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: That plague was not entirely wiped out but the cure you helped me with made a big difference.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Many lives were saved because of what we did then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: And my family members down there have all been accounted for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What was that Universal Panacea you made?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Mmm, well, that's not supposed to be widely known so let's keep that between us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: There are those that were not happy I was talking about it freely, but I didn't have time to consider their sensitivities.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You see, that is a branch of alchemy called The Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: It's also known as mystic alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I got this book during my training which helped me make it but it is not easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You need a lot of training to pull that off.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: If you ever get to that point, look into the spiritual side of alchemy if you train with Vladovic some day.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What comes next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Continue getting training and practice with these potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: When you are ready, after about fifteen more lessons, I want you to see Chired in Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Her specialty is healing potions like the ones I sell.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: She will walk you through those and you can continue getting training from either of us.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Thanks for your help. I don't have any more questions.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: You're most welcome, and good luck with your training!</td>
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
						<td>Rewards: 1 Alchemical Concoctions, 30 Faction with Science Association, 15000 XP.</td>
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
