<link rel="stylesheet" href="<?php echo base_url();?>js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<style>
.custom-select{
    width:100%; border-radius: 6px; background-color: white; border: 1px solid #e3e8ea; font-size: 14px; color: #1d2746; font-weight: 400; font-family: "Roboto", sans-serif; height: 60px; line-height: 60px; padding: 2px 30px 0; transition: all 0.2s linear;
}
.form-control{background-color:white !important;}
</style>
        <section class="breadcrumb_area">
            <!-- <img class="p_absolute bl_left" src="img/v.svg" alt=""> -->
            <!-- <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt=""> -->
            <img class="p_absolute star" src="<?php echo base_url();?>img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="<?php echo base_url();?>img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="<?php echo base_url();?>img/blog-classic/shap_02.png" alt="">
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
                <h2 class="h_title wow fadeInUp">Tambah</h2>
            </div>
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
            <form class="row login_form" action="<?php echo site_url('auth/proses_tambah') ?>" method="post">
                <div class="col-sm-12 form-group">
                    <div class="col-lg-12 form-group">
                            <div class="small_text">Kategori</div>
                            <div class="input-group-append">
                                <select id="myselect" name ='myselect'class="custom-select">
                                    <option value="0" selected>DOCUMENTATION</option>
                                    <option value="1">ITSM</option>
                                    <option value="2">PERMINTAAN DATA</option>
                                </select>
                            </div>
                        <ul class="nav nav-tabs" id="myTab" hidden="hidden">
                            <li class="active"><a href="#documentation"></a></li>
                            <li class="active1"><a href="#itsm"></a></li>
                            <li><a href="#permintaan_data"></a></li>
                        </ul>
                    </div>


                    <div class="tab-content">
               

                        <div class="tab-pane active" id="documentation">
                            <div class="col-lg-12 form-group">
                                        <div class="small_text">JUDUL</div>
                                            <input type="text" class="form-control" name="judul-doc" id="judul-doc" placeholder="Judul">

                            </div>
							<div class="col-lg-12 form-group">
                                        <div class="small_text">TAG</div>
                                            <input type="text" class="form-control" name="tag-doc" id="tag-doc" placeholder="Judul">

                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Case Subject</div>
                                <input type="text" class="form-control" name="judul-doc" id="-doc" placeholder="Case Subject">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Case Description</div>
                                <textarea class="form-control" id="permasalahan-doc" name="permasalahan-doc" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Resolution</div>
                                <textarea class="form-control" id="penyelesaian-doc" name="penyelesaian-doc" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Pengecekan</div>
                                <textarea class="form-control" id="pengecekan-doc" name="pengecekan-doc" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="submit" class="btn action_btn thm_btn" value="Masukin">
                            </div> 
                        </div>
						
						 

                        
                   
					
					
               
						 <div class="tab-pane active1" id="itsm">
                            <div class="col-lg-12 form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="small_text">Case Owner & Complainant</div>
                                            <input type="text" class="form-control" name="owner" id="owner" placeholder="Case Owner & Complainant">
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="small_text">Incident</div>
                                            <input type="text" class="form-control" name="incident" id="incident" placeholder="Incident">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Case Subject</div>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Case Subject">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Case Description</div>
                                <textarea class="form-control" id="permasalahan" name="permasalahan" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Resolution</div>
                                <textarea class="form-control" id="penyelesaian" name="penyelesaian" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <label class="small_text" for="example-daterange1">Time</label>
                                <div class="input-daterange input-group" data-date-format="dd/mm/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                    <input type="text" class="form-control" id="time1" name="time1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                    <div class="input-group-prepend input-group-append">
                                        <span class="input-group-text font-w600">to</span>
                                    </div>
                                    <input type="text" class="form-control" id="time2" name="time2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Pengecekan</div>
                                <textarea class="form-control" id="pengecekan" name="pengecekan" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <input type="submit" class="btn action_btn thm_btn" value="Masukin">
                            </div> 
                        </div>

                        
                    </div>
					 

                    <!-- 
                    <div class="col-lg-12 form-group">
                        <div class="small_text">Judul</div>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="small_text">Permasalahan</div>
                        <textarea class="form-control" id="permasalahan" name="permasalahan" placeholder="Enter Your Text ..." required></textarea>
                    </div>
                    <div class="col-lg-12 form-group">
                        <button type="submit" class="btn action_btn thm_btn">Masukin</button>
                    </div> 
                    -->


                    
                </div>
                
            </form>
        </div>
        </section> 

        
        <?php include '/../footer.php'; ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/pre-loader.js"> </script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>js/parallaxie.js"></script>
    <script src="<?php echo base_url();?>js/TweenMax.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.wavify.js"></script>
    <script src="<?php echo base_url();?>assets/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>js/main.js"></script>
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>js/codebase.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    
    <script>
        CKEDITOR.replace('permasalahan-doc');
        CKEDITOR.replace('permasalahan');
        CKEDITOR.replace('penyelesaian');
        CKEDITOR.replace('penyelesaian-doc');
        CKEDITOR.replace('pengecekan');
        CKEDITOR.replace('pengecekan-doc');

        $('#mySelect').on('change', function (e) {
            $('#myTab li a').eq($(this).val()).tab('show'); 
        });

        
        jQuery(function () {
            // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
            Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
        });
    </script>
</body>

</html>
