<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information about organisation</title>
    <link rel="stylesheet" href="css/organisationInfStyle.css">
</head>
<?php
include 'include/database.php';
include 'include/organisationListName.php';
include 'include/userList.php';
include 'include/userInOrganisation.php';
?>
<body>
<div class="organisation-form">
    <legend class="cap-organisation-inf">Информация об организации</legend>
    <div class="organisation-inf-list">
        <table class="organisation-inf-table">
            <tr>
                <th>Name</th>
                <th>Register number</th>
                <th>ACM</th>
            </tr>
            <tr>
        <?php $organisations = get_organisationName($link, $_GET['id']); ?>
        <?php foreach ($organisations as $organisation):?>
                    <td><?=$organisation["Organisation_name"]?></td>
                    <td><?=$organisation["Register_number"]?></td>
                    <td><?=$organisation["ACM"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <legend class="cap-user">Users</legend>
    <div class="user-list">
        <div class = "user-list-data-inf">
            <table class="user-table">
                <tr>
<!--                    --><?php // $userList = get_users($linkUser)?>
                    <?php $userList = get_userNameOrganisation($link, $_GET['id'])?>
                    <?php foreach ($userList as $userList): ?>
                    <td class="user-name">
                        <a class="user-list-name" href="mainUser.php?id=<?=$userList["ID"]?>">
                        <?=$userList["Last_name"]?>
                        <?=$userList["First_name"]?>
                        <?=$userList["Middle_name"]?>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="create-user">
        <button type = "text" class="create-user-btn field-user" onclick="createUser()">Создать</button>
    </div>
</div>

<script type="text/javascript" src="js/linkToCreateUser.js"></script>

</body>
</html>