<?php

    $db = new PDO('mysql:host=localhost; dbname=gusrent;', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();
    $login = 'admin';
    $pass = '123';
    if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
    }
    if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "") {
        move_uploaded_file($_FILES["image"]["tmp_name"], "..\\img\\" . $_FILES["image"]["name"]);
        $fileName = "img\\" . $_FILES["image"]["name"];
    } else {
        $fileName = "img\\no-image.png";
    }

    $sql = "INSERT INTO news (title, img, content, category_id)
         VALUES (:header, :image, :content, :category_id)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(":header", $_POST["title"]);
    $stmt->bindValue(":image", $fileName);
    $stmt->bindValue(":content", $_POST["content"]);
    $stmt->bindValue(":category_id", $_POST["category_id"]); // Use the selected category_id value from the form
    $stmt->execute();

    header("Location: index.php");
