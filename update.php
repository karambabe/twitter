<?

	$con = mysqli_connect('127.0.0.1','root', '', 'twitter');

	$select = "UPDATE tweets SET name = '{$_GET['heading']}', text = '{$_GET['text']}' WHERE id = '{$_GET['id']}'";
	$results = mysqli_query($con, $select);



	ob_start();
	$new_url = 'index.php';
	header('Location: '.$new_url);
	ob_end_flush();  

?>