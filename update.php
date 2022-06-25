<?php 
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../authorize.php');
    }

    require_once 'config/db.php';

    $wanted_persons_id = $_GET['id'];
    $wanted_persons_info = mysqli_query($connect, "SELECT * FROM `wanted_persons` WHERE `id_wp` = '$wanted_persons_id'");
    $wanted_persons_info = mysqli_fetch_assoc($wanted_persons_info);
    // print_r($wanted_persons_info);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Wanted person info</title>
</head>
<body>
    <h2>Update product</h2>
    <form action="vendor/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $wanted_persons_info['id_wp'] ?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?= $wanted_persons_info['name'] ?>">
        <p>Фамилия</p>
        <input type="text" name="surname" value="<?= $wanted_persons_info['surname'] ?>">
        <p>Photo</p>
        <input type="file" name="photo">
        <p>Кличка</p>
        <input type="text" name="nickname" value="<?= $wanted_persons_info['nickname'] ?>">
        <p>Рост</p>
        <input type="number" name="height" value="<?= $wanted_persons_info['height'] ?>">
        <p>Цвет глаз</p>
        <input type="text" name="eye_color" value="<?= $wanted_persons_info['eye_color'] ?>">
        <p>Цвет волос</p>
        <input type="text" name="hair_color" value="<?= $wanted_persons_info['hair_color'] ?>">
        <p>Приметы</p>
        <input type="text" name="special_signs" value="<?= $wanted_persons_info['special_signs'] ?>">
        <p>Гражданство</p>
        <input type="text" name="citizenship" value="<?= $wanted_persons_info['citizenship'] ?>">
        <p>Дата рождения</p>
        <input type="date" name="birth_date" value="<?= $wanted_persons_info['birth_date'] ?>">
        <p>Место рождения</p>
        <input type="text" name="birth_place" value="<?= $wanted_persons_info['birth_place'] ?>">
        <p>Место жительства</p>
        <input type="text" name="last_residence" value="<?= $wanted_persons_info['last_residence'] ?>">
        <p>Язык</p>
        <input type="text" name="languages" value="<?= $wanted_persons_info['languages'] ?>">
        <p>Криминальная профессия</p>
        <input type="text" name="criminal_profession" value="<?= $wanted_persons_info['criminal_profession'] ?>">
        <button type="submit">Update</button>

    </form>
</body>
</html>