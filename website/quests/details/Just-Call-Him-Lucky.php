<!doctype html>
<html>
<head>
	<title>Just Call Him Lucky</title>

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
						<td>Just Call Him Lucky</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/What's-up-with-the-Carpets?.php">What's up with the Carpets?</a> quest.</td>
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
							$npcName = 'Rolara Hammersong';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rolara Hammersong</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You appear troubled?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara fidgets with the drawstrings of her apron before continuing in a worried tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: My husband Lucky, I mean Irnol, went out on some errands yesterday afternoon and he has not returned.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I am very worried.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rolara looks at you pleadingly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: There is so much work to be done with the shop.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I cannot go looking for him myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Please would you find out what happened to him and if he is all right?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, where was he going?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: Thank you so much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: I know that he planned on getting some of our knives sharpened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rolara: As to the rest of his errands, I do not know.</td>
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
							$npcName = 'Harnquist';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Harnquist</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Has Irnol “Lucky” Hammersong been by lately?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Well…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist ponders a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: That fool Lucky was here yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Wanted his knives sharpened.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist gives an indignant snort.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Told him to keep away from the forge I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you ask me, and you didn't, this smithy is too much like a cursed town hall these days.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: People hanging about and interfering with work!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist eyeballs the people around the smithy with disdain.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: He got his comeuppance alright.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Put his right hand right on the red hot tongs on the table.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Screamed his lungs out he did.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist makes a self-satisfied smirk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: I sent him over to Aleena to put a poultice on his sizzle.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Now the butcher knows what meat feels like.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Harnquist laughs at his own joke.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: Anyway, enough chatting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Harnquist: If you see the old codger tell him he still owes me 50 tria for the knives.</td>
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
							$npcName = 'Aleena Arlavin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Aleena Arlavin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was told Irnol “Lucky” Hammersong came by here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The twit came in with a terrible burn on his right hand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Nothing that a good herbal poultice won't cure.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena smiles despite herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I told him he should be able to use a knife again in a week.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena giggles to herself.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: How he ever got his nickname only Laanx knows.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: After I helped him he…You had better ask Allelia downstairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I should not laugh too much at another's misfortune.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Aleena composes herself and busies herself with some herbs.-</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about Lucky's misfortune?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I won't forget last night easily.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia looks a little bemused.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: First Darven kept pestering the patrons to play gambling games.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia starts counting off on her fingers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Then that Thorian got into a heated argument with a stranger and then Lucky sprained his ankle when he fell down the stairs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: At least the poor man could still hobble so I fixed him a drink or two for the pain.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia pauses to take a breath.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: But that is not the worst of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Lucky drank way more than was good for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He could hardly speak when he eventually staggered out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: And then later…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia lowers her voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Later that same night he got arrested for attempted murder on the stranger.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Can you imagine?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Rabartus told me about the arrest this morning.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: You should ask him about it if you see him.</td>
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
							$npcName = 'Rabartus Livrandar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rabartus Livrandar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you tell me about Lucky's arrest?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: I am not at liberty to discuss this with the public, Sir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rabartus stiffens up a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: You will have to speak to my superior officer.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rabartus meaningfully rolls his eyes to his left.-</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Rolara is very concerned and sent me to investigate his dissapearance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Let me see…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra takes out a few sheets of paper and studies them for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: In the early hours of this morning guardsman Rabartus Livrandar apprehended one Irnol Hammersong for attempted murder in an alley just outside Kada-El's.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: The suspect was holding a knife in his left hand and was covered in blood and standing over the body of the victim, as of yet unnamed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra flips through the pages.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: The suspect is currently in custody in the dungeons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: As of yet, we have been unable to interrogate him successfully since his tongue is swollen.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra smiles wryly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Some allergic reaction to something he ate methinks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: How he ever got his nickname…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra appears to think a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Since you are interested and we are so very short staffed perhaps you would be willing to assist me in this matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: What do you say citizen?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I love a good investigation.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: You are deputised for this matter.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I already have the statement of the arresting officer.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: However, i need you to collect statements from the following witnesses.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra consults his papers again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Darven Bounash, Thorian Gronk, and Allelia Symiestra.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: The proper procedure is to ask each witness to give you a verbal statement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Then give them the forms and have them write it down for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I also need you to take the knife to Vresa Nohdiir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: She may have some insight on the murder weapon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Tell her I sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Ask officer Livrandar to give you the knife before you go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra salutes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Deputy, then return to me and tell me you are done, provided you are indeed done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra hands you three witness forms.-</td>
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
							$npcName = 'Rabartus Livrandar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rabartus Livrandar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Give me the alleged murder weapon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: One moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Rabartus rummages about his person.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Be careful with that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: It is evidence you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rabartus: Return it to Jefecra when you are done with it.</td>
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
							$npcName = 'Darven Bounash';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Darven Bounash</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I require a verbal statement from you regarding the murder.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: It was like this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven looks nervous.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I went to the inn for a relaxing ale.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Nice enough evening for it really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Did a bit of friendly gambling with some of the patrons.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven takes a deep breath and continues quickly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Nothing illegal mind you, just a bit of fun between friends, you understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I did not cause any trouble, really.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Despite what Allelia might say.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven bites his lower lip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I mean the only unfriendly was some dwarf from out of town and when he told me to fall off the rim I left him alone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Had nothing further to do with him, you have to believe me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven reflexively twitches his right hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I left round twelve.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: The stranger, Lucky and Thorian were still inside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: That is all I can tell you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Now let me sign the statement.</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: People to fleece…</td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: I mean see.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please complete this form.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Let me see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Darven writes furiously and after a little while returns the form to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Darven: Hope that will clear things up.</td>
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
							$npcName = 'Thorian Gronk';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Thorian Gronk</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I require a verbal statement from you regarding what happened.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian seems agitated.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I came, I drank, I left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: That's all there is to it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: If anyone tells you any different they are lying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Some drunken dwarf pestered me during the course of the evening but I ignored him completely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: I left a few minutes after Darven left.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Last rounds anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: So there!</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Now let me sign your stupid statement so this can end.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please complete this form.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: What a waste of time!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Thorian writes slowly. Every so often he stops to think, twirling the quill between the fingers of his left hand before continuing.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Now you have wasted enough of my time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Thorian: Good day!</td>
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
							$npcName = 'Allelia Symiestra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Allelia Symiestra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I require an official statement about what happened.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Apart from what I told you before…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia thinks a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: The stranger struck me as odd.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia closes her eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Only ordered water the entire evening.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He seemed upset.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Murder in his eyes if you will.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Only remember him speaking when Thorian came in.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Did not hear what he said but it seemed to upset Thorian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Thorian shouted at him at the top of his lungs about there being nothing wrong with the furs and then ignored him for the rest of the evening.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia wrinkles her brow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Darven tried his luck with the stranger too.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I have half a mind to bar him from the inn.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: He can be such a pest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Lucky just sat there the entire evening nursing his hand and his drink.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Let's see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Darven left just before twelve, Thorian just after twelve and the stranger just after Thorian.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Lucky seemed a bit woozy so I helped him outside.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: If only I had walked him home none of this would have happened.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: May I have the form please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Please complete this form.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: This will only take a moment.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Allelia completes and signs her form with resolute efficiency.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: There you go.</td>
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
							$npcName = 'Vresa Nohdiir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vresa Nohdiir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jefecra sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Oh fish!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Another one of his little items I suppose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Oh well, let me have a look.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa holds out her hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are the knife.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Quite a rarity.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa studies the blade intently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Trasok at his finest.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa holds the blade for you to see.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Note the maker's insignia just below the hilt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: But the handle is the really interesting bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa swishes the blade around experimentally.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: This is specifically designed for the left handed wielder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Notice the way the handle is shaped.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Vresa makes a couple of stabs in the air.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: But not any left handed wielder either.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: This little marvel was made for an individual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: I will send a written report to Jefecra with a runner.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vresa: Here is your knife.</td>
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
							$npcName = 'Trasok Starhammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Trasok Starhammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What do you remember about this handle.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I remember this little item.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: One of my best I have to say.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Let's see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok rummages through an old box filled with all kinds of papers.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Ah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Yes.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Here it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Made this little item a few years back for Thorian Gronk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Goodness knows what he wanted with it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Does not seem the heroic type if you get my drift.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Trasok gives a little sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: Still, his money is as good as the next fool's I suppose.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: You may keep the receipt copy if you want.</td>
					</tr>
					<tr class="quest_npc">
						<td>Trasok: I will lose it eventually anyway.</td>
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
							$npcName = 'Jefecra Harcrit';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jefecra Harcrit</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Vresa Nohdiir will send you a report about the murder weapon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I received it some minutes ago.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra draws a paper and starts looking at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: It is not as helpful as I hoped.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra tighens her lips then puts away the report.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Now, if you think to know enough about the murder weapon I have to file it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: But I warn you, I will not give you back the knife.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the three statements you asked.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Excellent work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: This is quite a lot of evidence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I am sure we are near to the solution of this case.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_waysHeadline">
						<td>Possible Ways: 2</td>
					</tr>
					<tr class="quest_emptyRow_afterWaysHeadline">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 1:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here is the knife, I do not need it anymore.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So now you have the evidence as requested, maybe I could help you more.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Good, good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Let us review then, shall we?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Based on what you have observed, in your opinion, do you think the accused is innocent or guilty?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait a second and look at this knife receipt, I took it from Trasok.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: What is it?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra opens her eyes wide-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: This document explains a lot.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: A most sterling job.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra beams at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Due to your efforts Lucky will be released and completely cleared.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: We will ask Thorian Gronk to assist us further with our enquiries.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra Harcrit looks stern.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: His explanation will have to be a good one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I will inform Mrs Hammersong that her husband will join her presently and on behalf of the guard I thank you for preventing a possible miscarriage of justice.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_diffWays">
						<td>Way 2:</td>
					</tr>
					<tr class="quest_emptyRow_afterDiffWays">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lucky is innocent, and a victim of “wrong place, wrong time”.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I concur with your opinion.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Jefecra smiles a bit.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: As far as alternate suspects go, for me it's between Thorian and Darven.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Which of the two do you prefer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: My tria is on Thorian.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Well done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: He is the most likely.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: But unfortunately we still lack physical evidence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Thank you for all your efforts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: We will continue the investigation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: Please accept this reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jefecra: I will inform Mrs. Hammersong of the news.</td>
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
						<td>Rewards: 20 Faction with Guard, 3391 Tria, 12200 XP, [Way 1] 10 Faction with Stonebreaker.</td>
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
