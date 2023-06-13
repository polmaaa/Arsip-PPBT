
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/elagent-icon/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/animation/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css">
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
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
					
    <div style="border-radius: 10px; background: #fff; box-shadow: 0px 10px 20px 0px rgba(82, 63, 105, 0.15);  position: relative; padding:30px;">
                        <div class="text-center">
                        <img src="<?php echo base_url();?>img/logo.png" srcset="<?php echo base_url();?>img/logo-2x.png 2x" alt="logo">
                        </div>
                        <div class="divider">
                            <span class="or-text"></span>
                        </div>
                        <form class="row login_form" action="<?php echo site_url('auth/proses') ?>" method="post">
                            <div class="col-lg-12 form-group">
                                <div class="small_text">ID User</div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="PS.PUSAT.POLMA">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Password</div>
                                <div class="confirm_password">
                                    <input id="confirm-password" name="password" type="password" class="form-control" placeholder="ngoehehehe" autocomplete="off">
                                    <a href="#" class="forget_btn">Lupa Password?</a>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Masukin</button>
                            </div>
                        </form>
                    </div>
		</div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>js/pre-loader.js"> </script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/parallaxie.js"></script>
    <script src="<?php echo base_url();?>js/TweenMax.min.js"></script>
    <script src="<?php echo base_url();?>assets/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>js/main.js"></script>
</body>

</html>