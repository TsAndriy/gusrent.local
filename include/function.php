<?php
include('include/db.php');
    function get_menu() {
        global $conn;
        $sql = "SELECT * FROM menu";

        $result = mysqli_query($conn,$sql);
        $menus = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $menus;
    }
