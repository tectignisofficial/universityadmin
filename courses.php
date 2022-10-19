<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Coureses Single | Dlear - Education HTML Template</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!--================= Bootstrap v5 css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Back Menus css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/back-menus.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!--================= owl carousel css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/elegant-icon.css">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Back Animations css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/back-animations.css">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--================= Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/back-spacing.css">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <style>
        /*----- Tabs -----*/
        .tabs {
            width: 100%;
            display: inline-block;
        }

        /*----- Tab Links -----*/
        /* Clearfix */
        .tab-links:after {
            display: block;
            clear: both;
            content: '';
        }

        .tab-links {

            padding: 30px;
        }

        .tab-links li {
            margin: 0px 5px;
            float: left;
            list-style: none;
        }

        .tab-links a {
            padding: 9px 15px;
            display: inline-block;
            border-radius: 3px 3px 0px 0px;
            background: ##fff;
            font-size: 20px;
            font-weight: 600;
            color: #4c4c4c;
            transition: all linear 0.15s;
        }

        .tab-links a:hover {
            border-radius: 10px;
            background: #8102af85;
            color: #fff;
            text-decoration: none;
        }

        li.active a,
        li.active a:hover {
            border-radius: 10px;
            background: #8102af;
            color: #fff;
        }

        /*----- Content of Tabs -----*/
        .tab-content {
            padding: 15px;
            border-radius: 3px;
            box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15);
            background: #fff;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
        }
    </style>
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="back__preloader">
        <div id="back__circle_loader"></div>
        <div class="back__loader_logo"><img src="assets/images/preload.png" alt="Preload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->

    <!--================= Header Section Start Here =================-->
    <?php
       include("include/header.php")
       ?>
    <!--================= Header Section End Here =================-->

    <!--================= back wrapper Start Here =================-->
    <div class="back-wrapper">
        <div class="back-wrapper-inner">

            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <img class="desktop" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">Courses</h1>
                                <div class="back-nav">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Courses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <!--================= Course Single Section Start Here =================-->
            <div class="tabs">
                <ul class="tab-links" style="display: flex; justify-content: center;">
                    <li class="active"><a href="#tab1">Master Course</a></li>
                    <li><a href="#tab2">Diploma Course</a></li>
                    <li><a href="#tab3">Certificate Course</a></li>
                </ul>

                <div class="tab-content">
                    <div id="tab1" class="tab active">
                        <div class="back-wrapper">
                            <div class="back-wrapper-inner">

                                <!--================= Course Single Section Start Here =================-->
                                <div class="back__course__area pt-120 pb-90">
                                    <img class="back__shape__1" src="assets/images/course/shape/1.png"
                                        alt="Shape Image">
                                    <img class="back__shape__2" src="assets/images/course/shape/02.png"
                                        alt="Shape Image">
                                    <div class="container">
                                        <div class="back__title__section text-center">
                                            <h6 class="back__subtitle">Featured Courses</h6>
                                            <h2 class="back__tittle"> Master courses </h2>
                                        </div>
                                        <div class="row mx-auto">
                                            <div class="col-lg-4 offset-2">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/1.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <span class="back-category cate-1">Master</span>
                                                        <h3 class="back-course-title"><a
                                                                href="master-in-web-devlopment.php">Master in Web
                                                                Devlopment</a></h3>
                                                        <div class="course__card-icon d-flex align-items-center">
                                                            <div class="course__card-icon--1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewbox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-user">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                    </path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                                <span>500k+</span>
                                                            </div>
                                                            <div class="course__card-icon--2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewbox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                                <span>4.9</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/2.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <span class="back-category cate-2">Diploma</span>
                                                        <h3 class="back-course-title"><a
                                                                href="coureses-single.html">Master in Digital
                                                                Marketing</a></h3>
                                                        <div class="course__card-icon d-flex align-items-center">
                                                            <div class="course__card-icon--1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewbox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-user">
                                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                    </path>
                                                                    <circle cx="12" cy="7" r="4"></circle>
                                                                </svg>
                                                                <span>500k+</span>
                                                            </div>
                                                            <div class="course__card-icon--2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewbox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                                <span>4.9</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--================= Course Single Section End Here =================-->

                                <div class="cta__area p-relative m-img pt-45 pb-150">
                                    <div class="container cta__width">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="cta__wrapper text-center">
                                                    <h6 class="cta__pre-subtitle">Featured Courses</h6>
                                                    <h2 class="cta__title">Course Curriculum</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature__area">
                                    <div class="container feature__width">
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="feature__item mb-30 transition-3 white-bg">
                                                    <div class="feature__icon mb-30">
                                                        <img src="assets/images/cta/icon/1.png"
                                                            alt="This is the icon image">
                                                    </div>
                                                    <div class="feature__content">
                                                        <h3 class="feature__title-1"><a href="contact.html">HTML</a>
                                                        </h3>
                                                        <p class="feature__paragraph">The modified parameters will be
                                                            pulled <br> panel
                                                            automatically.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="feature__item  feature__item2  mb-30 transition-3 white-bg">
                                                    <div class="feature__icon mb-30">
                                                        <img src="assets/images/cta/icon/2.png"
                                                            alt="This is the icon image">
                                                    </div>
                                                    <div class="feature__content">
                                                        <h3 class="feature__title-1"><a href="contact.html">CSS</a></h3>
                                                        <p class="feature__paragraph">The modified parameters will be
                                                            pulled <br> panel
                                                            automatically.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                    <div class="feature__icon mb-30">
                                                        <img src="assets/images/cta/icon/3.png"
                                                            alt="This is the icon image">
                                                    </div>
                                                    <div class="feature__content">
                                                        <h3 class="feature__title-1"><a href="contact.html">SEO</a></h3>
                                                        <p class="feature__paragraph">The modified parameters will be
                                                            pulled <br> panel
                                                            automatically.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                    <div class="feature__icon mb-30">
                                                        <img src="assets/images/cta/icon/3.png"
                                                            alt="This is the icon image">
                                                    </div>
                                                    <div class="feature__content">
                                                        <h3 class="feature__title-1"><a href="contact.html">SMO</a></h3>
                                                        <p class="feature__paragraph">The modified parameters will be
                                                            pulled <br> panel
                                                            automatically.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tab2" class="tab">
                        <div id="tab2" class="tab active">
                            <div class="back-wrapper">
                                <div class="back-wrapper-inner">

                                    <!--================= Course Single Section Start Here =================-->
                                    <div class="back__course__area pt-120 pb-90">
                                        <img class="back__shape__1" src="assets/images/course/shape/1.png"
                                            alt="Shape Image">
                                        <img class="back__shape__2" src="assets/images/course/shape/02.png"
                                            alt="Shape Image">
                                        <div class="container">
                                            <div class="back__title__section text-center">
                                                <h6 class="back__subtitle">Featured Courses</h6>
                                                <h2 class="back__tittle"> Diploma courses </h2>
                                            </div>
                                            <div class="row mx-auto">
                                                <div class="col-lg-4 offset-2">
                                                    <div class="course__item mb-30">
                                                        <div class="course__thumb">
                                                            <a href="coureses-single.html"><img
                                                                    src="assets/images/course/1.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="course__inner">
                                                            <h3 class="back-course-title"><a
                                                                    href="master-in-web-devlopment.php">Diploma in Web
                                                                    Devlopment</a></h3>
                                                            <div class="course__card-icon d-flex align-items-center">
                                                                <div class="course__card-icon--1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewbox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-user">
                                                                        <path
                                                                            d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="12" cy="7" r="4"></circle>
                                                                    </svg>
                                                                    <span>500k+</span>
                                                                </div>
                                                                <div class="course__card-icon--2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewbox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-star">
                                                                        <polygon
                                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                        </polygon>
                                                                    </svg>
                                                                    <span>4.9</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="course__item mb-30">
                                                        <div class="course__thumb">
                                                            <a href="coureses-single.html"><img
                                                                    src="assets/images/course/2.jpg" alt="image"></a>
                                                        </div>
                                                        <div class="course__inner">
                                                            <h3 class="back-course-title"><a
                                                                    href="coureses-single.html">Diploma in Digital
                                                                    Marketing</a></h3>
                                                            <div class="course__card-icon d-flex align-items-center">
                                                                <div class="course__card-icon--1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewbox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-user">
                                                                        <path
                                                                            d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                        </path>
                                                                        <circle cx="12" cy="7" r="4"></circle>
                                                                    </svg>
                                                                    <span>500k+</span>
                                                                </div>
                                                                <div class="course__card-icon--2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewbox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-star">
                                                                        <polygon
                                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                        </polygon>
                                                                    </svg>
                                                                    <span>4.9</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--================= Course Single Section End Here =================-->

                                    <div class="cta__area p-relative m-img pt-45 pb-150">
                                        <div class="container cta__width">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div class="cta__wrapper text-center">
                                                        <h6 class="cta__pre-subtitle">Featured Courses</h6>
                                                        <h2 class="cta__title">Course Curriculum</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature__area">
                                        <div class="container feature__width">
                                            <div class="row">
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="feature__item mb-30 transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/1.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">HTML</a>
                                                            </h3>
                                                            <p class="feature__paragraph">The modified parameters will
                                                                be pulled <br> panel
                                                                automatically.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item  feature__item2  mb-30 transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/2.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">CSS</a>
                                                            </h3>
                                                            <p class="feature__paragraph">The modified parameters will
                                                                be pulled <br> panel
                                                                automatically.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/3.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">SEO</a>
                                                            </h3>
                                                            <p class="feature__paragraph">The modified parameters will
                                                                be pulled <br> panel
                                                                automatically.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/3.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">SMO</a>
                                                            </h3>
                                                            <p class="feature__paragraph">The modified parameters will
                                                                be pulled <br> panel
                                                                automatically.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab">
                        <div id="tab3" class="tab active">
                            <div class="back-wrapper">
                                <div class="back-wrapper-inner">
                                    <!--================= Course Single Section Start Here =================-->
                                    <div class="back__course__area pt-120 pb-90">
                                        <img class="back__shape__1" src="assets/images/course/shape/1.png"
                                            alt="Shape Image">
                                        <img class="back__shape__2" src="assets/images/course/shape/02.png"
                                            alt="Shape Image">
                                        <div class="container">
                                            <div class="back__title__section text-center">
                                                <h6 class="back__subtitle">Featured Courses</h6>
                                                <h2 class="back__tittle"> Certificate courses </h2>
                                            </div>
                                            <div class="row mx-auto">
                                            <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/1.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-1">UX Design</span>
                                                    <h3 class="back-course-title"><a href="coureses-single.html">Become
                                                            a product <br> Manager learn the skills & job.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            $76.00 <img src="assets/images/course/small-image/1.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/2.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-2">Development</span>
                                                    <h3 class="back-course-title"><a href="coureses-single.html">Open
                                                            Programming <br>Courses for Everyone Python.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            $57.00 <img src="assets/images/course/small-image/2.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/3.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-3">Audio & Music</span>
                                                    <h3 class="back-course-title"><a
                                                            href="coureses-single.html">Learning to write as a
                                                            <br>Professional.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            Free <img src="assets/images/course/small-image/3.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/4.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-4">Marketing</span>
                                                    <h3 class="back-course-title"><a
                                                            href="coureses-single.html">Academic Listening and <br> Note
                                                            taking.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            $42.00 <img src="assets/images/course/small-image/4.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/5.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-5">Bicycling</span>
                                                    <h3 class="back-course-title"><a href="coureses-single.html">Master
                                                            Query in a Short<br> Period of Time.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            Free <img src="assets/images/course/small-image/5.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="course__item mb-30">
                                                <div class="course__thumb">
                                                    <a href="coureses-single.html"><img src="assets/images/course/6.jpg"
                                                            alt="image"></a>
                                                </div>
                                                <div class="course__inner">
                                                    <span class="back-category cate-6">Mechanical</span>
                                                    <h3 class="back-course-title"><a
                                                            href="coureses-single.html">Personal Finance Financial
                                                            <br>Security Thinking.</a></h3>
                                                    <div class="course__card-icon d-flex align-items-center">
                                                        <div class="course__card-icon--1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user">
                                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                                </path>
                                                                <circle cx="12" cy="7" r="4"></circle>
                                                            </svg>
                                                            <span>500k+</span>
                                                        </div>
                                                        <div class="course__card-icon--2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewbox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-star">
                                                                <polygon
                                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                </polygon>
                                                            </svg>
                                                            <span>4.9</span>
                                                        </div>
                                                        <div class="back__user">
                                                            $54.00 <img src="assets/images/course/small-image/1.png"
                                                                alt="user">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--================= Course Single Section End Here =================-->

                                    <div class="cta__area p-relative m-img pt-45 pb-150">
                                        <div class="container cta__width">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div class="cta__wrapper text-center">
                                                        <h6 class="cta__pre-subtitle">Featured Courses</h6>
                                                        <h2 class="cta__title">Course Curriculum</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature__area">
                                        <div class="container feature__width">
                                            <div class="row">
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="feature__item mb-30 transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/1.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">HTML</a>
                                                            </h3>
                                                            <p class="feature__paragraph"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item  feature__item2  mb-30 transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/2.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">CSS</a>
                                                            </h3>
                                                            <p class="feature__paragraph"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/3.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">SEO</a>
                                                            </h3>
                                                            <p class="feature__paragraph"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div
                                                        class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                                        <div class="feature__icon mb-30">
                                                            <img src="assets/images/cta/icon/3.png"
                                                                alt="This is the icon image">
                                                        </div>
                                                        <div class="feature__content">
                                                            <h3 class="feature__title-1"><a href="contact.html">SMO</a>
                                                            </h3>
                                                            <p class="feature__paragraph"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--================= Back Wrapper End Here =================-->

        <!--================= Footer Section Start Here =================-->
        <?php
       include("include/footer.php")
       ?>
        <!--================= Footer Section End Here =================-->

        <!--================= Scroll Top Start Here =================-->
        <div id="backscrollUp">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div>
        <!--================= Scroll Top End Here =================-->

        <!--================= jquery latest version =================-->
        <script src="assets/js/jquery.min.js"></script>
        <!--================= modernizr js =================-->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!--================= bootstrap js =================-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--================= owl.carousel js =================-->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!--================= magnific popup =================-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--================= counter up js =================-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <!--================= wow js =================-->
        <script src="assets/js/wow.min.js"></script>
        <!--================= isotope.pkgd.min js =================-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--================= imagesloaded.pkgd.min js =================-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--================= skill.bars.jquery.js =================-->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <!--================= Back menus js =================-->
        <script src="assets/js/back-menus.js"></script>
        <!--================= plugins js =================-->
        <script src="assets/js/plugins.js"></script>
        <!--================= main js =================-->
        <script src="assets/js/main.js"></script>

        <script>
            jQuery(document).ready(function () {
                jQuery('.tabs .tab-links a').on('click', function (e) {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();
        </script>
</body>

</html>