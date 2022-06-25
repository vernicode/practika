<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../authorize.php');
    }
    require_once '../config/db.php';

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
    $in_archive = $_POST['in_archive'];


    mysqli_query($connect, "INSERT INTO `wanted_persons` (`id_wp`, `name`, `surname`, `foto`, `nickname`, `height`, `eye_color`, `hair_color`, `special_signs`, `citizenship`, `birth_date`, `birth_place`, `last_residence`, `languages`, `criminal_profession`, `in_archive`) VALUES (NULL, '$name', '$surname', '$photo', '$nickname', '$height', '$eye_color', '$hair_color', '$signs', '$citizenship', '$birthdate', '$birthplace', '$last_residence', '$language', '$criminal_profession', '$in_archive')");
    // move_uploaded_file($tmp_photo, "../images/". $tmp_name);
    
    header('Location: ../admin-panel.php');
?>