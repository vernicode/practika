<?php
    define('db_host', 'localhost');
    define('db_user', 'root');
    define('db_pasw', '');
    define('db_name', "interpol_db");
    
    $connect = @new mysqli(db_host, db_user, db_pasw, db_name);
    // if ($connect -> connect_errno) exit('Ошибка подключения к БД');
    // $connect -> set_charset('utf8');
    // $connect -> close()
?>
