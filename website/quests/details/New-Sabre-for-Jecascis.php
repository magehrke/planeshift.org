<!doctype html>
<html>
<head>
	<title>New Sabre for Jecascis</title>

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
						<td>New Sabre for Jecascis</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Jecascis-wants-a-ruby.php">Jecascis wants a ruby</a> quest, 1 Sabre Blade, 1 Sword Handle.</td>
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
							$npcName = 'Jecascis Airiskel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jecascis Airiskel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hi, may I do anything for you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis looks at you with a slight smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Sure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: As I've already told you the last time you've helped me, I like improving my skills in the Arena…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: So, I'd like to try a new weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I see many go around the arena with sabres, so why not asking someone to make me one?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: As you were able to find for me something I couldn't last time, and I'm still in duty, I'm sure it will be a joke for you to find me a crafter to make me a pair of those!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Maybe I'm even so lucky that you are actually one!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis does a broad smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: So, what do you say good Enkidukai?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Will you help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, Sure. I've just in mind who might be able to make you one.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Oh, great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Then, ask this person you know to make me one.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis looks on the floor and just one second after looks again at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Oh, one last thing…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'd like to see the quality of the blade and of the handle before it's assembled!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I hope that person won't mind about this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: So…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'm looking forward for your return.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are what you wanted to see.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Sorry, good Enkidukai, but I can't see the blade and the handle where are they?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: It's enough if you hold them in your hands, so I can have a look.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are what you wanted to see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis looks with attention to the handle and the blade you are holding.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: They seem to look fine…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Thanks good Enkidukai for allowing me to see them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Then, I will be waiting your return with those pieces assembled!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Please try to be fast!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'd like to try it as soon as I'm off duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I really can't wait to have my new sabre in my hand!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis smiles and waves at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I hope you'll be back soon!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are the sabre you have requested.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis takes the sabre and looks with attention at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: It looks good…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: let's see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis brandishes the sabre and swings it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: It seems to work also fine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Thank you ever so much!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: I'm really looking forward to try it on the arena ground as soon as I'm off duty!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Talking about arena ground…</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Just the other day I've found this book.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis takes out a book and shows it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: It seems to say something about making some swords.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: As you have helped me a lot, I'd like to donate it to you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Maybe it could be helpful to you…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis takes out some circles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: In addition, I will also give you some circles for your great work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis waves at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jecascis: Farewell good Enkidukai.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jecascis diverts his attention from you and looks at his new sabre with a broad smile.-</td>
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
						<td>Rewards: 1 Superior Sword Parchment, 12500 Tria, 6000 XP.</td>
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
