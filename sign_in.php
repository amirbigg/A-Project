<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>Mongard | all courses</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />

<!-- STYLES -->
<link rel="stylesheet" href="styles/sign_in.css">
<link rel="stylesheet" href="styles/harmony.css">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->

</head>
<body>

<?php require_once("header.php"); ?>

<section class="sign_in_form_container">

    <p class="sign_in_form_title">ورود به حساب کاربری</p>

    <form class="sign_in_form" action="#" method="post">
        <input type="email" class="sign_in_input" name="sign_in_email" placeholder="Email"><br/><br/>
        <input type="password" id="password" class="sign_in_input" name="sign_in_password" placeholder="Password"><br/><br/>
        <input type="submit" class="sign_in_submit" name="sign_in_submit" value="ورود">
    </form>

    <p><a href="forget_password.php" class="sign_in_forget_pass">رمز عبور خود را فراموش کرده اید؟</a></p>
    <p><a href="sign_up.php" class="sign_in_sign_up">حساب کاربری ندارید؟ یکی ایجاد کنید</a></p>
    <hr/>
    <a href="#"><img src="images/sign_in_google.png" class="sign_in_google" alt=""></a>
</section>

<?php require_once("footer.php"); ?>
