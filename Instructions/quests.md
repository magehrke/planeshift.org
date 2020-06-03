# Quests

### .psquest files
- We use a special file format called `.psquest`
- We designed it ourself to cope with the vast amount of data that comes with quests
- Each quest shall have it's own `.psquest` file
- These shall be stored in `data/psquest-files`
- There is a how to, which can be found online


### java psquest check
- I want to provide a way, how one can easily check, if a psquest file is correct
- There shall be some output, when an error occurs
- IN WORK

### java
- After a change in a psquest file, the java program needs to be executed
- Everytime the java program is executed
  - it takes all `psquest` files and creates html/php files for each quest
  - those are output into `website/quests/quest-details/`
  - additionally the file `fill_database_eclipse.php`is created which contains quest data that needs to be inserted to the database

### What to upload?
- If you change some psquest files and execute the java program
- You need to upload (via ftp) the `website/fill_database/fill_database_eclipse.php`
- And all quest `php` files in `website/quests/quest_details/` that have changed
  - You could upload all again, if that is easier for you

### Quest overview table
- When going to the `quests.php` page, a table with all quests is showed
- This is created by scanning the `quests` database

- If a quest is not shown:
  - Check the name of the npc of the psquest file, it must be correct !!!
  - Check if the npc exist in the npc database !!!
