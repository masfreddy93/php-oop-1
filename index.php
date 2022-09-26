<?php 
    
class Movie {
    public $title;
    public $directed_by;
    public $running_time;
    public $original_language;
    public $vote;
}

$bambi = new Movie();
$bambi -> title = "Bambi";
$bambi -> directed_by = "Aron Arone";
$bambi -> running_time = 117;
$bambi -> original_language = "de";
$bambi -> vote = 4.2;

$ryan = new Movie();
$ryan -> title = "Saving Private Ryan";
$ryan -> directed_by = "Steven Spielberg";
$ryan -> running_time = 169;
$ryan -> original_language = "en";
$ryan -> vote = 4.5;


var_dump($bambi, $ryan);