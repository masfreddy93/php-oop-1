<?php 
    
class Movie {
    public $title;
    public $directed_by;
    public $running_time;
    public $original_language;
    public $vote;

    function __construct($title, $directed_by, $running_time, $original_language, $vote)
    {
        $this->title = $title;
        $this->directed_by = $directed_by;
        $this->running_time = $running_time;
        $this->original_language = $original_language;
        $this->vote = $vote;
    }
}

$bambi = new Movie('Bambi', 'Aron Arone', 117, 'de', 4.2);
// $bambi -> title = "Bambi";
// $bambi -> directed_by = "Aron Arone";
// $bambi -> running_time = 117;
// $bambi -> original_language = "de";
// $bambi -> vote = 4.2;

$ryan = new Movie('Saving Private Ryan', 'Steven Spielberg', 169, 'en', 4.5);
// $ryan -> title = "Saving Private Ryan";
// $ryan -> directed_by = "Steven Spielberg";
// $ryan -> running_time = 169;
// $ryan -> original_language = "en";
// $ryan -> vote = 4.8;


var_dump($bambi, $ryan);