<?

    if (isset($_POST['Last_name']) && isset($_POST['First_name'])
                                    && isset($_POST['Middle_name'])
                                    && isset($_POST['Birthday_date'])
                                    && isset($_POST['TAI'])
                                    && isset($_POST['INIP'])
                                    && isset($_POST['Organisation_ID'])) {

        $lastName = $_POST['Last_name'];
        $firstName = $_POST['First_name'];
        $middleName = $_POST['Middle_name'];
        $birthday = date($_POST['Birthday_date']);
        $tai = $_POST['TAI'];
        $inip = $_POST['INIP'];
        $organisationID = $_POST['Organisation_ID'];

        $db_host = "localhost";
        $db_user = "root"; // Логин БД
        $db_base = 'database'; // Имя БД
        $db_table = 'user'; // Имя Таблицы БД

        $linkCreateUser = mysqli_connect($db_host, $db_user, '', $db_base);

        if (mysqli_connect_errno()) {
            echo 'Ошибка в подключении к базе данных (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
            exit();
        }

        $query = "INSERT INTO `user`(`Last_name`, `First_name`, `Middle_name`, `Birthday_date`, `TAI`, `INIPA`, `Organisation_ID`) VALUES ('$lastName','$firstName', '$middleName','$birthday', '$tai', '$inip', '$organisationID')";
        $result = $linkCreateUser->query($query);

        if ($result == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }

    }

