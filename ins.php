<? 
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$select = "SELECT * FROM trends";

	$insert = "INSERT INTO trends(title, number) VALUES ('{$_GET['tem']}', '{$_GET['numb']}')";

	$result_insert = mysqli_query($connect, $insert);
	$results = mysqli_query($connect, $select);

	ob_start();
	$new_url = 'index.php';
	header('Location: '.$new_url);
	ob_end_flush();  
?>
