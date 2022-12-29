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
		$con = mysqli_connect('127.0.0.1','root', '', 'twitter');
		if($con==false){
			echo "не подключено";
		} else {
			echo "подключено";
		}

		$select = "SELECT * FROM news";
		$results = mysqli_query($con, $select)

	?>
	<form action="update.php" method="GET">
		<input type="" name="id" placeholder="id">
		<input type="" name="heading" placeholder="заголовок">
		<input type="" name="text" placeholder="текст">
		<button class="btn btn-success">Редактировать</button>
	</form>
	<?				
		for ($i=0; $i < mysqli_num_rows($results); $i++) { 
			$news = mysqli_fetch_assoc($results);				
	?>	
	<div class="news">
		<h1><? echo $news['heading']; ?></h1>
		<p><? echo $news['text']; ?></p>
	</div>
	<?				
		}			
	?>		
</body>
</html>