<?php
    class CharacterEP
    {
        public static function getCharactersInEpisode($urlEpisode){
            $arrayCharacters = [];
            $json = JsonConverter::GetFrom($urlEpisode);
            foreach($json->characters as $key => $value){
                $character = JsonConverter::GetFrom($value);
                $characterObject = new CharacterModel($character->id, $character->name, $character->status, $character->gender, $character->species, $character->origin->name, $character->location->name, $character->image);
                array_push($arrayCharacters, $characterObject);
            }
            return $arrayCharacters;
        }

        public static function getAllCharacters($url){
            $arrayCharacters = [];
            $json = JsonConverter::GetFrom($url);
            foreach($json->results as $character => $value){
                $characterObject = new CharacterModel($value->id, $value->name, $value->status, $value->gender, $value->species, $value->origin->name, $value->location->name, $value->image);
                array_push($arrayCharacters, $characterObject);
            }
            return $arrayCharacters;
        }
        
        public static function getCharacterRandomCard(){
            $numRandom = rand(1, 826);
            $json = JsonConverter::GetFrom("https://rickandmortyapi.com/api/character/$numRandom");
            $Character = new CharacterModel($json->id, $json->name, $json->status, $json->gender, $json->species, $json->origin->name, $json->location->name, $json->image);
            CardBuilder::SimplyCharacterCard($Character, FALSE);
        }

        public static function showMainCharacterCard($urlCharacter){
            $json = JsonConverter::GetFrom($urlCharacter);
            $Character = new CharacterModel($json->id, $json->name, $json->status, $json->gender, $json->species, $json->origin->name, $json->location->name, $json->image);
            CardBuilder::CharacterCard($Character);
        }

        public static function SearchByName($name){
            $arrayCharacters = [];
            $onlyLetters = "/^[A-Za-z]+$/";
            if(!preg_match($onlyLetters, $name))
            {
                $arrayCharacters[0] = "Invalid";
                return $arrayCharacters;
            }
            $json = JsonConverter::GetFrom("https://rickandmortyapi.com/api/character/?name=$name");
    
            if(property_exists($json, "error")) 
                return null;
    
            foreach($json->results as $character => $value){
                $characterObject = new CharacterModel($value->id, $value->name, $value->status, $value->gender, $value->species, $value->origin->name, $value->location->name, $value->image);
                array_push($arrayCharacters, $characterObject);
            }
            return $arrayCharacters;    
        }
    }   
?>