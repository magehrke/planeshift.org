<!doctype html>
<html>
<head>
	<title>The Gemming</title>

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
						<td>The Gemming</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Frilaa's_Lost_Husband.php">Frilaa's_Lost_Husband</a> quest, 10 Emerald Crystals, 10 Gold Ores, 5 Ruby Crystals, 5 Silver Ores.</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you have any errands that need doing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Hello again, Kran.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Or should I say, hello YOU?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yes, I have been asking around the village about you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You have been so helpful to me so far and I wonder if I might impose, rather mightily, once more?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I would be happy to.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: That is so wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: All right, here is the thing…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus looks around, motioning you closer as kra lowers kra's voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: There has been something on my mind lately that I feel I must do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: The time has come for me to create new life, to undergo the Gemming.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: To do this, I must ingest a large amount of rare gems and precious metals.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I will need ten emerald crystals, ten chunks of gold, five ruby crystals, five silver ores, and five hundred tria.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Be sure it is all tria, please, not any other coin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Just give them to me on your return, please.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the gems, metals and Tria you wanted.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yes, yes, these look quite good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Heheheh…yes, these will make a great snack to nibble in the middle of the night.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus laughs and winks, popping a gem into kras mouth and sucking on it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Special cravings, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It is so very kind of you to gather all this for me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: However, this was not all that I need.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I must arrange my leave time with my superiors.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: While I attend to that, can you do me another favor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tell me what you need and I'll do my best.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Thank you so much, Sir YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I knew an old gemma in my youth who mentored me and taught me the value of honor.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It is a lesson I hold dear to this day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Kra's name was Korethsa and kra was the guardian of my friend Malco Mokkar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Please find Malco and ask if I may give Korethsa a namesake.</td>
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
							$npcName = 'Malco Mokkar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Malco Mokkar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gurgus Dahnik is Gemming. Kra would like to name the offspring after Korethsa. Do you agree?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Gurgus name little Kran for Korethsa?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Malco grins with the simple joy of a child.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Malco think that very good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Malco: Tell kra Malco happy!</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Malco thinks it's a wonderful idea.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus already seems heavier and looks to be moving slower than before.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Welcome back, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You really are being a most helpful friend, YOU.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus heaves a rumbling sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: One last matter, and it is too far to travel for me in my…condition.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus smiles and gently pats kras chest.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Would you be willing to help me one last time?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Absolutely; I enjoy working for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I am so glad, thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You see, in my early days in the guard, it was often one of my duties to attend to the needs of visiting merchants.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Watch over them, find them accommodations; things like that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Anyway, one of these merchants was an up and coming Enkidukai named Jalar Bhundri.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I heard he found a wife some years back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: A pretty little thing, she was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Frilaa is her name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Please visit them and tell Jalar I sent you; then ask if he and his wife would be willing to act as guardians to my child at times.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: One cannot have too much assistance in raising a child!</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Gurgus has a favour to ask of you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa looks at you with eyes filled with a heart-wrenching sorrow.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Whom did you say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Gurgus?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa pauses for a moment…-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: My, but that is a name I have not heard in so very long.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Gurgus is a good Gemma; my husband likes kra very much.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: What does Gurgus wish of us?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Kra would like you to help bring up kras offspring.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa smiles prettily, a paw resting lightly above her heart.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: How delightful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: But alas, I should speak with my husband and he is still missing.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa pauses, looking as though she is fighting back tears.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I am sorry, what was I saying?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Oh, yes, terrible business that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Nor is that my only worry of late.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I do not wish to burden you with my troubles, but I must ask someone for help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Will you hear my tale?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am listening.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Oh, Talad bless you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: You see, I have a friend, a very good friend, whom I have not seen in several weeks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: When last we had spoken, she was seeming more and more distant, withdrawn and moody.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Normally, she is a very forthright and stolid woman, but something has changed for her recently.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: The problem is she is a messenger and travels all over, yet I know she is in Hydlaa now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Poor, poor Tarela.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Why does she avoid me when she is here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I fear for her so.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please, could you possibly find her?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Tell her I am worried and I wish to see her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa looks a bit distant and wistful.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I miss her so.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Frilaa is distressed and most anxious to see you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Frilaa?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Frilaa Bhundri?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: No, no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I cannot see her, I will not!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela looks around the plaza a bit nervously, then sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I know it isn't fair to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: She is indeed a good friend.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela's eyes mist over, taking on a far-away musing expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes..</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: No!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I will not go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: But…whatever can I do?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: To see her now will only cause strife.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yet I want to see my friend once more.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela finally looks at you, her head tilted quizzically.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: But why do I burden you with this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I long to answer, my duties be hanged!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela bursts into angry tears.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Tell her I cannot, or stay and I will tell you why…</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: w-which one will it be?</td>
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
						<td>YOU: I will pass on your refusal.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela sniffs and tries to compose herself with a cold expression.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Thank you, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I anxiously await your return.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tarela cannot come visit you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Why that's absurd!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: This is so unlike her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Did she tell you why?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I thought it would be wrong to pry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa sobs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I cannot believe that she would abandon me in my greatest time of need without a word of explanation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Whatever could I have done that she could treat me so?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please, I am begging you Sir, return to her and find out what vexes her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Will you do this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will ask; I cannot guarantee she will answer.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Good, thank you, helpful Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Tell her I want to know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Return to me when you have her answer.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Frilaa is concerned and wants to know what troubles you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: How can I possibly tell you, a stranger, my feelings?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: How can I describe to you this loneliness and anger?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela looks deep into your eyes, her gaze piercing and cold.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Have you ever felt love, Madam?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: If you have, then you understand this despair I feel for having my heart cleft in twain by her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: For years we have been friends, Frilaa and I, since I was a cub and she was a young Enki.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: How could she not know what I felt?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Imagine my relief at the announcement of her marriage to that merchant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: He could give Frilaa a good life and some strong cubs.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Then the buffoon gets himself missing and who does lovely Frilaa turn to?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Noxdar, the one man she knew I had my eyes on!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela giggles a bit hysterically.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Yes, dear Frilaa goes to cry on -his- shoulders, and dashes all my hopes of his courting me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Doesn't she know better than to toy with people's emotions?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I need not go on, but suffice to say she stole Noxdar away!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: And that is why; you may tell her as such yourself.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You stole Noxdar from Tarela.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Stole him away?</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I don't…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa looks perplexed for a moment.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Oh, no!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: She knows!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Good gracious, I did not imagine she actually cared for him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I mean, of course I thought she did at first; I teased her about it, but Tarela always denied it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: She knows well that I am married, possibly tragic though it is now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I…oh, oh dear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Now I do understand why she has been avoiding me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: She must think I'm some terrible harlot!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I should make it up to her with a formal apology and a promise to make amends.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa writes a letter on a piece of pink paper, seals it, and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: See that this gets to her safely, please, Madam.</td>
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
							$npcName = 'Tarela Girshon';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Tarela Girshon</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Frilaa sent you this.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: A letter from Frilaa?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela blinks slowly, nearly in disbelief.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Could she not face me like an honourable woman?</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Ha!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Of course not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Nothing honourable about her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela opens the letter and begins reading. She mutters as she does.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: truly sorry …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: did not know …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: beg forgiveness …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: promise to make amends …</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: start by helping you find a strong husband.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Hmm.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela looks up at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: She seems sincere, and yet…oh, I do not know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Were you in my place, would you forgive Frilaa and accept this offer?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: It seems sad to lose a good friend over a bit of heartache. Forgive her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela smiles as she tucks the letter away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I see that you understand the true nature of friendship; you are a wise Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: No mere man can break the bonds of friendship forged between two women!</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: And besides, if Noxdar is willing to be with a married woman, he has proven himself weak and unsuitable of my affection.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: Tell Frilaa I forgive her and accept.</td>
					</tr>
					<tr class="quest_npc">
						<td>Tarela: I thank you for helping me realize what to do.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tarela accepts your apology.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Oh, such wonderful news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: At last I can work on patching up my friendship while the search for my husband goes on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: With such a light heart, I can only say yes to Gurgus!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please tell him I said yes, and hurry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Thank you for all your help, Madam.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa smiles.-</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Frilaa would be honoured.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus looks far heavier and slower than the last time you saw kra.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Oh, that is very good news!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I do hope Frilaa and Jalar will be coming soon so see the child.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus gives you several golden circles and a Brown Way glyph.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Please, take this with my thanks!</td>
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
						<td>YOU: I think I should hear your reasons.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Ah, a collector of tales are you?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Well here is one for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela turns and leans casually against a nearby stone block.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It so happens that Frilaa was my best friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: It is heartbreaking to hear of her husband's disappearance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Oh, you know about that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Then you should know that I have been using every contact I have to try to find him.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Yet all my efforts have been to no avail.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela gazes over your shoulder at a passing Klyros.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Between you and me, I secretly hope that he -isn't- found.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I have my reasons, and there is no reason for Frilaa to know that, so don't you go telling her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: And before you go asking weird questions, no, I had nothing to do with Jalar going missing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You know what?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: I've changed my mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: You don't really need to know why.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Tarela gives you a letter addressed to Frilaa and turns away from you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Just take this and go.</td>
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
							$npcName = 'Frilaa Bhundri';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Frilaa Bhundri</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Tarela gave me this for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa takes the note and opens it to read it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: I do not believe this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: She will no longer be my friend.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Frilaa sighs-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Well, it seems I must struggle on alone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Frilaa: Please tell Gurgus that my answer is no.</td>
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
							$npcName = 'Gurgus Dahnik';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gurgus Dahnik</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Frilaa is not able to help you now.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus looks far heavier and slower than the last time you saw kra.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Oh, that is really too bad.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Nothing to do about it now, as it will be time for me to gemmate very soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: In any case, you have been of great help to me.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Gurgus gives you a pouch of coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gurgus: Please take this as my thanks.</td>
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
						<td>Rewards: [Way 1] 1 Creature glyph, 25 Faction with Artists Association, 5130 Tria, 13600 XP, [Way 2] 25 Faction with Artists Association, 5130 Tria, 13600 XP.</td>
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
