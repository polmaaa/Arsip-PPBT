
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>PPBT+</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?php echo base_url();?>img/spinner_logo.png" alt="">
                    <h4>ARSIP <span>PPBT</span><span style="color:#10b3d6;">+</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="click_capture"></div>

    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one fadeInDown" id="sticky" style="top: 0px;">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="index.html">
                    <img src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    <img src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu">
                            <a class="nav_btn" href="<?php echo site_url('signin') ?>"><i class="icon_profile"></i>&nbsp;&nbsp;Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="breadcrumb_area">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
            <div class="container custom_container">
                <form action="#" class="banner_search_form banner_search_form_two">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                        <div class="input-group-append">
                            <select class="custom-select" id="inlineFormCustomSelect">
                                <option selected>All Category</option>
                                <option value="1">Doc Archive</option>
                                <option value="2">Doc List</option>
                                <option value="3">KbDoc</option>
                            </select>
                        </div>
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </form>
            </div>
        </section>

        <section class="page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog with sidebar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_blog_grid_area sec_pad forum-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        

                        <div class="post-header">
                            <div class="support-info">
                                <ul class="support-total-info">
                                    <li class="open-ticket"><i class="icon_info_alt"></i>576 cases</li>
                                </ul>
                            </div>
                            <!-- /.support-info -->

                            <div class="support-category-menus">
                                <ul class="category-menu">
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAuthor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Author
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAuthor">
                                                <h3 class="title">Filter by author</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" href="#0" data-rel="richard">
                                                        <img src="img/home_support/fl1.png" alt="user">
                                                        Richard Tea
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="druid">
                                                        <img src="img/home_support/fl2.png" alt="user">
                                                        Druid Wensleydale
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="weir">
                                                        <img src="img/home_support/fl3.png" alt="user">
                                                        Weir Doee
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="giles">
                                                        <img src="img/home_support/fl4.png" alt="user">
                                                        Giles Posture
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="theodore">
                                                        <img src="img/home_support/fl5.png" alt="user">
                                                        Theodore Handle
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="mann">
                                                        <img src="img/home_support/fl6.png" alt="user">
                                                        Guy Mann
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="dylan">
                                                        <img src="img/home_support/fl7.png" alt="user">
                                                        Dylan Meringue
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="fletch">
                                                        <img src="img/home_support/fl8.png" alt="user">
                                                        Fletch Skinner
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Label
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLabel">
                                                <h3 class="title">Filter by label</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" data-rel="kbDoc" href="#0">
                                                        <span class="color-purple"></span>
                                                        KbDoc
                                                    </a>
                                                    <a class="dropdown-item" data-rel="improvement" href="#0">
                                                        <span class="color-yellow">
                                                        </span>
                                                        Improvement !
                                                    </a>
                                                    <a class="dropdown-item" data-rel="css" href="#0">
                                                        <span class="color-ass"></span>
                                                        CSS
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="feature">
                                                        <span class="color-green"></span>
                                                        Feature
                                                    </a>
                                                    <a class="dropdown-item" data-rel="spider" href="#0">
                                                        <span class="color-orange"></span>
                                                        Spider theme
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="open">
                                                        <span class="color-theme"></span>
                                                        Open
                                                    </a>
                                                    <a class="dropdown-item" data-rel="bug" href="#0">
                                                        <span class="color-pink"></span>
                                                        Bug !
                                                    </a>
                                                    <a class="dropdown-item" data-rel="doc" href="#0">
                                                        <span class="color-light-green"></span>
                                                        Docs
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAssignee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Assignee
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAssignee">
                                                <h3 class="title">Filter by author</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl1.png" alt="user">
                                                        Richard Tea
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl2.png" alt="user">
                                                        Druid Wensleydale
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl3.png" alt="user">
                                                        Weir Doee
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl4.png" alt="user">
                                                        Giles Posture
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl5.png" alt="user">
                                                        Theodore Handle
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl6.png" alt="user">
                                                        Guy Mann
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl7.png" alt="user">
                                                        Dylan Meringue
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl8.png" alt="user">Fletch Skinner
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <h3 class="title">Sort by</h3>
                                                <div class="short-by">
                                                    <a class="dropdown-item active-short" href="#0">Newest</a>
                                                    <a class="dropdown-item" href="#0">Oldest</a>
                                                    <a class="dropdown-item" href="#0">Most commented</a>
                                                    <a class="dropdown-item" href="#0">Least commented</a>
                                                    <a class="dropdown-item" href="#0">Recently updated</a>
                                                    <a class="dropdown-item" href="#0">Least recently updated</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.support-category-menus -->
                        </div>
                        <!-- /.post-header -->

                        <div class="community-posts-wrapper bb-radius">
                            <div class="community-post style-two kbDoc richard bug">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Workspace/Org Administration</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm1.png" alt="cmm"><a href="#">Polma Saut Martua Sihotang</a></li>
                                            <li><i class="icon_calendar"></i>updated 3 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li>KATEGORI</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two improvement kbDoc open druid">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp1.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title"><a href="forum-single.html">Course do not display properly</a> </h3>
                                        <div class="cat-wrap">
                                            <a class="badge" href="#">Docbuzz</a>
                                        </div>
                                        <span class="com-featured">
                                            <i class="icon_check"></i>
                                        </span>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm2.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 5 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->

                            <div class="community-post style-two css feature improvement weir">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp3.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title"><a href="forum-single.html">How to add a different logo image to the NON
                                                Sticky header?</a></h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm3.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 4 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two feature kbDoc spider richard">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp4.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">
                                                Sticky navbar is shown, but state is inactive
                                            </a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-yellow" href="#">Improvement !</a>
                                            <a class="badge color-ass" href="#">CSS</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm4.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 4 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two spider open weir">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp5.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">
                                                Performance issue uikit v3 and C3js
                                            </a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm5.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 5 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two bug feature doc open druid dylan">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp6.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Course do not display properly</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-green" href="#">Feature</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm6.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two spider doc open giles fletch">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp10.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Apps/Integrations/APIs</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm7.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                        <span class="com-featured">
                                            <i class="icon_check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two kbDoc bug open dylan">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp7.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Course do not display properly</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-orange" href="#">Spider theme</a>
                                            <a class="badge color-theme" href="#">Open</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm8.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two giles mann">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp8.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">UK-form-custom / select / multiple </a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm9.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two theodore fletch">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp9.png" alt="community post">
                                    </div>

                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Change �courses� in URL permalink base</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-pink" href="#">Bug!</a>
                                        </div>

                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm10.png" alt="cmm">
                                                <a href="#">WordPress Theme</a>
                                            </li>
                                            <li><i class="icon_calendar"></i>updated 6 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two mann">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Disable animations for ui testing</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm2.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two theodore">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp6.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Lightbox zoom on mobile device</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-green" href="#">Feature</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm11.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                        </div>
                        <!-- /.community-posts-wrapper -->

                        <div class="pagination-wrapper">
                            <div class="view-post-of">
                                <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
                            </div>
                            <ul class="post-pagination">
                                <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                                </li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">15</a></li>
                                <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.pagination-wrapper -->

                    </div>
                    <!-- /.col-lg-8 -->

                </div>
            </div>
        </section>
		
		

        
        <!-- /.call-to-action -->
        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="img/v.svg" alt="">
            <img class="p_absolute f_man wow fadeInRight" data-wow-delay="0.6s" src="img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two wow fadeInLeft" data-wow-delay="0.3s" src="img/home_two/man.png" alt="">
            <div class="footer_bottom text-center">
                <div class="container">
                    <p>� 2020 All Rights Reserved by <a href="index.html">KbDoc</a></p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.wavify.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>