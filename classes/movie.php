<?php

    class Movie {
        private $title;
        private $director;
        private $actors = [];
        // private $trama;
        // private $producers = [];
        // private $company;
        // private $releaseYear;
        // private $companyEmail;
        
        function __construct($_title, $_director, $_actors)
        {
            $this->title = $_title;
            $this->director = $_director;
            $this->actors = $_actors;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getTrama(){
            return $this->trama;
        }

        public function getActors(){
            return $this->actors;
        }

        public function addActor($actor){
            return $this->actors[] = $actor;
        }
     
    }
?>