<!-- chapter 2 practice pages 85 .... -->
<!DOCTYPE html>
<html style="background-color: slateblue; background-image: url('play.jpg'); background-size: cover;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dice Roll</title>
</head>
<body style="margin:auto; max-width: 960px; background-color: skyblue; background-image: url('bk.jpg'); background-size: cover;">
	<h1 style="text-align: center; text-decoration: underline; font-family: cursive; text-shadow: antiquewhite; color: mediumpurple; font-size: 3em;">Let's Roll Some Dice!</h1>
	<?php
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
		// definition of the checkForDoubles() function
		function CheckForDoubles($Die1, $Die2){

			global $FaceNamesSingular;
			global $FaceNamesPlural;
			$ReturnValue = false;
			if($Die1 == $Die2){
				echo "The roll was double ", $FaceNamesPlural[$Die1 - 1], ".<br/>";
				$ReturnValue = true;
			}
			else {
				echo "The roll was a ", $FaceNamesSingular[$Die1 - 1], " and a ",
				 $FaceNamesSingular[$Die2 -1], ".<br/>";
				$ReturnValue = false;
			}
			return $ReturnValue;
		}// end of CheckForDoubles() function

		// definition of the DisplayScoreText() function
		function DisplayScoreText($Score){
			switch($Score){
				case 2:
					echo "You rolled snake eyes!<br/>";
					break;
				case 3:
					echo "You rolled a loose deuce!<br>";
					break;
				case 5:
					echo "You rolled a fever five!<br/>";
				break;
				case 7:
					echo "You rolled a natural!<br/>";
					break;
				case 9:
					echo "You rolled a nina!<br/>";
					break;
				case 11:
					echo "You rolled a yo!<br/>";
					break;
				case 12:
					echo "You rolled boxcars!<br/>";

			}
		}// end of DisplayScoreText() function

		$Dice = array();
		$DoublesCount = 0;
		$RollNumber = 1;

		while($RollNumber <= 5){
			$Dice[0] = rand(1, 6);
			$Dice[1] = rand(1,6);
			$Score = $Dice[0] + $Dice[1];
			echo "<p>";
			echo "The total score for $RollNumber was $Score.<br/>";
			$Doubles = CheckForDoubles($Dice[0], $Dice[1]);
			DisplayScoreText($Score);
			echo "</p>";
			// check the $Doubles variable so we can increase $DoubleCount
			if($Doubles){
				++$DoublesCount;
			}
			++$RollNumber;
		} // end of the while loop

		// write a summary of how many doubles the game rolled at the end
		echo "<p>Doubles occured on $DoublesCount of the five rolls.</p>";
	?>

</body>
</html>