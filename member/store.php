<?php
    require_once("function.php");
    register($_POST);
    echo "<script>alert('會員申請成功，請重新登入')</script>";
    header("Refresh:0;url=index.php");