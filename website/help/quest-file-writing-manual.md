# Quest File Writing Manual

PSQ is the quest format, which the website 'planeshift.org' uses to store
it's quests. PSQ is short for 'PlaneShift Quest'. In the following I will give
an introduction on how to write such a file. If the format is not correct, the
program that I use to convert it into a webpage does not function anymore.
Please read this file carefully and send me an e-mail if you have questions
or something does not work (<a href="mailto:planeshift@online.de">
planeshift@online.de</a>). *It is always helpful, if
someone sends me the file for a new quests!*

Get an idea by start looking at a couple of existing
<a href="example-psq-files.zip" download>psq-files</a>. Please
<a href="quest-file-writing-manual.md" download>download</a> this page as
markdown file for better readability

---

# Introduction

### Filename

- The filename has to be exactly the name of the quest!
	- Capital letter at the beginning.
	- Most words are capitalized (only few words, such as 'for', start with a
		small letter).
	- Do not substitute whitespaces or apostrophes (my program takes care of that).
- The suffix of the filename has to be '.psq'.

### Syntax introduction

Our program reads the psq-file line by line. Each line has to start with an
identifier (except when it is empty). If a line does not start with an
identifier or the line is not empty, the program won't work. An identifier
consists of one or two words, which are enclosed by brackets.

### Possible identifier:
	[Comments], [Questname], [NPC Name], [Checkup], [Authors], [Need], [Reward],
	[Repeatable], [Info], [To], [Give], [Time], [NPC], [NPC ME], [NPC MY],
	[NPC Internal], [NPC Narrate], [Possible Ways], [Way].

### Frequency:
- [Questname], [NPC Name], [Checkup] & [Authors] are just allowed one time in the
	whole document.
- [Need] & [Reward] are just allowed one time in (several) consecutive lines.
- All others are allowed as often as needed.

---

# Identifiers at the Beginning

### [Comments]
- Will not be displayed on the website
- Use to write notes for yourself or other people
- E.g. note what still has to be done

### [Questname]

- Only allowed 1 time in a '.psq'-file.
- Needs to be exactly written as the quest name in game.
- This will be the same as the filename of the '.psq'-file.
- Whitespaces and apostrophes are allowed.

### [NPC Name]
- The name of the NPC that gives the quest.
- It should be the first name followed by the family name and separated by a
	whitespace.
- Please start both names with a capital letter

### [Checkup]
- Leave empty, when date is unknown
- Otherwise you must write date in the form 2018-12-31

### [Authors]
- Separate authors by a comma
- If you edit an existing file, add your name
- Also add the person who gave you the information for followup
- You can add describing details in brackats "()" behind the person's name

### [Repeatable]
- Write "Yes" or "yes" or "YES", if the quest is repeatable

