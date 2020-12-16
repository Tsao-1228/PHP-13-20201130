<?php
    require_once("conn.php");
    
    
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $gender = $_POST["gender"];
    // $edu = $_POST["edu"];
    // $skills = implode(",",$_POST["skills"]);
    // $content = $_POST["content"];
    
    extract($_POST);
    $skills = implode(",",$skills);

    $sql = "INSERT INTO students(name,email,phone,gender,edu,skills,content)
            VALUES('$name','$email','$phone','$gender','$edu','$skills','$content')";
    
    mysqli_query($conn, $sql);

    header("location:index.php");