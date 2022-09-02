<?php

    class Movie {
        private $title;
        private $trama;
        private $director;
        // private $actors = [];
        // private $producers = [];
        // private $company;
        // private $releaseYear;
        // private $companyEmail;
        
        function __construct($_title, $_trama, $_director)
        {
            $this->title = $_title;
            $this->trama = $_trama;
            $this->company = $_director;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getTrama(){
            return $this->trama;
        }

        public function getDirector(){
            return $this->director;
        }
     
    }
?>