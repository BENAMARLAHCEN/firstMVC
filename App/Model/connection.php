<?php

class connection {
    private static $host = "localhost";
    private static $user = "root";
    private static $pwd = "";
    private static $dbName = "oop_mvc";
    

    public static function connect(){
        $pdo = new PDO('mysql:host='.self::$host.';dbname='.self::$dbName,self::$user,self::$pwd);
        return $pdo;
    }
} 