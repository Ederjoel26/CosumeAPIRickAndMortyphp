<?php
    include "Models/CharacterModel.php";
    include "Methods/CardBuilder.php";
    include "Methods/JsonConverter.php";
    include "Methods/TableBuilder.php";
    include "Methods/CharacterEP.php";
    require("Components/Header.php");
    require("Components/Footer.php");

?>

<?php
    Header::Initialize(FALSE);
?>
<div class="bg-light container">
    <center>
        <h1 class="text-dark fst-italic m-2 "> Welcome to the Rick and Morty viewer</h1>
    </center>
    <br>
    <div class='row justify-content-center'>
        <?php
            for($i = 0; $i < 3; $i++)
                CharacterEP::getCharacterRandomCard();
        ?>
    </div>
    <br>
    <center>
        <h3 class="text-dark">Characters in episode one</h3>
    </center>
    <?php 
        $arrayCharacters = CharacterEP::getCharactersInEpisode("https://rickandmortyapi.com/api/episode/1");
        TableBuilder::showTableCharacter($arrayCharacters, FALSE);
    ?>
</div>
<?php
    Footer::Initialize(FALSE);
?>