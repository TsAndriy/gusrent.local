<?php
    $db = new PDO('mysql:host=localhost; dbname=gusrent;', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();
    $login = 'admin';
    $pass = '123';
    if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
        header('location: ../login/index.php');
    }
    //обробника для завантаження файлу
    if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
        move_uploaded_file($_FILES["image"]["tmp_name"], "..\\img\\" . $_FILES["image"]["name"]);
        $fileName = "img\\" . $_FILES["image"]["name"];
    } else {
        $fileName = "img\\no-image.png";
    }
    $sql = "UPDATE news SET 
     title = :header, content = :content, img = :image, category_id = :category_id 
     WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":header", $_POST["title"]);
    $stmt->bindParam(":content", $_POST["content"]);
    $stmt->bindParam(":image", $fileName);
    $stmt->bindParam(":category_id", $_POST["category_id"]);
    $stmt->execute();
    header("Location: index.php");
