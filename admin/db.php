<?php
class Database
{
    public static $dbHost = "localhost";
    public static $dbName = "burger_code";
    public static $dbUser = "root";
    public static $dbUserPassword = '';
    private static $bdd = null;



    public static function connect()
    {
        try {
            self::$bdd = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbUserPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }

        return self::$bdd;
    }

    public static function disconnect()
    {
        self::$bdd = null;
    }
}
