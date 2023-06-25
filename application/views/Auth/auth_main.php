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
            <div class="section_title text-center">
                <h2 class="h_title wow fadeInUp">Frequently Asked Questions</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">Some dodgy chav bevvy amongst argy-bargy spiffing
                    absolutely bladdered nancy boy cup of tea a load of old tosh porkies.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    

                    <div class="fact_navigation_info" style="background-color:white; padding:10px; margin:15px 0px 0px 0px;">
                        <a href="<?php echo $sitenya['url']; ?>/tambah" class="doc_border_btn border-light all_doc_btn wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp; width:100%; text-align:center; margin-top:0;">Tambah</a>
                    </div>

                    
                    <br />
                    <div class="fact_navigation_info">
                        <ul class="nav nav-tabs fact_navigation" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="documentation-tab" data-toggle="tab" href="#documentation" role="tab"
                                   aria-controls="documentation" aria-selected="true"><i class="icon_folder-alt"></i>Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="itsm-tab" data-toggle="tab" href="#itsm" role="tab"
                                   aria-controls="itsm" aria-selected="false"><i class="icon_cloud-upload_alt"></i>ITSM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="permintaandata-tab" data-toggle="tab" href="#permintaandata" role="tab"
                                   aria-controls="permintaandata" aria-selected="false"><i class="icon_key_alt"></i>Permintaan Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="tab-content pl_70" id="myTabContent">
                        <div class="tab-pane faq_tab_pane fade show active" id="documentation" role="tabpanel"
                             aria-labelledby="documentation-tab">
                            <div class="accordion doc_faq_info" id="accordionExample">
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                DOCUMENTATION<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.1s">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                Is maternity covered in health insurance policies?<i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.2s">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                What are the documents required for claiming? <i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber Ngoehehe bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.3s">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                Any useful books on numerical computing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.4s">
                                    <div class="card-header" id="headingfive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefive" aria-expanded="false"
                                                    aria-controls="collapsefive">
                                                How do I repair an item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.5s">
                                    <div class="card-header" id="headingsix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsesix" aria-expanded="false"
                                                    aria-controls="collapsesix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.6s">
                                    <div class="card-header" id="headingseven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseseven" aria-expanded="false"
                                                    aria-controls="collapseseven">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane faq_tab_pane fade" id="itsm" role="tabpanel"
                             aria-labelledby="itsm-tab">
                            <div class="accordion doc_faq_info" id="accordionExampletwo">
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px">
                                    <div class="card-header" id="headingfOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapsefOne" aria-expanded="true"
                                                    aria-controls="collapsefOne">
                                                ITSM<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefOne" class="collapse show" aria-labelledby="headingfOne"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.1s">
                                    <div class="card-header" id="headingfTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefTwo" aria-expanded="false"
                                                    aria-controls="collapsefTwo">
                                                Is maternity covered in health insurance policies?<i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefTwo" class="collapse" aria-labelledby="headingfTwo"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.2s">
                                    <div class="card-header" id="headingfThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefThree" aria-expanded="false"
                                                    aria-controls="collapsefThree">
                                                What are the documents required for claiming? <i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefThree" class="collapse" aria-labelledby="headingfThree"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.3s">
                                    <div class="card-header" id="headingfFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefFour" aria-expanded="false"
                                                    aria-controls="collapsefFour">
                                                Any useful books on numerical computing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefFour" class="collapse" aria-labelledby="headingfFour"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.4s">
                                    <div class="card-header" id="headingffive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseffive" aria-expanded="false"
                                                    aria-controls="collapseffive">
                                                How do I repair an item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseffive" class="collapse" aria-labelledby="headingffive"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.5s">
                                    <div class="card-header" id="headingfsix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefsix" aria-expanded="false"
                                                    aria-controls="collapsefsix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefsix" class="collapse" aria-labelledby="headingfsix"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.6s">
                                    <div class="card-header" id="headingfseven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsefseven" aria-expanded="false"
                                                    aria-controls="collapsefseven">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsefseven" class="collapse" aria-labelledby="headingfseven"
                                         data-parent="#accordionExampletwo">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane faq_tab_pane fade" id="permintaandata" role="tabpanel"
                             aria-labelledby="permintaandata-tab">
                            <div class="accordion doc_faq_info" id="accordionExamplethree">
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px">
                                    <div class="card-header" id="headingpTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepTwo" aria-expanded="false"
                                                    aria-controls="collapsepTwo">
                                                PERMINTAAN DATA<i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepTwo" class="collapse" aria-labelledby="headingpTwo"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.1s">
                                    <div class="card-header" id="headingpOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapsepOne" aria-expanded="true"
                                                    aria-controls="collapsepOne">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepOne" class="collapse show" aria-labelledby="headingpOne"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.2s">
                                    <div class="card-header" id="headingpThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepThree" aria-expanded="false"
                                                    aria-controls="collapsepThree">
                                                What are the documents required for claiming? <i
                                                    class="icon_plus"></i><i class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepThree" class="collapse" aria-labelledby="headingpThree"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.3s">
                                    <div class="card-header" id="headingpFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepFour" aria-expanded="false"
                                                    aria-controls="collapsepFour">
                                                Any useful books on numerical computing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepFour" class="collapse" aria-labelledby="headingpFour"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.4s">
                                    <div class="card-header" id="headingpfive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepfive" aria-expanded="false"
                                                    aria-controls="collapsepfive">
                                                How do I repair an item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepfive" class="collapse" aria-labelledby="headingpfive"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.5s">
                                    <div class="card-header" id="headingpsix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepsix" aria-expanded="false"
                                                    aria-controls="collapsepsix">
                                                How can I deploy Documentation Landing?<i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepsix" class="collapse" aria-labelledby="headingpsix"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInUp" style="margin:15px 0px 15px -30px" data-wow-delay="0.6s">
                                    <div class="card-header" id="headingpseven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapsepseven" aria-expanded="false"
                                                    aria-controls="collapsepseven">
                                                Is there a warranty on my item? <i class="icon_plus"></i><i
                                                    class="icon_minus-06"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapsepseven" class="collapse" aria-labelledby="headingpseven"
                                         data-parent="#accordionExamplethree">
                                        <div class="card-body">
                                            Skive off he lost his bottle the little rotter absolutely bladdered in my
                                            flat William no biggie, gormless me old mucker such a fibber David bum bag
                                            so I said cack.!
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