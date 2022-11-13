<?php
    class EpisodeModel
    {
        public $id;
        public $name;
        public $airDate;
        public $episode;

        public function __construct($id, $name, $airDate, $episode){
            $this->id = $id;
            $this->name = $name;
            $this->airDate = $airDate;
            $this->episode = $episode;
        }
    }
?>