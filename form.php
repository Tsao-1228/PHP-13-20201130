<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="res.php" method="post">
        <div>
            <label for="name">姓名</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="phone">電話</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div>
            <label for="gender">性別</label>

            <input type="radio" name="gender" id="male" value="男">
            <label for="male">男</label>

            <input type="radio" name="gender" id="female" value="女">
            <label for="female">女</label>
        </div>
        <div>
            <label for="skills">專長</label>

            <input type="checkbox" name="skills[]" id="design" value="平面設計">
            <label for="design">平面設計</label>

            <input type="checkbox" name="skills[]" id="web" value="網頁設計">
            <label for="web">網頁設計</label>

            <input type="checkbox" name="skills[]" id="premiere" value="影片剪輯">
            <label for="premiere">影片剪輯</label>
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>