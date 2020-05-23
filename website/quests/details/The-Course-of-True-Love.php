<!doctype html>
<html>
<head>
	<title>The Course of True Love</title>

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
						<td>The Course of True Love</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: 4 blue shan flowers, 4 nightlanterns, 2 eyebright, 12 charmflowers, 4 snowbuds, 1 scoop of flour, 2 scoop of strimptor, 10 apples.</td>
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
							$npcName = 'Henas Kenar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Henas Kenar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look like you're not having any fun. What's wrong, soldier?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar is startled out of his reverie.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Oh, sorry.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Excuse me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Henas Kenar, Private, at your service.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: On duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Alert.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I am fine!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I am a trained Guard of the Dsar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Nothing bothers me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I am professional and...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Unemotional.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The guard looks off in the distance and sighs wistfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You're about as unemotional as Levrus when he sees purple. What's wrong? Can I help you with something?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Since it has nothing to do with my official duties as a guard.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Perhaps you can.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Are you willing to help me get a message to someone?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Brado is out of beer mugs, so I can't get a drink. All right, I will help you. What do you need?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The young guard lowers his voice and turns slightly away from the Guard across from him.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I want to send a message, the right kind of message!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: To a local merchant.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Someone special.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Someone elegant, discerning...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar sighs again and his whiskers droop.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Someone who doesn't even know I exist...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar sighs again and looks at you for help.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I knew it! It's an Enkidukai, isn't it? I can always tell. Yes, I will help you. I know what love is like... Who's the lucky lady?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar sighs as if his heart would break.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She is as beautiful as her wares- she's a simple merchant but she's so, unique, so fresh, so delicate, with such a beautiful smile!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Find out what she likes, will you, and help me pick out the perfect gift to, well..</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: To introduce myself.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What's her name, Henas?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Guard starts to look excited.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-His eyes widen and a smile washes over his mouth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: It is amazing!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I don't even know her name!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I see her everyday as I patrol, but, of course, I am on duty then.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She does smile at me, though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Every day.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Such a smile!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar glances at the guard next to him.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I have to stop talking now.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Good luck and thank you!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But how? Oh, never mind. I can find her I'm sure. I will ask around.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar nods at you surreptitiously and stands at attention.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Enkidukai glances at his superior who happens to turn away just then.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Henas Kenar whispers to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Try asking Chired Idelall, the alchemist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She knows everyone in Ojaveda.</td>
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
						<td>YOU: Henas told me to find you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The ancient woman looks up from her work and appraises you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Slowly a smile spreads across her face, an exquisite, knowing smile for one so old.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She tilts her head and speaks in a dulcet tone.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Well, well, well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Has our handsome young Guard finally decided to stop smiling and actually start talking to her?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: How did you know that Henas was looking for a special lady? Do you know her name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall looks at you long enough to make you fidget. She smiles again</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Alchemists are trained to sense the energy of living things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: When the blood is hot in the veins, then emotions run high.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Every day I see Henas marching to his post, looking over his shoulder and sighing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: It is not hard to tell he is smitten, poor man.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Henas wants to give her a present, something special and unique. Do you know her name?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I know many names.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: But be discerning and discreet, Klyros, the Enkidukai in question is known to be hard to please.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Look down toward the Gate to the Dsar area...</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: But my advice to you is to try not to barge into your question.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: If you wish to succeed on the Guard's behalf, you may wish to say something less...blunt than, "Henas wants to give you a present, pretty lady."</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall winks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Did that sound too blunt? I'm not very good at small talk. Where can I learn to be less blunt so I can succeed and help that young Guard Henas?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I think you might start with Madame Toda.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She is very charming herself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Perhaps a bit of her great charisma might rub off on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: And...</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall's eyes twinkle in her wrinkled face.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: If you want to succeed in persuading people, then her lessons might be useful to you in other ways.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Good luck helping our young Guard meet the woman of his dreams!</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Madame Toda, can I ask for your advice? I am trying to help a friend who wishes to meet a certain young lady in a polite manner. I don't know her name, but she's a merchant in the Dsar. Would you please be willing to help me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis looks at you with a growing grin.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Tsk, tsk, tsk!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Why aren't people taught the gentle arts of manners and charm, I wonder?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Yes, Klyros I will try to help you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: First you must find out two things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: This person's name, of course.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: It would not do to profess the attraction of a person to another and get it wrong, now would it?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: So, first the name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Tell me what you know.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The young man in question passes the young Enkidukai everyday on his way to his post..um, his job. She smiles back but they never speak. He says she has a beautiful smile. He wants to find out what she likes and get her a present that will impress her and be a way to introduce himself.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis listens carefully.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She nods occasionally at your story.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: You are kind to try to help your friend.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Well, I see Henas is finally going to make his move!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: It has taken him cycles and cycles, the sweet young Enkidukai, like another I know...</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis smiles again and blushes a bit.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: This silent romance is the talk of the Dsar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: The only question is does the young lady actually like Henas?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now, how shall we discover that, Klyros?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was hoping you would know how to discover that, Madame Toda. Would you please help me?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Of course, I will help you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Young love!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: First, I know a sure way to charm the lady in question, that she might feel comfortable talking with you on behalf of Henas.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Flowers!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Go and gather some lovely flowers for the lady, let me see, a nice bouquet, not too pretentious, but rare enough to imply that you think she herself is a fair and rare flower.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: It's subtle and charming!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Get four blue shan flowers, four nightlanterns, my they are pretty, two eyebright, and oh, perhaps a dozen charmflowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Come back when you have them all.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Come back quickly!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: No one is impressed by wilted flowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: While you are gone I will ask around, and see if we can discover the Enkidukai's impression of your silent young suitor.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Blue Shan Flowers? Eyebright plants? I've never heard of these. Where are they?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis laughs a sparkling trill.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: All over!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: I tell you what, go ask Selisar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: He's a miner and knows these hills.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: He can perhaps tell you where to pluck your pretty persuaders!</td>
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
							$npcName = 'Selisar Zeinifa';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Selisar Zeinifa</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Are you Selisar, the miner? Madame Toda said you might tell me where to find some flowers. I am looking for blue shan flowers, nightlanterns, eyebright, and charmflowers. Would you please help me?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The Enkidukai looks at you with amusement, then nods and reels off the information.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Blue Shan, go to Shandrock's Crater and watch out for the beasts.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Take a sword or a strong mage with you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: No good ores there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Look near the cave, but watch your back.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Nightlanterns grow wild on the road between here and Hydlaa, near the Dermorian farmer who has kormi.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Eyebrights are rare, but you can often find them near the gold mine, well, over the hills from the gold.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Charmflowers are in the Ruins, near Gugrontid.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Might as well get a good handful of snowbuds while you're there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Look around the corner from the tin mine.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: If you get to the copper mines, you've gone too far.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: That's it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Selisar Zeinifa: Good hunting, Klyros.</td>
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
							$npcName = 'Toda Ombretis';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Toda Ombretis</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I ran as fast as I could, so they wouldn't wilt. Here are your flowers!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis holds up her hands</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: One at a time!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Don't be in such a hurry!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now, first hand me the blue shan flowers.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here they are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: These are brilliantly blue!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis begins to bundle the flowers into two bouquets.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: I'll make two bouquets so your suitor might give one to his darling after you give her one to prepare the way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now the nightlanterns.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the nightlanterns.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Yes, yes, see how their deep red compliments the blue shans?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Next the charmflowers, they are so lovely, loaded with charisma!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: The twelve charmflowers, here you are.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: And now eyebrights.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Just one in each bunch.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here are the two eyebrights.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis admires her work, then frowns.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: This doesn't look quite right.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: It needs, something, to tie it together...</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: I know, snowbuds!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Yes, Yes!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Did you happen to gather snowbuds?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Snowbuds? No! You didn't mention snowbuds!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Toda Ombretis pouts a little.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: If you or your suitor friend wants to impress someone, you must think ahead, listen carefully, and use your own judgment.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Be prepared for love's little surprises and love may find you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now, get a few snowbuds, four should be plenty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Scoot!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the Snowbuds, finally.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Excellent!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Yes, picking up on subtle clues is importance in any romance.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She adds the Snowbuds carefully and holds up both bouquets, sniffing them and turning them all around.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Yes, large enough to impress, tasteful enough to be respectful, intimate enough to be modestly suggestive.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: And alive with charm!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Just the right thing to persuade the heart!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now, off you go to the lady love!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Oh, and here is a note of introduction from me, so the lady will know you are not a cad from Hydlaa trying to prey on the affections of young Enkidukai.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Tata and good luck to you both in your quest for true love!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: True love...Madame Toda, just exactly who is Henas' true love?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Again Toda laughs her sparkling laugh-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: That, I did not discover.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: But I -did- discover who knows who Henas heart's desire is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Do you know the alchemist, Chired?</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: I am sure she knows the identity of this seductive creature!</td>
					</tr>
					<tr class="quest_npc">
						<td>Toda Ombretis: Now scoot, and good fortune to you!</td>
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
						<td>YOU: I'm back.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles her wrinkled, glowing smile-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: For me, young Klyros?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: How wonderful!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall reaches for the bouquets, then stops, laughing at your surprise.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Worry not, worry not.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I am old enough to leave the guesswork of courting to those who know less about the ways of love than do I.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Now, flowers, Toda's suggestion?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She is wise in the ways of persuasion, indeed she is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall sniffs the bouquets and nods her head approvingly.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: How might I help you now?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Who do I take this bouquet to? Do you know?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Who indeed!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The alchemist pours some liquids back and forth between two vials and watches the resulting mixture sparkle in her hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Let's see if Madame Toda's charm rubbed off on you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: There are three Enkidukais here in the Dsar, one Gilata Meselir, the potter, she is very talented and extremely careful in her work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Somewhat shy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Quite a professional artist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: A perfectionist.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: The second is Celila Yasoj, the flower seller.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She comes from a wealthy, sophisticated family, related to the Octarch I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She hardly speaks with her brother though, some kind of family rift.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She often goes to the Octarch's balls, I see her in new gowns each time one ball draws nigh.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I think she sells flowers for something to do with her time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She seems a bit bored.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: The third is Chilye Esimar.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: She has a strong and passionate character.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: I am not quite sure what her job is, but she is prominent.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Pick the one you sense is the right one for Henas and give her the bouquet.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: You will soon find out if you chose correctly.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: So you have the choice of Gilata Meselir, Celila Yasoj and Chilye Esimar.  Of course, I did'nt find the correct lady and had some additional tasks to do.  I don't know what happens if you give the letter and the bouquet to the correct lady (Gilata Meselir). However, here is the long run...</td>
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
							$npcName = 'Chilye Esimar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Chilye Esimar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me Madame Chilye? [You hold out your Letter of Introduction.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chilye Esimar reads it and hands it back to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks at you waiting for you to tell her what you want.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I know a friend, who would like very much to meet you. He sends you these to show his respect for you. Guard Henas wonders if you would do him the honour of meeting him for perhaps a meal or.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: That young Guard?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Meet me for a meal?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chilye Esimar laughs heartily.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Meet me for a meal!!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: That's rare, that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Does he want me to hunt it, skin it, and dress it too, afore we eat?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She shakes her head, wiping tears from her eyes.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: No, no, no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Please, please tell him that I do appreciate his...interest, but no, me date a Guard?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: When I dine with Officers every night?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Oh, that's rare!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She bursts out laughing again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Did Vorigna Tassen put you up to this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chilye Esimar continues laughing.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: Tell him I appreciate his interest, and the flowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: But I fear I have to decline...for...</td>
					</tr>
					<tr class="quest_npc">
						<td>Chilye Esimar: For conflict of interest!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chilye Esimar laughs again, wiping her eyes.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She takes the bouquet and goes inside the mess hall, still laughing.-</td>
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
							$npcName = 'Celila Yasoj';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Celila Yasoj</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me Madame Celila. [You hold out your Letter of Introduction.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Celila Yasoj reads the letter before handing it back to you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: Nice to meet you, how can I help you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I know a friend who would like very much to meet you. He sends you these to show his respect for you. Guard Henas wonders if you would do him the honour of meeting him for perhaps a meal or.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: So your Guard.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She says the lowly title with some contempt.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: Thinks the way to impress a flower seller is by giving her flowers?</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: And not fresh ones at that?</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: Tell your little friend that I am not inclined to eat Rats Stew at Brado's with a Junior Guard, not even an Officer I take it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: And not even proud enough to ask me himself!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Celila Yasoj stamps on the bouquet.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: I am sorry, but I am not in the habit of accompanying vagabond labourers to dine amongst riffraff.</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: Toda should know better than that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: You may leave now and please come back only when your manners improve or when you wish to purchase my fresh flowers.</td>
					</tr>
					<tr class="quest_npc">
						<td>Celila Yasoj: Good day, Klyros.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Celila Yasoj turns her back on you and goes into her store tent.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: So no letters and bouquets left...</td>
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
						<td>YOU: Oh no, Chired! I picked the wrong Enkidukai! Twice! Now I am out of bouquets to give with no date for Henas to show for it. What should I do?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: No wonder there are so few children under the feet of our citizens.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Well, what else beside flowers might woo a female into a date?</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Think, young Klyros think!!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What else? I don't know! Maybe a yulbar? Or an enchanted sword? Oh! I know!! How about something sweet??</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Chired Idelall gives you a gentle swat up the side of your head.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: That's using your brains, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Good for you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Chired Idelall: Go see if Reffitia Thamal might make something sweet for your Henas' sweetheart!</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Can you make a something sweet? A present for an Enkidukai so she will know the someone likes her and will go with them on a date, to dinner maybe?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: My, my, my!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia Thamal looks at you with great amusement.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: It sounds serious!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Almost an emergency.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: All right, I will make you a Cinnamon and Sugar Sweet Apple Brandy Pie.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Go get me one scoop of flour, two scoops of strimptor, and 10 fresh apples.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: I will get the Brandy from Brado, and I have Cinnamon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Oh and get some ribbons from Jirosh, so I can tie the pie up real fancy for when you deliver the delight!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Off with you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Don't let this blooming love grow cold, Klyros!</td>
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
							$npcName = 'Jirosh Mikana';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jirosh Mikana</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Jirosh, do you have ribbons? I need some. Quick!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Jirosh Mikana winks at you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Ah!</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: To impress your newest love?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Here, here are two very fine arangma silk silk yellow ribbons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: They aren't cheap, I warn you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: One hundred fifty tria each, that is three hundred tria for both ribbons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: If you want them, hand the three hundred tria over.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Three hundred tria! It's a deal to be done with this errand.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jirosh Mikana: May your love become as beautiful as these ribbons, tabei.</td>
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
							$npcName = 'Reffitia Thamal';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Reffitia Thamal</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: All the sweet stuff is here Reffitia.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia Thamal has a spoon in one hand, and is tending a small simmering pot of brandy and cinnamon, while keeping an eye on a pot about to boil.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Three measures of sweet butter sit on the table by her large mixing bowl-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Good!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: One by one, tabei!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: First, hand me the apples.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here you are, Reffitia, ten apples.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Good, I have some lying about.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal smiles.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: But always nice to get others.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Now, I will peel the skins as soon as they are blanched.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Now the strimptor...</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here are the two scoops of strimptor.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia Thamal measures by eye and carefully pours the sweetener into the mixture.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Smell that!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: So sweet!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Now, finally, the flour!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: And here is the flour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Alright!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: You have the ribbons, I see.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Thank you.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Reffitia Thamal waits for you to hand them over.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I got this ribbon.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Alright, tabei!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Come back in an hour and your sweet pie will be ready to work its magic on your sweetie pie!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_action">
						<td>[INFO]: You have to wait for 15 minutes.</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Is it time for pie, Reffitia?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Anxious aren't you, Klyros?</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Yes your prize pie's ready, still a bit warm, but so fragrant!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Smell!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Don't worry about paying for it, since pie is such a thoughtful gift for your true love's tummy.</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: I hope your sweetheart enjoys a stomach full of sweetness!</td>
					</tr>
					<tr class="quest_npc">
						<td>Reffitia Thamal: Take care while you carry it, tabei!</td>
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
							$npcName = 'Gilata Meselir';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Gilata Meselir</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Excuse me Madame Gilata. [You hold out your Letter of Introduction.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gilata Meselir reads it.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: Toda's wonderful isn't she, what can I do for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I know a friend who would like very much to meet you. He sends you this gift to show his respect for you. [You hand her the Pie.]</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gilata Meselir smiles a lovely warm smile that lights up the sky around you.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: You must be a dear friend to go to such trouble.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir sticks her pinky into a dripping hunk of pie and licks it, beaming with delight.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: This pie is wonderful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: Is it from that handsome Guard, I think Chired told me his name is Henas?</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: I see him every day, and every day as he walks by, he gives me such a warm smile.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: But he never speaks.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: Perhaps he is as shy as I am.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: I am usually so intent on my work at the wheel, each vase and bowl needs to be perfect you know!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: And before I can even rinse my hands of the clay to say hello, he is gone.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: I was hoping some day he would speak to me!</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: Please tell him I would enjoy very much a shared meal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: Well, please tell him Yes!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gilata Meselir's fur fairly glows with electric energy.</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: And perhaps, tabei, you and I might also share a slice of pie.</td>
					</tr>
					<tr class="quest_npc">
						<td>Gilata Meselir: For now, tell the Guard Henas I look forward to our date!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>Gilata Meselir winks at you and giggles again.</td>
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
							$npcName = 'Henas Kenar';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Henas Kenar</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Henas, she said yes! Her name is Gilata! and I asked if she would have dinner with you, and she said yes! She said she's looking forward to your date! But here, [you hand Henas the two ribbons] Just clean this up a little and tie them around something, and there's your present to her!</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She, she said yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She is so talented and her artistry with the pottery is, well, breathtaking.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: She said yes?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Really!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Praise the Gods!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: As soon as I get off my post I will go right down and give her these ...</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: ribbons.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Oh I can't thank you enough, Klyros.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Here, here, take this as a reward!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Oh and this was turned in to our post many months ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: No one has claimed it so you can have it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Thank you again and again!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: I can't wait to get off work and go see her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Gilata you said?</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Gilata!</td>
					</tr>
					<tr class="quest_npc">
						<td>Henas Kenar: Gilata!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-The other Guard looks sternly toward Henas who immediately stands at attention, hiding the bouquet behind his back. Henas winks at you and silently mouths the words "thank you!"-</td>
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
						<td>Rewards: 1 Purify Glyph, 10 Faction with Guard, 3391 Tria, 12200 XP.</td>
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
