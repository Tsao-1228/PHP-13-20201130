<?php
    require_once("function.php");
    $result = register($_POST);
    
    switch($result){
        case 0:
            echo "<script>alert('會員申請成功，請重新登入')</script>";
            header("Refresh:0;url=index.php");
            break;
        case 1:
            echo "<script>alert('帳號已存在，請重新申請');</script>";
            header("refresh:0;url=index.php");
            break;

        default:
            echo "<script>alert('發生錯誤，請稍後再試!');</script>";
            header("refresh:0;url=index.php");  
    }