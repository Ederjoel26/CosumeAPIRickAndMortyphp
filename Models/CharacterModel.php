<?php
    class CharacterModel
    {
        public $id;
        public $name;
        public $status; 
        public $gender;
        public $origin;
        public $location;
        public $species;
        public $img;

        public function __construct($id, $name, $status, $gender, $species, $origin, $location, $img){
            $this->id = $id;
            $this->name = $name;
            $this->status = $status;
            $this->gender = $gender;
            $this->species = $species;
            $this->origin = $origin;
            $this->location = $location;
            $this->img = $img;
        }
    }
?>