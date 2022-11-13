<?php
    include "../Methods/CardBuilder.php";
    include "../Methods/JsonConverter.php";
    include "../Models/CharacterModel.php";
    include "../Methods/FormBuilder.php";
    include "../Methods/CharacterEP.php";
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
            Rick and Morty characters
        </h1>
    </center>
    <?php
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;
        $arrayCharacters = CharacterEP::getAllCharacters("https://rickandmortyapi.com/api/character/?page=$id");
        TableBuilder::showTableCharacter($arrayCharacters, TRUE);
    ?>
    <section class="row justify-content-center m-3 container-fluid">
        <center>
            <h4 class="text-dark fst-italic m-2">List of character pages</h4>
        </center>
        <?php
            $start = $id < 7 ? 2 : $id - 5;
            $end = $id > 36 ? 41 : $id + 5;
            FormBuilder::GetForm("Characters.php", 1);
            for($i = $start; $i <= $end; $i++)
                FormBuilder::GetForm("Characters.php", $i);
            FormBuilder::GetForm("Characters.php", 42);
        ?>
    </section>
</div>
<?php
    Footer::Initialize(TRUE);
?>