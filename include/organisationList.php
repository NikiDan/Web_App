<?

function get_organisations( $link ){
    $sql = "SELECT * FROM `organisation`";

    $result = mysqli_query($link, $sql);

    $organisation = mysqli_fetch_all($result, 1) ;

    return $organisation;
}


