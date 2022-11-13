<?php
    class TableBuilder 
    {
        public static function showTableEpisode($episodes){
            $counter = 0;
            while($counter < count($episodes)){
                echo"<div class='row justify-content-center'>";
                for($j = 0; $j < 3; $j++){
                    CardBuilder::EpisodeCard($episodes[$counter]);
                    $counter++;
                    if($counter == count($episodes)) 
                        break;
                }
                echo "</div>";
            }
        }
        
        public static function showTableCharacter($episodes, $isInViews){
            $counter = 0;
            while($counter < count($episodes)){
                echo"<div class='row justify-content-center'>";
                for($j = 0; $j < 3; $j++){
                    CardBuilder::SimplyCharacterCard($episodes[$counter], $isInViews);
                    $counter++;
                    if($counter == count($episodes)) 
                        break;
                }
                echo "</div>";
            }
        }
    }
?>