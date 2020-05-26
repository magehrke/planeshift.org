<?php

  $noRewardsAtAll = True;

  // ALL rewards except Association, Money & XP
  $getMainRewards =  "SELECT reward, type, amount, way, variant
                      FROM questsRewards
                      WHERE quest = '$questname'
                      AND NOT type in ('Association', 'Money', 'XP')
                      ORDER BY way, variant;";
  $mainRewards = $mysqli->query($getMainRewards) or die($mysqli->error);

  $insedOrStatement = False;
  $latestWay = 0;
  $latestVariant = 0;


  while($mainReward = $mainRewards->fetch_array()) {
      if(! $noRewardsAtAll) {
          if($latestWay == 0 AND $latestVariant == 0) {
              echo ", ";
          }
          elseif($mainReward['way'] != $latestWay
              OR $mainReward['variant'] != $latestVariant) {
              echo " -or- ";
          } else {
              echo " and ";
          }
      } else {
          $noRewardsAtAll = False;
      }

      $latestWay = $mainReward['way'];
      $latestVariant = $mainReward['variant'];

      // ITEM
      if($mainReward['type'] == 'Item') {
          echo "<img src='/images/icons/"
              . str_replace(' ', '_', strtolower($mainReward['reward']))
              . "_icon.png' /> ";
          if ($mainReward['amount'] != 1) {
              echo $mainReward['amount'] . " ";
          }
          echo $mainReward['reward'];
      }
      // SKILL
      elseif ($mainReward["type"] == "Skill") {
          echo $mainReward["amount"]
              . " level in "
              . $mainReward["reward"];
      }

      // COMBAT MOVE
      elseif ($mainReward["type"] == "Combat Move") {
          echo "Combat Move: " . $mainReward["reward"];
      }

      // SPECIAL
      elseif ($mainReward["type"] == "Special") {
          echo $mainReward['reward'];
      }

      // ELSE
      else {
          echo $mainReward['amount'] . " " . $mainReward['reward'];
      }
  }

   // Association
  $getRewardAssocs = "SELECT reward, MIN(amount) minAmount, MAX(amount) maxAmount
                      FROM questsRewards
                      WHERE quest = '" . $questname . "'
                      AND type = 'Association'
                      GROUP BY reward;";
  $rewardAssocs = $mysqli->query($getRewardAssocs) or die($mysqli->error);
  while($rewardAssoc = $rewardAssocs->fetch_array()) {
      if(! $noRewardsAtAll) {
          echo ", ";
      } else {
          $noRewardsAtAll = False;
      }

      if($rewardAssoc['minAmount'] == $rewardAssoc['maxAmount']) {
          // it is 1, if we know that it is positive, but not the amount
          if($rewardAssoc['minAmount'] == 1) {
              echo "+";
          }
          // it is -1, if we know that it is negative, but not the amount
          elseif($rewardAssoc['minAmount'] == -1) {
              echo "-";
          } else {
              echo $rewardAssoc['minAmount'];
          }
          echo " Faction with " . $rewardAssoc['reward'];
      } else {
          echo $rewardAssoc['minAmount']
              . "-" . $rewardAssoc['maxAmount']
              . " Faction with " . $rewardAssoc['reward'];
      }
  }

  // Money
  $getRewardTrias =  "SELECT reward, type, amount
                      FROM questsRewards
                      WHERE quest = '" . $questname . "'
                      AND type = 'Money';";
  $rewardTrias = $mysqli->query($getRewardTrias) or die($mysqli->error);

  $tria_array = array();
  while($rewardTria = $rewardTrias->fetch_array()) {
      array_push($tria_array, $rewardTria['amount']);
  }
  sort($tria_array);

  if(!empty($tria_array)) {
      if(! $noRewardsAtAll) {
          echo ", ";
      } else {
          $noRewardsAtAll = False;
      }

      $smallest = reset($tria_array);
      $highest = end($tria_array);

      echo "<img src='/images/icons/bag_of_tria_icon.png' /> ";
      if($smallest == $highest) {
          echo $smallest . " Tria";
      } else {
          echo $smallest . "-" . $highest . " Tria";
      }
  }

  // XP
  $getRewardXPs = "SELECT reward, type, amount
                  FROM questsRewards
                  WHERE quest = '" . $questname . "'
                  AND type = 'XP';";
  $rewardXPs = $mysqli->query($getRewardXPs) or die($mysqli->error);

  $xp_array = array();
  while($rewardXP = $rewardXPs->fetch_array()) {
      array_push($xp_array, $rewardXP['amount']);
  }
  sort($xp_array);

  if(!empty($xp_array)) {
      if(! $noRewardsAtAll) {
          echo ", ";
      } else {
          $noRewardsAtAll = False;
      }

      $smallest = reset($xp_array);
      $highest = end($xp_array);

      if($smallest == $highest) {
          echo $smallest . " XP";
      } else {
          echo $smallest . "-" . $highest . " XP";
      }
  }


  /* When there is no reward */
  if($noRewardsAtAll) {
      echo "--";
  }
