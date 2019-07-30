<?

$link = mysqli_connect('localhost', 'root', '', 'database');
$linkUser = mysqli_connect('localhost', 'root', '', 'database');

if(mysqli_connect_errno())
{
    echo 'Error to connect with BD ('.mysqli_connect_errno().'): '. mysqli_connect_error();
    exit();
}
