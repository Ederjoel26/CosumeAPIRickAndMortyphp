<?php
    class CardBuilder
    {
        public static function SimplyCharacterCard($character, $isInViews){
            $route = "";
            if($isInViews){
                $route = "../Views/Character.php";
            }else{
                $route = "Views/Character.php";
            }
            echo
                "<form action=$route method='get' class='col-auto card m-2 bg-dark' id='cardCharacter'>
                    <div class='card-body'>
                        <img src= $character->img class='border-0 img-thumbnail' id='imgCharacter'>
                        <center>
                            <h4 class='card-title text-light fst-italic'>
                                $character->name
                            </h4>
                        </center>
                        <p class='card-text text-light'>
                            <b>Status:</b> $character->status <br>
                            <b>Gender:</b> $character->gender <br><br>
                            <center>
                                <input type='submit' value='View details' id='button' class='btn'>
                            </center>
                        </p>
                        <input type='text' name='id' value=$character->id hidden>
                    </div>
                </form>";
        }

        
        public static function CharacterCard($character){
            echo 
            "<div class='card-body bg-dark rounded m-3 p-3 shadow-lg col-auto' id='cardCharacter'>
                <img src= $character->img class='border-0 img-thumbnail' id='imgCharacter'>
                <center>
                    <h4 class='card-title text-light fst-italic'>
                        $character->name
                    </h4>
                </center>
                <p class='card-text text-light'>
                    <b>Status:</b> $character->status <br>
                    <b>Gender:</b> $character->gender <br>
                    <b>Species:</b> $character->species <br>
                    <b>First seen in:</b> $character->origin <br>
                    <b>Last know location:</b> $character->location <br>
                </p>
                <input type='text' name='id' value=$character->id hidden>
            </div>";
        }
                    
        public static function SimplyEpisodeCard($episode){
            echo 
                "<div class='card-body bg-dark rounded m-3 p-3 shadow-lg col-auto' id='cardEpisode'>
                    <div class='card-body'>
                    <center>
                        <h4 class='card-title text-light fst-italic'>
                            $episode->name
                        </h4>
                    </center>
                    <br>
                    <p class='card-text text-light'>
                        <b>Air date:</b> $episode->airDate <br>
                        <b>Episode:</b> $episode->episode <br><br>
                    </p>
                    <input type='text' name='id' value=$episode->id hidden>
                </div>";
        }
        public static function EpisodeCard($episode){
            echo 
                "<form action='Episode.php' method='get' class='col-auto card m-2 bg-dark' id='cardEpisode'>
                    <div class='card-body'>
                    <center>
                        <h4 class='card-title text-light fst-italic'>
                            $episode->name
                        </h4>
                    </center>
                    <p class='card-text text-light'>
                        <b>Air date:</b> $episode->airDate <br>
                        <b>Episode:</b> $episode->episode <br><br>
                        <center>
                            <input type='submit' value='View details' class='btn' id='button'>
                        </center>
                    </p>
                    </div>
                    <input type='text' name='id' value=$episode->id hidden class='btn btn-light'>
                </form>";
        }
    }
?>