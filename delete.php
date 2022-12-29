<?php 
	$connect = mysqli_connect('127.0.0.1','root','','news');

	$delete = "DELETE FROM news WHERE id = '{$_GET['id']}'";
	
	$query = mysqli_query($connect, $delete);

	ob_start();
   	$new_url = 'index.php';
   	header('Location: '.$new_url);
   	ob_end_flush();
?>