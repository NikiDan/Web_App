<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Организации</title>
    <link rel="stylesheet" href="css/styleOrganisationMain.css">
</head>
<?php
require 'include/database.php';
require 'include/organisationList.php';
?>
<body>
    <div class="organisation-form">
        <legend class="cap-organisation">Организации</legend>
            <div class="organisation-list">
            <?php  $organisation = get_organisations($link);?>
                <?php foreach ($organisation as $organisation): ?>
                    <div class="users-data">
                        <a class="organisation-list" href="organisationInf.php?id=<?=$organisation["ID"]?>"><?=$organisation["Organisation_name"]?></a>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>