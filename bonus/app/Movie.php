<?php

class Movie {
    public $title;
    public $directed_by;
    public $running_time;
    public $original_language;
    public $vote;
    public $poster;
    public $actors;

    function __construct($title, $directed_by, $running_time, $original_language, $vote, $poster, $actors = [])
    {
        $this->title = $title;
        $this->directed_by = $directed_by;
        $this->running_time = $running_time;
        $this->original_language = $original_language;
        $this->voteIsNumeric($vote);
        $this->poster = $poster;
        $this->actors = $actors;
    }

    public function voteIsNumeric($vote){
        if(is_numeric($vote))
            $this->vote = $vote;
    }
}

