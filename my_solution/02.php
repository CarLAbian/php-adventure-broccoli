<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<?php

		$input = readline("Enter a string please: ");

			$reversed = strrev($input);

				if ($input == $reversed) 
				{
					echo "$input this string is a palindrome.\n";
					} else {
					echo "$input this string is not a palindrome.\n";
				}

?>