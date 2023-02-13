<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->

<?php

			$length = readline("Please enter the length of the password: ");

			$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;':\",.<>/?`~";

			$password = "";

				for ($i = 0; $i < $length; $i++) 
				{
					$password .= $characters[rand(0, strlen($characters) - 1)];
				}

			echo "The password that you entered and generated is: $password\n";

?>