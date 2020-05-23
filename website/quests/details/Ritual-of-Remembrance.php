<!doctype html>
<html>
<head>
	<title>Ritual of Remembrance</title>

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
						<td>Ritual of Remembrance</td>
					</tr>
					<tr class="quest_emptyRow_afterTitle">
						<td></td>
					</tr>
					<tr class="quest_requirement">
						<td>Required: <a href="/quests/details/Ring-of-Radiance.php">Ring of Radiance</a> quest, 10 Emerald Crystal.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: You look a little unhappy. Is there something you need?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Ah my friend, it's good to see you again.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: You shouldn't worry about me; it's nothing serious.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hesitates slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: But I can tell you more if you have the time.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I might need some help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I can try to help.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It's just that the time for me to perform the Ritual of Remembrance is almost here and I am still unable to focus.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Ritual of Remembrance? What is this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Forgive me.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I should explain myself better.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She steps back a little and studies you carefully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Perhaps, due to living up here, it's something you wouldn't know?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It's an old nolthrir custom.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: You see, even generations ago when we still walked and swam on Dermoria, it was normal for the tides to draw families apart and we were just like those tides, ever changing.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It's one of the few things from the old life that has stayed with us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: It's not in our nature to make many permanent connections, so families split; couples part and our children are young when they make their own way in the world.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles slightly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: We are always keen to meet others, you see, and to move on, but this doesn't mean we are willing to forget those who have been dear to us.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: This is what the ritual is for; on the anniversary of the day each of us left our families we set aside time to remember.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: So you wish to perform the ritual in memory of your family?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I was still young when I left my mother on the Lower Field.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I was younger still when my father left us, so in memory of them and old friends, yes.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She sighs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I do miss all those old faces.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I wish to use the ritual to look back and reflect on those I've been parted from.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I don't need to see them again, but I do need to remember them, so it feels it would be good to take part.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: But you said you can't focus on the ritual?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I came to Gugrontid for the kran's expertise working with precious stones, but there is nothing of the nolthrir here other than myself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Perhaps if I had some memento of my home I could take part.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Do you know where we could find a memento for you?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: There is one thing I can think of.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles at you much more naturally now and with real warmth.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: We have adapted so many of our old rituals since turning to Xiosia.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: You could perhaps seek out the Seeds of Wildwood, perhaps Jardet, in the garden in Hydlaa?</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I'm sure he'd be able to suggest something that will help me.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Hello Jardet. Lyrus needs a memento for the Ritual of Remembrance.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: The Ritual of Remembrance?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Yes, I'd forgotten that Lyrus would be performing the ritual soon.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It's quite common for nolthrir to turn to us for help with this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks around the garden slowly as though thinking.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: I do not have anything prepared.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It's hard to keep track of when each nolthrir will perform the ritual, but Levrus told me that Niala recently ordered a shipment of deep emeralds.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: These can only be found close to Mielthis, the nolthrir's home city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: They form in the waters there; no one really understands why.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: It's said they have the exact same colour as crystals found on Dermoria, so perhaps they are a blessing from Xiosia herself?</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: If Niala would part with one and enchant it with the blue way magic most nolthrir favour, I could then prepare it in a suitable way.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Please go and speak to Levrus.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: He could arrange a meeting.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Just don't be surprised if he wants something first.</td>
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
							$npcName = 'Levrus Dahrenn';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Levrus Dahrenn</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I'm looking for a deep emerald. Jardet told me you could arrange a meeting with Niala.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: He did, did he?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He lifts his fist without looking up from his book and shakes it toward the stairs.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That nolthrir mentioned that others might want those, but she'd have us believe she's very busy.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He raises his eyes and stares at you meaningfully.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And she is not the only one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: A deep emerald is worth at least three of the ones that can be mined here in the Dome.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: My time is worth at least the same.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Will you be expecting that witch to enchant the emerald for you as well?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: With blue way magic.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Then I suggest you bring me at least ten emeralds in total.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'll pass some of those up to the monster and set up a meeting for you.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: If you are serious, then this shouldn't be too much to ask.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He turns back to his book and mutters quietly.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Why anyone would want to see 'her' for anything I don't understand…</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the emeralds you asked for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I suppose they look adequate.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He accepts them, looks at them blankly as though uncertain what he really thinks, then counts them into a box next to his desk.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Well then, I suppose you had best go and speak to her.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He rummages deeper in the box and pulls out a simple looking wand. He stares at it for a moment, seeming distracted.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I keep finding these things.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: Oh, what are you waiting for?</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: I'll make sure the monster possessed water-breathing witch knows you are on your way up.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He points to the stairs at the back of the shop and then clambers up onto his counter, wand still in hand.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: That way.</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: And please, if you have never been up there before, don't disturb anything!</td>
					</tr>
					<tr class="quest_npc">
						<td>Levrus: She's bad enough without that provocation!</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He raises the wand and thuds it into the ceiling. You hear him calling something indecipherable at the top of his voice between the bangs as you head for the stairs.-</td>
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
							$npcName = 'Niala Xanao';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Niala Xanao</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Levrus told me you could enchant a deep emerald for Lyrus.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: He said you left some emeralds with him for me, so I could yes, but you must promise not to disturb the workers here.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She looks at you critically.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: And unless you know what you are doing, please don't touch anything.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Do you understand?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I won't cause any trouble.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Good.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: In that case you may watch.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She walks to a small crate near the wall and opens it carefully. She lifts out a beautiful, dark green stone that seems to catch the light slightly differently from how a normal emerald would.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Beautiful, yes?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She walks to the enchanter. Her lips move slightly and blue way magic begins to crawl from her fingers across the surface of the stone. After some minutes she moves back to you and holds it out for you to take.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: It's done.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her smile is faint, but filled with satisfaction.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Of all the ways, this is the easiest for my kind to use, and is most fitting for a stone found so close to our home city.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: Please see that it reaches Lyrus safely, though it will need something more first.</td>
					</tr>
					<tr class="quest_npc">
						<td>Niala: You should go to Jardet.</td>
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
							$npcName = 'Jardet Forsill';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Jardet Forsill</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: I have the emerald you asked for.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Let me see.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He takes it and holds it up to the light, then smiles.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Niala's work is always impressive, but blue way magic in a stone from the nolthrir's city is not quite enough for the ritual by itself.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Most nolthrir revere Xiosia and Lyrus will need a way to wear this as well.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This is something I can provide.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: What will you need to complete this?</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This is the question, indeed.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He looks up from the stone and after a moment nods his head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Lyrus has never faltered in her relation with the Seeds of Wildwood.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: If you promise to take this to her safely, then there is no charge for my work.</td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Do you agree?</td>
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
						<td>Jardet: Then very well.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He moves to the water and kneels before it.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Like the nolthrir, we hold the water sacred, but my magic comes from the earth.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-As he speaks, the stems of the plants in front of him begin to weave together into a circle.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: This emerald will serve as a connection to both Lyrus's home and to Xiosia, to help her focus on the memories of those she was once close to.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-He positions the emerald at the edge of the circle and the stems wrap around it, securing it in place. He lifts the finished piece, a tiara woven from stems and fine branches, and hands it to you.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Jardet: Give her this with Xiosia's blessing.</td>
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
							$npcName = 'Lyrus Lospur';
							$path = $_SERVER['DOCUMENT_ROOT'];
							$path .= "/includes/npc_link_to_map.inc.php";
							include($path);
							echo "' target='_blank'>Lyrus Lospur</a>";
						?>
						</td>
					</tr>
					<tr class="quest_emptyRow_afterAction">
						<td></td>
					</tr>
					<tr class="quest_you">
						<td>YOU: Lyrus, I think I have found a good memento.</td>
					</tr>
					<tr class="quest_emptyRow_btwNpcYou">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: What is this?</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She frowns slightly, but reaches out to take the tiara from you. She gazes into the stone and the frown quickly melts away.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: But this is beautiful.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I didn't think that…</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-Her smile widens as she trails off, her words silenced by sudden, relieved laughter.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: This will be perfect.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: We have so many old rituals that let us explore what we feel and it has been so long since I was able to participate in one.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: This isn't much, but here, please take this.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She hands you a small bag then lifts the tiara, positioning it on her head.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: Using this, I should be able to reach the right state of mind.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: If you are as knowledgeable about the nolthrir as it seems, perhaps you should go and speak to one the guards in the dungeon in Hydlaa.</td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: I heard there was something he wished to learn.</td>
					</tr>
					<tr class="quest_emptyRow_afterNpcYou">
						<td></td>
					</tr>
					<tr class="quest_storyline">
						<td>-She smiles again.-</td>
					</tr>
					<tr class="quest_emptyRow_afterStoryline">
						<td></td>
					</tr>
					<tr class="quest_npc">
						<td>Lyrus: If you'll forgive me now, I need to prepare for the ritual.</td>
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
						<td>Rewards: 20 Faction with Nolthrir, 3391 Tria, 12200 XP.</td>
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
