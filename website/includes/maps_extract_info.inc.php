<?php
    // $area has to be defined before including this file in another file !!    
    
    /*
     * Extracting NPC's
     * In the end it should look like:
     * <a href="#Boroz_Tolka" class="show" data-where="-34.88 24.05 -104.78" id="pin_Boroz_Tolka">Boroz Tolka</a> (1)
     */
    
    $get_npcs = "SELECT name, position, walking, quantity FROM npcs WHERE area = '" . $area . "'";
    $all_npcs = $mysqli->query($get_npcs) or die(mysql_error());  

    // If there is no NPC, we dont want a headline
    if($all_npcs->num_rows != 0) {
        echo "\n\t\t\t\t\t\t\t\t<h3>NPC's:</h3>";
    }

    while($npc = $all_npcs->fetch_array()) {
        echo "\n\t\t\t\t\t\t\t\t<a href='#" 
        . str_replace(' ', '_', $npc['name'])
        . "' class='show' data-where='"
        . $npc['position']
        . "' data-walking='"
        . $npc['walking']
        . "' id='pin_"
        . str_replace(' ', '_', $npc['name'])
        . "'>"
        . $npc['name']
        . "</a> ("
        . $npc['quantity']
        . ")";

        echo "<br>";
    }

    /* Extracting Maps!
     * Should look like this in the End: 
     * <a href="#To_Bronze_Door_Outside" class="show" data-where="636.70 30.12 485.07" id="pin_To_Bronze_Door_Outside">To Bronze Door Outside</a>
     */
    $get_locations = "SELECT name, position FROM mapsItems WHERE area = '" . $area . "'";
    $all_locations = $mysqli->query($get_locations) or die(mysql_error());  

    // If there is no Location, we dont want a headline
    if($all_locations->num_rows != 0) {
        echo "<h3>Items:</h3>";
    }

    echo "\n\t\t\t\t\t\t\t\t";
    while($location = $all_locations->fetch_array()) {
        echo "\n\t\t\t\t\t\t\t\t<a href='#" 
        . str_replace(' ', '_', $location['name'])
        . "' class='show' data-where='"
        . $location['position']
        . "' id='pin_"
        . str_replace(' ', '_', $location['name'])
        . "'>"
        . $location['name']
        . "</a>";

        echo "<br>";
    }

    /* Extracting Locations!
     * Should look like this in the End: 
     * <a href="#To_Bronze_Door_Outside" class="show" data-where="636.70 30.12 485.07" id="pin_To_Bronze_Door_Outside">To Bronze Door Outside</a>
     */
    $get_locations = "SELECT name, position FROM mapsLocations WHERE area = '" . $area . "'";
    $all_locations = $mysqli->query($get_locations) or die(mysql_error());  

    // If there is no Location, we dont want a headline
    if($all_locations->num_rows != 0) {
        echo "<h3>Locations:</h3>";
    }

    echo "\n\t\t\t\t\t\t\t\t";
    while($location = $all_locations->fetch_array()) {
        echo "\n\t\t\t\t\t\t\t\t<a href='#" 
        . str_replace(' ', '_', $location['name'])
        . "' class='show' data-where='"
        . $location['position']
        . "' id='pin_"
        . str_replace(' ', '_', $location['name'])
        . "'>"
        . $location['name']
        . "</a>";

        echo "<br>";
    }

    echo "<h3>Plot a point:</h3>\n";
    echo "\t\t\t\t\t\t\t\t<input id=\"toplot\" type=\"text\" style=\"border: 1px solid #ccc; color: #422200; width: 100px;\">\n";
    echo "\t\t\t\t\t\t\t\t<input type=\"button\" id=\"plotit\" value=\"Go\" style=\"border: 1px solid #ccc; color: #422200; width: 32px;\">";


