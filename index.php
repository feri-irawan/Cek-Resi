<?php
//login
$email = "pixwebsite1998@gmail.com";
$pass  = "@qazxcvbn123";

$file = file_get_contents("https://resi.id/api/auth/login?email=$email&password=$pass");
$file = json_decode($file, true);

var_dump($file);
