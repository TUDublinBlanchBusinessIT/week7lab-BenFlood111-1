<?php
include ('Team.php');

$name = $_GET['teamName'];

$homeTeam = new Team($name);

$matchResults = [
	['homeScore' => $_GET['home1'], 'awayScore' => $_GET['away1']],
	['homeScore' => $_GET['home2'], 'awayScore' => $_GET['away2']],
	['homeScore' => $_GET['home3'], 'awayScore' => $_GET['away3']]
	];
	
foreach ($matchResults as $result) {
	$homeScore = $result['homeScore'];
	$awayScore = $result['awayScore'];
	
	$homeTeam->finalScore($homeScore, $awayScore);
}

$goalAverage = $homeTeam->getGoalAverage();
echo "Here's goal average for {$name}: {$goalAverage}";

?>