<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />
<title>Mongard | Learn Till You Die</title>
<link rel="stylesheet" href="styles/harmony.css">
<link rel="stylesheet" href="styles/index.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->
</head>
<body>
<!-- INDEX TOP PART -->
<?php require_once("header.php"); ?>

<section class="index_top_part">
    <article class="index_top_img_container">
        <img src="images/index_top.jpg" class="index_top_img" alt="">
        <p class="index_top_img_text">Learn To Create Something Magnificent...</p>
    </article>
</section>
<!-- END INDEX TOP  -->

<!-- INDEX SUGGESTED COURSES -->
<p class="index_suggested_course_title">آخرین دوره ها</p>
<section class="index_suggested_courses_container">

    <article class="index_suggested_course">
        <img src="images/wagtail.jpg" class="index_suggested_image" alt="">
        <h2><a href="#" class="index_suggested_link">آموزش Wagtail</a></h2>
    </article>

    <article class="index_suggested_course">
        <img src="images/vue.jpg" class="index_suggested_image" alt="">
        <h2><a href="#" class="index_suggested_link">آموزش Vue</a></h2>
    </article>

    <article class="index_suggested_course">
        <img src="images/python.jpg" class="index_suggested_image" alt="">
        <h2><a href="#" class="index_suggested_link">آموزش Python</a></h2>
    </article>

</section>
<!-- END INDEX SUGGESTED COURSES -->

<!-- INDEX JOIN US -->
<section class="index_join_us">
    <p class="index_join_us_text">تمام دوره های ما رایگان هستند، برای دسترسی فقط کافیه عضو شوید</p>
    <p><a href="sign_up.php" class="index_join_us_link">عضویت</a></p>
</section>
<!-- END INDEX JOIN US -->

<!-- INDEX ONE PART VIDEOS -->
<section class="index_one_part_title_container">
    <p class="index_one_part_title">آخرین ویدیوهای تک قسمتی</p>
    <a href="all_one_part.php" class="index_see_all_one_parts">مشاهده تمام ویدیوهای تک قسمتی</a>
</section>
<section class="index_one_part_container">
    <article class="one_part">
        <h2><a href="one_part.php" class="one_part_link">Ultimate guide for redirects in Django</a></h2><hr>
        <p class="one_part_tags">python, django</p>
    </article>
    <article class="one_part">
        <h2><a href="#" class="one_part_link">difference between str() and repr() in python</a></h2><hr>
        <p class="one_part_tags">python</p>
    </article>
    <article class="one_part">
        <h2><a href="#" class="one_part_link">difference between *args and **kwargs</a></h2><hr>
        <p class="one_part_tags">python</p>
    </article>
    <article class="one_part">
        <h2><a href="#" class="one_part_link">What is Querystring?</a></h2><hr>
        <p class="one_part_tags">python, querystring</p>
    </article>
    <article class="one_part">
        <h2><a href="#" class="one_part_link">introduction to class in python</a></h2><hr>
        <p class="one_part_tags">python, oop, class</p>
    </article>
    <article class="one_part">
        <h2><a href="#" class="one_part_link">connect vuetify with django</a></h2><hr>
        <p class="one_part_tags">vuetify, django</p>
    </article>
</section>
<!-- END INDEX ONE PART VIDEOS -->

<!-- INDEX ALL FREE -->
<section class="index_all_free">
    <p class="index_all_free_text">مشکلات مالی نباید مانعی برای یادگیری باشد</p>
</section>
<!-- END INDEX ALL FREE -->

<?php require_once("footer.php"); ?>
