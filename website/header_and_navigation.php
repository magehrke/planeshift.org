<!-- include functions needed for php secure login -->
<!-- this is also needed on sites where no login is needed, to get the Session Variables -->
<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path1 = $path . "/includes/db_connect.php";
	$path2 = $path . "/includes/psl_functions.php";

    include_once $path1;
    include_once $path2;

    sec_session_start();
?>

<div style="width:100%">

    <!-- Do NOT display the top/left guildlogo on the index page, as it has the big guildlogo -->
    <?php
        if($_SERVER['PHP_SELF'] != '/index.php') :
    ?>
        <!-- Display Guild logo on the top left -->
        <div id="main_page_logo_container">
            <a href="/init.php">
                <img id="main_page_logo" src="/images/guildlogo-500px.png">
            </a>
        </div>

    <?php
        endif;
    ?>


    <div id="top_row_of_the_page">


    	<?php if (isset($_SESSION['username'])) : ?>

            <!-- Commented, because login does not work anymore -->
            <!-- Welcome, <?php echo htmlentities($_SESSION['username']) ?> | -->

            <?php
                $isAdmin_query = "SELECT admin FROM psl_members WHERE id='" . $_SESSION['user_id'] . "' LIMIT 1";
                $get_isAdmin = $mysqli->query($isAdmin_query) or die(mysql_error());

                $isAdmin = $get_isAdmin->fetch_array();

                if($isAdmin["admin"] == 1) {
                    echo "<a href='/administration.php'>Admin</a> |";
                }
            ?>

            <a href="/includes/psl_logout.php">Logout</a>

    	<?php else : ?>

           <!-- Commented, because login does not work anymore -->
    	   <!-- You are currently not <a href="/psl_login.php">logged in</a>. -->

    	<?php endif; ?>
    </div>

</div>

<!-- Header -->
<div id="head_main_container">
    <div class="header_container">

        <h1><a href="/">Planeshift.org</a></h1>
    </div>
</div>

<!-- Navigation Bar -->
<div id="navi_main_container">
    <div class="navi_container">
        <ul id="navigation_main">

            <!-- Navigation: Guild Button -->
            <li class="navigation_button_home">
                <a href="/home.php">Home</a>
            </li>

            <!-- Navigation: Quests Button -->
            <li class="navigation_button_quests">
                <a href="/quests/quests.php">Quests</a>
                <ul class="navigation_dropdown_menu">
                    <li><a href="/quests/repeatable-quests.php">Repeatable Quests</a></li>
                    <li><a href="/quests/combat-moves.php">Combat Moves</a></li>
                    <li><a href="/quests/winch-access.php">Winch Access</a></li>
                    <li><a href="/quests/other-chains.php">Other Questchains</a></li>
                </ul>
            </li>

            <!-- Navigation: Maps Button -->
            <li class="navigation_button_maps">
                Maps
                <ul class="navigation_dropdown_menu">
                    <li><a href="/maps/worldmap.php">Worldmap</a></li>
                    <li><br></li>
                    <li><a href="/maps/amdeneir.php#plain">Amdeneir</a></li>
                    <li><a href="/maps/arena.php#plain">Arena</a></li>
                    <li><a href="/maps/bronze-door-road-1.php#plain">Bronze Door Road 1</a></li>
                    <li><a href="/maps/bronze-door-road-2.php#plain">Bronze Door Road 2</a></li>
                    <li><a href="/maps/bronze-doors-fortress.php#plain">Bronze Doors Fortress</a></li>
                    <li><a href="/maps/bronze-doors-outside.php#plain">Bronze Doors Outside</a></li>
                    <li><a href="/maps/courthouse.php#plain">Courthouse</a></li>
                    <li><a href="/maps/death-realm.php#plain">Death Realm</a></li>
                    <li><a href="/maps/dungeon.php#plain">Dungeon</a></li>
                    <li><a href="/maps/gugrontid-city.php#plain">Gugrontid City</a></li>
                    <li><a href="/maps/guildlaw.php#plain">Guildlaw</a></li>
					<li><a href="/maps/howling-well.php#plain">Howling Well</a></li>
                    <li><a href="/maps/hydlaa.php#plain">Hydlaa</a></li>
                    <li><a href="/maps/hydlaa-east.php#plain">Hydlaa East</a></li>
                    <li><a href="/maps/lava-cave.php#plain">Lava Cave</a></li>
                    <li><a href="/maps/magic-shop.php#plain">Magic Shop</a></li>
                    <li><a href="/maps/ojaveda.php#plain">Ojaveda</a></li>
                    <li><a href="/maps/ojaveda-road-1.php#plain">Ojaveda Road 1</a></li>
                    <li><a href="/maps/ojaveda-road-2.php#plain">Ojaveda Road 2</a></li>
                    <li><a href="/maps/sewers.php#plain">Sewers</a></li>
                    <li><a href="/maps/winch.php#plain">Winch</a></li>
                    <li><a href="/maps/xalpys-cave.php#plain">Xalpys Cave</a></li>
                </ul>
            </li>

            <!-- Navigation: NPCs Button -->
            <li class="navigation_button_npcs">
                <a href="/npcs.php">NPC's</a>
                <ul class="navigation_dropdown_menu">
                    <li><a href="/npcs/trainers.php">Trainers</a></li>
                    <li><a href="/npcs/trainingcalculator.php">Training Calculator</a></li>
                </ul>

            </li>



            <!-- Navigation: Items Button -->
            <li class="navigation_button_items">
                <a href="/items.php">Items</a>
            </li>

            <!-- Navigation: Magic Button -->
            <li class="navigation_button_magic">
                Magic
                <ul class="navigation_dropdown_menu">
                    <li><a href="/magic/magic.php">Overview</a></li>
                    <li><a href="/magic/glyphs.php">Glyphs</a></li>
                    <li><a href="/magic/spellbook.php">Spellbook</a></li>
                    <li><a href='/magic/magic-quests.php'>Quests</a></li>
                    <li><a href='/magic/gem-enchanting.php'>Gem Enchanting</a></li>
										<li><a href='/magic/enchanting-items.php'>Enchanting Items</a></li>
                </ul>
            </li>

            <!-- Navigation: Jobs Button -->
            <li class="navigation_button_jobs">
                Jobs
                <ul class="navigation_dropdown_menu">
					<li><a href="/jobs/drawing.php">Drawing</a></li>
					<li><a href="/jobs/fishing.php">Fishing</a></li>
					<li><a href="/jobs/harvesting.php">Harvesting</a></li>
                    <li><a href="/jobs/lockpicking.php">Lockpicking</a></li>
                    <li><a href="/jobs/metallurgy.php">Metallurgy</a></li>
                    <li><a href="/jobs/mining.php">Mining</a></li>
                    <li><a href="/jobs/shieldcrafting.php">Shield Crafting</a></li>
                    <li><a href="/jobs/books.php">All Crafting Books</a></li>
                    <li><a href="/jobs/recipes.php">Recipe Database</a></li>
                </ul>
            </li>

            <!-- Navigation: More Button -->
            <li class="navigation_button_more">
            	More
                <ul class="navigation_dropdown_menu">
										<li><a href="/more/menitas-puzzle.php">Menita&apos;s Puzzle</a></li>
               </ul>
            </li>

            <!-- Navigation: Help Button -->
            <li class="navigation_button_help">
                Help
                <ul class="navigation_dropdown_menu">
									<li><a href="/help/contributors.php">Contributors</a></li>
									<li><a href="/help/quest-file-writing-manual.md.html">Quest File Writing Manual</a></li>
               </ul>
            </li>

        </ul>
    </div>
</div>
