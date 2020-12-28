<?php
    function auth($post){
        try{
            session_start();
            require_once("pdo.php");
            extract($post);
            if($user=="" || $pw ==""){
                return 2;
            }
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(!$row){
                return 1;
            }
            
            if($row["pw"] === $pw){
                $_SESSION["AUTH"] = $row;
                return 0;
            }else{
                return 1;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }