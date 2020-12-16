<?php
	try {
        require_once("pdo.php");
        extract($_POST);
        $skills = implode(",",$skills);
        $sql = "INSERT INTO students(name,email,phone,gender,edu,skills,content)VALUES(?,?,?,?,?,?,?)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$name,$email,$phone,$gender,$edu,$skills,$content]);
        
	}catch(PDOException $e){
        echo $e->getMessage();
	}
	header("location:index.php");
