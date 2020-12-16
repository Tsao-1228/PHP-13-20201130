<?php
    require_once("conn.php");
    extract($_GET);
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="name">姓名</label>
            <input type="text" id="name" name="name" value="<?php echo $row["name"];?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $row["email"];?>">
        </div>
        <div>
            <label for="phone">電話</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row["phone"];?>">
        </div>
        <div>
            <label for="gender">性別</label>

            <input type="radio" name="gender" id="male" value="男" <?php echo $row["gender"]=="男"?"checked":""; ?>>
            <label for="male">男</label>

            <input type="radio" name="gender" id="female" value="女" <?php echo $row["gender"]=="女"?"checked":"";  ?>>
            <label for="female">女</label>
        </div>
        <div>
            <?php
                $skills = explode(",",$row["skills"]);
            ?>
            <label for="skills">專長</label>

            <input type="checkbox" name="skills[]" id="design" value="平面設計" <?php echo in_array("平面設計",$skills)?"checked":""; ?>>
            <label for="design">平面設計</label>

            <input type="checkbox" name="skills[]" id="web" value="網頁設計" <?php echo in_array("網頁設計",$skills)?"checked":""; ?>>
            <label for="web">網頁設計</label>

            <input type="checkbox" name="skills[]" id="premiere" value="影片剪輯" <?php echo in_array("影片剪輯",$skills)?"checked":""; ?>>
            <label for="premiere">影片剪輯</label>
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="edu">
                <option>--請選擇--</option>
                <option value="國小" <?php echo $row["edu"]=="國小"?"selected":"";  ?>>國小</option>
                <option value="國中" <?php echo $row["edu"]=="國中"?"selected":"";  ?>>國中</option>
                <option value="高中職" <?php echo $row["edu"]=="高中職"?"selected":"";  ?>>高中職</option>
                <option value="大專院校" <?php echo $row["edu"]=="大專院校"?"selected":"";  ?>>大專院校</option>
                <option value="研究所以上" <?php echo $row["edu"]=="研究所以上"?"selected":"";  ?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="content">內容</label>
            <textarea name="content" id="content" cols="60" rows="20"><?php echo $row["content"];?></textarea>
        </div>
        <input type="submit" value="送出">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>