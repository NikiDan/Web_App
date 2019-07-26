<?
function get_organisationName( $link, $id ){
    $sql = "SELECT * FROM `organisation` WHERE ID = $id";

    $result = mysqli_query($link, $sql);

    if ($result==false) {
        echo '<meta http-equiv="refresh" content="0;URL=errorPage.html">';
    }

    $organisation = mysqli_fetch_all($result, 1);

        return $organisation;
}