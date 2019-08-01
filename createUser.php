<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create user</title>
    <link rel="stylesheet" href="css/styleCreateUser.css">
</head>
<?php
include 'include/createUserDatabase.php';
include 'include/database.php';
include 'include/organisationList.php';
?>
<body>
<div class="create-user">
    <div class="create-user-content">
        <legend class="cap-create">Create user</legend>
        <form method="post" action="createUser.php">
        <div class="content-field last-name">
            <label class="last-name-label label-create">Last name: </label>
            <input type="text" class="input-form-last-name input-create-user field-create" placeholder="Your last name" name="last_name" required>
        </div>
        <div class="content-field first-name">
            <label class="first-name-label label-create">First name: </label>
            <input type="text" class="input-form-first-name input-create-user field-create" placeholder="Your first name" name="first_name" required>
        </div>
        <div class="content-field midle-name">
            <label class="middle-name-label label-create">Middle name: </label>
            <input type="text" class="input-form-middle-name input-create-user field-create" placeholder="Your middle name" name="middle_name" required>
        </div>
        <div class="content-field birthday">
            <label class="birthday-label label-create">Birthday: </label>
            <input type="date" class="input-form-birthday input-create-user field-create" name="birthday_date" required>
        </div>
        <div class="content-field index-taks">
            <label class="taks-label label-create tai-field">TAI: </label>
            <input type="text" class="input-form-index-taks input-create-user field-create" name="tai" required>
        </div>
        <div class="content-field index-insurance">
            <label class="insurance-label label-create">INIP: </label>
            <input type="text" class="input-form-index-insurance input-create-user field-create" name="inip" required>
        </div>
        <div class="content-field name-organisation">
            <label class="organisation-name-label label-create">Organisation: </label>
            <select class="input-form-name-organisation input-create-user field-create" name="organisation_ID">
            <?php  $organisation = get_organisations($link);?>
            <?php foreach ($organisation as $organisation): ?>
                <option value="<?=$organisation["ID"]?>"><?=$organisation['Organisation_name']?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="add-user">
            <input type = "submit" class="add-user-btn field-create" value="add user">
        </div>
        </form>
        <div class="home-link">
            <input type = "submit" class="link-to-home field-create" value="go home" onclick="linkToHome()">
        </div>
    </div>
    </div>
<script type="text/javascript" src="js/linkToHome.js" ></script>
</body>
</html>