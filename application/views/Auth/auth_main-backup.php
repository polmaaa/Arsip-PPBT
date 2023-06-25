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

        <section class="breadcrumb_area">
            <!-- <img class="p_absolute bl_left" src="img/v.svg" alt=""> -->
            <!-- <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt=""> -->
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
            <!-- <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt=""> -->
            <!-- <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt=""> -->
            <div class="container custom_container text-center" style="margin-top:-20px;">
                <div>
                <h1><span style="--tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)); font-size: 45%;">Selamat datang:</span></h1>
                <h1><span style="--tw-text-opacity: 1; color: rgb(255 255 255 / var(--tw-text-opacity)); font-weight: 700;    line-height: 3.25rem; letter-spacing: 2px; font-size: 130%;"><?php echo $user['nama_user'];?></span></h1>
                            </div>
            </div>
        </section>

        <section class="h_doc_documentation_area bg_color sec_pad">
            <div class="container">
                
                <ul class="nav nav-tabs documentation_tab" id="myTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="or" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="documentation-tab" data-toggle="tab" href="#documentation" role="tab" aria-controls="documentation" aria-selected="false">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="itsm-tab" data-toggle="tab" href="#itsm" role="tab" aria-controls="itsm" aria-selected="false">ITSM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="permintaan_data-tab" data-toggle="tab" href="#permintaan_data" role="tab" aria-controls="permintaan_data" aria-selected="false">Permintaan Data</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContents">
                    <div class="tab-pane documentation_tab_pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="documentation_text">
                                    <div class="round wow fadeInUp">
                                        <img src="img/home_one/icon/file1.png" alt="">
                                    </div>
                                    <h4 class="wow fadeInUp" data-wow-delay="0.2s">SEMUA YANG ADA DI ALL</h4>
                                    <p class="wow fadeInUp" data-wow-delay="0.3s">Omnis voluptate magna inceptos id velit autem, harum phasellus quo. Officia congue, natoque imperdiet iusto malesuada placerat. Augue temporibus </p>
                                    <a href="#" class="learn_btn wow fadeInUp" data-wow-delay="0.4s">Learn More<i class="arrow_right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp">
                                            <div class="icon">
                                                <img src="img/home_one/icon/folder.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Working with ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="icon">
                                                <img src="img/home_one/icon/envelope.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Formatting ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="icon">
                                                <img src="img/home_one/icon/smartphone.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Mobile ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Account ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="icon">
                                                <img src="img/home_one/icon/android.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Getting ALL</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane documentation_tab_pane fade" id="documentation" role="tabpanel" aria-labelledby="documentation-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="documentation_text">
                                    <div class="round">
                                        <img src="img/home_one/icon/file1.png" alt="">
                                    </div>
                                    <h4>SEMUA YANG ADA DI DOCUMENTATION</h4>
                                    <p>Omnis voluptate magna inceptos id velit autem, harum phasellus quo. Officia congue, natoque imperdiet iusto malesuada placerat. Augue temporibus </p>
                                    <a href="#" class="learn_btn">Learn More<i class="arrow_right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/smartphone.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Mobile DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Account DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/folder.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Working with DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/envelope.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Formatting DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/android.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Getting DOCUMENTATION</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane documentation_tab_pane fade" id="itsm" role="tabpanel" aria-labelledby="itsm-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="documentation_text">
                                    <div class="round">
                                        <img src="img/home_one/icon/file1.png" alt="">
                                    </div>
                                    <h4>SEMUA YANG ADA DI ITSM</h4>
                                    <p>Omnis voluptate magna inceptos id velit autem, harum phasellus quo. Officia congue, natoque imperdiet iusto malesuada placerat. Augue temporibus </p>
                                    <a href="#" class="learn_btn">Learn More<i class="arrow_right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/folder.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Working with ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/envelope.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Formatting ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/smartphone.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Mobile ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Account ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/android.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Getting ITSM</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane documentation_tab_pane fade" id="permintaan_data" role="tabpanel" aria-labelledby="permintaan_data-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="documentation_text">
                                    <div class="round">
                                        <img src="img/home_one/icon/file1.png" alt="">
                                    </div>
                                    <h4>SEMUA YANG ADA DI PERMINTAAN DATA</h4>
                                    <p>Omnis voluptate magna inceptos id velit autem, harum phasellus quo. Officia congue, natoque imperdiet iusto malesuada placerat. Augue temporibus </p>
                                    <a href="#" class="learn_btn">Learn More<i class="arrow_right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/folder.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Working with PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/envelope.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Formatting PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/smartphone.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Mobile PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Account PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/android.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Getting PERMINTAAN DATA</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 


		

        
        <!-- /.call-to-action -->
        <?php include '/../footer.php'; ?>
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