<?php
    try{
        require_once("pdo.php");
        extract($_POST);
        $skills = implode(",",$skills);
    
        $sql = "UPDATE students SET 
                name    = ?,
                email   = ?,
                phone   = ?,
                gender  = ?,
                edu     = ?,
                skills  = ?,
                content = ?
                WHERE id = ? ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$email,$phone,$gender,$edu,$skills,$content,$id]);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    header("location:index.php");
