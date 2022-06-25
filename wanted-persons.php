<?php
    require_once 'config/db.php';
    require_once 'vendor/filter.php';

    $cases = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `criminal_cases`"));
    $groups = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `criminal_group`"));
    
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="src/styles/wanted-personsstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@75&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6819c2fba3.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        
    </script>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    
    <div class="head-slider" style="background: linear-gradient(87.11deg, #24335B 15.4%, rgba(0, 67, 115, 0.84) 95.76%);">
        <div class="head-slider__container">
            <div class="head-slider__container_title">
                <h1 class="slider_title">Wanted persons</h1>
            </div>
            <div class="head-slider__logo">
                <img src="src/images/INTERPOL_Logo.svg" alt="" class="slider__logo">
            </div>
        </div>
        
    </div>
    <div class="main">
        <div class="main-container_1">
            <div class="main-notice__block">
                <div class="notice-image">
                    <img src="src/images/Notices/RedNotice.jpg" class="notice">
                </div>
                <div class="notice__block_content">
                    <h3>View and search public Red Notices for wanted persons</h3>
                </div>
            </div>
            <div class="notice__bottom_content">
                <p>Red Notices are issued for fugitives wanted either for prosecution or to serve a sentence. A Red Notice is a request to law enforcement worldwide to locate and provisionally arrest a person pending extradition, surrender, or similar legal action.</p>
            </div>
        </div>
        <div class="main-container_2">
            <div class="Notice-title">
                <h2 class="Notice">Notices</h2>
            </div>
        </div>
        <div class="main-container_3">
            <div class="main-search__block">
                <div class="search__block">
                    <div class="form">
                        <h2>Filter criteria</h2>
                        <form action="wanted-persons.php" method="get">
                            <p>Name</p>
                            <input type="text" name="name" value="<?= $wanted_persons_info['name'] ?>">
                            <p>Surname</p>
                            <input type="text" name="surname" value="<?= $wanted_persons_info['surname'] ?>">
                            <p>Nickname</p>
                            <input type="text" name="nickname" value="<?= $wanted_persons_info['nickname'] ?>">
                            <p>Height</p>
                            <input type="number" name="height" value="<?= $wanted_persons_info['height'] ?>">
                            <p>Eye color</p>
                            <input type="text" name="eye_color" value="<?= $wanted_persons_info['eye_color'] ?>">
                            <p>Hair color</p>
                            <input type="text" name="hair_color" value="<?= $wanted_persons_info['hair_color'] ?>">
                            <p>Special signs</p>
                            <input type="text" name="special_signs" value="<?= $wanted_persons_info['special_signs'] ?>">
                            <p>Citizenship</p>
                            <input type="text" name="citizenship" value="<?= $wanted_persons_info['citizenship'] ?>">
                            <p>Birth date</p>
                            <input type="date" name="birth_date" value="<?= $wanted_persons_info['birthdate'] ?>">
                            <p>Birth place</p>
                            <input type="text" name="birth_place" value="<?= $wanted_persons_info['birthplace'] ?>">
                            <p>Last residence</p>
                            <input type="text" name="last_residence" value="<?= $wanted_persons_info['last_residence'] ?>">
                            <p>Languages</p>
                            <input type="text" name="languages" value="<?= $wanted_persons_info['languages'] ?>">
                            <p>Criminal profession</p>
                            <input type="text" name="criminal_profession" value="<?= $wanted_persons_info['criminal_profession'] ?>">
                            <p>Criminal group</p>
                            <select name="group_name">
                            
                            <option selected></option>
                            <?php
                                foreach($groups as $group) {
                                ?>
                                    <option><?= $group[1] ?></option>
                                <?php
                                }
                            ?>
                            </select>
                            <p>Criminal cases</p>
                            <select name="case_name">
                                <option selected></option>
                                <?php
                                    foreach($cases as $case) {
                                    ?>
                                        <option><?= $case[1] ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                            <p>In archive</p>
                            <input type="checkbox" name="in_archive">
                            <br><br>
                            <div class="btn">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main-search_output">
                <div class="main-flex_output">
                        <div class="output">
                                <?php foreach ($wanted_persons as $wanted_persons_info)
                                    {
                                ?>
                                
                                <div class="output__block">
                                <?php
                                    $birthday = $wanted_persons_info['birth_date']; //Дата рождения
                                    $age = floor(( time() - strtotime($birthday) ) / (60 * 60 * 24 * 365.25)); //Формула
                                ?>  
                                <div class="img_output">
                                    <?php $show_img = base64_encode($wanted_persons_info['foto'])?>
                                    <img src="data:image/jpeg;base64, <?php echo $show_img ?>">
                                </div>
                                <div class="desc_output">
                                    <a href="Detail-information.php?id=<?= $wanted_persons_info['id_wp'] ?>"><?= $wanted_persons_info['name'] ?></a>
                                    <a href="Detail-information.php?id=<?= $wanted_persons_info['id_wp'] ?>"><?= $wanted_persons_info['surname'] ?></a>
                                    <p><?= $age ?> years old</p>
                                    <p><?= $wanted_persons_info['birth_place'] ?></p>
                                </div>
                                </div>
                                <?php   
                                    }
                                ?>
                        </div>
                    </div>
                <div class="main-search__table">
                    <div class="table_output">
                        <div class="table">
                            <table>
                                <tr>
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
                                    <th>Languages</th>
                                    <th>Criminal profession</th>
                                    <th>Photo</th>
                                </tr>
                                <?php
                                    foreach ($wanted_persons as $wanted_persons_info) {
                                ?>
                                <tr>
                                    <td><?= $wanted_persons_info['name'] ?></td>
                                    <td><?= $wanted_persons_info['surname'] ?></td>
                                    <td><?= $wanted_persons_info['nickname'] ?></td>
                                    <td><?= $wanted_persons_info['height'] ?></td>
                                    <td><?= $wanted_persons_info['eye_color'] ?></td>
                                    <td><?= $wanted_persons_info['hair_color'] ?></td>
                                    <td><?= $wanted_persons_info['special_signs'] ?></td>
                                    <td><?= $wanted_persons_info['citizenship'] ?></td>
                                    <td><?= $wanted_persons_info['birth_date'] ?></td>
                                    <td><?= $wanted_persons_info['birth_place'] ?></td>
                                    <td><?= $wanted_persons_info['last_residence'] ?></td>
                                    <td><?= $wanted_persons_info['languages'] ?></td>
                                    <td><?= $wanted_persons_info['criminal_profession'] ?></td>
                                    <td>
                                        <?php $show_img = base64_encode($wanted_persons_info['foto'])?>
                                        <img src="data:image/jpeg;base64, <?php echo $show_img ?>">
                                    </td>
                                </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
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