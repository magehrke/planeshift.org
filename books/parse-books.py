#!/usr/bin/python
# -*- coding: utf-8 -*-

import sys
import logging

loot = [
	"Arangma Egg Sac",
	"Arangma Talon",
	"Arangma Tooth",
	"Armoured Riverling Hide",
	"Armoured Riverling Skull",
	"Axe",
	"Battle Axe",
	"Bows",
	"Broadsword",
	"Carkarass Feather",
	"Carkarass Poison",
	"Carkarass Fire Carapace",
	"Carkarass Fire Feather",
	"Carkarass Skull",
	"Carkarass Tail",
	"Chain Mail Arms Armor",
	"Chain Mail Boots",
	"Chain Mail Gloves",
	"Chain Mail Pants",
	"Chain Mail Torso Armor",
	"Clacker Carapace",
	"Clacker Full Carapace",
	"Clacker Leg",
	"Clacker Meat",
	"Claymore",
	"Club",
	"Coamti Blood",
	"Coamti Eye",
	"Coamti Tail",
	"Coamti Talon",
	"Coamti Tongue",
	"Consumer Antenna",
	"Consumer Blood",
	"Consumer Leg",
	"Dagger",
	"Dark Circle Ring",
	"Diseased Rat Blood",
	"Diseased Rat Hide",
	"Eagle Gobble Bracelet",
	"Eagle Gobble Necklace",
	"Eagle Gobble Skull",
	"Elder Gorweal cortex",
	"Elder Gorweal roots",
	"Falchion",
	"Fire Blood",
	"Flayed Velnishi Skull",
	"Flayed Velnishi Talon",
	"Frost Arangma Blood",
	"Frost Arangma Feeler",
	"Frost Arangma Quartz",
	"Gawert Carapace",
	"Gawert Jaws",
	"Gawert stinger",
	"Gobble Blood",
	"Gobble Ear",
	"Gobble Hair",
	"Gobble Meat",
	"Golden Ring",
	"Gorweal cortex",
	"Gorweal roots",
	"Greater Healing Potion",
	"Greater Potion of Healing",
	"Grendol Blood",
	"Grendol Poison Blood",
	"Grendol Rib",
	"Grendol Rotten Meat",
	"Grendol Spine",
	"Healing Potion",
	"Helms",
	"Imago Consumer Blood",
	"Jade Clacker Carapace",
	"Jade Clacker Full Carapace",
	"Jade Clacker Talon",
	"Kikiri Blood",
	"Kikiri Feather",
	"Kikiri Meat",
	"Knife",
	"Leather Armor",
	"Longsword",
	"Lump of Lard",
	"Mace",
	"Marfusang Bones",
	"Marfusang Heart",
	"Marfusang Tongue",
	"Maulberlord Blood",
	"Maulberlord Ebony Heart",
	"Maulberlord Perfect Talon",
	"Maulberlord Talon",
	"Maulbernaut Fur",
	"Maulbernaut Perfect Talon",
	"Maulbernaut Talon",
	"Morning Star",
	"Mudobber Coamti Blood",
	"Mudobber Coamti Eye",
	"Mudobber Coamti Tail",
	"Mudobber Coamti Talon",
	"Mudobber Coamti Tongue",
	"Neoten Consumer Blood",
	"Plate Armor",
	"Plate Mail Arms Armor",
	"Plate Mail Torso Armor",
	"Poison Carkarass Feather",
	"Poison Carkarass Skull",
	"Rat Eye",
	"Rat Foot",
	"Rat Hide",
	"Rat Meat",
	"Rat Tail",
	"Riverling Skin",
	"Riverling Skull",
	"Riverling Tooth",
	"Round Shield",
	"Sabre",
	"Sand Arangma Blood",
	"Sand Arangma Silk",
	"Sand Arangma Talon",
	"Sapling Gorweal cortex",
	"Sapling Gorweal roots",
	"Serpent Gobble Amulet",
	"Serpent Gobble Bones",
	"Serpent Gobble Skull",
	"Shortsword",
	"Small Battle Axe",
	"Tefusang Claw",
	"Tefusang Skin",
	"Tefusang Tooth",
	"Tefusangling Claw",
	"Tefusangling Skin",
	"Tefusangling Tooth",
	"Thunder Clacker Full Carapace",
	"Thunder Clacker Leg",
	"Thunder Clacker Tentacle",
	"Tloke Drone Wax",
	"Tloke Drone Wing",
	"Tloke Queen Armor",
	"Tloke Queen Jewel",
	"Tloke Queen Wing",
	"Tloke Warrior Stinger",
	"Tloke Warrior Wing",
	"Toxic Grendol Blood",
	"Trepor Egg Sac",
	"Trepor Heart",
	"Trepor Queen Egg Sac",
	"Trepor Queen Heart",
	"Trepor Queen Skin",
	"Trepor Warrior Skin",
	"Trepor Warrior Talon",
	"Trepor Wiggly Feeler",
	"Ulbernaut Claw",
	"Ulbernaut Deadly Claw",
	"Ulbernaut Fur",
	"Ulbernaut Heart",
	"Velnishi Blood",
	"Velnishi Skin",
	"Velnishi Talon",
	"Vesper Arangma Carapace",
	"Vesper Arangma Eye",
	"Vesper Arangma Feeler",
	"Vilenaut Blood",
	"Vilenaut Fur",
	"Weaver Arangma Blood",
	"Weaver Arangma Hair",
	"Weaver Arangma Silk",
	"Wrath Rat Bones",
	"Wrath Rat Eye"
]

