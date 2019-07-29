<?

function get_userName( $link, $id ){
    $sql = "SELECT * FROM `user` WHERE ID = $id";

    $result = mysqli_query($link, $sql);

//    if ($result==false) {
//        echo '<meta http-equiv="refresh" content="0;URL=errorPageInfo.html">';
//    }

    $userList = mysqli_fetch_all($result, 1);


    return $userList;


}
