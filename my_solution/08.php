<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
 
<?php

			$input = readline("Please enter a string: ");

				$words = explode(" ", $input);

					$word_count = count($words);

			echo "The number of words entered in the string is $word_count.\n";

?>