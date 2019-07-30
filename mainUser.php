<!doctype html>
<html lang="en" xmlns:javascript="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователи</title>
    <link rel="stylesheet" href="css/styleUsers.css">
</head>
<?php
include 'include/database.php';
include 'include/userListName.php';
?>
<body>
<div class="user-form">
    <legend class="cap-user">User</legend>
        <div class="user-list">
            <div class = "user-list-data-inf">
                <table class="user-table-inf">
                    <tr>
                        <th class="user-table-field">Last Name</th>
                        <th class="user-table-field">First Name</th>
                        <th class="user-table-field">Middle Name</th>
                        <th class="user-table-field">Birthday date</th>
                        <th class="user-table-field">TAI</th>
                        <th class="user-table-field">INIPA</th>
                        <th class="user-table-field">Notation</th>
                    </tr>
                    <tr>
                <?php  $userList = get_userName($link, $_GET['id']);?>
                <?php foreach ($userList as $userList): ?>
                        <td class="user-table-field"><?=$userList["Last_name"]?></td>
                        <td class="user-table-field"><?=$userList["First_name"]?></td>
                        <td class="user-table-field"><?=$userList["Middle_name"]?></td>
                        <td class="user-table-field"><?=date("d.m.Y",  strtotime($userList['Birthday_date']));?></td>
                        <td class="user-table-field"><?=$userList["TAI"]?></td>
                        <td class="user-table-field"><?=$userList["INIPA"]?></td>
                        <td class="user-table-field">
                            <a class="delete-string" href="mainUser.php?del=<?=$userList["ID"]?>"  name="delete">Delete</a>
                        </td>
                    </tr>
    <?php endforeach; ?>
                </table>
            </div>
        </div>
</div>

</body>
</html>