<?php

    if  (isset($_GET['del'])) {

            $id = $_GET['del'];

            $sql = "DELETE FROM `user` WHERE ID = $id";

            $result = mysqli_query($link, $sql);

//            if ($result == false) {
//
//                echo '<meta http-equiv="refresh" content="0;URL=errorPageInfo.php">';
//            }

        echo '<meta http-equiv="refresh" content="0;URL=mainOrganisation.php">';
//    $deleteUser = mysqli_fetch_all($result, 1);

//    return $deleteUser;

    }


/* Если была нажата ссылка удаления, удаляем запись */
//if  (isset($_GET['id'])) {
//
//        $del = $_GET['id'];
//
//        $sql = "DELETE FROM `user` WHERE ID = $id";
//
//    if ($conn->query($sql) === TRUE) {
//        echo "Record deleted successfully";
//    } else {
//        echo "Error deleting record: " . $conn->error;
//    }
//
//        /* Выполняем запрос. Если произойдет ошибка - вывести ее. */
//
////    $result = mysqli_query($id, $query);
//
////    $deleteString = mysqli_fetch_all($result, 1);
//
//    return $deleteString;
//}