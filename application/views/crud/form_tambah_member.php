
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="<?php echo site_url('dashboard')?>" class="current">Member</a></li>
            <li><a href="<?php echo site_url('atur_buku')?>">Buku</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?php echo site_url('dashboard/info'); ?>">Info</a></li>
            <li><a href="<?php echo site_url('dashboard/news'); ?>">News</a></li>
        </ul>    	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">tambah member</div>
        <div class="margin_bottom_30"></div>

        <div class="lol">
		 	<form action="<?php echo site_url('dashboard/tambah_member');?>" method="POST" onsubmit="return confirm('Do you really want to submit the form?');">
	


				 Nama : <br/><input type="text" name="nama" >
				 <br/><br/>
				 Username : <br/><input type="text" name="username" >
				 <br/><br/>
				 Password : <br/><input type="password" name="password" >
				 <br/><br/>
				 Alamat : <br/><input type="text" name="alamat" >
				 <br/><br/>
				 Telpon : <br/><input type="text" name="telpun" >
				 <br/><br/>
				 Email : <br/><input type="email" name="email" >
				 <br/><br/>

				 <input type="submit" value="Tambah" />
			 </form>
		</div>


        <div class="margin_bottom_40"></div>

        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

    
