<?php
class Team
{
	private $name="";
	private $totalGames=0;
	private $totalPoints=0;
	private $totalGoals=0;
	
	public function __construct($name)
	{
		$this->name=$name;
		
	}
	
	public function finalScore($homeScore, $awayScore)
	{
		$this->totalGames++;
		$this->totalGoals += $homeScore;
		
		if ($homeScore > $awayScore) {
            $this->totalPoints += 3;
        } elseif ($homeScore == $awayScore) {
            $this->totalPoints += 1;
        }


    }
		public function getGoalAverage()
	{
			if ($this->totalGames == 0) {
				return 0.0;
			}
			return $this->totalGoals / $this->totalGames;
	} 


}
?>
	
	