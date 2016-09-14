
    
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
		 	<!-- <form action="<?php echo site_url('atur_buku/tambah_buku');?>" method="POST" onsubmit="return confirm('Do you really want to submit the form?');"> -->
	        <?php echo form_open('atur_buku/tambah_buku'); 
            $this->form_validation->set_error_delimiters('<div style="color:red;">','</div>') ?>

				 Judul : <br/><input type="text" name="judul" value="<?php echo set_value('judul'); ?>">
				 <br/><?php echo form_error('judul'); ?><br/>

                 Kategori : <br/>
                 <select name="kategori">
                  <option value="pleaseSelect" <?php echo set_select('kategori', 'pleaseSelect', TRUE); ?>>------------  Pilih Kategori Buku  ------------</option>
                  <option value="Agama" <?php echo set_select('kategori', 'Agama'); ?>>Agama</option>
                  <option value="Bahasa dan Kamus" <?php echo set_select('kategori', 'Bahasa dan Kamus'); ?>>Bahasa dan Kamus</option>
                  <option value="Biografi" <?php echo set_select('kategori', 'Biografi'); ?>>Biografi</option>
                  <option value="Buku Anak" <?php echo set_select('kategori', 'Buku Anak'); ?>>Buku Anak</option>
                  <option value="Buku Import" <?php echo set_select('kategori', 'Buku Import'); ?>>Buku Import</option>
                  <option value="Buku Sekolah" <?php echo set_select('kategori', 'Buku Sekolah'); ?>>Buku Sekolah</option>
                  <option value="Busana dan Kecantikan" <?php echo set_select('kategori', 'Busana dan Kecantikan'); ?>>Busana dan Kecantikan</option>
                  <option value="Ekonomi dan Manajemen" <?php echo set_select('kategori', 'Ekonomi dan Manajemen'); ?>>Ekonomi dan Manajemen</option>
                  <option value="Hobi dan Usaha" <?php echo set_select('kategori', 'Hobi dan Usaha'); ?>>Hobi dan Usaha</option>
                  <option value="Kesehatan dan Lingkungan" <?php echo set_select('kategori', 'Kesehatan dan Lingkungan'); ?>>Kesehatan dan Lingkungan</option>
                  <option value="Komputer dan Internet" <?php echo set_select('kategori', 'Komputer dan Internet'); ?>>Komputer dan Internet</option>
                  <option value="Majalah" <?php echo set_select('kategori', 'Majalah'); ?>>Majalah</option>
                  <option value="Masakan dan Makanan" <?php echo set_select('kategori', 'Masakan dan Makanan'); ?>>Masakan dan Makanan</option>
                  <option value="Novel" <?php echo set_select('kategori', 'Novel'); ?>>Novel</option>
                  <option value="Psikologi" <?php echo set_select('kategori', 'Psikologi'); ?>>Psikologi</option>
                  <option value="Remaja" <?php echo set_select('kategori', 'Remaja'); ?>>Remaja</option>
                  <option value="Sejarah dan Budaya" <?php echo set_select('kategori', 'Sejarah dan Budaya'); ?>>Sejarah dan Budaya</option>
                  <option value="Teknik" <?php echo set_select('kategori', 'Teknik'); ?>>Teknik</option>
                </select>
                <br/><?php echo form_error('kategori') ?><br/>


				 Pengarang : <br/><input type="text" name="pengarang" value="<?php echo set_value('pengarang'); ?>">
				 <br/><?php echo form_error('pengarang') ?><br/>
				 Tahun Terbit : <br/><input type="text" name="tahunterbit" value="<?php echo set_value('tahunterbit'); ?>">
				 <br/><?php echo form_error('tahunterbit') ?><br/>
				 Sinopsis : <br/><textarea rows="4" style="width:100%;" name="sinopsis"><?php echo set_value('sinopsis'); ?></textarea>
				 <br/><?php echo form_error('sinopsis') ?><br/>
				 Status : <br/>
                 <select name="status">
                    <option value="pleaseSelect" <?php echo set_select('status', 'pleaseSelect', TRUE); ?>>------------  Pilih Status Buku  ------------</option>
                    <option value="Available" <?php echo set_select('status', 'Available'); ?>>Available</option>
                    <option value="UnAvailable" <?php echo set_select('status', 'UnAvailable'); ?>>UnAvailable</option>
                 </select>
                 <br/><?php echo form_error('status') ?><br/>


				 <input type="submit" value="Tambah" />
			 </form>
		</div>


        <div class="margin_bottom_40"></div>

        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

