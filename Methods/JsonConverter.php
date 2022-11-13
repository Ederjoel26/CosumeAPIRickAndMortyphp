<?php
    class JsonConverter
    {
        public static function GetFrom($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER,0);
            $datas = curl_exec($ch);
            curl_close($ch);
            $json = json_decode($datas);
            return $json;
        }
    }
?>