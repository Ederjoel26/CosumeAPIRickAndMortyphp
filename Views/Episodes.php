<?php
    include "../Models/EpisodeModel.php";
    include "../Methods/CardBuilder.php";
    include "../Methods/JsonConverter.php";
    include "../Methods/FormBuilder.php";
    include "../Methods/EpisodeCH.php";
    include "../Methods/TableBuilder.php";
    require("../Components/Header.php");
    require("../Components/Footer.php");
?>

<?php
    Header::Initialize(TRUE);
?>
<div class="bg-light container">
    <center>
        <h1 class="text-dark fst-italic m-3">
            Rick and Morty episodes
        </h1>
    </center>
    <?php
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;
        $arrayCharacters = EpisodeCH::getAllEpisodes("https://rickandmortyapi.com/api/episode/?page=$id");
        TableBuilder::showTableEpisode($arrayCharacters);
    ?>
    <section class="row justify-content-center m-3">
        <center>
            <h4 class="text-dark fst-italic m-2">List of episode pages</h4>
        </center>
        <?php
            for($i = 1; $i <= 3; $i++){
                FormBuilder::GetForm("Episodes.php", $i);
            }
        ?>
    </section>
</div>
<?php
    Footer::Initialize(TRUE);
?>