<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost:80/PPBT/assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="http://localhost:80/PPBT/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="http://localhost:80/PPBT/assets/animation/animate.css">
    <link rel="stylesheet" href="http://localhost:80/PPBT/css/style.css">
    <link rel="stylesheet" href="http://localhost:80/PPBT/css/responsive.css">
    <title>PPBT+</title>


</head>

<body>
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="<?php echo base_url(); ?>img/spinner_logo.png" alt="">
                    <h4>ARSIP <span>PPBT</span><span style="color:#10b3d6;">+</span></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg menu_one display_none bg-info" id="sticky" style="top: 0px;">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="<?php echo $sitenya['url']; ?>">
                    <img src="http://localhost:80/PPBT/img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    <img src="http://localhost:80/PPBT/img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
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
                            <?php if ($status_login == '1') { ?>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $user['id_user']; ?>
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu" style="left: 0 !important; margin-top:-20px;">
                                <li class="nav-item"><a href="<?php echo base_url(); ?>auth" class="nav-link">My Account</a></li>
                                <li class="nav-item"><a href="<?php echo base_url(); ?>auth/logout" class="nav-link">Sign Out</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <a class="nav_btn" href="<?php echo site_url('auth/login') ?>"><i class="icon_profile"></i>&nbsp;&nbsp;Log In</a>
                    <?php } ?>

                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card mt-5 mb-5">
            <form>
                <div class="card-body mt-5">
                    <!-- <div class="form-group">
                    <h6>Budget Range</h6>
                    <div class="box_info d-flex flex-row bd-highlight mb-3">
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios" id="budgetOne" value="option1" checked="">
                            <label class="form-check-label" for="budgetOne">
                                TIKET
                            </label>
                        </div>
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios" id="budgetTwo" value="option2" checked="">
                            <label class="form-check-label" for="budgetTwo">
                                NON-TIKET/DOKUMENTASI
                            </label>
                        </div>
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios" id="budgetThree" value="option3" checked="">
                            <label class="form-check-label" for="budgetThree">
                                PERMINTAAN DATA
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h6>Budget Range</h6>
                    <div class="box_info d-flex flex-row bd-highlight mb-3">
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios1" id="budgetOne" value="option1" checked="">
                            <label class="form-check-label" for="budgetOne">
                                TIKET
                            </label>
                        </div>
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios1" id="budgetTwo" value="option2" checked="">
                            <label class="form-check-label" for="budgetTwo">
                                NON-TIKET/DOKUMENTASI
                            </label>
                        </div>
                        <div class="form-check mr-5">
                            <input class="form-check-input" type="radio" name="gridRadios1" id="budgetThree" value="option3" checked="">
                            <label class="form-check-label" for="budgetThree">
                                PERMINTAAN DATA
                            </label>
                        </div>
                    </div>
                </div> -->
                    <h6>KATEGORI</h6>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">TIKET</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                        <label class="form-check-label" for="inlineRadio2">NON-TIKET/DOKUMENTASI</label>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
                        <label class="form-check-label" for="inlineRadio3">PERMINTAAN DATA</label>
                    </div>
                    <h6>TAG</h6>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">METER</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2" required>
                        <label class="form-check-label" for="inlineRadio2">PDL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="option3" required>
                        <label class="form-check-label" for="inlineRadio3">SLO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="option3" required>
                        <label class="form-check-label" for="inlineRadio3">FSO</label>
                    </div>
                    <div class="row contact_fill">
                        <div class="col-lg-4 form-group">
                            <h6>KONTEN_ID</h6>
                            <input type="text" class="form-control" name="name" id="name" placeholder="KONTEN KREATOR DSINI" value='' required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <h6>JUDUL</h6>
                            <input type="text" class="form-control" name="name" id="name" placeholder="JUDULNYA MAS/MBAK" value='' required>
                        </div>
                        <div class="col-lg-12 form-group">
                            <h6>PERMASALAHAN</h6>
                            <textarea class="form-control message" id="content-1" placeholder="Enter Your Text ..." required></textarea>
                        </div>
                        <div class="col-lg-12 form-group">
                            <h6>PENYELESAIAN</h6>
                            <textarea class="form-control message" id="content" placeholder="Enter Your Text ..." required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <button type="submit" class="btn action_btn thm_btn float-right mb-2">MASUKIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://localhost:80/PPBT/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost:80/PPBT/js/pre-loader.js"> </script>
    <script src="http://localhost:80/PPBT/assets/bootstrap/js/popper.min.js"></script>
    <script src="http://localhost:80/PPBT/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost:80/PPBT/js/parallaxie.js"></script>
    <script src="http://localhost:80/PPBT/js/TweenMax.min.js"></script>
    <script src="http://localhost:80/PPBT/assets/wow/wow.min.js"></script>
    <script src="http://localhost:80/PPBT/js/main.js"></script>
    <script src="http://localhost:80/PPBT/assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('content-1');
    </script>
</body>

</html>