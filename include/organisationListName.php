<?

function get_organisationName( $link, $id ){
    $sql = "SELECT * FROM `organisation` WHERE ID = $id";

    $result = mysqli_query($link, $sql);

    $organisation = mysqli_fetch_all($result, 1);

    return $organisation;
}