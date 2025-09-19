<input id="toplot" type="text" size="20"><br>
<input type="button" id="plotit" value="Plot">
<br>
<br>
<?php
    // $area has to be defined before including this file in another file !!

    /*
             * Extracting NPC's
             * In the end it should look like:
             * <a href="#Boroz_Tolka" class="show" data-where="-34.88 24.05 -104.78" id="pin_Boroz_Tolka">Boroz Tolka</a> (1)
             */

            $get_npcs = "SELECT name, position, walking, quantity FROM npcs WHERE area = '" . $area . "' ORDER BY name";
            $all_npcs = $mysqli->query($get_npcs) or die(mysql_error());
            ?>
            NPCs
            <form>
                <select id="npcs" size=8>
                <?php
                while ($npc = $all_npcs->fetch_array() )
                {
                    $id="pin_" . str_replace(' ', '_', $npc['name']);
                    print "<option onclick='pinpoint_pos(\"$id\")' ";
                    print "id='$id' ";
                    print "data-where='" . $npc['position'] . "' ";
                    print "data-walking='" . $npc['walking'] . "'>";
                    print $npc['name'];
                    print "</option>\n";
                }
                ?>
                </select>
            </form>

            <br>

            <?php
            /*
             * Extracting MOB's
             * In the end it should look like:
             * <a href="#Boroz_Tolka" class="show" data-where="-34.88 24.05 -104.78" id="pin_Boroz_Tolka">Boroz Tolka</a> (1)
             */

            $get_npcs = "SELECT name, position FROM mobs WHERE area = '" . $area . "' ORDER BY name";
            $all_npcs = $mysqli->query($get_npcs) or die(mysql_error());
            ?>
            MOBs
            <form>
                <select id="mobs" size=8>
                <?php
                while ($npc = $all_npcs->fetch_array() )
                {
                    $id="pin_" . str_replace(' ', '_', $npc['name']);
                    print "<option onclick='pinpoint_pos(\"$id\")' ";
                    print "id='$id' ";
                    print "data-where='" . $npc['position'] . "'>";
                    print $npc['name'];
                    print "</option>\n";
                }
                ?>
                </select>
            </form>

            <br>

            <?php
            /* Extracting Items!
             * Should look like this in the End:
             * <a href="#To_Bronze_Door_Outside" class="show" data-where="636.70 30.12 485.07" id="pin_To_Bronze_Door_Outside">To Bronze Door Outside</a>
             */
            $get_locations = "SELECT name, position FROM mapsItems WHERE area = '" . $area . "' ORDER BY name";
            $all_locations = $mysqli->query($get_locations) or die(mysql_error());
            ?>
            Items
            <form>
                <select id="items" size=8>
                <?php
                while($location = $all_locations->fetch_array())
                {
                    $id="pin_" . str_replace(' ', '_', $location['name']);
                    print "<option onclick='pinpoint_pos(\"$id\")' ";
                    print "id='$id' ";
                    print "data-where='" . $location['position'] . "'>";
                    print $location['name'];
                    print "</option>\n";
                }
                ?>
                </select>
            </form>
        <br>

            <?php
            /* Extracting Locations!
             * Should look like this in the End:
             * <a href="#To_Bronze_Door_Outside" class="show" data-where="636.70 30.12 485.07" id="pin_To_Bronze_Door_Outside">To Bronze Door Outside</a>
             */
            $get_locations = "SELECT name, position FROM mapsLocations WHERE area = '" . $area . "' ORDER BY name";
            $all_locations = $mysqli->query($get_locations) or die(mysql_error());
            ?>
            Locations
            <form>
                <select id="locations" size=8>
                <?php
                while($location = $all_locations->fetch_array())
                {
                    $id="pin_" . str_replace(' ', '_', $location['name']);
                    print "<option onclick='pinpoint_pos(\"$id\")' ";
                    print "id='$id' ";
                    print "data-where='" . $location['position'] . "'>";
                    print $location['name'];
                    print "</option>\n";
                }
                ?>
                </select>
            </form>




