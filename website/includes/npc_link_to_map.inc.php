<?php
/*
 * Returns a String which links to the Map of the NPC
 */
if($stmt = $mysqli->prepare("SELECT area FROM npcs WHERE name = ? AND mainPos = 1")) {
    $stmt->bind_param('s', $npcName);  // Bind "$npcName" to parameter.
    $stmt->execute();   // Execute the prepared query.
    $stmt->store_result();

    $stmt->bind_result($_npc_location);
    $stmt->fetch();

    echo "/maps/" 
        . strtolower(str_replace(' ', '-', $_npc_location))
        . ".php#"
        . str_replace(' ', '_', $npcName);
}
