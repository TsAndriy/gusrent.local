<?php
include('include/db.php');
    function get_menu() {
        global $conn;
        $sql = "SELECT * FROM menu";

        $result = mysqli_query($conn,$sql);
        $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $menus;
    }
    function get_news() {
        global $conn;
        $sql = "SELECT * FROM news";
        $result = mysqli_query($conn, $sql);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $news;
    }
