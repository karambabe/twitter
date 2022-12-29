<? 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$select = "SELECT * FROM tweets";

	$insert = "INSERT INTO tweets(name, text, avatar, image) VALUES ('{$_GET['Name1']}', '{$_GET['content1']}', 'img/3.jpg', 'img/2.jpg')";

	$result_insert = mysqli_query($connect, $insert);
	$results = mysqli_query($connect, $select);

	ob_start();
	$new_url = 'index.php';
	header('Location: '.$new_url);
	ob_end_flush();  
?>
