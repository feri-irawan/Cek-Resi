<?php
//login
$file = file_get_contents("https://resi.id/api/auth/login");
$file = json_decode($file, true);

var_dump($file);
