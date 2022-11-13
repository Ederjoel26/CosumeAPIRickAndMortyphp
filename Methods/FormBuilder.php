<?php
    class FormBuilder
    {
        public static function GetForm($route, $value){
            echo
                "<form action=$route method='get' class='col-auto'>
                    <input type='submit' name='id' value=$value class='btn btn-dark text-light'>
                </form>";
        }
    }
?>