<?php
	$str = $_SERVER['HTTP_HOST'];
	$str2 = $_SERVER["REQUEST_URI"]; 	
	$str3 = 'http://'.$str.'/di'.$str2;
	if($str2 == 'index.php'){	
		echo "<script>window.location.href=\"$str3\"</script>";
    }