harvested = [
	"Apple",
	"Barberry Root",
	"Black Walnut",
	"Blackbush Stem",
	"Blue Cohosh Root",
	"Blue Shan Flower",
	"Bream",
	"Butchers Broom Root",
	"Carp Fish",
	"Carrot",
	"Charmflower",
	"Clackerweed Leaf",
	"Coppernose",
	"Couchgrass",
	"Crayfish",
	"Dace",
	"Dandelion Flower",
	"Devils Claw",
	"Duppong",
	"Eel",
	"Eyebright",
	"Feverfew",
	"Gobo Root",
	"Golden Ivy Leaf",
	"Hardened Crate",
	"Hops",
	"Jeweled Chest",
	"Juiceberry Fruit",
	"Kingsfoil Leaf",
	"Lake Mushroom",
	"Lavender Flower",
	"Lionfish",
	"Manta Ray",
	"Night Mushroom",
	"Orfe",
	"Orilliphia",
	"Perch",
	"Pungent Tuber",
	"Red Mangrove Leaf",
	"Saffron",
	"Sicklepod Flower",
	"Sinaflar Root",
	"Snowbud",
	"The Journal of Magister Fallox",
	"Threestem Fruit",
	"Threestem Wood",
	"Trout",
	"Unicornfish",
	"White Oak Bark",
	"White Oak Wood",
	"Wragberry",
	"Wyn Reed",
	"Yarrow"
]

mined = [
	"Coal Lump",
	"Diamond Crystal",
	"Emerald Crystal",
	"Ruby Crystal",
	"Sapphire Crystal",
	"Cinnabar Ore",
	"Copper Ore",
	"Gold Ore",
	"Iron Ore",
	"Lumium Ore",
	"Platinum Ore",
	"Silver Ore",
	"Tin Ore",
	"Zinc Ore"
]

bought = [
	"Apple",
	"Applesauce",
	"Arrow-Head Mold",
	"Bag of Salt",
	"Bamboo Rice",
	"Barberry Syrup",
	"Beer Mug",
	"Bogo Pepper",
	"Boiled Kartoffe",
	"Bread 	Food",
	"Bronze Scale Mail Cloth",
	"Bunch of Joopiner Berries",
	"Bunch of Terevan Berries",
	"Bunch of Trefoil",
	"Carp Fish",
	"Carrot",
	"Cheese",
	"Cider Mug",
	"Circle Cutter",
	"Clacker Gruel",
	"Cloth for Poultice",
	"Common Salt",
	"Conservation Potion",
	"Cooked Carrot",
	"Copper Needle and Thread",
	"Cutters",
	"Egg",
	"Fire Fruit",
	"Fish Glue",
	"Flour",
	"Glass Stirrer",
	"Grilled Meat",
	"Ground Cinnamon",
	"Ground Jarana Root",
	"Hammer",
	"Hearty Bamboo Rice",
	"Hide Scarper",
	"Honey",
	"Ide",
	"Irifon Rice",
	"Iron Arrow",
	"Iron Stirrer",
	"Jar of Corium Seed",
	"Jar of Sweetburst",
	"Jomed's Seasoning",
	"Kartoffel",
	"Kikiri Soup",
	"Kitchen Knife",
	"Large Mail Cloth",
	"Large Metal Vase",
	"Leather Cheekplate",
	"Leather Cutter",
	"Leather Knife Handle",
	"Leather Ridge",
	"Lump of Butter",
	"Macca",
	"Mace",
	"Mandrel",
	"Masher",
	"Meat",
	"Milk",
	"Mixer",
	"Niter",
	"Oil of Vitriol",
	"Pan-Fried Carp",
	"Pan-Fried Trout",
	"Pie",
	"Plate",
	"Pot Roast",
	"Pungent Tuber",
	"Red Liquor Mug",
	"Rolling Pin",
	"Sack of Banuts",
	"Sack of Barley",
	"Sack of Burr Nuts",
	"Sack of Far Ground Rye",
	"Sack of Jookans",
	"Sack of Powdered Bread Rise",
	"Sack of Red Wheat",
	"Sack of Strimptor",
	"Scoop",
	"Scrambled Eggs",
	"Seared Trout",
	"Shield Endings",
	"Sickle",
	"Simmering Red Liquor",
	"Small Plate",
	"Small Wicker Shield Core",
	"Small Wooden Axe Handle",
	"Small Wooden Shield Core",
	"Spirit",
	"Spoon",
	"Spreader",
	"Stibine",
	"Strainer",
	"Sulphur powder",
	"Tanning Crystal Acid",
	"Tartar",
	"Terevan Wine Bottle",
	"Tinga Leaves",
	"Trout",
	"Water Filled Bucket",
	"Water Pouch",
	"Wicker Shield Core",
	"Wire Mold",
	"Wood Chisel",
	"Wood Plane",
	"Wood Saw",
	"Wooden Axe Handle",
	"Wooden Mallet",
	"Wooden Spoon",
	"Wooden Stirrer",
]

recipes = []
recipes_in_book = []

def parse_ingredients ( ingredients ):
	result = ""
	count = 0
	for i in range ( 0, len (ingredients) ):
		s = ingredients[i].strip()
		if s == "":
			continue
		amount = "1"
		if s[0].isdigit():
			p = s.find(" ")
			amount = s[ : p ]
			s = s[ p+1 : len(s) ]
		where = "C"
		if s in loot:
			where = "L"
		if s in harvested:
			where = "H"
		if s in mined:
			where = "M"
		if s in bought:
			where = "B"
		if count > 0:
			result += ", "
		result += where + " " + amount + " " + s
		count += 1
	return result

def add_if_not_present ( recipe ):
	global recipes
	global recipes_in_book

	found = False
	for i in recipes_in_book:
		if (i[0] == recipe[0]) and (i[1] == recipe[1]) and (i[2] == recipe[2]) and (i[3] == recipe[3]):
			found = True
	if found == False:
		recipes_in_book.append (recipe)

def add_book ():
	global recipes
	global recipes_in_book

	for i in recipes_in_book:
		found = False
		idx = 0
		for j in recipes:
			if (i[0] == j[0]) and (i[1] == j[1]) and (i[2] == j[2]) and (i[3] == j[3]):
				new_book = i[4]
				cur_book = j[4]
				if cur_book.find (new_book) == -1:	# new book is not yet present
					recipes[idx][4] += ", " + new_book
				found = True
			idx += 1
		if found == False:
			recipes.append (i)
	recipes_in_book = []

