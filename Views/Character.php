<?php
    include "../Models/CharacterModel.php";
    include "../Models/EpisodeModel.php";
    include "../Methods/CharacterEP.php";
    include "../Methods/EpisodeCH.php";
    include "../Methods/CardBuilder.php";
    include "../Methods/JsonConverter.php";
    include "../Methods/TableBuilder.php";
    require("../Components/Header.php");
    require("../Components/Footer.php");
?>

<?php
    Header::Initialize(TRUE);
?>
<div class="bg-light container">
    <div class='row justify-content-center'>
        <?php 
            $id = $_GET["id"];
            CharacterEP::showMainCharacterCard("https://rickandmortyapi.com/api/character/$id");
        ?>
    </div>
    <br>
    <center>
        <h4 class="text-dark fst-italic">Episodes where the character appears</h4>
    </center>
    <?php
        $id = $_GET["id"];
        $arrayEpisodes = EpisodeCH::getEpisodesInCharacter("https://rickandmortyapi.com/api/character/$id");
        TableBuilder::showTableEpisode($arrayEpisodes);
    ?>
</div>
<?php
    Footer::Initialize(TRUE);
?>