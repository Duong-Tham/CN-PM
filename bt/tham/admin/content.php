<?php
	if(isset($_GET['act']))
	{	
		if($_GET['act']=="dn")
			include ('admin/dnhap.php');
		if($_GET['act']=="dk")
			include ('dky.php');
		if($_GET['act']=="tong")
			include ('admin/tong.php');
	}
	if(isset($_GET['vitri']))
	{
		if($_GET['vitri']=="f")
			include ('admin/all.php');
		else if($_GET['vitri']=="m")
			include ('admin/muanhieu.php');
		else if($_GET['vitri']=="c")
			include ('admin/cao.php');
		else 
			include ('admin/moive.php');
	}
?>