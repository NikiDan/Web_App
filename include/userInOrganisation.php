<?

function get_userNameOrganisation( $link){
    $sql = "SELECT * FROM `user` INNER JOIN organisation ON user.Organisation_id=organisation.ID";

    $result = mysqli_query($link, $sql);

    $userList = mysqli_fetch_all($result, 1);

    return $userList;
}