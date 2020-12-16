<?php
	// try {
    //     require_once("pdo.php");
    //     extract($_POST);
    //     $skills = implode(",",$skills);
    //     $sql = "INSERT INTO students(name,email,phone,gender,edu,skills,content)VALUES(?,?,?,?,?,?,?)";
	// 	$stmt = $pdo->prepare($sql);
	// 	$stmt->execute([$name,$email,$phone,$gender,$edu,$skills,$content]);
        
	// }catch(PDOException $e){
    //     echo $e->getMessage();
	// }
	try {
        require_once("pdo.php");
        extract($_POST);
        $skills = implode(",",$skills);
        $sql = "INSERT INTO students(name,email,phone,gender,edu,skills,content)
				VALUES(:name,:email,:phone,:gender,:edu,:skills,:content)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":phone",$phone);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":gender",$gender);
		$stmt->bindParam(":edu",$edu);
		$stmt->bindParam(":skills",$skills);
		$stmt->bindParam(":content",$content);
		$stmt->execute();
        
	}catch(PDOException $e){
        echo $e->getMessage();
	}
	header("location:index.php");
