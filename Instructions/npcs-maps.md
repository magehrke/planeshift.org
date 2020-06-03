# NPCS & MAPS

### npcs.php
- lives at top level
- shows all npcs on the website
- Uses the `npcs` database

### Getting the correct location of npcs/things
- you can either get it by executing `\pos` in game
- or go to the website and experiment with `plot a point`
- a position consists of 3 numbers (1 for each axis in a 3D world)
- for our map the 2. number is obsolete, so it does not really matter

### Different databases for npc, location, item
- All npcs shall go into the npc database
- All items shall go into the item database
  - Apple, Chests, etc.
- All location shall go into the location database
  - "To Oja Road 1", "Howling Well", ...

### Adding an NPCS or an NPC location
- Open `fill_database_npcs-maps.php` and enter a new line for every npc on a different map
- Variables:
  - name: name of npc as string (in '')
  - area: name of map (amdeneir, hydlaa, ...) as string (in '')
  - quantity: number, hom many npcs of this kind can be find on this map
  - checkup: data in data format ('2020-06-03')
  - position: string of the positions for each entity of this npc on this map
    - a position consists of 3 numbers
    - each new position (1 for each entity) is seperated by a `,`
    - E.g. 2 Ulbernauts in Hydlaa could have `'-433.88 29.71 205.67, 114.88 33.42 64.22'`
  - walking: this is like the last entry
    - just that this is designed to show where an npc is walking
    - this only works if the quantity of this npc is 1
    - if the npc walks into a different map, create a new line where you specify the other map as area
    - if you did this, use the next variable to specify on which map the main position of the npc is (important for linking npcs)
  - mainPos: this variable can only be 0 or 1
    - if an npc is walking into another area, use this variable to specify at which area the main position of the npc is
    - put a 1 for the map with the main position
    - put a 0 for all other maps

### Adding an location/item to a map
- This is very analog to the adding an npc process
- Except that you need less variables
- For items there is an additional third variable `category`
  - This can be empty or filled with a suitable category
  - We can use this category later to iterate over the desired items
  - E.g. 'ore' specifies all the locations where we can find ore, which are printed on the `mining.php` page
