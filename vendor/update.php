<?php
    session_start();
    if (!$_SESSION['user']) {
    header('Location: ../authorize.php');
    }
    require_once '../config/db.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    // $tmp_name = $_FILES['photo']['name'];
    // $tmp_photo = $_FILES['photo']['tmp_name'];
    $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $nickname = $_POST['nickname'];
    $height = $_POST['height'];
    $eye_color = $_POST['eye_color'];
    $hair_color = $_POST['hair_color'];
    $signs = $_POST['signs'];
    $citizenship = $_POST['citizenship'];
    $birthdate = $_POST['birthdate'];
    $birthplace = $_POST['birthplace'];
    $last_residence = $_POST['last_residence'];
    $language = $_POST['language'];
    $criminal_profession = $_POST['criminal_profession'];
    
    mysqli_query($connect, "UPDATE `wanted_persons` SET `name` = '$name', `surname` = '$surname', `foto` = '$photo', `nickname` = '$nickname', `height` = '$height', `eye_color` = '$eye_color', `hair_color` = '$hair_color', `special_signs` = '$signs', `citizenship` = '$citizenship', `birth_date` = '$birthdate', `birth_place` = '$birthplace', `last_residence` = '$last_residence', `languages` = '$language', `criminal_profession` = '$criminal_profession', `in_archive` = NULL WHERE `wanted_persons`.`id_wp` = '$id'");
    // move_uploaded_file($tmp_photo, "../images/". $tmp_name);

    header('location: ../admin-panel.php')
?>