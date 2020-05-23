<!doctype html>
<html>
<head>
	<title>Botany of the Deeps</title>

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
						<td>Botany of the Deeps</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Ritual-of-Remembrance.php">Ritual of Remembrance</a> quest.</td>
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
						<td>YOU: Do you need any help down here?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: You again?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Look at this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh studies you carefully then upends his mug. His face falls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Empty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Why are the mugs so small?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I've been here under Hydlaa now for…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: for…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Crosh scratches his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I don't really know anymore.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: But I still can't leave here.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: On duty.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: No sign of any relief for me, oh no.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He starts banging his free hand against the bottom of the mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Maybe you can help a hard pressed guard?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: For the good of the city, y'know.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: What do you say?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Sure, I can help you out.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Well then, I was told something 'bout deep places.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Was told them nolthrir farm these weird submerged trees down in the lower levels or something, y'see?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Maybe I should get me some fruit from those to brew somethin' good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Great taste, so I was told.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I think you should get it for me.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You'll have to tell me more about this fruit.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: More?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: What do you need me to tell you more for?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He stares at you for a few seconds, but then his eyes dart back to the mug once again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Herbalists use it I think.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: No idea why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Not even sure o' the name.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Some cure or something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Seems they're the only ones who can import it from the lower levels.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Limited availability!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lets out a really loud sigh.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: You'd best be finding one of them to speak to.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Now off with you!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: And remember, you better be careful and not say why you want it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: They can get awfully sensitive about their ingredients those fussy plant people can.</td>
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
						<td>YOU: Hello, I'm trying to find out about a fruit herbalists use. I was told the nolthrir grow it on the lower levels.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: A fruit grown by the nolthrir?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up from chopping some leaves.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: What an odd request.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Most outside of our trade wouldn't have any idea that we import ingredients from the nolthrir.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: But with that said, they are experts at cultivating some quite unusual plants under the water there.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It's nice to meet someone who is aware of this, but I must ask, why do you need such a thing?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Uhm, a friend of mine is ill. An apprentice herbalist in Ojaveda said the fruit could help, but he didn't know the name.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: An apprentice?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up at you sharply, as though studying your face to spot if you are lying.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: I suppose he has not kept up to date with his lessons then, but the enkidukai do seem to have a certain resilience to the maladies the fruit can cure.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: It's a quite rare thing and hard to get hold of as well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She puts down her knife and counts with her fingers as she speaks.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Delicate.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Spoils easily.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Tough growing conditions.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Expensive to import.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Only a small crop each year.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: The plant is called the deep tree and I hear it's quite beautiful, not that a dermorian could ever dive down to see them in their splendour.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know how I could get hold of it?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Not easily.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks out over the rooftops in thought.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: But a group of nolthrir traders did come up through the Winch a short while ago.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Jashoky mentioned to me that she hoped to buy some supplies from them, so you might be in luck if you can find her.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: She won't be in Hydlaa though.</td>
					</tr>
					<tr class="quest_npc">
						<td>Aleena: Check out along the road to Ojaveda.</td>
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
							$npcName = 'Jashoky Dakarn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jashoky Dakarn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello. I'm trying to get hold of a deep tree fruit to help treat a friend's illness.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Well there's an odd thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: I just got a few in from some traders yesterday.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Somethin' special about these fruits there is.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She grins broadly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: I was just about to start preparin' some for use, but trade with nolthrirs made me think about a few things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: There's a lot we have in common, dermorians and nolthrir that is.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: We came from the same world, the same home.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks a little lost in her thoughts as she continues.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: We dermorians didn't have a chance to bring anything with us, but the nolthrir did.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: They brought the plants they wanted and carried them through the portal.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Things like the deep tree fruit are little pieces of Dermoria now, but you'll get your hands on it soon enough if you will help me with something.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Just tell me what you need.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Well, all these connections between dermorians and nolthrir and their plants got me wonderin' about the plants they have which we don't ever really see up here in the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: I been told the nolthrir are such good swimmers, not just because they got webbed toes and gills, but 'cause they practice so much as children.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She laughs and starts taking a few things out from her pack.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: There's this game they play, weavin' in and out of some plant, swimming through tunnels made out of its branches, but I just can't remember the name of the thing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: So you can go back into Hydlaa and check for the name at the library.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks up toward the crystal to judge the time.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: If you don't wander off doing other things, you should be gettin' back just as I have this ready for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: twisty</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Twisty?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Well, that does sound about right.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She treats you to a huge smile.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: I just finished up with the juice as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: Look at the colour of this!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She holds up a jar for you to see.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: It brewed perfectly.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jashoky: A few doses of this should help your friend.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you the juice.-</td>
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
						<td>YOU: I managed to find some deep tree juice for you.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Some…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: What's that y'say?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He leans forward to stare at the jar.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Juice?!</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: No no no no.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I’m not going to drink that.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: What use is 'juice' to me?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Go and find something to mix it with.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Cider would be about right I think.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He waves his empty mug at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Go on, back to the place that sells the drinks again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Speak to Alell-something.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Or whatever her name was.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Unless you know somewhere else to find me some!</td>
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
						<td>YOU: Hello. I'm looking to purchase some cider.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Cider?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: It's not something I often stock.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: I hear Brado usually stores some though, so I suggest you check in Ojaveda.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She stops wiping a glass and smiles at you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Unless you have some special reason for coming to me anyway.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I was looking for a cider I can flavour with nolthrir grown ingredients.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: So you have something special in mind then?</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Well I suppose Brado's stock would serve, but I have something here that might as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: It will cost you fifty tria though.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Here's your tria.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Thank you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Allelia: Now be careful not to spill this.</td>
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
						<td>YOU: I have both the juice and some cider now.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Took you long enough.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Let me see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He sniffs at the juice.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Not much of it is there?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He shrugs and empties it into the cider mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Well, let's find out if it's any good then.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tips back the mug and gulps down several mouthfuls.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Hmm.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I guess you might call it…</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Interesting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: It's not bad, but I expected more of a kick.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He finishes the rest of the mug then scratches at his chin.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I wonder…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You wonder..?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: How was I to know how a drink made from things those nolthrir farm would taste?</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I'm going to have to think about it for a while.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He stares down into the now empty mug.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: A really long while.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I've heard they're good with watery magic too you see, as well as farming these things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Heard they can use it to divine the nature of things.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He runs a finger round inside the mug, hunting for a few last drips of cider, then licks them from his fingertip.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Think that maybe that magic could have let someone know what this would taste like before it was drunk.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Hard to tell for me since all I do is guard down here, but maybe you should find out about it.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: I'm sure there'd be someone at that magic shop just outside town who would know a thing or two.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He uses his free hand to wave you away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: But I'm just going to have to think lots.</td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: Best you leave me to me thinking.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He tosses you a few coins.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Crosh: And to me guarding of course!</td>
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
