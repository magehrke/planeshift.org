<!-- Drop and Create all the database tables -->
<!-- Can be removed if all Data is correct -->
<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_jobs.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_eclipse.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_items.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_npcs-maps.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_questchains.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_glyphs-spells-magic.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_loot.php";
    include($path);

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/fill_database/fill_database_recipes.php";
    include($path);

    include ($_SERVER['DOCUMENT_ROOT']."/index.php");
?>

