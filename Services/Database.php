<?php
namespace Services;
use PDO;
class Database{
    private static string $localhost = "localhost";
    private static string $dbName = "istichara";
    private static string $password = "";
    private static string $userName = "root";
    private static ?PDO $pdo = null; 
    public static function getCon(){
    if(!self::$pdo){
        try{
        self::$pdo = new PDO("mysql:host=".self::$localhost.";dbname=".self::$dbName.";charset=utf8",
                                self::$userName,self::$password);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // echo "connexion khdama asidi";
        }catch(PDOException $e){
        die("connexion failed :" . $e->getMessage());
        }
    }
    return self::$pdo;
    }

}
$con = Database::getCon();