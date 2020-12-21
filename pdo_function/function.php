<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students";
            //預備陳述式
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show($get){
        try{
            require_once("pdo.php");
            extract($get);
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($post){
        try {
            require_once("pdo.php");
            extract($post);
            $skills = implode(",",$skills);
            $sql = "INSERT INTO students(name,email,phone,gender,edu,skills,content)VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$email,$phone,$gender,$edu,$skills,$content]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($post){
        try {
            require_once("pdo.php");
            extract($post);
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }