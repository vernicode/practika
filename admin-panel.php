<?php 
    session_start();
    if (!$_SESSION['user']) {
        header('Location: authorize.php');
    }
    require_once 'config/db.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@75&display=swap" rel="stylesheet">
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    th, td {
        padding: 0px 10px 0px 10px;
    }
    th {
        padding: 10px;
        background: #606060;
        color: #fff
    }
    tr:nth-child(2n) td{
        background-color: #f7f7f7; /* Цвет фона */
    } 
    tr:nth-child(2) td{
        background-color: #f0f0f0; /* Цвет фона */
        color: #000; /* Цвет текста */
    }
    a {
        text-decoration: none;
    }
   .table th {
        background: #e7e7e7;
        color: #000;
    }
    .cntr {
        width: 50px;
        height: 50px;
    }
    .main-container_3 {
        display: flex;
    }
    .main-search__block {
        background: linear-gradient(126deg, #f1f1f1, #f9f9f9);
        margin-right: 20px;
    }
    .search__block {
        padding: 49px 72px;
    }
    .table {
        border-collapse: collapse;
    }
    .table th {
        background: #e7e7e7;
        color: #000;
    }
    .table td{
        padding-left: 10px;
        padding-right: 10px;
    }
    .table img {
        height: 100px;
        width: 100px;
    }
    .form p {
        display: flex;
        font-family: 'Open Sans';
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .form h2 {
        font-family: 'Open Sans';
        margin-top: 50px;
        font-size: 38px;
        color: black;
        font-weight: lighter;
        margin: 0 0 25px;
    }
    .form input {
        border-radius: 0;
        display: flex;
        line-height: 38px;
        height: 38px;
        border-collapse: separate;
        border: 1px solid #a0a0a0;
        padding: 0 10px;
        margin-bottom: 25px;
        width: 100%;
    }
    .form input[type="checkbox"] {
        height: initial;
        width:initial
    }
    .form input:nth-child(6) {
        border: none;
        padding: 0;
    }
    .form button {
        color: #00437a;
        padding: 3px 31px;
        width: 113.55555%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        background-color: transparent;
        font-family: 'Open Sans';
        font-size: 16px;
        font-weight: 700;
        line-height: 40px;
        text-transform: uppercase;
        transition: color 0.2s ease, border 0.2s ease, background-color 0.2s ease;
        cursor: pointer;
        border: 1px solid rgba(0, 0, 0, 0.3);
    }
    .btn button:hover {
        color: white;
        background-color: #d8581a;
    }
    </style>
</head>
<body>
    <div class="main-container_3">
        <div class="main-search__block">
            <a href="vendor/logout.php">Logout</a>
             <div class="search__block">
                <div class="form">
                    <h2>Add to wanted list</h2>
                    <form action="vendor/create.php" method="post" enctype="multipart/form-data">
                        <p>Name</p>
                        <input type="text" name="name">
                        <p>Surname</p>
                        <input type="text" name="surname">
                        <p>Photo</p>
                        <input type="file" name="photo">
                        <p>Nickname</p>
                        <input type="text" name="nickname">
                        <p>Height</p>
                        <input type="number" name="height">
                        <p>Eye color</p>
                        <input type="text" name="eye_color">
                        <p>Hair color</p>
                        <input type="text" name="hair_color">
                        <p>Special signs</p>
                        <input type="text" name="signs">
                        <p>Citizenship</p>
                        <input type="text" name="citizenship">
                        <p>Birth date</p>
                        <input type="date" name="birthdate">
                        <p>Birth place</p>
                        <input type="text" name="birthplace">
                        <p>Last residence</p>
                        <input type="text" name="last_residence">
                        <p>Language(s)</p>
                        <input type="text" name="language">
                        <p>Criminal profession</p>
                        <input type="text" name="criminal_profession">
                        <p>Archive</p>
                        <input type="checkbox" name="in_archive">
                        <div class="btn">
                            <button type="submit">Add to wanted list</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    <div class="table_output">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Nickname</th>
                <th>Height</th>
                <th>Eye color</th>
                <th>Hair color</th>
                <th>Special signs</th>
                <th>Citizenship</th>
                <th>Birth date</th>
                <th>Birth place</th>
                <th>Last residence</th>
                <th>Language(s)</th>
                <th>Criminal profession</th>
                <th></th>
                <th></th>
            </tr>
            <?php 
                $wanted_persons = mysqli_query($connect, "SELECT * FROM `wanted_persons`");
                $wanted_persons = mysqli_fetch_all($wanted_persons);
            
                foreach ($wanted_persons as $wanted_persons_info) {
                    ?>
                    <tr>
                            <td><?= $wanted_persons_info[0] ?></td>
                            <td>
                                <?php $show_img = base64_encode($wanted_persons_info[3])?>
                                <img class="cntr" src="data:image/jpeg;base64, <?php echo $show_img ?>">
                            </td>
                            <td><?= $wanted_persons_info[1] ?></td>
                            <td><?= $wanted_persons_info[2] ?></td>
                            <td><?= $wanted_persons_info[4] ?></td>
                            <td><?= $wanted_persons_info[5] ?></td>
                            <td><?= $wanted_persons_info[6] ?></td>
                            <td><?= $wanted_persons_info[7] ?></td>
                            <td><?= $wanted_persons_info[8] ?></td>
                            <td><?= $wanted_persons_info[9] ?></td>
                            <td><?= $wanted_persons_info[10] ?></td>
                            <td><?= $wanted_persons_info[11] ?></td>
                            <td><?= $wanted_persons_info[12] ?></td>
                            <td><?= $wanted_persons_info[13] ?></td>
                            <td><?= $wanted_persons_info[14] ?></td>
                            <td><a href="update.php?id=<?= $wanted_persons_info[0] ?>">Update</a></td>
                            <td><a href="vendor/delete.php?id=<?= $wanted_persons_info[0] ?>" style="color: red">Delete</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </div>   
</body>
</html>