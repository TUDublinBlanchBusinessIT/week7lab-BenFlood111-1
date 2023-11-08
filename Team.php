<?php
class Team
{
	private $name="";
	private $totalGames=0;
	private $totalPoints=0;
	private $totalGoals=0;
	
	public function __construct($parm1)
	{
		$this->name=$name;
		
	}
	
	public function finalScore($homeScore, $awayScore)
	{
		$this->totalGames++;
		$this->totalGoals += $homeTeamScore;
		
		if ($homeTeamScore > $opposingTeamScore) {
            $this->totalPoints += 3;
        } elseif ($homeTeamScore == $opposingTeamScore) {
            $this->totalPoints += 1;
        }


    }
		public function getGoalAverage()
	(
			if ($this->totalGames == 0) {
				return 0.0;
			}
			return $this->totalGoals / $this->totalGames;
	)


}
?>
	
	