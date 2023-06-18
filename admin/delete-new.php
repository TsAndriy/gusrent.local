<?php
    include_once "../include/db.php";
    include "../include/functions.php";
    $post_id = $_GET['post_id'];
    if (!is_numeric($post_id)) exit();
    $post = delete_new($post_id);
    header('location: index.php');
    function delete_new ($post_id) {
        global $conn;
        $post_id = mysqli_real_escape_string($conn, $post_id);
        $sql = "DELETE FROM news WHERE id =" .$post_id;
        $result = mysqli_query($conn, $sql);
    }