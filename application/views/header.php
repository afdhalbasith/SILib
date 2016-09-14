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
    table-layout: fixed;
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

input[type=text],input[type=email],input[type=password],input[type=tel],textarea, select {
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

ul.tsc_pagination { margin:4px 0; padding:0px; overflow:hidden; font:12px 'Tahoma'; list-style-type:none; }
ul.tsc_pagination li { float:left; margin:0px; padding:0px; margin-left:5px; }

ul.tsc_pagination li a { color:black; display:block; text-decoration:none; padding:7px 10px 7px 10px; }


ul.tsc_paginationA li a { color:#FFFFFF; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; }

ul.tsc_paginationA01 li a { color:#474747; border:solid 1px #B6B6B6; padding:6px 9px 6px 9px; background:#E6E6E6; background:-moz-linear-gradient(top, #FFFFFF 1px, #F3F3F3 1px, #E6E6E6); background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #FFFFFF), color-stop(0.02, #F3F3F3), color-stop(1, #E6E6E6)); }
ul.tsc_paginationA01 li:hover a,
ul.tsc_paginationA01 li.current a { background:#FFFFFF; }

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