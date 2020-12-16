<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students";
            //預備陳述式
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