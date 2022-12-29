<?php 
	$connect = mysqli_connect('127.0.0.1','root','','news');

	$insert = "INSERT INTO news(id, text) VALUES ('{$_GET['id']}', '{$_GET['text']}')";
	
	$query = mysqli_query($connect,$insert);

	ob_start();
   	$new_url = 'index.php';
   	header('Location: '.$new_url);
   	ob_end_flush();
?>