<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>Mongard | all articles</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />

<!-- STYLES -->
<link rel="stylesheet" href="styles/harmony.css">
<link rel="stylesheet" href="styles/article.css">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->

</head>
<body>

<?php require_once("header.php"); ?>
<!-- ARTICLE -->

<section class="aritcle_container">
    <div class="article_info">
        <p class="article_info_author">امیرحسین بیگدلو</p>
        <p class="article_info_date">23 sep. 2018</p>
        <!-- <p class="article_info_tags">web, django, design, risk, good, bad, ugly</p> -->
    </div>
    <h2 class="article_title">آیا واقعا به دانشگاه نیاز دارید؟</h2>
    <img src="images/article.jpg" alt="" class="article_image">
    <div class="article_body">
        <h3>مورد اول  Hello  مورد اول مورد اوبینس نتشس نسشب سشیاب</h3>
        <p>وارن بافت (یکی از ثروتمند ترین اشخاص جهان و مدیر اجرایی شرکت برکشایر هاتاوی) در جواب سوال: راز موفقیت شما چیست، جواب زیر را داده است: هر روز زندگی خود را تا جای ممکن کتاب خواندم. روزی ۵۰۰ صفحه از کتاب‌های مختلف. دانش به این شکل کار می‌کند. وارن بافت (یکی از ثروتمند ترین اشخاص جهان و مدیر اجرایی شرکت برکشایر هاتاوی) در جواب سوال: راز موفقیت شما چیست، جواب زیر را داده است: هر روز زندگی خود را تا جای ممکن کتاب خواندم. روزی ۵۰۰ صفحه از کتاب‌های مختلف. دانش به این شکل کار می‌کند. </p>
        <br/><br/><h3>مورد دوم</h3>
        <p>وارن بافت (یکی از ثروتمند ترین اشخاص جهان و مدیر اجرایی شرکت برکشایر هاتاوی) در جواب سوال: راز موفقیت شما چیست، جواب زیر را داده است: هر روز زندگی خود را تا جای ممکن کتاب خواندم. روزی ۵۰۰ صفحه از کتاب‌های مختلف. دانش به این شکل کار می‌کند. وارن بافت (یکی از ثروتمند ترین اشخاص جهان و مدیر اجرایی شرکت برکشایر هاتاوی) در جواب سوال: راز موفقیت شما چیست، جواب زیر را داده است: هر روز زندگی خود را تا جای ممکن کتاب خواندم. روزی ۵۰۰ صفحه از کتاب‌های مختلف. دانش به این شکل کار می‌کند. </p>
    </div>
</section>
<!-- END ARTICLE -->

<!-- RELATED ARTICLES -->
<p class="related_articles_title">مقالات مرتبط</p>
<section class="related_articles_container">
    <article class="related_article">
        <img src="images/html.jpg" alt="" class="related_article_image">
        <p><a href="#" class="related_article_link">این یک پست مرتبط به همین پست است به طور مثال این یک لینک بلند بالا است</a></p>
    </article>
    <article class="related_article">
        <img src="images/html.jpg" alt="" class="related_article_image">
        <p><a href="#" class="related_article_link">این یک پست مرتبط به همین پست است</a></p>
    </article>
    <article class="related_article">
        <img src="images/html.jpg" alt="" class="related_article_image">
        <p><a href="#" class="related_article_link">این یک پست مرتبط به همین پست است</a></p>
    </article>
</section>
<!-- END RELATED ARTICLES -->

<!-- FORM -->
<section class="form_container">
    <p class="form_title">ارسال نظر</p>
    <form class="form" action="index.html" method="post">
        <input type="text" name="name" class="form_input" placeholder="نام شما">
        <textarea name="comment" class="form_input comment" placeholder="نظر شما"></textarea>
        <input type="submit" name="submit" value="ارسال" class="submit_btn">
    </form>
</section>
<!-- END FORM -->

<?php require_once("footer.php"); ?>
