<?php

include_once 'db_config.php';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE) 
    or die("Connect failed: %s\n". $mysqli -> error);