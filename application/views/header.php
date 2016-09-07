<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan XYZ</title>
<meta name="keywords" content="Perpustakaan XYZ" />
<meta name="description" content="Perpustakaan XYZ" />
    <link rel="stylesheet" href = "<?php echo base_url(); ?>assets/css/templatemo_style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hehe.js"></script> <!-- Gem jQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
    <script language="javascript" type="text/javascript"></script>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

input[type=text],input[type=email],input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.lol {
    border-radius: 5px;
    padding: 20px;
    font-size : 140%;
}
</style>

</head>
<body>

<div id="templatemo_container">

	<div id="templatemo_banner">

		<div id="logo_head">
			<a href="#"><img src="<?php echo base_url(); ?>assets/images/books.png" height="70" width="70"></a>	
		</div>

		<span style="float:left;margin: 40px 0 0 1em;font-weight:bold;font-size:14px;">
            Selamat Datang                                   <!-- HARUS NY MASUKIN HEADER (DIPISAHIN TRUS D SINERGI SAMA DASHBOARD CONTROLLER) -->
            
            <span style="color:blue;"><?php echo $user['PENGGUNA_NAMA'];?></span> | 
            [ <a style="color:black;font-weight:bold;text-decoration:none;" href='<?php echo base_url('dashboard/logout');?>'>Keluar</a> ] 
        </span>


        <div id="search_section">
            <form action="#" method="get">
                <input type="text" placeholder="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    </div> <!-- end of banner -->