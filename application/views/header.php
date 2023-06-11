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
    <title><?php echo $sitenya['title']; ?></title>
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
                <a class="navbar-brand sticky_logo" href="<?php echo $sitenya['url']; ?>">
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
						<?php if($status_login=='1'){ ?>
							<li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $user['id_user']; ?> <img style="border-radius: 50%; width:20%; margin-left:10px;" src="<?php echo base_url().'img/auth/'.$user['link_profile']; ?>" alt="author avatar">
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu" style="left: 0 !important; margin-top:-20px;">
                                <li class="nav-item"><a href="<?php echo base_url();?>auth" class="nav-link">My Account</a></li>
                                <li class="nav-item"><a href="<?php echo base_url();?>auth/logout" class="nav-link">Sign Out</a></li>
                            </ul>
                        </li>
							<?php }else{ ?> 
							<a class="nav_btn" href="<?php echo site_url('auth/login') ?>"><i class="icon_profile"></i>&nbsp;&nbsp;Log In</a> 
						<?php } ?>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>