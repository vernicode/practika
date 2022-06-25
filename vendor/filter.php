<?php
    // $sql = "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'));";

    $str = $str . "SELECT * 
        FROM `wanted_persons_criminal_group` AS `pg`, `wanted_persons_criminal_cases` AS `pc`, `criminal_cases`, `wanted_persons`, `criminal_group`
        WHERE
            `criminal_cases`.`id_cs` = `pc`.`id_cs` AND
            `wanted_persons`.`id_wp` = `pg`.`id_wp` AND `wanted_persons`.`id_wp` = `pc`.`id_wp` AND
            `criminal_group`.`id_cg` = `pg`.`id_cg` 
            -- AND `in_archive` IS NULL 
            ";
    
    if ($_GET) {
        $filter = [
            'wanted_persons`.`name' => $_GET['name'],
            'surname' => $_GET['surname'],
            'nickname' => $_GET['nickname'],
            'height' => $_GET['height'],
            'eye_color' => $_GET['eye_color'],
            'hair_color' => $_GET['hair_color'],
            'special_signs' => $_GET['special_signs'],
            'citizenship' => $_GET['citizenship'],
            'birth_date' => $_GET['birth_date'],
            'birth_place' => $_GET['birth_place'],
            'last_residence' => $_GET['last_residence'],
            'languages' => $_GET['languages'],
            'criminal_profession' => $_GET['criminal_profession'],
            'group_name' => $_GET['group_name'],
            'case_name' => $_GET['case_name'],
            'in_archive' => $_GET['in_archive']
        ];

        foreach ($filter as $key => $value){
            // echo "{$key} => {$value}";
            if ($value != '') {
                // $str = $str . " AND `$key` = '$value'";
                if ($key == 'languages' || $key == 'special_signs') {
                    $str = $str . "AND `$key` LIKE ('%$value%')";
                } else{
                    $str = $str . "AND `$key` = '$value'";
                };   
            };
        };
    }
    
    $str = $str . " GROUP BY `wanted_persons`.`id_wp`";
    // echo $str;
    $wanted_persons = mysqli_fetch_all(mysqli_query($connect, $str), MYSQLI_ASSOC);
?>