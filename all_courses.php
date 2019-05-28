<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>Mongard | تمام دوره ها</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/title.png" type="image/x-icon" />

<!-- STYLES -->
<link rel="stylesheet" href="styles/all_courses.css">
<link rel="stylesheet" href="styles/harmony.css">

<!-- FONTAWESOME -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->
</head>
<body>

<?php require_once("header.php"); ?>

<!-- TOP PART -->
<section class="all_courses_top_container">
    <img src="images/all_courses_wallpaper.jpg" class="all_courses_wallpaper" alt="">
    <p class="all_courses_title">تمام دوره ها</p>
</section>
<!-- END TOP PART -->

<!-- MAIN CONTENT -->
<section class="all_courses_container">
    <article class="course_container">
        <img src="images/django2.jpg" class="course_image" alt="">
        <img src="images/loading_icon.png" title="در حال برگزاری" class="status_icon" alt="">
        <h2><a href="course.php" class="course_link">پروژه اول: ساخت یک وبلاگ با Django</a></h2>
    </article>
    <article class="course_container">
        <img src="images/vue.jpg" class="course_image" alt="">
        <img src="images/loading_icon.png" title="در حال برگزاری" class="status_icon" alt="">
        <h2><a href="#" class="course_link">آموزش Vue js</a></h2>
    </article>
    <article class="course_container">
        <img src="images/python.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش مقدماتی python</a></h2>
    </article>
    <article class="course_container">
        <img src="images/mongodb.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش Mongodb</a></h2>
    </article>
    <article class="course_container">
        <img src="images/kotlin.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">دوره آشنایی Kotlin</a></h2>
    </article>
    <article class="course_container">
        <img src="images/html.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش Html</a></h2>
    </article>
    <article class="course_container">
        <img src="images/webscraping.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش python web scraping</a></h2>
    </article>
    <article class="course_container">
        <img src="images/git&github.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش Git و Github</a></h2>
    </article>
    <article class="course_container">
        <img src="images/wagtail.jpg" class="course_image" alt="">
        <h2><a href="#" class="course_link">آموزش Wagtail</a></h2>
    </article>
</section>
<!-- END MAIN CONTENT -->

<?php require_once("pagination.php"); ?>
<?php require_once("footer.php"); ?>
