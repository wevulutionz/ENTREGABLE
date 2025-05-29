<?php
class DB
{
    public static function conection()
    {
        $url = 'mysql:host=localhost;dbname=gestiondb';
        $user = "root";
        $pass = "";
        $cn = new PDO($url, $user, $pass);
        return $cn;
    }
}
