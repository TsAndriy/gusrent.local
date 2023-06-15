<?php
if (!isset($conn)) {
    include('include/db.php');
}
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
    function get_post_by_id ($post_id) {
        global $conn;
        $sql = "SELECT * FROM news WHERE id =" .$post_id;
        $result = mysqli_query($conn, $sql);
        $post = mysqli_fetch_assoc($result);
        return $post;
    }
    function get_category_id($category_id){
        global $conn;
        $category_id = mysqli_real_escape_string($conn, $category_id);
        $sql = "SELECT * FROM news WHERE category_id=".$category_id;
        $result = mysqli_query($conn, $sql);
        $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $news;
    }
    function get_name_category($category_id) {
        global $conn;
        $category_id = mysqli_real_escape_string($conn, $category_id);
        $sql = "SELECT * FROM menu WHERE id=".$category_id;
        $result = mysqli_query($conn, $sql);
        $category = mysqli_fetch_assoc($result);
        return $category;

    }
    ?>