<?php
 $names = $_GET['sta_a'];
session_start();
		$_SESSION['View'] =$names;
		header('location:estate-property.php');


// if (!isset($names)) {
// 	header('location:index.php');
// 	}else
// 	{
		
// 	}
	?>