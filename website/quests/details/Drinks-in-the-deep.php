<!doctype html>
<html>
<head>
	<title>Drinks in the deep</title>

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
						<td>Drinks in the deep</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 7 Red Liquors.</td>
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
							$npcName = 'Crosh Dunehammer';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Crosh Dunehammer</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Could you use some help?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Ah, reinforcements!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: All right!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh claps his hands together excitedly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Now, let's have you watch that way there…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh points across the chasm to the doorway one can't reach without flying.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: And I'll watch, uh, this way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: All right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh turns and vigilantly stares at one of the other arched passages.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Time passes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh mutters something nearly inaudible.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- More time passes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What exactly am I looking for?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: N-no, I don't want more fish, ma.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh mumbles something else too garbled to make out, and then begins to snore quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I think you're drooling on your armour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Hu-Wha?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>- Crosh jumps and looks around with a stern frown.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Did you see something?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Are they coming?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Hmm…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I don't see anything.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh puts a hand to his ear, listening intently for a minute.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Maybe it's just one of them miners.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Always coming down here, they are.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Never understood the appeal, myself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh yawns, stretches and then smacks his lips together thoughtfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Y'know, I could really go for a few drinks right now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Like three or four…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh looks at you and smiles as an idea strikes him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I got it!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I can't leave here, because I've been assigned, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: But if you're here to help me, then you got to follow my orders.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I hereby order you, Sir Reinforcement Nolthrir What's-yer-name to bring me four- no, no, let's do this right…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: bring me seven mugs of red liquor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh winks at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I'll give you something decent to make it worth your while afterward.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: YOU hands over the mugs, trying not to spill them.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Aah, these'll hit the spot indeed, thanks!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh glances around, his arms full of mugs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: No upper officers in sight, heheh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh drinks greedily at the first mug and burps loudly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Mmmm….</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: been toooo long since I had some of this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh glances around once more and pulls at the mug again, quickly finishing the liquor.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Yaar!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Now, let's see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh sets the mugs down, keeping a full one in his hand, while the other fishes in his purse for a bit before taking out three lumps of silver ore.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Found these down here the other day, I did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Talad knows where it came from; maybe it fell out of one of them miner's pockets.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh shrugs and pushes it into your hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: All yours now, soldier.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh quickly polishes off a second mug and tosses it into the chasm, listening for the clatter of it hitting the bottom.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Pretty deep hole, that is, eh?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: You seen that creepy fellow that lurks around down there?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: tell me more about this person.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Calls himself 'Zak' he does, you know?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh takes up a third mug and sips at it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: But I'll…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I'll tell you something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: That's not his real name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Not at all.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh waves the mug gently in the air before taking a long drink from it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Aah, excellent stuff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Thank you for again for fetching it, Sir.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh suddenly stops moving and looks around intently.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I thought I heard something.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So, what is his real name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Ahh, now that I can't tell you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh finishes his third mug and tosses it over, pausing to wait for the smash.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I don't know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I just happened to overhear him having a conversation down there with this Dermorian lady one day.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh shrugs, burps, and takes up another mug. He sips at it as he looks around, squinting off into the passageways.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Real creepy fellow.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Gotta be, to spend all your time down here, eh?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh laughs a while, perhaps too long.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What did the Dermorian lady say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Oh bosh, I wouldn't know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Do I look like some kind of eavesdropper to you?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh frowns at you and looks away, lifting his fourth mug for a series of sizeable swallows.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Recruits these days, I don't know what's going to become of the army.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh peers into the mug, sighs, and tosses it downward, the last bit of liquor spraying outward as the mug tumbles against the stone walls and down into the void.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh takes up another mug and stands holding it for a moment, studying you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I shouldn't have mentioned that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: That fellow is bad news, soldier.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh glances around and lowers his voice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I might tell you, for a golden circle.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh nods once and drinks from his mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your money. Tell me your tale.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Thank you kindly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh leans down and stuffs the coin into his boot. He straightens and looks around before whispering to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: So, I was a little bit off-duty, looking for some grubs, and I come round a corner, and I see them people down below and I hear them talking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: The lady said something like 'your mum would not approve' and he says 'if she did, I wouldn't have to be spending so much time down here with the madmen and the monsters.'</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh rubs his head with his hand and chews on his beard a moment before drinking from his mug. He continues quietly talking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I don't know about the 'madmen' part, mostly it's just me and the miners down here…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: anyway, so she says, uh, she says 'I'll take care of it, don't worry,' um, yeah.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: That's where he said something about his name, he did.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh nods for a while, looking as though his drinking is beginning to affect him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Quit nattering and tell me his real name!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Ohh.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh gently shakes his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: No, no, that's secret information, soldier.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I mean, I didn't hear it anyway.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I didn't want to: I left, you know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Safer that way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh takes a sizable sip from the mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Maybe you should call it a day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I'm sure that I can handle it a bit longer here, now that I've had this bit of fortifying.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh burps again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Yeah, that's it: Soldier, you are relieved.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh sketches a salute with his mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Careful on the stairs now, and keep an sharp eye out for the enemy.</td>
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
						<td>Rewards: Nothing.</td>
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
