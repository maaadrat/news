<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "news");

	$update = "UPDATE news SET (title = '{$_GET["title"]}' text ='{$_GET["text"]}' goal = '{$_GET["goal"]}' WHERE id = '{$_GET["id"]}'";

	$query = mysqli_query($connect, $update);
?>