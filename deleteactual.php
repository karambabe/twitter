<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	if($connect == false) {
		echo "disconnect";
	} else{
		echo "connect";
	}

	$delete = "DELETE FROM trends WHERE id = {$_GET['qwe']}";

	$asd = mysqli_query($connect, $delete);

	ob_start();
	$new_url = 'index.php';
	header('Location: '.$new_url);
	ob_end_flush();  
?>