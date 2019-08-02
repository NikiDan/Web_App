<?
    if (isset($_POST['last_name'])&& isset($_POST['first_name'])
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
//
        $db_host = "localhost";
        $db_user = "root"; // Логин БД
        $db_base = 'database'; // Имя БД
        $db_table = 'user'; // Имя Таблицы БД

        $linkCreateUser = mysqli_connect($db_host, $db_user, '', $db_base);

        if(empty($lastName)) exit("Field is incorrect");
        if(empty($firstName)) exit("Field is incorrect");
        if(empty($middleName)) exit("Field is incorrect");
        if(empty($birthday)) exit("Field is incorrect");
        if(empty($tai)) exit("Field is incorrect");
        if(empty($inip)) exit("Field is incorrect");
        if(empty($organisationID)) exit("Field is incorrect");


        $query = "INSERT INTO `user`(`Last_name`, `First_name`, `Middle_name`, `Birthday_date`, `TAI`, `INIPA`, `Organisation_ID`) VALUES ('$lastName','$firstName', '$middleName','$birthday', '$tai', '$inip', '$organisationID')";
        $result = $linkCreateUser->query($query);

        if ($result == true) {
            echo "Successful!!!!";
        } else {
            echo "Not successful!!!!";
        }
    }


