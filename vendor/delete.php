<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../authorize.php');
    }
    require_once '../config/db.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `wanted_persons` WHERE `wanted_persons`.`id_wp` = '$id'");
    header('Location: ../admin-panel.php');
?>