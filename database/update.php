<?php
    require_once("conn.php");
    extract($_POST);
    $skills = implode(",",$skills);

    $sql = "UPDATE students SET 
            name    = '$name',
            email   = '$email',
            phone   = '$phone',
            gender  = '$gender',
            edu     = '$edu',
            skills  = '$skills',
            content = '$content'
            WHERE id = {$id}";
    
    mysqli_query($conn,$sql);
    header("location:index.php");