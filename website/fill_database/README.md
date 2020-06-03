# Fill databases

- These files are SQL commands which are executed via PHP
- They fill, delete and adjust the databases which store the data for the website

- All of theses scripts get executed if a user clicks on the home tab of the website
- Thus, all of these files are included in the `home.php` file

- Every time:
  - all databases are deleted
  - all databases are created new
  - all data is filled into the databases

- This mechanism takes just a few milliseconds
- This way it is easier to add chuncks of data without being an expert in SQL


### fill_database_eclipse.php

- This file is dynamically created when running the java program
- It mainly reads, creates and links questfiles
- If it is empty or corrupt, there was probably an error executing the java program