def parse_recipe ( recipe, book ):
	global recipes

	#print "-", recipe
	i = 0
	while not recipe[i].isdigit() and not recipe[i] == "<" and not recipe[i] == ">":
		i += 1
	type = recipe [ i-2 ]
	skill = recipe [ : i-3 ]
	start = recipe.find (" ", i )
	level = recipe[ i : start ]
	start = recipe.find ( " ", start + 1 )
	end   = recipe.find (" into ")
	ingredients = parse_ingredients ( recipe [ start : end ].split (",") )
	result = ""
	amount = "1"
	tool = ""
	p = end + 6		# skip ' into '
	start = recipe.find (" using ")
	if start == -1:
		if recipe[p].isdigit():
			e = recipe.find (" ", p) # + 1
			amount = recipe[ p : e ]
			result = recipe[ e+1 : len(recipe) - 1 ]
		else:
			result = recipe[ p : len (recipe) - 1 ]
		tool = "some Table (combine)"
	else:
		if recipe[p].isdigit():
			e = recipe.find (" ", p) # + 1
			amount = recipe[ p : e ]
			result = recipe[ e+1 : start ]
		else:
			result = recipe[ p : start ]
		tool = recipe [ start+7 : len(recipe)-1 ] # skip ' using '
		tool = tool.replace ("with a", "+")
	l = len(result)
	if amount == "0":
		amount = "1";
	#print "--- type", type
	#print "--- skill", skill
	#print "--- level", level
	#print "--- name", result
	#print "--- ingr", ingredients
	#print "---", amount,",", result
	#print "--- tool", tool
	if len (result) > 200:
		print "Warning:  (name)'" +result+ "' size: ",len(result)
	if len (ingredients) > 200:
		print "Warning:  (ingredients)'" +ingredients+ "' size: ",len(ingredients)
	if len (tool) > 200:
		print "Warning (tool): '" +tool+ "' size: ",len(tool)
	add_if_not_present ( [ result, amount, tool, ingredients, book, type, skill, level ] )

def parse_file ( file ):
	logging.debug ( "parsing file '" + file + "'..." )
	try:
		book = open ( file, "r")
	except:
		print "could not open '" + file + "' for reading."
		exit (2)
	book_name = file[ : file.find(".") ]
	#print "### book:",book_name
	line_number = 0
	while 1 == 1:
		l = book.readline ()
		if not l:	# EOF
			break
		line_number += 1
		recipe = l.strip ()
		if recipe == "" or recipe[0] == '-':
			continue
		parse_recipe ( recipe, book_name )
	add_book ()

def print_recipes ():
	old_book = ""
	for i in recipes:
		book = i[4]
		if old_book != book:
			print "\t\t//"
			print "\t\t//", book
			print "\t\t//"
			old_book = book
		print '\t\tarray ('
		print '\t\t\t"name"\t\t=> "' + i[0] + '",'
		print '\t\t\t"type"\t\t=> "' + i[5] + '",'
		print '\t\t\t"ingredient"\t=> "' + i[3] + '",'
		print '\t\t\t"result"\t=> "' + i[1] + '",'
		print '\t\t\t"tool"\t\t=> "' + i[2] + '",'
		print '\t\t\t"skill"\t\t=> "' + i[6] + '",'
		print '\t\t\t"level"\t\t=> "' + i[7] + '",'
		print '\t\t\t"book"\t\t=> "' + i[4] + '"'
		print '\t\t),'

#---------------------------------------------------------------------
#   MAIN
#---------------------------------------------------------------------
logging.basicConfig ( format='%(levelname)s: %(message)s' )
for i in range ( 1, len ( sys.argv ) ):
	parse_file ( sys.argv[i] )
print_recipes ()

