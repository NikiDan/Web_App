<?php

if (isset($_POST['last_name']) && isset($_POST['first_name'])
                               && isset($_POST['middle_name'])
                               && isset($_POST['birthday_date'])
                               && isset($_POST['tai'])
                               && isset($_POST['inip'])
                               && isset($_POST['organisation_ID'])
) {

    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'];
    $birthday = date($_POST['birthday_date']);
    $tai = $_POST['tai'];
    $inip = $_POST['inip'];
    $organisationID = $_POST['organisation_ID'];

    $fieldData = array($_POST['last_name'],
                       $_POST['first_name'],
                       $_POST['middle_name'],
                       $_POST['tai'],
                       $_POST['inip']);

    function validate($fieldData)
    {
        $forbiddenSymbols = iconv('utf-8', 'windows-1251', '[[^a-zA-zа-яА-Я-1-9]]');

        $fieldString = iconv('utf-8', 'windows-1251', (implode($fieldData)));

        preg_match_all($forbiddenSymbols, $fieldString, $matches);

        if (sizeof($matches[0]) > 0) {

            throw new Exception();
        }
    }
    try{
        validate($fieldData);
    }
    catch (Exception $error){
        echo '<meta http-equiv="refresh" content="0;URL=errorPageCreate.html">';
        exit();
    }

    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_base = 'database'; // Имя БД
    $db_table = 'user'; // Имя Таблицы БД

    $linkeditUser = mysqli_connect($db_host, $db_user, '', $db_base);
    // Last name update
        $id = $_GET['id'];
        if (isset($_POST['last_name'])) {
            $query = "UPDATE `user` SET `Last_name` = '$lastName' WHERE ID= $id";
            $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. Last name wasn't be updated!!!!";
        }
        }
    // First name update
        if (isset($_POST['first_name'])) {
                $query = "UPDATE `user` SET `First_name`= '$firstName' WHERE ID=$id";
                $result = $linkeditUser->query($query);
                if ($result == false) {
                    echo "Not successful. First name wasn't be updated!!!!";
                }
            }
    //Middle name update
    if (isset($_POST['middle_name'])) {
        $query = "UPDATE `user` SET `Middle_name`= '$middleName' WHERE ID=$id";
        $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. Middle name wasn't be updated!!!!";
        }
    }
    // Birthday update
    if (isset($_POST['birthday_date'])) {
        $query = "UPDATE `user` SET `Birthday_date`= '$birthday' WHERE ID=$id";
        $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. Birthday wasn't be updated!!!!";
        }
    }
    // TAI update
    if (isset($_POST['tai'])) {
        $query = "UPDATE `user` SET `TAI`= '$tai' WHERE ID=$id";
        $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. TAI wasn't be updated!!!!";
        }
    }
    // INIPA update
    if (isset($_POST['inip'])) {
        $query = "UPDATE `user` SET `INIPA`= '$inip' WHERE ID=$id";
        $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. INIPA wasn't be updated!!!!";
        }
    }
    // Organisation update
    if (isset($_POST['organisation_ID'])) {
        $query = "UPDATE `user` SET `Organisation_ID`= '$organisationID' WHERE ID=$id";
        $result = $linkeditUser->query($query);
        if ($result == false) {
            echo "Not successful. Organisation wasn't be updated!!!!";
        }
    }
}