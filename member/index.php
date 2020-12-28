<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION["AUTH"])){ ?>
        <h1>已登入</h1>
    <?php }else{ ?>
        <h1>
            已登出
        </h1>
    <?php } ?>
        
    <form action="auth.php" method="post">
        <div>
            <label>帳號</label>   
            <input type="text" name="user">
        </div>
        <div>
            <label>密碼</label>   
            <input type="password" name="pw">
        </div>
        <input type="submit" value="登入">
    </form>
</body>
</html>