
for($i = 0; $i < count($questsRewards_to_insert); $i += 7) {
  $questsRewards_query = "INSERT INTO questsRewards(quest, way, variant, type, reward, amount, info)
          VALUES ('" . $questsRewards_to_insert[$i] . "', "
          . $questsRewards_to_insert[$i+1] . ", "
          . $questsRewards_to_insert[$i+2] . ", '"
          . $questsRewards_to_insert[$i+3] . "', '"
          . $questsRewards_to_insert[$i+4] . "', "
          . $questsRewards_to_insert[$i+5] . ", '"
          . $questsRewards_to_insert[$i+6] . "')";
  $mysqli->query($questsRewards_query) or die($mysqli->error);
}




/* !!!!!!!!!!!!!!!!!!!!!! NEVER EVER UNCOMMEND THIS !!!!!!!!!!!!!!!!!!*/
// The whole login tables will be overwritten!


/* ------------------------------------------------- */
/*
//Inserts for Login

/*
-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 03:03 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8
-- https://github.com/peredurabefrog/phpSecureLogin


$setSqlMode = "SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';";
$mysqli->query($setSqlMode) or die($mysqli->error);

$setTimeZone = "SET time_zone = '+01:00';";
$mysqli->query($setTimeZone) or die($mysqli->error);

// Table structure for table `login_attempts`
$createLoginAttempts = "CREATE TABLE IF NOT EXISTS `psl_login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$mysqli->query($createLoginAttempts) or die($mysqli->error);

//Table structure for table `members`

$createTableMembers = "CREATE TABLE IF NOT EXISTS `psl_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `authenticated` boolean DEFAULT '0' NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;";

$mysqli->query($createTableMembers) or die($mysqli->error);
*/
/* ------------------------------------------------- */
