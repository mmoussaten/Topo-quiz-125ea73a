<?php

$punten = 0;
$quiz = array('Japan' => "Tokyo",
    'Mexico' => "Mexico City",
    'USA' => "New York City",
    'India' => "Mumbai",
    'Korea' => "Seoul",
    'China' => "Shanghai",
    'Nigeria' => "Lagos",
    'Argentina' => "Buenos Aires",
    'Egypt' => "Caira",
    'UK' => "London");

        echo "laten we beginnen aan een toffe Quiz \n";
        readline();

foreach ($quiz as $key => $value) {
    echo "Wat is de hoofdstad van " . $key . PHP_EOL;
    $antwoord = readline();
    if ($antwoord == $value) {
        echo "Correct!" . PHP_EOL;
        $punten++;
    }
    else{
        echo "Helaas, Het correcte antwoord is: " . $value . PHP_EOL;
    }
}
echo "Je hebt " . $punten . "van de 10 goed geraden!";