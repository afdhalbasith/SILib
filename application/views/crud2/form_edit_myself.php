
    
   <!-- ===============================================-->


	<div id="templatemo_menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Peminjaman</a></li>
            <li><a href="#">Pengembalian</a></li>
            <li><a class="current" href="<?php echo site_url('dashboard/to_edit_myself/'.$user['PENGGUNA_ID']); ?>">My Account</a></li>
        </ul> 
           	


    </div> <!-- end of menu -->


    <!-- ===============================================-->
    
    <div id="templatemo_content_top">
    	
    <!-- ================================================FILL THE CONTENT HERE ================================================-->

        <div class="margin_bottom_40"></div>
        <div class="fontz" style="font-size: 30px;">my account</div>
        <div class="margin_bottom_30"></div>

        <div class="lol">
		 	<form action="<?php echo site_url('dashboard/edit_myself');?>" method="POST" >
	
				 Nama : <br/><input type="text" name="nama" value="<?php echo $membah->PENGGUNA_NAMA;?>" >
				 <br/><br/>
				 Username : <br/><input type="text" disabled name="username" value="<?php echo $membah->PENGGUNA_USERNAME;?>" >
				 <br/><br/>
				 Password Lama : <br/><input type="text" name="password" value="<?php echo $membah->PENGGUNA_PASS;?>" >
				 <br/><br/>
                 Password Baru : <br/><input type="password" name="passwordbaru" placeholder="kosongkan jika tidak ada perubahan password" >
                 <br/><br/>
                 Re-type Password Baru : <br/><input type="password" name="passwordbaru2" placeholder="kosongkan jika tidak ada perubahan password" >
                 <br/><br/>
				 Alamat : <br/><input type="text" name="alamat" value="<?php echo $membah->PENGGUNA_ALAMAT;?>">
				 <br/><br/>
				 Telpon : <br/><input type="text" name="telpun" value="<?php echo $membah->PENGGUNA_TELP;?>">
				 <br/><br/>
				 Email : <br/><input type="email" name="email" value="<?php echo $membah->PENGGUNA_EMAIL;?>" >
				 <br/><br/>

                 <input type="hidden" name="id_member" value="<?php echo $membah->PENGGUNA_ID;?>" />

				 <input type="submit" value="Simpan Perubahan" />
			 </form>
		</div>



        <div class="margin_bottom_30"></div>


        <div class="cleaner"></div>
    </div> <!-- end of content top -->

    <!-- ===============================================-->

    
