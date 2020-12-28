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
    function logout(){
        session_start();
        // session_destroy();
        unset($_SESSION["AUTH"]);
    }
    function register($post){
        try {
            extract($post);
            require_once("pdo.php");

            $sql_check = "SELECT * FROM users WHERE user = ?";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->execute([$user]);
            $row_num = $stmt_check->rowCount();
            if($row_num > 0){
                return 1;
            }
            $sql = "INSERT INTO users(user,pw)VALUES(?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw]);
            return 0;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function access_denied(){
        session_start();
        if(!$_SESSION["AUTH"]){
            header("location:index.php");
        }
    }
