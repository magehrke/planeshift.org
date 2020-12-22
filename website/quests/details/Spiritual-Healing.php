<!doctype html>
<html>
<head>
	<title>Spiritual Healing</title>

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
						<td>Spiritual Healing</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: Rank 80 Alchemy, 1 Iron Ore, 1 Diluted Grendol Venom Essence.</td>
					</tr>
					<tr class="quest_emptyRow_afterRequirement">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: not sure about the needed skill level, something between 71 and 89</td>
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
							$npcName = 'Vladovic Chel-Astra';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Vladovic Chel-Astra</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am told you might have some special kind of alchemy to teach me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra tries to look innocent.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Special alchemy?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Why, whatever do you mean?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: To make the most powerful potions of all!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra rolls his eyes a bit and sighs, then focuses on you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Hello YOU, yes I remember.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Again the fascination with the mystic aspect of alchemy, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Do you really think you're ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, I can make a Greater Potion of Restoration now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well, let me tell you that this is...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra coughs a bit</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: ...</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Or -was- the best kept secret of our art.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is bestowed upon only those who are spiritually worthy of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Anyone can practice high levels and be able to make the most potent and complex potions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But this?</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: No, this takes a much deeper understanding.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Before we even begin, you must prove you deserve such an honour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: First, I must emphasize that there is a heavy spiritual aspect to what we are talking about here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I must ask you a very personal question before we proceed.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There is no wrong answer here, so just be honest.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There are various gods and religions in Yliakum.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Which do you pledge yourself to?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have 3 answers here: Laanx, Talad and Dakkru</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am a follower of Laanx.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra smiles broadly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Oh, wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I, myself, am a Laanx follower as are many in the craft of alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There is a strong connection between Laanx, Lemurs, and alchemy, which I hope you'll come to appreciate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In fact, this task I have for you very much has to do with Laanx.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What is this task?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: It is most urgent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Sharven Xant-Areth, the priest at the Iron Temple in Hydlaa, has a friend who has taken quite ill.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Perhaps you know her, Charisa Malod.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: In fact, it seems she is slowly dying.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: She misses her husband so much, I'm afraid she has lost the will to live.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: I spoke to Sharven and we think a special ingredient combined with the Life Elixir will give her some much needed happiness and break this despair.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: If you can provide a specific component, you will prove your worthiness.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Aww, I know Charisa, sad to hear. Yes, I want to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Good, but it will not be that simple as you will see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This component I speak of is not commonly found but I hope -you- will provide it in the end.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But first, I will give you some background.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Perhaps you have heard me speak of the Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Those who practice the art of the Great Work are known as Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: There is an item these Sages seek to create and it is called the Stone of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: To complete your task, you must discover what this stone is and its importance.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: As you learn the alchemical process of making this stone, you will -become- the stone, perfecting your own soul in the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you willing to do it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, but wait ... become a stone?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Vladovic Chel-Astra shakes his head and sighs a bit.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: All I ask is that you keep an open mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The first step is to understand the components needed for the Stone of the Sages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Those are sulphur, salt, and mercury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But these are not the common ones you can buy from any merchant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You need the spiritual ones.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: They represent the soul, the body, and the spirit, respectively.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You need to identify and purify them to pursue the Great Work.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get these things?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The first secret I'm going to reveal to you is how to get your spiritual salt.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This is known in the Great Work as the alchemist secret fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You will need niter and perhaps another reagent you have never worked with before, called tartar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Now, those you can buy regularly from a merchant or alchemist, like myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: This alchemical fire will purify other components, burning them with a flameless and lightless fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Next, you'll need spiritual sulphur.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Now you'll have to start figuring things out, but I will give you a clue.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Are you ready?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm listening.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Well, really, I've already told you where to go.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: But I want you to get two items.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: First is a simple ore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The common ore that bears the name of the place you are to deliver it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: The second is a diluted grendol venom essence.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: You should be able to make that using your Healer's Remedies book.</td>
					</tr>
					<tr class="quest_npc">
						<td>Vladovic: Bring these two items to the Lemur in the temple and he will give you further instructions.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am here to help Charisa. [You give him the essence and the mineral he's looking for.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth takes the items and smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah, so you are the one Vladovic has sent to help.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, yes, I am quite concerned about her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Perhaps you know that Charisa's husband is away on dangerous guard duty and she hasn't seen him in quite awhile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I have faith that he will some day return, but I think at this point, Charisa has seemingly stopped believing that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: She has lost hope and with it the will to go on.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I feel that only something from the Great Work can help restore Charisa's faith and I really hope you will be worthy enough to find the last ingredient I need to save her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I also hope Laanx will find you worthy to provide it.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What must I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: First thing is first, I shall transform this ore into its spiritual form.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth gets out a wide container, puts the ore in it, then takes out a wooden mallet, pounding the ore until it is a powder.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Then he shakes the container, sifting the powder inside, before hovering his hand over it and saying an incantation.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And there we have it, the spiritual sulphur.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Wait, spiritual sulphur? That was powdered iron.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth smiles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Very good observation.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I see you question these things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: That is good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is known in alchemy circles as spiritual sulphur, but indeed, it is simply iron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: As you will soon see, it is all connected.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Long ago, we Lemur had to operate a little more...shall we say...discretely because there was much ignorance and fear over this form of alchemy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: So some terms are...misdirection of sorts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But you'll get the hang of it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The final two items I'll need are spiritual salt and spiritual mercury.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: So I need you to visit Miss Zireti in arena.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I am sure you are quite familiar with her by now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Buy the following from her: one niter, seven tartars, and five stibines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Also have her make an alchemist secret fire for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is done by combining one niter with seven tartars.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I will explain the stibine upon your return.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Tell her it is at my special request.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: She will understand.</td>
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
						<td>YOU: Sharven sent me with a special request.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Oh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: What does he need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I need to buy one niter, seven tartars, and five stibines.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ah, learning the Great Work, I see?</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: That's great, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Hmm, you'll need a serious amount of tartars and stibines as you practice this.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: I'll tell you what: I'll give you a choice.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: The items in those amounts for their regular price which comes to</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Liera Zireti looks up in thought for a second.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: ...260 tria, or I can give you 10 niters, and a stack each of tartar and stibine for, say, eight circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Full price for all that would be over 10 circles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'll just get what I need for now. I also need an alchemist secret fire.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Ah, of course, that's what one niter and seven tartars is used for.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Very well, that will be 260 tria for the materials and I'll make a secret fire for you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Liera Zireti goes to the table, quickly combines the niter and tartars, and comes back.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you go [give 260 tria.]</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Great, that's five stibines and an alchemist secret fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Liera: Good luck to you, YOU!</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have returned with the ingredients.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You have the alchemist secret fire?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, here it is. [You give Sharven the secret fire.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth takes the powder in a container and sets it aside.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now the stibines?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Yes, here it is. [You give Sharven five stibines.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth takes the stibines and hands one back.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Hang onto one, this task requires four.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But I make it a practice to have more ingredients than I need in case something goes wrong.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So what do these ingredients make?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Ah yes, so we have our spiritual sulphur, which was the powdered iron; the spiritual salt, which is the alchemist secret fire; and the spiritual mercury which is made from the stibines.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We take four stibines and grind them into a finer powder.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is all connected, you see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Stibine is a smooth, shiny crystal-like ore, which is very brittle, containing several critical ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: From it we get sulphur and pure stibine which scientists call antimony.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: We mix this with the powdered ore and secret fire.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once properly treated with the secret fire, the spirit inside the spiritual sulphur will be set free and you will get black and white stones, which you then hammer to separate the black and white parts.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ah, so this is the Stone of the Sages Vladovic talked about?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Not quite.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: That is just the first phase of the transformation of ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The Stone of the Sages requires a tremendous amount of work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: For instance, next, through subsequent purification of those black and white parts, you will get a white sulphur and a red sulphur, which you'll need to alchemically marry in order to achieve what we call the alchemical egg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: In ancient times, a Lemur was required to get married before he was taught this stage of the Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Today it is no longer required, but that is why it is referred to as a "marriage" of ingredients.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: This alchemical egg ends the only first stage of the Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: -You- are like the alchemical egg.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You have much knowledge about alchemy but are not yet ready to be given the alchemist's most precious secrets and to prepare the ingredient I need to save Charisa.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So then what's next?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: This is where it gets very interesting and where your spiritual side is explored and tested.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: To proceed in the next stage, you must purify your soul, atone for your sins and beg for pardon, pledging yourself to your chosen patron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: If you are a devout Laanx follower, I can give you the atonement ritual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Otherwise we can come up with something in accordance with your patron.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once your soul is purified, you'll need to get a shard of Dakkru's power, thus stepping into the Blackness phase of the process.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Once you have that, Vladovic can help you prepare the special ingredient I need to save Charisa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: So I assume Vladovic asked you about your religious affiliation?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What was your response?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I am a Laanx follower.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth can't hide a pleased grin.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Excellent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Then let us proceed with the atonement ritual.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now, most of us have made mistakes in our lives.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: The world can be a challenging place.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: What is the most heinous act or crime you have ever committed?</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And don't worry, you are safe here, what you say here in the temple will never be spoken of again.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: [You confess some other sin.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth nods and continues.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Laanx will forgive you if you are truly remorseful and pledge to do good works and redeem yourself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Do you vow to do this before Laanx?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I do.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Thank you for your trust, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: O Laanx, hear the repentance of this subject.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Forgive her transgressions and accept her contrition.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth softly says some sort of additional prayer, then casts a spell on you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: May Laanx frighten the shadows from your path, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: This ceremony is concluded.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now go and seek out Rulayne Ogrin.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You can probably find him by the burial well between Hydlaa and Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Oh, and be sure to lighten your load before you go.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth gives you a wry smile.</td>
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
							$npcName = 'Rulayne Ogrin';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Rulayne Ogrin</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven sent me. I am looking for a shard of Dakkru's power.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin looks confused for a moment then grins a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Oh, another would-be alchemist on fool's errand, I presume.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: Well, you know where you need to go to get it, don't you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Really? I have to die?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: What you are looking for is not something you can hold...oh, nevermind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne: I'm sure you'll figure it out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Rulayne Ogrin's grin grows bigger as he casts a powerful dark way spell that quickly begins to drain you of all life.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: not sure if you have to talk to Londris and Oriven. Nevertheless here it is:</td>
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
							$npcName = 'Londris Kolaim';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Londris Kolaim</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get a shard of Dakkru's power?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: A shard of....</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Mortal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: I do not have time for such nonsense.</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: You have the audacity to ask something of our beloved goddess?</td>
					</tr>
					<tr class="quest_npc">
						<td>Londris: Run back to whoever sent you.</td>
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
							$npcName = 'Oriven Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Oriven Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Where can I get a shard of Dakkru's power?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven Thamal chuckles a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Ah yes, the 'ol shard of Dakkru gag.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: Another alchemist I presume?</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: First off, you don't take anything from Dakkru, She takes from you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: And you won't find anything in that library over there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven: My suggestion is to go back to the realm of the living and run as fast as you can to whoever sent you before Her curse runs out.</td>
					</tr>
					<tr class="quest_npc">
						<td>Oriven Thamal gives you a wink.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The curse is the shard of Dakkru's power?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Yes, I'm sorry if that was not clear.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But now you understand.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now that you have cleansed your soul and emerged from the Death Realm, you have entered the whiteness stage of the Great Work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I've sent the ingredients I've already made ahead to Vladovic.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Now quickly, before the curse expires, get to Ojaveda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: But instead of seeing Vladovic, go directly to Chired Idelall in Dsar Kore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: She should be waiting for you and can get the ingredient I've been looking for.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth hands you two travel tokens.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Have a couple of travel tokens to speed things up.</td>
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
							$npcName = 'Chired Idelall';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chired Idelall</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sharven sent me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Ah yes, child, I've been expecting you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Vladovic was just here and we have prepared a Life Elixir which should be ready any minute.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I feel the burden of Dakkru's curse upon your body, but your soul has been purified.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: The special ingredient Sharven needs is an Essence of Happiness.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: For that I will need a very special component: a drop of your blood.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall takes your hand and swiftly pricks your finger, extracting a small drop of blood.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: You already know how to extract essences from blood and from your blood I will extract the Essence of Happiness now that your soul is lighter than a kikiri feather and your body was purified by dying.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You mean I have to die every time I want to make one of these potions?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall chuckles.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: No, don't worry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: This is a very unique case.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: This is an extension of the Great Work we are trying here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: It will not be necessary once you begin the Great Work for yourself, but it is good to understand these connections so you can appreciate the various stages.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Now let's get to work.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall puts your blood into the alembic then carefully mixes some reagents in other vials. She then mixes it together and puts it in the decanter. She waits a moment, then carefully mixes it together with another potion on the table with a stirrer. Finally, she meticulously measures it and pours it into a vial, sealing it with a cork.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: There, all done.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Now take this quickly back to Sharven.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall hands you the vial.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You got anything to lift this curse?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall laughs.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: I'm afraid not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired: Even the Great Work cannot compete with Dakkru's power.</td>
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
							$npcName = 'Sharven Xant-Areth';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Sharven Xant-Areth</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the cure! [You hand Sharven the vial.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth's eyes widen and he breaks into a wide grin.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Wonderful!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: You did it, YOU.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I knew you would come through!</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I know you have been through a lot, but now I hope you are beginning to understand the nature of the Great Work and how special it is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: It is deeply rooted in Lemur culture and history but now it is available to all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: I shall get this to Charisa immediately.</td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: Thank you and may Laanx always frighten the shadow from thy path.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Sharven Xant-Areth hands you a very large pouch of tria.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Sharven: And remember, Vladovic will have much more to teach you.</td>
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
						<td>Rewards: 10 Level in Science Association, 20277 Tria, 20600 XP.</td>
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
