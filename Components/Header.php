<?php
    class Header
    {
        public static function Initialize($isInViews){
            $routeNode = "node_modules/bootstrap/dist/css/bootstrap.min.css";
            $routeFavicon = "Resources/rick.png";
            $routeSearch = "Views/Search.php";
            $routeStyle = "Stylex.css";
            $routeMainPage = "index.php";
            $routeImgMorty = "Resources/morty.png";
            $routeEpisodes = "Views/Episodes.php";
            $routeCharacters = "Views/Characters.php";
            $routePaypal = "Resources/paypal.png";
            if($isInViews){
                $routeNode = "../node_modules/bootstrap/dist/css/bootstrap.min.css";
                $routeFavicon = "../Resources/rick.png";
                $routeStyle = "../Stylex.css";
                $routeSearch = "../Views/Search.php";
                $routeMainPage = "../index.php";
                $routeImgMorty = "../Resources/morty.png";
                $routeEpisodes = "../Views/Episodes.php";
                $routeCharacters = "../Views/Characters.php";
                $routePaypal = "../Resources/paypal.png";
            }
            echo '<html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href='.$routeNode.' crossorigin="anonymous">
                    <link rel="shortcut icon" href='.$routeFavicon.' type="image/x-icon">
                    <link rel="stylesheet" href='.$routeStyle.'>
                    <title>Rick and Morty</title>
                </head>
                <body class="bg-light">
                    <header class="bg-dark">  
                        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
                            <div class="container-fluid">
                                <a href='.$routeMainPage.' class="nav-link px-lg-3 py-3 py-lg-4 text-light">
                                    <img src='.$routeImgMorty.' width="50" height="50">
                                    Home
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link px-lg-3 py-3 py-lg-4" aria-current="page" href='.$routeSearch.'>
                                                Search
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-lg-3 py-3 py-lg-4" aria-current="page" href='.$routeEpisodes.'>Episodes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-lg-3 py-3 py-lg-4" aria-current="page" href='.$routeCharacters.'>Characters</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-lg-3 py-3 py-lg-4" aria-current="page" href="https://www.paypal.com/paypalme/Eddydotnet">
                                                Support me
                                                <img src='.$routePaypal.' width="25" height="25">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>   
                    </header>';
        }
    }
?>