<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan XYZ</title>
<meta name="keywords" content="Perpustakaan XYZ" />
<meta name="description" content="Perpustakaan XYZ" />
    <link rel="stylesheet" href="assets/css/templatemo_style.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <script type="text/javascript" src="assets/js/hehe.js"></script> <!-- Gem jQuery -->
    <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script>
    <!-- <script type="text/javascript" src="js/leanModal-modified-for-onload.js"></script> -->
    <script language="javascript" type="text/javascript"></script>
</head>
<body>

<div id="templatemo_container">

	<div id="templatemo_banner">

		<div id="logo_head">
			<a href="#"><img src="assets/images/books.png" height="70" width="70"></a>
		</div>

        <div id="search_section">
            <form action="#" method="get">
                <input type="text" placeholder="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    </div> <!-- end of banner -->
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="#" class="current">Home</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Info</a></li>
            <li><a href="#">News</a></li>
            <li><a id="modal_trigger" href="#modal">LOGIN / Register</a></li>
        </ul>    	


        <div id="modal" class="popupContainer" style="display:none;">
            <header class="popupHeader">
                <span class="header_title">Login</span>
                <span class="modal_close">X<i class="fa fa-times"></i></span>
            </header>

            <section class="popupBody">
                        <!-- Social Login -->
                        <div class="social_login">

                                <div class="first_login">
                                	<span><img src="assets/images/books.png" height="80" width="80"></span><br><br>
                                    <p>Haloo , selamat datang di sistem informasi perpustakaan xyz</p><br>
                                    <p>silakan login terlebih dahulu atau REgister jika ingin meminjam</p> 
                                </div>
                                <br>

                                <div class="centeredText">
                                <div class="action_btns">
                                        <div class="one_punch"><a href="#" id="login_form" class="btn">Login</a></div><br>
                                        <div class="one_punch"><a href="#" id="register_form" class="btn">Register</a></div>
                                </div>
                                </div>
                        </div>

                        <!-- Username & Password Login form -->
                        <div class="user_login">

                        	<div style="text-align:center;clear: both;"><img src="assets/images/books.png" height="80" width="80"></div><br><br>
                                <form action="<?php echo base_url();?>login/do_login" method="post">
                                        <label>Username</label>
                                        <input type="text" name="uname" autofocus /> <?php echo form_error('username');?>
                                        <br />

                                        <label>Password</label>
                                        <input type="password" name="pass" /> <?php echo form_error('password');?></td>
                                        <br /><br>


                                        <div class="action_btns">
                                                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                <div class="one_half last">
                                                	<input style="border:none;outline:none;" class="btn btn_red" type="submit" value="Login">
                                                </div>
                                                <!-- <div class="one_half last"><a href="#" type="submit" class="btn btn_red">Login</a></div> -->
                                        </div>
                                </form>

                        </div>

                        <!-- Register Form -->
                        <div class="user_register">

                        	<div style="text-align:center;clear: both;"><img src="assets/images/books.png" height="80" width="80"></div><br><br>
                                <form action="<?php echo base_url(). 'login/registers'; ?>" method="post">
                                        <label>Full Name</label>
                                        <input type="text" name="nama" autofocus />
                                        <br />

                                        <label>Username</label>
                                        <input type="text" name="username"/>
                                        <br />

                                        <label>Password</label>
                                        <input type="password" name="pazz"/>
                                        <br />

                                        <br />

                                        <div class="action_btns">
                                                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                                <div class="one_half last"><input style="border:none;outline:none;" class="btn btn_red" type="submit" value="Register"></div>
                                        </div>
                                </form>
                        </div>


            </section>
        </div>
    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
        <div class="section_w335 fl margin_right_40">
        	<div class="header_01">Buku Anak</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_01.jpg" alt="image" /></div>
            
            <p>This is a free website template provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>. You may apply this template for your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Nunc a nulla. Suspendisse vitae orci a ligula egestas bibendum. Pellentesque tempus sapien nec sem commodo ullamcorper. <a href="#">Read more...</a></p>
        </div>
        
        <div class="section_w335 fl">
        
        	<div class="header_01">Busana & Kecantikan</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_02.jpg" alt="image" /></div>
            
            <p>Donec mattis rhoncus mi. Aliquam erat arcu, euismod et, dignissim in, interdum ac, est. Mauris congue felis at nisi. Donec felis. Pellentesque leo lacus, rhoncus nec, consequat ac, ullamcorper nec, orci. </p>
            <p>Quisque blandit eros et lorem. Etiam nec enim. Cras arcu. Integer molestie. Aliquam a dui. Suspendisse ac magna quis est eleifend dictum. <a href="#">Read more...</a></p>
        </div>

        <div class="margin_bottom_40"></div>

        <div class="section_w335 fl margin_right_40">
            <div class="header_01">Novel</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_01.jpg" alt="image" /></div>
            
            <p>This is a free website template provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>. You may apply this template for your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Nunc a nulla. Suspendisse vitae orci a ligula egestas bibendum. Pellentesque tempus sapien nec sem commodo ullamcorper. <a href="#">Read more...</a></p>
        </div>
        
        <div class="section_w335 fl">
        
            <div class="header_01">Ekonomi dan Manajemen</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_02.jpg" alt="image" /></div>
            
            <p>Donec mattis rhoncus mi. Aliquam erat arcu, euismod et, dignissim in, interdum ac, est. Mauris congue felis at nisi. Donec felis. Pellentesque leo lacus, rhoncus nec, consequat ac, ullamcorper nec, orci. </p>
            <p>Quisque blandit eros et lorem. Etiam nec enim. Cras arcu. Integer molestie. Aliquam a dui. Suspendisse ac magna quis est eleifend dictum. <a href="#">Read more...</a></p>
        </div>

        <div class="margin_bottom_40"></div>
 
         <div class="section_w335 fl margin_right_40">
            <div class="header_01">Majalah</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_01.jpg" alt="image" /></div>
            
            <p>This is a free website template provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>. You may apply this template for your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Nunc a nulla. Suspendisse vitae orci a ligula egestas bibendum. Pellentesque tempus sapien nec sem commodo ullamcorper. <a href="#">Read more...</a></p>
        </div>
        
        <div class="section_w335 fl">
        
            <div class="header_01">Kesehatan dan Lingkungan</div>
            <div class="image_wrapper"><img src="assets/images/templatemo_image_02.jpg" alt="image" /></div>
            
            <p>Donec mattis rhoncus mi. Aliquam erat arcu, euismod et, dignissim in, interdum ac, est. Mauris congue felis at nisi. Donec felis. Pellentesque leo lacus, rhoncus nec, consequat ac, ullamcorper nec, orci. </p>
            <p>Quisque blandit eros et lorem. Etiam nec enim. Cras arcu. Integer molestie. Aliquam a dui. Suspendisse ac magna quis est eleifend dictum. <a href="#">Read more...</a></p>
        </div>       
        
        <div class="margin_bottom_30"></div>
        <div style="text-align:right;font-size:150%;"><a href="#"> >> SEMUA KATEGORI</a></div>

        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

    
    <div id="templatmeo_content_bottom">
            
        <div class="margin_bottom_40 b_bottom"></div>
        <div class="margin_bottom_30"></div>
        
        <div id="templatemo_footer">
        
            <ul class="footer_list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Info</a></li>
                <li class="last"><a href="#">News</a></li>
            </ul> 
            
            <div class="margin_bottom_10"></div>
            
            Copyright © 2017 Taman Bacaan XYZ
            
            <div class="margin_bottom_20"></div>
            
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.orgs.ttu.edu/debs2013/images/facebook_logo.png" width="50" height="50" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://blogs.brighton.ac.uk/ng132/files/2015/04/twitter-logo-1hxfr8a-300x113.png" width="50" height="50" /></a>
		
        </div>
        
        <div class="cleaner"></div>    
    </div> <!-- end of content bottom -->
</div> <!-- end of container -->

<!-- ===============================================-->
<script type="text/javascript">
    $("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

    $(function(){
        // Calling Login Form
        $("#login_form").click(function(){
            $(".social_login").hide();
            $(".user_login").show();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function(){
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Register');
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function(){
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Login');
            return false;
        });

    })
</script>
<!-- ===============================================-->

</body>
<!--  Free Website Templates @ TemplateMo.com  -->
</html>