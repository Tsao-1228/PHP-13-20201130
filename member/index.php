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
        <h2><?php echo $_SESSION["AUTH"]["user"]; ?> 你好</h2>
        <a href="member.php">會員資料</a>
        <a href="logout.php">登出</a>
    <?php }else{ ?>
        <h2>訪客你好</h2>
        <a href="register.php">申請會員</a>
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
    <?php } ?>
        
    
</body>
</html>