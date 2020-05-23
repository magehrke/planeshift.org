<?php
/*
 * Returns a String which links to the Map of the Location
 */

echo "/maps/" 
    . strtolower(str_replace(' ', '-', $locationMap))
    . ".php#"
    . str_replace(' ', '_', $locationName);

