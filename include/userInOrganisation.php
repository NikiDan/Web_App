<?

function get_userNameOrganisation( $link, $id){

//    if (isset($_GET['id'])){
//        $id = $_GET['id'];
//
//        $query = "DELETE FROM user WHERE id = $id";
//        mysqli_query($link, $query) or die (mysqli_error($link));
//    }


    $sql = "SELECT * FROM organisation RIGHT JOIN user ON user.Organisation_id = organisation.ID WHERE organisation.ID = $id";

    $result = mysqli_query($link, $sql);

    $userListName = mysqli_fetch_all($result, 1);

    return $userListName;
}