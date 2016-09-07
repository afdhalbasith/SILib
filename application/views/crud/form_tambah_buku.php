
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="<?php echo site_url('dashboard')?>">Member</a></li>
            <li><a href="<?php echo site_url('atur_buku')?>" class="current">Buku</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?php echo site_url('dashboard/info'); ?>">Info</a></li>
            <li><a href="<?php echo site_url('dashboard/news'); ?>">News</a></li>
        </ul>    	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">tambah buku</div>
        <div class="margin_bottom_30"></div>

        <div class="lol">
		 	<form action="<?php echo site_url('atur_buku/tambah_buku');?>" method="POST" onsubmit="return confirm('Do you really want to submit the form?');">
	
				 Judul : <br/><input type="text" name="judul" >
				 <br/><br/>
				 Kategori : <br/><input type="text" name="kategori" >
				 <br/><br/>
				 Pengarang : <br/><input type="text" name="pengarang" >
				 <br/><br/>
				 Tahun Terbit : <br/><input type="text" name="tahunterbit" >
				 <br/><br/>
				 Sinopsis : <br/><input type="text" name="sinopsis" >
				 <br/><br/>
				 Status : <br/>
				 
                 <select name="status">
                    <option value="Available" selected>Available</option>
                    <option value="UnAvailable">UnAvailable</option>
                 </select>
                 <br/><br/>


				 <input type="submit" value="Tambah" />
			 </form>
		</div>


        <div class="margin_bottom_40"></div>

        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

