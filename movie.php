<?php
class Movie {
    public $title;
    public $cast = [];
    public $poster;
    public $director;

    //constructor
    function __construct($title, $director, $poster = 'path') {
        $this->title = $title;
        $this->director = $director;
        $this->poster = $poster;
    }

    //methods

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setCast($array) {
       if(is_array($array)) {
           $this->cast = $array;
       } else {
           $this->cast[] = $array;
       } 
    }
}

$movie1 = new Movie("American Sniper", "Clint Eastwood");
$movie1->setCast(["Chris Kyle", "Scott McEwen", "James Defelice"]);

$movie2 = new Movie("Homefront", "Gary Fleder");
$movie2->setCast(["Jason Statham", "James Franco"]);

var_dump($movie1);
var_dump($movie2);