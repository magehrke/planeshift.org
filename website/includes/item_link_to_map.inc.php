<?php
/*
 * Returns a String which links to the Map of the Item
 */

echo "/maps/" 
    . strtolower(str_replace(' ', '-', $itemLocation))
    . ".php#"
    . str_replace(' ', '_', $itemName);

