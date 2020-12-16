<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "qwerty";
    $db_charset = "utf8mb4";

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $pdo = new PDO($dsn,$db_user,$db_pw);
    

    // 例外處理,錯誤處理,異常處理
    try {
        $pdo = new PDO($dsn,$db_user,$db_pw);
        //啟用pdo類別
    }catch(PDOException $e){
        echo $e->getMessage();
    }