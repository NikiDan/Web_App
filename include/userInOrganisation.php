<?

function get_userNameOrganisation( $link, $id){
    $sql = "SELECT * FROM organisation RIGHT JOIN user ON user.Organisation_id = organisation.ID WHERE organisation.ID = $id";

    $result = mysqli_query($link, $sql);

    $userListName = mysqli_fetch_all($result, 1);

    return $userListName;
}