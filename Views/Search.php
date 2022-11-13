<?php
    include "../Models/CharacterModel.php";
    include "../Methods/CharacterEP.php";
    include "../Methods/CardBuilder.php";
    include "../Methods/JsonConverter.php";
    include "../Methods/TableBuilder.php";
    require("../Components/Header.php");
    require("../Components/Footer.php");
?>

<?php
    Header::Initialize(TRUE);
?>
<div class="container">
    <form method="post" action="Search.php">
        <center>
            <input class="rounded m-3 p-2" type="text" required name="name" placeholder="Character name">
            <input class="btn btn-dark text-light" type="submit" name="Search" value="  Search  ">
        </center>
    </form>
    <div>   
        <?php
            if(isset($_POST["name"])){
                $arrayCharacters = CharacterEP::SearchByName($_POST["name"]);
                if($arrayCharacters == null)
                    echo 
                        "<center>
                            <h1 class='fs-1 fst-italic m-5'>
                                No results found for your search
                            </h1>
                        </center>";
                else if($arrayCharacters[0] == "Invalid"){
                    echo"<center>
                            <h1 class='fs-1 fst-italic m-5'>
                                Invalid characters when searching, please rectify that the added text is only letters without any characters, numbers or spaces.
                            </h1>
                        </center>";
                }
                else{
                    TableBuilder::showTableCharacter($arrayCharacters, TRUE);
                }
            }
        ?>
    </div>
</div>
<?php
    Footer::Initialize(TRUE);
?>