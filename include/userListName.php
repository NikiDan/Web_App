<?

function get_userName( $link, $id ){
    $sql = "SELECT * FROM `user` WHERE ID = $id";

    $result = mysqli_query($link, $sql);

    $userList = mysqli_fetch_all($result, 1);

    return $userList;
}