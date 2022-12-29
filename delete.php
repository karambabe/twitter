<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	if($connect== false) {
		echo "disconnect";
	} else{
		echo "connect";
	}

	$delete = 'DELETE FROM contacts WHERE id = "9"';
	$without_mom = mysqli_query($connect, $delete);

?>