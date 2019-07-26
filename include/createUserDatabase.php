<?
    if (isset($_POST['Last_name']) && isset($_POST['First_name'])
        && isset($_POST['Middle_name'])
        && isset($_POST['Birthday_date'])
        && isset($_POST['TAI'])
        && isset($_POST['INIP'])
        && isset($_POST['Organisation_ID'])
    ) {

        $lastName = $_POST['Last_name'];
        $firstName = $_POST['First_name'];
        $middleName = $_POST['Middle_name'];
        $birthday = date($_POST['Birthday_date']);
        $tai = $_POST['TAI'];
        $inip = $_POST['INIP'];
        $organisationID = $_POST['Organisation_ID'];

        $fieldData = array($_POST['Last_name'],
            $_POST['First_name'],
            $_POST['Middle_name'],
//            $_POST['Birthday_date'],
            $_POST['TAI'],
            $_POST['INIP']);
//            $_POST['Organisation_ID']);

         $fieldDataString = str_split(implode($fieldData));

        $forbiddenSymbols = array("!", "@", "#","$","%","^","&","*","!(",")", "~", "{", "}", "[", "]",
            "|", "/", "?", ".", ",", "<", ">", ":", ";", "'", " ", "№", "-", "_", "+", "=",
            "`");

            $resultArray = (array_uintersect($fieldDataString, $forbiddenSymbols, "strcasecmp"));

            if (!empty($resultArray)) {
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
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }


