<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.news {
			border: solid 1px; 
			height: 200px; 
			width: 800px;
			margin-top: 10px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "news");
		$select = "SELECT * FROM news";
		$result = mysqli_query($connect, $select);	
	?>
	<form action="create.php" method="GET">
		<input type="" name="id" placeholder="ID">
		<input type="" name="text" placeholder="Текст">
		<button class="btn btn-success">Добавить</button>
	</form>
	<?		
		for ($i=0; $i < $result->num_rows; $i++) { 
			$news = $result->fetch_assoc();			
	?>	
	<div class="news">
		<h1>Новость <? echo $news['id']; ?></h1>
		<p><? echo $news['text']; ?></p>
		<form action="delete.php" method="GET">
			<input type="" name="id" value='<? echo $news['id']; ?>' hidden>
			<button class="btn btn-danger">Удалить</button>
		</form>
		<button class='change btn btn-primary'>Изменить</button>
		<form action="update.php" method="GET" class='form' style='display: none'>
			<input type="" name="id" placeholder="id" value='<? echo $news['id']; ?>' hidden>
			<input type="" name="text" value='<? echo $news['text']; ?>'>
			<button class="btn btn-danger">Изменить</button>
		</form>
	</div>
	<?php
		}
	?>	
</body>
<script>
	let buttons = document.querySelectorAll('.change')
	let f = document.querySelector('.form')

	for (let i = 0; i < buttons.lenght; i++) {
		buttons[i].onclick = function () {
			buttons[i].style.display = 'none';
			f.style.display = 'block';
		}
	}
</script>
</html>