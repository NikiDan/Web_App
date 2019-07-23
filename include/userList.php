<?

function get_users( $linkUser ){
    $sqlUser = "SELECT * FROM  `user`";


    $resultUser = mysqli_query($linkUser, $sqlUser);

    $userList = mysqli_fetch_all($resultUser, 1) ;

    return $userList;
}