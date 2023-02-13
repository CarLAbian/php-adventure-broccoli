<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<?php

	$input = readline("Enter a letter: ");

		if 
			(
				$input == 'a' || $input == 'e' || $input == 'i' || $input == 'o' || $input == 'u' ||
				$input == 'A' || $input == 'E' || $input == 'I' || $input == 'O' || $input == 'U'
			) 
		{
			echo "$input: well yeah, this is a vowel.\n";
		} else {
			echo "$input: bruh, this is a consonant.\n";
		}

?>