### [Need]
- Can be written in multiple lines. Start everything with [Need]
- We use identifier to specify things you need
- Always only put one item/skill/quest behind an identifier.
- Separate all things-identifier with a semicolon!
- Write "Nothing" if there the quest has no preconditions. (so we know it's checked)

Need-Identifiers:

- "[Winch]": Write "Yes" or "yes" or "YES", if needed
- "[Quest]": Write the questname as displayed in game, which is a precondition
- "[Money]": Add the number in Tria (transform circles, hexas, octas)
- "[Item]": Add a number, a comma and the exact item Name (e.g "10, Rat Eye").
- "[Skill]": Add a number (the skill level), a comma and the exact skill name
(e.g. "80, Melee").
- "[Special]": Add anything in the way you deem appropriate.
- OR:
	- Sometimes an NPC accepts different items.
	- The three identifiers can be written instead of a semicolon, a semicolon
	on one side or semicolons on both sides.
	- "[OR Begin]": Put this at the begging.
	- "[OR]": Put this before every new variant of item(s) that you can give the NPC.
	- "[OR End]": Put this at the end of the OR-section.


Example 1 (one item):

	[Need] [Item] 10, Rat Eye <-- only 10 rat eyes are needed

Example 2 (several items):

	[Need] [Item] 10, Rat Eye; [Money] 100 <-- 10 rat eyes and 100 tria are needed

Example 3 (multi line):

	[Need] [Item] 10, Rat Eye		<-- other notation
	[Need] [Money] 100 			  <-- we still need 10 rat eyes and 100 tria

Example 4 (need options):

	# A player needs to be level 10 in melee for a quest.
	# Additionally the player EITHER needs 200 tria OR 50 tria plus 6 rat hides.

	[Need] [Skill] 10, Melee [OR Begin] [Money] 200 [OR] [Item] 6, Rat Hides; [Money] 50 [OR End]

---

# Core identifiers

### [Info]
- You can use this field to display a special information-field on the website.
- This can be used to describe specific tasks that have to be fulfilled.
- Use it for everything that you cannot specify otherwise

### [To]
- Write the exact name of the NPC (capital letters, whitespaces, apostrophes)
- Add a [To] line every time you have to switch NPC's
- For a better view, add an empty line before and after

### [Give]
- Format: [Give] NPC-Name; amount, item-name; amount, item-name ...
- NPC-name and item-names have to be exact

### [Time]
- Sometimes you have to wait for a specific duration until you can continue
	with the quest.
- I usually put something like "Wait 5 minutes". I does not have to be exact

### [NPC]
- This is used to 95% when the NPC is speaking.
- Use this for every line that starts with the NPC-Name (e.g. "Allelia: ..")
- Always add the NPC name in front (e.g. "[NPC] Allelia: ..")

### [NPC Internal]
- Use this, when you say something to the NPC
- Do not add your name in front of it, only put the content.

### [NPC Narrate]
- Use this, when the storyline adds something
- This is usually indicated by a dash in front and one at the End
- E.g.: [NPC Narrate] -Moren smiles and checks to see Nevis isn't looking.-

### [NPC ME] and [NPC MY]
- These two identifiers are also storyline.
- At the moment they have the same markup on the website than [NPC Narrate].
- Sometimes you need this, for example, if you use the log files of the
	PS Client that get saved onto your computer.
- When you need it, you will know that it is here.

---

# Identifiers at the End

### [Reward]

- Exactly the same as [Need]
- However, we have more identifiers that can be used.

Additional Reward-identifier:

- "[XP]": Add only a number.
- "[Faction]":
	- Add a number, a comma and the exact faction name (e.g "10, Art").
	- '1', if you don't know the exact amount, but you know that this
		faction increased
	- '-1', if you do not know the exact amount, but you know that this
		faction decreased
- "[Combat Move]": Write the name of the category of the combat move, then add a
	comma and afterwards write the new combat move that you learned (be exact!).

---

# Multiple Ways identifiers

- Only use the following three identifier, if there are multiple possibilities
of finishing the quest.

### [Possible Ways]
- Write only a number!
- This will print on the website "Possible Ways: 2"
- You have to use this, before you use [Way]
- It is not possible to have multiple [Possible Ways]. Contact me if you need it.

### [Way]
- Before using this, you have to use [Possible Ways]
- Write only a number, start with 1 at first use and increase by one with every
use
- You have to use exactly the same amount that you put after [Possible Ways]
- You can also write "[Way] All". From this point onwards, the possibilities
have converged and there is only one way to continue the quest.

### [Reward]/[Need] [Way X]
- If the rewards/needs are influenced by the way that you take, add a second
identifier behind the identifier (e.g. [Reward] [Way 1] ...)
- If there is no second identifier behind [Reward]/[Need], everything behind
it is added to to the rewards/needs of all quests
- So, if a quest always gives a skill, use no second identifier, but if it
additionally gives different amounts of money, you need to use a second
identifier for every(!) way that specifies the amount of money.

Example:

	[Reward] [Money] 1000
	[Reward] [Way 1] [Item] 10, Rat Eye
	[Reward] [Way 2] [Item] 1, Staff

	# No matter how the player executes this quest, he will
	# always get 1000 tria. However, if he takes way 1, he
	# gets 10 rat eyes and if he takes way 2 he gets a staff.
