<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 
 <?php

		$input = readline("Please enter a list of numbers separated by a space: ");

			$numbers = explode(" ", $input);

			$sum = 0;

			foreach ($numbers as $number) 
			{
				$sum += intval($number);
			}

			echo "The sum total of these numbers is $sum.";

?>