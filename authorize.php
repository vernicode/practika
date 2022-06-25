<?php
    session_start();
    require_once 'config/db.php';
    if ($_SESSION['user']) {
        header('Location: admin-panel.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorize</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@75&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: linear-gradient(126deg, #f1f1f1, #f9f9f9);
            /* background: url(src/images/Background-gif/xK.gif); */
            /* background-size: cover; */
        }
        .authorize {
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: center;
        }
        .auth__block {
            display: flex;
            width: 30%;
            flex-direction: column;
            align-items: center;
        }
        .msg {
            border: 1px solid #d90000;
            width: 93%;
            line-height: 25px;
            padding: 5px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-family: 'Open Sans';
            font-weight: bolder;
        }
        .form__block {
            width: 45%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background: white;
            border: 1px solid #a0a0a0;
            box-shadow: -2px 2px 9px 0px black;
        }
        .form__itself input {    
            width: 88%;
            border-radius: 0;
            display: flex;
            line-height: 38px;
            height: 38px;
            border-collapse: separate;
            border: 1px solid #a0a0a0;
            padding: 0 10px;
            margin-bottom: 20px;
            outline: none;
            outline-offset: none;
        }
        .form__itself button {
            width: 100%;
            line-height: 30px;
            color: #00437a;
            padding: 3px 31px;
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
        .form__itself button:hover {
            color: white;
            background: #d8581a;
            transition: 0.4s ease;
        }
        .form__title {
            margin-bottom: 10px;
        }
        .form__title h2{
            font-family: sans-serif;
            color: #00437a;
        }
        .logo {
            display: flex;
            margin-bottom: 20px;
        }
        .logo img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="authorize">
        <div class="logo">
            <a href="index.php"><img src="src/images/INTERPOL_Logo.svg"></a>
        </div>
        <div class="auth__block">
            <div class="form__block">
                <div class="form__title">
                    <h2>Authorization</h2>
                </div>
                <div class="form__itself">
                    <form action="vendor/login.php" method="post">
                        <input required placeholder = "Enter login" type="text" name="login">
                        <input required placeholder = "Enter password" type="password" name="password">
                        <?php
                            if ($_SESSION['message']) {
                                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                            }
                            unset($_SESSION['message']);
                        ?>
                        <button type="submit">Authorize</button>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>
