<?php
/*
 * Returns a String which links to the desired quest
 */

echo "/quests/details/" 
	. str_replace(' ', '-', $questName)
	. ".php";

