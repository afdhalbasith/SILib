
    
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

            <?php echo form_open('dashboard/tambah_member'); 
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>')?>

				 Nama : <br/><input type="text" name="nama" value="<?php echo set_value('nama'); ?>">
				 <br/><?php echo form_error('nama'); ?><br/>
				 Username : <br/><input type="text" name="username" value="<?php echo set_value('username'); ?>">
				 <br/><?php echo form_error('username'); ?><br/>
				 Password : <br/><input type="password" name="password" value="<?php echo set_value('password'); ?>">
				 <br/><?php echo form_error('password'); ?><br/>
				 Alamat : <br/><textarea rows="3" name="alamat"><?php echo set_value('alamat'); ?></textarea>
				 <br/><?php echo form_error('alamat'); ?><br/>
				 Telpon : <br/><input type="text" name="telpun" value="<?php echo set_value('telpun'); ?>">
				 <br/><?php echo form_error('telpun'); ?><br/>
				 Email : <br/><input type="email" name="email" value="<?php echo set_value('email'); ?>">
				 <br/><?php echo form_error('email'); ?><br/>

				 <input type="submit" value="Tambah" />
			 </form>
		</div>


        <div class="margin_bottom_40"></div>

        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

    
