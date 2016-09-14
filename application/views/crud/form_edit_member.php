
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="<?php echo site_url('dashboard')?>" class="current">Member</a></li>
            <li><a href="<?php echo site_url('atur_buku')?>" >Buku</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?php echo site_url('dashboard/info'); ?>">Info</a></li>
            <li><a href="<?php echo site_url('dashboard/news'); ?>">News</a></li>
        </ul>    	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">edit member</div>
        <div class="margin_bottom_30"></div>

        <div class="lol">
		 	<!-- <form action="<?php echo site_url('dashboard/edit_member');?>" method="POST" onsubmit="return confirm('Do you really want to submit the form?');"> -->
	
            <?php echo form_open('dashboard/edit_member'); 
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>')?>

				 Nama : <br/><input type="text" name="nama" value="<?php echo $membah->PENGGUNA_NAMA;?>" >
				 <br/><?php echo form_error('nama'); ?><br/>
				 Username : <br/><input disabled type="text" name="username" value="<?php echo $membah->PENGGUNA_USERNAME;?>" >
				 <br/><br/>
				 Password : <br/><input type="text" name="password" value="<?php echo $membah->PENGGUNA_PASS;?>" >
				 <br/><?php echo form_error('password'); ?><br/>
				 Alamat : <br/><textarea rows="3" name="alamat"><?php echo $membah->PENGGUNA_ALAMAT;?></textarea>
				 <br/><?php echo form_error('alamat'); ?><br/>
				 Telpon : <br/><input type="text" name="telpun" value="<?php echo $membah->PENGGUNA_TELP;?>">
				 <br/><?php echo form_error('telpun'); ?><br/>
				 Email : <br/><input type="email" name="email" value="<?php echo $membah->PENGGUNA_EMAIL;?>" >
				 <br/><?php echo form_error('email'); ?><br/>

                 <select name="prive" value="<?php echo $membah->PENGGUNA_PRIV;?>">
                    <option value="Member" selected>Member</option>
                    <option value="Admin">Admin</option>
                 </select>

                 <br/><br/>

                 <input type="hidden" name="id_member" value="<?php echo $membah->PENGGUNA_ID;?>" />

				 <input type="submit" value="Edit" />
			 </form>
		</div>



        <div class="margin_bottom_30"></div>


        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

    
