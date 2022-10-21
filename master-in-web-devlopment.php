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
                                <h1 class="breadcrumbs-title">Master in Web Development</h1>
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
            <div class="back__course__area back__course__page_grid back-courses__single-page pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- <ul class="user-section">
                                    <li class="user">
                                        <span><img src="assets/images/course-single/user.jpg" alt="user"></span>
                                        <span>Teacher<em> Elon Gated</em></span>
                                    </li>
                                    <li>Last Update: <em>July 24, 2022</em></li>
                                    <li>Review: 
                                        <em class="back-ratings"> 
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i> 4.5
                                        </em> 
                                    </li>
                                </ul> -->
                            <h4 style="font-size: 23px; font-weight: 800;">Web development</h4>
                            <div class="image-banner"><img src="assets\images\course-single\Master-Web-development.webp"
                                    alt="user"></div>
                            <div class="course-single-tab">
                                <ul class="nav nav-tabs" id="back-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="discriptions" data-bs-toggle="tab"
                                            href="#discription" role="tab" aria-controls="discription"
                                            aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-bookmark">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg> Discription</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="curriculums" data-bs-toggle="tab" href="#curriculum"
                                            role="tab" aria-controls="curriculum" aria-selected="false"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-book">
                                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                                <path
                                                    d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z">
                                                </path>
                                            </svg> Curriculum</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="reviewss" data-bs-toggle="tab" href="#reviews"
                                            role="tab" aria-controls="reviews" aria-selected="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-star">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                </polygon>
                                            </svg> Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="back-tab-content">
                                    <div class="tab-pane fade show active" id="discription" role="tabpanel"
                                        aria-labelledby="discription">
                                        <h3>About This Course</h3>
                                        <p>The demand for Web Developer continues to grow and is one of the top most
                                            field in the IT Industry. Welcome to the Master Web Development Course - the
                                            only course you need to learn and become a web developer and kickstart your
                                            career in web development. This course is extremely comprehensive and one of
                                            the most detailed course. This course touches all the modern technologies
                                            needed in today's world like HTML, CSS, JavaScript, BootStrap. Even if you
                                            have zero programming experience, this course will take you from beginner to
                                            master. It's a 100% practical course where you will start building real
                                            application from scratch.</p>
                                        <div class="back-tag"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path
                                                    d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                </path>
                                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                            </svg> <a href="#">All you need to join the course:</a>
                                            <ul>
                                                <li><i class="icon_check"></i>Graduate or Under Graduate in any stream
                                                </li>
                                                <li><i class="icon_check"></i>Dedication to learn</li>
                                            </ul>
                                        </div>
                                        <ul class="back-objectives">
                                            <li>
                                                <h3>Learning Objectives</h3>
                                            </li>
                                            <li><i class="icon_check"></i> HTML</li>
                                            <li><i class="icon_check"></i> CSS</li>
                                            <li><i class="icon_check"></i> JAVASCRIPT</li>
                                            <li><i class="icon_check"></i> Bootstrap</li>
                                            <li><i class="icon_check"></i> PHP</li>
                                            <li><i class="icon_check"></i>MYSQL</li>
                                        </ul>

                                        <ul class="social-links">
                                            <li>
                                                <h4>Follow us</h4>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                        aria-labelledby="curriculum">
                                        <h3>Course Curriculum</h3>
                                        <p>Web Development Courses can be of various types, namely Web Development,
                                            Front End Web Development, Back End Web Development, Web Application, etc.
                                            The syllabus for these courses may vary. However, in all of these courses
                                            Introduction to Web Development, HTML, CSS, JavaScript</p>

                                        <div class="row" style="margin-top:50px">
                                            <div class="col-lg-12">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                HTML
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Syntax
                                                                        </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>HTML Document Structure - HEAD BODY</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Tags, Attribute, property </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>  Meta Tags, Creating layouts.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Heading tags, content tags, formatting tags, anchor tags, image tags  </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Canvas tags, Multimedia tags.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML5 tags - header, footer, main etc.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                CSS
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> CSS Selectors, use of stylesheets.
                                                                        </li>
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>CSS Layouts, CSS Properties.</li>

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Decorating contents.</li>

                                                                        
                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> CSS Animations, Decorating contents. </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Media Queries for responsive layouts</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>transform, transition, filter </li>
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Creating a simple website using HTML and CSS.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                JAVASCRIPT
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Importance of JS, Where JS is used.
                                                                        </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>JS Syntax, JS Operators</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Use of Console, var, data types, keywords </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>  Arrays, Date, String</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Conditional Logic(if else, switch) </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Loops(for, for each)</li>  

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Break and continue, Variable Scoping</li>

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> DOM Introduction, DOM Manipulation</li>

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Creating, updating, deleting elements from DOM</li>

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Error Handling in JS, Event Handling</li>

                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> validation in JS</li>
                                                                            
                                                                            <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Interacting with the webpage using JS.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                Bootstrap
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Syntax
                                                                        </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>HTML Document Structure - HEAD BODY</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Tags, Attribute, property </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>  Meta Tags, Creating layouts.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Heading tags, content tags, formatting tags, anchor tags, image tags  </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Canvas tags, Multimedia tags.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML5 tags - header, footer, main etc.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                PHP
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFive"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Syntax
                                                                        </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>HTML Document Structure - HEAD BODY</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Tags, Attribute, property </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>  Meta Tags, Creating layouts.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Heading tags, content tags, formatting tags, anchor tags, image tags  </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Canvas tags, Multimedia tags.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML5 tags - header, footer, main etc.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-week">
                                                        <h2 class="accordion-header" id="headingSix">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                MYSQL
                                                            </button>
                                                        </h2>
                                                        <div id="collapseSix" class="accordion-collapse collapse"
                                                            aria-labelledby="headingSix"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="single-week">
                                                                    <ul class="course__title">
                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Syntax
                                                                        </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>HTML Document Structure - HEAD BODY</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML Tags, Attribute, property </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>  Meta Tags, Creating layouts.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg>Heading tags, content tags, formatting tags, anchor tags, image tags  </li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> Canvas tags, Multimedia tags.</li>

                                                                        <li><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-file-text">
                                                                                <path
                                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                                </path>
                                                                                <polyline points="14 2 14 8 20 8">
                                                                                </polyline>
                                                                                <line x1="16" y1="13" x2="8" y2="13">
                                                                                </line>
                                                                                <line x1="16" y1="17" x2="8" y2="17">
                                                                                </line>
                                                                                <polyline points="10 9 9 9 8 9">
                                                                                </polyline>
                                                                            </svg> HTML5 tags - header, footer, main etc.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="social-links pt-20">
                                            <li>
                                                <h4>Follow us</h4>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews">
                                        <h3>Reviews</h3>
                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auci elit consequat ipsutis sem nibh id elit.</p>
                                        <div class="row mt-40">
                                            <div class="col-lg-4">
                                                <div class="five__number">
                                                    <em>5</em>
                                                    <div class="back-ratings">
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                        <i class="icon_star"></i>
                                                    </div>
                                                    <h6>4 Ratings</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 pl-40 md-pl-15">
                                                <div class="back-progress-bar md-mt-60">
                                                    <div class="skillbar-style2">
                                                        <h3 class="pb-25">Detailed Rating</h3>
                                                        <div class="skillbar green-dark-bg" data-percent="100">
                                                            <span class="skillbar-title">5 stars</span>
                                                            <p class="skillbar-bar"><span
                                                                    class="skill-bar-percent"></span></p>
                                                        </div>
                                                        <div class="skillbar" data-percent="30">
                                                            <span class="skillbar-title">4 stars</span>
                                                            <p class="skillbar-bar"><span
                                                                    class="skill-bar-percent"></span></p>
                                                        </div>
                                                        <div class="skillbar pink-bg" data-percent="0">
                                                            <span class="skillbar-title">3 stars</span>
                                                            <p class="skillbar-bar"></p>
                                                        </div>
                                                        <div class="skillbar sky-bg" data-percent="0">
                                                            <span class="skillbar-title">2 stars</span>
                                                            <p class="skillbar-bar"></p>
                                                        </div>
                                                        <div class="skillbar sky-bg" data-percent="">
                                                            <span class="skillbar-title">1 stars</span>
                                                            <p class="skillbar-bar"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3 class="pt-25 pb-15">2 Comments</h3>
                                        <a href="#" class="post-author">
                                            <div class="avatar">
                                                <img src="assets/images/course-single/user4.jpg" alt="user">
                                            </div>
                                            <div class="info">
                                                <div class="back-ratings">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <p>David blatant have it, standard A bit of how's your father my lady
                                                    absolutely.</p>
                                                <h4 class="name">Daniel Smith</h4>
                                                <span class="designation">April 16, 2022</span>
                                            </div>
                                        </a>

                                        <a href="#" class="post-author">
                                            <div class="avatar">
                                                <img src="assets/images/course-single/user5.jpg" alt="user">
                                            </div>
                                            <div class="info">
                                                <div class="back-ratings">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <p>David blatant have it, standard A bit of how's your father my lady
                                                    absolutely.</p>
                                                <h4 class="name">Mark Garcia</h4>
                                                <span class="designation">Jun 24, 2022</span>
                                            </div>
                                        </a>
                                        <div class="blog-form pt-30">
                                            <h3 class="pb-15">Write a Review</h3>
                                            <form id="contact-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="back-input">
                                                            <input id="name" type="text" name="name" placeholder="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 pdl-5">
                                                        <div class="back-input">
                                                            <input id="email" type="email" name="email"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="back-input">
                                                            <input id="subject" type="text" name="subject"
                                                                placeholder="Subject">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="back-ratings"> <b>Ratings:</b>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                        </div>
                                                        <div class="back-textarea">
                                                            <textarea id="message" name="message"
                                                                placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <button type="submit" class="back-btn">Submit Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="social-links pt-40">
                                            <li>
                                                <h4>Follow us</h4>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member">
                                        <h3>Members Info</h3>
                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio
                                            sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum
                                            velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                                            vitaes erat consequat auctor eu in elit.</p>
                                        <div class="member-sec mt-50">
                                            <h3>Total number of students in course: 24</h3>
                                            <ul class="user-section">
                                                <li class="user">
                                                    <span><img src="assets/images/course-single/user.jpg"
                                                            alt="user"></span>
                                                    <span><em>Douglas Lyphe</em> Instructor</span>
                                                </li>
                                                <li><em>04</em> Courses</li>
                                                <li><em> 02 </em> Reviews</li>
                                                <li><em> 2.50 </em> Rating</li>
                                            </ul>
                                            <ul class="user-section">
                                                <li class="user">
                                                    <span><img src="assets/images/course-single/user2.jpg"
                                                            alt="user"></span>
                                                    <span><em>Jason Response</em> Teacher </span>
                                                </li>
                                                <li><em>07</em> Courses</li>
                                                <li><em> 8 </em> Reviews</li>
                                                <li><em> 3.50 </em> Rating</li>
                                            </ul>
                                            <ul class="user-section">
                                                <li class="user">
                                                    <span><img src="assets/images/course-single/user3.jpg"
                                                            alt="user"></span>
                                                    <span><em>Eleanor Fant</em> Associate </span>
                                                </li>
                                                <li><em>02</em> Courses</li>
                                                <li><em> 05 </em> Reviews</li>
                                                <li><em> 4.00 </em> Rating</li>
                                            </ul>
                                        </div>
                                        <ul class="social-links pt-50">
                                            <li>
                                                <h4>Follow us</h4>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a>
                                            </li>
                                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mt-60">
                            <div class="back-sidebar pl-30 md-pl-0">
                                <div class="widget get-back-course">
                                    <h3 class="widget-title">Get the course</h3>
                                    <ul class="price__course">
                                        <li><i class="icon_house"></i><b>Instructor:</b> Eleanor Fant</li>
                                        <li><i class="icon_book_alt"></i><b>Lectures:</b> 14</li>
                                        <li><i class="icon_clock"></i><b>Duration:</b> 6 weeks</li>
                                        <li><i class="icon_profile"></i><b>Enrolled:</b> 20 students</li>
                                        <li><i class="icon_globe-2"></i><b>Language:</b> English</li>
                                    </ul>
                                </div>
                                <div class="widget back-post related__courses">
                                    <h3 class="widget-title">Related courses</h3>
                                    <ul class="related-courses">
                                        <li>
                                            <a href="coureses-single.html"><span class="post-images"><img
                                                        src="assets/images/related-course/1.jpg" alt="post"></span></a>
                                            <div class="titles">
                                                <div class="back-ratings">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <h4><a href="coureses-single.html">Expand business…</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="coureses-single.html"><span class="post-images"><img
                                                        src="assets/images/related-course/2.jpg" alt="post"></span></a>

                                            <div class="titles">
                                                <div class="back-ratings">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <h4><a href="coureses-single.html">Python and JS…</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="coureses-single.html"><span class="post-images"><img
                                                        src="assets/images/related-course/3.jpg" alt="post"></span></a>
                                            <div class="titles">
                                                <div class="back-ratings">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <h4><a href="coureses-single.html">The evolution of…</a></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Course Single Section End Here =================-->

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
</body>

</html>