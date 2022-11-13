<?php
    class EpisodeCH
    {
        public static function getAllEpisodes($url){
            $arrayEpisodes = [];
            $json = JsonConverter::GetFrom($url);
            foreach($json->results as $value){
                $episodeObject = new EpisodeModel($value->id, $value->name, $value->air_date, $value->episode);
                array_push($arrayEpisodes, $episodeObject);
            }
            return $arrayEpisodes;
        }

        public static function showMainEpisodeCard($urlCharacter){
            $json = JsonConverter::GetFrom($urlCharacter);
            $episode = new EpisodeModel($json->id, $json->name, $json->air_date, $json->episode);
            CardBuilder::SimplyEpisodeCard($episode);
        }
        
        public static function getEpisodesInCharacter($urlCharacter){
            $arrayEpisodes = [];
            $json = JsonConverter::GetFrom($urlCharacter);
            foreach($json->episode as $episode){
                $episodeJson = JsonConverter::GetFrom($episode);
                $episodeObject = new EpisodeModel($episodeJson->id, $episodeJson->name, $episodeJson->air_date, $episodeJson->episode);
                array_push($arrayEpisodes, $episodeObject);
            }
            return $arrayEpisodes;
        }
    }
?>