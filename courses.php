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
                                            <div class="col-lg-4">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/1.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a
                                                                href="master-in-web-devlopment.php">Master in Web
                                                                Development</a></h3>
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
                                                        <h3 class="back-course-title"><a
                                                                href="master-in-digital-marketing.php">Master in Digital
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
                                            <div class="col-lg-4">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/2.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a
                                                                href="master-in-network-administration.php">Master in
                                                                Network
                                                                Administration</a></h3>
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
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
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
                                            <div class="col-lg-4 offset-lg-2 offset-0">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/1.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a
                                                                href="diploma-in-web-devlopment.php">Diploma in Web
                                                                Development</a></h3>
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
                                                        <h3 class="back-course-title"><a
                                                                href="diploma-in-digital marketing.php">Diploma in
                                                                Digital
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
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab">
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
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/1.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a href="red-hat-projection.php">RED
                                                                HAT Projection</a></h3>
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
                                                                href="routing-and-switching.php">Routing And Switching</a>
                                                        </h3>
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
                                                                src="assets/images/course/3.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a href="red-hat-administration.php">RED HAT Administration</a></h3>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 offset-lg-2 offset-0">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/4.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a
                                                                href="exchange-server.php">Exchange Server</a></h3>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="course__item mb-30">
                                                    <div class="course__thumb">
                                                        <a href="coureses-single.html"><img
                                                                src="assets/images/course/5.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="course__inner">
                                                        <h3 class="back-course-title"><a
                                                                href="networking.php">Networking</a></h3>
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