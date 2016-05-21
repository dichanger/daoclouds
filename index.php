<?php
	$str = $_SERVER['HTTP_HOST'];
	$str2 = $_SERVER["REQUEST_URI"]; 	
	$p = "/^(.*)/i";
	$r = "/di$1";
	$str3 = preg_replace($p,$r,$str2);
	
	echo "<script>window.location.href=\"$str3\"</script>";
    
