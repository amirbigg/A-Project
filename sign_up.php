<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>Mongard | all courses</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />

<!-- STYLES -->
<link rel="stylesheet" href="styles/sign_up.css">
<link rel="stylesheet" href="styles/harmony.css">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->

</head>
<body>

<?php require_once("header.php"); ?>

<section class="sign_up_form_container">
    <p class="sign_up_form_title">ایجاد حساب کاربری</p>

    <form class="sign_up_form" action="#" method="post">
        <input type="text" class="sign_up_input" name="username" placeholder="UserName"><br/><br/>
        <input type="email" class="sign_up_input" name="sign_up_email" placeholder="Email"><br/><br/>
        <input type="password" class="sign_up_input" name="sign_up_password" placeholder="Password"><br/><br/>
        <input type="submit" name="sign_up_submit" class="sign_up_submit" value="ایجاد حساب کاربری">
    </form>
    <p><a href="sign_in.php" class="sign_up_sign_in">حساب کاربری دارید؟ وارد شوید</a></p>
    <hr/>
    <a href="#"><img src="images/sign_in_google.png" class="sign_in_google" alt=""></a>
</section>

<?php require_once("footer.php"); ?>
