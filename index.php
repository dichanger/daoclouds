<?php
	$str = $_SERVER['HTTP_HOST'];
	$str2 = $_SERVER["REQUEST_URI"]; 	
	$str3 = $str.'/di'.$str2;
	echo "<script>window.location.href=\"$str3\"</script>";
