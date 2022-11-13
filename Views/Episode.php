<?php
    include "../Models/CharacterModel.php";
    include "../Models/EpisodeModel.php";
    include "../Methods/CardBuilder.php";
    include "../Methods/JsonConverter.php";
    include "../Methods/TableBuilder.php";
    include "../Methods/EpisodeCH.php";
    include "../Methods/CharacterEP.php";
    require("../Components/Header.php");
    require("../Components/Footer.php");
?>

<?php
    Header::Initialize(TRUE);
?>
<div class="bg-light container">
    <center>
        <?php
            $id = $_GET["id"];
            EpisodeCH::showMainEpisodeCard("https://rickandmortyapi.com/api/episode/$id");
        ?>
    </center>
    <br>
    <section>
        <center>
            <h4 class="text-dark fst-italic">Characters appearing in the episode</h4>
        </center>
        <div>
            <?php
                $id = $_GET["id"];
                $arrayCharacters = CharacterEP::getCharactersInEpisode("https://rickandmortyapi.com/api/episode/$id");
                TableBuilder::showTableCharacter($arrayCharacters, TRUE);
            ?>
        </div>
    </section>
</div>
<?php
    Footer::Initialize(TRUE);
?>