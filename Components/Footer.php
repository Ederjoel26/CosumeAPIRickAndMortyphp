<?php
    class Footer
    {
        public static function Initialize($isInViews){
            $routeGithub = "Resources/github.png";
            $routeDiscord = "Resources/discord.png";
            $routeFacebook = "Resources/facebook.png";
            $routeScript = "node_modules/bootstrap/dist/js/bootstrap.min.js";
            if($isInViews){
                $routeGithub = "../Resources/github.png";
                $routeDiscord = "../Resources/discord.png"; 
                $routeFacebook = "../Resources/facebook.png";
                $routeScript = "../node_modules/bootstrap/dist/js/bootstrap.min.js";
            }
            echo 
                '<footer class="bg-dark p-1">
                    <div class="container-fluid">
                        <ul class="row justify-content-center">
                            <li class="col-auto">
                                <a href="https://github.com/Ederjoel26">
                                    <img src='.$routeGithub.' width="40" height="40" class="m-4"></img>
                                </a>
                            </li>
                            <li class="col-auto">
                                <a href="https://www.facebook.com/eder.yasikov/">
                                    <img src='.$routeFacebook.' width="40" height="40" class="m-4"></img>
                                </a>
                            </li>
                            <li class="col-auto">
                                <a href="https://discord.gg/CZYcRatk">
                                    <img src='.$routeDiscord.' width="40" height="40" class="m-4"></img>
                                </a>
                            </li>
                        </ul>
                        <center>
                            <p class="text-light fst-italic">
                                Developed by: Eder Joel Calzada Espinosa
                            </p>
                        </center>
                    <div>
                </footer>
                <script src='.$routeScript.'></script>
            </body>
            </html>';
        }
    }
?>

