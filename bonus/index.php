<?php 
    
include __DIR__ . '/app/Movie.php';


$bambi = new Movie('Bambi', 'Aron Arone', 117, 'de', 4.2);
// $bambi -> title = "Bambi";
// $bambi -> directed_by = "Aron Arone";
// $bambi -> running_time = 117;
// $bambi -> original_language = "de";
// $bambi -> vote = 4.2;

$ryan = new Movie('Saving Private Ryan', 'Steven Spielberg', 169, 'en', 'ottimo');



var_dump($bambi, $ryan);
