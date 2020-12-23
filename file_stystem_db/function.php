<?php
    function showAll(){
        try {

            require_once("pdo.php");
            $sql = "SELECT * FROM photos";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function uploadIMG($files){
        extract($files);
        extract($img);
        
        switch($type){
            case "image/jpeg":
                $img_name = md5(uniqid()).".jpg";
                break;
            case "image/png":
                $img_name = md5(uniqid()).".png";
                break;
            case "image/gif":
                $img_name = md5(uniqid()).".gif";
                break;
            default:
                echo "請上傳正確的檔案類型";
                return ;
        }
        if(!is_dir("images")){
            mkdir("images");
        }
        
        $target = "images/{$img_name}";
        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                echo "上傳成功";
                return $img_name;
            }else{
                echo "上傳失敗";
            }
        }else{
            echo "上船錯誤";
        }
    }
    function store($img_name){
        require_once("pdo.php");
        $sql = "INSERT INTO photos(img_name)VALUES(?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$img_name]);
    }
    function delete($post){
        require_once("pdo.php");
        extract($post);
        unlink("images/{$img_name}");
        
        $sql = "DELETE FROM photos WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }
