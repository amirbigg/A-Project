<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>Mongard | Learn Till You Die</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />
<link rel="stylesheet" href="styles/forget_password.css">
<link rel="stylesheet" href="styles/harmony.css">

<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->
</head>
<body>
<!-- INDEX TOP PART -->
<?php require_once("header.php"); ?>


<section class="forget_password_form_container">
    <p class="forget_password_title">بازیابی رمز عبور</p>
    <form class="forget_password" action="index.html" method="post">
        <input type="email" name="forget_email" placeholder="Email" class="forget_email"><br/><br/>
        <input type="submit" name="forget_submit" value="بازیابی" class="forget_submit">
    </form>
</section>







<?php require_once("footer.php"); ?>
