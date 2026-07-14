<?php


$host = "db5020634127.hosting-data.io";


$dbname = "dbs15759506";


$user = "dbu3535499";


$pass = "1#*NewPassWord";


try {


    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass
    );


    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


} catch(PDOException $e){


    die(
        "Database Connection Failed: "
        . $e->getMessage()
    );


}