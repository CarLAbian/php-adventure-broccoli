<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<?php

			$input = readline("Please enter a list of numbers separated by a space: ");

			$numbers = explode(" ", $input);

			$sum = 0;

				foreach ($numbers as $number) 
				{
					$sum += $number;
				}

			$count = count($numbers);

			$average = $sum / $count;

			echo "The resulted average of the numbers is: $average\n";

?>