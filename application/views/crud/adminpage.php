
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="<?php echo site_url('dashboard');?>" class="current">Member</a></li>
            <li><a href="<?php echo site_url('atur_buku');?>">Buku</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="<?php echo site_url('dashboard/info'); ?>">Info</a></li>
            <li><a href="<?php echo site_url('dashboard/news'); ?>">News</a></li>
        </ul>    	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">Alter member</div>
        <div class="margin_bottom_50"></div>

        <div style="text-align:left;font-weight:bold;"><a style="text-decoration: none;color:#009ACD;font-size:160%;" href="<?php echo site_url('dashboard/to_tambah_member');?>">TAMBAH MEMBER</a></div>
        <br><br/>
        
        <table border="1";>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telfun</th>
			<th>Email</th>
			<th>Action</th>
		</tr>

            <?php 
            $no = 1; 
            foreach($daftar_member as $u){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $u->PENGGUNA_NAMA; ?></td>
                <td><?php echo $u->PENGGUNA_ALAMAT; ?></td>
                <td><?php echo $u->PENGGUNA_TELP; ?></td>
                <td><?php echo $u->PENGGUNA_EMAIL;?></td>
                <td>
                  
                  <div style="text-align:center;font-weight:bold;">
                      <a style="text-decoration: none;color:green;" href="<?php echo site_url('dashboard/to_edit_member/'.$u->PENGGUNA_ID);?>">Edit</a> |
                      <a style="text-decoration: none;color:red;" href="<?php echo site_url('dashboard/to_hapus_member/'.$u->PENGGUNA_ID);?>">Delete</a>
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

 