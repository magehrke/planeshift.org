# Items

- The database containing all items is called `items`
- It is filled by the file `fill_database/fill_database_items.php`
- The corresponding html/php file is `items.php` at the top level

### Extracting data from database

- The page gets all the `items` from the database
- It links the `npcs` to the corresponding websites (names must be written correctly!)
- It is expected, that an icon of the item is available
  - Saved at `images/icons` like `item_name_icon.png`

### Adding new items

- Go to `fill_database/fill_database_items`
- Search for the correct category the item belongs to
- Add a line to the array and provide
  - `'item name', 'npc name', tria, '2020-06-03',`
  - names must be written like in the game
  - tria should just be a number
  - checkup (last entry) should be in this date format
