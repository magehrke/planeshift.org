<!doctype html>
<html>
<head>
	<title>Ineffective Affections</title>

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
						<td>Ineffective Affections</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/quests.php">quests</a> quest.</td>
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
							$npcName = 'Nkel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What can you tell me about Sysial Shillor?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Ahhh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Sysial Shillor is a great woman.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Young, strong, beautiful and reckless all at the same time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: My brother is not charismatic at all, but he still has hopes to get her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: The problem is, she doesn't really care for him that way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: She loves me, but doesn't have the heart to tell him directly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: One thing you could do is tell him that she sent you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: That she turned him down.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: But let him down easy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: It's really the compassionate thing to do.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Would you do that, for all our sakes?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I will do my best to help all involved.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I hardly can wait to be with my Sysial!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Please hurry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I will wait here.</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sysial Shillor wanted me to tell you that she cannot accept your love.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Don't even start.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw frowns at you and gestures irritatedly as he speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: You don't think I've seen you talking to my brother from over here?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I bet he told you how great he is and that Sysial would be all his.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Now you want to tell me that I have no chance or some such.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I'll give you points for valour, but I'm no fool.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I won't give up that easily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: In fact, I'd pay you for doing something for me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: What say you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll hear you out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: All right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw smiles insidiously.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I want you to do following: I have one of Sysial's own necklaces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: You don't have to know how I got it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: You only have to go to her and give her this letter and the necklace.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: That's all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: When you return with her response, I'll give you some tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw gives you the necklace and the letter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: You're a good person.</td>
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
							$npcName = 'Sysial Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sysial Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have been instructed to bring these items to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial holds the necklace up and smiles broadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: My necklace!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I thought I'd lost it!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial starts to put it on, which draws her attention to the letter in her other hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Oh, this note is for me too?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial opens the letter and begins to read.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: 'Dearest Sysial…' Oh, it is from Nkaw!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Stuff about work…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: fought with Nkel…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: What?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Nkel stole it?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I have been looking everywhere for it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: …</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Love, Your Nkaw.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial shakes her head sadly and sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I never wanted this to happen.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Nkaw and Nkel are very nice and I consider them both my friends, but nothing more!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I can't believe that they are now fighting over me and that one even stole my belongings!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: It doesn't matter to me who did what.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: As long as they behave like children, I can't talk to either of them.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Couldn't you…</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Couldn't you go to them both and tell them I sent you, and then, that I don't love them?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Please?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brothers should not act like this towards each other, I will do my best to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Thank you so much!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: If you can make them realize their folly and get them to make up, I will have something for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Just tell them I sent you, tell each one I don't love him, and return to tell me all is well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: But tell Nkaw first; he at least deserves a prompt response to his letter.</td>
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
							$npcName = 'Nkaw';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkaw</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned with tidings from Sysial.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: And?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: What did she say?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: She certainly fell in love with me, didn't she?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I can't wait to hold her!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Er, why are you making that face?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Is something wrong?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Don't worry if she didn't give you a reward.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: That is no problem…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: or…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: is it something else?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Speak, Madam, I beg of you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sysial regrets that she does not return your feelings.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: WHAT?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: She doesn't love me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Are you saying that she loves my megaras dropping of a brother?!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: She does not love either of you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: What does that mean?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Surely one of us is attractive to her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I mean, we are both tall, and strong, and loving…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw pauses and shakes his head. He sighs quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Ah, who am I to question the ways of love?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: 'Love is a shadow no light can brighten,' that is what father always said after mother died.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: I thank you for your efforts on my behalf.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Will you carry a message from me to my brother, since I cannot leave my post?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Perhaps at least he and I can stop hating each other.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Of course I will.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Great.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Just tell him what you told me and let him know I apologize.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkaw gives you some tria.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkaw: Here is a little something for you.</td>
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
							$npcName = 'Nkel';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Nkel</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sysial has a message for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I am certain my brother is trying to do something shady to usurp my place in her heart.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I saw you with him over there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: What have you come to tell me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sysial cannot love you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: By the gods?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Are you trying to say that she loves him and not me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: No, she will not give her affections to either of you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: What do you mean?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: She must love one of us; we are handsome and brave.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Right?</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Wait…</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I think I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Yes, it makes sense: both of us are so eager to love, we confused her friendship for love, and we fought each other over her to no end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Pah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: How could anyone love angry fools like us?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkel frowns and looks across the chasm at his brother's watchtower for a minute before continuing in a quieter voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: At least with this knowledge, maybe that can change.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Did he apologize?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: He does send his apologies.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Good, then all is well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: I'm glad I no longer need to be angry at my brother.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Nkel takes circles from a pouch and gives them to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: You have been very helpful to me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Nkel: Here is a little something for you.</td>
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
							$npcName = 'Sysial Shillor';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sysial Shillor</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have told both Nkaw and Nkel that you cannot return their feelings. They have agreed to stop pursuing you. What's more, they are no longer angry at one another.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I'm so relieved that there won't be any more fighting between those two.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: They should be saving their aggression for our true enemies!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: This is excellent news; here is something for your worry.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Sysial gives you a golden ring.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: Thank you so much, good Madam.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sysial: I truly do appreciate this.</td>
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
						<td>Rewards: 1 Golden Ring, 12440 Tria, 28600 XP.</td>
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
