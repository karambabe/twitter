<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<?
		//1 аргумент это айпи адрес БД в ковычках!!!
		//2 имя пользователя
		//3 пароль
		//4 имя БД
		$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
		if($connect==false){
			echo "не подключено";
		} else {
			echo "подключено";
		}
		$textQuery = 'SELECT * FROM  tweets';

		$query = mysqli_query($connect, $textQuery);

		if($query==false){
			echo 'запрос не работает';
		} else {
			echo 'запрос работает';
		}


		$select_trends = "SELECT * FROM trends";
		$result_trends = mysqli_query($connect, $select_trends);

		$trend1 = mysqli_fetch_assoc($result_trends);
		$trend2 = mysqli_fetch_assoc($result_trends);
		$trend3 = mysqli_fetch_assoc($result_trends);
		$trend4 = mysqli_fetch_assoc($result_trends);

	?>
</head>
<body class="">												
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> 
				<div class="col-3">
					<div class="mt-3">
						<h4 class="fw-normal">Главная</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Обзор</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Уведомления</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Сообщения</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Закладки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Списки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Профиль</h4>
					</div>
					<div class="mt-4">
						<button class="rounded-pill btn btn-primary w-75 py-2">Твитнуть</button>
					</div>
					
				</div>

				<!-- Средняя колонка -->



				<div class="col-6 border-end border-start">



					<form action="deletetweet.php" method="GET">
						<input type="text" name="id" placeholder="Введите id твита" class="form-control">
						<button class="btn btn-danger mt-2">Удалить</button>
					</form>
					<!--Добавить твит форма-->
					<div class="pt-2 bg-white">						
						<div class="row">							
							<div class="col-1">
								<img src="img/1.jpg" name="ava" class="rounded-circle">
							</div>							
							<div class="col-10">
								<form method="GET" action="insert.php">
								<div class="col-12">
									<input type="text" name="Name1"  class="form-control w-25 form-control" placeholder="Автор">

									<textarea  class="form-control mt-2" placeholder="Что нового?" name="content1" class="w-25 form-control"></textarea>

									<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>
									</form>	
								</div>						
							</div>
						</div>				
							
					</div>

					<?

						for($i=0; $i < 3; $i++){
						$result = $query->fetch_assoc();
						
					?>
					<!--Вывод постов тут-->
					<div class="row">
						<div class="col-2">
							<!--аватарка-->
							<img src="<? echo $result['avatar'] ?>" class="rounded-circle w-100">
						</div>
						<div class="col-10">
							<!--контент-->
							<h5><? echo $result['name'] ?></h5>
							<p><? echo $result['text'] ?></p>
							<video class="w-100" controls="controls">
								<source src="<? echo $result['image'] ?>" type="video/mp4">
							</video>
						</div>
						<form method="GET" action="delete!.php">
							<input hidden value="<? echo $result['id']; ?>" type="text" name="zxc" style="">
							<button class="btn btn-danger mt-2">delete</button>
						</form>

						<div>
							<div  class="sheep" style="display: none">
								<form action="update.php" method="GET">
									<h5>
										<input name="heading" placeholder="name">
									</h5>
									<input name="text" placeholder="text">
									<input name="id" placeholder="id">
									<button class="btn btn-success">изменить</button>
								</form>
							</div>

						<button class="btn button btn-success">редактировать</button>

						</div>



					</div>

					<?
						}
					?>
					
				</div>

					<?

						for($i=0; $i < 5; $i++){
						$result1 = $query->fetch_assoc();
						
					?>
				<!--Правая колонка-->
				<div class="col-3 bg-light"> 
					<h5>Актуальные темы для вас</h5>
					<form method="GET" action="ins.php">
						<div class="col-12">
							<input type="text" name="tem"  class="form-control w-25 form-control" placeholder="тема">

							<textarea  class="form-control mt-2" placeholder="номер" name="numb" class="w-25 form-control"></textarea>
							<?
								}
							?>
							<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>
						</div>
					</form>	
					<div class="col-12">
						<h6><? echo $trend1['title']; ?></h6>
						<p><? echo $trend1['number']; ?></p>
					</div>
					<form method="GET" action="deleteactual.php">
						<input value="<? echo $result['id']; ?>" type="text" name="qwe" style="">
						<button class="btn btn-danger mt-2">delete</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
							
		let button = document.querySelectorAll(".button");
		let sheep = document.querySelectorAll(".sheep")


		for (let i=0; i<button.length; i++) {
			


			button[i].onclick = function() {
			sheep[i].style.display = "block";
		}
		}

	</script>
</body>
</html>