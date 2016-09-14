
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="<?php echo site_url('dashboard');?>">Member</a></li>
            <li><a href="<?php echo site_url('atur_buku');?>" class="current">Buku</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?php echo site_url('dashboard/info'); ?>">Info</a></li>
            <li><a href="<?php echo site_url('dashboard/news'); ?>">News</a></li>
        </ul>    	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">Alter Buku</div>
        <div class="margin_bottom_50"></div>

        <div style="text-align:left;font-weight:bold;margin-left:1em;"><a style="text-decoration: none;color:#009ACD;font-size:120%;" href="<?php echo site_url('dashboard/to_tambah_member');?>">
        <img src="<?php echo base_url(); ?>assets/images/add_book.png" height="50" width="50"><br/><P>TAMBAH</P><P>BUKU</P></a></div>
        <br>
        <div><?php echo $this->pagination->create_links(); ?></div>
        <br/>
        
        <table border="1";>
        <col style="width:3em"><col style="width:25%"><col style="width:20%"><col style="width:15%"><col style="width:5em"><col style="width:7em">


		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Tahun Terbit</th>
            <th>Status</th>
			<th>Action</th>
		</tr>

            <?php 
            $no = 1; 
            foreach($daftar_buku as $u){
            ?>
            <tr>
                <td><?php echo ($currentPage + $no++); ?></td>
                <td><?php echo $u->BUKU_JUDUL; ?></td>
                <td><?php echo $u->BUKU_KATE; ?></td>
                <td><?php echo $u->BUKU_PENGARANG; ?></td>
                <td><?php echo $u->BUKU_TAHUNTERBIT;?></td>
                <td><?php echo $u->BUKU_STATUS;?></td>
                <td>
                  
                  <div style="text-align:center;font-weight:bold;">
                      <a style="text-decoration: none;color:green;" href="<?php echo site_url('atur_buku/to_edit_buku/'.$u->BUKU_ID);?>">
                      <img src="<?php echo base_url(); ?>assets/images/edit.png" height="20" width="20"></a>  
                      <a style="text-decoration: none;color:red;" href="<?php echo site_url('atur_buku/to_hapus_buku/'.$u->BUKU_ID);?>">
                      <img src="<?php echo base_url(); ?>assets/images/delete.png" height="15" width="15"></a>
                      <?php //echo anchor('dashboard/to_edit_member/'.$u->PENGGUNA_ID,'Edit'); ?>
                      <?php //echo anchor('dashboard/to_hapus_member/'.$u->PENGGUNA_ID,'Hapus'); ?>
                  </div>
                
                </td>
                
            </tr>
            <?php } ?>
		</table>
    
       <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->
