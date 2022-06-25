<?php
    require_once 'config/db.php';

    $wanted_persons_id = $_GET['id'];
    $wanted_persons = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * 
        FROM 
        -- `wanted_persons_criminal_group` AS `pg`,
        -- `wanted_persons_criminal_cases` AS `pc`,
        -- `criminal_cases`, 
        `wanted_persons`
        -- , `criminal_group`
        WHERE
            `id_wp` = '$wanted_persons_id'
            -- AND
            -- `criminal_cases`.`id_cs` = `pc`.`id_cs` AND
            -- `wanted_persons`.`id_wp` = `pg`.`id_wp` AND 
            -- `wanted_persons`.`id_wp` = `pc`.`id_wp` AND
            -- `criminal_group`.`id_cg` = `pg`.`id_cg` 
        "));
    // var_dump($wanted_persons);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@75&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/styles/detail-informationstyle.css">
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    
    <div class="head-slider" style="background: linear-gradient(87.11deg, #24335B 15.4%, rgba(0, 67, 115, 0.84) 95.76%);">
        <div class="head-slider__container">
            <div class="head-slider__container_back">
                <a href="wanted-persons.php" class="link">Back to search</a>
            </div>
            <div class="head-slider__container_title">
                <h1 class="slider_title"><?= $wanted_persons['name'], ' ', $wanted_persons['surname'] ?></h1>
                <p>Wanted by <?= $wanted_persons['last_residence'] ?></p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-container">
            <div class="container-photo">
                <div class="image-out">
                    <?php $show_img = base64_encode($wanted_persons['foto'])?>
                    <img src="data:image/jpeg;base64, <?php echo $show_img ?>">
                </div>
            </div>
            <div class="container-info">
                <div class="info_block">
                    <h1>Identity particulars</h1>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><?= $wanted_persons['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Surname</td>
                            <td><?= $wanted_persons['surname'] ?></td>
                        </tr>
                        <tr>
                            <td>Nickname</td>
                            <td><?= $wanted_persons['nickname'] ?></td>
                        </tr>
                        <tr>
                            <td>Birth date</td>
                            <?php
                                $birthday = $wanted_persons['birth_date']; //Дата рождения
                                $age = floor(( time() - strtotime($birthday) ) / (60 * 60 * 24 * 365.25)); //Формула
                            ?>
                            <td><?= $wanted_persons['birth_date'] ?> (<?= $age ?> years old)</td>
                        </tr>
                        <tr>
                            <td>Birth place</td>
                            <td><?= $wanted_persons['birth_place'] ?></td>
                        </tr>
                    </table>
                </div>
                <div class="info_block">
                    <h1>Physical description</h1>
                    <table>
                        <tr>
                            <td>Hair color</td>
                            <td><?= $wanted_persons['hair_color'] ?></td>
                        </tr>
                        <tr>
                            <td>Eye color</td>
                            <td><?= $wanted_persons['eye_color'] ?></td>
                        </tr>
                        <tr>
                            <td>Special signs</td>
                            <td><?= $wanted_persons['special_signs'] ?></td>
                        </tr>
                    </table>
                <div class="info_block">
                    <h1>Details</h1>
                    <table>
                        <tr>
                            <td>Language(s) spoken</td>
                            <td><?= $wanted_persons['languages'] ?></td>
                        </tr>
                    </table>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="foot-container">
            <div class="foot-container__block_4">
                <div class="foot-block__container_4">
                    <div class="foot-block_image" style="padding-bottom: 10px">
                        <img src="src/images/INTERPOL_Logo.svg">
                    </div>
                </div>
            </div>
            <div class="foot-container__block_2">
                <div class="foot-block__container_2">
                    <div class="foot-block">
                        <div class="foot-block_image">
                            <img src="src/images/INTERPOL_Logo.svg">
                        </div>
                    </div>
                    <div class="foot-block">
                        <h3>Connect with us</h3>
                        <a href="#" class="link foot_link">
                            Contact INTERPOL
                        </a>
                        <a href="#" class="link">
                            Careers
                        </a>
                        <a href="#" class="link">
                            Procurement
                        </a>
                        <a href="#" class="link">
                            About the CCF
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Resources</h3>
                        <a href="#" class="link">
                            News and Events
                        </a>
                        <a href="#" class="link">
                            information for journalists
                        </a>
                        <a href="#" class="link">
                            Multimedia
                        </a>
                        <a href="#" class="link">
                            Documents
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Policies</h3>
                        <a href="#" class="link">
                            Cookie policy
                        </a>
                        <a href="#" class="link">
                            Privacy policy
                        </a>
                        <a href="#" class="link">
                            Terms of use
                        </a>
                        <a href="#" class="link">
                            Name and logo
                        </a>
                    </div>
                    <div class="foot-block">
                        <h3>Social Media</h3>
                        <div class="foot-block__image_links">
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/FB_icon-icons.com_65484.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/TWITTER_icon-icons.com_65486.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/instagram_icon_125245.svg" alt=""></a>
                            </div>
                            <div class="foot-block__image_link">
                                <a href="#"><img src="src/images/Icons/LINKEDIN_icon-icons.com_65488.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-container__block_3">
               <div class="foot-block__container_3">
                    <a href="#" class="link">
                        site map
                    </a>
                    <p>
                        INTERPOL 2022. ALL RIGHTS RESERVED
                    </p>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>