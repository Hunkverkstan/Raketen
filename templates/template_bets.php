<?php
$apiKey = 'c7b8b0f6a48ca7f50a76ae01b7f345e87c2a7d63';
$apiBetsUrl = "https://bettin.gs/api/v1/bets";

$options = array(
  'http' => array(
    'header' => "bettings-api-key: $apiKey"
  )
);

$context = stream_context_create($options);
$response = file_get_contents($apiBetsUrl, false, $context);

if ($response === false) {
  // Handle error here if needed
} else {
  $betsData = json_decode($response, true);

  $swedishMonths = array(
    1 => 'jan',
    2 => 'feb',
    3 => 'mars',
    4 => 'apr',
    5 => 'maj',
    6 => 'jun',
    7 => 'jul',
    8 => 'aug',
    9 => 'sep',
    10 => 'okt',
    11 => 'nov',
    12 => 'dec'
  );

  $hasNewBets = false;
  $numMatches = 0;

  foreach ($betsData['data'] as $bet) {
    if ($bet['status'] === 'NEW') {
      $hasNewBets = true;
      $numMatches++;
    }
  }

  if ($hasNewBets) {
    echo '<div class="segment-block text1 bg1 marg-medium"><h3>Levande spel (' . $numMatches . ' st)</h3></div>';
    echo '<div class="flex marg-large">';
  }

usort($betsData['data'], function($a, $b) {
  $dateA = $a['date'];
  $timeA = $a['time'];
  $nameA = $a['game'];
  $betA = $a['bet'];
  $stakeA = floatval($a['stake']); // Convert to float for numeric comparison

  $dateB = $b['date'];
  $timeB = $b['time'];
  $nameB = $b['game'];
  $betB = $b['bet'];
  $stakeB = floatval($b['stake']); // Convert to float for numeric comparison

  $dateTimeA = strtotime("$dateA $timeA");
  $dateTimeB = strtotime("$dateB $timeB");

  if ($dateTimeA === $dateTimeB) {
    if ($nameA === $nameB) {
      if ($stakeA === $stakeB) {
        return strcmp($betB, $betA); // Compare in reverse order
      }
      return $stakeB < $stakeA ? -1 : 1; // Compare in reverse order for stake
    }
    return strcmp($nameA, $nameB);
  }

  return $dateTimeA - $dateTimeB; // Compare in normal order for date and time
});


  foreach ($betsData['data'] as $bet) {
    if ($bet['status'] === 'NEW') {
      $gameName = $bet['game'];
      $gameBet = $bet['bet'];
      $gameBookie = $bet['bookie'];
      $gameOdds = number_format($bet['odds'], 2);
      $gameStake = $bet['stake'];
      $gameStakeFormatted = number_format($gameStake, 2);
      if (substr($gameStakeFormatted, -1) === '0') {
        $gameStakeFormatted = rtrim($gameStakeFormatted, '0');
        if (substr($gameStakeFormatted, -1) === '.') {
          $gameStakeFormatted = rtrim($gameStakeFormatted, '.');
        }
      }
      $gameDateParts = explode('-', $bet['date']);
      $day = ltrim($gameDateParts[2], '0');
      $month = intval($gameDateParts[1]);
      $year = $gameDateParts[0];
      $gameDate = $day . ' ' . $swedishMonths[$month] . ' ';
      $gameTime = date('H:i', strtotime($bet['time']) + 7200);
      echo '<div class="bet-container bg3"><div class="bet-match marg-small"><h2 class="text1">' . $gameBet . '</h2></div>';
      echo '<div class="bet-bet marg-small"><h3 class="text2">' . $gameName . '</h3></div>';
      echo '<div class="bet-container-inner"><div class="bet-bookie text4">' . $gameBookie . '<span class="bet-separator primary">•</span></div>';
      echo '<div class="bet-odds secondary">' . $gameOdds . '</div>';
      echo '<div class="bet-stake fourth">' . $gameStakeFormatted . 'u</div></div>';
      echo '<div class="bet-time text4">' . $gameDate . ' ' . $gameTime . '</div></div>';
    }
  }

  if ($hasNewBets) {
    echo '</div>';
  }
}
?>
