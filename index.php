<?php
$file = file_get_contents("https://api.binderbyte.com/v1/track?api_key=8e49f28e0f2f2cf56393c352613eec358e85fb7077ce6f7f453ebb826a7b1f6d&courier=jne&awb=8825112045716759");
$file = json_decode($file, true);

var_dump($file);
